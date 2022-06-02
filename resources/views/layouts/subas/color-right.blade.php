<aside class="widget widget-color box-shadow mb-30">
    <h6 class="widget-title border-left mb-20">color</h6>
    <ul>
        @foreach ($colors as $color)
            <li>
                <div class="row">
                    <div class="col-sm-2">
                        <div id="child_color_{{$color->id}}" class="color-{{$color->id}}" style="border-radius: 50%;  width: 30px; height: 30px; border: 1px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px; /*float: left;*/"></div>   
                    </div>
                    <div class="col-sm-10">
                        <a href="{{route('product.color', $color->name)}}"> 
                            <span class="pull-right">
                                ({{$color->quantity}})
                            </span>
                            {{$color->name}}
                        </a>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</aside>