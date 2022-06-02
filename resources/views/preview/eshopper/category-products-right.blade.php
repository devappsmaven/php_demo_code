<h2>Category</h2>
<div class="panel-group category-products" id="accordian">
    <div class="panel panel-default">
        @foreach ($productcategories as $category)
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="#{{$category->name}}">
                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                        {{$category->name}}
                    </a>
                </h4>
            </div>
            <div id="{{$category->name}}" class="panel-collapse collapse">
                <div class="panel-body">
                    <ul>
                        @foreach ($category->subcategories as $subcategory)
                            <li><a href="{{route('product.category', $subcategory->category_id.'_'.$subcategory->id)}}">{{$subcategory->name}} </a></li>    
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
</div>