<div class="container">
    <div class="row">
        <div class="col-sm-3 col-sm-offset-6">
        </div>
        <div class="col-sm-6">
            <div class="login-form">
                <h2>ACCOUNT RECOVERY WITH VIVID CUSTOMS</h2>
                <form method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
                    <input id="email" type="email" class="{{ $errors->has('email') ? 'form-control is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus style="box-shadow: none!important; border: 1px solid #0e0e0e !important; border-radius: 0px;">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <button type="submit" class="btn btn-default">Send Password Reset Link</button>
                </form>
            </div>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
</div>