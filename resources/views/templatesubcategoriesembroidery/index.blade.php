@extends('layouts.admin')
@section('title','Manage Template SubCategories Embroidery')
@section('pagename','Manage Template SubCategories Embroidery')
@section('menuname','Manage Template SubCategories Embroidery')
@section('content')
@include('common.alerts')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Template SubCategories List</h3>
        @can('templatecategories.index')
            <a href="{{route('templatecategoriesembroidery.index')}}" class="btn-info btn-sm pull-right" style="margin-left: 10px;">Back to Categories</a>
        @endcan
        @can('templatesubcategoriesembroidery.store')
            <a class="btn-primary btn-sm pull-right  add-record" data-toggle="modal" data-target="#custom-width-modal2" data-url="{!! URL::route('templatesubcategoriesembroidery.store') !!}">
                Add Template SubCategories Embroidery
            </a>
        @endcan
    </div>
    <div class="box-body">
        <div class="row">
            @foreach ($templatesubcategoriesembroidery as $templatesubcategoryembroidery)
                <div class="col-sm-2">
                    <div class="box box-widget widget-user">
                        <div class="widget-user-header">
                            <h4>{{ $templatesubcategoryembroidery->title }}</h4>
                            <h5 class="widget-user-desc"><a href="{{route('templatecategoriesembroidery.index')}}">{{ $templatesubcategoryembroidery->categoryembroidery->title }}</a></h5>
                        </div>
                        <div class="widget-user-image">
                            @can('templatesembroidery.store')
                                <a href="{{route('templateembroidery.index',[$templatesubcategoryembroidery->category_embroidery_id,$templatesubcategoryembroidery->id])}}">
                                    <img src="{{asset('img/template-embroidery')}}{{ '/'}}{{ $templatesubcategoryembroidery->categoryembroidery->slug }}{{ '/'}}{{ '/'}}{{ $templatesubcategoryembroidery->slug }}{{ '/'}}{{ $templatesubcategoryembroidery->filename }}" alt="{{ $templatesubcategoryembroidery->title }}"   style="max-width:74px; max-height: 74px;">
                                </a>
                            @endcan
                        </div>
                        <div class="box-footer">
                            <div class="row">
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <div class="btn-group">
                                        @can('templatesubcategoriesembroidery.show')
                                            <a href="{{route('templatesubcategoriesembroidery.show', $templatesubcategoryembroidery->id)}}" class="btn btn-sm btn-info">View</a>
                                        @endcan
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    @can('templatesubcategoriesembroidery.edit')
                                        <a href="{{route('templatesubcategoriesembroidery.edit', $templatesubcategoryembroidery->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                    @endcan
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <div class="btn-group">
                                        @can('templatesubcategoriesembroidery.destroy')
                                        <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('templatesubcategoriesembroidery.destroy', $templatesubcategoryembroidery->id) !!}" data-id="{{$templatesubcategoryembroidery->id}}" data-token="{{ csrf_token() }}">Remove</a>
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
                    <h4 class="modal-title" id="custom-width-modalLabel">Create Template Category</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="category_embroidery_id" value={{ $templatecategoryembroidery->id }}>
                    <div class="box-body">
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }} has-feedback">
                            <label for="title">Sub Category Embroidery Name</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Name" value={{old('title')}}>
                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="title">Category Embroidery Name</label>
                            <input type="text" class="form-control" name="categoryembroidery"  value="{{ $templatecategoryembroidery->slug}}" readonly>
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
                            <select class="form-control" name="status" value="{{old('status')}}">
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
@endsection
