<aside class="widget-search mb-30">
    <form  method="POST" action="{{route('gallery.search')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="text" id="gallerysearch" name="gallerysearch" placeholder="Search gallery here...">
        <button type="submit"><i class="zmdi zmdi-search"></i></button>
    </form>
</aside>