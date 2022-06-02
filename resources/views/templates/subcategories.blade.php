@extends('layouts.admin')
@section('title','Manage SubCategories')
@section('pagename','Manage SubCategories')
@section('menuname','Manage SubCategories')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">SubCategories List</h3>
        @can('templates.createsubcategories')
        <a href="{{route('templates.createsubcategories')}}" class="btn-primary  btn-sm pull-right">
            Add SubCategories
        </a>
    @endcan
    </div><!-- /.box-header -->
    <div class="box-body">
        <table id="subcategoriestable" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>ID</th>
              <td>Name</td> 
              <td>Category</td>    
              <th>Description</th>
              <th>Status</th>
              <th>Created At</th>
              <th>Last Update</th>
              <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subcategories as $subcategory)
                <tr>
                    <th scope="row">{{$subcategory->id}}</th>
                    <td>{{$subcategory->name}}</td>
                    <td>{{$subcategory->category->name}}</td>
                    <td>{{$subcategory->description}}</td>
                    <td>
                        @if($subcategory->status == 'Enable')
                            <span class="label label-success">{{$subcategory->status}}</span>
                        @endif
                        @if($subcategory->status == 'Pending')
                            <span class="label label-warning">{{$subcategory->status}}</span>
                        @endif
                        @if($subcategory->status == 'Disable')
                            <span class="label label-danger">{{$subcategory->status}}</span>
                        @endif
                    </td>
                    <td>{{$subcategory->created_at->format('m/d/Y h:m:i')}}</td>
                    <td>{{$subcategory->updated_at->format('m/d/Y h:m:i')}}</td>
                    <td>
                        <div class="btn-group">
                            @can('templates.showsubcategories')
                                <a href="{{route('templates.showsubcategories', $subcategory->id)}}" class="btn btn-sm btn-info">View</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('templates.editsubcategories')
                                <a href="{{route('templates.editsubcategories', $subcategory->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('templates.destroysubcategories')
                                <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('templates.destroysubcategories', $subcategory->id) !!}" data-id="{{$subcategory->id}}" data-token="{{ csrf_token() }}">Remove</a>
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
              <td>Category</td>    
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
