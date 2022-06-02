<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Cart;
use App\Notification;
use App\Order;
use App\Store;
use App\OrderSeller;
use App\DesignSize;
use App\DesignSide;
use App\Product;
use App\Size;
use App\Design;
use DB;
use Illuminate\Support\Facades\Hash;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;  
use Illuminate\Support\Facades\Validator;
use App\Rules\MatchOldPassword;

class UserProfileController extends Controller
{
	public function __construct()
    {   
        $this->user = JWTAuth::user();
    }

    public function matchPassword(Request $request)
    {
    	$post = $request->only('password');

    	$validator = Validator::make($post, [
            'password' => ['required', new MatchOldPassword]
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all())
            ],Response::HTTP_OK);
        }
        else{
        	return response()->json([
                'success' => true,
                'message' => "Password Match"
            ],Response::HTTP_OK);
        }
    }

    public function changePassword(Request $request)
    {
    	$post = $request->only('password','confirm_password');

    	$validator = Validator::make($post, [
            'password' => 'required|string|min:6|max:50',
            'confirm_password' => 'required|same:password'
        ]);

        $user_id = $this->user['id'];

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all())
            ],Response::HTTP_OK);
        }

        $update = User::find($user_id)->update(['password'=> Hash::make($post['password'])]);

        if($update){
        	return response()->json([
                'success' => true,
                'message' => "Password has been Updated Now"
            ],Response::HTTP_OK);
        }
        else{
        	return response()->json([
                'success' => false,
                'message' => "Unable to Update Password"
            ],Response::HTTP_OK);
        }
    }

    public function deactivateUserAccount()
    {
    	$user = $this->user;
    	$user_id = $this->user['id'];

    	if($user['status'] == 'Enable'){
    		$update = User::where('id',$user_id)->update(['status'=>'Disable']);

    		if(!$update){
    			return response()->json([
	                'success' => false,
	                'message' => "Unable to Deactivate User Account"
	            ],Response::HTTP_OK);
	        }
	        else{
                JWTAuth::invalidate();
                
	        	return response()->json([
	                'success' => true,
	                'message' => "User Account has been Deactivated Now !!"
	            ],Response::HTTP_OK);
	        }
    	}
    	else{
    		return response()->json([
                'success' => false,
                'message' => "Already Deactivated"
            ],Response::HTTP_OK);
    	}
    }

    public function updateProfile(Request $request)
    {
        $post = $request->only('first_name', 'last_name', 'phone', 'image');

        // $validator = Validator::make($post, [
        //     'first_name' => 'required|string|min:1',
        //     'last_name' => 'required|string|min:1'
        // ]);

        // if ($validator->fails()) {
        //     return response()->json([
        //         'success' => false,
        //         'message' => implode(', ',$validator->messages()->all())
        //     ],Response::HTTP_OK);
        // }

        $user = $this->user;
        $user_id = $this->user['id'];

        // if($request->hasFile('image')){
        if(!empty($request->image)){
            $filename = $request->image;
        }
        else{
            $filename = $user['image'];
        }

        $info = array(
            'firstname' => !empty($post['first_name'])?$post['first_name']:$user->firstname,
            'lastname' => !empty($post['last_name'])?$post['last_name']:$user->lastname,
            'phone' => !empty($post['phone'])?$post['phone']:$user->phone,
            'image' => $filename
        );

        $update = User::where('id',$user_id)->update($info);

        if(!$update){
            return response()->json([
                'success' => false,
                'message' => "Unable to Update Profile",
                'data' => (object)array()
            ],Response::HTTP_OK);
        }
        else{
            $user = User::where('id',$user_id)->first();
            if(!empty($user['image'])){
                $user['image'] = env('s3_URL').'img/profile/'.$user['image'];
            }

            $user->notification_status = boolval($user->notification_status);
            
            return response()->json([
                'success' => true,
                'message' => "User Profile Updated Successfully !!",
                'data' => $user
            ],Response::HTTP_OK);
        }
    }

    public function getprofile()
    {
        $user_info = $this->user;
        $user_id = $this->user['id'];

        $user = User::where('id',$user_id)->first();

        if($user['status'] == 'Enable'){
            $result = User::with('store')->where('id',$user_id)->first();
            unset($result['api_token']);
            unset($result['password']);

            $path = env('s3_URL').'img/';

            $result['image'] = !empty($result['image'])?$path.'profile/'.$result['image']:'';
            $result['img_name'] = $result['image'];

            $result->notification_status = boolval($result->notification_status);

            if(!empty($result['store'])){
                $result['store']['banner_name'] = !empty($result['store']['banner'])?$result['store']['banner']:'';
                $result['store']['banner'] = !empty($result['store']['banner'])?$path.'store/'.$result['store']['banner']:'';

                $result['store']['logo_name'] = !empty($result['store']['logo'])?$result['store']['logo']:'';
                $result['store']['logo'] = !empty($result['store']['logo'])?$path.'store/logo/'.$result['store']['logo']:'';
                
                $result['store']['is_available'] = boolval($result['store']['is_available']);
            }
            
            return response()->json([
                'success' => true,
                'message' => 'Account Details',
                'data' => $result
            ],Response::HTTP_OK);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => "Disabled Account",
                'data' => (object)array()
            ],Response::HTTP_OK);
        } 
    }

    public function update_notification_status(Request $request)
    {
        $post = $request->only('notification_status','device_id');

        $validator = Validator::make($post, [
            'notification_status' => 'required|int',
            'device_id' => 'required',
        ]);

        $user = $this->user;
        $user_id = $this->user['id'];

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all())
            ],Response::HTTP_OK);
        }

        if($user['device_id'] != $request->device_id){
            return response()->json([
                'success' => false,
                'message' => "You don't have Permission to perform this Action"
            ],Response::HTTP_OK);

        }

        $user->notification_status = $request->notification_status;
        $user->update();

        unset($user->api_token);
        unset($user->password);

        $user->notification_status = boolval($user->notification_status);

        return response()->json([
            'success' => true,
            'message' => "Notification Status has been Updated Now",
            'data' => $user
        ],Response::HTTP_OK);
    }

    public function showCounts()
    {
        $user = $this->user;
        $user_id = $this->user['id'];

        $cart = Cart::where('user_id',$user_id)->get();
        $cart_count = count($cart);

        $notification = Notification::where('user_id',$user_id)->where('is_read','0')->get();
        $notification_count = count($notification);

        return response()->json([
            'success' => true,
            'message' => "User Modules Count",
            'cart_count' => $cart_count,
            'notification_count' => $notification_count
        ],Response::HTTP_OK);
    }

    public function dashboard()
    {
        $user = $this->user;
        $user_id = $user['id'];
        $earning = array();

        $type = !empty($_GET['type'])?$_GET['type']:'week';

        if(empty($user_id))
        {
            return response()->json([
                'success' => false,
                'message' => 'Invalid User Id',
                'data' => (object)array()
            ]);
        }

        $store = $user->store;

        if(empty($store)){
            return response()->json([
                'success' => false,
                'message' => 'Invalid Store',
                'data' => (object)array()
            ]);
        }

        $store_id = $store->id;
        $days = $this->get_days_list();
        $months = $this->get_month_list();
        $years = $this->get_years_list();
        //echo json_encode($months);die;
        $recent_orders = $this->recentOrders($store_id);

        if($type == 'month')
        {
            foreach($months as $month)
            { 
                $data = $this->getAllOrderInfoMonthly($store_id,$month['month'],$month['year']);

                $total = $data['earning'];

                // $details['month'] = $month['month'];
                // $details['year'] = $month['year'];
                $details['label'] = $month['value'];
                $details['earning'] = $total;

                $info[] = $details; 
            }
        }
        elseif($type == 'year')
        {
            foreach($years as $year)
            { 
                $data = $this->getAllOrderInfoYearly($store_id,$year['year']);

                $total = $data['earning'];

                $details['label'] = $year['year'];
                $details['earning'] = $total;

                $info[] = $details; 
            }
        }
        else
        { 
            $type = 'week';
            foreach($days as $day)
            {
                $orders = OrderSeller::where('store_id', $store_id)->whereDate('created_at',$day['date'])->pluck('order_id');

                if(count($orders) > 0)
                {
                    foreach($orders as $order)
                    {
                        $data = $this->getOrderInfo($order, $store_id, $day['date']);
                        $total = $data['earning'];
                        array_push($earning, $total);
                    } 
                }

                $details['label'] = $day['day'];
                // $details['month'] = $day['month'];
                // $details['year'] = $day['year'];
                $details['earning'] = array_sum($earning);

                $earning = array();
                $info[] = $details;
            }
        }

        $graph['type'] = $type;
        $graph['value'] = $info;

        $store_orders = OrderSeller::where('store_id',$store_id)->count();
        $store_earning = $this->getAllOrdersInfo($store_id);

        $result['total_orders'] = $store_orders;
        $result['total_earning'] = $store_earning['earning'];
        $result['graph'] = $graph;
        $result['recent_orders'] = $recent_orders;
        
        return response()->json([
            'success' => true,
            'message' => 'Store Dashboard',
            'data' => $result
        ]); 
    }

    public function getOrderInfo($order,$store,$date)
    {
        $order = Order::where('id',$order)->first();
        $store = Store::where('id',$store)->first();

        $result = array();
        $add= array();
        
        if($order->created_at->format('Y-m-d') == $date)
        {
            $designs = $order->designs;

            if(count($designs) > 0)
            {
                foreach($designs as $key => $design)
                {
                    if($design->user_id == $store->user->id)
                    {
                        $product_price = !empty($design->price_per_shirt)?$design->price_per_shirt:$design->product->price;
                        $design_price = $design->total;
                        $profit = $design_price - $product_price;

                        $data['product_price'] = $product_price;
                        $data['design_price'] = $design_price;
                        $data['profit'] = $profit;

                        $design_sizes = DesignSize::where('design_id', $design->id)->where('order_id',$order->id)->first();
                        if(!empty($design_sizes))
                        {
                            $quantity = $design_sizes->quantity;
                        }

                        $total_profit = $profit * $quantity;
                        $tp = $total_profit;
                        $data['quantity'] = $quantity;
                        $data['total_profit'] = $total_profit;

                        array_push($add, $total_profit);
                        $result[] = $data;
                    }
                }
            }
        }

        $earning = array_sum($add);

        $info['date'] = $date;
        $info['earning'] = !empty($earning)?$earning:0;
        $info['data'] = $result; 
        return $info;
    }

    public function getAllOrdersInfo($store)
    {
        $store = Store::where('id',$store)->first();
        $orders_ids = OrderSeller::where('store_id', $store->id)->pluck('order_id');

        $result = array();
        $add= array();

        if(count($orders_ids) > 0)
        {
            foreach($orders_ids as $order)
            {
                $order = Order::where('id',$order)->first();
                $designs = $order->designs;

                if(count($designs) > 0)
                {
                    foreach($designs as $key => $design)
                    {
                        if($design->user_id == $store->user->id)
                        {
                            $product_price = !empty($design->price_per_shirt)?$design->price_per_shirt:$design->product->price;
                            $design_price = $design->total;
                            $profit = $design_price - $product_price;

                            $data['product_price'] = $product_price;
                            $data['design_price'] = $design_price;
                            $data['profit'] = $profit;

                            $design_sizes = DesignSize::where('design_id', $design->id)->where('order_id',$order->id)->first();
                            if(!empty($design_sizes))
                            {
                                $quantity = $design_sizes->quantity;
                            }

                            $total_profit = $profit * $quantity;
                         
                            $data['quantity'] = $quantity;
                            $data['total_profit'] = $total_profit;

                            array_push($add, $total_profit);
                            $result[] = $data;
                        }
                    }
                }
            }
        }

        $earning = array_sum($add);

        $info['earning'] = !empty($earning)?$earning:0;
        $info['data'] = $result; 
        return $info;
    }

    public function getAllOrderInfoMonthly($store,$month,$year)
    {
        $store = Store::where('id',$store)->first();
        $orders_ids = OrderSeller::where('store_id', $store->id)->whereMonth('created_at',$month)->whereYear('created_at',$year)->pluck('order_id');

        $result = array();
        $add= array();

        if(count($orders_ids) > 0)
        {
            foreach($orders_ids as $order)
            {
                $order = Order::where('id',$order)->first();
                $designs = $order->designs;

                if(count($designs) > 0)
                {
                    foreach($designs as $key => $design)
                    {
                        if($design->user_id == $store->user->id)
                        {
                            $product_price = !empty($design->price_per_shirt)?$design->price_per_shirt:$design->product->price;
                            $design_price = $design->total;
                            $profit = $design_price - $product_price;

                            $data['product_price'] = $product_price;
                            $data['design_price'] = $design_price;
                            $data['profit'] = $profit;

                            $design_sizes = DesignSize::where('design_id', $design->id)->where('order_id',$order->id)->first();
                            if(!empty($design_sizes))
                            {
                                $quantity = $design_sizes->quantity;
                            }

                            $total_profit = $profit * $quantity;
                         
                            $data['quantity'] = $quantity;
                            $data['total_profit'] = $total_profit;

                            array_push($add, $total_profit);
                            $result[] = $data;
                        }
                    }
                }
            }
        }

        $earning = array_sum($add);

        $info['earning'] = !empty($earning)?$earning:0;
        $info['data'] = $result; 
        return $info;
    }

    public function getAllOrderInfoYearly($store,$year)
    {
        $store = Store::where('id',$store)->first();
        $orders_ids = OrderSeller::where('store_id', $store->id)->whereYear('created_at',$year)->pluck('order_id');

        $result = array();
        $add= array();

        if(count($orders_ids) > 0)
        {
            foreach($orders_ids as $order)
            {
                $order = Order::where('id',$order)->first();
                $designs = $order->designs;

                if(count($designs) > 0)
                {
                    foreach($designs as $key => $design)
                    {
                        if($design->user_id == $store->user->id)
                        {
                            $product_price = !empty($design->price_per_shirt)?$design->price_per_shirt:$design->product->price;
                            $design_price = $design->total;
                            $profit = $design_price - $product_price;

                            $data['product_price'] = $product_price;
                            $data['design_price'] = $design_price;
                            $data['profit'] = $profit;

                            $design_sizes = DesignSize::where('design_id', $design->id)->where('order_id',$order->id)->first();
                            if(!empty($design_sizes))
                            {
                                $quantity = $design_sizes->quantity;
                            }

                            $total_profit = $profit * $quantity;
                         
                            $data['quantity'] = $quantity;
                            $data['total_profit'] = $total_profit;

                            array_push($add, $total_profit);
                            $result[] = $data;
                        }
                    }
                }
            }
        }

        $earning = array_sum($add);

        $info['earning'] = !empty($earning)?$earning:0;
        $info['data'] = $result; 
        return $info;
    }

    public function recentOrders($store)
    {
        $data = array();
        $store = Store::where('id',$store)->first();
        $orders_ids = OrderSeller::where('store_id', $store->id)->orderBy('id', 'DESC')->limit(2)->pluck('order_id');

        if(count($orders_ids) > 0)
        {
            foreach($orders_ids as $order)
            {
                $order = Order::with('customer','address','shipping_method','promocode')->where('id',$order)->first();
                unset($order->customer->api_token);
                unset($order->customer->password);

                $designs = DB::table('orders_designs')->where('order_id',$order->id)->get();

                foreach ($designs as $design_key => $design){
                    $order_designs = Design::with('products','designsides')->where('id',$design->design_id)->where('user_id',$store->user->id)->first();
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

                $result[] = $order;
            }
        }
        return $result;
    }

    function get_days_list()
    {
        $date = strtotime(date('Y-m-d'));

        for ($i=0; $i < 7; $i++) { 
            $day = date('D', strtotime("-1 day", $date));
            $date = strtotime(date('Y-m-d', strtotime("-1 day", $date)));
            $dt = date('Y-m-d', $date);
            $month = date('M', $date);
            $year = date('Y', $date);

            $result['day'] = $day;
            $result['date'] = $dt; 
            $result['month'] = $month;
            $result['year'] = $year;

            $data[] = $result;
        }

        return array_reverse($data);
    }

    function get_month_list()
    {
        $date = strtotime(date('Y-m-d'));

        for ($i=0; $i < 12; $i++) 
        {
            $j = $i+1; 
            $month = date('m', strtotime("-".$j." month", $date));
            $year = date('Y', strtotime("-".$j." month", $date)); 
            $value = date('M/y', strtotime("-".$j." month", $date)); 
            $result['month'] = $month;
            $result['year'] = $year;
            $result['value'] = $value;
            $data[] = $result;
        }

        return array_reverse($data);
    }

    function get_years_list()
    {
        $date = strtotime(date('Y-m-d'));

        for ($i=0; $i < 5; $i++) 
        {
            $j = $i+1; 
            $year = date('y', strtotime("-".$j." year", $date)); 
            $result['year'] = $year;
            $data[] = $result;
        }

        return array_reverse($data);
    }
}