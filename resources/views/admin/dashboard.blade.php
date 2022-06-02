@extends('layouts.admin')
@section('title','Dashboard')
@section('pagename','Dashboard')
@section('menuname','Dashboard')
@section('content')
@include('common.alerts') 
@guest

@endguest
<div class="row">
    <div class="col-md-4">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">RECENT ORDERS</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <ul class="products-list product-list-in-box">
            @if($lastfiveorders->count() > 0)
            @foreach ($lastfiveorders as $order)
            <li class="item">
              
              <div class="product-info" style="margin-left: 0px;">
                <a href="{{route('orders.invoice',$order->id)}}" target="_blank" class="product-title">{{$order->customer->firstname}} {{$order->customer->lastname}}
                  <span class="description-header pull-right">${{$order->total}}</small><br><span class=" pull-right">
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
                  </small>
                  </a>
                <a href="{{route('orders.invoice',$order->id)}}" target="_blank" class="product-description"> #{{$order->order_number}} > {{$order->updated_at->format('m/d/Y')}}
                </a>
              </div>
            </li>
            @endforeach
            @endif
          </ul>
          <div class="row">
            <div class="col-xs-4">
              <div class="description-block border-right">
                <h5 class="description-header">{{$completeordertoday ? $completeordertoday : 0 }}</h5>
                <small>Completed Orders Today</small>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
              <div class="description-block border-right">
              @if($completeordermonth)
                <h5 class="description-header">{{$completeordermonth->numberorders}}</h5>
                <small>Completed Orders {{$completeordermonth->month}}</small>
                @else
                  <h5 class="description-header">0.00</h5>
                  <small>Completed Orders Month</small>
                @endif
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
              <div class="description-block border-right">
                @if($completeordermonth)
                  <h5 class="description-header">{{$completeorderyear->numberorders}}</h5>
                  <small>Completed Orders {{$completeorderyear->year}}</small>
                @else
                  <h5 class="description-header">0</h5>
                  <small>Completed Orders 2019</small>
                @endif
              </div>
              <!-- /.description-block -->
            </div>
          </div>
        </div>
        <div class="box-footer text-center">
          @can('orders.all')
            <a href="{{route('orders.all')}}" class="uppercase">View All Orders</a>
          @endcan          
        </div>
      </div>
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">LATEST POST</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <ul class="products-list product-list-in-box">
            @if($lastfiveposts->count() > 0)
              @foreach ($lastfiveposts as $post )
                <li class="item">
                  <div class="product-img">
                    <img src="{{asset('img/blog')}}{{'/'}}{{$post->image}}" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">{{str_limit($post->title,20)}}
                      <span class="label label-info pull-right">{{$post->view_count}} views</small></a>
                    <span class="product-description">
                        {{$post->user->firstname}} {{$post->user->lastname}} <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> {{$post->created_at->diffForHumans()}}</small> 
                        </small>
                  </div>
                </li> 
              @endforeach
            @endif
          </ul>
        </div>
        <div class="box-footer text-center">
          @can('posts.index')
            <a href="{{route('posts.index')}}" class="uppercase">View All Post</a>
          @endcan 
        </div>
      </div>
      <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">LATEST GALLERY</h3>
  
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
          <div class="box-body">
            <ul class="products-list product-list-in-box">
              @if($lastfivegallerys->count() > 0)
                @foreach ($lastfivegallerys as $gallery )
                  <li class="item">
                    <div class="product-img">
                      <img src="{{asset('img/gallery')}}{{'/'}}{{$gallery->image}}" alt="Product Image">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">{{str_limit($gallery->title,20)}}
                        <span class="label label-info pull-right">{{$gallery->view_count}} views</small></a>
                      <span class="product-description">
                          {{$gallery->user->firstname}} {{$gallery->user->lastname}} <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> {{$gallery->created_at->diffForHumans()}}</small> 
                          </small>
                    </div>
                  </li> 
                @endforeach
              @endif
            </ul>
          </div>
          <div class="box-footer text-center">
            @can('gallerys.index')
              <a href="{{route('gallerys.index')}}" class="uppercase">View All Galleries</a>
            @endcan 
          </div>
        </div>
    </div>
    <div class="col-md-4">
      <div class="box box-primary">
          <div class="box-header with-border">
              <h3 class="box-title">ORDERS INFORMATION</h3>
    
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
        <div class="box box-widget">
            <div class="row">
              <div class="col-xs-4">
                <div class="description-block border-right">
                  <h5 class="description-header">${{$ordersday ? $ordersday : 0}}</h5>
                  <small>Today</small>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-xs-4">
                <div class="description-block border-right">
                @if($ordersmonth)
                  <h5 class="description-header">${{$ordersmonth->totalorders}}</h5>
                  <small>{{$ordersmonth->month}} '{{$ordersyear->year}}</small>
                  @else 
                    <h5 class="description-header">$0.00</h5>
                    <small>Month</small>
                  @endif
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-xs-4">
                <div class="description-block border-right">
                  @if($ordersyear)
                    <h5 class="description-header">${{$ordersyear->totalorders}}</h5>
                    <small>{{$ordersyear->year}}</small>
                  @else
                    <h5 class="description-header">$0</h5>
                    <small>2019</small>
                  @endif
                </div>
                <!-- /.description-block -->
              </div>
            </div>
          </div>
          <div class="box box-widget">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#count" data-toggle="tab">Total Orders Count Per Month</a></li>
                <li><a href="#ammount" data-toggle="tab">Total Orders Ammount Per Month</a></li>
              </ul>
              <div class="tab-content">
                <div class="active tab-pane" id="count">
                    {!! $charttotalorders->html() !!}
                </div>
                <div class="tab-pane" id="ammount">            
                    {!! $chartammountorders->html() !!}
                </div>
              </div>
            </div>
          </div>
        <br>
        <div class="box box-widget">
          <div class="row">
            <div class="col-xs-4">
              <div class="description-block border-right">
                @if($bestday)
                  <h5 class="description-header">${{$bestday->ammount}}</h5>
                  <small>Best Day {{$bestday->day}}</small>
                @else
                  <h5 class="description-header">$0</h5>
                  <small>Best Day </small>
                @endif
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
              <div class="description-block border-right">
                @if($bestmonth)
                  <h5 class="description-header">${{$bestmonth->ammount}}</h5>
                  <small>Best Month {{$bestmonth->month}} '{{$bestmonth->year}}</small>
                @else
                  <h5 class="description-header">$0</h5>
                  <small>Best Month </small>
                @endif
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
              <div class="description-block border-right">
                @if($bestmonth)
                  <h5 class="description-header">${{$bestyear->ammount}}</h5>
                  <small>Best Year {{$bestyear->year}}</small>
                @else
                  <h5 class="description-header">$0</h5>
                  <small>Best Year </small>
                @endif
              </div>
              <!-- /.description-block -->
            </div>
          </div>
        </div>
      </div>
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">CUSTOMERS</h3>
          
          <div class="box-tools pull-right">
          <span class="text">Customers</span><small class="label label-info">{{$totalusers ? $totalusers : 0}}</small><span class="text">&nbsp;&nbsp;Subscribers</span><small class="label label-default">{{$totalsubscribers ? $totalsubscribers : 0}}</small>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-4">
            <div class="description-block border-right">
              @if($customervalue)
                <h5 class="description-header">$ {{$customervalue->totalorders}}</h5>
              @else
                <h5 class="description-header">$0.00</h5>
              @endif
              <small>Customer Value </small>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <div class="description-block border-right">
              @if($customermonth)
                <h5 class="description-header">{{$customermonth->firstname}} {{$customermonth->lastname}}</h5>
              @else
                <h5 class="description-header">$0.00</h5>
              @endif
              <small>Customer of the Month</small>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <div class="description-block border-right">
                @if($customeryear)
                  <h5 class="description-header">{{$customeryear->firstname}} {{$customeryear->lastname}}</h5>
                @else
                  <h5 class="description-header">$0.00</h5>
                @endif
              <small>Customer of the year </small>
            </div>
            <!-- /.description-block -->
          </div>
        </div>
        <div class="box-footer no-border">
          <center><div class="row">
            <div class="col-xs-3 text-center" style="border-right: 1px solid #f4f4f4">
              <div class="description-block border-right">
                <h5 class="description-header">{{$avgorderscustomers ? $avgorderscustomers : 0}}</h5>
                <small>Avg. Orders/Customers </small>
              </div>
            </div>
            <div class="col-xs-3 text-center" style="border-right: 1px solid #f4f4f4">
              <input type="text" class="knob" value="{{$singleordercustomer ? $singleordercustomer : 0}}" data-skin="tron" data-thickness="0.2" data-width="90" data-height="90" data-fgColor="#00c0ef" data-readonly="true">
              <div class="knob-label"><small>% Single Order Customers</small></div>
            </div><!-- ./col -->
            <div class="col-xs-3 text-center" style="border-right: 1px solid #f4f4f4">
              <input type="text" class="knob" value="{{$neverordered ? $neverordered : 0}}" data-skin="tron" data-thickness="0.2" data-width="90" data-height="90" data-fgColor="#dd4b39" data-readonly="true">
              <div class="knob-label"><small>% Never Ordered</small></div>
            </div><!-- ./col -->
            <div class="col-xs-3 text-center">
              <input type="text" class="knob" value="{{$guestorders ? $guestorders : 0}}" data-skin="tron" data-thickness="0.2" data-width="90" data-height="90" data-fgColor="#00a65a " data-readonly="true">
              <div class="knob-label"><small>% Guest Orders</small></div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          </center>
          <div class="box-body">
            <div class="box-header">
              <h3 class="box-title">TOP 5 CUSTOMERS</h3>
              <br>
              <small>Registered Customers, Completed Orders</small>
            </div>
            <ul class="products-list product-list-in-box">
              @if($topfivecustomers->count() > 0)
                @foreach ($topfivecustomers as $customer )
                  <li class="item">
                    <div class="product-img">
                      <img src="{{asset('img/profile')}}{{'/'}}{{$customer->image}}" alt="Product Image">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title"> {{$customer->firstname}} {{$customer->lastname}}
                        <span class="label label-info pull-right">${{$customer->totalorders}}</small></a>
                        <ul class="list-inline">
                            <li><a href="javascript:void(0)" class="link-black text-sm">Since: {{$customer->created_at->diffForHumans()}}</a></li>
                            <li class="pull-right"><a href="javascript:void(0)" class="link-black text-sm">Avg: ${{round($customer->avgorders,2)}}</a></li>
                            <li class="pull-right"><a href="javascript:void(0)" class="link-black text-sm">Orders: {{$customer->numberorders}}</a></li>
                            <li class="pull-right"><a href="javascript:void(0)" class="link-black text-sm">{{$customer->lastorderday}}</a></li>
                        </ul>
                    </div>
                  </li> 
                @endforeach
              @endif
            </ul>
          </div>
          <div class="box-footer text-center">
            @can('users.index')
              <a href="{{route('users.index')}}" class="uppercase">View All Customers</a>
            @endcan 
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="box box-widget">
        <div class="row">
          <div class="col-xs-4">
            <div class="description-block border-right">
              <h5 class="description-header">${{$lifetimesale ? $lifetimesale : 0}}</h5>
              <small>Lifetime </small>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <div class="description-block border-right">
              <h5 class="description-header">{{$totalcustomers ? $totalcustomers : 0}}</h5>
              <small>Total Customers</small>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <div class="description-block border-right">
              <h5 class="description-header">{{$totalorders ? $totalorders : 0}}</h5>
              <small>Completed Orders </small>
            </div>
            <!-- /.description-block -->
          </div>
        </div>
      </div>
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">PRODUCTS</h3>
          <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-3">
            <div class="description-block border-right">
              <h5 class="description-header">{{$totalproducts ? $totalproducts : 0}}</h5>
              <small>Total Products </small>
            </div>
            <!-- /.description-block -->
          </div>
          <div class="col-xs-3">
            <div class="description-block border-right">
              <h5 class="description-header">{{$activeproducts ? $activeproducts : 0}}</h5>
              <small>Active Products </small>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-xs-3">
            <div class="description-block border-right">
              <h5 class="description-header">{{$averageRating ? $averageRating :  0}}</h5>
              @if($averageRating == 0.5)
                <i class="fa fa-star-half text-info"></i>  
              @elseif($averageRating == 1)
                <i class="fa fa-star text-info"></i>  
              @elseif($averageRating == 1.5)
                <i class="fa fa-star text-info"></i>  
                <i class="fa fa-star-half text-info"></i>  
              @elseif($averageRating == 2)
                <i class="fa fa-star text-info"></i>  
                <i class="fa fa-star text-info"></i>  
              @elseif($averageRating == 2.5)
                <i class="fa fa-star text-info"></i>  
                <i class="fa fa-star text-info"></i>  
                <i class="fa fa-star-half text-info"></i>  
              @elseif($averageRating == 3)
                <i class="fa fa-star text-info"></i>  
                <i class="fa fa-star text-info"></i>  
                <i class="fa fa-star text-info"></i>  
              @elseif($averageRating == 3.5)
                <i class="fa fa-star text-info"></i>  
                <i class="fa fa-star text-info"></i>  
                <i class="fa fa-star text-info"></i>  
                <i class="fa fa-star-half text-info"></i>  
              @elseif($averageRating == 4)
                <i class="fa fa-star text-info"></i>  
                <i class="fa fa-star text-info"></i>  
                <i class="fa fa-star text-info"></i>  
                <i class="fa fa-star text-info"></i>  
              @elseif($averageRating == 4.5)
                <i class="fa fa-star text-info"></i>  
                <i class="fa fa-star text-info"></i>  
                <i class="fa fa-star text-info"></i>  
                <i class="fa fa-star text-info"></i>
                <i class="fa fa-star-half text-info"></i>  
              @elseif($averageRating == 5)
                <i class="fa fa-star text-info"></i>  
                <i class="fa fa-star text-info"></i>  
                <i class="fa fa-star text-info"></i>  
                <i class="fa fa-star text-info"></i>
                <i class="fa fa-star text-info"></i>
              @else
              No Rate
              @endif
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-xs-3">
            <div class="description-block border-right">
                <h5 class="description-header">{{$percentproductcomments ? $percentproductcomments : 0}}</h5>
              <small>% Products Reviews</small>
            </div>
            <!-- /.description-block -->
          </div>
        </div>
        <div class="box-body">
          <ul class="products-list product-list-in-box">
            @if($mostviewproducts->count() > 0)
              @foreach ($mostviewproducts as $product )
                <li class="item">
                  <div class="product-img">
                    <img src="{{asset('img/product')}}{{'/'}}{{$product->image}}" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title"> {{$product->name}} 
                      <span class="label label-info pull-right">${{$product->price}}</small></a>
                      <ul class="list-inline">
                          <li><a href="javascript:void(0)" class="link-black text-sm">Since: {{$product->created_at->diffForHumans()}}</a></li>
                          <li class="pull-right"><a href="javascript:void(0)" class="link-black text-sm">Reviews: {{$product->comments->count()}}</a></li>
                          <li class="pull-right">
                            
                            @if($product->averageRating == 0.5)
                              <i class="fa fa-star-half text-info"></i>  
                            @elseif($product->averageRating == 1)
                              <i class="fa fa-star text-info"></i>  
                            @elseif($product->averageRating == 1.5)
                              <i class="fa fa-star text-info"></i>  
                              <i class="fa fa-star-half text-info"></i>  
                            @elseif($product->averageRating == 2)
                              <i class="fa fa-star text-info"></i>  
                              <i class="fa fa-star text-info"></i>  
                            @elseif($product->averageRating == 2.5)
                              <i class="fa fa-star text-info"></i>  
                              <i class="fa fa-star text-info"></i>  
                              <i class="fa fa-star-half text-info"></i>  
                            @elseif($product->averageRating == 3)
                              <i class="fa fa-star text-info"></i>  
                              <i class="fa fa-star text-info"></i>  
                              <i class="fa fa-star text-info"></i>  
                            @elseif($product->averageRating == 3.5)
                              <i class="fa fa-star text-info"></i>  
                              <i class="fa fa-star text-info"></i>  
                              <i class="fa fa-star text-info"></i>  
                              <i class="fa fa-star-half text-info"></i>  
                            @elseif($product->averageRating == 4)
                              <i class="fa fa-star text-info"></i>  
                              <i class="fa fa-star text-info"></i>  
                              <i class="fa fa-star text-info"></i>  
                              <i class="fa fa-star text-info"></i>  
                            @elseif($product->averageRating == 4.5)
                              <i class="fa fa-star text-info"></i>  
                              <i class="fa fa-star text-info"></i>  
                              <i class="fa fa-star text-info"></i>  
                              <i class="fa fa-star text-info"></i>
                              <i class="fa fa-star-half text-info"></i>  
                            @elseif($product->averageRating == 5)
                              <i class="fa fa-star text-info"></i>  
                              <i class="fa fa-star text-info"></i>  
                              <i class="fa fa-star text-info"></i>  
                              <i class="fa fa-star text-info"></i>
                              <i class="fa fa-star text-info"></i>
                            @endif
                            <a href="javascript:void(0)" class="link-black text-sm" style="display:none">Views: {{$product->view_count}}</a>
                          </li>
                      </ul>
                  </div>
                </li> 
              @endforeach
            @endif
          </ul>
        </div>
        <div class="box-footer text-center">
          @can('users.index')
            <a href="{{route('users.index')}}" class="uppercase">View All Customers</a>
          @endcan
        </div>
      </div>
      <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">SALES BY STATES</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              {!! $chartcustomersfromstates->html() !!}
            </div>
            <div class="col-xs-6">
              <div class="description-block border-right">
                <h5 class="description-header">{{$totalcustomers ? $totalcustomers : 0}}</h5>
                <small>Customers</small>
              </div>
            </div>
          </div>
          <div class="box-body">
              <div class="box-header">
                <h3 class="box-title">TOP 5 STATES</h3>
              </div>
              <div class="box-body no-padding">
                <table class="table table-striped">
                  <tr>
                    <th>State</th>
                    <th>Completed Orders</th>
                    <th>Avg. Orders</th>
                    <th>Total Invoices</th>
                  </tr>
                  @if($topfivestates->count() > 0)
                    @foreach ($topfivestates as $order)
                      <tr>
                        <td>{{$order->state}}</td>
                        <td><span class="description-percentage text-red"> {{$order->numberorders}}</span></td>
                        <td><span class="description-percentage text-green"> ${{$order->avgorders}}</span></td>
                        <td><span class="description-percentage text-blue"> ${{$order->totalorders}}</span></td>
                      </tr>
                    @endforeach
                  @endif
                </table>
              </div>
            </div>
          <div class="box-footer text-center">
            @can('users.index')
              <a href="{{route('users.index')}}" class="uppercase">View All Customers</a>
            @endcan
          </div>
        </div>
        
    </div>
</div>  
{!! Charts::scripts() !!}
  {!! $charttotalorders->script() !!}
  {!! $chartammountorders->script() !!}
  {!! $chartcustomersfromstates->script() !!}
@endsection

