<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vivid Customs || @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Vivid Customs">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/frontend/subas/icon/favicon.png')}}@php echo '?v='.rand(); @endphp">

    <!-- All CSS Files -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{asset('css/frontend/subas/bootstrap.min.css')}}@php echo '?v='.rand(); @endphp">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
    <!-- Nivo-slider css -->
    <link rel="stylesheet" href="{{asset('lib/frontend/subas/css/nivo-slider.css')}}@php echo '?v='.rand(); @endphp">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{asset('css/frontend/subas/core.css')}}@php echo '?v='.rand(); @endphp">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{asset('css/frontend/subas/shortcode/shortcodes.css')}}@php echo '?v='.rand(); @endphp">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{asset('css/frontend/subas/style.css')}}@php echo '?v='.rand(); @endphp">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('css/frontend/subas/responsive.css')}}@php echo '?v='.rand(); @endphp">
    <link rel="stylesheet" type="text/css" href="{{asset('css/shirtcolors.css') }}@php echo '?v='.rand(); @endphp">
    <!-- Template color css -->
    
    <link href="{{asset('css/frontend/subas/color/skin-'.$theme->color)}}.css@php echo '?v='.rand(); @endphp" data-style="styles" rel="stylesheet">

    <script src="{{asset('js/frontend/subas/cleave.min.js')}}@php echo '?v='.rand(); @endphp"></script>
    <script src="{{asset('js/frontend/subas/cleave-phone.i18n.js')}}@php echo '?v='.rand(); @endphp"></script>
    <!-- User style -->
    <link rel="stylesheet" href="{{asset('css/frontend/subas/custom.css')}}@php echo '?v='.rand(); @endphp">
    <link rel="stylesheet" href="{{asset('css/frontend/subas/additional.css')}}@php echo '?v='.rand(); @endphp">
    

    <!-- Modernizr JS -->
    <script src="{{asset('js/frontend/subas/vendor/modernizr-2.8.3.min.js')}}@php echo '?v='.rand(); @endphp"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 100000;
            top: 0;
            left: 0;
            background-color: #111;
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
</head>

<body class="hold-transition skin-blue sidebar-mini pace-running">
    
    <!-- Body main wrapper start -->
    
    <div class="wrapper" id="app"  style="background-color:{{$theme->backgroundcolor}} !important; background-image: url('{{$theme->backgroundimage}}');}}" >
        @yield('content')
    </div>
    <!-- Body main wrapper end -->

    <!-- jquery latest version -->
    <script src="{{asset('js/frontend/subas/vendor/jquery-3.1.1.min.js')}}@php echo '?v='.rand(); @endphp"></script>
    <!-- Bootstrap framework js -->
    <script src="{{asset('js/frontend/subas/bootstrap.min.js')}}@php echo '?v='.rand(); @endphp"></script>
    <!-- jquery.nivo.slider js -->
    <script src="{{asset('lib/frontend/subas/js/jquery.nivo.slider.js')}}@php echo '?v='.rand(); @endphp"></script>
    <!-- All js plugins included in this file. -->
    <script src="{{asset('js/frontend/subas/plugins.js')}}@php echo '?v='.rand(); @endphp"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="{{asset('js/frontend/subas/main.js')}}@php echo '?v='.rand(); @endphp"></script>
    <script src="{{asset('js/frontend/subas/custom.js')}}@php echo '?v='.rand(); @endphp"></script>
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
    <script src="{{asset('js/frontend/subas/map.js')}}"></script>-->
    <!-- Scripts 
    <script src="{{ asset('js/app.js')}})"></script>-->
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
