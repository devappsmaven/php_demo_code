@extends('layouts.admin')
@section('title','Manage Components')
@section('pagename','Manage Components')
@section('menuname','Manage Components')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Components List</h3>
        @can('components.create')
        <a href="{{route('components.create')}}" class="btn-primary  btn-sm pull-right">
            Add Components
        </a>
    @endcan
    </div>
    <div class="box-body">
        <table id="componentstable" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>    
              <th>Slug</th>
              <th>Image</th>
              <th>Section</th>
              <th>Order</th>
              <th>Editable</th>
              <th>Status</th>
              <th>Created At</th>
              <th>Last Update</th>
              <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($components as $component)
                <tr>
                    <th scope="row">{{$component->id}}</th>
                    <td>{{$component->name}}</td>
                    <td>{{$component->section}}</td>
                    <td style="width:20%">
                        @if($component->has_image)
                            <a href="{{asset('img/component')}}{{'/'}}{{$component->image}}" target="_blank">
                                <img src="{{asset('img/component')}}{{'/'}}{{$component->image}}"  class="img-responsive" alt="">
                            </a>
                        @endif
                    </td>
                    <td>{{$component->type}}</td>
                    <td>{{$component->order}}</td>
                    <td><center>
                        @if($component->is_editable)
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
                        </center>
                    </td>
                    <td>
                        @if($component->status == 'Enable')
                            <span class="label label-success">{{$component->status}}</span>
                        @endif
                        @if($component->status == 'Disable')
                            <span class="label label-danger">{{$component->status}}</span>
                        @endif
                    </td>
                    <td>{{$component->created_at->format('m/d/Y h:m:i')}}</td>
                    <td>{{$component->updated_at->format('m/d/Y h:m:i')}}</td>
                    <td>
                        <div class="btn-group">
                            @can('components.preview')
                                <a href="{{route('component.preview',[$theme,$component->slug])}}" target="blank" class="btn btn-success btn-sm"><b>Preview</b></a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('components.show')
                                <a href="{{route('components.show', $component->id)}}" class="btn btn-sm btn-info">View</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('components.edit')
                                <a href="{{route('components.edit', $component->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('components.destroy')
                                <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('components.destroy', $component->id) !!}" data-id="{{$component->id}}" data-token="{{ csrf_token() }}">Remove</a>
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
                <th>Slug</th>
                <th>Image</th>
                <th>Section</th>
                <th>Order</th>
                <th>Editable</th>
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


