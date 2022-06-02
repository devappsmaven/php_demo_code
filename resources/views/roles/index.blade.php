@extends('layouts.admin')
@section('title','Manage Roles')
@section('pagename','Manage Roles')
@section('menuname','Manage Roles')
@section('content')
@include('common.alerts')   
<div class="box">
        <div class="box-header">
            <h3 class="box-title">Roles List</h3>
            @can('roles.create')
            <a href="{{route('roles.create')}}" class="btn-primary  btn-sm pull-right">
                Add Role
            </a>
        @endcan
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="rolestable" class="table table-bordered table-striped">
            <thead>
                <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Description</th>
                        <th>Special</th>
                        <th>Created At</th>
                        <th>Last Update</th>
                        <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($roles as $role)
                    <tr>
                        <th scope="row">{{$role->id}}</th>
                        <td>{{$role->name}}</td>
                        <td>{{$role->slug}}</td>
                        <td>{{$role->description}}</td>
                        @if($role->special === "all-access")
                            <td><span class="label label-success">{{$role->special}}</span></td>
                        @elseif($role->special === "no-access")
                            <td><span class="label label-danger">{{$role->special}}</span></td>
                        @else
                            <td><span class="label label-warning">{{$role->special}}</span></td>
                        @endif
                        <td>
                            @if($role->created_at)
                                {{$role->created_at->format('m/d/Y h:m:i')}}
                            @endif
                        </td>
                        <td>
                            @if($role->updated_at)
                                {{$role->updated_at->format('m/d/Y h:m:i')}}
                            @endif
                        </td>
                        <td>
                            <div class="btn-group">
                                @can('roles.show')
                                    <a href="{{route('roles.show', $role->id)}}" class="btn btn-sm btn-info">View</a>
                                @endcan
                            </div>
                            <div class="btn-group">
                                @can('roles.edit')
                                    <a href="{{route('roles.edit', $role->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                @endcan
                            </div>
                            <div class="btn-group">
                                @can('roles.destroy')
                                    <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('roles.destroy', $role->id) !!}" data-id="{{$role->id}}" data-token="{{ csrf_token() }}">Remove</a>
                                @endcan
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Description</th>
                    <th>Special</th>
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
