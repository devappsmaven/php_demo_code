@extends('layouts.admin')
@section('title','Create Gallerys')
@section('pagename','Create Gallerys')
@section('menuname','Create Gallerys')
@section('content')
@include('common.alerts')  
<div class="container-fluid">
    <form role="form" method="POST" action="/admin/gallerys/{{$gallery->id}}" enctype="multipart/form-data" class="colors_form" novalidate="novalidate">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="row">
            <div class="col-sm-8">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }} has-feedback">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" value="{{$gallery->title}}">
                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                                <img class="img-responsive pad" src="{{asset('img/blog')}}{{'/'}}{{$post->image}}" alt="Photo" style="max-width:100px;">
                                <a class="btn btn-default btn-sm waves-effect waves-light upload-media" data-toggle="modal" data-target="#modal-upload-media">Change Media</a>
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
                                                            <!--<form method="post" action="{{url('admin/medias/store')}}" enctype="multipart/form-data" class="dropzone" id="file">
                                                                {{ csrf_field() }}
                                                            </form>-->
                                                            <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }} has-feedback">
                                                                <label for="file">Image</label>
                                                                <input type="file" class="form-control" name="file" >
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
                                                                                <input type="radio"  class="radio-image" name="image" value="{{asset('img')}}{{'/'}}{{ $media->url }}{{'/'}}{{ $media->file }}">
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
                            </div>
                        <div class="form-group{{ $errors->has('is_approved') ? ' has-error' : '' }} has-feedback">
                            <label for="is_approved">Status</label>
                            <input type="text" class="form-control" name="is_approved" value="{{$gallery->is_approved}}"  readonly>
                            <!--<select class="form-control" name="is_approved">
                                @if($gallery->is_approved == 'Created')
                                    <option selected>Created</option>
                                    <option>Waiting Approval</option>
                                    <option>Rejected</option>
                                    <option>Approved</option>
                                @endif
                                @if($gallery->is_approved == 'Waiting Approval')
                                    <option>Created</option>
                                    <option selected>Waiting Approval</option>
                                    <option>Rejected</option>
                                    <option>Approved</option>
                                @endif
                                @if($gallery->is_approved == 'Rejected')
                                    <option>Created</option>
                                    <option>Waiting Approval</option>
                                    <option selected>Rejected</option>
                                    <option>Approved</option>
                                @endif
                                @if($gallery->is_approved == 'Approved')
                                    <option>Created</option>
                                    <option>Waiting Approval</option>
                                    <option>Rejected</option>
                                    <option selected>Approved</option>
                                @endif
                                @if($gallery->is_approved == 'Gallery')
                                    <option>Created</option>
                                    <option>Waiting Approval</option>
                                    <option>Rejected</option>
                                    <option>Approved</option>
                                    @endif
                            </select>-->
                            @if ($errors->has('is_approved'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('is_approved') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box box-primary">

                    <div class="box-body">
                        <div class="form-group">
                            <label>Categories</label>
                            <select class="form-control" multiple="multiple" data-placeholder="Select a category" style="width: 100%;" name="categories[]">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" disabled>{{ $category->name }}</option>
                                    @foreach ($category->subcategories as $subcategory)
                                    <option value="{{ $category->id }}{{ '_' }}{{ $subcategory->id }}"   
                                        @foreach ($gallery->subcategories as $gallerysubcategory)
                                            @if($gallerysubcategory->id == $subcategory->id)
                                            selected
                                            @endif
                                        @endforeach                    
                                        >&nbsp;&nbsp;&nbsp;{{ $subcategory->name }}</option>
                                    @endforeach                    
                                @endforeach  
                            </select> 
                        </div>
                        <div class="form-group">
                            <label>Tags</label>
                            {!! Form::select('tags[]' , $tags , $gallery->tags, ['class' => 'form-control',"multiple"]) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="box-body">
                    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }} has-feedback">
                        <textarea name="message" id="message" class="form-control description2" style="height: 300px">
                            {{  $gallery->body }}
                        </textarea>
                        @if ($errors->has('body'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('body') }}</strong>
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