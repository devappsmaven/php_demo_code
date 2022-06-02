@extends('layouts.admin')
@section('title','Manage Ink Color')
@section('pagename','Manage Ink Color')
@section('menuname','Manage Ink Color')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Ink Color List</h3>
        @can('inkcolors.create')
        <a href="{{route('inkcolors.create')}}" class="btn-primary  btn-sm pull-right">
            Add Ink Color
        </a>
    @endcan
    </div><!-- /.box-header -->
    <div class="box-body">
        <table id="inkcolortable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>    
                <th>Order</th>
                <th>Name</th>
                <th>Hex</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Last Update</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inkcolor as $color)
                <tr>
                    <th scope="row">{{$color->id}}</th>
                    <td>
                        @if($color->file)
                            <img src="{{asset('img/Color_Images')}}{{'/'}}{{$color->file}}" style="width:50px; height:auto;">
                        @else
                            @if($color->hex)
                                <div style="border-radius: 50%; background-color: {{$color->hex}}; width: 50px; height: 50px; border: 1px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px;">
                                </div>
                            @else
                                <div style="border-radius: 50%; background-image: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet); width: 50px; height: 50px; border: 1px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px;">
                                </div>
                            @endif
                        @endif
                        </td>
                    
                    <td>{{$color->order}}</td>
                    <td>{{$color->name}}</td>
                    <td>{{$color->hex}}</td>
                    <td>
                        @if($color->status == 'Enable')
                            <span class="label label-success">{{$color->status}}</span>
                        @endif
                        @if($color->status == 'Disable')
                            <span class="label label-danger">{{$color->status}}</span>
                        @endif
                    </td>
                    <td>{{$color->created_at->format('m/d/Y h:m:i')}}</td>
                    <td>{{$color->updated_at->format('m/d/Y h:m:i')}}</td>
                    <td>
                        <div class="btn-group">
                            @can('inkcolors.show')
                                <a href="{{route('inkcolors.show', $color->id)}}" class="btn btn-sm btn-info">View</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('inkcolors.edit')
                                <a href="{{route('inkcolors.edit', $color->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('inkcolors.destroy')
                                <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('inkcolors.destroy', $color->id) !!}" data-id="{{$color->id}}" data-token="{{ csrf_token() }}">Remove</a>
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
              <th>Order</th>
              <th>Name</th>
              <th>Hex</th>
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
