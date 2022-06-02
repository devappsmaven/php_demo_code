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
    <title>Vivid Customs || Mobile Designstudio</title>
    
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
        }

        .ds-logo{
           /* display: -webkit-box;
            display: -ms-flexbox;*/
            display: flex;
           /* -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;*/
            height: 3.5rem;
           /* -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;*/
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

        .ds-work-area{
            background-color: white; 
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1050;
            overflow: scroll;
            min-width: 320px;
            width: 100vw;
            /* height: 100%; */
            /* height: calc(100vh - 120px); */
            -webkit-overflow-scrolling: touch;
            outline: 0;
        }

        .ds-work-area-element-header{
            padding: 15px;
            border-bottom: 1px solid #e5e5e5;
            height: 60px;
            position: fixed;
            z-index: 9;
            top: 0;
            width: 100vw;
            margin-top: 0;
            background-color: white;
        }

        .ds-work-area-element{

        }

        .ds-work-area-element-body{
            padding: 15px;
            margin-top: 45px;
            background-color: white;
        }

        .ds-work-area-edit{
            background-color: white; 
            position: absolute;
            /*top: 0;*/
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1050;
            overflow: scroll;
            min-width: 320px;
            width: 100vw;
            height:auto;
            /* height: 100%; */
            /* height: calc(100vh - 120px); */
            -webkit-overflow-scrolling: touch;
            outline: 0;
            
        }

        .ds-work-area-edit-element{
            padding-bottom: 60px;
        }

        .ds-work-area-edit-element-header{
            padding: 15px;
            border-bottom: 1px solid #e5e5e5; 
            /* height: 60px; */
            /* position: fixed; */
            z-index: 9;
            /* top: 0; */
            width: 100vw;
            /* margin-top: 0; */
            background-color: white;
        }

        .ds-work-area-edit-element-body{
            /*padding: 15px;
            margin-top: 45px;*/
            background-color: white;
            padding-top: 10px;
        }

        .ds-footer{
            background: #ffffff;
            height: 70px;
            margin-bottom: 0px;
            bottom: 0;
            position: absolute;
            min-width: 320px;
            width: 100vw;
            border-top: 1px solid #eee;
        }
        .ds-bottom-main-area{
            padding-top: 5px;
            padding-bottom: 5px;
        }
        .ds-bottom-clipart-main-area{
            padding-top: 5px;
            padding-bottom: 5px;
        }
        .ds-bottom-text-main-area{
            padding-top: 5px;
            padding-bottom: 5px;
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
            text-decoration: none;
        }

        .ds-span {
            font-size: 12px !important;
            color: #000000;
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
            transition: visibility 0s linear 0.33s, opacity 0.33s linear;
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
                position: fixed;
                top: 0;
                right: 12em;
                z-index: 15;
                /* width: 6em; */
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

            

            .uppercase{
                text-transform: uppercase;
                font-weight: bold;
            }

            .visible {
                visibility: visible;
                opacity: 1;
                transition: opacity 2s linear;
            }

            .hidden {
                visibility: hidden;
                opacity: 0;
                transition: visibility 0s 2s, opacity 2s linear;
            }

            .ds-clipart{
                max-width:120px !important;
                max-height:120px !important;
            }

            .ds-template{
                max-width:110px !important;
                max-height:110px !important;
            }
            .block{float:left;border:1px solid #eeeeee;cursor:pointer;border-radius:50%;margin-right:1.7px;width:25px !important;height:25px !important;border: 2px solid #777777 !important; margin-bottom:5px;}
            
            .loader{ position: absolute; top: 0 !important; bottom: 0 !important; left: 0 !important; right: 0 !important; background: url("/img/icon/loading.gif") 50% 50% no-repeat ; z-index: 99; width: 50% !important; height: 50% !important; margin: auto !important;border-radius: 50% !important;}
            .loaderEmail{ position: fixed; top: 0 !important; bottom: 0 !important; left: 0 !important; right: 0 !important; background: url("/img/icon/sendingemail.gif") 50% 50% no-repeat ; z-index: 99; /*width: 50% !important; height: 50% !important; margin: auto !important;border-radius: 50% !important;*/}
            .loaderSave{ position: fixed; top: 0 !important; bottom: 0 !important; left: 0 !important; right: 0 !important; background: url("/img/icon/saving.gif") 50% 50% no-repeat ; z-index: 99; /*width: 50% !important; height: 50% !important; margin: auto !important;border-radius: 50% !important;*/}
            .animate{border: 2px solid rgb(49, 176, 213) !important;}
            .animate:after{content:url('../../img/icon/check.png');margin-left:3px;margin-top:2px;position:absolute;}
            .animate2:after {content: url('../../img/icon/check.png');margin-left: 3px;margin-top: 2px;}
            .transparent:after {content: ""; position: absolute; border-top: 1px solid red; width: 25px; transform: rotate(45deg); transform-origin: 0% 0%; margin-left: 3px; margin-top: 2px;}
            .modal-header-danger {background-color: #a94442;}
            .switch{position:relative;display:inline-block;width:55px;height:24px;}
            .switch input{display:none;}
            .inputslider{padding-right:0px;padding-left:0px;}
            .switch{position:relative;display:inline-block;width:55px;height:24px;}
            .switch input{display:none;}
            .slider{position:absolute;cursor:pointer;top:0;left:0;right:0;bottom:0;background-color:#ccc;-webkit-transition:.4s;transition:.4s;}
            .slider:before{position:absolute;content:"";height:20px;width:20px;left:4px;bottom:2px;background-color:white;-webkit-transition:.3s;transition:.3s;}
            input:checked + .slider{background-color:#2196F3;}
            input:focus + .slider{box-shadow:0 0 1px #2196F3;}
            input:checked + .slider:before{-webkit-transform:translateX(26px);-ms-transform:translateX(26px);transform:translateX(26px);}
            .slider.round{border-radius:34px;}
            .slider.round:before{border-radius:50%;}
            input[type="number"]::-webkit-outer-spin-button,
            input[type="number"]::-webkit-inner-spin-button{appearance:none;margin:0;}
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
            #font_menu_bar, #font_menu_barModal{overflow-y:hidden;height:auto;border-bottom:1px solid #399fd9;background-color:transparent;}
            #font_menu_bar li a{color:#4fc1f0 !important;background-color:transparent;}
            #font_menu_bar li.active a{color:#000000 !important;background-color:transparent !important;}
            #font_menu_body{overflow-y:auto; overflow-x:hidden;}
            .fonts:hover{color:#4fc1f0;}
            .tab-pane{border:none !important;margin-top:0}
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
            .nav{border:none;}
            .nav li{border:none;}
            li.active a{background-color:#cccccc !important;}
            .nav a{color:#ffffff !important;margin:0 !important;padding-top:1vh;padding-bottom:1vh;font-size:12;border:none !important;outline:none;padding:10px 1px;}
            .nav a:hover{background-color:transparent !important;}
            a:hover, a:visited, a:link, a:active{text-decoration:none;}
            .thumbnail2{margin-bottom: 70px; height: 20em;}
            .form-control2{border:1px solid #b7b7b7;border-radius:3px;display:block;height:2.3rem;margin-bottom:.5rem;text-align:center;width:5rem;}
            @media (min-width:992px) and (max-width:1199px)
            {
                .SaveDesign{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.15) translate(-50%);transform:scale(0.15) translate(-50%);left:50%;}
                #col10header, #col10body{width:1000px !important;margin-right:auto;margin-left:auto;}
                #myCarouselIndicators{bottom:0px;display:block;}
                .hover2{width:160px;height:auto;padding:5px;}
                #leftcolos, #backcolos{margin-top:0px;margin-bottom:0px;}
                #rightcolos, #frontcolos{margin-top:0px;margin-bottom:0px;}
                #productdiv{width: 80vw;height: 810px; margin: auto; padding: 5px;}
            }
            @media (min-width:768px) and (max-width:991px){.SaveDesign{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.1) translate(-50%);transform:scale(0.1) translate(-50%);left:50%;}
            
            #myCarouselIndicators{bottom:50px;display:none;}
            .hover2{width:140px;height:auto;padding:5px;}
            #leftcolos, #backcolos{margin-top:0px;margin-bottom:0px;}
            #rightcolos, #frontcolos{margin-top:0px;margin-bottom:0px;}
            #productdiv{width: 95vw;height: 95vh; margin: auto; padding: 5px;}
            }
            @media (max-width:767px){.SaveDesign{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.1) translate(-50%);transform:scale(0.1) translate(-50%);left:50%;}
            #myCarouselIndicators{bottom:40px;display:none;}
            .left{margin-left:45px !important;}
            .right{margin-right:45px !important;}
            .hover2{width:140px;height:auto;padding:5px;}
            #leftcolos, #backcolos{margin-top:20px;margin-bottom:0px;}
            #rightcolos, #frontcolos{margin-top:0px;margin-bottom:0px;}
            
            #productdiv{width: 95vw;height: 95vh; margin: auto; padding: 5px;}
            }
            @media (max-width:480px){.SaveDesign{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.1) translate(-50%);transform:scale(0.1) translate(-50%);left:50%;}
            #myCarouselIndicators{bottom:30px;display:none;}
            .left{margin-left:45px !important;}
            .right{margin-right:45px !important;}
            .hover2{width:120px;height:auto;padding:5px;}
            #leftcolos, #backcolos{margin-top:20px;margin-bottom:0px;}
            #rightcolos, #frontcolos{margin-top:0px;margin-bottom:0px;}
            
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
            #textareabtn{display:block;}
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
            #textareabtn{display:block;}
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
            #textareabtn{display:block;}
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
            #textareabtn{display:block;}
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
            #textareabtn{display:block;}
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
            #textareabtn{display:block;}
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
            #textareabtn{display:block;}
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
                #textareabtn{display:block;}
                #myCarousel{-webkit-transform-origin:0 0;transform-origin:0 0;left:50%;position:fixed;display:none;}
            }
            
    </style>
</head>

<body>
    <div id="loader" class="loader" style="display: block;">
    </div>
    <div class="page"  id="app">
        <div class="ds-work-area" id="ds-work-area" style="display: none;">
            <div class="ds-work-area-element" id="ds-div-product">
                <div class="ds-work-area-element-header">
                    <button type="button" class="close"  onclick="hidediv('ds-div-product');">&times;</button>
                    <h5 class="modal-title uppercase">Products</h5>
                </div>
                <div class="ds-work-area-element-body">
                    <div id="productsection">
                            <div class="panel panel-info">
                                <div class="panel-body">
                                        <!--START PRODUCT DESCRIPTION-->
                                    <div class="row">
                                        <div class="col-xs-7 col-sm-6">
                                            <h5 id="product_name">{{$product->parent->name}}</h5>
                                            <div id="description_label">
                                                <p><strong>Brand:</strong> {{$product->brand}} </p>
                                                <p><strong>Size:</strong> YXS-5XL  <a href="javascript:void(0)" id="btnmodal" data-toggle="modal" data-target="#sizechartmodal"> size chart</a></p>
                                                <p><strong>Fabric:</strong> {{$product->fabric}}</p>
                                                <p><a href="#productlongdescription" data-toggle="collapse" id="more-details" class="collapsestart" onclick="moreless(this)">
                                                    More Details
                                                </a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="productlongdescription" class="collapse">
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
                                            <div id="child_color_minimum_{{$color->id}}" class="block color-{{$color->id}} {{$color->id == $product->color->id ? 'animate' : ''}}" title="{{$color->name}}" style="border-radius: 50%; background-color: {{$color->hex}}; width: 25px; height: 25px; border: 0px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px;" onclick="setcanvasproperties('{{$color->pivot->childproduct_id}}'); setactivecolor(this);"></div>    
                                        @endforeach
                                    </div>
                                    <br>
                                    <div class="row" style="width: 100%; margin: 0 auto;" id="child_product_color_div6">Quantity 6+<br>
                                        @foreach ($product->parent->colors as $color)
                                            <div id="child_color_minimum_{{$color->id}}" class="block color-{{$color->id}} {{$color->id == $product->color->id ? 'animate' : ''}}" title="{{$color->Name}}" style="border-radius: 50%; background-color: {{$color->hex}}; width: 25px; height: 25px; border: 0px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px;" onclick="setcanvasproperties('{{$color->pivot->childproduct_id}}'); setactivecolor(this);"></div>    
                                        @endforeach
                                    </div>
                                    <hr>
                                    <a type="button" id="changeproductbtn" name="changeproductbtn" style="cursor: pointer;" href="javascript:void(0)" onclick="document.getElementById('changeproductdiv').style.display = 'block'; document.getElementById('productsection').style.display = 'none';/*document.getElementById('listproduct').style.display = 'block'; document.getElementById('singleproduct').style.display = 'none';  document.getElementById('sortby-filter').style.display = 'none'; document.getElementById('results').style.display = 'none';*/ ">
                                        <center>
                                            <span class="" style="color: #ffffff !important; background-color: #32a7e0; padding: 8px 30px; border-radius: 8px; margin-left: auto; margin-right: auto; text-align: center; font-size: 1.8rem;">
                                                Change Product
                                            </span>
                                        </center>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    <productlist2></productlist2>
                </div>
            </div>
            <div class="ds-work-area-element" id="ds-div-addart">
                <div class="ds-work-area-element-header">
                    <button type="button" class="close"  onclick="hidediv('ds-div-addart');">&times;</button>
                    <h5 class="modal-title uppercase">Art Work</h5>
                </div>
                <div class="ds-work-area-element-body">
                    <clipartscomponent2></clipartscomponent2>
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
            </div>
            <div class="ds-work-area-element" id="ds-div-addtext">
                <div class="ds-work-area-element-header">
                    <button type="button" class="close"  onclick="hidediv('ds-div-addtext');">&times;</button>
                    <h5 class="modal-title uppercase">Enter your text:</h5>
                </div>
                <div class="ds-work-area-element-body">
                    <div class="form-group" style="margin-top: 15px;">
                        <textarea class="form-control" rows="5" id="textarea" placeholder="- Enter the text here -"></textarea>
                    </div>
                    <button type="button" class="btn btn-default"  data-dismiss="modal" id="textareabtn" onclick="addtext();" style="float:right;">Add to Design</button>
                </div>
            </div>
            <div class="ds-work-area-element" id="ds-div-addtemplate">
                <div class="ds-work-area-element-header">
                    <button type="button" class="close"  onclick="hidediv('ds-div-addtemplate');">&times;</button>
                    <h5 class="modal-title uppercase">Template</h5>
                </div>
                <div class="ds-work-area-element-body">
                    <templatescomponent2></templatescomponent2>
                </div>
            </div>
            <div class="ds-work-area-element" id="ds-div-textfont">
                <div class="ds-work-area-element-header">
                    <button type="button" class="close"  onclick="hidediv('ds-div-textfont');">&times;</button>
                    <h5 class="modal-title uppercase">Select your font:</h5>
                </div>
                <div class="ds-work-area-element-body">
                    <div id="font_menu">
                        <ul id="font_menu_bar" class="nav nav-tabs">
                            <li class="active col-xs-12" align="center" style="display: block !important; width: 100%;"><a data-toggle="tab" href="#home" class="uppercase">View all fonts</a></li>
                            @foreach ($fontcategories as $fontcategory)   
                                <li style="display: table-column; width: 33%; text-align: center;"><a data-toggle="tab" href="#menu{{$fontcategory->name}}"><font>{{$fontcategory->name}}</font></a></li>
                            @endforeach
                        </ul>
                        <div id="font_menu_body" class="tab-content">
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
            <div class="ds-work-area-element" id="ds-div-productpicker">
                <div class="ds-work-area-element-header">
                    <button type="button" class="close"  onclick="hidediv('ds-div-productpicker');">&times;</button>
                    <h5 class="modal-title uppercase">SAVING DESIGN:</h5>
                </div>
                <div class="ds-work-area-element-body">
                    <div id="loader" class="loader" style="display: none;">SAVING DESIGN</div>
                        <div id="product_style_area" style="display: block;">
                            <div class="col-xs-12">
                                <div class="col-xs-12 text-center" style="/*border: 1px solid #eeeeee*/ border-right: 1px solid #eeeeee;">
                                    <div class="col-xs-12" id="getpriceDesign">
                                       
                                    </div>
                                </div>
                                <div class="col-xs-12">
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
                                <div class="col-xs-12 productsizeseow2">
                                    <div id="infant" class="col-xs-12 sizeinput" style="display: none;">

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
                                    <div id="toddlers" class="col-xs-12 sizeinput" style="display: none; /*float: right;*/">

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
                                    <div id="youth" class="col-xs-12 sizeinput" style="display: none;">

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
                                    <div id="adult" class="col-xs-12 sizeinput" style="display: none;/* float: right;*/">

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
                                    <div class="col-xs-12 productsizeseow2">
                                        <div id="onesize" class="col-xs-12 sizeinput" style="display: none;/* float: right;*/">

                                            <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem;" id="div_ONE_SIZE">
                                                <label for="ONE_SIZE">ONE SIZE</label>
                                                <input type="number" onkeypress="validate(event);" class="form-control2" id="ONE_SIZE" name="ONE_SIZE" oninput="temp(this);">
                                            </div>
                                            <h5 style="margin-top:1px;">ONE SIZE</h5>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 productsizeseow2" id="personalizeresumen">
                                        
                                    </div>
                                </div>
                            </div>
                            <hr align="center" style="margin-bottom: 0px; background-color: #4598ba; height: 2px; border: 0;">
                            <!-- New Testing Start -->
                            <div class="col-xs-12">
                                <span style="color: #000; font-size: 24px; font-weight: 700;">
                                    <center>Your All Inclusive Pricing</center>
                                </span><br>
                                <div class="col-xs-12 col-xs-4 col-xs-4 col-xs-4">
                                    <h4 id="itemPriceLabel" style="margin-top: 2px;"><b>Price per item:</b> <span id="itemPrice" style="color: #5cb85c; font-family: Arial;"></span></h4>
                                </div>
                                <div class="col-xs-12 col-xs-4 col-xs-4 col-xs-4">
                                    <h4 id="numOfShirtsLabel" style="position: relative; margin-top: 2px;"><b>Quantity:</b> <span style='color: #5cb85c; font-family: Arial;'> 0 item(s)</span></h4>
                                </div>
                                <div class="col-xs-12 col-xs-4 col-xs-4 col-xs-4">
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
                                        <div class="col-xs-12">
                                            <div class="row" id="DesignNameDesigns">
                                       
                                            </div>
                                        </div>
                                        <div class="col-xs-12" style="border-left:1px solid #ccc;height:160px">
                                            <div class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="control-label col-xs-12" for="designName">Name</label>
                                                    <div class="col-xs-12">
                                                        <input type="text" class="form-control" id="designName" placeholder="Enter Design Name" name="designName">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-xs-12" for="designemail">E-mail:</label>
                                                    <div class="col-xs-12">
                                                        <input type="email" class="form-control" id="designemail" placeholder="Enter E-mail" name="designemail">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-12">
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
                        <div class="col-xs-12 middlePage" id="cart_area" style="padding-top: 50px;" style="display: none;">
                            <div class="col-xs-12" style=" height: 300px; overflow-y: auto; overflow-x: hidden;">
                                <div class="table-responsive" id="Cart" style="display: none;">
                                    <span class="uppercase">
                                        <h4>Your Cart</h4>
                                        <hr align="center" style="margin-top: 1px; background-color: #4598ba; height: 1px; border: 0;">
                                    </span>
                                    <table class="table table-striped">
                                        <thead id="Cart-Head">
                                            <tr class="col-xs-12">
                                                <th class="col-xs-1">Design</th>
                                                <th class="col-xs-2 visible-lg visible-md"  id="cart_brand">Brand/Style</th>
                                                <th class="col-xs-1 visible-lg visible-md"  id="cart_color">Color</th>
                                                <th class="col-xs-2 visible-lg visible-md"  id="cart_size">Sizes</th>
                                                <th class="col-xs-1">Quantity</th>
                                                <th class="col-xs-2 visible-lg visible-md"  id="cart_price">Price Per Shirt</th>
                                                <th class="col-xs-2">Sub-Total</th>
                                                <th class="col-xs-1"> </th>
                                            </tr>
                                        </thead>
                                        <tbody id="Cart-Body">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="ds-work-area-element" id="ds-div-saveshare">
                <div class="ds-work-area-element-header">
                    <button type="button" class="close"  onclick="hidediv('ds-div-saveshare');">&times;</button>
                    <h5 class="modal-title uppercase">Save & Share:</h5>
                </div>
                <div class="ds-work-area-element-body">
                    <div id="loaderOnly" class="loaderSave" style="display: none;"></div>
                        <div class="middlePage" id="design_name_area_only" style="display: none;">

                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title text-center"><span class="uppercase">Name your design</span></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="col-xs-12">
                                        <div class="col-xs-12">
                                            <div class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="control-label col-xs-2" for="designNameOnly">Name</label>
                                                    <div class="col-xs-10">
                                                        <input type="text" class="form-control" id="designNameOnly" placeholder="Enter Design Name" name="designNameOnly" required onkeypress="return alphanumeric_only(event);">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-offset-2 col-xs-10">
                                                        <button type="saveandcontinueOnly" class="btn btn-default" onclick="SaveDesignNameWindow('SaveContinueOnly');">Save / Continue</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="savesharediv">
                            <div class="panel panel-info">
                                <div class="panel-heading"><center><span class="uppercase">Current design</span></center></div>
                                <div class="panel-body" >
                                    <div class="col-xs-12" id="savedDesigns">
                                    </div>
                                </div>
                            </div>
                            <hr style="margin-bottom: 10px; background-color: #4598ba; height: 2px; border: 0;">
                            <div class="panel panel-info">
                                <div class="col-xs-12">
                                 <div class="col-xs-12">
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
                                    <div class="col-xs-12">
                                    <div class="panel-heading">
                                        <center>
                                            <span class="uppercase">Share your design</span>
                                        </center>
                                    </div>
                                    <div class="panel-body">
                                        <form class="form" id="emailform">
                                            <div class="input-group">
                                                <span class="input-group-addon">Desing Name:</span>
                                                <input id="designnameshare" type="test" class="form-control" name="designnameshare" placeholder="Enter your Design Name" onkeypress="return alphanumeric_only(event);" required>
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <span class="input-group-addon">Email To:</span>
                                                <input id="to_email" type="text" class="form-control" name="to_email" placeholder="Enter your email" required>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-xs-12" style="padding-right: 0px">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Message</span></span>
                                                        <textarea id="message" type="text" class="form-control" name="message" placeholder="Enter your message" required>
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div id="loaderEmail" class="loaderEmail" style="display: none;"></div>
                                            <div class="alert alert-success" id="emailmessage" style="display: none;">
                                                <strong>Email Sent</strong>
                                            </div>
                                            <br>
                                            <center>
                                                <button type="button" name="submit" class="btn btn-primary" onclick="SaveDesignNameWindow('saveasguest');" style="background-color: #399fd9; width: 90%;">
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
            <div class="ds-work-area-element" id="ds-div-signup">
                <div class="ds-work-area-element-header">
                    <button type="button" class="close"  onclick="hidediv('ds-div-signup');">&times;</button>
                    <h5 class="modal-title uppercase">Login/Register:</h5>
                </div>
                <div class="ds-work-area-element-body">
                    <form id="login-form" method="post" onsubmit="return login()" role="form" style="display: block;">
                        <div class="panel panel-info"  id="panellogin">
                            <div class="panel-heading"> <span class="uppercase">RETURNING CUSTOMER </span></div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-xs-2" for="user_name" style="text-align: left;">Username:</label>
                                    <div class="col-xs-12 col-xs-10">
                                        <input type="username" class="form-control" id="user_name" placeholder="Enter Username" name="user_name"><br>
                                    </div>
                                    <!--<small id="passwordHelp" class="form-text text-muted" data-toggle="tooltip" data-placement="top" title="Passwords must be at least 8 characters in length include (lower case letters, upper case letters, number and special characters).">Make sure password meets specifications.</small>-->
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-xs-2" for="pass_word" style="text-align: left;">Password:</label>
                                    <div class="col-xs-12 col-xs-10">
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
                                    <label class="control-label col-xs-12 col-xs-2" for="firstname"  style="text-align: left;"> <span class="visible-lg visible-md">First Name:</span> <span class="visible-sm visible-xs">First Name *</span></label>
                                    <div class="col-xs-12 col-xs-10">
                                        <input type="text" class="form-control" id="firstname" placeholder="Enter first name" name="firstName">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-xs-2" for="lastname"  style="text-align: left;">Last Name:</label>
                                    <div class="col-xs-12 col-xs-10">
                                        <input type="lastname" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastName">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-xs-2" for="username"  style="text-align: left;">Username:</label>
                                    <div class="col-xs-12 col-xs-10">
                                        <input type="username" class="form-control" id="username" placeholder="Enter Username" name="username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-xs-2" for="pwd"  style="text-align: left;">Password:</label>
                                    <div class="col-xs-12 col-xs-10" align="left">
                                        <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
                                        <a href="#passwordrules" class="" data-toggle="collapse">Specifications</a>
                                        <div id="passwordrules" class="collapse">
                                          <p>Passwords must be at least 8 characters.</p>
                                          <p>include (lower case letters, upper case letters, number and special characters)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-xs-2" for="email"  style="text-align: left;">E-mail:</label>
                                    <div class="col-xs-12 col-xs-10">
                                        <input type="email" class="form-control" id="email" placeholder="Enter E-mail" name="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-xs-2" for="email"  style="text-align: left;">Confirm E-mail:</label>
                                    <div class="col-xs-12 col-xs-10">
                                        <input type="email" class="form-control" id="confirmemail" placeholder="Enter Confirmation E-mail" name="confirmemail">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-xs-2" for="phone"  style="text-align: left;">Phone:</label>
                                    <div class="col-xs-12 col-xs-10">
                                        <input type="phone" class="form-control" id="phone" placeholder="Enter Phone" name="phone">
                                    </div>
                                </div>
                                <button type="button" class="btn btn-block" onclick="register();" style="cursor: pointer; text-transform: uppercase; text-decoration: none;font-size: 1em;background-color: #c00;border-color: #c00;color: #fff;font-weight: 500;padding: 10px;width: 100%;text-align: center;">Create Account</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ds-work-area-element" id="ds-div-personalize">
                <div class="ds-work-area-element-header">
                    <button type="button" class="close"  onclick="hidediv('ds-div-personalize');">&times;</button>
                    <h5 class="modal-title uppercase">Personalize:</h5>
                </div>
                <div class="ds-work-area-element-body">
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
            </div>
        </div>
        <div class="ds-work-area-edit" id="ds-work-area-edit" style="display: none;">
            <div class="ds-work-area-edit-element" id="ds-div-artcolor">
                <div class="ds-work-area-edit-element-header">
                    <button type="button" class="close"  onclick="hidediv('ds-div-artcolor');">&times;</button>
                    <h5 class="modal-title uppercase">Select Your Color:</h5>
                </div>
                <div class="ds-work-area-edit-element-body">
                    <div style="cursor:pointer;" id="displaycolor">
                        <div class="col-xs-2">
                            <span class="uppercase">Color: </span>
                        </div>
                        <div class="col-xs-10" >
                            <div id="objectcolors2" name="objectcolors2" style="float:right;"></div>
                        </div>
                    </div>
                    <div id="displaynoeditcolor" style="float:none;">
                        <div>
                            <div class="col-xs-4">
                                <span class="uppercase">COLOR EDIT: </span>
                            </div>
                            <div class="col-xs-8">
                                <span class="uppercase" style="float:right;">NOT AVAILABLE FOR THIS IMAGE </span>
                            </div>
                        </div>
                    </div>
                    <div id="removewhite" style="float:none;">
                        <div class="col-xs-5">
                            <span class="uppercase">REMOVE WHITE: </span>
                        </div>
                        <div class="col-xs-7">
                            <label class="switch" style="float:right;">
                                <input type="checkbox" id="removewhite" onclick="RemoveWhite(this);">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                    <div id="displayfullcolor" style="display:none; float:none">
                        <div>
                            <div class="col-xs-2">
                                <span class="uppercase">Color: </span>
                            </div>
                            <div class="col-xs-10">
                                <span  style="float:right;">FULL COLOR IMAGE</span>
                            </div>
                        </div>
                        <div>
                            <div class="col-xs-4">
                                <span class="uppercase">COLOR EDIT:</span>
                            </div>
                            <div class="col-xs-8">
                                <span  style="float:right;">NOT AVAILABLE FOR THIS IMAGE</span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div id="Artcolorink" name="Artcolorink" style="float:none;">
                        <div id="ArtcolorText" name="ArtcolorText">
                            <div class="col-xs-7">
                                <span  class="uppercase" style="float:left">Selected color name: </span>
                            </div>
                            <div class="col-xs-5">
                                <span class="uppercase" id="Artcolor" name="Artcolor" style="float:right"></span>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="col-xs-12" id="inkcolorlist">
                            <span class="uppercase">Select new color:</span>
                            <div class="col-xs-12">
                                <div class="block transparent" id="artcolortransparent" style="border-radius:  50%;  margin-right: 1.7px; background-color: #ffffff; border:2px solid #eeeeee; cursor:pointer" onclick="document.getElementById('Artcolor').innerHTML = 'Transparent'; changecolor('transparent');">
                                </div>
                                @foreach($inkcolors as $inkcolor)
                                    <div id="artcolor{{$inkcolor->hex}}" class="block color-{{$inkcolor->id}}" title="{{$inkcolor->name}}" style="border-radius:  50%;  margin-right: 1.7px; background-color: {{$inkcolor->hex}}; border:1px solid #eeeeee; cursor:pointer" onclick="document.getElementById('Artcolor').innerHTML = '{{$inkcolor->name}}'; changecolor('{{$inkcolor->hex}}'); ">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="col-xs-12">
                            <div class="col-xs-12" id="checkcolorlegend">
                                <span class="animate2"></span> Indicates a color already in your design
                            </div>
                            <br>
                            <div class="col-xs-12" id="artcolortransparentlegend">
                                <div class="block transparent" style="border-radius: 50%;  margin-right: 1.7px; background-color: #ffffff; border:2px solid #eeeeee; cursor:pointer;">
                                </div> Indicates a color is transparent
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ds-work-area-edit-element" id="ds-div-artlayers">
                <div class="ds-work-area-edit-element-header">
                    <button type="button" class="close"  onclick="hidediv('ds-div-artlayers');">&times;</button>
                    <h5 class="modal-title uppercase">Layers:</h5>
                </div>
                <div class="ds-work-area-edit-element-body">
                    <div class="col-xs-12" style="padding-left: 1px; padding-right: 1px; margin-left:auto; margin-right:auto;">
                        <div class="col-xs-12" style="background-color: #eeeeee; padding: 1px; border-right: solid 4px white;">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" style="padding: 1px; border-right: solid 1px black;" onclick="setlayer('forward');"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-layer-up.png')}}" width="auto" height="20px"></span></div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" style="padding: 1px;" onclick="setlayer('backward');"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-layer-down.png')}}" width="auto" height="20px"></span></div>
                        </div>
                    </div>

                    <div class="col-xs-12" style="padding-left: 1px; padding-right: 1px;">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center"><span>Bring Forward</span></div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center"><span>Send Backward</span></div>
                    </div>
                </div>
            </div>
            <div class="ds-work-area-edit-element" id="ds-div-artresize">
                <div class="ds-work-area-edit-element-header">
                    <button type="button" class="close"  onclick="hidediv('ds-div-artresize');">&times;</button>
                    <h5 class="modal-title uppercase">Resize:</h5>
                </div>
                <div class="ds-work-area-edit-element-body">
                    <center>
                        <i class="fa fa-lock" id="resizeicon" style="font-size:25px;color:#31b0d5; cursor: pointer;" onclick="SetScaleProportional();"></i>
                    </center>
                    <div class="col-xs-12">
                        <div class="col-xs-2 inputslider" align="left"> <span>Width</span> </div>
                        <div class="col-xs-8  inputslider"> <input id="width" type="range" min="1" max="12" name="width" oninput="resize(event);" style="width: 100%;" step="0.1"> </div>
                        <div class="col-xs-2 inputslider" align="right"><input id="widthvalue" type="text" onkeypress="validate(event);" name="widthvalue" min="1" max="12" oninput="resize(event);" step="0.1" style="width: 55px !important;" readonly="true"></div>
                    </div>
                    <br>
                    <br>
                    <div  class="col-xs-12">
                        <div class="col-xs-2 inputslider" align="left"> <span>Height</span> </div>
                        <div class="col-xs-8  inputslider"> <input id="height" type="range" min="1" max="12" name="height" oninput="resize(event);" style="width: 100%;" step="0.1"> </div>
                        <div class="col-xs-2 inputslider" align="right"><input id="heightvalue" type="text" onkeypress="validate(event);" name="heightvalue" min="1" max="12" oninput="resize(event);" step="0.1" style="width: 55px !important;" readonly="true"></div>
                    </div>
                </div>
            </div>
            <div class="ds-work-area-edit-element" id="ds-div-artrotate">
                <div class="ds-work-area-edit-element-header">
                    <button type="button" class="close"  onclick="hidediv('ds-div-artrotate');">&times;</button>
                    <h5 class="modal-title uppercase">Select your rotation effect:</h5>
                </div>
                <div class="ds-work-area-edit-element-body">
                    <div class="col-xs-12">
                        <div class="col-xs-2 inputslider" align="left"> <span>Rotation</span> </div>
                        <div class="col-xs-8  inputslider"> <input id="angleImage" type="range" min="-180" max="180" value="0" name="angleImage" oninput="rotate(event);" style="width: 100%;" step="5"> </div>
                        <div class="col-xs-2 inputslider" align="right"><input id="anglevalueImage" type="text" onkeypress="validate(event);" name="anglevalueImage" min="-180" max="180" value="0" oninput="rotate(event);" step="5" style="width: 55px !important;"></div>
                    </div>
                    <br>
                    <br>
                    <div class="col-xs-12" style="padding-left: 1px; padding-right: 1px; margin-left:auto; margin-right:auto;">
                        <div class="col-xs-4" style="background-color: #eeeeee; padding: 1px; border-right: solid 4px white;">
                            <div class="col-xs-12" align="center" style="padding: 1px; border-right: solid 1px black;" onclick="flipX();"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-flip-across.png')}}" width="22px" height="auto"></span></div>
                        </div>
                        <div class="col-xs-4" style="background-color: #eeeeee; padding: 1px; border-right: solid 4px white;">
                            <div class="col-xs-12" align="center" style="padding: 1px;" onclick="flipY();"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-flip-up.png')}}" width="auto" height="20px"></span></div>
                        </div>
                        <div class="col-xs-4" style="background-color: #eeeeee; padding: 1px;">
                            <div class="col-xs-12" align="center" style="padding: 1px;" onclick="setlayer('center');"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-center.png')}}" width="auto" height="20px"></span></div>
                        </div>
                    </div>

                    <div class="col-xs-12" style="padding-left: 1px; padding-right: 1px;">
                        <div class="col-xs-4" align="center"><span>Flip</span></div>
                        <div class="col-xs-4" align="center"><span>Flop</span></div>
                        <div class="col-xs-4" align="center"><span>Center</span></div>
                    </div>
                </div>
            </div>
            <div class="ds-work-area-edit-element" id="ds-div-artresize">
                <div class="ds-work-area-edit-element-header">
                    <button type="button" class="close"  onclick="hidediv('ds-div-artresize');">&times;</button>
                    <h5 class="modal-title uppercase">Resize:</h5>
                </div>
                <div class="ds-work-area-edit-element-body">
                    
                </div>
            </div>
            
            <div class="ds-work-area-edit-element" id="ds-div-textcolor">
                <div class="ds-work-area-edit-element-header">
                    <button type="button" class="close"  onclick="hidediv('ds-div-textcolor');">&times;</button>
                    <h5 class="modal-title uppercase">Color:</h5>
                </div>
                <div class="ds-work-area-edit-element-body">
                    <h4>Text Color: <label id="Textcolor" name="Textcolor"></label></h4>   
                    <div class="row">
                        <div class="col-xs-12">
                            @foreach($inkcolors as $inkcolor)
                                <div id="textcolorModal{{$inkcolor->hex}}" class="block" title="{{$inkcolor->name}}" style="border-radius:  50%; margin-right: 1.7px; background-color: {{$inkcolor->hex}}; width: 25px; height: 25px; border:1px solid #eeeeee; cursor:pointer" onclick="/*OpenClose('carousel_area','work_area','Textcolor');*/ document.getElementById('Textcolor').innerHTML = '{{$inkcolor->name}}'; changecolorText('{{$inkcolor->hex}}','f');"></div>
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
                                <div id="strokecolorModal{{$inkcolor->hex}}" class="block" title="{{$inkcolor->name}}" style="border-radius:  50%; margin-right: 1.7px; background-color: {{$inkcolor->hex}}; width: 25px; height: 25px; border:1px solid #eeeeee; cursor:pointer" onclick="/*OpenClose('carousel_area','work_area','Textstrokecolor');*/ document.getElementById('Textstrokecolor').innerHTML = '{{$inkcolor->name}}'; changecolorText('{{$inkcolor->hex}}','c');"></div>
                            @endforeach
                        </div>
                    </div>
                    <br>
                    <div class="input-group">
                        <div class="row">
                            <div class="col-xs-3 col-md-3 col-lg-3 col-xl-3" style="white-space: nowrap;">Stroke Size</div>
                            <div class="col-xs-7 col-md-7 col-lg-7 col-xl-7"><input type="range" min="0" max="10" value="0" id="strokewidth" step="1" style="width: 200px;" onchange="setStroke(this);" /></div>
                            <div class="col-xs-2 col-md-2 col-lg-2 col-xl-2"><input min="0" max="10" value="0" id="strokewidthvalue" type="number" onkeypress="validate(event);" name="strokewidthvalue" step="1" style="width: 55px !important; float: left;" oninput="setStroke(this);"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ds-work-area-edit-element" id="ds-div-textlayers">
                <div class="ds-work-area-edit-element-header">
                    <button type="button" class="close"  onclick="hidediv('ds-div-textlayers');">&times;</button>
                    <h5 class="modal-title uppercase">Layers:</h5>
                </div>
                <div class="ds-work-area-edit-element-body">
                    <div class="col-xs-12" style="padding-left: 1px; padding-right: 1px; margin-left:auto; margin-right:auto;">
                        <div class="col-xs-12" style="background-color: #eeeeee; padding: 1px; border-right: solid 4px white;">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" style="padding: 1px; border-right: solid 1px black;" onclick="setlayer('forward');"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-layer-up.png')}}" width="auto" height="20px"></span></div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" style="padding: 1px;" onclick="setlayer('backward');"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-layer-down.png')}}" width="auto" height="20px"></span></div>
                        </div>
                    </div>

                    <div class="col-xs-12" style="padding-left: 1px; padding-right: 1px;">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center"><span>Bring Forward</span></div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center"><span>Send Backward</span></div>
                    </div>
                </div>
            </div>
            <div class="ds-work-area-edit-element" id="ds-div-textrotate">
                <div class="ds-work-area-edit-element-header">
                    <button type="button" class="close"  onclick="hidediv('ds-div-textrotate');">&times;</button>
                    <h5 class="modal-title uppercase">Select your rotation effect:</h5>
                </div>
                <div class="ds-work-area-edit-element-body">
                    <div class="col-xs-12">
                        <div class="col-xs-2 inputslider" align="left"> <span>Rotation</span> </div>
                        <div class="col-xs-8  inputslider"> <input id="angleText" type="range" min="-180" max="180" value="0" name="angleText" oninput="rotate(event);" style="width: 100%;" step="5"> </div>
                        <div class="col-xs-2 inputslider" align="right"><input id="anglevalueText" type="text" onkeypress="validate(event);" name="anglevalueText" min="-180" max="180" value="0" oninput="rotate(event);" step="5" style="width: 55px !important;" readonly="true"></div>
                    </div>
                    <br>
                    <br>
                    <div class="col-xs-12" style="padding-left: 1px; padding-right: 1px; margin-left:auto; margin-right:auto;">
                        <div class="col-xs-4" style="background-color: #eeeeee; padding: 1px; border-right: solid 4px white;">
                            <div class="col-xs-12" align="center" style="padding: 1px; border-right: solid 1px black;" onclick="flipX();"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-flip-across.png')}}" width="22px" height="auto"></span></div>
                        </div>
                        <div class="col-xs-4" style="background-color: #eeeeee; padding: 1px; border-right: solid 4px white;">
                            <div class="col-xs-12" align="center" style="padding: 1px;" onclick="flipY();"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-flip-up.png')}}" width="auto" height="20px"></span></div>
                        </div>
                        <div class="col-xs-4" style="background-color: #eeeeee; padding: 1px;">
                            <div class="col-xs-12" align="center" style="padding: 1px;" onclick="setlayer('center');"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-center.png')}}" width="auto" height="20px"></span></div>
                        </div>
                    </div>
                    <div class="col-xs-12" style="padding-left: 1px; padding-right: 1px;">
                        <div class="col-xs-4" align="center"><span>Flip</span></div>
                        <div class="col-xs-4" align="center"><span>Flop</span></div>
                        <div class="col-xs-4" align="center"><span>Center</span></div>
                    </div>
                </div>
            </div>
            <div class="ds-work-area-edit-element" id="ds-div-texteffect">
                <div class="ds-work-area-edit-element-header">
                    <button type="button" class="close"  onclick="hidediv('ds-div-texteffect');">&times;</button>
                    <h5 class="modal-title uppercase">Text Effects:</h5>
                </div>
                <div class="ds-work-area-edit-element-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-4" align="right"><span class="label label-info" id="straight" style="cursor: pointer; font-size: 14px; font-weight: 500; ">Straight</span></div>
                            <div class="col-xs-4" align="center">
                                <label class="switch">
                                    <input type="checkbox" id="effect">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="col-xs-4" align="left"><span class="label label-default" id="curved" style="cursor: pointer; font-size: 14px; font-weight: 500; ">Curve</span></div>
                        </div>
                    </div>
                    <br>
                    <div id="texteffecsarea" style="display: none;">
                        <div class="col-xs-12">
                            <div class="col-xs-2 inputslider" align="left"> <span style="font-size: 14px;">Font Size</span> </div>
                            <div class="col-xs-8  inputslider"><input id="sizeText" type="range" min="10" max="50" value="50" name="sizeText" onchange="resize(event);" style="width: 100%;/*width: 220px;*/"></div>
                            <div class="col-xs-2 inputslider" align="right"><input class="hidden-md" id="sizeTextvalue" type="text" onkeypress="validate(event);" name="sizeTextvalue" min="10" max="50" value="50" oninput="resize(event);" style="width: 55px !important; /*float: left;*/"></div>
                        </div>
                        <br>
                        <br>
                        <div class="col-xs-12">
                            <div class="col-xs-2 inputslider" align="left"> <span style="font-size: 14px;">Curve</span> </div>
                            <div class="col-xs-8  inputslider"> <input type="range" min="-360" max="360" value="90" id="radius" step="1" style="width: 100%;/*width: 260px;*/" /></div>
                            <div class="col-xs-2 inputslider" align="right"><input min="-360" max="360" value="90" id="radiusvalue" type="text" onkeypress="validate(event);" name="radiusvalue" step="1" style="width: 55px !important;"></div>
                        </div>
                        <br>
                        <br>
                        <div class="col-xs-12">
                            <div class="col-xs-2 inputslider" align="left"> <span style="font-size: 14px;">Spacing</span> </div>
                            <div class="col-xs-8  inputslider"> <input type="range" min="1" max="40" value="5" id="spacing" step="1"  /></div>
                            <div class="col-xs-2 inputslider" align="right"><input min="1" max="40" value="5" id="spacingvalue" type="text" onkeypress="validate(event);" name="spacingvalue" step="1" style="width: 55px !important;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ds-header" id="ds-header">
            <div class="col-xs-4" data-toggle="collapse" data-target="#dsmenu">
                <a href="javascript:void(0)">
                    <img src="{{asset('img/logo/icon.png')}}" id="logo" style="width: 4em;">
                </a>
            </div>            
            <div class="col-xs-8">
                <div class="row">
                    <div class="col-xs-3" style=" padding-right: 5px; padding-left: 5px; border-left: 1px solid #eee; border-right: 1px solid #eee;">
                        <center>
                            <span style="cursor: pointer !important;" onclick="ShowYourDesign();return false;">
                                <img src="{{asset('img/icon/your-design-mobile.png')}}" class="icon-size" id="getPriceBtn">
                            </span>
                            <br>
                            <span style="font-size: 12px;">Design</span>
                        </center>
                    </div>
                    <div class="col-xs-3" style=" padding-right: 5px; padding-left: 5px; border-right: 1px solid #eee; border-right: 1px solid #eee;">
                            <center>
                                <span id="directcheckout" onclick="deselectAllCanvases(); ShowSaveShare();return false;">
                            <img src="{{asset('img/icon/save.png')}}" class="icon-size">
                        </span>
                        <br>
                        <span style="font-size: 12px;">Save</span>
                    </center>
                    </div>
                    <div class="col-xs-3" style=" padding-right: 5px; padding-left: 5px; border-right: 1px solid #eee; border-right: 1px solid #eee;">
                            <center>
                                <span id="directcheckout" onclick="SaveDesignNameWindow('Check-out');">
                            <img src="{{asset('img/icon/cart.png')}}" class="icon-size">
                        </span>
                        <br>
                        <span style="font-size: 12px;">Cart</span>
                    </center>
                    </div>
                    <div class="col-xs-3" style=" padding-right: 5px; padding-left: 5px; border-left: 1px solid #eee; border-right: 1px solid #eee;">
                            <center>
                                <span style="cursor: pointer !important;" onclick=" ShowGetPrice();">
                            <img src="{{asset('img/icon/money.png')}}" class="icon-size" id="getPriceBtn">
                        </span>
                        <br>
                        <span style="font-size: 12px;">Price</span>
                    </center>
                    </div>
                </div>
            </div>
        </div>
        <div class="ds-content" id="ds-content">
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
        <div class="ds-footer" id="ds-footer">
            <center>
                <div class="ds-bottom-main-area" id="ds-bottom-main-area">
                    <div class="ds-bottom-menu-element"  style="cursor:pointer" onclick="showproductview();showdiv('ds-div-product');">
                        <center>
                            <a class="ds-a"  href="javascript:void(0)">
                                <img class="ds-img" id="change_item" src="{{asset('img/icon/product.png')}}">
                                <br>
                                <span class="ds-span">Products</span>
                            </a>
                        </center>
                    </div>
                    <div class="ds-bottom-menu-element" style="cursor:pointer" onclick="/*document.getElementById('ds-work-area').style.display = 'block';deselectAllCanvases(); document.getElementById('editArt').style.display = 'none';  document.getElementById('newArt').style.display = 'block';*/ document.getElementById('div-clipartsubcategories').style.display = 'none'; document.getElementById('li-subcategories').style.display = 'none'; document.getElementById('div-clipartcategories').style.display = 'block'; document.getElementById('li-start').style.display = 'inline'; document.getElementById('li-categories').style.display = 'none'; document.getElementById('div-cliparts').style.display = 'none'; document.getElementById('searchclipart').innerHTML = ''; showdiv('ds-div-addart');">
                        <center>
                            <a class="ds-a"  href="javascript:void(0)">
                                <img class="ds-img" id="add_art" src="{{asset('img/icon/add-art.png')}}">
                                <br>
                                <span class="ds-span">Add Art</span>
                            </a>
                        </center>
                    </div>
                    <div class="ds-bottom-menu-element" style="cursor:pointer" onclick="showdiv('ds-div-addtext');">
                        <center>
                            <a class="ds-a"  href="javascript:void(0)">
                                <img class="ds-img" id="add_text" src="{{asset('img/icon/add-text.png')}}" >
                                <br>
                                <span class="ds-span">Add Text</span>
                            </a>
                        </center>
                    </div>
                    <div class="ds-bottom-menu-element" style="cursor:pointer" onclick="showdiv('ds-div-addtemplate');">
                        <center>
                            <a class="ds-a"   href="javascript:void(0)">
                                <img class="ds-img" id="add_template" src="{{asset('img/icon/templates.png')}}">
                                <br>
                                <span class="ds-span">Templates</span>
                            </a>
                        </center>
                    </div>
                    <div class="ds-bottom-menu-element"  style="cursor:pointer" onclick="showdiv('ds-div-personalize');">
                        <center>
                            <a class="ds-a"  href="javascript:void(0)">
                                <img class="ds-img" id="personalize" src="{{asset('img/icon/personalize.png')}}">
                                <br>
                                <span class="ds-span">Personalize</span>
                            </a>
                        </center>
                    </div>
                </div>
                <div class="ds-bottom-clipart-main-area" id="ds-bottom-clipart-main-area"  style="display: none;">
                    <div class="ds-bottom-menu-element"  style="cursor:pointer; width: 25vw;" onclick="showdivedit('ds-div-artcolor');">
                        <center>
                            <a class="ds-a"  href="javascript:void(0)">
                                <img class="ds-img" id="artcolor" src="{{asset('img/icon/color.png')}}">
                                <br>
                                <span class="ds-span">Color</span>
                            </a>
                        </center>
                    </div>
                    <div class="ds-bottom-menu-element"  style="cursor:pointer; width: 25vw;" onclick="showdivedit('ds-div-artlayers');">
                        <center>
                            <a class="ds-a"  href="javascript:void(0)">
                                <img class="ds-img" id="artlayers" src="{{asset('img/icon/layers.png')}}">
                                <br>
                                <span class="ds-span">Layers</span>
                            </a>
                        </center>
                    </div>
                    <div class="ds-bottom-menu-element"  style="cursor:pointer; width: 25vw;" onclick="showdivedit('ds-div-artresize');">
                        <center>
                            <a class="ds-a"  href="javascript:void(0)">
                                <img class="ds-img" id="artresize" src="{{asset('img/icon/resize.png')}}">
                                <br>
                                <span class="ds-span">Resize</span>
                            </a>
                        </center>
                    </div>
                    <div class="ds-bottom-menu-element"  style="cursor:pointer; width: 25vw;" onclick="showdivedit('ds-div-artrotate');">
                        <center>
                            <a class="ds-a"  href="javascript:void(0)">
                                <img class="ds-img" id="artrotate" src="{{asset('img/icon/rotate.png')}}">
                                <br>
                                <span class="ds-span">Rotate</span>
                            </a>
                        </center>
                    </div>
                </div>
                <div class="ds-bottom-text-main-area" id="ds-bottom-text-main-area" style="display: none;">
                    <div class="ds-bottom-menu-element"  style="cursor:pointer; width: 16.5vw;" onclick="showdiv('ds-div-addtext');">
                        <center>
                            <a class="ds-a"  href="javascript:void(0)">
                                <img class="ds-img" id="changetext" src="{{asset('img/icon/add-text.png')}}">
                                <br>
                                <span class="ds-span">Change Text</span>
                            </a>
                        </center>
                    </div>
                    <div class="ds-bottom-menu-element"  style="cursor:pointer; width: 16.5vw;" onclick="showdiv('ds-div-textfont');">
                        <center>
                            <a class="ds-a"  href="javascript:void(0)">
                                <img class="ds-img" id="textfont" src="{{asset('img/icon/add-font.png')}}">
                                <br>
                                <span class="ds-span">Font</span>
                            </a>
                        </center>
                    </div>
                    <div class="ds-bottom-menu-element"  style="cursor:pointer; width: 16.5vw;" onclick="showdivedit('ds-div-textcolor');">
                        <center>
                            <a class="ds-a"  href="javascript:void(0)">
                                <img class="ds-img" id="textcolor" src="{{asset('img/icon/color.png')}}">
                                <br>
                                <span class="ds-span">Color</span>
                            </a>
                        </center>
                    </div>
                    <div class="ds-bottom-menu-element"  style="cursor:pointer; width: 16.5vw;" onclick="showdivedit('ds-div-textlayers');">
                        <center>
                            <a class="ds-a"  href="javascript:void(0)">
                                <img class="ds-img" id="textlayers" src="{{asset('img/icon/layers.png')}}">
                                <br>
                                <span class="ds-span">Layers</span>
                            </a>
                        </center>
                    </div>
                    <div class="ds-bottom-menu-element"  style="cursor:pointer; width: 16.5vw;" onclick="showdivedit('ds-div-textrotate');">
                        <center>
                            <a class="ds-a"  href="javascript:void(0)">
                                <img class="ds-img" id="textrotate" src="{{asset('img/icon/rotate.png')}}">
                                <br>
                                <span class="ds-span">Rotate</span>
                            </a>
                        </center>
                    </div>
                    <div class="ds-bottom-menu-element"  style="cursor:pointer; width: 16.5vw;" onclick="showdivedit('ds-div-texteffect');">
                        <center>
                            <a class="ds-a"  href="javascript:void(0)">
                                <img class="ds-img" id="texteffect" src="{{asset('img/icon/effects.png')}}">
                                <br>
                                <span class="ds-span">Curve Text</span>
                            </a>
                        </center>
                    </div>
                </div>
            </center>
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
                                <div class="col-xs-12">
                                    <h4 id="itemPriceLabel" style="margin-top: 2px;"><b>Price per item:</b> <span id="itemPrice" style="color: #5cb85c; font-family: Arial;"></span></h4>
                                </div>
                                <div class="col-xs-12">
                                    <h4 id="numOfShirtsLabel" style="position: relative; margin-top: 2px;"><b>Quantity:</b> <span style='color: #5cb85c; font-family: Arial;'> 0 item(s)</span></h4>
                                </div>
                                <div class="col-xs-12">
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
                                                        <input type="text" class="form-control" id="designNameEmail" placeholder="Enter Design Name" name="designNameEmail">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="designemail">E-mail:</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" id="designEmail" placeholder="Enter E-mail" name="designEmail">
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
                            <div class="col-xs-8">    
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
        <!-- Modal Personalize List -->
        <div class="modal fade" id="PersonalizeListModal" role="dialog" style="overflow-x: hidden; overflow-y: auto;">
            <div class="modal-dialog modal-xl" style="">
                <div class="modal-content" style=" ">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title uppercase">Customer List</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <table id="myTable" class="table">
                                    <thead>
                                        <tr>
                                            <td>Preview</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td align="center">
                                            <div class="row">
                                                <div class="col-md-6" id="personalize_canvas_front_div" style="display: none;">
                                                    <span>Front</span>
                                                    <canvas id="personalize_canvas_front" width="175" height="233" style="border:1px solid #333333;"></canvas>         
                                                </div>
                                                <div class="col-md-6" id="personalize_canvas_back_div" style="display: none;">
                                                    <span>Back</span>
                                                    <canvas id="personalize_canvas_back" width="175" height="233" style="border:1px solid #333333;"></canvas>          
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-8">
                                <table id="myTable2" class=" table order-list">
                                    <thead>
                                        <tr>
                                            <td>Name</td>
                                            <td>Number</td>
                                            <td>Size</td>
                                            <td>Remove</td>
                                        </tr>
                                    </thead>
                                    <tbody id="personalizetable" align="center">

                                    </tbody >
                                    <tfoot align="center">
                                        <tr>
                                            <td>
                                                <input type="button" class="btn btn-xs" id="addrow" value="Add Row" onclick="addpersonalizerow();" />
                                            </td>
                                        </tr>
                                        <tr>
                                        </tr>
                                    </tfoot>
                                </table>

                                <p>Totals: <span id="personalizetotalsname" name="personalizetotalsname">0</span>  names and <span id="personalizetotalsnumber" name="personalizetotalsnumber">0</span> numbers on <span id="personalizetotalssizename" name="personalizetotalssizename">0</span> items</p>
                                <p>Sizes: <span id="personalizesizelist" name="personalizesizelist"></span></p>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-xs" id="addrow" value="Save & Exit" onclick="SavePersonalizeList(true); closemodal('PersonalizeListModal');" />
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
        var scale = 1;
        var textAdded = clipArtAdded = imageUploaded = colorChanged = addingToCart = resized = Checked = productchanged = saveOnly = false;
        var shoppingcart = { shop_number:'', subtotal:0, tax:0, shipping_cost:0, discount:0, total:0, status:"created", date:null, shipby:null, promocode:'', items:[], user:null, shippingType:null, promocode:null};
        var position = 0;
        var parameter = {type:null, value:null};
        var currentdesign =null;// new {arrayside :[], name:'',product:null, type:"Designstudio", num_shirts:0, price_per_shirt:0, total:0};
        var templatedesign = null;
        var front = back = null;
        var canvaspreviewfront = new fabric.Canvas("personalize_canvas_front");
        var canvaspreviewback = new fabric.Canvas("personalize_canvas_back");
        var personalizelist = null;
        var counter = 5;
        var countsize = 0;
        var sidescolors = null;
        var arraypersonalizecolors = null;

        /**
            * Load initial information
            *
            * @return void
        */
        window.onload = function() 
        {
            var pathArray = window.location.pathname.split('/');
            if (pathArray[1] == 'designstudio') {
                switch (pathArray[2]) {
                case "e":
                        parameter.type = 'e';
                        parameter.value = pathArray[3];
                    break;
                case "t":
                        parameter.type = 't';
                        parameter.value = pathArray[3];
                    break;
                default:
                    //idproduct = 593;
                    //LoadInitialProduct();
                    break;
                }
            } 
            else 
            {
                //idproduct = 593;
                //LoadInitialProduct();
            }
            reloadelements();
            $.ajax({
                type:'GET',
                dataType: 'json', 
                data: {parameter: parameter},
                url: window.location.origin + '/initialinfo',
                success:function(data)
                {  
                    user = data.user;
                    ListColors = data.inkcolors;
                    product = data.product;
                    if(data.shoppingcart != null)
                    {
                        shoppingcart = data.shoppingcart;
                    }
                    currentdesign = {id:'',arrayside :[], name:'',product:product, type:"Designstudio", num_shirts:0, price_per_shirt:0, total:0, personalize: null};
                    enableproductsizes();
                    cleanInputQuantity();
                    front = new fabric.Canvas(product.printareas[0].slug+'Canvas');
                    back = new fabric.Canvas(product.printareas[2].slug+'Canvas'); 
                    setcanvasproperties(product.id);
                    product.printareas.forEach(printarea => {
                        var canvasside = new fabric.Canvas(printarea.slug+'Canvas');
                            canvasside.side = printarea.side;
                            canvasside.name = printarea.slug;
                            canvasside.left = printarea.left;
                            canvasside.top = printarea.top;
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
                            applyimgfilters(e);
                            showcorners(e);
                        });
                        canvasside.on('object:moving',function(e)
                        {
                            hidecorners(e);
                        });
                        canvasside.on('object:removed',function(e)
                        {
                            initcanvas(e);
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

                    canvasActive = canvaslist[0];
                    if(data.design.length > 0)
                    {
                        if(parameter.type == 'e' || parameter.type == 't')
                        {
                            loaddesigns(data.design);
                        }
                    }
                }
            });
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

        /*function enableproductsizes()
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
        }*/
    
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
                        id: "text-"+ objId,
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
                save();
                }
            } 
            else
            {
                canvasActive.remove(obj);
            }
            canvasActive.renderAll();
            save();
            hidediv('ds-div-addtext');
        }

        function showdiv(element) 
        {
            //console.log(element);
            document.getElementById("ds-work-area").style.display = "block";
            document.getElementById("ds-work-area-edit").style.display = "none";
            var divlist = document.getElementsByClassName("ds-work-area-element");
            for (let index = 0; index < divlist.length; index++) 
            {
                const element = divlist[index];
                element.style.display = "none";
            }
            var divlist = document.getElementsByClassName("ds-work-area-edit-element");
            for (let index = 0; index < divlist.length; index++) 
            {
                const element = divlist[index];
                element.style.display = "none";
            }
            document.getElementById(element).style.display = "block";
        }

        function showdivedit(element) 
        {
            document.getElementById("ds-work-area").style.display = "none";
            document.getElementById("ds-work-area-edit").style.display = "block";
            var divlist = document.getElementsByClassName("ds-work-area-edit-element");
            for (let index = 0; index < divlist.length; index++) 
            {
                const element = divlist[index];
                element.style.display = "none";
            }
            var divlist = document.getElementsByClassName("ds-work-area-element");
            for (let index = 0; index < divlist.length; index++) 
            {
                const element = divlist[index];
                element.style.display = "none";
            }
            document.getElementById(element).style.display = "block";
        }


        function hidediv(element) 
        {
            document.getElementById("ds-work-area").style.display = "none";
            document.getElementById("ds-work-area-edit").style.display = "none";
            var divlist = document.getElementsByClassName("ds-work-area-element");
            for (let index = 0; index < divlist.length; index++) 
            {
                const element = divlist[index];
                 element.style.display = "none";
            }
            var divlist = document.getElementsByClassName("ds-work-area-edit-element");
            for (let index = 0; index < divlist.length; index++) 
            {
                const element = divlist[index];
                 element.style.display = "none";
            }
            document.getElementById(element).style.display = "none";
        }

        function hidedivedit(element) 
        {
            document.getElementById("ds-work-area").style.display = "none";
            document.getElementById("ds-work-area-edit").style.display = "none";
            var divlist = document.getElementsByClassName("ds-work-area-edit-element");
            for (let index = 0; index < divlist.length; index++) 
            {
                const element = divlist[index];
                 element.style.display = "none";
            }
            var divlist = document.getElementsByClassName("ds-work-area-element");
            for (let index = 0; index < divlist.length; index++) 
            {
                const element = divlist[index];
                 element.style.display = "none";
            }
            document.getElementById(element).style.display = "none";
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

        function displayinfo(e)
        {
            var modifiedObject = e.target;
            //console.log(e.target);
            var textarea = document.getElementById('textarea');
            var footer_menu = document.getElementById("ds-bottom-main-area");
            var footer_menu_text = document.getElementById("ds-bottom-text-main-area");
            var footer_menu_art = document.getElementById("ds-bottom-clipart-main-area");
            var footer_div = document.getElementById("ds-work-area-edit");
            var Artcolor = document.getElementById("Artcolor");
            var ArtcolorText = document.getElementById("ArtcolorText");
            var artcolortransparent = document.getElementById('artcolortransparent');
            var artcolortransparentlegend = document.getElementById('artcolortransparentlegend');
            var checkcolorlegend = document.getElementById('checkcolorlegend');
            var checkcolorlegendModal = document.getElementById('checkcolorlegendModal');
            var inkcolorlist = document.getElementById("inkcolorlist");
            var objectcolors2 = document.getElementById("objectcolors2");
            var displaycolor = document.getElementById("displaycolor");
            var displaynoeditcolor = document.getElementById("displaynoeditcolor");
            var displayfullcolor = document.getElementById("displayfullcolor");
            var removewhite = document.getElementById("removewhite");
            var angleText = document.getElementById('angleText');
            var anglevalueText = document.getElementById('anglevalueText');
            var Text_color = document.getElementById("Textcolor");
            var Text_strokecolor = document.getElementById("Textstrokecolor");
            var texteffecsarea = document.getElementById("texteffecsarea");
            var effect = document.getElementById("effect");
            var Artcolorink = document.getElementById("Artcolorink");
            
            textarea.value = "";
            footer_menu.style.display = "block";
            footer_menu_text.style.display = "none";
            footer_menu_art.style.display = "none";
            footer_div.style.display = "none";
            Artcolor.innerHTML = '';
            font = 'ABeeZee-Regular ';
            setTitleFont();
            if (e.target == undefined) 
            {
                textarea.value = "";
                footer_menu.style.display = "block";
                footer_menu_text.style.display = "none";
                footer_menu_art.style.display = "none";
                footer_div.style.display = "none";
                Artcolor.innerHTML = '';
                font = 'ABeeZee-Regular ';
                setTitleFont();
            } 
            else if (e.target.type == 'image') 
            {
                objectcolors2.innerHTML = "";
                
                Artcolor.innerHTML = "";
                width.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);
                widthvalue.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);
                height.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);
                heightvalue.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);
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

                if (modifiedObject.id.toString().indexOf("uploaded") == -1) 
                {
                    if (modifiedObject.id.toString().indexOf('editable') >= 0) 
                    {
                        if (modifiedObject.numbercolors != undefined) 
                        {
                            if (modifiedObject.numbercolors.length > 8) 
                            {
                                //console.log("PNG CLIPART NUMBER COLORS FULLCOLOR");
                                displaycolor.style.display = "none";
                                displaynoeditcolor.style.display = "none";
                                removewhite.style.display = "block";
                                displayfullcolor.style.display = "block"; 
                                inkcolorlist.style.display = 'block';
                            }
                            else
                            {
                                //console.log("PNG CLIPART COLOR NUMBERCOLORS 1-8");
                                for (var i = 0; i < modifiedObject.colorlist.length; i++) 
                                {
                                    var currentcolor = modifiedObject.colorlist[i].hex;
                                    var transparent = "";
                                    if(currentcolor == "transparent")
                                    {
                                        transparent = currentcolor;
                                    }
                                    objectcolors2.innerHTML += '<div id="color2_'+modifiedObject.id+'" class="color1 '+transparent +'" style="background-color: '+ currentcolor+'; width: 25px; height: 25px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;"></div>';
                                }
                                displaycolor.style.display = "block";
                                displaynoeditcolor.style.display = "none";
                                removewhite.style.display = "block";
                                displayfullcolor.style.display = "none"; 
                                inkcolorlist.style.display = 'block';
                                Artcolorink.style.display="block";
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
                            objectcolors2.innerHTML = '<div id="color2_'+modifiedObject.id+'" class="color1" style="background-color: '+ rgb2hex(modifiedObject.filters[modifiedObject.filters.length - 1].color)+'; width: 25px; height: 25px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;" onclick="setcolor(this);"></div>';;
                            Artcolor.innerHTML = Artcolor_name;
                            displaycolor.style.display = "block";
                            displaynoeditcolor.style.display = "none";
                            removewhite.style.display = "block";
                            displayfullcolor.style.display = "none";     
                            inkcolorlist.style.display = 'block'; 
                            Artcolorink.style.display="block";
                            
                        }
                        else 
                        {
                            //console.log("PNG CLIPART NO FILTER");
                            objectcolors2.innerHTML = '<div id="color2_'+modifiedObject.id+'"class="color1" style="background-color: rgb(0, 0, 0); width: 25px; height: 25px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;"></div>';
                            Artcolor.innerHTML = "Black";
                            displaycolor.style.display = "block";
                            displaynoeditcolor.style.display = "none";
                            removewhite.style.display = "block";
                            displayfullcolor.style.display = "none"; 
                            inkcolorlist.style.display = 'block';
                            Artcolorink.style.display="block";
                        }
                    }
                    else
                    {
                        if (modifiedObject.numbercolors != undefined) 
                        {
                            if (modifiedObject.numbercolors.length > 8) 
                            {
                                //console.log("PNG CLIPART NUMBER COLORS FULLCOLOR NO EDITABLE");
                                displaycolor.style.display = "none";
                                displaynoeditcolor.style.display = "none";
                                removewhite.style.display = "block";
                                displayfullcolor.style.display = "block"; 
                                inkcolorlist.style.display = 'none';
                                Artcolorink.style.display="none";
                            }
                            else
                            {
                                //console.log("PNG CLIPART COLOR NUMBERCOLORS 1-8  NO EDITABLE");
                                for (var i = 0; i < modifiedObject.colorlist.length; i++) 
                                {
                                    var currentcolor = modifiedObject.colorlist[i].hex;
                                    var transparent = "";
                                    if(currentcolor == "transparent")
                                    {
                                        transparent = currentcolor;
                                    }
                                    objectcolors2.innerHTML += '<div class="color1 '+transparent+'" style="background-color: '+ currentcolor+'; width: 25px; height: 25px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;"></div>';
                                }
                                displaycolor.style.display = "block";
                                displaynoeditcolor.style.display = "block";
                                removewhite.style.display = "block";
                                displayfullcolor.style.display = "none"; 
                                inkcolorlist.style.display = 'none';
                                Artcolorink.style.display="none";
                            }
                        } 
                        else if (modifiedObject.filters.length > 0) 
                        {
                            //console.log("PNG CLIPART 1 FILTER  NO EDITABLE");
                            var found = ListColors.find(function(element) 
                            {
                                if ((element.hex) == rgb2hex(modifiedObject.filters[modifiedObject.filters.length - 1].color)) {
                                    return element;
                                }
                            });
                            var Artcolor_name = found.name;
                            objectcolors2.innerHTML = '<div class="color1" style="background-color: '+ rgb2hex(modifiedObject.filters[modifiedObject.filters.length - 1].color)+'; width: 25px; height: 25px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;"></div>';
                            Artcolor.innerHTML = Artcolor_name;
                            displaycolor.style.display = "block";
                            displaynoeditcolor.style.display = "block";
                            removewhite.style.display = "block";
                            displayfullcolor.style.display = "none";   
                            inkcolorlist.style.display = 'none';   
                            Artcolorink.style.display="none";
                        }
                        else 
                        {
                            //console.log("PNG CLIPART NO FILTER  NO EDITABLE");
                            objectcolors2.innerHTML = '<div class="color1" style="background-color: rgb(0, 0, 0); width: 25px; height: 25px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;"></div>';
                            Artcolor.innerHTML = "Black";
                            displaycolor.style.display = "block";
                            displaynoeditcolor.style.display = "block";
                            removewhite.style.display = "block";
                            displayfullcolor.style.display = "none"; 
                            inkcolorlist.style.display = 'block';
                            Artcolorink.style.display="none";
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
                            displaycolor.style.display = "none";
                            displaynoeditcolor.style.display = "none";
                            removewhite.style.display = "block";
                            displayfullcolor.style.display = "block"; 
                            inkcolorlist.style.display = 'none';
                            Artcolorink.style.display = "none";
                        }
                        else
                        {
                            //console.log("PNG CLIPART COLOR LIST COLORS 1-8");
                            for (var i = 0; i < modifiedObject.colorlist.length; i++) 
                            {
                                var currentcolor = modifiedObject.colorlist[i];
                                var transparent = "";
                                if(currentcolor == "transparent")
                                {
                                    transparent = currentcolor;
                                }
                                objectcolors2.innerHTML += '<div class="color1 '+transparent+'" style="background-color: '+ currentcolor+'; width: 25px; height: 25px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;"></div>';
                            }
                            displaycolor.style.display = "none";
                            displaynoeditcolor.style.display = "block";
                            removewhite.style.display = "block";
                            displayfullcolor.style.display = "none"; 
                            inkcolorlist.style.display = 'none';
                            Artcolorink.style.display = "none";
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

                footer_menu.style.display = "none";
                footer_menu_text.style.display = "none";
                footer_menu_art.style.display = "block";
            }
            else if (e.target.type == 'i-text') 
            {
                footer_menu.style.display = "none";
                footer_menu_text.style.display = "block";
                footer_menu_art.style.display = "none";
            }
            else if (e.target.type == 'text' || e.target.type == 'curvedText') 
            {
                //setColorsInk();
                //selectcolorsT();
                /*widthText.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);
                widthvalueText.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);
                heightText.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);
                heightvalueText.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);*/
                if (modifiedObject._controlsVisibility.ml) {
                    $('#resizeicontext').removeClass("fa fa-lock");
                    $('#resizeicontext').addClass("fa fa-unlock");
                } else {
                    $('#resizeicontext').removeClass("fa fa-unlock");
                    $('#resizeicontext').addClass("fa fa-lock");
                }
                
                document.getElementById("textareabtn").innerHTML = "Update Text";
                /*fontbtn.style.display = 'block';
                fontmenu.style.display = "none";
                textmenu.style.display = 'block';*/
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
                document.getElementById("strokewidthvalue").value = modifiedObject.strokeWidth;
                document.getElementById("strokewidth").value = modifiedObject.strokeWidth;
                document.getElementById('angleText').value = e.target.getAngle();
                document.getElementById('anglevalueText').value = e.target.getAngle();
                
                if (modifiedObject.text != "") 
                {
                    var fonts = document.getElementsByClassName("fonts");
                    for (i = 0; i < fonts.length; i++) {
                        fonts[i].innerHTML = modifiedObject.text.substring(0, 7);
                    }
                } 
                else 
                {
                    var fonts = document.getElementsByClassName("fonts");
                    for (i = 0; i < fonts.length; i++) {
                        fonts[i].innerHTML = fonts[i].id;
                    }
                }
                if (e.target.type == 'text') 
                {
                    texteffecsarea.style.display = "none";
                    effect.checked = false;
                } 
                else 
                {
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
                //font_preview.innerHTML = modifiedObject.fontFamily;


                footer_menu.style.display = "none";
                footer_menu_text.style.display = "block";
                footer_menu_art.style.display = "none";
            }
            else if (e.target.type == 'group') 
            {
                objectcolors2.innerHTML = "";
                Artcolor.innerHTML = "";
                //objectcolorsModal.innerHTML = "";
                //changecolorArt.style.display = 'none';
                var layerscolors = [];                
                width.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);
                widthvalue.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);
                height.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);
                heightvalue.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);
                angleImage.value = e.target.getAngle();
                anglevalueImage.value = e.target.getAngle();

                for (var i = 0; i < modifiedObject._objects.length; i++) 
                {
                    if (!validate_layer(modifiedObject._objects[i], layerscolors)) 
                    {
                        layerscolors.push(modifiedObject._objects[i]);
                    }
                }
                
                if (modifiedObject.id.indexOf("editable") >=0) 
                {
                    if (layerscolors.length > 0 && layerscolors.length < 2 )
                    {
                        //console.log("SVG 1 COLOR");
                        for (var i = 0; i < layerscolors.length; i++) 
                        {
                            var currentcolor = layerscolors[i].fill;
                            var transparent = "";
                            if(currentcolor == "transparent")
                            {
                                transparent = currentcolor;
                            }
                            objectcolors2.innerHTML += '<div id="color2_'+layerscolors[i].id.split(".")[0]+'" class="color1 '+transparent+'" style="background-color: '+ currentcolor+'; width: 25px; height: 25px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;" onclick="setcolor(this);"></div>';
                        }
                        displaycolor.style.display = "block";
                        displaynoeditcolor.style.display = "none";
                        removewhite.style.display = "none";
                        displayfullcolor.style.display = "none";     
                        inkcolorlist.style.display = "block";
                        Artcolorink.style.display = "block";
                        
                        
                    }
                    else if (layerscolors.length > 1 && layerscolors.length < 9)
                    {
                        //console.log("SVG 2-8 COLOR");
                        for (var i = 0; i < layerscolors.length; i++) 
                        {
                            var currentcolor = layerscolors[i].fill;
                            var transparent = "";
                            if(currentcolor == "transparent")
                            {
                                transparent = currentcolor;
                            }
                            objectcolors2.innerHTML += '<div id="color2_'+layerscolors[i].id.split(".")[0]+'" class="color1 '+transparent+'" style="background-color: '+ currentcolor+'; width: 25px; height: 25px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;" onclick="setcolor(this);"></div>';
                        }

                        idcolorselected = "color2_"+layerscolors[0].id.split(".")[0];
                        colorselected = layerscolors[0].fill;
                        var listcircles = document.getElementsByClassName('color1');
                        for (var i = 0; i < listcircles.length; i++) 
                        {
                            listcircles[i].style.border = "1px solid #eee";
                        }
                        document.getElementById(idcolorselected).style.border = "2px solid #31B0D5";
                        displaycolor.style.display = "block";
                        displaynoeditcolor.style.display = "none";
                        removewhite.style.display = "none";
                        displayfullcolor.style.display = "none";
                        inkcolorlist.style.display = "block";
                        Artcolorink.style.display = "block";
                    }
                    else
                    {
                        //console.log("SVG FULL COLOR");
                        displaycolor.style.display = "none";
                        displaynoeditcolor.style.display = "none";
                        removewhite.style.display = "none";
                        displayfullcolor.style.display = "block"; 
                        Artcolorink.style.display = "none";                          
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
                                objectcolors2.innerHTML += '<div class="color1" style="background-color: '+ currentcolor+'; width: 25px; height: 25px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;"></div>';
                        }
                        displaycolor.style.display = "none";
                        displaynoeditcolor.style.display = "block";
                        removewhite.style.display = "none";
                        displayfullcolor.style.display = "none";
                        inkcolorlist.style.display = 'none';
                        Artcolorink.style.display = "none";
                           
                    }
                    else if (layerscolors.length > 1 && layerscolors.length < 9)
                    {
                        //console.log("SVG 2-8 COLOR NO EDIT");
                        for (var i = 0; i < layerscolors.length; i++) 
                        {
                            var currentcolor = layerscolors[i].fill;
                                objectcolors2.innerHTML += '<div class="color1" style="background-color: '+ currentcolor+'; width: 25px; height: 25px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;"></div>';
                        }
                        displaycolor.style.display = "block";
                        displaynoeditcolor.style.display = "block";
                        removewhite.style.display = "none";
                        displayfullcolor.style.display = "none";
                        inkcolorlist.style.display = 'none';
                        Artcolorink.style.display = "none";
                    }
                    else
                    {
                        //console.log("SVG FULL COLOR NO EDIT");
                        displaycolor.style.display = "none";
                        displaynoeditcolor.style.display = "none";
                        removewhite.style.display = "none";
                        displayfullcolor.style.display = "block";
                        inkcolorlist.style.display = 'block';
                        Artcolorink.style.display = "none";
                    }
                }
                footer_menu.style.display = "none";
                footer_menu_text.style.display = "none";
                footer_menu_art.style.display = "block";
            }
            
        }

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
            copyData.lockUniScaling=true;
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

        function showcorners(e)
        {
            var modifiedObject = e.target;
            if(modifiedObject != undefined)
            {
                modifiedObject.hasControls = true;
                modifiedObject.hasBorders = true;
                canvasActive.renderAll();
            }
        }

        function hidecorners(e)
        {   
            var modifiedObject = e.target;
            if(modifiedObject != undefined)
            {
                modifiedObject.hasControls = false;
                modifiedObject.hasBorders = false;
                canvasActive.renderAll();
            }
        }

        function showproductview()
        {  
            document.getElementById('productsection').style.display = 'block'; 
            document.getElementById("changeproductdiv").style.display = 'none';

            document.getElementById('sortby-filter').style.display = 'block'; 
            document.getElementById('product-pagination').style.display = 'block'; 
            document.getElementById('results').style.display = 'block'; 
            document.getElementById('listproduct').style.display = 'block'; 
            document.getElementById("filters-colum").style.display = 'none';
            document.getElementById("btn-done").style.display = 'none';
            document.getElementById("sort-by").style.display = 'none';
            document.getElementById("data-colum").style.display = 'block';
            document.getElementById('singleproduct').style.display = 'none'; 
        }

        /**
            * Move object to center front an back
            * 
            * @return void
        */
        function setlayer(value) 
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
            currentdesign.arrayside = [];
            canvaslist.forEach(canvas => 
            {
                if(canvas.getObjects().length > 0)
                {
                    //console.log(canvas);
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
                    currentdesign.arrayside.push(designtmp); 
                }
            });
            //console.log('before');
            //console.log(canvasdesignlist);
        }

        /**
         * show and hide the upload button after accept the upload terms
         * 
         * @return void
         */
        function hideshowbutton(element) 
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
            
            var file = document.getElementById('file').files[0]; 
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


        function loaddesigns(saveddesignname)
        {
            console.log(canvaslist);
            pos = 0;
            saveddesignname.forEach(canvasdesign => {
                if(canvasdesign != null)
                {
                    canvaslist[pos].loadFromDatalessJSON(canvasdesign, canvaslist[pos].renderAll.bind(canvaslist[pos]), function(o, object)
                    {
                        object.set('lockUniScaling', true);
                        if (o.type === 'image')
                        {
                            object.type = "image";
                            if (o.filters != undefined || object.filters.length > 0)
                            {
                                object.applyFilters(function()
                                {
                                    canvaslist[pos].renderAll(canvaslist[pos]);
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
                            function()
                            {
                                canvaslist[pos].renderAll();
                            }
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

        function loadtemplatedesigns(templatedesignname)
        {
            $.ajax({
                type:'GET',
                dataType: 'json', 
                data: {parameter: templatedesignname},
                url: window.location.origin + '/templatedesigninfo',
                success:function(data)
                {  
                    templatedesign = data.design;
                    data.product = product ;
                    //product = data.product;
                    document.getElementById("product_name").innerHTML = product.parent.name;            
                    document.getElementById("current_product_color").innerHTML = product.color.name;
                    if(product.parent.sizechartimage != "")
                    {
                        document.getElementById("sizechartimage").innerHTML= '<img src="'+window.location.origin+'/img/product/'+product.parent.sizechartimage+'" class="img-responsive">';
                    }
                    document.getElementById("sizechartdescription").innerHTML= product.parent.sizechartdescription;
                    document.getElementById("sizechartable").innerHTML = "";
                    product.parent.sizeschart.forEach(sizeschart => 
                    {
                        document.getElementById("sizechartable").innerHTML += "<tr><td>"+sizeschart.size+"</td> <td>"+sizeschart.width+"</td> <td>"+sizeschart.length+"</td></tr>";
                    });
                    var description_label = '<p><strong>Brand:</strong> ' + product.brand + ' </p>';
                    description_label += '<p><strong>Size:</strong> ' + product.parent.sizes[0].name  + '-' + product.parent.sizes[product.parent.sizes.length -1].name + '  <a href="javascript:void(0)" data-toggle="modal" data-target="#sizechartmodal"> size chart</a></p>';
                    description_label += '<p><strong>Fabric:</strong> ' + product.fabric + '</p>';
                    description_label += '<p><a href="#productlongdescription" data-toggle="collapse" id="more-details" class="collapsestart" onclick="moreless(this)"> More Details </a></p>';
                    document.getElementById("description_label").innerHTML = description_label;
                    var sidesinfo = ""; 
                    var innersinfo = ""; 
                    var countsides = 0;
                    var countinners = 0;
                    canvaslist = [];
                    if(product.sides.length > 0)
                    {   
                        //document.getElementById("carousel-sides").innerHTML = "";
                        document.getElementById("carousel-inner").innerHTML = "";
                        product.sides.forEach(side => {
                            if(side.pivot.enable == 1)
                            {  
                                if(countsides == 0)
                                {
                                    sidesinfo += ' <li class="active"  data-target="#myCarousel" data-slide-to="'+ countsides +'"><img id="frontActiveImage" class="img-responsive" src="' + window.location.origin + '/img/product/' + side.pivot.image +  '" onclick="setcanvas(' + (countsides+1) + ');"></li>';
                                    innersinfo += '<div id="'+side.slug+'" class="item active">';
                                        innersinfo += '<div id="'+side.slug+'CanvasShirt" class="canvasShirt" style="border: 0px solid rgb(238, 238, 238); width: 743px; height: 810px; min-height: 728px; background-image: url(' + window.location.origin + '/img/product/' + side.pivot.image +  ');">';
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
                                        innersinfo += '<div id="'+side.slug+'CanvasShirt" class="canvasShirt" style="border: 0px solid rgb(238, 238, 238); width: 743px; height: 810px; min-height: 728px; background-image: url(' + window.location.origin + '/img/product/' + side.pivot.image +  ');">';
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
                        //document.getElementById("carousel-sides").innerHTML = sidesinfo;                       
                        document.getElementById("carousel-inner").innerHTML = innersinfo;
                    }                   
                    var colorminimum = "";
                    var colorminimum6 = "";
                    
                    if(product.parent.colors.length > 0)
                    {   
                        document.getElementById("child_product_color_div").innerHTML = "";
                        document.getElementById("child_product_color_div6").innerHTML = "";
                        //document.getElementById("child_product_color_divModal").innerHTML = "";
                        //document.getElementById("child_product_color_div6Modal").innerHTML = "";
                        product.parent.colors.forEach(color => {
                            var animate = '';
                            if(color.pivot.childproduct_id == product.id)
                            animate = "animate";
                            if(color.hex != null)
                                colorminimum += '<div id="child_color_minimum_' + color.id + '" title="White" onclick="setcanvasproperties(' + color.pivot.childproduct_id + '); setactivecolor(this);" class="block ' + animate + '" style="border-radius: 50%; background-color: ' + color.hex + '; width: 25px; height: 25px; border: 0px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px;"></div>';
                            else
                                colorminimum += '<img onclick="setcanvasproperties(' + color.pivot.childproduct_id + '); setactivecolor(this);" src="' + window.location.origin + '/img/color/' + color.file + '" id="child_color_minimum_' + color.id + '" class="block ' + animate + '" style="width: 30px; position: relative; height: 30px; border: 0px solid rgb(238, 238, 238); border-radius: 50%; cursor: pointer;">';
                            //colorminimum6 +="";
                        });

                        document.getElementById("child_product_color_div").innerHTML = colorminimum;
                        document.getElementById("child_product_color_div6").innerHTML = colorminimum6;
                        //document.getElementById("child_product_color_divModal").innerHTML = colorminimum;
                        //document.getElementById("child_product_color_div6Modal").innerHTML = colorminimum6;
                    }
                }
                ,
                complete: function(data){
                    product.printareas.forEach(printarea => {
                        var canvasside = new fabric.Canvas(printarea.slug+'Canvas');
                            canvasside.side = printarea.side;
                            canvasside.name = printarea.slug;
                            canvasside.left = printarea.left;
                            canvasside.top = printarea.top;
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
                            applyimgfilters(e);
                        });
                        canvasside.on('object:moving',function(e)
                        {
                            hidecorners(e);
                        });
                        canvasside.on('object:removed',function(e)
                        {
                            initcanvas(e);
                        });
                    });

                    canvasActive = canvaslist[0];
                    pos = 0;
                    templatedesign.forEach(canvasdesign => {
                        if(canvasdesign != null)
                        {
                            canvaslist[pos].loadFromDatalessJSON(canvasdesign, canvaslist[pos].renderAll.bind(canvaslist[pos]), function(o, object)
                            {
                                object.set('lockUniScaling', true);
                                if (o.type === 'image')
                                {
                                    object.type = "image";
                                    if (o.filters != undefined || object.filters.length > 0)
                                    {
                                        object.applyFilters(function()
                                        {
                                            canvaslist[pos].renderAll(canvaslist[pos]);
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
                                    function()
                                    {
                                        canvaslist[pos].renderAll();
                                    }
                                );
                            });
                        }
                        pos++;
                    });
                    hidediv('ds-div-product');
                }
            });
            
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
                        object.set('lockUniScaling', true);
                        if (o.type === 'image')
                        {
                            object.type = "image";
                            if (o.filters != undefined || object.filters.length > 0)
                            {
                                object.applyFilters(function()
                                {
                                    canvaslist[pos].renderAll(canvaslist[pos]);
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
                            function()
                            {
                                canvaslist[pos].renderAll();
                            }
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
                                var count = 1;
                                obj.forEach(function(svg) 
                                {
                                    svg.set({
                                        id: svg.id + "." + count,
                                    });
                                    elements.push(svg);
                                    count++;
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
                                    objId++;
                                canvasActive.add(img);
                                canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                            });
                        }
                    }
                    clipArtAdded = true;
                    save();
                    hidediv('ds-div-addart');
                    //canvasActive.setActiveObject(0);
                    //deselectAllCanvases('addImg');
                    // savetmpdesign();
                }
            });
            /*document.getElementById("editArt").style.display= "block";
            document.getElementById("newArt").style.display= "none";*/
        }

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
            //console.log(newColor);
            colorChanged = true;
            colorArt = newColor;
            //$(".list-group-item").removeClass("active");
            //$(this).addClass("active");
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
                //document.getElementById("color_" + object.id).style.backgroundColor = newColor;
                document.getElementById("color2_" + object.id).style.backgroundColor = newColor;
                if (newColor == "transparent") 
                {
                    $("#color" + object.id).addClass("transparent");
                }
                else 
                {
                    $("#color" + object.id).removeClass("transparent");
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
                    //document.getElementById("color_" + objectslist[0].id.split(".")[0]).style.backgroundColor = newColor;
                    document.getElementById("color2_" + objectslist[0].id.split(".")[0]).style.backgroundColor = newColor;
                    if (newColor == "transparent") 
                    {
                        $("#color_" + objectslist[0].id.split(".")[0]).addClass("transparent");
                    }
                    else 
                    {
                        $("#color_" + objectslist[0].id.split(".")[0]).removeClass("transparent");
                    }
                } 
                else 
                {
                    if(idcolorselected != undefined)
                    {
                        //console.log(object);
                        for (var i = 0; i < objectslist.length; i++)
                        {
                            if (("color2_" + objectslist[i].id.split(".")[0]) == idcolorselected)
                            {
                                objectslist[i].setFill(newColor);
                                objectslist[i].setStroke(newColor);
                                canvasActive.renderAll();
                                //document.getElementById("color_" + objectslist[i].id.split(".")[0]).style.backgroundColor = newColor;
                                document.getElementById("color2_" + objectslist[i].id.split(".")[0]).style.backgroundColor = newColor;
                                if (newColor == "transparent") 
                                {
                                    $("#color2_" + objectslist[i].id.split(".")[0]).addClass("transparent");
                                }
                                else 
                                {
                                    $("#color2_" + objectslist[i].id.split(".")[0]).removeClass("transparent");
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
                            //document.getElementById("color_" + objectslist[0].id.split(".")[0]).style.backgroundColor = newColor;
                            document.getElementById("color2_" + objectslist[0].id.split(".")[0]).style.backgroundColor = newColor;
                            if (newColor == "transparent") 
                            {
                                $("#color2_" + objectslist[0].id.split(".")[0]).addClass("transparent");
                            }
                            else 
                            {
                                $("#color2_" + objectslist[0].id.split(".")[0]).removeClass("transparent");
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
            if (document.getElementById("artcolorModal" + currentcolor.replace("#", "").toLowerCase()) != null)
            {
                document.getElementById("artcolorModal" + currentcolor.replace("#", "").toLowerCase()).style.border = "2px solid #31B0D5";
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
            modaltitle.style.color = "#ffffff";
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
                    front = new fabric.Canvas(product.printareas[0].slug+'Canvas');
                    back = new fabric.Canvas(product.printareas[2].slug+'Canvas'); 
                    
                    currentdesign.product = product;
                    enableproductsizes();
                    cleanInputQuantity();
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
                    hidediv('ds-div-product');
                    initCenteringGuidelines(canvasActive);      
                }
            });
        }

        function loadchangeproduct()
        {
            document.getElementById("product_name").innerHTML = product.parent.name;            
            document.getElementById("current_product_color").innerHTML = product.color.name;
            if(product.parent.sizechartimage != "")
            {
                document.getElementById("sizechartimage").innerHTML= '<img src="'+window.location.origin+'/img/product/'+product.parent.sizechartimage+'" class="img-responsive">';
            }
            document.getElementById("sizechartdescription").innerHTML= product.parent.sizechartdescription;
            document.getElementById("sizechartable").innerHTML = "";
            product.parent.sizeschart.forEach(sizeschart => 
            {
                document.getElementById("sizechartable").innerHTML += "<tr><td>"+sizeschart.size+"</td> <td>"+sizeschart.width+"</td> <td>"+sizeschart.length+"</td></tr>";
            });
            var description_label = '<p><strong>Brand:</strong> ' + product.brand + ' </p>';
            description_label += '<p><strong>Size:</strong> ' + product.parent.sizes[0].name  + '-' + product.parent.sizes[product.parent.sizes.length -1].name + '  <a href="javascript:void(0)" data-toggle="modal" data-target="#sizechartmodal"> size chart</a></p>';
            description_label += '<p><strong>Fabric:</strong> ' + product.fabric + '</p>';
            description_label += '<p><a href="#productlongdescription" data-toggle="collapse" id="more-details" class="collapsestart" onclick="moreless(this)"> More Details </a></p>';
            document.getElementById("description_label").innerHTML = description_label;
            var sidesinfo = ""; 
            var innersinfo = ""; 
            var countsides = 0;
            var countinners = 0;
            canvaslist = [];
            if(product.sides.length > 0)
            {   
                //document.getElementById("carousel-sides").innerHTML = "";
                document.getElementById("carousel-inner").innerHTML = "";
                product.sides.forEach(side => {
                    if(side.pivot.enable == 1)
                    {  
                        if(countsides == 0)
                        {
                            sidesinfo += ' <li class="active"  data-target="#myCarousel" data-slide-to="'+ countsides +'"><img id="frontActiveImage" class="img-responsive" src="' + window.location.origin + '/img/product/' + side.pivot.image +  '" onclick="setcanvas(' + (countsides+1) + ');"></li>';
                            innersinfo += '<div id="'+side.slug+'" class="item active">';
                                innersinfo += '<div id="'+side.slug+'CanvasShirt" class="canvasShirt" style="border: 0px solid rgb(238, 238, 238); width: 743px; height: 810px; min-height: 728px; background-image: url(' + window.location.origin + '/img/product/' + side.pivot.image +  ');">';
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
                                innersinfo += '<div id="'+side.slug+'CanvasShirt" class="canvasShirt" style="border: 0px solid rgb(238, 238, 238); width: 743px; height: 810px; min-height: 728px; background-image: url(' + window.location.origin + '/img/product/' + side.pivot.image +  ');">';
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
                //document.getElementById("carousel-sides").innerHTML = sidesinfo;                       
                document.getElementById("carousel-inner").innerHTML = innersinfo;
            }                   
            var colorminimum = "";
            var colorminimum6 = "";
            
            if(product.parent.colors.length > 0)
            {   
                document.getElementById("child_product_color_div").innerHTML = "";
                document.getElementById("child_product_color_div6").innerHTML = "";
                //document.getElementById("child_product_color_divModal").innerHTML = "";
                //document.getElementById("child_product_color_div6Modal").innerHTML = "";
                product.parent.colors.forEach(color => {
                    var animate = '';
                    if(color.pivot.childproduct_id == product.id)
                    animate = "animate";
                    if(color.hex != null)
                        colorminimum += '<div id="child_color_minimum_' + color.id + '" title="White" onclick="setcanvasproperties(' + color.pivot.childproduct_id + '); setactivecolor(this);" class="block ' + animate + '" style="border-radius: 50%; background-color: ' + color.hex + '; width: 25px; height: 25px; border: 0px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px;"></div>';
                    else
                        colorminimum += '<img onclick="setcanvasproperties(' + color.pivot.childproduct_id + '); setactivecolor(this);" src="' + window.location.origin + '/img/color/' + color.file + '" id="child_color_minimum_' + color.id + '" class="block ' + animate + '" style="width: 30px; position: relative; height: 30px; border: 0px solid rgb(238, 238, 238); border-radius: 50%; cursor: pointer;">';
                    //colorminimum6 +="";
                });

                document.getElementById("child_product_color_div").innerHTML = colorminimum;
                document.getElementById("child_product_color_div6").innerHTML = colorminimum6;
                //document.getElementById("child_product_color_divModal").innerHTML = colorminimum;
                //document.getElementById("child_product_color_div6Modal").innerHTML = colorminimum6;
            }


            product.printareas.forEach(printarea => {
                var canvasside = new fabric.Canvas(printarea.slug+'Canvas');
                    canvasside.side = printarea.side;
                    canvasside.name = printarea.slug;
                    canvasside.left = printarea.left;
                    canvasside.top = printarea.top;
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
                    //displayinfo(e);
                    applyimgfilters(e);
                    //showcorners(e);
                });
                canvasside.on('object:moving',function(e)
                {
                    hidecorners(e);
                });
                canvasside.on('object:removed',function(e)
                {
                    initcanvas(e);
                });
            });

            canvasActive = canvaslist[0];
            $('.nav-tabs a[href="#productSection"]').tab('show');
                        
        }

        $("#modal-btn-yes").on("click", function() {

            loadchangeproduct();
            canvasdesignlist = [];
            currentdesign.arrayside = [];
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
                    var clipart = data.clipart;  
                    var editable = '';  
                    if(clipart.editable)
                    {
                        editable = '-editable';
                    }

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
                                    var count = 1;
                                    obj.forEach(function(svg) 
                                    {
                                        svg.set({
                                            id: svg.id + "." + count,
                                        });
                                        elements.push(svg);
                                        count++;
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
                    objId++;
                    clipArtAdded = true;
                    save();
                    hidediv("ds-div-addart");
                    //canvasActive.setActiveObject(0);
                    //deselectAllCanvases('addImg');
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
            /* $(".list-group-item").removeClass("active");
            $(this).addClass("active");*/
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
                //document.getElementById("strokewidthvalue").value = strokevalue;
                //document.getElementById("strokewidth").value = strokevalue;
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
            /*$(".list-group-item").removeClass("active");
            $(this).addClass("active");*/
            var object = canvasActive.getActiveObject();
            font = element.id;
            object.set({
                fontFamily: font
            });
            canvasActive.renderAll(canvasActive);
            setTitleFont(element);
            //unselectall('setFont');
            save();
            hidediv("ds-div-textfont");
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
            /*var font_preview = document.getElementById('font_preview');
            if (element != null)
            {
                font_preview.innerHTML = element.childNodes[0].childNodes[2].innerHTML;
                //font_preview.style.fontFamily = font;
            } 
            else
            {
                font_preview.innerHTML = "ABeeZee-Regular";
                font_preview.style.fontFamily = 'ABeeZee-Regular';
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
                    complete: function(xhr) 
                    {
                        clipartuploadedcolorlist = xhr.responseJSON.colorlist;
                        adduploadimg(xhr.responseJSON.clipart_id);    
                        document.getElementById("termsOfUse").checked = false;
                        document.getElementById("file").value = "";
                        document.getElementById("upload").style.display = "none";
                        document.getElementById("uploadprogressbar").style.display = "none";
                        var percentVal = '0%';
                        bar.width(percentVal)
                        percent.html(percentVal);
                    }
                });
            }); 
        });

        /**
         * Change and load new product color from the child products color list
         *
         * @return void
         */
        function setcanvasproperties(id)
        {
            savetmpdesign();
            $.ajax({
                type:'GET',
                dataType: 'json', 
                data: {id: id},
                url: window.location.origin + '/productinfo/'+ id,
                success:function(data)
                {   
                    product = data.product;
                    currentdesign.product = product;
                    enableproductsizes();
                    cleanInputQuantity();
                    document.getElementById("product_name").innerHTML = data.product.parent.name;
                    document.getElementById("current_product_color").innerHTML = data.product.color.name;
                    var description_label = '<p><strong>Brand:</strong> ' + data.product.brand + ' </p>';
                    description_label += '<p><strong>Size:</strong> ' + data.product.parent.sizes[0].name  + '-' + data.product.parent.sizes[data.product.parent.sizes.length -1].name + '  <a href="javascript:void(0)" data-toggle="modal" data-target="#sizechartmodal"> size chart</a></p>';
                    description_label += '<p><strong>Fabric:</strong> ' + data.product.fabric + '</p>';
                    description_label += '<p><a href="#productlongdescription" data-toggle="collapse" id="more-details" class="collapsestart" onclick="moreless(this)"> More Details </a></p>';
                    document.getElementById("description_label").innerHTML = description_label;
                    var sidesinfo = ""; 
                    var innersinfo = ""; 
                    var countsides = 0;
                    var countinners = 0;  
                    canvaslist = [];
                    if(data.product.sides.length > 0)
                    {   
                        //document.getElementById("carousel-sides").innerHTML = "";
                        document.getElementById("carousel-inner").innerHTML = "";
                        data.product.sides.forEach(side => {
                            if(side.pivot.enable == 1)
                            {  
                                if(countsides == 0)
                                {
                                    sidesinfo += ' <li class="active"  data-target="#myCarousel" data-slide-to="'+ countsides +'"><img id="frontActiveImage" class="img-responsive" src="' + window.location.origin + '/img/product/' + side.pivot.image +  '" onclick="setcanvas(' + (countsides+1) + ');"></li>';
                                    innersinfo += '<div id="'+side.slug+'" class="item active">';
                                        innersinfo += '<div id="'+side.slug+'CanvasShirt" class="canvasShirt" style="border: 0px solid rgb(238, 238, 238); width: 743px; height: 810px; min-height: 728px; background-image: url(' + window.location.origin + '/img/product/' + side.pivot.image +  ');">';
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
                                        innersinfo += '<div id="'+side.slug+'CanvasShirt" class="canvasShirt" style="border: 0px solid rgb(238, 238, 238); width: 743px; height: 810px; min-height: 728px; background-image: url(' + window.location.origin + '/img/product/' + side.pivot.image +  ');">';
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
                        //document.getElementById("carousel-sides").innerHTML = sidesinfo;                       
                        document.getElementById("carousel-inner").innerHTML = innersinfo;
                    }
                },
                complete: function(){
                    product.printareas.forEach(printarea => {
                        var canvasside = new fabric.Canvas(printarea.slug+'Canvas');
                            canvasside.side = printarea.side;
                            canvasside.name = printarea.slug;
                            canvasside.left = printarea.left;
                            canvasside.top = printarea.top;
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
                            //displayinfo(e);
                            applyimgfilters(e);
                            //showcorners(e);
                        });
                        canvasside.on('object:moving',function(e)
                        {
                            hidecorners(e);
                        });
                        canvasside.on('object:removed',function(e)
                        {
                            initcanvas(e);
                        });
                    });

                    canvasActive = canvaslist[0];
                    if(canvasdesignlist.length > 0)
                    {
                        loadtmpdesigns();
                    }
                    hidediv('ds-div-product');
                }
            });            
        }

        function initcanvas(e)
        {
            var modifiedObject = e.target;
            if(modifiedObject.className == "canvasShirt")
            {
                var textarea = document.getElementById('textarea');
                var footer_menu = document.getElementById("ds-bottom-main-area");
                var footer_menu_text = document.getElementById("ds-bottom-text-main-area");
                var footer_menu_art = document.getElementById("ds-bottom-clipart-main-area");
                textarea.value = "";
                footer_menu.style.display = "block";
                footer_menu_text.style.display = "none";
                footer_menu_art.style.display = "none";
                font = 'ABeeZee-Regular ';
                setTitleFont();
                deselectAllCanvases();
                save();
            }
        }

        
        $("#ds-design-area").click(function(e)
        {
            initcanvas(e);
        });

        /**
        * Reset designstudio for a new design
        *
        * @return  void
        */
        function startover() 
        {
            $("#start-over-modal").modal('show');
        }

        $("#modal-star-over-btn-yes").on("click", function() 
        {
            $("#start-over-modal").modal('hide');
        });

        $("#modal-star-over-btn-no").on("click", function() 
        {
            $("#start-over-modal").modal('hide');
        });

        function moreless(element)
        {
            if(document.getElementById(element.id).getAttribute('aria-expanded') == "true")
            {
                document.getElementById(element.id).innerHTML = "More Details";
            }
            else
            {
                document.getElementById(element.id).innerHTML = "Less Details";
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
                case 'width':
                    var Inch = Number(document.getElementById('width').value);
                    if (Inch < 0) {
                        Inch = 1;
                        document.getElementById('height').value = 1;
                    } else if (Inch > 12) {
                        Inch = 12;
                        document.getElementById('height').value = 12;
                    }
                    document.getElementById('widthvalue').value = document.getElementById('width').value;
                    var scaleX = (Inch.toFixed(2) * 35) / (1.3 * object.width.toFixed(2));
                    var Inchheigth = object.height * scaleX * 1.3 / 35;
                    if (object.lockUniScaling) {
                        object.set('scaleX', scaleX.toFixed(2));
                        object.set('scaleY', scaleX.toFixed(2));
                        document.getElementById('height').value = Inchheigth.toFixed(2);
                        document.getElementById('heightvalue').value = Inchheigth.toFixed(2);
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
                case 'widthvalue':
                    var Inch = Number(document.getElementById('widthvalue').value);
                    if (Inch < 0) {
                        Inch = 1;
                        document.getElementById('widthvalue').value = 1;
                    } else if (Inch > 12) {
                        Inch = 12;
                        document.getElementById('widthvalue').value = 12;
                    }
                    document.getElementById('width').value = document.getElementById('widthvalue').value;
                    var scaleX = (Inch.toFixed(2) * 35) / (1.3 * object.width.toFixed(2));
                    var Inchheigth = object.height * scaleX * 1.3 / 35;
                    if (object.lockUniScaling) {
                        object.set('scaleX', scaleX.toFixed(2));
                        object.set('scaleY', scaleX.toFixed(2));
                        document.getElementById('height').value = Inchheigth.toFixed(2);
                        document.getElementById('heightvalue').value = Inchheigth.toFixed(2);
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
                    } 
                    else 
                    {
                        object.set('scaleY', scaleY.toFixed(2));
                    }
                    break;
                case 'heightvalueImage':
                    var Inch = Number(document.getElementById('heightvalueImage').value);
                    if (Inch < 0) 
                    {
                        Inch = 1;
                        document.getElementById('heightvalueImage').value = 1;
                    } 
                    else if (Inch > 16) 
                    {
                        Inch = 16;
                        document.getElementById('heightvalueImage').value = 16;
                    }
                    document.getElementById('heightImage').value = document.getElementById('heightvalueImage').value;
                    var scaleY = (Inch * 35) / (1.3 * object.height);
                    var Inchwitdh = object.width * scaleY * 1.3 / 35;
                    if (object.lockUniScaling) 
                    {
                        object.set('scaleX', scaleY.toFixed(2));
                        object.set('scaleY', scaleY.toFixed(2));
                        document.getElementById('widthImage').value = Inchwitdh.toFixed(2);
                        document.getElementById('widthvalueImage').value = Inchwitdh.toFixed(2);
                    } 
                    else 
                    {
                        object.set('scaleY', scaleY.toFixed(2));
                    }
                    break;
                case 'heightvalueText':
                    var Inch = Number(document.getElementById('heightvalueText').value);
                    if (Inch < 0) 
                    {
                        Inch = 1;
                        document.getElementById('heightvalueText').value = 1;
                    } 
                    else if (Inch > 16) 
                    {
                        Inch = 16;
                        document.getElementById('heightvalueText').value = 16;
                    }
                    document.getElementById('heightText').value = document.getElementById('heightvalueText').value;
                    var scaleY = (Inch * 35) / (1.3 * object.height);
                    var Inchwitdh = object.width * scaleY * 1.3 / 35;
                    if (object.lockUniScaling) 
                    {
                        object.set('scaleX', scaleY.toFixed(2));
                        object.set('scaleY', scaleY.toFixed(2));
                        document.getElementById('widthText').value = Inchwitdh.toFixed(2);
                        document.getElementById('widthvalueText').value = Inchwitdh.toFixed(2);
                    } 
                    else 
                    {
                        object.set('scaleY', scaleY.toFixed(2));
                    }
                    break;
                case 'height':
                    var Inch = Number(document.getElementById('height').value);
                    if (Inch < 0) 
                    {
                        Inch = 1;
                        document.getElementById('height').value = 1;
                    } 
                    else if (Inch > 16) 
                    {
                        Inch = 16;
                        document.getElementById('height').value = 16;
                    }
                    document.getElementById('heightvalue').value = document.getElementById('height').value;
                    var scaleY = (Inch * 35) / (1.3 * object.height);
                    var Inchwitdh = object.width * scaleY * 1.3 / 35;
                    if (object.lockUniScaling) 
                    {
                        object.set('scaleX', scaleY.toFixed(2));
                        object.set('scaleY', scaleY.toFixed(2));
                        document.getElementById('width').value = Inchwitdh.toFixed(2);
                        document.getElementById('widthvalue').value = Inchwitdh.toFixed(2);
                    } 
                    else 
                    {
                        object.set('scaleY', scaleY.toFixed(2));
                    }
                    break;
                case 'heighttextModal':
                    var Inch = Number(document.getElementById('heighttextModal').value);
                    if (Inch < 0) 
                    {
                        Inch = 1;
                        document.getElementById('heighttextModal').value = 1;
                    } 
                    else if (Inch > 16) 
                    {
                        Inch = 16;
                        document.getElementById('heighttextModal').value = 16;
                    }
                    document.getElementById('heightvalue').value = document.getElementById('heighttextModal').value;
                    var scaleY = (Inch * 35) / (1.3 * object.height);
                    var Inchwitdh = object.width * scaleY * 1.3 / 35;
                    if (object.lockUniScaling) 
                    {
                        object.set('scaleX', scaleY.toFixed(2));
                        object.set('scaleY', scaleY.toFixed(2));
                        document.getElementById('widthtextModal').value = Inchwitdh.toFixed(2);
                        document.getElementById('widthvaluetextModal').value = Inchwitdh.toFixed(2);
                    } 
                    else 
                    {
                        object.set('scaleY', scaleY.toFixed(2));
                    }
                    break;
                case 'heightvalue':
                    var Inch = Number(document.getElementById('heightvalue').value);
                    if (Inch < 0) 
                    {
                        Inch = 1;
                        document.getElementById('heightvalue').value = 1;
                    } 
                    else if (Inch > 16) 
                    {
                        Inch = 16;
                        document.getElementById('heightvalue').value = 16;
                    }
                    document.getElementById('height').value = document.getElementById('heightvalue').value;
                    var scaleY = (Inch * 35) / (1.3 * object.height);
                    var Inchwitdh = object.width * scaleY * 1.3 / 35;
                    if (object.lockUniScaling) 
                    {
                        object.set('scaleX', scaleY.toFixed(2));
                        object.set('scaleY', scaleY.toFixed(2));
                        document.getElementById('width').value = Inchwitdh.toFixed(2);
                        document.getElementById('widthvalue').value = Inchwitdh.toFixed(2);
                    } 
                    else 
                    {
                        object.set('scaleY', scaleY.toFixed(2));
                    }
                    break;
                case 'heightvaluetextModal':
                    var Inch = Number(document.getElementById('heightvaluetextModal').value);
                    if (Inch < 0) 
                    {
                        Inch = 1;
                        document.getElementById('heightvaluetextModal').value = 1;
                    } 
                    else if (Inch > 16) 
                    {
                        Inch = 16;
                        document.getElementById('heightvaluetextModal').value = 16;
                    }
                    document.getElementById('heighttextModal').value = document.getElementById('heightvaluetextModal').value;
                    var scaleY = (Inch * 35) / (1.3 * object.height);
                    var Inchwitdh = object.width * scaleY * 1.3 / 35;
                    if (object.lockUniScaling) 
                    {
                        object.set('scaleX', scaleY.toFixed(2));
                        object.set('scaleY', scaleY.toFixed(2));
                        document.getElementById('widthtextModal').value = Inchwitdh.toFixed(2);
                        document.getElementById('widthvaluetextModal').value = Inchwitdh.toFixed(2);
                    } 
                    else 
                    {
                        object.set('scaleY', scaleY.toFixed(2));
                    }
                    break;
                default:
            }
            canvasActive.renderAll(canvasActive);
            //savetmpdesign();
            save();
        }

        /*
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
            
            if (e.target.id == "angleImage") 
            {
                object.setAngle(anglevalue).setCoords();
                document.getElementById("anglevalueImage").value = anglevalue;
            } 
            else if (e.target.id == "anglevalueImage") 
            {
                object.setAngle(anglevalue);
                document.getElementById("angleImage").value = anglevalue;
            } 
            else if (e.target.id == "angleImageModal") 
            {
                object.setAngle(anglevalue);
                document.getElementById("anglevalueImageModal").value = anglevalue;
            } 
            else if (e.target.id == "anglevalueImageModal") 
            {
                object.setAngle(anglevalue);
                document.getElementById("angleImageModal").value = anglevalue;
            } 
            else if (e.target.id == "angleText") 
            {
                object.setAngle(anglevalue);
                document.getElementById("anglevalueText").value = anglevalue;
            }
            else if (e.target.id == "anglevalueText") 
            {
                object.setAngle(anglevalue);
                document.getElementById("angleText").value = anglevalue;
            }
            canvasActive.renderAll(canvasActive); 
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
            $(".list-group-item").removeClass("active");
            $(this).addClass("active");
            var object = canvasActive.getActiveObject();
            object.set('flipX', !object.flipX);
            canvasActive.renderAll(canvasActive);
            save();
            //savetmpdesign();
        }

        /**
         * Activa and deactive scale propocional
         * 
         * @return void
         */

        function SetScaleProportional(typeobject) {
            var object = canvasActive.getActiveObject();       
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
            canvasActive.renderAll();
        }

        /**
         * 
         * Transform straigt text into curved text and reverse
         * 
         * @return void
        */

        $('#effect,#straight, #curved').on('click', function(e) 
        {
            if (this.id == "curved")
            {
                effect.checked = true;
            }
            else if (this.id == "straight")
            {
                effect.checked = false;
            }
            else if (this.id == "effect")
            {
                effect.checked = document.getElementById("effect").checked;
            }

            var obj = canvasActive.getActiveObject();
            if (obj)
            {
                default_text = obj.getText();
                props = obj.toObject();
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
                save();
                canvasActive.remove(obj);
                canvasActive.add(textSample);
                canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                canvasActive.renderAll();
            }
        });

        radiusvalue.value = radius.value;
        spacingvalue.value = spacing.value;
        radius.oninput = function() {
            $('#radiusvalue').val(this.value);
            var obj = canvasActive.getActiveObject();
            if (obj) {
                default_text = obj.getText();
                props = obj.toObject();
                if (this.value == 0) {
                    this.value = 1;
                }
                delete props['type'];
                props['textAlign'] = 'center';
                props['reverse'] = false;
                props['spacing'] = $('#spacing').val();
                if ($(this).val() > 0) {
                    props['arcangle'] = Math.abs(this.value);
                } else {
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
            if (obj) {
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
        
        $("input[type=number]").bind('keyup input', function() {
            if ($(this).attr("id") == "radiusvalue" || $(this).attr("id") == "spacingvalue") {
                var obj = canvasActive.getActiveObject();
                if (obj) {
                    default_text = obj.getText();
                    props = obj.toObject();
                    if ($(this).attr("id") == "radiusvalue") {
                        delete props['type'];
                        props['textAlign'] = 'center';
                        if ($(this).val() == 0) {
                            props['arcangle'] = 1;
                            $('#radius').val(1);
                        } else {
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
                    } else if ($(this).attr("id") == "radiusvalueModal") {
                        delete props['type'];
                        props['textAlign'] = 'center';
                        if ($(this).val() == 0) {
                            props['arcangle'] = 1;
                            $('#radiusModal').val(1);
                        } else {
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
                    } else if ($(this).attr("id") == "spacingvalue") {
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
                    } else if ($(this).attr("id") == "spacingvalueModal") {
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
            var zoomvalue = Number(scale) + valueadd;
            document.getElementById(canvasActive.side +  'CanvasShirt').style.transform = "scale(" + zoomvalue + ")";       
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
        });

        /**
            * set the default canvas and print area when the carousel sida is changed
            *
            * @return void
        */
        
        function setcanvas(direction)
        { 
            var find = false;      
            if(direction == "next")
            { 

                for (var i = 0; i < canvaslist.length; i++)
                {
                    var printarea = canvaslist[i];
                    if(printarea.name == canvasActive.name)
                    {
                        if((i+1) < canvaslist.length)
                        {
                            pos=i+1;
                        } 
                        else
                        {
                            pos = i;
                        }  
                        break;
                    }
                }

                for (var i = pos; i < canvaslist.length; i++)
                {
                    if(canvasActive.side != canvaslist[i].side)
                    {
                        canvasActive = canvaslist[i];
                        find = true;
                        break;
                    }
                }

                if(!find)
                {
                    for (var i = 0; i < pos; i++)
                    {
                        if(canvasActive.side != canvaslist[i].side)
                        {
                            canvasActive = canvaslist[i];
                            find = true;
                            break;
                        }
                    }   
                }

            }
            else if(direction == "previous")
            {           
                for (var i = 0; i < canvaslist.length; i++)
                {
                    var printarea = canvaslist[i];
                    if(printarea.name == canvasActive.name)
                    {
                        if(pos-1 == 0)
                        {
                            pos=canvaslist.length-1;
                            break;
                        }
                        else
                        {
                            pos = i;
                        } 
                        break;
                    }               
                }
                
                for (var i = pos; i >= 0 ; i--)
                {
                    if(canvasActive.side != canvaslist[i].side)
                    {
                        canvasActive = canvaslist[i];
                        find = true;
                        break;
                    }
                }
                if(!find)
                {
                    for (var i = canvaslist.length-1; i >= pos ; i--)
                    {
                        if(canvasActive.side != canvaslist[i].side)
                        {
                            canvasActive = canvaslist[i];
                            find = true;
                            break;
                        }
                    }   
                }
            }
            else if(direction == 1)
            {
                canvasActive = canvaslist[0];  
                for (var i = 1; i < canvaslist.length; i++)
                { 
                    $("#"+canvaslist[i].side).removeClass(" active");
                }    
                $("#"+canvaslist[0].side).addClass("active");
            }
            else if(direction == 3)
            {
                canvasActive = canvaslist[2];
               for (var i = 0; i < canvaslist.length; i++)
               {                 
                    $("#"+canvaslist[i].side).removeClass(" active");
               }    
               $("#"+canvaslist[2].side).addClass("active");
            }
            
            var textarea = document.getElementById('textarea');
            var Artcolor = document.getElementById("Artcolor");
            textarea.value = "";
            Artcolor.innerHTML = '';
            font = 'ABeeZee-Regular ';
            setTitleFont();
            deselectAllCanvases();      
            initCenteringGuidelines(canvasActive);      
        }

        function applyimgfilters(o)
        {
            //console.log(o.target);
            if (o.target.filters != undefined && o.target.filters.length > 0)
            {
                o.target.applyFilters(function()
                {
                    canvasActive.renderAll();
                });
            } 
        }

        function ShowGetPrice()
        {  
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
                    //var scale = 0.25;
                    getpriceimages+=' <div class="col-xs-12 thumbnail2"><label for="'+printarea.canvas.name+'colors" id="'+printarea.canvas.name+'colors" name="'+printarea.canvas.name+'colors" style="font-size: 1.1rem;"></label><div style="background-size: cover; background-position: center center;border: 1px solid;background-image: url('+window.location.origin+'/img/product/'+printarea.productimg+');position: relative;margin: auto;width: 743px;height: 810px; webkit-transform-origin: 0 0; transform-origin: 0 0; -webkit-transform: scale('+(scale/2)+') translate(-50%); transform: scale('+(scale/2)+') translate(-50%); left: 50%;"><img class="PreviewSave" src="'+printarea.img+'" class="img-responsive" style="position: absolute; width: '+printarea.canvas.width+'px; height: '+printarea.canvas.height+'px; top: '+printarea.canvas.top+'px; left:'+printarea.canvas.left+'px;"></div></div>';
                    //getpriceimages+=' <div class="col-xs-12 thumbnail2"><label for="frontcolos" id="frontcolos" name="frontcolos" style="font-size: 1.1rem;"></label><div id="frontSavedDesingPreview" style="background-repeat: no-repeat; background-size: cover; background-position: center center; border: 1px #000000 solid;"><img id="frontSavePreview" src="" alt="" class="img-responsive"></div></div>';
                });
                document.getElementById("getpriceDesign").innerHTML = getpriceimages;
                setColorsInk();
                //loadCart('Cart-body-section');
                showdiv('ds-div-productpicker');
            }
            if (num > 0 /*|| product.ispersonalize == 1*/)
            {
                var getpriceimages = "";
                document.getElementById('product_style_area').style.display = 'block';
                document.getElementById('design_name_area').style.display = 'none';
                document.getElementById('AddKeepDesign').style.display = "block";
                if(canvasdesignlist.length == 1)
                {
                    getpriceimages+= '<div class="col-md-4"></div>';
                    canvasdesignlist.forEach(printarea=>
                    {
                        var scale = 0.25;
                        getpriceimages+=' <div class="col-md-4 thumbnail2"><label for="'+printarea.canvas.name+'colors" id="'+printarea.canvas.name+'colors" name="'+printarea.canvas.name+'colors" style="font-size: 1.1rem;"></label><div style="background-size: cover; background-position: center center;border: 1px solid;background-image: url('+window.location.origin+'/img/product/'+printarea.productimg+');position: relative;margin: auto;width: 743px;height: 810px; webkit-transform-origin: 0 0; transform-origin: 0 0; -webkit-transform: scale('+scale+') translate(-50%); transform: scale('+scale+') translate(-50%); left: 50%;"><img class="PreviewSave" src="'+printarea.img+'" class="img-responsive" style="position: absolute; width: '+printarea.width+'px; height: '+printarea.height+'px; top: '+printarea.top+'px; left:'+printarea.left+'px;"></div></div>';
                    });
                    getpriceimages+= '<div class="col-md-4"></div>';
                }
                else if(canvasdesignlist.length == 2)
                {
                    getpriceimages+= '<div class="col-md-1"></div>';
                    canvasdesignlist.forEach(printarea=>
                    {
                        var scale = 0.25;
                        getpriceimages+=' <div class="col-md-4 thumbnail2"><label for="'+printarea.canvas.name+'colors" id="'+printarea.canvas.name+'colors" name="'+printarea.canvas.name+'colors" style="font-size: 1.1rem;"></label><div style="background-size: cover; background-position: center center;border: 1px solid;background-image: url('+window.location.origin+'/img/product/'+printarea.productimg+');position: relative;margin: auto;width: 743px;height: 810px; webkit-transform-origin: 0 0; transform-origin: 0 0; -webkit-transform: scale('+scale+') translate(-50%); transform: scale('+scale+') translate(-50%); left: 50%;"><img class="PreviewSave" src="'+printarea.img+'" class="img-responsive" style="position: absolute; width: '+printarea.width+'px; height: '+printarea.height+'px; top: '+printarea.top+'px; left:'+printarea.left+'px;"></div></div>';
                        getpriceimages+= '<div class="col-md-2"></div>';
                    });
                    getpriceimages+= '<div class="col-md-1"></div>';
                }
                else if(canvasdesignlist.length == 3)
                {
                    canvasdesignlist.forEach(printarea=>
                    {
                        var scale = 0.20;
                        getpriceimages+=' <div class="col-md-4 thumbnail2"><label for="'+printarea.canvas.name+'colors" id="'+printarea.canvas.name+'colors" name="'+printarea.canvas.name+'colors" style="font-size: 1.1rem;"></label><div style="background-size: cover; background-position: center center;border: 1px solid;background-image: url('+window.location.origin+'/img/product/'+printarea.productimg+');position: relative;margin: auto;width: 743px;height: 810px; webkit-transform-origin: 0 0; transform-origin: 0 0; -webkit-transform: scale('+scale+') translate(-50%); transform: scale('+scale+') translate(-50%); left: 50%;"><img class="PreviewSave" src="'+printarea.img+'" class="img-responsive" style="position: absolute; width: '+printarea.width+'px; height: '+printarea.height+'px; top: '+printarea.top+'px; left:'+printarea.left+'px;"></div></div>';
                    });
                }
                else if(canvasdesignlist.length > 3)
                {
                    canvasdesignlist.forEach(printarea=>
                    {
                        var scale = 0.25;
                        getpriceimages+=' <div class="col-md-6 thumbnail2"><label for="'+printarea.canvas.name+'colors" id="'+printarea.canvas.name+'colors" name="'+printarea.canvas.name+'colors" style="font-size: 1.1rem;"></label><div style="background-size: cover; background-position: center center;border: 1px solid;background-image: url('+window.location.origin+'/img/product/'+printarea.productimg+');position: relative;margin: auto;width: 743px;height: 810px; webkit-transform-origin: 0 0; transform-origin: 0 0; -webkit-transform: scale('+scale+') translate(-50%); transform: scale('+scale+') translate(-50%); left: 50%;"><img class="PreviewSave" src="'+printarea.img+'" class="img-responsive" style="position: absolute; width: '+printarea.width+'px; height: '+printarea.height+'px; top: '+printarea.top+'px; left:'+printarea.left+'px;"></div></div>';
                    });
                }
                
                document.getElementById("getpriceDesign").innerHTML = getpriceimages;
                document.getElementById("DesignNameDesigns").innerHTML = getpriceimages;
                    
                if(textpersonalizecheck.checked == 1 || numberpersonalizecheck == 1)
                {
                    if(personalizelist != null && personalizelist.length > 0)
                    {
                        setColorsInk();
                        for (var i = 0; i < currentdesign.product.parent.sizes.length; i++)
                        {
                            if (currentdesign.product.parent.sizes[i].quantity > 0)
                            {
                                document.getElementById(currentdesign.product.parent.sizes[i].name).value = (currentdesign.product.parent.sizes[i].quantity);
                                temp(document.getElementById(currentdesign.product.parent.sizes[i].name));
                            }
                        }
                        //$('#productPicker').modal();
                    }
                    else if(shoppingcart.items.length > 0)
                    {
                        setColorsInk();
                        buildcart('Cart-Body');  
                        //$('#productPicker').modal();  
                        document.getElementById("Cart").style.display = 'block';
                    }
                    else
                    {
                        showalert('getpricepersonalizealert', 'You must to save a personalize list before get the price', 'danger', 'Personalize Get price');
                    }
                }
                else
                {
                    setColorsInk();
                    if(shoppingcart.items.length > 0)
                    {
                        buildcart('Cart-Body');    
                    }
                    //$('#productPicker').modal();
                }
            }
            else if(shoppingcart.items.length > 0)
            {
                var getpriceimages = "";
                document.getElementById('product_style_area').style.display = 'none';
                document.getElementById('design_name_area').style.display = 'none';
                document.getElementById('AddKeepDesign').style.display = "none";
                document.getElementById('finalcheckout').style.display = 'block';
                
                if(canvasdesignlist.length == 1)
                {
                    getpriceimages+= '<div class="col-md-4"></div>';
                    canvasdesignlist.forEach(printarea=>
                    {
                        var scale = 0.25;
                        getpriceimages+=' <div class="col-md-4 thumbnail2"><label for="'+printarea.canvas.name+'colors" id="'+printarea.canvas.name+'colors" name="'+printarea.canvas.name+'colors" style="font-size: 1.1rem;"></label><div style="background-size: cover; background-position: center center;border: 1px solid;background-image: url('+window.location.origin+'/img/product/'+printarea.productimg+');position: relative;margin: auto;width: 743px;height: 810px; webkit-transform-origin: 0 0; transform-origin: 0 0; -webkit-transform: scale('+scale+') translate(-50%); transform: scale('+scale+') translate(-50%); left: 50%;"><img class="PreviewSave" src="'+printarea.img+'" class="img-responsive" style="position: absolute; width: '+printarea.width+'px; height: '+printarea.height+'px; top: '+printarea.top+'px; left:'+printarea.left+'px;"></div></div>';
                    });
                    getpriceimages+= '<div class="col-md-4"></div>';
                }
                else if(canvasdesignlist.length == 2)
                {
                    getpriceimages+= '<div class="col-md-1"></div>';
                    canvasdesignlist.forEach(printarea=>
                    {
                        var scale = 0.25;
                        getpriceimages+=' <div class="col-md-4 thumbnail2"><label for="'+printarea.canvas.name+'colors" id="'+printarea.canvas.name+'colors" name="'+printarea.canvas.name+'colors" style="font-size: 1.1rem;"></label><div style="background-size: cover; background-position: center center;border: 1px solid;background-image: url('+window.location.origin+'/img/product/'+printarea.productimg+');position: relative;margin: auto;width: 743px;height: 810px; webkit-transform-origin: 0 0; transform-origin: 0 0; -webkit-transform: scale('+scale+') translate(-50%); transform: scale('+scale+') translate(-50%); left: 50%;"><img class="PreviewSave" src="'+printarea.img+'" class="img-responsive" style="position: absolute; width: '+printarea.width+'px; height: '+printarea.height+'px; top: '+printarea.top+'px; left:'+printarea.left+'px;"></div></div>';
                        getpriceimages+= '<div class="col-md-2"></div>';
                    });
                    getpriceimages+= '<div class="col-md-1"></div>';
                }
                else if(canvasdesignlist.length == 3)
                {
                    canvasdesignlist.forEach(printarea=>
                    {
                        var scale = 0.20;
                        getpriceimages+=' <div class="col-md-4 thumbnail2"><label for="'+printarea.canvas.name+'colors" id="'+printarea.canvas.name+'colors" name="'+printarea.canvas.name+'colors" style="font-size: 1.1rem;"></label><div style="background-size: cover; background-position: center center;border: 1px solid;background-image: url('+window.location.origin+'/img/product/'+printarea.productimg+');position: relative;margin: auto;width: 743px;height: 810px; webkit-transform-origin: 0 0; transform-origin: 0 0; -webkit-transform: scale('+scale+') translate(-50%); transform: scale('+scale+') translate(-50%); left: 50%;"><img class="PreviewSave" src="'+printarea.img+'" class="img-responsive" style="position: absolute; width: '+printarea.width+'px; height: '+printarea.height+'px; top: '+printarea.top+'px; left:'+printarea.left+'px;"></div></div>';
                    });
                }
                else if(canvasdesignlist.length > 3)
                {
                    canvasdesignlist.forEach(printarea=>
                    {
                        var scale = 0.25;
                        getpriceimages+=' <div class="col-md-6 thumbnail2"><label for="'+printarea.canvas.name+'colors" id="'+printarea.canvas.name+'colors" name="'+printarea.canvas.name+'colors" style="font-size: 1.1rem;"></label><div style="background-size: cover; background-position: center center;border: 1px solid;background-image: url('+window.location.origin+'/img/product/'+printarea.productimg+');position: relative;margin: auto;width: 743px;height: 810px; webkit-transform-origin: 0 0; transform-origin: 0 0; -webkit-transform: scale('+scale+') translate(-50%); transform: scale('+scale+') translate(-50%); left: 50%;"><img class="PreviewSave" src="'+printarea.img+'" class="img-responsive" style="position: absolute; width: '+printarea.width+'px; height: '+printarea.height+'px; top: '+printarea.top+'px; left:'+printarea.left+'px;"></div></div>';
                    });
                }
                document.getElementById("getpriceDesign").innerHTML = getpriceimages;
                document.getElementById("DesignNameDesigns").innerHTML = getpriceimages;
                setColorsInk();
                if(shoppingcart.items.length > 0)
                {
                    buildcart("Cart-Body");
                }
                document.getElementById("Cart").style.display = 'block';
                showdiv('ds-div-productpicker');
            }
            else
            {
                showalert('getpricealert', 'No design to get price', 'danger', 'Get price');
            }
        }

        /*function setColorsInk() 
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
                            //else if (objs[i]._element.src.includes('Patriotic/Police')) 
                            //{
                            //    arraycolors.push("#ffffff");
                            //    arraycolors.push("#0d45e4");
                            //} 
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
                    if(document.getElementById(canvas.name+"colors") != undefined)
                    {
                        document.getElementById(canvas.name+"colors").innerHTML = script; 
                    }
                    canvas.ColorList = arraycolors;
                }
            });
            
        }*/

        function setColorsInk() 
        {  
            var pos = 0;
            canvaslist.forEach(canvas=>{ 
                var arraycolors = [];
                arraypersonalizecolors = [];
                if(canvas.getObjects().length > 0)
                {
                    var objs = canvas.getObjects();
                    for (var i = 0; i < objs.length; i++) 
                    {
                        if (objs[i].type === "image") 
                        {
                            if (objs[i].id != "" && objs[i].id != null && !Number.isInteger(objs[i].id)) 
                            {
                                if (objs[i].id.indexOf("uploaded") != -1 || objs[i].id.indexOf("Uploaded") != -1)
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
                            if (objs[i].fill != null && objs[i].fill.length > 0) 
                            {
                                var color = rgb2hex(objs[i].fill);
                                if (!validate_element(color, arraycolors)) 
                                {
                                    arraycolors.push(color);
                                }
                            } 
                            else if (!validate_element("#000000", arraycolors)) 
                            {
                                arraycolors.push("#000000");
                            }
                            
                            if (objs[i].stroke != null && objs[i].stroke.length > 0) 
                            {
                                var color = rgb2hex(objs[i].stroke);
                                if (!validate_element(color, arraycolors)) 
                                {
                                    arraycolors.push(color);
                                }
                            }
                            if (objs[i].type === "i-text") 
                            {
                                if (objs[i].fill != null && objs[i].fill.length > 0) 
                                {
                                    var color = rgb2hex(objs[i].fill);
                                    if (!validate_element_personalize(color, arraypersonalizecolors)) 
                                    {
                                        var colorelement = { type: "", color: "" };
                                        colorelement.type = "fill" + objs[i].id;
                                        colorelement.color = color;
                                        arraypersonalizecolors.push(colorelement);
                                    }
                                } 
                                if (objs[i].stroke != null && objs[i].stroke.length > 0) 
                                {
                                    var color = rgb2hex(objs[i].stroke);
                                    if (!validate_element_personalize(color, arraypersonalizecolors)) 
                                    {
                                        var colorelement = { type: "", color: "" };
                                        colorelement.type = "stroke" + objs[i].id;
                                        colorelement.color = color;
                                        arraypersonalizecolors.push(colorelement);
                                    }
                                }                                
                            }
                        } 
                        else 
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
                    if (arraycolors.length > 8) 
                    {
                        var script = "Ink Color: full color";
                    } 
                    else 
                    {
                        var script = "Ink Color:" + arraycolors.length;
                    }
                    if(document.getElementById(canvas.name+"colors") != undefined)
                    {
                        document.getElementById(canvas.name+"colors").innerHTML = script; 
                    }
                    canvas.ColorList = arraycolors;
                }
                pos++;
            });
            
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
                document.getElementById('designnameshare').value = "";
                document.getElementById('to_email').value = "";
                document.getElementById('message').value = "";

                document.getElementById('design_name_area_only').style.display = "none";
                document.getElementById("loaderOnly").style.display = "none";
                document.getElementById("loaderEmail").style.display = "none";
                document.getElementById('designNameOnly').value = "";
                document.getElementById('savesharediv').style.display = "block";
                canvasdesignlist.forEach(printarea=>
                {
                    //var scale = 0.25;
                    saveshareimages+= '<div class="col-xs-12 thumbnail2"><div class="product-item" style="background-size: cover; background-position: center center;border: 1px solid;background-image: url('+window.location.origin+'/img/product/'+printarea.productimg+');position: relative;margin: auto;width: 743px;height: 810px; webkit-transform-origin: 0 0; transform-origin: 0 0; -webkit-transform: scale('+(scale/2)+') translate(-50%); transform: scale('+(scale/2)+') translate(-50%); left: 50%;"><img class="PreviewSave" src="'+printarea.img+'" class="img-responsive" style="position: absolute; width: '+printarea.canvas.width+'px; height: '+printarea.canvas.height+'px; top: '+printarea.canvas.top+'px; left:'+printarea.canvas.left+'px;"></div></div>';
                });
                document.getElementById("savedDesigns").innerHTML = saveshareimages;
                if (user != undefined && user != null && user != '')
                {
                    document.getElementById('to_email').value = user.email;
                }
                showdiv('ds-div-saveshare');
            }
            else
            {
                showalert('savesharealert', 'No design to save and share!', 'danger', 'Save & Share');
            }
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

        function setDesignName() 
        {

            document.getElementById('design_name_area').style.display = "block";
            //document.getElementById('SaveShareModalDiv').style.display = "none";
            document.getElementById('product_style_area').style.display = "none";
            document.getElementById('cart_area').style.display = "none";
            //document.getElementById('AddKeepDesign').style.display = "none";
            //document.getElementById('continuedesign').style.display = "none";
        }

        function SaveDesignNameWindow(value) 
        {
            switch (value) 
            {
                
                case 'AddKeepDesign':
                    if (currentdesign.num_shirts < currentdesign.product.parent.min_quantity) 
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
                    hidediv('ds-div-productpicker');
                    //$('#productPicker').modal('hide');
                    break;
                case 'SaveContinue':
                    if (editdesign != null) 
                    {
                        currentdesign._design._design_name = currentdesign._design._design_name.split("_")[1];
                        AddKeepDesign();
                    } 
                    else 
                    {
                        if (document.getElementById("designName").value != "" && document.getElementById("designemail").value != "" && ValidateEmail(document.getElementById("designemail").value)) 
                        {
                            if (document.getElementById("designName").value.split(" ").length > 1) 
                            {
                                showalert('Message15', 'Please enter a Design Name without space!', 'danger', 'Attencion!');
                            } 
                            else 
                            {
                                var exists = false;
                                if (shoppingcart.items.length > 0) 
                                {
                                    for (var i = 0; i < shoppingcart.items.length; i++) 
                                    {
                                        
                                        var design_name = document.getElementById("designName").value;
                                        if (design_name === shoppingcart.items[i].name) 
                                        {
                                            exists = true;
                                        }
                                    }
                                }
                                if (exists) 
                                {
                                    //showconfirmalert('Message14', 'You have a previous design saved with this name. Do you want override this design!', 'warning', 'Attencion!');
                                    showalert('Message14', 'You have a previous design saved with this name!', 'danger', 'Attencion!');
                                } 
                                else 
                                {
                                    currentdesign.name = document.getElementById('designName').value;
                                    currentdesign.email = document.getElementById('designemail').value;
                                    document.getElementById('product_style_area').style.display = 'none';
                                    document.getElementById('AddKeepDesign').style.display = "none";
                                    document.getElementById('KeepDesign').style.display = "block";
                                    document.getElementById('finalcheckout').style.display = 'inline';
                                    document.getElementById('continuedesign').style.display = 'none';
                                    document.getElementById('design_name_area').style.display = "none";
                                    document.getElementById('cart_area').style.display = "block";
                                    AddKeepDesign();
                                }
                            }
                        } 
                        else 
                        {
                            if (document.getElementById("designName").value == "" && document.getElementById("designemail").value == "") 
                            {
                                showalert('Message13', 'Please enter a Design Name and email to continue!', 'danger', 'Attencion!');
                            } 
                            else if (document.getElementById("designName").value == "") 
                            {
                                showalert('Message11', 'Please enter a Design Name to continue!', 'danger', 'Attencion!');
                            } 
                            else 
                            {
                                showalert('Message12', 'The email format is incorrect. Please enter a valid email address to continue!', 'danger', 'Attencion!');
                            }
                        }
                    }
                    break;
                case 'Check-out':
                    //Order._Product_design_list[position]._design._design_name = document.getElementById('designName').value;
                    Checkout();
                    break;
                case 'saveasguest':

                    if (document.getElementById("designnameshare").value != "" && document.getElementById('to_email').value != "") 
                    {
                        if (ValidateEmail(document.getElementById('to_email').value)) 
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
                                currentdesign.name = document.getElementById('designnameshare').value;
                                currentdesign.email = document.getElementById('to_email').value;
                                saveDesign("saveasguest");
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
                        /*deselectAllCanvases();
                        hidediv('ds-div-saveshare');
                        document.getElementById('panellogin').style.display = 'block';
                        document.getElementById('panelnew').style.display = 'block';
                        document.getElementById('panelregister').style.display = 'none';
                        showdiv('ds-div-signup');*/
                        showalert('savemessage', 'Create your account with us and enjoy the benefits of being a member', 'danger', 'You do not have permission to save the design.');
                    }
                    break;
                case 'SaveContinueOnly':
                    if (document.getElementById("designNameOnly").value != "") 
                    {
                        var exists = false;
                        /*if (shoppingcart.items.length > 0) 
                        {
                            for (var i = 0; i < shoppingcart.items.length; i++) 
                            {
                                var design_name = shoppingcart.items[i].name;
                                if (design_name == document.getElementById("designNameOnly").value) 
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
                            currentdesign.name = document.getElementById('designNameOnly').value;
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
            setColorsInk();
            if ( textAdded || clipArtAdded || imageUploaded || colorChanged || addingToCart || resized || Checked || productchanged || saveOnly) 
            {
                if (from == "saveOnly") 
                {
                    //document.getElementById("loaderOnly").style.display = "block";
                    //document.getElementById('design_name_area_only').style.display = "none";
                } 
                else if (from == "saveasguest") 
                {
                    //document.getElementById("loaderEmail").style.display = "block";
                }
                else if (from == "AddKeepDesign") 
                {
                    document.getElementById("loader").style.display = "block";
                    document.getElementById('KeepDesign').style.display = "none";
                    document.getElementById('finalcheckout').style.display = "none";
                }
                var design = [];
                canvaslist.forEach(canvas=>{
                    canvas.discardActiveObject();
                    if(canvas.getObjects().length > 0)
                    {
                        
                        var saveddesign =  {status:"created"};
                        if (canvas.width != 0)
                        {
                            saveddesign.toDataURL = canvas.toDataURL('image/png');
                            saveddesign.svg = canvas.toSVG();
                            saveddesign.json = JSON.stringify(canvas);
                        }
                        saveddesign.width_canvas = canvas.width;
                        saveddesign.height_canvas = canvas.height;
                        saveddesign.width_div = document.getElementById(canvas.side + 'CanvasShirt').style.width.replace("px", "");
                        saveddesign.height_div = document.getElementById(canvas.side + 'CanvasShirt').style.height.replace("px", "");
                        saveddesign.border_color_div = 0;
                        saveddesign.left = document.getElementById(canvas.name + 'canvas-wrapper').style.left.replace("px", "");
                        saveddesign.top = document.getElementById(canvas.name + 'canvas-wrapper').style.top.replace("px", "");
                        saveddesign.border_color_canvas = 0;
                        saveddesign.design_image = "";
                        saveddesign.design_product_image = "";
                        newurl = document.getElementById(canvas.side + 'CanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById(canvas.side + 'CanvasShirt').style.backgroundImage.replace("url", "").length - 2);                           
                        saveddesign.product_image = newurl.replace("https://www.vividcustoms.com/","");
                        saveddesign.side = canvas.name;
                        saveddesign.colorlist = canvas.ColorList;
                        //Order._Product_design_list[position]._design._sideList[0]._product_image = document.getElementById('frontCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('frontCanvasShirt').style.backgroundImage.replace("url", "").length - 2);
                        design.push(saveddesign);
                    }  
                });

               
                if (from == "saveOnly") 
                { 
                   //design.email = user.email;
                   $.ajax({
                        type:'POST',
                        dataType: 'json', 
                        data: {
                                email: user.email,
                                name: currentdesign.name,
                                product: product.id,
                                design: JSON.parse(JSON.stringify(design)),
                                personalizetype : currentdesign.personalizetype,
                                personalizelist: currentdesign.personalizelist,
                            },
                        url: window.location.origin + '/savedesign',
                        beforeSend: function()
                        {
                            console.log('save design');
                        },
                        success:function(data)
                        {  
                            console.log(data);
                            currentdesign.id = data.design.id;
                            document.getElementById("loaderOnly").style.display = "none";
                            document.getElementById('design_name_area_only').style.display = "block";
                            showalert('designsaved', 'Design saved!', 'success', 'Saved Design');
                        },
                        error: function(error)
                        {
                            console.log("error in method saveDesign('saveOnly'):");
                            console.log(error);
                        }
                    });
                } 
                else if (from == "saveasguest") 
                {  
                    $.ajax({
                        type:'POST',
                        dataType: 'json', 
                        data: {
                                email: currentdesign.email,
                                name: currentdesign.name,
                                product: currentdesign.product.id,
                                design: JSON.parse(JSON.stringify(design)),
                                personalizetype : currentdesign.personalizetype,
                                personalizelist: currentdesign.personalizelist,
                            },
                        url: window.location.origin + '/saveasguest',
                        beforeSend: function()
                        {
                            console.log('save as guest');
                        },
                        success:function(data)
                        {  
                            currentdesign.id = data.design.id;
                            console.log(data);
                            document.getElementById("loaderEmail").style.display = "none";
                            showalert('designsaved', 'Design saved!', 'success', 'Saved Design');
                        },
                        error: function(error)
                        {
                            console.log("error in method saveDesign('saveasguest'):");
                            console.log(error);
                        }
                    });
                    
                }
                else if (from == "AddKeepDesign")
                {  
                    var item= {name:null, type:'Designstudio', product:null, num_shirts:0, price_per_shirt:0, total:0, sides:[], sizes:currentdesign.product.parent.sizes, personalize: null};
                    item.name = currentdesign.name;
                    item.displayname = currentdesign.name;
                    var productitem = {id:null, brand:null, stylenumber:null, color:null};
                    productitem.id = currentdesign.product.id;
                    productitem.brand = currentdesign.product.brand;
                    productitem.stylenumber = currentdesign.product.stylenumber;
                    productitem.color = currentdesign.product.color.name;
                    productitem.name = currentdesign.product.name;
                    productitem.parent = currentdesign.product.parent.id;
                    item.product = productitem;
                    design.personalizetype = currentdesign.personalizetype;
                    design.personalizelist = personalizelist;
                    item.personalizetype = currentdesign.personalizetype;
                    item.personalizelist = personalizelist;
                    currentdesign.arrayside.forEach(sideitem => 
                    {
                        var side = {name:null, img:null,colorlist: null};
                        side.img = sideitem.img;
                        side.name = sideitem.side;
                        side.colorlist = sideitem.canvas.ColorList.length;
                        item.sides.push(side);
                    });
                    item.name = currentdesign.name;
                    item.displayname = currentdesign.name;
                    item.num_shirts = currentdesign.num_shirts;
                    item.price_per_shirt = Number(currentdesign.price_per_shirt);
                    item.total = Number(currentdesign.price_per_shirt) * Number(currentdesign.num_shirts);
                    shoppingcart.items.push(item); 
                    shoppingcart.subtotal+= Number(item.total);
                    shoppingcart.total += Number(item.total);
                   
                    $.ajax({
                        type:'POST',
                        dataType: 'json', 
                        data: {
                                email: currentdesign.email,
                                name: currentdesign.name,
                                product: currentdesign.product.id,
                                design: JSON.parse(JSON.stringify(design)),
                                shoppingcart:  JSON.parse(JSON.stringify(shoppingcart)),
                                personalizetype : currentdesign.personalizetype,
                                personalizelist: currentdesign.personalizelist,
                            },
                        url: window.location.origin + '/savegetprice',
                        success:function(data)
                        {  
                            shoppingcart = data.shoppingcart;
                            if(shoppingcart.items.length > 0)
                            {
                                buildcart("Cart-Body");
                            }
                            currentdesign = {id:'',arrayside :[], name:'',product:product, type:"Designstudio", num_shirts:0, price_per_shirt:0, total:0, personalize: null};
                            cleanInputQuantity();
                            position++;
                            document.getElementById("Cart").style.display = "block"; 
                            document.getElementById("KeepDesign").style.display = "inline"; 
                            var designtmplist = document.getElementById("designtmplist");
                            designtmplist.innerHTML = "";
                            canvasdesignlist = [];
                            currentdesign.arrayside = [];
                            canvaslist.forEach(canvas => 
                            {
                                canvas.clear();
                            });
                            showalert('designsaved', 'Item added success!', 'success', 'Saved Design');
                        },
                        error: function(error)
                        {
                            console.log("error in method saveDesign('AddKeepDesign'):");
                            console.log(error);
                        }
                    });
                    document.getElementById("loader").style.display = "none";
                    document.getElementById('KeepDesign').style.display = "none";
                    document.getElementById('finalcheckout').style.display = "inline";
                }
                textAdded = clipArtAdded = imageUploaded = colorChanged = addingToCart = resized = Checked = productchanged = saveOnly = false;
            }
            else
            {
                if (from == "saveOnly") 
                {
                    showalert('savealert', 'No design to save!', 'danger', 'Save');
                } 
                else if (from == "saveasguest") 
                {
                    showalert('savealert', 'No design to save!', 'danger', 'Save');
                }
                else if (from == "AddKeepDesign")
                {
                    showalert('savealert', 'No design to save!', 'danger', 'Save');
                }
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
                type:'POST',
                dataType: 'json', 
                url: window.location.origin + '/logindesignstudio',
                data: {_token:token,
                        email:email,
                        password:password},
                success: function (data)
                {
                    if(data.status == "success")
                    {
                        user = data.user;
                        hidediv('ds-div-signup');
                        showdiv('ds-div-saveshare');
                        setDesignNameOnly();
                    }
                    else 
                    {
                        showalert("loginerror", 'Your Login Name or Password is invalid', 'danger', 'Login Error');
                    }
                    
                },
                error: function (data)
                {
                    //console.log(data);
                    //console.log('Fail to run Login..');
                    //alert('Fail to run Login..');
                }
            });
            return false;
        }

        function register()
        {
            var token    = $("input[name=_token]").val();
            var firstname    = $("input[name=firstName]").val();
            var lastname = $("input[name=lastname]").val();
            var username = $("input[name=username]").val();
            var password = $("input[name=password]").val();
            var email = $("input[name=email]").val();
            var phone = $("input[name=phone]").val();
            var data = {
                _token:token,
                firstname:firstname,
                lastname:lastname,
                username:username,
                password:password,
                email:email,
                phone:phone
            };
            // Ajax Post 
            $.ajax({
                type:'POST',
                dataType: 'json', 
                url: window.location.origin + '/registerdesignstudio',
                data: {
                        _token:token,
                        firstname:firstname,
                        lastname:lastname,
                        username:username,
                        password:password,
                        email:email,
                        phone:phone
                    },
                success: function (data)
                {
                    if(data.status == "success")
                    {
                    user = data.user;
                    //hidediv('ds-div-signup');
                    //showdiv('ds-div-saveshare');
                    //setDesignNameOnly();
                    }
                    else 
                    {
                        showalert("loginerror", 'Your Login Name or Password is invalid', 'danger', 'Login Error');
                    }
                    
                },
                error: function (data)
                {
                    //console.log(data);
                    //console.log('Fail to run Login..');
                    //alert('Fail to run Login..');
                }
            });
            return false;
        }

        function setDesignNameOnly() 
        {
            document.getElementById('design_name_area_only').style.display = "block";
            document.getElementById('savesharediv').style.display = "none";
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


        function showconfirmalert(id, message, type, title)
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
            var modalcontent = document.createElement('div');
            modalcontent.className = 'modal-content';
            modaldialog.appendChild(modalcontent);
            var modalheader = document.createElement('div');
            modalheader.className = 'modal-header modal-header-' + type;
            modalcontent.appendChild(modalheader);
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
            modalcontent.appendChild(alert);
            var modalfooter = document.createElement('div');
            modalfooter.className = 'modal-footer';
            var buttonyes = document.createElement("button");
            buttonyes.className = 'btn btn-default';
            buttonyes.setAttribute("data-dismiss", "modal");
            /*buttonyes.setAttribute("aria-hidden", "true");
            buttonyes.setAttribute("value", "Close");*/
            buttonyes.innerHTML = 'Yes';
            buttonyes.addEventListener("click", function() {
                confirmsave(id);
            });
            modalfooter.appendChild(buttonyes);
            var buttonno = document.createElement("button");
            buttonno.className = 'btn btn-primary';
            buttonno.setAttribute("data-dismiss", "modal");
            /*buttonno.setAttribute("aria-hidden", "true");
            buttonno.setAttribute("value", "Close");*/
            buttonno.innerHTML = 'No';
            modalfooter.appendChild(buttonno);
            modalcontent.appendChild(modalfooter);
            document.getElementsByTagName('body')[0].appendChild(modalfade);
            $('#' + id).modal();
        }

        function confirmsave(elementid)
        {
            if (elementid == "Message14")
            {
                Order._Product_design_list[position]._design._design_name = document.getElementById('designName').value;
                Order._Customer.email = document.getElementById("designemail").value;
                document.getElementById('design_name_area').style.display = "none";
                AddKeepDesign();
            } 
            else
            {
               currentdesign.name = document.getElementById('designNameOnly').value;
                document.getElementById('designNameOnly').value = "";
                saveOny = true;
                saveDesign("saveOnly");
            }
        }

        function temp(element)
        {   
            currentdesign.num_shirts = 0;
            for (var i = 0; i < currentdesign.product.parent.sizes.length; i++)
            {   
                if(currentdesign.product.parent.sizes[i].name == element.id)
                {
                    currentdesign.product.parent.sizes[i].quantity =  Number(element.value);
                    currentdesign.num_shirts +=  Number(element.value);
                    //break;
                }
                else
                {
                    currentdesign.num_shirts += currentdesign.product.parent.sizes[i].quantity;
                }
            }  
            //Order._Product_design_list[position].getObjectByName(element.id)._quantity = Number(element.value);
            //quantity = Order._Product_design_list[position].numshirts();
            calc_price();
        }

        function compareValues(key, order='asc') {
            return function(a, b) {
                if(!a.hasOwnProperty(key) || !b.hasOwnProperty(key)) {
                // property doesn't exist on either object
                return 0;
                }

                const varA = (typeof a[key] === 'string') ?
                a[key].toUpperCase() : a[key];
                const varB = (typeof b[key] === 'string') ?
                b[key].toUpperCase() : b[key];

                let comparison = 0;
                if (varA < varB) {
                comparison = 1;
                } else if (varA > varB) {
                comparison = -1;
                }
                return (
                (order == 'desc') ? (comparison * -1) : comparison
                );
            };
        }

        function calc_price() 
        {
            if ((document.getElementById("textpersonalizecheck").checked /*|| document.getElementById("textpersonalizecheckModal").checked*/) && (document.getElementById("numberpersonalizecheck").checked /*|| document.getElementById("numberpersonalizecheckModal").checked*/))
            {
                currentdesign.personalizetype = "both";
            }
            else if ((document.getElementById("textpersonalizecheck").checked /*|| document.getElementById("textpersonalizecheckModal").checked*/) && (!document.getElementById("numberpersonalizecheck").checked /*|| !document.getElementById("numberpersonalizecheckModal").checked*/))
            {
                currentdesign.personalizetype = "text only";
            }
            else if ((!document.getElementById("textpersonalizecheck").checked /*|| !document.getElementById("textpersonalizecheckModal").checked*/) && (document.getElementById("numberpersonalizecheck").checked /*|| document.getElementById("numberpersonalizecheckModal").checked*/))
            {
                currentdesign.personalizetype = "number only";
            }
            else
            {
                currentdesign.personalizetype = "none";
            }

            console.log(currentdesign.personalizetype)
            if(currentdesign.personalizetype == "none")
            {
                var sidescolors = [];
                for(var i= 0; i < currentdesign.arrayside.length; i++)
                {
                    var element = {quantity:currentdesign.arrayside[i].canvas.ColorList.length, name:currentdesign.arrayside[i].canvas.contextContainer.canvas.id, price:0.00}
                    sidescolors.push(element);
                }
                $.ajax({
                    type:'POST',
                    dataType: 'json', 
                    data: {
                            amnt: currentdesign.num_shirts,
                            sidescolors: JSON.stringify(sidescolors.sort(compareValues('quantity'))),
                            product: product.id,
                            list: JSON.stringify(currentdesign.product.parent.sizes),
                        },
                    url: window.location.origin + '/getquote',
                    success:function(data)
                    {  
                        var msg = data.price;
                        //display price in "Add Product and Styles"
                        if (currentdesign.num_shirts > 0) 
                        {
                            //document.getElementById('totalPriceLabel').innerHTML = msg;
                            //price.total = Number(msg);
                            document.getElementById("itemPriceLabel").style.visibility = "visible";
                            document.getElementById("itemPriceLabel").style.display = "block";
                            //itemTotal = (price.num_shirts) * pricePerUnit;                
                            document.getElementById('itemPrice').style.visibility = "visible";
                            document.getElementById('itemPrice').style.display = "inline";
                            document.getElementById('itemPrice').innerHTML = "$" + (msg / currentdesign.num_shirts).toFixed(2);
                            //Order._Product_design_list[position]._price_per_shirt = (msg / currentdesign.num_shirts).toFixed(2);
                            document.getElementById("numOfShirtsLabel").style.visibility = "visible";
                            document.getElementById('numOfShirtsLabel').innerHTML = " <b>Quantity:</b> <span style='color: #5cb85c; font-family: Arial;'>" + currentdesign.num_shirts + " item(s)</span> ";
                            document.getElementById("itemTotal").style.visibility = "visible";
                            document.getElementById('itemTotal').innerHTML = "$" + (msg * 1).toFixed(2);
                            //Order._Product_design_list[position]._total = (msg * 1).toFixed(2);
                            document.getElementById("itemTotalLabel").style.visibility = "visible";
                        }
                        else 
                        {
                            document.getElementById("itemPriceLabel").style.visibility = "visible";
                            document.getElementById("itemPriceLabel").style.display = "block";
                            //itemTotal = (price.num_shirts) * pricePerUnit;                
                            document.getElementById('itemPrice').style.visibility = "visible";
                            document.getElementById('itemPrice').style.display = "inline";
                            document.getElementById('itemPrice').innerHTML = "$0";
                            document.getElementById("numOfShirtsLabel").style.visibility = "visible";
                            document.getElementById('numOfShirtsLabel').innerHTML = " <b>Quantity:</b> <span style='color: #5cb85c; font-family: Arial;'> 0 item(s)</span> ";
                            document.getElementById("itemTotal").style.visibility = "visible";
                            document.getElementById('itemTotal').innerHTML = "$0";
                            document.getElementById("itemTotalLabel").style.visibility = "visible";
                        }
                        //showing shipping information when
                        //getShippingInformation();
                    }
                });
            }
            else
            {
                setColorsInk();
                currentdesign.personalize = JSON.stringify(arraypersonalizecolors);
                $.ajax({
                    type:'POST',
                    dataType: 'json', 
                    data: {
                            amnt: currentdesign.num_shirts,
                            sidescolorspersonalize: JSON.stringify(arraypersonalizecolors),
                            list: JSON.stringify(currentdesign.product.parent.sizes),
                            personalizetype: currentdesign.personalizetype,
                        },
                    url: window.location.origin + '/getquotepersonalize',
                    beforeSend: function()
                    {
                      
                    },
                    success:function(data)
                    {  
                        //console.log(data);
                     var msg = data.price;
                        currentdesign.product.parent.sizes = data.sizelist;
                        //display price in "Add Product and Styles"
                        if (currentdesign.num_shirts > 0) 
                        {
                            currentdesign.price_per_shirt = msg / currentdesign.num_shirts;
                            currentdesign.total = msg;
                            //document.getElementById('totalPriceLabel').innerHTML = msg;
                            //price.total = Number(msg);
                            document.getElementById("itemPriceLabel").style.visibility = "visible";
                            document.getElementById("itemPriceLabel").style.display = "block";
                            //itemTotal = (price.num_shirts) * pricePerUnit;                
                            document.getElementById('itemPrice').style.visibility = "visible";
                            document.getElementById('itemPrice').style.display = "inline";
                            document.getElementById('itemPrice').innerHTML = "$" + (msg / currentdesign.num_shirts).toFixed(2);
                            //currentdesign._price_per_shirt = (msg / currentdesign.num_shirts).toFixed(2);
                            document.getElementById("numOfShirtsLabel").style.visibility = "visible";
                            document.getElementById('numOfShirtsLabel').innerHTML = " <b>Quantity:</b> <span style='color: #5cb85c; font-family: Arial;'>" + currentdesign.num_shirts + " item(s)</span> ";
                            document.getElementById("itemTotal").style.visibility = "visible";
                            document.getElementById('itemTotal').innerHTML = "$" + (msg * 1).toFixed(2);
                            //currentdesign._total = (msg * 1).toFixed(2);
                            document.getElementById("itemTotalLabel").style.visibility = "visible";
                        }
                        else 
                        {
                            document.getElementById("itemPriceLabel").style.visibility = "visible";
                            document.getElementById("itemPriceLabel").style.display = "block";
                            //itemTotal = (price.num_shirts) * pricePerUnit;                
                            document.getElementById('itemPrice').style.visibility = "visible";
                            document.getElementById('itemPrice').style.display = "inline";
                            document.getElementById('itemPrice').innerHTML = "$0";
                            document.getElementById("numOfShirtsLabel").style.visibility = "visible";
                            document.getElementById('numOfShirtsLabel').innerHTML = " <b>Quantity:</b> <span style='color: #5cb85c; font-family: Arial;'> 0 item(s)</span> ";
                            document.getElementById("itemTotal").style.visibility = "visible";
                            document.getElementById('itemTotal').innerHTML = "$0";
                            document.getElementById("itemTotalLabel").style.visibility = "visible";
                        }
                        //showing shipping information when
                        //getShippingInformation();
                    }
                });
            }
        }

        function buildcart(body)
        {
            document.getElementById("directcheckout").style.display = "inline-block";
            var Cartbody = document.getElementById(body);
            while (Cartbody.firstChild) Cartbody.removeChild(Cartbody.firstChild);
            for (var i = 0; i < shoppingcart.items.length; i++)
            {   
                var tr = document.createElement("tr");
                tr.className = "row";
                var tdimg = document.createElement("td");
                tdimg.className = "col-lg-1 col-md-1 col-sm-1 col-xs-1 ";
                var img = document.createElement("img");
                img.src = shoppingcart.items[i].sides[0].img;
                img.style.width = "74px";
                img.style.height = "81px";
                var brimage = document.createElement("br");
                var aimage = document.createElement("a");
                aimage.id = shoppingcart.items[i].name;
                tdimg.className = "text-center";
                aimage.innerHTML = "edit";
                aimage.style.cursor = "pointer";
                aimage.href = window.location.origin + "/designstudio/e/" + shoppingcart.items[i].id;
                var tdbrandstyle = document.createElement("td");
                tdbrandstyle.className = "col-lg-2 col-md-2 col-sm-2 col-xs-2  visible-lg visible-md";
                tdbrandstyle.innerHTML = shoppingcart.items[i].product.brand + " " + shoppingcart.items[i].product.stylenumber;
                var tdcolor = document.createElement("td");
                tdcolor.className = "col-lg-1 col-md-1 col-sm-1 col-xs-1  visible-lg visible-md";
                tdcolor.innerHTML = shoppingcart.items[i].product.color;
                var tdsizes = document.createElement("td");
                tdsizes.className = "col-lg-2 col-md-2 col-sm-2 col-xs-2  visible-lg visible-md";
                var sizeinnerHTML = '';
                for (var j = 0; j < shoppingcart.items[i].sizes.length; j++) 
                {
                    if (shoppingcart.items[i].sizes[j].quantity > 0)
                    {      
                        sizeinnerHTML+= shoppingcart.items[i].sizes[j].name + ": " + shoppingcart.items[i].sizes[j].quantity + ", ";
                    }
                }
                tdsizes.innerHTML = sizeinnerHTML;
                var tdquantity = document.createElement("td");
                tdquantity.className = "col-lg-1 col-md-1 col-sm-1 col-xs-1";
                tdquantity.innerHTML = shoppingcart.items[i].num_shirts;
                var tdpricepershirt = document.createElement("td");
                tdpricepershirt.className = "col-lg-2 col-md-2 col-sm-2 col-xs-2  visible-lg visible-md";
                tdpricepershirt.innerHTML = "$" + (shoppingcart.items[i].price_per_shirt * 1).toFixed(2);
                var tdtotal = document.createElement("td");
                tdtotal.className = "col-lg-2 col-md-2 col-sm-2 col-xs-2";
                shoppingcart.items[i].total = shoppingcart.items[i].price_per_shirt * shoppingcart.items[i].num_shirts;
                tdtotal.innerHTML = "$" + (shoppingcart.items[i].total * 1).toFixed(2);
                //shoppingcart.total += shoppingcart.items[i].total;
                var tdbutton = document.createElement("td");
                tdbutton.className = "col-lg-1 col-md-1 col-sm-1 col-xs-1";
                var button = document.createElement("button");
                button.className = "btn btn-danger";
                button.id = i;
                button.addEventListener("click", function() 
                {
                   var row = this.parentNode.parentNode;
                    row.parentNode.removeChild(row);
                    if ( shoppingcart.items.length == 1 )
                    {
                        document.getElementById("Cart").style.display = "none";
                        document.getElementById("finalcheckout").style.display = "none";
                        document.getElementById("directcheckout").style.display = "none";
                        document.getElementById('product_style_area').style.display = 'none';
                        document.getElementById('design_name_area').style.display = 'none';
                        document.getElementById('AddKeepDesign').style.display = "none";
                        document.getElementById('finalcheckout').style.display = 'none';
                        document.getElementById('continuedesign').style.display = 'inline';
                        document.getElementById('cart_area').style.display = 'none';
                        $('#productPicker').modal('hide');
                        position = 0;
                        shoppingcart.items = [];
                        shoppingcart.subtotal = 0;
                        shoppingcart.tax = 0;
                        shoppingcart.shipping_cost = 0;
                        shoppingcart.discount = 0;
                        shoppingcart.total = 0;
                        shoppingcart = { shop_number:'', subtotal:0, tax:0, shipping_cost:0, discount:0, total:0, status:"created", date:null, shipby:null, promocode:'', items:[], user:null, shippingType:null, promocode:null};
                        document.getElementById('itemPrice').innerHTML = "0.00";
                        document.getElementById('numOfShirtsLabel').innerHTML = "<b>Quantity:</b> <span style='color: #5cb85c; font-family: Arial;'> 0 item(s)</span>";
                        document.getElementById('itemTotal').innerHTML = "0.00";
                        document.getElementById('KeepDesign').style.display = "none";
                        document.getElementById('designemail').value = shoppingcart.user.email;
                        document.getElementById('designName').value = "";
                        currentdesign = {id:'',arrayside :[], name:'',product:product, type:"Designstudio", num_shirts:0, price_per_shirt:0, total:0, personalize: null};
                        cleanInputQuantity();
                        var designtmplist = document.getElementById("designtmplist");
                        designtmplist.innerHTML = "";
                        canvasdesignlist = [];
                        currentdesign.arrayside = [];
                        canvaslist.forEach(canvas => 
                        {
                            canvas.clear();
                        });
                    }
                    else
                    { 
                        shoppingcart.items.splice(this.id,1);
                        position--;
                        if(shoppingcart.items.length > 0)
                        {
                            buildcart("Cart-Body");
                        }
                    } 
                    updatesessioninfo();
                });
                var spanbutton = document.createElement("span");
                spanbutton.className = "glyphicon glyphicon-remove";
                spanbutton.id = i;
                button.appendChild(spanbutton);
                tdbutton.appendChild(button);
                tdimg.appendChild(img);
                tdimg.appendChild(brimage);
                tdimg.appendChild(aimage);
                tr.appendChild(tdimg);
                tr.appendChild(tdbrandstyle);
                tr.appendChild(tdcolor);
                tr.appendChild(tdsizes);
                tr.appendChild(tdquantity);
                tr.appendChild(tdpricepershirt);
                tr.appendChild(tdtotal);
                tr.appendChild(tdbutton);
                Cartbody.appendChild(tr);
            }
            var trTotal = document.createElement("tr");
            var tdordertotal = document.createElement("td");
            tdordertotal.colSpan = 7;    
            var spanordertotal = document.createElement("span");
            spanordertotal.innerHTML = "Order Total";
            spanordertotal.style.float = "right";
            var tdtotal = document.createElement("td");
            tdtotal.colSpan = 3;
            tdtotal.innerHTML = "$" + (shoppingcart.total * 1).toFixed(2);
            tdordertotal.appendChild(spanordertotal);
            trTotal.appendChild(tdordertotal);
            trTotal.appendChild(tdtotal);
            var trsubTotal = document.createElement("tr");
            var tdordersubtotal = document.createElement("td");
            tdordersubtotal.colSpan = 7;
            var spanordersubtotal = document.createElement("span");
            spanordersubtotal.innerHTML = "Order Total";
            spanordersubtotal.style.float = "right";
            var tdsubtotal = document.createElement("td");
            tdsubtotal.colSpan = 3;
            tdsubtotal.innerHTML = "$" + (shoppingcart.subtotal * 1).toFixed(2);
            tdordersubtotal.appendChild(spanordersubtotal);
            trsubTotal.appendChild(tdordersubtotal);
            trsubTotal.appendChild(tdsubtotal);
            var trDiscount = document.createElement("tr");
            var tdorderDiscount = document.createElement("td");
            tdorderDiscount.colSpan = 7;
            var spanorderDiscount = document.createElement("span");
            spanorderDiscount.innerHTML = "Discount";
            spanorderDiscount.style.float = "right";
            var tdDiscount = document.createElement("td");
            tdDiscount.colSpan = 3;
            tdDiscount.innerHTML = "$" + shoppingcart.discount;
            tdorderDiscount.appendChild(spanorderDiscount);
            trDiscount.appendChild(tdorderDiscount);
            trDiscount.appendChild(tdDiscount);
            var trshippingcost = document.createElement("tr");
            var tdordershippingcost = document.createElement("td");
            tdordershippingcost.colSpan = 7;
            var spanordershippingcost = document.createElement("span");
            spanordershippingcost.innerHTML = "Shipping Cost";
            spanordershippingcost.style.float = "right";
            var tdshippingcost = document.createElement("td");
            tdshippingcost.colSpan = 3;
            tdshippingcost.innerHTML = "$" + shoppingcart.shipping_cost;
            tdordershippingcost.appendChild(spanordershippingcost);
            trshippingcost.appendChild(tdordershippingcost);
            trshippingcost.appendChild(tdshippingcost);
            var trTax = document.createElement("tr");
            var tdorderTax = document.createElement("td");
            tdorderTax.colSpan = 7;
            var spanorderTax = document.createElement("span");
            spanorderTax.innerHTML = "Order Tax";
            spanorderTax.style.float = "right";
            var tdTax = document.createElement("td");
            tdTax.colSpan = 3;
            tdTax.innerHTML = "$" + shoppingcart.tax;
            tdorderTax.appendChild(spanorderTax);
            trTax.appendChild(tdorderTax);
            trTax.appendChild(tdTax);
            Cartbody.appendChild(trsubTotal);
            updatesessioninfo()
        }

        function Checkout()
        {
            if(shoppingcart.items.length > 0)
            {
                window.location.href = "/shopping-cart";
            }
            else
            {
                showalert('getcartalert', 'There are currently no items in your cart', 'danger', 'Cart');
            }
        }

        function updatesessioninfo()
        {
            var total = 0;
            if (shoppingcart.items.length > 0)
            {
                shoppingcart.items.forEach(function(element) 
                {
                    if (element.total)
                    {
                        element.total = Number((element.total*1).toFixed(2));
                        total+= Number(element.total);          
                    }
                });
            }
            
            shoppingcart.subtotal = Number((total*1).toFixed(2));
            shoppingcart.shipping_cost = 0.00;
            shoppingcart.discount = 0.00;
            if (shoppingcart.discount > 0)
            {
                shoppingcart.tax = Number(((((total-shoppingcart.discount)+shoppingcart.shipping_cost)* 8.25)/100).toFixed(2));  
            }
            else
            {
                shoppingcart.tax = Number(((((total)+shoppingcart.shipping_cost)* 8.25)/100).toFixed(2));   
            }
            shoppingcart.total =  Number(((shoppingcart.subtotal + shoppingcart.tax)*1).toFixed(2));
            


            $.ajax({
                type:'POST',
                dataType: 'json', 
                data: {
                        shoppingcart:  JSON.parse(JSON.stringify(shoppingcart)),
                    },
                url: window.location.origin + '/updatesessioninfo',
                beforeSend: function()
                {
                   // console.log('session shopping cart updated');
                },
                success:function(data)
                {  
                    console.log('session shopping cart updated');
                    /*console.log(data);
                    buildcart("Cart-Body");
                    currentdesign = {arrayside :[], name:'',product:product, type:"Designstudio", num_shirts:0, price_per_shirt:0, total:0};
                    cleanInputQuantity();
                    position++;
                    //document.getElementById("loaderEmail").style.display = "none"; 
                    document.getElementById("Cart").style.display = "block"; 
                    var designtmplist = document.getElementById("designtmplist");
                    designtmplist.innerHTML = "";
                    canvasdesignlist = [];
                    currentdesign.arrayside = [];
                    canvaslist.forEach(canvas => 
                    {
                        canvas.clear();
                    });
                    showalert('designsaved', 'Item added success!', 'success', 'Saved Design');*/
                },
                error: function(error)
                {
                    console.log("error in method updatesessioninfo:");
                    console.log(error);
                }
            });
        }

        function AddKeepDesign()
        {
            addingToCart = true;
            saveDesign("AddKeepDesign");
        }

        function cleanInputQuantity()
        {
            /*for (var i = 0; i < Order._Product_design_list[position]._sizeList.length; i++) 
            {
                document.getElementById(Order._Product_design_list[position]._sizeList[i]._size_name).value = "";   
            }*/
            document.getElementById('NB').value='';
            document.getElementById('0M').value='';
            document.getElementById('3M').value='';
            document.getElementById('6M').value='';
            document.getElementById('12M').value='';
            document.getElementById('18M').value='';
            document.getElementById('24M').value='';

            document.getElementById('2T').value='';
            document.getElementById('3T').value='';
            document.getElementById('4T').value='';
            document.getElementById('5T').value='';
            document.getElementById('5_6').value='';
            document.getElementById('6T').value='';
            document.getElementById('7').value='';

            document.getElementById('YXS').value='';
            document.getElementById('YS').value='';
            document.getElementById('YM').value='';
            document.getElementById('YL').value='';
            document.getElementById('YXL').value='';
            
            document.getElementById('XS').value='';
            document.getElementById('S').value='';
            document.getElementById('M').value='';
            document.getElementById('L').value='';
            document.getElementById('XL').value='';
            document.getElementById('2XL').value='';
            document.getElementById('3XL').value='';
            document.getElementById('4XL').value='';
            document.getElementById('5XL').value='';

            //document.getElementById('AddKeepDesign').style.display = 'none';
            document.getElementById('KeepDesign').style.display = 'inline';
            document.getElementById('finalcheckout').style.display = 'inline';

            document.getElementById('itemPrice').innerHTML = "$0";
            document.getElementById("numOfShirtsLabel").style.visibility = "visible";
            document.getElementById('numOfShirtsLabel').innerHTML = " <b>Quantity:</b> <span style='color: #5cb85c; font-family: Arial;'> 0 item(s)</span> ";
            document.getElementById("itemTotal").style.visibility = "visible";
            document.getElementById('itemTotal').innerHTML = "$0";
            currentdesign.price_per_shirt = 0;
            currentdesign.total = 0;
        }


        function saveDesign(from) 
        {            
            setColorsInk();
            if ( textAdded || clipArtAdded || imageUploaded || colorChanged || addingToCart || resized || Checked || productchanged || saveOnly) 
            {
                if (from == "saveOnly") 
                {
                    //document.getElementById("loaderOnly").style.display = "block";
                    //document.getElementById('design_name_area_only').style.display = "none";
                } 
                else if (from == "saveasguest") 
                {
                    //document.getElementById("loaderEmail").style.display = "block";
                }
                else if (from == "AddKeepDesign") 
                {
                    document.getElementById("loader").style.display = "block";
                    document.getElementById('KeepDesign').style.display = "none";
                    document.getElementById('finalcheckout').style.display = "none";
                }
                var design = [];
                canvaslist.forEach(canvas=>{
                    canvas.discardActiveObject();
                    if(canvas.getObjects().length > 0)
                    {
                        
                        var saveddesign =  {status:"created"};
                        if (canvas.width != 0)
                        {
                            saveddesign.toDataURL = canvas.toDataURL('image/png');
                            saveddesign.svg = canvas.toSVG();
                            saveddesign.json = JSON.stringify(canvas);
                        }
                        saveddesign.width_canvas = canvas.width;
                        saveddesign.height_canvas = canvas.height;
                        saveddesign.width_div = document.getElementById(canvas.side + 'CanvasShirt').style.width.replace("px", "");
                        saveddesign.height_div = document.getElementById(canvas.side + 'CanvasShirt').style.height.replace("px", "");
                        saveddesign.border_color_div = 0;
                        saveddesign.left = document.getElementById(canvas.name + 'canvas-wrapper').style.left.replace("px", "");
                        saveddesign.top = document.getElementById(canvas.name + 'canvas-wrapper').style.top.replace("px", "");
                        saveddesign.border_color_canvas = 0;
                        saveddesign.design_image = "";
                        saveddesign.design_product_image = "";
                        newurl = document.getElementById(canvas.side + 'CanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById(canvas.side + 'CanvasShirt').style.backgroundImage.replace("url", "").length - 2);                           
                        saveddesign.product_image = newurl.replace("https://www.vividcustoms.com/","");
                        saveddesign.side = canvas.name;
                        saveddesign.colorlist = canvas.ColorList;
                        //Order._Product_design_list[position]._design._sideList[0]._product_image = document.getElementById('frontCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('frontCanvasShirt').style.backgroundImage.replace("url", "").length - 2);
                        design.push(saveddesign);
                    }  
                });

               
                if (from == "saveOnly") 
                { 
                   //design.email = user.email;
                   $.ajax({
                        type:'POST',
                        dataType: 'json', 
                        data: {
                                email: user.email,
                                name: currentdesign.name,
                                product: product.id,
                                design: JSON.parse(JSON.stringify(design)),                               
                                personalizetype : currentdesign.personalizetype,
                                personalizelist: currentdesign.personalizelist,
                            },
                        url: window.location.origin + '/savedesign',
                        beforeSend: function()
                        {
                            console.log('save design');
                        },
                        success:function(data)
                        {  
                            console.log(data);
                            currentdesign.id = data.design.id;
                            document.getElementById("loaderOnly").style.display = "none";
                            document.getElementById('design_name_area_only').style.display = "block";
                            showalert('designsaved', 'Design saved!', 'success', 'Saved Design');
                        },
                        error: function(error)
                        {
                            console.log("error in method saveDesign('saveOnly'):");
                            console.log(error);
                        }
                    });
                } 
                else if (from == "saveasguest") 
                {  
                    $.ajax({
                        type:'POST',
                        dataType: 'json', 
                        data: {
                                email: currentdesign.email,
                                name: currentdesign.name,
                                product: currentdesign.product.id,
                                design: JSON.parse(JSON.stringify(design)),
                                personalizetype : currentdesign.personalizetype,
                                personalizelist: currentdesign.personalizelist,
                            },
                        url: window.location.origin + '/saveasguest',
                        beforeSend: function()
                        {
                            console.log('save as guest');
                        },
                        success:function(data)
                        {  
                            currentdesign.id = data.design.id;
                            console.log(data);
                            document.getElementById("loaderEmail").style.display = "none";
                            showalert('designsaved', 'Design saved!', 'success', 'Saved Design');
                        },
                        error: function(error)
                        {
                            console.log("error in method saveDesign('saveasguest'):");
                            console.log(error);
                        }
                    });
                    
                }
                else if (from == "AddKeepDesign")
                {  
                    //let item = new item();
                    var item= {name:null, type:'Designstudio', product:null, num_shirts:0, price_per_shirt:0, total:0, sides:[], sizes:currentdesign.product.parent.sizes};
                    item.name = currentdesign.name;
                    var productitem = {id:null, brand:null, stylenumber:null, color:null};
                    productitem.id = currentdesign.product.id;
                    productitem.brand = currentdesign.product.brand;
                    productitem.stylenumber = currentdesign.product.stylenumber;
                    productitem.color = currentdesign.product.color.name;
                    productitem.name = currentdesign.product.name;
                    productitem.parent = currentdesign.product.parent.id;
                    item.product = productitem;
                    design.personalizetype = currentdesign.personalizetype;
                    design.personalizelist = personalizelist;
                    item.personalizetype = currentdesign.personalizetype;
                    item.personalizelist = personalizelist;
                    currentdesign.arrayside.forEach(sideitem => 
                    {
                        var side = {name:null, img:null,colorlist: null};
                        side.img = sideitem.img;
                        side.name = sideitem.side;
                        side.colorlist = sideitem.canvas.ColorList.length;
                        item.sides.push(side);
                    });
                    item.name = currentdesign.name;
                    item.num_shirts = currentdesign.num_shirts;
                    item.price_per_shirt = Number(currentdesign.price_per_shirt);
                    item.total = Number(currentdesign.price_per_shirt) * Number(currentdesign.num_shirts);
                    shoppingcart.items.push(item); 
                    shoppingcart.subtotal+= Number(item.total);
                    shoppingcart.total += Number(item.total);

                    console.log(shoppingcart);                    

                    $.ajax({
                        type:'POST',
                        dataType: 'json', 
                        data: {
                                email: currentdesign.email,
                                name: currentdesign.name,
                                product: currentdesign.product.id,
                                design: JSON.parse(JSON.stringify(design)),
                                shoppingcart:  JSON.parse(JSON.stringify(shoppingcart)),
                                personalizetype : currentdesign.personalizetype,
                                personalizelist: currentdesign.personalizelist,
                            },
                        url: window.location.origin + '/savegetprice',
                        beforeSend: function()
                        {
                            console.log('save and add to cart');
                        },
                        success:function(data)
                        {  
                            console.log(data);
                            //currentdesign.id = data.design.id;
                            shoppingcart = data.shoppingcart;
                            if(shoppingcart.items.length > 0)
                            {
                                buildcart("Cart-Body");
                            }
                            currentdesign = {id:'', arrayside :[], name:'',product:product, type:"Designstudio", num_shirts:0, price_per_shirt:0, total:0};
                            cleanInputQuantity();
                            position++;
                            //document.getElementById("loaderEmail").style.display = "none"; 
                            document.getElementById("Cart").style.display = "block"; 
                            var designtmplist = document.getElementById("designtmplist");
                            designtmplist.innerHTML = "";
                            canvasdesignlist = [];
                            currentdesign.arrayside = [];
                            canvaslist.forEach(canvas => 
                            {
                                canvas.clear();
                            });
                            showalert('designsaved', 'Item added success!', 'success', 'Saved Design');
                        },
                        error: function(error)
                        {
                            console.log("error in method saveDesign('AddKeepDesign'):");
                            console.log(error);
                        }
                    });
                    document.getElementById("loader").style.display = "none";
                    document.getElementById('KeepDesign').style.display = "block";
                    document.getElementById('finalcheckout').style.display = "block";
                }
                textAdded = clipArtAdded = imageUploaded = colorChanged = addingToCart = resized = Checked = productchanged = saveOnly = false;
            }
            else
            {
                if (from == "saveOnly") 
                {
                    showalert('savealert', 'No design to save!', 'danger', 'Save');
                } 
                else if (from == "saveasguest") 
                {
                    showalert('savealert', 'No design to save!', 'danger', 'Save');
                }
                else if (from == "AddKeepDesign")
                {
                    showalert('savealert', 'No design to save!', 'danger', 'Save');
                }
            }
        }

        function displaypersonalize(side, set)
        {
            
            if (editdesign != null || edit != null /*|| emails != null*/)
            {
                if (side == "backCanvas")
                {
                    objectsbacklist = back.getObjects();
                    if (objectsbacklist.length > 0)
                    {
                        for (var i = 0; i < objectsbacklist.length; i++) 
                        { 
                            if (objectsbacklist[i].type == 'i-text') 
                            {
                                var valueselected = "";
                                switch (objectsbacklist[i].getFontSize())
                                {
                                    case 40:
                                        valueselected = "1 In";
                                        break;
                                    case 80:
                                        valueselected = "2 In";
                                        break;
                                    case 160:
                                        valueselected = "4 In";
                                        break;
                                    case 240:
                                        valueselected = "6 In";
                                        break;
                                    case 320:
                                        valueselected = "8 In";
                                        break;
                                }
                                if (objectsbacklist[i].id.indexOf("text") != -1)
                                {
                                    document.getElementById("textpersonalizecheck").checked = true;
                                    document.getElementById("textpersonalizeside").disabled = false;
                                    document.getElementById("textpersonalizeside").value = "Back";
                                    document.getElementById("textpersonalizeheight").disabled = false;
                                    $("#textpersonalizeheight select").val(valueselected);
                                    document.getElementById("textpersonalizecolor").disabled = false;
                                    document.getElementById("textpersonalizecolor").style.backgroundColor = objectsbacklist[i].fill;
                                    document.getElementById("textpersonalizecolorname").innerHTML = findcolorname(objectsbacklist[i].fill);
                                    document.getElementById("textpersonalizestrokecolor").disabled = false;
                                    document.getElementById("textpersonalizestrokecolor").style.backgroundColor = objectsbacklist[i].stroke;
                                    document.getElementById("textpersonalizestrokecolorname").innerHTML = findcolorname(objectsbacklist[i].stroke);
                                    
                                }
                                else
                                {
                                    document.getElementById("numberpersonalizecheckModal").checked = true;
                                    document.getElementById("numberpersonalizesideModal").disabled = false;
                                    document.getElementById("numberpersonalizesideModal").value = "Back";
                                    document.getElementById("numberpersonalizeheightModal").disabled = false;
                                    $("#numberpersonalizeheightModal select").val(valueselected);
                                    document.getElementById("numberpersonalizecolorModal").disabled = false;
                                    document.getElementById("numberpersonalizecolorModal").style.backgroundColor = objectsbacklist[i].fill;
                                    document.getElementById("numberpersonalizecolornameModal").innerHTML = findcolorname(objectsbacklist[i].fill);
                                    document.getElementById("numberpersonalizestrokecolorModal").disabled = false;
                                    document.getElementById("numberpersonalizestrokecolorModal").style.backgroundColor = objectsbacklist[i].stroke;
                                    document.getElementById("numberpersonalizestrokecolornameModal").innerHTML = findcolorname(objectsbacklist[i].stroke);
                                }
                            }
                        }    
                        if (set)
                        {
                            setcanvas(3);
                        }
                    }    
                }    
            }
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

        $('#textpersonalizecheck').on('click', function(e) 
        {
            var textpersonalizecanvas = null;
            var textpersonalizeid = null;
            if (document.getElementById("textpersonalizeside").value == "Front") 
            {
                textpersonalizecanvas = front;
                textpersonalizeid = "front";
                setcanvas(1);
            } 
            else 
            {
                textpersonalizecanvas = back;
                textpersonalizeid = "back";
                setcanvas(3);
            }
            if (this.checked) 
            {
                document.getElementById("textpersonalizeside").disabled = false;
                document.getElementById("textpersonalizeheight").disabled = false;
                document.getElementById("textpersonalizecolor").disabled = false;
                document.getElementById("textpersonalizestrokecolor").disabled = false;

                var textSample = new fabric.IText('EXAMPLE', 
                    {
                        left: canvasActive.width / 2,
                        top: 50,
                        fontSize: 80,
                        strokeWidth: 0,
                        fontFamily: 'ABeeZee-Regular',
                        backgroundColor: 'transparent',
                        id: "textpersonalize" + textpersonalizeid,
                        scaleX: 0.9,
                        charSpacing: 20,
                        //snapAngle: 45,
                        selectable :false,
                        //snapThreshold: 45,
                        //lockUniScaling : true,
                        //centeredRotation: true,
                        hasControls: false,
                        hasBorders: false,
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
                        bl: false,
                        tr: false,
                        tl: false,
                        br: false,
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
                        
                    }, 
                    function() {
                        canvasActive.renderAll();
                    });
                    canvasActive.add(textSample).renderAll(canvasActive);
                    canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                    //objId++;
                   save();
            } 
            else 
            {
                var list = canvasActive.getObjects();
                for (var i = 0; i < list.length; i++) 
                {
                    if (list[i].id == "textpersonalize" + textpersonalizeid) 
                    {
                        canvasActive.remove(list[i]);
                        break;
                    }
                }
                document.getElementById("textpersonalizeside").disabled = true;
                document.getElementById("textpersonalizeheight").disabled = true;
                document.getElementById("textpersonalizecolor").disabled = true;
                document.getElementById("textpersonalizestrokecolor").disabled = true;
            }
        });
        
        

        $('#numberpersonalizecheck').on('click', function(e) 
        {
            var numberpersonalizecanvas = null;
            var numberpersonalizeid = null;
            if (document.getElementById("numberpersonalizeside").value == "Front") 
            {
                numberpersonalizecanvas = front;
                numberpersonalizeid = "front";
                setcanvas(1);
            } 
            else 
            {
                numberpersonalizecanvas = back;
                numberpersonalizeid = "back";
                setcanvas(3);
            }
            if (this.checked) 
            {
                document.getElementById("numberpersonalizeside").disabled = false;
                document.getElementById("numberpersonalizeheight").disabled = false;
                document.getElementById("numberpersonalizecolor").disabled = false;
                document.getElementById("numberpersonalizestrokecolor").disabled = false;

                var textSample = new fabric.IText('00', 
                    {
                        left: numberpersonalizecanvas.width / 2,
                        top: 250,
                        fontSize: 320,
                        strokeWidth: 0,
                        fontFamily: 'collegeb',
                        backgroundColor: 'transparent',
                        id: "numberpersonalize" + numberpersonalizeid,
                        editable: false,
                        //snapAngle: 45,
                        //snapThreshold: 45,
                        hasControls: false,
                        hasBorders: false,
                        //centeredRotation: true,
                        originX: 'center',
                        originY: 'center',
                        scaleY: 1,
                        colorName: 'Black',
                        strokecolorName: '',
                        fill: '#000000',
                        stroke: '',
                        textAlign : "center",
                        selectable :false
                    });
                    textSample.setControlsVisibility({
                        ml: false,
                        mr: false,
                        mb: false,
                        mt: false,
                        mtr: false,
                        bl: false,
                        tr: false,
                        tl: false,
                        br: false,
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
                    }, 
                    function() {
                        canvasActive.renderAll();
                    });
                    canvasActive.add(textSample).renderAll(canvasActive);
                    canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                    //objId++;
                    save();
            } 
            else 
            {
                var list = canvasActive.getObjects();
                for (var i = 0; i < list.length; i++) 
                {
                    if (list[i].id == "numberpersonalize" + numberpersonalizeid) 
                    {
                        canvasActive.remove(list[i]);
                        break;
                    }
                }
                document.getElementById("numberpersonalizeside").disabled = true;
                document.getElementById("numberpersonalizeheight").disabled = true;
                document.getElementById("numberpersonalizecolor").disabled = true;
                document.getElementById("numberpersonalizestrokecolor").disabled = true;
            }
        });


        function setcolorpersonalize(element) 
        {   
            setColorsInk();
            selectcolors();
            elementpersonalizeselected = element.id;
            switch (element.id) 
            {
                case "textpersonalizecolor":
                    if (document.getElementById('textpersonalizecheck').checked) 
                    {
                        document.getElementById("personalize_new").style.display = "none";
                        document.getElementById("personalize_edit").style.display = "block";
                        document.getElementById("personalizecolorselected").innerHTML = "Name Color: ";
                        if (document.getElementById('textpersonalizeside').value == "Front") 
                        {
                            var list = canvaslist[0].getObjects();
                            for (var i = 0; i < list.length; i++) 
                            {
                                if (list[i].id == "textpersonalizefront") 
                                {
                                    object = list[i];
                                    break;
                                }
                            }
                            if (object != null) 
                            {
                                canvaslist[0].setActiveObject(object);
                                canvaslist[0].renderAll(canvaslist[0]);
                                setcanvas(1);
                            }
                        } 
                        else 
                        {
                            var list = canvaslist[2].getObjects();
                            for (var i = 0; i < list.length; i++) 
                            {
                                if (list[i].id == "textpersonalizeback") 
                                {
                                    object = list[i];
                                    break;
                                }
                            }
                            if (object != null) 
                            {
                                canvaslist[2].setActiveObject(object);
                                canvaslist[2].renderAll(canvaslist[2]);        
                                setcanvas(3);
                            }
                        }
                    }
                    break;
                case "numberpersonalizecolor":
                    if (document.getElementById('numberpersonalizecheck').checked) 
                    {
                        document.getElementById("personalize_new").style.display = "none";
                        document.getElementById("personalize_edit").style.display = "block";
                        document.getElementById("personalizecolorselected").innerHTML = "Number Color: ";
                        if (document.getElementById('numberpersonalizeside').value == "Front") 
                        {
                            var list = canvaslist[0].getObjects();
                            for (var i = 0; i < list.length; i++) 
                            {
                                if (list[i].id == "numberpersonalizefront") 
                                {
                                    object = list[i];
                                    break;
                                }
                            }
                            if (object != null) 
                            {
                                canvaslist[0].setActiveObject(object);
                                canvaslist[0].renderAll(canvaslist[0]);
                                setcanvas(1);
                            }
                        } 
                        else 
                        {
                            var list = canvaslist[2].getObjects();
                            for (var i = 0; i < list.length; i++) 
                            {
                                if (list[i].id == "numberpersonalizeback") 
                                {
                                    object = list[i];
                                    break;
                                }
                            }
                            if (object != null) 
                            {
                                canvaslist[2].setActiveObject(object);
                                canvaslist[2].renderAll(canvaslist[2]);
                                setcanvas(3);
                            }
                        }
                    }
                    break;
                case "textpersonalizestrokecolor":
                    if (document.getElementById('textpersonalizecheck').checked) 
                    {
                        document.getElementById("personalize_new").style.display = "none";
                        document.getElementById("personalize_edit").style.display = "block";
                        document.getElementById("personalizecolorselected").innerHTML = "Name Stroke Color: ";
                        if (document.getElementById('textpersonalizeside').value == "Front") 
                        {
                            var list = canvaslist[0].getObjects();
                            for (var i = 0; i < list.length; i++) 
                            {
                                if (list[i].id == "textpersonalizefront") 
                                {
                                    object = list[i];
                                    break;
                                }
                            }
                            if (object != null) 
                            {
                                canvaslist[0].setActiveObject(object);
                                canvaslist[0].renderAll(canvaslist[0]);
                                setcanvas(1);
                            }
                        } 
                        else 
                        {
                            var list = canvaslist[2].getObjects();
                            for (var i = 0; i < list.length; i++) 
                            {
                                if (list[i].id == "textpersonalizeback") 
                                {
                                    object = list[i];
                                    break;
                                }
                            }
                            if (object != null) 
                            {
                                canvaslist[2].setActiveObject(object);
                                canvaslist[2].renderAll(canvaslist[2]);
                                setcanvas(3);
                            }
                        }
                    }
                    break;
                case "numberpersonalizestrokecolor":
                    if (document.getElementById('numberpersonalizecheck').checked) 
                    {
                        document.getElementById("personalize_new").style.display = "none";
                        document.getElementById("personalize_edit").style.display = "block";
                        document.getElementById("personalizecolorselected").innerHTML = "Number Stroke Color: ";
                        if (document.getElementById('numberpersonalizeside').value == "Front") 
                        {
                            var list = canvaslist[0].getObjects();
                            for (var i = 0; i < list.length; i++) 
                            {
                                if (list[i].id == "numberpersonalizefront") 
                                {
                                    object = list[i];
                                    break;
                                }
                            }
                            if (object != null) 
                            {
                                canvaslist[0].setActiveObject(object);
                                canvaslist[0].renderAll(canvaslist[0]);
                                setcanvas(1);
                            }
                        } 
                        else 
                        {
                            var list = canvaslist[2].getObjects();
                            for (var i = 0; i < list.length; i++) 
                            {
                                if (list[i].id == "numberpersonalizeback") 
                                {
                                    object = list[i];
                                    break;
                                }
                            }
                            if (object != null) 
                            {
                                canvaslist[2].setActiveObject(object);
                                canvaslist[2].renderAll(canvaslist[2]);
                                setcanvas(3);
                            }
                        }
                    }
                    break;
            }
        }
        
        function changepersonalizeColor(newColor)
        {
            switch (elementpersonalizeselected) 
            {
                case "textpersonalizecolor":
                    if (document.getElementById('textpersonalizeside').value == "Front") 
                    {
                        var list = canvaslist[0].getObjects();
                        for (var i = 0; i < list.length; i++) 
                        {
                            if (list[i].id == "textpersonalizefront") 
                            {
                                object = list[i];
                                break;
                            }
                        }
                        if (object != null) 
                        {
                            object.setFill(newColor);
                            if (object.stroke == "") 
                            {
                                document.getElementById("textpersonalizestrokecolor").style.backgroundColor = newColor;
                                document.getElementById("textpersonalizestrokecolorname").innerHTML = document.getElementById("personalizecolorselectedname").innerHTML;
                            }
                            canvaslist[0].renderAll(canvaslist[0]);
                        }
                    } 
                    else 
                    {
                        var list = canvaslist[2].getObjects();
                        for (var i = 0; i < list.length; i++) 
                        {
                            if (list[i].id == "textpersonalizeback") 
                            {
                                object = list[i];
                                break;
                            }
                        }
                        if (object != null) 
                        {
                            object.setFill(newColor);
                            if (object.stroke == "") 
                            {
                                document.getElementById("textpersonalizestrokecolor").style.backgroundColor = newColor;
                                document.getElementById("textpersonalizestrokecolorname").innerHTML = document.getElementById("personalizecolorselectedname").innerHTML;
                            }
                            canvaslist[2].renderAll(canvaslist[2]);
                        }
                    }
                    document.getElementById("textpersonalizecolor").style.backgroundColor = newColor;
                    document.getElementById("textpersonalizecolorname").innerHTML = document.getElementById("personalizecolorselectedname").innerHTML;
                    break;
                case "numberpersonalizecolor":
                    if (document.getElementById('numberpersonalizeside').value == "Front") 
                    {
                        var list = canvaslist[0].getObjects();
                        for (var i = 0; i < list.length; i++) 
                        {
                            if (list[i].id == "numberpersonalizefront") 
                            {
                                object = list[i];
                                break;
                            }
                        }
                        if (object != null) 
                        {
                            object.setFill(newColor);
                            if (object.stroke == "") 
                            {
                                document.getElementById("numberpersonalizestrokecolor").style.backgroundColor = newColor;
                                document.getElementById("numberpersonalizestrokecolorname").innerHTML = document.getElementById("personalizecolorselectedname").innerHTML;
                            }
                            canvaslist[0].renderAll(canvaslist[0]);
                        }
                    } 
                    else 
                    {
                        var list = canvaslist[2].getObjects();
                        for (var i = 0; i < list.length; i++) 
                        {
                            if (list[i].id == "numberpersonalizeback") 
                            {
                                object = list[i];
                                break;
                            }
                        }
                        if (object != null) 
                        {
                            object.setFill(newColor);
                            if (object.stroke == "") 
                            {
                                document.getElementById("numberpersonalizestrokecolor").style.backgroundColor = newColor;
                                document.getElementById("numberpersonalizestrokecolorname").innerHTML = document.getElementById("personalizecolorselectedname").innerHTML;
                            }
                            canvaslist[2].renderAll(canvaslist[2]);
                        }
                    }
                    document.getElementById("numberpersonalizecolor").style.backgroundColor = newColor;
                    document.getElementById("numberpersonalizecolorname").innerHTML = document.getElementById("personalizecolorselectedname").innerHTML;
                    break;
                case "textpersonalizestrokecolor":
                    if (document.getElementById('textpersonalizeside').value == "Front") 
                    {
                        var list = canvaslist[0].getObjects();
                        for (var i = 0; i < list.length; i++) 
                        {
                            if (list[i].id == "textpersonalizefront") 
                            {
                                object = list[i];
                                break;
                            }
                        }
                        if (object != null) 
                        {
                            object.setStroke(newColor);
                            object.setStrokeWidth(3);
                            canvaslist[0].renderAll(canvaslist[0]);
                        }
                    } 
                    else 
                    {
                        var list = canvaslist[2].getObjects();
                        for (var i = 0; i < list.length; i++) 
                        {
                            if (list[i].id == "textpersonalizeback") 
                            {
                                object = list[i];
                                break;
                            }
                        }
                        if (object != null) 
                        {
                            object.setStroke(newColor);
                            object.setStrokeWidth(3);
                            canvaslist[2].renderAll(canvaslist[2]);
                        }
                    }
                    document.getElementById("textpersonalizestrokecolor").style.backgroundColor = newColor;
                    document.getElementById("textpersonalizestrokecolorname").innerHTML = document.getElementById("personalizecolorselectedname").innerHTML;
                    break;
                case "numberpersonalizestrokecolor":
                    if (document.getElementById('numberpersonalizeside').value == "Front") 
                    {
                        var list = canvaslist[0].getObjects();
                        for (var i = 0; i < list.length; i++) 
                        {
                            if (list[i].id == "numberpersonalizefront") 
                            {
                                object = list[i];
                                break;
                            }
                        }
                        if (object != null) 
                        {
                            object.setStroke(newColor);
                            object.setStrokeWidth(3);
                            canvaslist[0].renderAll(canvaslist[0]);
                        }
                    } 
                    else 
                    {
                        var list = canvaslist[2].getObjects();
                        for (var i = 0; i < list.length; i++) 
                        {
                            if (list[i].id == "numberpersonalizeback") 
                            {
                                object = list[i];
                                break;
                            }
                        }
                        if (object != null) 
                        {
                            object.setStroke(newColor);
                            object.setStrokeWidth(3);
                            canvaslist[2].renderAll(canvaslist[2]);
                        }
                    }
                    document.getElementById("numberpersonalizestrokecolor").style.backgroundColor = newColor;
                    document.getElementById("numberpersonalizestrokecolorname").innerHTML = document.getElementById("personalizecolorselectedname").innerHTML;
                    break;
            }
            setColorsInk();
            selectcolors();
        }


        function changefontsize(element) 
        {
            if (element.id == "textpersonalizeheight") 
            {
                var value = null;
                switch (element.value) 
                {
                    case "1 In":
                        value = 40;
                        break;
                    case "2 In":
                        value = 80;
                        break;
                    case "4 In":
                        value = 160;
                        break;
                    case "6 In":
                        value = 240;
                        break;
                    case "8 In":
                        value = 320;
                        break;
                }
                if (document.getElementById("textpersonalizeside").value == "Front") 
                {
                    object = null;
                    var list = canvaslist[0].getObjects();
                    for (var i = 0; i < list.length; i++) 
                    {
                        if (list[i].id == "textpersonalizefront") 
                        {
                            object = list[i];
                            break;
                        }
                    }
                    if (object != null) 
                    {
                        object.set({
                            fontSize: value
                        });
                        //canvaslist[0].add(object);
                        //canvaslist[0].setActiveObject(object);
                        canvaslist[0].renderAll(canvaslist[0]);
                        setcanvas(1);
                        $('.nav-tabs a[href="#personalizediv"]').tab('show');
                        //document.getElementById("personalize_new").style.display="block";
                        //document.getElementById("personalize_edit").style.display="none";
                    }
                } 
                else 
                {
                    object = null;
                    var list = canvaslist[2].getObjects();
                    for (var i = 0; i < list.length; i++) 
                    {
                        if (list[i].id == "textpersonalizeback") 
                        {
                            object = list[i];
                            break;
                        }
                    }
                    if (object != null) 
                    {
                        object.set({
                            fontSize: value
                        });
                        //canvaslist[2].add(object);
                        //canvaslist[2].setActiveObject(object);
                        canvaslist[2].renderAll(canvaslist[2]);
                        setcanvas(3);
                        $('.nav-tabs a[href="#personalizediv"]').tab('show');
                    }
                }
            } 
            else 
            {
                var value = null;
                switch (element.value) 
                {
                    case "1 In":
                        value = 40;
                        break;
                    case "2 In":
                        value = 80;
                        break;
                    case "4 In":
                        value = 160;
                        break;
                    case "6 In":
                        value = 240;
                        break;
                    case "8 In":
                        value = 320;
                        break;
                }
                if (document.getElementById("numberpersonalizeside").value == "Front") 
                {
                    object = null;
                    var list = canvaslist[0].getObjects();
                    for (var i = 0; i < list.length; i++) 
                    {
                        if (list[i].id == "numberpersonalizefront") 
                        {
                            object = list[i];
                            break;
                        }
                    }
                    if (object != null) 
                    {
                        object.set({
                            fontSize: value
                        });
                        //canvaslist[0].add(object);
                        canvaslist[0].renderAll(canvaslist[0]);
                        setcanvas(1);
                        //canvaslist[0].setActiveObject(object);
                    }
                } 
                else 
                {
                    object = null;
                    var list = canvaslist[2].getObjects();
                    for (var i = 0; i < list.length; i++) 
                    {
                        if (list[i].id == "numberpersonalizeback") 
                        {
                            object = list[i];
                            break;
                        }
                    }
                    if (object != null) 
                    {
                        object.set({
                            fontSize: value
                        });
                        //canvaslist[2].add(object);
                        canvaslist[2].renderAll(canvaslist[2]);
                        setcanvas(3);
                        //canvaslist[2].setActiveObject(object);
                    }
                }
            }
        }


        function movedesigntoside(element)
        {
            if (element.id == "textpersonalizeside") 
            {
                if (element.value == "Front") 
                {
                    object = null;
                    var list = canvaslist[2].getObjects();
                    for (var i = 0; i < list.length; i++) 
                    {
                        if (list[i].id == "textpersonalizeback") 
                        {
                            object = list[i];
                            break;
                        }
                    }
                    if (object != null) 
                    {
                        object.set({
                            id: "textpersonalizefront"
                        });
                        canvaslist[0].add(object);
                        canvaslist[0].renderAll(canvaslist[0]);
                        canvaslist[2].remove(object);
                        canvaslist[2].renderAll(canvaslist[2]);
                        setcanvas(1);
                        canvaslist[0].setActiveObject(object);
                    }
                } 
                else 
                {
                    object = null;
                    var list = canvaslist[0].getObjects();
                    for (var i = 0; i < list.length; i++) 
                    {
                        if (list[i].id == "textpersonalizefront") 
                        {
                            object = list[i];
                            break;
                        }
                    }
                    if (object != null) 
                    {
                        object.set({
                            id: "textpersonalizeback"
                        });
                        canvaslist[2].add(object);
                        canvaslist[2].renderAll(canvaslist[2]);
                        canvaslist[0].remove(object);
                        canvaslist[0].renderAll(canvaslist[0]);
                        setcanvas(3);
                        canvaslist[2].setActiveObject(object);
                    }
                }
            } 
            else 
            {
                if (element.value == "Front") 
                {
                    object = null;
                    var list = canvaslist[2].getObjects();
                    for (var i = 0; i < list.length; i++) 
                    {
                        if (list[i].id == "numberpersonalizeback") 
                        {
                            object = list[i];
                            break;
                        }
                    }
                    if (object != null) 
                    {
                        object.set({
                            id: "numberpersonalizefront"
                        });
                        canvaslist[0].add(object);
                        canvaslist[0].renderAll(canvaslist[0]);
                        canvaslist[2].remove(object);
                        canvaslist[2].renderAll(canvaslist[2]);
                        setcanvas(1);
                        canvaslist[0].setActiveObject(object);
                    }
                } 
                else 
                {
                    object = null;
                    var list = canvaslist[0].getObjects();
                    for (var i = 0; i < list.length; i++) 
                    {
                        if (list[i].id == "numberpersonalizefront") 
                        {
                            object = list[i];
                            break;
                        }
                    }
                    if (object != null) 
                    {
                        object.set({
                            id: "numberpersonalizeback"
                        });
                        canvaslist[2].add(object);
                        canvaslist[2].renderAll(canvaslist[2]);
                        canvaslist[0].remove(object);
                        canvaslist[0].renderAll(canvaslist[0]);
                        setcanvas(3);
                        canvaslist[2].setActiveObject(object);
                    }
                }
            }
        }

        
        function drawpersonalize(pos)
        {
            var namepreview = "";
            var numberpreview = ""; 
            var nameobject = null;
            var numberobject = null;
            canvaspreviewfront.clear();
            canvaspreviewback.clear();

            if (document.getElementById("textpersonalizecheck").checked)
            {
                namepreview = document.getElementById("namepersonalize"+pos).value;
            }
            if (document.getElementById("numberpersonalizecheck").checked)
            {
                numberpreview = document.getElementById("numberpersonalize"+pos).value;
            }

            if (canvaslist[0].getObjects().length > 0)
            {
                for (var i = 0; i< canvaslist[0].getObjects().length ; i++) 
                {
                    if (canvaslist[0].getObjects()[i].id == "textpersonalizefront")
                    {
                        nameobject = canvaslist[0].getObjects()[i];
                    }
                    if (canvaslist[0].getObjects()[i].id == "numberpersonalizefront")
                    {
                        numberobject = canvaslist[0].getObjects()[i];
                    }
                }
            }

            if (canvaslist[2].getObjects().length > 0)
            {
                for (var i = 0; i< canvaslist[2].getObjects().length ; i++) 
                {
                    if (canvaslist[2].getObjects()[i].id == "textpersonalizeback")
                    { 
                        nameobject = canvaslist[2].getObjects()[i];
                    }
                    if (canvaslist[2].getObjects()[i].id == "numberpersonalizeback")
                    { 
                        numberobject = canvaslist[2].getObjects()[i];
                    }
                }
            }

            if (namepreview.length > 0)
            {
                var nameSample = new fabric.IText(namepreview.toUpperCase(), 
                {
                    left: nameobject.left / 2,
                    top: nameobject.top/2,
                    fontSize: nameobject.getFontSize()/2,
                    strokeWidth: nameobject.strokeWidth,
                    fontFamily:nameobject.getFontFamily(),
                    backgroundColor: nameobject.backgroundColor,
                    charSpacing: nameobject.charSpacing/2,
                    originX: nameobject.originX,
                    originY: nameobject.originY,
                    fill: nameobject.fill,
                    stroke:nameobject.stroke,
                    selectable : false,
                });

                nameSample.setControlsVisibility({
                    ml: false,
                    mr: false,
                    mb: false,
                    mt: false,
                    mtr: false,
                    bl: false,
                    tr: false,
                    tl: false,
                    br: false,
                });
                if (nameobject.id.indexOf("front") != -1)
                {
                    canvaspreviewfront.add(nameSample).renderAll();    
                }
                else
                {
                    canvaspreviewback.add(nameSample).renderAll();     
                }
            }
            if (numberpreview.length > 0)
            {
                var numberSample = new fabric.IText(numberpreview.toUpperCase(), 
                {
                    left: numberobject.left / 2,
                    top: numberobject.top/2,
                    fontSize: numberobject.getFontSize()/2,
                    strokeWidth: numberobject.strokeWidth,
                    fontFamily:numberobject.getFontFamily(),
                    backgroundColor: numberobject.backgroundColor,
                    charSpacing: numberobject.charSpacing/2,
                    originX:numberobject.originX,
                    originY:numberobject.originY,
                    fill: numberobject.fill,
                    stroke:numberobject.stroke,
                    selectable: false,
                });
                numberSample.setControlsVisibility({
                    ml: false,
                    mr: false,
                    mb: false,
                    mt: false,
                    mtr: false,
                    bl: false,
                    tr: false,
                    tl: false,
                    br: false,
                });
                if (numberobject.id.indexOf("front") != -1)
                {
                    canvaspreviewfront.add(numberSample).renderAll();    
                }
                else
                {
                    canvaspreviewback.add(numberSample).renderAll();     
                }
            }
        }



        function createpersonalizelist() 
        {
            if (canvaslist[0].getObjects().length > 0 || canvaslist[2].getObjects().length > 0) 
            {
                $("#PersonalizeListModal").modal("show");
                canvaspreviewfront.clear();
                canvaspreviewback.clear();
                if (document.getElementById("textpersonalizeside").value == "Front"  || document.getElementById("numberpersonalizeside").value == "Front") 
                {
                    document.getElementById("personalize_canvas_front_div").style.display = "block";
                }
                else
                {
                    document.getElementById("personalize_canvas_front_div").style.display = "none";
                }
                if (document.getElementById("textpersonalizeside").value == "Back"  || document.getElementById("numberpersonalizeside").value == "Back") 
                {
                    document.getElementById("personalize_canvas_back_div").style.display = "block";
                }
                else
                {
                    document.getElementById("personalize_canvas_back_div").style.display = "none";
                }
                startpersonalizerow();
            }
            else
            {
                showalert('selectnamenumberalert', 'Please select a name or number!', 'danger', 'Select  Name or  Number');
            } 
        }


        function startpersonalizerow()
        {
            var el = $("table.order-list")[0].children[1];
            while (el.firstChild) el.removeChild(el.firstChild);
            if (personalizelist != null && personalizelist.length > 0) 
            { 
                var countername = counternumber = countersizename = 0;       
                for (var i = 0; i < personalizelist.length; i++) 
                {
                    var optionslist = "";
                    optionslist += ("<option selected disabled>SIZE</option>");
                    for (var j = 0; j < currentdesign.product.parent.sizes.length; j++) 
                    {
                        if (currentdesign.product.parent.sizes[j].name == personalizelist[i].size_name)
                        {
                            optionslist += ("<option selected>" + currentdesign.product.parent.sizes[j].name + "</option>");
                        }
                        else
                        {
                            optionslist += ("<option >" + currentdesign.product.parent.sizes[j].name + "</option>");    
                        }
                    }
                    var newRow = $('<tr id="rowpersonalize' + i + '">');
                    var cols = "";
                    if (document.getElementById("textpersonalizecheck").checked)
                    {
                        if (personalizelist[i].name != "")
                        { 
                            countername ++;
                        } 
                        cols += '<td class="col-xs-6"><input type="text" class="form-control" name="namepersonalize' + i + '"  id="namepersonalize' + i + '" oninput="SavePersonalizeList(false); drawpersonalize('+ "'" +i + "'" +');" onclick="drawpersonalize('+ "'" +i + "'" +');" value="'+personalizelist[i].name+'"/></td>';  
                    }
                    else
                    {
                        cols += '<td class="col-xs-6"></td>';
                    }
                    if (document.getElementById("numberpersonalizecheck").checked)
                    {
                        if (personalizelist[i].number != "")
                        { 
                            counternumber ++;
                        }
                        cols += '<td class="col-xs-2"><input type="text" class="form-control" name="numberpersonalize' + i + '" id="numberpersonalize' + i + '" oninput="SavePersonalizeList(false); drawpersonalize('+ "'" +i + "'" +');" onclick="drawpersonalize('+ "'" +i + "'" +');" value="'+personalizelist[i].number+'"/></td>';
                    }
                    else
                    {
                        cols += '<td class="col-xs-2"></td>';
                    }
                    cols += '<td class="col-xs-2"><select class="form-control" id="sizepersonalize' + i + '" name="sizepersonalize' + i + '"  onchange="SavePersonalizeList(false);">' + optionslist + '</select></td>';
                    cols += '<td class="col-xs-1"><a href="javascript:void(0)" name="remove' + i + '" class="ibtnDel"><span class="glyphicon glyphicon-trash"></span></a></td>';
                    newRow.append(cols);
                    $("table.order-list").append(newRow);
                    if (personalizelist[i].size_name != "SIZE")
                    {
                        countersizename ++;
                    }
                }
                $("#personalizetotalsname").html(countername);
                $("#personalizetotalsnumber").html(counternumber);
                $("#personalizetotalssizename").html(countersizename);
                counter = personalizelist.length;
                personalizelisttmp = null;
                personalizelisttmp = personalizelist;
                var sizestext = "";
                for (var i = 0; i < currentdesign.product.parent.sizes.length; i++) 
                {   
                    for (var j = 0; j < personalizelist.length; j++)
                    {
                        if((personalizelist[j].size_name === currentdesign.product.parent.sizes[i].name))
                        {
                            countsize+=1;
                        }
                    }
                    if (countsize > 0)
                    {
                        sizestext += "("+countsize+")" + currentdesign.product.parent.sizes[i].name + ",";   
                        currentdesign.product.parent.sizes[i].quantity = countsize; 
                        countsize = 0;  
                    }
                }
                document.getElementById("personalizesizelist").innerHTML = sizestext.substr(0,sizestext.length - 1);
                currentdesign.personalize = personalizelist;
            }
            else
            {
                var optionslist = "";
                var countername = counternumber = countersizename = 0;
                optionslist += ("<option selected disabled>SIZE</option>");
                for (var j = 0; j < currentdesign.product.parent.sizes.length; j++) 
                {
                    optionslist += ("<option >" + currentdesign.product.parent.sizes[j].name + "</option>");    
                }
                for (var i = 1; i < counter; i++) 
                {
                    var newRow = $('<tr id="rowpersonalize' + i + '">');
                    var cols = "";
                    if (document.getElementById("textpersonalizecheck").checked)
                    {
                        cols += '<td class="col-xs-6"><input type="text" class="form-control" name="namepersonalize' + i + '"  id="namepersonalize' + i + '" oninput="SavePersonalizeList(false); drawpersonalize('+ "'" +i + "'" +');" onclick="drawpersonalize('+ "'" +i + "'" +');"/></td>';  
                    }
                    else
                    {
                        cols += '<td class="col-xs-6"></td>';
                    }
                    if (document.getElementById("numberpersonalizecheck").checked)
                    {
                        cols += '<td class="col-xs-2"><input type="text" class="form-control" name="numberpersonalize' + i + '" id="numberpersonalize' + i + '" oninput="SavePersonalizeList(false); drawpersonalize('+ "'" +i + "'" +');" onclick="drawpersonalize('+ "'" +i + "'" +');"/></td>';
                    }
                    else
                    {
                        cols += '<td class="col-xs-2"></td>';
                    }
                    cols += '<td class="col-xs-2"><select class="form-control" id="sizepersonalize' + i + '" name="sizepersonalize' + i + '"  onchange="SavePersonalizeList(false);">' + optionslist + '</select></td>';
                    cols += '<td class="col-xs-1"><a href="javascript:void(0)" id="removepersonalize' + i + '" name="removepersonalize' + i + '" class="ibtnDel"><span class="glyphicon glyphicon-trash"></span></a></td>';
                    newRow.append(cols);
                    $("table.order-list").append(newRow);
                }
                $("#personalizetotalsname").html(countername);
                $("#personalizetotalsnumber").html(counternumber);
                $("#personalizetotalssizename").html(countersizename);
                counter = 5;
                currentdesign.personalize = personalizelist;
            }
        }


        function addpersonalizerow()
        {
            var optionslist = "";
            optionslist += ("<option selected disabled>SIZE</option>");
            for (var i = 0; i < currentdesign.product.parent.sizes.length; i++) 
            {
                optionslist += ("<option >" + currentdesign.product.parent.sizes[i].name + "</option>");
            }
            var newRow = $('<tr id="rowpersonalize' + counter + '">');
            var cols = "";
            if (document.getElementById("textpersonalizecheck").checked)
            {
                cols += '<td class="col-xs-6"><input type="text" class="form-control" name="namepersonalize' + counter + '"  id="namepersonalize' + counter + '" oninput="SavePersonalizeList(false); drawpersonalize('+ "'" +counter + "'" +');" onclick="drawpersonalize('+ "'" +counter + "'" +');"/></td>';  
            }
            else
            {
                cols += '<td class="col-xs-6"></td>';  
            }
            if (document.getElementById("numberpersonalizecheck").checked)
            {
                cols += '<td class="col-xs-2"><input type="text" class="form-control" name="numberpersonalize' + counter + '" id="numberpersonalize' + counter + '" oninput="SavePersonalizeList(false); drawpersonalize('+ "'" +counter + "'" +');" onclick="drawpersonalize('+ "'" +counter + "'" +');"/></td>';
            }
            else
            {
                cols += '<td class="col-xs-2"></td>'; 
            }
            cols += '<td class="col-xs-2"><select class="form-control" id="sizesizepersonalize' + counter + '" name="sizesizepersonalize' + counter + '" onchange="SavePersonalizeList(false);">' + optionslist + '</select></td>';
            cols += '<td class="col-xs-1"><a href="javascript:void(0)" id="removepersonalize' + counter + '" name="removepersonalize' + counter + '" class="ibtnDel"><span class="glyphicon glyphicon-trash"></span></a></td>';
            newRow.append(cols);
            $("table.order-list").append(newRow);
            counter++;
        }

        $("table.order-list").on("click", ".ibtnDel", function(event) 
        {   
            if (currentdesign.personalize != null)
            {   
                currentdesign.personalize.splice($(this).closest("tr")[0].id.split("rowpersonalize")[1],1);
                startpersonalizerow();
            }
            $(this).closest("tr").remove();
        });


        function SavePersonalizeList(save) 
        {
            var list =  $("table.order-list").find('input,select');
            var countername = counternumber = countersizename = 0;
            var personalizelisttmp = [];
            var step = 3;
            if (document.getElementById("textpersonalizecheck").checked && document.getElementById("numberpersonalizecheck").checked)
            {
                step = 3;
            }
            else if (document.getElementById("textpersonalizecheck").checked && !document.getElementById("numberpersonalizecheck").checked)
            {
                step = 2;
            }
            else if (!document.getElementById("textpersonalizecheck").checked && document.getElementById("numberpersonalizecheck").checked)
            {
                step = 2;
            }
            for (var i = 0; i < list.length-1; i+=step)
            {
                if (list[i].type != "button")
                {
                    var personalize = {name:"", number:"", size_name:""};
                    if (document.getElementById("textpersonalizecheck").checked && document.getElementById("numberpersonalizecheck").checked)
                    {
                        if (list[i].value != "")
                        { 
                            personalize.name = list[i].value;
                            countername ++;
                        } 
                        if (list[i+1].value != "")
                        { 
                            personalize.number = list[i+1].value;
                            counternumber ++;
                        }
                        if (list[i+2].value != "SIZE")
                        {
                            personalize.size_name = list[i+2].value;
                            countersizename ++;
                        }
                    }
                    else if (document.getElementById("textpersonalizecheck").checked && !document.getElementById("numberpersonalizecheck").checked)
                    {
                        if (list[i].value != "")
                        { 
                            personalize.name = list[i].value;
                            countername ++;
                        } 
                        if (list[i+1].value != "SIZE")
                        {
                            personalize.size_name = list[i+1].value
                            countersizename ++;
                        }
                    }
                    else if (!document.getElementById("textpersonalizecheck").checked && document.getElementById("numberpersonalizecheck").checked)
                    {
                        if (list[i].value != "")
                        { 
                            personalize.number = list[i].value;
                            counternumber ++;
                        }
                        if (list[i+1].value != "SIZE")
                        {
                            personalize.size_name = list[i+1].value;
                            countersizename ++;
                        }
                    }
                    if (document.getElementById("textpersonalizecheck").checked && document.getElementById("numberpersonalizecheck").checked)
                    {
                        if (personalize.name != "" && personalize.number != "" && personalize.size_name != "")
                        { 
                            personalizelisttmp.push(personalize);
                        }
                        $("#personalizetotalsname").html(countername);
                        $("#personalizetotalsnumber").html(counternumber);
                        $("#personalizetotalssizename").html(countersizename);
                    }
                    else if (document.getElementById("textpersonalizecheck").checked && !document.getElementById("numberpersonalizecheck").checked)
                    {
                        if (personalize.name != "" && personalize.size_name != "")
                        { 
                            personalizelisttmp.push(personalize);
                        }
                        $("#personalizetotalsname").html(countername);
                        $("#personalizetotalsnumber").html(0);
                        $("#personalizetotalssizename").html(countersizename);
                    }
                    else if (!document.getElementById("textpersonalizecheck").checked && document.getElementById("numberpersonalizecheck").checked)
                    { 
                        if (personalize.number != "" && personalize.size_name != "")
                        {
                            personalizelisttmp.push(personalize);
                        } 
                        $("#personalizetotalsname").html(0);
                        $("#personalizetotalsnumber").html(counternumber);
                        $("#personalizetotalssizename").html(countersizename);
                    }
                }
            }
            if (personalizelisttmp.length > 0 && save)
            {  
                personalizelist = personalizelisttmp;
            }
            var sizestext = "";
            for (var i = 0; i < currentdesign.product.parent.sizes.length; i++) 
            {   
                for (var j = 0; j < personalizelisttmp.length; j++)
                {
                    if((personalizelisttmp[j].size_name === currentdesign.product.parent.sizes[i].name))
                    {
                        countsize+=1;
                    }
                }
                if (countsize > 0)
                {
                    sizestext += "("+countsize+") " + currentdesign.product.parent.sizes[i].name + ", ";  
                    if (save)
                    {
                        currentdesign.product.parent.sizes[i].quantity = countsize; 
                    } 
                    countsize = 0;  
                }
            }
            document.getElementById("personalizesizelist").innerHTML = sizestext.substr(0,sizestext.length - 2);
            if (save)
            {
                currentdesign.personalize = personalizelist;
            }
        }
        
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
            tl: {
                action: 'rotate',
                cursor: 'pointer'
            },
        }, function() {
             canvaslist.forEach(canvas => {
                canvas.renderAll();
            });
        });

        function isMobile()
        {
            return true;
        }

   </script>
</body>
</html>