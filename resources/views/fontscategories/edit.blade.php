@extends('layouts.admin')
@section('title','Edit Font Categories')
@section('pagename','Edit Font Categories')
@section('menuname','Edit Font Categories')
@section('content')

<div class="row" style="margin-top:50px;">    
    <div class="col-md-3">
    </div>
    <div class="col-md-6"> 
        <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Font Categories</h3>
        </div>        
        @include('common.alerts')
        <form role="form" method="POST" action="/admin/fontscategories/{{$fontcategory->id}}" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="box-body">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{$fontcategory->name}}">
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }} has-feedback">
                <label for="name">Description</label>
                <input type="text" class="form-control" name="description" value="{{$fontcategory->description}}">
                @if ($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                <label for="status">Status</label>
                <select class="form-control" name="status">
                     @if($fontcategory->status == 'Enable')
                        <option selected>Enable</option>
                        <option>Disable</option>
                     @endif
                     @if($fontcategory->status == 'Disable')
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