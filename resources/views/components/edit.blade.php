@extends('layouts.admin')
@section('title','Create Components')
@section('pagename','Create Components')
@section('menuname','Create Components')
@section('content')
@include('common.alerts')  
<div class="container-fluid">
    <form role="form" method="POST" action="/admin/components/{{$component->id}}" enctype="multipart/form-data" class="colors_form" novalidate="novalidate">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="row">
            <div class="col-sm-8">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$component->name}}">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <!--<div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }} has-feedback">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control" name="slug" value={{$component->slug}}>
                            @if ($errors->has('slug'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('slug') }}</strong>
                                </span>
                            @endif
                        </div>-->
                        <div class="form-group{{ $errors->has('order') ? ' has-error' : '' }} has-feedback">
                            <label for="order">Order</label>
                            <input type="number" class="form-control" name="order" value="{{$component->order}}">
                            @if ($errors->has('order'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('order') }}</strong>
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
                                        <button type="button" class="btn btn-info waves-effect remove-data-from-delete-form" data-dismiss="modal">Insert Into Component</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if (strtolower($component->type)=='footer' || strtolower($component->type)=='header')
                        <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }} has-feedback">
                            <label for="content">Content</label>
                            <textarea name="message" id="description" class="form-control" style="height: 300px">
                                {{  $component->content }}
                            </textarea>
                            @if ($errors->has('content'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('content') }}</strong>
                                </span>
                            @endif
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }} has-feedback">
                            <label for="type">Area</label>
                            <select class="form-control" name="type">
                                @if($component->type == 'Header')
                                    <option selected>Header</option>
                                    <option>Mobile Area</option>
                                    <option>Left Side</option>
                                    <option>Body</option>
                                    <option>Rigth Side</option>
                                    <option>Footer</option>
                                @endif
                                @if($component->type == 'Mobile Area')
                                    <option>Header</option>
                                    <option selected>Mobile Area</option>
                                    <option>Left Side</option>
                                    <option>Body</option>
                                    <option>Rigth Side</option>
                                    <option>Footer</option>
                                @endif
                                @if($component->type == 'Left Side')
                                    <option>Header</option>
                                    <option>Mobile Area</option>
                                    <option selected>Left Side</option>
                                    <option>Body</option>
                                    <option>Rigth Side</option>
                                    <option>Footer</option>
                                @endif
                                @if($component->type == 'Body')
                                    <option>Header</option>
                                    <option>Mobile Area</option>
                                    <option>Left Side</option>
                                    <option selected>Body</option>
                                    <option>Rigth Side</option>
                                    <option>Footer</option>
                                @endif
                                @if($component->type == 'Rigth Side')
                                    <option>Header</option>
                                    <option>Mobile Area</option>
                                    <option>Left Side</option>
                                    <option>Body</option>
                                    <option selected>Rigth Side</option>
                                    <option>Footer</option>
                                @endif
                                @if($component->type == 'Footer')
                                    <option>Header</option>
                                    <option>Mobile Area</option>
                                    <option>Left Side</option>
                                    <option>Body</option>
                                    <option>Rigth Side</option>
                                    <option selected>Footer</option>
                                @endif
                            </select>
                            @if ($errors->has('type'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('type') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('section') ? ' has-error' : '' }} has-feedback">
                            <label for="section">Section</label>
                            <select name="section" id="section"  class="form-control">
                                @foreach ($sections as $section)
                                    @if($section == $component->section)
                                        <option selected>{{$section}}</option>
                                    @else
                                        <option>{{$section}}</option>
                                    @endif
                                @endforeach
                            </select>
                            @if ($errors->has('section'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('section') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                            <label for="status">Status</label>
                            <select class="form-control" name="status">
                                    @if($component->status == 'Enable')
                                    <option selected>Enable</option>
                                    <option>Disable</option>
                                    @endif
                                    @if($component->status == 'Disable')
                                    <option>Enable</option>
                                    <option selected>Disable</option>
                                    @endif
                            </select>
                            @if ($errors->has('status'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('status') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Themes</label>
                            {!! Form::select('themes[]' , $themes , $component->themes, ['class' => 'form-control',"multiple"]) !!}
                        </div>
                        <div class="form-group{{ $errors->has('is_editable') ? ' has-error' : '' }} has-feedback">
                            <label>
                            <input type="checkbox" class="minimal" name="is_editable" id="is_editable" {{ $component->is_editable ? 'checked' : '' }}>
                            </label>
                                Editable
                            </label>
                            @if ($errors->has('is_editable'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('is_editable') }}</strong>
                                </span>
                            @endif
                        </div>
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