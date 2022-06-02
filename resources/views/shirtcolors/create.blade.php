@extends('layouts.admin')
@section('title','Create Shirt Color')
@section('pagename','Create Shirt Color')
@section('menuname','Create Shirt Color')
@section('content')
<div class="row" style="margin-top:50px;">    
    <div class="col-md-3">
    </div>
    <div class="col-md-6">       
        <div class="box box-primary">
            @include('common.alerts')
            <div class="box-header with-border">
                <h3 class="box-title">Shirt Color</h3>
            </div>        
            <form role="form" method="POST" action="{{route('shirtcolors.store')}}" enctype="multipart/form-data" class="colors_form" novalidate="novalidate">
                {{csrf_field()}}
                <div class="box-body">
                        <div class="form-group{{ $errors->has('order') ? ' has-error' : '' }} has-feedback">
                    <label for="order">Order</label>
                    <input type="number" class="form-control" name="order" value={{old('order')}}>
                    @if ($errors->has('order'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('order') }}</strong>
                    </span>
                @endif
                </div>
                <div class="form-group{{ $errors->has('colorfamily') ? ' has-error' : '' }} has-feedback">
                    <label for="colorfamily">Color Family *</label>
                    <select class="form-control" name="colorfamily">
                        <option disabled selected>--Select Option--</option>
                        @foreach ($colorfamily as $color)
                            @if($color->status == 'Enable')
                                <option >{{ $color->name }}</option>
                            @else
                                <option disabled>{{ $color->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    @if ($errors->has('colorfamily'))
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-red">{{ $errors->first('colorfamily') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" value={{old('name')}}>
                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('name') }}</strong>
                    </span>
                @endif
                </div>
                <div class="form-group{{ $errors->has('hex') ? ' has-error' : '' }} has-feedback">
                    <label for="hex">Hex</label>
                    <div class="input-group my-colorpicker2">
                        <input type="text" class="form-control" name="hex" value={{old('hex')}}>
                        <div class="input-group-addon">
                            <i></i>
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
                    <input type="file" class="form-control" name="file" value={{old('file')}}>
                    @if ($errors->has('file'))
                        <span class="invalid-feedback" role="alert">
                        <strong class="text-red">{{ $errors->first('file') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                <label for="status">Status</label>
                <select class="form-control" name="status" value={{old('status')}}>
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