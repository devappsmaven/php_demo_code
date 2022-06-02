@extends('layouts.admin')
@section('title','Product Details')
@section('pagename','Product Details')
@section('menuname','Product Details')
@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Product Information</h3>
        <div class="box-tools pull-right">
        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        @include('common.alerts')
        <div class="row">
            
            <div class="col-md-4">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('stylenumber') ? ' has-error' : '' }} has-feedback">
                    {{Form::label('stylenumber','StyleNumber')}}
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ $product->stylenumber }}" disabled>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                    {{Form::label('name','Name *')}}
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ $product->name }}" disabled>
                    </div>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-red">{{ $errors->first('name') }}</strong>
                        </span>
                    @endif 
                </div>
                <div class="form-group{{ $errors->has('brand') ? ' has-error' : '' }} has-feedback">
                    <label for="brand">Brand *</label>
                    <select class="form-control" name="brand" disabled>
                        @foreach ($brands as $brand)
                            @if($brand->status == 'Enable')
                                @if($brand->name == $product->brand)
                                    <option selected>{{ $brand->name }}</option>
                                @else
                                <option >{{ $brand->name }}</option>
                                @endif
                            @else
                                <option disabled>{{ $brand->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    @if ($errors->has('brand'))
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-red">{{ $errors->first('brand') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group{{ $errors->has('fabric') ? ' has-error' : '' }} has-feedback">
                    {{Form::label('fabric','Fabric *')}}
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ $product->fabric }}" disabled>
                    </div>
                    @if ($errors->has('fabric'))
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-red">{{ $errors->first('fabric') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }} has-feedback">
                    {{Form::label('price','Price *')}}
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ $product->price }}" disabled>
                        </div>
                        @if ($errors->has('price'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('price') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="form-group{{ $errors->has('min_quanity') ? ' has-error' : '' }} has-feedback">
                    {{Form::label('min_quanity','Min Quanity *')}}
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" class="form-control" name="min_quantity" placeholder="Enter name" value="{{ $product->min_quantity }}" disabled>
                    </div>
                    @if ($errors->has('min_quanity'))
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-red">{{ $errors->first('min_quanity') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group{{ $errors->has('visibility') ? ' has-error' : '' }} has-feedback">
                    <label for="visibility">Visibility *</label>
                    <select class="form-control" name="visibility" disabled>
                        @if($product->visibility == 'Visible')
                            <option selected>Visible</option>
                            <option>Invisible</option>
                         @endif
                         @if($product->visibility == 'Invisible')
                            <option>Visible</option>
                            <option selected>Invisible</option>
                         @endif
                    </select>
                    @if ($errors->has('visibility'))
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-red">{{ $errors->first('visibility') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                    <label for="status">Status *</label>
                    <select class="form-control" name="status" disabled>
                        @if($product->status == 'Enable')
                            <option selected>Enable</option>
                            <option>Disable</option>
                         @endif
                         @if($product->status == 'Disable')
                            <option>Enable</option>
                            <option selected>Disable</option>
                         @endif
                    </select>
                    @if ($errors->has('status'))
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-red">{{ $errors->first('status') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }} has-feedback">
                    {{Form::label('image','Catalog Image')}}
                    </br>
                    <img src="{{asset('img/product')}}{{'/'}}{{$product->image}}" style="width:50px; height:auto;">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }} has-feedback">
                    <textarea name="description" id="description" class="form-control description2" style="height: 300px"  disabled>
                        {{ $product->description }}
                    </textarea>
                    @if ($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-red">{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-md-4">
                    <div class="form-group">
                        <label>Related Products</label>
                        {!! Form::select('relatedproducts[]' , $relatedproducts , $product->relatedproducts, ['class' => 'form-control',"multiple", 'disabled']) !!}
                    </div>
                    <div class="form-group">
                        <label>Categories</label></br>
                        <select class="form-control" multiple="multiple" data-placeholder="Select a category" style="width: 100%;" name="categories[]" disabled>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" disabled>{{ $category->name }}</option>
                                @foreach ($category->subcategories as $subcategory)
                                <option value="{{ $category->id }}{{ '_' }}{{ $subcategory->id }}"   
                                    @foreach ($product->subcategories as $productsubcategory)
                                        @if($productsubcategory->id == $subcategory->id)
                                        selected
                                        @endif
                                    @endforeach                    
                                    >&nbsp;&nbsp;&nbsp;{{ $subcategory->name }}</option>
                                @endforeach                    
                            @endforeach  
                        </select> 
                    </div>
                    <div class="form-group">
                        <label>Sizes</label>
                        {!! Form::select('sizes[]' , $sizes , $product->sizes, ['class' => 'form-control',"multiple", 'disabled']) !!}
                    </div>
                </div> 
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group{{ $errors->has('sizechartimage') ? ' has-error' : '' }} has-feedback">
                    {{Form::label('sizechartimage','Size Chart Image')}}
                    <div class="input-group">
                        </br>
                        <img src="{{asset('img/product')}}{{'/'}}{{$product->sizechartimage}}" style="width:250px; height:auto;">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <label>Size Chart Description</label>
                <div class="form-group{{ $errors->has('sizechartdescription') ? ' has-error' : '' }} has-feedback">
                    <textarea name="sizechartdescription" id="sizechartdescription" class="form-control description2" style="height: 300px" disabled>
                        {{ $product->sizechartdescription }}
                    </textarea>
                    <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                    <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>
                    @if ($errors->has('sizechartdescription'))
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-red">{{ $errors->first('sizechartdescription') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="image_input">Size Chart</label>
                    <div id="table" class="table">
                        <input type="hidden" name="chart" id="chart" value="">
                        <table class="table table-striped table-bordered" id="sizechart" name="sizechart">
                            <thead>
                                <tr>
                                <th>Sizes</th>
                                <th>Width</th>
                                <th>Length</th>
                                <th>Remove</th>
                                <th>Up/Down<span class="table-add fa fa-plus addsizes" id="addsizes" name="addsizes"></span></th>
                                </tr>
                            </thead>
                            <tbody id="tbody" name="tbody">
                                @foreach($product->sizeschart as $sizechart)
                                    <tr>
                                        <td>{{  $sizechart->size }}</td>
                                        <td>{{  $sizechart->width }}</td>
                                        <td>{{  $sizechart->length }}</td>
                                        <td><span class="table-remove fa fa-times removesizes"></span></td>
                                        <td>
                                            <span class="table-up glyphicon fa fa-arrow-up movesizeup"></span>
                                            <span class="table-up glyphicon fa fa-arrow-down movesizedown"></span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                    <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="form-group">
                    <label for="image_input">Configure Print Areas</label>
                    <div class="row">
                        <input type="hidden" name="productsides" id="productsides">
                        @foreach ($product->sides as $side)
                            <div class="col-sm-3">
                                <label for="{{$side->slug}}">{{$side->name}}</label>
                                <br>
                                @if($side->pivot->image)
                                    <img src="{{asset('img/product')}}{{'/'}}{{$side->pivot->image}}" id="{{$side->slug}}preview" style="width:50px; height:auto;">
                                @endif
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="checkbox" id="{{$side->slug}}checkbox" name="{{$side->slug}}checkbox" checked disabled>
                                    </span>
                                    <a class="btn btn-default btn-sm waves-effect waves-light upload-{{$side->slug}}image disabled" data-toggle="modal" data-target="#modal-upload-{{$side->slug}}image" id="{{$side->slug}}upload" name="{{$side->slug}}upload">Add Media</a>
                                    <div id="modal-upload-{{$side->slug}}image" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog" style="width:95%;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title" id="custom-width-modalLabel">Insert Media</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-sm-10">
                                                            <div class="nav-tabs-custom">
                                                                <ul class="nav nav-tabs">
                                                                    <li><a href="#upload{{$side->slug}}image" data-toggle="tab">Upload Files</a></li>
                                                                    <li class="active"><a href="#medialibrary" data-toggle="tab">Media Library</a></li>
                                                                </ul>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane" id="upload{{$side->slug}}image">
                                                                        <div class="form-group{{ $errors->has('$side->slug.$image') ? ' has-error' : '' }} has-feedback">
                                                                            <label for="{{$side->slug}}image">Image</label>
                                                                            <input type="file" class="form-control" name="{{$side->slug}}image" id="{{$side->slug}}image">
                                                                            @if ($errors->has('{{$side->slug}}image'))
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong class="text-red">{{ $errors->first('$side->slug.$image') }}</strong>
                                                                                </span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="active tab-pane" id="medialibrarytab">
                                                                    <div class="container-fluid" style="overflow:scroll; max-height:600px;">
                                                                        <div class="row">
                                                                            <input type="hidden" name="{{$side->slug}}previewmedia" id="{{$side->slug}}previewmedia">
                                                                            @foreach($medias as $media)
                                                                                <div class="col-sm-1">    
                                                                                    <label>
                                                                                    <input type="radio" name="{{$side->slug}}media" id="{{$side->slug}}media{{$media->id}}" value="{{asset('img')}}{{'/'}}{{ $media->url }}{{'/'}}{{ $media->file }}" onchange="SetMedia(this,'{{$side->slug}}');">
                                                                                        <img class="img-responsive" src="{{asset('img')}}{{'/'}}{{ $media->url }}{{'/'}}{{ $media->file }}"  style="width:100px; max-width:100px; max-height: 100px;" />
                                                                                    </label>
                                                                                </div>
                                                                            @endforeach
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-info waves-effect remove-data-from-delete-form" data-dismiss="modal">Insert Into Post</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                        @endforeach
                    </div>
                    <br>
                    <div id="print-area-table" class="table-editable">
                        <input type="hidden" name="print-area" id="print-area" value="">
                        <table class="table table-striped table-bordered" id="print-area-chart" name="print-area-chart">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Side</th>
                                    <th>Width</th>
                                    <th>Height</th>
                                    <th>Left</th>
                                    <th>Top</th>
                                    <th>Remove</th>
                                    <th>Up/Down<span class="table-add fa fa-plus addprintarea"></span></th>
                                </tr>
                            </thead>
                            <tbody id="tbody-printarea" name="tbody-printarea">
                                @foreach($product->printareas as $area)
                                    <tr>
                                        <td contenteditable="false" type="name" onclick="setCanvasProperty2(this);">{{  $area->name }}</td>
                                        <td contenteditable="false">
                                            <select class="form-control" type="select" name="sides"disabled onclick="setCanvasProperty2(this);">
                                                @foreach ($sides as $side)
                                                    <option value="{{  $side->slug }}" {{ $side->slug == $area->side ? 'selected' : '' }}>{{  $side->name }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td contenteditable="false" type="width" onclick="setCanvasProperty2(this);">{{  $area->width }}</td>
                                        <td contenteditable="false" type="height" onclick="setCanvasProperty2(this);">{{  $area->height }}</td>
                                        <td contenteditable="false" type="left" onclick="setCanvasProperty2(this);">{{  $area->left }}</td>
                                        <td contenteditable="false" type="top" onclick="setCanvasProperty2(this);">{{  $area->top }}</td>
                                        <td><span class="table-remove fa fa-times removesizes"></span></td>
                                        <td>
                                            <span class="table-up glyphicon fa fa-arrow-up movesizeup"></span>
                                            <span class="table-up glyphicon fa fa-arrow-down movesizedown"></span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">

                        </div>
                        <div class="col-sm-8">
                            <div class="canvasShirt" id="previewCanvasShirt" style="background-image: url('');  border: 1px solid #000; width: 743px; height: 810px; background-repeat: no-repeat; background-size: contain;">
                                <div id="previewcanvas-wrapper" style="width: 375px; height: 600px; border: 0px solid #eeeeee;  position: relative; top:110px; left:180px">
                                    <canvas id="previewCanvas" style=" width: 375px; height: 600px; border: 1px solid #32a7e0;"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                        
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="col-md-8">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs pull-right">
                        <li class=""><a href="#left_tab" data-toggle="tab" aria-expanded="false">Left</a></li>
                        <li class=""><a href="#back_tab" data-toggle="tab" aria-expanded="false">Back</a></li>
                        <li class=""><a href="#right_tab" data-toggle="tab" aria-expanded="false">Right</a></li>
                        <li class="active"><a href="#front_tab" data-toggle="tab" aria-expanded="true">Front</a></li>
                        <li class="pull-left header"><i class="fa fa-th"></i> Canvas Side Configure</li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="front_tab">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group{{ $errors->has('frontimage') ? ' has-error' : '' }} has-feedback">
                                        {{Form::label('frontimage','Front Image')}}
                                        <div class="input-group">
                                            {{ $product->frontimage}}
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('sizechartimage') ? ' has-error' : '' }} has-feedback">
                                        {{Form::label('configure_guide_line_front','Configure Guide Line')}}
                                        <div class="input-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="frontguidelineshorizontal" name="frontguidelineshorizontal" {{ $product->frontguidelineshorizontal ? 'checked' : '' }} disabled>Guide Line Horizontal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="frontguidelinesvertical" name="frontguidelinesvertical" {{ $product->frontguidelinesvertical ? 'checked' : '' }} disabled>Guide Line Vertical
                                                </label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="frontguidelinesyouth" name="frontguidelinesyouth" {{ $product->frontguidelinesyouth ? 'checked' : '' }} disabled>Guide Line Youth
                                                </label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="frontguidelinesadult" name="frontguidelinesadult" {{ $product->frontguidelinesadult ? 'checked' : '' }} disabled>Guide Line Adult
                                                </label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="frontguidelinesleftchest" name="frontguidelinesleftchest" {{ $product->frontguidelinesleftchest ? 'checked' : '' }} disabled>Guide Line Left Chest
                                                </label>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="box box-default">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Configure Canvas</h3>
                                        </div>
                                        <div class="box-body">
                                            <div class="form-group{{ $errors->has('frontenable') ? ' has-error' : '' }} has-feedback">
                                                {{Form::label('frontenable','Enable',['class'=>'col-sm-4'])}}
                                                <div class="input-group col-sm-8" align="center">
                                                    <input type="checkbox" id="frontenable" name="frontenable" {{ $product->frontenable ? 'checked' : '' }} disabled>
                                                </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('frontwidth') ? ' has-error' : '' }} has-feedback">
                                                {{Form::label('frontwidth','Width',['class'=>'col-sm-4'])}}
                                                <div class="input-group col-sm-8">
                                                    <input type="number" class="form-control" name="frontwidth" value="{{ $product->frontwidth }}" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('frontheight') ? ' has-error' : '' }} has-feedback">
                                                {{Form::label('frontheight','Height',['class'=>'col-sm-4'])}}
                                                <div class="input-group col-sm-8">
                                                    <input type="number" class="form-control" name="frontheight" value="{{ $product->frontheight }}" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('frontleft') ? ' has-error' : '' }} has-feedback">
                                                {{Form::label('frontleft','Left',['class'=>'col-sm-4'])}}
                                                <div class="input-group col-sm-8">
                                                    <input type="number" class="form-control" name="frontleft" value="{{ $product->frontleft }}" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('fronttop') ? ' has-error' : '' }} has-feedback">
                                                {{Form::label('fronttop','Top',['class'=>'col-sm-4'])}}
                                                <div class="input-group col-sm-8">
                                                    <input type="number" class="form-control" name="fronttop" value="{{ $product->fronttop }}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="box box-widget">
                                        <div class="box-body">
                                            <div class="canvasShirt" id="frontCanvasShirt" style="background-image: url({{ "'" }}{{ asset('img/product')}}{{ "/" }}{{ $product->frontimage }}{{ "'" }});  border: 1px solid #eeeeee; width: 743px; height: 810px; background-repeat: no-repeat; background-size: contain;">
                                                <div id="frontcanvas-wrapper" style="width: {{ $product->frontwidth }}px; height: {{ $product->frontheight }}px; border: 0px solid #eeeeee;  position: relative; top:{{ $product->fronttop }}px; left:{{ $product->frontleft }}px">
                                                    <canvas id="frontCanvas" style=" width: {{ $product->frontwidth }}px; height: {{ $product->frontheight }}px; border: 1px solid #eeeeee;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="right_tab">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group{{ $errors->has('rightimage') ? ' has-error' : '' }} has-feedback">
                                            {{Form::label('rightimage','Right Image')}}
                                            <div class="input-group">
                                                {{ $product->rightimage}}
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('sizechartimage') ? ' has-error' : '' }} has-feedback">
                                            {{Form::label('configure_guide_line_right','Configure Guide Line')}}
                                            <div class="input-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" id="rightguidelineshorizontal" name="rightguidelineshorizontal" {{ $product->rightguidelineshorizontal ? 'checked' : '' }} disabled>Guide Line Horizontal
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" id="rightguidelinesvertical" name="rightguidelinesvertical" {{ $product->rightguidelinesvertical ? 'checked' : '' }} disabled>Guide Line Vertical
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" id="rightguidelinesyouth" name="rightguidelinesyouth" {{ $product->rightguidelinesyouth ? 'checked' : '' }} disabled>Guide Line Youth
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" id="rightguidelinesadult" name="rightguidelinesadult" {{ $product->rightguidelinesadult ? 'checked' : '' }} disabled>Guide Line Adult
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" id="rightguidelinesleftchest" name="rightguidelinesleftchest" {{ $product->rightguidelinesleftchest ? 'checked' : '' }} disabled>Guide Line Left Chest
                                                    </label>
                                                </div>
                                            </div>
                                        </div>    
                                        <div class="box box-default">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">Configure Canvas</h3>
                                            </div>
                                            <div class="box-body">
                                                <div class="form-group{{ $errors->has('rightenable') ? ' has-error' : '' }} has-feedback">
                                                    {{Form::label('rightenable','Enable',['class'=>'col-sm-4'])}}
                                                    <div class="input-group col-sm-8" align="center">
                                                        <input type="checkbox" id="rightenable" name="rightenable" {{ $product->rightenable ? 'checked' : '' }} disabled>
                                                    </div>
                                                </div>
                                                <div class="form-group{{ $errors->has('rightwidth') ? ' has-error' : '' }} has-feedback">
                                                    {{Form::label('rightwidth','Width',['class'=>'col-sm-4'])}}
                                                    <div class="input-group col-sm-8">
                                                        <input type="number" class="form-control" name="rightwidth" value="{{ $product->rightwidth }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="form-group{{ $errors->has('rightheight') ? ' has-error' : '' }} has-feedback">
                                                    {{Form::label('rightheight','Height',['class'=>'col-sm-4'])}}
                                                    <div class="input-group col-sm-8">
                                                        <input type="number" class="form-control" name="rightheight" value="{{ $product->rightheight }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="form-group{{ $errors->has('rightleft') ? ' has-error' : '' }} has-feedback">
                                                    {{Form::label('rightleft','Left',['class'=>'col-sm-4'])}}
                                                    <div class="input-group col-sm-8">
                                                        <input type="number" class="form-control" name="rightleft" value="{{ $product->rightleft }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="form-group{{ $errors->has('righttop') ? ' has-error' : '' }} has-feedback">
                                                    {{Form::label('righttop','Top',['class'=>'col-sm-4'])}}
                                                    <div class="input-group col-sm-8">
                                                        <input type="number" class="form-control" name="righttop" value="{{ $product->righttop }}" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="box box-widget">
                                        <div class="box-body">
                                            <div class="canvasShirt" id="rightCanvasShirt" style="background-image: url({{ "'" }}{{ asset('img/product')}}{{ "/" }}{{ $product->rightimage }}{{ "'" }});  border: 1px solid #eeeeee; width: 743px; height: 810px; background-repeat: no-repeat; background-size: contain;">
                                                <div id="frontcanvas-wrapper" style="width: {{ $product->rightwidth }}px; height: {{ $product->rightheight }}px; border: 0px solid #eeeeee;  position: relative; top:{{ $product->righttop }}px; left:{{ $product->rightleft }}px">
                                                    <canvas id="frontCanvas" style=" width: {{ $product->rightwidth }}px; height: {{ $product->rightheight }}px; border: 1px solid #eeeeee;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>     
                        </div>
                        <div class="tab-pane" id="back_tab">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group{{ $errors->has('backimage') ? ' has-error' : '' }} has-feedback">
                                        {{Form::label('backimage','Back Image')}}
                                        <div class="input-group">
                                            {{ $product->backimage}}
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('sizechartimage') ? ' has-error' : '' }} has-feedback">
                                        {{Form::label('configure_guide_line_back','Configure Guide Line')}}
                                        <div class="input-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="backguidelineshorizontal" name="backguidelineshorizontal" {{ $product->backguidelineshorizontal ? 'checked' : '' }} disabled>Guide Line Horizontal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="backguidelinesvertical" name="backguidelinesvertical" {{ $product->backguidelinesvertical ? 'checked' : '' }} disabled>Guide Line Vertical
                                                </label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="backguidelinesyouth" name="backguidelinesyouth" {{ $product->backguidelinesyouth ? 'checked' : '' }} disabled>Guide Line Youth
                                                </label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="backguidelinesadult" name="backguidelinesadult" {{ $product->backguidelinesadult ? 'checked' : '' }} disabled>Guide Line Adult
                                                </label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="backguidelinesleftchest" name="backguidelinesleftchest" {{ $product->backguidelinesleftchest ? 'checked' : '' }} disabled>Guide Line Left Chest
                                                </label>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="box box-default">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Configure Canvas</h3>
                                        </div>
                                        <div class="box-body">
                                            <div class="form-group{{ $errors->has('backenable') ? ' has-error' : '' }} has-feedback">
                                                {{Form::label('backenable','Enable',['class'=>'col-sm-4'])}}
                                                <div class="input-group col-sm-8" align="center">
                                                    <input type="checkbox" id="backenable" name="backenable" {{ $product->backenable ? 'checked' : '' }} disabled>
                                                </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('backwidth') ? ' has-error' : '' }} has-feedback">
                                                {{Form::label('backwidth','Width',['class'=>'col-sm-4'])}}
                                                <div class="input-group col-sm-8">
                                                    <input type="number" class="form-control" name="backwidth" value="{{ $product->backwidth }}" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('backheight') ? ' has-error' : '' }} has-feedback">
                                                {{Form::label('backheight','Height',['class'=>'col-sm-4'])}}
                                                <div class="input-group col-sm-8">
                                                    <input type="number" class="form-control" name="backheight" value="{{ $product->backheight }}" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('backleft') ? ' has-error' : '' }} has-feedback">
                                                {{Form::label('backleft','Left',['class'=>'col-sm-4'])}}
                                                <div class="input-group col-sm-8">
                                                    <input type="number" class="form-control" name="backleft" value="{{ $product->backleft }}" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('backtop') ? ' has-error' : '' }} has-feedback">
                                                {{Form::label('backtop','Top',['class'=>'col-sm-4'])}}
                                                <div class="input-group col-sm-8">
                                                    <input type="number" class="form-control" name="backtop" value="{{ $product->backtop }}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="box box-widget">
                                        <div class="box-body">
                                            <div class="canvasShirt" id="backCanvasShirt" style="background-image: url({{ "'" }}{{ asset('img/product')}}{{ "/" }}{{ $product->backimage }}{{ "'" }});  border: 1px solid #eeeeee; width: 743px; height: 810px; background-repeat: no-repeat; background-size: contain;">
                                                <div id="frontcanvas-wrapper" style="width: {{ $product->backwidth }}px; height: {{ $product->backheight }}px; border: 0px solid #eeeeee;  position: relative; top:{{ $product->backtop }}px; left:{{ $product->backleft }}px">
                                                    <canvas id="frontCanvas" style=" width: {{ $product->backwidth }}px; height: {{ $product->backheight }}px; border: 1px solid #eeeeee;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        <div class="tab-pane" id="left_tab">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group{{ $errors->has('leftimage') ? ' has-error' : '' }} has-feedback">
                                        {{Form::label('leftimage','Left Image')}}
                                        <div class="input-group">
                                            {{ $product->leftimage}}
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('sizechartimage') ? ' has-error' : '' }} has-feedback">
                                        {{Form::label('configure_guide_line_left','Configure Guide Line')}}
                                        <div class="input-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="leftguidelineshorizontal" name="leftguidelineshorizontal" {{ $product->leftguidelineshorizontal ? 'checked' : '' }} disabled>Guide Line Horizontal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="leftguidelinesvertical" name="leftguidelinesvertical" {{ $product->leftguidelinesvertical ? 'checked' : '' }} disabled>Guide Line Vertical
                                                </label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="leftguidelinesyouth" name="leftguidelinesyouth" {{ $product->leftguidelinesyouth ? 'checked' : '' }} disabled>Guide Line Youth
                                                </label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="leftguidelinesadult" name="leftguidelinesadult" {{ $product->leftguidelinesadult ? 'checked' : '' }} disabled>Guide Line Adult
                                                </label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="leftguidelinesleftchest" name="leftguidelinesleftchest" {{ $product->leftguidelinesleftchest ? 'checked' : '' }} disabled>Guide Line Left Chest
                                                </label>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="box box-default">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Configure Canvas</h3>
                                        </div>
                                        <div class="box-body">
                                            <div class="form-group{{ $errors->has('leftenable') ? ' has-error' : '' }} has-feedback">
                                                {{Form::label('leftenable','Enable',['class'=>'col-sm-4'])}}
                                                <div class="input-group col-sm-8" align="center">
                                                    <input type="checkbox" id="leftenable" name="leftenable" {{ $product->leftenable ? 'checked' : '' }} disabled>
                                                </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('leftwidth') ? ' has-error' : '' }} has-feedback">
                                                {{Form::label('leftwidth','Width',['class'=>'col-sm-4'])}}
                                                <div class="input-group col-sm-8">
                                                    <input type="number" class="form-control" name="leftwidth" value="{{ $product->leftwidth }}" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('leftheight') ? ' has-error' : '' }} has-feedback">
                                                {{Form::label('leftheight','Height',['class'=>'col-sm-4'])}}
                                                <div class="input-group col-sm-8">
                                                    <input type="number" class="form-control" name="leftheight" value="{{ $product->leftheight }}" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('leftleft') ? ' has-error' : '' }} has-feedback">
                                                {{Form::label('leftleft','Left',['class'=>'col-sm-4'])}}
                                                <div class="input-group col-sm-8">
                                                    <input type="number" class="form-control" name="leftleft" value="{{ $product->leftleft }}" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('lefttop') ? ' has-error' : '' }} has-feedback">
                                                {{Form::label('lefttop','Top',['class'=>'col-sm-4'])}}
                                                <div class="input-group col-sm-8">
                                                    <input type="number" class="form-control" name="lefttop" value="{{ $product->lefttop }}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="box box-widget">
                                        <div class="box-body">
                                            <div class="canvasShirt" id="leftCanvasShirt" style="background-image: url({{ "'" }}{{ asset('img/product')}}{{ "/" }}{{ $product->leftimage }}{{ "'" }});  border: 1px solid #eeeeee; width: 743px; height: 810px; leftground-repeat: no-repeat; background-size: contain;">
                                                <div id="frontcanvas-wrapper" style="width: {{ $product->leftwidth }}px; height: {{ $product->leftheight }}px; border: 0px solid #eeeeee;  position: relative; top:{{ $product->lefttop }}px; left:{{ $product->leftleft }}px">
                                                    <canvas id="frontCanvas" style=" width: {{ $product->leftwidth }}px; height: {{ $product->leftheight }}px; border: 1px solid #eeeeee;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>-->
            <div class="col-md-4">
                <div class="form-group{{ $errors->has('aditionalimages') ? ' has-error' : '' }} has-feedback">
                    {{Form::label('aditionalimages','Aditional Images')}}   
                    <table id="aditionalimagetable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Image</th>  
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product->aditionalimages as $aditionalimage)
                                <tr>
                                    <td><img src="{{asset('img/product')}}{{'/'}}{{$aditionalimage->file}}" style="width:50px; height:auto;"></td>
                                    <td>{{$aditionalimage->name}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>                                        
                </div>
            </br>
            <label for="image_input">Configure Price</label>
            <div class="row">
                <div class="col-md-4">
                    <label for="image_input">Infant</label>
                </div>
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('_INFANT') ? ' has-error' : '' }} has-feedback">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-dollar"></i>
                            </div>
                            <input class="form-control" name="_INFANT" id="_INFANT" type="text" value="{{ $product->_INFANT }}" disabled>
                            <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                            <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>  
                        </div>
                        @if ($errors->has('_INFANT'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('_INFANT') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('_INFANTWHITE') ? ' has-error' : '' }} has-feedback">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-dollar"></i>
                            </div>
                            <input class="form-control" name="_INFANTWHITE" id="_INFANTWHITE" type="text" value="{{ $product->_INFANTWHITE }}" disabled>
                            <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                            <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>  
                        </div>
                        @if ($errors->has('_INFANTWHITE'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('_INFANTWHITE') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="image_input">Toddler</label>
                </div>
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('_TODDLER') ? ' has-error' : '' }} has-feedback">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-dollar"></i>
                            </div>
                            <input class="form-control" name="_TODDLER" id="_TODDLER" type="text" value="{{ $product->_TODDLER }}" disabled>
                            <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                            <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>  
                        </div>
                        @if ($errors->has('_TODDLER'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('_TODDLER') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('_TODDLERWHITE') ? ' has-error' : '' }} has-feedback">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-dollar"></i>
                            </div>
                            <input class="form-control" name="_TODDLERWHITE" id="_TODDLERWHITE" type="text" value="{{ $product->_TODDLERWHITE }}" disabled>
                            <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                            <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>  
                        </div>
                        @if ($errors->has('_TODDLERWHITE'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('_TODDLERWHITE') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="image_input">Youth</label>
                </div>
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('_YOUTH') ? ' has-error' : '' }} has-feedback">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-dollar"></i>
                            </div>
                            <input class="form-control" name="_YOUTH" id="_YOUTH" type="text" value="{{ $product->_YOUTH }}" disabled>
                            <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                            <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>  
                        </div>
                        @if ($errors->has('_YOUTH'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('_YOUTH') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('_YOUTHWHITE') ? ' has-error' : '' }} has-feedback">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-dollar"></i>
                            </div>
                            <input class="form-control" name="_YOUTHWHITE" id="_YOUTHWHITE" type="text" value="{{ $product->_YOUTHWHITE }}" disabled>
                            <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                            <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>  
                        </div>
                        @if ($errors->has('_YOUTHWHITE'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('_YOUTHWHITE') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="image_input">Adult</label>
                </div>
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('_ADULT') ? ' has-error' : '' }} has-feedback">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-dollar"></i>
                            </div>
                            <input class="form-control" name="_ADULT" id="_ADULT" type="text" value="{{ $product->_ADULT }}" disabled>
                            <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                            <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>  
                        </div>
                        @if ($errors->has('_ADULT'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('_ADULT') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('_ADULTWHITE') ? ' has-error' : '' }} has-feedback">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-dollar"></i>
                            </div>
                            <input class="form-control" name="_ADULTWHITE" id="_ADULTWHITE" type="text" value="{{ $product->_ADULTWHITE }}" disabled>
                            <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                            <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>  
                        </div>
                        @if ($errors->has('_ADULTWHITE'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('_ADULTWHITE') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="image_input">Adult</label>
                </div>
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('_2xl') ? ' has-error' : '' }} has-feedback">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-dollar"></i>
                            </div>
                            <input class="form-control" name="_2xl" id="_2xl" type="text" value="{{ $product->_2xl }}" disabled>
                            <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                            <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>  
                        </div>
                        @if ($errors->has('_2xl'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('_2xl') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('_2xlWHITE') ? ' has-error' : '' }} has-feedback">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-dollar"></i>
                            </div>
                            <input class="form-control" name="_2xlWHITE" id="_2xlWHITE" type="text" value="{{ $product->_2xlWHITE }}" disabled>
                            <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                            <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>  
                        </div>
                        @if ($errors->has('_2xlWHITE'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('_2xlWHITE') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>                
            <div class="row">
                <div class="col-md-4">
                    <label for="image_input">3XL</label>
                </div>
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('_3xl') ? ' has-error' : '' }} has-feedback">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-dollar"></i>
                            </div>
                            <input class="form-control" name="_3xl" id="_3xl" type="text" value="{{ $product->_3xl }}" disabled>
                            <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                            <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>  
                        </div>
                        @if ($errors->has('_3xl'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('_3xl') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('_3xlWHITE') ? ' has-error' : '' }} has-feedback">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-dollar"></i>
                            </div>
                            <input class="form-control" name="_3xlWHITE" id="_3xlWHITE" type="text" value="{{ $product->_3xlWHITE }}" disabled>
                            <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                            <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>  
                        </div>
                        @if ($errors->has('_3xlWHITE'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('_3xlWHITE') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="image_input">4XL</label>
                </div>
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('_4xl') ? ' has-error' : '' }} has-feedback">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-dollar"></i>
                            </div>
                            <input class="form-control" name="_4xl" id="_4xl" type="text" value="{{ $product->_4xl }}" disabled>
                            <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                            <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>  
                        </div>
                        @if ($errors->has('_4xl'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('_4xl') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('_4xlWHITE') ? ' has-error' : '' }} has-feedback">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-dollar"></i>
                            </div>
                            <input class="form-control" name="_4xlWHITE" id="_4xlWHITE" type="text" value="{{ $product->_4xlWHITE }}" disabled>
                            <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                            <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>  
                        </div>
                        @if ($errors->has('_4xlWHITE'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('_4xlWHITE') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="image_input">5XL</label>
                </div>
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('_5xl') ? ' has-error' : '' }} has-feedback">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-dollar"></i>
                            </div>
                            <input class="form-control" name="_5xl" id="_5xl" type="text" value="{{ $product->_5xl }}" disabled>
                            <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                            <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>  
                        </div>
                        @if ($errors->has('_5xl'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('_5xl') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('_5xlWHITE') ? ' has-error' : '' }} has-feedback">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-dollar"></i>
                            </div>
                            <input class="form-control" name="_5xlWHITE" id="_5xlWHITE" type="text" value="{{ $product->_5xlWHITE }}" disabled>
                            <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                            <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>  
                        </div>
                        @if ($errors->has('_5xlWHITE'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('_5xlWHITE') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="image_input">One Size</label>
                </div>
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('_ONE_SIZE') ? ' has-error' : '' }} has-feedback">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-dollar"></i>
                            </div>
                            <input class="form-control" name="_ONE_SIZE" id="_ONE_SIZE" type="text" value="{{ $product->_ONE_SIZE }}" disabled>
                            <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                            <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>  
                        </div>
                        @if ($errors->has('_ONE_SIZE'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('_ONE_SIZE') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('_ONE_SIZEWHITE') ? ' has-error' : '' }} has-feedback">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-dollar"></i>
                            </div>
                            <input class="form-control" name="_ONE_SIZEWHITE" id="_ONE_SIZEWHITE" type="text" value="{{ $product->_ONE_SIZEWHITE }}" disabled>
                            <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                            <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>  
                        </div>
                        @if ($errors->has('_ONE_SIZEWHITE'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('_ONE_SIZEWHITE') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="image_input">Price Shirt Chart</label>
                    <div id="table" class="table-editable">
                        <input type="hidden" name="priceshirt" id="priceshirt" value="">
                        <table class="table table-striped table-bordered" id="priceshirttable" name="priceshirttable">
                            <thead>
                                <tr>
                                    <th>Range From</th>
                                    <th>Range To</th>
                                    <th>Infant Colors</th>
                                    <th>Infant White</th>
                                    <th>Toddler Colors</th>
                                    <th>Toddler White</th>
                                    <th>Youth Colors</th>
                                    <th>Youth White</th>
                                    <th>Adult Colors</th>
                                    <th>Adult White</th>
                                    <th>2XL Colors</th>
                                    <th>2XL White</th>
                                    <th>3XL Colors</th>
                                    <th>3XL White</th>
                                    <th>4XL Colors</th>
                                    <th>4XL White</th>
                                    <th>5XL Colors</th>
                                    <th>5XL White</th>
                                    <th>ONE SIZE Colors</th>
                                    <th>ONE SIZE White</th>
                                    <th>Remove</th>
                                    <th>Up/Down</th>
                                </tr>
                            </thead>
                            <tbody id="tbody" name="tbody">
                                @foreach($product->priceshirt as $priceshirt)
                                    <tr>
                                        <td>{{  $priceshirt->RANGEFROM }}</td>
                                        <td>{{  $priceshirt->RANGETO }}</td>
                                        <td>{{  $priceshirt->_INFANT }}</td>
                                        <td>{{  $priceshirt->_INFANTWHITE }}</td>
                                        <td>{{  $priceshirt->_TODDLER }}</td>
                                        <td>{{  $priceshirt->_TODDLERWHITE }}</td>
                                        <td>{{  $priceshirt->_YOUTH }}</td>
                                        <td>{{  $priceshirt->_YOUTHWHITE }}</td>
                                        <td>{{  $priceshirt->_ADULT }}</td>
                                        <td>{{  $priceshirt->_ADULTWHITE }}</td>
                                        <td>{{  $priceshirt->_2xl }}</td>
                                        <td>{{  $priceshirt->_2xlWHITE }}</td>
                                        <td>{{  $priceshirt->_3xl }}</td>
                                        <td>{{  $priceshirt->_3xlWHITE }}</td>
                                        <td>{{  $priceshirt->_4xl }}</td>
                                        <td>{{  $priceshirt->_4xlWHITE }}</td>
                                        <td>{{  $priceshirt->_5xl }}</td>
                                        <td>{{  $priceshirt->_5xlWHITE }}</td>
                                        <td>{{  $priceshirt->_ONE_SIZE }}</td>
                                        <td>{{  $priceshirt->_ONE_SIZEWHITE }}</td>
                                        <td><span class="table-remove fa fa-times removesizes"></span></td>
                                        <td>
                                            <span class="table-up glyphicon fa fa-arrow-up movesizeup"></span>
                                            <span class="table-up glyphicon fa fa-arrow-down movesizedown"></span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                    <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>
                </div>
            </div>
        </div>
    </div><!-- /.box-body -->
</div>
@endsection