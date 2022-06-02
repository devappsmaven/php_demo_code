<?php
  ob_start();
  session_start();
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vivid Customs || Shopping Cart</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="https://www.vividcustoms.com/img/icon/favicon.png">
    <!-- All CSS Files -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{ asset('/css/frontend/designstudio/bootstrap.min.css') }}">
    <!-- Nivo-slider css -->
    <link rel="stylesheet" href="{{ asset('/css/frontend/designstudio/nivo-slider.min.css') }}">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{ asset('/css/frontend/designstudio/core.css') }}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{ asset('/css/frontend/designstudio/shortcode/shortcode.css') }}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{ asset('/css/frontend/designstudio/style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('/css/frontend/designstudio/responsive.css') }}">
    <!-- Template color css -->
    <link rel="stylesheet" data-style="styles" href="{{ asset('/css/frontend/designstudio/color/color-core.css') }}">
    <!-- User style -->
    <link rel="stylesheet" data-style="styles" href="{{ asset('/css/frontend/designstudio/custom.css') }}">
    <!-- Google Tag Manager -->
  	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    	})(window,document,'script','dataLayer','GTM-N4H9HL8');
    </script>
  	<!-- End Google Tag Manager -->
    <style type="text/css">
      li.active a, li.active {background-color: #ffffff !important;}

      .modal-header-success {
        color:#fff;
        padding:9px 15px;
        border-bottom:1px solid #eee;
        background-color: #5cb85c;
        -webkit-border-top-left-radius: 5px;
        -webkit-border-top-right-radius: 5px;
        -moz-border-radius-topleft: 5px;
        -moz-border-radius-topright: 5px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
      }

      .modal-header-warning {
        color:#fff;
        padding:9px 15px;
        border-bottom:1px solid #eee;
        background-color: #f0ad4e;
        -webkit-border-top-left-radius: 5px;
        -webkit-border-top-right-radius: 5px;
        -moz-border-radius-topleft: 5px;
        -moz-border-radius-topright: 5px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
      }
      
      .modal-header-danger {
        color:#fff;
        padding:9px 15px;
        border-bottom:1px solid #eee;
        background-color: #d9534f;
        -webkit-border-top-left-radius: 5px;
        -webkit-border-top-right-radius: 5px;
        -moz-border-radius-topleft: 5px;
        -moz-border-radius-topright: 5px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
      }

      .modal-header-info {
        color:#fff;
        padding:9px 15px;
        border-bottom:1px solid #eee;
        background-color: #5bc0de;
        -webkit-border-top-left-radius: 5px;
        -webkit-border-top-right-radius: 5px;
        -moz-border-radius-topleft: 5px;
        -moz-border-radius-topright: 5px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
      }

      .modal-header-primary {
        color:#fff;
        padding:9px 15px;
        border-bottom:1px solid #eee;
        background-color: #428bca;
        -webkit-border-top-left-radius: 5px;
        -webkit-border-top-right-radius: 5px;
        -moz-border-radius-topleft: 5px;
        -moz-border-radius-topright: 5px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
      }

      .titles{
        background-color: #4598ba;
        padding: 5px;
        border-radius: 5px;
      }

      .carttitles{
        color:white;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 15px;
      }

      label{
        color: #666666 !important;
      }

      .border-box{
        border: 1px solid #ccc;
        padding: 8px 0px;
      }

      .loading {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        background: #EEE;
      }

      .loading-text {
        /* Size and position */
        font-size: 25px; /* 1em */
        width: 8em;
        height: 8em;
        position: fixed;
        left: 50%;
        top: 50%;
        margin-top: -100px;
        margin-left: -100px;
        /* Styles */
        border-radius: 50%;
        background: rgba(255,255,255,0.1);
        border: 1em dashed rgba(81,192,240,0.5);
        box-shadow: 
            inset 0 0 2em rgba(255,255,255,0.3),
            0 0 0 0.7em rgba(255,255,255,0.3);
        animation: rota 3.5s linear infinite;
        /* Font styles */
        font-family: 'Racing Sans One', sans-serif;
        color: #444;
        text-align: center;
        text-transform: uppercase;
        text-shadow: 0 .04em rgba(255,255,255,0.9);
        line-height: 6em;
      }

      .loading-text:before,
      .loading-text:after {
        content: "";
        position: absolute;
        z-index: -1;
        border-radius: inherit;
        box-shadow: inset 0 0 2em rgba(255,255,255,0.3);
        border: 1em dashed;
      }

      .loading-text:before {
        border-color: rgba(81,192,240,0.2);
        top: 0; right: 0; bottom: 0; left: 0;
      }

      .loading-text:after {
        border-color: rgba(81,192,240,0.4);
        top: 1em; right: 1em; bottom: 1em; left: 1em; 
      }

      .loading-text .innertext {
        width: 100%;
        height: 100%;
        animation: rota 3.5s linear reverse infinite;
      }

      .loading-text span {
        display: inline-block;
        animation: placeholder 1.5s ease-out infinite;
      }

      .loading-text span:nth-child(1)  { animation-name: loading-1;  }
      .loading-text span:nth-child(2)  { animation-name: loading-2;  }
      .loading-text span:nth-child(3)  { animation-name: loading-3;  }
      .loading-text span:nth-child(4)  { animation-name: loading-4;  }
      .loading-text span:nth-child(5)  { animation-name: loading-5;  }

      @keyframes rota {
        to {  transform: rotate(360deg); }
      }

      @keyframes loading-1 {
        14.28% { opacity: 0.3; }
      }

      @keyframes loading-2 {
        28.57% { opacity: 0.3; }
      }

      @keyframes loading-3 {
        42.86% { opacity: 0.3; }
      }

      @keyframes loading-4 {
        57.14% { opacity: 0.3; }
      }

      @keyframes loading-5 {
        71.43% { opacity: 0.3; }
      }

      @keyframes loading-6 {
        85.71% { opacity: 0.3; }
      }

      @keyframes loading-7 {
        100% { opacity: 0.3; }
      }

      .carthr{
        border-bottom: 1px solid #777474 !important;
        /*border-top: 0 none;
        margin: 20px 0;
        padding: 0;*/
      }
    </style>
    <!-- Modernizr JS -->
    <!-- <script src="https://www.vividcustoms.com/js/vendor/modernizr-2.8.3.min.js"></script> -->
  </head>
  <body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  
    <!-- Body main wrapper start -->
    <div class="wrapper">
      <!-- START HEADER AREA -->
      <!-- BREADCRUMBS SETCTION START -->
      <div class="breadcrumbs-section plr-200 mb-80" style="display: none;">
        <div class="breadcrumbs overlay-bg">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="breadcrumbs-inner">
                  <h1 class="breadcrumbs-title">Shopping Cart</h1>                                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- BREADCRUMBS SETCTION END -->
      @if(Session::has('shoppingcart'))
        <div class="row">
            <div class="col-md-2 col-sm-12">
                <ul class="cart-tab">
                    <li id="lishoppingcart" name="lishoppingcart">
                        <a class="active" href="#shopping-cart" data-toggle="tab">
                            <span>01</span>
                            Shopping cart
                        </a>
                    </li>
                    <li id="licheckout" name="licheckout">
                        <a href="#checkout" data-toggle="tab">
                            <span>02</span>
                            Checkout
                        </a>
                    </li>
                    <li id="licheckoutconfirm" name="licheckoutconfirm">
                        <a href="#checkoutconfirm"  id="acheckoutconfirm" style="display: none;" name="acheckoutconfirm" data-toggle="tab" onclick="ActiveCheckoutConfirm();">
                            <span>03</span>
                            Checkout Confirm
                        </a>
                    </li>
                    <li id="liordercomplete" name="liordercomplete" style="display: none;" class="stage_ready">
                        <a href="#order-complete" data-toggle="tab" id="aordercomplete" name="aordercomplete"  onclick="can_we_congratulate();"></a>
                            <span>04</span>
                            Order complete
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-10 col-sm-12">
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- shopping-cart start -->
                    <div class="tab-pane active" id="shopping-cart">
                        <div class="shopping-cart-content">
                            <div class="titles">
                                <span class="carttitles">Shopping Cart</span>       
                            </div>
                            @foreach((Session::get('shoppingcart')['items']) as $item)
                                <table>
                                    <tbody>
                                        <tr>
                                        <td>
                                            <center>
                                                <span class="menu-title widget-title">Design Name: {{($item['displayname'])}}</span> 
                                            </center>
                                            </td><td>
                                        </td></tr>
                                    </tbody>
                                </table>
                                <hr class="carthr">
                                    <div class="shopping-cart-content" style="border: 1px solid #eee;">                                       
                                        <div class="table-content table-responsive" style="margin-bottom: 30px;     overflow-x: hidden;">
                                            <div class="row">
                                                @if(count($item['sides']) == 1)
                                                    <div class="col-md-4"></div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <img class="order_details" src="{{$item['sides'][0]['img']}}" alt="." width="100%">
                                                        </div>
                                                    <div class="col-md-4"></div>
                                                @elseif(count($item['sides']) == 2)
                                                    <div class="col-md-2"></div>
                                                        @foreach($item['sides'] as $side)
                                                            <div class="col-md-4">
                                                                <img class="order_details" src="{{$side['img']}}" alt="." width="100%">
                                                            </div>
                                                        @endforeach
                                                    <div class="col-md-2"></div>
                                                @elseif(count($item['sides']) == 3)
                                                    @foreach($item['sides'] as $side)
                                                        <div class="col-md-4">
                                                            <img class="order_details" src="{{$side['img']}}" alt="." width="100%">
                                                        </div>
                                                    @endforeach
                                                @else
                                                    @foreach($item['sides'] as $side)
                                                        <div class="col-md-3">
                                                            <img class="order_details" src="{{$side['img']}}" alt="." width="100%">
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <table class="text-center">
                                                <thead>
                                                    <tr> 
                                                        <td colspan="6" class="product-quantity">
                                                            <a href="javascript:void(0)" onclick="redirectpage('{{($item['id'])}}');" class="submit-btn-1 btn-hover-1" style="float:right; padding:6px; margin:6px;">
                                                                <span style="    border: medium none; color: rgb(255, 255, 255); font-size: 13px; font-weight: 700; height: 35px; padding: 0 20px; text-transform: uppercase; transition: all 0.3s ease 0s; width: auto;">Edit Design</span>
                                                            </a>
                                                        </td>
                                                    </tr>    
                                                    <tr>
                                                        <td class="product-price" colspan="6">
                                                            <div class="pro-thumbnail-info text-left">
                                                                <h6 class="product-title-2">
                                                                    <a href="javascript:void(0)">{{($item['product']['name'])}}</a>
                                                                </h6>
                                                                <p>Brand: {{($item['product']['brand'])}}</p>
                                                                <p class="size_details">Color: {{($item['product']['color'])}} </p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr> 
                                                        <td colspan="6">
                                                            @if($item['type'] != 'Designstudio' && $item['type'] != 'EmbroideryStudio' && $item['personalizetype'] != 'none')
                                                                {{$item['personalizelist'][0]['name']}}
                                                                    <table class="text-center">
                                                                        <thead>                                                                                                       
                                                                            <tr>
                                                                                <th class="">Name</th>
                                                                                <th class="">Number</th>
                                                                                <th class="">Size</th>
                                                                                <th class="product-subtotal">total</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="tbody_{{($item['name'])}}">
                                                                            @foreach($item['personalizelist'] as $size)
                                                                                
                                                                                <tr class="{{($item['name'])}}" id="{{($item['name'])}}_{{$size['name']}}">    
                                                                                    <td class=" size_details">
                                                                                        <span class="size_{{($item['name'])}}">{{$size['name']}}</span>
                                                                                    </td>
                                                                                    <td class=" size_details">
                                                                                        <span class="size_{{($item['name'])}}">{{$size['number']}}</span>
                                                                                    </td>
                                                                                    <td class=" size_details">
                                                                                        <span class="size_{{($item['name'])}}">{{$size['size_name']}}</span>
                                                                                    </td>
                                                                                    <td class="product-price size_details">
                                                                                        <span>$</span>
                                                                                        <span class="shirt_price_{{($item['name'])}}">{{round($item['total']/count($item['personalizelist']), 2)}}</span>
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                @else   
                                                                <table class="text-center">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="">size</th>
                                                                            <th class="product-price">price</th>
                                                                            <th class="product-quantity">Quantity</th>
                                                                            <th class="product-subtotal">total</th>
                                                                            <th class="product-remove" style=" width:50px !important;">remove</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="tbody_{{($item['name'])}}">
                                                                        @foreach($item['sizes'] as $size)
                                                                            @if($size['quantity'])
                                                                            <tr class="{{($item['name'])}}" id="{{($item['name'])}}_{{$size['name']}}">    
                                                                                <td class=" size_details">
                                                                                    <span class="size_{{($item['name'])}}">{{$size['name']}}</span>
                                                                                </td>
                                                                                <td class="product-price size_details">
                                                                                    <span>$</span>
                                                                                    <span class="shirt_price_{{($item['name'])}}">{{round($size['price'], 2)}}</span>
                                                                                </td>
                                                                                <td class="product-quantity" style="text-align:center;">
                                                                                    <div class="cart-plus-minus " style="text-align:center;  margin: auto;" onclick="updateAfterAdd(`{{($item['name'])}}_{{$size['name']}}`);">
                                                                                        <input type="text" value="{{$size['quantity']}}" id="qtybutton_{{($item['name'])}}_{{$size['name']}}" name="qtybutton_{{($item['name'])}}_{{$size['name']}}" class="cart-plus-minus-box quantity size_details quantity_{{($item['name'])}}" onchange="updateAfterAdd(`{{($item['name'])}}_{{$size['name']}}`);">
                                                                                    </div> 
                                                                                </td>
                                                                                <td class="product-subtotal size_details">$<span id="total_{{($item['name'])}}_{{$size['name']}}" class="item_total_{{($item['name'])}}">{{round($size['price']*$size['quantity'],2)}}</span>
                                                                                </td>
                                                                                <td class="product-remove">
                                                                                    <i class="zmdi zmdi-close" onclick=" addElements(`{{($item['name'])}}_{{$size['name']}}`); $(this).closest(`tr`).remove();" style="cursor:pointer;"></i>
                                                                                </td>
                                                                            </tr>
                                                                            @endif
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                </thead>
                                            </table>                           
                                            <table>
                                                <tbody>
                                                    <tr>
                                                      <td colspan="3" class="order-total-price"><span style="float:right;">Order SubTotal</span></td>
                                                      <th class="product-quantity">{{($item['num_shirts'])}}</th>
                                                      <td class="order-total-price">$<span id="subtotal_{{($item['name'])}}" style="float:right;">{{round($item['num_shirts']* $item['price_per_shirt'],2)}}</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        @if($item['type'] != 'Designstudio' && $item['type'] != 'EmbroideryStudio' && $item['personalizetype'] == 'none')
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="titles">
                                                    <span class="carttitles">Add more sizes</span>       
                                                    </div>
                                                    <div class="box-shadow" style="margin-bottom: 10px; padding: 10px;">
                                                        <table>
                                                            <tbody>
                                                                <tr> 
                                                                    <td class="product-quantity">
                                                                        <div id="sizesenables_div_{{($item['name'])}}" class="">
                                                                            <center>
                                                                                <span>Select Size :</span>
                                                                                <select id="sizesenables_{{($item['name'])}}">
                                                                                    @foreach($item['sizes'] as $size)
                                                                                        @if($size['quantity'] == 0)
                                                                                            <option value="{{$size['name']}}">{{$size['name']}}</option>
                                                                                        @endif
                                                                                    @endforeach                                                                        
                                                                                </select> 
                                                                                <button class="submit-btn-1  btn-hover-1" type="button" onclick="addSize(`{{($item['name'])}}`);">Add Size</button>
                                                                            </center>    
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div> 
                                        @endif

                                    </div>
                            @endforeach
                        </div>
                        <div class="row">            
                            <div class="col-md-12">
                                <div class="payment-details box-shadow p-15 border-box" style="padding: 0px 8px;">
                                    <table>
                                        <tbody>
                                            <tr> 
                                                <td class="order-total" style="text-align: right;">Estimated Total</td>
                                                <td class="order-total-price">$<span id="final_total">{{Session::get('shoppingcart')['subtotal']}}</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <br>
                                <div>
                                    <a id="checkourt_btn" class="submit-btn-1  btn-hover-1" onclick="ActiveCheckout();" type="button" href="#checkout" name="licheckout" data-toggle="tab" aria-expanded="false" style="padding: 10px; cursor:pointer; background: #26c4ff; text-transform: uppercase; border-radius: 0px; font-weight: 700; float:right;">
                                        Proceed to Checkout
                                    </a>
                                </div>
                            </div>
                        </div>
                    <!-- shopping-cart end -->
                    <!-- checkout start -->
                    <div class="tab-pane" id="checkout">
                        <div class="titles">
                            <span class="carttitles">Shipping Method</span>    
                        </div>
                        <form method="post" action="save_order.php">
                        <div class="row">
                            <div class="col-md-6" style="padding-right: 20px;">
                                <div class="row">
                                    <div class="col-md-12 registered-customers border-box mb-50">
                                        <h6 class="widget-title border-left">Billing Info</h6>
                                        <div class="box-shadow">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">First Name:</label>
                                                <div class="col-sm-9">
                                                    @if(Session::get('shoppingcart')['user']['verified'] == "1")
                                                        <input type="text" id="firstname" name="firstname" class="customer_details " value ="{{Session::get('shoppingcart')['user']['firstname']}}" required="true">
                                                    @else
                                                        <input type="text" id="firstname" name="firstname" class="customer_details " placeholder="Your First Name Here..." required="true">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Last Name:</label>
                                                <div class="col-sm-9">
                                                    @if(Session::get('shoppingcart')['user']['verified'] == "1")
                                                        <input type="text" id="lastname" name="lastname" class="customer_details " value="{{Session::get('shoppingcart')['user']['lastname']}}" required="true">
                                                    @else
                                                        <input type="text" id="lastname" name="lastname" class="customer_details " placeholder="Your Last Name Here..." required="true">
                                                    @endif   
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Company Name:</label>
                                                <div class="col-sm-9">
                                                    @if(Session::get('shoppingcart')['user']['verified'] == "1")
                                                        <input type="text" id="company" name="company" class="customer_details " value="{{Session::get('shoppingcart')['user']['company']}}" required="true">
                                                    @else
                                                        <input type="text" id="company" name="company" class="customer_details " placeholder="Your Company Name Here..." required="true">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Street:</label>
                                                <div class="col-sm-9">
                                                    @if(Session::get('shoppingcart')['user']['verified'] == "1")
                                                        <input type="text" id="billing_street" name="billing_street" value="{{Session::get('shoppingcart')['user']['billing_street']}}">
                                                    @else
                                                        <input type="text" id="billing_street" name="billing_street" placeholder="Street Address">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">City:</label>
                                                <div class="col-sm-9">
                                                    @if(Session::get('shoppingcart')['user']['verified'] == "1")
                                                        <input type="text" id="billing_city" name="billing_city" value="{{Session::get('shoppingcart')['user']['billing_city']}}">
                                                    @else
                                                        <input type="text" id="billing_city" name="billing_city" placeholder="City">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">State:</label>
                                                <div class="col-sm-9">
                                                    <select id="billing_state" name="billing_state" class="custom-select customer_details shipping_details" onchange="setState(this);">
                                                        <option value="AL">Alabama</option>
                                                        <option value="AK">Alaska</option>
                                                        <option value="AZ">Arizona</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="CA">California</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="CT">Connecticut</option>
                                                        <option value="DE">Delaware</option>
                                                        <option value="DC">District Of Columbia</option>
                                                        <option value="FL">Florida</option>
                                                        <option value="GA">Georgia</option>
                                                        <option value="HI">Hawaii</option>
                                                        <option value="ID">Idaho</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IN">Indiana</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="ME">Maine</option>
                                                        <option value="MD">Maryland</option>
                                                        <option value="MA">Massachusetts</option>
                                                        <option value="MI">Michigan</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="MT">Montana</option>
                                                        <option value="NE">Nebraska</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="NH">New Hampshire</option>
                                                        <option value="NJ">New Jersey</option>
                                                        <option value="NM">New Mexico</option>
                                                        <option value="NY">New York</option>
                                                        <option value="NC">North Carolina</option>
                                                        <option value="ND">North Dakota</option>
                                                        <option value="OH">Ohio</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="PA">Pennsylvania</option>
                                                        <option value="RI">Rhode Island</option>
                                                        <option value="SC">South Carolina</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="UT">Utah</option>
                                                        <option value="VT">Vermont</option>
                                                        <option value="VA">Virginia</option>
                                                        <option value="WA">Washington</option>
                                                        <option value="WV">West Virginia</option>
                                                        <option value="WI">Wisconsin</option>
                                                        <option value="WY">Wyoming</option>
                                                      </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Zip Code:</label>
                                                <div class="col-sm-9">
                                                    @if(Session::get('shoppingcart')['user']['verified'] == "1")
                                                        <input type="text" id="billing_zip" name="billing_zip" value="{{Session::get('shoppingcart')['user']['billing_zip']}}" onkeypress="return isNumberKey(event)"  maxlength="5">
                                                    @else
                                                        <input type="text" id="billing_zip" name="billing_zip" placeholder="Zip" onkeypress="return isNumberKey(event)" maxlength="5">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Email:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" id="email" name="email" class="input-email" required="true" value="{{Session::get('shoppingcart')['user']['email']}}" oninput="ValidateEmail();">
                                                </div>
                                            </div>
                                            <div class="form-group 1">
                                                <label class="col-sm-2 control-label">Phone:</label>
                                                <div class="col-sm-10">
                                                    @if(Session::get('shoppingcart')['user']['verified'] == "1")
                                                        <input type="text" id="phone" name="phone" class="input-phone " value="{{Session::get('shoppingcart')['user']['phone']}}" required="true" oninput="ValidatePhone();">
                                                    @else
                                                        <input type="text" id="phone" name="phone" class="input-phone " placeholder="Phone here..." required="true" oninput="ValidatePhone();">
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-12">                                                               
                                        <h6 class="widget-title border-left" style="margin-bottom: 10px;">Shipping Method</h6>
                                        <div class="box-shadow">
                                            @if(Session::get('shoppingcart')['shippingType'] == "Standard Shipping" || Session::get('shoppingcart')['shippingType'] == null )
                                                <div class="radio border-box" style="padding-left: 5px;">
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <label><input type="radio" id="ship_type_regular" name="ship_type_radio" value="Standard Shipping" checked="" onclick="calc_shipping_cost('Standard Shipping');">STANDARD</label>
                                                            <p>Guaranteed by || <span class="order-total-price" id="freeshippingcart" name="freeshippingcart">Fri Nov 22 2019 09:12:56 GMT-0600 (hora estándar central)</span></p>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h4 style="color: red; text-align: right; padding-right: 15px;">FREE</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if(Session::get('shoppingcart')['useexpedited'] == 1)
                                                    <div class="radio border-box" style="padding-left: 5px;">
                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <label><input type="radio" id="ship_type_one_week_rush" name="ship_type_radio" value="Expedited 1 Week" onclick="calc_shipping_cost('Expedited 1 Week');">EXPEDITED (15% of the total)</label>
                                                                <p>Guaranteed by || <span class="order-total-price" id="rushdelivery" name="rushdelivery">Fri Nov 15 2019 09:12:56 GMT-0600 (hora estándar central)</span> </p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <h4><span class="order-total-price" id="shipping_cost" name="shipping_cost" style="color: red; text-align: right; padding-right: 15px; float: right;">${{round(((Session::get('shoppingcart')['subtotal']*15)/100),2)}}</span></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                <div class="radio border-box" style="padding-left: 5px;">
                                                <div class="row">
                                                        <div class="col-sm-6">
                                                            <label><input type="radio" id="ship_type_instore" name="ship_type_radio" value="Pick Up" onclick="calc_shipping_cost('Pick Up');">IN STORE PICK UP</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <span class="order-total-price" id="rushdelivery" name="rushdelivery"></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            @elseif(Session::get('shoppingcart')['shippingType'] == "Expedited 1 Week")
                                                <div class="radio border-box" style="padding-left: 5px;">
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <label><input type="radio" id="ship_type_regular" name="ship_type_radio" value="Standard Shipping" onclick="calc_shipping_cost('Standard Shipping');">STANDARD</label>
                                                            <p>Guaranteed by || <span class="order-total-price" id="freeshippingcart" name="freeshippingcart">Fri Nov 22 2019 09:12:56 GMT-0600 (hora estándar central)</span></p>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h4 style="color: red; text-align: right; padding-right: 15px;">FREE</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="radio border-box" style="padding-left: 5px;">
                                                <div class="row">
                                                        <div class="col-sm-8">
                                                            <label><input type="radio" id="ship_type_one_week_rush" name="ship_type_radio" value="Expedited 1 Week"  checked="" onclick="calc_shipping_cost('Expedited 1 Week');">EXPEDITED (15% of the total)</label>
                                                            <p>Guaranteed by || <span class="order-total-price" id="rushdelivery" name="rushdelivery">Fri Nov 15 2019 09:12:56 GMT-0600 (hora estándar central)</span> </p>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h4><span class="order-total-price" id="shipping_cost" name="shipping_cost" style="color: red; text-align: right; padding-right: 15px; float: right;">${{round(Session::get('shoppingcart')['shipping_cost'],2)}}</span></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="radio border-box" style="padding-left: 5px;">
                                                <div class="row">
                                                        <div class="col-sm-6">
                                                            <label><input type="radio" id="ship_type_instore" name="ship_type_radio" value="Pick Up" onclick="calc_shipping_cost('Pick Up');">IN STORE PICK UP</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <span class="order-total-price" id="rushdelivery" name="rushdelivery"></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="radio border-box" style="padding-left: 5px;">
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <label><input type="radio" id="ship_type_regular" name="ship_type_radio" value="Standard Shipping" onclick="calc_shipping_cost('Standard Shipping');">STANDARD</label>
                                                            <p>Guaranteed by || <span class="order-total-price" id="freeshippingcart" name="freeshippingcart">Fri Nov 22 2019 09:12:56 GMT-0600 (hora estándar central)</span></p>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h4 style="color: red; text-align: right; padding-right: 15px;">FREE</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="radio border-box" style="padding-left: 5px;">
                                                <div class="row">
                                                        <div class="col-sm-8">
                                                            <label><input type="radio" id="ship_type_one_week_rush" name="ship_type_radio" value="Expedited 1 Week" onclick="calc_shipping_cost('Expedited 1 Week');">EXPEDITED (15% of the total)</label>
                                                            <p>Guaranteed by || <span class="order-total-price" id="rushdelivery" name="rushdelivery">Fri Nov 15 2019 09:12:56 GMT-0600 (hora estándar central)</span> </p>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h4><span class="order-total-price" id="shipping_cost" name="shipping_cost" style="color: red; text-align: right; padding-right: 15px; float: right;">${{round(Session::get('shoppingcart')['total']*15/100,2)}}</span></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="radio border-box" style="padding-left: 5px;">
                                                <div class="row">
                                                        <div class="col-sm-6">
                                                            <label><input type="radio" id="ship_type_instore" name="ship_type_radio" value="Pick Up" checked="" onclick="calc_shipping_cost('Pick Up');">IN STORE PICK UP</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <span class="order-total-price" id="rushdelivery" name="rushdelivery"></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                </div>

                                <div class="col-md-6">
                                <div class="row">
                                <div class="col-md-12 registered-customers border-box mb-30">
                                    <h6 class="widget-title border-left" style="margin-bottom: 10px;"> Credit Card Info</h6>    
                                    <div class="box-shadow">
                                            
                                        <div class="form-group shipping_details">
                                        <label class="col-sm-4 control-label">Card Type:</label>
                                        <div class="col-sm-8">
                                            <select id="cardtype" name="cardtype" class="custom-select customer_details shipping_details">
                                                <option value="Visa">Visa</option>
                                                <option value="MasterCard">MasterCard</option>
                                                <option value="Discover">Discover</option>
                                        </select>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Card Number:</label>
                                            <div class="col-sm-8">
                                        <input type="text" class="input-credit-card" id="cardnumber" name="cardnumber" placeholder="Card number...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4">Month/Year:</label>
                                            <div class="col-sm-4">
                                            <input class="input-month" type="text" id="expirymonth" name="expirymonth" placeholder="Month MM">
                                            </div>
                                            <div class="col-sm-4">
                                            <input class="input-year" type="text" id="expiryyear" name="expiryyear" placeholder="Year YY">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Security Code:</label>
                                            <div class="col-sm-8">
                                        <input type="text" id="securitycode" name="securitycode" placeholder="Security code..." oninput="validatesecuritycode();" >
                                            </div>
                                        </div>
                                    </div>
                                    </div>


                                    <div class="col-md-12 border-box">                                                                
                                        <h6 class="widget-title border-left" style="margin-bottom: 10px;">Shipping Address </h6><label style="padding-left: 15px;"><input type="checkbox" id="sameaddress" name="sameaddress" onclick="setsameaddress();">Use same address</label>
                                    <div class="box-shadow">
                                    <div class="form-group">
                                            <label class="col-sm-4 control-label">First Name:</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="cardfirstname" name="cardfirstname" placeholder="First Name on card...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Last Name:</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="cardlastname" name="cardlastname" placeholder="Last Name on card...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="col-sm-3 control-label">Company Name:</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="cardcompany" name="cardcompany" class="customer_details " placeholder="Your Company Name Here..." required="true">
                                        </div>
                                        </div>
                                        <div class="form-group shipping_details">
                                        <label class="col-sm-2 control-label">Street:</label>
                                        <div class="col-sm-10">
                                        <input type="text" id="ship_street" name="ship_street" class="customer_details shipping_details" placeholder="Street Address">
                                        </div>
                                        </div>

                                        <div class="form-group shipping_details">
                                        <label class="col-sm-2 control-label">City:</label>
                                        <div class="col-sm-10">
                                        <input type="text" id="ship_city" name="ship_city" class="customer_details shipping_details" placeholder=" City">
                                        </div>
                                        </div>
                                        <div class="form-group shipping_details">
                                        <label class="col-sm-2 control-label">State:</label>
                                        <div class="col-sm-10">
                                                <select id="ship_state" name="ship_state" class="custom-select customer_details shipping_details" onchange="setState(this);">
                                                        <option value="AL">Alabama</option>
                                                        <option value="AK">Alaska</option>
                                                        <option value="AZ">Arizona</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="CA">California</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="CT">Connecticut</option>
                                                        <option value="DE">Delaware</option>
                                                        <option value="DC">District Of Columbia</option>
                                                        <option value="FL">Florida</option>
                                                        <option value="GA">Georgia</option>
                                                        <option value="HI">Hawaii</option>
                                                        <option value="ID">Idaho</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IN">Indiana</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="ME">Maine</option>
                                                        <option value="MD">Maryland</option>
                                                        <option value="MA">Massachusetts</option>
                                                        <option value="MI">Michigan</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="MT">Montana</option>
                                                        <option value="NE">Nebraska</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="NH">New Hampshire</option>
                                                        <option value="NJ">New Jersey</option>
                                                        <option value="NM">New Mexico</option>
                                                        <option value="NY">New York</option>
                                                        <option value="NC">North Carolina</option>
                                                        <option value="ND">North Dakota</option>
                                                        <option value="OH">Ohio</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="PA">Pennsylvania</option>
                                                        <option value="RI">Rhode Island</option>
                                                        <option value="SC">South Carolina</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="UT">Utah</option>
                                                        <option value="VT">Vermont</option>
                                                        <option value="VA">Virginia</option>
                                                        <option value="WA">Washington</option>
                                                        <option value="WV">West Virginia</option>
                                                        <option value="WI">Wisconsin</option>
                                                        <option value="WY">Wyoming</option>
                                                    </select>
                                            </div>
                                        </div>

                                        <div class="form-group shipping_details">
                                        <label class="col-sm-3 control-label">Zip Code:</label>
                                        <div class="col-sm-9">
                                        <input type="text" id="ship_zip" name="ship_zip" class="customer_details shipping_details" placeholder=" Zip">
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    
                                        
                                    </div>

                                    
                                </div>

                        <div class="row">

                            <div class="col-md-12"> 

                                <div class="subcribe clearfix">

                                    

                                            <input type="text" id="promocode" name="promocode" placeholder="Enter your promo code here...">

                                            <button class="submit-btn-2 btn-hover-2" type="button" name="Submit" value="Validate" onclick="validatepromocode();">Apply</button>
                                    </div>
                                    <strong><small class="form-text text-muted text-center" style="display:none;" id="promocodealert" name="promocodealert"> Promo code is successfully applied to the order!</small></strong>

                            </div>

                        </div>

                        <div class="row">                                                               
                            <div class="col-md-12">
                                <div class="payment-details p-30">
                                    <h6 class="widget-title border-left mb-20">Order Total</h6>
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td class="td-title-1">Subtotal:</td>
                                            <td class="td-title-2"><span id="ordersubtotal" name="ordersubtotal">${{Session::get('shoppingcart')['subtotal']}}</span></td>
                                        </tr>
                                        <tr>
                                            <td class="td-title-1">Discount:</td>
                                            <td class="td-title-2"><span id="orderdiscount" name="orderdiscount" style="color: red;">$@if(Session::get('shoppingcart')['discount'] > 0) -{{Session::get('shoppingcart')['discount']}} @else 0 @endif </span></td>
                                        </tr>
                                        <tr>
                                            <td class="td-title-1"><span id="ship_type_title" name="ship_type_title">Shipping Type</span></td>
                                            <td class="td-title-2"><span id="shipping_cost_value" name="shipping_cost_value">${{Session::get('shoppingcart')['shipping_cost']}}</span></td>
                                        </tr>
                                        <tr>
                                            <td class="td-title-1">Tax:</td>
                                            <td class="td-title-2"><span id="ordertax" name="ordertax">${{Session::get('shoppingcart')['tax']}}</span></td>
                                        </tr>
                                        <tr>
                                            <td class="td-title-1">Total:</td>
                                            <td class="td-title-2"><span id="ordertotal" name="ordertotal">${{Session::get('shoppingcart')['total']}}</span></td>
                                        </tr>
                                    </tbody>
                                </table> 
                                </div> 

                                <div>
                                        <a id="checkourtconfirm_btn" class="button extra-small button-black" onclick="ActiveCheckoutConfirm();" type="button" name="licheckoutconfirm" data-toggle="tab" aria-expanded="false" style="padding: 10px; cursor:pointer; background: #26c4ff; text-transform: uppercase; border-radius: 0px; font-weight: 700; float:right;">
                                        Continue
                                        </a>
                                    </div>

                            </div>
                        </div>  

                        </div>



                        <div class="row" style="display: none;">

                            <div class="col-md-6" style="border: 1px solid black">
                                
                                

                                <div class="payment-details pl-10 border-box">


                                <h6 class="widget-title border-left mb-20">your order</h6>
                                    <table id="your_order">
                                        <script type="text/javascript">

                                            function fill_your_order_table()
                                            {
                                               /* //variables
                                                var size_arr = document.getElementsByClassName("size");
                                                var item_total_arr = document.getElementsByClassName("item_total");
                                                console.log("size_arr");
                                                console.log(size_arr);
                                                console.log("item_total_arr");
                                                console.log(item_total_arr);
                                                var your_order_table = document.getElementById("your_order");
                                                //remove previous arrays
                                                $(".your_order_size_row").remove();
                                                //adding size and cost summary
                                                for (var i = 0; i < size_arr.length && i < item_total_arr.length; i++) 
                                                {
                                                    var row = your_order_table.insertRow(i);
                                                    row.className = "your_order_size_row";
                                                    var size_cell = row.insertCell(0);
                                                    size_cell.className = "td-title-1";
                                                    size_cell.innerHTML = size_arr[i].innerText;
                                                    
                                                    var price_cell = row.insertCell(1);
                                                    price_cell.className = "td-title-2";
                                                    price_cell.innerHTML = "$" + item_total_arr[i].innerText;
                                                }*/
                                            }
                                        </script>
                                    </table> 

                                </div>

                            </div>

                        </div>
                    </form>
                    </div>
                    <!-- checkout end -->
                    <div class="tab-pane" id="checkoutconfirm">
                        
                    </div>
                    <!-- order-complete start -->
                    <div class="tab-pane" id="order-complete">
                        <div class="order-complete-content box-shadow">
                            <div class="thank-you p-30 text-center">
                                <h6 class="text-black-5 mb-0">Thank you. Your order has been received.</h6>
                            </div>
                            <div class="order-info p-30 mb-10" style="background-color:lightskyblue;">
                                <ul class="order-info-list">
                                    <li>
                                        <h6 id="congratulations_order_number_label"></h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="row">
                                <!-- our order -->
                                <div class="col-md-6">
                                    <div class="payment-details p-30">
                                        <h6 class="widget-title border-left mb-20">our order</h6>
                                        <table>
                                            <tr>
                                                <td class="td-title-1">Subtotal:</td>
                                                <td class="td-title-2" ><span id="ordersubtotal2" name="ordersubtotal2"></span></td>
                                            </tr>
                                            <tr  id="orderdiscountrow2">
                                                <td class="td-title-1">Discount:</td>
                                                <td class="td-title-2" ><span id="orderdiscount2" name="orderdiscount2"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="td-title-1" ><span id="ship_type_title2" name="ship_type_title2">Standard Shipping</span></td>
                                                <td class="td-title-2" ><span id="shipping_cost_value2" name="shipping_cost_value2">$0.00</span></td>
                                            </tr>
                                            <tr>
                                                <td class="td-title-1">Tax:</td>
                                                <td class="td-title-2" ><span id="ordertax2" name="ordertax2"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="td-title-1">Total:</td>
                                                <td class="td-title-2" ><span id="ordertotal2" name="ordertotal2"></span></td>
                                            </tr>
                                        </table>
                                    </div>         
                                </div>
                                <div class="col-md-6"  id="order-complete-info">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- order-complete end -->
                </div>
            </div>
        </div>
        @else
            <center>
                <h2>"There are currently no items in your cart"</h2>
                    <br>Browse our 
                    <br>
                    <a href="{{asset('products')}}" class="button extra-small button-black" tabindex="0" style="cursor: pointer; background-color: #e62a9ad4 !important;">
                        <span style="font-weight: bold;font-size: 25px; ">Product Page</span>
                    </a>
                    <br>or 
                    <br>
                    <a href="{{asset('designstudio')}}" class="button extra-small button-black" tabindex="0" style="cursor: pointer; background-color: #e62a9ad4 !important;">
                        <span style="font-weight: bold;font-size: 25px; ">Start Designing now</span>
                    </a>
            </center>
        @endif
      <!-- Start page content -->
      <!-- End page content -->
      <!-- START FOOTER AREA -->
      <!-- END FOOTER AREA --> 
      <!-- Body main wrapper end -->
      <!-- Placed JS at the end of the document so the pages load faster -->
      <!-- jquery latest version -->
      <script src="{{ asset('/js/frontend/default/vendor/jquery-3.1.1.min.js') }}"></script>
      <!-- Bootstrap framework js -->
      <script src="{{ asset('/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
      <!-- jquery.nivo.slider js -->
      <script src="{{ asset('/js/frontend/designstudio/jquery.nivo.slider.js') }}"></script>
      <!-- All js plugins included in this file. -->
      <script src="{{ asset('/js/frontend/designstudio/plugins.js') }}"></script>
      <!-- Main js file that contents all jQuery plugins activation. 
      <script src="https://www.vividcustoms.com/js/main.js"></script>-->
      <script src="{{ asset('/js/frontend/designstudio/main.js') }}"></script>
      <script src="{{ asset('/js/frontend/designstudio/classes.js') }}"></script>
      <script src="{{ asset('/js/frontend/designstudio/cart.js') }}"></script>
      <script src="{{ asset('/js/cleave.min.js') }}"></script>
      <script src="{{ asset('/js/cleave-phone.i18n.js') }}"></script>
      <script>
        var cleaveCreditCard = new Cleave('.input-credit-card', {
            creditCard: true
        });
        /* document.querySelector('.button-credit-card').addEventListener('click', function() {
          alert(cleaveCreditCard.getRawValue());
        });*/
        // phone
        var cleavePhone = new Cleave('.input-phone', {
            phone: true,
            phoneRegionCode: 'US',
            delimiter: '-'
        });
        var cleave = new Cleave('.input-month', {
          date: true,
          datePattern: ['m']
        });
        var cleave = new Cleave('.input-year', {
            date: true,
            datePattern: ['y']
        });
      </script>
      <!-- Google Tag Manager (noscript) -->
      <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N4H9HL8" height="0" width="0" style="display:none;visibility:hidden"></iframe>
      </noscript>
      <!-- End Google Tag Manager (noscript) -->
  </body>
</html>