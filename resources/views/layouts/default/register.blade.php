<!-- LOGIN SECTION START -->
<div class="row" style="background-color: #eeeeee;">
    <div class="col-sm-3 product_sidebar">
    </div>
    <div class="col-sm-6 product_sidebar">
        <h3 class="blog-section-title mb-30" style="margin-top: 180px;">REGISTER WITH VIVID CUSTOMS</h3>
        <div class="card" style="padding:20px;">
        @include('common.alerts')
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="login-account p-30" style="background-color: #ffffff">
                    <p>* Required Information</p>

                    <label><b>First Name *</b></label>
                    <input input type="text"id="firstname"  name="firstname"  style="border: 1px solid #0e0e0e ; width: 100%;">
                    <label><b>Last Name *</b></label>
                    <input type="text" id="lastname" name="lastname" style="border: 1px solid #0e0e0e ;width: 100%;">
                    <label><b>Username *</b></label>
                    <input type="text" id="username" name="username" style="border: 1px solid #0e0e0e ;width: 100%;">
                    <label><b>Password *</b></label>
                    <div class="input-group">
                        <input type="password" id="password" name="password" class="form-control" style="margin-bottom: 0px; border: 1px solid #0e0e0e ;">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-eye" onclick="showhidepassword();"></i></span>
                        </div>
                    </div>
                    <p class="ml-10">Minimum 8 characters<br>
                        Include at least one lowercase character (a-z)<br>
                        Include at least one uppercase character (A-Z)<br>
                        Include at least one number (0-9)<br>
                        Include at least one special symbol <b>(</b> ~`!@#$%^&*()-_+={}[]|\;:"< >,./?<b>)</b></p>

                    <label><b>Confirm Password *</b></label>
                    <input type="password"  id="password_confirmation" name="password_confirmation" style="border: 1px solid #0e0e0e ;width: 100%;">
                    <label><b>Email *</b></label>
                    <input type="text" id="email" name="email" style="border: 1px solid #0e0e0e ;width: 100%;">
                    <label><b>Phone</b></label>
                    <input type="text" id="phone" name="phone" style="border: 1px solid #0e0e0e ;width: 100%;">
                    <div class="checkbox">
                        <label class="mr-10">
                            <small>
                                <input type="checkbox" id="newsletter" name="newsletter"> Sign up for our newsletter!
                            </small>
                        </label>
                        <label>
                            <small>
                                <input type="checkbox" id="special_offers" name="special_offers"> Receive special offers from our products!
                            </small>
                        </label>
                    </div>
                        <button type="submit" class="button" tabindex="0" style="cursor: pointer; text-transform: uppercase; text-decoration: none;font-size: 1em;background-color: #E63D90;border-color: #E63D90;color: #fff;font-weight: 500;padding: 10px;width: 100%;text-align: center;">
                        Create Account
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-sm-3 product_sidebar">
    </div>
</div>
