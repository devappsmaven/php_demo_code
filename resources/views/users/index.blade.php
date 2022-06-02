@extends('layouts.admin')
@section('title','Manage Users')
@section('pagename','Manage Users')
@section('menuname','Manage Users')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Users List</h3>
        @can('users.create')
        <a href="{{route('users.create')}}" class="btn-primary  btn-sm pull-right">
            Add User
        </a>
    @endcan
    </div><!-- /.box-header -->
    <div class="box-body">
        <table id="userstable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>    
                <th>FirstName</th>
                <th>LastName</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Birthday</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Last Update</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>
                        <img src="{{asset('img/profile')}}{{'/'}}{{$user->image}}" style="width:50px; height:auto;" class="img-circle"></br>
                        @if($user->isOnline())
                            <i class="fa fa-circle text-success"><span> Online</span>
                        @else
                            <i class="fa fa-circle text-danger"><span> Offline</span>
                        @endif
                    </td>
                    <td>{{$user->firstname}}</td>
                    <td>{{$user->lastname}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>@if($user->birthday){{$user->birthday->format('m/d/Y')}}@endif</td>
                    @if($user->status == 'Enable')
                        <td><span class="label label-success">{{ $user->status }}</span></td>
                    @else
                        <td><span class="label label-danger">{{ $user->status }}</span></td>
                    @endif
                    <td>{{$user->created_at->format('m/d/Y h:m:i')}}</td>
                    <td>{{$user->updated_at->format('m/d/Y h:m:i')}}</td>
                    <td>   
                        <div class="btn-group">
                            @can('users.show')
                                <a href="{{route('users.show', $user->id)}}" class="btn btn-sm btn-info">View</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('users.edit')
                                <a href="{{route('users.edit', $user->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('users.destroy')
                            <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('users.destroy', $user->id) !!}" data-id="{{$user->id}}" data-token="{{ csrf_token() }}">Remove</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('associates.resetpassword')
                            <a class="btn btn-success btn-sm waves-effect waves-light reset-password" data-toggle="modal" data-target="#reset-width-modal" data-url="{!! URL::route('associates.resetpassword', $user->id) !!}" data-id="{{$user->id}}" data-token="{{ csrf_token() }}">Reset Password</a>
                            @endcan
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Image</th>    
                <th>FirstName</th>
                <th>LastName</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Birthday</th>
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
<form method="POST" class="reset-password-model">
    <div id="reset-width-modal" class="modal modal-danger fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Reset Password</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Reset The Password Of This User?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger waves-effect waves-light">Reset</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
