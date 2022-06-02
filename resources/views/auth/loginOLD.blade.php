@extends('layouts.app')
@section('title','Login')
@section('menuname','Login')
@section('content')
<!-- LOGIN SECTION START -->
<div class="login-section mb-80" style="background-color: #eeeeee;">
    <div class="container">
        <div class="row mb-30 mt-30">
            <div class="col-md-6">
                @include('common.alerts') 
                <div class="registered-customers">
                    <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                        <div class="alert alert-danger" id="loginalert" name="loginalert" style="display: none;"><strong>Oh snap!</strong> </div>
                        <h6 class="blog-section-title border-left mb-30">Returning Customer</h6>

                        <div class="login-account p-30" style="background-color: #ffffff">
                            <p class="mb-5"><b>Username</b></p>
                            <input id="username" type="username" class="form-control" name="username" value="{{ old('username') }}" required autofocus style="box-shadow: none!important; border: 1px solid #0e0e0e !important; border-radius: 0px;">
                            @if ($errors->has('username'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                            <p class="mb-5"><b>Password</b></p>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required style="box-shadow: none!important; border: 1px solid #0e0e0e !important; border-radius: 0px;">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            @if (Route::has('password.request'))
                                <p><small><a href="{{ route('password.request') }}">Forgot your password?</a></small></p>
                            @endif
                            <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" style="cursor: pointer; text-transform: uppercase; text-decoration: none;font-size: 1em;background-color: #c00;border-color: #c00;color: #fff;font-weight: 500;width: 100%;text-align: center;">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- new-customers -->
            <div class="col-md-6">
                <div class="new-customers">
                  <h6 class="blog-section-title border-left mb-30">NEW CUSTOMERS</h6>
                  <div class="login-account p-30" style="background-color: #ffffff">
                      <div class="row form-group">
                           <a href="{{ route('register') }}" class="button" tabindex="0" style="cursor: pointer; text-transform: uppercase; text-decoration: none;font-size: 1em;background-color: #c00;border-color: #c00;color: #fff;font-weight: 500;padding: 10px;width: 100%;text-align: center;">
                                Create Account
                            </a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- LOGIN SECTION END -->
@endsection
