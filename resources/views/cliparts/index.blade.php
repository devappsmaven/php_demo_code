@extends('layouts.admin')
@section('title','Manage Clipart')
@section('pagename','Manage Clipart')
@section('menuname','Manage Clipart')
@section('content')
@include('common.alerts')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Clipart List</h3>
        @can('cliparts.removeall')
            <a class="btn-danger btn-sm pull-right remove-all" id="removeall"  data-toggle="modal" data-target="#custom-width-modal4" style="display:none; margin-left: 10px; cursor:pointer;" data-target="#custom-width-modal" data-url="{!! URL::route('cliparts.removeall') !!}" data-token="{{ csrf_token() }}">Delete All Selected</a>
        @endcan
        <a class="btn-default btn-sm pull-right check-all" id="checkall"  style="margin-left: 10px; cursor:pointer;">Check All</a>
        @can('cliparts.edit')
            <a class="btn-warning btn-sm pull-right copymove-record" id="copymove"  data-toggle="modal" data-target="#custom-width-modal3" style="display:none; margin-left: 10px; cursor:pointer;" data-target="#custom-width-modal" data-url="{!! URL::route('cliparts.copymove') !!}" data-token="{{ csrf_token() }}">Copy/Move</a>
        @endcan
        @can('clipartsubcategories.index')
            <a href="{{route('clipartsubcategories.index', $clipartcategory->id)}}" class="btn-info btn-sm pull-right" style="margin-left: 10px; cursor:pointer;">Back to SubCategories</a>
        @endcan
        @can('cliparts.create')
            <a class="btn-primary  btn-sm pull-right  add-record" data-toggle="modal" data-target="#custom-width-modal2" data-url="{!! URL::route('cliparts.store') !!}" style=" cursor:pointer;">
                Add Clipart
            </a>
        @endcan
    </div>
    <div class="box-body">
        <div class="row">
            @foreach ($cliparts as $clipart)
                <div class="col-sm-2">
                    <input type="checkbox" id="{{ $clipart->id }}" class="clipart-check">
                    <div class="box box-widget widget-user">
                        <div class="widget-user-header">
                            <h5>{{ $clipart->title }}</h5>
                            <h5 class="widget-user-desc"><a href="{{route('clipartcategories.index', $clipart->category->id)}}">{{ $clipart->category->title }}</a> / <a href="{{route('clipartsubcategories.index', [$clipart->category->id, $clipart->subcategory->id])}}">{{ $clipart->subcategory->title }}</a></h5>
                        </div>
                        <div class="widget-user-image">
                            <img  src="{{asset('img/clipart')}}{{'/'}}{{$clipart->category->slug}}{{'/'}}{{$clipart->subcategory->slug}}{{'/'}}{{$clipart->filename}}" alt="{{ $clipart->title }}" style="padding: 1vw;max-width: 110px; max-height: 110px">
                        </div>
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <div class="btn-group">
                                            @can('cliparts.show')
                                                <a href="{{route('cliparts.show', $clipart->id)}}" class="btn btn-sm btn-info">View</a>
                                            @endcan
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        @can('cliparts.edit')
                                            <a href="{{route('cliparts.edit', $clipart->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                        @endcan
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="description-block">
                                        <div class="btn-group">
                                            @can('cliparts.destroy')
                                                <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('cliparts.destroy', $clipart->id) !!}" data-id="{{$clipart->id}}" data-token="{{ csrf_token() }}">Remove</a>
                                            @endcan
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<form method="POST" class="remove-all-model">
    {{csrf_field()}}
    <input id="clipartlist" type="hidden">
    <div id="custom-width-modal4" class="modal modal-danger fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Delete Selected Record</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Delete The Selected Cliparts?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger waves-effect waves-light">Delete</button>
                </div>
            </div>
        </div>
    </div>
