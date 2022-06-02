<div class="col-md-12">
    <div class="blog-option box-shadow mb-30  clearfix">
        <!-- categories -->
        <div class="dropdown f-left">
            <button class="option-btn">
                Categories
                <i class="zmdi zmdi-chevron-down"></i>
            </button>
            <div class="dropdown-menu dropdown-width mt-30">
                <aside class="widget widget-categories box-shadow">
                    <h6 class="widget-title border-left mb-20">Categories</h6>
                    <div id="cat-treeview" class="product-cat">
                        @foreach ($gallerycategories as $category)
                        <li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea"></div><a href="#">{{$category->name}}</a>
                            <ul class="treeview">
                                @foreach ($category->subcategories as $subcategory)
                                    <li><a href="{{route('gallery.category', [$category->slug,$subcategory->slug])}}">{{$subcategory->name}}</a></li>    
                                @endforeach
                            </ul>
                        </li>                                           
                        @endforeach
                    </div>
                </aside>
            </div>
        </div>
        <!-- recent-product -->
        <div class="dropdown f-left">
            <button class="option-btn">
                Recent gallery
                <i class="zmdi zmdi-chevron-down"></i>
            </button>
            <div class="dropdown-menu dropdown-width mt-30">
                <aside class="widget widget-product box-shadow">
                    <h6 class="widget-title border-left mb-20">recent posts</h6>
                    @foreach ($recentgallerys as $gallery)
                        <!-- product-item start -->
                        <div class="product-item">
                            <div class="product-img">
                                <a href="{{route('single-gallery', $gallery->slug)}}">
                                    <img src="{{asset('img/gallery')}}{{'/'}}{{$gallery->image}}" alt="">
                                </a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-title multi-line mt-10">
                                    <a href="{{route('single-gallery', $gallery->slug)}}">{{$gallery->title}}</a>
                                </h6>
                            </div>
                        </div>
                        <!-- product-item end -->          
                    @endforeach
                </aside>      
            </div>
        </div>
        <!-- Tags -->
        <div class="dropdown f-left">
            <button class="option-btn">
                Tags
                <i class="zmdi zmdi-chevron-down"></i>
            </button>
            <div class="dropdown-menu dropdown-width mt-30">
                <aside class="widget widget-tags box-shadow">
                    <h6 class="widget-title border-left mb-20">Tags</h6>
                    <ul class="widget-tags-list">
                        @foreach ($tags as $tag)
                            <li><a href="{{route('gallery.tag', $tag->slug)}}">{{$tag->name}}</a></li>
                        @endforeach
                    </ul>                  
                </aside>      
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- blog-item start -->
    @foreach ($gallerys as $gallery)
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
    <!-- blog-item end -->
</div>

<div class="row">
    <div class="col-xs-12">
        <!-- shop-pagination start -->
        <center>{{$gallerys->render()}}</center>
        <!-- shop-pagination end -->
    </div>
</div>