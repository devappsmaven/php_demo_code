<!DOCTYPE html>

<html>

    <head>

    <title>VividCustoms Order Shipped</title>
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
                <thead>
                <tbody>
                <tr>
                    <td colspan="2" align="left">
                    <p><b>Order ID#:</b>{{$order->order_number}}<br>
                    <b>Order Date:</b> {{$order->created_at->format('F j, Y, g:i a')}}<br>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            <table align="center" width="550" style=" border: solid; background:#4598ba none repeat scroll 0 0">
                <tbody>
                    <tr align="left">
                        <p>Your order has been shipped!</p>
                        @if ($order->carrier == 'USPS') 
                            <p>Tracking #:<a href="https://tools.usps.com/go/TrackConfirmAction.action?tLabels={{$order->tracking_number}}" target="blank">{{$order->tracking_number}}</a></p>
                        @elseif($order->carrier == 'UPS')
                            <p>Tracking #:<a href="https://wwwapps.ups.com/tracking/tracking.cgi?tracknum={{$order->tracking_number}}" target="blank">{{$order->tracking_number}}</a></p>
                        @endif
                        <p>Carrier: {{$order->carrier}}</p>
                    </tr>
                </tbody>
            </table>
            <br>
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