@extends('layouts.admin')
@section('title','Edit Categories')
@section('pagename','Edit Categories')
@section('menuname','Edit Categories')
@section('content')

<div class="row" style="margin-top:50px;">    
    <div class="col-md-3">
    </div>
    <div class="col-md-6"> 
        <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Categories</h3>
        </div>        
        @include('common.alerts')
        <form role="form" method="POST" action="/admin/templates/updatecategories/{{$category->id}}" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="box-body">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                <label for="name">Name *</label>
                <input type="text" class="form-control" name="name" value="{{$category->name}}" required>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }} has-feedback">
                <label for="name">Description *</label>
                <input type="text" class="form-control" name="description" value="{{$category->description}}" required>
                @if ($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('background') ? ' has-error' : '' }} has-feedback">
                <label for="background">Background Color(Optional)</label>
                <div class="input-group my-colorpicker2">
                    <input type="text" class="form-control" name="background" value="{{$category->background}}">
                    <div class="input-group-addon">
                        <i></i>
                    </div>
                </div>
                @if ($errors->has('background'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('background') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('filename') ? ' has-error' : '' }} has-feedback">
                <label for="filename">Image(Optional)</label>
                <input type="file" class="form-control" name="filename" value={{old('filename')}}>
                @if ($errors->has('filename'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('filename') }}</strong>
                    </span>
                @endif
            </div>
            
            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                <label for="status">Status *</label>
                <select class="form-control" name="status" required>
                     @if($category->status == 'Enable')
                        <option selected>Enable</option>
                        <option>Disable</option>
                        <option>Pending</option>
                     @endif
                     @if($category->status == 'Pending')
                        <option>Enable</option>
                        <option>Disable</option>
                        <option selected>Pending</option>
                    @endif
                     @if($category->status == 'Disable')
                        <option>Enable</option>
                        <option selected>Disable</option>
                        <option>Pending</option>
                     @endif
                </select>
                @if ($errors->has('status'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('status') }}</strong>
                    </span>
                @endif
            </div>
            <div class="box-footer">
            <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
        </div>
    </div>
    <div class="col-md-3">        
    </div>
</div>
@endsection