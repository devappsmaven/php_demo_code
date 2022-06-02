@extends('layouts.admin')
@section('title','Details Posts')
@section('pagename','Details Posts')
@section('menuname','Details Posts')
@section('content')
@include('common.alerts')  
<div class="container-fluid">
  <div class="row">
      <div class="col-md-3">
        
      </div>
      <div class="col-md-6">
        <div class="box box-widget widget-user">
          <div class="widget-user-header bg-aqua-active">
            <h3 class="widget-user-username">{{ $comment->user->firstname }} {{ $comment->user->lastname }}</h3>
          </div>
          <div class="widget-user-image">
            <img class="img-circle" src="{{asset('img/profile')}}{{'/'}}{{$comment->user->image}}" alt="User Avatar">
          </div>
          <div class="box-footer">
            <div class="row">
              <div class="col-sm-4 border-right">
                <div class="description-block">
                  <h5 class="description-header">Status</h5>
                  <span class="description-text">{{$comment->is_approved}}</span>
                </div>
              </div>
              <div class="col-sm-4 border-right">
                <div class="description-block">
                  <h5 class="description-header">In Response to</h5>
                  <span class="description-text">{{$comment->posts[0]->title}}</span>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="description-block">
                  <h5 class="description-header">Submited On</h5>
                  <span class="description-text">{{ $comment->created_at->diffForHumans() }}</span>
                </div>
              </div>
            </div>
          </div>
          <div class="box-footer">
              <div class="row">
                  <div class="description-block">
                      <h5 class="description-header">Comment</h5>
                    <p style="text-align:left !important; padding:20px">{{ $comment->text }}</p>
                  </div>
              </div>
            </div>
        </div>
      </div>
      <div class="col-md-3">
        
      </div>
    </div>
</div>

@endsection