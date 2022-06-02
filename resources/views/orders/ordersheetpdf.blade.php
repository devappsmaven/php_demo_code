<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Order Sheet #{{$order->order_number}}</title>
    <style>
        
        * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    table thead{
      background-color: lightgray;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
    </style>
</head>
<body>

  <table width="100%">
    <tr>
      <td align="left">
          <h3>Order Sheet</h3>
      </td>
      <td align="right">
          <h3>Date: {{$order->created_at->format('m/d/Y')}}</h3>
      </td>
    </tr>
  </table>
  <br>
  <table width="100%">
    <tr>
        <td>
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
        </td>
        <td>
          <strong>Customer Info</strong>
          <br>
          <address>
            {{$order->customer->firstname}} {{$order->customer->lastname}}<br>
            {{$order->customer->billing_street}}<br>
            {{$order->customer->billing_city}}, {{$order->customer->billing_state}} {{$order->customer->billing_zip}}<br>
            Phone: {{$order->customer->phone}}<br>
            Email: {{$order->customer->email}}
          </address>
        </td>
        <td>
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
        </td>
    </tr>
  </table>

  @foreach ($order->designs as $design)
    <center><h3>{{$design->displayname}}</h3></center>
    <br>
    <table width="95%">
      <tr>
        @if(count($design->designsides) == 1)
          <td>
            <center>
              <img src="http://{{$design->designsides[0]->design_product_image}}"  alt="" width="180">
            </center>
          </td>
        @else
          @foreach($design->designsides as $side)
            <td>
              <center>
              <img class="order-img" src="http://{{$side->design_product_image}}"  alt="" width="180">
              </center>
            </td>
          @endforeach
        @endif
    </tr>
  </table>
  <br>
  <table width="100%">
    <tr>
      <td style="width: 30%; padding-top:0px; margint-top:0px;">
        {{$design->product->name}}
        <br>
        <b>Brand:</b> {{$design->product->brand}}<br>
        <b>Style #:</b> {{$design->product->stylenumber}}<br>
        <b>Color:</b> {{$design->product->color->name}}
      </td>
      <td style="width: 70%;">
        <table width="100%"> 
          <thead>
            <tr style="border-bottom:1px solid;">
                @foreach($design->sizes as $size)
                  <th>{{$size->name}}</th>
                @endforeach
            </tr>
          </thead>
          <tr>
            @foreach($design->sizes as $size)
              @if($size->pivot->quantity > 0)
                <td>{{$size->pivot->quantity}}</td>
                @else
                <td></td>
                @endif
              @endforeach
          </tr>
        </table>        
        <br>
      </td>
    </tr>
  </table>
  @endforeach
</body>
</html>

    
    



