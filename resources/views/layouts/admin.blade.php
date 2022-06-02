
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin || @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    @if (file_exists(public_path('/img/logo/favicon.png')))
      <link rel="shortcut icon" type="image/x-icon" href="{{asset('/img/logo/favicon.png')}}@php echo '?v='.rand(); @endphp">
    @else
      <link rel="shortcut icon" type="image/x-icon" href="{{asset('/img/icon/favicon.png')}}@php echo '?v='.rand(); @endphp">
    @endif
    <!-- App/All css -->
    <!--<link rel="stylesheet" href="{{ asset('css/app.css')}}">-->

    <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset('bower_components/morris.js/morris.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">


    <link rel="stylesheet" href="{{ asset('fonts/fonts.css') }}@php echo '?v='.rand(); @endphp">
    <link rel="stylesheet" type="text/css" href="{{asset('css/shirtcolors.css') }}@php echo '?v='.rand(); @endphp">
    <link rel="stylesheet" href="{{ asset('css/customs.css') }}@php echo '?v='.rand(); @endphp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <link rel="stylesheet" href="{{ asset('css/skins/_all-skins.min.css') }}@php echo '?v='.rand(); @endphp">
    
  </head>
  <body class="hold-transition skin-blue sidebar-mini fixed">
    <!-- Site wrapper -->
    <div class="wrapper" id="app">
      
      @include('layouts.admin-header')

      <!-- =============================================== -->

      @include('layouts.admin-main-sidebar')

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
                @yield('pagename')
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"> @yield('menuname')</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0.0
        </div>
        <strong>Copyright &copy; 2018-2019 <a href="https://www.vividcustoms.com">Vividcustoms</a>.</strong> All rights reserved.
      </footer>

      @include('layouts.admin-control-sidebar')
    
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!--General App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
    <!-- jQuery 3 -->
  <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{asset('bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->  
  <!-- Bootstrap 3.3.7 -->
  <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <!-- Morris.js charts -->
  <script src="{{asset('bower_components/raphael/raphael.min.js')}}"></script>
  <script src="{{asset('bower_components/morris.js/morris.min.js')}}"></script>
  <script src="{{asset('bower_components/select2/dist/js/select2.full.min.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{asset('bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
  <!-- daterangepicker -->
  <script src="{{asset('bower_components/moment/min/moment.min.js')}}"></script>
  <script src="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <!-- datepicker -->
  <script src="{{asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
  <!-- Slimscroll -->
  <script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
  <!-- Select2 -->
  <script src="{{asset('bower_components/select2/dist/js/select2.full.min.js')}}"></script>
  <!-- InputMask -->
  <script src="{{asset('plugins/input-mask/jquery.inputmask.js')}}"></script>
  <script src="{{asset('plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
  <script src="{{asset('plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
  <!-- bootstrap color picker -->
  <script src="{{asset('bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
  <!-- iCheck 1.0.1 -->
  <script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
  <!-- DataTables -->
  <script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <!-- Bootstrap slider -->
  <script src="{{asset('plugins/bootstrap-slider/bootstrap-slider.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <!--<script src="{{asset('dist/js/demo.js')}}"></script>-->


  <!-- CK Editor 
  <script src="{{asset('bower_components/ckeditor/ckeditor.js')}}"></script>-->
  <!-- Bootstrap WYSIHTML5 -->
  <script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>

    <!--<script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>-->
    <script src="{{asset('js/manifest.js')}}@php echo '?v='.rand(); @endphp"></script>
    <script src="{{asset('js/vendor.js')}}@php echo '?v='.rand(); @endphp"></script>
    <script src="{{asset('js/app.js')}}@php echo '?v='.rand(); @endphp"></script>
    <!--<script src="{{asset('js/bootstrap3-wysihtml5.all.min.js')}}"></script> -->
    <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    <script src="{{asset('js/jquery.validate.js')}}"></script> 
    <!--<script src="{{asset('js/validate-bootstrap.jquery.min.js')}}"></script> -->
   
    
     <!--Vividcustoms App-->
    <script src="{{asset('js/custom.js')}}@php echo '?v='.rand(); @endphp"></script>
    <script src="{{asset('js/validations.js')}}@php echo '?v='.rand(); @endphp"></script> 
    <script>
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.config.allowedContent = true;
        if ($('#description').length) {
          CKEDITOR.replace('description');
        }        
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
      });
    </script>
    
  </body>
</html>
