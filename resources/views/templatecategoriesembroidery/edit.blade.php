@extends('layouts.admin')
@section('title','Edit Template Category Embroidery')
@section('pagename','Edit Category Embroidery')
@section('menuname','Edit Category Embroidery')
@section('content')
@include('common.alerts')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Edit Template Category Embroidery</h3>
    </div>
    <div class="box-body">
        <form role="form" method="POST" action="/admin/templatecategoriesembroidery/{{ $templatecategoryembroidery->id}}" enctype="multipart/form-data" class="colors_form" novalidate="novalidate">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="row">
                <div class="col-md-3">
                    <div class="box box-primary">
                        <div class="modal-body">
                            <div class="box-body">
                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }} has-feedback">
                                    <label for="title">Category Embroidery Name</label>
                                    <input type="text" class="form-control" name="title" value="{{ $templatecategoryembroidery->title}}">
                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-red">{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('filename') ? ' has-error' : '' }} has-feedback">
                                    <label for="filename">Image</label>
                                    <img class="profile-user-img img-responsive" src="{{asset('img/template-embroidery')}}{{ '/'}}{{ $templatecategoryembroidery->slug }}{{ '/'}}{{ $templatecategoryembroidery->filename }}" alt="User profile picture">
                                    <input type="file" class="form-control" name="filename" value="{{old('filename')}}">
                                    @if ($errors->has('filename'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-red">{{ $errors->first('filename') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                                    <label for="status">Status *</label>
                                    <select class="form-control" name="status">
                                        @if($templatecategoryembroidery->status == 'Enable')
                                            <option selected>Enable</option>
                                            <option>Disable</option>
                                        @endif
                                        @if($templatecategoryembroidery->status == 'Disable')
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
                                            @can('templatecategoriesembroidery.index')
                                                <a href="{{route('templatecategoriesembroidery.index')}}" class="btn btn-sm btn-info">Back to Categories</a>
                                            @endcan
                                        </div>
                                    </div>                   
                                    <div class="col-sm-3">
                                        <div class="description-block">
                                            @can('templatecategoriesembroidery.edit')
                                                <button  class="btn btn-sm btn-block btn-warning waves-effect waves-light remove-record" type="submit" class="btn btn-primary">Update</button>
                                            @endcan
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="description-block">
                                            @can('templatecategoriesembroidery.destroy')
                                                <a class="btn btn-sm btn-block btn-danger waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('templatecategoriesembroidery.destroy', $templatecategoryembroidery->id) !!}" data-id="{{$templatecategoryembroidery->id}}" data-token="{{ csrf_token() }}">Remove</a>
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
