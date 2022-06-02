<div class="header-middle  visible-lg visible-md">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="logo pull-left">
                    <a href="{{asset('index')}}"><img  class="img-responsive" src="{{asset('img/logo/logo.png')}}" style="width: 200px !important; height: auto;" /></a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="shop-menu pull-right">
                    <ul class="nav navbar-nav">
                        
                        @guest
                            <li><a href="{{asset('login')}}"><i class="fa fa-user"></i> Account</a></li>
                            <li><a href="{{asset('login')}}"><i class="fa fa-archive"></i> Store</a></li>
                            <li><a href="{{asset('checkout')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                            <li><a href="{{asset('shopping-cart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            <li><a href="{{asset('login')}}"><i class="fa fa-lock"></i> Login</a></li>
                            <li><a href="{{asset('register')}}"><i class="fa fa-star"></i> Register</a></li>
                            
                        @endguest
                        @auth
                            <li><a href="{{asset('my-account')}}"><i class="fa fa-user"></i> Account</a></li>
                            @php
                                if(in_array('Store Designer', Auth::user()->roles->pluck('name')->toArray()))
                                {
                                    echo " <li><a href='/my-store'><i class=".'"'."zmdi zmdi-archive".'"'."></i> My Store</a></li>";
                                }
                                else 
                                {
                                    echo " <li><a href='/store-subscribe'><i class=".'"'."zmdi zmdi-archive".'"'."></i> My Store</a></li>";
                                }
                            @endphp
                            <li><a href="{{asset('wishlist')}}"><i class="fa fa-star"></i> Wishlist</a></li>
                            <li><a href="{{asset('checkout')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                            <li><a href="{{asset('shopping-cart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            @if(Auth::user()->type == 'Admin')
                            <li>
                                <a href="{{ route('admin.logout') }}"  onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="fa fa-unlock"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            @else
                                <li>
                                    <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="fa fa-lock"></i>
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
    </div>
</div>