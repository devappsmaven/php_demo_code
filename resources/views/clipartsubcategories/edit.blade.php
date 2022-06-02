@extends('layouts.admin')
@section('title','Edit Clipart SubCategory')
@section('pagename','Edit SubCategory')
@section('menuname','Edit SubCategory')
@section('content')
@include('common.alerts')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Edit Clipart SubCategory</h3>
    </div>
    <div class="box-body">
        <form role="form" method="POST" action="/admin/clipartsubcategories/{{ $clipartsubcategory->id}}" enctype="multipart/form-data" class="colors_form" novalidate="novalidate">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <input type="hidden" value="{{ $clipartsubcategory->category_id }}" id="defaultcategory">
            <div class="row">
                <div class="col-md-3">
                    <div class="box box-primary">
                        <div class="modal-body">
                            <div class="box-body">
                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }} has-feedback">
                                    <label for="title">Sub Category Name</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Name" value="{{ $clipartsubcategory->title}}">
                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-red">{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }} has-feedback">
                                    <label for="category">Category Name</label>
                                    <select class="form-control" name="category" id="category" onchange="displayoperation(this);">
                                        @foreach ($clipartcategories as $category)
                                            @if($category->id == $clipartsubcategory->category_id)
                                                <option value={{ $category->id }} selected>{{ $category->title }}</option>
                                            @else
                                                <option value={{ $category->id }} >{{ $category->title }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @if ($errors->has('category'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-red">{{ $errors->first('category') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('operation') ? ' has-error' : '' }} has-feedback" id="typeoperationcategory" style="display:none">
                                    <label for="operation">Operation</label>
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
                                    @if ($errors->has('operation'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-red">{{ $errors->first('operation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('copycategory') ? ' has-error' : '' }} has-feedback" id="categorylist" style="display:none;">
                                    <label for="copycategory">Select More Categories</label>
                                    <select class="form-control" name="copycategory[]" id="copycategory[]" multiple>
                                        @foreach ($clipartcategories as $category)
                                            @if($category->id != $clipartsubcategory->category_id)
                                                <option value={{ $category->id }}>{{ $category->title }}</option>
                                            @else
                                                <option value={{ $category->id }} disabled>{{ $category->title }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @if ($errors->has('copycategory'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-red">{{ $errors->first('copycategory') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('filename') ? ' has-error' : '' }} has-feedback">
                                    <label for="filename">Image</label>
                                    <img class="profile-user-img img-responsive" src="{{asset('img/clipart')}}{{ '/'}}{{ $clipartsubcategory->category->slug }}{{ '/'}}{{ '/'}}{{ $clipartsubcategory->slug }}{{ '/'}}{{ $clipartsubcategory->filename }}" alt="User profile picture">
                                    <input type="file" class="form-control" name="filename" value={{old('filename')}}>
                                    @if ($errors->has('filename'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-red">{{ $errors->first('filename') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                                    <label for="status">Status *</label>
                                    <select class="form-control" name="status">
                                        @if($clipartsubcategory->status == 'Enable')
                                            <option selected>Enable</option>
                                            <option>Disable</option>
                                        @endif
                                        @if($clipartsubcategory->status == 'Disable')
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
                            <div class="box-footer">
                                <div class="row"> 
                                    <div class="col-sm-6">
                                        <div class="description-block">
                                            @can('clipartsubcategories.index')
                                                <a href="{{route('clipartsubcategories.index', $clipartsubcategory->category->id)}}" class="btn btn-sm btn-info">Back to SubCategories</a>
                                            @endcan
                                        </div>
                                    </div>                   
                                    <div class="col-sm-3">
                                        <div class="description-block">
                                            @can('clipartsubcategories.edit')
                                                <button  class="btn btn-sm btn-block btn-warning waves-effect waves-light remove-record" type="submit" class="btn btn-primary">Update</button>
                                            @endcan
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="description-block">
                                            @can('clipartsubcategories.destroy')
                                                <a class="btn btn-sm btn-block btn-danger waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('clipartsubcategories.destroy', $clipartsubcategory->id) !!}" data-id="{{$clipartsubcategory->id}}" data-token="{{ csrf_token() }}">Remove</a>
                                            @endcan
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </form>
    </div>
</div>
@endsection
