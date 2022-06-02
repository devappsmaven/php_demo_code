@extends('layouts.admin')
@section('title','Create Pages')
@section('pagename','Create Pages')
@section('menuname','Create Pages')
@section('content')
@include('common.alerts')  
<div class="container-fluid">
    <form role="form" method="POST" action="/admin/pages/{{$page->id}}" enctype="multipart/form-data" class="colors_form" novalidate="novalidate">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="row">
            <div class="col-sm-8">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }} has-feedback">
                            <label for="slug">URL Key</label>
                            <input type="text" class="form-control" name="slug" value={{$page->slug}}>
                            @if ($errors->has('slug'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('slug') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }} has-feedback">
                            <label for="title">Meta Title</label>
                            <input type="text" class="form-control" name="title" placeholder="50 to 72 characters" value="{{$page->title}}">
                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('title') }}</strong>
                                </span>
                            @else
                                <span class="text-muted"><small>This is the text you'll see at the top of your browser. Search engines view this text as the "title" of your page.</small></span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('meta_description') ? ' has-error' : '' }} has-feedback">
                            <label for="meta_description">Meta Description</label>
                            <textarea class="form-control" name="meta_description" maxlength="156" placeholder="120 to 156 characters" rows="5">{{$page->meta_description}}</textarea>
                            @if ($errors->has('meta_description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('meta_description') }}</strong>
                                </span>
                            @else
                                <span class="text-muted"><small>A brief description of the page.</small></span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('meta_key') ? ' has-error' : '' }} has-feedback">
                            <label for="meta_key">Meta Keywords</label>
                            <input type="text" class="form-control" name="meta_key" maxlength="170" placeholder="20 to 170 characters" value="{{$page->meta_key}}">
                            @if ($errors->has('meta_key'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('meta_key') }}</strong>
                                </span>
                            @else
                                <span class="text-muted"><small>Comma separated keywords you deem relevant to the page in question.</small></span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }} has-feedback">
                            <label for="content">Content</label>
                            <textarea name="message" id="description" class="form-control" style="height: 300px">
                                {{  $page->content }}
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
            <div class="col-sm-4">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                            <label for="status">Status</label>
                            <select class="form-control" name="status">
                                    @if($page->status == 'Enable')
                                    <option selected>Enable</option>
                                    <option>Disable</option>
                                    @endif
                                    @if($page->status == 'Disable')
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
                        <div class="form-group{{ $errors->has('published') ? ' has-error' : '' }} has-feedback">
                            <label>
                            <input type="checkbox" class="minimal" name="published" id="published" {{ $page->published ? 'checked' : '' }}>
                            </label>
                                Published
                            </label>
                            @if ($errors->has('published'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('published') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Header Components</label>
                            {!! Form::select('headercomponents[]' , $headercomponents , $page->headercomponents, ['class' => 'form-control',"multiple"]) !!}
                        </div>
                        <div class="form-group">
                            <label>Mobile Area Components</label>
                            {!! Form::select('mobileareacomponents[]' , $mobileareacomponents , $page->mobileareacomponents, ['class' => 'form-control',"multiple"]) !!}
                        </div>
                        <div class="form-group">
                            <label>Left Side Components</label>
                            {!! Form::select('leftsidecomponents[]' , $leftsidecomponents , $page->leftsidecomponents, ['class' => 'form-control',"multiple"]) !!}
                        </div>
                        <div class="form-group">
                            <label>Body Components</label>
                            {!! Form::select('bodycomponents[]' , $bodycomponents , $page->bodycomponents, ['class' => 'form-control',"multiple"]) !!}
                        </div>
                        <div class="form-group">
                            <label>Right Side Components</label>
                            {!! Form::select('rightsidecomponents[]' , $rightsidecomponents , $page->rightsidecomponents, ['class' => 'form-control',"multiple"]) !!}
                        </div>
                        <div class="form-group">
                            <label>Footer Components</label>
                            {!! Form::select('footercomponents[]' , $footercomponents , $page->footercomponents, ['class' => 'form-control',"multiple"]) !!}
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