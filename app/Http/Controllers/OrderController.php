<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;  
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Design;
use App\DesignSide;
use App\Category;
use App\SubCategory;
use App\Cart;
use App\ShoppingCart;
use App\Size;
use App\Store;
use App\Notification;
use App\Order;
use App\UserSavedCard;
use App\DesignSize;
use App\Product;
use App\TaxCharge;
use App\ShippingMethod;
use App\PromoCode;
use App\OrderDetail;
use App\OrderSeller;
use DB;
use Stripe;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->user = JWTAuth::user();
    }

    public function addItemsToCart(Request $request){
        $post = $request->only('product_id', 'size_id', 'design_id', 'quantity', 'price_per_item','store_id');

        $validator = Validator::make($post, [
            'product_id' => 'required|int|min:1',
            'size_id' => 'required|int|min:1',
            'design_id' => 'required|int|min:1',
            'quantity' => 'required|int|min:1',
            'price_per_item' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all())
            ],Response::HTTP_OK);
        }

        $user = $this->user;
        $user_id = $user['id'];

        $chkCart = Cart::where('user_id',$user_id)->get();

        // if(count($chkCart) > 0){
        //     foreach ($chkCart as $value) {
        //         $value['seller_id'] = !empty($value['seller_id'])?$value['seller_id']:'1';
        //         if($value['seller_id'] != $request->store_id){
        //             return response()->json([
        //                 'success' => false,
        //                 'message' => "You can't Add Designs from the Multiple Store's."
        //             ]);
        //             break;
        //         }
        //     }
        // }
        $request->store_id = !empty($request->store_id)?$request->store_id:'6';
        $cart = new Cart();
        $cart->user_id = $user_id;
        $cart->product_id = $request->product_id;
        $cart->size_id = $request->size_id;
        $cart->design_id = $request->design_id;
        $cart->quantity = $request->quantity;
        $cart->price_per_item = $request->price_per_item;
        $cart->seller_id = $request->store_id;

        $insert = $cart->save();

        if($insert){
            return response()->json([
                'success' => true,
                'message' => 'Product Saved in Cart Successfully'
            ]);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Error in Save Products in Cart'
            ]);
        }
    }

    public function addDeliveryInfo(Request $request){
        $post = $request->only('order_id', 'billing_street', 'billing_city', 'billing_state', 'billing_zip', 'billing_apartment', 'billing_country', 'shipping_street', 'shipping_city', 'shipping_state', 'shipping_zip','shipping_apartment','shipping_country');

        $validator = Validator::make($post, [
            'order_id' => 'required|int|min:1',            
            'billing_street' => 'required|string',
            'billing_city' => 'required|string',
            'billing_state' => 'required|string',
            'billing_zip' => 'required|string',
            'billing_apartment' => 'required|string',
            'billing_country' => 'required|string',
            'shipping_street' => 'required|string',
            'shipping_city' => 'required|string',
            'shipping_state' => 'required|string',
            'shipping_zip' => 'required|string',
            'shipping_apartment' => 'required|string',
            'shipping_country' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all())
            ],Response::HTTP_OK);
        }

        $user = $this->user;
        $user_id = $user['id'];

        $order_info = new OrderDetail;
        $order_info->order_id = $request->order_id;
        $order_info->billing_street = $request->billing_street;
        $order_info->billing_city = $request->billing_city;
        $order_info->billing_state = $request->billing_state;
        $order_info->billing_zip = $request->billing_zip;
        $order_info->billing_apartment = $request->billing_apartment;
        $order_info->billing_country = $request->billing_country;
        $order_info->shipping_street = $request->shipping_street;
        $order_info->shipping_city = $request->shipping_city;
        $order_info->shipping_state = $request->shipping_state;
        $order_info->shipping_zip = $request->shipping_zip;
        $order_info->shipping_apartment = $request->shipping_apartment;
        $order_info->shipping_country = $request->shipping_country;

        $update = $order_info->update();

        if($update){
            return response()->json([
                'success' => true,
                'message' => 'Delivery Details Saved Successfully.'
            ]);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Error in Save Delivery Details.'
            ]);
        }
    }   

    public function addOrders(Request $request){
        $post = $request->only('subtotal', 'discount', 'shipping_id', 'shipping_cost', 'tax', 'total', 'ship_by', 'promocode_id', 'shipping_type', 'txn_id', 'receipt_url','payment_status','billing_street', 'billing_city', 'billing_state', 'billing_zip', 'billing_apartment', 'billing_country', 'billing_contact', 'shipping_street', 'shipping_city', 'shipping_state', 'shipping_zip','shipping_apartment','shipping_country','shipping_contact');

        $validator = Validator::make($post, [
            'subtotal' => 'required|min:1',
            'total' => 'required|min:1',
            //'ship_by' => 'required', 
            'shipping_type' => 'required|string',
            'txn_id' => 'required|min:1',
            'payment_status' => 'required|string',
            'billing_street' => 'required|string',
            'billing_city' => 'required|string',
            'billing_state' => 'required|string',
            'billing_zip' => 'required|string',
            'billing_apartment' => 'required|string',
            'billing_country' => 'required|string',
            'shipping_street' => 'required|string',
            'shipping_city' => 'required|string',
            'shipping_state' => 'required|string',
            'shipping_zip' => 'required|string',
            'shipping_apartment' => 'required|string',
            'shipping_country' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all())
            ],Response::HTTP_OK);
        }

        $user = $this->user;
        $user_id = $user['id'];

        $cartItems = Cart::with('sizes')->where('user_id', $user_id)->get();

        if(count($cartItems) > 0){
            $order_consecutive  = DB::table('consecutive')->where('name','order')->first();

            // foreach ($cartItems as $key => $value) {
            //     $design_id = $value['design_id'];
            //     $design = Design::where('id',$design_id);

            //     if($design['save_type'] == 'publish'){
            //         $seller_id = $design['user_id'];
            //     }
            //     else{
            //         $seller_id = 1;
            //     }

            //     $cartItems[$key]['seller_id'] = $seller_id;
            // }

            $order = new Order();
            $order->order_number =  sprintf("%'.06d", $order_consecutive->quantity);
            $order->subtotal = $request->subtotal;
            $order->discount= $request->discount;
            $order->shipping_cost = $request->shipping_cost;
            $order->tax = $request->tax;
            $order->total = $request->total;
            $order->shippingType = $request->shipping_type;
            $order->status = 'CREATED';
            $order->tracking_number = null;
            $order->carrier = null;
            $order->service = null;
            $order->customer_id = $user_id;
            $order->user_id = !empty($request->store_id)?$request->store_id:'1';
            $order->promocode_id = $request->promocode_id;
            $order->shipping_id = $request->shipping_id;
            $order->txn_id = $request->txn_id;
            $order->currency = 'USD';
            $order->receipt_url = $request->receipt_url;
            $order->payment_status = $request->payment_status;
            $insert_order = $order->save();
            $update_order_consecutive = DB::table('consecutive')->where('name','order')->update(['quantity' => ($order_consecutive->quantity+1)]);
            $items = 0;
            foreach($cartItems as $item)
            {
                //$order->designs()->attach($item['design_id']);
                $order_design = array(
                    'order_id' => $order->id,
                    'design_id' => $item['design_id'],
                    'size_id' => $item['size_id'],
                    'quantity' => $item['quantity']
                );

                DB::table('orders_designs')->insert($order_design);

                $design = Design::where('id',$item['design_id'])->first();
                $num_shirts = 0;
                // foreach($item['sizes'] as $sizeitem)
                // {
                //     $size= Size::where('name',$sizeitem['name'])->first();
                //     $design->sizes()->save($size,['quantity' => $item['quantity'], 'price' => $item['price'], 'ammount' => ($sizeitem['quantity']*$sizeitem['price'])]);
                //     $num_shirts += $sizeitem['quantity'];
                // }

                $designSize = new DesignSize();
                $designSize->quantity = $item['quantity'];
                $designSize->price = $item['price_per_item'];
                $designSize->ammount = $item['price_per_item'] * $item['quantity'];
                $designSize->design_id = $item['design_id'];
                $designSize->size_id = $item['size_id'];
                $designSize->order_id = $order->id;
                $designSize->save();


                $chk = OrderSeller::where('order_id',$order->id)->where('store_id',$item['seller_id'])->first();

                if(empty($chk)){
                    $store_order = new OrderSeller;
                    $store_order->order_id = $order->id;
                    $store_order->store_id = $item['seller_id'];
                    $store_order->save();

                    $seller = Store::where('id',$item['seller_id'])->first(); 

                    $device_token = !empty($seller->user->device_token)?$seller->user->device_token:'';

                    $seller_data = array(
                        'token' => array($device_token),
                        'data' => array(
                            'title' => 'Order Received',
                            'body' => 'You Received a new Order'
                        )
                    );

                    if(!empty($device_token))
                    {
                        if($seller->user->notification_status != '0')
                        {
                            $seller_result = $this->sendNotification($seller_data);
                        }
                    }

                    $notification = new Notification;
                    $notification->user_id = $seller->user_id;
                    $notification->title = $seller_data['data']['title'];
                    $notification->message = $seller_data['data']['body'];
                    $notification->is_read = '0';
                    $notification->user_role = '3';
                    $notification->save();
                }
                
                $num_shirts += $item['quantity'];

                $design->number_shirts = $num_shirts;
                $design->is_purchased = '1';
                $design->update();
                $items += $design->number_shirts;
            }
            $order->items = $items;
            $order->update();

            $user_device_token = !empty($user->device_token)?$user->device_token:'';

            $user_data = array(
                'token' => array($user_device_token),
                'data' => array(
                    'title' => 'Order Placed',
                    'body' => 'Your Order has been Placed Successfully'
                )
            );

            if($user->notification_status != '0')
            {
                if(!empty($user_device_token))
                {
                    $user_result = $this->sendNotification($user_data);
                }
            }

            $notification = new Notification;
            $notification->user_id = $user_id;
            $notification->title = $user_data['data']['title'];
            $notification->message = $user_data['data']['body'];
            $notification->is_read = '0';
            $notification->user_role = '2';
            $notification->save();

            $cart_consecutive  = DB::table('consecutive')->where('name','shoppingcart')->first();

            $cart = new ShoppingCart();
            $cart->user_id = $user_id;
            $cart->shop_number = sprintf("%'.09d", $cart_consecutive->quantity);
            $cart->subtotal = $request->subtotal;
            $cart->discount = $request->discount;
            $cart->shipping_cost = $request->shipping_cost;
            $cart->tax = $request->tax;
            $cart->total = $request->total;
            $cart->shipby = $request->ship_by;
            $cart->status = 'Completed';
            $cart->promocode_id = $request->promocode_id;
            $cart->shippingType = $request->shipping_type;
            $cart->isexpedited = 1;
            $insert = $cart->save();

            if($insert) {
                $order_info = new OrderDetail;
                $order_info->user_id = $user_id;
                $order_info->order_id = $order->id;
                $order_info->billing_street = $request->billing_street;
                $order_info->billing_city = $request->billing_city;
                $order_info->billing_state = $request->billing_state;
                $order_info->billing_zip = $request->billing_zip;
                $order_info->billing_apartment = $request->billing_apartment;
                $order_info->billing_country = $request->billing_country;
                $order_info->billing_contact = !empty($request->billing_contact)?$request->billing_contact:'';
                $order_info->shipping_street = $request->shipping_street;
                $order_info->shipping_city = $request->shipping_city;
                $order_info->shipping_state = $request->shipping_state;
                $order_info->shipping_zip = $request->shipping_zip;
                $order_info->shipping_apartment = $request->shipping_apartment;
                $order_info->shipping_country = $request->shipping_country;
                $order_info->shipping_contact = !empty($request->shipping_contact)?$request->shipping_contact:'';
                $order_info->save();

                $update_count = DB::table('consecutive')->where('name','shoppingcart')->update(['quantity' => ($cart_consecutive->quantity+1)]);
                $info = array(
                    'order' => $order,
                    'cartItems' => $cartItems,
                    'shippingCart' => $cart,
                    'user' => $user
                );
                $fp = fopen(public_path().'/shoppingcart/'. $cart->shop_number.'.json', 'w');
                fwrite($fp, json_encode($info));
                fclose($fp);
                $deleteCart = Cart::where('user_id',$user_id)->delete();
                if($deleteCart){

                    if(!empty($request->promocode_id)){
                        $promoCode = PromoCode::where('id',$request->promocode_id)->first();
                        if(!empty($promoCode)){
                            if(!empty($promoCode['limitpercoupon'])){
                                $update_promocode = DB::table('promo_codes')->where('id',$request->promocode_id)->update(['pending_couponlimit' => ($promoCode->pending_couponlimit-1)]);
                            }
                        }
                    }

                    return response()->json([
                        'success' => true,
                        'message' => 'Order Placed Successfully.'
                    ]);
                }
                else{
                    return response()->json([
                        'success' => false,
                        'message' => 'Order Placed Successfully. But Error in Remove Items from Cart.'
                    ]);
                }
            }
            else{
                return response()->json([
                    'success' => false,
                    'message' => 'Error in Save Order Details.'
                ]);
            }
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Empty Cart. Add Product First to place Order.'
            ]);
        }
    }

    public function cartInfo(Request $request){
        $post = $request->only('subtotal', 'discount', 'shipping_cost', 'tax', 'total', 'ship_by', 'promocode_id', 'shipping_type');

        $validator = Validator::make($post, [
            'subtotal' => 'required|min:1',
            'total' => 'required|min:1',
            'ship_by' => 'required',
            'shipping_type' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all())
            ],Response::HTTP_OK);
        }

        $user = $this->user;
        $user_id = $user['id'];

        $consecutive  = DB::table('consecutive')->where('name','shoppingcart')->first();

        $cart = new ShoppingCart();
        $cart->shop_number = sprintf("%'.09d", $consecutive->quantity);
        $cart->subtotal = $post->subtotal;
        $cart->discount = !empty($post->discount)?$post->discount:'0.00';
        $cart->shipping_cost = !empty($post->shipping_cost)?$post->shipping_cost:'0.00';
        $cart->tax = !empty($post->tax)?$post->tax:'0.00';
        $cart->total = $post->total;
        $cart->shipby = $post->ship_by;
        $cart->status = 'Created';
        $cart->promocode_id = !empty($post->promocode_id)?$post->promocode_id:'NULL';
        $cart->shippingType = $post->shipping_type;
        $cart->isexpedited = 1;

        $insert = $cart->save();

        if($insert){
            $update_count = DB::table('consecutive')->where('name','shoppingcart')->update(['quantity' => ($consecutive->quantity+1)]);
            
            return response()->json([
                'success' => true,
                'message' => 'Order Details Saved in Cart Successfully'
            ]);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Error in Save Order Details in Cart'
            ]);
        }
    }

    public function stripePost(Request $request){
        $post = $request->only('amount', 'stripeToken', 'is_save_card', 'card_holder_name', 'card_number', 'card_expires_at');


        $validator = Validator::make($post, [
            'amount' => 'required|min:1',
            'stripeToken' => 'required|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all())
            ],Response::HTTP_OK);
        }

        $amount = $post['amount'];
        $stripeToken = $post['stripeToken'];
        $is_save_card = $post['is_save_card'];
        $card_holder_name = $post['card_holder_name'];
        $card_number = $post['card_number'];
        $card_expires_at = $post['card_expires_at'];

        $user = $this->user;
        $user_id = $user['id'];

        if($is_save_card == 'true'){
            $validations = Validator::make($post, [
                'card_holder_name' => 'required|string',
                'card_number' => 'required|int|min:1',
                'card_expires_at' => 'required'
            ]);

            if ($validations->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => implode(', ',$validations->messages()->all())
                ],Response::HTTP_OK);
            }

            $card = UserSavedCard::where('card_number',$card_number)->where('expires_at', $card_expires_at)->where('user_id',$user_id)->first();

            if(empty($card)){
                $save_card = new UserSavedCard();

                $save_card->user_id = $user_id;
                $save_card->card_holder_name = $card_holder_name;
                $save_card->card_number = $card_number;
                $save_card->expires_at = $card_expires_at;

                $insert = $save_card->save();
            }
        }

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        try{
            $charge = Stripe\Charge::create ([
                "amount" =>  $amount * 100,
                "currency" => "usd",
                "source" => $stripeToken,
                "description" => "Vivid Customs Stripe Payments"
            ]);
      
            if($charge['status'] == "succeeded"){
                $data['status'] = $charge['status'];
                $data['transaction_id'] = $charge['balance_transaction'];
                $data['amount'] = $charge['amount']/100;
                $data['currency'] = $charge['currency'];
                $data['funding'] = $charge['source']['funding'];
                $data['brand'] = $charge['source']['brand'];
                $data['receipt_url'] = $charge['receipt_url'];

                return response()->json([
                    'status' => true,
                    'message' => 'Payment Completed Successfully...!!!',
                    'data' => $data
                ]);
            }
            else{
                return response()->json([
                    'status' => false,
                    'message' => 'Transaction Error',
                    'data' => array()
                ]);
            }
        } 
        catch(\Stripe\Exception\ApiErrorException $e) 
        {
            $errors = [
                "status" => $e->getHttpStatus(),
                "type" => $e->getError()->type,
                "code" => $e->getError()->code,
                "param" => $e->getError()->param,
                "message" => $e->getError()->message,
            ];         
            http_response_code($e->getHttpStatus());
            
            return response()->json([
                'status' => false,
                'message' => $errors['message'],
                'data' => array()
            ]);
        } 
    }

    public function showCart_new(){
        $user = $this->user;
        $user_id = $user['id'];

        $data = array();
        $result = array();

        if(!empty($user_id)){
            $getCartInfo = Cart::with('size','designs','design_sides','product')->where('user_id',$user_id)->get();
            echo json_encode($getCartInfo);die;

            if(count($getCartInfo) > 0) {
                $sellers = Cart::select('seller_id')->groupBy('seller_id')->where('user_id',$user_id)->get()->toArray();
                $ids = $this->unique_ids($sellers,'seller_id');

                $count = count($ids);
                $j = 1;
                $array = array();

                for ($i=0; $i < $count; $i++) { 
                    $array['id'] = $j;
                    $array['name'] = 'Shipment #'.$j;

                    foreach ($getCartInfo as $key => $cart) {
                        if($cart['seller_id'] == $ids[$i]) {
                            $cart['size_name'] = $cart['size']['name'];
                            $cart['product_name'] = $cart['product']['name'];
                            $cart['design_side_id'] = $cart['design_sides'][0]['id'];
                            $cart['design_side'] = $cart['design_sides'][0]['side'];
                            $cart['design_product_image'] = $cart['design_sides'][0]['design_product_image'];

                            unset($getCartInfo[$key]['size']);
                            unset($getCartInfo[$key]['design_sides']);
                            unset($getCartInfo[$key]['designs']);
                            unset($getCartInfo[$key]['product']);

                            $result[] = $cart;
                        }
                    }

                    $total = array_sum(array_column($result, 'price_per_item'));
                    $array['total'] = strval(round($total,2));
                    $array['data'] = $result;
                    $result = array();
                    $j++;

                    array_push($data, $array);
                }

                return response()->json([
                    'success' => true,
                    'message' => 'User Cart Info',
                    'data' => $data
                ]);
            }
            else{
                return response()->json([
                    'success' => true,
                    'message' => 'Empty User Cart',
                    'data' => array()
                ]);
            }
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Invalid User Id',
                'data' => array()
            ]);
        }
    }

    public function showCart(){
        $user = $this->user;
        $user_id = $user['id'];

        if(!empty($user_id)){
            $getCartInfo = Cart::with('size','designs','design_sides','product')->where('user_id',$user_id)->get();

            // echo json_encode(var_dump(count($getCartInfo)));
            // echo json_encode($getCartInfo);die;

            if(count($getCartInfo) == 0){
                return response()->json([
                    'success' => true,
                    'message' => 'Empty User Cart',
                    'data' => array()
                ]);
            }

            foreach($getCartInfo as $key => $cart){
                $cart['size_name'] = $cart['size']['name'];
                $cart['product_name'] = $cart['product']['name'];
                $cart['design_side_id'] = $cart['design_sides'][0]['id'];
                $cart['design_side'] = $cart['design_sides'][0]['side'];
                $cart['design_product_image'] = $cart['design_sides'][0]['design_product_image'];
                $cart['design_thumb_image'] = $cart['design_sides'][0]['design_thumb_img'];

                unset($getCartInfo[$key]['size']);
                unset($getCartInfo[$key]['design_sides']);
                unset($getCartInfo[$key]['designs']);
                unset($getCartInfo[$key]['product']);
            }

            return response()->json([
                'success' => true,
                'message' => 'User Cart Info',
                'data' => $getCartInfo
            ]);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Invalid User Id',
                'data' => array()
            ]);
        }
    }

    public function updateCartQuantity(Request $request){
        $post = $request->only('cart_id','quantity');

        $validator = Validator::make($post, [
            'cart_id' => 'required|int|min:1',
            'quantity' => 'required|int|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all())
            ],Response::HTTP_OK);
        }

        $user = $this->user;
        $user_id = $user['id'];

        $cart = Cart::where('id',$post['cart_id'])->where('user_id',$user_id)->first();

        $cart->quantity = $post['quantity'];

        $update = $cart->update();

        if($update){

            $getCartInfo = Cart::with('size','designs','design_sides','product')->where('user_id',$user_id)->get();

            foreach($getCartInfo as $key => $cart){
                $cart['size_name'] = $cart['size']['name'];
                $cart['design_side_id'] = $cart['design_sides'][0]['id'];
                $cart['design_side'] = $cart['design_sides'][0]['side'];
                $cart['design_product_image'] = $cart['design_sides'][0]['design_product_image'];
                $cart['product_name'] = $cart['product']['name'];
                $cart['design_thumb_image'] = $cart['design_sides'][0]['design_thumb_img'];

                unset($getCartInfo[$key]['size']);
                unset($getCartInfo[$key]['design_sides']);
                unset($getCartInfo[$key]['designs']);
                unset($getCartInfo[$key]['product']);
            }

            if(count($getCartInfo) > 0){
                return response()->json([
                    'success' => true,
                    'message' => 'User Cart Updated Successfully ..!!',
                    'data' => $getCartInfo
                ]);
            }
            else{
                return response()->json([
                    'success' => true,
                    'message' => 'Empty User Cart',
                    'data' => array()
                ]);
            }
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Error in Update Cart',
                'data' => array()
            ]);
        }
    }

    public function deleteCartItems(Request $request){
        $post = $request->only('cart_id');

        $validator = Validator::make($post, [
            'cart_id' => 'required|int|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all())
            ],Response::HTTP_OK);
        }

        $user = $this->user;
        $user_id = $user['id'];

        $delete = Cart::where('id',$post['cart_id'])->where('user_id',$user_id)->delete();

        if($delete){

            $getCartInfo = Cart::with('size','designs','design_sides','product')->where('user_id',$user_id)->get();

            foreach($getCartInfo as $key => $cart){
                $cart['size_name'] = $cart['size']['name'];
                $cart['design_side_id'] = $cart['design_sides'][0]['id'];
                $cart['design_side'] = $cart['design_sides'][0]['side'];
                $cart['design_product_image'] = $cart['design_sides'][0]['design_product_image'];
                $cart['product_name'] = $cart['product']['name'];
                $cart['design_thumb_image'] = $cart['design_sides'][0]['design_thumb_img'];

                unset($getCartInfo[$key]['size']);
                unset($getCartInfo[$key]['design_sides']);
                unset($getCartInfo[$key]['designs']);
                unset($getCartInfo[$key]['product']);
            }

            if(count($getCartInfo) > 0){
                return response()->json([
                    'success' => true,
                    'message' => 'User Cart Item Deleted Successfully ..!!',
                    'data' => $getCartInfo
                ]);
            }
            else{
                return response()->json([
                    'success' => true,
                    'message' => 'Empty User Cart',
                    'data' => array()
                ]);
            }
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Error in Delete Cart Item',
                'data' => array()
            ]);
        }
    }

    public function showUserSavedCards(){
        $user = $this->user;
        $user_id = $user['id'];

        if(!empty($user_id)){
            $getSaveCards = UserSavedCard::where('user_id',$user_id)->get();

            if(count($getSaveCards) > 0){
                return response()->json([
                    'success' => true,
                    'message' => 'User Saved Cards',
                    'data' => $getSaveCards
                ]);
            }
            else{
                return response()->json([
                    'success' => false,
                    'message' => 'No any Saved Cards for this User',
                    'data' => array()
                ]);
            }
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Invalid User Id',
                'data' => array()
            ]);
        }
    }

    public function showAllOrders(){
        $user = $this->user;
        $user_id = $user['id'];

        if(!empty($user_id)){
            $getOrders = Order::with('designs','address')->where('customer_id',$user_id)->orderBy('id', 'DESC')->get();

            if(count($getOrders) > 0){
                foreach ($getOrders as $order_key => $value) {
                    $designs = $value['designs'];
                    $value['price_per_item'] = $value['subtotal'];

                    foreach ($designs as $key => $design) {
                        $designs[$key]['design_sides'] = DesignSide::where('design_id',$design['id'])->get();
                    }

                    $info = $designs[0]['design_sides'][0];
                    $product = Product::with('color')->where('id', $designs[0]['product_id'])->first();
               
                    $size_id = !empty($designs[0]['size_id'])?$designs[0]['size_id']:'20';

                    $size = Size::where('id',$size_id)->first();

                    $getOrders[$order_key]['order_image'] = $info['design_product_image'];
                    $getOrders[$order_key]['display_name'] = $designs[0]['displayname'];
                    $getOrders[$order_key]['size_id'] = $designs[0]['size_id'];
                    $getOrders[$order_key]['quantity'] = $designs[0]['number_shirts'];
                    $getOrders[$order_key]['design_thumb_image'] = $info['design_thumb_img'];


                    $value['product_name'] = $product['name'];
                    $value['product_description'] = $product['description'];
                    $value['color_hex_code'] = !empty($product['color'])?$product['color']['hex']:'';
                    $value['size_name'] = $size['name'];

                    $address = $value['address'];
                    $address['billing_formatted_address'] = $address['billing_street'].' '.$address['billing_apartment'].', '.$address['billing_city'].' - '.$address['billing_state'].' '.$address['billing_country'].' '.$address['billing_zip'];
                    $address['shipping_formatted_address'] = $address['shipping_street'].' '.$address['shipping_apartment'].', '.$address['shipping_city'].' - '.$address['shipping_state'].' '.$address['shipping_country'].' '.$address['shipping_zip'];

                    $value['designs'] = $designs;
                    $value['address'] = $address;
                }

                return response()->json([
                    'success' => true,
                    'message' => 'Customer Orders Details',
                    'data' => $getOrders
                ]);
            }
            else{
                return response()->json([
                    'success' => false,
                    'message' => 'Empty Order Details',
                    'data' => array()
                ]);
            }
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Invalid User Id',
                'data' => array()
            ]);
        }
    }

    public function deleteUserSavedCards(Request $request){
        $post = $request->only('card_id');

        $validator = Validator::make($post, [
            'card_id' => 'required|int|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all())
            ],Response::HTTP_OK);
        }

        $user = $this->user;
        $user_id = $user['id'];
        $card_id = $request->card_id;

        if(!empty($user_id)){
            $getSaveCards = UserSavedCard::where('id',$card_id)->first();
            if(!empty($getSaveCards)){
                $delete = UserSavedCard::where('id',$card_id)->where('user_id',$user_id)->delete();

                if($delete){
                    $userCards = UserSavedCard::where('user_id',$user_id)->get();

                    return response()->json([
                        'success' => true,
                        'message' => 'User Saved Cards',
                        'data' => $userCards
                    ]);
                }
                else{
                    return response()->json([
                        'success' => false,
                        'message' => 'Error in Delete User Saved Card',
                        'data' => array()
                    ]);
                }
            }
            else{
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid Card Id',
                    'data' => array()
                ]);
            }
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Invalid User Id',
                'data' => array()
            ]);
        }
    }

    public function showTotalCharges(Request $request){
        $post = $request->only('sub_total','postal_code');

        $validator = Validator::make($post, [
            'sub_total' => 'required|min:1',
            'postal_code' => 'required|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all())
            ],Response::HTTP_OK);
        }

        $user = $this->user;
        $user_id = $user['id'];
        $sub_total = $request->sub_total;
        $postal_code = $request->postal_code;

        if(!empty($user_id)){
            $userInfo = User::where('id',$user_id)->first();

            $country = $userInfo['country'];
            $state = $userInfo['shipping_state'];
            $zip_code = $userInfo['shipping_zip'];

            // $getTax = TaxCharge::where('country',$country)->where('state',$state)->where('postal_code', $zip_code)->first();
            $getTax = TaxCharge::where('postal_code', $postal_code)->first();

            if(!empty($getTax)){
                $getTax['price'] = strval($getTax['percentage']/100 * ($sub_total));

                /* Start Calculate Shipping Charges with 15% of the Subtotal */
                $eval = 15/100 * ($sub_total);  
                $charges = round($eval,2);
                /* End Calculate Shipping Charges with 15% of the Subtotal */

                $shipping_methods = ShippingMethod::where('status', 'Enable')->get();

                foreach($shipping_methods as $key => $value){
                    if($value['name'] == 'EXPEDITED' && $value['is_free'] == 'false') {
                        $value['price'] = strval($charges);
                    }

                    $value['is_free'] = ($value['is_free'] == 'true') ? true : false;

                    $total = $sub_total + $getTax['price'] + $value['price'];

                    $value['total'] = strval(round($total,2));
                }

                $result['sub_total'] = strval(round($post['sub_total'],2));
                $result['tax'] = $getTax['price'];
                $result['shipping_methods'] = $shipping_methods;
                
                return response()->json([
                    'success' => true,
                    'message' => 'Total Charges',
                    'data' => $result
                ]);
            }
            else{
                return response()->json([
                    'success' => false,
                    'message' => 'Unavailable Services for your Location',
                    'data' => (object)array()
                ]);
            }
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Invalid User Id',
                'data' => (object)array()
            ]);
        }
    }

    public function applyCoupon(Request $request){
        $post = $request->only('promo_code', 'sub_total','tax','shipping_id', 'shipping_type','shipping_price');

        $validator = Validator::make($post, [
            'promo_code' => 'required',
            'sub_total' => 'required|min:1',
            'tax' => 'required|min:1',
            'shipping_id' => 'required|min:1',
            'shipping_type' => 'required',
            'shipping_price' => 'required|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all())
            ],Response::HTTP_OK);
        }

        $user = $this->user;
        $user_id = $user['id'];
        $promocode_name = $request->promo_code;
        $sub_total = $request->sub_total;
        $tax = $request->tax;
        $shipping_id = $request->shipping_id;
        $shipping_type = $request->shipping_type;
        $shipping_price = $request->shipping_price;

        if(empty($user_id)){
            return response()->json([
                'success' => false,
                'message' => 'Invalid User Id',
                'data' => (object)array()
            ]);
        }

        $coupon = PromoCode::where('name', $promocode_name)->where('status','Enable')->first();

        if(empty($coupon)){
            return response()->json([
                'success' => false,
                'message' => 'Invalid Promo Code',
                'data' => (object)array()
            ]);
        }

        /* Check Coupon is Expired or not */
        $expire_at = $coupon['expirationdate'];
        $expiration_date = date('Y-m-d', strtotime($expire_at));
        $now = date('Y-m-d');

        if(strtotime($expiration_date) < strtotime($now)){
            return response()->json([
                'success' => true,
                'message' => 'Coupon Expired ...!!',
                'data' => (object)array()
            ]);
        }
        /* End Check Coupon is Expired or not */

        
        /* Check Promo Code is avialable or not */
        if(!empty($coupon['limitpercoupon']) && $coupon['pending_couponlimit'] == '0'){
            return response()->json([
                'success' => true,
                'message' => 'Coupon Usage Limit Expired ..!!',
                'data' => (object)array()
            ]);
        }

        if(!empty($coupon['limitperuser'])){ 
            $chkCoupon = Order::where('customer_id',$user_id)->where('promocode_id',$coupon['id'])->get();
            if(count($chkCoupon) == $coupon['limitperuser'] || count($chkCoupon) > $coupon['limitperuser']){
                return response()->json([
                    'success' => true,
                    'message' => 'Coupon Already used by this User ..!!',
                    'data' => (object)array()
                ]);
            }
        }
        /* End Check Promo Code is avialable or not */


        /* Amount Limit Restriction */
        if(!empty($coupon['minimumspend'])){
            if($coupon['minimumspend'] > $sub_total){
                return response()->json([
                    'success' => true,
                    'message' => 'Purchase Amount must be greater than the Minimum Coupon Amount.',
                    'data' => (object)array()
                ]);
            }
        }

        if(!empty($coupon['maximumspend'])){
            if($coupon['maximumspend'] < $sub_total){
                return response()->json([
                    'success' => true,
                    'message' => 'Purchase Amount must be lesser than the Minimum Coupon Amount.',
                    'data' => (object)array()
                ]);
            }
        }
        /* Amount Limit Restriction */

        /* Coupon Type */
        if($coupon['type'] == 'Cart % Discount' || $coupon['type'] == 'Product % Discount') {
            $coupon['coupon_type'] = 'Percentage';
        }
        else{
            $coupon['coupon_type'] = 'Flat';
        }
        /* End Coupon Type */

        /* Set Shipping Charges */
        $shipping_charges = ($coupon['freeshipping'] == '1')?'0':$shipping_price;
        /* End Set Shipping Charges */

        /* Evaluate Coupon Amount */
        $amt = strval(round($coupon['amount'],2));

        if($coupon['type'] == 'Product % Discount') {
            $discount = strval(round(($amt/100) * $sub_total,2));
            $total = $sub_total - $discount;
            $final_total = strval(round($total + $tax + $shipping_charges,2));
        }
        elseif($coupon['type'] == 'Cart % Discount') {
            $total = $sub_total + $tax + $shipping_charges;
            $discount = strval(round(($amt/100) * $total,2));
            $final_total = strval(round($total - $discount,2));
        }
        elseif($coupon['type'] == 'Product Discount') {
            $discount = round($amt,2);
            $total = $sub_total - $discount;
            $final_total = strval(round($total + $tax + $shipping_charges,2));
        }
        elseif($coupon['type'] == 'Cart Discount') {
            $discount = round($amt,2);
            $total = $sub_total + $tax + $shipping_charges;
            $final_total = strval(round($total - $discount,2));
        }
        /* End Evaluate Coupon Amount */

        //echo $discount;die;

        $coupon['is_expired'] = false;
        $coupon['sub_total'] = $sub_total;
        $coupon['tax'] = $tax;
        $coupon['shipping_id'] = $shipping_id;
        $coupon['shipping_type'] = $shipping_type;
        $coupon['shipping_price'] = $shipping_charges;
        $coupon['discount'] = $discount;
        $coupon['final_total'] = $final_total;
        

        return response()->json([
            'success' => true,
            'message' => 'Promo Codes',
            'data' => $coupon
        ]);
    }

    public function checkServiceForTax(Request $request){
        $post = $request->only('postal_code');

        $validator = Validator::make($post, [
            'postal_code' => 'required|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all())
            ],Response::HTTP_OK);
        }

        $user = $this->user;
        $user_id = $user['id'];
        $postal_code = $request->postal_code;

        $check = TaxCharge::where('postal_code', $postal_code)->first();

        $availability = !empty($check)?true:false;

        if($availability == true){
            $message = 'Tax Services';
        }
        else{
            $message = 'Tax Services not available for Selected Pin Code';
         }

        return response()->json([
            'message' => $message,
            'success' => $availability,
            'is_available' => $availability
        ]);
    }

    public function updateOrderStatus(Request $request, Order $order)
    {
        $post = $request->only('order_status');

        $validator = Validator::make($post, [
            'order_status' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all())
            ],Response::HTTP_OK);
        }

        $user = $this->user;
        $user_id = $user['id'];
        $order_status = strtoupper($request->order_status);
        
        $device_token = !empty($order->customer->device_token)?$order->customer->device_token:'';
        $status = ucwords(strtolower($request->order_status));
        $user_data = array(
            'token' => array($device_token),
            'data' => array(
                'title' => 'Order '.$status,
                'body' => 'Order '.$status
            )
        );
        
        if($order->customer->notification_status != '0')
        {
            if(!empty($device_token))
            {
                $user_result = $this->sendNotification($user_data);
            }
        }

        $notification = new Notification;
        $notification->user_id = $order->customer->id;
        $notification->title = $user_data['data']['title'];
        $notification->message = $user_data['data']['body'];
        $notification->is_read = '0';
        $notification->user_role = '2';
        $notification->save();


        $order->status = $order_status;
        $order->update();

        return response()->json([
            'success' => true,
            'message' => 'Order '.$status,
            'data' => $order
        ],Response::HTTP_OK);
    }


    function unique_ids($array,$key)
    {
        $result = array_column($array, null, $key);
        $result = array_map(function($o) {
            return is_object($o) ? $o->id : $o['seller_id'];
        }, $array);

        return $result;
    }

    function sendNotification($info)
    {
        $secret_key = env('FCM_SECRET_KEY');
        $url = 'https://fcm.googleapis.com/fcm/send';

        $data = [
            "registration_ids" => $info['token'],
            "notification" => $info['data']
        ];

        $payload = json_encode($data);
    
        $headers = [
            'Authorization: key=' . $secret_key,
            'Content-Type: application/json',
        ];
    
        $ch = curl_init();
      
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
               
        $response = curl_exec($ch);
      
        curl_close($ch);
      
        return $response;
    }

}