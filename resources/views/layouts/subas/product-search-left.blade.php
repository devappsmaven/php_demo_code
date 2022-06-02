<aside class="widget-search mb-30">
    <form  method="POST" action="{{route('product.search')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="text" id="productsearch" name="productsearch" placeholder="Search product here...">
        <button type="submit"><i class="zmdi zmdi-search"></i></button>
    </form>
</aside>