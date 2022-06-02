<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;  
use Illuminate\Support\Facades\Validator;
use App\User;
use DB;
use Stripe;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->user = JWTAuth::user();
    }

    public function index()
    {
        // Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Stripe::setApiKey('sk_test_51HI7L2CxGdwtG3G5qHquPasArvyUK1gIFzPHwt2D77niXhplXhHGPiD2YUZ7UFfcEPo9DrKvrwIwNsxcEGxDSjl400ZZunVG1t');

        // $account = Stripe\Account::create(array(
        //     "country" => "US", 
        //     "managed" => false,
        //     "email" => 'ramandeep.kaur@appsmaventech.com',
        //     "external_account" => array(
        //         "object" => "bank_account", 
        //         "account_number" => '000999999991', 
        //         "country" => "US",
        //         "currency" => "usd", 
        //         "routing_number" => '110000000', 
        //         "account_holder_type" => "individual", 
        //         "account_holder_name" => 'Ramandeep Kaur'
        //     ) 
        // )); 


        // $account = \Stripe\Account::create(array(
        //     'type' => 'custom',
        //     'country' => 'US',
        //     'email' => 'ramandeep.kaur@appsmaventech.com',
        //     'capabilities' => [
        //         'card_payments' => ['requested' => true],
        //         'transfers' => ['requested' => true],
        //     ], 
        // )); 


        

        // echo json_encode($account);

        // $transfer = \Stripe\Payout::create([
        //     'amount' => 1000,
        //     'currency' => 'inr',
        //     'destination' => 'acct_1KQV9ySH7BAXD232',ca_L6jOHskNGrnqXYhxLJCm1AjgElH4ceIU
        // ]);

        $transfer = Stripe\Transfer::create ([
            "amount" =>  "700",
            "currency" => "usd",
            "destination" => 'acct_1KQV9ySH7BAXD232',
            "transfer_group" => "ORDER_95"
        ]);

        echo json_encode($transfer);
    }
}