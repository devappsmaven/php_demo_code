<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Invoice #{{$order->order_number}}</title>
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
          <h3>Invoice</h3>
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
        <center>
          <img class="order-img" src="{{asset('img/product')}}{{'/'}}{{$design->product->image}}"  alt="" width="180">
        </center>
        <br>
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
        <table width="100%">
          <thead>
            <tr>
              <th>Size</th>
              <th   align="right">Quantity</th>
              <th   align="right">Price</th>
              <th   align="right">Ammount</th>
            </tr>
          </thead>
          <tbody>
            @foreach($design->sizes as $size)
              @if($size->pivot->quantity > 0)
                <tr>
                    <td>{{$size->name}}</td>
                    <td  align="right">{{$size->pivot->quantity}}</td>
                    <td  align="right">{{$size->pivot->price}}</td>
                    <td  align="right">{{$size->pivot->ammount}}</td>
                </tr>
                @endif
            @endforeach
          </tbody>
          <tfoot>
            <tr>
                <td align="left">Ammount Due</td>
                <td colspan="3"></td>
            </tr>
            <tr>
               
                <td align="left">Subtotal</td> <td colspan="2"></td>
                <td align="right">${{$order->subtotal}}</td>
            </tr>
            <tr>
               
                <td align="left">Discount</td> <td colspan="2"></td>
                @if($order->discount > 0)
                  <td align="right">$-{{$order->discount}}</td>
                @else
                  <td align="right">${{$order->discount}}</td>
                @endif
            </tr>
            <tr>
                
                <td align="left">Shipping Cost:</td><td colspan="2"></td>
                <td align="right">${{$order->shipping_cost}}</td>
            </tr>
            <tr>
                
                <td align="left">Tax</td><td colspan="2"></td>
                <td align="right">${{$order->tax}}</td>
            </tr>
            <tr>
               
                <td align="left">Total</td> <td colspan="2"></td>
                <td align="right" class="gray">${{$order->total}}</td>
            </tr>
          </tfoot>
        </table>
        <br>
      </td>
    </tr>
  </table>
  @endforeach
</body>
</html>

    
    



