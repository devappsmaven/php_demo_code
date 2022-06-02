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
                <a href="{{ route('gallerys.favorite', $gallery->id) }}"  onclick="event.preventDefault(); document.getElementById('favorite-form-{{ $gallery->id }}').submit();"
                    class="{{ !Auth::user()->favorite_gallerys->where('pivot.gallery_id',$gallery->id)->count()  == 0 ? 'favorite_gallerys' : ''}}">
                    <i class="zmdi zmdi-favorite"></i>{{ $gallery->favorite_to_users->count() }} favorite</a>

                <form id="favorite-form-{{ $gallery->id }}" method="POST" action="{{ route('gallerys.favorite', $gallery->id) }}" style="display: none;">
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
        <h4 class="blog-section-title border-left mb-30">comments on this gallery</h4>
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
            <h4 class="blog-section-title border-left mb-30">No comments on this gallery</h4>
        </div>
    @endif

    @guest

    @else
    <form role="form" method="POST" action="/admin/comments/sendgallerycomment" enctype="multipart/form-data" class="colors_form" novalidate="novalidate">
        {{csrf_field()}}
        <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
        <input type="hidden" id="gallery_id" name="gallery_id" value="{{$gallery->id}}">
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