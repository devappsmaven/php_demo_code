@extends('layouts.admin')
@section('title','Manage Shirt Color')
@section('pagename','Manage Shirt Color')
@section('menuname','Manage Shirt Color')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Shirt Color List</h3>
        @can('shirtcolors.create')
        <a href="{{route('shirtcolors.create')}}" class="btn-primary  btn-sm pull-right">
            Add Shirt Color
        </a>
    @endcan
    </div><!-- /.box-header -->
    <div class="box-body">
        <center>
            <a class="btn btn-app asigned_family" style="cursor:pointer;" data-toggle="modal" data-target="#asigned-family-width-modal" data-url="{!! URL::route('shirtcolors.asignedfamily') !!}" data-token="{{ csrf_token() }}">
                <span class="badge bg-teal" id="countshirtcolorselected">0</span>
                <i class="fa fa-inbox"></i> Asign Color Family
            </a>
        </center>
        <table id="shirtcolortable" class="table table-bordered table-striped">
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
            @foreach ($shirtcolor as $color)
                <tr>
                    <!--<th scope="row">{{$color->id}}</th>-->
                    <th scope="row"><input type="checkbox" class="checkbox-shirtcolor" name="{{$color->slug}}" id="{{$color->id}}"> </th>
                    <td>
                    @if($color->file)
                            <img src="{{asset('img/color')}}{{'/'}}{{$color->file}}" style="width:50px; height:auto;">
                    @else
                        <div style="border-radius: 50%; background-color: {{$color->hex}}; width: 50px; height: 50px; border: 1px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px;">
                        </div>
                    @endif
                    </td>
                    
                    <td>{{$color->order}}</td>
                    <td>{{$color->name}} ({{$color->colorfamily}} )</td>
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
                            @can('shirtcolors.show')
                                <a href="{{route('shirtcolors.show', $color->id)}}" class="btn btn-sm btn-info">View</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('shirtcolors.edit')
                                <a href="{{route('shirtcolors.edit', $color->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('shirtcolors.destroy')
                                <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('shirtcolors.destroy', $color->id) !!}" data-id="{{$color->id}}" data-token="{{ csrf_token() }}">Remove</a>
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
<form method="POST" class="asigned-family-model">
    <div id="asigned-family-width-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <input type="hidden" id="createshirtcolors" name="createshirtcolors">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Delete Record</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Asign The Selected Order to This User?</h4>
                    <select id="colorfamily_to" name="colorfamily_to" class="form-control">
                        @foreach ($colorfamily as $color)
                            <option value="{{$color->name}}">{{$color->name}}</option>
                        @endforeach
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
