@extends('layouts.admin')
@section('title','Theme Edit')
@section('pagename','Theme Edit')
@section('menuname','Theme Edit')
@section('content')
@include('common.alerts') 

<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Site Settings</h3>
      </div>
      <!-- /.box-header -->
      <h3 class="profile-username text-center">Logo</h3>  
      <center>
        <img class="img-responsive" src="{{asset('img/logo')}}{{'/'}}{{$configuration->logo}}?v=rand()" alt="User profile picture">
      </center>
      <p class="text-muted text-center"><a class="btn btn-default btn-sm waves-effect waves-light upload-media" data-toggle="modal" data-target="#modal-upload-media">Upload</a></p>
      <div id="modal-upload-media" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog" style="width:95%;">
            <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title" id="custom-width-modalLabel">Insert Media</h4>
              </div>
              <form role="form" method="POST" action="{{route('configurations.updatelogo')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                  <li><a href="#uploadfiles" data-toggle="tab">Upload Files</a></li>
                                  <li class="active"><a href="#medialibrary" data-toggle="tab">Media Library</a></li>
                                </ul>
                                <div class="tab-content">
                                  <div class="tab-pane" id="uploadfiles">
                                    <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }} has-feedback">
                                        <label for="file">Image</label>
                                        <input type="file" class="form-control" name="file" value={{old('file')}}>
                                        @if ($errors->has('file'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-red">{{ $errors->first('file') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                  </div>
                                  <div class="active tab-pane" id="medialibrary">
                                    <div class="timeline-body" style="width:1500px; overflow-y: auto; height: 600px;">
                                        @foreach($medias as $media)
                                            <div style="position:relative; display:inline">
                                                <label class="image-radio">
                                                <i class="glyphicon glyphicon-ok hidden"></i>    
                                                <img class="img-responsive" src="{{asset('img')}}{{'/'}}{{ $media->url }}{{'/'}}{{ $media->file }}"  style="width:100px; max-width:100px; max-height: 100px;" />
                                                    <input type="radio" name="image_radio"  id="media_{{$media->id}}" value="{{$media->id}}" />
                                                    
                                                </label>
                                            </div>
                                        @endforeach
                                      </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info waves-effect remove-data-from-delete-form">Upload</button>
                </div>
              </form>
            </div>
          </div>
      </div>
      <!-- form start -->
      <form role="form" method="POST" action="/admin/configurations/{{ $configuration->id}}" enctype="multipart/form-data" novalidate="novalidate">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="box-body">
          <div class="form-group">
            <label for="sitename">Site Name</label>
            <input type="text" class="form-control" id="sitename"  name="sitename" placeholder="Enter Site Name" value="{{$configuration->sitename}}">
          </div>
          <div class="form-group">
            <label for="url">Url</label>
            <input type="text" class="form-control" id="url" name="url" placeholder="Enter Url" value="{{$configuration->url}}" readonly>
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{$configuration->email}}">
          </div>
          <div class="form-group{{ $errors->has('language') ? ' has-error' : '' }} has-feedback">
              <label for="language">Language</label>
              <select class="form-control" name="language" id="language">
                   @if($configuration->language == 'English (United States)')
                      <option selected>English (United States)</option>
                   @endif
                   @if($configuration->language == 'Disable')
                      <option>English (United States)</option>
                   @endif
              </select>
          </div>
          <div class="form-group{{ $errors->has('dateformat') ? ' has-error' : '' }} has-feedback">
              <label for="datefomat">Date Format</label>
              <br>
            <label>
              <div class="iradio_minimal-blue checked" aria-checked="false" aria-disabled="false" >
                <input type="radio" name="dateformat" id="dateformat1" value="m/d/Y" class="minimal" checked style="position: absolute; opacity: 0;">
                <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
              </div>
               m/d/Y
            </label>
            <label class="">
              <div class="iradio_minimal-blue" aria-checked="false" aria-disabled="false" >
                <input type="radio" name="dateformat" id="dateformat2" value="d/m/Y" class="minimal" style="position: absolute; opacity: 0;">
                <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
              </div>
              d/m/Y
            </label>
          </div>
          <div class="form-group">
              <label for="minutes_lockout">Minutes Lockout</label>
              <input type="number" class="form-control" id="minutes_lockout" name="minutes_lockout" value="{{$configuration->minutes_lockout}}">
            </div>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
  <div class="col-sm-4"></div>
</div>
@endsection