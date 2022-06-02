<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;  
use Illuminate\Support\Facades\Validator;
use DB;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function __construct()
    {   
        $this->user = JWTAuth::user();
    }

    public function index(Request $request)
    {
        $post = $request->only('type','display_name','side','image');
        
        $validation = Validator::make($request->all(), [
            'type' => 'required|string|min:1',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg',
        ]);

        if ($validation->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validation->messages()->all()),
                'data' => (object)array()
            ],Response::HTTP_OK);
        }

        $user = $this->user;
        $user_id = $user['id'];

        if($request->type == 'designs' || $request->type == 'preview'){
            $validator = Validator::make($post, [
                'display_name' => 'required|string|min:1',
                'side' => 'required|string|min:1'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => implode(', ',$validator->messages()->all()),
                    'data' => (object)array()
                ],Response::HTTP_OK);
            }

            $consecutive = DB::table('consecutive')->where('name','design')->first();
            $path = 'designs/designstudio/'.$user->username.'/'.$user->username.'_'.str_slug($request->display_name);

            if($request->type == 'designs'){
                $filename = $user->username.'_'.str_slug($request->display_name).'_'.sprintf("%'.09d", $consecutive->quantity)."_".$request->side.".".$request->image->extension();
            }
            elseif($request->type == 'preview'){
                $filename = $request->side.'_preview'.'.'.$request->image->extension();
            } 
        }
        elseif($request->type == 'store'){
            $path = 'img/store';
            $filename = str_random(16).time().'.'.$request->image->extension();
        }
        elseif($request->type == 'profile'){
            $path = 'img/profile';
            $filename = "user_".$user_id.'_'.time().'.'.$request->image->extension();
        }
        elseif($request->type == 'logo'){
            $path = 'img/store/logo';
            $filename = str_random(10).time().'.'.$request->image->extension();
        }
        elseif($request->type == 'chat'){
            $path = 'img/chat';
            $filename = "user_".$user_id.'_'.time().'.'.$request->image->extension();
        }

        $file = $request->file('image');

        $upload = $file->storeAs($path, $filename,['disk'=>'s3', 'visibility'=>'public']);
        $upload = Storage::disk('s3')->url($upload);  

        $attr = list($width, $height, $type, $attr) = getimagesize($file);
        $list['width'] = $attr[0];
        $list['height'] = $attr[1];
        // $list['type'] = $attr[2];
        // $list['attr'] = $attr[3];

        $result = array(
            'file_name' => $filename,
            'file_url' => $upload,
            'side' => !empty($request->side)?$request->side:'',
            'type' => $request->type,
            'file_extension' => $request->image->extension(),
            'bytes' => $file->getSize(),
            'list' => $list
        );

        return response()->json([
            'success' => true,
            'message' => "Upload Images",
            'data' => $result
        ],Response::HTTP_OK);   
    }

    public function index2(Request $request){
    	$request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        // $files = Storage::disk('s3')->files('images');
        $file = $request->file('image');
        $path = 'img/store';
        $imageName = time().'.'.$request->image->extension();  
     	
        // foreach ($files as $file) {
		// 	$images[] = [
		// 		'name' => str_replace('images/', '', $file),
		// 		'src' => $url . $file
		// 	];
		// }

        // $path = Storage::disk('s3')->put('images/data', $request->image);
        // $path = Storage::disk('s3')->url($path);

        
        // $upload = Storage::disk('s3')->putFileAs('',$imageName, $file,['visibility' => 'public']);
        // $upload = Storage::disk('s3')->url($upload);
        //$upload = 'https://vividcustom.s3.us-east-2.amazonaws.com/img/store/4uValpqiDFEJt3op3dQT0eayqLu8KKQLKdTDH4NJ.jpeg';
        $upload = $file->storeAs($path, $imageName,['disk'=>'s3', 'visibility'=>'public']);
        $upload = Storage::disk('s3')->url($upload);  

        // $array = array(
        //     'bytes' => $file->getSize(),
        //     'list' => list($width, $height, $type, $attr) = getimagesize($file)
        // );
        /* Store $imageName name in DATABASE from HERE */
		return response()->json([
            'success' => true,
            'message' => "Upload Images",
            'data' => $upload,
            'file' => $imageName
        ],Response::HTTP_OK);   
    }
}