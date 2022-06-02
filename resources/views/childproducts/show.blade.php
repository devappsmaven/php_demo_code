@extends('layouts.admin')
@section('title','Child Product Details')
@section('pagename','Child Product Details')
@section('menuname','Child Product Details')
@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Child Product Information</h3>
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
                        <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ $childproduct->stylenumber }}" disabled>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                    {{Form::label('name','Name *')}}
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ $childproduct->name }}" disabled>
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
                                @if($brand->name == $childproduct->brand)
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
                        <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ $childproduct->fabric }}" disabled>
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
                        <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ $childproduct->price }}" disabled>
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
                        <input type="text" class="form-control" name="min_quantity" placeholder="Enter name" value="{{ $childproduct->min_quantity }}" disabled>
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
                        @if($childproduct->visibility == 'Visible')
                            <option selected>Visible</option>
                            <option>Invisible</option>
                         @endif
                         @if($childproduct->visibility == 'Invisible')
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
                        @if($childproduct->status == 'Enable')
                            <option selected>Enable</option>
                            <option>Disable</option>
                         @endif
                         @if($childproduct->status == 'Disable')
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
                <div class="form-group{{ $errors->has('color_id') ? ' has-error' : '' }} has-feedback">
                    <label for="color_id">Color *</label>
                    <select class="form-control" name="color_id" disabled>
                        @foreach ($shirtcolors as $color)
                            @if($color->id == $childproduct->color_id)
                                <option value="{{ $color->id }}" selected>{{ $color->name }}</option>
                            @else
                                <option  value="{{ $color->id }}">{{ $color->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    @if ($errors->has('color_id'))
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-red">{{ $errors->first('color_id') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }} has-feedback">
                    <textarea name="description" id="description" class="form-control description2" style="height: 300px"  disabled>
                        {{ $childproduct->description }}
                    </textarea>
                    @if ($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-red">{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }} has-feedback">
                    {{Form::label('image','Catalog Image')}}
                    </br>
                    <img src="{{asset('img/product')}}{{'/'}}{{$childproduct->image}}" style="width:50px; height:auto;">
                </div>
                <div class="form-group">
                    <label>Sizes</label>
                    {!! Form::select('sizes[]' , $sizes , $childproduct->sizes, ['class' => 'form-control',"multiple", "style" =>'height: 200px;','disabled']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <div class="form-group{{ $errors->has('frontimage') ? ' has-error' : '' }} has-feedback">
                    {{Form::label('frontimage','Front Image')}}
                    <div class="canvasShirt" id="frontCanvasShirt" style="background-image: url({{ "'" }}{{ asset('img/product')}}{{ "/" }}{{ $childproduct->frontimage }}{{ "'" }});  border: 1px solid #eeeeee; max-width: 375px; max-height: 500px; background-repeat: no-repeat; background-size: contain;">
                        <div id="frontcanvas-wrapper" style="width: 375px; height: 500px; border: 0px solid #eeeeee;  position: relative; top:1px; left:0px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group{{ $errors->has('rightimage') ? ' has-error' : '' }} has-feedback">
                    {{Form::label('rightimage','Right Image')}}
                    <div class="canvasShirt" id="rightCanvasShirt" style="background-image: url({{ "'" }}{{ asset('img/product')}}{{ "/" }}{{ $childproduct->rightimage }}{{ "'" }});  border: 1px solid #eeeeee; max-width: 375px; max-height: 500px; background-repeat: no-repeat; background-size: contain;">
                        <div id="rightcanvas-wrapper" style="width: 375px; height: 500px; border: 0px solid #eeeeee;  position: relative; top:1px; left:0px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group{{ $errors->has('backimage') ? ' has-error' : '' }} has-feedback">
                    {{Form::label('backimage','Back Image')}}
                    <div class="canvasShirt" id="backCanvasShirt" style="background-image: url({{ "'" }}{{ asset('img/product')}}{{ "/" }}{{ $childproduct->backimage }}{{ "'" }});  border: 1px solid #eeeeee; max-width: 375px; max-height: 500px; background-repeat: no-repeat; background-size: contain;">
                        <div id="backcanvas-wrapper" style="width: 375px; height: 500px; border: 0px solid #eeeeee;  position: relative; top:1px; left:0px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group{{ $errors->has('leftimage') ? ' has-error' : '' }} has-feedback">
                    {{Form::label('leftimage','Left Image')}}
                    <div class="canvasShirt" id="leftCanvasShirt" style="background-image: url({{ "'" }}{{ asset('img/product')}}{{ "/" }}{{ $childproduct->leftimage }}{{ "'" }});  border: 1px solid #eeeeee; max-width: 375px; max-height: 500px; background-repeat: no-repeat; background-size: contain;">
                        <div id="leftcanvas-wrapper" style="width: 375px; height: 500px; border: 0px solid #eeeeee;  position: relative; top:1px; left:0px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.box-body -->
</div>
@endsection