@extends('layouts.admin')
@section('title','Manage Fonts')
@section('pagename','Manage Fonts')
@section('menuname','Manage Fonts')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Fonts List</h3>
        @can('fonts.create')
        <a href="{{route('fonts.create')}}" class="btn-primary  btn-sm pull-right">
            Add Font
        </a>
    @endcan
    </div><!-- /.box-header -->
    <div class="box-body">
        <table id="fontstable" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>ID</th>
              <th>Display Name</th> 
              <th>Size</th> 
              <th>File</th> 
              <th>Category</th>    
              <th>Description</th>
              <th>Status</th>
              <th>Created At</th>
              <th>Last Update</th>
              <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fonts as $font)
                <tr>
                    <th scope="row">{{$font->id}}</th>
                    <td><font class="fonts"  face="{{ $font->name }}" size="{{ $font->size }}">{{$font->displayname}}</font></td>
                    <td>{{$font->size}}</td>
                    <td>{{$font->file}}</td>
                    <td>{{$font->category->name}}</td>
                    <td>{{$font->description}}</td>
                    <td>
                        @if($font->status == 'Enable')
                            <span class="label label-success">{{$font->status}}</span>
                        @endif
                        @if($font->status == 'Disable')
                            <span class="label label-danger">{{$font->status}}</span>
                        @endif
                    </td>
                    <td>{{$font->created_at->format('m/d/Y h:m:i')}}</td>
                    <td>{{$font->updated_at->format('m/d/Y h:m:i')}}</td>
                    <td>
                        <div class="btn-group">
                            @can('fonts.show')
                                <a href="{{route('fonts.show', $font->id)}}" class="btn btn-sm btn-info">View</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('fonts.edit')
                                <a href="{{route('fonts.edit', $font->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('fonts.destroy')
                                <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('fonts.destroy', $font->id) !!}" data-id="{{$font->id}}" data-token="{{ csrf_token() }}">Remove</a>
                            @endcan
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Display Name</th> 
                <th>Size</th> 
                <th>File</th> 
                <th>Category</th>    
                <th>Description</th>
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
