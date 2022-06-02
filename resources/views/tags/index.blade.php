@extends('layouts.admin')
@section('title','Manage Tags')
@section('pagename','Manage Tags')
@section('menuname','Manage Tags')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Tags List</h3>
        @can('tags.create')
        <a href="{{route('tags.create')}}" class="btn-primary  btn-sm pull-right">
            Add Tags
        </a>
    @endcan
    </div><!-- /.box-header -->
    <div class="box-body">
        <table id="tagstable" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>ID</th>
              <td>Name</td>    
              <th>Post Count</th>
              <th>Status</th>
              <th>Created At</th>
              <th>Last Update</th>
              <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
                <tr>
                    <th scope="row">{{$tag->id}}</th>
                    <td>{{$tag->name}}</td>
                    <td>{{$tag->posts->count()}}</td>
                    <td>
                        @if($tag->status == 'Enable')
                            <span class="label label-success">{{$tag->status}}</span>
                        @endif
                        @if($tag->status == 'Disable')
                            <span class="label label-danger">{{$tag->status}}</span>
                        @endif
                    </td>
                    <td>{{$tag->created_at->format('m/d/Y h:m:i')}}</td>
                    <td>{{$tag->updated_at->format('m/d/Y h:m:i')}}</td>
                    <td>
                        <div class="btn-group">
                            @can('tags.show')
                                <a href="{{route('tags.show', $tag->id)}}" class="btn btn-sm btn-info">View</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('tags.edit')
                                <a href="{{route('tags.edit', $tag->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('tags.destroy')
                                <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('tags.destroy', $tag->id) !!}" data-id="{{$tag->id}}" data-token="{{ csrf_token() }}">Remove</a>
                            @endcan
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <td>Name</td>    
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
@endsection


