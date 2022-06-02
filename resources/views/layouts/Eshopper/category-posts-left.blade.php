<h2>Category</h2>
<div class="panel-group category-products" id="accordian">
    <div class="panel panel-default">
        @foreach ($postcategories as $category)
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="#{{$category->slug}}">
                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                        {{$category->slug}}
                    </a>
                </h4>
            </div>
            <div id="{{$category->slug}}" class="panel-collapse collapse">
                <div class="panel-body">
                    <ul>
                        @foreach ($category->subcategories as $subcategory)
                            <li><a href="{{route('blog.category', [$category->slug,$subcategory->slug])}}">{{$subcategory->slug}} </a></li>    
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
</div>