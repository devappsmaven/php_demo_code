<div class="logo_responsive">
    <a class="navbar-brand" href="index.html"> <img src="images/logo.png" alt="" title=""/></a>
    </div>
    <div class="banner_bg">
    <img src="{{asset('images/banner-bg.png')}}" alt="" title=""/>
    <div class="container">
        <div class="row">
            <div class="slider">
                <h3 class="uppercase">Create your own</h3>
                <h2>custom shirts</h2>
                <span>with our easy to use Design Studio</span>
                <a class="slider_btn" href="{{url('designstudio')}}">Start Designing</a>
            </div>
        </div>
    </div>
    </div>

    <div class="container_fixed">
    <div class="shipping_bg">
        <div class="row">
            <div class="col-lg-4 col-xl-3 offset-lg-2 offset-xl-3" style="min-width: fit-content;">
                <div class="free_shipping">
                <div class="shipping_img">
                    <img src="images/free-shipping.png" alt="" title=""/>
                </div>
                <div class="shiiping_text">
                    <h4>FREE SHIPPING</h4>
                    <span>Guaranteed by:</span>
                    <p id="freeshippingindex"> Wednesday, July 31</p>
                </div>
                </div>
            </div>
            <div class="col-lg-6" style="max-width: fit-content;">
                <div class="free_shipping">
                <div class="shipping_img">
                    <img src="images/upgrade.png" alt="" title=""/>
                </div>
                <div class="shiiping_text border-0">
                    <h4>UPGRADE to RUSH</h4>
                    <span>Guaranteed by:</span>
                    <p id="rushdelivery"> Thursday, July 25</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shipping mobile -->
    <div class="shipping_mobile">
        <h2>Free 2-Week Delivery</h2>
        <span>Upgrade to Rush: 1-Week or 3-Day</span>
    </div>
</div>
<!--<div class="featured-product-section mb-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-left mb-40">
                    <h2 class="uppercase">Featured product</h2>
                    <h6>There are many variations of passages of brands available,</h6>
                </div>
            </div>
        </div>
        <div class="featured-product">
           
            <div class="row active-featured-product slick-arrow-2"> 
                @foreach ($featuredproducts as $product)
                <div class="col-xs-12">
                    <div class="product-item">
                        <div class="product-img">
                            <a href="{{route('single-product', $product->id)}}">
                                <img src="{{asset('img/product')}}{{'/'}}{{$product->image}}" alt="">
                            </a>
                        </div>
                        <div class="product-info">
                            <h6 class="product-title">
                            <a href="{{route('single-product', $product->id)}}">{{$product->name}} </a>
                            </h6>
                            <div class="pro-rating"  style="display:none;">
                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                            </div>
                            <ul class="action-button">
                                <li>
                                    <a href="javascript:void(0)" title="{{$product->favorite_to_users->count()}} Favorite" tabindex="0"><i class="zmdi zmdi-favorite"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" title="{{$product->view_count}} view" tabindex="0"><i class="zmdi zmdi-eye"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>          
    </div>            
</div>-->