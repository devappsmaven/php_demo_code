<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\VerifyUser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Mail\WelcomeMail;
use App\Mail\VerifyMail;
use Illuminate\Support\Facades\Mail;
use \Illuminate\Http\Request;
use App\Category;
use App\Theme;
use DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:191'],
            'lastname' => ['required', 'string', 'max:191'],
            'email' => ['required', 'string', 'email', 'max:191', 'unique:users'],
            'username' => ['required', 'string', 'max:191', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user =  User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' =>  Hash::make($data['password']),
            'phone' => $data['phone'],
            'newsletter' => /*$data['newsletter'] == 'on' ? true : */false,
            'type' => 'Customer',
            'status' => 'Disable',
        ]);


        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => str_random(40)
        ]);

        //Mail::to($data['email'])->send(new WelcomeMail($user));

        Mail::to($user->email)->send(new VerifyMail($user));

        return $user;
    }

    public function verifyUser($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if(isset($verifyUser) ){
            $user = $verifyUser->user;
            if(!$user->verified) {
                $verifyUser->user->status = "Enable";
                $verifyUser->user->verified = 1;
                $verifyUser->user->save();
                $verifyUser->delete();
                $status = "Your e-mail is verified. You can now login.";
            }else{
                $status = "Your e-mail is already verified. You can now login.";
            }
        }else{
            return redirect('/login')->with('danger', "Sorry your username or email cannot be identified.");
        }

        return redirect('/login')->with('success', $status);
    }

    protected function registered(Request $request, $user)
    {
        $this->guard()->logout();
        return redirect('/login')->with('success', 'We sent you an activation code. Check your email and click on the link to verify.');
    }

    public function showRegistrationForm()
    {
        $theme = Theme::where('active', '=', 1)->first();
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        return view('auth.register',compact('theme','productcategories','templatecategories'));
    }
}
