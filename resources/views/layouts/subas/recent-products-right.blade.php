<aside class="widget widget-product box-shadow">
    <h6 class="widget-title border-left mb-20">recent products</h6>
    @foreach ($recentproducts as $recentproduct)
        <!-- product-item start -->
        <div class="product-item">
            <div class="product-img">
                <a href="{{route('single-product', $recentproduct->id)}}">
                    <img src="{{asset('img/product')}}{{'/'}}{{$recentproduct->image}}" alt="">
                </a>
            </div>
            <div class="product-info">
                <h6 class="product-title">
                    <a href="{{route('single-product', $recentproduct->id)}}">{{$recentproduct->name}}</a>
                </h6>
                <h3 class="pro-price">$ {{$recentproduct->price}}</h3>
            </div>
        </div>
        <!-- product-item end -->         
    @endforeach
    
</aside>