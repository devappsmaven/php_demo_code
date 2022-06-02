<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin | Lockscreen</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Vividcustoms css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition lockscreen">
    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper">
      <div class="lockscreen-logo">
        <a href="{{route('admin.login')}}"><b>Admin</b></a>
      </div>
      <!-- User name -->
      <div class="lockscreen-name">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</div>

      <!-- START LOCK SCREEN ITEM -->
      <div class="lockscreen-item">
        <!-- lockscreen image -->
        <div class="lockscreen-image">
          <img src="{{asset('img/profile')}}{{'/'}}{{Auth::user()->image}}" alt="User Image">
        </div>
        <!-- /.lockscreen-image -->

        
        <form class="lockscreen-credentials" method="POST" action="{{ route('admin.unlock') }}" aria-label="{{ __('Locked') }}">
          {{ csrf_field() }}
          <div class="input-group">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="password" required>
             @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <div class="input-group-btn">
              <button class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
            </div>
          </div>
        </form> 

      </div><!-- /.lockscreen-item -->
      <div class="help-block text-center">
        Enter your password to retrieve your session
      </div>
      <div class="text-center">
        <a href="{{route('admin.logout')}}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Or sign in as a different user</a>
        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
            </form>
      </div>
      <div class="lockscreen-footer text-center">
        Copyright &copy; 2014-2015 <b><a href="https://www.vividcustoms.com" class="text-black">Vividcustoms</a></b><br>
        All rights reserved
      </div>
    </div><!-- /.center -->

    <!-- Vividcustoms js -->
    <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>
