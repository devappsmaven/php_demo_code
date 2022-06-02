@extends('layouts.app')
@section('title','Gallery')
@section('menuname','Gallery')
@section('content')
@if($theme =='subas')
<div class="blog-section mb-50">
    <div class="container">
        <div class="row">
            <!-- blog-option start -->
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
                                    <ul class="treeview">
                                        @foreach ($categories as $category)
                                        <li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea"></div><a href="#">{{$category->name}}</a>
                                            <ul class="treeview" style="display: none;">
                                                <li><a href="#">Mobile</a></li>
                                                <li><a href="#">Tab</a></li>
                                                <li><a href="#">Watch</a></li>
                                                <li><a href="#">Head Phone</a></li>
                                                <li class="last"><a href="#">Memory</a></li>
                                            </ul>
                                        </li>                                 
                                        @endforeach
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                    <!-- recent-product -->
                    <div class="dropdown f-left">
                        <button class="option-btn">
                            Recent Post
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
                                        <li><a href="#">{{$tag->name}}</a></li>
                                    @endforeach
                                </ul>                  
                            </aside>      
                        </div>
                    </div>
                </div>
            </div>
            <!-- blog-option end -->
        </div>
        <div class="row" style="display:none;">
            @foreach ($gallerys as $gallery)
            <!-- blog-item start -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item">
                        <img src="{{asset('img/gallery')}}{{'/'}}{{$gallery->image}}" style="width:262px; height:auto;">
                    <div class="blog-desc">
                        <h5 class="blog-title"><a href="{{route('single-gallery', $gallery->slug)}}">{{str_limit($gallery->title,'20')}}</a></h5>
                        <p>{{str_limit($gallery->body,'10')}}</p>
                        <div class="read-more">
                            <a href="{{route('single-gallery', $gallery->slug)}}">Read more</a>
                        </div>
                        <ul class="blog-meta">
                            <li>
                                @guest
                                    <a href="javascript:void(0);"><i class="zmdi zmdi-favorite"></i>{{ $gallery->favorite_to_users->count() }} favorite</a>
                                @else
                                    <a href="{{ route('posts.favorite', $gallery->id) }}"  onclick="event.preventDefault(); document.getElementById('favorite-form-{{ $gallery->id }}').submit();"
                                        class="{{ !Auth::user()->favorite_posts->where('pivot.post_id',$gallery->id)->count()  == 0 ? 'favorite_posts' : ''}}">
                                        <i class="zmdi zmdi-favorite"></i>{{ $gallery->favorite_to_users->count() }} favorite</a>

                                    <form id="favorite-form-{{ $gallery->id }}" method="POST" action="{{ route('posts.favorite', $gallery->id) }}" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                @endguest
                            </li>
                            <li>
                                <a href="{{route('single-gallery', $gallery->slug)}}"><i class="zmdi zmdi-comments"></i>{{$gallery->comments->count()}} Comments</a>
                            </li>
                            <li>
                                <a href="{{route('single-gallery', $gallery->slug)}}"><i class="zmdi zmdi-eye"></i>{{$gallery->view_count}} Views</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- blog-item end -->
            @endforeach
        </div>
        <div class="row">
            <!-- blog-item start -->
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
                                <h5 class="blog-title-2"><a href="{{route('single-gallery', $gallery->slug)}}">{{$gallery->title}}</a></h5>
                                <p>{!!str_limit($gallery->body,'300')!!}</p>
                                <div class="read-more">
                                    <a href="{{route('single-gallery', $gallery->slug)}}">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- blog-item end -->
        </div>
    </div>
</div>
@elseif($theme == 'eshopper')
    <div class="blog-post-area">
        <h2 class="title text-center">Latest From our Gallery</h2>
        @foreach ($gallerys as $gallery)
            <div class="single-gallery-post">
                <h3>{{$gallery->title}}</h3>
                <div class="post-meta">
                    <ul>
                        <li><i class="fa fa-user"></i> {{$gallery->user->firstname}} {{$gallery->user->lastname}}</li>
                        <li><i class="fa fa-clock-o"></i>{{$gallery->created_at->format('h:m a')}}</li>
                        <li><i class="fa fa-calendar"></i> {{$gallery->created_at->format('M d, Y')}}</li>
                    </ul>
                    <span>
                            <i class="fa fa-heart"></i>
                            <i class="fa fa-heart"></i>
                            <i class="fa fa-heart"></i>
                            <i class="fa fa-heart"></i>
                            <i class="fa fa-heart-half-o"></i>
                    </span>
                </div>
               <center> <a href="{{route('single-gallery', $gallery->slug)}}">
                    <img src="{{asset('img/gallery')}}{{'/'}}{{$gallery->image}}" alt="" style="max-height: 392px;width: auto;">
                </a>
            </center>
                <p>{{$gallery->body}}</p>
                <a class="btn btn-primary" href="{{route('single-gallery', $gallery->slug)}}">Read More</a>
            </div>
        @endforeach
        <div class="pagination-area">
            <ul class="pagination">
                <li><a href="" class="active">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href=""><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
        </div>
    </div>
@endif
@endsection
