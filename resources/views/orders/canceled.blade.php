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
            <label>Asign Selected Orders to:</label>

            <select class="asigned_to" name="asigned_to_home" id="asigned_to_home">
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->firstname}} {{$user->lastname}}</option>
                @endforeach
            </select>
        </center>
        <table id="userstable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Order Number</th>    
                <th>Shipping Type</th>
                <th>Order Date</th>
                <th>Items</th>
                <th>Asigned To</th>
                <th>Status</th>
                <th>Last Update</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <th scope="row">{{$order->id}} </th>
                    <td>{{$order->order_number}}</td>
                    <td>{{$order->shipping_type}}</td>
                    <td>{{$order->created_at->format('m/d/Y h:m:i')}}</td>
                    <td>{{$order->items}}</td>
                    <td>
                        user
                    </td>
                    <td><span class="label label-danger">{{ $order->status }}</span></td>
                    <td>{{$order->updated_at->format('m/d/Y h:m:i')}}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Order Number</th>    
                <th>Shipping Type</th>
                <th>Order Date</th>
                <th>Items</th>
                <th>Asigned To</th>
                <th>Status</th>
                <th>Last Update</th>
            </tr>
        </tfoot>
        </table>
        <div class="row no-print">
            <div class="col-xs-12">
                <a href="{{route('orders.generatelist')}}" target="_blank" class="btn btn-default pull-right"><i class="fa fa-print"></i> Print</a>
                <a href="{{route('orders.downloadlist')}}" target="_blank" class="btn btn-success pull-right"><i class="fa fa-download"></i> Download PDF</a>
            </div>
        </div>
    </div>
</div>
@endsection
