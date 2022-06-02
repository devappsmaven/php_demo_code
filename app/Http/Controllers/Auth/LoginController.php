<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use User;
use DB;
use App\Theme;
use Iluminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/my-account';

    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except(['logout', 'locked', 'unlock']);
    }
    
    public function username()
    {
       $loginType = request()->input('email');
        $this->username = filter_var($loginType, FILTER_VALIDATE_EMAIL) ? 'email' : 'email';
        request()->merge([$this->username => $loginType]);
        return property_exists($this, 'username') ? $this->username : 'email';
    }

    public function locked()
    {
        if (!session('lock-expires-at')) {
            return redirect('/home');
        }
        if (session('lock-expires-at')> now()) {
            return redirect('/home');
        }
        return view('auth.locked');
    }
    public function unlock(Request $request) {
        $check = Hash::check ($request->input('password'), $request->user()->password);
        if (!$check) {
            return redirect()->route('login.locked')->withErrors([
                'Your password does not match'
            ]);
        }
        session(['lock-expires-at' => now()->addMinutes($request->user()->getLockoutTime())]);
        return redirect('/');
    }


    public function showLoginForm()
    {
        $theme = Theme::where('active', '=', 1)->first();
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        return view('auth.login',compact('theme','productcategories','templatecategories'));
    }

    protected function sendLoginResponse()
    {
        request()->session()->regenerate();

        $this->clearLoginAttempts(request());
        
        $user = auth()->user();

        if (!$user->verified) 
        {
            if($user->type == "Admin")
            {                
                $this->guard()->logout();
                request()->session()->invalidate();
                return back()->with('danger', 'Sorry your username or email cannot be identified.');
            }
            else
            {
                $this->guard()->logout();
                request()->session()->invalidate();
                return back()->with('warning', 'You need to confirm your account. We have sent you an activation code, please check your email.');
            }
            
        }
        else
        {
            if($user->type == "Admin")
            {
                $this->guard()->logout();
                request()->session()->invalidate();
                return back()->with('danger', 'Sorry your username or email cannot be identified.');
            }
            else
            {
                return back()->with('info', 'Dear member, I welcome you to the Vividcustoms group with much love.');
            }
        }
        //return redirect()->intended($this->redirectPath());
        
    }
   
}
