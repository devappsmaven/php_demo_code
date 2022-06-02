<!-- LOGIN SECTION START -->
<div class="login-section mb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
        
            </div>
            <div class="col-md-6">
                <div class="registered-customers">
                    <h6 class="widget-title border-left mb-50">REGISTERED CUSTOMERS</h6>
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="login-account p-30 box-shadow">
                            <p>If you have an account with us, Please log in.</p>
                            <input type="text" name="username" placeholder="Email Address">
                            @if ($errors->has('username'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                            <input type="password" name="password" placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            @if (Route::has('password.request'))
                                <p><small><a href="{{ route('password.request') }}">Forgot your password?</a></small></p>
                            @endif
                            <button class="submit-btn-1 btn-hover-1" type="submit">login</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- new-customers -->
            <div class="col-md-3">
                
            </div>
        </div>
    </div>
</div>
<!-- LOGIN SECTION END -->  