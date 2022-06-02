@extends('layouts.admin')
@section('title','Create Sides')
@section('pagename','Create Sides')
@section('menuname','Create Sides')
@section('content')
<div class="row" style="margin-top:50px;">    
    <div class="col-md-3">
    </div>
    <div class="col-md-6">       
         <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Sides</h3>
        </div>      
        @include('common.alerts')  
        <form role="form" method="POST" action="{{route('sides.store')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="box-body">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : 'has-success' }}  has-feedback">
                <label for="name">Name *</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="{{ old('name') }}" required>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <!--<div class="form-group{{ $errors->has('name') ? ' has-error' : 'has-success' }}  has-feedback">
                <label for="name">Background Image *</label>
                <br>
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
                                            <div class="active tab-pane" id="medialibrarytab">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    @foreach($medias as $media)
                                                        <div class="col-sm-1">    
                                                            <label>
                                                                <input type="radio" name="image" value="{{asset('img')}}{{'/'}}{{ $media->url }}{{'/'}}{{ $media->file }}">
                                                                <img class="img-responsive" src="{{asset('img')}}{{'/'}}{{ $media->url }}{{'/'}}{{ $media->file }}"  style="width:100px; max-width:100px; max-height: 100px;" />
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
        
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info waves-effect remove-data-from-delete-form" data-dismiss="modal">Insert Into Post</button>
                        </div>
                    </div>
                </div>
            </div>-->
            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                <label for="status">Status *</label>
                <select class="form-control" name="status" required>
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