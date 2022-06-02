<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Order;
use App\Notification;
use Illuminate\Support\Facades\Hash;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;  
use Illuminate\Support\Facades\Validator;
use App\Rules\MatchOldPassword;

class NotificationController extends Controller
{
	public function __construct()
    {   
        $this->user = JWTAuth::user();
    }

    public function showNotifications()
    {
    	$user = $this->user;
        $user_id = $this->user['id'];

        $update = Notification::where('user_id',$user_id)->where('is_read', '0')->update(['is_read' => '1']);

        $result = Notification::where('user_id',$user_id)->orderBy('id', 'DESC')->get();

        return response()->json([
            'success' => true,
            'message' => "User Notifications",
            'data' => $result
        ],Response::HTTP_OK);
    }


    public function sendPushNotification(Request $request)
    {
    	$post = $request->only('title','message');

        $validator = Validator::make($post, [
            'title' => 'required',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all())
            ],Response::HTTP_OK);
        }

        $user = $this->user;
        $user_id = $user['id'];

        $device_token = $user['device_token'];

        $message = array(
         	"title" => $request->title, 
          	"body" => $request->message
        );

        $result = $this->sendNotification($device_token,$message);

        return response()->json([
		    'success' => true,
		    'message' => 'Push Notification',
		    'data' => $result
		],Response::HTTP_OK);
    }


    function sendNotification($info)
    {
        $secret_key = env('FCM_SECRET_KEY');
  		$url = 'https://fcm.googleapis.com/fcm/send';

        $data = [
            "registration_ids" => $info['token'],
            "notification" => $info['data']
        ];

        $payload = json_encode($data);
    
        $headers = [
            'Authorization: key=' . $secret_key,
            'Content-Type: application/json',
        ];
    
        $ch = curl_init();
      
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
               
        $response = curl_exec($ch);
      
        curl_close($ch);
      
        return $response;
    }
}