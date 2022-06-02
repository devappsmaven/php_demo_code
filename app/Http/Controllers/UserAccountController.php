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
use App\UserAccount;

class UserAccountController extends Controller
{
    public function __construct()
    {
        $this->user = JWTAuth::user();
    }

    public function addAccountInfo(Request $request){
    	$post = $request->only('branch_name', 'account_number', 'account_holder_name','routing_number');

        $validator = Validator::make($post, [
            'branch_name' => 'required|string',
            'account_number' => 'required|string|min:10|max:16',
            'account_holder_name' => 'required|string',
            'routing_number' => 'required|int|min:6'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all())
            ],Response::HTTP_OK);
        }

        $user = $this->user;
        $user_id = $user['id'];

        $store = $user->store;
        $store_id = $store->id;

        $account = UserAccount::where('user_id',$user_id)->first();

        if(empty($account)){
        	$account = new UserAccount;
	        $account->store_id = $store_id;
	        $account->user_id = $user_id;
	        $account->branch_name = $request->branch_name;
	        $account->account_number = $request->account_number;
	        $account->account_holder_name = $request->account_holder_name;
	        $account->routing_number = $request->routing_number;
	        $account->save();
        }
        else{
	        $account->branch_name = $request->branch_name;
	        $account->account_number = $request->account_number;
	        $account->account_holder_name = $request->account_holder_name;
	        $account->routing_number = $request->routing_number;
	        $account->update();
        }

        return response()->json([
            'success' => true,
            'message' => "Account Details .. !!",
            'data' => $account
        ],Response::HTTP_OK);
    }

    public function getAccountInfo(){
    	$user = $this->user;
        $user_id = $user['id'];

        $account = UserAccount::where('user_id',$user_id)->first();

        if(empty($account)){
        	return response()->json([
	            'success' => false,
	            'message' => "Empty Account Details",
	            'data' => (object)array()
	        ],Response::HTTP_OK);
        }

        return response()->json([
            'success' => true,
            'message' => "Account Details .. !!",
            'data' => $account
        ],Response::HTTP_OK);
    }
}