<!-- LOGIN SECTION START -->
<div class="login-section mb-80">
<div class="container">
    <div class="row">
    @include('common.alerts') 
        <div class="col-md-2">
            
        </div>
        <!-- new-customers -->
        <div class="col-md-8">
            <div class="new-customers">
                <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <h6 class="widget-title border-left mb-50">NEW CUSTOMERS</h6>
                    <div class="login-account p-30 box-shadow">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" name="firstname" placeholder="First Name">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="lastname" placeholder="last Name">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="birthday" class="input-date" name="birthday" placeholder="Birthday here...">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="username" placeholder="Username here...">
                            </div>
                        </div>  
                        <input type="password" name="password" placeholder="Password">
                        <input type="password" name="password_confirmation"  placeholder="Confirm Password">
                        <input type="text" name="email" placeholder="Email address here...">
                        <input type="text" id="phone"  name="phone" class="input-phone" placeholder="Phone number here...">
                      
                        <div class="checkbox">
                            <label class="mr-10"> 
                                <small>
                                    <input type="checkbox" name="newsletter">Sign up for our newsletter!
                                </small>
                            </label>
                            <label> 
                                <small>
                                    <input type="checkbox" name="special_offers">Receive special offers from our partners!
                                </small>
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" value="register">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            
        </div>
    </div>
</div>
<!-- LOGIN SECTION END -->  