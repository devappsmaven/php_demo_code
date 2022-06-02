<!-- LOGIN SECTION START -->
<div class="login-section mb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
        
            </div>
            <div class="col-md-6">
                    @include('common.alerts') 
                <div class="registered-customers">
                    <h6 class="widget-title border-left mb-50">ACCOUNT RECOVERY WITH VIVID CUSTOMS</h6>
                    <form method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        <div class="login-account p-30 box-shadow">
                            <input type="text" name="email" placeholder="Email Address">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            <button class="submit-btn-1 btn-hover-1" type="submit">Next</button>
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