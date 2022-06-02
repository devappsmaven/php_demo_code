@extends('layouts.admin')
@section('title','Manage Sides')
@section('pagename','Manage Sides')
@section('menuname','Manage Sides')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Sides List</h3>
        @can('sides.create')
        <a href="{{route('sides.create')}}" class="btn-primary  btn-sm pull-right">
            Add Sides
        </a>
    @endcan
    </div><!-- /.box-header -->
    <div class="box-body">
        <table id="sidestable" class="table table-bordered table-striped">
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
            @foreach ($sides as $side)
                <tr>
                    <th scope="row">{{$side->id}}</th>
                    <td>{{$side->name}}</td>
                    <!--<td>
                        @if($side->backgroundimage)
                            <img src="{{asset('img/side')}}{{'/'}}{{$side->backgroundimage}}" style="width:50px; height:auto;">
                        @endif
                    </td>-->
                    <td>
                        @if($side->status == 'Enable')
                            <span class="label label-success">{{$side->status}}</span>
                        @endif
                        @if($side->status == 'Disable')
                            <span class="label label-danger">{{$side->status}}</span>
                        @endif
                    </td>
                    <td>{{$side->created_at->format('m/d/Y h:m:i')}}</td>
                    <td>{{$side->updated_at->format('m/d/Y h:m:i')}}</td>
                    <td>
                        <div class="btn-group">
                            @can('sides.show')
                                <a href="{{route('sides.show', $side->id)}}" class="btn btn-sm btn-info">View</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('sides.edit')
                                <a href="{{route('sides.edit', $side->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('sides.destroy')
                                <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('sides.destroy', $side->id) !!}" data-id="{{$side->id}}" data-token="{{ csrf_token() }}">Remove</a>
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


