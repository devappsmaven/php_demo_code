@extends('layouts.admin')
@section('title','Shirt Colors Details')
@section('pagename','Shirt Colors Details')
@section('menuname','Shirt Colors Details')
@section('content')
    
<div class="row">
    <div class="col-md-4">              
    </div>
    <div class="col-md-4">
      <div class="box box-widget widget-user">
        <div class="widget-user-header bg-aqua-active">
            <h3 class="widget-user-username">{{$shirtcolor->name}}</h3>
        </div>
        <div class="widget-user-image">
          @if($shirtcolor->file)
            <img class="img-circle" src="{{asset('img/Color_Images')}}{{'/'}}{{$shirtcolor->file}}">
          @else
            <div style="border-radius: 50%; background-color: {{$shirtcolor->hex}}; width: 90px; height: 90px; border: 1px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px;">
            </div>
          @endif
        </div>
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-4 border-right">
              <div class="description-block">
                <h5 class="description-header">order</h5>
                <span class="description-text">{{$shirtcolor->order}}</span>
              </div>
            </div>
            <div class="col-sm-4 border-right">
              <div class="description-block">
                <h5 class="description-header">hex</h5>
                <span class="description-text">{{$shirtcolor->hex}}</span>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="description-block">
                <h5 class="description-header">Status</h5>
                <span class="description-text">{{$shirtcolor->status}}</span>
              </div>
            </div>
          </div>
        </div>
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-8">
              <div class="btn-group">
                <div class="row">
                  <div class="col-md-4">
                    @can('shirtcolors.edit')
                      <a href="{{route('shirtcolors.edit', $shirtcolor->id)}}" class="btn btn-sm btn-warning">Edit</a>
                    @endcan
                  </div>
                  <div class="col-md-4">
                      @can('shirtcolors.destroy')
                        <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('shirtcolors.destroy', $shirtcolor->id) !!}" data-id="{{$shirtcolor->id}}" data-token="{{ csrf_token() }}">Remove</a>
                      @endcan
                  </div>
                  <div class="col-md-4">
                    @can('shirtcolors.index')
                      <a type="button" class="btn btn-info" href="{{route('shirtcolors.index')}}" >Back to List</a>
                    @endcan
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">             
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
                    <h4>You Want You Sure Delete This Color?</h4>
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