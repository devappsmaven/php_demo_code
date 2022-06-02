<div class="blog-section mb-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-left mb-40">
                    <h2 class="uppercase">Latest blog</h2>
                    <h6>There are many variations of passages of brands available,</h6>
                </div>
            </div>
        </div>
        <div class="blog">
            <div class="row active-blog">
            @foreach ($recentposts as $post)
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
        </div>
    </div>
</div>