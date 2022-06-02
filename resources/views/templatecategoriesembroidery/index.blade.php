@extends('layouts.admin')
@section('title','Manage Template Categories Embroidery')
@section('pagename','Manage Template Categories Embroidery')
@section('menuname','Manage Template Categories Embroidery')
@section('content')
@include('common.alerts')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Template Categories Embroidery List</h3>
        @can('templatecategoriesembroidery.create')
        <a class="btn-primary  btn-sm pull-right add-record" data-toggle="modal" data-target="#custom-width-modal2" data-url="{!! URL::route('templatecategoriesembroidery.store') !!}" data-token="{{ csrf_token() }}">
            Add Template Categories
        </a>
    @endcan
    @can('templateembroidery.addtemplate')
        <a class="btn-success  btn-sm pull-right  add-template" data-toggle="modal" data-target="#custom-width-modal3" data-url="{!! URL::route('templateembroidery.addtemplate') !!}" style=" cursor:pointer;">
            Add Template Embroidery
        </a>
    @endcan
    </div>
    <div class="box-body">
        <div class="timeline-body" style="display:none;">
            @foreach ($templatecategoriesembroidery as $templatecategoryembroidery)
                @can('templatesubcategoriesembroidery.create')
                    <a href="{{route('templatesubcategoriesembroidery.index', $templatecategoryembroidery->id)}}">
                        <img src="{{asset('img/template-embroidery')}}{{'/'}}{{$templatecategoryembroidery->slug}}{{'/'}}{{$templatecategoryembroidery->filename}}" alt="{{ $templatecategoryembroidery->slug }}" style="max-width:74px !important; max-height: 74px !important; margin: 25px;">
                    </a>
                @endcan
            @endforeach
        </div>
        </br>
        <div class="row">
            @foreach ($templatecategoriesembroidery as $templatecategoryembroidery)
                <div class="col-sm-2">
                    <div class="box box-primary widget-user">
                        <div class="widget-user-header">
                            <h4>{{ $templatecategoryembroidery->title }}</h4>
                        </div>
                        <div class="widget-user-image">
                            @can('templatesubcategoriesembroidery.index','templatesubcategoriesembroidery.create','templatesubcategoriesembroidery.edit','templatesubcategoriesembroidery.show')
                                <a href="{{route('templatesubcategoriesembroidery.index', $templatecategoryembroidery->id)}}">
                                    <img src="{{asset('img/template-embroidery')}}{{'/'}}{{$templatecategoryembroidery->slug}}{{'/'}}{{$templatecategoryembroidery->filename}}" alt="{{ $templatecategoryembroidery->slug }}"  style="max-width:74px !important; max-height: 74px !important; margin: 25px;">
                                </a>
                            @endcan
                        </div>
                        <div class="box-footer">
                            <div class="row">
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <div class="btn-group">
                                        @can('templatesubcategoriesembroidery.create')
                                            <a href="{{route('templatecategoriesembroidery.show', $templatecategoryembroidery->id)}}" class="btn btn-sm btn-info">View</a>
                                        @endcan
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="description-block">
                                    @can('templatecategoriesembroidery.edit')
                                        <a href="{{route('templatecategoriesembroidery.edit', $templatecategoryembroidery->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                    @endcan
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <div class="btn-group">
                                        @can('templatecategoriesembroidery.destroy')
                                            <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('templatecategoriesembroidery.destroy', $templatecategoryembroidery->id) !!}" data-id="{{$templatecategoryembroidery->id}}" data-token="{{ csrf_token() }}">Remove</a>
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
        <div id="custom-width-modal2" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" style="width:55%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="custom-width-modalLabel">Create Template Category Embroidery</h4>
                    </div>
                    <div class="modal-body">
                        <div class="box-body">
                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }} has-feedback">
                                <label for="title">Category Embroidery Name</label>
                                <input type="text" class="form-control" name="title" placeholder="Enter Name" value="{{old('title')}}">
                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red">{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('filename') ? ' has-error' : '' }} has-feedback">
                                <label for="filename">Image</label>
                                <input type="file" class="form-control" name="filename" value="{{old('filename')}}">
                                @if ($errors->has('filename'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red">{{ $errors->first('filename') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status" value="{{old('status')}}">
                                    <option disabled selected>--Select Option--</option>
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

    <form method="POST" class="add-template-model" enctype="multipart/form-data" novalidate="novalidate">
        {{csrf_field()}}
        <input type="hidden" id="filestype" name="filestype" value="">
        <input type="hidden" id="wrongfiles" name="wrongfiles" value="">
        <div id="custom-width-modal3" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" style="width:55%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="custom-width-modalLabel">Create Template Embroidery</h4>
                    </div>
                    <div class="modal-body">
                        <div class="box-body">
                            <div class="form-group{{ $errors->has('filesname') ? ' has-error' : '' }} has-feedback">
                                <label for="filesname">Templates</label>
                                <input type="file" class="form-control" id="filesname[]"  name="filesname[]" multiple onchange="validatetemplatetype(this);">
                                @if ($errors->has('filesname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red">{{ $errors->first('filesname') }}</strong>
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
                                {!! Form::select('colorlist[]' , $inkcolor, null , [ 'id' => 'colorlist[]', 'class' => 'form-control selectcolors',"multiple", 'style' => 'width:100%;']) !!}
                                @if ($errors->has('colorlist'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red">{{ $errors->first('colorlist') }}</strong>
                                    </span>
                                @endif
                            </div>    
                            <div class="form-group{{ $errors->has('numbercolors') ? ' has-error' : '' }} has-feedback">
                                <label for="numbercolors">Color Editable</label>
                                <div class="input-group">                                
                                        <span class="input-group-addon">
                                        <input type="checkbox" name="editable" id="editable" disabled>
                                        </span>
                                    <input type="text" class="form-control" name="editabletext" id="editabletext" value="Non Editable" disabled>
                                </div>     
                            </div>              
                            <div class="form-group{{ $errors->has('templatesstatus') ? ' has-error' : '' }} has-feedback">
                                <label for="templatesstatus">Status</label>
                                <select class="form-control" id="templatesstatus" name="templatesstatus"  value="{{old('templatesstatus')}}">
                                    <option disabled selected>--Select Status--</option>
                                    <option>Enable</option>
                                    <option>Disable</option>
                                </select>
                                @if ($errors->has('templatesstatus'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red">{{ $errors->first('templatesstatus') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <selecttemplatecomponent></selecttemplatecomponent>
                            <br>
                            <div class="box box-default box-solid collapsed-box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Add More...</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="box-body" style="display: none;">
                                    <div class="form-group">
                                        <label>Categories</label>
                                        <select class="form-control" multiple="multiple" data-placeholder="Select a category" style="width: 100%;" name="categories[]">
                                            @foreach ($templatecategoriesembroidery as $templatecategoryembroidery)
                                                <option value="{{ $templatecategoryembroidery->id }}" disabled>{{ $templatecategoryembroidery->slug }}</option>  
                                                @foreach ($templatesubcategoriesembroidery as $templatesubcategoryembroidery)
                                                    @if($templatecategoryembroidery->id == $templatesubcategoryembroidery->category_embroidery_id)
                                                        <option value="{{ $templatesubcategoryembroidery->category_embroidery_id }}{{ '_' }}{{ $templatesubcategoryembroidery->id }}">&nbsp;&nbsp;&nbsp;{{ $templatesubcategoryembroidery->slug }}</option>  
                                                    @endif
                                                @endforeach 
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
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
