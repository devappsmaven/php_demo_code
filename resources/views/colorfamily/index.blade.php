@extends('layouts.admin')
@section('title','Manage Color Family')
@section('pagename','Manage Color Family')
@section('menuname','Manage Color Family')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Color Family List</h3>
        @can('colorfamily.create')
        <a href="{{route('colorfamily.create')}}" class="btn-primary  btn-sm pull-right">
            Add Color Family
        </a>
    @endcan
    </div><!-- /.box-header -->
    <div class="box-body">
        <table id="colorfamilytable" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>ID</th>
              <td>Name</td>    
              <th>Status</th>
              <th>Created At</th>
              <th>Last Update</th>
              <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($colorfamily as $color)
                <tr>
                    <th scope="row">{{$color->id}}</th>
                    <td>{{$color->name}}</td>
                    <td>
                        @if($color->status == 'Enable')
                            <span class="label label-success">{{$color->status}}</span>
                        @endif
                        @if($color->status == 'Disable')
                            <span class="label label-danger">{{$color->status}}</span>
                        @endif
                    </td>
                    <td>{{$color->created_at->format('m/d/Y h:m:i')}}</td>
                    <td>{{$color->updated_at->format('m/d/Y h:m:i')}}</td>
                    <td>
                        <div class="btn-group">
                            @can('colorfamily.show')
                                <a href="{{route('colorfamily.show', $color->id)}}" class="btn btn-sm btn-info">View</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('colorfamily.edit')
                                <a href="{{route('colorfamily.edit', $color->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('colorfamily.destroy')
                                <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('colorfamily.destroy', $color->id) !!}" data-id="{{$color->id}}" data-token="{{ csrf_token() }}">Remove</a>
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
</div><!-- /.box -->

<form method="POST" class="remove-record-model">
    <div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
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
                    <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger waves-effect waves-light">Delete</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
