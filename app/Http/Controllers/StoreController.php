<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;  
use Illuminate\Support\Facades\Validator;
use DB;
use App\User;
use App\Design;
use App\DesignSide;
use App\Cart;
use App\ShoppingCart;
use App\Order;
use App\DesignSize;
use App\Product;
use App\PromoCode;
use App\OrderDetail;
use App\Media;
use App\ChatRelation;
use App\Store;
use App\OrderSeller;

class StoreController extends Controller
{
    public function __construct()
    {
        $this->user = JWTAuth::user();
    }

    public function showAllStores()
    {
    	$user = $this->user;
        $user_id = $this->user['id'];

        if(empty($user_id)){
        	return response()->json([
                'success' => false,
                'message' => 'Please Login First ..!!',
                'data' => array()
            ],Response::HTTP_OK);
        }

        $stores = Store::where('user_id', '!=', $user_id)->where('id', '!=', '6')->where('status','Approved')->where('is_available','1')->get();

        foreach ($stores as $key => $store) {
        	$stores[$key]['banner'] = !empty($store['banner'])?env('s3_URL').'img/store/'.$store['banner']:'';
        }

        return response()->json([
            'success' => true,
            'message' => 'Vivid Customs Stores',
            'data' => $stores
        ],Response::HTTP_OK);
    }

