@extends('layouts.admin')
@section('title','Details Media')
@section('pagename','Details Media')
@section('menuname','Details Media')
@section('content')
@include('common.alerts')  
<div class="container-fluid">
  <div class="row">
      <div class="col-sm-7">
          <div class="box box-primary">
            <div class="box-body">
              <center>
                <img src="{{asset('img')}}{{'/'}}{{ $media->url }}{{'/'}}{{ $media->file }}" class="img-responsive">
              </center>
            </div>
          </div>
          <div class="box box-primary">
            <div class="box-body">
              <p>description</p>
            </div>
          </div>
      </div>
      <div class="col-sm-5">
          <div class="box box-primary">
              <div class="box-body">
                  <p><b>Upload On:</b> {{$media->created_at->format('m/d/Y h:m:i')}}</p>
                  <p><b>File URL:</b> {{asset('img')}}{{'/'}}{{ $media->url }}{{'/'}}{{ $media->file }}</p>
                  <p><b>File name:</b> {{ $media->file }}</p>
                  <p><b>File type:</b> {{ $media->type }}</p>
                  <p><b>File size:</b> {{ $media->size }}</p>
                  <p><b>Dimensions:</b> {{ $media->dimensions }}</p>
                  <p><b>Caption:</b> {{ $media->caption }}</p>
                  <p><b>Alternative Text:</b> {{ $media->alt }}</p>
                  <div class="row">
                    <div class="col-md-4">
                      @can('medias.edit')
                        <a href="{{route('medias.edit', $media->id)}}" class="btn btn-sm btn-warning">Edit</a>
                      @endcan
                    </div>
                    <div class="col-md-4">
                        @can('medias.destroy')
                          <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('medias.destroy', $media->id) !!}" data-id="{{$media->id}}" data-token="{{ csrf_token() }}">Remove</a>
                        @endcan
                    </div>
                    <div class="col-md-4">
                      @can('medias.index')
                        <a type="button" class="btn btn-info" href="{{route('medias.index')}}" >Back to List</a>
                      @endcan
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<form method="POST" class="remove-record-model">
    <div id="custom-width-modal" class="modal modal-danger fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Delete Record</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Delete This Record?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger waves-effect waves-light">Delete</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection