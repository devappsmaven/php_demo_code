@extends('layouts.admin')
@section('title','Manage Gallerys')
@section('pagename','Manage Gallerys')
@section('menuname','Manage Gallerys')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Gallerys List</h3>
        @can('gallerys.create')
        <a href="{{route('gallerys.create')}}" class="btn-primary  btn-sm pull-right">
            Add Gallerys
        </a>
    @endcan
    </div><!-- /.box-header -->
    <div class="box-body">
        <table id="gallerystable" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>    
              <th>Autor</th>
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
            @foreach ($gallerys as $gallery)
                <tr>
                    <th scope="row">{{$gallery->id}}</th>
                    <td>{{$gallery->title}}</td>
                    <td>{{$gallery->user->firstname}} {{$gallery->user->lastname}}</td>
                    <td>{{$gallery->view_count}}</td>
                    <td>{{$gallery->favorite_to_users->count()}}</td>
                    <td>{{$gallery->comments->count()}}</td>
                    <td>
                        @if($gallery->is_approved == 'Created')
                            <span class="label label-success">{{$gallery->is_approved}}</span>
                        @endif
                        @if($gallery->is_approved == 'Rejected')
                            <span class="label label-danger">{{$gallery->is_approved}}</span>
                        @endif
                        @if($gallery->is_approved == 'Waiting Approval')
                            <span class="label label-warning">{{$gallery->is_approved}}</span>
                        @endif
                        @if($gallery->is_approved == 'Approved')
                            <span class="label label-info">{{$gallery->is_approved}}</span>
                        @endif
                    </td>
                    <td>{{$gallery->created_at->format('m/d/Y h:m:i')}}</td>
                    <td>{{$gallery->updated_at->format('m/d/Y h:m:i')}}</td>
                    <td>
                        @if($gallery->is_approved == 'Waiting Approval')
                            <div class="btn-group">
                                @can('gallerys.approve')
                                    <a class="btn btn-sm btn-success approve" style="cursor:pointer;" data-toggle="modal" data-target="#approve-width-modal" data-url="{!! URL::route('gallerys.approve',$gallery->id) !!}" data-id="{{$gallery->id}}" data-token="{{ csrf_token() }}">
                                        <i class="fa fa-check"></i>Approve
                                    </a>
                                @endcan
                            </div>
                        @endif
                        <div class="btn-group">
                            @can('gallerys.show')
                                @if($gallery->user->id == Auth::user()->id || Auth::user()->id == 1)
                                    <a href="{{route('gallerys.show', $gallery->id)}}" class="btn btn-sm btn-info">View</a>
                                @endif
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('gallerys.edit')
                                @if($gallery->user->id == Auth::user()->id || Auth::user()->id == 1)
                                    <a href="{{route('gallerys.edit', $gallery->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                @endif
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('gallerys.destroy')
                                @if($gallery->user->id == Auth::user()->id || Auth::user()->id == 1)
                                    <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('gallerys.destroy', $gallery->id) !!}" data-id="{{$gallery->id}}" data-token="{{ csrf_token() }}">Remove</a>
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
                        <h4>You Want You Sure Change The Status Of This Gallery?</h4>
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


