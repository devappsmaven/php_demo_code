<div class="blog-section mb-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-left mb-40">
                    <h2 class="uppercase">Latest gallery</h2>
                    <h6>There are many variations of passages of brands available,</h6>
                </div>
            </div>
        </div>
        <div class="blog">
            <div class="row active-blog">
                @foreach ($recentgallerys as $gallery)
                    <div class="col-sm-6 col-xs-12">
                        <div class="blog-item-2">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <div class="blog-image">
                                        <a href="{{route('single-gallery', $gallery->slug)}}"><img src="{{asset('img/gallery')}}{{'/'}}{{$gallery->image}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="blog-desc">
                                        <h5 class="blog-title-2"><a href="{{route('single-gallery', $gallery->slug)}}">{{str_limit($gallery->title,'20')}}</a></h5>
                                        <p>{!!str_limit($gallery->body,'30')!!}</p>
                                        <div class="read-more">
                                            <a href="{{route('single-gallery', $gallery->slug)}}">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>