<div class="row"  style="background-color: #eeeeee;">
  <div class="col-sm-2 product_sidebar">
  </div>
  <div class="col-sm-8 product_sidebar ">
    <div class="login-section mb-80"  style="margin-top: 120px;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">
          </div>
          <div class="col-md-8">
              @include('common.alerts')
              <div class="registered-customers" >
                <h6 class="blog-section-title mb-30">ACCOUNT RECOVERY WITH VIVID CUSTOMS</h6>
                <form method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
                    <div class="row form-group" style="background-color: #ffffff; padding: 30px;">
                      <label><b>Email *</b></label>
                      <input type="text" id="email" name="email" onchange="valid_format(this);"   style="border: 1px solid #0e0e0e ; width: 100%;">
                        <button  type="submit" class="button" tabindex="0" style="cursor: pointer; text-transform: uppercase; text-decoration: none;font-size: 1em;background-color: #E63D90;border-color: #E63D90;color: #fff;font-weight: 500;padding: 10px;width: 100%;text-align: center;">
                          Next
                      </button>
                    </div>
                </form>
              </div>
          </div>
          <div class="col-md-2">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-2 product_sidebar">
  </div>
</div>
