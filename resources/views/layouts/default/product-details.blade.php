
<section class="product_page" id="product_page" style="float: left; width: 100%; padding:10px;">
    <ul class="breadcrumbs">
        <li><a href="{{asset('products')}}">All Products</a></li>
        <li>/</li>
        @if(Session::has('categoryname'))
          <li><a href="/product/category/{{Session::get('categoryslug')}}">{{Session::get('categoryname')}}</a></li>
          <li>/</li>
        @endif
        @if(Session::has('subcategoryname'))
          <li><a href="/product/category/{{Session::get('categoryslug')}}/{{Session::get('subcategoryslug')}}">{{Session::get('subcategoryname')}}</a></li>
          <li>/</li>
        @endif
        <li><a href="{{route('single-product', $product->parent != null ? $product->parent->id : $product->id)}}"> {{$product->name}}	</a></li>
    </ul>
    <div class="row column_heading">       
        <div class="col-sm-3 product_sidebar">     
            <form action="{{ url('/products-filter') }}" method="post" class="column_heading"> {{csrf_field()}}
                
                <input name="url" value="{{$url}}" type="hidden" > 
                <input name="removefilter" id="removefilter" type="hidden" > 
                <h5> ALL PRODUCTS</h5>
            </br>
            <h5> PRICE QUOTE</h5>
            <div id="accordionpricequote" class="myaccordion">               
                <div class="card product_card">
                    <div>                        
                        <input id="price_quote_quantity" name="price_quote_quantity" type="number" style="border-bottom:1px solid #E63D90; width:50px; text-align: center; color: #22252C; font-size: 18px; font-family: 'Conv_ProximaNova-Regular';" value="{{ Session::has('configuration') ? Session::get('configuration')['price_quote_quantity'] : $configurations->price_quote_quantity}}" required min="1">
                        <label for="price_quote_quantity" style="font-size: 18px; font-family: 'Conv_ProximaNova-Regular';">Quantity</label>
                    </div>
                    <div>                        
                        <input id="price_quote_front_color" name="price_quote_front_color" type="number" style="border-bottom:1px solid #E63D90; width:50px; text-align: center; font-size: 18px; font-family: 'Conv_ProximaNova-Regular';" value="{{ Session::has('configuration') ? Session::get('configuration')['price_quote_front_color'] : $configurations->price_quote_front_color}}" required min="1" max="8">
                        <label for="price_quote_front_color" style="font-size: 18px; font-family: 'Conv_ProximaNova-Regular';">Color Front</label>
                    </div>
                    <div>                       
                        <input id="price_quote_back_color" name="price_quote_back_color" type="number" style="border-bottom:1px solid #E63D90; width:50px; text-align: center; font-size: 18px; font-family: 'Conv_ProximaNova-Regular';" value="{{ Session::has('configuration') ? Session::get('configuration')['price_quote_back_color'] : $configurations->price_quote_back_color}}" required min="0" max="8"> 
                        <label for="price_quote_back_color" style="font-size: 18px; font-family: 'Conv_ProximaNova-Regular';">Color Back</label>
                    </div>
                    <button type="button" class="btn design_btn" style="color:white;" onclick="javascript:this.form.submit();">Update Price</button>
                </div>
            </div>
            <br>
            <h5> CATEGORIES</h5>
            <div id="accordionproducts" class="myaccordion">
                @if(!empty($_GET['category']))                          
                    <?php
                        $categoryArray = explode('_',$_GET['category']);
                    ?>
                @endif
                <div class="card product_card">
                    @foreach ($productcategories as $category)
                        <div class="card-header" id="collapseOne">
                            <h2 class="mb-0">
                                <span class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseOne"   onclick="colapsemenu(this,'{{$category->slug}}');">
                                    {{$category->name}}
                                    <span class="fa-stack fa-sm">
                                    <i class="fas fa-stack-2x"></i>
                                    <i class="fas fa-plus fa-stack-1x fa-inverse" id="{{$category->slug}}-icon"></i>
                                    </span>
                                </span>
                            </h2>
                        </div>
                        <div id="{{$category->slug}}" class="collapse" aria-labelledby="collapseOne" data-parent="#accordionproducts">
                            <div class="card-body">
                                <ul>
                                    @foreach ($category->subcategories as $subcategory)
                                        @if($subcategory->visibility == 'Visible' && $subcategory->status == 'Enable')
                                            <li><input name="categoryFilter[]" type="checkbox" id="{{$category->slug}}/{{$subcategory->slug}}" value="{{$category->slug}}/{{$subcategory->slug}}" class="{{$category->slug}}-FilterCategory" onchange="javascript:this.form.submit();" @if(!empty($categoryArray) && in_array($category->slug."/".$subcategory->slug,$categoryArray)) checked="" @endif>
                                                <span> {{$subcategory->name}} </span>
                                            </li>
                                        @endif
                                    @endforeach
                                   
                                    <li><input name="categoryFilter[]" type="checkbox" id="{{$category->slug}}-FilterCategory" value="ViewAll" onchange="filterall(this,'/products?');"  @if(!empty($categoryArray) && in_array(($category->slug."/ViewAll"),$categoryArray) && in_array("/ViewAll",$categoryArray)) checked="" @endif>
                                        <span> View All </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <br>
            <div id="accordionbrands" class="myaccordion">
                @if(!empty($_GET['brand']))                          
                    <?php
                        $brandArray = explode('_',$_GET['brand']);
                    ?>
                @endif
                <div class="card product_card">
                    <div class="card-header" id="collapseBrand">
                        <h5 class="mb-0">
                            <span class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseBrand" style="font-size: 24px; color: #22252C;font-family: 'Conv_Proxima Nova Bold';margin: 0;"  onclick="colapsemenu(this,'all-brands');">
                                All BRANDS
                                <span class="fa-stack fa-sm">
                                <i class="fas fa-stack-2x"></i>
                                <i class="fas fa-plus fa-stack-1x fa-inverse" id="all-brands-icon"></i>
                                </span>
                            </span>
                        </h5>
                    </div>
                    <div id="all-brands" class="collapse" aria-labelledby="collapseBrand" data-parent="#accordionbrands">
                        <div class="card-body">
                            <ul>
                                @foreach ($brandslist as $brand)
                                    @if($brand->status == 'Enable')
                                        <li><input name="brandFilter[]" type="checkbox" id="{{$brand->name}}" value="{{$brand->name}}" class="FilterBrand" onchange="javascript:this.form.submit();" @if(!empty($brandArray) && (in_array($brand->name,$brandArray)/* || in_array('ViewAll',$brandArray)*/)) checked="" @endif><span> {{$brand->name}} </span></li>
                                    @endif
                                @endforeach
                                <li><input type="checkbox"name="brandFilter[]" id="FilterBrandViewAll" value="ViewAll" onchange="filterall(this,'/products?');" @if(!empty($brandArray) && in_array('ViewAll',$brandArray)) checked="" @endif><span> View All </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> 
            <br>
            <div id="accordioncolors" class="myaccordion"> 
                @if(!empty($_GET['color']))                          
                    <?php
                        $colorArray = explode('_',$_GET['color']);
                    ?>
                @endif
                <div class="card product_card">
                    <div class="card-header" id="collapseColor">
                        <h5 class="mb-0">
                            <span class="d-flex align-items-center justify-content-between btn btn-link collapse show" data-toggle="collapse" data-target="#all-colors" aria-expanded="true" aria-controls="collapseColor" style="font-size: 24px; color: #22252C;font-family: 'Conv_Proxima Nova Bold';margin: 0;"   onclick="colapsemenu(this,'all-colors');">
                                All COLORS
                                <span class="fa-stack fa-sm">
                                <i class="fas fa-stack-2x"></i>
                                <i class="fas fa-minus fa-stack-1x fa-inverse" id="all-colors-icon"></i>
                                </span>
                            </span>
                        </h5>
                    </div>
                    <div id="all-colors" class="collapse show" aria-labelledby="collapseColor" data-parent="#accordioncolors">  
                        <div class="card-body">
                            @foreach ($colorslist as $color)
                                @if($color->status == 'Enable')
                                    <label class="radio-container" style="float: left; width: 20px;"><pre></pre>
                                        <input type="radio" name="colorFilter[]" id="{{$color->slug}}" value="{{$color->name}}" onchange="javascript:this.form.submit();" @if(!empty($colorArray) && in_array($color->name,$colorArray)) checked="" @endif>
                                        <span class="checkmark" style="background-color:{{$color->hex}}; border: 1px solid #eeeeee;"></span>
                                    </label>
                                @endif
                            @endforeach
                            <label class="radio-container" style="float: left; width: 20px;"><pre></pre>
                                <input type="radio" name="colorFilter[]" id="Filter Color View All" value="ViewAll" onchange="javascript:this.form.submit();" @if(!empty($colorArray) && in_array('ViewAll',$colorArray)) checked="" @endif>
                                <span class="checkmark" style="background-image: linear-gradient(to right, red , orange, yellow, green,  blue,black, purple, pink, brown) !important;; border: 1px solid #eeeeee;"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div> 
            <br>
            <div id="accordionfabrics" class="myaccordion">
                @if(!empty($_GET['fabric']))                          
                    <?php
                        $fabricArray = explode('_',$_GET['fabric']);
                    ?>
                @endif
                <div class="card product_card">
                    <div class="card-header" id="collapseFabric">
                        <h5 class="mb-0">
                            <span class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#all-fabrics" aria-expanded="false" aria-controls="collapseFabric" style="font-size: 24px; color: #22252C;font-family: 'Conv_Proxima Nova Bold';margin: 0;"  onclick="colapsemenu(this,'all-fabrics');">
                                All FABRICS
                                <span class="fa-stack fa-sm">
                                <i class="fas fa-stack-2x"></i>
                                <i class="fas fa-plus fa-stack-1x fa-inverse" id="all-fabrics-icon"></i>
                                </span>
                            </span>
                        </h5>
                    </div>
                    <div id="all-fabrics" class="collapse" aria-labelledby="collapseFabric" data-parent="#accordionfabrics">
                        <div class="card-body">
                            <ul>
                                @foreach ($fabricslist as $fabric)
                                    <li><input name="fabricFilter[]" type="checkbox" id="{{$fabric->name}}" value="{{$fabric->name}}" class="FilterFabric" onchange="javascript:this.form.submit();" @if(!empty($fabricArray) && in_array($fabric->name,$fabricArray)) checked="" @endif><span> {{$fabric->name}} </span></li>                                    
                                @endforeach
                                <li><input type="checkbox"name="fabricFilter[]" id="FilterFabricViewAll" value="ViewAll" onchange="filterall(this,'/products?');" @if(!empty($fabricArray) && in_array('ViewAll',$fabricArray)) checked="" @endif><span> View All </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
        
        <!-- second row for fit/ladies/polos section-->
        <div class="col-md-9 col-sm-12 product_responsive">
            <div class="row">
                <!-- column for pictures section -->
                <div class="col-md-5 col-sm-12 slider_width">
                    <div class="clearfix">
                        <ul id ="lightSlider">
                            <li data-thumb="{{asset('img/product')}}{{'/'}}{{$product->image}}" id="default-image-thumb">
                                <img src="{{asset('img/product')}}{{'/'}}{{$product->image}}" id="default-image">
                            </li>
                            @foreach($product->sides as $side)
                                <li data-thumb="{{asset('img/product')}}{{'/'}}{{$side->pivot->image}}">
                                    <img src="{{asset('img/product')}}{{'/'}}{{$side->pivot->image}}">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- this is where i have to work for right section-->
                <div class="col-md-7 col-sm-12">
                    <div class="product-heading">
                        <h5> {{$product->name}}</h5>
                        <p> {{$product->brand}} </p>
                        <div class="ratting_star">
                            <span class="{{$product->averageRating >= 1 ? 'fas fa-star' : 'far fa-star'}}"></span>
                            <span class="{{$product->averageRating >= 2 ? 'fas fa-star' : 'far fa-star'}}"></span>
                            <span class="{{$product->averageRating >= 3 ? 'fas fa-star' : 'far fa-star'}}"></span>
                            <span class="{{$product->averageRating >= 4 ? 'fas fa-star' : 'far fa-star'}}"></span>
                            <span class="{{$product->averageRating >= 5 ? 'fas fa-star' : 'far fa-star'}}"></span>
                        </div>
                        <div class="product_details">
                            <p> sizes:</p>
                            <span> {{$product->sizes[0]->name}} - {{$product->sizes[count($product->sizes) - 1]->name}}</span>
                        </div>
                        <div class="product_details">
                            <p> fabric:</p>
                            <span>{{$product->fabric}}  </span>
                        </div>
                        <div class="product_details">
                            <p> min.quantity:</p>
                            <span>  {{$product->min_quantity}} </span>
                        </div>
                        <div class="product_details">
                            <p class="mt-1"> <i class="fab fa-gratipay heart_color"  title="{{$product->favorite_to_users->count()}}"></i>
                            <i class="fas fa-eye eye_color" title="{{$product->view_count}}"></i>
                            </p>
                        </div>
                        <div class="product_details selected_color">
                            <p class="color_Select"> selected color:</p>
                            @foreach($childproducts as $childproduct)
                                @if($childproduct->status == 'Enable' && $childproduct->visibility == 'Visible' )
                                    @if($loop->first)
                                        <div id="single-product-selected-color" class="colour-colorDisplay color-{{$childproduct->color->id}}"></div>
                                        <span id="single-product-selected-name" style="display: inline-block"> {{$childproduct->color->name}} </span>
                                    @endif
                                    @break
                                @endif
                            @endforeach


                        </div>
                        <!-- color section-->
                        <div>
                            <div class="color_box">
                            <h6> Choose a color and start designing:</h6>
                            @foreach($childproducts as $childproduct)
                                @if($childproduct->status == 'Enable' && $childproduct->visibility == 'Visible' )
                                    @if($loop->first)
                                        <div id="price-quote-product-color{{$childproduct->id}}" class="block animate colour-colorDisplay color-{{$childproduct->color->id}}" onclick="parent.indesignstudio ? parent.setselectedproduct('{{$childproduct->id}}','{{$childproduct->color->id}}','{{$childproduct->color->name}}') : setselectedproduct('{{$childproduct->id}}','{{$childproduct->color->id}}','{{$childproduct->color->name}}'); this.pricequote_productid={{$childproduct->color->id}}; setactivecolor(this);" onmouseover="display_child_product_image('{{$childproduct->image}}');"></div>
                                    @else
                                        <div id="price-quote-product-color{{$childproduct->id}}" class="block  colour-colorDisplay color-{{$childproduct->color->id}}" onclick="parent.indesignstudio ? parent.setselectedproduct('{{$childproduct->id}}','{{$childproduct->color->id}}','{{$childproduct->color->name}}') : setselectedproduct('{{$childproduct->id}}','{{$childproduct->color->id}}','{{$childproduct->color->name}}'); this.pricequote_productid={{$childproduct->color->id}}; setactivecolor(this);" onmouseover="display_child_product_image('{{$childproduct->image}}');"></div>
                                    @endif
                                @endif
                            @endforeach
                            </div>
                        </div>
                        @if($childproducts->count() > 0)
                        <a href="{{url('/designstudio/p',$childproducts[0]->id)}}"  id="go_designstudio" class="btn btn-info" tabindex="-1" style="border-radius: 30px;
                            background-color: #00BBEA;
                            color: white;
                            font-weight: bold;
                            text-transform: capitalize;
                            margin-top: 15px;
                            border: 0px;
                            padding: 15px;">
                            <span class="text-uppercase">START DESIGNING</span>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row container">
                <div class="col-sm-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active " id="home-tab" data-toggle="tab" href="#DESCRIPTION" role="tab" aria-controls="home"
                            aria-selected="true">DESCRIPTION</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link description-head" id="profile-tab" data-toggle="tab" href="#REVIEWS" role="tab" aria-controls="profile"
                            aria-selected="false">REVIEWS(0)</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active description-tab back-color" id="DESCRIPTION" role="tabpanel" aria-labelledby="home-tab">
                            <h4>
                            {{$product->name}}
                            </h4>
                            <p>
                            {!!$product->description!!}
                            </p>
                        </div>
                        <div class="tab-pane fade back-color"  id="REVIEWS" role="tabpanel" aria-labelledby="profile-tab"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
