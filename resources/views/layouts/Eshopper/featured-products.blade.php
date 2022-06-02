

<div class="category-tab">
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            @foreach($maincategories as  $category)
                @if ($loop->first)
                    <li class="active"><a href="#{{$category->id}}" data-toggle="tab">{{$category->name}}</a></li>
                @else
                    <li><a href="#{{$category->id}}" data-toggle="tab">{{$category->name}}</a></li>
                @endif
             @endforeach
        </ul>
    </div>
    <div class="tab-content">
        @foreach($maincategories as  $category)
            @if($category->products->count() > 0)
                @if ($loop->first)
                    <div class="tab-pane fade active in" id="{{$category->id}}" >
                        @foreach($category->products as $product)
                            @if($loop->iteration < 5)
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset('img/product')}}{{'/'}}{{$product->image}}" alt="">
                                                <p>{{$product->name}}</p>
                                                <a href="{{route('single-product', $product->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($loop->iteration == 5)
                                @break
                            @endif
                        @endforeach
                    </div>
                @else
                    <div class="tab-pane fade" id="{{$category->id}}" >
                        @foreach($category->products as $product)
                            @if($loop->iteration < 5)
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset('img/product')}}{{'/'}}{{$product->image}}" alt="">
                                                <p>{{$product->name}}</p>
                                                <a href="{{route('single-product', $product->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($loop->iteration == 5)
                                @break
                            @endif
                        @endforeach
                    </div>
                @endif
            @endif
        @endforeach
    </div>
</div><!--/category-tab-->