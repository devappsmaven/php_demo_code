@extends('layouts.admin')
@section('title','Manage Designs')
@section('pagename','Manage Designs')
@section('menuname','Manage Designs')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Designs List</h3>
    </div>
    <div class="box-body">
        <center>
            <a class="btn btn-app delete_all" style="cursor:pointer; background-color: #32a7e0; border-color: #32a7e0; color: white;" data-toggle="modal" data-target="#delete-all-width-modal" data-url="{!! URL::route('designs.deleteall') !!}" data-token="{{ csrf_token() }}">
                <span class="badge bg-teal" id="countdesignselected">0</span>
                <i class="fa fa-inbox"></i> Delete Selected Designs
            </a>
        </center>
        <table id="designstable" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th><input type="checkbox" class="checkbox-all-design" name="checkbox-all-design" id="checkbox-all-design"></th>
              <th>Title</th>  
              <th>Image</th> 
              <th>Category</th>
              <th>SubCategory</th>   
              <th>Author</th>
              <th>Type</th>
              <th>Editable</th>
              <th>Status</th>
              <th>Created At</th>
              <th>Last Update</th>
              <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($designs as $design)
                <tr>
                    <th scope="row"><input type="checkbox" class="checkbox-design" name="{{$design->title}}" id="{{$design->id}}"></th>
                    <td>{{$design->title}}</td>
                    <td><img src="{{asset('designs/designstudio')}}{{'/'}}{{$design->category->name}}{{'/'}}{{$design->subcategory->name}}{{'/'}}{{$design->title}}_front.png" style="width:250px; height:auto;"></td>
                    <td>{{$design->category->name}}</td>
                    <td>{{$design->subcategory->name}}</td>
                    <td>{{$design->user->email}}</td>
                    <td>{{$design->type}}</td>
                    <td align="center">
                        @if($design->editable)
                        <div class="form-group">
                            <label>
                              <input type="checkbox" class="minimal" disabled checked>
                            </label>
                          </div>
                        @else
                        <div class="form-group">
                            <label>
                              <input type="checkbox" class="minimal" disabled>
                            </label>
                          </div>
                        @endif
                    </td>
                    <td>
                        @if($design->status == 'Created')
                            <span class="label label-success">{{$design->status}}</span>
                        @endif
                        @if($design->status == 'Waiting Approval')
                            <span class="label label-warning">{{$design->status}}</span>
                        @endif
                        @if($design->status == 'Approved')
                            <span class="label label-info">{{$design->status}}</span>
                        @endif
                        @if($design->status == 'Rejected')
                            <span class="label label-danger">{{$design->status}}</span>
                        @endif
                    </td>
                    <td>{{$design->created_at->format('m/d/Y h:m:i')}}</td>
                    <td>{{$design->updated_at->format('m/d/Y h:m:i')}}</td>
                    <td>
                        <div class="btn-group">
                            @can('designs.show')
                                <a href="{{route('designs.show', $design->id)}}" class="btn btn-sm btn-info">Details</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('designs.edit')
                                <a href="javascript:void(0)" onclick="editfromadmin('{{$design->id}}');" class="btn btn-sm btn-warning">Edit</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('designs.destroy')
                                <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('designs.destroy', $design->id) !!}" data-id="{{$design->id}}" data-token="{{ csrf_token() }}">Delete</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('designs.downloadall')
                                <a href="{{route('designs.downloadall', $design->id)}}" class="btn btn-sm btn-default">Download</a>
                            @endcan
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Title</th>  
                <th>Image</th> 
                <th>Category</th>
                <th>SubCategory</th>   
                <th>Author</th>
                <th>Type</th>
                <th>Editable</th>
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
<form method="POST" class="delete-all-model">
    <div id="delete-all-width-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <input type="hidden" id="designsselected" name="designsselected">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
            <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Delete Record</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Delete All This Records?</h4>
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
