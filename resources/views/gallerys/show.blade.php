@extends('layouts.admin')
@section('title','Details Gallerys')
@section('pagename','Details Gallerys')
@section('menuname','Details Gallerys')
@section('content')
@include('common.alerts')  
<div class="container-fluid">
  <div class="row">
      <div class="col-sm-8">
          <div class="box box-primary">
              <div class="box-body">
                  <div class="box box-widget">
                    <div class="box-header with-border">
                      <div class="user-block">
                        <img class="img-circle" src="{{asset('img/profile')}}{{'/'}}{{$gallery->user->image}}" alt="author">
                        <span class="username"><a href="#">{{ $gallery->user->firstname }} {{ $gallery->user->lastname }}</a></span>
                        <span class="description">Created publicly - {{$gallery->created_at->diffForHumans()}}</span>
                      </div>
                    </div>
                    <div class="box-body">
                      <h3>{{ $gallery->title }}</h3>
                      <center><img class="img-responsive pad" src="{{asset('img/gallery')}}{{'/'}}{{$gallery->image}}" alt="Photo"></center>
                      <p>{!!$gallery->body!!}</p>
                      <button class="btn btn-default btn-xs" style="display:none"><i class="fa fa-share"></i> Share</button>
                      <button class="btn btn-default btn-xs" style="display:none"><i class="fa fa-thumbs-o-up"></i> Like</button>
                      <span class="pull-right text-muted">{{ count($gallery->comments) }} comments</span>
                    </div>
                    <div class="box-footer box-comments">
                      @foreach($gallery->comments as $comment)
                        <div class="box-comment">
                          <img class="img-circle img-sm" src="{{asset('img/profile')}}{{'/'}}{{$comment->user->image}}" alt="user image">
                          <div class="comment-text">
                            <span class="username">
                            {{$comment->user->firstname}} {{$comment->user->lastname}}
                              <span class="text-muted pull-right">{{$comment->created_at->diffForHumans()}}</span>
                            </span>
                            {{$comment->text}}
                          </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-sm-4">
          <div class="box box-primary">
              <div class="box-body">
                  <div class="form-group">
                      <label>Categories</label>
                    <p>
                      @foreach ($gallery->categories as $category)
                        <span class="label label-success">{{ $category->name }}</span>
                      @endforeach
                    </p>
                  </div>
                  <div class="form-group">
                      <label>Tags</label>
                        <p>
                          @foreach ($gallery->tags as $tag)
                            <span class="label label-info">{{ $tag->name }}</span>
                          @endforeach
                        </p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection