@extends('layouts.app')
@section('title','Single Gallery')
@section('menuname','Single Gallery')
@section('content')
 <!-- BLOG SECTION START -->
 @if($theme =='subas')
 <div class="blog-section mb-50">
        @include('common.alerts') 
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <div class="blog-details-area">
                        <!-- blog-details-photo -->
                        <div class="blog-details-photo bg-img-1 p-20 mb-30">
                            <img src="{{asset('img/gallery')}}{{'/'}}{{$gallery->image}}" >
                            <div class="today-date bg-img-1">
                                <span class="meta-date">{{$gallery->created_at->day}}</span>
                                <span class="meta-month">{{$gallery->created_at->format('F')}}</span>
                            </div>
                        </div>
                        <!-- blog-like-share -->
                        <ul class="blog-like-share mb-20">
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
                                <a href="#"><i class="zmdi zmdi-comments"></i>{{$gallery->comments->count()}} Comments</a>
                            </li>
                            <li>
                                <a href="#"><i class="zmdi zmdi-eye"></i>{{$gallery->view_count}} Views</a>
                            </li>
                        </ul>
                        <!-- blog-details-title -->
                        <h3 class="blog-details-title mb-30">{{$gallery->title}}</h3>
                        <!-- blog-description -->
                        <div class="blog-description mb-60">
                            <p>{!!$gallery->body!!}</p>
                        </div>
                        <!-- blog-share-tags -->
                        <div class="blog-share-tags box-shadow clearfix mb-60">
                            <div class="blog-tags f-left">
                                <p class="share-tags-title f-left">Categories</p>
                                <ul class="blog-tags-list f-left">
                                    @foreach ($gallery->categories as $category)
                                        <li>
                                            <a href="{{route('gallery.category',$category->name)}}">{{$category->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="blog-share f-left" style="display:none;">
                                <p class="share-tags-title f-left">share</p>
                                <ul class="footer-social f-left">
                                    <li>
                                        <a class="facebook" href="" title="Facebook"><i class="zmdi zmdi-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="google-plus" href="" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="" title="Twitter"><i class="zmdi zmdi-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="rss" href="" title="RSS"><i class="zmdi zmdi-rss"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-tags f-right">
                                <p class="share-tags-title f-left">Tags</p>
                                <ul class="blog-tags-list f-left">
                                    @foreach ($gallery->tags as $tag)
                                        <li>
                                            <a href="{{route('gallery.tag',$tag->slug)}}">{{$tag->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- author-post -->
                        <div class="media author-post box-shadow mb-60">
                            <div class="media-left pr-20">
                                <a href="#">
                                    <img class="media-object" src="{{asset('img/profile')}}{{'/'}}{{$gallery->user->image}}" style="width:80px; heigth:auto;">
                                </a>
                            </div>
                            <div class="media-body">
                                <h6 class="media-heading">
                                    <a href="#">{{ $gallery->user->firstname }} {{ $gallery->user->lastname }}</a>
                                </h6>
                                <p class="mb-0">{{ str_limit($gallery->user->about,'50')}}</p>
                            </div>
                        </div>
                        <!-- comments on t this post -->
                        @if($gallery->comments->count() > 0)
                        <div class="post-comments mb-60">
                            <h4 class="blog-section-title border-left mb-30">comments on this post</h4>
                            @foreach($gallery->comments as $comment)
                                @if($comment->is_approved == 'Approved')
                                <!-- single-comments -->
                                <div class="media mt-30">
                                    <div class="media-left pr-30">
                                        <a href="#"><img class="media-object" src="{{asset('img/profile')}}{{'/'}}{{$comment->user->image}}" alt="#"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <div class="name-commenter f-left">
                                                <h6 class="media-heading"><a href="#">  {{$comment->user->firstname}} {{$comment->user->lastname}}</a></h6>
                                                <p class="mb-10">{{$comment->created_at->diffForHumans()}}</p>
                                            </div>
                                            <ul class="reply-delate f-right">
                                                <li><a href="#">Reply</a></li>
                                                <li>/</li>
                                                <li><a href="#">Delate</a></li>
                                            </ul>
                                        </div>
                                        <p class="mb-0"> {{$comment->text}}</p>
                                    </div>
                                </div>
                                @endif
                             @endforeach
                        </div>
                        @else
                            <div class="post-comments mb-60">
                                <h4 class="blog-section-title border-left mb-30">No comments on this post</h4>
                            </div>
                        @endif

                        @guest

                        @else
                        <form role="form" method="POST" action="/admin/comments/sendcomment" enctype="multipart/form-data" class="colors_form" novalidate="novalidate">
                            {{csrf_field()}}
                            <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                            <input type="hidden" id="post_id" name="post_id" value="{{$gallery->id}}">
                            <!-- leave your comment -->
                            <div class="leave-comment">
                                <h4 class="blog-section-title border-left mb-30">leave your comment</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="name" value="{{Auth::user()->firstname}} {{Auth::user()->lastname}}" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="email" value="{{Auth::user()->email}}" readonly>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="subject" style="display:none">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="custom-textarea" placeholder="Your comment here..." id="text" name="text"></textarea>
                                    </div>
                                </div>
                                <button class="submit-btn-1 black-bg mt-30 btn-hover-2" type="submit">submit comment</button>
                            </div>
                            <!--  -->
                        </form>
                       @endguest
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <!-- widget-search -->
                    <aside class="widget-search mb-30">
                        <form action="#">
                            <input type="text" placeholder="Search here...">
                            <button type="submit"><i class="zmdi zmdi-search"></i></button>
                        </form>
                    </aside>
                    <!-- widget-categories -->
                    <aside class="widget widget-categories box-shadow mb-30">
                        <h6 class="widget-title border-left mb-20">Categories</h6>
                        <div id="cat-treeview" class="product-cat">
                            <ul>
                                <li class="closed"><a href="#">Brand One</a>
                                    <ul>
                                        <li><a href="#">Mobile</a></li>
                                        <li><a href="#">Tab</a></li>
                                        <li><a href="#">Watch</a></li>
                                        <li><a href="#">Head Phone</a></li>
                                        <li><a href="#">Memory</a></li>
                                    </ul>
                                </li>                                       
                                <li class="open"><a href="#">Brand Two</a>
                                    <ul>
                                        <li><a href="#">Mobile</a></li>
                                        <li><a href="#">Tab</a></li>
                                        <li><a href="#">Watch</a></li>
                                        <li><a href="#">Head Phone</a></li>
                                        <li><a href="#">Memory</a></li>
                                    </ul>
                                </li>
                                <li class="closed"><a href="#">Accessories</a>
                                    <ul>
                                        <li><a href="#">Footwear</a></li>
                                        <li><a href="#">Sunglasses</a></li>
                                        <li><a href="#">Watches</a></li>
                                        <li><a href="#">Utilities</a></li>
                                    </ul>
                                </li>
                                <li class="closed"><a href="#">Top Brands</a>
                                    <ul>
                                        <li><a href="#">Mobile</a></li>
                                        <li><a href="#">Tab</a></li>
                                        <li><a href="#">Watch</a></li>
                                        <li><a href="#">Head Phone</a></li>
                                        <li><a href="#">Memory</a></li>
                                    </ul>
                                </li>
                                <li class="closed"><a href="#">Jewelry</a>
                                    <ul>
                                        <li><a href="#">Footwear</a></li>
                                        <li><a href="#">Sunglasses</a></li>
                                        <li><a href="#">Watches</a></li>
                                        <li><a href="#">Utilities</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <!-- widget-product -->
                    <aside class="widget widget-product box-shadow mb-30">
                        <h6 class="widget-title border-left mb-20">recent products</h6>
                        <!-- product-item start -->
                        <div class="product-item">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="img/product/4.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-title">
                                    <a href="single-product.html">Product Name</a>
                                </h6>
                                <h3 class="pro-price">$ 869.00</h3>
                            </div>
                        </div>
                        <!-- product-item end -->
                        <!-- product-item start -->
                        <div class="product-item">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="img/product/8.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-title">
                                    <a href="single-product.html">Product Name</a>
                                </h6>
                                <h3 class="pro-price">$ 869.00</h3>
                            </div>
                        </div>
                        <!-- product-item end -->
                        <!-- product-item start -->
                        <div class="product-item">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="img/product/12.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-title">
                                    <a href="single-product.html">Product Name</a>
                                </h6>
                                <h3 class="pro-price">$ 869.00</h3>
                            </div>
                        </div>
                        <!-- product-item end -->                               
                    </aside>
                    <!-- operating-system -->
                    <aside class="widget operating-system box-shadow">
                        <h6 class="widget-title border-left mb-20">operating system</h6>
                        <form action="action_page.php">
                            <label><input type="checkbox" name="operating-1" value="phone-1">Windows Phone</label><br>
                            <label><input type="checkbox" name="operating-1" value="phone-1">Bleckgerry ios</label><br>
                            <label><input type="checkbox" name="operating-1" value="phone-1">Android</label><br>
                            <label><input type="checkbox" name="operating-1" value="phone-1">ios</label><br>
                            <label><input type="checkbox" name="operating-1" value="phone-1">Windows Phone</label><br>
                            <label><input type="checkbox" name="operating-1" value="phone-1">Symban</label><br>
                            <label class="mb-0"><input type="checkbox" name="operating-1" value="phone-1">Bleckgerry os</label><br>
                        </form>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- BLOG SECTION END -->  
@elseif($theme == 'eshopper')
    <div class="blog-post-area">
        <h2 class="title text-center">Latest From our Gallery</h2>
        <div class="single-blog-post">
            <h3>{{$gallery->user->title}}</h3>
            <div class="post-meta">
                <ul>
                    <li><i class="fa fa-user"></i> {{$gallery->user->firstname}} {{$gallery->user->lastname}}</li>
                    <li><i class="fa fa-clock-o"></i>{{$gallery->created_at->format('h:m a')}}</li>
                    <li><i class="fa fa-calendar"></i> {{$gallery->created_at->format('M d, Y')}}</li>
                </ul>
                <span>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </span>
            </div>
            <a href="">
                <img src="{{asset('img/gallery')}}{{'/'}}{{$gallery->image}}" alt="">
            </a>
            <p>
                {{$gallery->user->body}}
            </p>
            <div class="pager-area">
                <ul class="pager pull-right">
                    <li><a href="#">Pre</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="rating-area">
        <ul class="ratings">
            <li class="rate-this">Rate this item:</li>
            <li>
                <i class="fa fa-heart color"></i>
                <i class="fa fa-heart color"></i>
                <i class="fa fa-heart color"></i>
                <i class="fa fa-heart"></i>
                <i class="fa fa-heart"></i>
            </li>
            <li class="color">(6 favorite)</li>
        </ul>
        <ul class="tag">
            <li>TAG:</li>
            @foreach ($gallery->tags as $tag)
                <li><a class="color" href="">{{$tag->name}} <span>/</span></a></li>
            @endforeach
        </ul>
    </div>
    <div class="socials-share">
        <a href=""><img src="images/blog/socials.png" alt=""></a>
    </div>
    <div class="media commnets">
        <a class="pull-left" href="#">
            <img class="media-object" src="images/blog/man-one.jpg" alt="">
        </a>
        <div class="media-body">
            <h4 class="media-heading">{{$gallery->user->firstname}} {{$gallery->user->lastname}}</h4>
            <p>{{$gallery->body}}</p>
            <div class="blog-socials">
                <ul>
                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                </ul>
                <a class="btn btn-primary" href="">Other Posts</a>
            </div>
        </div>
    </div>
    <div class="response-area">
    <h2>RESPONSES</h2>
        <ul class="media-list">
            @foreach ($gallery->comments as $comment)
                @if($comment->is_approved == 'Approved')
                    <li class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="{{asset('img/profile')}}{{'/'}}{{$comment->user->image}}" alt="">
                        </a>
                        <div class="media-body">
                            <ul class="sinlge-post-meta">
                            <li><i class="fa fa-user"></i>{{$comment->user->firstname}}{{$comment->user->lastname}}</li>
                                <li><i class="fa fa-clock-o"></i> {{$comment->created_at->format('h:m a')}}</li>
                                <li><i class="fa fa-calendar"></i>{{$comment->created_at->format('M d, Y')}}</li>
                            </ul>
                        <p>{{$comment->text}}</p>
                            <a class="btn btn-primary" href=""><i class="fa fa-reply"></i>Replay</a>
                        </div>
                    </li>
                    @if($comment->replays->count() > 0)
                        @foreach ($comment->replays as $replay)
                            @if($comment->is_approved == 'Approved')
                                <li class="media second-media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="{{asset('img/profile')}}{{'/'}}{{$replay->user->image}}" alt="">
                                    </a>
                                    <div class="media-body">
                                        <ul class="sinlge-post-meta">
                                            <li><i class="fa fa-user"></i>Janis Gallagher</li>
                                            <li><i class="fa fa-clock-o"></i> 1:33 pm</li>
                                            <li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <a class="btn btn-primary" href=""><i class="fa fa-reply"></i>Replay</a>
                                    </div>
                                </li>    
                            @endif
                        @endforeach
                    @endif
                @endif
            @endforeach
        </ul>					
    </div>
    @guest

    @else
    <form role="form" method="POST" action="/admin/comments/sendcomment" enctype="multipart/form-data" class="colors_form" novalidate="novalidate">
        {{csrf_field()}}
        <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
        <input type="hidden" id="post_id" name="post_id" value="{{$gallery->id}}">
        <div class="replay-box">
            <div class="row">
                <div class="col-sm-4">
                    <h2>Leave a replay</h2>
                    
                        <div class="blank-arrow">
                            <label>Your Name</label>
                        </div>
                        <span>*</span>
                        <input type="text" value="{{$gallery->user->firstname}} {{$gallery->user->lastname}}" >
                        <br>
                        <div class="blank-arrow">
                            <label>Email Address</label>
                        </div>
                        <span>*</span>
                        <input type="email" value="{{$gallery->user->email}}" readonly>
                        <div class="blank-arrow">
                            <label>Web Site</label>
                        </div>
                        <input type="email" placeholder="current city...">
                
                </div>
                <div class="col-sm-8">
                    <div class="text-area">
                        <div class="blank-arrow">
                            <label>Your Name</label>
                        </div>
                        <span>*</span>
                        <textarea id= "text" name="text" rows="11"></textarea>
                        <button class="btn btn-primary" type="submit">post comment</button>
                    </div>
                </div>
            </div> 
        </div>
    </form>
    @endguest
@endif
@endsection