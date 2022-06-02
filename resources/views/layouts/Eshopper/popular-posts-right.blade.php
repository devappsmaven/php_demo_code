<div class="brands_products">
    <h2>Popular Post</h2>
    <div class="brands-name">
        <ul class="nav nav-pills nav-stacked">
            @foreach ($popularpost as $post)
                <li><a href="{{route('single-blog', $post->slug)}}"> <span class="pull-right">{{$post->view_count}} views</span>{{str_limit($post->title,10)}}</a></li>
            @endforeach
        </ul>
    </div>
</div>