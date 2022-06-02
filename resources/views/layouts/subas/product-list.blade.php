<div class="shop-content">
    <!-- shop-option start -->
    <div class="shop-option box-shadow mb-30 clearfix">
        <!-- Nav tabs -->
        <ul class="shop-tab f-left" role="tablist">
            <li class="active">
                <a href="#grid-view" data-toggle="tab" aria-expanded="true"><i class="zmdi zmdi-view-module"></i></a>
            </li>
            <li class="">
                <a href="#list-view" data-toggle="tab" aria-expanded="false"><i class="zmdi zmdi-view-list-alt"></i></a>
            </li>
        </ul>
        <!-- short-by -->
        <div class="short-by f-left text-center" style="display:none;">
            <span>Sort by :</span>
            <select>
                <option value="volvo">Newest items</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
            </select> 
        </div> 
        <!-- showing -->
        <div class="showing f-right text-right" style="display:none;">
            <span>Showing : 1-9 of {{$products->count()}}.</span>
        </div>                                   
    </div>
    <!-- shop-option end -->
    <!-- Tab Content start -->
    <div class="tab-content">
        <!-- grid-view -->
        <div role="tabpanel" class="tab-pane active" id="grid-view">
            <div class="row">
                @foreach ($products as $product)
                    <!-- product-item start -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="product-item">
                            <div class="product-img">
                                <a href="{{route('single-product', $product->parent != null ? $product->parent->id : $product->id)}}">
                                    <img src="{{asset('img/product')}}{{'/'}}{{$product->image}}" alt="">
                                </a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-title">
                                    <a href="{{route('single-product', $product->parent != null ? $product->parent->id : $product->id)}}">{{$product->parent != null ? $product->parent->name: $product->name}} </a>
                                </h6>
                                <div class="pro-rating" style="display:none;">
                                    <a href="javascript:void(0)"><i class="zmdi zmdi-star"></i></a>
                                    <a href="javascript:void(0)"><i class="zmdi zmdi-star"></i></a>
                                    <a href="javascript:void(0)"><i class="zmdi zmdi-star"></i></a>
                                    <a href="javascript:void(0)"><i class="zmdi zmdi-star-half"></i></a>
                                    <a href="javascript:void(0)"><i class="zmdi zmdi-star-outline"></i></a>
                                </div>
                                <ul class="action-button">
                                    <li>
                                        <a href="javascript:void(0)" title="{{$product->favorite_to_users->count()}} Favorite" tabindex="0"><i class="zmdi zmdi-favorite"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" title="{{$product->view_count}} view" tabindex="0"><i class="zmdi zmdi-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- product-item end -->
                @endforeach
                
            </div>
        </div>
        <!-- list-view -->
        <div role="tabpanel" class="tab-pane" id="list-view">
            <div class="row">
                @foreach ($products as $product)
                <!-- product-item start -->
                <div class="col-md-12">
                    <div class="shop-list product-item">
                        <div class="product-img">
                            <a href="{{route('single-product', $product->parent != null ? $product->parent->id : $product->id)}}">
                                <img src="{{asset('img/product')}}{{'/'}}{{$product->image}}" alt="">
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="clearfix">
                                <h6 class="product-title f-left">
                                    <a href="{{route('single-product', $product->parent != null ? $product->parent->id : $product->id)}}">{{$product->parent != null ? $product->parent->name: $product->name}} </a>
                                </h6>
                                <div class="pro-rating f-right">
                                    <a href="javascript:void(0)"><i class="zmdi zmdi-star"></i></a>
                                    <a href="javascript:void(0)"><i class="zmdi zmdi-star"></i></a>
                                    <a href="javascript:void(0)"><i class="zmdi zmdi-star"></i></a>
                                    <a href="javascript:void(0)"><i class="zmdi zmdi-star-half"></i></a>
                                    <a href="javascript:void(0)"><i class="zmdi zmdi-star-outline"></i></a>
                                </div>
                            </div>
                            <h6 class="brand-name mb-30">{{$product->brand}}</h6>
                            <p>{!!$product->description!!}</p>
                            <ul class="action-button">
                                <li>
                                    <a href="javascript:void(0)" title="{{$product->favorite_to_users->count()}} Favorite" tabindex="0"><i class="zmdi zmdi-favorite"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" title="{{$product->view_count}} view" tabindex="0"><i class="zmdi zmdi-eye"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- product-item end -->
                @endforeach
            </div>                                        
        </div>
    </div> 
   
    <!-- Tab Content end -->
    <!-- shop-pagination start -->
    <center> {{$products->render()}} </center>
    <!-- shop-pagination end -->
</div>