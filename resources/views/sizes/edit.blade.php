@extends('layouts.admin')
@section('title','Edit Sizes')
@section('pagename','Edit Sizes')
@section('menuname','Edit Sizes')
@section('content')

<div class="row" style="margin-top:50px;">    
    <div class="col-md-3">
    </div>
    <div class="col-md-6"> 
        <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Sizes</h3>
        </div>  
        @include('common.alerts')      
        <form role="form" method="POST" action="/admin/sizes/{{$size->id}}" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="box-body">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{$size->name}}">
            </div>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                <label for="name">Description</label>
                <input type="number" class="form-control" name="orden" value="{{$size->orden}}">
            </div>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                <label for="status">Status</label>
                <select class="form-control" name="status">
                     @if($size->status == 'Enable')
                        <option selected>Enable</option>
                        <option>Disable</option>
                     @endif
                     @if($size->status == 'Disable')
                        <option>Enable</option>
                        <option selected>Disable</option>
                     @endif
                </select>
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