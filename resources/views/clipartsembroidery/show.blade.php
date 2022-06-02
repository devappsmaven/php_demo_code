@extends('layouts.admin')
@section('title','Clipart Embroidery Details')
@section('pagename','Clipart Embroidery Details')
@section('menuname','Clipart Embroidery Details')
@section('content')
@include('common.alerts')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Clipart Embroidery Info({{ $clipartembroidery->type}})</h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-3">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive" src="{{asset('img/clipart-embroidery')}}{{'/'}}{{$clipartembroidery->categoryembroidery->slug}}{{'/'}}{{$clipartembroidery->subcategoryembroidery->slug}}{{'/'}}{{$clipartembroidery->filename}}" alt="User profile picture">
                        <h3 class="profile-username text-center">{{ $clipartembroidery->title }}</h3>
                        <p class="text-muted text-center">{{ $clipartembroidery->categoryembroidery->title }} / {{ $clipartembroidery->subcategoryembroidery->title }}</p>
                        <div class="row">
                            <div class="col-sm-6 border-right">
                                <div class="description-block">
                                    <div class="btn-group">
                                        @can('clipartsembroidery.index')
                                            <a href="{{route('clipartsembroidery.index', [$clipartembroidery->categoryembroidery->id, $clipartembroidery->subcategoryembroidery->id])}}" class="btn btn-sm btn-info">back to subcategories</a>
                                        @endcan
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 border-right">
                                <div class="description-block">
                                    @can('clipartsembroidery.edit')
                                        <a href="{{route('clipartsembroidery.edit', $clipartembroidery->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                    @endcan
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="description-block">
                                    <div class="btn-group">
                                        @can('clipartsembroidery.destroy')
                                        <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('clipartsembroidery.destroy', $clipartembroidery->id) !!}" data-id="{{$clipartembroidery->id}}" data-token="{{ csrf_token() }}">Remove</a>
                                        @endcan
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-body">
                        <strong><i class="fa fa-pencil margin-r-5"></i> Color Editable</strong>
                        <div class="input-group">                                
                                <span class="input-group-addon">
                                <input type="checkbox" name="editable" id="editable"  {{ $clipartembroidery->editable ? 'checked' : '' }} disabled>
                                </span>
                            <input type="text" class="form-control" name="editabletext" id="editabletext" value="{{ $clipartembroidery->editable ? 'Editable' : 'No Editable' }}" disabled>
                        </div>
                        <hr>
                        <div class="form-group{{ $errors->has('numbercolors') ? ' has-error' : '' }} has-feedback">
                            <label for="numbercolors">Number Colors</label>
                                <select class="form-control" name="numbercolors" disabled>
                                        @if($clipartembroidery->numbercolors == 1)
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">Full Color</option>
                                        @elseif($clipartembroidery->numbercolors == 2)
                                            <option value="1">1</option>
                                            <option value="2" selected>2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">Full Color</option>
                                        @elseif($clipartembroidery->numbercolors == 3)
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3" selected>3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">Full Color</option>
                                        @elseif($clipartembroidery->numbercolors == 4)
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4" selected>4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">Full Color</option>
                                        @elseif($clipartembroidery->numbercolors == 5)
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5" selected>5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">Full Color</option>
                                        @elseif($clipartembroidery->numbercolors == 6)
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6" selected>6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">Full Color</option>
                                        @elseif($clipartembroidery->numbercolors == 7)
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7" selected>7</option>
                                            <option value="8">8</option>
                                            <option value="9">Full Color</option>
                                        @elseif($clipartembroidery->numbercolors == 8)
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8" selected>8</option>
                                            <option value="9">Full Color</option>
                                        @elseif($clipartembroidery->numbercolors == 9)
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9" selected>Full Color</option>
                                        @endif
                                </select>
                                @if ($errors->has('numbercolors'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red">{{ $errors->first('numbercolors') }}</strong>
                                    </span>
                                @endif
                            </div> 
                        <hr>
                        <div class="form-group{{ $errors->has('colorlist') ? ' has-error' : '' }} has-feedback">
                            <label for="colorlist">Color List</label>
                            {!! Form::select('colorlist[]' , $inkcolor , $clipartembroidery->colors, ['class' => 'form-control selectcolors',"multiple", 'disabled']) !!}
                            @if ($errors->has('colorlist'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('colorlist') }}</strong>
                                </span>
                            @endif
                        </div>   
                        <hr>
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                            <label for="status">Status *</label>
                            <select class="form-control" name="status" disabled>
                                @if($clipartembroidery->status == 'Enable')
                                    <option selected>Enable</option>
                                    <option>Disable</option>
                                    @endif
                                    @if($clipartembroidery->status == 'Disable')
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
                    <!-- /.box-body -->
                    </div>
            </div>
        </div>
    </div>
</div>
<form method="POST" class="remove-record-model">
    <div id="custom-width-modal" class="modal modal-danger fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Delete Record</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Delete This Record?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger waves-effect waves-light">Delete</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
