<div class="recommended_items">
    <h2 class="title text-center">Latest post</h2>
    
    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">	
                @foreach ($recentposts as $post)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{asset('img/blog')}}{{'/'}}{{$post->image}}" alt="" />
                                    <p>{{$post->title}}</p>
                                <a href="{{route('single-blog', $post->slug)}}" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>{{$post->view_count}} View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
         <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>			
    </div>
</div>