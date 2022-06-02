<aside class="widget widget-product box-shadow">
    <h6 class="widget-title border-left mb-20">popular gallery</h6>
    @foreach ($populargallery as $gallery)
        <!-- product-item start -->
        <div class="product-item">
            <div class="product-img">
                <a href="{{route('single-gallery', $gallery->slug)}}">
                    <img src="{{asset('img/gallery')}}{{'/'}}{{$gallery->image}}" alt="">
                </a>
            </div>
            <div class="product-info">
                <h6 class="product-title">
                    <a href="{{route('single-gallery', $gallery->slug)}}">{{$gallery->title}}</a>
                </h6>
                <h3 class="pro-price">{{$gallery->view_count}} views </h3>
            </div>
        </div>
        <!-- product-item end -->         
    @endforeach
</aside>