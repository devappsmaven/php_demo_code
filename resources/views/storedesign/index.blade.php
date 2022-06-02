@extends('layouts.admin')
@section('title','Manage Store Designs')
@section('pagename','Manage Store Designs')
@section('menuname','Manage Store Designs')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Store Designs List</h3>
    </div>
    <div class="box-body">
        <table id="storedesignstable" class="table table-bordered table-striped">
        <thead>
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
        </thead>
        <tbody>
            @foreach ($storedesigns as $storedesign)
                <tr>
                    <th scope="row">{{$storedesign->id}}</th>
                    <td>{{$storedesign->title}}</td>
                    <td><img src="{{asset('designs/store')}}{{'/'}}{{$storedesign->category->name}}{{'/'}}{{$storedesign->subcategory->name}}{{'/'}}{{$storedesign->title}}_preview.png" style="width:50px; height:auto;"></td>
                    <td>{{$storedesign->category->name}}</td>
                    <td>{{$storedesign->subcategory->name}}</td>
                    <td>{{$storedesign->user->email}}</td>
                    <td align="center">
                        @if($storedesign->editable)
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
                        @if($storedesign->status == 'Created')
                            <span class="label label-success">{{$storedesign->status}}</span>
                        @endif
                        @if($storedesign->status == 'Waiting Approval')
                            <span class="label label-warning">{{$storedesign->status}}</span>
                        @endif
                        @if($storedesign->status == 'Approved')
                            <span class="label label-info">{{$storedesign->status}}</span>
                        @endif
                        @if($storedesign->status == 'Rejected')
                            <span class="label label-danger">{{$storedesign->status}}</span>
                        @endif
                    </td>
                    <td>{{$storedesign->created_at->format('m/d/Y h:m:i')}}</td>
                    <td>{{$storedesign->updated_at->format('m/d/Y h:m:i')}}</td>
                    <td>
                        <div class="btn-group">
                            @can('storedesign.show')
                                <a href="{{route('storedesign.show', $storedesign->id)}}" class="btn btn-sm btn-info">View</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('storedesign.edit')
                                <a href="{{route('storedesign.edit', $storedesign->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            @endcan
                        </div>
                        <div class="btn-group"  style="display:none;">
                            @can('storedesign.destroy')
                                <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('storedesign.destroy', $storedesign->id) !!}" data-id="{{$storedesign->id}}" data-token="{{ csrf_token() }}">Remove</a>
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
    </div>
</div>

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
@endsection
