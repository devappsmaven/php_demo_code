<?php 
    //phpinfo();
    /*if (!extension_loaded('imagick'))
    {
        echo 'imagick not installed';
    }*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vivid Customs || Mobile Designstudio</title>
    <meta charset="utf-8">
    <meta http-equiv=“Pragma” content=”no-cache”>
    <meta http-equiv=“Expires” content=”-1″>
    <meta http-equiv=“CACHE-CONTROL” content=”NO-CACHE”>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, minimal-ui, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="shortcut icon" type="image/x-icon" href="https://www.vividcustoms.com/img/icon/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/fonts.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Niconne">
    <link rel="stylesheet" href="{{asset('css/frontend/designstudio/gijgo.css')}}">
    <link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/css/gijgo.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/shirtcolors.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/designstudio/custom.css')}}">
    <style type="text/css">

        .ds-header{
            background: #ffffff;
            height: 60px;
            margin-top: 5px;
            border-bottom: 1px solid #eeeeee;
            min-width: 320px;
            width: 100vw;
        }

        .ds-logo{
            float: left;
            min-width: 65px;
            padding-right: calc(100vw - 265px);
        }
        .ds-top-menu-area{
            float:left; 
            width:50px; 
            height:55px; 
            /*padding-right: 5px; 
            padding-left: 5px; */
        }

        .ds-br-1
        {   
            border-right: 1px solid #eee;
        }

        .ds-bl-1
        {   
            border-left: 1px solid #eee;
        }
        .ds-content
        {  
            /*display: flex;*/
            position: relative;
            overflow: hidden;
            /*top: 0;
            left: 0;
            width: 100%;
            height: 100%;*/
            min-width: 320px;
            width: 100vw;
            height: calc(100vh - 120px);
        }

        .ds-footer{
            background: #ffffff;
            height: 65px;
            margin-bottom: 0px;
            bottom: 0;
            position: absolute;
            min-width: 320px;
            width: 100vw;
            border-top: 1px solid #eee;
        }
        .ds-bottom-main-area{

        }
        .ds-bottom-clipart-main-area{

        }
        .ds-bottom-text-main-area{

        }

        .ds-bottom-menu-element{
            float:left;
            width:20vw; 
            height:60px; 
           /* padding-right: 5px; 
            padding-left: 5px; */
        }
        .icon-size
        {
            /*height:35px;*/
            height:2em;
        }

        .ds-a {
            padding: 0px !important;
        }

        .ds-span {
            font-size: 12px !important;
        }

        .ds-a .ds-img {
            background-color:#32a7e0 !important;
            padding: 0px !important;
            border-radius:50%;
            width:3em;
        }
        .ds-design-area{
            border: 0px solid #32a7e0;
            width: 743px;
            height: 810px;
            padding-right: 0px;
            padding-left: 0px;
            margin-right: auto;
            margin-left: auto;
            position: relative;
        }
        .sides {
  position: absolute;
  bottom: 10vh;
  left: 50%;
  z-index: 15;
  width: 60%;
  padding-left: 0;
  margin-left: -30%;
  text-align: center;
  list-style: none;
  
  }

  .undoredo {
    position: absolute;
    top: 0;
    right: 50vw;
    z-index: 15;
    width: 10vw;
    text-align: center;
    list-style: none;
  }

  .sides li{
    display: inline-block;
    cursor: pointer;
    border: 1px solid #696973;
    opacity: 1;
    overflow: hidden;
    transition: all 0.4s;
    width: 30px;
    height: 30px;
    border-radius: 30px;
    margin: 5px;
  }

  .undoredo li{
    cursor: pointer;
    border: 1px solid #696973;
    opacity: 1;
    overflow: hidden;
    transition: all 0.4s;
    width: 30px;
    height: 30px;
    border-radius: 30px;
    margin: 5px;
  }

  .sides .active{
    background: #333333;
    border: 3px solid #31B0D5;
    opacity: 1;
    overflow: hidden;
    width: 50px;
    height: 50px;
    border-radius: 80px;
    margin: 5px;
    }

    .canvasShirt{background-repeat:no-repeat;background-size:cover;background-position:top center;}
    .carousel-caption{top:0;bottom:auto;text-shadow:2px 4px 6px #000000 !important;}
    .carousel-control{opacity:1;}
    .carousel-control.right{cursor:pointer; right:70px;left:auto;background-image:-webkit-linear-gradient(left,rgba(0,0,0,0) 0,rgba(0,0,0,.0) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,0) 0,rgba(0,0,0,.0) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,0)),to(rgba(0,0,0,.0)));background-image:linear-gradient(to right,rgba(0,0,0,0) 0,rgba(0,0,0,0) 100%);background-repeat:repeat-x;}
    .carousel-control.left{cursor:pointer; left:70px;background-image:-webkit-linear-gradient(left,rgba(0,0,0,0) 0,rgba(0,0,0,.0) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,0) 0,rgba(0,0,0,.0) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,0)),to(rgba(0,0,0,.0)));background-image:linear-gradient(to right,rgba(0,0,0,0) 0,rgba(0,0,0,.0) 100%);background-repeat:repeat-x;}
    .carousel-control{opacity:1;}
    .carousel-control.right{right:70px;left:auto;background-image:-webkit-linear-gradient(left,rgba(0,0,0,0) 0,rgba(0,0,0,.0) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,0) 0,rgba(0,0,0,.0) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,0)),to(rgba(0,0,0,.0)));background-image:linear-gradient(to right,rgba(0,0,0,0) 0,rgba(0,0,0,0) 100%);background-repeat:repeat-x;}
    .carousel-control.left{left:70px;background-image:-webkit-linear-gradient(left,rgba(0,0,0,0) 0,rgba(0,0,0,.0) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,0) 0,rgba(0,0,0,.0) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,0)),to(rgba(0,0,0,.0)));background-image:linear-gradient(to right,rgba(0,0,0,0) 0,rgba(0,0,0,.0) 100%);background-repeat:repeat-x;}
    #myCarouselIndicators{bottom:-10px;display:block;}
    #myCarousel{-webkit-transform-origin:unset;transform-origin:unset;-webkit-transform:unset;-moz-transform:unset;-ms-transform:unset;-o-transform:unset;transform:unset;left:none;position:fixed;display:block;}
    @media (min-width:992px) and (max-width:1199px){.SaveDesign{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.15) translate(-50%);transform:scale(0.15) translate(-50%);left:50%;}
        #col10header, #col10body{width:1000px !important;margin-right:auto;margin-left:auto;}
        #myCarouselIndicators{bottom:0px;display:block;}
        .hover2{width:160px;height:auto;padding:5px;}
        #leftcolos, #backcolos{margin-top:0px;margin-bottom:0px;}
        #rightcolos, #frontcolos{margin-top:0px;margin-bottom:0px;}
        .thumbnail2{margin-bottom: 70px;}
        #productdiv{width: 80vw;height: 810px; margin: auto; padding: 5px;}
    }
    @media (min-width:768px) and (max-width:991px){.SaveDesign{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.1) translate(-50%);transform:scale(0.1) translate(-50%);left:50%;}
    
    #myCarouselIndicators{bottom:50px;display:none;}
    .hover2{width:140px;height:auto;padding:5px;}
    #leftcolos, #backcolos{margin-top:0px;margin-bottom:0px;}
    #rightcolos, #frontcolos{margin-top:0px;margin-bottom:0px;}
    .thumbnail2{margin-bottom: 70px;}
    #productdiv{width: 95vw;height: 95vh; margin: auto; padding: 5px;}
    }
    @media (max-width:767px){.SaveDesign{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.1) translate(-50%);transform:scale(0.1) translate(-50%);left:50%;}
    #myCarouselIndicators{bottom:40px;display:none;}
    .left{margin-left:45px !important;}
    .right{margin-right:45px !important;}
    .hover2{width:140px;height:auto;padding:5px;}
    #leftcolos, #backcolos{margin-top:20px;margin-bottom:0px;}
    #rightcolos, #frontcolos{margin-top:0px;margin-bottom:0px;}
    .thumbnail2{margin-bottom: 70px;}
    #productdiv{width: 95vw;height: 95vh; margin: auto; padding: 5px;}
    }
    @media (max-width:480px){.SaveDesign{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.1) translate(-50%);transform:scale(0.1) translate(-50%);left:50%;}
    #myCarouselIndicators{bottom:30px;display:none;}
    .left{margin-left:45px !important;}
    .right{margin-right:45px !important;}
    .hover2{width:120px;height:auto;padding:5px;}
    #leftcolos, #backcolos{margin-top:20px;margin-bottom:0px;}
    #rightcolos, #frontcolos{margin-top:0px;margin-bottom:0px;}
    .thumbnail2{margin-bottom: 70px;}
    #productdiv{width: 95vw;height: 95vh; margin: auto; padding: 5px;}
    }



    @media (min-width:992px) and (max-width:1199px){header{position:fixed;top:0;margin-top:0;width:100%;z-index:200;background-color:white;display:block;}
    footer{position:fixed;bottom:0;margin-bottom:0;width:100% z-index:200;background-color:transparent;display:block;margin-left:-10px;}
    #page{margin-top:40px;display:block;}
    #footer_copyrigth, #description_image{display:none;}
    #footer_menu_bar{display:block;}
    #footer_menu li a img, #footer_menu_art li a img, #footer_menu_text li a img{width:7em;}
    #footer_menu li a , #footer_menu_art li a , #footer_menu_text li a{font-size:1.3em;}
    #work_area{display:none;}
    #textarea_btn{display:block;}
    #myCarousel{-webkit-transform-origin:0 0;transform-origin:0 0;left:50%;position:fixed;display:none;}
    }
    @media (min-width:768px) and (max-width:991px){header{position:fixed;top:0;margin-top:0;width:100%;z-index:200;background-color:white;display:block;}
    footer{position:fixed;bottom:0;margin-bottom:0;width:100% z-index:200;background-color:transparent;display:block;margin-left:-10px;}
    #page{margin-top:40px;display:block;}
    #footer_copyrigth, #description_image{display:none;}
    #footer_menu_bar{display:block;}
    #footer_menu li a img, #footer_menu_art li a img, #footer_menu_text li a img{width:7em;}
    #footer_menu li a , #footer_menu_art li a , #footer_menu_text li a{font-size:1em;}
    #work_area{display:none;}
    #textarea_btn{display:block;}
    #myCarousel{-webkit-transform-origin:0 0;transform-origin:0 0;left:50%;position:fixed;display:none;}
    }
    @media (max-width:767px){header{position:fixed;top:0;margin-top:0;width:100%;z-index:200;background-color:white;display:block;}
    footer{position:fixed;bottom:0;margin-bottom:0;width:100% z-index:200;background-color:transparent;display:block;margin-left:-10px;}
    #page{margin-top:40px;display:block;}
    #footer_copyrigth, #description_image{display:none;}
    #footer_menu_bar{display:block;}
    #footer_menu li a img, #footer_menu_art li a img, #footer_menu_text li a img{width:7em;}
    #footer_menu li a , #footer_menu_art li a , #footer_menu_text li a{font-size:0.8em;}
    #work_area{display:none;}
    #textarea_btn{display:block;}
    #myCarousel{-webkit-transform-origin:0 0;transform-origin:0 0;left:50%;position:fixed;display:none;}
    }
    @media (max-width:480px){header{position:fixed;top:0;margin-top:0;width:100%;z-index:200;background-color:white;display:block;}
    footer{position:fixed;bottom:0;margin-bottom:0;width:100% z-index:200;background-color:transparent;display:block;margin-left:-10px;}
    #page{margin-top:40px;display:block;}
    #footer_copyrigth, #description_image{display:none;}
    #footer_menu_bar{display:block;}
    #footer_menu li a img, #footer_menu_art li a img, #footer_menu_text li a img{width:7em;}
    #footer_menu li a , #footer_menu_art li a , #footer_menu_text li a{font-size:0.5em;}
    #work_area{display:none;}
    #textarea_btn{display:block;}
    #myCarousel{-webkit-transform-origin:0 0;transform-origin:0 0;left:50%;position:fixed;display:none;}
    }
    @media (max-width:319px){header{position:fixed;top:0;margin-top:0;width:100%;z-index:200;background-color:white;display:block;}
    footer{position:fixed;bottom:0;margin-bottom:0;width:100% z-index:200;background-color:transparent;display:block;margin-left:-10px;}
    #page{margin-top:40px;display:block;}
    #footer_copyrigth, #description_image{display:none;}
    #footer_menu_bar{display:block;}
    #footer_menu li a img, #footer_menu_art li a img, #footer_menu_text li a img{width:7em;}
    #footer_menu li a , #footer_menu_art li a , #footer_menu_text li a{font-size:0.4em;}
    #work_area{display:none;}
    #textarea_btn{display:block;}
    #myCarousel{-webkit-transform-origin:0 0;transform-origin:0 0;left:50%;position:fixed;display:none;}
    }
    @media (max-width:240px){header{position:fixed;top:0;margin-top:0;width:100%;z-index:200;background-color:white;display:block;}
    footer{position:fixed;bottom:0;margin-bottom:0;width:100% z-index:200;background-color:transparent;display:block;margin-left:-10px;}
    #page{margin-top:40px;display:block;}
    #footer_copyrigth, #description_image{display:none;}
    #footer_menu_bar{display:block;}
    #footer_menu li a img, #footer_menu_art li a img, #footer_menu_text li a img{width:7em;}
    #footer_menu li a , #footer_menu_art li a , #footer_menu_text li a{font-size:0.3em;}
    #work_area{display:none;}
    #textarea_btn{display:block;}
    #myCarousel{-webkit-transform-origin:0 0;transform-origin:0 0;left:50%;position:fixed;display:none;}
    }
    @media (max-width:161px){header{position:fixed;top:0;margin-top:0;width:100%;z-index:200;background-color:white;display:block;}
    footer{position:fixed;bottom:0;margin-bottom:0;width:100% z-index:200;background-color:transparent;display:block;margin-left:-10px;}
    #page{margin-top:40px;display:block;}
    #footer_copyrigth, #description_image{display:none;}
    #footer_menu_bar{display:block;}
    #footer_menu li a img, #footer_menu_art li a img, #footer_menu_text li a img{width:7em;}
    #footer_menu li a , #footer_menu_art li a , #footer_menu_text li a{font-size:0.2em;}
    #work_area{display:none;}
    #textarea_btn{display:block;}
    #myCarousel{-webkit-transform-origin:0 0;transform-origin:0 0;left:50%;position:fixed;display:none;}
    }
    @media (max-width:82px){header{position:fixed;top:0;margin-top:0;width:100%;z-index:200;background-color:white;display:block;}
        footer{position:fixed;bottom:0;margin-bottom:0;width:100% z-index:200;background-color:transparent;display:block;margin-left:-10px;}
        #page{margin-top:40px;display:block;}
        #footer_copyrigth, #description_image{display:none;}
        #footer_menu_bar{display:block;}
        #footer_menu li a img, #footer_menu_art li a img, #footer_menu_text li a img{width:7em;}
        #footer_menu li a , #footer_menu_art li a , #footer_menu_text li a{font-size:0.2em;}
        #work_area{display:none;}
        #textarea_btn{display:block;}
        #myCarousel{-webkit-transform-origin:0 0;transform-origin:0 0;left:50%;position:fixed;display:none;}
    }
    .loader{ position: absolute; top: 0 !important; bottom: 0 !important; left: 0 !important; right: 0 !important; background: url("/img/icon/loading.gif") 50% 50% no-repeat ; z-index: 99; width: 50% !important; height: 50% !important; margin: auto !important;border-radius: 50% !important;}
  .loaderEmail{ position: absolute; top: 0 !important; bottom: 0 !important; left: 0 !important; right: 0 !important; background: url("/img/icon/sendingemail.gif") 50% 50% no-repeat ; z-index: 99; /*width: 50% !important; height: 50% !important; margin: auto !important;border-radius: 50% !important;*/}
  .loaderSave{ position: absolute; top: 0 !important; bottom: 0 !important; left: 0 !important; right: 0 !important; background: url("/img/icon/saving.gif") 50% 50% no-repeat ; z-index: 99; /*width: 50% !important; height: 50% !important; margin: auto !important;border-radius: 50% !important;*/}
    </style>
