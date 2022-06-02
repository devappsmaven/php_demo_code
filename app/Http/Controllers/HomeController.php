<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;  
use Illuminate\Support\Facades\Validator;
use DB;
use App\Product;
use App\ProductCategory;
use App\Slider;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->user = JWTAuth::user();
    }

    public function index()
    {
        $response = array();

        $user = $this->user;
        $user_id = $user['id'];

        if(!empty($user_id))
        {
            $products = Product::where('parent_id', '!=', null)->where('status','Enable')->where('isembroidery',0)->limit(10)->orderBy('id', 'DESC')->get();
            $embroidery = Product::where('parent_id', '!=', null)->where('status','Enable')->where('isembroidery',1)->limit(10)->orderBy('id', 'DESC')->get();
            $top_rated = Product::where('parent_id', '!=', null)->where('status','Enable')->where('is_top_rated',1)->limit(10)->orderBy('id', 'DESC')->get();
            $data = array(
                'Our Products' => $products,
                'Embroidery' => $embroidery,
                'Top Rated Products' => $top_rated
            );

            $id = 0;

            foreach($data as $key => $products)
            {
                if(count($products) > 0)
                {
                    foreach($products as $value)
                    {
                        $category = ProductCategory::where('product_id',$value['id'])->first();
                        if(!empty($category))
                        {
                            $value['category_id'] = $category['category_id'];
                            $value['subcategory_id'] = $category['subcategory_id'];
                        }
                        else{
                            $value['category_id'] = '1';
                            $value['subcategory_id'] = '2';
                        }

                        if(!empty($value['image']))
                        {
                            $value['image'] = env('s3_URL').'img/product/'.$value['image'];
                        }
                        else{
                            $value['image'] = env('s3_URL').'images/no-image-available.jpg';
                        }
                    }

                    $id++;
            
                    $result['id'] = $id;
                    $result['title'] = $key;
                    $result['data'] = $products;

                    $response[] = $result;
                }
            }

            return response()->json([
                'success' => true,
                'message' => 'Home Screen Data',
                'data' => $response
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

    public function viewAll()
    {
        $result = array();
        $response = array();

        $user = $this->user;
        $user_id = $user['id'];

        $type = !empty($_GET['type'])?$_GET['type']:'products';

        if($type == 'products')
        {
            $id = 1;
            $data = Product::where('parent_id', '!=', null)->where('status','Enable')->where('isembroidery',0)->orderBy('id', 'DESC')->get();
        }
        elseif($type == 'embroidery')
        {
            $id = 2;
            $data = Product::where('parent_id', '!=', null)->where('status','Enable')->where('isembroidery',1)->orderBy('id', 'DESC')->get();
        }
        elseif($type == 'top_rated')
        {
            $id = 3;
            $data = Product::where('parent_id', '!=', null)->where('status','Enable')->where('is_top_rated',1)->orderBy('id', 'DESC')->get();
        }
        else
        {
            $id = 1;
            $data = Product::where('parent_id', '!=', null)->where('status','Enable')->where('isembroidery',0)->orderBy('id', 'DESC')->get();
        }

        if(!empty($user_id))
        {
            foreach($data as $value)
            {
                $category = ProductCategory::where('product_id',$value['id'])->first();
                if(!empty($category))
                {
                    $value['category_id'] = $category['category_id'];
                    $value['subcategory_id'] = $category['subcategory_id'];
                }
                else
                {
                    $value['category_id'] = 1;
                    $value['subcategory_id'] = 2;
                }

                if(!empty($value['image']))
                {
                    $value['image'] = env('s3_URL').'img/product/'.$value['image'];
                }
                else
                {
                    $value['image'] = env('s3_URL').'images/no-image-available.jpg';
                }
            }

            return response()->json([
                'success' => true,
                'message' => 'Home Screen View All Data',
                'data' => $data
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

    public function showBanner()
    {
        $result = array();
        $response = array();

        $user = $this->user;
        $user_id = $user['id'];

        if(!empty($user_id))
        {
            $slider = Slider::get();

            return response()->json([
                'success' => true,
                'message' => 'Home Screen Banner',
                'data' => $slider
            ]);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Invalid User Id',
                'data' => array()
            ]);
        }
    }
}