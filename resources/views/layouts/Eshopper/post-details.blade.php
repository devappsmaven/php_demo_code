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
            <li><a class="color" href="{{route('blog.tag',$tag->slug)}}">{{$tag->name}} <span>/</span></a></li>
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
        <h4 class="media-heading">{{$post->user->firstname}} {{$post->user->lastname}}</h4>
        <p>{!!$post->body!!}</p>
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
        @foreach ($post->comments as $comment)
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
    <input type="hidden" id="post_id" name="post_id" value="{{$post->id}}">
    <div class="replay-box">
        <div class="row">
            <div class="col-sm-4">
                <h2>Leave a replay</h2>
                
                    <div class="blank-arrow">
                        <label>Your Name</label>
                    </div>
                    <span>*</span>
                    <input type="text" value="{{$post->user->firstname}} {{$post->user->lastname}}" >
                    <br>
                    <div class="blank-arrow">
                        <label>Email Address</label>
                    </div>
                    <span>*</span>
                    <input type="email" value="{{$post->user->email}}" readonly>
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