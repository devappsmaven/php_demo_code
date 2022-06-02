<aside class="widget widget-product box-shadow">
    <h6 class="widget-title border-left mb-20">popular post</h6>
    @foreach ($popularpost as $post)
        <!-- product-item start -->
        <div class="product-item">
            <div class="product-img">
                <a href="{{route('single-blog', $post->slug)}}">
                    <img src="{{asset('img/blog')}}{{'/'}}{{$post->image}}" alt="">
                </a>
            </div>
            <div class="product-info">
                <h6 class="product-title">
                    <a href="{{route('single-blog', $post->slug)}}">{{$post->title}}</a>
                </h6>
                <h3 class="pro-price">{{$post->view_count}} views </h3>
            </div>
        </div>
        <!-- product-item end -->         
    @endforeach
</aside>