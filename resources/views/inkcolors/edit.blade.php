@extends('layouts.admin')
@section('title','Edit Ink Color')
@section('pagename','Edit Ink Color')
@section('menuname','Edit Ink Color')
@section('content')

<div class="row" style="margin-top:50px;">    
    <div class="col-md-3">
    </div>
    <div class="col-md-6"> 
        <div class="box box-primary">
        @include('common.alerts')
        <div class="box-header with-border">
            <h3 class="box-title">Ink Color</h3>
        </div>        
        <form role="form" method="POST" action="/admin/inkcolors/{{$inkcolor->id}}" enctype="multipart/form-data" class="colors_form" novalidate="novalidate">
            {{csrf_field()}}
            {{method_field('PUT')}}
                <div class="box-body">
                        <div class="form-group{{ $errors->has('order') ? ' has-error' : '' }} has-feedback">
                    <label for="order">Order</label>
                    <input type="number" class="form-control" name="order" value={{$inkcolor->order}}>
                    @if ($errors->has('order'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('order') }}</strong>
                    </span>
                @endif
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" value={{$inkcolor->name}}>
                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('name') }}</strong>
                    </span>
                @endif
                </div>
                <div class="form-group{{ $errors->has('hex') ? ' has-error' : '' }} has-feedback">
                    <label for="hex">Hex</label>
                    <div class="input-group my-colorpicker2">
                        <input type="text" class="form-control" name="hex" value={{$inkcolor->hex}}>
                        <div class="input-group-addon">
                            @if($inkcolor->hex)
                                <i></i>
                            @else
                                <i style="background-image: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet); !important"></i>
                            @endif
                        </div>
                    </div>
                    @if ($errors->has('hex'))
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-red">{{ $errors->first('hex') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }} has-feedback">
                    <label for="file">Image</label>
                    <input type="file" class="form-control" name="file" value={{$inkcolor->file}}>
                    @if ($errors->has('file'))
                        <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('file') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                <label for="status">Status</label>
                    <select class="form-control" name="status">
                        @if($inkcolor->status == 'Enable')
                           <option selected>Enable</option>
                           <option>Disable</option>
                        @endif
                        @if($inkcolor->status == 'Disable')
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