<!-- LOGIN SECTION START -->
<div class="row"  style="background-color: #eeeeee;">
  <div class="col-sm-2 product_sidebar">
  </div>
  <div class="col-sm-8 product_sidebar ">
    <div class="container-fluid" style="margin-top: 120px;">
      <div class="row mb-30 mt-30">
          <div class="col-md-6">
            <form method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
              <div class="registered-customers">
                  <div class="alert alert-danger" id="loginalert" name="loginalert" style="display: none;"><strong>Oh snap!</strong> </div>
                  <h6 class="blog-section-title border-left mb-30">Returning Customer</h6>
                  @include('common.alerts')
                  <div class="login-account p-30" style="background-color: #ffffff">
                    <label><b>Username</b></label>
                    <input type="text" id="username" name="username"  style="border: 1px solid #0e0e0e ; width: 100%;">
                    <label><b>Password</b></label>
                    <input type="password" id="password" name="password"  style="border: 1px solid #0e0e0e ; width: 100%;">
                    <p><small><a href="{{ route('password.request') }}">Forgot your password?</a></small></p>
                    <div class="row form-group">
                      <button href="javascript:void(0)" type="submit" class="button" tabindex="0" style="cursor: pointer; text-transform: uppercase; text-decoration: none;font-size: 1em;background-color: #E63D90;border-color: #E63D90;color: #fff;font-weight: 500;padding: 10px;width: 100%;text-align: center;">
                          Sign In
                      </button>
                      </div>
                  </div>
              </div>
            </form>
          </div>
          <!-- new-customers -->
          <div class="col-md-6">
              <div class="new-customers">
                <h6 class="blog-section-title border-left mb-30">NEW CUSTOMERS</h6>
                <div class="login-account p-30" style="background-color: #ffffff">
                    <div class="row form-group">
                          <a href="{{ route('register') }}" class="button" tabindex="0" style="cursor: pointer; text-transform: uppercase; text-decoration: none;font-size: 1em;background-color: #E63D90;border-color: #E63D90;color: #fff;font-weight: 500;padding: 10px;width: 100%;text-align: center;">
                              Create Account
                          </a>
                </div>
              </div>
          </div>
      </div>
  </div>
  </div>
    <!--<h3 style="margin-top: 180px;">REGISTERED CUSTOMERS</h3>
    <div class="card" style="padding:20px;">
      <form method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
          <div class="form-group">
              <p>If you have an account with us, Please log in.</p>
              <input type="text" name="username" placeholder="Email Address" class="form-control">
              @if ($errors->has('username'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('username') }}</strong>
                  </span>
              @endif
          </div>
          <div class="form-group">
              <input type="password" name="password" placeholder="Password"  class="form-control">
              @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
          </div>
          @if (Route::has('password.request'))
              <p><small><a href="{{ route('password.request') }}">Forgot your password?</a></small></p>
          @endif
          <button class="slider_btn" type="submit">login</button>
      </form>
    </div>  -->
  </div>
  <div class="col-sm-2 product_sidebar">
  </div>
</div>
