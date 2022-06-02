@extends('layouts.admin')
@section('title','Create Pages')
@section('pagename','Create Pages')
@section('menuname','Create Pages')
@section('content')
@include('common.alerts')  
<div class="container-fluid">
    <form role="form" method="POST" action="{{route('pages.store')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-sm-8">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }} has-feedback">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title">
                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }} has-feedback">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control" name="slug">
                            @if ($errors->has('slug'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('slug') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <a class="btn btn-default btn-sm waves-effect waves-light upload-media" data-toggle="modal" data-target="#modal-upload-media">Add Media</a>
                        </div>
                        <div id="modal-upload-media" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog" style="width:95%;">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="custom-width-modalLabel">Insert Media</h4>
                                    </div>
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
                                                                    <label class="image-checkbox">
                                                                        <i class="fa fa-check hidden"></i>
                                                                        <img class="img-responsive" src="{{asset('img')}}{{'/'}}{{ $media->url }}{{'/'}}{{ $media->file }}"  style="width:100px; max-width:100px; max-height: 100px;" />
                                                                        <input type="checkbox" name="image[]" value="" />
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
                                        <button type="button" class="btn btn-info waves-effect remove-data-from-delete-form" data-dismiss="modal">Insert Into Page</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                            <label for="status">Status</label>
                            <select class="form-control select2" name="status">
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
                        <div class="form-group{{ $errors->has('Published') ? ' has-error' : '' }} has-feedback">
                            <label>
                            <input type="checkbox" class="minimal" name="Published" id="Published">
                            </label>
                            Published
                            </label>
                            @if ($errors->has('Published'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('Published') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="box-body">
                    <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }} has-feedback">
                        <textarea name="content" id="content" class="form-control" style="height: 300px">
                        </textarea>
                        @if ($errors->has('content'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('content') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>

@endsection