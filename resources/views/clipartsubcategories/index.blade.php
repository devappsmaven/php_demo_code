@extends('layouts.admin')
@section('title','Manage Clipart SubCategories')
@section('pagename','Manage Clipart SubCategories')
@section('menuname','Manage Clipart SubCategories')
@section('content')
@include('common.alerts')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Clipart SubCategories List</h3>
        @can('clipartcategories.index')
            <a href="{{route('clipartcategories.index')}}" class="btn-info btn-sm pull-right" style="margin-left: 10px;">Back to Categories</a>
        @endcan
        @can('clipartsubcategories.create')
            <a class="btn-primary btn-sm pull-right  add-record" data-toggle="modal" data-target="#custom-width-modal2" data-url="{!! URL::route('clipartsubcategories.create') !!}">
                Add Clipart SubCategories 
            </a>
        @endcan
    </div>
    <div class="box-body">
        <div class="row">
            @foreach ($clipartsubcategories as $clipartsubcategory)
                <div class="col-sm-2">
                    <div class="box box-widget widget-user">
                        <div class="widget-user-header">
                            <h4>{{ $clipartsubcategory->title }}</h4>
                            <h5 class="widget-user-desc"><a href="{{route('clipartcategories.index')}}">{{ $clipartsubcategory->category->title }}</a></h5>
                        </div>
                        <div class="widget-user-image">
                            @can('cliparts.create')
                                <a href="{{route('cliparts.index',[$clipartsubcategory->category->id,$clipartsubcategory->id])}}">
                                    <img src="{{asset('img/clipart')}}{{ '/'}}{{ $clipartsubcategory->category->slug }}{{ '/'}}{{ '/'}}{{ $clipartsubcategory->slug }}{{ '/'}}{{ $clipartsubcategory->filename }}" alt="{{ $clipartsubcategory->title }}"   style="max-width:74px; max-height: 74px;">
                                </a>
                            @endcan
                        </div>
                        <div class="box-footer">
                            <div class="row">
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <div class="btn-group">
                                        @can('clipartsubcategories.show')
                                            <a href="{{route('clipartsubcategories.show', $clipartsubcategory->id)}}" class="btn btn-sm btn-info">View</a>
                                        @endcan
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    @can('clipartsubcategories.edit')
                                        <a href="{{route('clipartsubcategories.edit', $clipartsubcategory->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                    @endcan
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <div class="btn-group">
                                        @can('clipartsubcategories.destroy')
                                        <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('clipartsubcategories.destroy', $clipartsubcategory->id) !!}" data-id="{{$clipartsubcategory->id}}" data-token="{{ csrf_token() }}">Remove</a>
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
                    <h4 class="modal-title" id="custom-width-modalLabel">Create Clipart Category</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="category_id" value={{ $clipartcategory->id }}>
                    <div class="box-body">
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }} has-feedback">
                            <label for="title">Sub Category Name</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Name" value={{old('title')}}>
                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="title">Category Name</label>
                            <input type="text" class="form-control" name="category"  value="{{ $clipartcategory->slug}}" readonly>
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
