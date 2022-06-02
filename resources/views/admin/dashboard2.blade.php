@extends('layouts.admin')
@section('title','Dashboard')
@section('pagename','Dashboard')
@section('menuname','Dashboard')
@section('content')
@include('common.alerts') 
@guest

@endguest
<div class="row" id="wrapper">
    <div class="col-md-4">
      <div class="box box-primary">
        <div class="box-body box-profile">
          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b><span class="label label-success">Lifetime Sales</span></b> <a class="pull-right">${{round($lifetimesale,2)}}</a>
            </li>
            <li class="list-group-item">
              <b><span class="label label-info">Average Orders</span></b> <a class="pull-right">${{round($averageorders,2)}}</a>
            </li>
          </ul>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

      <!-- About Me Box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Last 5 Orders</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th style="width: 30%">Order ID</th>
                      <th style="width: 30%">Customer</th>    
                      <th style="width: 30%">Items</th>
                      <th style="width: 10%">Status</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($lastfiveorders as $order)
                      <tr>
                          <td style="width: 30%">@can('orders.invoice')
                              <a  href="{{route('orders.invoice',$order->id)}}"  target="_blank">
                          @endcan{{$order->order_number}}</a></td>
                          <td style="width: 30%">{{$order->customer->firstname}} {{$order->customer->lastname}}</td>
                          <td style="width: 30%">
                              @foreach ($order->designs as $design)
                                <img src="{{asset('designs/designstudio')}}{{'/'}}{{$design->category->name}}{{'/'}}{{$design->subcategory->name}}{{'/'}}{{$design->title}}_front.png" style="width:50px; height:auto;">
                              @endforeach
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
                      </tr>
                  @endforeach
              </tbody>
              
            </table>
          </div>
        </div>
        <div class="box-footer clearfix">
          @can('orders.all')
            <a href="{{route('orders.all')}}" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
          @endcan
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <div class="col-md-8">
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#orders" data-toggle="tab">Orders</a></li>
          <li><a href="#ammount" data-toggle="tab">Ammount</a></li>
        </ul>
        <div class="tab-content">
          <div class="active tab-pane" id="orders">
              {!! $chartareasplinecount->html() !!}
          </div>
          <div class="tab-pane" id="ammount">            
              {!! $chartareasplinetotal->html() !!}                
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>${{round($totalrevenue,2)}}</h3>
              <p>Revenue</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3>${{round($totaltax,2)}}<sup style="font-size: 20px"></sup></h3>
              <p>Tax</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>${{round($totalshipping,2)}}</h3>
              <p>Shipping</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{count($orders)}}</h3>
              <p>Quantity</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#customers" data-toggle="tab">Customers</a></li>
            <li><a href="#newcustomers" data-toggle="tab">New Customers</a></li>
            <li><a href="#mostviewedproducts" data-toggle="tab">Most Viewed Products</a></li>
            <li><a href="#bestsellers" data-toggle="tab">Bestsellers</a></li>
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="customers">
              <div class="box-body">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th style="width: 40%">Customers Name</th>
                      <th style="width: 20%">Number of Orders</th>
                      <th style="width: 20%">Average of Order Ammount</th>
                      <th style="width: 20%">Total Order Ammount</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($customers as $customer)
                      <tr>
                        <td style="width: 40%">{{$customer->firstname}} {{$customer->lastname}}</td>
                        <td style="width: 20%">{{$customer->numberorders}}</td>
                        <td style="width: 20%">${{round($customer->avgorders,2)}}</td>
                        <td style="width: 20%">${{round($customer->totalorders,2)}}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane" id="newcustomers">
              <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th style="width: 25%">First Name</th>
                      <th style="width: 25%">Last Name</th>
                      <th style="width: 25%">Email</th>
                      <th style="width: 25%">Phone</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($newcustomers as $customer)
                      <tr>
                        <td style="width: 25%">{{$customer->firstname}} </td>
                        <td style="width: 25%">{{$customer->lastname}}</td>
                        <td style="width: 25%">{{$customer->email}}</td>
                        <td style="width: 25%">{{$customer->phone}}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
            <div class="tab-pane" id="mostviewedproducts">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width: 70%">Product</th>
                    <th style="width: 10%">View Count</th>
                    <th style="width: 20%">Comments</th>
                  </tr>
                </thead>
                <tbody> 
                    @foreach($mostviewproducts as $product)
                      <tr>
                        <td style="width: 70%">{{$product->name}}</td>
                        <td style="width: 10%">{{$product->view_count}}</td>
                        <td style="width: 20%">{{$product->comments->count()}}</td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <div class="tab-pane" id="bestsellers">
              <div class="box-body">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th style="width: 70%">Product</th>
                      <th style="width: 10%">Price</th>
                      <th style="width: 20%">Quantity Ordered</th>
                    </tr>
                  </thead>
                  <tbody> 
                    @foreach($bestsellerproducts as $product)
                      <tr>
                        <td style="width: 70%">{{$product->name}}</td>
                        <td style="width: 10%">{{$product->price}}</td>
                        <td style="width: 20%">pending...</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>  
  {!! Charts::scripts() !!}
  {!! $chartareasplinecount->script() !!}
  {!! $chartareasplinetotal->script() !!}
@endsection

