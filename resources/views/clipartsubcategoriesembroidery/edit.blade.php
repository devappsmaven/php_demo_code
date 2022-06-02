@extends('layouts.admin')
@section('title','Edit Clipart SubCategory Embroidery')
@section('pagename','Edit SubCategory Embroidery')
@section('menuname','Edit SubCategory Embroidery')
@section('content')
@include('common.alerts')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Edit Clipart SubCategory Embroidery</h3>
    </div>
    <div class="box-body">
        <form role="form" method="POST" action="/admin/clipartsubcategoriesembroidery/{{ $clipartsubcategoryembroidery->id}}" enctype="multipart/form-data" class="colors_form" novalidate="novalidate">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <input type="hidden" value="{{ $clipartsubcategoryembroidery->category_embroidery_id }}" id="defaultcategory">
            <div class="row">
                <div class="col-md-3">
                    <div class="box box-primary">
                        <div class="modal-body">
                            <div class="box-body">
                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }} has-feedback">
                                    <label for="title">Sub Category Embroidery Name</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Name" value="{{ $clipartsubcategoryembroidery->title}}">
                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-red">{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }} has-feedback">
                                    <label for="category">Category Name</label>
                                    <select class="form-control" name="category" id="category" onchange="displayoperation(this);">
                                        @foreach ($clipartcategoriesembroidery as $categoryembroidery)
                                            @if($categoryembroidery->id == $clipartsubcategoryembroidery->category_embroidery_id)
                                                <option value={{ $categoryembroidery->id }} selected>{{ $categoryembroidery->title }}</option>
                                            @else
                                                <option value={{ $categoryembroidery->id }} >{{ $categoryembroidery->title }}</option>
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
                                        @foreach ($clipartcategoriesembroidery as $categoryembroidery)
                                            @if($categoryembroidery->id != $clipartsubcategoryembroidery->category_embroidery_id)
                                                <option value={{ $categoryembroidery->id }}>{{ $categoryembroidery->title }}</option>
                                            @else
                                                <option value={{ $categoryembroidery->id }} disabled>{{ $categoryembroidery->title }}</option>
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
                                    <img class="profile-user-img img-responsive" src="{{asset('img/clipart-embroidery')}}{{ '/'}}{{ $clipartsubcategoryembroidery->categoryembroidery->slug }}{{ '/'}}{{ '/'}}{{ $clipartsubcategoryembroidery->slug }}{{ '/'}}{{ $clipartsubcategoryembroidery->filename }}" alt="User profile picture">
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
                                        @if($clipartsubcategoryembroidery->status == 'Enable')
                                            <option selected>Enable</option>
                                            <option>Disable</option>
                                        @endif
                                        @if($clipartsubcategoryembroidery->status == 'Disable')
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
                                            @can('clipartsubcategoriesembroidery.index')
                                                <a href="{{route('clipartsubcategoriesembroidery.index', $clipartsubcategoryembroidery->categoryembroidery->id)}}" class="btn btn-sm btn-info">Back to SubCategories</a>
                                            @endcan
                                        </div>
                                    </div>                   
                                    <div class="col-sm-3">
                                        <div class="description-block">
                                            @can('clipartsubcategoriesembroidery.edit')
                                                <button  class="btn btn-sm btn-block btn-warning waves-effect waves-light remove-record" type="submit" class="btn btn-primary">Update</button>
                                            @endcan
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="description-block">
                                            @can('clipartsubcategoriesembroidery.destroy')
                                                <a class="btn btn-sm btn-block btn-danger waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('clipartsubcategoriesembroidery.destroy', $clipartsubcategoryembroidery->id) !!}" data-id="{{$clipartsubcategoryembroidery->id}}" data-token="{{ csrf_token() }}">Remove</a>
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
