@extends('layouts.admin')
@section('title','Templates SubCategories')
@section('pagename','Templates SubCategories')
@section('menuname','Templates SubCategories')
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
        <form role="form" method="POST" action="{{route('templates.storesubcategories')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="box-body">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }} has-feedback">
                <label for="category_id">Category</label>
                <select class="form-control" style="width: 100%;" name="category_id">
                    <option selected="selected" disabled>--Select Category--</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @if ($errors->has('category_id'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('category_id') }}</strong>
                    </span>
                @endif
            </div><!-- /.form-group -->
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Enter Description">
                @if ($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                <label for="status">Status</label>
                <select class="form-control" name="status" id="status">
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