<div class="brands_products">
    <h2>Popular Galleries</h2>
    <div class="brands-name">
        <ul class="nav nav-pills nav-stacked">
            @foreach ($populargallery as $gallery)
                <li><a href="{{route('single-gallery', $gallery->id)}}"> <span class="pull-right">{{$gallery->view_count}} views</span>{{str_limit($gallery->title,10)}}</a></li>
            @endforeach
        </ul>
    </div>
</div>