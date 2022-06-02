<!-- LOGIN SECTION START -->
<div class="row"  style="background-color: #eeeeee;">
  <div class="col-sm-2 product_sidebar">
  </div>
  <div class="col-sm-8 product_sidebar ">

<div class="login-section mb-80"  style="margin-top: 120px;">
    <div class="container-fluid">
        <div class="row"   style="background-color: #eeeeee;">
            <div class="col-md-2">

            </div>
            <div class="col-md-8">
                @include('common.alerts')
                <div class="registered-customers">
                    <h6 class="widget-title border-left mb-50">ACCOUNT RECOVERY WITH VIVID CUSTOMS</h6>
                    <form method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="login-account p-30 box-shadow"  style="background-color: #ffffff; padding: 30px;">
                            <label><b>Email *</b></label>
                            <input type="text" name="email" placeholder="Email Address"    style="border: 1px solid #0e0e0e ; width: 100%;">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            <label><b>New Password *</b></label>
                            <input type="password" name="password" placeholder="New Password"    style="border: 1px solid #0e0e0e ; width: 100%;">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            <label><b>Confirm New Password *</b></label>
                            <input type="password" name="password_confirmation" placeholder="Confirm New Password"    style="border: 1px solid #0e0e0e ; width: 100%;">
                            @if ($errors->has('password_confirmation'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                            <button type="submit" class="button" tabindex="0" style="cursor: pointer; text-transform: uppercase; text-decoration: none;font-size: 1em;background-color: #E63D90;border-color: #E63D90;color: #fff;font-weight: 500;padding: 10px;width: 100%;text-align: center;"  >Reset Password</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- new-customers -->
            <div class="col-md-2">

            </div>
        </div>
    </div>
</div>
</div>
  <div class="col-sm-2 product_sidebar">
  </div>
</div>
<!-- LOGIN SECTION END -->
