<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Store;
use App\Commission;
use DB;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;  
use Illuminate\Support\Facades\Validator;

class CommissionController extends Controller
{
    public function __construct()
    {
        $this->user = JWTAuth::user();
    }

    public function index()
    {
    	$user = $this->user;
    	$user_id = $user->id;

    	$store = $user->store;
    	if(empty($store))
    	{
    		return response()->json([
                'success' => false,
                'message' => 'Store is not available for this User.',
                'data' => array()
            ]);
    	}
    	$store_id = $store->id;

    	$commision = Commission::where('store_id',$store_id)->orderBy('id','DESC')->get();

    	return response()->json([
            'success' => true,
            'message' => 'Store Commission',
            'data' => $commision
        ]);
    }
}