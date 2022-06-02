@extends('layouts.admin')
@section('title','Screen Primting')
@section('pagename','Screen Primting')
@section('menuname','Screen Primting')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Screen Primting</h3>
    </div>
    <div class="box-body">
        <center>
            <a class="btn btn-app asigned_all" style="display:none; cursor:pointer; background-color: #32a7e0; border-color: #32a7e0; color: white;" data-toggle="modal" data-target="#asigned-all-width-modal" data-url="{!! URL::route('orders.asignedall') !!}" data-token="{{ csrf_token() }}">
                <span class="badge bg-teal" id="countorderselected">0</span>
                <i class="fa fa-inbox"></i> Asign Selected Orders
            </a>
            <a class="btn btn-app cancel_all" style="display:none; cursor:pointer; background-color: #dd4b39; border-color: #dd4b39; color: white;" data-toggle="modal" data-target="#cancel-all-width-modal" data-url="{!! URL::route('orders.cancelall') !!}" data-token="{{ csrf_token() }}">
                <span class="badge" id="countcanceledorderselected">0</span>
                <i class="fa fa-inbox"></i> Cancel Selected orders
            </a>
            <a class="btn btn-app change_status_all" style="cursor:pointer; background-color: #3c8dbc; border-color: #3c8dbc; color: white;" data-toggle="modal" data-target="#change-status-all-width-modal" data-url="{!! URL::route('orders.changestatusall') !!}" data-token="{{ csrf_token() }}">
                <span class="badge bg-teal" id="countchangestatusorderselected">0</span>
                <i class="fa fa-inbox"></i> Change Status Selected Orders
            </a>
        </center>
        <table id="userstable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th><input type="checkbox" class="checkbox-all-order" name="checkbox-all-order" id="checkbox-all-order"></th>
                <th>Order Number</th>    
                <th>Shipping Type</th>
                <th>Order Date</th>
                <th>Ship By</th>
                <th>Status</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <th scope="row"><input type="checkbox" class="checkbox-order" name="{{$order->order_number}}" id="{{$order->id}}"> </th>
                    <td>{{$order->order_number}}</td>
                    <td>{{$order->shippingType}}</td>
                    <td>{{$order->created_at->format('m/d/Y h:m:i')}}</td>
                    <td>{{$order->shipby}}</td>
                    <td>
                        @if($order->status == 'CREATED')
                            <td><span class="label label-success">{{ $order->status }}</span>
                        @elseif($order->status == 'IN PROGRESS')
                            <td><span class="label label-warning">{{ $order->status }}</span>
                        @elseif($order->status == 'COMPLETED')
                            <td><span class="label label-info">{{ $order->status }}</span>
                        @elseif($order->status == 'SHIPPED')
                            <td><span class="label label-default">{{ $order->status }}</span>
                        @elseif($order->status == 'CANCELED')
                            <td><span class="label label-danger">{{ $order->status }}</span>
                        @elseif($order->status == 'REFOUNDED')
                            <td><span class="label" style="color:red">{{ $order->status }}</span>
                        @elseif($order->status == 'paid')
                            <td><span class="label" style="color:gray">{{ $order->status }}</span>
                        @elseif($order->status == 'PICKED UP')
                            <td><span class="label" style="color:blue">{{ $order->status }}</span>
                        @endif
                        <a class="btn btn-default btn-sm change_status"  data-toggle="modal" data-target="#change-status-width-modal" data-url="{!! URL::route('orders.changestatus',$order->id) !!}" data-id="{{$order->id}}" data-token="{{ csrf_token() }}">
                            <i class="fa fa-edit"></i> Change Status
                        </a>
                    </td>
                    <td>   
                        @can('orders.ordersheet')
                            <a  href="{{route('orders.ordersheet',$order->id)}}"  target="_blank" class="btn btn-default btn-sm"  style="padding: 4px 8px;"><i class="fa fa-print"></i> Order Sheet</a>
                        @endcan
                        @can('orders.pakingslip')
                            <a  href="{{route('orders.pakingslip',$order->id)}}"  target="_blank" class="btn btn-default btn-sm"  style="padding: 4px 8px;"><i class="fa fa-print"></i> Paking Slip</a>
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Order Number</th>    
                <th>Shipping Type</th>
                <th>Order Date</th>
                <th>Ship By</th>
                <th>Status</th>
                <th>Operations</th>
            </tr>
        </tfoot>
        </table>
    </div>
</div>
<form method="POST" class="change-status-model">
    <div id="change-status-width-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Change Status</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Asign The Selected Order to This User?</h4>
                    <select  name="status" id="status" class="form-control">
                        <option value="IN PROGRESS" selected disabled>IN PROGRESS</option>
                        <option value="COMPLETED">COMPLETED</option>
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
<form method="POST" class="asigned-all-model">
    <div id="asigned-all-width-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <input type="hidden" id="createdorders" name="createdorders">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Asigned All Orders</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Asign The Selected Order to This User?</h4>
                    <select id="user_to" name="user_to" class="form-control">
                        @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->firstname}} {{$user->lastname}}</option>
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
<form method="POST" class="cancel-all-model">
    <div id="cancel-all-width-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <input type="hidden" id="canceledorders" name="canceledorders">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
            <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Cancel Record</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Cancel All This Records?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect remove-data-from-cancel-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger waves-effect waves-light">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>
<form method="POST" class="change-status-all-model">
    <div id="change-status-all-width-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <input type="hidden" id="changestatusorders" name="changestatusorders">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Change Status Orders</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Change Status Of The Selected Order?</h4>
                    <select  name="status_all" id="status_all" class="form-control">
                        <option value="IN PROGRESS" selected disabled>IN PROGRESS</option>
                        <option value="COMPLETED">COMPLETED</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light">Change</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
