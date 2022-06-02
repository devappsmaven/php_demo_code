<!-- LOGIN SECTION START -->
<div class="row column_heading"  style="margin-top:0px">
    <div class="col-sm-12"  style="margin-top: 150px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" id="accordion2">
                    <!-- My Personal Information -->
                    <div class="card card-default">
                        <div class="card-heading">
                            <h4 class="card-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#personal_info" style="color:#e63d90;">My Personal Information</a>
                            </h4>
                        </div>
                        <div id="personal_info" class="panel-collapse collapse">
                            <div class="card-body">
                                <div class="card" style="padding:20px;">
                                    <form method="POST" action="{{ route('profile.personal-info') }}">
                                        {{csrf_field()}}                                                                                
                                        <div class="form-group">
                                            <input type="text" name="firstname" placeholder="First Name" value="{{$user->firstname}}" class="form-control">
                                            @if ($errors->has('firstname'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('firstname') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="lastname" placeholder="Last Name" value="{{$user->lastname}}"  class="form-control">
                                            @if ($errors->has('lastname'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('lastname') }}</strong>
                                                </span>
                                            @endif
                                        </div> 
                                        <div class="form-group">
                                            <input type="text" name="company" placeholder="Company Name ..." value="{{$user->company}}"  class="form-control">
                                            @if ($errors->has('company'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('company') }}</strong>
                                                </span>
                                            @endif
                                        </div>  
                                        <div class="form-group">
                                            <input type="text" name="email" placeholder="Email Address" value="{{$user->email}}"  class="form-control">
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>  
                                        <div class="form-group">
                                            <input type="text" name="phone" placeholder="Phone" value="{{$user->phone}}"  class="form-control">
                                            @if ($errors->has('phone'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                </span>
                                            @endif
                                        </div>                                                                  
                                        <div class="checkbox">
                                            <label> 
                                                <small>
                                                    <input type="checkbox" name="newsletter" @php echo $user->newsletter ? 'checked' : '' @endphp > Sign up for our newsletter!
                                                </small>
                                            </label>
                                            <label> 
                                                <small>
                                                    <input type="checkbox" name="special_offers"> Receive special offers from our partners!
                                                </small>
                                            </label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button class="slider_btn" type="submit" value="register">Save</button>
                                            </div>
                                        </div>                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- My shipping address -->
                    <div class="card card-default">
                        <div class="card-heading">
                            <h4 class="card-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#my_shipping" style="color:#e63d90;">My Shipping Address</a>
                            </h4>
                        </div>
                        <div id="my_shipping" class="card-collapse collapse">
                            <div class="card-body">
                                <div class="card" style="padding:20px;">
                                    <form method="POST" action="{{ route('profile.shipping-info') }}">
                                        {{csrf_field()}}
                                        <div class="new-customers p-30">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="text" name="shipping_street" placeholder="Shipping Street" value="{{$user->shipping_street}}" class="form-control">
                                                        @if ($errors->has('shipping_street'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('shipping_street') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="text" name="shipping_city" placeholder="Shipping City" value="{{$user->shipping_city}}" class="form-control">
                                                        @if ($errors->has('shipping_city'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('shipping_city') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <select id="shippingState" name="shipping_state" class="custom-select">
                                                        <option value="AL" @php echo $user->shipping_state == 'AL' ? 'selected' : '' @endphp>Alabama</option>
                                                        <option value="AK" @php echo ($user->shipping_state == "AK" ? 'selected' : ''); @endphp>Alaska</option>
                                                        <option value="AZ" @php echo ($user->shipping_state == "AZ" ? 'selected' : ''); @endphp>Arizona</option>
                                                        <option value="AR" @php echo ($user->shipping_state == "AR" ? 'selected' : ''); @endphp>Arkansas</option>
                                                        <option value="CA" @php echo ($user->shipping_state == "CA" ? 'selected' : ''); @endphp>California</option>
                                                        <option value="CO" @php echo ($user->shipping_state == "CO" ? 'selected' : ''); @endphp>Colorado</option>
                                                        <option value="CT" @php echo ($user->shipping_state == "CT" ? 'selected' : ''); @endphp>Connecticut</option>
                                                        <option value="DE" @php echo ($user->shipping_state == "DE" ? 'selected' : ''); @endphp>Delaware</option>
                                                        <option value="DC" @php echo ($user->shipping_state == "DC" ? 'selected' : ''); @endphp>District Of Columbia</option>
                                                        <option value="FL" @php echo ($user->shipping_state == "FL" ? 'selected' : ''); @endphp>Florida</option>
                                                        <option value="GA" @php echo ($user->shipping_state == "GA" ? 'selected' : ''); @endphp>Georgia</option>
                                                        <option value="HI" @php echo ($user->shipping_state == "HI" ? 'selected' : ''); @endphp>Hawaii</option>
                                                        <option value="ID" @php echo ($user->shipping_state == "ID" ? 'selected' : ''); @endphp>Idaho</option>
                                                        <option value="IL" @php echo ($user->shipping_state == "IL" ? 'selected' : ''); @endphp>Illinois</option>
                                                        <option value="IN" @php echo ($user->shipping_state == "IN" ? 'selected' : ''); @endphp>Indiana</option>
                                                        <option value="IA" @php echo ($user->shipping_state == "IA" ? 'selected' : ''); @endphp>Iowa</option>
                                                        <option value="KS" @php echo ($user->shipping_state == "KS" ? 'selected' : ''); @endphp>Kansas</option>
                                                        <option value="KY" @php echo ($user->shipping_state == "KY" ? 'selected' : ''); @endphp>Kentucky</option>
                                                        <option value="LA" @php echo ($user->shipping_state == "LA" ? 'selected' : ''); @endphp>Louisiana</option>
                                                        <option value="ME" @php echo ($user->shipping_state == "ME" ? 'selected' : ''); @endphp>Maine</option>
                                                        <option value="MD" @php echo ($user->shipping_state == "MD" ? 'selected' : ''); @endphp>Maryland</option>
                                                        <option value="MA" @php echo ($user->shipping_state == "MA" ? 'selected' : ''); @endphp>Massachusetts</option>
                                                        <option value="MI" @php echo ($user->shipping_state == "MI" ? 'selected' : ''); @endphp>Michigan</option>
                                                        <option value="MN" @php echo ($user->shipping_state == "MN" ? 'selected' : ''); @endphp>Minnesota</option>
                                                        <option value="MS" @php echo ($user->shipping_state == "MS" ? 'selected' : ''); @endphp>Mississippi</option>
                                                        <option value="MO" @php echo ($user->shipping_state == "MO" ? 'selected' : ''); @endphp>Missouri</option>
                                                        <option value="MT" @php echo ($user->shipping_state == "MT" ? 'selected' : ''); @endphp>Montana</option>
                                                        <option value="NE" @php echo ($user->shipping_state == "NE" ? 'selected' : ''); @endphp>Nebraska</option>
                                                        <option value="NV" @php echo ($user->shipping_state == "NV" ? 'selected' : ''); @endphp>Nevada</option>
                                                        <option value="NH" @php echo ($user->shipping_state == "NH" ? 'selected' : ''); @endphp>New Hampshire</option>
                                                        <option value="NJ" @php echo ($user->shipping_state == "NJ" ? 'selected' : ''); @endphp>New Jersey</option>
                                                        <option value="NM" @php echo ($user->shipping_state == "NM" ? 'selected' : ''); @endphp>New Mexico</option>
                                                        <option value="NY" @php echo ($user->shipping_state == "NY" ? 'selected' : ''); @endphp>New York</option>
                                                        <option value="NC" @php echo ($user->shipping_state == "NC" ? 'selected' : ''); @endphp>North Carolina</option>
                                                        <option value="ND" @php echo ($user->shipping_state == "ND" ? 'selected' : ''); @endphp>North Dakota</option>
                                                        <option value="OH" @php echo ($user->shipping_state == "OH" ? 'selected' : ''); @endphp>Ohio</option>
                                                        <option value="OK" @php echo ($user->shipping_state == "OK" ? 'selected' : ''); @endphp>Oklahoma</option>
                                                        <option value="OR" @php echo ($user->shipping_state == "OR" ? 'selected' : ''); @endphp>Oregon</option>
                                                        <option value="PA" @php echo ($user->shipping_state == "PA" ? 'selected' : ''); @endphp>Pennsylvania</option>
                                                        <option value="RI" @php echo ($user->shipping_state == "RI" ? 'selected' : ''); @endphp>Rhode Island</option>
                                                        <option value="SC" @php echo ($user->shipping_state == "SC" ? 'selected' : ''); @endphp>South Carolina</option>
                                                        <option value="SD" @php echo ($user->shipping_state == "SD" ? 'selected' : ''); @endphp>South Dakota</option>
                                                        <option value="TN" @php echo ($user->shipping_state == "TN" ? 'selected' : ''); @endphp>Tennessee</option>
                                                        <option value="TX" @php echo ($user->shipping_state == "TX" ? 'selected' : ''); @endphp>Texas</option>
                                                        <option value="UT" @php echo ($user->shipping_state == "UT" ? 'selected' : ''); @endphp>Utah</option>
                                                        <option value="VT" @php echo ($user->shipping_state == "VT" ? 'selected' : ''); @endphp>Vermont</option>
                                                        <option value="VA" @php echo ($user->shipping_state == "VA" ? 'selected' : ''); @endphp>Virginia</option>
                                                        <option value="WA" @php echo ($user->shipping_state == "WA" ? 'selected' : ''); @endphp>Washington</option>
                                                        <option value="WV" @php echo ($user->shipping_state == "WV" ? 'selected' : ''); @endphp>West Virginia</option>
                                                        <option value="WI" @php echo ($user->shipping_state == "WI" ? 'selected' : ''); @endphp>Wisconsin</option>
                                                        <option value="WY" @php echo ($user->shipping_state == "WY" ? 'selected' : ''); @endphp>Wyoming</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="text" name="shipping_zip" placeholder="Shipping Zip" value="{{$user->shipping_zip}}" class="form-control">
                                                        @if ($errors->has('shipping_zip'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('shipping_zip') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="5" placeholder="Reference information..." name="shipping_reference"></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button class="slider_btn" type="submit" value="register">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- My Billing details -->
                    <div class="card card-default">
                        <div class="card-heading">
                            <h4 class="card-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#billing_address" style="color:#e63d90;">My Billing Address</a>
                            </h4>
                        </div>
                        <div id="billing_address" class="card-collapse collapse" role="tabpanel" >
                            <div class="card-body">
                                <div class="card" style="padding:20px;">
                                    <form method="POST" action="{{ route('profile.billing-info') }}">
                                        {{csrf_field()}}
                                        <div class="new-customers p-30">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="text" name="billing_street" placeholder="Billing Street" value="{{$user->billing_street}}" class="form-control">
                                                        @if ($errors->has('billing_street'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('billing_street') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="text" name="billing_city" placeholder="Billing City" value="{{$user->billing_city}}" class="form-control">
                                                        @if ($errors->has('billing_city'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('billing_city') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <select id="billingState" name="billing_state" class="custom-select">
                                                        <option value="AL" @php echo $user->billing_state == 'AL' ? 'selected' : '' @endphp>Alabama</option>
                                                        <option value="AK" @php echo ($user->billing_state == "AK" ? 'selected' : ''); @endphp>Alaska</option>
                                                        <option value="AZ" @php echo ($user->billing_state == "AZ" ? 'selected' : ''); @endphp>Arizona</option>
                                                        <option value="AR" @php echo ($user->billing_state == "AR" ? 'selected' : ''); @endphp>Arkansas</option>
                                                        <option value="CA" @php echo ($user->billing_state == "CA" ? 'selected' : ''); @endphp>California</option>
                                                        <option value="CO" @php echo ($user->billing_state == "CO" ? 'selected' : ''); @endphp>Colorado</option>
                                                        <option value="CT" @php echo ($user->billing_state == "CT" ? 'selected' : ''); @endphp>Connecticut</option>
                                                        <option value="DE" @php echo ($user->billing_state == "DE" ? 'selected' : ''); @endphp>Delaware</option>
                                                        <option value="DC" @php echo ($user->billing_state == "DC" ? 'selected' : ''); @endphp>District Of Columbia</option>
                                                        <option value="FL" @php echo ($user->billing_state == "FL" ? 'selected' : ''); @endphp>Florida</option>
                                                        <option value="GA" @php echo ($user->billing_state == "GA" ? 'selected' : ''); @endphp>Georgia</option>
                                                        <option value="HI" @php echo ($user->billing_state == "HI" ? 'selected' : ''); @endphp>Hawaii</option>
                                                        <option value="ID" @php echo ($user->billing_state == "ID" ? 'selected' : ''); @endphp>Idaho</option>
                                                        <option value="IL" @php echo ($user->billing_state == "IL" ? 'selected' : ''); @endphp>Illinois</option>
                                                        <option value="IN" @php echo ($user->billing_state == "IN" ? 'selected' : ''); @endphp>Indiana</option>
                                                        <option value="IA" @php echo ($user->billing_state == "IA" ? 'selected' : ''); @endphp>Iowa</option>
                                                        <option value="KS" @php echo ($user->billing_state == "KS" ? 'selected' : ''); @endphp>Kansas</option>
                                                        <option value="KY" @php echo ($user->billing_state == "KY" ? 'selected' : ''); @endphp>Kentucky</option>
                                                        <option value="LA" @php echo ($user->billing_state == "LA" ? 'selected' : ''); @endphp>Louisiana</option>
                                                        <option value="ME" @php echo ($user->billing_state == "ME" ? 'selected' : ''); @endphp>Maine</option>
                                                        <option value="MD" @php echo ($user->billing_state == "MD" ? 'selected' : ''); @endphp>Maryland</option>
                                                        <option value="MA" @php echo ($user->billing_state == "MA" ? 'selected' : ''); @endphp>Massachusetts</option>
                                                        <option value="MI" @php echo ($user->billing_state == "MI" ? 'selected' : ''); @endphp>Michigan</option>
                                                        <option value="MN" @php echo ($user->billing_state == "MN" ? 'selected' : ''); @endphp>Minnesota</option>
                                                        <option value="MS" @php echo ($user->billing_state == "MS" ? 'selected' : ''); @endphp>Mississippi</option>
                                                        <option value="MO" @php echo ($user->billing_state == "MO" ? 'selected' : ''); @endphp>Missouri</option>
                                                        <option value="MT" @php echo ($user->billing_state == "MT" ? 'selected' : ''); @endphp>Montana</option>
                                                        <option value="NE" @php echo ($user->billing_state == "NE" ? 'selected' : ''); @endphp>Nebraska</option>
                                                        <option value="NV" @php echo ($user->billing_state == "NV" ? 'selected' : ''); @endphp>Nevada</option>
                                                        <option value="NH" @php echo ($user->billing_state == "NH" ? 'selected' : ''); @endphp>New Hampshire</option>
                                                        <option value="NJ" @php echo ($user->billing_state == "NJ" ? 'selected' : ''); @endphp>New Jersey</option>
                                                        <option value="NM" @php echo ($user->billing_state == "NM" ? 'selected' : ''); @endphp>New Mexico</option>
                                                        <option value="NY" @php echo ($user->billing_state == "NY" ? 'selected' : ''); @endphp>New York</option>
                                                        <option value="NC" @php echo ($user->billing_state == "NC" ? 'selected' : ''); @endphp>North Carolina</option>
                                                        <option value="ND" @php echo ($user->billing_state == "ND" ? 'selected' : ''); @endphp>North Dakota</option>
                                                        <option value="OH" @php echo ($user->billing_state == "OH" ? 'selected' : ''); @endphp>Ohio</option>
                                                        <option value="OK" @php echo ($user->billing_state == "OK" ? 'selected' : ''); @endphp>Oklahoma</option>
                                                        <option value="OR" @php echo ($user->billing_state == "OR" ? 'selected' : ''); @endphp>Oregon</option>
                                                        <option value="PA" @php echo ($user->billing_state == "PA" ? 'selected' : ''); @endphp>Pennsylvania</option>
                                                        <option value="RI" @php echo ($user->billing_state == "RI" ? 'selected' : ''); @endphp>Rhode Island</option>
                                                        <option value="SC" @php echo ($user->billing_state == "SC" ? 'selected' : ''); @endphp>South Carolina</option>
                                                        <option value="SD" @php echo ($user->billing_state == "SD" ? 'selected' : ''); @endphp>South Dakota</option>
                                                        <option value="TN" @php echo ($user->billing_state == "TN" ? 'selected' : ''); @endphp>Tennessee</option>
                                                        <option value="TX" @php echo ($user->billing_state == "TX" ? 'selected' : ''); @endphp>Texas</option>
                                                        <option value="UT" @php echo ($user->billing_state == "UT" ? 'selected' : ''); @endphp>Utah</option>
                                                        <option value="VT" @php echo ($user->billing_state == "VT" ? 'selected' : ''); @endphp>Vermont</option>
                                                        <option value="VA" @php echo ($user->billing_state == "VA" ? 'selected' : ''); @endphp>Virginia</option>
                                                        <option value="WA" @php echo ($user->billing_state == "WA" ? 'selected' : ''); @endphp>Washington</option>
                                                        <option value="WV" @php echo ($user->billing_state == "WV" ? 'selected' : ''); @endphp>West Virginia</option>
                                                        <option value="WI" @php echo ($user->billing_state == "WI" ? 'selected' : ''); @endphp>Wisconsin</option>
                                                        <option value="WY" @php echo ($user->billing_state == "WY" ? 'selected' : ''); @endphp>Wyoming</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="text" name="billing_zip" placeholder="Billing Zip" value="{{$user->billing_zip}}" class="form-control">
                                                        @if ($errors->has('billing_zip'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('billing_zip') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="5" placeholder="Reference information..." name="billing_reference"></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button class="slider_btn" type="submit" value="register">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- My Order info -->
                    <div class="card panel-default">
                        <div class="card-heading">
                            <h4 class="card-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#Change_password" style="color:#e63d90;">Change Password</a>
                            </h4>
                        </div>
                        <div id="Change_password" class="card-collapse collapse" role="tabpanel" >
                            <div class="card-body">
                                <div class="card" style="padding:20px;">
                                    <form method="POST" action="{{ route('profile.changepassword') }}">
                                        {{csrf_field()}}
                                        <div class="login-account p-30 box-shadow">
                                            <div class="form-group">
                                                <input type="password" name="password" placeholder="New Password"  class="form-control">
                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password_confirmation" placeholder="New Confirm Password"  class="form-control">
                                                @if ($errors->has('password_confirmation'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button class="slider_btn" type="submit" value="register">Save</button>
                                                </div>
                                            </div>
                                        </div>    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Payment Method -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#My_designs" style="color:#e63d90;">My Designs</a>
                            </h4>
                        </div>
                        <div id="My_designs" class="panel-collapse collapse" role="tabpanel" >
                            <div class="panel-body">
                                <br>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true">+
                                                @if($user->designs->count() > 0)    
                                                    @foreach($user->designs as $design)
                                                        @if($design->type == 'Designstudio')
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" role="tab" id="headingOne">
                                                                    <h4 class="panel-title">
                                                                        <a role="button" data-toggle="collapse" data-parent="#accordion3" href="#{{$design->title}}" aria-expanded="true" aria-controls="collapseOne" style="color:#e63d90;">
                                                                        {{explode('_',$design->title)[1]}}
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="{{$design->title}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                                    <div class="panel-body">
                                                                        @foreach($design->designsides as $side)
                                                                        <div class="col-xs-3">
                                                                            <div class="product-item">
                                                                                <div class="product-img">
                                                                                    <a  href="javascript:void(0)" style="color:#e63d90;">
                                                                                        <img class="img-responsive" src="{{asset('designs/designstudio')}}{{'/'}}{{$design->category->name}}{{'/'}}{{$design->subcategory->name}}{{'/'}}{{$design->title}}_{{$side->side}}.png"  style="width:250px; height:auto;">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="product-info">
                                                                                    <h6 class="product-title">
                                                                                    <a href="javascript:void(0)" style="color:#e63d90;">{{$side->name}} </a>
                                                                                    </h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        @endforeach
                                                                    </div> 
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <a  href="{{asset('designstudio')}}{{'/r/'}}{{$design->id}}" class="slider_btn" value="register">Edit</a>
                                                                        </div>
                                                                    </div> 
                                                                </div> 
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- My shipping details -->
                    <div class="card card-default">
                        <div class="card-heading">
                            <h4 class="card-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#Order_info" style="color:#e63d90;">My Orders</a>
                            </h4>
                        </div>
                        <div id="Order_info" class="card-collapse collapse" role="tabpanel" >
                            <div class="card-body">
                            <br>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="card-group" id="accordion4" role="tablist" aria-multiselectable="true">
                                                @foreach($user->orders as $order)
                                                <div class="card card-default">
                                                    <div class="card-heading" role="tab" id="headingOne">
                                                        <h4 class="card-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion4" href="#{{$order->order_number}}" aria-expanded="true" aria-controls="collapseOne" style="color:#e63d90;">
                                                            {{$order->order_number}}
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="{{$order->order_number}}" class="card-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="card-body">
                                                            <div class="order-complete-content box-shadow">
                                                                <div class="order-info p-30 mb-10">
                                                                <div class="col-md-12">
                                                                    <div class="section-title text-left mb-40">
                                                                        <h2 class="uppercase">Order Resume</h2>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="payment-details p-30">
                                                                            <h6 class="widget-title border-left mb-20">order#: {{$order->order_number}} <a href="#" class="order-total" style="color:#e63d90;">(Details)</a></h6>
                                                                            <table>
                                                                                    @if($user->designs->count() > 0)   
                                                                                @foreach($order->designs as $design)
                                                                                @if($design->type == 'Designstudio')
                                                                                <tr>
                                                                                    <td class="td-title-1">{{explode('_',$design->title)[1]}}</td>
                                                                                    <td class="td-title-2" style="color:red;">price-pending</td>
                                                                                </tr>
                                                                                @endif
                                                                                @endforeach
                                                                                @endif
                                                                                <tr>
                                                                                    <td class="td-title-1">Subtotal</td>
                                                                                    <td class="td-title-2">${{$order->subtotal}}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="td-title-1">Discount</td>
                                                                                    <td class="td-title-2">${{$order->discount}}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="td-title-1">Shipping Cost</td>
                                                                                    <td class="td-title-2">${{$order->shipping_cost}}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="td-title-1">Tax</td>
                                                                                    <td class="td-title-2">${{$order->tax}}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="order-total">Order Total</td>
                                                                                    <td class="order-total-price">${{$order->total}}</td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>         
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="bill-details p-30">
                                                                            <h6 class="widget-title border-left mb-20">billing details</h6>
                                                                            <ul class="bill-address">
                                                                                <li>
                                                                                    <span>Address:</span>
                                                                                    {{$order->customer->billing_street}}, {{$order->customer->billing_city}}, {{$order->customer->billing_state}}, {{$order->customer->billing_zip}}, USA
                                                                                </li>
                                                                                <li>
                                                                                    <span>email:</span>
                                                                                    {{$order->customer->email}}
                                                                                </li>
                                                                                <li>
                                                                                    <span>phone : </span>
                                                                                    {{$order->customer->phone}}
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="bill-details pl-30">
                                                                            <h6 class="widget-title border-left mb-20">shipping details</h6>
                                                                            <ul class="bill-address">
                                                                                <li>
                                                                                    <span>Address:</span>
                                                                                    {{$order->customer->shipping_street}}, {{$order->customer->shipping_city}}, {{$order->customer->shipping_state}}, {{$order->customer->shipping_zip}}, USA
                                                                                </li>
                                                                                <li>
                                                                                    <span>email:</span>
                                                                                    {{$order->customer->email}}
                                                                                </li>
                                                                                <li>
                                                                                    <span>phone : </span>
                                                                                    {{$order->customer->phone}}
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-default">
                        <div class="card-heading">
                            <h4 class="card-title">
                                <?php if(in_array('Store Designer', Auth::user()->roles->pluck('name')->toArray())): ?>
                                    <a href="{{url('my-store')}}" style="color:#e63d90;">
                                        My Store
                                    </a>
                                <?php else: ?>                                    
                                    <a href="{{url('store-subscribe')}}"style="color:#e63d90;">
                                        Become a Seller
                                    </a>
                                <?php endif; ?>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>    
</div>