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
                        <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }} has-feedback">
                            <label for="slug">Content</label>
                            <textarea name="message" id="message" class="form-control" style="height: 300px">
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
                        <div class="form-group">
                            <label>Header Components</label>
                            <select class="form-control" multiple data-placeholder="Select a Header Component" style="width: 100%;" name="headercomponents[]">
                                @foreach ($headercomponents as $comopnent)
                                    <option value="{{ $comopnent->id }}">{{ $comopnent->name }}</option>  
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Mobile Area Components</label>
                            <select class="form-control" multiple data-placeholder="Select a Mobile Area Component" style="width: 100%;" name="mobileareacomponents[]">
                                @foreach ($mobileareacomponents as $comopnent)
                                    <option value="{{ $comopnent->id }}">{{ $comopnent->name }}</option>  
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Left Side Components</label>
                            <select class="form-control" multiple data-placeholder="Select a Left Side Component" style="width: 100%;" name="leftsidecomponents[]">
                                @foreach ($leftsidecomponents as $comopnent)
                                    <option value="{{ $comopnent->id }}">{{ $comopnent->name }}</option>  
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Body Components</label>
                            <select class="form-control" multiple data-placeholder="Select a Body Component" style="width: 100%;" name="bodycomponents[]">
                                @foreach ($bodycomponents as $comopnent)
                                    <option value="{{ $comopnent->id }}">{{ $comopnent->name }}</option>  
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Right Side Components</label>
                            <select class="form-control" multiple data-placeholder="Select a Right Side Component" style="width: 100%;" name="rightsidecomponents[]">
                                @foreach ($rightsidecomponents as $comopnent)
                                    <option value="{{ $comopnent->id }}">{{ $comopnent->name }}</option>  
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Footer Components</label>
                            <select class="form-control" multiple data-placeholder="Select a Footer Component" style="width: 100%;" name="footercomponents[]">
                                @foreach ($footercomponents as $comopnent)
                                    <option value="{{ $comopnent->id }}">{{ $comopnent->name }}</option>  
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>

@endsection