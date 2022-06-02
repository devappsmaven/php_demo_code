<div class="header-top-bar plr-185">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 hidden-xs">
                <div class="call-us">
                    <p class="mb-0 roboto"><a href="tel:8006488518"><i class="fa fa-phone"></i> (800) 648-8518</a></p>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="top-link clearfix">
                    <ul class="link f-right">
                        @guest
                            <li>
                                <a href="{{asset('login')}}"><i class="zmdi zmdi-account"></i> My Account</a>
                            </li>
                            <li>
                                <a href="{{asset('store-info')}}"><i class="zmdi zmdi-archive"></i> My Store</a>
                            </li>
                            <li>
                                <a href="{{asset('login')}}"><i class="zmdi zmdi-lock"></i> Login</a>
                            </li>
                            <li>
                                <a href="{{asset('register')}}"><i class="zmdi zmdi-favorite"></i> Register</a>
                            </li>
                        @endguest
                        @auth
                            <li>
                                <a href="{{asset('my-account')}}"><i class="zmdi zmdi-account"></i> My Account</a>
                            </li>
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
                            <li>
                                <a href="{{asset('wishlist')}}"><i class="zmdi zmdi-favorite"></i> Wish List (0)</a>
                            </li>
                            @if(Auth::user()->type == 'Admin')
                            <li>
                                <a href="{{ route('admin.logout') }}"  onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="zmdi zmdi-lock"></i>
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
    </div>
</div>
