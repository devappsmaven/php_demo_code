@extends('layouts.admin')
@section('title','Manage Fonts Categories')
@section('pagename','Manage Fonts Categories')
@section('menuname','Manage Fonts Categories')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Fonts Categories List</h3>
        @can('fontscategories.create')
        <a href="{{route('fontscategories.create')}}" class="btn-primary  btn-sm pull-right">
            Add Fonts Categories
        </a>
    @endcan
    </div><!-- /.box-header -->
    <div class="box-body">
        <table id="fontscategoriestable" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>    
              <th>Description</th>
              <th>Status</th>
              <th>Created At</th>
              <th>Last Update</th>
              <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fontscategories as $fontcategory)
                <tr>
                    <th scope="row">{{$fontcategory->id}}</th>
                    <td>{{$fontcategory->name}}</td>
                    <td>{{$fontcategory->description}}</td>
                    <td>
                        @if($fontcategory->status == 'Enable')
                            <span class="label label-success">{{$fontcategory->status}}</span>
                        @endif
                        @if($fontcategory->status == 'Disable')
                            <span class="label label-danger">{{$fontcategory->status}}</span>
                        @endif
                    </td>
                    <td>{{$fontcategory->created_at->format('m/d/Y h:m:i')}}</td>
                    <td>{{$fontcategory->updated_at->format('m/d/Y h:m:i')}}</td>
                    <td>
                        <div class="btn-group">
                            @can('fontscategories.show')
                                <a href="{{route('fontscategories.show', $fontcategory->id)}}" class="btn btn-sm btn-info">View</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('fontscategories.edit')
                                <a href="{{route('fontscategories.edit', $fontcategory->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('fontscategories.destroy')
                                <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('fontscategories.destroy', $fontcategory->id) !!}" data-id="{{$fontcategory->id}}" data-token="{{ csrf_token() }}">Remove</a>
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
