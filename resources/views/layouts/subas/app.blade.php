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
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/frontend/subas/icon/favicon.png')}}">

    <!-- All CSS Files -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{asset('css/frontend/subas/bootstrap.min.css')}}">
    <!-- Nivo-slider css -->
    <link rel="stylesheet" href="{{asset('lib/frontend/subas/css/nivo-slider.css')}}">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{asset('css/frontend/subas/core.css')}}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{asset('css/frontend/subas/shortcode/shortcodes.css')}}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{asset('css/frontend/subas/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('css/frontend/subas/responsive.css')}}">
    <!-- Template color css -->
    <link href="{{asset('css/frontend/subas/color/color-core.css')}}" data-style="styles" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/shirtcolors.css') }}@php echo '?v='.rand(); @endphp">
    <!-- User style -->
    <link rel="stylesheet" href="{{asset('css/frontend/subas/custom.css')}}">

    <!-- Modernizr JS -->
    <script src="{{asset('js/frontend/subas/vendor/modernizr-2.8.3.min.js')}}"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="hold-transition skin-blue sidebar-mini pace-running">
    
    <!-- Body main wrapper start -->
    <div class="wrapper" id="app">

        <!-- START HEADER AREA -->
        <header class="header-area header-wrapper">
            @include( 'layouts.'.$template.".header-top-bar")
            
            @include( 'layouts.'.$template.".header-middle-area")
        </header>
        <!-- END HEADER AREA -->

        <!-- START MOBILE MENU AREA -->
        @include('layouts.subas.mobile-menu-area')
        <!-- END MOBILE MENU AREA -->

        <!-- Start page content -->
        <div id="page-content" class="page-wrapper">
            @yield('content')
        </div>
        <!-- End page content -->

        <!-- START FOOTER AREA -->
        @include('layouts.subas.footer-area')
        <!-- END FOOTER AREA -->
        
        <!-- START QUICKVIEW PRODUCT -->
        @include('layouts.subas.quickview-area')
        <!-- END QUICKVIEW PRODUCT -->
    </div>
    <!-- Body main wrapper end -->

    <!-- jquery latest version -->
    <script src="{{asset('js/frontend/subas/vendor/jquery-3.1.1.min.js')}}"></script>
    <!-- Bootstrap framework js -->
    <script src="{{asset('js/frontend/subas/bootstrap.min.js')}}"></script>
    <!-- jquery.nivo.slider js -->
    <script src="{{asset('lib/frontend/subas/js/jquery.nivo.slider.js')}}"></script>
    <!-- All js plugins included in this file. -->
    <script src="{{asset('js/frontend/subas/plugins.js')}}"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="{{asset('js/frontend/subas/main.js')}}"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</body>

</html>
