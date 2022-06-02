@extends('layouts.admin')
@section('title','Edit SubCategories')
@section('pagename','Edit SubCategories')
@section('menuname','Edit SubCategories')
@section('content')

<div class="row" style="margin-top:50px;">    
    <div class="col-md-3">
    </div>
    <div class="col-md-6"> 
        <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">SubCategories</h3>
        </div> 
        @include('common.alerts')       
        <form role="form" method="POST" action="/admin/templates/updatesubcategories/{{$subcategory->id}}" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="box-body">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                <label for="name">Name *</label>
                <input type="text" class="form-control" name="name" value="{{$subcategory->name}}" required>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                <label for="name">Category *</label>
                <select class="form-control" style="width: 100%;" name="category_id" required>
                    <option selected="selected" disabled>--Select Category--</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" @if($category->id == $subcategory->category->id) selected @endif>{{$category->name}}</option>
                    @endforeach
                </select>
                @if ($errors->has('category_id'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('category_id') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                <label for="name">Description *</label>
                <input type="text" class="form-control" name="description" value="{{$subcategory->description}}" required>
                @if ($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                <label for="status">Status *</label>
                <select class="form-control" name="status" required> 
                     @if($subcategory->status == 'Enable')
                        <option selected>Enable</option>
                        <option>Disable</option>
                        <option>Pending</option>
                     @endif
                     @if($subcategory->status == 'Pending')
                        <option>Enable</option>
                        <option>Disable</option>
                        <option selected>Pending</option>
                     @endif
                     @if($subcategory->status == 'Disable')
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