@extends('layouts.admin')
@section('title','Details Pages')
@section('pagename','Details Pages')
@section('menuname','Details Pages')
@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }} has-feedback">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" value="{{$page->title}}" disabled>
                        </div>
                        <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }} has-feedback">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control" name="slug" value={{$page->slug}} disabled>                            
                        </div>
                        <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }} has-feedback">
                            <label for="slug">Content</label>
                            <textarea name="content" id="content" class="form-control" style="height: 300px" disabled>
                                {{  $page->content }}
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box box-primary">
                    <div class="box-body">
                            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                                <label for="status">Status</label>
                                <select class="form-control" name="status" disabled>
                                        @if($page->status == 'Enable')
                                        <option selected>Enable</option>
                                        <option>Disable</option>
                                        @endif
                                        @if($page->status == 'Disable')
                                        <option>Enable</option>
                                        <option selected>Disable</option>
                                        @endif
                                </select>
                            </div>
                            <div class="form-group{{ $errors->has('published') ? ' has-error' : '' }} has-feedback">
                                <label>
                                <input type="checkbox" class="minimal" name="published" id="published" {{ $page->published ? 'checked' : '' }} disabled>
                                </label>
                                    Published
                                </label>
                            </div>
                            <div class="form-group">
                                    <label>Header Components</label>
                                    {!! Form::select('headercomponents[]' , $headercomponents , $page->headercomponents, ['class' => 'form-control',"multiple","disabled"]) !!}
                                </div>
                                <div class="form-group">
                                    <label>Mobile Area Components</label>
                                    {!! Form::select('mobileareacomponents[]' , $mobileareacomponents , $page->mobileareacomponents, ['class' => 'form-control',"multiple","disabled"]) !!}
                                </div>
                                <div class="form-group">
                                    <label>Left Side Components</label>
                                    {!! Form::select('leftsidecomponents[]' , $leftsidecomponents , $page->leftsidecomponents, ['class' => 'form-control',"multiple","disabled"]) !!}
                                </div>
                                <div class="form-group">
                                    <label>Body Components</label>
                                    {!! Form::select('bodycomponents[]' , $bodycomponents , $page->bodycomponents, ['class' => 'form-control',"multiple","disabled"]) !!}
                                </div>
                                <div class="form-group">
                                    <label>Right Side Components</label>
                                    {!! Form::select('rightsidecomponents[]' , $rightsidecomponents , $page->rightsidecomponents, ['class' => 'form-control',"multiple","disabled"]) !!}
                                </div>
                                <div class="form-group">
                                    <label>Footer Components</label>
                                    {!! Form::select('footercomponents[]' , $footercomponents , $page->footercomponents, ['class' => 'form-control',"multiple","disabled"]) !!}
                                </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <a href="http://vividcustoms.test/{{ $page->slug }}" target="blank" class="btn btn-success btn-sm"><b>Preview</b></a>
        </div>
</div>

@endsection