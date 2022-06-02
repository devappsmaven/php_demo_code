<div class="row" style="margin-top:50px;">
    <div class="col-sm-12">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Features Items</h2>
            @foreach ($featuredproducts as $product)
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{asset('img/product')}}{{'/'}}{{$product->image}}" alt="">
                                <p>{{$product->name}}</p>
                                <a href="{{route('single-product', $product->id)}}" class="btn btn-default add-to-cart">View</a>
                            </div>
                            <div class="product-overlay">
                                <div class="overlay-content">
                                    <p>{{$product->name}}</p>
                                    <a href="{{route('single-product', $product->id)}}" class="btn btn-default add-to-cart">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="choose">
                            <ul class="nav nav-pills nav-justified">
                                <li><a href=""><i class="fa fa-heart"></i>{{$product->favorite_to_users->count()}} favorite</a></li>
                                <li><a href=""><i class="fa fa-eye"></i>{{$product->view_count}} views</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>