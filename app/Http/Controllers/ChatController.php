<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Store;
use App\ChatRelation;
use DB;
use Illuminate\Support\Facades\Hash;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;  
use Illuminate\Support\Facades\Validator;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Exception\FirebaseException;
use Throwable;

class ChatController extends Controller
{
    public function __construct()
    {   
        $this->user = JWTAuth::user();
        $service = ServiceAccount::fromJsonFile(env('FB_FILE'));
        $firebase = (new Factory)
            ->withServiceAccount($service)
            ->withDatabaseUri(env('FB_DB_URL'))
            ->create();

        $this->db = $firebase->getDatabase();
    }

    public function index(Request $request)
    {
        $post = $request->only('user_1','user_2');

        $validator = Validator::make($post, [
            'user_1' => 'required|int|min:1',
            'user_2' => 'required|int|min:1'
        ]);

        $user = $this->user;
        $user_id = $user->id;

        $relation_1 = ChatRelation::where('user_1',$request->user_1)->where('user_2',$request->user_2)->first();
        $relation_2 = ChatRelation::where('user_1',$request->user_2)->where('user_2',$request->user_1)->first();

        if(!empty($relation_1) || !empty($relation_2))
        {
            return response()->json([
                'success' => false,
                'message' => "Chat Relation already Exist",
                'data' => (object)array()
            ],Response::HTTP_OK);
        }

        $array = array(
            'user_1' => $request->user_1,
            'user_2' => $request->user_2
        );

        $firebase_relation = $this->db->getReference('Vivid Custom/chat_relations/')->push($array)->getKey();

        $relation = new ChatRelation;
        $relation->user_1 = $request->user_1;
        $relation->user_2 = $request->user_2;
        $relation->firebase_relation_id = $firebase_relation;
        $relation->save();

        return response()->json([
            'success' => true,
            'message' => "Chat Relation create Successfully ...!!",
            'data' => $relation
        ],Response::HTTP_OK);
    }

    public function getChatList()
    {
        $user = $this->user;
        $user_id = $user->id;

        $search = !empty($_GET['search'])?$_GET['search']:'';

        if(isset($search) && !empty($search))
        {
            $users = User::where('status','Enable')->where('firstname','LIKE','%'.$search.'%')->orWhere('lastname','LIKE','%'.$search.'%')->pluck('id');

            if(count($users) > 0)
            {
                $relations = ChatRelation::whereIn('user_1',$users)->orWhereIn('user_2',$users)->groupBy('id')->orderby('id','DESC')->get();
            }
            else
            {
                $relations = array();
            }
        }
        else
        {
            $relations = ChatRelation::where('user_1',$user_id)->orWhere('user_2',$user_id)->groupBy('id')->orderby('id','DESC')->get();
        }

        if(count($relations) > 0)
        {
            foreach($relations as $relation)
            {
                $chats = $this->db->getReference('Vivid Custom/Chats/'.$relation->firebase_relation_id)->getvalue();
                $chat = !empty($chats)?end($chats):(object)array();

                $sender_id = ($relation->user_1 == $user_id)?$relation->user_1:$relation->user_2;
                $receiver_id = ($relation->user_2 == $user_id)?$relation->user_1:$relation->user_2;

                $sender = User::where('id',$sender_id)->first();
                $receiver = User::where('id',$receiver_id)->first();

                $data['relation_id'] = $relation->firebase_relation_id;
                $data['sender_id'] = $sender->id;
                $data['sender_name'] = $sender->firstname.' '.$sender->lastname;
                $data['sender_image'] = env('s3_URL').'img/profile/'.$sender->image;
                $data['sender_username'] = $sender->username;
                $data['receiver_id'] = $receiver->id;
                $data['receiver_name'] = $receiver->firstname.' '.$receiver->lastname;
                $data['receiver_image'] = env('s3_URL').'img/profile/'.$receiver->image;
                $data['receiver_username'] = $receiver->username;
                $data['chat'] = $chat;

                $result[] = $data;
            }
        }
        else
        {
            $result = array();
        }


        return response()->json([
            'success' => true,
            'message' => "User Chats",
            'data' => $result
        ],Response::HTTP_OK);
    }

    public function getChatList2()
    {
        $user = $this->user;
        $user_id = $user->id;

        $service = ServiceAccount::fromJsonFile('/var/www/html/api/public/files/firebase.json');
        $firebase = (new Factory)
            ->withServiceAccount($service)
            ->withDatabaseUri('https://chatdemo2-ceb79-default-rtdb.firebaseio.com/')
            ->create();

        $db = $firebase->getDatabase();

        $relations = ChatRelation::where('user_1',$user_id)->orWhere('user_2',$user_id)->groupBy('id')->orderby('id','DESC')->get();

         $chats = $db->getReference('Vivid Custom/Chats/1')->getvalue();
                $chat = !empty($chats)?end($chats):(object)array();

        $time = $chat['time'];

        //$res =date('Y-m-d', $time);
        $timestamp = $time;
        $datetimeFormat = 'Y-m-d H:i:s';

        $date = new \DateTime();
        $date->setTimestamp($timestamp);
        echo $date->format($datetimeFormat);die;

        return response()->json([
          $res
        ],Response::HTTP_OK);
    }
}