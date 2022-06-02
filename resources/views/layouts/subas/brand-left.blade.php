<aside class="widget operating-system box-shadow mb-30">
    <h6 class="widget-title border-left mb-20">Brands</h6>
    <form action="action_page.php">
        @foreach ($brands as $brand)
            <label><a href="{{route('product.brand', $brand->name)}}"> {{str_replace('_',' ',$brand->name)}} ({{$brand->quantity}})</a></label><br>
        @endforeach
    </form>
</aside>