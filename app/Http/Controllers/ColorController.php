<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;  
use Illuminate\Support\Facades\Validator;
use App\Color;
use App\Product;

class ColorController extends Controller
{
	public function __construct()
    {
        //$this->middleware('jwt.verify');
    }

    public function allColors(){
    	$data = array();
        $colors = Color::where('status', 'Enable')->where('type', 'ink')->where('hex', '!=', 'null')->get();

        if(!$colors){
            return response()->json([
                'message' => 'Error in Get Data',
                'success' => false,
                'data' => array()
            ], Response::HTTP_OK);
        }
        else{
            return  response()->json([
                'message' => 'All Colors',
                'success' => true,
                'data' => $colors
            ], Response::HTTP_OK);
        }
    }
}