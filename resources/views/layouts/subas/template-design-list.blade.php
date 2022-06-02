<div class="shop-content">
        <!-- shop-option start -->
        <div class="shop-option box-shadow mb-30 clearfix">
            <!-- Nav tabs -->
            <ul class="shop-tab f-left" role="tablist">
                <li class="active">
                    <a href="#grid-view" data-toggle="tab" aria-expanded="true"><i class="zmdi zmdi-view-module"></i></a>
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
                <span>Showing : 1-9 of {{$templatedesigns->count()}}.</span>
            </div>                                   
        </div>
        <!-- shop-option end -->
        <!-- Tab Content start -->
        <div class="tab-content">
            <!-- grid-view -->
            <div role="tabpanel" class="tab-pane active" id="grid-view">
                <div class="row">
                    @foreach ($templatedesigns as $design)
                        @if($design->type == 'Template')
                            <!-- product-item start -->
                            <div class="col-md-3 col-sm-4 col-xs-12">
                                <div class="product-item product-item-2">
                                    <div class="product-img">
                                        <a href="{{asset('designstudio/t')}}{{'/'}}{{$design->title}}">
                                            <img src="{{asset('designs/template')}}{{'/'}}{{$design->category->slug}}{{'/'}}{{$design->subcategory->slug}}{{'/'}}{{$design->title}}_{{$design->defaultside}}_preview.png"  style="width:200px; height:auto; background-color:{{$design->background}};">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="{{asset('designstudio/t')}}{{'/'}}{{$design->title}}">
                                        </h6>
                                        <h6 class="brand-name">{{$design->category->name}}/{{$design->subcategory->name}}</h6>
                                        <h6 class="brand-name">{{$design->displayname}}</h6>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- product-item end -->
                        @endif
                    @endforeach
                </div>
            </div>
        </div> 
       
        <!-- Tab Content end -->
        <!-- shop-pagination start -->
        <center> {{$templatedesigns->render()}} </center>
        <!-- shop-pagination end -->
    </div>