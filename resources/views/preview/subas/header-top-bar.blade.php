<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vivid Customs || Preview  Header Top Bar</title>
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
    <!-- User style -->
    <link rel="stylesheet" href="{{asset('css/frontend/subas/custom.css')}}">

    <!-- Modernizr JS -->
    <script src="{{asset('js/frontend/subas/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body class="hold-transition skin-blue sidebar-mini pace-running">
    
    <!-- Body main wrapper start -->
    <div class="wrapper" id="app">

        <header class="header-area header-wrapper">
            <div class="header-top-bar plr-185">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 hidden-xs">
                            <div class="call-us">
                                <p class="mb-0 roboto">(+88) 01234-567890</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="top-link clearfix">
                                <ul class="link f-right">
                                    <li>
                                        <a href="my-account.html">
                                            <i class="zmdi zmdi-account"></i>
                                            My Account
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html">
                                            <i class="zmdi zmdi-favorite"></i>
                                            Wish List (0)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="login.html">
                                            <i class="zmdi zmdi-lock"></i>
                                            Login
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        
        </header>
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
