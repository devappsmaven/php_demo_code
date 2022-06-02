@extends('layouts.admin')
@section('title','Create Mailables')
@section('mailablename','Create Mailables')
@section('menuname','Create Mailables')
@section('content')
@include('common.alerts')  
<div class="container-fluid">
    <form role="form" method="POST" action="/admin/mailables/{{$mailable->id}}" enctype="multipart/form-data" class="colors_form" novalidate="novalidate">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="row">
            <div class="col-sm-8">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$mailable->name}}" readonly>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('view') ? ' has-error' : '' }} has-feedback" style="display: none;">
                            <label for="view">view</label>
                            <input type="text" class="form-control" name="view" value={{$mailable->view}}>
                            @if ($errors->has('view'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('view') }}</strong>
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
                            <select class="form-control select2" name="status">
                                    @if($mailable->status == 'Enable')
                                    <option selected>Enable</option>
                                    <option>Disable</option>
                                    @endif
                                    @if($mailable->status == 'Disable')
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
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="box-body">
                    <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }} has-feedback">
                        <textarea name="message" id="message" class="form-control" style="height: 300px">
                            {{$mailable->message}}    
                        </textarea>
                        @if ($errors->has('message'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('message') }}</strong>
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