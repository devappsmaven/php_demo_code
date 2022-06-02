<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use DB;
use App\User;
use App\Mail\ResetPassword;
use Illuminate\Support\Facades\Mail;
use \Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Category;
use App\Theme;
class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showLinkRequestForm()
    {
        $theme = Theme::where('active', '=', 1)->first();
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        return view('auth.passwords.email',compact('theme','productcategories','templatecategories'));
    }

    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);
        $user = User::where('email',$request->get('email'))->first();
        if (is_null($user)) {
            return back()->with('danger', 'We can\'t find a user with that e-mail address.!');
        }
        else 
        {
            $token = hash_hmac('sha256', Str::random(40), 'secret');

            DB::table('password_resets')->insert([
                'email' => $user->email,
                'token' => $token,
                'created_at' => Carbon::now()->toDateTimeString(),  
                'updated_at' => Carbon::now()->toDateTimeString(),  
            ]);
    
            Mail::to($user->email)->send(new ResetPassword($token));
            return back()->with('success', 'We have e-mailed your password reset link!');    
        }
    }
}
