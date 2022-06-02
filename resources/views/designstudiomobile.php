<?php 
    //phpinfo();
    /*if (!extension_loaded('imagick'))
    {
        echo 'imagick not installed';
    }*/
?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Vivid Customs || Designstudio</title>
    
    <meta http-equiv=“Pragma” content=”no-cache”>
    <meta http-equiv=“Expires” content=”-1″>
    <meta http-equiv=“CACHE-CONTROL” content=”NO-CACHE”>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, minimal-ui, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="shortcut icon" type="image/x-icon" href="https://www.vividcustoms.com/img/icon/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/fonts.css') }}@php echo '?v='.rand(); @endphp">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Niconne">
    <link rel="stylesheet" href="{{asset('css/frontend/designstudio/gijgo.css') }}@php echo '?v='.rand(); @endphp">
    <link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/css/gijgo.min.css"/>
    
    <!--<link rel="stylesheet" href="{{asset('css/frontend/subas/core.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/subas/shortcode/shortcodes.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/subas/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/subas/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/subas/color/color-core.css')}}">-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/shirtcolors.css') }}@php echo '?v='.rand(); @endphp">
    <link rel="stylesheet" href="{{asset('css/frontend/designstudio/custom.css') }}@php echo '?v='.rand(); @endphp">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    

    <style type="text/css">



 /*    
.outer{
      padding: 2em 1em;
      box-shadow: 5px 5px 5px #d9d9d9;
  }

  .ds-heading{
      background: #32a7e0 !important;
      color: #ffffff !important;
      position: relative;
      margin-bottom: 1.5em;
      margin-right: -2.5em;
      margin-left: -2.5em;
      box-shadow: 5px 5px 5px #d9d9d9;
  }
  .ds-heading{
      content: "";
      position: absolute;
      border-bottom: 1.5em solid #333;
      border-left: 1.5em solid transparent;
      left: 0;
      top: -1.5em;
      
  }
  .ds-heading:after{
      content: "";
      position: absolute;
      border-top: 1.5em solid #333;
      border-right: 1.5em solid transparent;
      right: 0;
      bottom: -1.5em;
  }

  .ds-heading:hover {
    transform:scale(1,1.1);
  }*/

       /* @media (min-width:1200px) and (orientation: portrait) 
        {
            .nav>li>a>img { max-width: 15vw;}
            #myCarousel{ transform: scale(1) ; position:relative; }
            body{
                overflow: scroll;
            }

            .ds-menu{
                position: relative;
                display: block;
            }
            
            .ds-work-area{
                position: relative;
                display: block;
            }
            .ds-design-area{
                position: relative;
                display: block;
                float:left;
            }
            
        }*/
        @media (min-width:1200px) /*and (orientation: landscape) */
        {
            .nav>li>a>img { max-width: 100%;}
            /*#myCarousel{ transform: scale(1) ; position:relative; }
            #myCarousel{-webkit-transform-origin:0 0;transform-origin:0 0;position: relative;;}*/
            body{
                overflow: scroll;
            }

            .ds-menu{
                position: relative;
                display: block;
            }

            .ds-menu-mobile-1
            {
                display: none;
            }

            .ds-menu-mobile-2
            {
                display: none;
            }

            .ds-menu-mobile-3
            {
                display: none;
            }
            
            .ds-work-area{
                position: relative;
                display: block;
                overflow-y: scroll;
            }
            .ds-design-area{
                position: relative;
                display: block;
                float:left;
            }
            
        }
        @media (min-width:992px) and (max-width:1199px)
        {
            .nav>li>a>img { max-width: 15vw;}
            .navbar-header { float: none; padding-left:5px;}
            body{
                overflow: hidden;
            }
            .ds-header, .ds-container , .ds-footer {
                width: auto;
            }
            .ds-menu{
                display: none;
            }

            .ds-menu-mobile-1{
                position: fixed;
                z-index: 99;
                display: block;
                width:100%;
                bottom: 50px;
                margin-bottom: 0px;
                height: 50px;
                min-height: 50px;
            }

            .ds-menu-mobile-2{
                position: fixed;
                z-index: 99;
                display: none;
                width:100%;
                bottom: 50px;
                margin-bottom: 0px;
                height: 50px;
                min-height: 50px;
            }

            .ds-menu-mobile-3{
                position: fixed;
                z-index: 99;
                display: none;
                width:100%;
                bottom: 50px;
                margin-bottom: 0px;
                height: 50px;
                min-height: 50px;
            }

            .navbar-collapse.collapse {
                display: none !important;
               
            }

            .navbar-collapse {
                padding-right: 15px;
                padding-left: 15px;
                overflow-x: visible;
                width: auto;
                border-top: 0;
                box-shadow: none;
            }*

            .navbar-toggle {
                display: block; 
                /*position: relative;
                float: right;*/
            }

            .ds-work-area{
                position: fixed;
                display: none;
                width:100%;
                top: 0px;
                margin-top: 50px;
                z-index: 98;
                overflow-y: scroll;
            }
            .ds-design-area{
                float:none;
                /*position: relative;
                display: block;
                width:100vw;*/
            }

            /*#myCarousel{-webkit-transform-origin:0 0;transform-origin:0 0;left:50%;position:fixed;}*/
        }
        @media (min-width:768px) and (max-width:991px)
        {
            .nav>li>a>img { max-width: 15vw;}
            .navbar-header { float: none;}
            body{
                overflow: hidden;
            }
            .ds-header, .ds-container , .ds-footer {
                width: auto;
            }
            .ds-menu{
                display: none;
            }

            .ds-menu-mobile-1{
                position: fixed;
                z-index: 99;
                display: block;
                width:100%;
                bottom: 50px;
                margin-bottom: 0px;
                height: 50px;
                min-height: 50px;
            }

            .ds-menu-mobile-2{
                position: fixed;
                z-index: 99;
                display: none;
                width:100%;
                bottom: 50px;
                margin-bottom: 0px;
                height: 50px;
                min-height: 50px;
            }

            .ds-menu-mobile-3{
                position: fixed;
                z-index: 99;
                display: none;
                width:100%;
                bottom: 50px;
                margin-bottom: 0px;
                height: 50px;
                min-height: 50px;
            }


            .navbar-collapse.collapse {
                display: none !important;
               
            }

            .navbar-collapse {
                padding-right: 15px;
                padding-left: 15px;
                overflow-x: visible;
                width: auto;
                border-top: 0;
                box-shadow: none;
            }

            .navbar-toggle {
                display: block; 
                position: relative;
                float: right;
            }

            .ds-work-area{
                position: fixed;
                display: none;
                width:100%;
                top: 0px;
                margin-top: 50px;
                z-index: 98;
            }
            .ds-design-area{
                position: relative;
                display: block;
                float:none;
            }

            /*#myCarousel{-webkit-transform-origin:0 0;transform-origin:0 0;left:50%;position:fixed;}*/
        }
        @media (max-width:767px)
        {
            .nav>li>a>img { max-width: 15vw;}
            .navbar-header { float: none;}
            body{
                overflow: hidden;
            }
            .ds-header, .ds-container , .ds-footer {
                width: auto;
            }
            .ds-menu{
                display: none;
            }

            .ds-menu-mobile-1{
                position: fixed;
                z-index: 99;
                display: block;
                width:100%;
                bottom: 50px;
                margin-bottom: 0px;
                height: 50px;
                min-height: 50px;
            }

            .ds-menu-mobile-2{
                position: fixed;
                z-index: 99;
                display: none;
                width:100%;
                bottom: 50px;
                margin-bottom: 0px;
                height: 50px;
                min-height: 50px;
            }

            .ds-menu-mobile-3{
                position: fixed;
                z-index: 99;
                display: none;
                width:100%;
                bottom: 50px;
                margin-bottom: 0px;
                height: 50px;
                min-height: 50px;
            }

            .nav-justified>li {
                display: table-cell;
                width: 1%;
            }

            .nav-justified>li {
                float: none;
            }

            .navbar-collapse.collapse {
                display: none !important;
               
            }

            .navbar-collapse {
                padding-right: 15px;
                padding-left: 15px;
                overflow-x: visible;
                width: auto;
                border-top: 0;
                box-shadow: none;
            }

            .navbar-toggle {
                display: block; 
                position: relative;
                float: right;
            }

            .ds-work-area{
                position: fixed;
                display: none;
                width:100%;
                top: 0px;
                margin-top: 50px;
                z-index: 98;
            }

            .ds-design-area{
                position: relative;
                display: block;
                float:none;
            }
            /*#myCarousel{-webkit-transform-origin:0 0;transform-origin:0 0;left:50%;position:fixed;}*/
        }
        @media (max-width:480px)
        {
            .nav>li>a>img { max-width: 15vw;}
            .navbar-header { float: none;}
            body{
                overflow: hidden;
            }
            .ds-header, .ds-container , .ds-footer {
                width: auto;
            }
            .ds-menu{
                display: none;
            }

            .ds-menu-mobile-1{
                position: fixed;
                z-index: 99;
                display: block;
                width:100%;
                bottom: 50px;
                margin-bottom: 0px;
                height: 50px;
                min-height: 50px;
            }

            .ds-menu-mobile-2{
                position: fixed;
                z-index: 99;
                display: none;
                width:100%;
                bottom: 50px;
                margin-bottom: 0px;
                height: 50px;
                min-height: 50px;
            }

            .ds-menu-mobile-3{
                position: fixed;
                z-index: 99;
                display: none;
                width:100%;
                bottom: 50px;
                margin-bottom: 0px;
                height: 50px;
                min-height: 50px;
            }

            .nav-justified>li {
                display: table-cell;
                width: 1%;
            }

            .nav-justified>li {
                float: none;
            }
            
            .ds-work-area{
                position: fixed;
                display: none;
                width:100%;
                top: 0px;
                margin-top: 50px;
                z-index: 98;
            }

            .ds-design-area{
                position: relative;
                display: block;
                float:none;

            }

            /*#myCarousel{-webkit-transform-origin:0 0;transform-origin:0 0;left:50%;position:fixed;}*/
        }

            

        

