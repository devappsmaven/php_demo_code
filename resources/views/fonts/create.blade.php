@extends('layouts.admin')
@section('title','Create Fonts')
@section('pagename','Create Fonts')
@section('menuname','Create Fonts')
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
        <form role="form" method="POST" action="{{route('fonts.store')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="box-body">
            <div class="form-group{{ $errors->has('displayname') ? ' has-error' : '' }} has-feedback">
                <label for="displayname">Display Name</label>
                <input type="text" class="form-control" name="displayname" id="displayname" placeholder="Enter Display Name" value={{old('displayname')}}>
                @if ($errors->has('displayname'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('displayname') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('size') ? ' has-error' : '' }} has-feedback">
                <label for="size">Size</label>
                <input type="text" class="form-control" name="size" id="size" placeholder="Enter Size" value="8">
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
                    @foreach($fontcategories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @if ($errors->has('fontcategory_id'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('fontcategory_id') }}</strong>
                    </span>
                @endif
            </div><!-- /.form-group -->
            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }} has-feedback" style="display:none">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Enter Description" value="{{old('description')}}">
                @if ($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                <label for="status">Status</label>
                <select class="form-control" name="status" id="status">
                    <!--<option disabled>--Select Option--</option>-->
                    <option selected>Enable</option>
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