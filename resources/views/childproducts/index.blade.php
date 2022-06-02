@extends('layouts.admin')
@section('title','Manage Childs Products')
@section('pagename','Manage Childs Products')
@section('menuname','Manage Childs Products')
@section('content')
@include('common.alerts')


<div class="box">
    <div class="box-header">
        <h3 class="box-title">Childs Products List</h3>
        @can('childproducts.create')
        <a href="/admin/childproducts/create/{{$parentproduct->id}}" class="btn-primary  btn-sm pull-right">
            Add Product Color
        </a>
    @endcan
    </div><!-- /.box-header -->
    <div class="box-body">
        <table id="childproductstable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>StylNumber</th>
                <th>Image</th>    
                <th>Name</th>
                <th>Price</th>
                <th>Min Quantity</th>
                <th>Visibility</th>
                <th>Brand</th>
                <th>Color</th>
                <th>Sizes</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Last Update</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($childproducts as $childproduct)
                <tr>
                    <th scope="row">{{$childproduct->id}}</th>
                    <td>{{$childproduct->stylenumber}}</td>
                    <td>
                        <img src="{{asset('img/product')}}{{'/'}}{{$childproduct->image}}" style="width:50px; height:auto;">
                        @if($childproduct->default)
                            <br>
                            <small class="label label-info">Default</small>
                        @endif
                    </td>
                    <td>{{$childproduct->name}}</td>
                    <td>{{$childproduct->price}}</td>
                    <td>{{$childproduct->min_quantity}}</td>
                    <td>{{$childproduct->visibility}}</td>
                    <td>{{$childproduct->brand}}</td>
                    <td>{{$childproduct->color->name}}</td>
                    <td>
                        @foreach ($childproduct->sizes as $size)
                            {{$size->name}}, 
                        @endforeach
                    </td>
                    <td>
                        @if($childproduct->status == 'Enable')
                            <span class="label label-success">{{$childproduct->status}}</span>
                        @endif
                        @if($childproduct->status == 'Disable')
                            <span class="label label-danger">{{$childproduct->status}}</span>
                        @endif
                    </td>
                    <td>{{$childproduct->created_at->format('m/d/Y h:m:i')}}</td>
                    <td>{{$childproduct->updated_at->format('m/d/Y h:m:i')}}</td>
                    <td>   
                        <div class="btn-group">
                            @can('childproducts.show')
                                <a href="{{route('childproducts.show', $childproduct->id)}}" class="btn btn-sm btn-info">View</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('childproducts.edit')
                                <a href="{{route('childproducts.edit', $childproduct->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('childproducts.destroy')
                                <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('childproducts.destroy', $childproduct->id) !!}" data-id="{{$childproduct->id}}" data-token="{{ csrf_token() }}">Remove</a>
                            @endcan
                        </div>
                        @if(!$childproduct->default)
                            <div class="btn-group">
                                @can('childproducts.default')
                                    <a class="btn btn-default btn-sm waves-effect waves-light default" data-toggle="modal" data-target="#default-modal" data-url="{!! URL::route('childproducts.default', $childproduct->id) !!}" data-id="{{$childproduct->id}}" data-token="{{ csrf_token() }}">Set Default</a>
                                @endcan
                            </div>
                        @endif
                        @if(!$childproduct->ispersonalize)
                            <div class="btn-group">
                                @can('childproducts.ispersonalize')
                                    <a class="btn btn-success btn-sm waves-effect waves-light ispersonalize" data-toggle="modal" data-target="#ispersonalize-modal" data-url="{!! URL::route('childproducts.ispersonalize', $childproduct->id) !!}" data-id="{{$childproduct->id}}" data-token="{{ csrf_token() }}">Personalize</a>
                                @endcan
                            </div>
                        @endif
                        @if(!$childproduct->isembroidery)
                            <div class="btn-group">
                                @can('childproducts.isembroidery')
                                    <a class="btn btn-success btn-sm waves-effect waves-light isembroidery" data-toggle="modal" data-target="#isembroidery-modal" data-url="{!! URL::route('childproducts.isembroidery', $childproduct->id) !!}" data-id="{{$childproduct->id}}" data-token="{{ csrf_token() }}">Embroidery</a>
                                @endcan
                            </div>
                        @endif
                        @if(!$childproduct->isexpedited)
                            <div class="btn-group">
                                @can('childproducts.isexpedited')
                                    <a class="btn btn-success btn-sm waves-effect waves-light isexpedited" data-toggle="modal" data-target="#isexpedited-modal" data-url="{!! URL::route('childproducts.isexpedited', $childproduct->id) !!}" data-id="{{$childproduct->id}}" data-token="{{ csrf_token() }}">Expedited</a>
                                @endcan
                            </div>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>StylNumber</th>
                <th>Image</th>    
                <th>Name</th>
                <th>Price</th>
                <th>Visibility</th>
                <th>Brand</th>
                <th>Color</th>
                <th>Description</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Last Update</th>
                <th>Operations</th>
            </tr>
        </tfoot>
        </table>
    </div><!-- /.box-body -->
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

    <form method="POST" class="default-model">
        <div id="default-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" style="width:55%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="custom-width-modalLabel">Set Default Product</h4>
                    </div>
                    <div class="modal-body">
                        <h4>You Want You Sure Set This Product As Default?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Set As Default</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form method="POST" class="ispersonalize-model">
        <div id="ispersonalize-modal" class="modal modal-ispersonalize fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" style="width:55%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="custom-width-modalLabel">Allow Personalize Product</h4>
                    </div>
                    <div class="modal-body">
                        <h4>You Want You Sure Set This Product Allow Personalize?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Allow Personalize</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form method="POST" class="isembroidery-model">
        <div id="isembroidery-modal" class="modal modal-isembroidery fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" style="width:55%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="custom-width-modalLabel">Allow Embroidery Product</h4>
                    </div>
                    <div class="modal-body">
                        <h4>You Want You Sure Set This Product Allow Embroidery?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Allow Embroidery</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form method="POST" class="isexpedited-model">
        <div id="isexpedited-modal" class="modal modal-isexpedited fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" style="width:55%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="custom-width-modalLabel">Allow Expedited Product</h4>
                    </div>
                    <div class="modal-body">
                        <h4>You Want You Sure Set This Product Allow Expedited?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Allow Expedited</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div><!-- /.box -->
@endsection
