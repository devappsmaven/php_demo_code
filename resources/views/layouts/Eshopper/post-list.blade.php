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
            <center> <a href="{{route('single-blog', $post->slug)}}">
                <img src="{{asset('img/blog')}}{{'/'}}{{$post->image}}" alt="" style="max-height: 392px;width: auto;">
            </a>
        </center>
            <p>{!!str_limit($post->body,300)!!}</p>
            <a class="btn btn-primary" href="{{route('single-blog', $post->slug)}}">Read More</a>
        </div>
    @endforeach
    <div class="pagination-area">
        <div class="mb-80">
            <div class="row">
                <div class="col-xs-12">
                    <!-- shop-pagination start -->
                    {{$posts->render()}}
                    <!-- shop-pagination end -->
                </div>
            </div> 
        </div>
    </div>
</div>