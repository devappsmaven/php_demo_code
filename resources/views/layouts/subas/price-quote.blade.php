<div class="container">
    <div class="row mt-20">
        <div class="col-md-2 col-sm-12">
            <ul class="cart-tab">
                <li>
                    <a class="active" href="#select-product" data-toggle="tab" id="select-product-tab" onclick="initpricequote();">
                        <span>01</span>
                        SELECT PRODUCT
                    </a>
                </li>
                <li>
                    <a href="#product-color" data-toggle="tab" id="product-color-tab">
                        <span>02</span>
                        SELECT PRODUCT COLOR
                    </a>
                </li>
                <li>
                    <a href="#shirt-quantity" data-toggle="tab" id="shirt-quantity-tab">
                        <span>03</span>
                        ENTER SHIRT QUANTITY
                    </a>
                </li>
                <li>
                    <a href="#number-color" data-toggle="tab" id="number-color-tab">
                        <span>04</span>
                        NUMBER OF INK COLORS
                    </a>
                </li>
                <li>
                    <a href="#get-quote" data-toggle="tab" id="get-quote-tab">
                        <span>05</span>
                        QUOTE ESTIMATION
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-10 col-sm-12">
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- select-product start -->
                <div class="tab-pane active" id="select-product">
                    <div class="select-product-content">
                        <div class="product-tab-section mb-50">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h2 class="uppercase">product list</h2>
                                        <div class="pro-tab-menu text-right">
                                            <!-- Nav tabs -->
                                            <ul>
                                                @foreach($productcategories as $category)
                                                    @if(count($category->products()) > 0)
                                                        <li  @if ($loop->first) class="active" @endif ><a href="#{{$category->slug}}" data-toggle="tab">{{$category->name}}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>                       
                                    </div>
                                </div>
                                <div class="product-tab">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        @foreach($productcategories as $category)
                                            @if(count($category->products()) > 0)                                               
                                                <div  @if ($loop->first) class="tab-pane active" @else class="tab-pane" @endif  id="{{$category->slug}}">
                                                    <div class="row">
                                                        @foreach ($productlists as $product)
                                                             @foreach ($product->categories as $productcategory)                                                        
                                                                @if($category->id == $productcategory->id) 
                                                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                                                        <div class="product-item">
                                                                            <div class="product-img">
                                                                                <a href="#product-color" data-toggle="tab" onclick="setpricequoteproduct('{{$product->id}}');">
                                                                                    <img src="{{asset('img/product')}}{{'/'}}{{$product->image}}" alt="">
                                                                                </a>
                                                                            </div>
                                                                            <div class="product-info">
                                                                                <h6 class="product-title">
                                                                                <a href="#product-color" data-toggle="tab">{{$product->name}} </a>
                                                                                </h6>
                                                                                <div class="pro-rating"  style="display:none;">
                                                                                    <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                                                    <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                                                    <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                                                    <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                                                    <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
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
                                                                @endif
                                                            @endforeach
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- select-product end -->
                <!-- product-color start -->
                <div class="tab-pane" id="product-color">
                    <div class="product-color-content" id="price-quote-selected-product">
                        
                    </div>
                </div>
                <!-- product-color end -->
                <!-- shirt-quantity start -->
                <div class="tab-pane" id="shirt-quantity">
                    <div class="shirt-quantity-content box-shadow p-30" id="price-quote-shirt-quantity">
                        
                    </div>
                </div>
                <!-- shirt-quantity end -->
                <!-- number-color start -->
                <div class="tab-pane" id="number-color">
                </div>
                <!-- number-color end -->
                <!-- get-quote start -->
                <div class="tab-pane" id="get-quote">
                   
                </div>
                <!-- get-quote end -->
            </div>
        </div>
    </div>
</div>