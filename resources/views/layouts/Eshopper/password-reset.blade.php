<div class="container">
    <div class="row">
        <div class="col-sm-3 col-sm-offset-6">
        </div>
        <div class="col-sm-6">
            <div class="login-form">
                <h2>ACCOUNT RECOVERY WITH VIVID CUSTOMS</h2>
                <form method="POST" action="{{ route('password.request') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="token" value="{{ $token }}">
                    <input id="email" type="email" class="{{ $errors->has('email') ? 'form-control is-invalid' : '' }}" name="email" required style="box-shadow: none!important; border: 1px solid #0e0e0e !important; border-radius: 0px;">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <input id="password" type="password" class="{{ $errors->has('password') ? 'form-control is-invalid' : '' }}" name="password" required style="box-shadow: none!important; border: 1px solid #0e0e0e !important; border-radius: 0px;">
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <input id="password_confirmation" type="password" class="{{ $errors->has('password_confirmation') ? 'form-control is-invalid' : '' }}" name="password_confirmation" required style="box-shadow: none!important; border: 1px solid #0e0e0e !important; border-radius: 0px;">
                    @if ($errors->has('password_confirmation'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                    <button type="submit" class="btn btn-default">Reset Password</button>
                </form>
            </div>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
</div>