</head>

<body>
    <div id="loader" class="loader" style="display: block;">
    </div>
    <div class="page"  id="app">
        <div class="ds-header" >
            <div class="ds-logo" data-toggle="collapse" data-target="#dsmenu">
                <a href="javascript:void(0)">
                    <img src="https://www.vividcustoms.com/img/logo/vividcustoms-logo-vc.png" id="logo" style="width: 4em;">
                </a>
            </div>   
            <div class="row">
                <div class="ds-top-menu-area ds-bl-1">
                    <center>
                        <span style="cursor: pointer !important;" onclick="ShowYourDesign();return false;">
                            <img src="https://www.vividcustoms.com/img/icon/new/your-design-mobile.png" class="icon-size" id="getPriceBtn">
                        </span>
                        <br>
                        <span style="font-size: 12px;">Design</span>
                    </center>
                </div>
                <div class="ds-top-menu-area ds-bl-1">
                        <center>
                            <span id="directcheckout" onclick="ShowSaveShare();return false;">
                        <img src="https://www.vividcustoms.com/img/icon/new/save.png" class="icon-size">
                    </span>
                    <br>
                    <span style="font-size: 12px;">Save</span>
                </center>
                </div>
                <div class="ds-top-menu-area ds-bl-1">
                        <center>
                            <span id="directcheckout" onclick="SaveDesignNameWindow('Check-out');">
                        <img src="https://www.vividcustoms.com/img/icon/new/cart.png" class="icon-size">
                    </span>
                    <br>
                    <span style="font-size: 12px;">Cart</span>
                </center>
                </div>
                <div class="ds-top-menu-area ds-bl-1">
                        <center>
                            <span style="cursor: pointer !important;" onclick=" ShowGetPrice();">
                        <img src="https://www.vividcustoms.com/img/icon/money.png" class="icon-size" id="getPriceBtn">
                    </span>
                    <br>
                    <span style="font-size: 12px;">Price</span>
                </center>
                </div>
            </div>
        </div>

        <div class="ds-content">
            <div class="ds-work-area">

            </div>
            <div class="ds-design-area col-xs-7" id="ds-design-area">
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                    <ol class="undoredo">
                    <li  name="undo" id="undo" style="border: 0px solid #696973;">
                        <img src="{{asset('img/icon/undo.png')}}" class="img-responsive" width="30" height="30">
                    </li>
                    <li name="redo" id="redo" style="border: 0px solid #696973;">
                        <img src="{{asset('img/icon/redo.png')}}" class="img-responsive" width="30" height="30">
                    </li>
                    <li  name="zoomin" id="zoomin" style="border: 0px solid #696973;">
                        <img src="{{asset('img/icon/zoomin.png')}}" class="img-responsive" width="30" height="30">
                    </li>
                    <li  name="zoomout" id="zoomout" style="border: 0px solid #696973;">
                        <img src="{{asset('img/icon/zoomout.png')}}" class="img-responsive" width="30" height="30">
                    </li>
                    <li  name="clone" id="clone" style="border: 0px solid #696973;" onclick="copyclipart();">
                        <img src="{{asset('img/icon/clone.png')}}" class="img-responsive" width="30" height="30">
                    </li>
                </ol>
                    <div class="carousel-inner"  id="carousel-inner">
                    @foreach ($product->sides as $side)
                        @if($side->pivot->enable)
                            @if($loop->first)
                                <div class="item active" id="{{$side->slug}}">
                                    <div class="canvasShirt" id="{{$side->slug}}CanvasShirt" style="border: 0px solid #eeeeee; width: 743px; height: 810px; min-height:728px; background-image: url('{{asset('img/product')}}{{'/'}}{{$side->pivot->image}}')">
                                        @foreach ($product->parent->printareas as $printarea)
                                            @if($printarea->side == $side->slug)
                                                <div id="{{$printarea->slug}}canvas-wrapper" style="width: {{$printarea->width}}px; height: {{$printarea->height}}px; border: 0px solid #32a7e0;  position: absolute; top:{{$printarea->top}}px; left:{{$printarea->left}}px">
                                                    <canvas id="{{$printarea->slug}}Canvas" style="border: 0px solid #000000; touch-action: none;">
                                                    </canvas>
                                                    <div class="tooltip-outline error-tooltip" style="left: 82px; display: none;" id="{{$side->slug}}desingerror">
                                                        <div class="clearfix">
                                                            <small style="color: red">Your Art/Work exceeds the print area</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                        
                                    </div>
                                    <div class="carousel-caption">
                                        <p>{{$side->name}}</p>
                                    </div>
                                </div>
                            @else
                                <div class="item" id="{{$side->slug}}">
                                    <div class="canvasShirt" id="{{$side->slug}}CanvasShirt" style="border: 0px solid #eeeeee; width: 743px; height: 810px; min-height:728px; background-image: url('{{asset('img/product')}}{{'/'}}{{$side->pivot->image}}')">
                                        @foreach ($product->parent->printareas as $printarea)
                                            @if($printarea->side == $side->slug)
                                                <div id="{{$printarea->slug}}canvas-wrapper" style="width: {{$printarea->width}}px; height: {{$printarea->height}}px; border: 0px solid #32a7e0;  position: absolute; top:{{$printarea->top}}px; left:{{$printarea->left}}px">
                                                    <canvas id="{{$printarea->slug}}Canvas" style="border: 0px solid #000000; touch-action: none;">
                                                    </canvas>
                                                    <div class="tooltip-outline error-tooltip" style="left: 82px; display: none;" id="{{$side->slug}}desingerror">
                                                        <div class="clearfix">
                                                            <small style="color: red">Your Art/Work exceeds the print area</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                        
                                    </div>
                                    <div class="carousel-caption">
                                        <p>{{$side->name}}</p>
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endforeach
                    </div>
                    <a class="left carousel-control" >
                        <span class="glyphicon glyphicon-chevron-left" style="color: #31B0D5;" href="#myCarousel" data-slide="prev" onclick="setcanvas('previous');"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control">
                        <span class="glyphicon glyphicon-chevron-right" style="color: #31B0D5;" href="#myCarousel" data-slide="next" onclick="setcanvas('next');"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="ds-footer">
            <center>
                <div class="ds-bottom-main-area">
                    <div class="ds-bottom-menu-element">
                        <center>
                            <a class="ds-a" data-toggle="tab" href="#productSection">
                                <img class="ds-img" id="change_item" src="{{asset('img/icon/product.png')}}">
                                <br>
                                <span class="ds-span">Products</span>
                            </a>
                        </center>
                    </div>
                    <div class="ds-bottom-menu-element">
                        <center>
                            <a class="ds-a" data-toggle="tab" href="#addArt">
                                <img class="ds-img" id="add_art" src="{{asset('img/icon/add-art.png')}}"  onclick="/*startcategories();*/" >
                                <br>
                                <span class="ds-span">Add Art</span>
                            </a>
                        </center>
                    </div>
                    <div class="ds-bottom-menu-element">
                        <center>
                            <a class="ds-a" data-toggle="tab" href="#textSection">
                                <img class="ds-img" id="add_text" src="{{asset('img/icon/add-text.png')}}" >
                                <br>
                                <span class="ds-span">Add Text</span>
                            </a>
                        </center>
                    </div>
                    <div class="ds-bottom-menu-element">
                        <center>
                            <a class="ds-a" data-toggle="tab" href="#addTemplate">
                                <img class="ds-img" id="add_template" src="{{asset('img/icon/templates.png')}}"  onclick="starttemplatecategories();" >
                                <br>
                                <span class="ds-span">Templates</span>
                            </a>
                        </center>
                    </div>
                    <div class="ds-bottom-menu-element">
                        <center>
                            <a class="ds-a" data-toggle="tab" href="#personalize">
                                <img class="ds-img" id="personalize" src="{{asset('img/icon/personalize.png')}}" >
                                <br>
                                <span class="ds-span">Personalize</span>
                            </a>
                        </center>
                    </div>
                </div>
                <div class="ds-bottom-clipart-main-area">
                    
                </div>
                <div class="ds-bottom-text-main-area">
                
                </div>
            </center>
        </div>
        
        <div class="modal fade" id="productmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" style="  max-width: 1360px;  width: 100%;height: 100vh; margin: auto;padding: 0;">
                <div class="modal-content" style="width: 100%; height: 100vh; margin: 0; padding: 0;">
                    <!--<div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><span class="uppercase">Products</span></h4>
                    </div>-->
                    <div class="modal-body" style="width: 100%; height: 100vh;">
                        <productlist2></productlist2>
                    </div>
                </div>
                <button class="btn btn-info btn-block" id="btn-done" style="display:none; position:absolute; bottom:0; margin-bottom:0" onclick="document.getElementById('filters-colum').style.display = 'none'; document.getElementById('data-colum').style.display = 'block'; document.getElementById('listproduct').style.display = 'block'; document.getElementById('singleproduct').style.display = 'none'; document.getElementById('btn-done').style.display = 'none'; document.getElementById('sort-by').style.display = 'none';  document.getElementById('sortby-filter').style.display = 'block'; document.getElementById('results').style.display = 'block';">
                    Done
                </button>
            </div>
        </div>
        <div id="signupModal" class="modal fade " role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="text-align: center;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title uppercase">Login/Register</h5>
                        </div>
                        <div class="modal-body" style="background-color: #eeeeee;">
                            <form id="login-form" method="post" onsubmit="return login()" role="form" style="display: block;">
                                <div class="panel panel-info"  id="panellogin">
                                    <div class="panel-heading"> <span class="uppercase">RETURNING CUSTOMER </span></div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-md-2" for="user_name" style="text-align: left;">Username:</label>
                                            <div class="col-xs-12 col-md-10">
                                                <input type="username" class="form-control" id="user_name" placeholder="Enter Username" name="user_name"><br>
                                            </div>
                                            <!--<small id="passwordHelp" class="form-text text-muted" data-toggle="tooltip" data-placement="top" title="Passwords must be at least 8 characters in length include (lower case letters, upper case letters, number and special characters).">Make sure password meets specifications.</small>-->
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-md-2" for="pass_word" style="text-align: left;">Password:</label>
                                            <div class="col-xs-12 col-md-10">
                                                <input type="password" class="form-control" id="pass_word" placeholder="Enter Password" name="pass_word"><br>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <input type="hidden" name="operationL" id="operationL" value="login">
                                            <button type="button" class="btn btn-block" onclick="login();" style="cursor: pointer; text-transform: uppercase; text-decoration: none;font-size: 1em;background-color: #c00;border-color: #c00;color: #fff;font-weight: 500;padding: 10px;width: 100%;text-align: center;">Sign In</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="panel panel-info"  id="panelnew">
                                <div class="panel-heading"> <span class="uppercase">NEW CUSTOMER </span></div>
                                <div class="panel-body">
                                     <div class="form-group">
                                    <input type="hidden" name="operationL" id="operationL" value="login">
                                        <button type="button" class="btn btn-block" onclick="document.getElementById('panellogin').style.display= 'none'; document.getElementById('panelnew').style.display= 'none'; document.getElementById('panelregister').style.display= 'block';" style="cursor: pointer; text-transform: uppercase; text-decoration: none;font-size: 1em;background-color: #c00;border-color: #c00;color: #fff;font-weight: 500;padding: 10px;width: 100%;text-align: center;">Create Account</button>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-info" id="panelregister" style="display: none;">
                                <div class="panel-heading"> <span class="uppercase">NEW CUSTOMERS </span></div>
                                <div class="panel-body">
                                    <form action="{{asset('signuplogin.php')}}" method="post" class="form-horizontal">
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-md-2" for="firstname"  style="text-align: left;"> <span class="visible-lg visible-md">First Name:</span> <span class="visible-sm visible-xs">First Name *</span></label>
                                            <div class="col-xs-12 col-md-10">
                                                <input type="text" class="form-control" id="firstname" placeholder="Enter first name" name="firstName">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-md-2" for="lastname"  style="text-align: left;">Last Name:</label>
                                            <div class="col-xs-12 col-md-10">
                                                <input type="lastname" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastName">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-md-2" for="username"  style="text-align: left;">Username:</label>
                                            <div class="col-xs-12 col-md-10">
                                                <input type="username" class="form-control" id="username" placeholder="Enter Username" name="username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-md-2" for="pwd"  style="text-align: left;">Password:</label>
                                            <div class="col-xs-12 col-md-10" align="left">
                                                <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
                                                <a href="#passwordrules" class="" data-toggle="collapse">Specifications</a>
                                                <div id="passwordrules" class="collapse">
                                                  <p>Passwords must be at least 8 characters.</p>
                                                  <p>include (lower case letters, upper case letters, number and special characters)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-md-2" for="email"  style="text-align: left;">E-mail:</label>
                                            <div class="col-xs-12 col-md-10">
                                                <input type="email" class="form-control" id="email" placeholder="Enter E-mail" name="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-md-2" for="email"  style="text-align: left;">Confirm E-mail:</label>
                                            <div class="col-xs-12 col-md-10">
                                                <input type="email" class="form-control" id="confirmemail" placeholder="Enter Confirmation E-mail" name="confirmemail">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-md-2" for="phone"  style="text-align: left;">Phone:</label>
                                            <div class="col-xs-12 col-md-10">
                                                <input type="phone" class="form-control" id="phone" placeholder="Enter Phone" name="phone">
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-block" onclick="register();" style="cursor: pointer; text-transform: uppercase; text-decoration: none;font-size: 1em;background-color: #c00;border-color: #c00;color: #fff;font-weight: 500;padding: 10px;width: 100%;text-align: center;">Create Account</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         <div class="modal fade" id="SaveShareModal" role="dialog" style="overflow-y: auto;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" style="opacity: 1;">&times;</button>
                            <h4 class="modal-title">Save & Share</h4>
                        </div>
                        <div class="modal-body" style="overflow-y: hidden">
                            <div id="loaderOnly" class="loaderSave" style="display: none;"></div>
                            <div class="middlePage" id="design_name_area_only" style="display: none;">

                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title text-center"><span class="uppercase">Name your design</span></h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2" for="designNameOnly">Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="designNameOnly" placeholder="Enter Design Name" name="designNameOnly" required onkeypress="return alphanumeric_only(event);">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="saveandcontinueOnly" class="btn btn-default" onclick="SaveDesignNameWindow('SaveContinueOnly');">Save / Continue</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="SaveShareModalDiv">
                                <div class="panel panel-info">
                                    <div class="panel-heading"><center><span class="uppercase">Current design</span></center></div>
                                    <div class="panel-body" >
                                        <div class="row" id="savedDesigns">
                                        </div>
                                    </div>
                                </div>
                                <hr style="margin-bottom: 10px; background-color: #4598ba; height: 2px; border: 0;">
                                <div class="panel panel-info">
                                    <div class="row">
                                     <div class="col-lg-12">
                                        <div class="panel-heading"><center><span class="uppercase">Save</span></center></div>
                                        <center><button type="button" name="submit" class="btn btn-primary" onclick="SaveDesignNameWindow('save');" style="background-color: #399fd9; width: 90%;">
                                           Save
                                        </button></center>
                                        <center><small id="savebtnHelp" class="form-text text-muted" data-toggle="tooltip" data-placement="top" title="Create your account with us and enjoy the benefits of being a member.">Only for members.</small></center>
                                        <br>
                                    </div>
                                    </div>
                                </div>
                                <hr style="margin-bottom: 10px; background-color: #4598ba; height: 2px; border: 0;">
                                <center><h4 class="uppercase">OR</h4></center>
                                <hr style="margin-top: 10px; margin-bottom: 10px; background-color: #4598ba; height: 2px; border: 0;">
                                    <!--SHARE SECTION-->
                                    <div class="panel panel-info" id="share_div" name="share_div">
                                        <div class="col-lg-12">
                                        <div class="panel-heading">
                                            <center>
                                                <span class="uppercase">Share your design</span>
                                            </center>
                                        </div>
                                        <div class="panel-body">
                                            <form class="form-horizontal" id="emailform">
                                                <div class="input-group">
                                                    <span class="input-group-addon">Desing Name:</span>
                                                    <input id="designnameshare" type="test" class="form-control" name="designnameshare" placeholder="Enter your Design Name" onkeypress="return alphanumeric_only(event);" required>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6" style="padding-left: 0px">
                                                         <div class="input-group">
                                                            <span class="input-group-addon">Email From:</span>
                                                            <input id="from_email" type="email" class="form-control" name="from_email" placeholder="Enter your email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="padding-right: 0px">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">Email To:</span>
                                                            <input id="to_email" type="text" class="form-control" name="to_email" placeholder="Enter email address separated by commas" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="input-group">
                                                    <span class="input-group-addon">Message:</span>
                                                    <textarea id="message" type="text" class="form-control" name="message" placeholder="Enter message" maxlength="145"></textarea>
                                                </div>
                                                <br>
                                                <div id="loaderEmail" class="loaderEmail" style="display: none;"></div>
                                                <div class="alert alert-success" id="emailmessage" style="display: none;">
                                                  <strong>Email Sent</strong>
                                                </div>
                                                <br>
                                                <center>
                                                    <button type="button" name="submit" class="btn btn-primary" onclick="SaveDesignNameWindow('sendemail');" style="background-color: #399fd9; width: 90%;">
                                                        Send Email
                                                    </button>
                                                </center>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         <!-- Modal -->
         <div class="modal fade" id="sizechartmodal" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" onclick="if(isMobile()){showmodal('productSectionModal');}">×</button>
                    <h4 class="modal-title"><span class="uppercase">Size Chart</span></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <h4 class="modal-title">How to Measure</h4>
                        <br>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div for="sizechartimage" id="sizechartimage" name="sizechartimage">
                                    @if($product->parent->sizechartimage)
                                        <img src="{{asset('img/product')}}{{'/'}}{{$product->parent->sizechartimage}}" class="img-responsive">
                                    @endif
                                </div>   
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">    
                                <label for="sizechartdescription" id="sizechartdescription" name="sizechartdescription">
                                        {!!$product->parent->sizechartdescription!!}
                                </label>                                        
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <h4 class="modal-title">Size Chart</h4>
                        <table class="table table-striped table-bordered" >
                            <thead>
                                <tr class="active">
                                    <th>Size</th>
                                    <th>Length</th>
                                    <th>Width</th>
                                </tr>
                            </thead>
                            <tbody id="sizechartable" name="sizechartable">
                                @foreach($product->parent->sizeschart as $sizechart)
                                    <tr>
                                        <td>{{  $sizechart->size }}</td>
                                        <td>{{  $sizechart->length }}</td>
                                        <td>{{  $sizechart->width }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" onclick="if(isMobile()){showmodal('productSectionModal');}">Close</button>
                </div>
                </div>
            </div>
        </div>
        <!--Modal confirm-->
        <div class="modal fade" id="start-over-modal" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel" style="color:red">Start Over?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Your design will be lost</p>
                        <p>Please return to Design Studio to save before you start over </p>
                        <p></p>
                
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-block" id="modal-star-over-btn-yes">Continue Without Saving</button>
                        <button type="button" class="btn btn-success btn-block" id="modal-star-over-btn-no">Return to Design Studio</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="TextEffectsModal" role="dialog">
            <div class="modal-dialog" style=" width: 100%; margin: 0; padding: 0; position: absolute; bottom: 0;">
                <div class="modal-content" style=" width: 100%; margin: 0; padding: 0;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="opacity: 1;">&times;</button>
                        <h5 class="modal-title uppercase">Effect:</h5>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><span class="label label-info" id="straightModal" style="cursor: pointer; font-size: 14px; font-weight: 500; float: right;">Straight</span></div>
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <label class="switch">
                                        <input type="checkbox" id="effectModal">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><span class="label label-default" id="curvedModal" style="cursor: pointer; font-size: 14px; font-weight: 500; float: left;">Curve</span></div>
                            </div>
                        </div>
                        <br>
                        <div id="texteffecsareaModal" style="display: none;">
                            <div class="">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2 inputslider" align="left"> <span>Font Size</span> </div>
                                    <div class="col-ms-8 col-sm-8 col-xs-8  inputslider"> <input id="sizeTextModal" type="range" min="1" max="50" value="30" name="sizeTextModal" oninput="resize(event);" style="width: 100%;"> </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 inputslider" align="right"><input id="sizeTextvalueModal" type="text" onkeypress="validate(event);" name="sizeTextvalueModal" min="1" max="50" value="30" oninput="resize(event);" style="width: 55px !important;"></div>
                                </div>
                            </div>
                            <br>
                         
                                <div class="row">
                                    <div class="col-md-1 col-sm-1 col-xs-1 inputslider" align="left"> <span>Curve</span> </div>
                                    <div class="col-ms-9 col-sm-9 col-xs-9  inputslider"> <input type="range" min="-360" max="360" value="90" id="radiusModal" step="1" style="width: 1005;" /></div>
                                    <div class="col-md-1 col-sm-1 col-xs-1 inputslider" align="right"><input min="-360" max="360" value="90" id="radiusvalueModal" type="text" onkeypress="validate(event);" name="radiusvalueModal" step="1" style="width: 55px !important;"></div>
                                </div>
                           
                            <br>
                           
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2 inputslider" align="left"> <span>Spacing</span> </div>
                                    <div class="col-ms-8 col-sm-8 col-xs-8  inputslider"> <input type="range" min="1" max="40" value="5" id="spacingModal" step="1" style="width:100%;" /> </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 inputslider" align="right"><input min="1" max="40" value="5" id="spacingvalueModal" type="text" onkeypress="validate(event);" name="spacingvalueModal" step="1" style="width: 55px !important;"></div>
                                </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Modal confirm-->
        <div class="modal fade" id="changeproductconfirmation-modal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">You will lose your current design?</h4>
                        <div class="row" id="designtmplist">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"><img class="img-responsive" src=""></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" id="modal-btn-yes">Continue</button>
                        <button type="button" class="btn btn-primary" id="modal-btn-no">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Product Section -->
        <div class="modal fade" id="productSectionModal" role="dialog">
            <div class="modal-dialog" style=" width: 100%; height: 100vh; margin: 0; padding: 0;">
                <div class="modal-content" style=" width: 100%; height: 100vh; margin: 0; padding: 0;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title uppercase">Products</h5>
                    </div>
                    <div class="modal-body">
                        <div class="panel panel-info">
                            <div class="panel-body">
                                    <!--START PRODUCT DESCRIPTION-->
                                <div class="row">
                                    <div class="col-xs-7 col-sm-6 col-md-6 col-lg-6">
                                    <h5 id="product_name">{{$product->parent->name}}</h5>
                                    <div id="description_label">
                                        <p><strong>Brand:</strong> {{$product->brand}} </p>
                                        <p><strong>Size:</strong> YXS-5XL  <a href="javascript:void(0)" id="btnmodal" data-toggle="modal" data-target="#sizechartmodal" onclick="closemodal('productSectionModal');"> size chart</a></p>
                                        <p><strong>Fabric:</strong> {{$product->fabric}}</p>
                                        <p><a href="#productlongdescription" data-toggle="collapse" id="more-details" class="collapsestart">
                                            More Details
                                        </a></p>
                                    </div>
                                    </div>
                                </div>
                                <div id="productlongdescription" class="collapse">
                                    <button type="button" class="close"  id="more-details-btn"   name="more-details-btn">X</button>
                                    {!!$product->description!!}
                                </div>
                                  
                                <!--END   PRODUCT DESCRIPTION-->
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <span class="uppercase">Selected Color</span> <span id="current_selected_product_color"></span>
                                <br>
                                <span class="uppercase">Current Product Color</span> <span id="current_product_color"> : {{$product->color->name}}</span>
                            </div>
                            <div class="panel-body">
                                <div class="row" style="width: 100%; margin: 0 auto;" id="child_product_color_divModal">Quantity 1-5<br>
                                    @foreach ($product->parent->colors as $color)
                                        <div id="child_color_minimum_{{$color->id}}" class="block color-{{$color->id}} {{$color->id == $product->color->id ? 'animate' : ''}}" title="{{$color->name}}" style="border-radius: 50%; background-color: {{$color->hex}}; width: 30px; height: 30px; border: 0px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px;" onclick="setcanvasproperties('{{$color->pivot->childproduct_id}}'); setactivecolor(this);"></div>    
                                    @endforeach
                                </div>
                                <br>
                                <div class="row" style="width: 100%; margin: 0 auto;" id="child_product_color_div6Modal">Quantity 6+<br>
                                    @foreach ($product->parent->colors as $color)
                                        <div id="child_color_minimum_{{$color->id}}" class="block color-{{$color->id}} {{$color->id == $product->color->id ? 'animate' : ''}}" title="{{$color->Name}}" style="border-radius: 50%; background-color: {{$color->hex}}; width: 30px; height: 30px; border: 0px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px;" onclick="setcanvasproperties('{{$color->pivot->childproduct_id}}'); setactivecolor(this);"></div>    
                                    @endforeach
                                </div>
                                <hr>
                                <center>
                                    <a type="button"  id="changeproductbtnModal" name="changeproductbtnModal"   style="cursor: pointer;color: #ffffff !important; background-color: #32a7e0; padding: 8px 30px; border-radius: 8px; margin-left: auto; margin-right: auto; text-align: center; font-size: 1.8rem;" href="javascript:void(0)" onclick="showproductview(); document.getElementById('sortby-filter').style.display = 'block'; document.getElementById('results').style.display = 'block'; ">
                                        <span class="uppercase">Change Product</span>
                                    </a>
                                </center>
                                <!--<div class="modal fade" id="productmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document" style="  max-width: 1360px;  width: 100%;height: 100vh; margin: auto;padding: 0; height: 900px;">
                                        <div class="modal-content" style="width: 100%; height: 100vh; margin: 0; padding: 0; overflow: auto;">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title"><span class="uppercase">Products</span></h4>
                                            </div>
                                            <div class="modal-body">
                                                <productlist2></productlist2>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                        </div>      
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Add Art -->
        <div class="modal fade" id="AddArtModal" role="dialog">
            <div class="modal-dialog" style=" width: 100%; height: 100vh; margin: 0; padding: 0;">
                <div class="modal-content" style=" width: 100%; height: 100vh; margin: 0; padding: 0;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title uppercase">Art Work</h5>
                    </div>
                    <div class="modal-body">
                        <div id="clipart">
                            <clipartscomponent2></clipartscomponent2>
                            <!--UPLOAD SECTION-->
                            <div class="panel-group">
                                <div class="panel panel-info">
                                    <div class="panel-heading"> <span class="uppercase">Upload your own Artwork </span></div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div>
                                                    <h4>Have your own logo or image?</h4>
                                                    <h5>Simply just upload it!</h5><br>
                                                    <h6><b>We accept the following file types:</b><br>
                                                        JPEG, JPG, GIF, PNG, BMP, GIF, TIF, AI, EPS, PDF, PSD, SVG</h6>
                                                </div>
                                                <h5>Max Size: 10.0mb</h5>
                                                <br>
                                                <p>
                                                    <label for="termsOfUseModal">
                                                        <input type="checkbox" id="termsOfUseModal" name="termsOfUseModal" onchange="hideshowbutton(this);">
                                                        <span>I agree to the </span> <a href="{{asset('user-agreement')}}" target="blank">terms and conditions</a> for uploaded material
                                                    </label>
                                                </p>
                                            </div>
                                        </div>
                                        <form method="POST" action="{{ route('uplaodclipart') }}"  id="uploadclipartformModal" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="row" id="uploaddiv" >
                                                <div class="col-sm-6 col-md-6 col-lg-6" align="left"> 
                                                    <input type="file" id="fileModal" name="fileModal"  onchange="uploadImage();"/>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6" align="right">
                                                    <button type="submit" id="uploadModal" class="btn btn-info" style="background-color: #4fc1f0; display: none;">Upload</button>
                                                </div>
                                                <div class="col-sm-12" id="uploadprogressbarModal">
                                                    <div class="progress">
                                                        <div class="bar"></div >
                                                        <div class="percent">0%</div >
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div id="uploadpreview" src="" style="display: none;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Color Art -->
        <div class="modal fade" id="ArtColorModal" role="dialog">
            <div class="modal-dialog" style=" width: 100%; margin: 0; padding: 0; position: absolute; bottom: 0;">
                <div class="modal-content" style=" width: 100%; height: 100vh; margin: 0; padding: 0;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="opacity: 1;">&times;</button>
                        <h5 class="modal-title uppercase">Select your color</h5>
                    </div>
                    <div class="modal-body">
                        <div id="objectcolorsModal" name="objectcolorsModal"></div>
                        <hr>
                        <div id="inkcolorlistModal">
                            <span style="display: block;">Select new color:</span>
                            <div class="block transparent" id="artcolortransparenttModal" style="border-radius:  50%;  margin-right: 1.7px; background-color: #ffffff; border:2px solid #eeeeee; cursor:pointer" onclick="document.getElementById('Artcolor').innerHTML = 'Transparent'; changecolor('transparent');">
                            </div>
                            @foreach($inkcolors as $inkcolor)
                                <div id="artcolortModal{{$inkcolor->hex}}" class="block" title="{{$inkcolor->name}}" style="border-radius:  50%;  margin-right: 1.7px; background-color: {{$inkcolor->hex}}; border:1px solid #eeeeee; cursor:pointer" onclick="document.getElementById('Artcolor').innerHTML = '{{$inkcolor->name}}'; changecolor('{{$inkcolor->hex}}'); ">
                                </div>
                            @endforeach
                        </div>
                        <br>
                        <div class="row" style="float: left;">
                            <div class="col-md-12 col-lg-12 col-sm-12" style="margin-top: 15px; padding-left: 0px;" id="artcolortransparentlegendModal">
                                <div class="block transparent" style="border-radius: 50%;  margin-right: 1.7px; background-color: #ffffff; border:2px solid #eeeeee; cursor:pointer;"></div>
                                Indicates a color is transparent
                            </div>
                            <div class="col-md-12 col-lg-12 col-sm-12" style="padding-left: 0px;" id="checkcolorlegendModal">
                                <span class="animate2">
                                </span>
                                Indicates a color already in your design
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="modal-footer" style="border-top: 0px solid #e5e5e5;">
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Color Art -->
        <div class="modal fade" id="ResizeModal" role="dialog">
            <div class="modal-dialog" style=" width: 100%; margin: 0; padding: 0; position: absolute; bottom: 0;">
                <div class="modal-content" style=" width: 100%; height: 100vh; margin: 0; padding: 0;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="opacity: 1;">&times;</button>
                        <h5 class="modal-title uppercase">Size</h5>
                    </div>
                    <div class="modal-body">
                        <center><i class="fa fa-lock" id="resizeiconModal" style="font-size:25px;color:#31b0d5; cursor: pointer;" onclick="SetScaleProportional();"></i></center>
                        <div class="">
                            <div class="row">
                                <div class="col-md-2 col-sm-2 col-xs-2 inputslider" align="left"> <span>Width</span> </div>
                                <div class="col-ms-8 col-sm-8 col-xs-8  inputslider"> <input id="widthModal" type="range" min="1" max="12" name="widthModal" oninput="resize(event);" style="width: 100%;" step="0.1"> </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 inputslider" align="right"><input id="widthvalueModal" type="text" onkeypress="validate(event);" name="widthvalueModal" min="1" max="12" oninput="resize(event);" step="0.1" style="width: 55px !important;" readonly="true"></div>
                            </div>
                        </div>
                        <br>
                        <div class="">
                            <div class="row">
                                <div class="col-md-2 col-sm-2 col-xs-2 inputslider" align="left"> <span>Height</span> </div>
                                <div class="col-ms-8 col-sm-8 col-xs-8  inputslider"> <input id="heightModal" type="range" min="1" max="12" name="heightModal" oninput="resize(event);" style="width: 100%;" step="0.1"> </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 inputslider" align="right"><input id="heightvalueModal" type="text" onkeypress="validate(event);" name="heightvalueModal" min="1" max="12" oninput="resize(event);" step="0.1" style="width: 55px !important;" readonly="true"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Enter text -->
        <div class="modal fade" id="AddTextModal" role="dialog">
            <div class="modal-dialog" style=" width: 100%; height: 100vh; margin: 0; padding: 0;">
                <div class="modal-content" style=" width: 100%; height: 100vh; margin: 0; padding: 0;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title uppercase">Enter your text:</h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="textarea2" placeholder="- Enter the text here -"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" id="AddTextModalbtn" onclick="  /*unselectall('addtext');*/">Add to Design</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Fonts -->
        <div class="modal fade" id="FontModal" role="dialog">
            <div class="modal-dialog" style=" width: 100%; height: 100vh; margin: 0; padding: 0;">
                <div class="modal-content" style=" width: 100%; height: 100vh; margin: 0; padding: 0;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title uppercase">Select your font:</h5>
                    </div>
                    <div class="modal-body">
                        <div id="font_menuModal" style="display: block;">
                            <ul id="font_menu_barModal" class="nav nav-tabs">
                                                                    
                                <li class="active col-xs-12" align="center"><a data-toggle="tab" href="#homeModal" class="uppercase">View all fonts</a></li>
                                @foreach ($fontcategories as $fontcategory)   
                                    <li><a data-toggle="tab" href="#menuModal{$fontcategory->name}}"><font>{{$fontcategory->name}}</font></a></li>
                                @endforeach
                            </ul>
                            <div id="font_menu_bodyModal" class="tab-content">
                                <div id="homeModal" class="tab-pane fade in active">
                                    @foreach ($fonts as $font)                                          
                                        <div class="row">
                                            <div class="col-lg-12"  style="border-bottom: 1px solid;" id="{{$font->name}}" onclick="setFont(this);">
                                                <center>
                                                        <font class="fonts" id="{{$font->name}}" face="{{$font->name}}" size="{{$font->size}}" style="cursor: pointer; ">{{$font->displayname}}</font>
                                                    <br>
                                                    <span style="font-family: Helvetica !important;">{{$font->displayname}}</span>
                                                </center>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                @foreach ($fontcategories as $fontcategory) 
                                    <div id="menuModal{{$fontcategory->name}}" class="tab-pane fade">
                                        @foreach ($fontcategory->fonts as $font)                                       
                                        <div class="row">
                                            <div class="col-lg-12" style="border-bottom: 1px solid;" id="{{$font->name}}" onclick="setFont(this);">
                                                <center>
                                                    <font class="fonts" id="{{$font->name}}" face="{{$font->name}}" size="{{$font->size}}" style="cursor: pointer; ">{{$font->displayname}}</font>
                                                    <br>
                                                    <span style="font-family: Helvetica !important;">{{$font->displayname}}</span>
                                                </center>
                                            </div>
                                        </div>  
                                        @endforeach     
                                    </div>  
                                @endforeach  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Color Text -->
        <div class="modal fade" id="TextColorModal" role="dialog">
            <div class="modal-dialog" style=" width: 100%; margin: 0; padding: 0; position: absolute; bottom: 0;">
                <div class="modal-content" style=" width: 100%; height: 100vh; margin: 0; padding: 0;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="opacity: 1;">&times;</button>
                        <h5 class="modal-title uppercase">Color</h5>
                    </div>
                    <div class="modal-body">
                        <h4>Text Color: <label id="Textcolor" name="Textcolor"></label></h4>   
                            <div class="row">
                                <div class="col-xs-12">
                                    @foreach($inkcolors as $inkcolor)
                                        <div id="textcolorModal{{$inkcolor->hex}}" class="block" title="{{$inkcolor->name}}" style="border-radius:  50%; margin-right: 1.7px; background-color: {{$inkcolor->hex}}; width: 30px; height: 30px; border:1px solid #eeeeee; cursor:pointer" onclick="/*OpenClose('carousel_area','work_area','Textcolor');*/ document.getElementById('Textcolor').innerHTML = '{{$inkcolor->name}}'; changecolorText('{{$inkcolor->hex}}','f');"></div>
                                    @endforeach
                                </div>
                            </div>    
                        <!--END COLOR SECTION-->
                        <br>
                        <br>
                        <h4>Text Stroke Color: <label id="Textstrokecolor" name="Textstrokecolor"></label></h4>
                        <!--COLOR SECTION-->
                        <div class="row">
                            <div class="col-xs-12">
                                @foreach($inkcolors as $inkcolor)
                                    <div id="strokecolorModal{{$inkcolor->hex}}" class="block" title="{{$inkcolor->name}}" style="border-radius:  50%; margin-right: 1.7px; background-color: {{$inkcolor->hex}}; width: 30px; height: 30px; border:1px solid #eeeeee; cursor:pointer" onclick="/*OpenClose('carousel_area','work_area','Textstrokecolor');*/ document.getElementById('Textstrokecolor').innerHTML = '{{$inkcolor->name}}'; changecolorText('{{$inkcolor->hex}}','c');"></div>
                                @endforeach
                            </div>
                        </div>
                        <br>
                        <div class="input-group">
                            <div class="row">
                                <div class=" col-md-3 col-lg-3 col-xl-3" style="white-space: nowrap;">Stroke Size</div>
                                <div class="col-xs-7 col-md-7 col-lg-7 col-xl-7"><input type="range" min="0" max="10" value="0" id="strokewidthModal" step="1" style="width: 200px;" onchange="setStroke(this);" /></div>
                                <div class="col-xs-2 col-md-2 col-lg-2 col-xl-2"><input min="0" max="10" value="0" id="strokewidthvalueModal" type="number" onkeypress="validate(event);" name="strokewidthvalue" step="1" style="width: 55px !important; float: left;" oninput="setStroke(this);"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Stroke Color Text -->
        <div class="modal fade" id="LayerModal" role="dialog">
            <div class="modal-dialog" style=" width: 100%; margin: 0; padding: 0; position: absolute; bottom: 0;">
                <div class="modal-content" style=" width: 100%; height: 100vh; margin: 0; padding: 0;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="opacity: 1;">&times;</button>
                        <h5 class="modal-title uppercase">Layers</h5>
                    </div>
                    <div class="modal-body">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-left: 1px; padding-right: 1px; margin-left:auto; margin-right:auto;">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color: #eeeeee; padding: 1px; border-right: solid 4px white;">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" style="padding: 1px; border-right: solid 1px black;" onclick="SetLayer('forward');"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-layer-up.png')}}" width="auto" height="20px"></span></div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" style="padding: 1px;" onclick="SetLayer('backward');"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-layer-down.png')}}" width="auto" height="20px"></span></div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-left: 1px; padding-right: 1px;">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center"><span>Bring Forward</span></div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center"><span>Send Backward</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal rotate text -->
        <div class="modal fade" id="TextRotateModal" role="dialog">
            <div class="modal-dialog" style=" width: 100%; margin: 0; padding: 0; position: absolute; bottom: 0;">
                <div class="modal-content" style=" width: 100%; margin: 0; padding: 0;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="opacity: 1;">&times;</button>
                        <h5 class="modal-title uppercase">Select your rotation effect:</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-xs-2 inputslider" align="left"> <span>Rotation</span> </div>
                            <div class="col-ms-8 col-sm-8 col-xs-8  inputslider"> <input id="angleImageModal" type="range" min="-180" max="180" value="0" name="angleImageModal" oninput="rotate(event);" style="width: 100%;" step="5"> </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 inputslider" align="right"><input id="anglevalueImageModal" type="text" onkeypress="validate(event);" name="anglevalueImageModal" min="-180" max="180" value="0" oninput="rotate(event);" step="5" style="width: 55px !important;" readonly="true"></div>
                        </div>
                        <br>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-left: 1px; padding-right: 1px; margin-left:auto; margin-right:auto;">
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="background-color: #eeeeee; padding: 1px; border-right: solid 4px white;">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center" style="padding: 1px; border-right: solid 1px black;" onclick="flipX();"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-flip-across.png')}}" width="22px" height="auto"></span></div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="background-color: #eeeeee; padding: 1px; border-right: solid 4px white;">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center" style="padding: 1px;" onclick="flipY();"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-flip-up.png')}}" width="auto" height="20px"></span></div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="background-color: #eeeeee; padding: 1px;">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center" style="padding: 1px;" onclick="SetLayer('center');"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-center.png')}}" width="auto" height="20px"></span></div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-left: 1px; padding-right: 1px;">
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="center"><span>Flip</span></div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="center"><span>Flop</span></div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="center"><span>Center</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="productPicker" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div id="loader" class="loader" style="display: none;">SAVING DESIGN</div>
                        <div id="product_style_area" style="display: block;">
                            <div class="row">
                                <div class="col-md-7 col-lg-7 text-center" style="/*border: 1px solid #eeeeee*/ border-right: 1px solid #eeeeee;">
                                    <div class="row" id="getpriceDesign">
                                       
                                    </div>
                                </div>
                                <div class="col-md-5 col-lg-5 visible-lg visible-md" style="/*border: 1px solid #eeeeee*/">
                                    <div id="shippingSection" style="">
                                        <h5><b style="color: #ff0000;">FREE SHIPPING</b><br>Guaranteed by: <span id="freeshipping" style="color: #5bc0de;"></span></h5>
                                        <h5><b>Expedited Shipping</b>: Add 15%<br>Guaranteed by: <span id="rushdelivery" style="color: #5bc0de;"></span></h5>
                                        <p><b>Saving Tips:</b><br style="line-height: 6px;">
                                            -Increase in quantity<br style="line-height: 5px;">-Reduce Ink Colors in design</p>
                                    </div>
                                </div>
                            </div>
                            <hr align="center" style="margin-bottom: 10px; margin-top: 30px; background-color: #4598ba; height: 1px; border: 0;">
                            <span class="">
                                <h4 style="font-weight: 600; text-transform: uppercase; font-size: 15px; text-align: center; text-decoration: underline; margin-bottom: 15px;">Enter Quantity for Pricing</h4>
                            </span>
                            <div class="productsizes2">
                                <div class="row productsizeseow2">
                                    <div id="infant" class="col-lg-5 sizeinput" style="display: none;">

                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_NB">
                                            <label for="NB">NB</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="NB" name="NB" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_0M">
                                            <label for="0M">0M</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="0M" name="0M" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_3M">
                                            <label for="3M">3M</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="3M" name="3M" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_6M">
                                            <label for="6M">6M</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="6M" name="6M" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_12M">
                                            <label for="12M">12M</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="12M" name="12M" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_18M">
                                            <label for="18M">18M</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="18M" name="18M" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_24M">
                                            <label for="24M">24M</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="24M" name="24M" oninput="temp(this);">
                                        </div>
                                        <h5 style="margin-top:1px;">Infant</h5>
                                    </div>
                                    <div id="toddlers" class="col-lg-7 sizeinput" style="display: none; /*float: right;*/">

                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_2T">
                                            <label for="2T">2T</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="2T" name="2T" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_3T">
                                            <label for="3T">3T</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="3T" name="3T" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_4T">
                                            <label for="4T">4T</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="4T" name="4T" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_5T">
                                            <label for="5T">5T</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="5T" name="5T" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_5_6">
                                            <label for="5_6">5_6</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="5_6" name="5_6" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_6T">
                                            <label for="6T">6T</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="6T" name="6T" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_7">
                                            <label for="7">7</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="7" name="7" oninput="temp(this);">
                                        </div>
                                        <h5 style="margin-top:1px;">Toddlers</h5>
                                    </div>
                                </div>
                                <div class="row productsizeseow2">
                                    <div id="youth" class="col-lg-5 sizeinput" style="display: none;">

                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_YXS">
                                            <label for="YXS" style="margin-bottom: 0px;">YXS</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="YXS" name="YXS" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_YS">
                                            <label for="YS" style="margin-bottom: 0px;">YS</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="YS" name="YS" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_YM">
                                            <label for="YM" style="margin-bottom: 0px;">YM</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="YM" name="YM" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_YL">
                                            <label for="YL" style="margin-bottom: 0px;">YL</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="YL" name="YL" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_YXL">
                                            <label for="YXL" style="margin-bottom: 0px;">YXL</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="YXL" name="YXL" oninput="temp(this);">
                                        </div>
                                        <h5 style="margin-top:1px;">Youth</h5>
                                    </div>
                                    <div id="adult" class="col-lg-7 sizeinput" style="display: none;/* float: right;*/">

                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_XS">
                                            <label for="XS" style="margin-bottom: 0px;">XS</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="XS" name="XS" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_S">
                                            <label for="S" style="margin-bottom: 0px;">S</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="S" name="S" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_M">
                                            <label for="M" style="margin-bottom: 0px;">M</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="M" name="M" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_L">
                                            <label for="L" style="margin-bottom: 0px;">L</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="L" name="L" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_XL">
                                            <label for="XL" style="margin-bottom: 0px;">XL</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="XL" name="XL" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_2XL">
                                            <label for="2XL" style="margin-bottom: 0px;">2XL</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="2XL" name="2XL" oninput="temp(this);" data-toggle="popover" data-trigger="hover" data-placement="top">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_3XL">
                                            <label for="3XL" style="margin-bottom: 0px;">3XL</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="3XL" name="3XL" oninput="temp(this);" data-toggle="popover" data-trigger="hover" data-placement="top">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_4XL">
                                            <label for="4XL" style="margin-bottom: 0px;">4XL</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="4XL" name="4XL" oninput="temp(this);" data-toggle="popover" data-trigger="hover" data-placement="top">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_5XL">
                                            <label for="5XL" style="margin-bottom: 0px;">5XL</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="5XL" name="5XL" oninput="temp(this);" data-toggle="popover" data-trigger="hover" data-placement="top">
                                        </div>
                                        <h5 style="margin-top:1px;">Adult</h5>
                                    </div>
                                    <div class="row productsizeseow2">
                                        <div id="onesize" class="col-lg-12 sizeinput" style="display: none;/* float: right;*/">

                                            <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem;" id="div_ONE_SIZE">
                                                <label for="ONE_SIZE">ONE SIZE</label>
                                                <input type="number" onkeypress="validate(event);" class="form-control2" id="ONE_SIZE" name="ONE_SIZE" oninput="temp(this);">
                                            </div>
                                            <h5 style="margin-top:1px;">ONE SIZE</h5>
                                        </div>
                                    </div>
                                    <div class="row productsizeseow2" id="personalizeresumen">
                                        
                                    </div>
                                </div>
                            </div>

                            <hr align="center" style="margin-bottom: 0px; background-color: #4598ba; height: 2px; border: 0;">
                            <!-- <div class="row">
                          <div style="color: #000; font-size: 24px; font-weight: 700;"><center>Your All Inclusive Pricing</center></div><br>
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <h4 id="itemPriceLabel" style="margin-top: 2px;"><b>Price per item:</b> <span id="itemPrice" style="color: #5cb85c; font-family: Arial;"></span></span></h4>
                          <h4 id="numOfShirtsLabel" style="position: relative; margin-top: 2px;"><b>Quantity:</b> <span style='color: #5cb85c; font-family: Arial;'> 0 item(s)</span></h4>
                          <h4 id="itemTotalLabel" style=""><b>Total:</b> <span id="itemTotal" style="color: #5cb85c; font-family: Arial;"></span></h4>
                          </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <button type="button" class="btn btn-success" style="float: right;" id="AddKeepDesign" name="AddKeepDesign" onclick="SaveDesignNameWindow('AddKeepDesign');">Add To Cart</button></div>
                       </div>   -->

                            <!-- New Testing Start -->
                            <div class="row">
                                <span style="color: #000; font-size: 24px; font-weight: 700;">
                                    <center>Your All Inclusive Pricing</center>
                                </span><br>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <h4 id="itemPriceLabel" style="margin-top: 2px;"><b>Price per item:</b> <span id="itemPrice" style="color: #5cb85c; font-family: Arial;"></span></h4>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <h4 id="numOfShirtsLabel" style="position: relative; margin-top: 2px;"><b>Quantity:</b> <span style='color: #5cb85c; font-family: Arial;'> 0 item(s)</span></h4>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <h4 id="itemTotalLabel" style="position: relative; margin-top: 2px;"><b>Total:</b> <span id="itemTotal" style="color: #5cb85c; font-family: Arial;"></span></h4>
                                </div>
                            </div>
                            <hr align="center" style="margin-bottom: 10px; background-color: #4598ba; height: 2px; border: 0;">
                            <button type="button" class="btn btn-success" style="float: right;" id="AddKeepDesign" name="AddKeepDesign" onclick="SaveDesignNameWindow('AddKeepDesign');">Add To Cart</button>


                            <!-- New Testing End -->

                            
                        </div>
                        <div class="middlePage" id="design_name_area" style="display: none;">
                            <!--<div class="page-header">
                          <h1 class="logo">Techulus <small>Welcome to our place!</small></h1>
                          </div>-->
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title text-center"><span class="uppercase">Name your design</span></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 thumbnail2">
                                                    <label for="frontcolos2" id="frontcolos2" name="frontcolos2"></label>
                                                    <div id="frontSavedDesingPreview2" style="background-repeat: no-repeat; background-size: cover; background-position: center center;">
                                                        <img id="frontSavePreview2" src="" alt="" class="img-responsive">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 thumbnail2">
                                                    <label for="rightcolos2" id="rightcolos2" name="rightcolos2"></label>
                                                    <div id="rightSavedDesingPreview2" style="background-repeat: no-repeat; background-size: cover; background-position: center center;">
                                                        <img id="rightSavePreview2" src="" alt="" class="img-responsive">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 thumbnail2">
                                                    <label for="backcolos2" id="backcolos2" name="backcolos2"></label>
                                                    <div id="backSavedDesingPreview2" style="background-repeat: no-repeat; background-size: cover; background-position: center center;">
                                                        <img id="backSavePreview2" src="" alt="" class="img-responsive">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 thumbnail2">
                                                    <label for="leftcolos2" id="leftcolos2" name="leftcolos2"></label>
                                                    <div id="leftSavedDesingPreview2" style="background-repeat: no-repeat; background-size: cover; background-position: center center;">
                                                        <img id="leftSavePreview2" src="" alt="" class="img-responsive">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7" style="border-left:1px solid #ccc;height:160px">
                                            <div class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="designName">Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="designName" placeholder="Enter Design Name" name="designName">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="designemail">E-mail:</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" id="designemail" placeholder="Enter E-mail" name="designemail">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="saveandcontinue" class="btn btn-default" onclick="SaveDesignNameWindow('SaveContinue');">Save / Continue</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--<input id="designName" name="designName" type="text" placeholder="Enter Design Name" class="form-control input-md">
                                      <input id="designemail" name="designemail" type="email" placeholder="Enter E-mail" class="form-control input-md">
                                      <button id="saveandcontinue" name="saveandcontinue"  type="button" class="btn btn-info btn-sm pull-right" onclick="SaveDesignNameWindow('SaveContinue');">Save/Continue</button>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row middlePage" id="cart_area" style="padding-top: 50px;" style="display: none;">
                                <div class="col-lg-12" style=" height: 300px; overflow-y: auto; overflow-x: hidden;">
                                    <div class="table-responsive" id="Cart" style="display: none;">
                                        <span class="uppercase">
                                            <h4>Your Cart</h4>
                                            <hr align="center" style="margin-top: 1px; background-color: #4598ba; height: 1px; border: 0;">
                                        </span>
                                        <table class="table table-striped">
                                            <thead id="Cart-Head">
                                                <tr class="row">
                                                    <th class="col-lg-1">Design</th>
                                                    <th class="col-lg-2 visible-lg visible-md"  id="cart_brand">Brand/Style</th>
                                                    <th class="col-lg-1 visible-lg visible-md"  id="cart_color">Color</th>
                                                    <th class="col-lg-2 visible-lg visible-md"  id="cart_size">Sizes</th>
                                                    <th class="col-lg-1">Quantity</th>
                                                    <th class="col-lg-2 visible-lg visible-md"  id="cart_price">Price Per Shirt</th>
                                                    <th class="col-lg-2">Sub-Total</th>
                                                    <th class="col-lg-1"> </th>
                                                </tr>
                                            </thead>
                                            <tbody id="Cart-Body">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <div style="display: inline;">
                            <div align="center">
                                <button type="button" class="btn btn-success" id="continuedesign" name="continuedesign" onclick="SaveDesignNameWindow('continuedesign');" style="float: right; display: inline;">Contiue Designing</button>
                                <button type="button" class="btn btn-success" id="KeepDesign" name="KeepDesign" style="display: none;" onclick="SaveDesignNameWindow('KeepDesign');" style="float: center; display: inline;">Create New Design</button>
                                <button type="button" class="btn btn-success" id="finalcheckout" name="finalcheckout" style="display: none;" onclick="SaveDesignNameWindow('Check-out');" style="float: left; display: inline;">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.0/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.1/axios.min.js"></script>-->
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
    <script src="{{asset('js/frontend/designstudio/fabric.js')}}"></script>
    <script src="{{asset('js/frontend/designstudio/custom_controls.js')}}"></script>
    <script src="{{asset('js/frontend/designstudio/curvedText.js')}}"></script>
    <script src="{{asset('js/frontend/designstudio/centering_guidelines.js')}}"></script>
    <script>
         //document.getElementById('loader').style.display= 'block';
         var Orientation = "";
        var windowwidth = "";
        var windowheight = "";
        var devicePixelRatio = "";
        var idproduct;
        var product = null;
        var canvasActive = null;
        var sideActive = null;
        var canvaslist = [];
        var canvasdesignlist = [];
        var objId=1;
        var ListColors = [];
        var clipartuploadedcolorlist = [];
        var radius = document.getElementById("radius");
        var radiusvalue = document.getElementById("radiusvalue");
        var spacing = document.getElementById("spacing");
        var spacingvalue = document.getElementById("spacingvalue");
        var radiusModal = document.getElementById("radiusModal");
        var radiusvalueModal = document.getElementById("radiusvalueModal");
        var spacingModal = document.getElementById("spacingModal");
        var spacingvalueModal = document.getElementById("spacingvalueModal");
        var idcolorselected = null;
        var editdesign = null;
        var edit = null;
        var user = null;
        var textAdded = clipArtAdded = imageUploaded = colorChanged = addingToCart = resized = Checked = productchanged = saveOnly = false;


        /**
         * Load initial information
         *
         * @return void
         */
        window.onload = function() 
        {
            reloadelements();
            $.ajax({
                type:'GET',
                dataType: 'json', 
                url: window.location.origin + '/initialinfo',
                success:function(data)
                {   
                    console.log(data);
                    user = data.user;
                    ListColors = data.inkcolors;
                    product = data.product;
                    enableproductsizes();
                    product.printareas.forEach(printarea => {
                        var canvasside = new fabric.Canvas(printarea.slug+'Canvas');
                            canvasside.side = printarea.side;
                            canvasside.name = printarea.slug;
                            product.sides.forEach(side=>{
                                if(side.slug == printarea.side)
                                {
                                    canvasside.productimg = side.pivot.image;
                                }
                            });
                            canvasside.setWidth(printarea.width);
                            canvasside.setHeight(printarea.height);
                            initCenteringGuidelines(canvasside);  
                            canvasside.undo = [];
                            canvasside.redo = [];
                            canvasside.state = null;
                            canvasside.width = printarea.width;
                            canvasside.height = printarea.height;
                            canvasside.left = printarea.left;
                            canvasside.top = printarea.top;
                        canvaslist.push(canvasside);
                        canvasside.on('mouse:up', function(e)
                        {
                            canvasActive=this;
                            displayinfo(e);
                            showcorners(e);
                        });
                        canvasside.on('mouse:down', function(e)
                        {
                            showcorners(e);
                        });
                        canvasside.on('object:added', function(e)
                        {
                            displayinfo(e);
                        });
                        canvasside.on('object:moving',function(e)
                        {
                            hidecorners(e);
                        });
                       /* canvasside.on('object:modified',function(e){ 
                            e.target.setControlsVisibility({
                                ml: false,
                                mr: false,
                                mb: false,
                                mt: false,
                                mtr: false,
                                bl: true,
                                tr: true,
                                tl: true,
                                br: true,
                                });
                                e.target.customiseCornerIcons({
                                    settings: {
                                        borderColor: '#4fc1f0',
                                        cornerSize: 40,
                                        cornerShape: 'circle',
                                        cornerBackgroundColor: 'rgba(100,100,100,0)',
                                        cornerPadding: 15,
                                        hasRotatingPoint: true,
                                    },
                                    tr: {
                                        icon: window.location.origin + '/img/icon/x.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                    },
                                    bl: {
                                        icon: window.location.origin + '/img/icon/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                    },
                                    br: {
                                        icon: window.location.origin + '/img/icon/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                    },
                                    ml: {
                                        icon: window.location.origin + '/img/icon/left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                    },
                                    mr: {
                                        icon: window.location.origin + '/img/icon/right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                    },
                                    mb: {
                                        icon: window.location.origin + '/img/icon/down.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                    },
                                    mt: {
                                        icon: window.location.origin + '/img/icon/up.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                    },
                                    tl: {
                                        icon: window.location.origin + '/img/icon/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                    },
                                }, function()
                                {
                                    canvasActive.renderAll();
                                });
                        });*/
                        /*canvasside.on('object:scaling', function(e)
                        {
                            canvasside.contextContainer.strokeStyle = '#555';
                            canvasside.forEachObject(function(obj) {
                                var bound = obj.getBoundingRect(true, true);
                                canvasside.contextContainer.strokeRect(
                                bound.left,
                                bound.top,
                                bound.width,
                                bound.height
                                );
                            })
                        });
                        canvasside.on('after:render', function() {
                            canvasside.contextContainer.strokeStyle = '#555';
                            canvasside.forEachObject(function(obj) {
                                var bound = obj.getBoundingRect(true, true);
                                canvasside.contextContainer.strokeRect(
                                bound.left,
                                bound.top,
                                bound.width,
                                bound.height
                                );
                            })
                        });*/
                    });
                     
                    canvasActive = canvaslist[0];
                }
            })
        }


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document)
        .ajaxStart(function() 
        {
            document.getElementById('loader').style.display= 'block';
        })
        .ajaxStop(function() 
        {
            document.getElementById('loader').style.display= 'none';
        }); 

        window.addEventListener("resize", reloadelements);
        window.addEventListener("orientationchange", reloadelements);
        function reloadelements()
        {
            
            windowheight = screen.availHeight;
            //console.log("screen.availHeight: " + windowheight);
            windowwidth = screen.availWidth;
            //console.log("screen.availWidth: " + windowwidth);
            windowheight = window.innerHeight;
            //console.log("window.innerHeight: " + windowheight);
            windowwidth = window.innerWidth;
            //console.log("window.innerWidth: " + windowwidth);
            windowheight = Math.min(screen.availHeight, window.innerHeight);
            //console.log(windowheight);
            windowwidth = Math.min(screen.availWidth, window.innerWidth);
            //console.log(windowwidth);
            if (windowheight > windowwidth) 
            {
                Orientation = "PORTRAIT";
                //console.log(Orientation);
            } 
            else 
            {
                Orientation = "LANDSCAPE";
                //console.log(Orientation);
            }

            if (windowwidth < 768) 
            {
                $("#main-menu").removeClass("nav-tabs nav-stacked");
                $("#main-menu").addClass("nav-justified");
                document.getElementById("filters-colum").style.display = 'none';
                    document.getElementById("data-colum").style.display = 'block';
            } 
            else if (windowwidth >= 768 && windowwidth <= 992) {
                $("#main-menu").removeClass("nav-tabs nav-stacked");
                $("#main-menu").addClass("nav-justified");
                document.getElementById("filters-colum").style.display = 'block';
                document.getElementById("data-colum").style.display = 'block';
            }
            else if (windowwidth > 992 && windowwidth <= 1200) {
                $("#main-menu").removeClass("nav-tabs nav-stacked");
                $("#main-menu").addClass("nav-justified");
                document.getElementById("filters-colum").style.display = 'block';
                document.getElementById("data-colum").style.display = 'block';
            } 
            else
            {
                $("#main-menu").addClass("nav-tabs nav-stacked");
                $("#main-menu").removeClass("nav-justified");
                document.getElementById("filters-colum").style.display = 'block';
                document.getElementById("data-colum").style.display = 'block';
            }

           /* if(windowwidth >= 743 && windowheight >=810)
            {
                //  #myCarousel{-webkit-transform-origin:0 0;transform-origin:0 0;left:50%;position:fixed;}
                scale = 1
                if(windowwidth >= 1200)
                {
                    document.getElementById('myCarousel').setAttribute('style', "position:relative; display:block; -moz-transform: scale(" + scale + "); -ms-transform:  scale(" + scale + ");  -o-transform:  scale(" + scale + "); transform: scale(" + scale + ");");    
                }
                else
                {
                    document.getElementById('myCarousel').setAttribute('style', " -webkit-transform-origin:center top;transform-origin:center top;left:50%;position:fixed; display:block; -moz-transform: scale(" + scale + ") translate(-50%); -ms-transform:  scale(" + scale + ") translate(-50%);  -o-transform:  scale(" + scale + ") translate(-50%); transform: scale(" + scale + ") translate(-50%)");
                }
                //console.log("1");
            }
            else*/ if(windowwidth >= 743 && windowheight < 810)
            {
                scale = ((window.innerHeight-100) / 810).toFixed(2);
                if(windowwidth >= 1200)
                {
                    document.getElementById('myCarousel').setAttribute('style', "-webkit-transform-origin:0 0;transform-origin:0 0;position:fixed;  display:block; -moz-transform: scale(" + scale + "); -ms-transform:  scale(" + scale + ");  -o-transform:  scale(" + scale + "); transform: scale(" + scale + ");");    
                }
                else
                {
                    document.getElementById('myCarousel').setAttribute('style', "-webkit-transform-origin:0 0;transform-origin:0 0;left:50%;position:fixed;  display:block; -moz-transform: scale(" + scale + ") translate(-50%); -ms-transform:  scale(" + scale + ") translate(-50%);  -o-transform:  scale(" + scale + ") translate(-50%); transform: scale(" + scale + ") translate(-50%)");
                }
                //console.log("2");
            }
            /*else if(windowwidth < 743 && windowheight >= 810)
            {
                scale = (window.innerWidth / 810).toFixed(2);
                document.getElementById('myCarousel').setAttribute('style', "-webkit-transform-origin:0 0;transform-origin:0 0 ;left:50%;position:fixed;  display:block; -moz-transform: scale(" + scale + ") translate(-50%); -ms-transform:  scale(" + scale + ") translate(-50%);  -o-transform:  scale(" + scale + ") translate(-50%); transform: scale(" + scale + ") translate(-50%)");
                //console.log("3");
            }*/
            else 
            {
                scale = ((window.innerHeight-100) / 810).toFixed(2);
                if(windowwidth >= windowheight)
                {
                    document.getElementById('myCarousel').setAttribute('style', "-webkit-transform-origin:0 0 ;transform-origin:0 0 ;left:50%;position:fixed;  display:block; -moz-transform: scale(" + scale + ") translate(-50%); -ms-transform:  scale(" + scale + ") translate(-50%);  -o-transform:  scale(" + scale + ") translate(-50%); transform: scale(" + scale + ") translate(-50%)");
                }
                else
                {
                    document.getElementById('myCarousel').setAttribute('style', "-webkit-transform-origin:0 0 ;transform-origin:0 0 ;left:50%;position:fixed;  display:block; -moz-transform: scale(" + scale + ") translate(-50%); -ms-transform:  scale(" + scale + ") translate(-50%);  -o-transform:  scale(" + scale + ") translate(-50%); transform: scale(" + scale + ") translate(-50%)");
                }
                //console.log("4");
            }

            /*if (windowwidth < 743) 
            {
                document.getElementById("ds-design-area").style.width = "100px";
            } 
            else
            {
                document.getElementById("ds-design-area").style.width = "743px";
            }*/
        }

        function enableproductsizes()
    {
        document.getElementById('div_NB').style.display='none';
        document.getElementById('div_0M').style.display='none';
        document.getElementById('div_3M').style.display='none';
        document.getElementById('div_6M').style.display='none';
        document.getElementById('div_12M').style.display='none';
        document.getElementById('div_18M').style.display='none';
        document.getElementById('div_24M').style.display='none';
        document.getElementById('infant').style.display='none';

        document.getElementById('div_2T').style.display='none';
        document.getElementById('div_3T').style.display='none';
        document.getElementById('div_4T').style.display='none';
        document.getElementById('div_5T').style.display='none';
        document.getElementById('div_5_6').style.display='none';
        document.getElementById('div_6T').style.display='none';
        document.getElementById('div_7').style.display='none';
        document.getElementById('toddlers').style.display='none';


        document.getElementById('div_YXS').style.display='none';
        document.getElementById('div_YS').style.display='none';
        document.getElementById('div_YM').style.display='none';
        document.getElementById('div_YL').style.display='none';
        document.getElementById('div_YXL').style.display='none';
        document.getElementById('youth').style.display='none';


        document.getElementById('div_XS').style.display='none';
        document.getElementById('div_S').style.display='none';
        document.getElementById('div_M').style.display='none';
        document.getElementById('div_L').style.display='none';
        document.getElementById('div_XL').style.display='none';
        document.getElementById('div_2XL').style.display='none';
        document.getElementById('div_3XL').style.display='none';
        document.getElementById('div_4XL').style.display='none';
        document.getElementById('div_5XL').style.display='none';
        document.getElementById('adult').style.display='none';
        product.parent.sizes.forEach(size=>
        {
            if (size.name == "NB" || size.name == "0M" || size.name == "3M" || size.name == "6M" || size.name == "12M" || size.name == "18M" || size.name == "24M") 
            {
                document.getElementById('infant').style.display='inline-block';
            }

            if (size.name == "2T" || size.name == "3T" || size.name == "4T" || size.name == "5T" || size.name == "5_6" || size.name == "6T" || size.name == "7") 
            {
                document.getElementById('toddlers').style.display='inline-block';
            }

            if (size.name == "YXS" || size.name == "YS" || size.name == "YM" || size.name == "YL" || size.name == "YXL") 
            {
                document.getElementById('youth').style.display='inline-block';
            }

            if (size.name == "XS" || size.name == "S" || size.name == "M" || size.name == "L" || size.name == "XL" || size.name == "2XL" || size.name == "3Xl" || size.name == "4XL" || size.name == "5XL")
            {
                document.getElementById('adult').style.display='inline-block';
            }
            document.getElementById('div_'+size.name).style.display='inline-block';
        });
    }
    
    </script>
</body>

</html>