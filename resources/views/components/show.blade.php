@extends('layouts.admin')
@section('title','Details Components')
@section('pagename','Details Components')
@section('menuname','Details Components')
@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$component->name}}" disabled>
                        </div>
                        <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }} has-feedback">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control" name="slug" value={{$component->slug}} disabled>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }} has-feedback">
                            <label for="type">Area</label>
                            <select class="form-control" name="type" disabled>
                                @if($component->type == 'Header')
                                    <option selected>Header</option>
                                    <option>Body</option>
                                    <option>Footer</option>
                                @endif
                                @if($component->type == 'Body')
                                    <option>Header</option>
                                    <option selected>Body</option>
                                    <option>Footer</option>
                                @endif
                                @if($component->type == 'Footer')
                                    <option>Header</option>
                                    <option>Body</option>
                                    <option selected>Footer</option>
                                @endif
                            </select>
                            @if ($errors->has('type'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('type') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                            <label for="status">Status</label>
                            <select class="form-control" name="status" disabled>
                                    @if($component->status == 'Enable')
                                    <option selected>Enable</option>
                                    <option>Disable</option>
                                    @endif
                                    @if($component->status == 'Disable')
                                    <option>Enable</option>
                                    <option selected>Disable</option>
                                    @endif
                            </select>
                        </div>
                        <div class="form-group{{ $errors->has('is_editable') ? ' has-error' : '' }} has-feedback">
                            <label>
                            <input type="checkbox" class="minimal" name="is_editable" id="is_editable" {{ $component->is_editable ? 'checked' : '' }} disabled>
                            </label>
                                Editable
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="box-body">
                    <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }} has-feedback">
                        <textarea name="content" id="content" class="form-control" style="height: 300px" disabled>
                            {{  $component->content }}
                        </textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Preview</button>
        </div>
</div>

@endsection