<div class="login-section mb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="my-account-content" id="accordion2">
                    <!-- My Personal Information -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#personal_info">My Personal Information</a>
                            </h4>
                        </div>
                        <div id="personal_info" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">
                                <form method="POST" action="{{ route('profile.personal-info') }}">
                                    {{csrf_field()}}
                                        <div class="form-group col-md-6">
                                            <h6>First Name</h6>
                                            <input type="text" id="firstname" name="firstname" class="form-control" required="required" placeholder="First Name" value="{{$user->firstname}}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <h6>Last Name</h6>
                                            <input type="text" id="lastname" name="lastname" class="form-control" required="required" placeholder="Last Name" value="{{$user->lastname}}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <h6>Email</h6>
                                            <input type="email" name="email" class="form-control" required="required" placeholder="Email" value="{{$user->email}}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <h6>Phone</h6>
                                            <input type="phone" name="phone" class="form-control input-phone" required="required" placeholder="Phone" value="{{$user->phone}}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <h6>Birthday</h6>
                                            <input type="text" name="birthday" class="form-control" required="required" placeholder="Birthday" value="{{$user->birthday->format('m/d/Y')}}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <h6>Company</h6>
                                            <input type="text" name="company" class="form-control"  placeholder="Company Name" value="{{$user->company}}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="checkbox">
                                                <label class="mr-10"> 
                                                    <input type="checkbox" name="newsletter" @php echo $user->newsletter ? 'checked' : '' @endphp >Sign up for our newsletter!
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="submit" name="submit" class="btn btn-primary pull-right" value="Save">
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- My shipping address -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#my_shipping">My shipping address</a>
                            </h4>
                        </div>
                        <div id="my_shipping" class="panel-collapse collapse" role="tabpanel" >
                            <div class="panel-body">
                                <form method="POST" action="{{ route('profile.shipping-info') }}">
                                    {{csrf_field()}}
                                    <div class="form-group col-md-6">
                                        <h6>Shipping Street</h6>
                                        <input type="text" name="shipping_street" class="form-control" value="{{$user->shipping_street}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6>Shipping City</h6>
                                        <input type="text" name="shipping_city" class="form-control" value="{{$user->shipping_city}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6>Shipping State</h6>
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
                                    <div class="form-group col-md-6">
                                        <h6>Shipping Zip</h6>
                                        <input type="text" name="shipping_zip" class="form-control" value="{{$user->shipping_zip}}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <h6>Reference</h6>
                                        <textarea class="custom-textarea" placeholder="Reference information..." class="form-control" name="shipping_reference"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="submit" name="submit" class="btn btn-primary pull-right" value="Save">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- My shipping details -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#billing_address">My billing address</a>
                            </h4>
                        </div>
                        <div id="billing_address" class="panel-collapse collapse" role="tabpanel" >
                            <div class="panel-body">
                            <form method="POST" action="{{ route('profile.billing-info') }}">
                                    {{csrf_field()}}
                                    <div class="form-group col-md-6">
                                        <h6>Shipping Street</h6>
                                        <input type="text" name="billing_street" class="form-control" value="{{$user->billing_street}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6>Shipping City</h6>
                                        <input type="text" name="billing_city" class="form-control" value="{{$user->billing_city}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6>Shipping State</h6>
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
                                    <div class="form-group col-md-6">
                                        <h6>Shipping Zip</h6>
                                        <input type="text" name="billing_zip" class="form-control" value="{{$user->billing_zip}}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <h6>Reference</h6>
                                        <textarea class="custom-textarea" placeholder="Reference information..." class="form-control" name="billing_reference"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="submit" name="submit" class="btn btn-primary pull-right" value="Save">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- My Order info -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#Change_password">Change Password</a>
                            </h4>
                        </div>
                        <div id="Change_password" class="panel-collapse collapse" role="tabpanel" >
                            <div class="panel-body">
                            <form method="POST" action="{{ route('profile.changepassword') }}">
                                {{csrf_field()}}
                                <div class="form-group col-md-12">
                                    <h6>New Password</h6>
                                    <input type="password" name="password" class="form-control" placeholder="New Password">
                                </div>
                                <div class="form-group col-md-12">
                                    <h6>New Confirmation Password</h6>
                                    <input type="password" name="password_confirmation" class="form-control"  placeholder="New Confirm Password">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="submit" name="submit" class="btn btn-primary pull-right" value="Save">
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <!-- Payment Method -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#My_designs">My designs</a>
                            </h4>
                        </div>
                        <div id="My_designs" class="panel-collapse collapse" role="tabpanel" >
                            <div class="panel-body">
                                <br>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true">
                                                @if($user->designs->count() > 0)
                                                    @foreach($user->designs as $design)
                                                        @if($design->type == 'Designstudio')
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" role="tab" id="headingOne">
                                                                    <h4 class="panel-title">
                                                                        <a role="button" data-toggle="collapse" data-parent="#accordion3" href="#{{$design->title}}" aria-expanded="true" aria-controls="collapseOne">
                                                                        {{explode('_',$design->title)[1]}}
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="{{$design->title}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                                    <div class="panel-body">
                                                                        @foreach($design->sides as $side)
                                                                        <div class="col-xs-3">
                                                                            <div class="product-item">
                                                                                <div class="product-img">
                                                                                    <a href="javascript:void(0)">
                                                                                        <img class="img-responsive" src="{{asset('designs/designstudio')}}{{'/'}}{{$design->category->name}}{{'/'}}{{$design->subcategory->name}}{{'/'}}{{$design->title}}_{{$side->name}}.png" alt="">
                                                                                    </a>
                                                                                </div>
                                                                                <center>
                                                                                    <h2 class="product-title">
                                                                                        <a href="javascript:void(0)">{{$side->name}} </a>
                                                                                    </h2>
                                                                                </center>
                                                                            </div>
                                                                        </div>
                                                                        @endforeach
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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#Order_info">My Orders</a>
                            </h4>
                        </div>
                        <div id="Order_info" class="panel-collapse collapse" role="tabpanel" >
                            <div class="panel-body">
                            <br>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="panel-group" id="accordion4" role="tablist" aria-multiselectable="true">
                                                @foreach($user->orders as $order)
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion4" href="#{{$order->order_number}}" aria-expanded="true" aria-controls="collapseOne">
                                                            {{$order->order_number}}
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="{{$order->order_number}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                            <div class="order-complete-content box-shadow">
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <h2 class="title text-center">Order#:  {{$order->order_number}}</h2>  
                                                                        <div class="total_area">
                                                                            <ul>
                                                                                @foreach($order->designs as $design)
                                                                                    @if($design->type == 'Designstudio')
                                                                                        <li style="color:#ffffff !important; background:#428bca !important;">{{explode('_',$design->title)[1]}} <span>${{$design->selling_price}}</span></li>
                                                                                    @endif
                                                                                @endforeach
                                                                                <li>Sub Total <span>${{$order->subtotal}}</span></li>
                                                                                <li>Discount <span>${{$order->discount}}</span></li>
                                                                                <li>Shipping Cost <span>{{$order->shipping_cost}}</span></li>
                                                                                <li>Tax <span>${{$order->tax}}</span></li>
                                                                                <li>Total <span>${{$order->total}}</span></li>
                                                                            </ul>
                                                                        </div>   
                                                                    </div>
                                                                    <div class="form-group col-md-6">

                                                                    <div class="contact-info">
                                                                        <h2 class="title text-center">Billing Details</h2>
                                                                        <address>
                                                                            <p>Address: {{$order->customer->billing_street}}, {{$order->customer->billing_city}}, {{$order->customer->billing_state}}, {{$order->customer->billing_zip}}, USA</p>
                                                                            <p>Mobile: {{$order->customer->phone}}</p>
                                                                            <p>Email:  {{$order->customer->email}}</p>
                                                                        </address>
                                                                    </div>

                                                                    <div class="contact-info">
                                                                        <h2 class="title text-center">Shipping Details</h2>
                                                                        <address>
                                                                            <p>Address: {{$order->customer->shipping_street}}, {{$order->customer->shipping_city}}, {{$order->customer->shipping_state}}, {{$order->customer->shipping_zip}}, USA</p>
                                                                            <p>Mobile: {{$order->customer->phone}}</p>
                                                                            <p>Email:  {{$order->customer->email}}</p>
                                                                        </address>
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
                </div>
            </div>
        </div>
    </div>
</div>