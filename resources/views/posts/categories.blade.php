@extends('layouts.admin')
@section('title','Posts Categories')
@section('pagename','Posts Categories')
@section('menuname','Posts Categories')
@section('content')
<div class="row" style="margin-top:50px;">    
    <div class="col-md-3">
    </div>
    <div class="col-md-6">       
         <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Posts Categories</h3>
        </div>      
        @include('common.alerts')  
        <form role="form" method="POST" action="{{route('posts.addcategories')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="box-body">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : 'has-success' }}  has-feedback">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }} has-feedback">
                <label for="name">Description</label>
                <input type="text" class="form-control" name="description" placeholder="Enter Description">
                @if ($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('background') ? ' has-error' : '' }} has-feedback">
                <label for="background">Background Color</label>
                <div class="input-group my-colorpicker2">
                    <input type="text" class="form-control" name="background" value={{old('background')}}>
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
                <label for="filename">Image</label>
                <input type="file" class="form-control" name="filename" value={{old('filename')}}>
                @if ($errors->has('filename'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('filename') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                <label for="status">Status</label>
                <select class="form-control" name="status">
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
            <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
        </div>
    </div>
    <div class="col-md-3">        
    </div>
</div>
@endsection