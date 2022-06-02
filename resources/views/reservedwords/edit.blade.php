@extends('layouts.admin')
@section('title','Edit Reserved Word')
@section('pagename','Edit Reserved Word')
@section('menuname','Edit Reserved Word')
@section('content')

<div class="row" style="margin-top:50px;">    
    <div class="col-md-3">
    </div>
    <div class="col-md-6"> 
        <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Reserved Word</h3>
        </div>        
        @include('common.alerts')
        <form role="form" method="POST" action="/admin/reservedwords/{{$reservedword->id}}" enctype="multipart/form-data" class="reserved_word_form" novalidate="novalidate">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="box-body">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{$reservedword->name}}">
                <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                <label for="status">Status</label>
                <select class="form-control select2" name="status">
                     @if($reservedword->status == 'Enable')
                        <option selected>Enable</option>
                        <option>Disable</option>
                     @endif
                     @if($reservedword->status == 'Disable')
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
            <div class="box-footer">
            <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
        </div>
    </div>
    <div class="col-md-3">        
    </div>
</div>
@endsection