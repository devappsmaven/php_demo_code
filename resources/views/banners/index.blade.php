@extends('layouts.admin')
@section('title','Manage Banners')
@section('pagename','Manage Banners')
@section('menuname','Manage Banners')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Banners List</h3>
        @can('banners.create')
        <a href="{{route('banners.create')}}" class="btn-primary  btn-sm pull-right">
            Add Banners
        </a>
    @endcan
    </div><!-- /.box-header -->
    <div class="box-body">
        <table id="bannerstable" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>ID</th>
              <td>Name</td>    
              <th>Description</th>
              <th>Image</th>
              <th>Link</th>
              <th>Status</th>
              <th>Created At</th>
              <th>Last Update</th>
              <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banners as $banner)
                <tr>
                    <th scope="row">{{$banner->id}}</th>
                    <td>{{$banner->title}}</td>
                    <td>{{$banner->description}}</td>
                    <td>
                        @if($banner->filename)
                            <img src="{{asset('img/banner')}}{{'/'}}{{$banner->filename}}" style="width:50px; height:auto;">
                        @endif
                    </td>
                    <td>{{$banner->link}}</td>
                    <td>
                        @if($banner->status == 'Enable')
                            <span class="label label-success">{{$banner->status}}</span>
                        @endif
                        @if($banner->status == 'Disable')
                            <span class="label label-danger">{{$banner->status}}</span>
                        @endif
                    </td>
                    <td>{{$banner->created_at->format('m/d/Y h:m:i')}}</td>
                    <td>{{$banner->updated_at->format('m/d/Y h:m:i')}}</td>
                    <td>
                        <div class="btn-group">
                            @can('banners.show')
                                <a href="{{route('banners.show', $banner->id)}}" class="btn btn-sm btn-info">View</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('banners.edit')
                                <a href="{{route('banners.edit', $banner->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('banners.destroy')
                                <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('banners.destroy', $banner->id) !!}" data-id="{{$banner->id}}" data-token="{{ csrf_token() }}">Remove</a>
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
              <th>Description</th>
              <th>Image</th>
              <th>Link</th>
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


