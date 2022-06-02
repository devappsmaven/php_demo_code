<div class="featured-product-section mb-50">
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
    </div>            
</div>