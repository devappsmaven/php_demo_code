<aside class="widget-search mb-30">
    <form  method="POST" action="{{route('template-designs.search')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="text" id="template-designs-search" name="template-designs-search" placeholder="Search template designs here...">
        <button type="submit"><i class="zmdi zmdi-search"></i></button>
    </form>
</aside>