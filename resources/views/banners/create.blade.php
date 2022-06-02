@extends('layouts.admin')
@section('title','Create Banners')
@section('pagename','Create Banners')
@section('menuname','Create Banners')
@section('content')
<div class="row" style="margin-top:50px;">    
    <div class="col-md-3">
    </div>
    <div class="col-md-6">       
         <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Banners</h3>
        </div>      
        @include('common.alerts')  
        <form role="form" method="POST" action="{{route('banners.store')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="box-body">
            <div class="form-group{{ $errors->has('title') ? ' has-error' : 'has-success' }}  has-feedback">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Enter Name" value="{{ old('title') }}">
                @if ($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('title') }}</strong>
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
            <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }} has-feedback">
                <label for="name">Link</label>
                <input type="text" class="form-control" name="link" placeholder="Enter Description">
                @if ($errors->has('link'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('link') }}</strong>
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