@extends('layouts.admin')
@section('title','Tags Details')
@section('pagename','Tags Details')
@section('menuname','Tags Details')
@section('content')
    
<div class="row">
    <div class="col-md-4">              
    </div>
    <div class="col-md-4">
      <!-- Widget: user widget style 1 -->
      <div class="box box-widget widget-user">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-aqua-active">
          <h3 class="widget-user-username">{{$tag->name}}</h3>
        </div>
        <div class="widget-user-image">
        </div>
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-4">
              <div class="description-block">
                <h5 class="description-header">Status</h5>
                <span class="description-text">{{$tag->status}}</span>
              </div><!-- /.description-block -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div>
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-8">
              <div class="btn-group">
                <div class="row">
                  <div class="col-md-4">
                    @can('tags.edit')
                      <a href="{{route('tags.edit', $tag->id)}}" class="btn btn-sm btn-warning">Edit</a>
                    @endcan
                  </div>
                  <div class="col-md-4">
                      @can('tags.destroy')
                        <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('tags.destroy', $tag->id) !!}" data-id="{{$tag->id}}" data-token="{{ csrf_token() }}">Remove</a>
                      @endcan
                  </div>
                  <div class="col-md-4">
                    @can('tags.index')
                      <a type="button" class="btn btn-info" href="{{route('tags.index')}}" >Back to List</a>
                    @endcan
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2">
            </div>
          </div>
        </div>
      </div><!-- /.widget-user -->
    </div><!-- /.col -->
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