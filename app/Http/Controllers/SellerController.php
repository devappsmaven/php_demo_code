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
use App\Media;
use App\Store;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewSellerRequest;

class SellerController extends Controller
{
    public function __construct()
    {
        $this->user = JWTAuth::user();
    }

    public function makeSeller2(Request $request){
        $post = $request->only('store_name', 'first_name', 'last_name','phone_number', 'store_description', 'cover_image', 'cover_image_ext');

        $validator = Validator::make($post, [
            'store_name' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone_number' => 'required|string'
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all()),
                'data' => (object)array()
            ],Response::HTTP_OK);
        }

        $user = $this->user;
        $user_id = $this->user['id'];

        if($user['status'] == 'Enable'){
            $user_role = DB::table('roles')->where('name','Store Designer')->where('status','Enable')->first();


            if(!empty($post['cover_image'])){
                $validation = Validator::make($post, [
                    'cover_image' => 'required|string',
                    'cover_image_ext' => 'required|string'
                ]);

                if ($validation->fails()) {
                    return response()->json([
                        'success' => false,
                        'message' => implode(', ',$validation->messages()->all())
                    ],Response::HTTP_OK);
                }

                $file = $post['cover_image'];
                $path = public_path().'/img/profile/';
                $image = "user_".$user_id.'_'.time().'.'.$post['cover_image_ext'];
                $upload = file_put_contents($path.$image,base64_decode($file));

                if($upload){
                    $filename = $image;
                }
                else{
                    $filename = $user['cover_image'];
                }
            }
            else{
                $filename = $user['cover_image'];
            }

            $update_data = array(
                'has_store' => 1,
                'type' => 'Store Designer',
                'store_name' => $post['store_name'],
                'firstname' => $post['first_name'],
                'lastname' => $post['last_name'],
                'phone' => $post['phone_number'],
                'store_description' => $post['store_description'],
                'cover_image' => $filename
            );

            $update = User::where('id', $user_id)->update($update_data);

            if($update){
                $result = User::where('id',$user_id)->first();

                unset($result['api_token']);
                unset($result['password']);

                $path = env('APP_URL').'public/img/profile/';

                $result['image'] = !empty($result['image'])?$path.$result['image']:'';
                $result['cover_image'] = !empty($result['cover_image'])?$path.$result['cover_image']:'';


                $role = array(
                    'role_id' => $user_role->id,
                    'user_id' => $user_id,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                );

                $add_user_role =  DB::table('role_user')->insert($role);

                return response()->json([
                    'success' => true,
                    'message' => "User Info Update Successfully ..!!!",
                    'data' => $result
                ],Response::HTTP_OK);
            }
            else{
                return response()->json([
                    'success' => false,
                    'message' => 'Error in Update User Info',
                    'data' => (object)array()
                ],Response::HTTP_OK);
            }
        }
        else{
            return response()->json([
                'success' => false,
                'message' => "This Account is Disabled now ..!!",
                'data' => (object)array()
            ],Response::HTTP_OK);
        }
    }

    public function makeSeller(Request $request){
        $post = $request->only('name', 'store_description', 'cover_image', 'img_size', 'img_width', 'img_height','img_extension','logo');

        $validator = Validator::make($post, [
            'name' => 'required|string|unique:stores',
            'cover_image' => 'required|string'
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all()),
                'data' => (object)array()
            ],Response::HTTP_OK);
        }

        $user = $this->user;
        $user_id = $this->user['id'];

        if($user['status'] == 'Enable'){
            if($user->store){
                return response()->json([
                    'success' => false,
                    'message' => "This Account is already registered as a Store Designer ...!!",
                    'data' => (object)array()
                ],Response::HTTP_OK);
            }

            if(!empty($post['cover_image'])){
                $validation = Validator::make($post, [
                    'cover_image' => 'required|string',
                    'img_size' => 'required|int',
                    'img_width' => 'required|int',
                    'img_height' => 'required|int',
                    'img_extension' => 'required|string'
                ]);

                if ($validation->fails()) {
                    return response()->json([
                        'success' => false,
                        'message' => implode(', ',$validation->messages()->all())
                    ],Response::HTTP_OK);
                }

                $file = $post['cover_image'];
                // $path = public_path().'/img/store/';
                // $filename = str_random(16).time().'.'.$post['cover_image_ext'];
                // $upload = file_put_contents($path.$filename,base64_decode($file));

                $media = new Media();
                $media->file = $file;
                $media->url = 'store';
                // list($width, $height, $type, $attr) = getimagesize(public_path('/img/store/').$filename);
                // $bytes= filesize(public_path('/img/store/').$filename);
                $bytes = $post['img_size'];
                $decimals = 2;
                $sz = 'BKMGTP';
                $factor = floor((strlen($bytes) - 1) / 3);
                $media->size = sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor];
                $media->dimensions = $post['img_width'].'x'.$post['img_height'];
                $media->uploaded_to = 'Configuration';
                $media->user_id = $user_id;
                $media->type = $post['img_extension'];
                $media->caption = '';
                $media->alt = '';
                $media->description = '';
                $media->save();
            }

            $store = new Store;
            $store->name = $request->name;
            $store->slug = str_slug($request->name);
            $store->status = 'Waiting Approval';
            $store->description = $request->store_description;
            $store->banner = $file;
            $store->logo = !empty($request->logo)?$request->logo:'';
            $store->user()->associate($user);
            $store->save();

            $admin = 'dev.appsmaven@gmail.com';

            Mail::to($admin)->send(new NewSellerRequest($store));

            $result = User::with('store')->where('id',$user_id)->first();

            unset($result['api_token']);
            unset($result['password']);

            $path = env('s3_URL').'img/';

            $result['image'] = !empty($result['image'])?$path.'profile/'.$result['image']:'';
            $result['img_name'] = $result['image'];

            if(!empty($result['store'])){
                $result['store']['banner_name'] = !empty($result['store']['banner'])?$result['store']['banner']:'';
                $result['store']['banner'] = !empty($result['store']['banner'])?$path.'store/'.$result['store']['banner']:'';

                $result['store']['logo_name'] = !empty($result['store']['logo'])?$result['store']['logo']:'';
                $result['store']['logo'] = !empty($result['store']['logo'])?$path.'store/logo/'.$result['store']['logo']:'';

                $result['store']['is_available'] = boolval($result['store']['is_available']);
            }

            return response()->json([
                'success' => true,
                'message' => "Your Request has been Successfully Submitted",
                'data' => $result
            ],Response::HTTP_OK);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => "This Account is Disabled now ..!!",
                'data' => (object)array()
            ],Response::HTTP_OK);
        }
    }

    public function updateStore(Request $request){
        $post = $request->only('name','store_description','cover_image', 'img_size', 'img_width', 'img_height','img_extension');

        $user = $this->user;
        $user_id = $this->user['id'];

        $store = Store::where('user_id',$user_id)->where('status','Approved')->first();

        if(!empty($request->name) && $request->name != $store->name )
        {
            $store->newname = $request->name;
            $store->statusname = "Waiting Approval";
        }

        if(!empty($request->store_description) && $request->store_description != $store->description )
        {
            $store->newdescription = $request->store_description;
            $store->statusdescription = "Waiting Approval";
        }

        if(!empty($request->cover_image) && $request->cover_image != $store->banner && $request->cover_image != $store->newbanner)
        {
            $validation = Validator::make($post, [
                'img_size' => 'required|int',
                'img_width' => 'required|int',
                'img_height' => 'required|int',
                'img_extension' => 'required|string'
            ]);

            if ($validation->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => implode(', ',$validation->messages()->all())
                ],Response::HTTP_OK);
            }

            $store->newbanner = $request->cover_image;
            $store->statusbanner = "Waiting Approval";

            $file = $request->cover_image;

            $media = new Media();
            $media->file = $file;
            $media->url = 'store';
            $bytes = $request->img_size;
            $decimals = 2;
            $sz = 'BKMGTP';
            $factor = floor((strlen($bytes) - 1) / 3);
            $media->size = sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor];
            $media->dimensions = $request->img_width.'x'.$request->img_height;
            $media->uploaded_to = 'Configuration';
            $media->user_id = $user_id;
            $media->type = $request->img_extension;
            $media->caption = '';
            $media->alt = '';
            $media->description = '';
            $media->save();
        }

        if(!empty($request->logo) && $request->logo != $store->logo )
        {
            $store->newlogo = $request->logo;
            $store->statuslogo = "Waiting Approval";
        }

        $update = $store->update();

        if($update){
            return response()->json([
                'success' => true,
                'message' => "Request Sent Successfully .. !!",
                'data' => (object)array()
            ],Response::HTTP_OK);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => "Error in Update Store Info ..!!",
                'data' => (object)array()
            ],Response::HTTP_OK);
        }
    }


    public function updateStoreStatus(Request $request){
        $post = $request->only('is_available');

        $validation = Validator::make($post, [
            'is_available' => 'required'
        ]);

        if ($validation->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validation->messages()->all())
            ],Response::HTTP_OK);
        }

        $user = $this->user;
        $user_id = $this->user['id'];

        if($user['has_store'] == '1'){

            $store = $user->store;

            if(empty($store)){
                return response()->json([
                    'success' => false,
                    'message' => "Invalid User Info for this Store .. !!",
                    'data' => (object)array()
                ],Response::HTTP_OK);
            }

            $store->is_available = (int)$request->is_available;
            $update = $store->update();

            if($update){

                $result = User::with('store')->where('id',$user_id)->first();

                unset($result['api_token']);
                unset($result['password']);

                $path = env('s3_URL').'img/';

                $result['image'] = !empty($result['image'])?$path.'profile/'.$result['image']:'';
                $result['img_name'] = $result['image'];

                if(!empty($result['store'])){
                    $result['store']['banner_name'] = !empty($result['store']['banner'])?$result['store']['banner']:'';
                    $result['store']['banner'] = !empty($result['store']['banner'])?$path.'store/'.$result['store']['banner']:'';

                    $result['store']['logo_name'] = !empty($result['store']['logo'])?$result['store']['logo']:'';
                    $result['store']['logo'] = !empty($result['store']['logo'])?$path.'store/logo/'.$result['store']['logo']:'';

                    $result['store']['is_available'] = boolval($result['store']['is_available']);
                }

                return response()->json([
                    'success' => true,
                    'message' => "Store Status Updated Successfully .. !!",
                    'data' => $result
                ],Response::HTTP_OK);
            }
            else{
                return response()->json([
                    'success' => false,
                    'message' => "Error in Update Store Status ..!!",
                    'data' => (object)array()
                ],Response::HTTP_OK);
            }
        }
        else{
            return response()->json([
                'success' => false,
                'message' => "Invalid User Info for this Store .. !!",
                'data' => (object)array()
            ],Response::HTTP_OK);
        }
    }
    
}