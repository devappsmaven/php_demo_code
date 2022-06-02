<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Invoice #{{$order->order_number}}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        .invoice {
            position: relative;
            background: #fff;
            border: 1px solid #f4f4f4;
            padding: 10px;
            margin: 10px 25px;
        }
        .invoice-title {
            margin-top: 0;
        }
        .invoice-col {
            float: left;
            width: 33.3333333%;
        }
    </style>
</head>
<body onload="window.print();">
<section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Invoice
            <small class="pull-right">Date: {{$order->created_at->format('m/d/Y')}}</small>
          </h2>
        </div>
      </div>
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
            <img src="{{ asset('img/logo/logo.png')}}" alt="main logo" width="145" height="auto">
            <br>
            www.vividcustoms.com
          <address>
          <br>
            11119 Neeshaw Dr<br>
            Houston, TX 77065<br>
            Phone: 1800-648-8518 <br>
            Email: info@vividcustoms.com
          </address>
        </div><!-- /.col -->
        <div class="col-sm-4 invoice-col">
        <br>
          <strong>Customer Info</strong>
          <br>
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
            <h3>{{$design->displayname}}</h3>
            <br>
            <center>
                <div class="table-content table-responsive" style="margin-bottom: 30px;     overflow-x: hidden;">
                    <div class="row">
                        @if(count($design->designsides) == 1)
                            <div class="col-md-4"></div>
                                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                    <img class="order-img" src="http://{{$design->designsides[0]->design_product_image}}"  style="width:230px;height:auto;margin:auto;">
                                </div>
                            <div class="col-md-4"></div>
                        @elseif(count($design->designsides) == 2)
                            <div class="col-md-2"></div>
                                @foreach($design->designsides as $side)
                                    <div class="col-md-4">
                                        <img class="order-img" src="http://{{$side->design_product_image}}">
                                    </div>
                                @endforeach
                            <div class="col-md-2"></div>
                        @elseif(count($design->designsides) == 3)
                            @foreach($design->designsides as $side)
                                <div class="col-md-4">
                                    <img class="order-img" src="http://{{$side->design_product_image}}">
                                </div>
                            @endforeach
                        @else
                            @foreach($design->designsides as $side)
                                <div class="col-md-3">
                                    <img class="order-img" src="http://{{$side->design_product_image}}">
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
                          @if($size->pivot->quantity > 0)
                            <td>{{$size->pivot->quantity}}</td>
                            @else
                            <td></td>
                            @endif
                        @endforeach
                    </tr>
                  </tbody>
              </table>
              <br>
              <table class="table table-striped">
                  <thead>
                  <tr>
                      <th>Size</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Ammount</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($design->sizes as $size)
                    @if($size->pivot->quantity > 0)
                      <tr>
                          <td>{{$size->name}}</td>
                          <td>{{$size->pivot->quantity}}</td>
                          <td>{{$size->pivot->price}}</td>
                          <td>{{$size->pivot->ammount}}</td>
                      </tr>
                      @endif
                  @endforeach
                  </tbody>
              </table>
            </div><!-- /.col -->
        </div><!-- /.row -->
      @endforeach
      <div class="row">
        <!-- accepted payments column -->
        <!--<div class="col-xs-6">
          <p class="lead">Payment Methods:</p>
          <img src="{{ asset('img/credit/visa.png')}}" alt="Visa">
          <img src="{{ asset('img/credit/mastercard.png')}}" alt="Mastercard">
          <img src="{{ asset('img/credit/american-express.png')}}" alt="American Express">
          <img src="{{ asset('img/credit/paypal2.png')}}" alt="Paypal">
          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
          </p>
        </div> /.col -->
        <div class="col-xs-6">
          <p class="lead">Amount Due</p>
          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Subtotal:</th>
                <td>${{$order->subtotal}}</td>
              </tr>
              <tr>
                <th>Discount:</th>
                <td class="text-red">$-{{$order->discount}}</td>
              </tr>
              <tr>
                <th>Shipping Cost:</th>
                <td>${{$order->shipping_cost}}</td>
              </tr>
              <tr>
                <th>Tax:</th>
                <td>${{$order->tax}}</td>
              </tr>
              <tr>
                <th>Total:</th>
                <td>${{$order->total}}</td>
              </tr>
            </table>
          </div>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </section><!-- /.content -->    
</body>
</html>

    
    



