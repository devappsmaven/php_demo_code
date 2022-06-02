<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vivid Customs || @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Vivid Customs">
    
    <link href="{{asset('css/frontend/Eshopper/bootstrap.min.css')}}@php echo '?v='.rand(); @endphp" rel="stylesheet">
    <link href="{{asset('css/frontend/Eshopper/font-awesome.min.css')}}@php echo '?v='.rand(); @endphp" rel="stylesheet">
    <link href="{{asset('css/frontend/Eshopper/prettyPhoto.css')}}@php echo '?v='.rand(); @endphp" rel="stylesheet">
    <link href="{{asset('css/frontend/Eshopper/price-range.css')}}@php echo '?v='.rand(); @endphp" rel="stylesheet">
    <link href="{{asset('css/frontend/Eshopper/animate.css')}}@php echo '?v='.rand(); @endphp" rel="stylesheet">
    <link href="{{asset('css/frontend/Eshopper/responsive.css')}}@php echo '?v='.rand(); @endphp" rel="stylesheet">
    
      
    <link rel="stylesheet" type="text/css" href="{{asset('css/shirtcolors.css') }}@php echo '?v='.rand(); @endphp">

    <!--<link href="{{asset('css/frontend/Eshopper/custom.css')}}@php echo '?v='.rand(); @endphp" rel="stylesheet">-->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{asset('images/ico/favicon.ico')}}@php echo '?v='.rand(); @endphp">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/ico/apple-touch-icon-144-precomposed.png')}}@php echo '?v='.rand(); @endphp">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/ico/apple-touch-icon-114-precomposed.png')}}@php echo '?v='.rand(); @endphp">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/ico/apple-touch-icon-72-precomposed.png')}}@php echo '?v='.rand(); @endphp">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/ico/apple-touch-icon-57-precomposed.png')}}@php echo '?v='.rand(); @endphp">

    <link href="{{asset('css/frontend/Eshopper/color/skin-'.$theme->color)}}.css@php echo '?v='.rand(); @endphp" data-style="styles" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/frontend/Eshopper/additional.css')}}@php echo '?v='.rand(); @endphp">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>

        
    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 100000;
        top: 0;
        left: 0;
        background-color: #D6D6D0;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
        text-align:center;
        }

        .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;

        }

        .sidenav a:hover{
        color: #f1f1f1;
        }

        .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
        }
    </style>
</head><!--/head-->

<body  style="background-color:{{$theme->backgroundcolor}} !important; background-image: url('{{$theme->backgroundimage}}');}}" >
        @yield('content')
    <script src="{{asset('js/frontend/Eshopper/jquery.js')}}@php echo '?v='.rand(); @endphp"></script>
	<script src="{{asset('js/frontend/Eshopper/bootstrap.min.js')}}@php echo '?v='.rand(); @endphp"></script>
	<script src="{{asset('js/frontend/Eshopper/jquery.scrollUp.min.js')}}@php echo '?v='.rand(); @endphp"></script>
	<script src="{{asset('js/frontend/Eshopper/price-range.js')}}@php echo '?v='.rand(); @endphp"></script>
    <script src="{{asset('js/frontend/Eshopper/jquery.prettyPhoto.js')}}@php echo '?v='.rand(); @endphp"></script>
    <script src="{{asset('js/frontend/Eshopper/cleave.min.js')}}@php echo '?v='.rand(); @endphp"></script>
    <script src="{{asset('js/frontend/Eshopper/cleave-phone.i18n.js')}}@php echo '?v='.rand(); @endphp"></script>
    <script src="{{asset('js/frontend/Eshopper/main.js')}}@php echo '?v='.rand(); @endphp"></script>
    <!--<script src="{{asset('js/frontend/Eshopper/custom.js')}}@php echo '?v='.rand(); @endphp"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
    <script type="text/javascript" src="{{asset('js/frontend/Eshopper/gmaps.js')}}"></script>-->
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "100%";
        }
        
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</body>
</html>