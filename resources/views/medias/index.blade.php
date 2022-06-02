@extends('layouts.admin')
@section('title','Manage Media')
@section('pagename','Manage Media')
@section('menuname','Manage Media')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Media</h3>
        @can('medias.create')
        <a href="{{route('medias.create')}}" class="btn-primary  btn-sm pull-right">
            Add New
        </a>
    @endcan
    </div><!-- /.box-header -->
    <div class="box-body">
        <table id="mediastable" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>ID</th>
              <th>Image</th>
              <th>File</th>
              <th>Author</th>
              <th>Uploaded To</th>
              <th>Date</th>
              <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medias as $media)
                <tr>
                    <th scope="row">{{$media->id}}</th>
                    <td><img src="{{asset('img')}}{{'/'}}{{ $media->url }}{{'/'}}{{ $media->file }}" style="width:50px; height:auto;"></td>
                    <td>{{$media->file}}</td>
                    <td>{{$media->user->firstname}} {{$media->user->lastname}}</td>
                    <td>{{$media->uploaded_to}}</td>
                    <td>{{$media->created_at->format('m/d/Y h:m:i')}}</td>
                    <td>
                        <div class="btn-group">
                            @can('medias.show')
                                <a href="{{route('medias.show', $media->id)}}" class="btn btn-sm btn-info">View</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('medias.edit')
                                <a href="{{route('medias.edit', $media->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('medias.destroy')
                                <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('medias.destroy', $media->id) !!}" data-id="{{$media->id}}" data-token="{{ csrf_token() }}">Remove</a>
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
                <th>File</th>
                <th>Author</th>
                <th>Uploaded To</th>
                <th>Date</th>
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


