<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\SubCategory;
use App\Product;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;  
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
 
    public function __construct()
    {
        //$this->middleware('jwt.verify');
    }

    public function showAllCategories()
    {
        $data = array();
        $categories = Category::with('products')->get()->where('status','Enable')->where('type','Product');
        
        foreach ($categories  as $key => $value) {
            $count = count($value['products']);

            if($count != 0){
                $value['product_counts'] = $count;
                unset($value['products']);

                if(!empty($value['filename'])){
                    $value['filename'] = env('s3_URL').'images/'.$value['filename'];
                }
                else{
                    $value['filename'] = env('s3_URL').'images/no-image-available.jpg';
                }

                $data[] = $value;
            }
            else{
                unset($value);
            }
        }

        if(!$categories){
            return response()->json([
                'message' => 'Error in Get Data',
                'success' => false,
                'data' => array()
            ], Response::HTTP_OK);
        }
        else{
            return  response()->json([
                'message' => 'All Categories',
                'success' => true,
                'data' => $data
            ], Response::HTTP_OK);
        }
    }
}
