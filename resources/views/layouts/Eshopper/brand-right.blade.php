<div class="brands_products"><!--brands_products-->
    <h2>Brands</h2>
    <div class="brands-name">
        <ul class="nav nav-pills nav-stacked">
            @foreach ($brands as $brand)
                <li><a href="{{route('product.brand', $brand->name)}}"> <span class="pull-right">({{$brand->quantity}})</span>{{str_replace('_',' ',$brand->name)}}</a></li>
            @endforeach
        </ul>
    </div>
</div>