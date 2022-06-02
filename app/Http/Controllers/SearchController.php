<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\SubCategory;
use App\ProductCategory;
use App\ColorFamily;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;  
use Illuminate\Support\Facades\Validator;

class SearchController extends Controller
{ 
    public function __construct()
    {
        //$this->middleware('jwt.verify');
    }


    public function search(Request $request)
    {
    	$result = array();
    	$data = $request->only('keyword');

    	// $validator = Validator::make($data, [
     //        'keyword' => 'required|string|min:1',
     //    ]);

     //    //Send failed response if request is not valid
     //    if ($validator->fails()) {
     //        return response()->json([
     //            'success' => false,
     //            'message' => implode(', ',$validator->messages()->all()),
     //            'data' => array()
     //        ],Response::HTTP_OK);
     //    }

        $search = Product::where('name','LIKE','%'.$request->keyword.'%')->where('parent_id', '!=', null)->where('status','Enable')->orderBy('id', 'DESC')->get();
   		
        if(!$search){
            return response()->json([
                'message' => 'Error in Get Data',
                'success' => false,
                'data' => array()
            ], Response::HTTP_OK);
        }
        else{
            foreach ($search  as $key => $value) {
                if(!empty($value->category)){
                    $value['category_id'] = $value->category->category_id;
                    $value['subcategory_id'] = $value->category->subcategory_id;
                }
                else{
                    $value['category_id'] = '1';
                    $value['subcategory_id'] = '2';
                }

                if(!empty($value['image'])){
                    $search[$key]['image'] = env('s3_URL').'img/product/'.$value['image'];
                }
                else{
                    $search[$key]['image'] = env('s3_URL').'images/no-image-available.jpg';
                }
                unset($value->category);
            }

            return  response()->json([
                'message' => 'Search Results',
                'success' => true,
                'data' => $search
            ], Response::HTTP_OK);
        }
    }

    public function filterList()
    {
        $data = array();
        $categories = ProductCategory::distinct()->get(['category_id']);

        foreach($categories as $key => $value){
            $category = Category::where('id',$value['category_id'])->where('status','Enable')->first();
            $subcategory = ProductCategory::select('subcategory_id')->distinct('subcategory_id')->where('category_id',$value['category_id'])->get();

            foreach($subcategory as $sc_key => $sc_value){
                $subcategory[$sc_key] = SubCategory::where('id',$sc_value['subcategory_id'])->first();
            }

            $result[$key] = $category;
            $result[$key]['subcategory'] = $subcategory;
        }


        $brands = Product::select('brand')->where('status','Enable')->groupBy('brand')->get();
        $colors = ColorFamily::where('status','Enable')->get();
        $fabric = Product::select('fabric')->where('status','Enable')->groupBy('fabric')->get();
        $price = Product::selectRaw('MIN(price) AS min_price, MAX(price) AS max_price')->get();


        //$array1['title'] = 'Categories';
        $array1['categories'] = $result;

        //$array2['title'] = 'Brands';
        $array2['brands'] = $this->call($brands,'brand');

        //$array3['title'] = 'Colors';
        $array3['colors'] = $colors;

        //$array4['title'] = 'Fabric';
        $array4['fabric'] = $this->call($fabric,'fabric');

        //$array5['title'] = 'Price';
        $array5['price'] = $price;


        array_push($data,$array1,$array2,$array3,$array4,$array5);

        return response()->json([
            'message' => 'Filters List',
            'success' => true,
            'data' => $data
        ],Response::HTTP_OK);
    }

    public function call($data,$val)
    {
        foreach($data as $value){
            $result[] = $value[$val];
        }
        return $result;
    }
}