</form>
<form method="POST" class="copy-move-record-model">
    
    <div id="custom-width-modal3" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Copy/Move Selected Cliparts</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6 ">
                            <div class="row">
                                <div class="col-sm-6 ">
                                    <label>
                                    <input type="radio" name="operation" id="operation" value="move" checked="">
                                        Move
                                    </label>
                                </div>
                                <div class="col-sm-6 ">
                                    <label>
                                    <input type="radio" name="operation" id="operation" value="copy">
                                        Copy
                                    </label>
                                </div>
                            </div>
                            <selectcomponent></selectcomponent>
                        </div>
                        <div class="col-sm-6 ">
                            

                            <div class="form-group{{ $errors->has('copycategory') ? ' has-error' : '' }} has-feedback" id="categorylist2" style="display:none;">
                                <label for="copycategory">Select More Categories</label>
                                <select class="form-control" name="copycategory[]" id="copycategory[]" multiple>
                                    <option value="a_1">a/1</option>
                                </select>
                                @if ($errors->has('copycategory'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red">{{ $errors->first('copycategory') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning waves-effect waves-light">Delete</button>
                </div>
            </div>
        </div>
    </div>
</form>
<form method="POST" class="remove-record-model">
    <div id="custom-width-modal" class="modal modal-danger fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Delete Record</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Delete This Record?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger waves-effect waves-light">Delete</button>
                </div>
            </div>
        </div>
    </div>
</form>
<form method="POST" class="add-record-model" enctype="multipart/form-data" novalidate="novalidate">
    {{csrf_field()}}
    <input type="hidden" id="filestype" name="filestype" value="">
    <input type="hidden" id="wrongfiles" name="wrongfiles" value="">
    <div id="custom-width-modal2" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Create Cliparts</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="category_id" value={{ $clipartcategory->id }}>
                    <input type="hidden" name="subcategory_id" value={{ $clipartsubcategory->id }}>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Category Name</label>
                            <input type="text" class="form-control" name="category"  value="{{ $clipartcategory->title}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="title">SubCategory Name</label>
                            <input type="text" class="form-control" name="subcategory"  value="{{ $clipartsubcategory->title}}" readonly>
                        </div>
                        <div class="form-group{{ $errors->has('filename') ? ' has-error' : '' }} has-feedback">
                            <label for="filename">Cliparts</label>
                            <input type="file" class="form-control" id="filename[]" name="filename[]" multiple onchange="validatecliparttype(this);">
                            @if ($errors->has('filename'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('filename') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('numbercolors') ? ' has-error' : '' }} has-feedback">
                            <label for="numbercolors">Number Colors</label>
                            <select class="form-control" name="numbercolors" id="numbercolors">
                                <option disabled selected>--Select Number Colors--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">Full Color</option>
                            </select>
                            @if ($errors->has('numbercolors'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('numbercolors') }}</strong>
                                </span>
                            @endif
                        </div>    
                        <div class="form-group{{ $errors->has('colorlist') ? ' has-error' : '' }} has-feedback">
                                <label for="colorlist">Color List</label>
                                {!! Form::select('colorlist[]' , $inkcolor, null , ['id' => 'colorlist[]','class' => 'form-control selectcolors',"multiple", 'style' => 'width:100%;']) !!}
                                @if ($errors->has('colorlist'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red">{{ $errors->first('colorlist') }}</strong>
                                    </span>
                                @endif
                            </div>
                        <div class="form-group{{ $errors->has('editable') ? ' has-error' : '' }} has-feedback">
                            <label for="editable">Color Editable</label>
                            <div class="input-group">                                
                                    <span class="input-group-addon">
                                    <input type="checkbox" name="editable" id="editable" checked>
                                    </span>
                                <input type="text" class="form-control" name="editabletext" id="editabletext" value="Editable" >
                            </div>     
                        </div>              
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status" value={{old('status')}}>
                                <option disabled selected>--Select Status--</option>
                                <option>Enable</option>
                                <option>Disable</option>
                            </select>
                            @if ($errors->has('status'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('status') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success waves-effect waves-light">Create</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
