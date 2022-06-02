<div class="header-top-bar plr-185" style="background: #4598ba none repeat scroll 0 0;">
    <div class="container">
        <div class="row hidden-xs">
            <div class="col-md-4 col-sm-4">
                <div class="call-us">
                    <p class="mb-0 roboto"> </p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="top-link clearfix">
                    <ul class="f-right">
                        @guest
                            <li style="float:left; border-right: 1px solid #fefefe;">
                            <a href="{{asset('price-quote')}}" style="color: #ffffff; height: 40px; line-height: 40px; overflow: hidden; padding: 10px 20px; text-align: center; text-transform: capitalize; white-space: nowrap; width: 50px;">Price Quote</a>
                            <!--<a href="#"  data-toggle="modal"  data-target="#getaquote" title="Quickview" style="color: #ffffff; height: 40px; line-height: 40px; overflow: hidden; padding: 10px 20px; text-align: center; text-transform: capitalize; white-space: nowrap; width: 50px;" onclick="startqetaquote();">
                                <span>Price Quote</span> 
                            </a>-->
                            </li>
                            <li style="float:left; border-right: 1px solid #fefefe;" class="hidden-xs">
                                <a href="{{asset('login')}}" style="color: #ffffff; height: 40px; line-height: 40px; overflow: hidden; padding: 10px 20px; text-align: center; text-transform: capitalize; white-space: nowrap; width: 50px;">                                     
                                    <span class="hidden-xs">My Account</span> 
                                </a>
                            </li>
                            <li style="float:left; border-right: 1px solid #fefefe;" class="hidden-xs">
                                <a href="{{asset('login')}}" style="color: #ffffff; height: 40px; line-height: 40px; overflow: hidden; padding: 10px 20px; text-align: center; text-transform: capitalize; white-space: nowrap; width: 50px;">                                       
                                    <span class="hidden-xs">My Store</span> 
                                </a>
                            </li>
                            <li style="float:left;">
                                <a href="tel:8006488518" style="color: #fff; height: 40px; line-height: 0px; overflow: hidden; text-align: center; white-space: nowrap; width: 50px; font-family: arial; padding-left: 30px;">
                                    <span style="font-weight: 600">(800) 648-8518</span> 
                                        <br>
                                        <span style="padding-left: 10px; font-size: 12px;">Call us, We`d love to help!</span> 
                                </a>
                            </li>
                        @endguest
                        @auth
                        <li style="float:left; border-right: 1px solid #fefefe;">
                            <span><a href="{{asset('price-quote')}}">Price Quote</a></span>
                            <!--<a href="#"  data-toggle="modal"  data-target="#getaquote" title="Quickview" style="color: #ffffff; height: 40px; line-height: 40px; overflow: hidden; padding: 10px 20px; text-align: center; text-transform: capitalize; white-space: nowrap; width: 50px;" onclick="startqetaquote();">
                                <span>Price Quote</span> 
                            </a>-->
                            </li>
                            <li style="float:left; border-right: 1px solid #fefefe;" class="hidden-xs">
                                <!--<a href="{{asset('my-account')}}" style="color: #ffffff; height: 40px; line-height: 40px; overflow: hidden; padding: 10px 20px; text-align: center; text-transform: capitalize; white-space: nowrap; width: 50px;">                                     
                                    <span class="hidden-xs">My Account</span> 
                                </a>-->
                                <div class="dropdown" style="cursor:pointer;">
                                    <span type="button" data-toggle="dropdown">
                                        My Account
                                    </span>
                                    <div class="dropdown-menu">
                                        <h5 class="dropdown-header">Welcome,  {{Auth::user()->firstname}}</h5>
                                        <h5 class="dropdown-header"> 
                                            <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                            <span style="color:#6c757d;"><i class="fa fa-power-off"></i> Logout</span>
                                            </a>
                                        </h5>
                                    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li style="float:left;border-right: 1px solid #fefefe;" class="hidden-xs">
                                <a href="tel:8006488518" style="color: #fff; height: 40px; line-height: 0px; overflow: hidden; text-align: center; white-space: nowrap; width: 50px; font-family: arial; padding-left: 30px;">
                                    <span style="font-weight: 600">(800) 648-8518</span> 
                                        <br>
                                        <span style="padding-left: 10px; font-size: 12px;">Call us, We`d love to help!</span> 
                                </a>
                            </li>
                            @php
                            if(in_array('Store Designer', Auth::user()->roles->pluck('name')->toArray()))
                            {
                                echo " <li style='float:left; border-right: 1px solid #fefefe;'><a href='/my-store' style='color: #ffffff; height: 40px; line-height: 40px; overflow: hidden; padding: 10px 20px; text-align: center; text-transform: capitalize; white-space: nowrap; width: 50px;'><i class=".'"'."zmdi zmdi-archive".'"'."></i><span class='hidden-xs'>My Store</span> </a></li>";
                            }
                            else 
                            {
                                echo " <listyle='float:left; border-right: 1px solid #fefefe;'><a href='/store-subscribe'  style='color: #ffffff; height: 40px; line-height: 40px; overflow: hidden; padding: 10px 20px; text-align: center; text-transform: capitalize; white-space: nowrap; width: 50px;'><i class=".'"'."zmdi zmdi-archive".'"'."></i> <span class='hidden-xs'>My Store</span></a></li>";
                            }
                            @endphp
                            @if(Auth::user()->type == 'Admin')
                                <li style="float:left; border-right: 1px solid #fefefe;" class="hidden-xs">
                                    <a href="{{ route('admin.logout') }}"  onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" style="color: #ffffff; height: 40px; line-height: 40px; overflow: hidden; padding: 10px 20px; text-align: center; text-transform: capitalize; white-space: nowrap; width: 50px;">
                                        <i class="zmdi zmdi-lock"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            @else
                                <li style="float:left; border-right: 1px solid #fefefe;" class="hidden-xs">
                                    <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" style="color: #ffffff; height: 40px; line-height: 40px; overflow: hidden; padding: 10px 20px; text-align: center; text-transform: capitalize; white-space: nowrap; width: 50px;">
                                        <i class="zmdi zmdi-lock"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            @endif
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
        <div class="row visible-xs">
            <div class="col-xs-6">
                <span><a href="{{asset('price-quote')}}">Price Quote</a></span>
                <!--<a href="#"  data-toggle="modal"  data-target="#getaquote" title="Quickview" style="color: #ffffff; height: 40px; line-height: 40px; overflow: hidden; padding: 10px 20px; text-align: center; text-transform: capitalize; white-space: nowrap; width: 50px;" onclick="startqetaquote();">
                    <span>Price Quote</span> 
                </a>-->>
            </div>
            <div class="col-xs-6" style="border-left: 1px solid #ffffff;">
                    <a href="tel:8006488518" style="color: #ffffff; height: 40px; line-height: 40px; overflow: hidden; padding: 10px 20px; text-align: center; text-transform: capitalize; white-space: nowrap; width: 50px;">                                                             
                        <span style="font-weight: 600">(800) 648-8518</span> 
                </a>
            </div>
        </div>
    </div>
</div>