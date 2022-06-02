<aside class="widget-search mb-30">
    <form  method="POST" action="{{route('blog.search')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="text" id="postsearch" name="postsearch" placeholder="Search post here...">
        <button type="submit"><i class="zmdi zmdi-search"></i></button>
    </form>
</aside>