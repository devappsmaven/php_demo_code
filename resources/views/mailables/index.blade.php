@extends('layouts.admin')
@section('title','Manage Mailables')
@section('pagename','Manage Mailables')
@section('menuname','Manage Mailables')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Mailables List</h3>
        @can('mailables.create')
        <a href="{{route('mailables.create')}}" class="btn-primary  btn-sm pull-right" style="display: none;">
            Add Mailables
        </a>
    @endcan
    </div><!-- /.box-header -->
    <div class="box-body">
        <table id="mailablestable" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>    
              <th>Content</th>
              <th>Status</th>
              <th>Created At</th>
              <th>Last Update</th>
              <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mailables as $mailable)
                <tr>
                    <th scope="row">{{$mailable->id}}</th>
                    <td>{{$mailable->name}}</td>
                    <td>{{str_limit($mailable->message,50)}}</td>
                    <td>
                        @if($mailable->status == 'Enable')
                            <span class="label label-success">{{$mailable->status}}</span>
                        @endif
                        @if($mailable->status == 'Disable')
                            <span class="label label-danger">{{$mailable->status}}</span>
                        @endif
                    </td>
                    <td>{{$mailable->created_at->format('m/d/Y h:m:i')}}</td>
                    <td>{{$mailable->updated_at->format('m/d/Y h:m:i')}}</td>
                    <td>
                        <div class="btn-group">
                            @can('mailables.preview')
                                <a href="{{route('mailables.preview', $mailable->id)}}" target="blank" class="btn btn-success btn-sm"><b>Preview</b></a>
                            @endcan
                        </div>
                        <div class="btn-group" style="display: none;">
                            @can('mailables.show')
                                <a href="{{route('mailables.show', $mailable->id)}}" class="btn btn-sm btn-info">View</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('mailables.edit')
                                <a href="{{route('mailables.edit', $mailable->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            @endcan
                        </div>
                        <div class="btn-group"  style="display: none;">
                            @can('mailables.destroy')
                                <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('mailables.destroy', $mailable->id) !!}" data-id="{{$mailable->id}}" data-token="{{ csrf_token() }}">Remove</a>
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
                <th>Content</th>
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

<form method="POST" class="publish-model">
    <div id="publish-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="publish-width-modalLabel">Publish Mailable</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Publish This Mailable?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light">Publish</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form method="POST" class="unpublish-model">
        <div id="unpublish-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" style="width:55%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="publish-width-modalLabel">No Publish Mailable</h4>
                    </div>
                    <div class="modal-body">
                        <h4>You Want You Sure No Publish This Mailable?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">No Publish</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

<form method="POST" class="approve-to-model">
        <div id="approve-width-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" style="width:55%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="custom-width-modalLabel">Assign Order To User</h4>
                    </div>
                    <div class="modal-body">
                        <h4>You Want You Sure Change The Status Of This Mailable?</h4>
                        <select class="form-control" name="is_approved">
                            <option>Created</option>
                            <option selected>Waiting Approval</option>
                            <option>Rejected</option>
                            <option>Approved</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection


