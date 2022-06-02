@extends('layouts.admin')
@section('title','Manage Categories')
@section('pagename','Manage Categories')
@section('menuname','Manage Categories')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Categories List</h3>
        @can('categories.create')
        <a href="{{route('categories.create')}}" class="btn-primary  btn-sm pull-right">
            Add Categories
        </a>
    @endcan
    </div><!-- /.box-header -->
    <div class="box-body">
        <table id="categoriestable" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>Order</th>
              <th>Name</th>    
              <th>Description</th>
              <th>Image</th>
              <th>Background</th>
              <th>Type</th>
              <th>Status</th>
              <th>Visibility</th>
              <th>Created At</th>
              <th>Last Update</th>
              <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{$category->order}}</th>
                    <td>{{$category->name}}</td>
                    <td>{{$category->description}}</td>
                    <td>
                        @if($category->filename)
                            <img src="{{asset('img/category')}}{{'/'}}{{$category->filename}}" style="width:50px; height:auto;">
                        @endif
                    </td>
                    <td>
                        <div style="border-radius: 50%; background-color: {{$category->background}}; width: 50px; height: 50px; border: 1px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px;">
                        </div>
                    </td>
                    <td>
                        {{$category->type}}
                        @if($category->type == 'Post')
                            ({{$category->posts->count()}})
                        @elseif($category->type == 'Gallery')
                            ({{$category->gallerys->count()}})
                        @endif
                    </td>
                    <td>
                        @if($category->status == 'Enable')
                            <span class="label label-success">{{$category->status}}</span>
                        @endif
                        @if($category->status == 'Disable')
                            <span class="label label-danger">{{$category->status}}</span>
                        @endif
                    </td>
                    <td>
                        {{$category->visibility}}
                    </td>
                    <td>{{$category->created_at->format('m/d/Y h:m:i')}}</td>
                    <td>{{$category->updated_at->format('m/d/Y h:m:i')}}</td>
                    <td>
                        <div class="btn-group">
                            @can('categories.show')
                                <a href="{{route('categories.show', $category->id)}}" class="btn btn-sm btn-info">View</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('categories.edit')
                                <a href="{{route('categories.edit', $category->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('categories.destroy')
                                <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('categories.destroy', $category->id) !!}" data-id="{{$category->id}}" data-token="{{ csrf_token() }}">Remove</a>
                            @endcan
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
              <th>Order</th>
              <th>Name</th>    
              <th>Description</th>
              <th>Image</th>
              <th>Background</th>
              <th>Type</th>
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


