@extends('layouts.admin')
@section('title','Manage Templates')
@section('pagename','Manage Templates')
@section('menuname','Manage Templates')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Templates List</h3>
    </div>
    <div class="box-body">
        <center>
            <a class="btn btn-app approve_all" style="cursor:pointer; background-color: #32a7e0; border-color: #32a7e0; color: white;" data-toggle="modal" data-target="#approve-all-width-modal" data-url="{!! URL::route('templates.approveall') !!}" data-token="{{ csrf_token() }}">
                <span class="badge bg-teal" id="counttemplateapprovedselected">0</span>
                <i class="fa fa-inbox"></i> Approve Selected Designs
            </a>
            <a class="btn btn-app reject_all" style="cursor:pointer; background-color: #f39c12; border-color: #f39c12; color: white;" data-toggle="modal" data-target="#reject-all-width-modal" data-url="{!! URL::route('templates.rejectall') !!}" data-token="{{ csrf_token() }}">
                <span class="badge" id="counttemplaterejectedselected">0</span>
                <i class="fa fa-inbox"></i> Reject Selected Designs
            </a>
            <a class="btn btn-app delete_all" style="cursor:pointer; background-color: #dd4b39; border-color: #dd4b39; color: white;" data-toggle="modal" data-target="#delete-all-width-modal" data-url="{!! URL::route('templates.deleteall') !!}" data-token="{{ csrf_token() }}">
                <span class="badge bg-teal" id="counttemplateselected">0</span>
                <i class="fa fa-inbox"></i> Delete Selected Templates
            </a>
        </center>
        <table id="templatestable" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th><input type="checkbox" class="checkbox-all-template" name="checkbox-all-template" id="checkbox-all-template"></th>
              <th>ID</th>
              <th>Title</th>  
              <th>Image</th> 
              <th>Category</th>
              <th>SubCategory</th>   
              <th>Author</th>
              <th>Editable</th>
              <th>Status</th>
              <th>Created At</th>
              <th>Last Update</th>
              <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($templates as $template)
                <tr>
                    <th scope="row"><input type="checkbox" class="checkbox-template" name="{{$template->title}}" id="{{$template->id}}"></th>
                    <th scope="row">{{$template->id}}</th>
                    <td>{{$template->title}}</td>
                    <td><img src="{{asset('designs/template')}}{{'/'}}{{$template->category->slug}}{{'/'}}{{$template->subcategory->slug}}{{'/'}}{{$template->title}}_{{$template->defaultside}}.png" style="width:250px; height:auto;"></td>
                    <td>{{$template->category->name}}</td>
                    <td>{{$template->subcategory->name}}</td>
                    <td>{{$template->user->firstname}} {{$template->user->lastname}}</td>
                    <td align="center">
                        @if($template->editable)
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
                        @if($template->status == 'Created')
                            <span class="label label-success">{{$template->status}}</span>
                        @endif
                        @if($template->status == 'Pending')
                            <span class="label label-warning">{{$template->status}}</span>
                        @endif
                        @if($template->status == 'Approved')
                            <span class="label label-info">{{$template->status}}</span>
                        @endif
                        @if($template->status == 'Rejected')
                            <span class="label label-danger">{{$template->status}}</span>
                        @endif
                    </td>
                    <td>{{$template->created_at->format('m/d/Y h:m:i')}}</td>
                    <td>{{$template->updated_at->format('m/d/Y h:m:i')}}</td>
                    <td>
                        <div class="btn-group">
                            @can('templates.show')
                                <a href="{{route('templates.show', $template->id)}}" class="btn btn-sm btn-info">View</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('templates.edit')
                            <a href="javascript:void(0)" onclick="editfromadmintemplate('{{$template->id}}');" class="btn btn-sm btn-success">Edit</a>
                            @endcan
                        </div>
                        <div class="btn-group" style="display:none;">
                            @can('templates.destroy')
                                <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('templates.destroy', $template->id) !!}" data-id="{{$template->id}}" data-token="{{ csrf_token() }}">Remove</a>
                            @endcan
                        </div>
                        @if($template->status == 'Pending')
                            <div class="btn-group">
                                @can('templates.approve')
                                    <a class="btn btn-default btn-sm waves-effect waves-light approve" data-toggle="modal" data-target="#approve-modal" data-url="{!! URL::route('templates.approve', $template->id) !!}" data-id="{{$template->id}}" data-token="{{ csrf_token() }}">Approve</a>
                                @endcan
                            </div>
                        @endif
                        @if($template->status == 'Pending')
                            <div class="btn-group">
                                @can('templates.reject')
                                    <a class="btn btn-warning btn-sm waves-effect waves-light reject" data-toggle="modal" data-target="#reject-modal" data-url="{!! URL::route('templates.reject', $template->id) !!}" data-id="{{$template->id}}" data-token="{{ csrf_token() }}">Reject</a>
                                @endcan
                            </div>
                        @endif
                        @if($template->status == 'Pending')
                            <div class="btn-group">
                                @can('templates.destroy')
                                    <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('templates.destroy', $template->id) !!}" data-id="{{$template->id}}" data-token="{{ csrf_token() }}">Delete</a>
                                @endcan
                            </div>
                        @endif
                        <div class="btn-group">
                            @can('templates.downloadall')
                                <a href="{{route('templates.downloadall', $template->id)}}" class="btn btn-sm btn-primary">Download</a>
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

<form method="POST" class="approve-model">
    <div id="approve-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="approve-width-modalLabel">Approve Template Design</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Approve This Template Design?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light">Approve</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form method="POST" class="reject-model">
    <div id="reject-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="reject-width-modalLabel">reject Template Design</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure reject This Template Design?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light">reject</button>
                </div>
            </div>
        </div>
    </div>
</form>
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
    <input type="hidden" id="templatesselected" name="templatesselected">
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
<form method="POST" class="approve-all-model">
    <div id="approve-all-width-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <input type="hidden" id="templatesapprovedselected" name="templatesapprovedselected">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
            <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Approved Record</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Approved All This Records?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect remove-data-from-approve-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-default waves-effect waves-light">Approve</button>
                </div>
            </div>
        </div>
    </div>
</form>
<form method="POST" class="reject-all-model">
    <div id="reject-all-width-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <input type="hidden" id="templatesrejectedselected" name="templatesrejectedselected">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
            <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Reject Record</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Reject All This Records?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect remove-data-from-reject-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning waves-effect waves-light">Reject</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
