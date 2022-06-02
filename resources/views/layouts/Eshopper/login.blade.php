<div class="container">
<div class="row">
    
    <div class="col-sm-3 col-sm-offset-6">
    </div>
    <div class="col-sm-6">
        <div class="login-form"><!--login form-->
            <h2>Login to your account</h2>
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <input id="username" type="text" class="{{ $errors->has('username') ? 'form-control is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus style="box-shadow: none!important; border: 1px solid #0e0e0e !important; border-radius: 0px;">
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
        </div><!--/login form-->
    </div>
    <div class="col-sm-3">
    </div>
</div>
</div>