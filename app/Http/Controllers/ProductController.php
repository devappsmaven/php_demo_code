<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\SubCategory;
use App\Color;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;  
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function __construct()
    {
        //$this->middleware('jwt.verify');
    }

    public function showAllProducts()
    {
        $products = Product::with('products')->get()->where('parent_id',null);
        
        foreach ($products  as $key => $value) {
            if(!empty($value['image'])){
                $value['image'] = env('s3_URL').'images/'.$value['image'];
            }
            else{
                $value['image'] = env('s3_URL').'images/no-image-available.jpg';
            }
            $data[] = $value;
        }

        if(!$products){
            return response()->json([
                'message' => 'Error in Get Data',
                'success' => false,
                'data' => array()
            ], Response::HTTP_OK);
        }
        else{
            return  response()->json([
                'message' => 'All Products',
                'success' => true,
                'data' => $data
            ], Response::HTTP_OK);
        }
    }

    public function getSingleProduct(Request $request){
    	$data = $request->only('category_id','subcategory_id','product_id');

    	$validator = Validator::make($data, [
            'category_id' => 'required|integer|min:1',
            'subcategory_id' => 'required|integer|min:1',
            'product_id' => 'required|integer|min:1'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all()),
                'data' => array()
            ],Response::HTTP_OK);
        }

        $product = Product::with('sizes','product_sides','colors','color')->get()->where('id',$data['product_id']);

        foreach ($product  as $key => $value) {

            foreach($value['product_sides'] as $pro_key => $pro_value){
                if(!empty($pro_value['image'])){
                    $pro_value['image'] = env('s3_URL').'img/product/'.$pro_value['image'];
                }
                else{
                    $pro_value['image'] = env('s3_URL').'images/no-image-available.jpg';
                }


                if(!empty($pro_value['side_id'] == '3')){
                    $index = $pro_key;
                }
            }


            $value['back_side'] = !empty($index)?$value['product_sides'][$index]:(object)array();
            if(!empty($value['color_id'])){
                $value['color_id'] = $value['color'];
            }

            //unset($value['color']);
            if(!empty($value['image'])){
                $value['image'] = env('s3_URL').'img/product/'.$value['image'];
            }
            else{
                $value['image'] = env('s3_URL').'images/no-image-available.jpg';
            }
            $value['category_id'] = $request->category_id;
            $value['subcategory_id'] = $request->subcategory_id;
            $info[] = $value;
        }

        if(!$product){
            return response()->json([
                'message' => 'Error in Get Data',
                'success' => false,
                'data' => array()
            ], Response::HTTP_OK);
        }
        else{
            return response()->json([
                'message' => 'All Products',
                'success' => true,
                'data' => $info
            ], Response::HTTP_OK);
        }
    }


    public function showProductsOfSubCategories(Request $request)
    {
        $products = array();
        $result = array();
        $data = $request->only('subcategory_id');

        $validator = Validator::make($data, [
            'subcategory_id' => 'required|integer|min:1',
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all()),
                'data' => (object)array()
            ],Response::HTTP_OK);
        }

        $prod = SubCategory::where('status','Enable')->where('type','Product')->where('id',$data['subcategory_id'])->get();
        //echo json_encode($products);die;
        
        foreach ($prod  as $val) {
            foreach ($val->products as $key => $value) {
                if(empty($value->parent_id))
                {
                    $product = $value->childProducts;
                    foreach ($product as $pro) {
                        $products[] = $pro;
                    }
                }
                else
                {
                    $products[] = $value;
                }
            }
        }

        foreach ($products as $key => $value) {
            if(!empty($value->image))
            {
                $value->image = env('s3_URL').'img/product/'.$value->image;
            }
            else{
                $value->image = env('s3_URL').'images/no-image-available.jpg';
            }

            // $val['products'][$key]['category_id'] = (int)$val['category_id'];
            // $val['products'][$key]['subcategory_id'] = $val['id'];

            $value->category_id = (int)$val->category_id;
            $value->subcategory_id = $val->id;
            unset($value->pivot);
            $result[] = $value;
        }
        //echo json_encode($result);die;

        if(!$result){
            return response()->json([
                'message' => 'Empty Products',
                'success' => false,
                'data' => array()
            ], Response::HTTP_OK);
        }
        else{
            return  response()->json([
                'message' => 'Products of Sub Categories',
                'success' => true,
                'data' => $result
            ], Response::HTTP_OK);
        }
    }

    public function fetchSingleProduct(Request $request){
        $data = $request->only('category_id','subcategory_id','product_id');

        $validator = Validator::make($data, [
            'category_id' => 'required|integer|min:1',
            'subcategory_id' => 'required|integer|min:1',
            'product_id' => 'required|integer|min:1'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all()),
                'data' => array()
            ],Response::HTTP_OK);
        }

        $product_data = Product::where('id',$data['product_id'])->first();

        if(!empty($product_data)){
            $colors = Product::with('color','product_sides','sizes')->where('parent_id',$data['product_id'])->get();

            $products = Product::with('color','product_sides','sizes')->where('id',$data['product_id'])->get();

            if(count($colors) > 0){
                //$result = array_values(array_merge_recursive((array)$products,(array)$colors))[0];
                $result = $colors;
            }
            else{
                $result = $products;
            }

            foreach ($result as $key => $value) {
                foreach($value['product_sides'] as $pro_key => $pro_value){
                    if(!empty($pro_value['image'])){
                        $pro_value['image'] = env('s3_URL').'img/product/'.$pro_value['image'];
                    }
                    else{
                        $pro_value['image'] = env('s3_URL').'images/no-image-available.jpg';
                    }
                }

                $value['category_id'] = $request->category_id;
                $value['subcategory_id'] = $request->subcategory_id;

                $colors = $value['color'];

                if(!empty($colors)){
                    $value['color_id'] = $colors['id'];
                    $value['color_order'] = $colors['order'];
                    $value['color_name'] = $colors['name'];
                    $value['color_slug'] = $colors['slug'];
                    $value['color_hex'] = $colors['hex'];
                    $value['color_file'] = $colors['file'];
                    $value['color_status'] = $colors['status'];
                    $value['color_type'] = $colors['type'];
                    $value['color_family'] = $colors['colorfamily'];
                    // $value['color_created_at'] = $colors['created_at'];
                    // $value['color_updated_at'] = $colors['updated_at'];
                }

                unset($value['color']);

                if(!empty($value['image'])){
                    $value['image'] = env('s3_URL').'img/product/'.$value['image'];
                }
                else{
                    $value['image'] = env('s3_URL').'images/no-image-available.jpg';
                }
            }
            
        }

        if(!$result){
            return response()->json([
                'message' => 'Error in Get Data',
                'success' => false,
                'data' => array()
            ], Response::HTTP_OK);
        }
        else{
            return response()->json([
                'message' => 'Single Product Data',
                'success' => true,
                'data' => $result
            ], Response::HTTP_OK);
        }
    }

    public function fetchDefaultProduct(Request $request){
        $product = Product::where('parent_id', "<>" ,"null")->where('default', '=', 1)->firstOrFail();

        if(!empty($product)){
            $colors = Product::with('color','product_sides','sizes')->where('parent_id',$product->id)->get();

            $products = Product::with('color','product_sides','sizes')->where('id',$product->id)->get();

            if(count($colors) > 0){
                //$result = array_values(array_merge_recursive((array)$products,(array)$colors))[0];
                $result = $colors;
            }
            else{
                $result = $products;
            }

            foreach ($result as $key => $value) {
                foreach($value['product_sides'] as $pro_key => $pro_value){
                    if(!empty($pro_value['image'])){
                        $pro_value['image'] = env('s3_URL').'img/product/'.$pro_value['image'];
                    }
                    else{
                        $pro_value['image'] = env('s3_URL').'images/no-image-available.jpg';
                    }
                }

                $value['category_id'] = "47";
                $value['subcategory_id'] = "129";

                $colors = $value['color'];

                if(!empty($colors)){
                    $value['color_id'] = $colors['id'];
                    $value['color_order'] = $colors['order'];
                    $value['color_name'] = $colors['name'];
                    $value['color_slug'] = $colors['slug'];
                    $value['color_hex'] = $colors['hex'];
                    $value['color_file'] = $colors['file'];
                    $value['color_status'] = $colors['status'];
                    $value['color_type'] = $colors['type'];
                    $value['color_family'] = $colors['colorfamily'];
                    // $value['color_created_at'] = $colors['created_at'];
                    // $value['color_updated_at'] = $colors['updated_at'];
                }

                unset($value['color']);

                if(!empty($value['image'])){
                    $value['image'] = env('s3_URL').'img/product/'.$value['image'];
                }
                else{
                    $value['image'] = env('s3_URL').'images/no-image-available.jpg';
                }
            }
        }

        if(!$result){
            return response()->json([
                'message' => 'Error in Get Data',
                'success' => false,
                'data' => array()
            ], Response::HTTP_OK);
        }
        else{
            return response()->json([
                'message' => 'Default Product Info',
                'success' => true,
                'data' => $result
            ], Response::HTTP_OK);
        }
    }

}
