<!DOCTYPE html>

<html>

    <head>

    <title>VividCustoms Order Completed</title>
    <style>
        body {
        background: #ffffff;
        font-family: 'Raleway', sans-serif;
        font-weight: normal;
        font-style: normal;
        font-size: 14px;
        line-height: 20px;}

        .td{color:#8e8e90;}
        .b{color:#8e8e90 !important;}
        .a{color:#8e8e90 !important;}
        a:hover{color:#8e8e90 !important;}
        a:active{color:#8e8e90 !important;}
        a:visited{color:#8e8e90 !important;}
        a:link{color:#8e8e90 !important;}
        .container{width: 550px;
                margin-right: auto;
                margin-left: auto;
                padding-right: 5px;
                padding-left: 5px;}

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Raleway', sans-serif;
            font-weight: normal;
            color: #8e8e90;
            font-style: normal;
            font-weight: 400;
        }
        h1 {
            font-size: 30px;
            font-weight: 500;
        }
        h2 {
            font-size: 24px;
        }
        h3 {
            font-size: 20px;
        }
        h4 {
            font-size: 18px;
        }
        h5 {
            font-size: 16px;
        }
        h6 {
            font-size: 14px;
        }
        p {
            font-size: 13px;
            font-weight: normal;
            line-height: 16px;
            color: #999999;
            margin-bottom: 10px;
        }
        </style>

    </head>

    <body style='text-align: center; color: #0000ff;'>

        <table width='550' border='0' cellspacing='0' cellpadding='0' align='center'>
            <tbody>
                <tr>
                <td align='left'>
                    <img src='http://vividcustoms.com/img/logo/logo.png' width='250' height='auto'>
                </td>
                <td align='right'>
                    <b><a href='tel:8006488518' style='text-decoration: none;'>(800) 648-8518</a><br>
                    Call us, We`d love to help!</b>
                </td>
                </tr>
            </tbody>
        </table>
        <table width="550" align="center">
            <thead>
                <tr>
                    <th colspan="2"><br>
                        <p style="text-align: left;">Hi {{$order->customer->firstname}} {{$order->customer->lastname}}, <br>
                        <p style="text-align: left;"><span>Thank you for placing your order at </span><a href="www.vividcustoms.com">VividCustoms.com</a>!</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2" align="left">
                        <p><b>Order ID#:</b>{{$order->order_number}}<br>
                        <b>Order Date:</b> {{$order->shipby}}<br>
                        <b>Shipping Method:</b> {{$order->shippingType}}<br><br>
                        <h3>Billing Info</h3>
                        @if ($order->customer->company != '')
                            <b>Company Name:</b> {{$order->customer->company}}<br>
                        @endif    
                        <b>Name:</b> {{$order->customer->firstname}} {{$order->customer->lastname}}<br>
                        {{$order->customer->billing_street}}<br>
                        {{$order->customer->billing_city}}, {{$order->customer->billing_state}} {{$order->customer->billing_zip}}<br><br>
                            <h3>Shipping info</h3>
                        @if ($order->customer->cardcompany != '')
                        
                            <b>Company Name:</b> {{$order->customer->cardcompany}}<br>
                        @endif
                        <b>Name:</b> {{$order->customer->firstname}} {{$order->customer->lastname}}<br>
                        {{$order->customer->shipping_street}}<br>
                        {{$order->customer->shipping_city}}, {{$order->customer->shipping_state}} {{$order->customer->shipping_zip}}<br>
                        Phone: {{$order->customer->phone}}<br>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <table align="center" width="550" style=" border: solid; background:#4598ba none repeat scroll 0 0">
            <tbody>
                <tr>
                    <th style="color: white;">
                        Item(s)
                    </th>
                </tr>
            </tbody>
        </table>
        <br>
        <table align="center" width="550" style="border: 1px solid #cccccc;">
            <body>
                @foreach($order->designs as $item)
                    <tr>
                        <th  colspan="2" style="border-bottom: 1px solid #cccccc;">
                            Design Name: {{$item->displayname}}        
                        </th>
                    </tr>
                    <tr>
                        <div class="table-content table-responsive" style="margin-bottom: 30px;     overflow-x: hidden;">
                            <div class="row">
                                @if(count($item->designsides) == 1)
                                    <div class="col-md-4"></div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <img class="order_details" src="{{$item->sides[0]->design_product_image}}" alt="." width="100%">
                                        </div>
                                    <div class="col-md-4"></div>
                                @elseif(count($item->designsides) == 2)
                                    <div class="col-md-2"></div>
                                        @foreach($item->designsides as $side)
                                            <div class="col-md-4">
                                                <img class="order_details" src="{{$side->design_product_image}}" alt="." width="100%">
                                            </div>
                                        @endforeach
                                    <div class="col-md-2"></div>
                                @elseif(count($item->designsides) == 3)
                                    @foreach($item->designsides as $side)
                                        <div class="col-md-4">
                                            <img class="order_details" src="{{$side->design_product_image}}" alt="." width="100%">
                                        </div>
                                    @endforeach
                                @else
                                    @foreach($item->designsides as $side)
                                        <div class="col-md-3">
                                            <img class="order_details" src="{{$side->design_product_image}}" alt="." width="100%">
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </tr>
                    <tr>
                        <th  colspan="2" align="left" style="border: 2px solid #cccccc;">
                            <b>{{$item->product[0]->name}}</b><br>
                            <b>Brand:</b>{{$item->product[0]->brand}}  <b>Color:{{$item->product[0]->color->name}}</b><br> <br>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                            @if(count($item->personalizelist) > 0)
                                <table align="center" border="0" cellspacing="0" cellpadding="0" width="550" style="border: 1px solid #cccccc;">
                                    <thead >
                                        <tr >
                                        <th style="border: 1px solid #cccccc;">Name</th>
                                        <th style="border: 1px solid #cccccc;">Number</th>
                                        <th style="border: 1px solid #cccccc;">Size</th>
                                        <th style="border: 1px solid #cccccc;">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($item->personalizelist  as $personalize)
                                            <tr>
                                                <th style="border: 1px solid #cccccc;">{{$personalize->name}}</th>
                                                <th style="border: 1px solid #cccccc;">{{$personalize->number}}</th>
                                                <th style="border: 1px solid #cccccc;">{{$personalize->size}}</th>
                                                <th style="border: 1px solid #cccccc;">{{$personalize->total}}</th>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <table align="center" border="0" cellspacing="0" cellpadding="0" width="550" style="border: 1px solid #cccccc;">
                                    <thead >
                                        <tr >
                                        <th style="border: 1px solid #cccccc;">Size</th>
                                        <th style="border: 1px solid #cccccc;">Quantity</th>
                                        <th style="border: 1px solid #cccccc;">Price</th>
                                        <th style="border: 1px solid #cccccc;">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($item->sizes  as $size)
                                            @if($size->pivot->quantity > 0)
                                                <tr>
                                                    <th style="border: 1px solid #cccccc;">{{$size->name}}</th>
                                                    <th style="border: 1px solid #cccccc;">{{$size->pivot->quantity}}</th>
                                                    <th style="border: 1px solid #cccccc;">{{$size->pivot->price}}</th>
                                                    <th style="border: 1px solid #cccccc;">{{$size->pivot->ammount}}</th>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif
                            <br>
                        </th>
                    </tr>
                @endforeach
            </body>
        </table>
        <hr align="center" width="550" style="margin-bottom: 30px; margin-top: 30px; background-color: #4598ba; height: 1px; border: 0;">
        <table align="center" border="0" cellspacing="0" cellpadding="0" width="550">
            <tbody><tr >
                <th align="left"><b>SubTotal</b></th>
                <th align="right">${{$order->subtotal}}</th>
                </tr>
                <tr >
                <th align="left"><b>Discount</b></th>
                <th align="right">${{$order->discount}}</th>
                </tr>
                <tr >
                <th align="left">{{$order->shippingType}}</th>
                <th align="right">${{$order->shipping_cost}}</th>
                </tr>
                <tr >
                <th align="left"><b>Sales Tax</b></th>
                <th align="right">${{$order->tax}}</th>
                </tr>
                <tr >
                <th align="left"><br><b>Order Total</b></th>
                <th align="right"><br><b>${{$order->total}}</b></th>
                </tr>
            </tbody>
            </table>
            
        <h3 align='center'>Our representatives are available to assist you!</h3>
        <p align='center'>Monday - Friday | 9:00 AM - 5:00 PM Central Standard Time</p>
        <h3 align='center'>Call us <a href='tel:8006488518' style='text-decoration: none;'>(800) 648-8518</h3></a>
            <p align='center'>Email: admin@vividcustoms.com</p>
        <br>
        <table style='background: #4598ba none repeat scroll 0 0;' align='center' width='550'>
            <tbody>
                <tr>
                <th style='border-right: 1px solid #eeeeee'><a href='http://vividcustoms.test/designstudio' target='_blank' style='cursor: pointer; text-decoration: none; color: #ffffff !important; height: 40px; line-height: 40px; overflow: hidden; padding: 10px 20px; text-align: center; text-transform: capitalize; white-space: nowrap; width: 50px;'>Designstudio</a></th>
                <th style='border-right: 1px solid #eeeeee'><a href='http://vividcustoms.test/products' target='_blank' style='cursor: pointer; text-decoration: none; color: #ffffff !important; height: 40px; line-height: 40px; overflow: hidden; padding: 10px 20px; text-align: center; text-transform: capitalize; white-space: nowrap; width: 50px;'>Products</a></th>
                <th style='border-right: 1px solid #eeeeee'><a href='http://vividcustoms.test/templatedesign' target='_blank' style='cursor: pointer; text-decoration: none; color: #ffffff !important; height: 40px; line-height: 40px; overflow: hidden; padding: 10px 20px; text-align: center; text-transform: capitalize; white-space: nowrap; width: 50px;'>Design Templates</a></th>
                <th><a href='http://vividcustoms.test/about-us' target='_blank' style='cursor: pointer; color: white; text-decoration: none; color: #ffffff !important; height: 40px; line-height: 40px; overflow: hidden; padding: 10px 20px; text-align: center; text-transform: capitalize; white-space: nowrap; width: 50px;'>About Us</a></th>
                </tr>
                <tr>                                            
                </tr>
            </tbody>
        </table>
    </body>
</html>