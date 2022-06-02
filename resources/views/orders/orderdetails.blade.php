@extends('layouts.admin')
@section('title','Order Details')
@section('pagename','Order Details')
@section('menuname','Order Details')
@section('content')
   
<section class="invoice">
  <!-- title row -->
  <div class="row">
    <div class="col-xs-12">
      <h2 class="page-header">
        <i class="fa fa-globe"></i> Order Details
        <small class="pull-right">Date: {{$order->created_at->format('m/d/Y')}}</small>
      </h2>
    </div>
  </div>
  <div class="row invoice-info">
    <div class="col-sm-4 invoice-col">
        <img src="{{ asset('img/logo/logo.png')}}" alt="main logo" width="145" height="auto">
        </br>
        www.vividcustoms.com
      <address>
      </br>
        11119 Neeshaw Dr<br>
        Houston, TX 77065<br>
        Phone: 1800-648-8518 <br>
        Email: info@vividcustoms.com
      </address>
    </div><!-- /.col -->
    <div class="col-sm-4 invoice-col">
    </br>
      <strong>Customer Info</strong>
      </br>
      <address>
        {{$order->customer->firstname}} {{$order->customer->lastname}}<br>
        {{$order->customer->billing_street}}<br>
        {{$order->customer->billing_city}}, {{$order->customer->billing_state}} {{$order->customer->billing_zip}}<br>
        Phone: {{$order->customer->phone}}<br>
        Email: {{$order->customer->email}}
      </address>
    </div><!-- /.col -->
    <div class="col-sm-4 invoice-col">
      <b>Order ID:</b> {{$order->order_number}}<br>
      <b>Order Date:</b> {{$order->created_at->format('F j, Y, g:i a')}}<br>
      <b>Shipping Method:</b> {{$order->shippingType}}<br>
      @if($order->tracking_number)
        <b>Tracking Number:</b> {{$order->tracking_number}}<br>
      @endif
      @if($order->carrier)
        <b>Carrier:</b> {{$order->carrier}}<br>
      @endif
      @if($order->service)
        <b>Service:</b> {{$order->service}}<br>
      @endif
    </div><!-- /.col -->
  </div><!-- /.row -->

  @foreach ($order->designs as $design)

    <div class="row text-center"> 
      <h3 style="display:inline">{{$design->displayname}}</h3>
      <a type="button" class="btn btn-info" href="javascript:void(0)" onclick="editfromadmin('{{$design->id}}');">Edit</a>
      <br>
      <center>
      <div class="table-content table-responsive" style="margin-bottom: 30px;     overflow-x: hidden;">
          <div class="row">
              @if(count($design->designsides) == 1)
                  <div class="col-md-4"></div>
                      <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <a href="http://{{$design->designsides[0]->design_product_image}}" target="_blank">
                          <img class="img-thumbnail" src="http://{{$design->designsides[0]->design_product_image}}">
                        </a>
                        <br>
                        <a class="btn btn-link"  href="http://{{$design->designsides[0]->svg}}" style="display: inline-block; font-size: 10px; padding:0;" download>
                            {{$design->title}}_{{$design->designsides[0]->side}}.svg
                        </a>
                      </div>
                  <div class="col-md-4"></div>
              @elseif(count($design->designsides) == 2)
                  <div class="col-md-2"></div>
                      @foreach($design->designsides as $side)
                          <div class="col-md-4">
                            <a href="http://{{$side->design_product_image}}" target="_blank">
                              <img class="img-thumbnail" src="http://{{$side->design_product_image}}">
                            </a>
                            <br>
                            <a class="btn btn-link"  href="http://{{$side->svg}}" style="display: inline-block; font-size: 10px; padding:0;" download>
                                {{$design->title}}_{{$side->side}}.svg
                            </a>
                          </div>
                      @endforeach
                  <div class="col-md-2"></div>
              @elseif(count($design->designsides) == 3)
                  @foreach($design->designsides as $side)
                      <div class="col-md-4">
                        <a href="http://{{$side->design_product_image}}" target="_blank">
                          <img class="img-thumbnail" src="http://{{$side->design_product_image}}">
                        </a>
                        <br>
                        <a class="btn btn-link"  href="http://{{$side->svg}}" style="display: inline-block; font-size: 10px; padding:0;" download>
                            {{$design->title}}_{{$side->side}}.svg
                        </a>
                      </div>
                  @endforeach
              @else
                  @foreach($design->designsides as $side)
                      <div class="col-md-3">
                        <a href="http://{{$side->design_product_image}}" target="_blank">
                          <img class="img-thumbnail" src="http://{{$side->design_product_image}}">
                        </a>
                        <br>
                        <a class="btn btn-link"  href="http://{{$side->svg}}" style="display: inline-block; font-size: 10px; padding:0;" download>
                            {{$design->title}}_{{$side->side}}.svg
                        </a>
                      </div>
                  @endforeach
              @endif
          </div>
      </div>
      </center>
    </div>
    <!-- Table row -->
    <div class="row">
        <div class="col-xs-3">
            {{$design->product->name}}
            <br>
            <b>Brand:</b> {{$design->product->brand}}<br>
            <b>Style #:</b> {{$design->product->stylenumber}}<br>
            <b>Color:</b> {{$design->product->color->name}}
        </div><!-- /.col -->
        <div class="col-xs-9 table-responsive">
          <table class="table table-striped">
              <thead>
                <tr>
                    @foreach($design->sizes as $size)
                      <th>{{$size->name}}</th>
                    @endforeach
                </tr>
              </thead>
              <tbody>
                <tr>
                    @foreach($design->sizes as $size)
                      <td>{{$size->pivot->quantity}}</td>
                    @endforeach
                </tr>
              </tbody>
          </table>
        </div><!-- /.col -->
    </div><!-- /.row -->
  @endforeach
  <!-- this row will not appear when printing -->
  <div class="row no-print">
    <div class="col-xs-12">
     <!-- <a href="{{ URL::to('/admin/orderdetailsprint/'.$order->id) }}" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
        <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
      <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>-->
      <a class="btn btn-default pull-right" href="{{ URL::to('/admin/orderdetailspdf/'.$order->id) }}"  target="_blank"><i class="fa fa-download"></i>Generate PDF</a>
    </div>
  </div>
</section><!-- /.content -->
@endsection