    public function storesDesigns(Request $request)
    {
        $post = $request->only('store_id');

        $validator = Validator::make($post, [
            'store_id' => 'required|int',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all()),
                'data' => (object)array()
            ],Response::HTTP_OK);
        }

        $user = $this->user;
        $user_id = $this->user['id'];

        $store = Store::where('id',$request->store_id)->where('status','Approved')->first();

        if(empty($store) || $store->is_available != '1'){
            return response()->json([
                'success' => false,
                'message' => 'Store not Available now .. !!',
                'data' => array()
            ],Response::HTTP_OK);
        }

        $designs = Design::with('products','designsides')->where('user_id',$store->user_id)->where('save_type','publish')->orderBy('id', 'DESC')->get();
        
        foreach ($designs as $key => $design) {
            $designs[$key]['store_id'] = $request->store_id;
        }

        return response()->json([
            'success' => true,
            'message' => 'Store Designs',
            'data' => $designs
        ],Response::HTTP_OK);  
    }

    public function showSingleDesign(Request $request)
    {
        $post = $request->only('store_id','design_id');

        $validator = Validator::make($post, [
            'store_id' => 'required|int',
            'design_id' => 'required|int'
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all()),
                'data' => (object)array()
            ],Response::HTTP_OK);
        }

        $user = $this->user;
        $user_id = $this->user['id'];

        $store = Store::where('id',$request->store_id)->where('status','Approved')->where('is_available','1')->first();

        if(empty($store)){
            return response()->json([
                'success' => false,
                'message' => 'Store not Available now .. !!',
                'data' => array()
            ],Response::HTTP_OK);
        }

        $store->banner_name = $store->banner;
        $store->banner = env('s3_URL').'img/store/'.$store->banner;

        $store->logo_name = $store->logo;
        $store->logo = env('s3_URL').'img/store/logo/'.$store->logo;

        $design = Design::with('products','designsides')->where('user_id',$store->user_id)->where('save_type','publish')->where('id', $request->design_id)->first();
       //echo "<pre>";print_r($design);die;

        $product_id = $design['products']['id'];
        $product_sizes = Product::with('sizes')->first()->toArray();
        $sizes = $product_sizes['sizes'];
        $in_cart = Cart::where('user_id',$user_id)->where('design_id',$design->id)->first();
        $design['sizes'] = (count($sizes) > 0)?$sizes:array();
        $design['color'] = $design->products->color->hex;
        $design['in_cart'] = !empty($in_cart)?true:false;
        $design['store'] = $store;
        // echo $design->user_id;echo "<br>";
        // echo $user_id;die;
        

        $relation_1 = ChatRelation::where('user_1',$design->user_id)->where('user_2',$user_id)->first();
        if(empty($relation_1))
        {
            $relation_2 = ChatRelation::where('user_1',$user_id)->where('user_2',$design->user_id)->first();
            if(!empty($relation_2))
            {
               $relation_id = strval($relation_2->firebase_relation_id); 

            }
            else
            {
                $relation_id = "";
            }
        }
        else{
            $relation_id = strval($relation_1->firebase_relation_id);
        }

        //echo $relation_id;

        $design['relation_id'] = $relation_id;

        if(empty($design)){
            return response()->json([
                'success' => false,
                'message' => 'Invalid Design .. !!',
                'data' => array()
            ],Response::HTTP_OK);
        }

        return response()->json([
            'success' => true,
            'message' => 'Single Design from Store',
            'data' => $design
        ],Response::HTTP_OK);
    }

    public function storesOrders()
    {
        $user = $this->user;
        $user_id = $this->user['id'];

        $data = array();

        if(empty($user_id)){
            return response()->json([
                'success' => false,
                'message' => 'Please Login First ..!!',
                'data' => array()
            ],Response::HTTP_OK);
        }

        $store = $user->store;

        if($store->status != 'Approved') {
            return response()->json([
                'success' => false,
                'message' => 'Store is Deactivated Now .. !!',
                'data' => array()
            ],Response::HTTP_OK);
        }

        $order_ids = OrderSeller::select('order_id')->groupBy('order_id')->where('store_id',$store->id)->get()->toArray();
        $ids = $this->unique_ids($order_ids,'order_id');

        $orders = Order::with('customer','address','shipping_method','promocode')->whereIn('id',$ids)->orderBy('id', 'DESC')->get();

        if(count($orders) == '0') {
            return response()->json([
                'success' => false,
                'message' => 'No Orders Available yet .. !!',
                'data' => array()
            ],Response::HTTP_OK);
        }

        foreach ($orders as $key => $value) {
            unset($value->customer->api_token);
            unset($value->customer->password);

            $orders[$key]['store_name'] = $store->name;

            $designs = DB::table('orders_designs')->where('order_id',$value->id)->get();

            foreach ($designs as $design_key => $design){
            	$order_designs = Design::with('products','designsides')->where('id',$design->design_id)->where('user_id',$user_id)->first();
            	if(!empty($order_designs)){
                    $order_designs['size_name'] = $order_designs->size->name;
            		array_push($data,$order_designs);
            	}
            }
            $orders[$key]['order_designs'] = $data;

            $address = $value['address'];
            $address['billing_formatted_address'] = $address['billing_street'].', '.$address['billing_apartment'].', '.$address['billing_city'].' - '.$address['billing_state'].', '.$address['billing_country'].' '.$address['billing_zip'];
            $address['shipping_formatted_address'] = $address['shipping_street'].', '.$address['shipping_apartment'].', '.$address['shipping_city'].' - '.$address['shipping_state'].', '.$address['shipping_country'].' '.$address['shipping_zip'];
            $value['address'] = $address;

            $data = array();
        }

        return response()->json([
            'success' => true,
            'message' => 'Store Orders',
            'data' => $orders
        ],Response::HTTP_OK);
    }

    public function storesSingleOrder(Request $request)
    {
        $post = $request->only('order_id');

        $validator = Validator::make($post, [
            'order_id' => 'required|int',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all()),
                'data' => (object)array()
            ],Response::HTTP_OK);
        }

        $user = $this->user;
        $user_id = $this->user['id'];
        $store = $user->store;
        $order_id = $request->order_id;
        $data = array();

        $order = Order::with('customer','address','shipping_method','promocode')->where('id',$order_id)->first();

        if(empty($order)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid Order Id !!',
                'data' => array()
            ],Response::HTTP_OK);
        }


        $relation_1 = ChatRelation::where('user_1',$order->customer->id)->where('user_2',$user_id)->first();
        if(empty($relation_1))
        {
            $relation_2 = ChatRelation::where('user_1',$user_id)->where('user_2',$order->customer->id)->first();
            if(!empty($relation_2))
            {
               $relation_id = strval($relation_2->id); 
            }
            else
            {
                $relation_id = "";
            }
        }
        else{
            $relation_id = strval($relation_1->id);
        }

        unset($order->customer->api_token);
        unset($order->customer->password);

        $order->customer->img_name = !empty($order->customer->image)?$order->customer->image:'';
        $order->customer->image = !empty($order->customer->image)?env('s3_URL').'img/profile/'.$order->customer->image:'';

        $designs = DB::table('orders_designs')->where('order_id',$order->id)->get();

        foreach ($designs as $design_key => $design){
            $order_designs = Design::with('products','designsides')->where('id',$design->design_id)->where('user_id',$user_id)->first();
            if(!empty($order_designs)){
                $order_designs['size_name'] = $order_designs->size->name;
                array_push($data,$order_designs);
            }
        }
        $order['order_designs'] = $data;

        $address = $order['address'];
        $address['billing_formatted_address'] = $address['billing_street'].', '.$address['billing_apartment'].', '.$address['billing_city'].' - '.$address['billing_state'].', '.$address['billing_country'].' '.$address['billing_zip'];
        $address['shipping_formatted_address'] = $address['shipping_street'].', '.$address['shipping_apartment'].', '.$address['shipping_city'].' - '.$address['shipping_state'].', '.$address['shipping_country'].' '.$address['shipping_zip'];
        $order['address'] = $address;
        $order['relation_id'] = $relation_id;
        

        return response()->json([
            'success' => true,
            'message' => 'Store Orders',
            'data' => $order
        ],Response::HTTP_OK);
    }

    function unique_ids($array,$key)
    {
        $result = array_column($array, null, $key);
        $result = array_map(function($o) {
            return is_object($o) ? $o->id : $o['order_id'];
        }, $array);

        return $result;
    }
}