<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;  
use Illuminate\Support\Facades\Validator;
use App\Design;
use App\DesignSide;
use App\Category;
use App\SubCategory;
use App\Color;
use App\Cart;
use App\Product;
use App\ProductCategory;
use DB;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class DesignStudioController extends Controller
{
    public function __construct()
    {
        $this->user = JWTAuth::user();
    }

    public function saveDesign(Request $request)
    {
        $post = $request->only('display_name','category_id','subcategory_id','product_id','size_id','price','save_type','front','front_design_image','front_full_image','front_width','front_height','left','left_design_image','left_full_image','left_width','left_height','back','back_design_image','back_full_image','back_width','back_height','right','right_design_image','right_full_image','right_width','right_height','selling_price');


        $validator = Validator::make($post, [
            'display_name' => 'required|string',
            'category_id' => 'required|min:1',
            'subcategory_id' => 'required|min:1',
            'product_id' => 'required|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all())
            ],Response::HTTP_OK);
        }

        $sides = array('front', 'left', 'back', 'right');

        $errors = array();
        $check;
        foreach($sides as $side){
            if($post[$side] == 'true' && !empty($post[$side])){
                $validation = Validator::make($post, [
                    $side.'_design_image' => 'required|string',
                    $side.'_full_image' => 'required|string',
                    $side.'_width' => 'required|string|min:1',
                    $side.'_height' => 'required|string|min:1',
                ]);

                if ($validation->fails()) {
                    $check = '1';
                    $errors[] = implode(', ',$validation->messages()->all());
                }
                else{
                    $check = '0';
                }
            }
        }

        if($check != '0'){
            return response()->json([
                'success' => false,
                'message' => implode(",",$errors)
            ],Response::HTTP_OK);
        }

        $user = $this->user;
        $user_id = $user['id'];
   
        if(!empty($user_id)){
            $category = Category::where('name',$user->username)->first();

            if(empty($category)){
                $category = new Category();
                $category->name = $user->username;
                $category->status = 'Disable';
                $category->description = $user->username;
                $category->author = $user->firstname . " " . $user->lastname;
                $category->type = "Designstudio";
                $category->slug = str_slug($user->username);
                $category->save();
            }

            $subcategory = SubCategory::where('category_id',$category->id)->where('name',$user->username.'_'.str_slug($post['display_name']))->first();

            if(empty($subcategory)){
                $subcategory = new SubCategory();
                $subcategory->name = $user->username.'_'.str_slug($post['display_name']);
                $subcategory->slug = str_slug($user->username.'_'.str_slug($post['display_name']));
                $subcategory->status = 'Disable';
                $subcategory->description = $user->username;
                $subcategory->author = $user->firstname . " " . $user->lastname;
                $subcategory->type = "Designstudio";
                $subcategory->category_id = $category->id;
                $subcategory->save();
            }

            if($post['save_type'] == 'publish') {
                $total = $post['selling_price'];
            }
            else {
                $total = $post['price'];
            }


            $consecutivedesign  = DB::table('consecutive')->where('name','design')->first();
            $post['save_type'] = !empty($post['save_type'])?$post['save_type']:'';

            $designsave = new Design();
            $designsave->title = $user->username.'_'.str_slug($post['display_name']).'_'.sprintf("%'.09d", $consecutivedesign->quantity);
            $designsave->displayname = $post['display_name'];
            $designsave->user_id = $user->id;

            if($post['save_type'] == 'publish'){
               $designsave->selling_price = !empty($post['selling_price'])?$post['selling_price']:$post['price']; 
            }

            $designsave->number_shirts = 0;
            $designsave->price_per_shirt = $post['price'];
            $designsave->total = $total;
            $designsave->comment = "";
            $designsave->editable = true;
            $designsave->status = "Created";
            $designsave->type = "Designstudio";
            $designsave->product_id = $post['product_id'];
            $designsave->category_id = $category->id;
            $designsave->subcategory_id = $subcategory->id;
            $designsave->size_id = $post['size_id'];
            $designsave->save_type = $post['save_type'];
            $designsave->is_purchased = '0';
            // $designsave->parent_id = !empty($post['parent_id'])?$post['parent_id']:'';

            $insert_designs = $designsave->save();

            if($insert_designs){
                $update_count = DB::table('consecutive')->where('name','design')->update(['quantity' => ($consecutivedesign->quantity+1)]);

                if($update_count){
                    $designs_count = 0;
                    $insert_count = 0;

                    foreach($sides as $side){

                        if($post[$side] == 'true' && !empty($post[$side])){
                            $designs_count++;

                            $designImg = $post[$side.'_design_image'];
                            $fullImg = $post[$side.'_full_image'];

                            $designside = new DesignSide();
                            $designside->side = $side;
                            $designside->image = $designImg;
                            $designside->svg = $designImg;
                            $designside->width_div = $post[$side.'_width'];
                            $designside->height_div = $post[$side.'_height'];
                            $designside->width_canvas = $post[$side.'_width'];
                            $designside->height_canvas = $post[$side.'_height'];
                            $designside->design_image = $designImg;
                            $designside->design_product_image = $fullImg;
                            $designside->design_id = $designsave->id;

                            $insert_design_side = $designside->save();

                            if($insert_design_side){
                                $insert_count++;
                            }
                        }
                    }

                    $designs = Design::where('id',$designsave->id)->first();

                    if($designs_count == $insert_count){
                        return response()->json([
                            'success' => true,
                            'message' => "Design Saved Successfully !!",
                            'data' => $designs
                        ],Response::HTTP_OK);
                    }
                    else{
                        return response()->json([
                            'success' => false,
                            'message' => "Unable to Save All Design Images"
                        ],Response::HTTP_OK);
                    }
                }
                else{
                    return response()->json([
                        'success' => false,
                        'message' => "Unable to Update Consecutive Count"
                    ],Response::HTTP_OK);
                }
            }
            else{
                return response()->json([
                    'success' => false,
                    'message' => "Unable to Save Design ...!!"
                ],Response::HTTP_OK);
            }
        }
        else{
            return response()->json([
                'success' => false,
                'message' => "Invalid User"
            ],Response::HTTP_OK);
        }
    }

    public function showAllDesigns(Request $request)
    {
        $colors = array();
        $result = array();
        $post = $request->only('search','filters','subcategory_id','brand','color_name','fabric','min_price_range', 'max_price_range', 'sort');

        $user = $this->user;
        $user_id = $user['id'];

        $type = $_GET['type'];

        $myDesigns = Design::with('products','designsides','color','size')->where('user_id',$user_id)->where('is_purchased','0')->orderBy('id', 'DESC')->get();

        if(count($myDesigns) > 0){
            if(!empty($post['filters']) && $post['filters'] == 'true'){

                $designs = Design::with('products','designsides','color','size')->where('user_id',$user_id)->where('is_purchased','0')->get();

                if(count($designs) > 0){

                    if(count($post['subcategory_id']) > 0 || count($post['brand']) > 0 || count($post['color_name']) > 0 || count($post['fabric']) > 0 || !empty($post['min_price_range']) || !empty($post['max_price_range'])|| !empty($post['sort'])){

                        if(count($post['color_name']) > 0){
                            $color_ids = Color::whereIn('colorfamily', $post['color_name'])->get(['id']);

                            foreach($color_ids as $value){
                                $colors[] = $value['id'];
                            }
                        }

                        $arr1 = Product::whereBetween('price', [$post['min_price_range'], $post['max_price_range']])->orWhereIn('brand', $post['brand'])->orWhereIn('fabric',$post['fabric'])->orWhereIn('color_id',$colors)->where('status','Enable')->get(['id']);

                        $arr2 = ProductCategory::whereIn('subcategory_id',$post['subcategory_id'])->get(['id']);

                        $res = array($arr1,$arr2);

                        foreach($res as $value){
                            foreach($value as $val){
                                $result[] = $val['id'];
                            }
                        }

                        $result = array_unique($result);

                        $result = array_values($result);

                        if(!empty($post['sort'])){
                            if($post['sort'] == 'Higher Price'){
                                $order_key = 'price_per_shirt';
                                $order_value = 'DESC';
                            }
                            elseif($post['sort'] == 'Lower Price'){
                                $order_key = 'price_per_shirt';
                                $order_value = 'ASC';
                            }
                            elseif($post['sort'] == 'A-Z'){
                                $order_key = 'displayname';
                                $order_value = 'ASC';
                            }
                            elseif($post['sort'] == 'Z-A'){
                                $order_key = 'displayname';
                                $order_value = 'DESC';
                            }
                        }
                        else{
                            $order_key = 'id';
                            $order_value = 'DESC';
                        }

                        if(count($result) == '0'){
                            foreach($designs  as $design){
                                $products = $design['product_id'];
                                array_push($result,$products);
                            }
                        }

                        //echo json_encode($result);die;

                        $myDesigns = Design::with('products','designsides','color','size')->where('user_id',$user_id)->where('is_purchased','0')->whereIn('product_id',$result)->orderBy($order_key,$order_value)->get();
                    }
                    else{
                        if($type == 'publish'){
                            $myDesigns = Design::with('products','designsides','color','size')->where('user_id',$user_id)->where('save_type', $type)->orderBy('id', 'DESC')->get();
                        }
                        else{
                            $myDesigns = Design::with('products','designsides','color','size')->where('user_id',$user_id)->where('save_type', $type)->where('is_purchased','0')->orderBy('id', 'DESC')->get();
                        }
                    }
                }
                else{
                    if($type == 'publish'){
                        $myDesigns = Design::with('products','designsides','color','size')->where('user_id',$user_id)->where('save_type', $type)->orderBy('id', 'DESC')->get();
                    }
                    else{
                        $myDesigns = Design::with('products','designsides','color','size')->where('user_id',$user_id)->where('save_type', $type)->where('is_purchased','0')->orderBy('id', 'DESC')->get();
                    }
                }
            }
            else{

                if(!empty($type) && $type != 'all'){
                    if(!empty($post['search'])){
                        if($type == 'publish'){
                            $myDesigns = Design::with('products','designsides','color','size')->where('displayname','LIKE','%'.$post['search'].'%')->where('user_id',$user_id)->where('save_type', $type)->orderBy('id', 'DESC')->get();
                        }
                        else{
                            $myDesigns = Design::with('products','designsides','color','size')->where('displayname','LIKE','%'.$post['search'].'%')->where('user_id',$user_id)->where('save_type', $type)->where('is_purchased','0')->orderBy('id', 'DESC')->get();
                        }
                    }
                    else{
                        if($type == 'publish'){
                            $myDesigns = Design::with('products','designsides','color','size')->where('user_id',$user_id)->where('save_type', $type)->orderBy('id', 'DESC')->get();
                        }
                        else{
                            $myDesigns = Design::with('products','designsides','color','size')->where('user_id',$user_id)->where('save_type', $type)->where('is_purchased','0')->orderBy('id', 'DESC')->get();
                        }
                    }
                }
                elseif($type == 'all'){
                    if(!empty($post['search'])){
                        $myDesigns = Design::with('products','designsides','color','size')->where('displayname','LIKE','%'.$post['search'].'%')->where('user_id',$user_id)->where('is_purchased','0')->orderBy('id', 'DESC')->get();
                    }
                    else{
                        $myDesigns = Design::with('products','designsides','color','size')->where('user_id',$user_id)->where('is_purchased','0')->orderBy('id', 'DESC')->get();
                    }
                }
                else{
                    if(!empty($post['search'])){
                         $myDesigns = Design::with('products','designsides','color','size')->where('displayname','LIKE','%'.$post['search'].'%')->where('user_id',$user_id)->where('is_purchased','0')->orderBy('id', 'DESC')->get();
                    }
                    else{
                        $myDesigns = Design::with('products','designsides','color','size')->where('user_id',$user_id)->where('is_purchased','0')->orderBy('id', 'DESC')->get();
                    }
                }
            }

            //print_r($myDesigns);die;

            foreach($myDesigns as $key => $value){
                $color = Color::where('id',$value['products']['color_id'])->first();
                $in_cart = Cart::where('user_id',$user_id)->where('design_id',$value['id'])->first();
                $sides = $value['designsides'];
                $design_product_image = '';
                $design_thumb_image = '';
                foreach($sides as $side){
                    $design_product_image = $sides[0]['design_product_image']?$sides[0]['design_product_image']:'';
                    $design_thumb_image = $sides[0]['design_thumb_img'];
                }

                $value['product_name'] = $value['products']['name'];
                $value['product_description'] = $value['products']['description'];
                $value['size_name'] = !empty($value['size'])?$value['size']['name']:'';
                $value['color_hex_code'] = !empty($color)?$color['hex']:'';
                $value['price_per_item'] = $value['price_per_shirt'];
                $value['quantity'] = '1';
                $value['design_image'] = $design_product_image;
                $value['in_cart'] = !empty($in_cart)?true:false;

                unset($myDesigns[$key]['products']);
                unset($myDesigns[$key]['color']);
                unset($myDesigns[$key]['size']);
            }

            return response()->json([
                'success' => true,
                'message' => "User Designs",
                //'count' => count($myDesigns),
                'data' => $myDesigns
            ]);
        }
        else{
            return response()->json([
                'success' => true,
                'message' => "Empty Designs",
                'data' => $myDesigns
            ]);
        }
    }

    public function showSingleDesign(Request $request)
    {
        $post = $request->only('design_id');

        $validator = Validator::make($post, [
            'design_id' => 'required|int|min:1',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all())
            ],Response::HTTP_OK);
        }

        $user = $this->user;
        $user_id = $user['id'];
        $design_id = $request->design_id;

        $myDesigns = Design::with('products','designsides','color','size')->where('id',$design_id)->first();

        $color = Color::where('id',$myDesigns['products']['color_id'])->first();

        $myDesigns['product_name'] = $myDesigns['products']['name'];
        $myDesigns['product_description'] = $myDesigns['products']['description'];
        $myDesigns['size_name'] = !empty($myDesigns['size'])?$myDesigns['size']['name']:'';
        $myDesigns['color_hex_code'] = !empty($color)?$color['hex']:'';
        $myDesigns['price_per_item'] = $myDesigns['price_per_shirt'];
        $myDesigns['design_image'] = $myDesigns['designsides'][0]['design_product_image'];

        unset($myDesigns['products']);
        unset($myDesigns['color']);
        unset($myDesigns['size']);

        //$default = Design::with('designsides')->where('id','463')->first();
       
        // if(count($myDesigns) > 0){
        if(!empty($myDesigns)){
            return response()->json([
                'success' => true,
                'message' => "User Designs",
                'data' => $myDesigns
            ]);
        }
        else{
            return response()->json([
                'success' => true,
                'message' => "Empty Designs",
                'data' => array()
            ]);
        } 
    }

    public function showFilteredData(Request $request)
    {
        $post = $request->only('subcategory_id','brand','color_name','fabric','price_range','sort');

        if(count($request->color_name) > 0){
            $color_ids = Color::whereIn('colorfamily', $request->color_name)->get(['id']);

            foreach($color_ids as $value){
                $colors[] = $value['id'];
            }
        }

        $arr1 = Product::whereIn('brand', $post['brand'])->orWhereIn('fabric',$post['fabric'])->orWhereIn('color_id',$colors)->where('status','Enable')->get(['id']);

        $arr2 = ProductCategory::whereIn('subcategory_id',$post['subcategory_id'])->get(['id']);

        $res = array($arr1,$arr2);

        foreach($res as $value){
            foreach($value as $val){
                $result[] = $val['id'];
            }
        }

        return response()->json([
            'count' => count($result),
            'data' => $result
        ]);
    }

    public function saveDesign_old(Request $request)
    {
        $post = $request->only('display_name', 'category_id', 'subcategory_id', 'product_id', 'front', 'front_design_image', 'front_design_image_ext', 'front_thumb_image', 'front_full_image', 'front_full_image_ext', 'front_width', 'front_height', 'left', 'left_design_image', 'left_design_image_ext', 'left_thumb_image', 'left_full_image', 'left_full_image_ext',  'left_width', 'left_height', 'back', 'back_design_image', 'back_design_image_ext', 'back_thumb_image', 'back_full_image', 'back_full_image_ext',  'back_width', 'back_height', 'right', 'right_design_image', 'right_design_image_ext', 'right_thumb_image', 'right_full_image', 'right_full_image_ext', 'right_width', 'right_height','size_id','price','save_type');

        if(!isset($post['price']) || !isset($post['size_id'])){
            $post['price'] = "0.00";
            $post['size_id'] = '20';
        }

        $validator = Validator::make($post, [
            'display_name' => 'required|string',
            'category_id' => 'required|min:1',
            'subcategory_id' => 'required|min:1',
            'product_id' => 'required|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => implode(', ',$validator->messages()->all())
            ],Response::HTTP_OK);
        }

        $sides = array('front', 'left', 'back', 'right');

        $errors = array();
        $check;
        foreach($sides as $side){
            if($post[$side] == 'true' && !empty($post[$side])){
                $validation = Validator::make($post, [
                    $side.'_design_image' => 'required|string',
                    $side.'_full_image' => 'required|string',
                    $side.'_width' => 'required|string|min:1',
                    $side.'_height' => 'required|string|min:1',
                ]);

                if ($validation->fails()) {
                    $check = '1';
                    $errors[] = implode(', ',$validation->messages()->all());
                }
                else{
                    $check = '0';
                }
            }
        }

        if($check != '0'){
            return response()->json([
                'success' => false,
                'message' => implode(",",$errors)
            ],Response::HTTP_OK);
        }

        $user = $this->user;
        $user_id = $user['id'];
        //echo $user_id;die;
        if(!empty($user_id)){
            $pathcategory = public_path().'/designs/designstudio/'.$user->username;
            if(!\File::exists($pathcategory))
            {
                \File::makeDirectory($pathcategory, 0777, true, true);
                $category = new Category();
                $category->name = $user->username;
                $category->status = 'Disable';
                $category->description = $user->username;
                $category->author = $user->firstname . " " . $user->lastname;
                $category->type = "Designstudio";
                $category->slug = str_slug($user->username);
                $category->save();
            }
            else
            {
                $category = Category::where('name',$user->username)->first();
            }

           // print_r($user);die;

            if(!empty($category))
            {
                $pathsubcategory = public_path().'/designs/designstudio/'.$user->username.'/'.$user->username.'_'.str_slug($post['display_name']);
                if(!\File::exists($pathsubcategory))
                {
                    \File::makeDirectory($pathsubcategory, 0777, true, true);
                    $subcategory = new SubCategory();
                    $subcategory->name = $user->username.'_'.str_slug($post['display_name']);
                    $subcategory->slug = str_slug($user->username.'_'.str_slug($post['display_name']));
                    $subcategory->status = 'Disable';
                    $subcategory->description = $user->username;
                    $subcategory->author = $user->firstname . " " . $user->lastname;
                    $subcategory->type = "Designstudio";
                    $subcategory->category_id = $category->id;
                    $subcategory->save();
                }
                else
                {
                    $subcategory = SubCategory::where('category_id',$category->id)->where('name',$user->username.'_'.str_slug($post['display_name']))->first();
                }
                if($subcategory){
                    $consecutivedesign  = DB::table('consecutive')->where('name','design')->first();

                    $post['save_type'] = !empty($post['save_type'])?$post['save_type']:'';

                    $designsave = new Design();
                    $designsave->title = $user->username.'_'.str_slug($post['display_name']).'_'.sprintf("%'.09d", $consecutivedesign->quantity);
                    $designsave->displayname = $post['display_name'];
                    $designsave->user_id = $user->id;
                    $designsave->selling_price = 0.00;
                    $designsave->number_shirts = 0;
                    $designsave->price_per_shirt = $post['price'];
                    $designsave->total = 0;
                    $designsave->comment = "";
                    $designsave->editable = true;
                    $designsave->status = "Created";
                    $designsave->type = "Designstudio";
                    $designsave->product_id = $post['product_id'];
                    $designsave->category_id = $category->id;
                    $designsave->subcategory_id = $subcategory->id;
                    $designsave->size_id = $post['size_id'];
                    $designsave->save_type = $post['save_type'];
                    $designsave->is_purchased = '0';

                    $insert_designs = $designsave->save();

                    if($insert_designs){

                        $path = public_path().'/designs/designstudio/'.$user->username.'/'.$user->username.'_'.str_slug($post['display_name']);

                        $update_count = DB::table('consecutive')->where('name','design')->update(['quantity' => ($consecutivedesign->quantity+1)]);

                        if($update_count){
                            $designs_count = 0;
                            $insert_count = 0;

                            foreach($sides as $side){

                                if($post[$side] == 'true' && !empty($post[$side])){
                                    $designs_count++;

                                    // $designImg = $request->file($side.'_design_image');
                                    // $fullImg = $request->file($side.'_full_image');

                                    // $preview = $side.'_preview'.'.'.$designImg->getClientOriginalExtension();
                                    // $designs = $user->username.'_'.str_slug($post['display_name']).'_'.sprintf("%'.09d", $consecutivedesign->quantity)."_".$side.'.'.$designImg->getClientOriginalExtension();
                                    // $coverImg = $user->username.'_'.str_slug($post['display_name']).'_'.sprintf("%'.09d", $consecutivedesign->quantity)."_".$side.".".$fullImg->getClientOriginalExtension();

                                    // $preview_upload = $designImg->move($path, $preview);

                                    // // $preview_img = $path.'/'.$preview; 

                                    // // \File::copy($preview_img, $designs);


                                    // $cover_upload =  $fullImg->move($path, $coverImg);

                                    $designImg = $post[$side.'_design_image'];
                                    $fullImg = $post[$side.'_full_image'];
                                    $thmImg = !empty($post[$side.'_thumb_image'])?$post[$side.'_thumb_image']:'';
                                    $designImgExt = $post[$side.'_design_image_ext'];
                                    $fullImgExt = $post[$side.'_full_image_ext'];


                                    $preview = $side.'_preview'.'.'.$designImgExt;
                                    $coverImg = $user->username.'_'.str_slug($post['display_name']).'_'.sprintf("%'.09d", $consecutivedesign->quantity)."_".$side.".".$fullImgExt;
                                    $thumbImg = $user->username.'_'.str_slug($post['display_name']).'_'.sprintf("%'.09d", $consecutivedesign->quantity)."_".$side."_thumb.".$fullImgExt;

                                    $move_design_img = file_put_contents($path.'/'.$preview,base64_decode($designImg));

                                    $move_cover_img = file_put_contents($path.'/'.$coverImg,base64_decode($fullImg));

                                    if(!empty($thmImg)){
                                        $move_thumb_img = file_put_contents($path.'/'.$thumbImg,base64_decode($thmImg));
                                    }


                                    $url = env('APP_URL').'public/designs/designstudio/'.$user->username.'/'.$user->username.'_'.str_slug($post['display_name']);

                                    $designside = new DesignSide();

                                    $designside->side = $side;
                                    $designside->image = $url.'/'.$preview;
                                    $designside->svg = $url.'/'.$preview;
                                    $designside->width_div = $post[$side.'_width'];
                                    $designside->height_div = $post[$side.'_height'];
                                    $designside->width_canvas = $post[$side.'_width'];
                                    $designside->height_canvas = $post[$side.'_height'];
                                    $designside->design_image = $url.'/'.$preview;
                                    $designside->design_product_image = $url.'/'.$coverImg;
                                    $designside->design_thumb_img = $url.'/'.$thumbImg;
                                    $designside->design_id = $designsave->id;

                                    $insert_design_side = $designside->save();

                                    if($insert_design_side){
                                        $insert_count++;
                                    }
                                }
                            }

                            $designs = Design::where('id',$designsave->id)->first();

                            if($designs_count == $insert_count){
                                return response()->json([
                                    'success' => true,
                                    'message' => "Design Saved Successfully !!",
                                    'data' => $designs
                                ],Response::HTTP_OK);
                            }
                            else{
                                return response()->json([
                                    'success' => false,
                                    'message' => "Unable to Save All Design Images"
                                ],Response::HTTP_OK);
                            }
                        }
                        else{
                            return response()->json([
                                'success' => false,
                                'message' => "Unable to Update Consecutive Count"
                            ],Response::HTTP_OK);
                        }
                    }
                    else{
                        return response()->json([
                            'success' => false,
                            'message' => "Unable to Save Design Info"
                        ],Response::HTTP_OK);
                    }
                }
                else{
                    return response()->json([
                        'success' => false,
                        'message' => "Unable to Create Sub-Category"
                    ],Response::HTTP_OK);
                }
            }
            else{
                return response()->json([
                    'success' => false,
                    'message' => "Unable to Create Category"
                ],Response::HTTP_OK);
            }
        }
        else{
            return response()->json([
                'success' => false,
                'message' => "Invalid User"
            ],Response::HTTP_OK);
        }
    }

}