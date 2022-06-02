<div class="row">
    <div class="col-sm-4 col-sm-offset-1">
            <div class="login-form"><!--login form-->
                <h2>Login to your account</h2>
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <input id="username" type="username" class="{{ $errors->has('username') ? 'form-control is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus style="box-shadow: none!important; border: 1px solid #0e0e0e !important; border-radius: 0px;">
                    @if ($errors->has('username'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                    <input id="password" type="password" class="{{ $errors->has('password') ? 'form-control is-invalid' : '' }}" name="password" required style="box-shadow: none!important; border: 1px solid #0e0e0e !important; border-radius: 0px;">
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    @if (Route::has('password.request'))
                        <p><small><a href="{{ route('password.request') }}">Forgot your password?</a></small></p>
                    @endif
                    <button type="submit" class="btn btn-default">Sign In</button>
                </form>
            </div>
    </div>
    <div class="col-sm-1">
        <h2 class="or">OR</h2>
    </div>
    <div class="col-sm-4">
        <div class="signup-form">
            <h2>New User Signup!</h2>
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Firstname') }}</label>

                    <div class="col-md-6">
                        <input id="firstname" type="text" class="{{ $errors->has('firstname') ? 'form-control is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}"  autofocus>

                        @if ($errors->has('firstname'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('firstname') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Lastname') }}</label>

                    <div class="col-md-6">
                        <input id="lastname" type="text" class="{{ $errors->has('lastname') ? 'form-control is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}"  autofocus>

                        @if ($errors->has('lastname'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('lastname') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="birthday" class="col-md-4 col-form-label text-md-right">{{ __('Birthday') }}</label>

                    <div class="col-md-6">
                        <input id="birthday" type="text" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }} input-date" name="birthday" value="{{ old('birthday') }}"  autofocus>

                        @if ($errors->has('birthday'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('birthday') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                    <div class="col-md-6">
                        <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}"  autofocus>

                        @if ($errors->has('username'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" >

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                    <div class="col-md-6">
                        <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }} input-phone" name="phone" value="{{ old('phone') }}"  autofocus>

                        @if ($errors->has('phone'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Sign up for our newsletter!') }}</label>

                    <div class="col-md-6">
                        <input id="newsletter" type="checkbox" name="newsletter" >

                        @if ($errors->has('newsletter'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('newsletter') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>