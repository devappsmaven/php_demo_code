<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Clipart;
use App\ClipartCategory;
use App\ClipartSubCategory;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;  
use Illuminate\Support\Facades\Validator;

class ClipartController extends Controller
{
    public function __construct()
    {
        //$this->middleware('jwt.verify');
    }

    public function getAllCliparts()
    {
        $data = array();
        $cliparts = Clipart::with('Category','SubCategory')->get()->where('status','Enable');

        foreach ($cliparts  as $key => $value) {
            $category = $value['category']['slug'];
            $sub_category = $value['SubCategory']['slug'];

            $data[$key]['id'] = $value['id'];
            $data[$key]['title'] = $value['title'];
            $data[$key]['image'] = env('s3_URL').'img/clipart/'.$category.'/'.$sub_category.'/'.$value['filename'];
            $data[$key]['numbercolors'] = $value['numbercolors'];
            $data[$key]['status'] = $value['status'];
            $data[$key]['category_id'] = $value['category_id'];
            $data[$key]['subcategory_id'] = $value['subcategory_id'];
            $data[$key]['category_name'] = $category;
            $data[$key]['sub_category_name'] = $sub_category;
        }

        if(!$cliparts){
            return response()->json([
                'message' => 'Error in Get Data',
                'success' => false,
                'data' => array()
            ], Response::HTTP_OK);
        }
        else{
            return  response()->json([
                'message' => 'All Cliparts',
                'success' => true,
                'data' => array_values($data)
            ], Response::HTTP_OK);
        }
    }

    public function allClipartCategories()
    {
        $data = array();
        $categories = ClipartCategory::get()->where('status','Enable');

        foreach($categories as $key => $value){
            $value['filename'] = env('s3_URL').'img/clipart/'.$value['slug'].'/'.$value['filename'];
            $result[] = $value;
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
                'message' => 'All Clipart Categories',
                'success' => true,
                'data' => $result
            ], Response::HTTP_OK);
        }
    }

    public function allSubCategories(Request $request){
        $result = array();
        $data = $request->only('clipart_category_id');

        $validator = Validator::make($data, [
            'clipart_category_id' => 'required|integer|min:1',
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all()),
                'data' => array()
            ],Response::HTTP_OK);
        }

        $subCategory = ClipartSubCategory::with('Category')->get()->where('status','Enable')->where('category_id',$data['clipart_category_id']);

        foreach($subCategory as $key => $value){
            $category = $value['category']['slug'];
            $value['filename'] = env('s3_URL').'img/clipart/'.$category.'/'.$value['slug'].'/'.$value['filename'];
            unset($value['Category']);
            $result[] = $value;
        }

        if(!$subCategory){
            return response()->json([
                'message' => 'Error in Get Data',
                'success' => false,
                'data' => array()
            ], Response::HTTP_OK);
        }
        else{
            return  response()->json([
                'message' => 'All Clipart Sub Categories',
                'success' => true,
                'data' => $result
            ], Response::HTTP_OK);
        }
    }

    public function singleCatCliparts(Request $request){
        $result = array();
        $data = $request->only('clipart_category','clipart_subcategory');

        $validator = Validator::make($data, [
            'clipart_category' => 'required|integer|min:1',
            'clipart_subcategory' => 'required|integer|min:1'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all()),
                'data' => array()
            ],Response::HTTP_OK);
        }

        $cliparts = Clipart::with('Category','SubCategory')->get()->where('status','Enable')->where('category_id',$data['clipart_category'])->where('subcategory_id',$data['clipart_subcategory']);

        foreach ($cliparts  as $key => $value) {
            $category = $value['category']['slug'];
            $sub_category = $value['SubCategory']['slug'];

            $result[$key]['id'] = $value['id'];
            $result[$key]['title'] = $value['title'];
            $result[$key]['image'] = env('s3_URL').'img/clipart/'.$category.'/'.$sub_category.'/'.$value['filename'];
            $result[$key]['numbercolors'] = $value['numbercolors'];
            $result[$key]['status'] = $value['status'];
            $result[$key]['category_id'] = $value['category_id'];
            $result[$key]['subcategory_id'] = $value['subcategory_id'];
            $result[$key]['category_name'] = $category;
            $result[$key]['sub_category_name'] = $sub_category;
        }

        if(!$cliparts){
            return response()->json([
                'message' => 'Error in Get Data',
                'success' => false,
                'data' => array()
            ], Response::HTTP_OK);
        }
        else{
            return  response()->json([
                'message' => 'Clipart Listing',
                'success' => true,
                'data' => array_values($result)
            ], Response::HTTP_OK);
        }
    }
}