<div id="sticky-header" class="header-middle-area plr-185">
    <div class="container-fluid">
        <div class="full-width-mega-dropdown">
            <div class="row">
                <!-- logo -->
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="logo">
                        <a href="{{asset('index')}}">
                            <img src="{{asset('img/logo/logo.png')}}" class="img-responsive" alt="main logo">
                        </a>
                    </div>
                </div>
                <!-- primary-menu -->
                <div class="col-md-8 hidden-sm hidden-xs">
                    <nav id="primary-menu">
                        <ul class="main-menu text-center">
                            <li>
                                <a href="{{asset('designstudio')}}">Designstudio</a>
                            </li>
                            <li>
                                <a href="{{asset('products')}}">Products</a>
                            </li>
                            <li>
                                <a href="{{asset('template-designs')}}">Design Templates</a>
                            </li>
                            <li>
                                <a href="{{asset('our-services')}}">Our Services</a>
                            </li>
                            <li>
                                <a href="{{asset('about-us')}}">About us</a>
                            </li>
                            <li>
                                <a href="{{asset('contact-us')}}">Contact</a>
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
                        <div class="total-cart f-left">
                            <div class="total-cart-in">
                                <div class="cart-toggler">
                                    <a href="#">
                                        <span class="cart-quantity">02</span><br>
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
                                            <!-- single-cart -->
                                            <div class="single-cart clearfix">
                                                <div class="cart-img f-left">
                                                    <a href="#">
                                                        <img src="img/cart/1.jpg" alt="Cart Product">
                                                    </a>
                                                    <div class="del-icon">
                                                        <a href="#">
                                                            <i class="zmdi zmdi-close"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cart-info f-left">
                                                    <h6 class="text-capitalize">
                                                        <a href="#">Dummy Product Name</a>
                                                    </h6>
                                                    <p>
                                                        <span>Brand <strong>:</strong></span>Brand Name
                                                    </p>
                                                    <p>
                                                        <span>Model <strong>:</strong></span>Grand s2
                                                    </p>
                                                    <p>
                                                        <span>Color <strong>:</strong></span>Black, White
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- single-cart -->
                                            <div class="single-cart clearfix">
                                                <div class="cart-img f-left">
                                                    <a href="#">
                                                        <img src="img/cart/1.jpg" alt="Cart Product">
                                                    </a>
                                                    <div class="del-icon">
                                                        <a href="#">
                                                            <i class="zmdi zmdi-close"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cart-info f-left">
                                                    <h6 class="text-capitalize">
                                                        <a href="#">Dummy Product Name</a>
                                                    </h6>
                                                    <p>
                                                        <span>Brand <strong>:</strong></span>Brand Name
                                                    </p>
                                                    <p>
                                                        <span>Model <strong>:</strong></span>Grand s2
                                                    </p>
                                                    <p>
                                                        <span>Color <strong>:</strong></span>Black, White
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="top-cart-inner subtotal">
                                            <h4 class="text-uppercase g-font-2">
                                                Total  =  
                                                <span>$ 500.00</span>
                                            </h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="top-cart-inner view-cart">
                                            <h4 class="text-uppercase">
                                                <a href="#">View cart</a>
                                            </h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="top-cart-inner check-out">
                                            <h4 class="text-uppercase">
                                                <a href="#">Check out</a>
                                            </h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>