.row.content{max-height:900px}
footer{background-color:transparent !important;}
header{border-bottom:1px solid #eee;}
#col10header, #col10body{max-width:1360px;}
.row.content{}
svg{display:block;font:8em 'Roboto';font-family:'Roboto', sans-serif;width:220px;height:33px;margin:0 0;}
.aa, .aa:focus, .aa:hover{color:#000000 !important;}
.web-coder-skull{fill:none;stroke:white;stroke-dasharray:6% 29%;stroke-width:5px;stroke-dashoffset:0%;animation:stroke-offset 5.5s infinite linear;}
.web-coder-skull:nth-child(6){stroke:blue;animation-delay:-1;}
.web-coder-skull:nth-child(2){stroke:red;animation-delay:-2s;}
.web-coder-skull:nth-child(3){stroke:black;animation-delay:-3s;}
.web-coder-skull:nth-child(4){stroke:blue;animation-delay:-4s;}
.web-coder-skull:nth-child(5){stroke:red;animation-delay:-5s;}
.web-coder-skull:nth-child(1){stroke:black;animation-delay:-1s;}
@keyframes  stroke-offset{100%{stroke-dashoffset:-35%;}
}
a:hover, a:visited, a:link, a:active{text-decoration:none;}
.breadcrumb>.active, .breadcrumb{border:0px solid;text-transform:uppercase;font-weight:bold;}
.modal-header{border-radius:5px;}
input[type=range]{-webkit-appearance:none;float:left;padding-top:10px;}
input[type=range]::-webkit-slider-runnable-track{height:10px;background:#696973;border:none;border-radius:3px;}
input[type=range]::-webkit-slider-thumb{-webkit-appearance:none;border:none;height:26px;width:26px;border-radius:50%;background:#31B0D5;margin-top:-6px;}
input[type=range]:focus{outline:none;}
input[type=range]:focus::-webkit-slider-runnable-track{background:#ccc;}
input[type=range]{border:1px solid white;float:left;padding-top:10px;}
input[type=range]::-moz-range-track{height:10px;background:#696973;border:none;border-radius:3px;}
input[type=range]::-moz-range-thumb{border:none;height:26px;width:26px;border-radius:50%;background:#31B0D5;}
input[type=range]:-moz-focusring{outline:1px solid white;outline-offset:-1px;}
input[type=range]:focus::-moz-range-track{background:#ccc;}
input[type=range]::-ms-track{height:10px;float:left;background:transparent;border-color:transparent;border-width:6px 0;color:transparent;}
input[type=range]::-ms-fill-lower{background:#777;border-radius:10px;}
input[type=range]::-ms-fill-upper{background:#696973;border-radius:3px;}
input[type=range]::-ms-thumb{border:none;height:26px;width:26px;border-radius:50%;background:#31B0D5;}
input[type=range]:focus::-ms-fill-lower{background:#888;}
input[type=range]:focus::-ms-fill-upper{background:#ccc;}
.modal-backdrop.in{opacity:0.1;}
#description_image{width:9em !important;}
#description_imageModal{width:6em !important;}
.tab-pane{border:none !important;margin-top:0}
textarea{resize:none;}
.btn-success{color:#fff;background-color:#4fc1f0;border-color:#0692cb;}
.btn-success.hover{color:#fff;background-color:#0692cb;border-color:#4fc1f0;}
.btn{border-radius:8px;}
.hover:hover{border:1px solid #000000;}
.active{border:2px solid #eeeeee;background:none !important;}
.nav{border:none;}
.nav li{border:none;}
li.active a{background-color:#cccccc !important;}
.nav a{color:#ffffff !important;margin:0 !important;padding-top:1vh;padding-bottom:1vh;font-size:12;border:none !important;outline:none;padding:10px 1px;}
.nav a:hover{background-color:transparent !important;}
.nav>li>a{position:relative;display:block;padding:10px 10px;}
.nav ul li{display:table-cell !important;width:1%;}
.navbar{margin-bottom:0px !important;}
#icon-img{border:none;background-color:#ffffff;}
#footer_menu,#footer_menu_art,#footer_menu_text{border:none;}
#footer_menu li.active a ,#footer_menu_art li.active a ,#footer_menu_text li.active a{background-color:transparent !important;}
#footer_menu li.active ,#footer_menu_art li.active ,#footer_menu_text li.active{background-color:transparent !important;border:0px solid transparent !important;}
#footer_menu li ,#footer_menu_art li ,#footer_menu_text li{background-color:transparent !important;border:0px solid transparent !important;display:table-cell !important;width:1%;}
#footer_menu li a:hover ,#footer_menu_art li a:hover ,#footer_menu_text li a:hover{background-color:transparent !important;}
#icon-img a, #footer_menu a ,#footer_menu_art a ,#footer_menu_text a{color:#000000 !important;margin:0 !important;padding-top:1vh;padding-bottom:1vh;font-size:12px;border:none !important;outline:none;padding:10px 1px;}
#icon-img a:hover, #footer_menu a:hover ,#footer_menu_art a:hover ,#footer_menu_text a:hover{background-color:#fff !important;}
#icon-img li.active a ,#footer_menu_art li.active a ,#footer_menu_text li.active a{background-color:#ffffff !important;}
#myCarousel .carousel-indicators li{cursor:pointer;border:1px solid #696973;opacity:1;overflow:hidden;transition:all 0.4s;width:50px;height:50px;border-radius:50px;margin:5px;}
#myCarousel .carousel-indicators .active{background:#333333;border:3px solid #31B0D5;opacity:1;overflow:hidden;width:80px;height:80px;border-radius:80px;margin:5px;}
#myCarousel .active{border:0px solid #eeeeee;}
.canvasShirt{background-repeat:no-repeat;background-size:cover;background-position:center center;}
.hover2{width:160px;height:auto;padding:5px;}
.clipart-hover:hover{border:1px solid #000000;}
.hover2:hover{border:1px solid #000000;}
#clipArtTable{width:100%;height:260px !important;overflow-x:hidden;}
#clipArtTable2{width:100%;height:260px !important;overflow-x:hidden;}
#clipArtTableModal{width:100%;height:260px !important;overflow-x:hidden;}
#clipArtTable2Modal{width:100%;height:260px !important;overflow-x:hidden;}
#templateTable{width:100%;height:400px !important;overflow-x:hidden;}
#templateTable2{width:100%;height:400px !important;overflow-x:hidden;}
#templateTableModal{width:100%;height:400px !important;overflow-x:hidden;}
#templateTable2Modal{width:100%;height:400px !important;overflow-x:hidden;}
.carousel-caption{top:0;bottom:auto;text-shadow:2px 4px 6px #000000 !important;}
{float:left;border:1px solid #eeeeee;cursor:pointer;border-radius:50%;margin-right:1.7px;width:30px !important;height:30px !important;}
.animate:after{content:url('../../img/icon/check.png');margin-left:3px;margin-top:2px;position:absolute;}
.animate2:after{content:url('../../img/icon/check.png');margin-left:3px;margin-top:2px;}
#fontmenu_bar, #fontmenu_barModal{overflow-y:hidden;height:auto;border-bottom:1px solid #399fd9;background-color:transparent;}
#fontmenu_bar li a, #fontmenu_barModal li a{color:#4fc1f0 !important;background-color:transparent;}
#fontmenu_bar li.active a, #fontmenu_barModal li.active a{color:#000000 !important;background-color:transparent !important;}
#fontmenu_body{overflow-y:auto;height:200px;overflow-x:hidden;}
#fontmenu_bodyModal{overflow-y:auto;height:900px;overflow-x:hidden;}
.row{width:100%;margin:0 auto;}
.fonts:hover{color:#4fc1f0;}
body{padding:5px;}
#sizeForm input{width:7%;}
.carousel-control{opacity:1;}
.carousel-control.right{right:70px;left:auto;background-image:-webkit-linear-gradient(left,rgba(0,0,0,0) 0,rgba(0,0,0,.0) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,0) 0,rgba(0,0,0,.0) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,0)),to(rgba(0,0,0,.0)));background-image:linear-gradient(to right,rgba(0,0,0,0) 0,rgba(0,0,0,0) 100%);background-repeat:repeat-x;}
.carousel-control.left{left:70px;background-image:-webkit-linear-gradient(left,rgba(0,0,0,0) 0,rgba(0,0,0,.0) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,0) 0,rgba(0,0,0,.0) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,0)),to(rgba(0,0,0,.0)));background-image:linear-gradient(to right,rgba(0,0,0,0) 0,rgba(0,0,0,.0) 100%);background-repeat:repeat-x;}
.switch{position:relative;display:inline-block;width:55px;height:24px;}
.switch input{display:none;}
.slider{position:absolute;cursor:pointer;top:0;left:0;right:0;bottom:0;background-color:#2196F3;-webkit-transition:.4s;transition:.4s;}
.slider{position:absolute;content:"";height:20px;width:20px;left:4px;bottom:2px;background-color:#2196F3;-webkit-transition:.3s;transition:.3s;}
input:checked + .slider{background-color:#2196F3 !important;}
input:focus + .slider{box-shadow:0 0 1px #2196F3 !important;}
input:checked + .slider{-webkit-transform:translateX(26px);-ms-transform:translateX(26px);transform:translateX(26px);}
.slider.round{border-radius:34px;}
.slider.round{border-radius:50%;}
input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button{appearance:none;margin:0;}
.thumbnail{width:8vw;height:9vw;}
#productdiv{width: 80vw;height: 90vh; margin: auto; padding: 5px;}
.SaveDesign{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.25) translate(-50%);transform:scale(0.25) translate(-50%);left:50%;}
.SaveDesignPreview{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.1) translate(-50%);transform:scale(0.15) translate(-50%);left:50%;}
.SaveDesignPreview2{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.1) translate(-50%);transform:scale(0.1) translate(-50%);left:50%;}
.thumbnail2{max-height:10em;height:auto; margin-bottom: 70px;}
.SharePreviewCase{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.1) translate(-50%);transform:scale(0.1) translate(-50%);left:50%;}
#leftcolos, #backcolos{margin-top:0px;margin-bottom:0px;}
#rightcolos, #frontcolos{margin-top:0px;margin-bottom:0px;}
@media (min-width:1200px){.SaveDesign{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.25) translate(-50%);transform:scale(0.25) translate(-50%);left:50%;}
#rightSavedDesing{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.25) translate(-50%);transform:scale(0.25) translate(-50%);left:50%;}
#backSavedDesing{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.25) translate(-50%);transform:scale(0.25) translate(-50%);left:50%;}
#leftSavedDesing{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.25) translate(-50%);transform:scale(0.25) translate(-50%);left:50%;}
#col10header, #col10body{width:1360px !important;width:83.33333333%;margin-right:auto;margin-left:auto;}
#myCarouselIndicators{bottom:-10px;display:block;}
.hover2{width:160px;height:auto;padding:5px;}
#leftcolos, #backcolos{margin-top:0px;margin-bottom:0px;}
#rightcolos, #frontcolos{margin-top:0px;margin-bottom:0px;}
.thumbnail2{margin-bottom: 70px;}
#productdiv{width: 80vw;height: 90vh; margin: auto; padding: 5px;}
}
@media (min-width:992px) and (max-width:1199px){.SaveDesign{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.15) translate(-50%);transform:scale(0.15) translate(-50%);left:50%;}
#col10header, #col10body{width:1000px !important;margin-right:auto;margin-left:auto;}
#myCarouselIndicators{bottom:0px;display:block;}
.hover2{width:160px;height:auto;padding:5px;}
#leftcolos, #backcolos{margin-top:0px;margin-bottom:0px;}
#rightcolos, #frontcolos{margin-top:0px;margin-bottom:0px;}
.thumbnail2{margin-bottom: 70px;}
#productdiv{width: 80vw;height: 90vh; margin: auto; padding: 5px;}
}
@media (min-width:768px) and (max-width:991px){.SaveDesign{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.1) translate(-50%);transform:scale(0.1) translate(-50%);left:50%;}
.undoredo{margin-left:10vw !important;}
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

.panel-body{padding:8px;}
.panel-heading, .panel-info,.input-group-addon, .breadcrumb{background-color:#fff !important;border-color:#9a9898 !important;color:#000000 !important;}
.panel-heading{font-size:1.2rem;padding:5px 10px !important;border-bottom:0px solid transparent;}
.breadcrumb{border-bottom:1px solid #9a9898 !important;}
.panel-info>.panel-heading+.panel-collapse>.panel-body,.panel-body{border-top:1px solid #9a9898 !important;}
.uppercase{text-transform:uppercase;font-weight:bold;}
#clipArtTable a, #clipArtTable2 a{font-size:12px;}
.inputslider{padding-right:0px;padding-left:0px;}
.modal-header-success{color:#fff;padding:9px 15px;border-bottom:1px solid #eee;background-color:#5cb85c;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px;}
.modal-header-warning{color:#fff;padding:9px 15px;border-bottom:1px solid #eee;background-color:#f0ad4e;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px;}
.modal-header-danger{color:#fff;padding:9px 15px;border-bottom:1px solid #eee;background-color:#d9534f;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px;}
.modal-header-info{color:#fff;padding:9px 15px;border-bottom:1px solid #eee;background-color:#5bc0de;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px;}
.modal-header-primary{color:#fff;padding:9px 15px;border-bottom:1px solid #eee;background-color:#428bca;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px;}
.form-control2{border:1px solid #b7b7b7;border-radius:3px;display:block;height:2.3rem;margin-bottom:.5rem;text-align:center;width:5rem;}
.sizeinput{border:0px solid #eeeeee;padding-bottom:5px;}
.modal-body{overflow-y:auto;}
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button{-webkit-appearance:none;margin:0;}
.transparent:after{content:"";position:absolute;border-top:1px solid red;width:25px;transform:rotate(45deg);transform-origin:0% 0%;margin-left:3px;margin-top:2px;}
.transparent2:after{content:"";position:absolute;border-top:1px solid red;width:30px;transform:rotate(45deg);transform-origin:0% 0%;margin-left:3px;margin-top:2px;}
#dsmenu ul{padding:0;margin:0;width:100%;list-style-type:none;position:fixed;left:0;height:100%;}
#dsmenu ul li{background:#f8f8f8 none repeat scroll 0 0;float:left;position:relative;width:100%;border-top:1px solid#ddd;}
#dsmenu ul li a{background:#f8f8f8 none repeat scroll 0 0;color:#666666;display:block;float:left;font-size:12px;margin:0;padding:1em 5%;text-align:left;text-decoration:none;text-transform:uppercase;width:90%;font-weight:bold;}
.modal-xl{width:90%;max-width:1200px;}
#mi-modal{text-align:center !important;padding:0!important !important;}
#mi-modal{content:'' !important;display:inline-block !important;height:100% !important;vertical-align:middle !important;margin-right:-4px !important;}
#mi-modal .modal-dialog{display:inline-block !important;text-align:left !important;vertical-align:middle !important;}


.progress { position:relative; width:100%; }
.bar { background-color: #008000; width:0%; height:20px; }
.percent { position:absolute; display:inline-block; left:50%; color: #7F98B2;}

@media (min-width:1200px){#footer_copyrigth, #description_image{display:block;}
#footer_menu_bar{display:none;}
#footer_menu li a img, #footer_menu_art li a img, #footer_menu_text li a img{width:7em;}
#footer_menu li a , #footer_menu_art li a , #footer_menu_text li a{font-size:8px;}
#work_area{display:block;}
#textarea_btn{display:none;}
header{position:relative;display:block;}
footer{position:relative;display:block;}
#myCarousel{-webkit-transform-origin:unset;transform-origin:unset;-webkit-transform:unset;-moz-transform:unset;-ms-transform:unset;-o-transform:unset;transform:unset;left:none;position:fixed;display:block;}
body{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(1.00);-moz-transform:scale(1.00);-ms-transform:scale(1.00);-o-transform:scale(1.00);transform:scale(1.00);}
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

    </style>
</head>

<body>
    <div id="loader" class="loader" style="display: block;">
    </div>
    <div class="page"  id="app">
        <nav class="navbar  visible-md visible-sm visible-xs ">
            <div class=" navbar-header">
                <div class="navbar-toggle" style="padding: 0;  margin-top: 0px;  margin-bottom: 0px;">
                    <div class="row">
                        <div class="col-xs-3" style=" padding-right: 5px; padding-left: 5px; border-left: 1px solid #eee; border-right: 1px solid #eee;">
                            <span style="cursor: pointer !important;" onclick="ShowYourDesign();return false;">
                                <img src="https://www.vividcustoms.com/img/icon/new/your-design-mobile.png" id="getPriceBtn" style="height: 20px;">
                            </span>
                            <br>
                            <span style="font-size: 12px;">Design</span>
                        </div>
                        <div class="col-xs-3" style=" padding-right: 5px; padding-left: 5px; border-right: 1px solid #eee; border-right: 1px solid #eee;">
                            <span id="directcheckout" onclick="ShowSaveShare();return false;">
                                <img src="https://www.vividcustoms.com/img/icon/new/save.png" style="height: 20px;">
                            </span>
                            <br>
                            <span style="font-size: 12px;">Save</span>
                        </div>
                        <div class="col-xs-3" style=" padding-right: 5px; padding-left: 5px; border-right: 1px solid #eee; border-right: 1px solid #eee;">
                            <span id="directcheckout" onclick="SaveDesignNameWindow('Check-out');">
                                <img src="https://www.vividcustoms.com/img/icon/new/cart.png" style="height: 20px;">
                            </span>
                            <br>
                            <span style="font-size: 12px;">Cart</span>
                        </div>
                        <div class="col-xs-3" style=" padding-right: 5px; padding-left: 5px; border-left: 1px solid #eee; border-right: 1px solid #eee;">
                            <span style="cursor: pointer !important;" onclick=" ShowGetPrice();">
                                <img src="https://www.vividcustoms.com/img/icon/money.png" id="getPriceBtn" style="height: 20px;">
                            </span>
                            <br>
                            <span style="font-size: 12px;">Price</span>
                        </div>
                    </div>
                </div>
                <div class="navbar-brand" style="padding-top: 5px; padding-left: 10px;">
                    <div data-toggle="collapse" data-target="#dsmenu">
                        <a href="javascript:void(0)">
                            <img src="https://www.vividcustoms.com/img/logo/vividcustoms-logo-vc.png" id="logosmall" style="width: 2.5em;">
                        </a>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="dsmenu">
                <ul >
                    <li >
                        <a href="https://www.vividcustoms.com/index" >Home</a>
                    </li>
                    <li>
                        <a href="https://www.vividcustoms.com/designstudio">Design Studio</a>
                    </li>
                    <li>
                        <a href="https://www.vividcustoms.com/login">My account</a>
                    </li>
                    <li>
                        <a href="https://www.vividcustoms.com/products">products</a>
                    </li>
                    <li>
                        <a href="https://www.vividcustoms.com/templatedesign">Design Templates</a>
                    </li>
                    <li class="mean-last">
                        <a href="https://www.vividcustoms.com/contact">Contact</a>
                    </li>
                    <li class="mean-last" id="logoutmobile" style="display: none;">
                        <a href="https://www.vividcustoms.com/logoutstudio">Logout</a>
                    </li>                        
                </ul>
            </div>
        </nav>
        <div class="ds-header visible-lg">
            <div class="ds-logo">
                <a href="/index">
                <img src="{{asset('img/logo/logo.png')}}" id="logo" width="195" height="auto">
                </a>
            </div>
            <div class="ds-price">

            </div>
            <div class="ds-cart-area">
                <div class="input-group" style="margin-right: 0px !important; padding-right: 0px !important; float: right !important;">
                    <span>
                        <button id="saveSectionLI" class="btn btn-success btn-md" onclick=" deselectAllCanvases();/* */ShowSaveShare();return false;">
                            <span class="glyphicon glyphicon-save">
                            </span>Save & Share
                        </button>
                        <button id="directcheckout" class="btn btn-success btn-md" style="display: none;" onclick="SaveDesignNameWindow('Check-out');">
                            <span class="glyphicon glyphicon-shopping-cart">
                            </span>Checkout
                        </button>
                        <button id="getPriceBtn" class="btn btn-success btn-md" onclick=" ShowGetPrice();">
                            <span class="glyphicon glyphicon-usd">
                            </span>Get Price
                        </button>
                        
                    </span>
                </div>
            </div>
        </div>
        <div class="ds-container">
            <div class="ds-menu  visible-lg" id="ds-menu">
                <ul class="ds-nav nav nav-tabs nav-stacked" id="main-menu" style="text-align: center; ">
                <li class="ds-li" style="border: 2px solid #ffffff; border-radius: 10px;" onclick="document.getElementById('ds-work-area').style.display = 'block';deselectAllCanvases();">
                    <a class="ds-a" data-toggle="tab" href="#productSection">
                    <img class="ds-img" id="change_item" src="{{asset('img/icon/product.png')}}"   style="/*width:100%;*/">
                    <br>
                    <span class="ds-span">Products</span>
                    </a>
                </li>
                <li class="ds-li" style="border: 2px solid #ffffff; border-radius: 10px;" onclick="document.getElementById('ds-work-area').style.display = 'block';deselectAllCanvases(); document.getElementById('editArt').style.display = 'none';  document.getElementById('newArt').style.display = 'block'; document.getElementById('div-clipartsubcategories').style.display = 'none'; document.getElementById('div-clipartcategories').style.display = 'block'; document.getElementById('div-cliparts').style.display = 'none'; document.getElementById('div-filtercliparts').style.display = 'none';/*activateMenu('image');*/">
                    <a class="ds-a" data-toggle="tab" href="#addArt">
                    <img class="ds-img" id="add_art" src="{{asset('img/icon/add-art.png')}}"  onclick="/*startcategories();*/" style="/*width:100%;*/">
                    <br>
                    <span class="ds-span">Add Art</span>
                    </a>
                </li>
                    <li  class="ds-li" onclick="document.getElementById('ds-work-area').style.display = 'block';deselectAllCanvases();" style="border: 2px solid #ffffff; border-radius: 10px;">
                    <a class="ds-a" data-toggle="tab" href="#textSection">
                        <img class="ds-img" id="add_text" src="{{asset('img/icon/add-text.png')}}" style="/*width:100%;*/">
                        <br>
                        <span class="ds-span">Add Text</span>
                    </a>
                </li>
                <li  class="ds-li" style="border: 2px solid #ffffff; border-radius: 10px;" onclick="document.getElementById('ds-work-area').style.display = 'block';deselectAllCanvases();">
                    <a class="ds-a" data-toggle="tab" href="#addTemplate">
                    <img class="ds-img" id="add_template" src="{{asset('img/icon/templates.png')}}"  onclick="starttemplatecategories();" style="/*width:100%;*/">
                    <br>
                    <span class="ds-span">Templates</span>
                    </a>
                </li>
                <li  class="ds-li" id="personalizeLI" style="border: 2px solid #ffffff; border-radius: 10px;" onclick="document.getElementById('ds-work-area').style.display = 'block'; deselectAllCanvases(); displaypersonalize('backCanvas', true); $('#PersonalizeNotification').modal('show');*/">
                    <a class="ds-a" data-toggle="tab" href="#personalize">
                    <img class="ds-img" id="personalize" src="{{asset('img/icon/personalize.png')}}" style="/*width:100%;*/">
                    <br>
                    <span class="ds-span">Personalize</span>
                    </a>
                </li>
                <li  class="ds-li" id="your_design" onclick="document.getElementById('ds-work-area').style.display = 'block';deselectAllCanvases();/* ShowYourDesign(); return false;*/" style="border: 2px solid #ffffff; border-radius: 10px;">
                    <a class="ds-a" data-toggle="tab" href="javascript:void(0)">
                        <img class="ds-img" id="your_design" src="{{asset('img/icon/your-design.png')}}"   style="/*width:100%;*/">
                        <br>
                        <span class="ds-span">My Designs</span>
                    </a>
                </li>
                <li  class="ds-li" id="saveTemplateLI" style="border: 2px solid #ffffff; border-radius: 10px; display: none;">
                    <a class="ds-a" data-toggle="tab" href="javascript:void(0)" onclick="document.getElementById('ds-work-area').style.display = 'block';deselectAllCanvases(); /*showColorModal('saveTemplateModal'); LoadDesignsCategories();*/">
                        <img class="ds-img" id="save_and_template" src="{{asset('img/icon/save-share.png')}}"   style="/*width:100%;*/">
                        <br>
                        <span class="ds-span"> Save &amp; Template</span>
                    </a>
                </li>
                <li  class="ds-li" id="saveStoreLI" style="border: 2px solid #ffffff; border-radius: 10px; display: none;">
                    <a class="ds-a" data-toggle="tab" href="javascript:void(0)" onclick="document.getElementById('ds-work-area').style.display = 'block'; deselectAllCanvases(); /*showColorModal('saveStoreModal'); LoadStoreDesignsCategories();*/">
                        <img class="ds-img" id="save_and_store" src="{{asset('img/icon/save-share.png')}}"   style="/*width:100%;*/">
                        <br>
                        <span class="ds-span"> Save &amp; Store</span>
                    </a>
                </li>
            </ul>
            </div>
            <div class="ds-work-area  visible-lg" id="ds-work-area">
                <div class="tab-content">
                    <div id="defaultSection" class="tab-pane fade in active panelshadow">
                        <div class="panel panel-info" style="height: 400px;">
                            <div>
                                <h1 class="" style="text-align: center; font-size: 16px; color: #595d5f; margin-bottom:50px;">What would you like to do next?</h1>
                            </div>
                            <div class="panel-body">
                            <div class="row" style="margin-bottom: 40px;">
                                <div class="col-sm-6">
                                    <center>
                                        <li class="ds-li" style="border: 2px solid #ffffff; border-radius: 10px; list-style-type: none;" onclick="deselectAllCanvases();/* document.getElementById('editArt').style.display = 'none';  document.getElementById('newArt').style.display = 'block'; activateMenu('image');*/">
                                            <a class="ds-a" data-toggle="tab" href="#addArt">
                                                <img class="ds-img2" id="add_art" src="{{asset('img/icon/add-art.png')}}" style="width: 65px; margin-bottom:12px;" onclick="/*startcategories();*/">
                                                <br>
                                                <span class="dsbutton">Add Art</span>
                                            </a>
                                        </li>
                                    </center>
                                </div>
                                <div class="col-sm-6">
                                    <center>
                                        <li  class="ds-li" onclick="deselectAllCanvases();/* activateMenu('text');*/" style="border: 2px solid #ffffff; border-radius: 10px; list-style-type: none;">
                                            <a class="ds-a" data-toggle="tab" href="#textSection">
                                                <img class="ds-img2" id="add_text" src="{{asset('img/icon/add-text.png')}}" style="width: 65px; margin-bottom:12px;">
                                                <br>
                                                <span class="dsbutton">Add Text</span>
                                            </a>
                                        </li>
                                    </center>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <center>
                                        <li class="ds-li" style="border: 2px solid #ffffff; border-radius: 10px; list-style-type: none;" onclick="deselectAllCanvases();">
                                            <a class="ds-a" data-toggle="tab" href="#productSection">
                                                <img class="ds-img2" id="change_item" src="{{asset('img/icon/product.png')}}" style="width: 65px; margin-bottom:12px;" >
                                                <br>
                                                <span class="dsbutton">Products</span>
                                            </a>
                                        </li>
                                    </center>
                                </div>
                                <div class="col-sm-6">
                                        <center>
                                    <a data-toggle="tab" href="javascript:void(0)" onclick="startover();" class="dsbutton">Start Over</a></center>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div id="productSection" class="tab-pane fade panelshadow">
                    <div class="panel panel-info">
                        <div class="panel-body">
                                <!--START PRODUCT DESCRIPTION-->
                            <div class="row">
                                <div class="col-xs-7 col-sm-6 col-md-6 col-lg-6">
                                <h5 id="product_name">{{$product->parent->name}}</h5>
                                <div id="description_label">
                                    <p><strong>Brand:</strong> {{$product->brand}} </p>
                                    <p><strong>Size:</strong> YXS-5XL  <a href="javascript:void(0)" id="btnmodal" data-toggle="modal" data-target="#sizechartmodal"> size chart</a></p>
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
                            <div class="row" style="width: 100%; margin: 0 auto;" id="child_product_color_div">Quantity 1-5<br>
                                @foreach ($product->parent->colors as $color)
                                    <div id="child_color_minimum_{{$color->id}}" class="block color-{{$color->id}} {{$color->id == $product->color->id ? 'animate' : ''}}" title="{{$color->name}}" style="border-radius: 50%; background-color: {{$color->hex}}; width: 30px; height: 30px; border: 0px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px;" onclick="setcanvasproperties('{{$color->pivot->childproduct_id}}'); setactivecolor(this);"></div>    
                                @endforeach
                            </div>
                            <br>
                            <div class="row" style="width: 100%; margin: 0 auto;" id="child_product_color_div6">Quantity 6+<br>
                                @foreach ($product->parent->colors as $color)
                                    <div id="child_color_minimum_{{$color->id}}" class="block color-{{$color->id}} {{$color->id == $product->color->id ? 'animate' : ''}}" title="{{$color->Name}}" style="border-radius: 50%; background-color: {{$color->hex}}; width: 30px; height: 30px; border: 0px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px;" onclick="setcanvasproperties('{{$color->pivot->childproduct_id}}'); setactivecolor(this);"></div>    
                                @endforeach
                            </div>
                            <hr>
                            <a type="button" id="changeproductbtn" name="changeproductbtn" style="cursor: pointer;" href="javascript:void(0)" data-toggle="modal" data-target="#productmodal" onclick="document.getElementById('listproduct').style.display = 'block'; document.getElementById('singleproduct').style.display = 'none';  document.getElementById('sortby-filter').style.display = 'none'; document.getElementById('results').style.display = 'none'; ">
                                <center>
                                    <span class="" style="color: #ffffff !important; background-color: #32a7e0; padding: 8px 30px; border-radius: 8px; margin-left: auto; margin-right: auto; text-align: center; font-size: 1.8rem;">
                                        Change Product
                                    </span>
                                </center>
                            </a>
                            
                        </div>
                    </div>
                    </div>
                    <div id="addArt" class="tab-pane fade panelshadow">
                        <div id="newArt">
                            <clipartscomponent></clipartscomponent>
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
                                                    <label for="termsOfUse">
                                                        <input type="checkbox" id="termsOfUse" name="termsOfUse" onchange="hideshowbutton(this);">
                                                        <span>I agree to the </span> <a href="{{asset('user-agreement')}}" target="blank">terms and conditions</a> for uploaded material
                                                    </label>
                                                </p>
                                            </div>
                                        </div>
                                        <form method="POST" action="{{ route('uplaodclipart') }}"  id="uploadclipartform" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="row" id="uploaddiv" >
                                            <div class="col-sm-6 col-md-6 col-lg-6" align="left"> <input type="file" id="file" name="file"  onchange="uploadImage();"/></div>
                                            <div class="col-sm-6 col-md-6 col-lg-6" align="right"><button type="submit" id="upload" class="btn btn-info" style="background-color: #4fc1f0; display: none;">Upload</button></div>
                                            <div class="col-sm-12" id="uploadprogressbar">
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
                        <!--START MODIFY ART SECTION-->
                        <div id="editArt" style="display: none;">
                            <div class="panel-group">
                                <div class="panel panel-info" id="displaycolor">
                                    <div class="row" onclick="document.getElementById('editArt').style.display = 'none';  document.getElementById('newArt').style.display = 'none'; document.getElementById('changecolorArt').style.display = 'block'; /*deselectAllCanvases();*/" style="cursor:pointer;">
                                        <div class="col-xs-2">
                                             <span class="uppercase">Color: </span>
                                        </div>
                                        <div class="col-xs-10">
                                            <div id="objectcolors2" name="objectcolors2" style="float:right;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info" id="displaynoeditcolor">
                                    <div class="row">
                                        <div class="col-xs-2">
                                                <span class="uppercase">Color: </span>
                                        </div>
                                        <div class="col-xs-10">
                                            <div id="objectcolors3" name="objectcolors3" style="float:right;"></div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <span><b>COLOR EDIT:</b> NOT AVAILABLE FOR THIS IMAGE </span>
                                        <div class="row" id="removewhite">
                                            <div style="float:left;">
                                                <span>
                                                    <b>REMOVE WHITE: </b>
                                                </span>
                                            </div>
                                            <div style="float:right;">
                                                <label class="switch">
                                                    <input type="checkbox" id="removewhite" onclick="RemoveWhite(this);">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info" id="displayfullcolor" style="display:none">
                                        <div class="row">
                                            <div class="col-xs-2">
                                                <span class="uppercase">Color: </span>
                                            </div>
                                            <div class="col-xs-10">
                                                <span  style="float:right;">FULL COLOR IMAGE</span>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <span><b>COLOR EDIT:</b> NOT AVAILABLE FOR THIS IMAGE </span>
                                        </div>
                                    </div>

                                <div class="panel panel-info">
                                    <div class="panel-body">
                                        <center><i class="fa fa-lock" id="resizeicon" style="font-size:25px;color:#31b0d5; cursor: pointer;" onclick="SetScaleProportional('image');"></i></center>
                                        <div class="">
                                            <div class="row">
                                                <div class="col-lg-2 inputslider" align="left"> <span>Width</span> </div>
                                                <div class="col-lg-8  inputslider"> <input id="widthImage" type="range" min="1" max="12" name="widthImage" oninput="resize(event);"  step="0.1"> </div>
                                                <div class="col-lg-2 inputslider" align="right"><input id="widthvalueImage" type="text" onkeypress="validate(event);" name="widthvalueImage" min="1" max="12" oninput="resize(event);" step="0.1" style="width: 55px !important;" ></div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="">
                                            <div class="row">
                                                <div class="col-lg-2 inputslider" align="left"> <span>Height</span> </div>
                                                <div class="col-lg-8  inputslider"> <input id="heightImage" type="range" min="1" max="12" name="heightImage" oninput="resize(event);"  step="0.1"> </div>
                                                <div class="col-lg-2 inputslider" align="right"><input id="heightvalueImage" type="text" onkeypress="validate(event);" name="heightvalueImage" min="1" max="12" oninput="resize(event);" step="0.1" style="width: 55px !important;" ></div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="">
                                            <div class="row">
                                                <div class="col-lg-2 inputslider" align="left"> <span>Rotation</span> </div>
                                                <div class="col-lg-8  inputslider"> <input id="angleImage" type="range" min="-180" max="180" name="angleImage" oninput="rotate(event);"  step="5" value="0"> </div>
                                                <div class="col-lg-2 inputslider" align="right"><input id="anglevalueImage" type="number" onkeypress="validate(event);" name="anglevalueImage" min="-180" max="180" value="0" oninput="rotate(event);" step="5" style="width: 55px !important;" ></div>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- Start New Rotation Section -->
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-left: 1px; padding-right: 1px; margin-left:auto; margin-right:auto;">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="background-color: #eeeeee; padding: 1px; border-right: solid 4px white;">
                                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" style="padding: 1px; border-right: solid 1px black;"><span onclick="flipX();" style="cursor: pointer;"><img src="{{asset('img/icon/icon-flip-across.png')}}" width="22px" height="auto"></span></div>
                                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" style="padding: 1px;"><span onclick="flipY();" style="cursor: pointer;"><img src="{{asset('img/icon/icon-flip-up.png')}}" width="auto" height="20px"></span></div>
                                            </div>
                                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5" style="background-color: #eeeeee; padding: 1px; border-right: solid 4px white;">
                                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" style="padding: 1px; border-right: solid 1px black;" onclick="SetLayer('forward');"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-layer-up.png')}}" width="auto" height="20px"></span></div>
                                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" style="padding: 1px;" onclick="SetLayer('backward');"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-layer-down.png')}}" width="auto" height="20px"></span></div>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="background-color: #eeeeee; padding: 1px;">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center" style="padding: 1px;" onclick="SetLayer('center');"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-center.png')}}" width="auto" height="20px"></span></div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-left: 1px; padding-right: 1px;">
                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-4" align="center"><span>Flip</span></div>
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-5" align="center"><span>Layers order</span></div>
                                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-3" align="center"><span>Center</span></div>
                                        </div><br>
                                        <!-- End Rotation Section -->

                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-right">
                                            <button class="btn btn-success" style="vertical-align:middle" onclick="document.getElementById('editArt').style.display = 'none';  document.getElementById('newArt').style.display = 'block'; deselectAllCanvases();"><span>Back to category</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="changecolorArt" style="display: none;">
                        <div class="panel-group">
                            <div class="panel panel-info" id="displaycolor">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <span class="uppercase">Color: </span>
                                    </div>
                                    <div class="col-xs-10">
                                        <div id="objectcolors" name="objectcolors" style="float:right;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-body" id="Artcolorink" name="Artcolorink">
                                    <span id="ArtcolorText" name="ArtcolorText" style="display:inline">Selected color name: <span id="Artcolor" name="Artcolor" style="display:inline"></span><br><br></span>
                                    <div id="inkcolorlist" class="row">
                                        <span style="display: block;">Select new color:</span>
                                        <div class="block transparent" id="artcolortransparent" style="border-radius:  50%;  margin-right: 1.7px; background-color: #ffffff; border:2px solid #eeeeee; cursor:pointer" onclick="document.getElementById('Artcolor').innerHTML = 'Transparent'; changecolor('transparent');">
                                        </div>
                                        @foreach($inkcolors as $inkcolor)
                                            <div id="artcolor{{$inkcolor->hex}}" class="block color-{{$inkcolor->id}}" title="{{$inkcolor->name}}" style="border-radius:  50%;  margin-right: 1.7px; background-color: {{$inkcolor->hex}}; border:1px solid #eeeeee; cursor:pointer" onclick="document.getElementById('Artcolor').innerHTML = '{{$inkcolor->name}}'; changecolor('{{$inkcolor->hex}}'); ">
                                            </div>
                                        @endforeach
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-md-12 col-lg-12 col-sm-12" style="margin-top: 15px; padding-left: 0px;" id="checkcolorlegend">
                                        <span class="animate2"></span> Indicates a color already in your design
                                    </div>
                                    <br>
                                    <div class="col-md-12 col-lg-12 col-sm-12" style="padding-left: 0px;" id="artcolortransparentlegend">
                                        <div class="block transparent" style="border-radius: 50%;  margin-right: 1.7px; background-color: #ffffff; border:2px solid #eeeeee; cursor:pointer;">
                                        </div> Indicates a color is transparent
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-right">
                                                <button class="btn btn-success" style="vertical-align:middle" onclick="document.getElementById('editArt').style.display = 'block';  document.getElementById('newArt').style.display = 'none'; document.getElementById('changecolorArt').style.display = 'none'; deselectAllCanvases();"><span>Done</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div id="addTemplate" class="tab-pane fade panelshadow">
                        <div class="panel-group">
                            <div class="panel panel-info">
                                <div class="panel-body">
                                    <div id="templateCategory">
                                        <div id="templateMenu" class="panel panel-info">
                                            <div id="templateCategories">
                                                <ol class="breadcrumb" id="templatebreadcrumb" style="cursor:pointer; margin-bottom: 5px;">
                                                    <li class="active" id="templatecategories">Design Templates</li>
                                                    <li id="templatesubcategories" style="display: none; "></li>
                                                    <li id="templatesubsubcategories" style="display: none;"></li>
                                                    <li id="clips" style="display: none;"></li>
                                                </ol>
                                            </div>
                                            <div class="input-group"  style="margin-bottom: 30px;">
                                                <input type="text" class="form-control" placeholder="Search template by name" name="searchtemplate" id="searchtemplate" oninput="ScanTemplate();">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-success" type="button" onclick="ScanTemplate();" style="background-color: #4fc1f0 !important;"><i class="glyphicon glyphicon-search" style="color: white;"></i></button>
                                                </div>
                                            </div>
                                            <div id="templateTable2" style="display: none;">
                                            </div>
                                            <div id="templateTable" style="display: block;">
                                                <div class="row text-center">
                                                    @foreach($templatecategories as $templatecategory)
                                                        <div class="col-xs-6">
                                                            <a href="javascript:void(0);" onclick="setTemplateCategory('{{ $templatecategory->name }}');" class="aa">
                                                            <img src="{{asset('img/category')}}{{'/'}}{{$templatecategory->filename}}" class="hover2" style="padding: 1vw; background-color:{{$templatecategory->background}}">
                                                                <div class="caption">
                                                                    <p>{{ $templatecategory->name}}</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="textSection" class="tab-pane fade panelshadow">
                        <div class="panel-group" id="new_text">
                            <div class="">
                                <div class="form-group" style="padding: 10px;">
                                    <label for="comment"><span class="uppercase">Enter text:</span></label>
                                    <textarea class="form-control" rows="3" id="textarea"></textarea>
                                    <br>
                                    <button type="button" id="textareabtn" class="btn btn-success btn-block form-control" style="display:block !important;" onclick="addtext();/*OpenClose('carousel_area','work_area','textareabtn');*/">Add Text</button>
                                </div>
                                <div class="panel-group">
                                    <div class="panel panel-info" id="fontbtn" style="display: none; ">
                                        <div class="panel-heading">
                                            <button class="btn btn-block" data-toggle="collapse" href="#fontpanel" onclick="fontMenu();" style="background-color: #ffffff;padding: 6px 0px;">
                                                <span class="uppercase" id="font_title" style="float: left;"> Change fonts</span>
                                                <span id="up" class="glyphicon glyphicon-triangle-top" style="display: block; float: right;margin-left: 10px;"></span>
                                                <span id="down" class="glyphicon glyphicon-triangle-bottom" style="display: none;float: right;margin-left: 10px;"></span>
                                                <span class="uppercase" id="font_preview" style="float: right;">Old standard </span>
                                            </button>
                                        </div>
                                        <div id="fontpanel" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div id="fontmenu" style="display: none;">
                                                    <ul id="fontmenu_bar" class="nav nav-tabs">
                                                                                            
                                                        <li class="active col-xs-12" align="center"><a data-toggle="tab" href="#home" class="uppercase">View all fonts</a></li>
                                                        @foreach ($fontcategories as $fontcategory)   
                                                            <li><a data-toggle="tab" href="#menu{{$fontcategory->name}}"><font>{{$fontcategory->name}}</font></a></li>
                                                        @endforeach
                                                    </ul>
                                                    <div id="fontmenu_body" class="tab-content">
                                                        <div id="home" class="tab-pane fade in active">
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
                                                            <div id="menu{{$fontcategory->name}}" class="tab-pane fade">
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
                                <div id="textmenu" style="display: none;">
                                    <div class="panel panel-info" >
                                        <div class="panel-heading"><span class="uppercase">Text Color: </span><label id="Textcolor" name="Textcolor"></label></div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <span class="animate2"></span> Indicates a color already in your design<br>
                                                    <div class="row">
                                                        <div class="col-xs-12" style="margin-top:10px;">
                                                            @foreach($inkcolors as $inkcolor)
                                                                <div id="textcolor{{$inkcolor->hex}}" class="block" title="{{$inkcolor->name}}" style="border-radius:  50%; margin-right: 1.7px; background-color:{{$inkcolor->hex}}; width: 30px; height: 30px; border:1px solid #eeeeee; cursor:pointer" onclick="/*OpenClose('carousel_area','work_area','Textcolor');*/ document.getElementById('Textcolor').innerHTML = '{{$inkcolor->name}}';changecolorText('{{$inkcolor->hex}}','f');">
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                <br>
                                                <button type="button" class="btn btn-link" onclick="strokecolorlist();" style="cursor: pointer;"><span class="uppercase">Add Outline</span></button>
                                            </div>
                                        </div>
                                        <div id="Outlinediv" class="panel-footer" style="background-color: #fff !important; border-color: #9a9898 !important; color: #615c5c !important; display: none;">

                                            <h5><span class="">Text Stroke Color: </span><label id="Textstrokecolor" name="Textstrokecolor"></label></h5>

                                            <div class="row">                 
                                                    <div class="row">
                                                        <div class="col-xs-12" style="margin-top:10px;">
                                                            @foreach($inkcolors as $inkcolor)
                                                                <div id="strokecolor{{$inkcolor->hex}}" class="block" title="{{$inkcolor->name}}" style="border-radius:  50%; margin-right: 1.7px; background-color:{{$inkcolor->hex}}; width: 30px; height: 30px; border:1px solid #eeeeee; cursor:pointer" onclick="/*OpenClose('carousel_area','work_area','Textstrokecolor');*/ document.getElementById('Textstrokecolor').innerHTML = '{{$inkcolor->name}}';changecolorText('{{$inkcolor->hex}}','c');">
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                <br>
                                                <div class="input-group">
                                                    <div class="row">
                                                        <div class="col-xs-3 col-md-3 col-lg-3 col-xl-3" style="white-space: nowrap;">Stroke Size</div>

                                                        <div class="col-xs-7 col-md-7 col-lg-7 col-xl-7"><input type="range" min="0" max="10" value="0" id="strokewidth" step="1" style="width: 200px;" onchange="setStroke(this);" /></div>
                                                        <div class="col-xs-2 col-md-2 col-lg-2 col-xl-2"><input min="0" max="10" value="0" id="strokewidthvalue" type="text" onkeypress="validate(event);" name="strokewidthvalue" step="1" style="width: 55px !important; float: left;" oninput="setStroke(this);" readonly></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <br>
                                <div class="panel panel-info">
                                    <div class="panel-heading"> <span class="uppercase"> Size</span></div>
                                    <div class="panel-body">
                                    <center><i class="fa fa-lock" id="resizeicontext" style="font-size:25px;color:#31b0d5; cursor: pointer;" onclick="SetScaleProportional('text');"></i></center>
                                        <div class="">
                                            <div class="row">
                                                <div class="col-lg-2 inputslider" align="left"> <span>Width</span> </div>
                                                <div class="col-lg-8  inputslider"> <input id="widthText" type="range" min="1" max="12" name="widthText" oninput="resize(event);" style="width: 100%;" step="0.1"> </div>
                                                <div class="col-lg-2 inputslider" align="right"><input id="widthvalueText" type="text" onkeypress="validate(event);" name="widthvalueText" min="1" max="12" oninput="resize(event);" step="0.1" style="width: 55px !important;" ></div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="">
                                            <div class="row">
                                                <div class="col-lg-2 inputslider" align="left"> <span>Height</span> </div>
                                                <div class="col-lg-8  inputslider"> <input id="heightText" type="range" min="1" max="12" name="heightText" oninput="resize(event);" style="width: 100%;" step="0.1"> </div>
                                                <div class="col-lg-2 inputslider" align="right"><input id="heightvalueText" type="text" onkeypress="validate(event);" name="heightvalueText" min="1" max="12" oninput="resize(event);" step="0.1" style="width: 55px !important;" ></div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                    <br>
                                    <div class="panel panel-info" >
                                        <div class="panel-heading"><span class="uppercase">Rotate</span></div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-2 inputslider" align="left"> <span>Rotation</span> </div>
                                                <div class="col-lg-8  inputslider"> <input id="angleText" type="range" min="-180" max="180" name="angleText" oninput="rotate(event);"  step="5" value="0"> </div>
                                                <div class="col-lg-2 inputslider" align="right"><input id="anglevalueText" type="number" onkeypress="validate(event);" name="anglevalueText" min="-180" max="180" value="0" oninput="rotate(event);" step="5" style="width: 55px !important;" ></div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-left: 1px; padding-right: 1px; margin-left:auto; margin-right:auto;">
                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="background-color: #eeeeee; padding: 1px; border-right: solid 4px white;">
                                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" style="padding: 1px; border-right: solid 1px black;"><span onclick="flipX();" style="cursor: pointer;"><img src="{{asset('img/icon/icon-flip-across.png')}}" width="22px" height="auto"></span></div>
                                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" style="padding: 1px;"><span onclick="flipY();" style="cursor: pointer;"><img src="{{asset('img/icon/icon-flip-up.png')}}" width="auto" height="20px"></span></div>
                                                    </div>
                                                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5" style="background-color: #eeeeee; padding: 1px; border-right: solid 4px white;">
                                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" style="padding: 1px; border-right: solid 1px black;"><span onclick="SetLayer('forward');" style="cursor: pointer;"><img src="{{asset('img/icon/icon-layer-up.png')}}" width="auto" height="20px"></span></div>
                                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" style="padding: 1px;"><span onclick="SetLayer('backward');" style="cursor: pointer;"><img src="{{asset('img/icon/icon-layer-down.png')}}" width="auto" height="20px"></span></div>
                                                    </div>
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="background-color: #eeeeee; padding: 1px;">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center" style="padding: 1px;"><span onclick="SetLayer('center');" style="cursor: pointer;"><img src="{{asset('img/icon/icon-center.png')}}" width="auto" height="20px"></span></div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-left: 1px; padding-right: 1px;">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-4" align="center"><span>Flip</span></div>
                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-5" align="center"><span>Layers order</span></div>
                                                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-3" align="center"><span>Center</span></div>
                                                </div><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-info" >
                                        <div class="panel-heading"><span class="uppercase">Text Effects</span></div>
                                        <div class="panel-body">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="right"><span class="label label-info" id="straight" style="cursor: pointer; font-size: 14px; font-weight: 500; ">Straight</span></div>
                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="center">
                                                        <label class="switch">
                                                            <input type="checkbox" id="effect">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="left"><span class="label label-default" id="curved" style="cursor: pointer; font-size: 14px; font-weight: 500; ">Curve</span></div>
                                                </div>
                                            </div>
                                            <br>
                                            <div id="texteffecsarea" style="display: none;">
                                                <div class="">
                                                    <div class="row">
                                                        <div class="col-lg-2 inputslider" align="left"> <span style="font-size: 14px;">Font Size</span> </div>
                                                        <div class="col-lg-8  inputslider"><input id="sizeText" type="range" min="10" max="50" value="50" name="sizeText" onchange="resize(event);" style="width: 100%;/*width: 220px;*/"></div>
                                                        <div class="col-lg-2 inputslider" align="right"><input class="hidden-md" id="sizeTextvalue" type="text" onkeypress="validate(event);" name="sizeTextvalue" min="10" max="50" value="50" oninput="resize(event);" style="width: 55px !important; /*float: left;*/"></div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="">
                                                    <div class="row">
                                                        <div class="col-lg-2 inputslider" align="left"> <span style="font-size: 14px;">Curve</span> </div>
                                                        <div class="col-lg-8  inputslider"> <input type="range" min="-360" max="360" value="90" id="radius" step="1" style="width: 100%;/*width: 260px;*/" /></div>
                                                        <div class="col-lg-2 inputslider" align="right"><input min="-360" max="360" value="90" id="radiusvalue" type="text" onkeypress="validate(event);" name="radiusvalue" step="1" style="width: 55px !important;"></div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 inputslider" align="left"> <span style="font-size: 14px;">Spacing</span> </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8  inputslider"> <input type="range" min="1" max="40" value="5" id="spacing" step="1"  /></div>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 inputslider" align="right"><input min="1" max="40" value="5" id="spacingvalue" type="text" onkeypress="validate(event);" name="spacingvalue" step="1" style="width: 55px !important;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <!--<div class="row">
                                        <div class="col-xs-12" style="margin-bottom: 30px;">
                                            <div class="text-center">
                                                <button class="btn btn-success" style="width: 95%;" onclick="document.getElementById('textarea').value=''; document.getElementById('textarea2').value=''; document.getElementById('textareabtn').innerHTML = 'Add Text'; document.getElementById('fontbtn').style.display = 'none'; document.getElementById('textmenu').style.display = 'none'; deselectAllCanvases();"><span>Add New Text</span></button>
                                            </div>
                                        </div>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="personalize" class="tab-pane fade panelshadow">
                        <div id="personalize_new">
                            <div class="panel-group">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <label for="comment"><span class="uppercase">Add Names & Numbers:</span></label>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="checkbox">
                                                    <label style="font-size: 1.3rem;"></label>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="checkbox">
                                                    <label><input type="checkbox" value="" id="textpersonalizecheck" name="textpersonalizecheck">Add Name</label>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="checkbox">
                                                    <label><input type="checkbox" value="" id="numberpersonalizecheck" name="numberpersonalizecheck">Add Number</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr style="margin-top: 0px; margin-bottom: 0px;">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="checkbox">
                                                    <label style="font-size: 1.3rem;">Side: </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="checkbox">
                                                    <select class="form-control" id="textpersonalizeside" name="textpersonalizeside" disabled onchange="movedesigntoside(this);">
                                                        <option>Front</option>
                                                        <option selected>Back</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="checkbox">
                                                    <select class="form-control" id="numberpersonalizeside" name="numberpersonalizeside" disabled onchange="movedesigntoside(this);">
                                                        <option>Front</option>
                                                        <option selected>Back</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <hr style="margin-top: 0px; margin-bottom: 0px;">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="checkbox">
                                                    <label style="font-size: 1.3rem;">Height: </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="checkbox">
                                                    <select class="form-control" id="textpersonalizeheight" name="textpersonalizeheight" disabled onchange="changefontsize(this);">
                                                        <option>1 In</option>
                                                        <option selected>2 In</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="checkbox">
                                                    <select class="form-control" id="numberpersonalizeheight" name="numberpersonalizeheight" disabled onchange="changefontsize(this);">
                                                        <option>4 In</option>
                                                        <option>6 In</option>
                                                        <option selected>8 In</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <hr style="margin-top: 0px; margin-bottom: 0px;">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="checkbox">
                                                    <label style="font-size: 1.3rem;">Fill Color: </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="checkbox">
                                                    <label>
                                                        <div id="textpersonalizecolor" name="textpersonalizecolor" class="block" title="Black" style="border-radius:  50%; margin-right: 1.7px; background-color: #000000; width: 30px; height: 30px; border:1px solid #eeeeee; cursor:pointer" disabled onclick="setcolorpersonalize(this);"></div><span id="textpersonalizecolorname" name="textpersonalizecolorname" disabled >Black</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="checkbox">
                                                    <label>
                                                        <div id="numberpersonalizecolor" name="numberpersonalizecolor" class="block" title="Black" style="border-radius:  50%; margin-right: 1.7px; background-color: #000000; width: 30px; height: 30px; border:1px solid #eeeeee; cursor:pointer" disabled onclick="setcolorpersonalize(this);"></div><span id="numberpersonalizecolorname" name="numberpersonalizecolorname" disabled >Black</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr style="margin-top: 0px; margin-bottom: 0px;">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="checkbox">
                                                    <label style="font-size: 1.3rem;">Stroke Color: </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="checkbox">
                                                    <label>
                                                        <div id="textpersonalizestrokecolor" name="textpersonalizestrokecolor" class="block" title="Black" style="border-radius:  50%; margin-right: 1.7px; background-color: #000000; width: 30px; height: 30px; border:1px solid #eeeeee; cursor:pointer" disabled onclick="setcolorpersonalize(this);"></div><span id="textpersonalizestrokecolorname" name="textpersonalizestrokecolorname" disabled >Black</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="checkbox">
                                                    <label>
                                                        <div id="numberpersonalizestrokecolor" name="numberpersonalizestrokecolor" class="block" title="Black" style="border-radius:  50%; margin-right: 1.7px; background-color: #000000; width: 30px; height: 30px; border:1px solid #eeeeee; cursor:pointer" disabled onclick="setcolorpersonalize(this);"></div><span id="numberpersonalizestrokecolorname" name="numberpersonalizestrokecolorname" disabled >Black</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr style="margin-top: 0px; margin-bottom: 0px;">
                                        <br>
                                        <p><button class="btn btn-success" style="width: 95%; margin-bottom: 30px;" onclick="createpersonalizelist();"><span style="text-transform: uppercase; font-size: 1.4rem;">Enter Custom List</span></button>
                                        </p>
                                        <p>Complete list required for accurate pricing</p>
                                        <p style="font-size: 1.3rem;">Name Only = $4.00 each<br>
                                        Numbers Only= $3.00 each<br>
                                        Stroke Color = $2.00 each<br>
                                        Name & Number Combo = $6.00 </p>
                                        <p>Price listed is an add on print for orders of 6 pieces or more.  Price differs when ordering less than 6 items.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="personalize_edit" style="display: none;">
                            <div class="panel panel-info" >
                                <div class="panel-heading"><span class="uppercase" id="personalizecolorselected">Text Color: </span><label id="personalizecolorselectedname">Black</label></div>
                                <div class="panel-body">
                                    <div class="row">
                                        @foreach($inkcolors as $inkcolor)
                                            <div id="artcolorpersonalize{{$inkcolor->hex}}" class="block" title="{{$inkcolor->name}}" style="border-radius:  50%;  margin-right: 1.7px; background-color: {{$inkcolor->hex}}; border:1px solid #eeeeee; cursor:pointer" onclick="document.getElementById('personalizecolorselectedname').innerHTML = '{{$inkcolor->name}}';changepersonalizeColor('{{$inkcolor->hex}}');"></div>
                                        @endforeach    
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success" style="width: 95%;" onclick="document.getElementById('personalize_edit').style.display='none'; document.getElementById('personalize_new').style.display='block';"><span>Select Color</span></button>
                        </div>
                    </div>
                    <div id="priceSection" class="tab-pane fade">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <span class="uppercase">
                                    <h3>List of items in Cart</h3>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="Cart-section">
                                        <thead id="Cart-Head">
                                            <tr class="row">
                                                <th class="col-lg-1 col-md-1 col-sm-1 col-xs-1">Design</th>
                                                <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Brand/Style</th>
                                                <th class="col-lg-1 col-md-1 col-sm-1 col-xs-1">Color</th>
                                                <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Sizes</th>
                                                <th class="col-lg-1 col-md-1 col-sm-1 col-xs-1">Quantity</th>
                                                <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Price Per Shirt</th>
                                                <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Total</th>
                                                <th class="col-lg-1 col-md-1 col-sm-1 col-xs-1"> </th>
                                            </tr>
                                        </thead>
                                        <tbody id="Cart-body-section">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--CART SECTION-->
                        <div style="display: none;">
                            <h2 class="tab_title">Cart</h2>
                            <hr align="center" style="margin-bottom: 10px; background-color: #4598ba; height: 1px; border: 0;">
                            <form id="checkout_form" method="post" action="{{asset('cart')}}">
                                <table class="table" id="cart2" style="width: 100% !important;">
                                </table>
                                <input type="hidden" name="quantity" id="quantity">
                                <input type="hidden" name="price_per_shirt" id="price_per_shirt">
                                <input type="hidden" name="style_number" id="style_number">
                                <input type="hidden" name="id_product" id="id_product">
                                <input type="hidden" name="current_product_name" id="current_product_name">
                                <input type="hidden" name="current_brand_name" id="current_brand_name">
                                <input type="hidden" name="ordernumber" id="ordernumber">
                                <!-- Trigger the modal with a button -->
                                <button id="productPickerBtn" type="button" class="btn btn-info" data-toggle="modal" data-target="#productPicker" style="background-color: #399fd9;">the functionality of <br>this button needs to allow customer<br> adjust the quantity of a product of check out</button> <!-- taken out of the button onclick="setDesign();" -->
                                <!--this button is used to add a new shirt while keeping the same design-->
                                <button id="add_shirt_btn" type="button" class="btn btn-info" data-toggle="modal" data-target="#productPicker" style="background-color: #399fd9;">Add Shirt Color</button>
                                <!--this saves the last customer's design and clears the page from them add a new design-->
                                <button id="new_design_btn" type="button" class="btn btn-info" data-toggle="modal" data-target="#productPicker" style="background-color: #399fd9;">Add New Design</button>
                                <h3 id="cartTotal"></h3>
                                <input id="total" type="hidden" name="total">
                                <button type="button" id="checkoutBtn" class="btn btn-success" style="display: none;" onclick="">Check Out</button>
                            </form>
                        </div>
                    </div>
                    <div id="saveSection" class="tab-pane fade">
                    </div>
                </div>
            </div>
            <div class="ds-design-area col-lg-7" id="ds-design-area">
                
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                    <ol class="carousel-indicators sides" id="carousel-sides">
                    @php
                    $count = 0;
                    @endphp
                        @foreach ($product->sides as $side)
                        @if($side->pivot->enable)
                            @if($loop->first)
                                <li class="active"  data-target="#myCarousel" data-slide-to="{{$count}}" onclick="setcanvas({{$count}});">
                                    <img id="frontActiveImage" class="img-responsive" src="{{asset('img/product')}}{{'/'}}{{$side->pivot->image}}">
                                </li>
                            @else
                                <li data-target="#myCarousel" data-slide-to="{{$count}}"  onclick="setcanvas({{$count}});">
                                    <img id="frontActiveImage" class="img-responsive" src="{{asset('img/product')}}{{'/'}}{{$side->pivot->image}}">
                                </li>
                            @endif
                            @php
                            $count++;
                            @endphp
                            @endif
                        @endforeach
                    </ol>
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
                                    <div class="canvasShirt" id="{{$side->slug}}CanvasShirt" style="border: 0px solid #eeeeee; width: 743px; height: 90vh; min-height:728px; background-image: url('{{asset('img/product')}}{{'/'}}{{$side->pivot->image}}')">
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
                                    <div class="canvasShirt" id="{{$side->slug}}CanvasShirt" style="border: 0px solid #eeeeee; width: 743px; height: 90vh; min-height:728px; background-image: url('{{asset('img/product')}}{{'/'}}{{$side->pivot->image}}')">
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
            <div class="ds-menu-mobile-1" id="ds-menu-mobile-1">
            <ul class="ds-nav nav nav-justified">
                <li class="ds-li" style="border: 2px solid #ffffff; border-radius: 10px;" onclick='$("#productSectionModal").modal("show");'>
                    <a class="ds-a" onclick='$("#productSectionModal").modal("show");'>
                        <img class="ds-img" id="change_item" src="{{asset('img/icon/product.png')}}">
                        <br>
                        <span class="ds-span">Products</span>
                    </a>
                </li>
                <li class="ds-li"  style="border: 2px solid #ffffff; border-radius: 10px;">
                    <a class="ds-a" onclick='$("#AddArtModal").modal("show");'>
                        <img class="ds-img" id="add_art" src="{{asset('img/icon/add-art.png')}}">
                        <br>
                        <span class="ds-span"> Add Art</span>
                    </a>
                </li> 
                <li class="ds-li"  style="border: 2px solid #ffffff; border-radius: 10px;" onclick="document.getElementById('AddTextModalbtn').innerHTML='Add to Design'; document.getElementById('textarea2').value='';">
                    <a class="ds-a" data-toggle="modal" data-target="#AddTextModal">
                        <img class="ds-img" id="add_text" src="{{asset('img/icon/add-text.png')}}">
                        <br>
                        <span class="ds-span">Add Text</span>
                    </a>
                </li>
                <li class="ds-li"  style="border: 2px solid #ffffff; border-radius: 10px;" onclick="deselectAllCanvases();">
                    <a class="ds-a" onclick="starttemplatecategories(); $('#AddTemplateModal').modal('show');">
                        <img class="ds-img" id="add_template" src="{{asset('img/icon/templates.png')}}">
                        <br>
                        <span class="ds-span">Templates</span>
                    </a>
                </li>
                <li class="ds-li"  style="border: 2px solid #ffffff; border-radius: 10px;">
                    <a class="ds-a" onclick='$("#PersonalizeModal").modal("show");$("#PersonalizeNotification").modal("show");'>
                        <img class="ds-img" src="{{asset('img/icon/personalize.png')}}">
                        <br>
                        <span class="ds-span">Personalize</span>
                    </a>
                </li>
                
            </ul>
            </div>
            <div class="ds-menu-mobile-2" id="ds-menu-mobile-2" style="display: none;">
            <ul class="ds-nav nav nav-justified">
                <li class="ds-li"  style="border: 2px solid #ffffff; border-radius: 10px;">
                    <a class="ds-a" onclick='$("#ArtColorModal").modal("show");'>
                        <img class="ds-img" id="color_art" src="{{asset('img/icon/color.png')}}">
                        <br>
                        <span class="ds-span">Color</span>
                    </a>
                </li>
                <li class="ds-li"  style="border: 2px solid #ffffff; border-radius: 10px;">
                    <a class="ds-a" data-toggle="modal" data-target="#LayerModal">
                        <img class="ds-img" id="layers_art" src="{{asset('img/icon/layers.png')}}">
                        <br>
                        <span class="ds-span">Layers</span>
                    </a>
                </li>
                <li class="ds-li"  style="border: 2px solid #ffffff; border-radius: 10px;">
                    <a class="ds-a" data-toggle="modal" data-target="#ResizeModal">
                        <img class="ds-img" id="resize_art" src="{{asset('img/icon/resize.png')}}">
                        <br>
                        <span class="ds-span">Resize</span>
                    </a>
                </li>
                <li class="ds-li"  style="border: 2px solid #ffffff; border-radius: 10px;">
                    <a class="ds-a" data-toggle="modal" data-target="#TextRotateModal">
                        <img class="ds-img" id="rotate_art" src="{{asset('img/icon/rotate.png')}}">
                        <br>
                        <span class="ds-span">Rotate</span>
                    </a>
                </li>
            </ul>
            
            </div>
            <div class="ds-menu-mobile-3" id="ds-menu-mobile-3" style="display: none;">
                <ul class="nav nav-tabs nav-justified" id="footer_menu_text">
                <li class="ds-li" style="border: 2px solid #ffffff; border-radius: 10px;" onclick="document.getElementById('AddTextModalbtn').innerHTML='Update';">
                    <a class="ds-a" data-toggle="modal" data-target="#AddTextModal">
                        <img class="ds-img" id="change_text" src="{{asset('img/icon/add-text.png')}}">
                        <br>
                        <span class="ds-span">Change Text</span>
                    </a>
                </li>
                <li class="ds-li" style="border: 2px solid #ffffff; border-radius: 10px;">
                    <a class="ds-a" onclick='$("#FontModal").modal("show");'>
                        <img class="ds-img" id="font" src="{{asset('img/icon/add-text.png')}}">
                        <br>
                        <span class="ds-span">Font</span>
                    </a>
                </li>
                <li class="ds-li" style="border: 2px solid #ffffff; border-radius: 10px;">
                    <a class="ds-a" data-toggle="modal" data-target="#TextColorModal">
                        <img class="ds-img" id="colo_text" src="{{asset('img/icon/color.png')}}">
                        <br>
                        <span class="ds-span">Color</span>
                    </a>
                </li>
                <li class="ds-li" style="border: 2px solid #ffffff; border-radius: 10px;">
                    <a class="ds-a" data-toggle="modal" data-target="#LayerModal">
                        <img class="ds-img" id="layers_text" src="{{asset('img/icon/layers.png')}}">
                        <br>
                        <span class="ds-span">Layers</span>
                    </a>
                </li>
                <li class="ds-li" style="border: 2px solid #ffffff; border-radius: 10px;">
                    <a class="ds-a" data-toggle="modal" data-target="#TextRotateModal">
                        <img class="ds-img" id="rotate_text" src="{{asset('img/icon/rotate.png')}}">
                        <br>
                        <span class="ds-span">Rotate</span>
                    </a>
                </li>
                <li class="ds-li" style="border: 2px solid #ffffff; border-radius: 10px;">
                    <a class="ds-a" data-toggle="modal" data-target="#TextEffectsModal">
                        <img class="ds-img" id="effect" src="{{asset('img/icon/effects.png')}}">
                        <br>
                        <span class="ds-span">Curve Text</span>
                    </a>
                </li>
            </ul>
            </div>
        </div>
        <div class="ds-footer visible-lg">
        <center>  
            <ul class="list-inline">
                <li> 
                    <p style="font-size: 11px;">© 2019 Vivid Customs
                    |
                    <a href="{{asset('privacy')}}">Privacy</a>
                    |
                    <a href="{{asset('user-agreement')}}">Terms</a>
                    |
                    <a href="{{asset('faq')}}">FAQ</a>
                    </p>
                </li>
            </ul>
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
                                <div class="col-xs-3 col-md-3 col-lg-3 col-xl-3" style="white-space: nowrap;">Stroke Size</div>
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
    
    <script src="{{asset('js/frontend/designstudio/modernizr-2.8.3.min.js')}}"></script>
    <script src="{{asset('js/frontend/designstudio/jquery.nivo.slider.js')}}"></script>
    <script src="{{asset('js/frontend/designstudio/plugins.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/frontend/designstudio/shipping_date.js')}}@php echo '?v='.rand(); @endphp"></script>
    <script src="{{asset('js/frontend/designstudio/gijgo.js')}}"></script>
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

        
        /*$(document).ready(function()
        {
            $('body').on('click', function(e) 
            {   
                if(e.target.id != 'add_art' && e.target.id != 'change_item' && e.target.id != 'add_text' && e.target.id != 'add_template' && 
                   e.target.id != 'personalize' && e.target.id != 'your_design' && e.target.id != 'more-details' )
                {
                    $('.ds-nav .ds-li.active').removeClass('active');
                    $('.tab-pane.active').removeClass('in');
                    $('.tab-pane.active').removeClass('active');
                    $('.nav-tabs a[href="#defaultSection"]').tab('show');
                    $('#defaultSection').addClass('in');
                    $('#defaultSection').addClass('active');
                }
                else
                {
                    //console.log(e.target.id);
                }
            });
        });*/


        /**
         * Reset designstudio for a new design
         *
         * @return void
         */
        function startover() 
        {
            $("#start-over-modal").modal('show');
        }

        $("#modal-star-over-btn-yes").on("click", function() 
        {
            //front.clear();
            $("#start-over-modal").modal('hide');
        });

        $("#modal-star-over-btn-no").on("click", function() 
        {
            $("#start-over-modal").modal('hide');
        });

        $("#more-details").on("click", function() 
        {
            if(this.getAttribute('aria-expanded') == "true")
            {
                this.innerHTML = "More Details";
            }
            else
            {
                this.innerHTML = "Less Details";
            }
        });

        $("#more-details-btn").on("click", function() 
        {
            //console.log($("#more-details"));
            $("#more-details").attr('aria-expanded',"false");
            $("#more-details").removeClass('in');
            $("#more-details").addClass('in');
        });

        /**
         * set the default canvas and print area when the carousel sida is changed
         *
         * @return void
         */
        function setcanvas(direction)
        {
            if(direction == "next")
            {
                var pos = 0;
                var find = false;
                canvaslist.forEach(printarea => {
                    if(printarea == canvasActive)
                    {
                        if((pos+1) < canvaslist.length)
                          {pos=0;}   
                        return 0;
                    }
                    pos++;
                });

                var i;
                for (i = pos; i < canvaslist.length; i++)
                {
                    if(canvasActive.side != canvaslist[i].side)
                    {
                        canvasActive = canvaslist[i];
                        find = true;
                        return 0;
                    }
                }
                if(!find)
                {
                    for (i = 0; i < pos; i++)
                    {
                        if(canvasActive.side != canvaslist[i].side)
                        {
                            canvasActive = canvaslist[i];
                            find = true;
                            return 0;
                        }
                    }   
                }

            }
            else if(direction == "previous")
            {
                var pos = 0;
                var find = false;
                canvaslist.forEach(printarea => {
                    if(printarea == canvasActive)
                    {
                        if(pos-1 == 0)
                          {pos=canvaslist.length-1;}   
                        return 0;
                    }
                    pos++;
                });

                var i;
                for (i = pos; i >= 0 ; i--)
                {
                    if(canvasActive.side != canvaslist[i].side)
                    {
                        canvasActive = canvaslist[i];
                        find = true;
                        return 0;
                    }
                }
                if(!find)
                {
                    for (i = canvaslist.length-1; i >= pos ; i--)
                    {
                        if(canvasActive.side != canvaslist[i].side)
                        {
                            canvasActive = canvaslist[i];
                            find = true;
                            return 0;
                        }
                    }   
                }
            }
            else
            {

            }
            deselectAllCanvases();      
            initCenteringGuidelines(canvasActive);      
        }

        /**
         * Change and load new product color from the child products color list
         *
         * @return void
         */
        function setcanvasproperties(id)
        {
            if(isMobile())
            {
                closemodal("productSectionModal");
            }
            savetmpdesign();

            $.ajax({
                type:'GET',
                dataType: 'json', 
                data: {id: id},
                url: window.location.origin + '/productinfo/'+ id,
                success:function(data)
                {   
                    product = data.product;
                    enableproductsizes();
                    document.getElementById("product_name").innerHTML = data.product.parent.name;
                    document.getElementById("current_product_color").innerHTML = data.product.color.name;
                    var description_label = '<p><strong>Brand:</strong> ' + data.product.brand + ' </p>';
                    description_label += '<p><strong>Size:</strong> ' + data.product.parent.sizes[0].name  + '-' + data.product.parent.sizes[data.product.parent.sizes.length -1].name + '  <a href="javascript:void(0)" data-toggle="modal" data-target="#sizechartmodal"> size chart</a></p>';
                    description_label += '<p><strong>Fabric:</strong> ' + data.product.fabric + '</p>';
                    description_label += '<p><a href="#productlongdescription" data-toggle="collapse" id="more-details" class="collapsestart"> More Details </a></p>';
                    document.getElementById("description_label").innerHTML = description_label;
                    var sidesinfo = ""; 
                    var innersinfo = ""; 
                    var countsides = 0;
                    var countinners = 0;  
                    canvaslist = [];
                    if(data.product.sides.length > 0)
                    {   
                        document.getElementById("carousel-sides").innerHTML = "";
                        document.getElementById("carousel-inner").innerHTML = "";
                        data.product.sides.forEach(side => {
                            if(side.pivot.enable == 1)
                            {  
                                if(countsides == 0)
                                {
                                    sidesinfo += ' <li class="active"  data-target="#myCarousel" data-slide-to="'+ countsides +'"><img id="frontActiveImage" class="img-responsive" src="' + window.location.origin + '/img/product/' + side.pivot.image +  '" onclick="setcanvas(' + (countsides+1) + ');"></li>';
                                    innersinfo += '<div id="'+side.slug+'" class="item active">';
                                        innersinfo += '<div id="'+side.slug+'CanvasShirt" class="canvasShirt" style="border: 0px solid rgb(238, 238, 238); width: 743px; height: 90vh; min-height: 728px; background-image: url(' + window.location.origin + '/img/product/' + side.pivot.image +  ');">';
                                            data.product.printareas.forEach(printarea => { 
                                            if(printarea.side == side.slug)
                                            {  
                                                innersinfo += '<div id="'+printarea.slug+'canvas-wrapper" style="width: '+printarea.width+'px; height: '+printarea.height+'px; border: 0px solid rgb(50, 167, 224); position: absolute; top: '+printarea.top+'px; left: '+printarea.left+'px;">';
                                                    //innersinfo += '<div class="canvas-container" style="width: '+printarea.width+'px; height: '+printarea.height+'px;  position: relative; user-select: none;">';
                                                        innersinfo += '<canvas id="'+printarea.slug+'Canvas" style="border: 0px solid rgb(0, 0, 0); touch-action: none; width: '+printarea.width+'px; height: '+printarea.height+'px;top: 0px; left:0px;"></canvas> ';
                                                        innersinfo += '<div id="'+printarea.slug+'desingerror" class="tooltip-outline error-tooltip" style="left: 82px; display: none;">';
                                                            innersinfo += '<div class="clearfix">';
                                                                innersinfo += '<small style="color: red;">Your Art/Work exceeds the print area</small>';
                                                            innersinfo += '</div>';
                                                        innersinfo += '</div>';
                                                    //innersinfo += '</div>';
                                                innersinfo += '</div>';
                                            }
                                        });
                                        innersinfo += '</div> ';
                                        innersinfo += '<div class="carousel-caption">';
                                            innersinfo += '<p>'+side.name+'</p>';
                                        innersinfo += '</div>';
                                    innersinfo += '</div>';
                                }
                                else
                                {   
                                    sidesinfo += ' <li   data-target="#myCarousel" data-slide-to="'+ countsides +'"><img id="frontActiveImage" class="img-responsive" src="' + window.location.origin + '/img/product/' + side.pivot.image +  '" onclick="setcanvas(' + (countsides+1) + ');"></li>';
                                    innersinfo += '<div id="'+side.slug+'" class="item">';
                                        innersinfo += '<div id="'+side.slug+'CanvasShirt" class="canvasShirt" style="border: 0px solid rgb(238, 238, 238); width: 743px; height: 90vh; min-height: 728px; background-image: url(' + window.location.origin + '/img/product/' + side.pivot.image +  ');">';
                                            data.product.printareas.forEach(printarea => {
                                                if(printarea.side == side.slug)
                                                {  
                                                    innersinfo += '<div id="'+printarea.slug+'canvas-wrapper" style="width: '+printarea.width+'px; height: '+printarea.height+'px; border: 0px solid rgb(50, 167, 224); position: absolute; top: '+printarea.top+'px; left: '+printarea.left+'px;">';
                                                        innersinfo += '<canvas id="'+printarea.slug+'Canvas" style="border: 0px solid rgb(0, 0, 0); touch-action: none; width: '+printarea.width+'px; height: '+printarea.height+'px;top: 0px; left:0px;"></canvas> ';
                                                        innersinfo += '<div id="'+printarea.slug+'desingerror" class="tooltip-outline error-tooltip" style="left: 82px; display: none;">';
                                                            innersinfo += '<div class="clearfix">';
                                                                innersinfo += '<small style="color: red;">Your Art/Work exceeds the print area</small>';
                                                            innersinfo += '</div>';
                                                        innersinfo += '</div>';
                                                    innersinfo += '</div>';
                                                }
                                            });
                                        innersinfo += '</div> ';
                                        innersinfo += '<div class="carousel-caption">';
                                            innersinfo += '<p>'+side.name+'</p>';
                                        innersinfo += '</div>';
                                    innersinfo += '</div>';
                                    
                                }
                                countsides ++;
                            }
                        });
                        document.getElementById("carousel-sides").innerHTML = sidesinfo;                       
                        document.getElementById("carousel-inner").innerHTML = innersinfo;
                    }
                },
                complete: function(){
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
                            initCenteringGuidelines(canvasActive);     
                            canvasside.undo = [];
                            canvasside.redo = [];
                            canvasside.state = null; 
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
                    });

                    canvasActive = canvaslist[0];
                    if(canvasdesignlist.length > 0)
                    {
                        loadtmpdesigns();
                    }
                    
                }
            });

            
        }


        /**
         * 
         * Transform straigt text into curved text and reverse
         * 
         * @return void
        */

        $('#effect,#straight, #curved,#effectModal,#straightModal, #curvedModal').on('click', function(e) 
        {
            if (this.id == "curved")
            {
                effect.checked = true;
            }
            else if (this.id == "straight")
            {
                effect.checked = false;
            }
            else if (this.id == "curvedModal")
            {
                effectModal.checked = true;
            } 
            else if (this.id == "straightModal")
            {
                effectModal.checked = false;
            } 
            else if (this.id == "effect")
            {
                effect.checked = document.getElementById("effect").checked;
            }
            else if (this.id == "effectModal")
            {
                effectModal.checked = document.getElementById("effectModal").checked;
            }

            var obj = canvasActive.getActiveObject();
            if (obj)
            {
                default_text = obj.getText();
                props = obj.toObject();
                if (isMobile())
                {
                    var texteffecsarea = document.getElementById("texteffecsareaModal");
                    if (effectModal.checked)
                    {
                        $('#straightModal').removeClass("label-info");
                        $('#straightModal').addClass("label-default");
                        $('#curvedModal').removeClass("label-default");
                        $('#curvedModal').addClass("label-info");
                        texteffecsarea.style.display = "block";
                        delete props['type'];
                        props['textAlign'] = 'center';
                        props['reverse'] = false;
                        $('#spacing').val(5);
                        $('#spacingvalue').val(5);
                        $('#radius').val(90);
                        $('#radiusvalue').val(90);
                        props['type'] = 'curvedText';
                        props['id'] = obj.id;
                        var textSample = new fabric.CurvedText(default_text, props);
                        textSample.setControlsVisibility({
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

                        textSample.customiseCornerIcons({
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
                        });
                    } 
                    else //else if(!effect.checked || this.id == "straight")
                    {
                        $('#straightModal').removeClass("label-default");
                        $('#straightModal').addClass("label-info");
                        $('#curvedModal').removeClass("label-info");
                        $('#curvedModal').addClass("label-default");
                        texteffecsarea.style.display = "none";
                        delete props['type'];
                        props['type'] = 'text';
                        props['id'] = obj.id;
                        $('#spacing').val(10);
                        $('#spacingvalue').val(10);
                        $('#radius').val(0);
                        $('#radiusvalue').val(0);
                        var textSample = new fabric.Text(default_text, props);
                        textSample.setControlsVisibility({
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

                        textSample.customiseCornerIcons({
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
                        });
                    }
                } 
                else
                {
                    var texteffecsarea = document.getElementById("texteffecsarea");
                    if (effect.checked)
                    {
                        $('#straight').removeClass("label-info");
                        $('#straight').addClass("label-default");
                        $('#curved').removeClass("label-default");
                        $('#curved').addClass("label-info");
                        texteffecsarea.style.display = "block";
                        delete props['type'];
                        props['textAlign'] = 'center';
                        props['reverse'] = false;
                        $('#spacing').val(5);
                        $('#spacingvalue').val(5);
                        $('#radius').val(90);
                        $('#radiusvalue').val(90);
                        props['type'] = 'curvedText';
                        props['id'] = obj.id;
                        var textSample = new fabric.CurvedText(default_text, props);
                        textSample.setControlsVisibility({
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

                        textSample.customiseCornerIcons({
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
                        });
                    } 
                    else //else if(!effect.checked || this.id == "straight")
                    {
                        $('#straight').removeClass("label-default");
                        $('#straight').addClass("label-info");
                        $('#curved').removeClass("label-info");
                        $('#curved').addClass("label-default");
                        texteffecsarea.style.display = "none";
                        delete props['type'];
                        props['type'] = 'text';
                        props['id'] = obj.id;
                        $('#spacing').val(10);
                        $('#spacingvalue').val(10);
                        $('#radius').val(0);
                        $('#radiusvalue').val(0);

                        var textSample = new fabric.Text(default_text, props);
                        textSample.setControlsVisibility({
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

                        textSample.customiseCornerIcons({
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
                        });
                    }
                }
                save();
                canvasActive.remove(obj);
                canvasActive.add(textSample);
                canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                canvasActive.renderAll();
            }
        });


        /**
         * Unselect all objects inside all print areas
         * 
         * @return void
         */

        function deselectAllCanvases() 
        {   
            canvaslist.forEach(printarea => {
                if(printarea.getObjects().length > 0)
                {  
                    printarea.discardActiveObject();
                    //savetmpdesign();
                    printarea.renderAll();
                }
            });
            
        }

        /**
         * 
         * Change clipart color
         * 
         * @return void
        */

        function changecolor(newColor)
        {
            colorChanged = true;
            colorArt = newColor;
            $(".list-group-item").removeClass("active");
            $(this).addClass("active");
            var object = canvasActive.getActiveObject();
            if (object.type == "image")
            {
                if (newColor == 'No Color')
                {
                    object.filters = [];
                }
                /*else if (newColor == 'transparent')
                {
                    var filter = new fabric.Image.filters.RemoveWhite({
                        threshold: 60,
                        distance: 150,
                    });
                    object.filters.push(filter);
                }*/
                /* else  if (newColor == 'Add White')
                {
                    for (var i = 0; i < object.filters.length; i++) 
                    {
                        if(object.filters[i].distance != null)
                        {
                            object.filters.splice(i,1);
                        }
                    }
                    object.filters = [];
                } */
                else
                {
                    var filter = new fabric.Image.filters.Tint({
                        color: newColor,
                        opacity: 1.0
                    });
                    object.filters.push(filter);
                    object.colorlist[0].hex = newColor;
                    object.set({
                        colorName: Artcolor.innerHTML,
                        colorCode: newColor
                    });
                }
                document.getElementById("color_" + object.id).style.backgroundColor = newColor;
                document.getElementById("color2_" + object.id).style.backgroundColor = newColor;
                if (newColor == "transparent") 
                {
                    $("#color" + object.id).addClass("transparent2");
                }
                else 
                {
                    $("#color" + object.id).removeClass("transparent2");
                }
                
                object.applyFilters(canvasActive.renderAll.bind(canvasActive));
            }
            else
            {
                var objectslist = object._objects;
                if (objectslist.length == 1) 
                {
                    if (objectslist[0].id.indexOf("fill_")!= -1)
                    {
                        objectslist[0].setFill(newColor);    
                    }
                    else if(objectslist[0].id.indexOf("stroke_")!= -1)
                    {
                        objectslist[0].setStroke(newColor);
                    }
                    else
                    {
                        objectslist[0].setFill(newColor);  
                        objectslist[0].setStroke(newColor);
                    }
                    canvasActive.renderAll();
                    document.getElementById("color_" + objectslist[0].id.split(".")[0]).style.backgroundColor = newColor;
                    document.getElementById("color2_" + objectslist[0].id.split(".")[0]).style.backgroundColor = newColor;
                    if (newColor == "transparent") 
                    {
                        $("#color_" + objectslist[0].id.split(".")[0]).addClass("transparent2");
                    }
                    else 
                    {
                        $("#color_" + objectslist[0].id.split(".")[0]).removeClass("transparent2");
                    }
                } 
                else 
                {
                    if(idcolorselected != undefined)
                    {
                        //console.log(object);
                        for (var i = 0; i < objectslist.length; i++)
                        {
                            if (("color_" + objectslist[i].id.split(".")[0]) == idcolorselected)
                            {
                                objectslist[i].setFill(newColor);
                                objectslist[i].setStroke(newColor);
                                canvasActive.renderAll();
                                document.getElementById("color_" + objectslist[i].id.split(".")[0]).style.backgroundColor = newColor;
                                document.getElementById("color2_" + objectslist[i].id.split(".")[0]).style.backgroundColor = newColor;
                                if (newColor == "transparent") 
                                {
                                    $("#color_" + objectslist[i].id.split(".")[0]).addClass("transparent2");
                                }
                                else 
                                {
                                    $("#color_" + objectslist[i].id.split(".")[0]).removeClass("transparent2");
                                }
                            }
                        }
                    }
                    else
                    {
                        if (objectslist.length == 1)
                        {
                            objectslist[0].setFill(newColor);
                            objectslist[0].setStroke(newColor);
                            canvasActive.renderAll();
                            document.getElementById("color_" + objectslist[0].id.split(".")[0]).style.backgroundColor = newColor;
                            document.getElementById("color2_" + objectslist[0].id.split(".")[0]).style.backgroundColor = newColor;
                            if (newColor == "transparent") 
                            {
                                $("#color_" + objectslist[0].id.split(".")[0]).addClass("transparent2");
                            }
                            else 
                            {
                                $("#color_" + objectslist[0].id.split(".")[0]).removeClass("transparent2");
                            }
                        }
                        else
                        {
                            showalert('selectcoloralert', 'Please select a color to edit!', 'danger', 'Select Color');
                        }
                        
                    }
                    
                }
                save();
                //unselectall('changecolor');
                //savetmpdesign();
                //return;
            }
            //setColorsInk();
            //selectcolors();
            var currentcolor = newColor;
            if (currentcolor == "rgb(0,0,0)")
            {
                currentcolor = "#000000";
            }
            if (isMobile())
            {
                if (document.getElementById("artcolorModal" + currentcolor.replace("#", "").toLowerCase()) != null)
                    document.getElementById("artcolorModal" + currentcolor.replace("#", "").toLowerCase()).style.border = "2px solid #31B0D5";
            } 
            else
            {
                if (document.getElementById("artcolor" + currentcolor.replace("#", "").toLowerCase()) != null)
                    document.getElementById("artcolor" + currentcolor.replace("#", "").toLowerCase()).style.border = "2px solid #31B0D5";
            }
        }


        /**
         * Show normal alerts
         * 
         * @return void
        */

        function showalertnormal(id) 
        {
            $('#'+id).fadeIn(1000);
            setTimeout(function() 
            { 
                $('#'+id).fadeOut(1000); 
            }, 2000);
        }

        /**
         * Show closable alerts
         * 
         * @return void
        */
        function showalertclosable(id) 
        {
            $('#'+id).fadeIn(1000);   
        }

        /**
         * Show personalize alerts
         * 
         * @return void
        */
        function showalert(id, message, type, title)
        {
            var modalfade = document.createElement('div');
            modalfade.id = id;
            modalfade.className = 'modal fade';
            modalfade.setAttribute("role", "dialog");
            var modaldialog = document.createElement('div');
            modaldialog.className = 'modal-dialog';
            modaldialog.style.position = 'fixed';
            modaldialog.style.top = "40%";
            modaldialog.style.left = "0";
            modaldialog.style.right = "0";
            modaldialog.style.bottom = "0";
            modalfade.appendChild(modaldialog);
            var modalheader = document.createElement('div');
            modalheader.className = 'modal-header modal-header-' + type;
            modaldialog.appendChild(modalheader);
            var buttonclose = document.createElement("button");
            buttonclose.className = 'close';
            buttonclose.setAttribute("data-dismiss", "modal");
            buttonclose.setAttribute("aria-hidden", "true");
            buttonclose.setAttribute("value", "Close");
            buttonclose.innerHTML = '&times';
            modalheader.appendChild(buttonclose);
            var modaltitle = document.createElement('h4');
            modaltitle.className = 'modal-title';
            modalheader.appendChild(modaltitle);
            var strong = document.createElement('strong');
            strong.innerHTML = title;
            modaltitle.appendChild(strong);
            var alert = document.createElement('div');
            alert.className = 'alert alert-' + type;
            alert.innerHTML = message;
            modaldialog.appendChild(alert);
            document.getElementsByTagName('body')[0].appendChild(modalfade);
            $('#' + id).modal();
        }



        /**
         * Change and load new product from the product list modal 
         *
         * @return void
         */
        function changeproduct(id)
        {
            savetmpdesign();
            
            $.ajax({
                type:'GET',
                dataType: 'json', 
                data: {id: id},
                url: window.location.origin + '/productinfo/'+ id,
                beforeSend: function()
                {
                    // Handle the beforeSend event
                },
                success:function(data)
                {   
                    product = data.product;
                    enableproductsizes();
                    if(product.printareas.length != canvaslist.length)
                    {
                        $("#changeproductconfirmation-modal").modal('show');
                    }
                    else
                    {
                        loadchangeproduct();
                        if(canvasdesignlist.length > 0)
                        {
                            loadtmpdesigns();
                        }
                    }
                },
                complete: function()
                {
                      // Handle the complete event
                }
            });
        }

        function loadchangeproduct()
        {
            document.getElementById("product_name").innerHTML = product.parent.name;            
            document.getElementById("current_product_color").innerHTML = product.color.name;
            document.getElementById("sizechartimage").innerHTML= '<img src="'+window.location.origin+'/img/product/'+product.parent.sizechartimage+'" class="img-responsive">';
            document.getElementById("sizechartdescription").innerHTML= product.parent.sizechartdescription;
            document.getElementById("sizechartable").innerHTML = "";
            product.parent.sizeschart.forEach(sizeschart => 
            {
                document.getElementById("sizechartable").innerHTML += "<tr><td>"+sizeschart.size+"</td> <td>"+sizeschart.width+"</td> <td>"+sizeschart.length+"</td></tr>";
            });
            var description_label = '<p><strong>Brand:</strong> ' + product.brand + ' </p>';
            description_label += '<p><strong>Size:</strong> ' + product.parent.sizes[0].name  + '-' + product.parent.sizes[product.parent.sizes.length -1].name + '  <a href="javascript:void(0)" data-toggle="modal" data-target="#sizechartmodal"> size chart</a></p>';
            description_label += '<p><strong>Fabric:</strong> ' + product.fabric + '</p>';
            description_label += '<p><a href="#productlongdescription" data-toggle="collapse" id="more-details" class="collapsestart"> More Details </a></p>';
            document.getElementById("description_label").innerHTML = description_label;
            var sidesinfo = ""; 
            var innersinfo = ""; 
            var countsides = 0;
            var countinners = 0;
            canvaslist = [];
            if(product.sides.length > 0)
            {   
                document.getElementById("carousel-sides").innerHTML = "";
                document.getElementById("carousel-inner").innerHTML = "";
                product.sides.forEach(side => {
                    if(side.pivot.enable == 1)
                    {  
                        if(countsides == 0)
                        {
                            sidesinfo += ' <li class="active"  data-target="#myCarousel" data-slide-to="'+ countsides +'"><img id="frontActiveImage" class="img-responsive" src="' + window.location.origin + '/img/product/' + side.pivot.image +  '" onclick="setcanvas(' + (countsides+1) + ');"></li>';
                            innersinfo += '<div id="'+side.slug+'" class="item active">';
                                innersinfo += '<div id="'+side.slug+'CanvasShirt" class="canvasShirt" style="border: 0px solid rgb(238, 238, 238); width: 743px; height: 90vh; min-height: 728px; background-image: url(' + window.location.origin + '/img/product/' + side.pivot.image +  ');">';
                                product.printareas.forEach(printarea => {
                                    if(printarea.side == side.slug)
                                    {  
                                        innersinfo += '<div id="'+printarea.slug+'canvas-wrapper" style="width: '+printarea.width+'px; height: '+printarea.height+'px; border: 0px solid rgb(50, 167, 224); position: absolute; top: '+printarea.top+'px; left: '+printarea.left+'px;">';
                                            innersinfo += '<canvas id="'+printarea.slug+'Canvas" style="border: 0px solid rgb(0, 0, 0); touch-action: none; width: '+printarea.width+'px; height: '+printarea.height+'px;top: 0px; left:0px;"></canvas> ';
                                            innersinfo += '<div id="'+printarea.slug+'desingerror" class="tooltip-outline error-tooltip" style="left: 82px; display: none;">';
                                                innersinfo += '<div class="clearfix">';
                                                    innersinfo += '<small style="color: red;">Your Art/Work exceeds the print area</small>';
                                                innersinfo += '</div>';
                                            innersinfo += '</div>';
                                        innersinfo += '</div>';
                                    }
                                });
                                innersinfo += '</div> ';
                                innersinfo += '<div class="carousel-caption">';
                                    innersinfo += '<p>'+side.name+'</p>';
                                innersinfo += '</div>';
                            innersinfo += '</div>';
                        }
                        else
                        {    
                            sidesinfo += ' <li   data-target="#myCarousel" data-slide-to="'+ countsides +'"><img id="frontActiveImage" class="img-responsive" src="' + window.location.origin + '/img/product/' + side.pivot.image +  '" onclick="setcanvas(' + (countsides+1) + ');"></li>';
                            innersinfo += '<div id="'+side.slug+'" class="item">';
                                innersinfo += '<div id="'+side.slug+'CanvasShirt" class="canvasShirt" style="border: 0px solid rgb(238, 238, 238); width: 743px; height: 90vh; min-height: 728px; background-image: url(' + window.location.origin + '/img/product/' + side.pivot.image +  ');">';
                                    product.printareas.forEach(printarea => {
                                        if(printarea.side == side.slug)
                                        {  
                                            innersinfo += '<div id="'+printarea.slug+'canvas-wrapper" style="width: '+printarea.width+'px; height: '+printarea.height+'px; border: 0px solid rgb(50, 167, 224); position: absolute; top: '+printarea.top+'px; left: '+printarea.left+'px;">';
                                                innersinfo += '<canvas id="'+printarea.slug+'Canvas" style="border: 0px solid rgb(0, 0, 0); touch-action: none; width: '+printarea.width+'px; height: '+printarea.height+'px;top: 0px; left:0px;"></canvas> ';
                                                innersinfo += '<div id="'+printarea.slug+'desingerror" class="tooltip-outline error-tooltip" style="left: 82px; display: none;">';
                                                    innersinfo += '<div class="clearfix">';
                                                        innersinfo += '<small style="color: red;">Your Art/Work exceeds the print area</small>';
                                                    innersinfo += '</div>';
                                                innersinfo += '</div>';
                                            innersinfo += '</div>';
                                        }
                                    });
                                innersinfo += '</div> ';
                                innersinfo += '<div class="carousel-caption">';
                                    innersinfo += '<p>'+side.name+'</p>';
                                innersinfo += '</div>';
                            innersinfo += '</div>';
                            
                        }
                        countsides ++;
                    }
                });
                document.getElementById("carousel-sides").innerHTML = sidesinfo;                       
                document.getElementById("carousel-inner").innerHTML = innersinfo;
            }                   
            var colorminimum = "";
            var colorminimum6 = "";
            
            if(product.parent.colors.length > 0)
            {   
                document.getElementById("child_product_color_div").innerHTML = "";
                document.getElementById("child_product_color_div6").innerHTML = "";
                document.getElementById("child_product_color_divModal").innerHTML = "";
                document.getElementById("child_product_color_div6Modal").innerHTML = "";
                product.parent.colors.forEach(color => {
                    var animate = '';
                    if(color.pivot.childproduct_id == product.id)
                    animate = "animate";
                    if(color.hex != null)
                        colorminimum += '<div id="child_color_minimum_' + color.id + '" title="White" onclick="setcanvasproperties(' + color.pivot.childproduct_id + '); setactivecolor(this);" class="block ' + animate + '" style="border-radius: 50%; background-color: ' + color.hex + '; width: 30px; height: 30px; border: 0px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px;"></div>';
                    else
                        colorminimum += '<img onclick="setcanvasproperties(' + color.pivot.childproduct_id + '); setactivecolor(this);" src="' + window.location.origin + '/img/color/' + color.file + '" id="child_color_minimum_' + color.id + '" class="block ' + animate + '" style="width: 30px; position: relative; height: 30px; border: 0px solid rgb(238, 238, 238); border-radius: 50%; cursor: pointer;">';
                    //colorminimum6 +="";
                });

                document.getElementById("child_product_color_div").innerHTML = colorminimum;
                document.getElementById("child_product_color_div6").innerHTML = colorminimum6;
                document.getElementById("child_product_color_divModal").innerHTML = colorminimum;
                document.getElementById("child_product_color_div6Modal").innerHTML = colorminimum6;
            }


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
                    initCenteringGuidelines(canvasActive);     
                    canvasside.undo = [];
                    canvasside.redo = [];
                    canvasside.state = null; 
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
            });

            canvasActive = canvaslist[0];
            $('.nav-tabs a[href="#productSection"]').tab('show');
                        
        }

        $("#modal-btn-yes").on("click", function() {

            loadchangeproduct();
            canvasdesignlist = [];
            canvaslist.forEach(canvas => {
                canvas.clear();
            });

            
            $("#changeproductconfirmation-modal").modal('hide');
        });



        $("#modal-btn-no").on("click", function() {

            $("#changeproductconfirmation-modal").modal('hide');

        });


        /**
        * Put the border circle blue an the check icon in the selected color
        *
        * @return void
        */
        function setactivecolor(element)
        {
            var circlescolors = document.getElementsByClassName("block");
            var i;
            for (i = 0; i < circlescolors.length; i++) 
            {
                if(circlescolors[i] == element)
                    element.className = "block animate";
                else
                    circlescolors[i].className = "block";
            }
        }

        /**
        *Add Image to a print area
        *
        * @return void
        */
        function addimg(clipart_id)
        { 
            $.ajax({
                type:'GET',
                dataType: 'json', 
                data: {clipart_id: clipart_id},
                url: window.location.origin + '/api/clipartbyid/'+ clipart_id,
                success:function(data)
                {  
                     var editable = '';  
                    if(clipart.editable)
                    {
                        editable = '-editable';
                    }

                    var clipart = data.clipart;
                    if(clipart.type == 'png')
                    {
                        
                        var imgSrc = window.location.origin + '/img/clipart/'+ clipart.category + '/' + clipart.subcategory + '/' + clipart.filename;
                        var leftvalue = 0;
                        var topvalue = 0;
                        fabric.Image.fromURL(imgSrc, function(img) 
                        {
                        leftvalue = canvasActive.width / 2;
                        topvalue = canvasActive.height / 2;

                            img.set({
                                id: 'clipart-' + objId +  editable,
                                left: leftvalue,
                                top: topvalue,
                                scaleX: 1,
                                scaleY: 1,
                                originX: 'center',
                                originY: 'center',
                                hasRotatingPoint: true,
                                snapAngle: 45,
                                snapThreshold: 45,
                                centeredRotation: true,
                                lockUniScaling: true,
                                padding: 0,
                                colorName: 'Black',
                                clipart: clipart,
                                editable: clipart.editable,
                                numbercolors: clipart.numbercolors,
                                colorlist: clipart.colors
                            }).scaleToWidth(100);

                            var BoundingRect = { left: 0,top: 0,width: 0,height: 0 };
                            
                            img.setOptions({
                                BoundingRect: BoundingRect
                            });
                            img.setControlsVisibility({
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

                            //var filter = new fabric.Image.filters.RemoveWhite({threshold: 60,distance: 150});
                            
                            //img.filters.push(filter);

                            img.customiseCornerIcons({
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
                            }, 
                            function() {
                                canvasActive.renderAll();
                            });

                            canvasActive.add(img);
                            canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));

                            
                        });
                    }
                    else
                    {
                        var lines = data.info.split('\n');
                        if(lines.length > 1)
                        {
                            var leftvalue = 0;
                            var topvalue = 0;

                            leftvalue = canvasActive.width / 2;
                            topvalue = canvasActive.height / 2;

                            lines.splice(0, 1);
                            lines.splice(lines.length - 1, 1);
                            info = lines.join('\n');
                            fabric.loadSVGFromString(info, function(objects, options)
                                {
                                    var obj = fabric.util.groupSVGElements(objects, options).paths;
                                    var elements = [];
                                    obj.forEach(function(svg) 
                                    {
                                        svg.set({
                                            id: svg.id + "." + objId,
                                        });
                                        elements.push(svg);
                                        objId++;
                                    });

                                    var img = new fabric.Group(elements, {

                                           id: 'clipart-' + objId +  editable,

                                        left: leftvalue,

                                        top: topvalue,

                                        scaleX: 1,

                                        scaleY: 1,

                                        originX: 'center',

                                        originY: 'center',

                                        hasRotatingPoint: true,

                                        snapAngle: 45,

                                        snapThreshold: 45,

                                        centeredRotation: true,

                                        lockUniScaling: true,

                                        padding: 0,

                                        colorName: 'Black',

                                        clipart: clipart,
                                        editable: clipart.editable

                                    }).scaleToWidth(100);

                                    img.setControlsVisibility({

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

                                        img.customiseCornerIcons({

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
                                    
                                    canvasActive.add(img);

                                    canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                                });
                        }
                        
                        
                    }

                    clipArtAdded = true;
                    save();
                    //canvasActive.setActiveObject(0);
                    //deselectAllCanvases('addImg');
                    if (isMobile())
                    {
                        $("#AddArtModal").modal("hide");
                    }
                    // savetmpdesign();
                }
            });
            /*document.getElementById("editArt").style.display= "block";
            document.getElementById("newArt").style.display= "none";*/
        }

        
        /**
         * 
         * Change color of the text
         * 
         * @return void
        */

        function changecolorText(newColor, type)
        {
            colorChanged = true;
            $(".list-group-item").removeClass("active");
            $(this).addClass("active");
            var object = canvasActive.getActiveObject();
            if (type == "c")
            {
                var strokevalue = null;
                strokeColor = newColor;
                object.setStroke(strokeColor);
                if (object.strokeWidth == 0) 
                {
                    strokevalue = 2;
                } 
                else
                {
                    strokevalue = object.strokeWidth;
                }
                document.getElementById("strokewidthvalue").value = strokevalue;
                document.getElementById("strokewidth").value = strokevalue;
                //document.getElementById("strokewidthvalueModal").value = strokevalue;
                //document.getElementById("strokewidthModal").value = strokevalue;
                //object.setstrokewidth(2);
                object.set({
                    strokecolorName: Textstrokecolor.innerHTML,
                    laststrokecolor: newColor,
                    strokeWidth: strokevalue,
                });
            } 
            else
            {
                colorText = newColor;
                object.setFill(colorText);
                if (object.stroke == null || object.fill == object.stroke)
                {
                    //object.setStroke(newColor);
                    //object.setStrokeWidth(0); 
                }
                object.set({
                    colorName: Textcolor.innerHTML,
                    //strokecolorName: Textstrokecolor.innerHTML, 
                    laststrokecolor: newColor,
                    //strokeWidth: 0
                });
            }
            canvasActive.renderAll(canvasActive);
            //unselectall('changecolorText');
            //OpenClose('carousel_area','work_area','changecolorText');
            //savetmpdesign();
            save();
            //setColorsInk();
            //selectcolorsT();
            var currentcolor = newColor;
            if (currentcolor == "rgb(0,0,0)")
            {
                currentcolor = "#000000";
            }
            if (isMobile())
            {
                if (type !== "c")
                {
                    if (document.getElementById("textcolorModal" + currentcolor.replace("#", "").toLowerCase()) != null)
                        document.getElementById("textcolorModal" + currentcolor.replace("#", "").toLowerCase()).style.border = "2px solid #31B0D5";
                } 
                else
                {
                    if (document.getElementById("strokecolorModal" + currentcolor.replace("#", "").toLowerCase()) != null)
                        document.getElementById("strokecolorModal" + currentcolor.replace("#", "").toLowerCase()).style.border = "2px solid #31B0D5";
                }
            } 
            else
            {
                if (type !== "c")
                {
                    if (document.getElementById("textcolor" + currentcolor.replace("#", "").toLowerCase()) != null)
                        document.getElementById("textcolor" + currentcolor.replace("#", "").toLowerCase()).style.border = "2px solid #31B0D5";
                } 
                else
                {
                    if (document.getElementById("strokecolor" + currentcolor.replace("#", "").toLowerCase()) != null)
                        document.getElementById("strokecolor" + currentcolor.replace("#", "").toLowerCase()).style.border = "2px solid #31B0D5";
                }
            }
        }

        /**
         * 
         * Show and hide the available stroke colors
        */

        function strokecolorlist()
        {
            var Outlinediv = document.getElementById('Outlinediv');
            if (Outlinediv.style.display == 'none')
            {
                Outlinediv.style.display = "block";
            } 
            else
            {
                Outlinediv.style.display = "none";
            }
        }


        /**
         * 
         * Validate only number in the inputs sizes
         * 
         * return boolean
        */

        function validate(evt) 
        {
            var theEvent = evt || window.event;
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode(key);
            var regex = /[0-9]|\./;
            if (!regex.test(key)) 
            {
                theEvent.returnValue = false;
                if (theEvent.preventDefault) theEvent.preventDefault();
            }
        }



        /**
         * 
         * Set font to specific text
         * 
         * @return void
        */

        function setFont(element)
        {
            colorChanged = true;
            $(".list-group-item").removeClass("active");
            $(this).addClass("active");
            var object = canvasActive.getActiveObject();
            font = element.id;
            object.set({
                fontFamily: font
            });
            canvasActive.renderAll(canvasActive);
            setTitleFont(element);
            //unselectall('setFont');
            if (isMobile())
            {
                $("#FontModal").modal("hide");
            }
            save();
            //OpenClose("carousel_area","work_area",'setFont');
            //savetmpdesign();
        }

        /**
         * Display the name of the font selected
         * 
         * @return void
        */

        function setTitleFont(element)
        {
            var font_preview = document.getElementById('font_preview');
            if (element != null)
            {
                font_preview.innerHTML = element.childNodes[0].childNodes[2].innerHTML;
                //font_preview.style.fontFamily = font;
            } 
            else
            {
                font_preview.innerHTML = "ABeeZee-Regular";
                font_preview.style.fontFamily = 'ABeeZee-Regular';
            }
        }

        /**
        *Add Image to a print area
        *
        * @return void
        */
        function adduploadimg(clipart_id)
        { 
            $.ajax({
                type:'GET',
                dataType: 'json', 
                data: {clipart_id: clipart_id},
                url: window.location.origin + '/api/clipartuploaded/'+ clipart_id,
                success:function(data)
                {  
                    var clipart = data.clipart;
                    if(clipart.type == 'png' || clipart.type == 'jpg' || clipart.type == 'jpeg' || clipart.type == 'bmp' || clipart.type == 'tif' || clipart.type == 'tiff')
                    {
                        var imgSrc = window.location.origin + '/img/clipart/'+ clipart.category + '/' + clipart.subcategory + '/' + clipart.filename;
                        var leftvalue = 0;
                        var topvalue = 0;
                        fabric.Image.fromURL(imgSrc, function(img) 
                        {
                            leftvalue = canvasActive.width / 2;
                            topvalue = canvasActive.height / 2;
                            img.set({
                                id: "uploaded-" + objId,
                                left: leftvalue,
                                top: topvalue,
                                scaleX: 1,
                                scaleY: 1,
                                originX: 'center',
                                originY: 'center',
                                hasRotatingPoint: true,
                                snapAngle: 45,
                                snapThreshold: 45,
                                colorlist: clipartuploadedcolorlist,
                                centeredRotation: true,
                                lockUniScaling: true,
                                padding: 0,
                                //colorName: 'Black',
                                clipart: clipart
                            }).scaleToWidth(100);

                            var BoundingRect = { left: 0,top: 0,width: 0,height: 0 };
                            
                            img.setOptions({
                                BoundingRect: BoundingRect
                            });
                            img.setControlsVisibility({
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

                            //var filter = new fabric.Image.filters.RemoveWhite({threshold: 60,distance: 150});
                            //img.filters.push(filter);

                            img.customiseCornerIcons({
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
                            }, 
                            function() {
                                canvasActive.renderAll();
                            });
                            canvasActive.add(img);
                            canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                        });
                    }
                    else
                    {
                        var lines = data.info.split('\n');
                        if(lines.length > 1)
                        {
                            var leftvalue = 0;
                            var topvalue = 0;

                            leftvalue = canvasActive.width / 2;
                            topvalue = canvasActive.height / 2;

                            lines.splice(0, 1);
                            lines.splice(lines.length - 1, 1);
                            info = lines.join('\n');
                            fabric.loadSVGFromString(info, function(objects, options)
                            {
                                var obj = fabric.util.groupSVGElements(objects, options).paths;
                                var elements = [];
                                obj.forEach(function(svg) 
                                {
                                    svg.set({
                                        id: svg.id + "." + objId,
                                    });
                                    elements.push(svg);
                                    objId++;
                                });

                                var img = new fabric.Group(elements, {
                                    id: "uploaded-" + objId,
                                    left: leftvalue,
                                    top: topvalue,
                                    scaleX: 1,
                                    scaleY: 1,
                                    originX: 'center',
                                    originY: 'center',
                                    hasRotatingPoint: true,
                                    snapAngle: 45,
                                    snapThreshold: 45,
                                    centeredRotation: true,
                                    lockUniScaling: true,
                                    padding: 0,
                                    colorName: 'Black',
                                    clipart: clipart
                                }).scaleToWidth(100);

                                img.setControlsVisibility({
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

                                    img.customiseCornerIcons({
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
                                    
                                canvasActive.add(img);
                                canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                            });
                        }
                    }
                    clipArtAdded = true;
                    save();
                    //canvasActive.setActiveObject(0);
                    //deselectAllCanvases('addImg');
                    if (isMobile())
                    {
                        closemodal('AddArtModal');
                    }
                    // savetmpdesign();
                }
            });
            /*document.getElementById("editArt").style.display= "block";
            document.getElementById("newArt").style.display= "none";*/
        }

        /**
        * Add text to a print area.
        *
        * @return void
        */

        function addtext()
        {
            textAdded = true;
            default_text = document.getElementById("textarea").value;
            var obj = canvasActive.getActiveObject();
            if (default_text.length > 0)
            {
                if (obj!= undefined && (obj.type == 'curvedText' || obj.type == 'text'))
                {
                    console.log("obj");
                    props = obj.toObject();
                    if (obj.type == 'curvedText')
                    {
                        delete props['type'];
                        props['textAlign'] = 'center';
                        props['arcangle'] = obj.arcangle;
                        props['spacing'] = obj.spacing;
                        props['id'] = obj.id;
                        props['lockUniScaling'] = obj.lockUniScaling,
                        props['reverse'] = false;
                        props['type'] = 'curvedText';
                        var textSample = new fabric.CurvedText(default_text, props);
                            textSample.setControlsVisibility({
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

                            textSample.customiseCornerIcons({
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
                        });
                        canvasActive.remove(obj);
                        canvasActive.add(textSample).renderAll();
                        canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                    } 
                    else
                    {
                        obj.setText(default_text);
                        var objtmp = obj;
                        canvasActive.remove(obj);
                        objtmp.setControlsVisibility({
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
                        objtmp.customiseCornerIcons({
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
                        });
                        canvasActive.add(objtmp).renderAll();
                        canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                    }
                } 
                else
                {
                    var textSample = new fabric.Text(default_text, {
                        left: canvasActive.width / 2,
                        top: 50,
                        fontSize: 50,
                        strokeWidth: 0,
                        fontFamily: 'ABeeZee-Regular',
                        backgroundColor: 'transparent',
                        /*padding: 18,*/
                        //id: objId,
                        scaleX: 0.9,
                        charSpacing: 20,
                        snapAngle: 45,
                        snapThreshold: 45,
                        lockUniScaling : true,
                        centeredRotation: true,
                        originX: 'center',
                        originY: 'center',
                        scaleY: 0.9,
                        colorName: 'Black',
                        strokecolorName: 'Black',
                        fill: '#000000',
                        stroke: '',
                        type:'text'
                    });
                    textSample.setControlsVisibility({
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
                    textSample.customiseCornerIcons({
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
                    }, 
                    function() {
                        canvasActive.renderAll();
                    });
                    canvasActive.add(textSample);
                    canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                    objId++;

                    //canvasActive.renderAll();
                    //deselectAllCanvases('addtext');
                    //canvas.discardActiveObject();
                    //savetmpdesign();
                    //canvas.setActiveObject(canvas.item(canvas.getObjects().length-1));
                    //canvasActive.renderAll();
                    save();
                }
            } 
            else
            {
                canvasActive.remove(obj);
            }
            canvasActive.renderAll();
            //deselectAllCanvases('addtext');
            //canvas.discardActiveObject();
            //savetmpdesign();
            //canvas.setActiveObject(canvas.item(canvas.getObjects().length-1));
            //canvasActive.renderAll();
            save();
        }

        /**
         * Activa and deactive scale propocional
         * 
         * @return void
         */

        function SetScaleProportional(typeobject) {
            var object = canvasActive.getActiveObject();
            if (isMobile()) {
                if ($('#resizeiconModal').hasClass('fa fa-lock') || $('#resizeiconModal').hasClass('fa-lock fa')) {
                    $('#resizeiconModal').removeClass("fa fa-lock");
                    $('#resizeiconModal').addClass("fa fa-unlock");
                    object['setControlVisible']('ml', true);
                    object['setControlVisible']('mr', true);
                    object['setControlVisible']('mt', true);
                    object['setControlVisible']('mb', true);
                    object['setControlVisible']('br', false);
                    object['setControlVisible']('bl', false);
                    object['lockUniScaling'] = false;
                    //object.lockUniScaling = true;
                } else if ($('#resizeiconModal').hasClass('fa fa-unlock') || $('#resizeiconModal').hasClass('fa-unlock fa')) {
                    $('#resizeiconModal').removeClass("fa fa-unlock");
                    $('#resizeiconModal').addClass("fa fa-lock");
                    object['setControlVisible']('ml', false);
                    object['setControlVisible']('mr', false);
                    object['setControlVisible']('mt', false);
                    object['setControlVisible']('mb', false);
                    object['setControlVisible']('br', true);
                    object['setControlVisible']('bl', true);
                    object['lockUniScaling'] = true;
                    //object.lockUniScaling = false;
                } else if ($('#resizeicontextModal').hasClass('fa fa-lock') || $('#resizeicontextModal').hasClass('fa-lock fa')) {
                    $('#resizeicontextModal').removeClass("fa fa-lock");
                    $('#resizeicontextModal').addClass("fa fa-unlock");
                    object['setControlVisible']('ml', true);
                    object['setControlVisible']('mr', true);
                    object['setControlVisible']('mt', true);
                    object['setControlVisible']('mb', true);
                    object['setControlVisible']('br', false);
                    object['setControlVisible']('bl', false);
                    object['lockUniScaling'] = false;
                    //object.lockUniScaling = true;
                } else if ($('#resizeicontextModal').hasClass('fa fa-unlock') || $('#resizeicontextModal').hasClass('fa-unlock fa')) {
                    $('#resizeicontextModal').removeClass("fa fa-unlock");
                    $('#resizeicontextModal').addClass("fa fa-lock");
                    object['setControlVisible']('ml', false);
                    object['setControlVisible']('mr', false);
                    object['setControlVisible']('mt', false);
                    object['setControlVisible']('mb', false);
                    object['setControlVisible']('br', true);
                    object['setControlVisible']('bl', true);
                    object['lockUniScaling'] = true;
                    //object.lockUniScaling = false;
                }
            } else {
                if (typeobject == "image") {
                    if ($('#resizeicon').hasClass('fa fa-lock') || $('#resizeicon').hasClass('fa-lock fa')) {
                        $('#resizeicon').removeClass("fa fa-lock");
                        $('#resizeicon').addClass("fa fa-unlock");
                        object['setControlVisible']('ml', true);
                        object['setControlVisible']('mr', true);
                        object['setControlVisible']('mt', true);
                        object['setControlVisible']('mb', true);
                        object['setControlVisible']('br', false);
                        object['setControlVisible']('bl', false);
                        object['lockUniScaling'] = false;
                        //object.lockUniScaling = true;
                    } else if ($('#resizeicon').hasClass('fa fa-unlock') || $('#resizeicon').hasClass('fa-unlock fa')) {
                        $('#resizeicon').removeClass("fa fa-unlock");
                        $('#resizeicon').addClass("fa fa-lock");
                        object['setControlVisible']('ml', false);
                        object['setControlVisible']('mr', false);
                        object['setControlVisible']('mt', false);
                        object['setControlVisible']('mb', false);
                        object['setControlVisible']('br', true);
                        object['setControlVisible']('bl', true);
                        object['lockUniScaling'] = true;
                        //object.lockUniScaling = false;
                    }
                } else if (typeobject == "text") {
                    if ($('#resizeicontext').hasClass('fa fa-lock') || $('#resizeicontext').hasClass('fa-lock fa')) {
                        $('#resizeicontext').removeClass("fa fa-lock");
                        $('#resizeicontext').addClass("fa fa-unlock");
                        object['setControlVisible']('ml', true);
                        object['setControlVisible']('mr', true);
                        object['setControlVisible']('mt', true);
                        object['setControlVisible']('mb', true);
                        object['setControlVisible']('br', false);
                        object['setControlVisible']('bl', false);
                        object['lockUniScaling'] = false;
                        //object.lockUniScaling = true;
                    } else if ($('#resizeicontext').hasClass('fa fa-unlock') || $('#resizeicontext').hasClass('fa-unlock fa')) {
                        $('#resizeicontext').removeClass("fa fa-unlock");
                        $('#resizeicontext').addClass("fa fa-lock");
                        object['setControlVisible']('ml', false);
                        object['setControlVisible']('mr', false);
                        object['setControlVisible']('mt', false);
                        object['setControlVisible']('mb', false);
                        object['setControlVisible']('br', true);
                        object['setControlVisible']('bl', true);
                        object['lockUniScaling'] = true;
                        //object.lockUniScaling = false;
                    }
                }
            }
            canvasActive.renderAll();
        }

        /**
         * Move object to center front an back
         * 
         * @return void
         */

        function SetLayer(value) 
        {
            var object = canvasActive.getActiveObject();
            if (value == "forward") {
                object.bringForward();
            } else if (value == "backward") {
                object.sendBackwards();
            }
            else if(value == "center")
            {
                object.set('left', canvasActive.width / 2).setCoords();
            }
            canvasActive.renderAll();
            save();
        }

        /**
         * Edit text to a print area
         * 
         * @return void
         */
        $(function()
        {
            $('#textarea2').keyup(function() {
                default_text = this.value;
                var obj = canvasActive.getActiveObject();
                if (default_text.length > 0)
                {
                    if (obj && (obj.type == 'curvedText' || obj.type == 'text'))
                    {
                        props = obj.toObject();
                        if (obj.type == 'curvedText')
                        {
                            delete props['type'];
                            props['textAlign'] = 'center';
                            props['arcangle'] = obj.arcangle;
                            props['spacing'] = obj.spacing;
                            props['id'] = obj.id;
                            props['reverse'] = false;
                            props['type'] = 'curvedText';
                            var textSample = new fabric.CurvedText(default_text, props);
                                textSample.setControlsVisibility({
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

                                textSample.customiseCornerIcons({
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
                            });
                            canvasActive.remove(obj);
                            canvasActive.add(textSample).renderAll();
                            canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                        } 
                        else
                        {
                            obj.setText(this.value);
                            var objtmp = obj;
                            canvasActive.remove(obj);
                            objtmp.setControlsVisibility({
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
                            objtmp.customiseCornerIcons({
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
                            });
                            canvasActive.add(objtmp).renderAll();
                            canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                        }
                    } 
                    else
                    {
                        //props['type'] = 'text';
                        //var textSample = new fabric.Text(default_text, props);
                        var textSample = new fabric.Text(default_text, {
                            left: canvasActive.width / 2,
                            top: 50,
                            fontSize: 50,
                            strokeWidth: 0,
                            fontFamily: 'ABeeZee-Regular',
                            backgroundColor: 'transparent',
                            /*padding: 18,*/
                            //id: objId,
                            scaleX: 0.9,
                            charSpacing: 20,
                            snapAngle: 45,
                            snapThreshold: 45,
                            centeredRotation: true,
                            originX: 'center',
                            originY: 'center',
                            scaleY: 0.9,
                            colorName: 'Black',
                            strokecolorName: 'Black',
                            fill: '#000000',
                            stroke: ''
                        });
                        textSample.setControlsVisibility({
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
                        textSample.customiseCornerIcons({
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
                        });
                        canvasActive.add(textSample).renderAll();
                        canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                        objId++;
                    }
                } 
                else
                {
                    canvasActive.remove(obj);
                }
                canvasActive.renderAll();
                //deselectAllCanvases('addtext');
                //canvas.discardActiveObject();
                //savetmpdesign();
                //canvas.setActiveObject(canvas.item(canvas.getObjects().length-1));
                //canvasActive.renderAll();
                save();
            });
        });


        

        /**
         * return if the device is a mobile
         * 
         * @return boolean
         */

         function isMobile()
         {
            if (navigator.userAgent.match(/Android/i)
            ||
            navigator.userAgent.match(/webOS/i)
            ||
            navigator.userAgent.match(/iPhone/i)
            ||
            navigator.userAgent.match(/iPad/i)
            ||
            navigator.userAgent.match(/iPod/i)
            ||
            navigator.userAgent.match(/BlackBerry/i)
            ||
            navigator.userAgent.match(/Windows Phone/i)
            )
            {
                return true;
            } 
            else
            {
                return false;
            }
         }

        /**
         * Rotate object in the print area
         * 
         * @return void
         */
        
        function rotate(e) 
        {
            $(".list-group-item").removeClass("active");
            $(this).addClass("active");
            
            var object = canvasActive.getActiveObject();
            var anglevalue = e.target.value;
            
            if (e.target.id == "angleImage") {
                object.setAngle(anglevalue).setCoords();
                document.getElementById("anglevalueImage").value = anglevalue;
            } else if (e.target.id == "anglevalueImage") {
                object.setAngle(anglevalue);
                document.getElementById("angleImage").value = anglevalue;
            } else if (e.target.id == "angleImageModal") {
                object.setAngle(anglevalue);
                document.getElementById("anglevalueImageModal").value = anglevalue;
            } else if (e.target.id == "anglevalueImageModal") {
                object.setAngle(anglevalue);
                document.getElementById("angleImageModal").value = anglevalue;
            } else if (e.target.id == "angleText") {
                object.setAngle(anglevalue);
                document.getElementById("anglevalueText").value = anglevalue;
            } else if (e.target.id == "anglevalueText") {
                object.setAngle(anglevalue);
                document.getElementById("angleText").value = anglevalue;
            }
            
            canvasActive.renderAll(canvasActive);
            //deselectAllCanvases('rotate2');     
            save();
            //savetmpdesign();
        }

        /**
         * FlipX the object in the canvas
         * 
         * @return void
         */
        function flipX() 
        {
            var object;
            //this is to style the list so that you can see what you clicked on
            $(".list-group-item").removeClass("active");
            $(this).addClass("active");
            var object = canvasActive.getActiveObject();
            object.set('flipX', !object.flipX);
            canvasActive.renderAll(canvasActive);
            //deselectAllCanvases('flipX');
            //if (object.type == 'image') {
            //    OpenClose("carousel_area", "work_area", 'flipX');
            //} else {
            //    OpenClose("carousel_area", "work_area", 'flipX');
            //}
            save();
            //savetmpdesign();
        }


        /**
         * 
         * Determinate if the device used is a mobile
         * 
         * @return boolean
        */

        function isMobile()
        {
            if (navigator.userAgent.match(/Android/i)||navigator.userAgent.match(/webOS/i)||navigator.userAgent.match(/iPhone/i)||
                navigator.userAgent.match(/iPad/i)||navigator.userAgent.match(/iPod/i)||navigator.userAgent.match(/BlackBerry/i)||
                navigator.userAgent.match(/Windows Phone/i)
            )
            {
                return true;
            } 
            else
            {
                return false;
            }
        }

        /**
         * 
         * Show and Hide the diferents fonts
         * 
         * @return void
        */

        function fontMenu()
        {
            var text_color = document.getElementById('text_color');
            var fontmenu = document.getElementById('fontmenu');
            if (font_title.innerHTML == "Fonts")
            {
                font_title.innerHTML = "Change Font";
                up.style.display = "block";
                down.style.display = "none";
                fontmenu.style.display = "none";
            } 
            else
            {
                font_title.innerHTML = "Fonts";
                up.style.display = "none";
                down.style.display = "block";
                fontmenu.style.display = "block";
            }
        }

        /**
         * FlipY the object in the canvas
         * 
         * @return void
         */
        function flipY() {
            var object;
            //this is to style the list so that you can see what you clicked on
            $(".list-group-item").removeClass("active");
            $(this).addClass("active");
            var object = canvasActive.getActiveObject();
            object.set('flipY', !object.flipY);
            canvasActive.renderAll(canvasActive);
            //deselectAllCanvases('flipY');
            //if (object.type == 'image') {
            //    OpenClose("carousel_area", "work_area", 'flipY');
            //} else {
            //    OpenClose("carousel_area", "work_area", 'flipY');
            //}
            save();
            //savetmpdesign();
        }

        /**
         * Resize the object in the canvas
         * 
         * @return void
         */

        function resize(e) 
        {
            resized = true;
            $(".list-group-item").removeClass("active");
            $(this).addClass("active");
            var object = canvasActive.getActiveObject();
            var element = e.target.id;
            switch (element) {
                case 'sizeText':
                    var sizeText = Number(document.getElementById('sizeText').value);
                    if (sizeText < 10) {
                        sizeText = 10;
                        document.getElementById('sizeText').value = sizeText;
                    } else if (sizeText > 50) {
                        sizeText = 50;
                        document.getElementById('sizeText').value = sizeText;
                    }
                    if (object.type == 'text') {
                        object.setFontSize(sizeText);
                    } else {
                        object.set("fontSize", sizeText);
                    }
                    document.getElementById('sizeTextvalue').value = sizeText;
                    break;
                case 'sizeTextModal':
                    var sizeText = Number(document.getElementById('sizeTextModal').value);
                    if (sizeText < 10) {
                        sizeText = 10;
                        document.getElementById('sizeTextModal').value = sizeText;
                    } else if (sizeText > 50) {
                        sizeText = 50;
                        document.getElementById('sizeTextModal').value = sizeText;
                    }
                    if (object.type == 'text') {
                        object.setFontSize(sizeText);
                    } else {
                        object.set("fontSize", sizeText);
                    }
                    document.getElementById('sizeTextvalueModal').value = sizeText;
                    break;
                case 'sizeTextvalue':
                    var sizeText = Number(document.getElementById('sizeTextvalue').value);
                    if (sizeText < 10) {
                        sizeText = 10;
                        document.getElementById('sizeTextvalue').value = sizeText;
                    } else if (sizeText > 50) {
                        sizeText = 50;
                        document.getElementById('sizeTextvalue').value = sizeText;
                    }
                    if (object.type == 'text') {
                        object.setFontSize(sizeText);
                    } else {
                        object.set("fontSize", sizeText);
                    }
                    document.getElementById('sizeText').value = sizeText;
                    break;
                case 'sizeTextvalueModal':
                    var sizeText = Number(document.getElementById('sizeTextvalueModal').value);
                    if (sizeText < 10) {
                        sizeText = 10;
                        document.getElementById('sizeTextvalueModal').value = sizeText;
                    } else if (sizeText > 50) {
                        sizeText = 50;
                        document.getElementById('sizeTextvalueModal').value = sizeText;
                    }
                    if (object.type == 'text') {
                        object.setFontSize(sizeText);
                    } else {
                        object.set("fontSize", sizeText);
                    }
                    document.getElementById('sizeTextModal').value = sizeText;
                    break;
                case 'widthImage':
                    var Inch = Number(document.getElementById('widthImage').value);
                    if (Inch < 0) {
                        Inch = 1;
                        document.getElementById('widthImage').value = 1;
                    } else if (Inch > 12) {
                        Inch = 12;
                        document.getElementById('widthImage').value = 12;
                    }
                    document.getElementById('widthvalueImage').value = document.getElementById('widthImage').value;
                    var scaleX = (Inch.toFixed(2) * 35) / (1.3 * object.width.toFixed(2));
                    var Inchheigth = (object.height * scaleX * 1.3 / 35);
                    if (object.lockUniScaling) {
                        object.set('scaleX', scaleX.toFixed(2));
                        object.set('scaleY', scaleX.toFixed(2));
                        document.getElementById('heightImage').value = Inchheigth.toFixed(2);
                        document.getElementById('heightvalueImage').value = Inchheigth.toFixed(2);
                    } else {
                        object.set('scaleX', scaleX.toFixed(2));
                    }
                    break;
                case 'widthText':
                    var Inch = Number(document.getElementById('widthText').value);
                    if (Inch < 0) {
                        Inch = 1;
                        document.getElementById('widthText').value = 1;
                    } else if (Inch > 12) {
                        Inch = 12;
                        document.getElementById('widthText').value = 12;
                    }
                    document.getElementById('widthvalueText').value = document.getElementById('widthText').value;
                    var scaleX = (Inch.toFixed(2) * 35) / (1.3 * object.width.toFixed(2));
                    var Inchheigth = (object.height * scaleX * 1.3 / 35);
                    if (object.lockUniScaling) {
                        object.set('scaleX', scaleX.toFixed(2));
                        object.set('scaleY', scaleX.toFixed(2));
                        document.getElementById('heightText').value = Inchheigth.toFixed(2);
                        document.getElementById('heightvalueText').value = Inchheigth.toFixed(2);
                    } else {
                        object.set('scaleX', scaleX.toFixed(2));
                    }
                    break;
                case 'widthvalueImage':
                    var Inch = Number(document.getElementById('widthvalueImage').value);
                    if (Inch < 0) {
                        Inch = 1;
                        document.getElementById('widthvalueImage').value = 1;
                    } else if (Inch > 12) {
                        Inch = 12;
                        document.getElementById('widthvalueImage').value = 12;
                    }
                    document.getElementById('widthImage').value = document.getElementById('widthvalueImage').value;
                    var scaleX = (Inch.toFixed(2) * 35) / (1.3 * object.width.toFixed(2));
                    var Inchheigth = object.height * scaleX * 1.3 / 35;
                    if (object.lockUniScaling) {
                        object.set('scaleX', scaleX.toFixed(2));
                        object.set('scaleY', scaleX.toFixed(2));
                        document.getElementById('heightImage').value = Inchheigth.toFixed(2);
                        document.getElementById('heightvalueImage').value = Inchheigth.toFixed(2);
                    } else {
                        object.set('scaleX', scaleX.toFixed(2));
                    }
                    break;
                case 'widthvalueText':
                    var Inch = Number(document.getElementById('widthvalueText').value);
                    if (Inch < 0) {
                        Inch = 1;
                        document.getElementById('widthvalueText').value = 1;
                    } else if (Inch > 12) {
                        Inch = 12;
                        document.getElementById('widthvalueText').value = 12;
                    }
                    document.getElementById('widthText').value = document.getElementById('widthvalueText').value;
                    var scaleX = (Inch.toFixed(2) * 35) / (1.3 * object.width.toFixed(2));
                    var Inchheigth = object.height * scaleX * 1.3 / 35;
                    if (object.lockUniScaling) {
                        object.set('scaleX', scaleX.toFixed(2));
                        object.set('scaleY', scaleX.toFixed(2));
                        document.getElementById('heightText').value = Inchheigth.toFixed(2);
                        document.getElementById('heightvalueText').value = Inchheigth.toFixed(2);
                    } else {
                        object.set('scaleX', scaleX.toFixed(2));
                    }
                    break;
                case 'widthModal':
                    var Inch = Number(document.getElementById('widthModal').value);
                    if (Inch < 0) {
                        Inch = 1;
                        document.getElementById('heightModal').value = 1;
                    } else if (Inch > 12) {
                        Inch = 12;
                        document.getElementById('heightModal').value = 12;
                    }
                    document.getElementById('widthvalueModal').value = document.getElementById('widthModal').value;
                    var scaleX = (Inch.toFixed(2) * 35) / (1.3 * object.width.toFixed(2));
                    var Inchheigth = object.height * scaleX * 1.3 / 35;
                    if (object.lockUniScaling) {
                        object.set('scaleX', scaleX.toFixed(2));
                        object.set('scaleY', scaleX.toFixed(2));
                        document.getElementById('heightModal').value = Inchheigth.toFixed(2);
                        document.getElementById('heightvalueModal').value = Inchheigth.toFixed(2);
                    } else {
                        object.set('scaleX', scaleX.toFixed(2));
                    }
                    break;
                case 'widthtextModal':
                    var Inch = Number(document.getElementById('widthtextModal').value);
                    if (Inch < 0) {
                        Inch = 1;
                        document.getElementById('heighttextModal').value = 1;
                    } else if (Inch > 12) {
                        Inch = 12;
                        document.getElementById('heighttextModal').value = 12;
                    }
                    document.getElementById('widthvaluetextModal').value = document.getElementById('widthtextModal').value;
                    var scaleX = (Inch.toFixed(2) * 35) / (1.3 * object.width.toFixed(2));
                    var Inchheigth = object.height * scaleX * 1.3 / 35;
                    if (object.lockUniScaling) {
                        object.set('scaleX', scaleX.toFixed(2));
                        object.set('scaleY', scaleX.toFixed(2));
                        document.getElementById('heighttextModal').value = Inchheigth.toFixed(2);
                        document.getElementById('heightvaluetextModal').value = Inchheigth.toFixed(2);
                    } else {
                        object.set('scaleX', scaleX.toFixed(2));
                    }
                    break;
                case 'widthvalueModal':
                    var Inch = Number(document.getElementById('widthvalueModal').value);
                    if (Inch < 0) {
                        Inch = 1;
                        document.getElementById('widthvalueModal').value = 1;
                    } else if (Inch > 12) {
                        Inch = 12;
                        document.getElementById('widthvalueModal').value = 12;
                    }
                    document.getElementById('widthModal').value = document.getElementById('widthvalueModal').value;
                    var scaleX = (Inch.toFixed(2) * 35) / (1.3 * object.width.toFixed(2));
                    var Inchheigth = object.height * scaleX * 1.3 / 35;
                    if (object.lockUniScaling) {
                        object.set('scaleX', scaleX.toFixed(2));
                        object.set('scaleY', scaleX.toFixed(2));
                        document.getElementById('heightModal').value = Inchheigth.toFixed(2);
                        document.getElementById('heightvalueModal').value = Inchheigth.toFixed(2);
                    } else {
                        object.set('scaleX', scaleX.toFixed(2));
                    }
                    break;
                case 'widthvaluetextModal':
                    var Inch = Number(document.getElementById('widthvaluetextModal').value);
                    if (Inch < 0) {
                        Inch = 1;
                        document.getElementById('widthvaluetextModal').value = 1;
                    } else if (Inch > 12) {
                        Inch = 12;
                        document.getElementById('widthvaluetextModal').value = 12;
                    }
                    document.getElementById('widthtextModal').value = document.getElementById('widthvaluetextModal').value;
                    var scaleX = (Inch.toFixed(2) * 35) / (1.3 * object.width.toFixed(2));
                    var Inchheigth = object.height * scaleX * 1.3 / 35;
                    if (object.lockUniScaling) {
                        object.set('scaleX', scaleX.toFixed(2));
                        object.set('scaleY', scaleX.toFixed(2));
                        document.getElementById('heighttextModal').value = Inchheigth.toFixed(2);
                        document.getElementById('heightvaluetextModal').value = Inchheigth.toFixed(2);
                    } else {
                        object.set('scaleX', scaleX.toFixed(2));
                    }
                    break;
                case 'heightImage':
                    var Inch = Number(document.getElementById('heightImage').value);
                    if (Inch < 0) {
                        Inch = 1;
                        document.getElementById('heightImage').value = 1;
                    } else if (Inch > 16) {
                        Inch = 16;
                        document.getElementById('heightImage').value = 16;
                    }
                    document.getElementById('heightvalueImage').value = document.getElementById('heightImage').value;
                    var scaleY = (Inch * 35) / (1.3 * object.height);
                    var Inchwitdh = object.width * scaleY * 1.3 / 35;
                    if (object.lockUniScaling) {
                        object.set('scaleX', scaleY.toFixed(2));
                        object.set('scaleY', scaleY.toFixed(2));
                        document.getElementById('widthImage').value = Inchwitdh.toFixed(2);
                        document.getElementById('widthvalueImage').value = Inchwitdh.toFixed(2);
                    } else {
                        object.set('scaleY', scaleY.toFixed(2));
                    }
                    break;
                case 'heightText':
                    var Inch = Number(document.getElementById('heightText').value);
                    if (Inch < 0) {
                        Inch = 1;
                        document.getElementById('heightText').value = 1;
                    } else if (Inch > 16) {
                        Inch = 16;
                        document.getElementById('heightText').value = 16;
                    }
                    document.getElementById('heightvalueText').value = document.getElementById('heightText').value;
                    var scaleY = (Inch * 35) / (1.3 * object.height);
                    var Inchwitdh = object.width * scaleY * 1.3 / 35;
                    if (object.lockUniScaling) {
                        object.set('scaleX', scaleY.toFixed(2));
                        object.set('scaleY', scaleY.toFixed(2));
                        document.getElementById('widthText').value = Inchwitdh.toFixed(2);
                        document.getElementById('widthvalueText').value = Inchwitdh.toFixed(2);
                    } else {
                        object.set('scaleY', scaleY.toFixed(2));
                    }
                    break;
                case 'heightvalueImage':
                    var Inch = Number(document.getElementById('heightvalueImage').value);
                    if (Inch < 0) {
                        Inch = 1;
                        document.getElementById('heightvalueImage').value = 1;
                    } else if (Inch > 16) {
                        Inch = 16;
                        document.getElementById('heightvalueImage').value = 16;
                    }
                    document.getElementById('heightImage').value = document.getElementById('heightvalueImage').value;
                    var scaleY = (Inch * 35) / (1.3 * object.height);
                    var Inchwitdh = object.width * scaleY * 1.3 / 35;
                    if (object.lockUniScaling) {
                        object.set('scaleX', scaleY.toFixed(2));
                        object.set('scaleY', scaleY.toFixed(2));
                        document.getElementById('widthImage').value = Inchwitdh.toFixed(2);
                        document.getElementById('widthvalueImage').value = Inchwitdh.toFixed(2);
                    } else {
                        object.set('scaleY', scaleY.toFixed(2));
                    }
                    break;
                case 'heightvalueText':
                    var Inch = Number(document.getElementById('heightvalueText').value);
                    if (Inch < 0) {
                        Inch = 1;
                        document.getElementById('heightvalueText').value = 1;
                    } else if (Inch > 16) {
                        Inch = 16;
                        document.getElementById('heightvalueText').value = 16;
                    }
                    document.getElementById('heightText').value = document.getElementById('heightvalueText').value;
                    var scaleY = (Inch * 35) / (1.3 * object.height);
                    var Inchwitdh = object.width * scaleY * 1.3 / 35;
                    if (object.lockUniScaling) {
                        object.set('scaleX', scaleY.toFixed(2));
                        object.set('scaleY', scaleY.toFixed(2));
                        document.getElementById('widthText').value = Inchwitdh.toFixed(2);
                        document.getElementById('widthvalueText').value = Inchwitdh.toFixed(2);
                    } else {
                        object.set('scaleY', scaleY.toFixed(2));
                    }
                    break;
                case 'heightModal':
                    var Inch = Number(document.getElementById('heightModal').value);
                    if (Inch < 0) {
                        Inch = 1;
                        document.getElementById('heightModal').value = 1;
                    } else if (Inch > 16) {
                        Inch = 16;
                        document.getElementById('heightModal').value = 16;
                    }
                    document.getElementById('heightvalueModal').value = document.getElementById('heightModal').value;
                    var scaleY = (Inch * 35) / (1.3 * object.height);
                    var Inchwitdh = object.width * scaleY * 1.3 / 35;
                    if (object.lockUniScaling) {
                        object.set('scaleX', scaleY.toFixed(2));
                        object.set('scaleY', scaleY.toFixed(2));
                        document.getElementById('widthModal').value = Inchwitdh.toFixed(2);
                        document.getElementById('widthvalueModal').value = Inchwitdh.toFixed(2);
                    } else {
                        object.set('scaleY', scaleY.toFixed(2));
                    }
                    break;
                case 'heighttextModal':
                    var Inch = Number(document.getElementById('heighttextModal').value);
                    if (Inch < 0) {
                        Inch = 1;
                        document.getElementById('heighttextModal').value = 1;
                    } else if (Inch > 16) {
                        Inch = 16;
                        document.getElementById('heighttextModal').value = 16;
                    }
                    document.getElementById('heightvalueModal').value = document.getElementById('heighttextModal').value;
                    var scaleY = (Inch * 35) / (1.3 * object.height);
                    var Inchwitdh = object.width * scaleY * 1.3 / 35;
                    if (object.lockUniScaling) {
                        object.set('scaleX', scaleY.toFixed(2));
                        object.set('scaleY', scaleY.toFixed(2));
                        document.getElementById('widthtextModal').value = Inchwitdh.toFixed(2);
                        document.getElementById('widthvaluetextModal').value = Inchwitdh.toFixed(2);
                    } else {
                        object.set('scaleY', scaleY.toFixed(2));
                    }
                    break;
                case 'heightvalueModal':
                    var Inch = Number(document.getElementById('heightvalueModal').value);
                    if (Inch < 0) {
                        Inch = 1;
                        document.getElementById('heightvalueModal').value = 1;
                    } else if (Inch > 16) {
                        Inch = 16;
                        document.getElementById('heightvalueModal').value = 16;
                    }
                    document.getElementById('heightModal').value = document.getElementById('heightvalueModal').value;
                    var scaleY = (Inch * 35) / (1.3 * object.height);
                    var Inchwitdh = object.width * scaleY * 1.3 / 35;
                    if (object.lockUniScaling) {
                        object.set('scaleX', scaleY.toFixed(2));
                        object.set('scaleY', scaleY.toFixed(2));
                        document.getElementById('widthModal').value = Inchwitdh.toFixed(2);
                        document.getElementById('widthvalueModal').value = Inchwitdh.toFixed(2);
                    } else {
                        object.set('scaleY', scaleY.toFixed(2));
                    }
                    break;
                case 'heightvaluetextModal':
                    var Inch = Number(document.getElementById('heightvaluetextModal').value);
                    if (Inch < 0) {
                        Inch = 1;
                        document.getElementById('heightvaluetextModal').value = 1;
                    } else if (Inch > 16) {
                        Inch = 16;
                        document.getElementById('heightvaluetextModal').value = 16;
                    }
                    document.getElementById('heighttextModal').value = document.getElementById('heightvaluetextModal').value;
                    var scaleY = (Inch * 35) / (1.3 * object.height);
                    var Inchwitdh = object.width * scaleY * 1.3 / 35;
                    if (object.lockUniScaling) {
                        object.set('scaleX', scaleY.toFixed(2));
                        object.set('scaleY', scaleY.toFixed(2));
                        document.getElementById('widthtextModal').value = Inchwitdh.toFixed(2);
                        document.getElementById('widthvaluetextModal').value = Inchwitdh.toFixed(2);
                    } else {
                        object.set('scaleY', scaleY.toFixed(2));
                    }
                    break;
                default:
            }
            canvasActive.renderAll(canvasActive);
            //deselectAllCanvases('resize');    
            //savetmpdesign();
            save();
            //return false;
        }


        function showcorners(e)
        {
            //console.log("moved");
            var modifiedObject = e.target;
            if(modifiedObject != undefined)
            {
                modifiedObject.hasControls = true;
                canvasActive.renderAll();
            }
        }

        function hidecorners(e)
        {   
            var modifiedObject = e.target;
            //console.log("moving");
            if(modifiedObject != undefined)
            {
                modifiedObject.hasControls = false;
                //console.log(modifiedObject);
                canvasActive.renderAll();
            }
        }


        /**
        * Display edit view info when you select an object in the design print area.
        *
        * @return void
        */
        function displayinfo(e)
        {
            console.log(e.target);
            var modifiedObject = e.target;
            var editArt = document.getElementById("editArt");
            var changecolorArt = document.getElementById("changecolorArt");
            var newArt = document.getElementById("newArt");
            var fontbtn = document.getElementById("fontbtn");
            var fontmenu = document.getElementById("fontmenu");
            var textmenu = document.getElementById("textmenu");
            var Artcolor = document.getElementById("Artcolor");
            var ArtcolorText = document.getElementById("ArtcolorText");
            var Artselectcolor = document.getElementById("Artselectcolor");
            var fullcolormessage = document.getElementById("fullcolormessage");
            var colornoeditmessage = document.getElementById("colornoeditmessage");
            var fullcolormessage2 = document.getElementById("fullcolormessage2");
            var colornoeditmessage2 = document.getElementById("colornoeditmessage2");
            var Text_color = document.getElementById("Textcolor");
            var Text_strokecolor = document.getElementById("Textstrokecolor");
            var texteffecsarea = document.getElementById("texteffecsarea");
            var effect = document.getElementById("effect");
            var textarea = document.getElementById('textarea');
            //var textarea2 = document.getElementById('textarea2');
            document.getElementById("textareabtn").innerHTML = "Add Text";
            var sizeText = document.getElementById('sizeText');
            var footer_menu = document.getElementById("ds-menu-mobile-1");
            var footer_menu_text = document.getElementById("ds-menu-mobile-3");
            var footer_menu_art = document.getElementById("ds-menu-mobile-2");
            //var frontdesingerror = document.getElementById('frontdesingerror');
            //var rightdesingerror = document.getElementById('rightdesingerror');
            //var backdesingerror = document.getElementById('backdesingerror');
            //var leftdesingerror = document.getElementById('leftdesingerror');
            var widthModal = document.getElementById('widthModal');
            var widthvalueModal = document.getElementById('widthvalueModal');
            var heightModal = document.getElementById('heightModal');
            var heightvalueModal = document.getElementById('heightvalueModal');
            var angleImageModal = document.getElementById('angleImageModal');
            var anglevalueImageModal = document.getElementById('anglevalueImageModal');
            //var artcolortransparentModal = document.getElementById('artcolortransparentModal');
            var artcolortransparentlegendModal = document.getElementById('artcolortransparentlegendModal');
            var widthImage = document.getElementById('widthImage');
            var widthvalueImage = document.getElementById('widthvalueImage');
            var heightImage = document.getElementById('heightImage');
            var heightvalueImage = document.getElementById('heightvalueImage');
            var angleImage = document.getElementById('angleImage');
            var anglevalueImage = document.getElementById('anglevalueImage');
            var artcolortransparent = document.getElementById('artcolortransparent');
            var artcolortransparentlegend = document.getElementById('artcolortransparentlegend');
            var checkcolorlegend = document.getElementById('checkcolorlegend');
            var checkcolorlegendModal = document.getElementById('checkcolorlegendModal');
            var inkcolorlist = document.getElementById("inkcolorlist");
            var objectcolors = document.getElementById("objectcolors");
            var objectcolors2 = document.getElementById("objectcolors2");
            var objectcolors3 = document.getElementById("objectcolors3");
            var displaycolor = document.getElementById("displaycolor");
            var displaynoeditcolor = document.getElementById("displaynoeditcolor");
            var displayfullcolor = document.getElementById("displayfullcolor");
            var objectcolorsModal = document.getElementById("objectcolorsModal");
            var removewhite = document.getElementById("removewhite");
            var strokewidthvalueModal = document.getElementById("strokewidthvalueModal");
            var strokewidthModal = document.getElementById("strokewidthModal");
            var angleText = document.getElementById('angleText');
            var anglevalueText = document.getElementById('anglevalueText');
            var strokewidthvalue = document.getElementById("strokewidthvalue");
            var strokewidth = document.getElementById("strokewidth");
            var font_preview = document.getElementById("font_preview");
            if (e.target == undefined)
            {
                $('.nav-tabs a[href="#productSection"]').tab('show');
                newArt.style.display = 'none';
                editArt.style.display = 'none';
                changecolorArt.style.display = 'none';
                fontbtn.style.display = 'none';
                fontmenu.style.display = "none";
                textmenu.style.display = 'none';
                textarea.value = "";
                //textarea2.value = "";
                sizeText.value = "";
                Artcolor.innerHTML = '';
                Text_color.innerHTML = '';
                Text_strokecolor.innerHTML = '';
                if(isMobile())
                {
                    footer_menu.style.display = "block";
                    footer_menu_text.style.display = "none";
                    footer_menu_art.style.display = "none";
                }
                
                //frontdesingerror.style.display = 'none';
                //font = 'ABeeZee-Regular ';
                setTitleFont();
            } 
            else if (e.target.type == 'image') 
            {
                objectcolors.innerHTML = "";
                objectcolors2.innerHTML = "";
                objectcolors3.innerHTML = "";
                Artcolor.innerHTML = "";
                objectcolorsModal.innerHTML = "";
                changecolorArt.style.display = 'none';
                $('.nav-tabs a[href="#addArt"]').tab('show');
                    //setColorsInk();
                    //selectcolors();
                    if (isMobile()) 
                    {
                        widthModal.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);
                        widthvalueModal.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);
                        heightModal.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);
                        heightvalueModal.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);
                        angleImageModal.value = e.target.getAngle();
                        anglevalueImageModal.value = e.target.getAngle();
                        if (modifiedObject._controlsVisibility.ml) 
                        {
                            $('#resizeiconModal').removeClass("fa fa-lock");
                            $('#resizeiconModal').addClass("fa fa-unlock");
                        }
                        else 
                        {
                            $('#resizeiconModal').removeClass("fa fa-unlock");
                            $('#resizeiconModal').addClass("fa fa-lock");
                        }

                        footer_menu.style.display = "none";
                        footer_menu_text.style.display = "none";
                        footer_menu_art.style.display = "block";
                    } 
                    else 
                    {
                        widthImage.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);
                        widthvalueImage.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);
                        heightImage.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);
                        heightvalueImage.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);
                        angleImage.value = e.target.getAngle();
                        anglevalueImage.value = e.target.getAngle();
                        if (modifiedObject._controlsVisibility.ml) 
                        {
                            $('#resizeicon').removeClass("fa fa-lock");
                            $('#resizeicon').addClass("fa fa-unlock");
                        }
                        else 
                        {
                            $('#resizeicon').removeClass("fa fa-unlock");
                            $('#resizeicon').addClass("fa fa-lock");
                        }
                    }
                   
                    if (modifiedObject.id.toString().indexOf("uploaded") == -1) 
                    {
                        //if (modifiedObject.editable == 1) 
                         if (modifiedObject.id.toString().indexOf('editable') >= 0) 
                        {
                            if (modifiedObject.numbercolors != undefined) 
                            {
                                if (modifiedObject.numbercolors.length > 8) 
                                {
                                    //console.log("PNG CLIPART NUMBER COLORS FULLCOLOR");
                                    if(isMobile())
                                    {
                                        Artcolor.style.display= "none";
                                        ArtcolorText.style.display= "none";
                                        Artselectcolor.style.display= "none";
                                        fullcolormessage.style.display= "none";
                                        colornoeditmessage.style.display= "block";
                                        fullcolormessage2.style.display= "none";
                                        colornoeditmessage2.style.display= "block";
                                        objectcolors.style.display= "none";
                                        objectcolors2.style.display= "block";
                                        checkcolorlegend.style.display = "none";
                                        artcolortransparentlegend.style.display = "none";
                                        inkcolorlist.style.display = "block";
                                        changecolorartbtn.style.display = "none";
                                    }
                                    else
                                    {
                                        displaycolor.style.display = "none";
                                        displaynoeditcolor.style.display = "none";
                                        removewhite.style.display = "block";
                                        displayfullcolor.style.display = "block"; 
                                    }
                                }
                                else
                                {
                                    //console.log("PNG CLIPART COLOR NUMBERCOLORS 1-8");
                                    for (var i = 0; i < modifiedObject.colorlist.length; i++) 
                                    {
                                        var currentcolor = modifiedObject.colorlist[i].hex;
                                        objectcolors2.innerHTML += '<div id="color2_'+modifiedObject.id+'" class="color1" style="background-color: '+ currentcolor+'; width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;"></div>';
                                        objectcolors.innerHTML += '<div id="color_'+modifiedObject.id+'" class="color1" style="background-color: '+ currentcolor+'; width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;"  onclick="setcolor(this);"></div>';
                                    }
                                    if(isMobile())
                                    {
                                        Artcolor.style.display= "none";
                                        ArtcolorText.style.display= "none";
                                        Artselectcolor.style.display= "none";
                                        fullcolormessage.style.display= "none";
                                        colornoeditmessage.style.display= "block";
                                        fullcolormessage2.style.display= "none";
                                        colornoeditmessage2.style.display= "block";
                                        objectcolors.style.display= "none";
                                        objectcolors2.style.display= "block";
                                        checkcolorlegend.style.display = "none";
                                        artcolortransparentlegend.style.display = "none";
                                        inkcolorlist.style.display = "block";
                                        changecolorartbtn.style.display = "none";
                                    }
                                    else
                                    {
                                        displaycolor.style.display = "block";
                                        displaynoeditcolor.style.display = "none";
                                        removewhite.style.display = "block";
                                        displayfullcolor.style.display = "none"; 
                                    }
                                }
                            } 
                            else if (modifiedObject.filters.length > 0) 
                            {
                                //console.log("PNG CLIPART 1 FILTER");
                                var found = ListColors.find(function(element) 
                                {
                                    if ((element.hex) == rgb2hex(modifiedObject.filters[modifiedObject.filters.length - 1].color)) {
                                        return element;
                                    }
                                });
                                var Artcolor_name = found.name;
                                objectcolors2.innerHTML = '<div id="color2_'+modifiedObject.id+'" class="color1" style="background-color: '+ rgb2hex(modifiedObject.filters[modifiedObject.filters.length - 1].color)+'; width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;" onclick="setcolor(this);"></div>';;
                                objectcolors.innerHTML = '<div id="color_'+modifiedObject.id+'" class="color1" style="background-color: '+ rgb2hex(modifiedObject.filters[modifiedObject.filters.length - 1].color)+'; width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;" onclick="setcolor(this);"></div>';;
                                Artcolor.innerHTML = Artcolor_name;
                                if(isMobile())
                                {
                                    Artcolor.style.display= "none";
                                    ArtcolorText.style.display= "none";
                                    Artselectcolor.style.display= "none";
                                    fullcolormessage.style.display= "none";
                                    colornoeditmessage.style.display= "none";
                                    fullcolormessage2.style.display= "none";
                                    colornoeditmessage2.style.display= "none";
                                    objectcolors.style.display= "none";
                                    objectcolors2.style.display= "block";
                                    checkcolorlegend.style.display = "none";
                                    artcolortransparentlegend.style.display = "none";
                                    inkcolorlist.style.display = "block";
                                    changecolorartbtn.style.display = "block";
                                }
                                else
                                {
                                    displaycolor.style.display = "block";
                                    displaynoeditcolor.style.display = "none";
                                    removewhite.style.display = "block";
                                    displayfullcolor.style.display = "none";      
                                }
                            }
                            else 
                            {
                                //console.log("PNG CLIPART NO FILTER");
                                objectcolors2.innerHTML = '<div id="color2_'+modifiedObject.id+'"class="color1" style="background-color: rgb(0, 0, 0); width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;"></div>';
                                objectcolors.innerHTML = '<div id="color_'+modifiedObject.id+'" class="color1" style="background-color: rgb(0, 0, 0); width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;" onclick="setcolor(this);"></div>';
                                Artcolor.innerHTML = "Black";
                                if(isMobile())
                                {
                                    Artcolor.style.display= "none";
                                    ArtcolorText.style.display= "none";
                                    Artselectcolor.style.display= "none";
                                    fullcolormessage.style.display= "none";
                                    colornoeditmessage.style.display= "none";
                                    fullcolormessage2.style.display= "none";
                                    colornoeditmessage2.style.display= "none";
                                    objectcolors.style.display= "none";
                                    objectcolors2.style.display= "block";
                                    checkcolorlegend.style.display = "none";
                                    artcolortransparentlegend.style.display = "none";
                                    inkcolorlist.style.display = "block";
                                    changecolorartbtn.style.display = "block";
                                }
                                else
                                {
                                    displaycolor.style.display = "block";
                                    displaynoeditcolor.style.display = "none";
                                    removewhite.style.display = "block";
                                    displayfullcolor.style.display = "none"; 
                                }
                            }
                        }
                        else
                        {
                            if (modifiedObject.numbercolors != undefined) 
                            {
                                if (modifiedObject.numbercolors.length > 8) 
                                {
                                    //console.log("PNG CLIPART NUMBER COLORS FULLCOLOR");
                                    if(isMobile())
                                    {
                                        Artcolor.style.display= "none";
                                        ArtcolorText.style.display= "none";
                                        Artselectcolor.style.display= "none";
                                        fullcolormessage.style.display= "none";
                                        colornoeditmessage.style.display= "block";
                                        fullcolormessage2.style.display= "none";
                                        colornoeditmessage2.style.display= "block";
                                        objectcolors.style.display= "none";
                                        objectcolors2.style.display= "block";
                                        checkcolorlegend.style.display = "none";
                                        artcolortransparentlegend.style.display = "none";
                                        inkcolorlist.style.display = "block";
                                        changecolorartbtn.style.display = "none";
                                    }
                                    else
                                    {
                                        displaycolor.style.display = "none";
                                        displaynoeditcolor.style.display = "none";
                                        removewhite.style.display = "block";
                                        displayfullcolor.style.display = "block"; 
                                    }
                                }
                                else
                                {
                                    //console.log("PNG CLIPART COLOR NUMBERCOLORS 1-8");
                                    for (var i = 0; i < modifiedObject.colorlist.length; i++) 
                                    {
                                        var currentcolor = modifiedObject.colorlist[i].hex;
                                        objectcolors3.innerHTML += '<div class="color1" style="background-color: '+ currentcolor+'; width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;"></div>';
                                    }
                                    if(isMobile())
                                    {
                                        Artcolor.style.display= "none";
                                        ArtcolorText.style.display= "none";
                                        Artselectcolor.style.display= "none";
                                        fullcolormessage.style.display= "none";
                                        colornoeditmessage.style.display= "block";
                                        fullcolormessage2.style.display= "none";
                                        colornoeditmessage2.style.display= "block";
                                        objectcolors.style.display= "none";
                                        objectcolors2.style.display= "block";
                                        checkcolorlegend.style.display = "none";
                                        artcolortransparentlegend.style.display = "none";
                                        inkcolorlist.style.display = "block";
                                        changecolorartbtn.style.display = "none";
                                    }
                                    else
                                    {
                                        displaycolor.style.display = "none";
                                        displaynoeditcolor.style.display = "block";
                                        removewhite.style.display = "block";
                                        displayfullcolor.style.display = "none"; 
                                    }
                                }
                            } 
                            else if (modifiedObject.filters.length > 0) 
                            {
                                //console.log("PNG CLIPART 1 FILTER");
                                var found = ListColors.find(function(element) 
                                {
                                    if ((element.hex) == rgb2hex(modifiedObject.filters[modifiedObject.filters.length - 1].color)) {
                                        return element;
                                    }
                                });
                                var Artcolor_name = found.name;
                                objectcolors3.innerHTML = '<div class="color1" style="background-color: '+ rgb2hex(modifiedObject.filters[modifiedObject.filters.length - 1].color)+'; width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;"></div>';
                                Artcolor.innerHTML = Artcolor_name;
                                if(isMobile())
                                {
                                    Artcolor.style.display= "none";
                                    ArtcolorText.style.display= "none";
                                    Artselectcolor.style.display= "none";
                                    fullcolormessage.style.display= "none";
                                    colornoeditmessage.style.display= "none";
                                    fullcolormessage2.style.display= "none";
                                    colornoeditmessage2.style.display= "none";
                                    objectcolors.style.display= "none";
                                    objectcolors2.style.display= "block";
                                    checkcolorlegend.style.display = "none";
                                    artcolortransparentlegend.style.display = "none";
                                    inkcolorlist.style.display = "block";
                                    changecolorartbtn.style.display = "block";
                                }
                                else
                                {
                                    displaycolor.style.display = "none";
                                    displaynoeditcolor.style.display = "block";
                                    removewhite.style.display = "block";
                                    displayfullcolor.style.display = "none";      
                                }
                            }
                            else 
                            {
                                //console.log("PNG CLIPART NO FILTER");
                                objectcolors3.innerHTML = '<div class="color1" style="background-color: rgb(0, 0, 0); width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;"></div>';
                                Artcolor.innerHTML = "Black";
                                if(isMobile())
                                {
                                    Artcolor.style.display= "none";
                                    ArtcolorText.style.display= "none";
                                    Artselectcolor.style.display= "none";
                                    fullcolormessage.style.display= "none";
                                    colornoeditmessage.style.display= "none";
                                    fullcolormessage2.style.display= "none";
                                    colornoeditmessage2.style.display= "none";
                                    objectcolors.style.display= "none";
                                    objectcolors2.style.display= "block";
                                    checkcolorlegend.style.display = "none";
                                    artcolortransparentlegend.style.display = "none";
                                    inkcolorlist.style.display = "block";
                                    changecolorartbtn.style.display = "block";
                                }
                                else
                                {
                                    displaycolor.style.display = "none";
                                    displaynoeditcolor.style.display = "block";
                                    removewhite.style.display = "block";
                                    displayfullcolor.style.display = "none"; 
                                }
                            }
                        }
                    } 
                    else 
                    {
                        if (modifiedObject.colorlist != undefined) 
                        {
                            if (modifiedObject.colorlist.length > 8) 
                            {
                                //console.log("PNG CLIPART COLOR LIST FULLCOLOR");
                                if(isMobile())
                                {
                                    Artcolor.style.display= "none";
                                    ArtcolorText.style.display= "none";
                                    Artselectcolor.style.display= "none";
                                    fullcolormessage.style.display= "none";
                                    colornoeditmessage.style.display= "block";
                                    fullcolormessage2.style.display= "none";
                                    colornoeditmessage2.style.display= "block";
                                    objectcolors.style.display= "none";
                                    objectcolors2.style.display= "block";
                                    checkcolorlegend.style.display = "none";
                                    artcolortransparentlegend.style.display = "none";
                                    inkcolorlist.style.display = "block";
                                    changecolorartbtn.style.display = "none";
                                }
                                else
                                {
                                    displaycolor.style.display = "none";
                                    displaynoeditcolor.style.display = "none";
                                    removewhite.style.display = "block";
                                    displayfullcolor.style.display = "block"; 
                                }
                            }
                            else
                            {
                                //console.log("PNG CLIPART COLOR LIST COLORS 1-8");
                               for (var i = 0; i < modifiedObject.colorlist.length; i++) 
                                {
                                    var currentcolor = modifiedObject.colorlist[i];
                                    objectcolors3.innerHTML += '<div class="color1" style="background-color: '+ currentcolor+'; width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;"></div>';
                                }
                                if(isMobile())
                                {
                                    Artcolor.style.display= "none";
                                    ArtcolorText.style.display= "none";
                                    Artselectcolor.style.display= "none";
                                    fullcolormessage.style.display= "none";
                                    colornoeditmessage.style.display= "block";
                                    fullcolormessage2.style.display= "none";
                                    colornoeditmessage2.style.display= "block";
                                    objectcolors.style.display= "none";
                                    objectcolors2.style.display= "block";
                                    checkcolorlegend.style.display = "none";
                                    artcolortransparentlegend.style.display = "none";
                                    inkcolorlist.style.display = "block";
                                    changecolorartbtn.style.display = "none";
                                }
                                else
                                {
                                    displaycolor.style.display = "none";
                                    displaynoeditcolor.style.display = "block";
                                    removewhite.style.display = "block";
                                    displayfullcolor.style.display = "none"; 
                                }
                            }
                        } 
                        else 
                        {
                            if (modifiedObject.filters.length > 0) 
                            {
                                //console.log("PNG CLIPART COLOR FILTERS");
                                var found = ListColors.find(function(element) {
                                    if ((element.hex) == rgb2hex(modifiedObject.filters[modifiedObject.filters.length - 1].color)) 
                                    {
                                        return element;
                                    }
                                });
                                var Artcolor_name = found.name;
                                var divColor = document.createElement("div");
                                divColor.id = "color" + modifiedObject.id;
                                divColor.className = "color1";
                                divColor.style.backgroundColor = rgb2hex(modifiedObject.filters[modifiedObject.filters.length - 1].color);
                                divColor.style.width = "30px";
                                divColor.style.height = "30px";
                                divColor.style.borderRadius = "30px";
                                divColor.style.display = "inline-flex";
                                divColor.style.border = "1px solid #eee";
                                divColor.style.cursor = "pointer";
                                objectcolors2.appendChild(divColor);
                                divColor.addEventListener("click", function() 
                                {
                                    idcolorselected = this.id;
                                    colorselected = this.style.backgroundColor;
                                    var listcircles = document.getElementsByClassName('color1');
                                    for (var i = 0; i < listcircles.length; i++) 
                                    {
                                        listcircles[i].style.border = "1px solid #eee";
                                    }
                                    this.style.border = "2px solid #31B0D5";
                                });
                                
                                objectcolors.appendChild(divColor);
                                Artcolor.innerHTML = Artcolor_name;
                                Artcolor.style.display= "none";
                                ArtcolorText.style.display= "none";
                                Artselectcolor.style.display= "none";
                                fullcolormessage.style.display= "none";
                                colornoeditmessage.style.display= "none";
                                fullcolormessage2.style.display= "none";
                                colornoeditmessage2.style.display= "block";
                                objectcolors.style.display= "block";
                                objectcolors2.style.display= "block";
                                checkcolorlegend.style.display = "none";
                                artcolortransparentlegend.style.display = "none";
                                inkcolorlist.style.display = "none";
                                changecolorartbtn.style.display = "none";
                            } 
                            else
                            {   
                                //console.log("PNG CLIPART COLOR NO FILTERS");
                                var divColor = document.createElement("div");
                                divColor.id = "color" + modifiedObject.id;
                                divColor.className = "color1";
                                divColor.style.backgroundColor = "#000000";
                                divColor.style.width = "30px";
                                divColor.style.height = "30px";
                                divColor.style.borderRadius = "30px";
                                divColor.style.display = "inline-flex";
                                divColor.style.border = "1px solid #eee";
                                divColor.style.cursor = "pointer";
                                objectcolors2.appendChild(divColor);
                                divColor.addEventListener("click", function() 
                                {
                                    idcolorselected = this.id;
                                    colorselected = this.style.backgroundColor;
                                    var listcircles = document.getElementsByClassName('color1');
                                    for (var i = 0; i < listcircles.length; i++) 
                                    {
                                        listcircles[i].style.border = "1px solid #eee";
                                    }
                                    this.style.border = "2px solid #31B0D5";
                                });
                                objectcolors.appendChild(divColor);
                                Artcolor.innerHTML = "Black";
                                Artcolor.style.display= "none";
                                ArtcolorText.style.display= "none";
                                Artselectcolor.style.display= "none";
                                fullcolormessage.style.display= "none";
                                colornoeditmessage.style.display= "none";
                                fullcolormessage2.style.display= "none";
                                colornoeditmessage2.style.display= "block";
                                objectcolors.style.display= "block";
                                objectcolors2.style.display= "block";
                                checkcolorlegend.style.display = "none";
                                artcolortransparentlegend.style.display = "none";
                                inkcolorlist.style.display = "none";
                                changecolorartbtn.style.display = "none";
                            }
                            
                        }
                    }
                editArt.style.display = 'block';
                //changeClipArtMenuSize();
                newArt.style.display = 'none';
                //activateMenu(e.target.type);
                //font = 'ABeeZee-Regular';
                //setTitleFont();
            } 
            else if (e.target.type == 'text' || e.target.type == 'curvedText') 
            {
                //setColorsInk();
                //selectcolorsT();
                if (isMobile()) 
                {
                    /*widthtextModal.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);
                    widthvaluetextModal.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);
                    heighttextModal.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);
                    heightvaluetextModal.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);*/
                    
                    if (modifiedObject._controlsVisibility.ml) 
                    {
                        $('#resizeicontextModal').removeClass("fa fa-lock");
                        $('#resizeicontextModal').addClass("fa fa-unlock");
                    }
                    else 
                    {
                        $('#resizeicontextModal').removeClass("fa fa-unlock");
                        $('#resizeicontextModal').addClass("fa fa-lock");
                    }
                } 
                else 
                {
                    widthText.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);
                    widthvalueText.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);
                    heightText.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);
                    heightvalueText.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);
                    if (modifiedObject._controlsVisibility.ml) {
                        $('#resizeicontext').removeClass("fa fa-lock");
                        $('#resizeicontext').addClass("fa fa-unlock");
                    } else {
                        $('#resizeicontext').removeClass("fa fa-unlock");
                        $('#resizeicontext').addClass("fa fa-lock");
                    }
                }
                if(isMobile())
                {
                    footer_menu.style.display = "none";
                    footer_menu_text.style.display = "block";
                    footer_menu_art.style.display = "none";
                }
                else
                {
                    footer_menu.style.display = "none";
                    footer_menu_text.style.display = "none";
                    footer_menu_art.style.display = "none";
                }
                
                $('.nav-tabs a[href="#textSection"]').tab('show');
                document.getElementById("textareabtn").innerHTML = "Update Text";
                fontbtn.style.display = 'block';
                fontmenu.style.display = "none";
                textmenu.style.display = 'block';
                //activateMenu(e.target.type);
                var Text_color_name = "Black";
                var found = ListColors.find(function(element) {
                    if ((element.hex) == rgb2hex(modifiedObject.fill)) {
                        return element;
                    }
                });
                Text_color_name = found.name;
                Text_color.innerHTML = Text_color_name;
                var Text_Stroke_color_name = "";
                var found = ListColors.find(function(element) {
                    if ((element.hex) == rgb2hex(modifiedObject.stroke)) {
                        return element;
                    }
                });
                //Text_Stroke_color_name = found.name;
                Text_strokecolor.innerHTML = Text_Stroke_color_name;
                document.getElementById("sizeText").value = Math.round(modifiedObject.getFontSize());
                document.getElementById('textarea').value = modifiedObject.text;
                document.getElementById('textarea2').value = modifiedObject.text;
                document.getElementById("strokewidthvalue").value = modifiedObject.strokeWidth;
                document.getElementById("strokewidth").value = modifiedObject.strokeWidth;
                document.getElementById("strokewidthvalueModal").value = modifiedObject.strokeWidth;
                document.getElementById("strokewidthModal").value = modifiedObject.strokeWidth;
                if (isMobile()) {
                    document.getElementById('angleImageModal').value = e.target.getAngle();
                    document.getElementById('anglevalueImageModal').value = e.target.getAngle();
                } else {
                    document.getElementById('angleText').value = e.target.getAngle();
                    document.getElementById('anglevalueText').value = e.target.getAngle();
                }
                if (modifiedObject.text != "") {
                    var fonts = document.getElementsByClassName("fonts");
                    for (i = 0; i < fonts.length; i++) {
                        fonts[i].innerHTML = modifiedObject.text.substring(0, 7);
                    }
                } else {
                    var fonts = document.getElementsByClassName("fonts");
                    for (i = 0; i < fonts.length; i++) {
                        fonts[i].innerHTML = fonts[i].id;
                    }
                }
                if (e.target.type == 'text') {
                    texteffecsarea.style.display = "none";
                    effect.checked = false;
                } else {
                    texteffecsarea.style.display = "block";
                    effect.checked = true;
                    document.getElementById("sizeText").value = modifiedObject.getFontSize();
                    document.getElementById("sizeTextvalue").value = modifiedObject.getFontSize();
                    document.getElementById("radius").value = modifiedObject.getArcangle();
                    document.getElementById("radiusvalue").value = modifiedObject.getArcangle();
                    document.getElementById("spacing").value = modifiedObject.getSpacing();
                    document.getElementById("spacingvalue").value = modifiedObject.getSpacing();
                }
                //font_preview.style.fontFamily = modifiedObject.fontFamily;
                font_preview.innerHTML = modifiedObject.fontFamily;
            } 
            else if (e.target.type == 'group')
            {
                objectcolors.innerHTML = "";
                objectcolors2.innerHTML = "";
                objectcolors3.innerHTML = "";
                Artcolor.innerHTML = "";
                objectcolorsModal.innerHTML = "";
                $('.nav-tabs a[href="#addArt"]').tab('show');
                changecolorArt.style.display = 'none';
                var layerscolors = [];
                if (isMobile()) 
                {
                   inkcolorlist.style.display = "block";
                    widthModal.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);
                    widthvalueModal.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);
                    heightModal.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);
                    heightvalueModal.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);
                    angleImageModal.value = e.target.getAngle();
                    anglevalueImageModal.value = e.target.getAngle();
                    footer_menu.style.display = "none";
                    footer_menu_text.style.display = "none";
                    footer_menu_art.style.display = "block";
                } 
                else 
                {   
                    artcolortransparent.style.display = "block";
                    artcolortransparentlegend.style.display = "block";
                    checkcolorlegend.style.display = "block";
                    inkcolorlist.style.display = "block";
                    widthImage.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);
                    widthvalueImage.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);
                    heightImage.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);
                    heightvalueImage.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);
                    angleImage.value = e.target.getAngle();
                    anglevalueImage.value = e.target.getAngle();
                }

              

                for (var i = 0; i < modifiedObject._objects.length; i++) 
                {
                    if (!validate_layer(modifiedObject._objects[i], layerscolors)) 
                    {
                        layerscolors.push(modifiedObject._objects[i]);
                    }
                }
                
                //if (modifiedObject.editable == 1) 
                 if (modifiedObject.id.toString().indexOf('editable') >= 0) 
                {
                    if (layerscolors.length > 0 && layerscolors.length < 2 )
                    {
                        //console.log("SVG 1 COLOR");
                        for (var i = 0; i < layerscolors.length; i++) 
                        {
                            var currentcolor = layerscolors[i].fill;
                                objectcolors2.innerHTML += '<div id="color2_'+layerscolors[i].id.split(".")[0]+'" class="color1" style="background-color: '+ currentcolor+'; width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;" onclick="setcolor(this);"></div>';
                                objectcolors.innerHTML += '<div id="color_'+layerscolors[i].id.split(".")[0]+'" class="color1" style="background-color: '+ currentcolor +'; width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;" onclick="setcolor(this);"></div>';
                                objectcolorsModal.innerHTML += '<div id="colorModal_'+layerscolors[i].id.split(".")[0]+'" class="color1" style="background-color: '+ currentcolor +'; width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;" onclick="setcolor(this);"></div>';
                        }
                        //colorselected = layerscolors[0].fill;
                        if(isMobile())
                        {
                            objectcolorsModal.style.display= "block";
                            Artcolor.style.display= "none";
                            ArtcolorText.style.display= "none";
                            Artselectcolor.style.display= "none";
                            fullcolormessage.style.display= "none";
                            colornoeditmessage.style.display= "none";
                            fullcolormessage2.style.display= "none";
                            colornoeditmessage2.style.display= "none";
                            objectcolors.style.display= "none";
                            objectcolors2.style.display= "block";
                            checkcolorlegend.style.display = "block";
                            artcolortransparentlegend.style.display = "block";
                            inkcolorlist.style.display = "block";
                            changecolorartbtn.style.display = "block";
                        }
                        else
                        {
                            displaycolor.style.display = "block";
                            displaynoeditcolor.style.display = "none";
                            removewhite.style.display = "none";
                            displayfullcolor.style.display = "none";                           
                        }
                        
                    }
                    else if (layerscolors.length > 1 && layerscolors.length < 9)
                    {
                        //console.log("SVG 2-8 COLOR");
                        for (var i = 0; i < layerscolors.length; i++) 
                        {
                            var currentcolor = layerscolors[i].fill;
                            objectcolors2.innerHTML += '<div id="color2_'+layerscolors[i].id.split(".")[0]+'" class="color1" style="background-color: '+ currentcolor+'; width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;" onclick="setcolor(this);"></div>';
                            objectcolors.innerHTML += '<div id="color_'+layerscolors[i].id.split(".")[0]+'" class="color1" style="background-color: '+ currentcolor +'; width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;" onclick="setcolor(this);"></div>';
                            objectcolorsModal.innerHTML += '<div id="colorModal_'+layerscolors[i].id.split(".")[0]+'" class="color1" style="background-color: '+ currentcolor +'; width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;" onclick="setcolor(this);"></div>';
                        }

                        idcolorselected = "color_"+layerscolors[0].id.split(".")[0];
                        colorselected = layerscolors[0].fill;
                        var listcircles = document.getElementsByClassName('color1');
                        for (var i = 0; i < listcircles.length; i++) 
                        {
                            listcircles[i].style.border = "1px solid #eee";
                        }
                        document.getElementById(idcolorselected).style.border = "2px solid #31B0D5";

                        if(isMobile())
                        {
                            Artcolor.style.display= "inline";
                            ArtcolorText.style.display= "inline";
                            Artselectcolor.style.display= "block";
                            fullcolormessage.style.display= "none";
                            colornoeditmessage.style.display= "none";
                            fullcolormessage2.style.display= "none";
                            colornoeditmessage2.style.display= "none";
                            objectcolors.style.display= "block";
                            objectcolors2.style.display= "block";
                            checkcolorlegend.style.display = "block";
                            artcolortransparentlegend.style.display = "block";
                            inkcolorlist.style.display = "block";
                            changecolorartbtn.style.display = "block";
                            objectcolorsModal.style.display= "block";
                        }
                        else
                        {
                            
                            displaycolor.style.display = "block";
                            displaynoeditcolor.style.display = "none";
                            removewhite.style.display = "none";
                            displayfullcolor.style.display = "none";
                        }
                    }
                    else
                    {
                        //console.log("SVG FULL COLOR");
                        if (isMobile()) 
                        {
                            inkcolorlistModal.style.display = "none"; 
                            checkcolorlegendModal.style.display = "none";
                        } 
                        else 
                        {
                            displaycolor.style.display = "none";
                            displaynoeditcolor.style.display = "none";
                            removewhite.style.display = "none";
                            displayfullcolor.style.display = "block";                           
                        }
                    }
                }
                else
                {
                    if (layerscolors.length > 0 && layerscolors.length < 2 )
                    {
                        //console.log("SVG 1 COLOR NO EDIT");
                        for (var i = 0; i < layerscolors.length; i++) 
                        {
                            var currentcolor = layerscolors[i].fill;
                                objectcolors3.innerHTML += '<div class="color1" style="background-color: '+ currentcolor+'; width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;"></div>';
                        }
                        displaycolor.style.display = "none";
                        displaynoeditcolor.style.display = "block";
                        removewhite.style.display = "none";
                        displayfullcolor.style.display = "none";
                           
                    }
                    else if (layerscolors.length > 1 && layerscolors.length < 9)
                    {
                        //console.log("SVG 2-8 COLOR NO EDIT");
                        for (var i = 0; i < layerscolors.length; i++) 
                        {
                            var currentcolor = layerscolors[i].fill;
                                objectcolors3.innerHTML += '<div class="color1" style="background-color: '+ currentcolor+'; width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;"></div>';
                        }
                        displaycolor.style.display = "none";
                        displaynoeditcolor.style.display = "block";
                        removewhite.style.display = "none";
                        displayfullcolor.style.display = "none";
                    }
                    else
                    {
                        //console.log("SVG FULL COLOR NO EDIT");
                        if (isMobile()) 
                        {
                            displaycolor.style.display = "none";
                            displayfullcolor.style.display = "block";
                        } 
                        else 
                        {
                            displaycolor.style.display = "none";
                            displaynoeditcolor.style.display = "none";
                            removewhite.style.display = "none";
                            displayfullcolor.style.display = "block";
                        }
                    }
                }
                editArt.style.display = 'block';
                //changeClipArtMenuSize();
                newArt.style.display = 'none';
                //activateMenu(e.target.type);
                //font = 'ABeeZee-Regular';
                //setTitleFont();
            }
        }


        function setcolor(element)
        {
            idcolorselected = element.id;
            //console.log("idcolorselected: " + idcolorselected);
            colorselected = element.style.backgroundColor;
            //console.log("colorselected: " + colorselected);
            var listcircles = document.getElementsByClassName('color1');
            for (var i = 0; i < listcircles.length; i++) 
            {
                listcircles[i].style.border = "1px solid #eee";
            }
            element.style.border = "2px solid #31B0D5";
        }

        /**
         * Validate SVG layer
         * 
         * @return boolean
         */

        function validate_layer(element, arraycolors) 
        {
            if (arraycolors.length > 0) {
                for (var i = 0; i < arraycolors.length; i++) {
                    if (arraycolors[i].id.split(".")[0] === element.id.split(".")[0]) {
                        return true;
                    }
                }
                return false;
            } else {
                return false;
            }
        }

        /**
         * Change RGB color to HEX color
         * 
         * @return string
         */

        function rgb2hex(rgb) 
        {
            if (rgb != null) 
            {
                value = rgb;
                rgb = rgb.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i);
                if ((rgb && rgb.length === 4)) 
                {
                    return "#" + ("0" + parseInt(rgb[1], 10).toString(16)).slice(-2) + ("0" + parseInt(rgb[2], 10).toString(16)).slice(-2) + ("0" + parseInt(rgb[3], 10).toString(16)).slice(-2);
                }
                else 
                {
                    return value;
                }
            }
            else 
            {
                return "";
            }
        }
   
    /**
     * Set the default values of the corners objects in the print area
     *
     * @return void
     */
    fabric.Object.prototype.transparentCorners = false;
    fabric.Canvas.prototype.customiseControls({
        tr: {
                action: 'remove',
                cursor: 'pointer'
        },
        bl: {
                action: 'scale',
                cursor: 'pointer'
        },
        br: {
                action: 'scale',
                cursor: 'pointer'
        },
        ml: {
                action: 'scaleX',
                cursor: 'pointer'
        },
        mr: {
                action: 'scaleX',
                cursor: 'pointer'
        },
        mb: {
                action: 'scaleY',
                cursor: 'pointer'
        },
        mt: {
                action: 'scaleY',
                cursor: 'pointer'
        },
    }, function() {
        canvaslist.forEach(canvas => {
            canvas.renderAll();
        });
    } );

    /**
     * Save tmp design after change the products
     * 
     * @return void
     */
    function savetmpdesign()
    {
        var designtmplist = document.getElementById("designtmplist");
        designtmplist.innerHTML = "";
        
        canvasdesignlist = [];
        canvaslist.forEach(canvas => 
        {
            if(canvas.getObjects().length > 0)
            {
                var designtmp =  {design:null,side:canvas.contextContainer.canvas.id, canvas:null,img:null,svg:null};
                designtmp.design = JSON.parse(JSON.stringify(canvas));
                designtmp.canvas = canvas;
                designtmp.img = canvas.toDataURL('image/png');
                designtmp.svg = canvas.toSVG();
                designtmp.productimg = canvas.productimg;
                designtmp.width = canvas.width;
                designtmp.height = canvas.height;
                designtmp.left = canvas.left;
                designtmp.top = canvas.top;
                //designtmplist.innerHTML +='<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"><img class="img-responsive" src="'+designtmp.svg+'"></div>';
                /*designtmplist.innerHTML +='<div class="custom-control custom-checkbox image-checkbox col-lg-3 col-md-4 col-sm-6 col-xs-12">';
                designtmplist.innerHTML +='    <input type="checkbox" class="custom-control-input" id="'+designtmp.canvas.contextContainer.canvas.id+'">';
                designtmplist.innerHTML +='    <label class="custom-control-label" for="'+designtmp.canvas.contextContainer.canvas.id+'">';
                designtmplist.innerHTML +='        <img src="'+designtmp.img+'" class="img-responsive" style="max-width:100px; heigth:auto">';
                designtmplist.innerHTML +='    </label>';
                designtmplist.innerHTML +='</div>';*/
                canvasdesignlist.push(designtmp); 
            }
        });

    }

    /**
     * show and hide the upload button after accept the upload terms
     * 
     * @return void
     */
    function hideshowbutton(element) 
    {
        if (element.id == "termsOfUse") 
        {
            if (element.checked) 
            {
                document.getElementById("upload").style.display = "block";
            }
            else 
            {
                document.getElementById("upload").style.display = "none";
            }
        }
        else
        {
            if (element.checked) 
            {
                document.getElementById("uploadModal").style.display = "block";
            } 
            else 
            {
                document.getElementById("uploadModal").style.display = "none";
            }
        }
    }

    /**
     * Preview upload clipart
     * 
     * @return void
     */
    function uploadImage()
    {
        var preview = document.createElement('img');
        preview.id= objId;
        preview.className = "uploadpreview";
        objId++;
        
        var file =  isMobile() ? document.getElementById('fileModal').files[0]  :  document.getElementById('file').files[0]; 
        var reader = new FileReader();
        reader.onload = function ()
        {
            preview.src = reader.result;
           //ShowAddImg(reader.result);
        }
        //SIZING THE IMG PREVIEW BEING UPLOADED
        preview.style.width = "10vw";
        preview.style.height = "10vw";
        if(file)
        {
            preview.src = reader.readAsDataURL(file);
            imageUploaded = true; //set for pricing purposes
        } 
        else
        {
            preview.src = "";
        }
        document.getElementById("uploadpreview").appendChild(preview);    
        
    }

    /**
     * 
     * Remove the white background in the upload image
     * 
     * @return void
    */

    function RemoveWhite(element) 
    {
        colorChanged = true;
        $(".list-group-item").removeClass("active");
        $(this).addClass("active");
        var object = canvasActive.getActiveObject();
        if (object.type == "image") 
        {
            if (element.checked) 
            {
                var filter = new fabric.Image.filters.RemoveWhite({
                    threshold: 60,
                    distance: 150
                });
                object.filters.push(filter);
            }
            else 
            {
                object.filters = [];
            }

            object.applyFilters(canvasActive.renderAll.bind(canvasActive));
            save();
            //savetmpdesign();
        }
    }

    /**
     * Load tmp design after load product changed
     * 
     * @return void
     */
    function loadtmpdesigns()
    {
        pos = 0;
        canvasdesignlist.forEach(canvasdesign => {
            if(canvasdesign.design != null)
            {
                canvaslist[pos].loadFromDatalessJSON(canvasdesign.design, canvaslist[pos].renderAll.bind(canvaslist[pos]), function(o, object)
                {
                    if (o.type === 'image')
                    {
                        object.type = "image";
                        if (o.filters != undefined || object.filters.length > 0)
                        {
                            object.applyFilters(function()
                            {
                                canvaslist[pos].renderAll();
                            });
                        } 
                    }
                    else
                    {
                        canvaslist[pos].renderAll();
                    }

                    object.setControlsVisibility({
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

                    object.customiseCornerIcons({
                        settings: {
                                borderColor: '#4fc1f0',
                                cornerSize: 40,
                                cornerShape: 'circle',
                                cornerBackgroundColor: 'rgba(100,100,100,0)',
                                cornerPadding: 15,
                                hasRotatingPoint: true,
                            },
                            tr: {
                                icon: window.location.origin+ '/img/icon/x.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            bl: {
                                icon: window.location.origin+ '/img/icon/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            br: {
                                icon: window.location.origin+ '/img/icon/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            ml: {
                                icon: window.location.origin+ '/img/icon/left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            mr: {
                                icon: window.location.origin+ '/img/icon/right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            mb: {
                                icon: window.location.origin+ '/img/icon/down.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            mt: {
                                icon: window.location.origin+ '/img/icon/up.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            tl: {
                                icon: window.location.origin+ '/img/icon/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                        }, 
                        /*function()
                        {
                            canvaslist[pos].renderAll();
                        }*/
                    );
                });
            }
            pos++;
        });
        
        //console.log(canvasActive);
        //console.log(canvasActive.getObjects());
        //console.log(canvasActive.getObjects().length);
        //console.log(canvasActive.getObjects().length-1);
        //console.log(canvasActive.item(canvasActive.getObjects().length-1));
        //canvasActive.setActiveObject(canvasActive.getObjects(canvasActive.getObjects().length - 1));
        
    }
    var windowwidth = 0;
    var windowheight = 0;
    var Orientation = "";

    windowheight = screen.availHeight;
    windowwidth = screen.availWidth;
    windowheight = window.innerHeight;
    windowwidth = window.innerWidth;
    windowheight = Math.min(screen.availHeight, window.innerHeight);
    windowwidth = Math.min(screen.availWidth, window.innerWidth);
    
    if (windowheight > windowwidth) 
    {
        Orientation = "PORTRAIT";
    } 
    else 
    {
        Orientation = "LANDSCAPE";
    }

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

        if(windowwidth >= 743 && windowheight >=810)
        {
            /*  #myCarousel{-webkit-transform-origin:0 0;transform-origin:0 0;left:50%;position:fixed;}*/
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
        else if(windowwidth >= 743 && windowheight < 810)
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




    $(function() {
        $(document).ready(function()
        {
            var bar = $('.bar');
            var percent = $('.percent');

            $('form').ajaxForm({
                beforeSend: function() 
                {
                    document.getElementById("uploadprogressbar").style.display = "block";
                    var percentVal = '0%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                uploadProgress: function(event, position, total, percentComplete) {
                    var percentVal = percentComplete + '%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                complete: function(xhr) {
                    //console.log(xhr.responseJSON);
                    clipartuploadedcolorlist = xhr.responseJSON.colorlist;
                    adduploadimg(xhr.responseJSON.clipart_id);    
                    if(isMobile())
                    {
                        document.getElementById("termsOfUse").checked = false;
                        document.getElementById("file").value = "";
                        document.getElementById("upload").style.display = "none";
                        document.getElementById("uploadprogressbar").style.display = "none";
                    }
                    else
                    {
                        document.getElementById("termsOfUseModal").checked = false;
                        document.getElementById("file").value = "";
                        document.getElementById("uploadModal").style.display = "none";
                        document.getElementById("uploadprogressbarModal").style.display = "none";
                    }
                    document.getElementById("termsOfUse").checked = false;
                    document.getElementById("file").value = "";
                    document.getElementById("upload").style.display = "none";
                    document.getElementById("uploadprogressbar").style.display = "none";
                    var percentVal = '0%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                    //alert('File Uploaded Successfully');
                    //window.location.href = "/uplaodclipart";
                }
            });
        }); 
    });





     radiusvalue.value = radius.value;
    spacingvalue.value = spacing.value;
    radiusvalueModal.value = radiusModal.value;
    spacingvalueModal.value = spacingModal.value;

radius.oninput = function() {









    $('#radiusvalue').val(this.value);









    
    var obj = canvasActive.getActiveObject();



    if (obj)



    {







        default_text = obj.getText();



        props = obj.toObject();







        if (this.value == 0)



        {



            this.value = 1;



        }







        delete props['type'];



        props['textAlign'] = 'center';



        props['reverse'] = false;



        props['spacing'] = $('#spacing').val();



        if ($(this).val() > 0)



        {







            props['arcangle'] = Math.abs(this.value);



        } else



        {



            props['arcangle'] = this.value;







        }



        props['type'] = 'curvedText';



        props['id'] = obj.id;



        var textSample = new fabric.CurvedText(default_text, props);



        textSample.setControlsVisibility({



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







        textSample.customiseCornerIcons({



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



        });







        canvasActive.remove(obj);



        canvasActive.add(textSample).renderAll();



        canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));



    }



    canvasActive.renderAll();



}









radiusModal.oninput = function() {









    $('#radiusvalueModal').val(this.value);









    var obj = canvasActive.getActiveObject();



    if (obj)



    {



        default_text = obj.getText();



        props = obj.toObject();







        if (this.value == 0)



        {



            this.value = 1;



        }







        delete props['type'];



        props['textAlign'] = 'center';



        props['reverse'] = false;



        props['spacing'] = $('#spacingModal').val();



        if ($(this).val() > 0)



        {







            props['arcangle'] = Math.abs(this.value);



        } else



        {



            props['arcangle'] = this.value;







        }



        props['type'] = 'curvedText';



        props['id'] = obj.id;



        var textSample = new fabric.CurvedText(default_text, props);



        textSample.setControlsVisibility({



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







        textSample.customiseCornerIcons({



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



        });







        canvasActive.remove(obj);



        canvasActive.add(textSample).renderAll();



        canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));



    }



    canvasActive.renderAll();



}









spacing.oninput = function() {



    $('#spacingvalue').val(this.value);




    var obj = canvasActive.getActiveObject();



    if (obj)



    {



        default_text = obj.getText();



        props = obj.toObject();









        delete props['type'];



        props['textAlign'] = 'center';



        props['spacing'] = this.value;



        props['arcangle'] = $('#radius').val();



        props['reverse'] = false;



        props['type'] = 'curvedText';



        props['id'] = obj.id;



        var textSample = new fabric.CurvedText(default_text, props);



        textSample.setControlsVisibility({



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







        textSample.customiseCornerIcons({



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



        });









        canvasActive.remove(obj);



        canvasActive.add(textSample).renderAll();



        canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));



    }



    canvasActive.renderAll();



}







spacingModal.oninput = function() {



    $('#spacingvalueModal').val(this.value);



    var obj = canvasActive.getActiveObject();



    if (obj)



    {



        default_text = obj.getText();



        props = obj.toObject();









        delete props['type'];



        props['textAlign'] = 'center';



        props['spacing'] = this.value;



        props['arcangle'] = $('#radiusModal').val();



        props['reverse'] = false;



        props['type'] = 'curvedText';



        props['id'] = obj.id;



        var textSample = new fabric.CurvedText(default_text, props);



        textSample.setControlsVisibility({



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







        textSample.customiseCornerIcons({



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



        });







        canvasActive.remove(obj);



        canvasActive.add(textSample).renderAll();



        canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));



    }



    canvasActive.renderAll();



}









$("input[type=number]").bind('keyup input', function()



    {



        if ($(this).attr("id") == "radiusvalue" || $(this).attr("id") == "spacingvalue" || $(this).attr("id") == "radiusvalueModal" || $(this).attr("id") == "spacingvalueModal")



        {




            var obj = canvasActive.getActiveObject();



            if (obj)



            {



                default_text = obj.getText();



                props = obj.toObject();







                if ($(this).attr("id") == "radiusvalue")



                {









                    delete props['type'];



                    props['textAlign'] = 'center';



                    if ($(this).val() == 0)



                    {



                        props['arcangle'] = 1;



                        $('#radius').val(1);



                    } else



                    {



                        props['arcangle'] = $(this).val();



                        $('#radius').val(this.value);



                    }



                    props['spacing'] = $('#spacing').val();



                    props['reverse'] = false;



                    props['type'] = 'curvedText';



                    props['id'] = obj.id;



                    var textSample = new fabric.CurvedText(default_text, props);







                    textSample.setControlsVisibility({



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







                    textSample.customiseCornerIcons({



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



                    });









                } else if ($(this).attr("id") == "radiusvalueModal")



                {









                    delete props['type'];



                    props['textAlign'] = 'center';



                    if ($(this).val() == 0)



                    {



                        props['arcangle'] = 1;



                        $('#radiusModal').val(1);



                    } else



                    {



                        props['arcangle'] = $(this).val();



                        $('#radiusModal').val(this.value);



                    }



                    props['spacing'] = $('#spacing').val();



                    props['reverse'] = false;



                    props['type'] = 'curvedText';



                    props['id'] = obj.id;



                    var textSample = new fabric.CurvedText(default_text, props);



                    textSample.setControlsVisibility({



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







                    textSample.customiseCornerIcons({



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



                    });









                } else if ($(this).attr("id") == "spacingvalue")



                {







                    delete props['type'];



                    props['textAlign'] = 'center';



                    props['spacing'] = this.value;



                    props['arcangle'] = $('#radius').val();



                    props['reverse'] = false;



                    props['type'] = 'curvedText';



                    props['id'] = obj.id;



                    var textSample = new fabric.CurvedText(default_text, props);



                    textSample.setControlsVisibility({



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







                    textSample.customiseCornerIcons({



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



                    });









                    $('#spacing').val(this.value);



                } else if ($(this).attr("id") == "spacingvalueModal")



                {







                    delete props['type'];



                    props['textAlign'] = 'center';



                    props['spacing'] = this.value;



                    props['arcangle'] = $('#radius').val();



                    props['reverse'] = false;



                    props['type'] = 'curvedText';



                    props['id'] = obj.id;



                    var textSample = new fabric.CurvedText(default_text, props);



                    textSample.setControlsVisibility({



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







                    textSample.customiseCornerIcons({



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



                    });









                    $('#spacingModal').val(this.value);



                }







                save();







                canvasActive.remove(obj);



                canvasActive.add(textSample).renderAll();



                canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));



            }



            canvasActive.renderAll();



            // OpenClose("carousel_area","work_area",'inputvaluekeyup');



        }



    });



    /**
    * Put the check mark in the active color circle
    * 
    * @return void
    */
    function selectcolors()
    {
        var listcircles = document.getElementsByClassName('block');
        for (var i = 0; i < listcircles.length; i++)
        {
            if (listcircles[i].id.indexOf('artcolor') != -1) 
            {
                listcircles[i].classList.remove("animate");
                listcircles[i].classList.remove("transparent2");
                listcircles[i].style.border = "1px solid #eee";
            }
        }
    }

    /**
    * zoom more the active design
    * 
    * @return void
    */
    $('#zoomin').click(function() 
    {
        var valueadd = 0.5;
        if (isMobile()) 
        {
            valueadd = 1;
        }
        var zoomvalue = Number(scale) + valueadd;
        document.getElementById(canvasActive.side +  'CanvasShirt').style.transform = "scale(" + zoomvalue + ")";
        //zoom = true;
    });


    /**
    * zoom less the active design
    * 
    * @return void
    */
    $('#zoomout').click(function() 
    {
        var zoomvalue = 1;
        document.getElementById(canvasActive.side +  'CanvasShirt').style.transform = "scale(" + zoomvalue + ")";
        //zoom = false;
    });

    /**
    * Save the action in the active design
    * 
    * @return void
    */
    function save()
    {
        $('#redo').prop('disabled', true);
        if (canvasActive.state)
        {
            canvasActive.undo.push(canvasActive.state);
            $('#undo').prop('disabled', false);
        }
        canvasActive.state = JSON.stringify(canvasActive.toDatalessJSON());
    }

    /**
     * Save the current state in the redo stack, reset to a state in the undo stack, and enable the buttons accordingly.
     * Or, do the opposite (redo vs. undo)
     * @param playStack which stack to get the last state from and to then render the canvas as
     * @param saveStack which stack to push current state into
     * @param buttonsOn jQuery selector. Enable these buttons.
     * @param buttonsOff jQuery selector. Disable these buttons.
     */
    function replay(playStack, saveStack, buttonsOn, buttonsOff) 
    {
        saveStack.push(canvasActive.state);
        canvasActive.state = playStack.pop();
        var on = $(buttonsOn);
        var off = $(buttonsOff);
        // turn both buttons off for the moment to prevent rapid clicking
        on.prop('disabled', true);
        off.prop('disabled', true);
        canvasActive.clear();
        canvasActive.loadFromDatalessJSON(canvasActive.state, canvasActive.renderAll.bind(canvasActive), function(o, object) 
        {
            object.setControlsVisibility({
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

            object.customiseCornerIcons({
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
            on.prop('disabled', false);
            if (playStack.length) 
            {
                off.prop('disabled', false);
            }
        });

    }

    /**
    * Make undo in the active design
    * 
    * @return void
    */
    $('#undo').click(function()
    {
        replay(canvasActive.undo, canvasActive.redo, '#redo', this);
    });


    /**
    * Make redo in the active design
    * 
    * @return void
    */
    $('#redo').click(function()
    {
        replay(canvasActive.redo, canvasActive.undo, '#undo', this);
    });

    /**
    * Make a copy of the object
    * 
    * @return void
    */

    function copyclipart() {
        var copyData = canvasActive.getActiveObject().toObject();
        fabric.util.enlivenObjects([copyData], function(objects) 
        {
            objects.forEach(function(o) 
            {

                if (o.type === 'image')
                        {
                            o.type = "image";
                            if (o.filters != undefined || o.filters.length > 0)
                            {
                                o.applyFilters(function()
                                {
                                    canvasActive.renderAll();
                                });
                            } 
                        }
                        else
                        {
                            canvasActive.renderAll();
                        }
                o.set('top', o.top + 15);
                o.set('left', o.left + 15);
                o.setControlsVisibility({
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

                o.customiseCornerIcons({
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
            });
            canvasActive.add(o);
            });
            save();
            canvasActive.discardActiveObject();
            canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
            canvasActive.renderAll(canvasActive);
        });
    }

    function closemodal(element)
    {
        $('#' + element).modal('hide');
    }

    function showmodal(modalname)
    {
        $('#' + modalname).modal({
            backdrop: 'static',
            keyboard: false
        });
    }

    function showproductview()
    {  
        closemodal('productSectionModal');
        document.getElementById('listproduct').style.display = 'block'; 
        document.getElementById("filters-colum").style.display = 'none';
        document.getElementById("btn-done").style.display = 'none';
        document.getElementById("sort-by").style.display = 'none';
        document.getElementById("data-colum").style.display = 'block';
        document.getElementById('singleproduct').style.display = 'none'; 
        $("#productmodal").modal({
            backdrop: 'static',
            keyboard: false
        });
        $("#productmodal").modal("show");
        showmodal("productmodal");
    }

    function setStroke(element)
    {
        colorChanged = true;
        $(".list-group-item").removeClass("active");
        $(this).addClass("active");
        var object = canvasActive.getActiveObject();
        stroke = element.value;
        if (stroke == 0)
        {
            object.setStrokeWidth(stroke);
            object.setStroke('transparent');
        } 
        else
        {
            object.setStrokeWidth(stroke);
            object.setStroke(object.laststrokecolor);
        }
        if (element.id == "strokewidth")
        {
            document.getElementById('strokewidthvalue').value = stroke;
        } 
        else
        {
            document.getElementById('strokewidthvalueModal').value = stroke;
        }
        canvasActive.renderAll(canvasActive);
        save();
    }

    function ShowSaveShare()
    {
        canvasActive.discardActiveObject();
        savetmpdesign();
        canvasActive.renderAll();
        var num = 0;
        canvaslist.forEach(printarea=>{
            num+= printarea.getObjects().length;
        });
        if (num > 0)
        {
            var saveshareimages = "";
            //initialDesign();     
            document.getElementById('design_name_area_only').style.display = "none";
            document.getElementById("loaderOnly").style.display = "none";
            document.getElementById("loaderEmail").style.display = "none";
            document.getElementById('designNameOnly').value = "";
            document.getElementById('SaveShareModalDiv').style.display = "block";
            canvasdesignlist.forEach(printarea=>
            {
                var scale = 0.25;
                saveshareimages+= '<div class="col-lg-3 col-md-6 col-xs-12 thumbnail2"><div class="product-item" style="background-size: cover; background-position: center center;border: 1px solid;background-image: url('+window.location.origin+'/img/product/'+printarea.productimg+');position: relative;margin: auto;width: 743px;height: 810px; webkit-transform-origin: 0 0; transform-origin: 0 0; -webkit-transform: scale('+scale+') translate(-50%); transform: scale('+scale+') translate(-50%); left: 50%;"><img class="PreviewSave" src="'+printarea.img+'" class="img-responsive" style="position: relative; width: '+printarea.width+'px; height: '+printarea.height+'px; top: '+printarea.top+'px; left:'+printarea.left+'px;"></div></div>';
            });
            document.getElementById("savedDesigns").innerHTML = saveshareimages;
             if (user != '' && user != undefined && user != null)
            {
                document.getElementById('from_email').value = user.email;
            }
            $("#SaveShareModal").modal("show");
        }
        else
        {
            showalert('savesharealert', 'No design to save and share!', 'danger', 'Save & Share');
        }
    }

    function ShowGetPrice()
    { 
        /*
        canvasActive.discardActiveObject();
        savetmpdesign();
        canvasActive.renderAll();
        var num = 0;
        canvaslist.forEach(printarea=>{
            num+= printarea.getObjects().length;
        });
        if (num > 0)
        {
            var saveshareimages = "";
            //initialDesign();     
            document.getElementById('design_name_area_only').style.display = "none";
            document.getElementById("loaderOnly").style.display = "none";
            document.getElementById("loaderEmail").style.display = "none";
            document.getElementById('designNameOnly').value = "";
            document.getElementById('SaveShareModalDiv').style.display = "block";
            canvasdesignlist.forEach(printarea=>
            {
                var scale = 0.25;
                saveshareimages+= '<div class="col-lg-3 col-md-6 col-xs-12 thumbnail2"><div class="product-item" style="background-size: cover; background-position: center center;border: 1px solid;background-image: url('+window.location.origin+'/img/product/'+printarea.productimg+');position: relative;margin: auto;width: 743px;height: 810px; webkit-transform-origin: 0 0; transform-origin: 0 0; -webkit-transform: scale('+scale+') translate(-50%); transform: scale('+scale+') translate(-50%); left: 50%;"><img class="PreviewSave" src="'+printarea.img+'" class="img-responsive" style="position: relative; width: '+printarea.width+'px; height: '+printarea.height+'px; top: '+printarea.top+'px; left:'+printarea.left+'px;"></div></div>';
            });
            document.getElementById("savedDesigns").innerHTML = saveshareimages;
        */
        canvasActive.discardActiveObject();
        savetmpdesign();
        canvasActive.renderAll();
        if (editdesign != null)
        {
            document.getElementById('AddKeepDesign').innerHTML = "Update Cart";
        } 
        else
        {
            document.getElementById('AddKeepDesign').innerHTML = "Add To Cart";
        }

        var num = 0;
        canvaslist.forEach(printarea=>{
            num+= printarea.getObjects().length;
        });

        if (num > 0)
        {
            var getpriceimages = "";
            canvasdesignlist.forEach(printarea=>
            {
                var scale = 0.15;
                getpriceimages+=' <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 thumbnail2"><label for="'+printarea.canvas.name+'colors" id="'+printarea.canvas.name+'colors" name="'+printarea.canvas.name+'colors" style="font-size: 1.1rem;"></label><div style="background-size: cover; background-position: center center;border: 1px solid;background-image: url('+window.location.origin+'/img/product/'+printarea.productimg+');position: relative;margin: auto;width: 743px;height: 810px; webkit-transform-origin: 0 0; transform-origin: 0 0; -webkit-transform: scale('+scale+') translate(-50%); transform: scale('+scale+') translate(-50%); left: 50%;"><img class="PreviewSave" src="'+printarea.img+'" class="img-responsive" style="position: relative; width: '+printarea.width+'px; height: '+printarea.height+'px; top: '+printarea.top+'px; left:'+printarea.left+'px;"></div></div>';
                //getpriceimages+=' <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 thumbnail2"><label for="frontcolos" id="frontcolos" name="frontcolos" style="font-size: 1.1rem;"></label><div id="frontSavedDesingPreview" style="background-repeat: no-repeat; background-size: cover; background-position: center center; border: 1px #000000 solid;"><img id="frontSavePreview" src="" alt="" class="img-responsive"></div></div>';
            });
            document.getElementById("getpriceDesign").innerHTML = getpriceimages;
            setColorsInk();
            //loadCart('Cart-body-section');
            $('#productPicker').modal();
        }
        else
        {
            showalert('getpricealert', 'No design to get price', 'danger', 'Get price');
        }

        /*if (Order._Product_design_list.length == 1)
        {
            if (num > 0)
            {
                getPrice();
                loadCart('Cart-body-section');
                $('#productPicker').modal();
            }
            else
            {
                showalert('getpricealert', 'No design to get price', 'danger', 'Get price');
            }
        } 
        else
        {
            if (Order._Product_design_list[Order._Product_design_list.length - 2]._status != "created")
            {
                getPrice();
                loadCart('Cart-body-section');
                if (num <= 0)
                {
                    document.getElementById('AddKeepDesign').style.display = "none";
                    document.getElementById('finalcheckout').style.display = 'block';
                }
                $('#productPicker').modal();
            } 
            else
            {
                showalert('getpricealert', 'No design to get price', 'danger', 'Get price');
            }
        }*/
    }

    function setColorsInk() 
    {  
        canvaslist.forEach(canvas=>{ 
            var arraycolors = [];
            var arraypersonalizecolors = [];
            if(canvas.getObjects().length > 0)
            {
                var objs = canvas.getObjects();
                    for (var i = 0; i < objs.length; i++) 
                    {
                        if (objs[i].type === "image") 
                        {
                            if (objs[i].id != "" && objs[i].id != null && !Number.isInteger(objs[i].id)) 
                            {
                                if (objs[i].id.indexOf("uploaded") != -1)
                                {
                                    if (objs[i].colorlist != undefined) 
                                    {
                                        if (objs[i].colorlist.length > 8) 
                                        {
                                            arraycolors.push("f");
                                            arraycolors.push("u");
                                            arraycolors.push("l");
                                            arraycolors.push("l");
                                            arraycolors.push("c");
                                            arraycolors.push("o");
                                            arraycolors.push("l");
                                            arraycolors.push("o");
                                            arraycolors.push("r");
                                        } 
                                        else 
                                        {
                                            for (var j = 0; j < objs[i].colorlist.length; j++) {
                                            var color = rgb2hex(objs[i].colorlist[j]);
                                            if (!validate_element(color, arraycolors)) {
                                                arraycolors.push(color);
                                            }
                                            }
                                        }
                                    }
                                    else 
                                    {
                                        arraycolors.push("k");
                                        arraycolors.push("a");
                                        arraycolors.push("t");
                                        arraycolors.push("i");
                                        arraycolors.push("e");
                                    }
                                }
                            } 
                            /*else if (objs[i]._element.src.includes('Patriotic/Police')) 
                            {
                                arraycolors.push("#ffffff");
                                arraycolors.push("#0d45e4");
                            } */
                            else 
                            {
                                if (objs[i].filters.length > 0) 
                                {
                                    var color = rgb2hex(objs[i].filters[objs[i].filters.length - 1].color);
                                    if (!validate_element(color, arraycolors)) 
                                    {
                                        arraycolors.push(color);
                                    }
                                } 
                                else if (!validate_element("#000000", arraycolors)) 
                                {
                                    arraycolors.push("#000000");
                                }
                            }
                        } 
                        else if (objs[i].type === "text" || objs[i].type === "curvedText" || objs[i].type === "i-text") 
                        {
                            if (objs[i].fill != null && objs[i].fill.length > 0) {
                            var color = rgb2hex(objs[i].fill);
                            if (!validate_element(color, arraycolors)) {
                                arraycolors.push(color);
                            }
                            } else if (!validate_element("#000000", arraycolors)) {
                            arraycolors.push("#000000");
                            }
                            if (objs[i].stroke != null && objs[i].stroke.length > 0) {
                            var color = rgb2hex(objs[i].stroke);
                            if (!validate_element(color, arraycolors)) {
                                arraycolors.push(color);
                            }
                            }
                            if (objs[i].type === "i-text") {
                            if (objs[i].fill != null && objs[i].fill.length > 0) {
                                var color = rgb2hex(objs[i].fill);
                                if (!validate_element_personalize(color, arraypersonalizecolors)) {
                                var colorelement = {
                                    type: "",
                                    color: ""
                                };
                                colorelement.type = "fill" + objs[i].id;
                                colorelement.color = color;
                                arraypersonalizecolors.push(colorelement);
                                }
                            } else if (!validate_element_personalize("#000000", arraypersonalizecolors)) {
                                var colorelement = {
                                type: "",
                                color: ""
                                };
                                colorelement.type = "fill" + objs[i].id;
                                colorelement.color = "#000000";
                                arraypersonalizecolors.push(colorelement);
                                //arraypersonalizecolors.push("#000000");
                            }
                            if (objs[i].stroke != null && objs[i].stroke.length > 0) {
                                var color = rgb2hex(objs[i].stroke);
                                if (!validate_element_personalize(color, arraypersonalizecolors)) {
                                //arraypersonalizecolors.push(color);
                                var colorelement = {
                                    type: "",
                                    color: ""
                                };
                                colorelement.type = "stroke" + objs[i].id;
                                colorelement.color = "#000000";
                                arraypersonalizecolors.push(colorelement);
                                }
                            }
                            }
                        } else 
                        {
                            objlist = objs[i]._objects;
                            var layers = [];
                            for (var j = 0; j < objlist.length; j++) {
                            if (!validate_layer(objlist[j], layers)) {
                                layers.push(objlist[j]);
                                var color = objlist[j].fill;
                                if (!validate_element(color, arraycolors)) {
                                arraycolors.push(color);
                                }
                            }
                            }
                        }
                    }
                //Order._Product_design_list[position]._design._sideList[0]._ColorList = arraycolors;
                //Order._Product_design_list[position]._design._sideList[0]._ColorPersonalizeList = arraypersonalizecolors;
                if (arraycolors.length > 8) 
                {
                    var script = "Ink Color: full color";
                } 
                else 
                {
                    var script = "Ink Color:" + arraycolors.length;
                }
                document.getElementById(canvas.name+"colors").innerHTML = script; 
            }
        });
        
    }


    function validate_element(element, arraycolors) {
    if (arraycolors.length > 0) {
      for (var i = 0; i < arraycolors.length; i++) {
        if (arraycolors[i] === element) {
          return true;
        }
      }
      return false;
    } else {
      return false;
    }
  }
  
  function validate_element_personalize(element, arraycolors) {
    if (arraycolors.length > 0) {
      for (var i = 0; i < arraycolors.length; i++) {
        if (arraycolors[i].color === element) {
          return true;
        }
      }
      return false;
    } else {
      return false;
    }
  }
  
  function validate_layer(element, arraycolors) {
    if (arraycolors.length > 0) {
      for (var i = 0; i < arraycolors.length; i++) {
        if (arraycolors[i].id.split(".")[0] === element.id.split(".")[0]) {
          return true;
        }
      }
      return false;
    } else {
      return false;
    }
  }
  //Function to convert hex format to a rgb color
  function rgb2hex(rgb) {
    if (rgb != null) {
      value = rgb;
      rgb = rgb.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i);
      if ((rgb && rgb.length === 4)) {
        return "#" + ("0" + parseInt(rgb[1], 10).toString(16)).slice(-2) + ("0" + parseInt(rgb[2], 10).toString(16)).slice(-2) + ("0" + parseInt(rgb[3], 10).toString(16)).slice(-2);
      } else {
        return value;
      }
    } else {
      return "";
    }
  }

    function alphanumeric_only(event)
    {
        var keycode=event.keyCode?event.keyCode:event.which;
        if (/*(keycode == 32) || */(keycode >= 47 && keycode <= 57) || (keycode >= 65 && keycode <= 90) || (keycode >= 97 && keycode <= 122)) 
        {
            return true;
        }
        else 
        {
            showalert('nospecialcharapters','Sorry You can not insert Special Character','danger','No Special Character');
            return false;
        }
        return true;
    }

    function ValidateEmail(inputText) 
    {
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (inputText.match(mailformat)) 
        {
            return true;
        }
        else 
        {
            return false;
        }
    }

    function SaveDesignNameWindow(value) 
    {
        switch (value) 
        {
            case 'AddKeepDesign':
                if (Order._Product_design_list[position].numshirts() < Order._Product_design_list[position]._Product.Min_Quantity) 
                {
                    showalert('minimunalert', 'The minimun quantity requiered for this product is 6', 'danger', 'Attencion');
                } 
                else 
                {
                    setDesignName();
                }
                break;
            case 'continuedesign':
                if (Order._Product_design_list[position]._status == 'created') 
                {
                    for (var i = 0; i < Order._Product_design_list[position]._sizeList.length; i++) 
                    {
                        Order._Product_design_list[position]._sizeList[i]._quantity = 0;
                    }
                    Order._Product_design_list[position]._num_shirts = 0;
                    Order._Product_design_list[position]._price_per_shirt = 0;
                    Order._Product_design_list[position]._total = 0;
                    buildcart("Cart-Body");
                    buildcart('Cart-body-section');
                }
                $('#productPicker').modal('hide');
                break;
            case 'SaveContinue':
                if (editdesign != null) 
                {
                    Order._Product_design_list[position]._design._design_name = Order._Product_design_list[position]._design._design_name.split("_")[1];
                    AddKeepDesign();
                } 
                else 
                {
                if (document.getElementById("designName").value != "" && document.getElementById("designemail").value != "" && ValidateEmail(document.getElementById("designemail").value)) {
                    if (document.getElementById("designName").value.split(" ").length > 1) {
                    showalert('Message15', 'Please enter a Design Name without space!', 'danger', 'Attencion!');
                    } else {
                    var exists = false;
                    if (Order._Product_design_list.length > 1) {
                        for (var i = 0; i < Order._Product_design_list.length - 1; i++) {
                        var design_name = Order._Product_design_list[i]._design._design_name.split("_");
                        if (design_name[1] == document.getElementById("designName").value) {
                            exists = true;
                        }
                        }
                    }
                    if (exists) {
                        showconfirmalert('Message14', 'You have a previous design saved with this name. Do you want override this design!', 'warning', 'Attencion!');
                    } else {
                        Order._Product_design_list[position]._design._design_name = document.getElementById('designName').value;
                        Order._Customer.email = document.getElementById("designemail").value;
                        document.getElementById('design_name_area').style.display = "none";
                        AddKeepDesign();
                    }
                    }
                } else {
                    if (document.getElementById("designName").value == "" && document.getElementById("designemail").value == "") {
                    showalert('Message13', 'Please enter a Design Name and email to continue!', 'danger', 'Attencion!');
                    } else if (document.getElementById("designName").value == "") {
                    showalert('Message11', 'Please enter a Design Name to continue!', 'danger', 'Attencion!');
                    } else {
                    showalert('Message12', 'The email format is incorrect. Please enter a valid email address to continue!', 'danger', 'Attencion!');
                    }
                }
                }
                break;
            case 'Check-out':
                //Order._Product_design_list[position]._design._design_name = document.getElementById('designName').value;
                Checkout();
                break;
            case 'sendemail':
                if (document.getElementById("designnameshare").value != "" && document.getElementById('to_email').value != "" && document.getElementById('from_email').value != "" && document.getElementById('message').value != "") 
                {
                    var emaildone = true;
                    var emaillist = document.getElementById('to_email').value.split(',');
                    for (var i = 0; i < emaillist.length; i++) 
                    {
                        if (!ValidateEmail(emaillist[i])) 
                        {
                            emaildone = false;
                            break;
                        }
                    }
                    if (emaildone && ValidateEmail(document.getElementById('from_email').value)) 
                    {
                        var exists = false;
                        /*if (Order._Product_design_list.length > 1) 
                        {
                            for (var i = 0; i < Order._Product_design_list.length - 1; i++) 
                            {
                                var design_name = Order._Product_design_list[i]._design._design_name.split("_");
                                if (design_name[1] == document.getElementById("designnameshare").value) 
                                {
                                    exists = true;
                                }
                            }
                        }*/
                        if (exists) 
                        {
                            showconfirmalert('Message14', 'You have a previous design saved with this name. Do you want override this design!', 'warning', 'Attencion!');
                        } 
                        else 
                        {
                            //Order._Product_design_list[position]._design._design_name = document.getElementById('designnameshare').value;
                            //Order._Customer.email = document.getElementById('from_email').value;
                            saveDesign("sendemail");
                        }
                    } 
                    else 
                    {
                        showalert('emailfotmat', 'The email address entered is invalid!', 'danger', 'Email format error');
                    }
                } 
                else 
                {
                    showalert('fillform', 'You must fill all form(s)!', 'danger', 'Attencion!!');
                }
                break;
            case 'save':
                if (user != null) 
                {
                    if (editdesign != null) 
                    {
                        var designname = editdesign.split("_")[1];
                        document.getElementById("designNameOnly").value = designname;
                        SaveDesignNameWindow('SaveContinueOnly');
                    } 
                    else if (edit != null) 
                    {
                        var designname = edit.split("_")[1];
                        document.getElementById("designNameOnly").value = designname;
                        SaveDesignNameWindow('SaveContinueOnly');
                    } 
                    else 
                    {
                        setDesignNameOnly();
                    }
                } 
                else 
                {
                    deselectAllCanvases();
                    closemodal('SaveShareModal');
                    document.getElementById('panellogin').style.display = 'block';
                    document.getElementById('panelnew').style.display = 'block';
                    document.getElementById('panelregister').style.display = 'none';
                    $('#signupModal').modal();
                    //showalert('savemessage', 'Create your account with us and enjoy the benefits of being a member', 'danger', 'You do not have permission to save the design.');
                }
                break;
            case 'SaveContinueOnly':
                if (document.getElementById("designNameOnly").value != "") 
                {
                    var exists = false;
                    /*if (Order._Product_design_list.length > 1) 
                    {
                        for (var i = 0; i < position; i++) 
                        {
                            var design_name = Order._Product_design_list[i]._design._design_name.split("_");
                            if (design_name[1] == document.getElementById("designNameOnly").value) 
                            {
                                exists = true;
                            }
                        }
                    }*/
                    if (exists) 
                    {
                        showconfirmalert('DuplicateDesignNameOnly', 'You have a previous design saved with this name. Do you want override this design!', 'warning', 'Attencion!');
                    } 
                    else 
                    {
                        //Order._Product_design_list[position]._design._design_name = document.getElementById('designNameOnly').value;
                        document.getElementById('designNameOnly').value = "";
                        saveOny = true;
                        saveDesign("saveOnly");
                    }
                } 
                else 
                {
                    showalert('EmptyDesignNameOnly', 'Please enter a Design Name to continue!', 'danger', 'Attencion!');
                }
                break;
            default:
                KeepDesign();
        }
    }

    function saveDesign(from) 
    {
        
        if (textAdded || clipArtAdded || imageUploaded || colorChanged || addingToCart || resized || Checked || productchanged || saveOnly) 
        {
            if (from == "saveOnly") 
                {
                    document.getElementById("loaderOnly").style.display = "block";
                    document.getElementById('design_name_area_only').style.display = "none";
                } 
                else if (from == "sendemail") 
                {
                    document.getElementById("loaderEmail").style.display = "block";
                }
                else 
                {
                    document.getElementById("loader").style.display = "block";
                    document.getElementById('KeepDesign').style.display = "none";
                    document.getElementById('finalcheckout').style.display = "none";
                }
           //alert("Save design: " + textAdded + clipArtAdded + imageUploaded + colorChanged + addingToCart + resized + Checked + productchanged + saveOnly);
            //$('.modal').modal('hide'); // closes all active pop ups.
            //$('.modal-backdrop').remove(); // removes the grey overlay.
            /*if (typeof Order._Customer.Username == 'undefined' || Order._Customer.Username == '' && Order._Customer.email != '') 
            {
                user_email = Order._Customer.email;
            } else {
                user_email = Order._Customer.Username + "/" + Order._Customer.email;
            }
            Order.edit = '';
            if (editdesign != null) {
                Order.edit = editdesign;
            }
            if (edit != null) {
                Order.edit = edit;
            }
            canvaslist.foreach(canvas=>{
                canvas.discardActiveObject();
                var json = JSON.parse(JSON.stringify(front));
                    json.objects.push({
                        width_canvas: canvas.width,
                        height_canvas: canvas.height,
                        width_div: document.getElementById('FrontCanvasShirt').style.width.replace("px", ""),
                        height_div: document.getElementById('frontCanvasShirt').style.height.replace("px", ""),
                        left: document.getElementById('frontcanvas-wrapper').style.left.replace("px", ""),
                        top: document.getElementById('frontcanvas-wrapper').style.top.replace("px", ""),
                        product: product,
                        device: device,
                        user: user,
                        //personalize: Order._Product_design_list[position]._personalize,
                        //personalizetype: Order._Product_design_list[position]._personalizetype,
                    });
                    Order._Product_design_list[position]._design._sideList[0]._json = JSON.stringify(jsonfront);
                    if (canvas.width != 0) {
                        Order._Product_design_list[position]._design._sideList[0]._toDataURL = front.toDataURL('image/png');
                        Order._Product_design_list[position]._design._sideList[0]._svg = front.toSVG();
                    }
                    if (front.getObjects().length > 0) {
                        console.log("Front objects: " + front.getObjects().length);
                        Order._Product_design_list[position]._design._sideList[0]._isempty = false;
                    } else {
                        Order._Product_design_list[position]._design._sideList[0]._isempty = true;
                    }
                    Order._Product_design_list[position]._design._sideList[0]._width_canvas = front.width;
                    Order._Product_design_list[position]._design._sideList[0]._height_canvas = front.height;
                    Order._Product_design_list[position]._design._sideList[0]._width_div = document.getElementById('frontCanvasShirt').style.width.replace("px", "");
                    Order._Product_design_list[position]._design._sideList[0]._height_div = document.getElementById('frontCanvasShirt').style.height.replace("px", "");
                    Order._Product_design_list[position]._design._sideList[0]._border_color_div = 0;
                    Order._Product_design_list[position]._design._sideList[0]._left = document.getElementById('frontcanvas-wrapper').style.left.replace("px", "");
                    Order._Product_design_list[position]._design._sideList[0]._top = document.getElementById('frontcanvas-wrapper').style.top.replace("px", "");
                    Order._Product_design_list[position]._design._sideList[0].border_color_canvas = 0;
                    Order._Product_design_list[position]._design._sideList[0]._design_image = "";
                    Order._Product_design_list[position]._design._sideList[0]._design_product_image = "";
                    newurl = document.getElementById('frontCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('frontCanvasShirt').style.backgroundImage.replace("url", "").length - 2);
                    Order._Product_design_list[position]._design._sideList[0]._product_image = newurl.replace("http://vividcustoms.test/", "");
                    //Order._Product_design_list[position]._design._sideList[0]._product_image = document.getElementById('frontCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('frontCanvasShirt').style.backgroundImage.replace("url", "").length - 2);
            
            });

            textAdded = clipArtAdded = imageUploaded = colorChanged = addingToCart = resized = Checked = productchanged = saveOnly = false;
            Order.Total();
            var jsonOrder = JSON.stringify(Order);
            $.ajax({
                cache: false,
                type: "POST",
                url: window.location.origin + "/savedesign",
                data: {
                Order: jsonOrder,
                position: position,
                },
                beforeSend: function() 
                {
                    if (from == "saveOnly") 
                    {
                        document.getElementById("loaderOnly").style.display = "block";
                        document.getElementById('design_name_area_only').style.display = "none";
                    } 
                    else if (from == "sendemail") 
                    {
                        document.getElementById("loaderEmail").style.display = "block";
                    }
                    else 
                    {
                        document.getElementById("loader").style.display = "block";
                        document.getElementById('KeepDesign').style.display = "none";
                        document.getElementById('finalcheckout').style.display = "none";
                    }
                },
                success: function(data) {
                var savedOrder = JSON.parse(data);
                Order._Product_design_list[position]._design._sideList[0]._design_product_image = savedOrder._Product_design_list[position]._design._sideList[0]._design_product_image;
                Order._Product_design_list[position]._design._sideList[1]._design_product_image = savedOrder._Product_design_list[position]._design._sideList[1]._design_product_image;
                Order._Product_design_list[position]._design._sideList[2]._design_product_image = savedOrder._Product_design_list[position]._design._sideList[2]._design_product_image;
                Order._Product_design_list[position]._design._sideList[3]._design_product_image = savedOrder._Product_design_list[position]._design._sideList[3]._design_product_image;
                Order._Product_design_list[position]._design._sideList[0]._design_image = savedOrder._Product_design_list[position]._design._sideList[0]._design_product_image;
                Order._Product_design_list[position]._design._sideList[1]._design_image = savedOrder._Product_design_list[position]._design._sideList[1]._design_product_image;
                Order._Product_design_list[position]._design._sideList[2]._design_image = savedOrder._Product_design_list[position]._design._sideList[2]._design_product_image;
                Order._Product_design_list[position]._design._sideList[3]._design_image = savedOrder._Product_design_list[position]._design._sideList[3]._design_product_image;
                Order._Product_design_list[position]._design._design_name = savedOrder._Product_design_list[position]._design._design_name;
                Order._Customer.Username = savedOrder._Customer.Username;
                var previousdesigns = document.getElementById("mydesings");
                var option = document.createElement("option");
                option.id = Order._Product_design_list[position]._design._design_name;
                option.value = Order._Product_design_list[position]._design._design_name;
                var design_name = Order._Product_design_list[position]._design._design_name.split("_");
                option.innerHTML = design_name[1];
                previousdesigns.appendChild(option);
                if (from == "sendemail") {
                    Order._Product_design_list[position]._status = "saved";
                    send();
                    document.getElementById("loaderEmail").style.display = "none";
                } else if (from == "saveOnly") {
                    Order._Product_design_list[position]._status = "saved";
                    document.getElementById('loaderOnly').style.display = "none";
                    document.getElementById('SaveShareModalDiv').style.display = "block";
                    closemodal('SaveShareModal');
                    showalert('saveonlyalert', 'Your design was saved successfully!', 'success', 'Save');
                } else if (from == "AddKeepDesign") {
                    Order._Product_design_list[position]._status = "In Cart";
                    loadCart("Cart-Body");
                    loadCart('Cart-body-section');
                    updateOrderSession();
                    document.getElementById("loader").style.display = "none";
                    document.getElementById("product_style_area").style.display = "none";
                    document.getElementById('cart_area').style.display = "block";
                    document.getElementById("KeepDesign").style.display = "inline";
                    document.getElementById("finalcheckout").style.display = "inline";
                } else {
                    if (Order._Product_design_list[position]._Product != null) {
                    Order._Product_design_list[position]._status = "In Cart";
                    }
                    submitForm();
                }
                },
                error: function(error) {
                console.log("error in method saveDesign():");
                console.log(error);
                }
            });
            } else {
            if (from == "sendemail") {
                send();
            }*/
        }
    }

    function login() 
    {
        var token    = $("input[name=_token]").val();
        var email    = $("input[name=user_name]").val();
        var password = $("input[name=pass_word]").val();
        var data = {
            _token:token,
            email:email,
            password:password
        };
        // Ajax Post 
        $.ajax({
            /*type: "post",
            url: window.location.origin + '/logindesignstudio',
            data: data,
            cache: false,*/
            type:'POST',
            dataType: 'json', 
            url: window.location.origin + '/logindesignstudio',
            data: {_token:token,
                    email:email,
                    password:password},
            success: function (data)
            {
                console.log(data);
                console.log('login request sent !');
                console.log('status: ' +data.status);
                console.log('message: ' +data.message);
                if(data.status == "success")
                {
                    user = data.user;
                    //var signup = document.getElementById("signup").style.display = "none";
                    var logout = document.getElementById("logout").style.display = "inline";
                    CloseModal('signupModal');
                    document.getElementById("logoutmobile").style.display = "block";
                    /*Order._Customer = JSON.parse(result);
                    if (Order._Customer == null || Order._Customer.Role == "Customer") 
                    {
                        document.getElementById('saveStoreLI').style.display = "none";
                        document.getElementById('personalizeLI').style.display = "block";
                        document.getElementById('saveTemplateLI').style.display = "none";
                        document.getElementById('your_design').style.display = "block";
                        document.getElementById('saveSectionLI').style.display = "inline";
                        document.getElementById('getPriceBtn').style.display = "inline";
                        document.getElementById('totalPriceLabel').style.display = "inline";
                        document.getElementById('totalPriceh4').style.display = "inline";
                        fillmydesigns();
                    } 
                    else if (Order._Customer.Role == "Store Designer") 
                    {
                        document.getElementById('personalizeLI').style.display = "none";
                        document.getElementById('saveStoreLI').style.display = "block";
                        document.getElementById('saveTemplateLI').style.display = "none";
                        document.getElementById('your_design').style.display = "none";
                        document.getElementById('saveSectionLI').style.display = "none";
                        document.getElementById('getPriceBtn').style.display = "none";
                        document.getElementById('totalPriceLabel').style.display = "none";
                        document.getElementById('totalPriceh4').style.display = "none";
                    } 
                    else 
                    {
                        document.getElementById('personalizeLI').style.display = "none";
                        document.getElementById('saveTemplateLI').style.display = "block";
                        document.getElementById('saveStoreLI').style.display = "none";
                        document.getElementById('your_design').style.display = "none";
                        document.getElementById('saveSectionLI').style.display = "none";
                        document.getElementById('getPriceBtn').style.display = "none";
                        document.getElementById('totalPriceLabel').style.display = "none";
                        document.getElementById('totalPriceh4').style.display = "none";
                    }*/
                }
                else 
                {
                    showalert("loginerror", 'Your Login Name or Password is invalid', 'danger', 'Login Error');
                }
                
            },
            error: function (data)
            {
                console.log(data);
                console.log('Fail to run Login..');
                //alert('Fail to run Login..');
            }
        });
        return false;
        /*var username = document.getElementById('user_name');
        var password = document.getElementById('pass_word');
        var operation = document.getElementById('operationL');
        if (username.value == "" && password.value == "") 
        {
            showalert('fieldsloginempty', "The username and password are empty. Please enter username and password", 'danger', 'Login Error');
        } 
        else if (username.value == "" && password.value != "") 
        {
            showalert('usernameloginempty', "The username is empty. Please enter an username", 'danger', 'Login Error');
        } 
        else if (username.value != "" && password.value == "") 
        {
            showalert('passwoordloginempty', "The password is empty. Please enter a password", 'danger', 'Login Error');
        } 
        else 
        {
            $.ajax({
                cache: false,
                type: "POST",
                url: window.location.origin+"/loginuser",
                data: {
                username: username.value,
                password: password.value,
                operation: operation.value,
                },
                beforeSend: function() {},
                success: function(result) {
                if (IsJsonString(result)) {
                    var signup = document.getElementById("signup").style.display = "none";
                    var logout = document.getElementById("logout").style.display = "inline";
                    CloseModal('signupModal');
                    document.getElementById("logoutmobile").style.display = "block";
                    Order._Customer = JSON.parse(result);
                    if (Order._Customer == null || Order._Customer.Role == "Customer") {
                    document.getElementById('saveStoreLI').style.display = "none";
                    document.getElementById('personalizeLI').style.display = "block";
                    document.getElementById('saveTemplateLI').style.display = "none";
                    document.getElementById('your_design').style.display = "block";
                    document.getElementById('saveSectionLI').style.display = "inline";
                    document.getElementById('getPriceBtn').style.display = "inline";
                    document.getElementById('totalPriceLabel').style.display = "inline";
                    document.getElementById('totalPriceh4').style.display = "inline";
                    fillmydesigns();
                    } else if (Order._Customer.Role == "Store Designer") {
                    document.getElementById('personalizeLI').style.display = "none";
                    document.getElementById('saveStoreLI').style.display = "block";
                    document.getElementById('saveTemplateLI').style.display = "none";
                    document.getElementById('your_design').style.display = "none";
                    document.getElementById('saveSectionLI').style.display = "none";
                    document.getElementById('getPriceBtn').style.display = "none";
                    document.getElementById('totalPriceLabel').style.display = "none";
                    document.getElementById('totalPriceh4').style.display = "none";
                    } else {
                    document.getElementById('personalizeLI').style.display = "none";
                    document.getElementById('saveTemplateLI').style.display = "block";
                    document.getElementById('saveStoreLI').style.display = "none";
                    document.getElementById('your_design').style.display = "none";
                    document.getElementById('saveSectionLI').style.display = "none";
                    document.getElementById('getPriceBtn').style.display = "none";
                    document.getElementById('totalPriceLabel').style.display = "none";
                    document.getElementById('totalPriceh4').style.display = "none";
                    }
                } else {
                    showalert("loginerror", 'Your Login Name or Password is invalid', 'danger', 'Login Error');
                }
                
                },
                error: function(error) {
                console.log("error in method login():");
                console.log(error);
                }
            });
        }*/
    }

    function setDesignNameOnly() 
    {
        document.getElementById('design_name_area_only').style.display = "block";
        document.getElementById('SaveShareModalDiv').style.display = "none";
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