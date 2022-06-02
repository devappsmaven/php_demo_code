@extends('layouts.admin')
@section('title','Details Media')
@section('pagename','Details Media')
@section('menuname','Details Media')
@section('content')
@include('common.alerts')  
<div class="container-fluid">
    <form role="form" method="POST" action="/admin/medias/{{$media->id}}" enctype="multipart/form-data" class="colors_form" novalidate="novalidate">
        {{csrf_field()}}
        {{method_field('PUT')}}
    <div class="row">
        <div class="col-sm-8">
            <div class="box box-primary">
                <div class="box-body">
                <center>
                    <img src="{{asset('img')}}{{'/'}}{{ $media->url }}{{'/'}}{{ $media->file }}" class="img-responsive">
                    <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }} has-feedback">
                            <label for="file">Image</label>
                            <input type="file" class="form-control" name="file">
                            @if ($errors->has('file'))
                                <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('file') }}</strong>
                            </span>
                        @endif
                    </div>
                </center>
                </div>
            </div>
            <div class="box box-primary">
                <div class="box-body">
                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }} has-feedback">
                        <label for="name">Description</label>
                        <input type="text" class="form-control" name="description" value="{{$media->description}}">
                        @if ($errors->has('description'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="box box-primary">
                <div class="box-body">
                    <p><b>Upload On:</b> {{$media->created_at->format('m/d/Y h:m:i')}}</p>
                    <p><b>File URL:</b> {{asset('img')}}{{'/'}}{{ $media->url }}{{'/'}}{{ $media->file }}</p>
                    <p><b>File name:</b> {{ $media->file }}</p>
                    <p><b>File type:</b> {{ $media->type }}</p>
                    <p><b>File size:</b> {{ $media->size }}</p>
                    <p><b>Dimensions:</b> {{ $media->dimensions }}</p>
                    <div class="form-group{{ $errors->has('caption') ? ' has-error' : '' }} has-feedback">
                        <label for="name">Caption</label>
                        <input type="text" class="form-control" name="caption" value="{{$media->caption}}">
                        @if ($errors->has('caption'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('caption') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('alt') ? ' has-error' : '' }} has-feedback">
                            <label for="name">Alternative Text</label>
                            <input type="text" class="form-control" name="alt" value="{{$media->alt}}">
                            @if ($errors->has('alt'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('alt') }}</strong>
                                </span>
                            @endif
                        </div>
                    <div class="row">
                        <div class="col-md-9">
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>

@endsection