@extends('layouts.admin')
@section('title','All Orders')
@section('pagename','All Orders')
@section('menuname','All Orders')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">All Orders</h3>
    </div>
    <div class="box-body">
        <center>
            <a class="btn btn-app asigned_all" style=" display:none; cursor:pointer; background-color: #32a7e0; border-color: #32a7e0; color: white;" data-toggle="modal" data-target="#asigned-all-width-modal" data-url="{!! URL::route('orders.asignedall') !!}" data-token="{{ csrf_token() }}">
                <span class="badge bg-teal" id="countorderselected">0</span>
                <i class="fa fa-inbox"></i> Asign Selected Orders
            </a>
            <a class="btn btn-app cancel_all" style="cursor:pointer; background-color: #dd4b39; border-color: #dd4b39; color: white;" data-toggle="modal" data-target="#cancel-all-width-modal" data-url="{!! URL::route('orders.cancelall') !!}" data-token="{{ csrf_token() }}">
                <span class="badge" id="countcanceledorderselected">0</span>
                <i class="fa fa-inbox"></i> Cancel Selected orders
            </a>
            <a class="btn btn-app change_status_all" style="display:none; cursor:pointer; background-color: #3c8dbc; border-color: #3c8dbc; color: white;" data-toggle="modal" data-target="#change-status-all-width-modal" data-url="{!! URL::route('orders.changestatusall') !!}" data-token="{{ csrf_token() }}">
                <span class="badge bg-teal" id="countchangestatusorderselected">0</span>
                <i class="fa fa-inbox"></i> Change Status Selected Orders
            </a>
        </center>
        <table id="orderstable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th><input type="checkbox" class="checkbox-all-order" name="checkbox-all-order" id="checkbox-all-order"></th>
                <th>Order Number</th>    
                <th>Customer</th>    
                <th>Shipping Type</th>
                <th>Order Date</th>
                <th>Items</th>
                <th>Asigned To</th>
                <th>Status</th>
                <th>TrackingNumber</th>
                <th>Carrier</th>
                <th>Service</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <th scope="row"><input type="checkbox" class="checkbox-order" name="{{$order->order_number}}" id="{{$order->id}}"> </th>
                    <td>{{$order->order_number}}</td>
                    <td>{{$order->customer->firstname}} {{$order->customer->lastname}}</td>
                    <td>{{$order->shippingType}}</td>
                    <td>{{$order->created_at->format('m/d/Y')}}</td>
                    <td>{{$order->items}}</td>
                    <td>
                        @if($order->user->id != 1) 
                            {{$order->user->firstname}} {{$order->user->lastname}}
                        @endif
                        @if($order->status == 'Created')
                            <a class="small-box-footer asigned_to" style="cursor:pointer;" data-toggle="modal" data-target="#asigned-to-width-modal" data-url="{!! URL::route('orders.asignedto',$order->id) !!}" data-id="{{$order->id}}" data-token="{{ csrf_token() }}">
                            <small class="label label-info">
                                Assign to <i class="fa fa-arrow-circle-o-right"></i>
                            </small>
                            </a>
                        @endif
                        @if($order->status == 'In Progress')
                            <a class="btn btn-link btn-sm waves-effect waves-light asigned_to" data-toggle="modal" data-target="#asigned-to-width-modal" data-url="{!! URL::route('orders.asignedto',$order->id) !!}" data-id="{{$order->id}}" data-token="{{ csrf_token() }}">(change)</a>
                        @endif
                    </td>
                        @if($order->status == 'CREATED')
                            <td><span class="label label-success">{{ $order->status }}</span></td>
                        @elseif($order->status == 'IN PROGRESS')
                            <td><span class="label label-warning">{{ $order->status }}</span></td>
                        @elseif($order->status == 'COMPLETED')
                            <td><span class="label label-info">{{ $order->status }}</span></td>
                        @elseif($order->status == 'SHIPPED')
                            <td><span class="label label-default">{{ $order->status }}</span></td>
                        @elseif($order->status == 'CANCELED')
                            <td><span class="label label-danger">{{ $order->status }}</span></td>
                        @elseif($order->status == 'REFOUNDED')
                            <td><span class="label" style="color:red">{{ $order->status }}</span></td>
                        @elseif($order->status == 'paid')
                            <td><span class="label" style="color:gray">{{ $order->status }}</span></td>
                        @elseif($order->status == 'PICKED UP')
                            <td><span class="label" style="color:blue">{{ $order->status }}</span></td>
                        @endif
                    <td><a href="https://tools.usps.com/go/TrackConfirmAction.action?tLabels={{$order->tracking_number}}" target="blank">{{$order->tracking_number}}</td>
                    <td>{{$order->carrier}}</td>
                    <td>{{$order->service}}</td>
                    <td>   
                        <div class="row no-print">
                            <div class="col-xs-12">
                                @can('orders.invoice')
                                    <a  href="{{route('orders.invoice',$order->id)}}"  target="_blank" class="btn btn-default btn-sm" style="padding: 4px 8px;"><i class="fa fa-print"></i> Invoice</a>
                                @endcan
                                @can('orders.orderdetails')
                                    <a  href="{{route('orders.orderdetails',$order->id)}}"  target="_blank" class="btn btn-default btn-sm"  style="padding: 4px 8px;"><i class="fa fa-print"></i> Order Details</a>
                                @endcan
                                @can('orders.pakingslip')
                                    <a  href="{{route('orders.pakingslip',$order->id)}}"  target="_blank" class="btn btn-default btn-sm"  style="padding: 4px 8px;"><i class="fa fa-print"></i> Paking Slip</a>
                                @endcan
                                @if($order->status !== 'CANCELED')
                                    @can('orders.cancel')
                                        <a class="btn btn-danger btn-sm waves-effect waves-light cancel" data-toggle="modal" data-target="#cancel-modal" data-url="{!! URL::route('orders.cancel', $order->id) !!}" data-id="{{$order->id}}" data-token="{{ csrf_token() }}">cancel</a>
                                    @endcan
                                @endif
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Order Number</th>    
                <th>Customer</th>    
                <th>Shipping Type</th>
                <th>Order Date</th>
                <th>Items</th>
                <th>Asigned To</th>
                <th>Status</th>
                <th>TrackingNumber</th>
                <th>Carrier</th>
                <th>Service</th>
                <th>Operations</th>
            </tr>
        </tfoot>
        </table>
        <div class="row no-print">
            <div class="col-xs-12">
                <a href="{{route('orders.generatelist')}}" target="_blank" class="btn btn-default pull-right"><i class="fa fa-print"></i> Print</a>
                <a href="{{route('orders.downloadlist')}}" target="_blank" class="btn btn-success pull-right"><i class="fa fa-download"></i> Download PDF</a>
            </div>
        </div>
    </div><!-- /.box-body -->
</div>
<form method="POST" class="asigned-to-model">
    <div id="asigned-to-width-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Assign Order To User</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Asign This Order to This User?</h4>
                    <select id="user_to" name="user_to" class="form-control">
                        @foreach ($users as $user)
                            @if($user->id == 1)
                               <option value="{{$user->id}}">Non User</option>
                            @else
                                <option value="{{$user->id}}">{{$user->firstname}} {{$user->lastname}}({{$user->roles[0]->name}})</option>
                            @endif
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
<form method="POST" class="asigned-all-model">
    <div id="asigned-all-width-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <input type="hidden" id="createdorders" name="createdorders">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Delete Record</h4>
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
<form method="POST" class="cancel-model">
    <div id="cancel-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="cancel-width-modalLabel">cancel Template Order</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure cancel This Template Order?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light">cancel</button>
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

