@extends('layouts.admin')
@section('title','Manage Posts')
@section('pagename','Manage Posts')
@section('menuname','Manage Posts')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Posts List</h3>
        @can('posts.create')
        <a href="{{route('posts.create')}}" class="btn-primary  btn-sm pull-right">
            Add Posts
        </a>
    @endcan
    </div><!-- /.box-header -->
    <div class="box-body">
        <table id="poststable" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>    
              <th>Autor</th>
              <th>Image</th>
              <th>Views</th>
              <th>Favorite</th>
              <th>Comment</th>
              <th>Status</th>
              <th>Created At</th>
              <th>Last Update</th>
              <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->user->firstname}} {{$post->user->lastname}}</td>
                    <td><img class="img-responsive" src="{{asset('img/blog')}}{{'/'}}{{$post->image}}" alt="Photo" style="max-width:50px;"></td>
                    <td>{{$post->view_count}}</td>
                    <td>{{$post->favorite_to_users->count()}}</td>
                    <td>{{$post->comments->count()}}</td>
                    <td>
                        @if($post->is_approved == 'Created')
                            <span class="label label-success">{{$post->is_approved}}</span>
                        @endif
                        @if($post->is_approved == 'Rejected')
                            <span class="label label-danger">{{$post->is_approved}}</span>
                        @endif
                        @if($post->is_approved == 'Waiting Approval')
                            <span class="label label-warning">{{$post->is_approved}}</span>
                        @endif
                        @if($post->is_approved == 'Approved')
                            <span class="label label-info">{{$post->is_approved}}</span>
                        @endif
                    </td>
                    <td>{{$post->created_at->format('m/d/Y h:m:i')}}</td>
                    <td>{{$post->updated_at->format('m/d/Y h:m:i')}}</td>
                    <td>
                        @if($post->is_approved == 'Waiting Approval')
                            <div class="btn-group">
                                @can('posts.approve')
                                    <a class="btn btn-sm btn-success approve" style="cursor:pointer;" data-toggle="modal" data-target="#approve-width-modal" data-url="{!! URL::route('posts.approve',$post->id) !!}" data-id="{{$post->id}}" data-token="{{ csrf_token() }}">
                                        <i class="fa fa-check"></i>Approve
                                    </a>
                                @endcan
                            </div>
                        @endif
                        <div class="btn-group">
                            @can('posts.show')
                                @if($post->user->id == Auth::user()->id || Auth::user()->id == 1)
                                    <a href="{{route('posts.show', $post->id)}}" class="btn btn-sm btn-info">View</a>
                                @endif
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('posts.edit')
                                @if($post->user->id == Auth::user()->id || Auth::user()->id == 1)
                                    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                @endif
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('posts.destroy')
                                @if($post->user->id == Auth::user()->id || Auth::user()->id == 1)
                                    <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('posts.destroy', $post->id) !!}" data-id="{{$post->id}}" data-token="{{ csrf_token() }}">Remove</a>
                                @endif
                            @endcan
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Title</th>    
                <th>Autor</th>
                <th>Image</th>
                <th>Views</th>
                <th>Favorite</th>
                <th>Comment</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Last Update</th>
                <th>Operations</th>
            </tr>
        </tfoot>
        </table>
    </div><!-- /.box-body -->
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

<form method="POST" class="approve-to-model">
        <div id="approve-width-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" style="width:55%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="custom-width-modalLabel">Assign Order To User</h4>
                    </div>
                    <div class="modal-body">
                        <h4>You Want You Sure Change The Status Of This Post?</h4>
                        <select class="form-control" id="is_approved" name="is_approved">
                            <option>Created</option>
                            <option selected>Waiting Approval</option>
                            <option>Rejected</option>
                            <option>Approved</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection


