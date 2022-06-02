<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Features Items</h2>
    @foreach ($templatedesigns as $design)
        @if($design->type == 'Template')
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{asset('designs/template')}}{{'/'}}{{$template->category->slug}}{{'/'}}{{$template->subcategory->slug}}{{'/'}}{{$template->title}}_{{$template->defaultside}}_preview.png"  style="width:200px; height:auto; background-color:{{$design->background}};">
                            <h2>{{$design->category->name}}/{{$design->subcategory->name}}</h2>
                            <p>{{$design->title}}</p>
                            <a href="{{route('designstudio',[$design->product->id, $design->filename])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Take to Studio</a>
                        </div>
                        <div class="product-overlay">
                            <div class="overlay-content">
                                    <h2>{{$design->category->name}}/{{$design->subcategory->name}}</h2>
                                    <p>{{$design->title}}</p>
                                <a href="{{route('designstudio', [$design->product->id, $design->filename])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Take to Studio</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</div>
<center> {{$templatedesigns->render()}} </center>