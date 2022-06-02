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
                        @foreach ($postcategories as $category)
                        <li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea"></div><a href="#">{{$category->name}}</a>
                            <ul class="treeview">
                                @foreach ($category->subcategories as $subcategory)
                                    <li><a href="{{route('blog.category', [$category->slug,$subcategory->slug])}}">{{$subcategory->name}}</a></li>    
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
                Recent post
                <i class="zmdi zmdi-chevron-down"></i>
            </button>
            <div class="dropdown-menu dropdown-width mt-30">
                <aside class="widget widget-product box-shadow">
                    <h6 class="widget-title border-left mb-20">recent posts</h6>
                    @foreach ($recentposts as $post)
                        <!-- product-item start -->
                        <div class="product-item">
                            <div class="product-img">
                                <a href="{{route('single-blog', $post->slug)}}">
                                    <img src="{{asset('img/blog')}}{{'/'}}{{$post->image}}" alt="">
                                </a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-title multi-line mt-10">
                                    <a href="{{route('single-blog', $post->slug)}}">{{$post->title}}</a>
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
                            <li><a href="{{route('blog.tag', $tag->slug)}}">{{$tag->name}}</a></li>
                        @endforeach
                    </ul>                  
                </aside>      
            </div>
        </div>
    </div>
</div>
<div class="row">
    @foreach ($posts as $post)
        <div class="col-sm-6 col-xs-12">
            <div class="blog-item-2">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="blog-image">
                            <a href="{{route('single-blog', $post->slug)}}"><img src="{{asset('img/blog')}}{{'/'}}{{$post->image}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="blog-desc">
                            <h5 class="blog-title-2"><a href="{{route('single-blog', $post->slug)}}">{{str_limit($post->title,'10')}}</a></h5>
                            <p>{!!str_limit($post->body,50)!!}</p>
                            <div class="read-more">
                                <a href="{{route('single-blog', $post->slug)}}">Read more</a>
                            </div>
                            <ul class="blog-meta">
                                <li>
                                    @guest
                                        <a href="javascript:void(0);"><i class="zmdi zmdi-favorite"></i>{{ $post->favorite_to_users->count() }} favorite</a>
                                    @else
                                        <a href="{{ route('posts.favorite', $post->id) }}"  onclick="event.preventDefault(); document.getElementById('favorite-form-{{ $post->id }}').submit();"
                                            class="{{ !Auth::user()->favorite_posts->where('pivot.post_id',$post->id)->count()  == 0 ? 'favorite_posts' : ''}}">
                                            <i class="zmdi zmdi-favorite"></i>{{ $post->favorite_to_users->count() }} favorite</a>
            
                                        <form id="favorite-form-{{ $post->id }}" method="POST" action="{{ route('posts.favorite', $post->id) }}" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    @endguest
                                </li>
                                <li>
                                    <a href="{{route('single-blog', $post->slug)}}"><i class="zmdi zmdi-comments"></i>{{$post->comments->count()}} Comments</a>
                                </li>
                                <li>
                                    <a href="{{route('single-blog', $post->slug)}}"><i class="zmdi zmdi-eye"></i>{{$post->view_count}} Views</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="mb-80">
    <div class="row">
        <div class="col-xs-12">
            <!-- shop-pagination start -->
            <center>{{$posts->render()}}</center>
            <!-- shop-pagination end -->
        </div>
    </div> 
</div>