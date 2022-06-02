@extends('layouts.admin')
@section('title','Edit Template Embroidery')
@section('pagename','Edit Template Embroidery')
@section('menuname','Edit Template Embroidery')
@section('content')
@include('common.alerts')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Edit Template({{ $templateembroidery->type}})</h3>
    </div>
    <div class="box-body">
        @include('common.alerts')
        <form role="form" method="POST" action="/admin/templatesembroidery/{{ $templateembroidery->id}}" enctype="multipart/form-data" class="colors_form" novalidate="novalidate">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="row">
                <div class="col-md-3">
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <div class="form-group">
                                <label for="title">Category Embroidery Name</label>
                                <select class="form-control" name="category" id="category" onchange="/*displayoperation(this);*/ " readonly>
                                    @foreach ($templatecategoriesembroidery as $categoryembroidery)
                                        @if($categoryembroidery->id == $templateembroidery->category_embroidery_id)
                                            <option value={{ $categoryembroidery->id }} selected>{{ $categoryembroidery->title }}</option>
                                        @else
                                            <option value={{ $categoryembroidery->id }} >{{ $categoryembroidery->title }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">SubCategory Name</label>
                                <select class="form-control" name="subcategory" id="subcategory" onchange="/*displayoperation(this);*/"  readonly>
                                    <option value={{ $templateembroidery->subcategoryembroidery->id }} selected>{{ $templateembroidery->subcategoryembroidery->title }}</option>
                                </select>
                            </div>
                            
                            <div class="form-group{{ $errors->has('filename') ? ' has-error' : '' }} has-feedback">
                                <label for="filename">Templates</label>
                                <img class="profile-user-img img-responsive" src="{{asset('img/template-embroidery')}}{{'/'}}{{$templateembroidery->categoryembroidery->slug}}{{'/'}}{{$templateembroidery->subcategoryembroidery->slug}}{{'/'}}{{$templateembroidery->filename}}" alt="User profile picture">
                                <input type="file" class="form-control" name="filename" multiple>
                                @if ($errors->has('filename'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red">{{ $errors->first('filename') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <div class="btn-group">
                                            @can('templates.index')
                                                <a href="{{route('templateembroidery.index', [$templateembroidery->category_embroidery_id,$templateembroidery->subcategory_embroidery_id])}}" class="btn btn-sm btn-info">Back to Templates</a>
                                            @endcan
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        @can('templates.edit')
                                            <button class="btn btn-sm btn-warning" type="submit">Update</button>
                                        @endcan
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="description-block">
                                        <div class="btn-group">
                                            @can('templates.destroy')
                                            <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('templateembroidery.destroy', $templateembroidery->id) !!}" data-id="{{$templateembroidery->id}}" data-token="{{ csrf_token() }}">Remove</a>
                                            @endcan
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="box box-primary">
                        <div class="box-body">
                            <strong><i class="fa fa-pencil margin-r-5"></i> Color Editable</strong>
                            <div class="input-group">                                
                                    <span class="input-group-addon">
                                    <input type="checkbox" name="editable" id="editable"  {{ $templateembroidery->editable ? 'checked' : '' }}>
                                    </span>
                                <input type="text" class="form-control" name="editabletext" id="editabletext" value="{{ $templateembroidery->editable ? 'Editable' : 'No Editable' }}" >
                            </div>
                            <hr>
                            <div class="form-group{{ $errors->has('numbercolors') ? ' has-error' : '' }} has-feedback">
                                <label for="numbercolors">Number Colors</label>
                                <select class="form-control" name="numbercolors" id="numbercolors">
                                        @if($templateembroidery->numbercolors == 1)
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">Full Color</option>
                                        @elseif($templateembroidery->numbercolors == 2)
                                            <option value="1">1</option>
                                            <option value="2" selected>2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">Full Color</option>
                                        @elseif($templateembroidery->numbercolors == 3)
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3" selected>3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">Full Color</option>
                                        @elseif($templateembroidery->numbercolors == 4)
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4" selected>4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">Full Color</option>
                                        @elseif($templateembroidery->numbercolors == 5)
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5" selected>5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">Full Color</option>
                                        @elseif($templateembroidery->numbercolors == 6)
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6" selected>6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">Full Color</option>
                                        @elseif($templateembroidery->numbercolors == 7)
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7" selected>7</option>
                                            <option value="8">8</option>
                                            <option value="9">Full Color</option>
                                        @elseif($templateembroidery->numbercolors == 8)
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8" selected>8</option>
                                            <option value="9">Full Color</option>
                                        @elseif($templateembroidery->numbercolors == 9)
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9" selected>Full Color</option>
                                        @endif
                                </select>
                                @if ($errors->has('numbercolors'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red">{{ $errors->first('numbercolors') }}</strong>
                                    </span>
                                @endif
                            </div>    
                            <hr>
                            <div class="form-group{{ $errors->has('colorlist') ? ' has-error' : '' }} has-feedback">
                                <label for="colorlist">Color List</label>
                                {!! Form::select('colorlist[]' , $inkcolor , $templateembroidery->colors, ['id' => 'colorlist[]', 'class' => 'form-control selectcolors',"multiple"]) !!}
                                @if ($errors->has('colorlist'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red">{{ $errors->first('colorlist') }}</strong>
                                    </span>
                                @endif
                            </div>   
                            <hr>
                            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                                <label for="status">Status</label>
                                    <select class="form-control" name="status">
                                        @if($templateembroidery->status == 'Enable')
                                            <option selected>Enable</option>
                                            <option>Disable</option>
                                        @endif
                                        @if($templateembroidery->status == 'Disable')
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
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
@endsection
