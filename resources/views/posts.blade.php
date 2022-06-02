@extends('layouts.app')
@section('title','Blogs')
@section('menuname','Blogs')
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
                                        <li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea"></div><a href="#">Brand One</a>
                                            <ul class="treeview" style="display: none;">
                                                <li><a href="#">Mobile</a></li>
                                                <li><a href="#">Tab</a></li>
                                                <li><a href="#">Watch</a></li>
                                                <li><a href="#">Head Phone</a></li>
                                                <li class="last"><a href="#">Memory</a></li>
                                            </ul>
                                        </li>                                       
                                        <li class="open expandable"><div class="hitarea open-hitarea expandable-hitarea"></div><a href="#">Brand Two</a>
                                            <ul class="treeview">
                                                <li><a href="#">Mobile</a></li>
                                                <li><a href="#">Tab</a></li>
                                                <li><a href="#">Watch</a></li>
                                                <li><a href="#">Head Phone</a></li>
                                                <li class="last"><a href="#">Memory</a></li>
                                            </ul>
                                        </li>
                                        <li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea"></div><a href="#">Accessories</a>
                                            <ul class="treeview" style="display: none;">
                                                <li><a href="#">Footwear</a></li>
                                                <li><a href="#">Sunglasses</a></li>
                                                <li><a href="#">Watches</a></li>
                                                <li class="last"><a href="#">Utilities</a></li>
                                            </ul>
                                        </li>
                                        <li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea"></div><a href="#">Top Brands</a>
                                            <ul class="treeview" style="display: none;">
                                                <li><a href="#">Mobile</a></li>
                                                <li><a href="#">Tab</a></li>
                                                <li><a href="#">Watch</a></li>
                                                <li><a href="#">Head Phone</a></li>
                                                <li class="last"><a href="#">Memory</a></li>
                                            </ul>
                                        </li>
                                        <li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea"></div><a href="#">Jewelry</a>
                                            <ul class="treeview" style="display: none;">
                                                <li><a href="#">Footwear</a></li>
                                                <li><a href="#">Sunglasses</a></li>
                                                <li><a href="#">Watches</a></li>
                                                <li class="last"><a href="#">Utilities</a></li>
                                            </ul>
                                        </li>
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
                                <h6 class="widget-title border-left mb-20">recent products</h6>
                                <!-- product-item start -->
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img src="img/cart/4.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title multi-line mt-10">
                                            <a href="single-product.html">Dummy Blog Name</a>
                                        </h6>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img src="img/cart/5.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title multi-line mt-10">
                                            <a href="single-product.html">Dummy Blog Name</a>
                                        </h6>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img src="img/cart/6.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title multi-line mt-10">
                                            <a href="single-product.html">Dummy Blog Name</a>
                                        </h6>
                                    </div>
                                </div>
                                <!-- product-item end -->                               
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
                                    <li><a href="#">Bleckgerry ios</a></li>
                                    <li><a href="#">Symban</a></li>
                                    <li><a href="#">IOS</a></li>
                                    <li><a href="#">Bleckgerry</a></li>
                                    <li><a href="#">Windows Phone</a></li>
                                    <li><a href="#">Windows Phone</a></li>
                                    <li><a href="#">Androids</a></li>
                                </ul>                  
                            </aside>      
                        </div>
                    </div>
                </div>
            </div>
            <!-- blog-option end -->
        </div>
        <div class="row">
            @foreach ($posts as $post)
            <!-- blog-item start -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item">
                        <img src="{{asset('img/blog')}}{{'/'}}{{$post->image}}" style="width:262px; height:auto;">
                    <div class="blog-desc">
                        <h5 class="blog-title"><a href="{{route('post', $post->id)}}">{{str_limit($post->title,'20')}}</a></h5>
                        <p>{{str_limit($post->body,'10')}}</p>
                        <div class="read-more">
                            <a href="{{route('post', $post->id)}}">Read more</a>
                        </div>
                        <ul class="blog-meta">
                            <li>
                                <!--<a href="{{route('posts', $post->id)}}"><i class="zmdi zmdi-favorite"></i>0 Like</a>-->
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
                                <a href="{{route('post', $post->id)}}"><i class="zmdi zmdi-comments"></i>{{$post->comments->count()}} Comments</a>
                            </li>
                            <li>
                                <a href="{{route('post', $post->id)}}"><i class="zmdi zmdi-eye"></i>{{$post->view_count}} Views</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- blog-item end -->
            @endforeach
        </div>
    </div>
</div>
@elseif($theme == 'eshopper')
    <div class="blog-post-area">
        <h2 class="title text-center">Latest From our Blog</h2>
        @foreach ($posts as $post)
            <div class="single-blog-post">
                <h3>{{$post->title}}</h3>
                <div class="post-meta">
                    <ul>
                        <li><i class="fa fa-user"></i> {{$post->user->firstname}} {{$post->user->lastname}}</li>
                        <li><i class="fa fa-clock-o"></i>{{$post->created_at->format('h:m a')}}</li>
                        <li><i class="fa fa-calendar"></i> {{$post->created_at->format('M d, Y')}}</li>
                    </ul>
                    <span>
                            <i class="fa fa-heart"></i>
                            <i class="fa fa-heart"></i>
                            <i class="fa fa-heart"></i>
                            <i class="fa fa-heart"></i>
                            <i class="fa fa-heart-half-o"></i>
                    </span>
                </div>
               <center> <a href="{{route('post', $post->id)}}">
                    <img src="{{asset('img/blog')}}{{'/'}}{{$post->image}}" alt="" style="max-height: 392px;width: auto;">
                </a>
            </center>
                <p>{{$post->body}}</p>
                <a class="btn btn-primary" href="{{route('post', $post->id)}}">Read More</a>
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
