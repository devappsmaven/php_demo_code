<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SubCategory;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;  
use Illuminate\Support\Facades\Validator;

class SubCategoryController extends Controller
{
    public function __construct()
    {
       // $this->middleware('jwt.verify');
    }

    public function showAllSubCategories(Request $request)
    {
        $result = array();
        $data = $request->only('category_id');

        $validator = Validator::make($data, [
            'category_id' => 'required|integer|min:1',
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all()),
                'data' => (object)array()
            ],Response::HTTP_OK);
        }

        $sub_categories = SubCategory::get()->where('status','Enable')->where('type','Product')->where('category_id',$data['category_id']);
        
        foreach ($sub_categories  as $key => $value) {
            if(!empty($value['filename'])){
                $value['filename'] = env('s3_URL').'images/'.$value['filename'];
            }
            else{
                $value['filename'] = env('s3_URL').'images/no-image-available.jpg';
            }
            $result[] = $value;
        }

        if(!$sub_categories){
            return response()->json([
                'message' => 'Error in Get Data',
                'success' => false,
                'data' => (object)array()
            ], Response::HTTP_OK);
        }
        else{
            return  response()->json([
                'message' => 'Sub Categories Info',
                'success' => true,
                'data' => $result
            ], Response::HTTP_OK);
        }
    }
}
