<aside class="widget widget-categories box-shadow mb-30">
    <h6 class="widget-title border-left mb-20">Categories</h6>
    <div id="cat-treeview" class="product-cat">
        <ul class="treeview">
            @foreach ($productcategories as $category)
                <li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea"></div><a href="javascript:void(0)">{{$category->slug}}</a>
                    <ul class="treeview">
                        @foreach ($category->subcategories as $subcategory)
                        <li><a href="/product/category/{{$category->slug}}/{{$subcategory->slug}}">{{$subcategory->name}}</a></li>   
                        @endforeach
                        <li><a href="/product/category/{{$category->slug}}">View All</a></li>
                    </ul>
                </li>                                           
            @endforeach
        </ul>
    </div>
</aside>