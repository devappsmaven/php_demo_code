@extends('layouts.admin')
@section('title','Manage Products')
@section('pagename','Manage Products')
@section('menuname','Manage Products')
@section('content')
@include('common.alerts')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Products List</h3>
        @can('products.create')
        <a href="{{route('products.create')}}" class="btn-primary  btn-sm pull-right">
            Add Product
        </a>
    @endcan
    </div><!-- /.box-header -->
    <div class="box-body">
        <table id="productstable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>    
                    <th>Style Number</th>
                    <th style="width:15%;">Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Brand</th>
                    <th>Status</th>
                    <th>Visibility</th>
                    <!--<th>Created At</th>-->
                    <th>Last Update</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row"><a href="{{route('childproducts.index', $product->id)}}">{{$product->id}}</a></th>
                        <td>
                            <a href="{{route('childproducts.index', $product->id)}}">
                                @if($product->c_image_url)         
                                      <img src="{{$product->c_image_url}}" style="width:50px; height:auto;">         
                                @else
                                      <img src="{{asset('img/product')}}{{'/'}}{{$product->image}}" style="width:50px; height:auto;">        
                                @endif
                            </a>
                            @if($product->default)
                                <br>
                                <small class="label label-info">Default</small>
                            @endif
                        </td>
                        <td><a href="{{route('childproducts.index', $product->id)}}">{{$product->stylenumber}}</a></td>
                        <td><a href="{{route('childproducts.index', $product->id)}}">{{$product->name}}</a></td>
                        <td>
                            <a href="{{route('childproducts.index', $product->id)}}">Shirt Material:{{$product->fabric}}
                                
                            </a>
                        </td>
                        <td><a href="{{route('childproducts.index', $product->id)}}">{{$product->price}}</a></td>
                        <td><a href="{{route('childproducts.index', $product->id)}}">{{$product->brand}}</a></td>
                        <td><a href="{{route('childproducts.index', $product->id)}}">
                            @if($product->status == 'Enable')
                                <span class="label label-success">{{$product->status}}</span>
                            @endif
                            @if($product->status == 'Disable')
                                <span class="label label-danger">{{$product->status}}</span>
                            @endif
                            </a>
                        </td>
                        <td><a href="{{route('childproducts.index', $product->id)}}">{{$product->visibility}}</a></td>
                        <!--<td><a href="{{route('childproducts.index', $product->id)}}">{{$product->created_at->format('m/d/Y')}} <br>{{$product->created_at->format('h:m:i')}}</a></td>-->
                        <td><a href="{{route('childproducts.index', $product->id)}}">{{$product->updated_at->format('m/d/Y')}} <br>{{$product->updated_at->format('h:m:i')}}</a></td>
                        <td>   
                            <div class="btn-group" style="display:none;">
                                @can('products.show')
                                    <a href="{{route('products.show', $product->id)}}" class="btn btn-sm btn-info">View</a>
                                @endcan
                            </div>
                            <div class="btn-group">
                                @can('products.edit')
                                    <a href="{{route('products.edit', $product->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                @endcan
                            </div>
                            <div class="btn-group">
                                @can('childproducts.create')
                                    <a href="{{route('childproducts.create', $product->id)}}" class="btn btn-sm btn-success">Add Color</a>
                                @endcan
                            </div>
                            <div class="btn-group">
                                @can('products.destroy')
                                    <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('products.destroy', $product->id) !!}" data-id="{{$product->id}}" data-token="{{ csrf_token() }}">Remove</a>
                                @endcan
                            </div>
                            @if(!$product->default)
                                <div class="btn-group">
                                    @can('products.default')
                                        <a class="btn btn-default btn-sm waves-effect waves-light default" data-toggle="modal" data-target="#default-modal" data-url="{!! URL::route('products.default', $product->id) !!}" data-id="{{$product->id}}" data-token="{{ csrf_token() }}">Set Default</a>
                                    @endcan
                                </div>
                            @endif
                            @if(!$product->defaultembroidery)
                                <div class="btn-group">
                                    @can('products.defaultembroidery')
                                        <a class="btn btn-default btn-sm waves-effect waves-light defaultembroidery" data-toggle="modal" data-target="#defaultembroidery-modal" data-url="{!! URL::route('products.defaultembroidery', $product->id) !!}" data-id="{{$product->id}}" data-token="{{ csrf_token() }}">Set Default Embroidery</a>
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
                    <th>Image</th>   
                    <th>Style Number</th>
                    <th style="width:15%;">Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Brand</th>
                    <th>Status</th>
                    <th>Visibility</th>
                    <!--<th>Created At</th>-->
                    <th>Last Update</th>
                    <th>Operations</th>
                </tr>
            </tfoot>
        </table>
    </div>
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

<form method="POST" class="defaultembroidery-model">
    <div id="defaultembroidery-modal" class="modal modal-defaultembroidery fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Set Default Embroidery Product</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Set This Product As Default Embroidery?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light">Set As Default Embroidery</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
