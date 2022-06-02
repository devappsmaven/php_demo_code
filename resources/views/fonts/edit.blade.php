@extends('layouts.admin')
@section('title','Edit Font')
@section('pagename','Edit Font')
@section('menuname','Edit Font')
@section('content')

<div class="row" style="margin-top:50px;">    
    <div class="col-md-3">
    </div>
    <div class="col-md-6"> 
        <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Font</h3>
        </div> 
        @include('common.alerts')       
        <form role="form" method="POST" action="/admin/fonts/{{$font->id}}" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="box-body">
            <div class="form-group{{ $errors->has('displayname') ? ' has-error' : '' }} has-feedback">
                <label for="displayname">Display Name</label>
                <input type="text" class="form-control" name="displayname" value="{{ $font->displayname}}">
                @if ($errors->has('displayname'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('displayname') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('size') ? ' has-error' : '' }} has-feedback">
                <label for="size">Size</label>
                <input type="text" class="form-control" name="size" value="{{ $font->size}}">
                @if ($errors->has('size'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('size') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }} has-feedback">
                <label for="file">File</label>
                <input type="file" class="form-control" name="file" value={{old('file')}}>
                @if ($errors->has('file'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('file') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('fontcategory_id') ? ' has-error' : '' }} has-feedback">
                <label for="fontcategory_id">Category</label>
                <select class="form-control" style="width: 100%;" name="fontcategory_id">
                    <option selected="selected" disabled>--Select Category--</option>
                    @foreach($fontcategories as $fontcategory)
                        <option value="{{$fontcategory->id}}" @if($fontcategory->id == $font->fontcategory_id) selected @endif>{{$fontcategory->name}}</option>
                    @endforeach
                </select>
                @if ($errors->has('fontcategory_id'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('fontcategory_id') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }} has-feedback"  style="display:none">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" value="{{$font->description}}">
                @if ($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                <label for="status">Status</label>
                <select class="form-control" name="status">
                     @if($font->status == 'Enable')
                        <option selected>Enable</option>
                        <option>Disable</option>
                     @endif
                     @if($font->status == 'Disable')
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