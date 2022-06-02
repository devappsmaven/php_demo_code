@extends('layouts.app')
@section('title','Blogs')
@section('menuname','Blogs')
@section('content')
 <!-- BLOG SECTION START -->
 @if($theme =='subas')
 <div class="blog-section mb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <div class="blog-details-area">
                        <!-- blog-details-photo -->
                        <div class="blog-details-photo bg-img-1 p-20 mb-30">
                            <img src="{{asset('img/blog')}}{{'/'}}{{$post->image}}" >
                            <div class="today-date bg-img-1">
                                <span class="meta-date">{{$post->created_at->day}}</span>
                                <span class="meta-month">{{$post->created_at->format('F')}}</span>
                            </div>
                        </div>
                        <!-- blog-like-share -->
                        <ul class="blog-like-share mb-20">
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
                                <a href="#"><i class="zmdi zmdi-comments"></i>{{$post->comments->count()}} Comments</a>
                            </li>
                            <li>
                                <a href="#"><i class="zmdi zmdi-eye"></i>{{$post->view_count}} Views</a>
                            </li>
                        </ul>
                        <!-- blog-details-title -->
                        <h3 class="blog-details-title mb-30">{{$post->title}}</h3>
                        <!-- blog-description -->
                        <div class="blog-description mb-60">
                            <p>{{$post->body}}</p>
                        </div>
                        <!-- blog-share-tags -->
                        <div class="blog-share-tags box-shadow clearfix mb-60">
                            <div class="blog-tags f-left">
                                <p class="share-tags-title f-left">Categories</p>
                                <ul class="blog-tags-list f-left">
                                    @foreach ($post->categories as $category)
                                        <li>
                                            <a href="#">{{$category->name}}</a>
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
                                    @foreach ($post->tags as $tag)
                                        <li>
                                            <a href="#">{{$tag->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- author-post -->
                        <div class="media author-post box-shadow mb-60">
                            <div class="media-left pr-20">
                                <a href="#">
                                    <img class="media-object" src="{{asset('img/profile')}}{{'/'}}{{$post->user->image}}" style="width:80px; heigth:auto;">
                                </a>
                            </div>
                            <div class="media-body">
                                <h6 class="media-heading">
                                    <a href="#">{{ $post->user->firstname }} {{ $post->user->lastname }}</a>
                                </h6>
                                <p class="mb-0">{{ str_limit($post->user->about,'50')}}</p>
                            </div>
                        </div>
                        <!-- comments on t this post -->
                        <div class="post-comments mb-60">
                            <h4 class="blog-section-title border-left mb-30">comments on this post</h4>
                            @foreach($post->comments as $comment)
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
                             @endforeach
                        </div>
                        @guest
                        @else
                        <!-- leave your comment -->
                        <div class="leave-comment">
                            <h4 class="blog-section-title border-left mb-30">leave your comment</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Subash Chandra Das">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="email" placeholder="Email address here...">
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="subject" placeholder="Subject here...">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="custom-textarea" placeholder="Your comment here..."></textarea>
                                </div>
                            </div>
                            <button class="submit-btn-1 black-bg mt-30 btn-hover-2" type="submit">submit comment</button>
                        </div>
                        <!--  -->
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
        <h2 class="title text-center">Latest From our Blog</h2>
        <div class="single-blog-post">
            <h3>{{$post->user->title}}</h3>
            <div class="post-meta">
                <ul>
                    <li><i class="fa fa-user"></i> {{$post->user->firstname}} {{$post->user->lastname}}</li>
                    <li><i class="fa fa-clock-o"></i>{{$post->created_at->format('h:m a')}}</li>
                    <li><i class="fa fa-calendar"></i> {{$post->created_at->format('M d, Y')}}</li>
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
                <img src="{{asset('img/blog')}}{{'/'}}{{$post->image}}" alt="">
            </a>
            <p>
                {{$post->user->body}}
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
            @foreach ($post->tags as $tag)
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
            <h4 class="media-heading">Annie Davis</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
        <h2>3 RESPONSES</h2>
        <ul class="media-list">
            <li class="media">
                
                <a class="pull-left" href="#">
                    <img class="media-object" src="images/blog/man-two.jpg" alt="">
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
            <li class="media second-media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="images/blog/man-three.jpg" alt="">
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
            <li class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="images/blog/man-four.jpg" alt="">
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
        </ul>					
    </div>
    <div class="replay-box">
        <div class="row">
            <div class="col-sm-4">
                <h2>Leave a replay</h2>
                <form>
                    <div class="blank-arrow">
                        <label>Your Name</label>
                    </div>
                    <span>*</span>
                    <input type="text" placeholder="write your name...">
                    <div class="blank-arrow">
                        <label>Email Address</label>
                    </div>
                    <span>*</span>
                    <input type="email" placeholder="your email address...">
                    <div class="blank-arrow">
                        <label>Web Site</label>
                    </div>
                    <input type="email" placeholder="current city...">
                </form>
            </div>
            <div class="col-sm-8">
                <div class="text-area">
                    <div class="blank-arrow">
                        <label>Your Name</label>
                    </div>
                    <span>*</span>
                    <textarea name="message" rows="11"></textarea>
                    <a class="btn btn-primary" href="">post comment</a>
                </div>
            </div>
        </div>
    </div>
@endif
@endsection