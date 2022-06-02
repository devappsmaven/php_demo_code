<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use JWTAuth;
use App\Http\Middleware\JwtMiddleware;
use App\User;
use App\VerifyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;
use App\Mail\ForgetPassword;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyMail;
use DB;
use Exception;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Exception\FirebaseException;
use Throwable;

class UserController extends Controller
{

    public function register(Request $request)
    {
        $data = $request->only('first_name', 'last_name', 'username', 'email', 'password', 'confirm_password', 'phone','device_type','device_id','device_token');

        $validator = Validator::make($data, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'username' => 'required|string|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|max:50',
            'confirm_password' => 'required|same:password',
            //'user_role' => 'required|in:General,Customer'
        ]);
    

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all()),
                'data' => (object)array()
            ],Response::HTTP_OK);
        }

        $user = new User([
            'firstname' => $request->first_name,
            'lastname' => $request->last_name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            'status' => 'Disable',
            'type' => 'Customer'
        ]);

        $user->save();
        $user->roles()->sync([2]);
         
        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => str_random(40)
        ]);
        $verifyUser->save();
        $user->device_type = $request->device_type;
        $user->device_id = $request->device_id;
        $user->device_token = $request->device_token;
        $user->update();

        Mail::to($user->email)->send(new VerifyMail($user));
        
        return  response()->json([
            'message' => 'We sent you an activation code. Check your email and click on the Link to Verify.',
            'success' => true,
            'data' => (object)array()
        ], Response::HTTP_OK);
    }


    public function login(Request $request)
    {
        $data = $request->only('email', 'password', 'device_type','device_id','device_token');
        
        $validator = Validator::make($data, [
            'email' => 'required|email',
            'password' => 'required|string|max:50',
            // 'user_role' => 'required|in:General,Customer'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all()),
                'data' => (object)array()
            ], Response::HTTP_OK);
        }

        $user = User::where('email', $data['email'])->first();

        if(!empty($user)){
            if($user->status == 'Enable'){
                $chkPassword = Hash::check($data['password'], $user['password']);

                if($chkPassword){
                    if(empty($user['firebase_id']))
                    {
                        $service = ServiceAccount::fromJsonFile(env('FB_FILE'));
                        $firebase = (new Factory)->withServiceAccount($service);

                        $auth = $firebase->createAuth();

                        $userProperties = [
                            'email' => $data['email'],
                            'password' => $data['password']
                        ];

                        $fb_user = $auth->createUser($userProperties);

                        $user->firebase_id = $fb_user->uid;
                        $user->update();
                    }

                    $user->device_type = $request->device_type;
                    $user->device_id = $request->device_id;
                    $user->device_token = $request->device_token;
                    $user->update();

                    $old_token = $user['api_token'];
                    $request->headers->set('AuthToken', 'Bearer '.$old_token);
                    //$this->middleware('jwt.verify');


                    // try {
                    //     $result = JWTAuth::parseToken()->authenticate();
                    // }
                    // catch(Exception $e) {
                    //     'Message: ' .$e->getMessage();
                    //     $result = '';
                    // }


                    try {
                        $result = JWTAuth::parseToken()->authenticate();
                    } 
                    catch (Exception $e) {
                        if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                            $result = '';
                        }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                            $result = '';
                        }
                        else if($e instanceof \Tymon\JWTAuth\Exceptions\JWTException){
                            $result = '';
                        }else{
                            $result = '';
                        }
                    }

          
                    if(empty($result)){
                        $credentials = $request->only('email', 'password');
                        $credentials['status'] = 'Enable';

                        try {
                            if (! $token = JWTAuth::attempt($credentials)) {
                                return response()->json([
                                    'success' => false,
                                    'message' => 'Invalid Login Credentials',
                                    'data' => (object)array()
                                ], Response::HTTP_OK );
                            }
                        } 
                        catch (JWTException $e) {
                            return response()->json([
                                'success' => false,
                                'message' => 'Could not create token.',
                            ], Response::HTTP_OK );
                        }

                        $user->api_token = $token;
                        $user->update();

                        $result = JWTAuth::user();
                        $result['api_token'] = $token;
                    }
                    // $result['token'] = $result['api_token'];
                    $result['notification_status'] = boolval($result['notification_status']);
                    
                    if(!empty($result['image'])){
                        $result['image'] = env('s3_URL').'img/profile/'.$result['image'];
                    }

                    return response()->json([
                        'message' => 'User Logged In',
                        'success' => true,
                        'data' => $result
                    ], Response::HTTP_OK);
                }
                else{
                    return response()->json([
                        'message' => "Invalid Password",
                        'success' => false,
                        'data' => (object)array()
                    ], Response::HTTP_OK);
                }
            }
            else{
                return response()->json([
                    'message' => "You need to confirm your account. We have sent you an activation code, please check your email.",
                    'success' => false,
                    'data' => (object)array()
                ], Response::HTTP_OK);
            }
        }
        else{
            return response()->json([
                'message' => "This Email doesn't Exist",
                'success' => false,
                'data' => (object)array()
            ], Response::HTTP_OK);
        }
    }

    public function login2(Request $request)
    {
        $data = $request->only('email', 'password', 'user_role');
        
        $validator = Validator::make($data, [
            'email' => 'required|email',
            'password' => 'required|string|min:6|max:50',
            'user_role' => 'required|in:General,Customer'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all()),
                'data' => (object)array()
            ], Response::HTTP_OK);
        }

        $user = User::where('email', $data['email'])->where('status','Enable')->first();

        if(!empty($user)){
            $chkPassword = Hash::check($data['password'], $user['password']);

            if($chkPassword){
                $old_token = $user['api_token'];
                $request->headers->set('AuthToken', 'Bearer '.$old_token);
                $this->middleware('jwt.verify');
                $result = JWTAuth::user();
      
                if(empty($result)){
                    $credentials = $request->only('email', 'password');
                    $credentials['status'] = 'Enable';

                    try {
                        if (! $token = JWTAuth::attempt($credentials)) {
                            return response()->json([
                                'success' => false,
                                'message' => 'Invalid Login Credentials',
                                'data' => (object)array()
                            ], Response::HTTP_OK );
                        }
                    } 
                    catch (JWTException $e) {
                        return response()->json([
                            'success' => false,
                            'message' => 'Could not create token.',
                        ], Response::HTTP_OK );
                    }

                    $user->api_token = $token;
                    $user->update();

                    $result = JWTAuth::user();
                    $result['api_token'] = $token;
                    $result['token'] = $token;
                }
                else{
                    $result['token'] = $old_token;
                }

                
                if(!empty($result['image'])){
                    $result['image'] = env('APP_URL').'public/img/profile/'.$result['image'];
                }
                return response()->json([
                    'message' => 'User Logged In',
                    'success' => true,
                    'data' => $result
                ], Response::HTTP_OK);
            }
            else{
                return response()->json([
                    'message' => "Invalid Password",
                    'success' => false,
                    'data' => (object)array()
                ], Response::HTTP_OK);
            }
        }
        else{
            return response()->json([
                'message' => "This Email doesn't Exist",
                'success' => false,
                'data' => (object)array()
            ], Response::HTTP_OK);
        }
    }


 
    public function logout()
    {       
        try {
            JWTAuth::invalidate();
 
            return response()->json([
                'message' => 'User has been logged out',
                'success' => true
            ], Response::HTTP_OK);
        } 
        catch (JWTException $exception) {
            return response()->json([
                'message' => 'Sorry, user cannot be logged out',
                'success' => false
            ], Response::HTTP_OK);
        }
    }
 
    // public function get_user()
    // { 
    //     $user = $this->user;

    //     if(!$user){
    //         return response()->json([
    //             'message' => 'Invalid Token',
    //             'success' => false,
    //             'data' => (object)array()
    //         ], Response::HTTP_BAD_GATEWAY);
    //     }
    //     else{
    //         if(!empty($user['image'])){
    //             $user['image'] = env('APP_URL').'public/images/'.$user['image'];
    //         }

    //         return response()->json([
    //             'message' => 'User Details',
    //             'success' => true,
    //             'data' => $user
    //         ], Response::HTTP_OK);
    //     }
    // }

    public function forgetPassword(Request $request)
    {
        $data = $request->only('email');

        $validator = Validator::make($data, [
            'email' => 'required|email'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => implode(', ',$validator->messages()->all()),
                'success' => false
            ], Response::HTTP_OK);
        }

        $user = User::where('email',$data['email'])->first();

        if(!$user){
            return response()->json([
                'message' => 'This E-mail address you entered doesn\'t match any account. Check the spelling or try a different email.',
                'success' => false
            ], Response::HTTP_OK);
        }
        else{
            $password = str_replace(' ', '', $user['firstname'].'@'.rand(100,100000));

            $info = array(
                'password' => Hash::make($password)
            );

            $update = User::where('id',$user['id'])->update($info);

            if(!$update){
                return response()->json([
                    'message' => 'Error in Update Password',
                    'success' => false
                ], Response::HTTP_OK);
            }

            Mail::to($data['email'])->send(new ForgetPassword($user,$password));
            
      
            if(count(Mail::failures()) > 0 ){
                return response()->json([
                    'message' => 'Error in Sent Mail',
                    'success' => false
                ], Response::HTTP_OK);
            }
            else{
                return response()->json([
                    'message' => 'Mail Sent !!',
                    'success' => true
                ], Response::HTTP_OK);
            }
        }
    }

    public function info(Request $request){
        $data = $request->only('email', 'password', 'device_type','device_id','device_token');
        print_r($request->all());
    }


    public function info2(Request $request){

        $request->headers->set('AuthToken', 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8zLjIwLjE2Ni45MVwvdml2aWRfdGVzdFwvaW5kZXgucGhwXC9hcGlcL3JlZ2lzdGVyIiwiaWF0IjoxNjM2MzcwNDc1LCJleHAiOjE2MzY5NzUyNzUsIm5iZiI6MTYzNjM3MDQ3NSwianRpIjoieVZhY1pDWHd5NzV1M0VsRCIsInN1YiI6MjY4LCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIiwidXNlcl9pZCI6MjY4LCJ1c2VyX2VtYWlsIjoicm1uNzEyMkB5b3BtYWlsLmNvbSJ9.7iDZpnqJM2Mz-obuaowoF-yvMqJgb2QUgM0zkxRHKac');

        // header("AuthToken:Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8zLjIwLjE2Ni45MVwvdml2aWRfdGVzdFwvaW5kZXgucGhwXC9hcGlcL2xvZ2luIiwiaWF0IjoxNjM1OTMzNzkzLCJleHAiOjE2MzY1Mzg1OTMsIm5iZiI6MTYzNTkzMzc5MywianRpIjoiNWtoQzVRREUzZ0o0UVExTiIsInN1YiI6MjQ1LCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIiwidXNlcl9pZCI6MjQ1LCJ1c2VyX2VtYWlsIjoidGVzdGluZzEyQHlvcG1haWwuY29tIn0.1pjx9omkDon2Ox5KSlr-O2Mh7SpQe9hqJl1KMtUXiaQ");
        //echo "<br>";print_r(headers_list('AuthToken'));die;

      	//JWTAuth::parseToken('bearer', 'AuthToken', JWTAuth::getToken());


      	$token = JWTAuth::getToken();
      	//echo $token;die;
 		//echo "<br>"; print_r($request->headers->all());die;
      	//JWTAuth::invalidate();

        $user = JWTAuth::parseToken()->authenticate();


        //$user =  JWTAuth::authenticate($token);
        echo json_encode($user);
    }





    public function register3(Request $request){
        $credentials = $request->only('email', 'password');
        $credentials['status'] = 'Enable';

        try{
            $token = JWTAuth::attempt($credentials);

            return response()->json([
                'message' => $token,
            ], Response::HTTP_OK );
        }
        catch (JWTException $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], Response::HTTP_OK );
        }
    }


    public function register2(Request $request)
    {
        $data = $request->only('first_name', 'last_name', 'username', 'email', 'password', 'confirm_password', 'phone');

        $validator = Validator::make($data, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|max:50',
            'confirm_password' => 'required|same:password',
            //'user_role' => 'required|in:General,Customer'
        ]);
    

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all()),
                'data' => (object)array()
            ],Response::HTTP_OK);
        }

        $user_role = DB::table('roles')->where('name',$data['user_role'])->where('status','Enable')->first();


        $username = $request->name.rand(1,1000);
        $user = User::create([
            'firstname' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'type'=> $request->user_role
        ]);


        if(!$user){
            return response()->json([
                'message' => 'Error in Save User',
                'success' => false,
                'data' => (object)array()
            ], Response::HTTP_OK);
        }
        else{
            $user->username = $username;
            $user->verified = '1';
            $user->update();

            $role = array(
                'role_id' => $user_role->id,
                'user_id' => $user->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            );

            $add_user_role =  DB::table('role_user')->insert($role);

            $credentials = array(
                'email' => $request->email,
                'password' => $request->password,
                'status' => 'Enable'
            );

            try {
                if (! $token = JWTAuth::attempt($credentials)) {
                    return response()->json([
                        'success' => false,
                        'message' => 'User Registrated Successfully. But Error to Logged In..!!',
                        'data' => (object)array()
                    ], Response::HTTP_OK );
                }
            } 
            catch (JWTException $e) {
                return response()->json([
                    'success' => false,
                    'message' => 'Could not create token.',
                ], Response::HTTP_OK );
            }

            $user->api_token = $token;
            $user->update();

            $result = JWTAuth::user();
            $result['token'] = $token;
            $result['api_token'] = $token;

            if(!empty($result['image'])){
                $result['image'] = env('APP_URL').'public/img/profile/'.$result['image'];
            }
            
            return  response()->json([
                'message' => 'User Saved Successfully',
                'success' => true,
                'data' => $result
            ], Response::HTTP_OK);
        }
    }

    public function registerOld(Request $request)
    {
        $data = $request->only('first_name', 'last_name', 'username', 'email', 'password', 'confirm_password', 'phone','device_type','device_id','device_token');

        $validator = Validator::make($data, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'username' => 'required|string|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|max:50',
            'confirm_password' => 'required|same:password',
            //'user_role' => 'required|in:General,Customer'
        ]);
    

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all()),
                'data' => (object)array()
            ],Response::HTTP_OK);
        }

        $user = new User([
            'firstname' => $request->first_name,
            'lastname' => $request->last_name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            'type' => 'Customer',
            'status' => 'Enable'
        ]);

        $user->save();
        $user->roles()->sync([2]);
         
        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => str_random(40)
        ]);
        $verifyUser->save();
        $user->device_type = $request->device_type;
        $user->device_id = $request->device_id;
        $user->device_token = $request->device_token;
        $user->verified = '1';
        $user->update();

        Mail::to($user->email)->send(new VerifyMail($user));
        $credentials = $request->only('email', 'password');
        $credentials['status'] = 'Enable';

        //print_r($credentials);

        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json([
                    'success' => false,
                    'message' => 'User Registrated Successfully. But Error to Logged In..!!',
                    'data' => (object)array()
                ], Response::HTTP_OK );
            }
        } 
        catch (JWTException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Could not create token.',
            ], Response::HTTP_OK );
        }

        $user->api_token = $token;
        $user->update();

        $result = JWTAuth::user();
        $result['api_token'] = $token;

        if(!empty($result['image'])){
            $result['image'] = env('s3_URL').'img/profile/'.$result['image'];
        }

        $result['notification_status'] = boolval($result['notification_status']);
            
        return  response()->json([
            'message' => 'User Saved Successfully',
            'success' => true,
            'data' => $result
        ], Response::HTTP_OK);
    }
}