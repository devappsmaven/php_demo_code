<div id="sticky-header" class="header-middle-area plr-185 hidden-sm hidden-xs" style="background-color: #fff;">
        <div class="container">
            <div class="full-width-mega-dropdown">
                <div class="row">
                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="logo">
                            <a href="{{asset('index')}}">
                                <img src="{{asset('img/logo/logo.png')}}" class="img-repsonsive" alt="Vivid Customs">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 hidden-sm hidden-xs">
                        <nav id="primary-menu">
                            <ul class="main-menu text-right">
                                <li class="text-center"><a href="{{asset('designstudio')}}" style="font-size: 13px; font-weight: 600">
                                    <img src="{{asset('img/icon/design-icon.png')}}">
                                    <br>Design Studio</a>
                                </li>
                                <li class="mega-parent text-center"><a href="{{asset('products')}}" style="font-size: 13px; font-weight: 600">
                                    <img src="{{asset('img/icon/products-icon.png')}}">
                                    <br>Products</a>
                                </li>
                                <li class="mega-parent text-center"><a href="{{asset('template-designs')}}" style="font-size: 13px; font-weight: 600">
                                    <img src="{{asset('img/icon/template-icon.png')}}">
                                    <br>Design Templates</a>
                                </li>
                                <li class="text-center" style="display: none;"><a href="{{asset('our-services')}}">
                                    <img src="{{asset('img/icon/testing-icon.png')}}">
                                    <br>Services</a>
                                </li>
                                <li class="text-center" style="display: none;">
                                    <a href="{{asset('about-us')}}">
                                        <img src="{{asset('img/icon/testing-icon.png')}}">
                                        <br>About us</a>
                                </li>
                                <li class="text-center">
                                    <a href="{{asset('contact-us')}}" style="font-size: 13px; font-weight: 600">
                                        <img src="{{asset('img/icon/contact-icon.png')}}"><br>Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- header-search & total-cart -->
                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="search-top-cart  f-right">
                            <!-- header-search -->
                            <div class="header-search f-left">
                                <div class="header-search-inner">
                                    <button class="search-toggle">
                                    <i class="zmdi zmdi-search"></i>
                                    </button>
                                    <form  method="POST" action="{{route('product.search')}}" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                        <div class="top-search-box">
                                            <input type="text" id="productsearch" name="productsearch" placeholder="Search you product here...">
                                            <button type="submit">
                                                <i class="zmdi zmdi-search"></i>
                                            </button>
                                        </div>
                                    </form> 
                                </div>
                            </div>
                            <!-- total-cart -->
                            @if(Session::has('shoppingcart'))
                                
                                <div class="total-cart f-left">
                                    <div class="total-cart-in">
                                        <div class="cart-toggler">
                                            <a href="#">
                                                <span class="cart-quantity">{{count((Session::get('shoppingcart')['items']))}}</span><br>
                                                <span class="cart-icon">
                                                    <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                </span>
                                            </a>                            
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="top-cart-inner your-cart">
                                                    <h5 class="text-capitalize">Your Cart</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="total-cart-pro">
                                                        @foreach((Session::get('shoppingcart')['items']) as $item)
                                                        <div class="single-cart clearfix">
                                                            <div class="cart-img f-left">
                                                                <a href="#">
                                                                    <img src="{{($item['sides'][0]['img'])}}" width="75">
                                                                </a>
                                                                <div class="del-icon">
                                                                    <a href="#">
                                                                        <i class="zmdi zmdi-close"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="cart-info f-left">
                                                                <h6 class="text-capitalize">
                                                                    <a target="blank" href="{{asset('product')}}{{'/'}}{{($item['product']['id'])}}">{{($item['product']['name'])}}</a>
                                                                </h6>
                                                                <p>
                                                                    <span>Brand <strong>:</strong></span>{{($item['product']['brand'])}}
                                                                </p>
                                                                <p>
                                                                    <span>Model <strong>:</strong></span>{{($item['product']['stylenumber'])}}
                                                                </p>
                                                                <p>
                                                                    <span>Color <strong>:</strong></span>{{($item['product']['color'])}}
                                                                </p>
                                                                <p>
                                                                    <span>Sizes <strong>:</strong></span>
                                                                    @foreach($item['sizes'] as $size)
                                                                        @if($size['quantity'] > 0)
                                                                            {{($size['name'])}}({{($size['quantity'])}}),
                                                                        @endif
                                                                    @endforeach
                                                                </p>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </li>
                                            <li>
                                                <div class="top-cart-inner subtotal">
                                                    <h4 class="text-uppercase g-font-2">
                                                        Total  =  
                                                        <span>$ {{(Session::get('shoppingcart')['subtotal'])}}</span>
                                                    </h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="top-cart-inner view-cart">
                                                    <h4 class="text-uppercase">
                                                        <a href="{{asset('shopping-cart')}}">View cart</a>
                                                    </h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="top-cart-inner check-out">
                                                    <h4 class="text-uppercase">
                                                        <a href="{{asset('shopping-cart')}}">Check out</a>
                                                    </h4>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>