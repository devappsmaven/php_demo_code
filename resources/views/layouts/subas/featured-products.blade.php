<div class="product-tab-section mb-50">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="section-title text-left mb-40">
                    <h2 class="uppercase">product list</h2>
                    <h6>There are many variations of passages of brands available,</h6>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="pro-tab-menu text-right">
                    <!-- Nav tabs -->
                    <ul class="" >
                        <li class="active"><a href="#popular-product" data-toggle="tab">Popular Products </a></li>
                        <li><a href="#new-arrival" data-toggle="tab">New Arrival</a></li>
                        <li><a href="#best-seller"  data-toggle="tab">Best Seller</a></li>
                        <li><a href="#special-offer"  data-toggle="tab">Special Offer</a></li>
                    </ul>
                </div>                       
            </div>
        </div>
        <div class="product-tab">
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- popular-product start -->
                <div class="tab-pane active" id="popular-product">
                    <div class="row">
                        @foreach ($popularproducts as $product)
                        <div class="col-md-3 col-sm-4 col-xs-12">
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
                <!-- popular-product end -->
                <!-- new-arrival start -->
                <div class="tab-pane" id="new-arrival">
                    <div class="row">
                        @foreach ($newproducts as $product)
                        <div class="col-md-3 col-sm-4 col-xs-12">
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
                <!-- new-arrival end -->
                <!-- best-seller start -->
                <div class="tab-pane" id="best-seller">
                    <div class="row">
                        @foreach ($bestsellerproducts as $product)
                        <div class="col-md-3 col-sm-4 col-xs-12">
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
                <!-- best-seller end -->
                <!-- special-offer start -->
                <div class="tab-pane" id="special-offer">
                   <div class="row">
                        @foreach ($specialofferproducts as $product)
                        <div class="col-md-3 col-sm-4 col-xs-12">
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
                <!-- special-offer end -->
            </div>
        </div>
    </div>
</div>