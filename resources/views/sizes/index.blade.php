@extends('layouts.admin')
@section('title','Manage Sizes')
@section('pagename','Manage Sizes')
@section('menuname','Manage Sizes')
@section('content')
@include('common.alerts')   

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Sizes List</h3>
        @can('sizes.create')
            <a href="{{route('sizes.create')}}" class="btn-primary  btn-sm pull-right">
                Add Sizes
            </a>
        @endcan
    </div><!-- /.box-header -->
    <div class="box-body">
        <table id="sizestable" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>    
              <th>Orden</th>
              <th>Status</th>
              <th>Created At</th>
              <th>Last Update</th>
              <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sizes as $size)
                <tr>
                    <th scope="row">{{$size->id}}</th>
                    <td>{{$size->name}}</td>
                    <td>{{$size->orden}}</td>
                    <td>
                        @if($size->status == 'Enable')
                            <span class="label label-success">{{$size->status}}</span>
                        @endif
                        @if($size->status == 'Disable')
                            <span class="label label-danger">{{$size->status}}</span>
                        @endif
                    </td>
                    <td>{{$size->created_at->format('m/d/Y h:m:i')}}</td>
                    <td>{{$size->updated_at->format('m/d/Y h:m:i')}}</td>
                    <td>
                        <div class="btn-group">
                            @can('sizes.show')
                                <a href="{{route('sizes.show', $size->id)}}" class="btn btn-sm btn-info">View</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('sizes.edit')
                                <a href="{{route('sizes.edit', $size->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('sizes.destroy')
                                <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('sizes.destroy', $size->id) !!}" data-id="{{$size->id}}" data-token="{{ csrf_token() }}">Remove</a>
                            @endcan
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
              <th>ID</th>
              <th>Name</th>    
              <th>Orden</th>
              <th>Status</th>
              <th>Created At</th>
              <th>Last Update</th>
              <th>Operations</th>
            </tr>
        </tfoot>
        </table>

        
    </div><!-- /.box-body -->
</div><!-- /.box -->
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
