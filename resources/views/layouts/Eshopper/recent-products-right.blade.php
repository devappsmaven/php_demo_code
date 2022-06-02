<div class="brands_products">
        <h2>Recent Products</h2>
        <div class="brands-name">
            <ul class="nav nav-pills nav-stacked">
                @foreach ($recentproducts as $product)
                    <li>
                        <a href="{{route('single-product', $product->id)}}"> 
                            <div class="row">
                                <div class="col-sm-3">
                                    <span class="pull-right"><img src="{{asset('img/product')}}{{'/'}}{{$product->image}}" alt="" style="max-width: 60px; heigth:auto;"></span>
                                </div>
                                <div class="col-sm-9">{{$product->name}}</div>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>