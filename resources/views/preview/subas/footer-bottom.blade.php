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
        <footer id="footer" class="footer-area">
            <div class="footer-bottom black-bg">
                <div class="container-fluid">
                    <div class="plr-185">
                        <div class="copyright">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="copyright-text">
                                        <p>© <a href="https://themeforest.net/user/codecarnival/portfolio" target="_blank">CodeCarnival</a> 2016. All Rights Reserved.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <ul class="footer-payment text-right">
                                        <li>
                                            <a href="#"><img src="img/payment/1.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="img/payment/2.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="img/payment/3.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="img/payment/4.jpg" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
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
