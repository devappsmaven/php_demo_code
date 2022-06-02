<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use DB;
use App\User;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Category;

use App\Theme;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /*public function showResetForm()
    {
        $theme = DB::table('themes')->where('active', '=', 1)->first()->name;
        return view('passwords.reset',compact('theme'));
    }*/

    public function showResetForm(Request $request, $token = null)
    {
        $email = $request->email;
        $theme = Theme::where('active', '=', 1)->first();
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        return view('auth.passwords.reset',compact('theme','token','email','productcategories','templatecategories'));
    }

    public function reset(Request $request)
    {
        $user = User::where('email',$request->get('email'))->first();
        if($user)
        {
            $password = $request->get('password');
            $user->password = Hash::make($password);
            $user->setRememberToken(Str::random(60));
            $user->save();
            DB::table('password_resets')->where('email', $user->email)->delete();
            $this->guard()->login($user);
            return redirect('/login')->with('success', 'Your password has been reset!');
        }
        else 
        {
            return back()->with('danger', 'This password reset token is invalid.!');
        }
    }
}
