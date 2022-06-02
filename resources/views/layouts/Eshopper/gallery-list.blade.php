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
            <p>{!!$gallery->body!!}</p>
            <a class="btn btn-primary" href="{{route('single-gallery', $gallery->slug)}}">Read More</a>
        </div>
    @endforeach
    <div class="pagination-area">
        <center>{{$gallerys->render()}}</center>
    </div>
</div>