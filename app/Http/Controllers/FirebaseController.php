<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Exception\FirebaseException;
use Throwable;

class FirebaseController extends Controller
{
    public function __construct()
    {   
        $service = ServiceAccount::fromJsonFile(env('FB_FILE'));
        $firebase = (new Factory)
            ->withServiceAccount($service)
            ->withDatabaseUri(env('FB_DB_URL'))
            ->create();

        $this->db = $firebase->getDatabase();
    }

    public function index()
    {
        $array = array(
            'user_1' => 1,
            'user_2' => 2
        );

        $firebase_relation = $this->db->getReference('Vivid Custom/chat_relations/')->push($array)->getKey();

        echo json_encode($firebase_relation);
    }


    public function index2()
    {
        try{
            $service = ServiceAccount::fromJsonFile(env('FB_FILE'));
            $firebase = (new Factory)->withServiceAccount($service);

            $auth = $firebase->createAuth();

            $userProperties = [
                'email' => 'raman7@yopmail.com',
                'password' => '12345678'
            ];

            $user = $auth->createUser($userProperties);

            echo json_encode($user);
        }
        catch(FirebaseException $err)
        {
            echo json_encode('Message: '.$err->getMessage());
        }
    }

}