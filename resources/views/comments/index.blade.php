@extends('layouts.admin')
@section('title','Manage Comments')
@section('pagename','Manage Comments')
@section('menuname','Manage Comments')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Comments List</h3>
    </div>
    <div class="box-body">
        <table id="commentstable" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>ID</th>
              <th>Autor</th>
              <th style="width:600px;">Comment</th>
              <th>In response to</th>
              <th>Status</th>
              <th>Submited On</th>
              <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comments as $comment)
                <tr>
                    <th scope="row">{{$comment->id}}</th>
                    <td>
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="{{asset('img/profile')}}{{'/'}}{{$comment->user->image}}" style="width:50px; height:auto;" class="img-circle"></br>
                            </div>
                            <div class="col-sm-9">
                               <span> {{$comment->user->firstname}} {{$comment->user->lastname}} </span>
                               <br>
                               <span> {{$comment->user->email}} </span>
                            </div>
                        </div>
                        
                    </td>
                    <td>{{$comment->text}}</td>
                    <td>
                        @if($comment->posts->count() > 0)
                            {{$comment->posts[0]->title}}
                        @elseif($comment->products->count() > 0)
                            {{$comment->products[0]->name}}
                        @elseif($comment->gallerys->count() > 0)
                            {{$comment->gallerys[0]->title}}
                        @else
                            pending
                        @endif
                    </td>
                    <td>
                        @if($comment->is_approved == 'Created')
                            <span class="label label-success">{{$comment->is_approved}}</span>
                        @endif
                        @if($comment->is_approved == 'Rejected')
                            <span class="label label-danger">{{$comment->is_approved}}</span>
                        @endif
                        @if($comment->is_approved == 'Waiting Approval')
                            <span class="label label-warning">{{$comment->is_approved}}</span>
                        @endif
                        @if($comment->is_approved == 'Approved')
                            <span class="label label-info">{{$comment->is_approved}}</span>
                        @endif
                    </td>
                    <td>{{$comment->created_at->format('m/d/Y h:m:i')}}</td>
                    <td>
                        <div class="btn-group">
                            @can('comments.show')
                                <a href="{{route('comments.show', $comment->id)}}" class="btn btn-sm btn-info">View</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('comments.edit')
                                <a href="{{route('comments.edit', $comment->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('comments.destroy')
                                <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('comments.destroy', $comment->id) !!}" data-id="{{$comment->id}}" data-token="{{ csrf_token() }}">Remove</a>
                            @endcan
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Autor</th>
                <th>Comment</th>
                <th>In response to</th>
                <th>Status</th>
                <th>Submited On</th>
                <th>Operations</th>
            </tr>
        </tfoot>
        </table>
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


