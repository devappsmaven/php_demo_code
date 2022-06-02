@extends('layouts.admin')
@section('title','Profile')
@section('pagename','Profile')
@section('menuname','Profile')
@section('content')
@guest

@endguest
@include('common.alerts')   
<div class="row">
    <div class="col-md-6">

       <!-- Profile Image -->
       <div class="box box-primary">
        <div class="box-body box-profile">
          <img class="profile-user-img img-responsive img-circle" src="{{asset('img/profile')}}{{'/'}}{{$user->image}}" alt="User profile picture">
          <h3 class="profile-username text-center">{{$user->firstname}} {{$user->lastname}}</h3>
         

          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>Username</b> <a class="pull-right">{{$user->username}}</a>
            </li>
            <li class="list-group-item">
              <b>Email</b> <a class="pull-right">{{$user->email}}</a>
            </li>
            <li class="list-group-item">
              <b>Phone</b> <a class="pull-right">{{$user->phone}}</a>
            </li>
          </ul>
          <a href="#" class="btn btn-primary btn-block" style="display:none"><b>Follow</b></a>
        </div><!-- /.box-body -->
      </div><!-- /.box -->

      <!-- About Me Box 
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">About Me</h3>
        </div>
        <div class="box-body">
          <strong><i class="fa fa-book margin-r-5"></i>  Education</strong>
          <p class="text-muted">
            B.S. in Computer Science from the University of Tennessee at Knoxville
          </p>

          <hr>

          <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
          <p class="text-muted">Malibu, California</p>

          <hr>

          <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
          <p>
            <span class="label label-danger">UI Design</span>
            <span class="label label-success">Coding</span>
            <span class="label label-info">Javascript</span>
            <span class="label label-warning">PHP</span>
            <span class="label label-primary">Node.js</span>
          </p>

          <hr>

          <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
        </div>
      </div>-->
    </div><!-- /.col -->
    <div class="col-md-6">

      


      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#personalinfo" data-toggle="tab">Change Info</a></li>
          <li><a href="#password" data-toggle="tab">Change Password</a></li>
        </ul>
        <div class="tab-content">
          <div class="active tab-pane" id="personalinfo">
              <form method="POST" action="{{ route('admin.profile') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }} has-feedback">
                    {{Form::label('firstname','Firstname *')}}
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input class="form-control" name="firstname" type="text" id="firstname" value="{{$user->firstname}}">
                    </div>
                    @if ($errors->has('firstname'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('firstname') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }} has-feedback">
                    {{Form::label('lastname','Lastname *')}}
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input class="form-control" name="lastname" type="text" id="lastname" value="{{$user->lastname}}">
                        
                    </div>
                    @if ($errors->has('lastname'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('lastname') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }} has-feedback">
                    {{Form::label('username','Username *')}}
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input class="form-control" name="username" type="text" id="username" value="{{$user->username}}">
                        </div>
                        @if ($errors->has('username'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                </div>
                
                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }} has-feedback">
                <img class="img-responsive" src="{{asset('img/profile')}}{{'/'}}{{$user->image}}" alt="User profile picture">
                    {{Form::label('image','Image')}}
                    <div class="input-group">
                        <input name="image" type="file" id="image">
                     </div>
                     @if ($errors->has('image'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                    @endif
                </div>

                

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                    {{Form::label('email','Email *')}}
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <input class="form-control" name="email" type="text" id="email" value="{{$user->email}}">
                    </div>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <!-- phone mask -->
                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }} has-feedback">
                    <label>Phone</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                      <input class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" id="phone" name="phone" type="text" value="{{$user->phone}}">
                    </div><!-- /.input group -->
                    @if ($errors->has('phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
                </div><!-- /.form group -->
                <div class="form-group">
                    {{Form::submit('Save',['class'=>'btn btn-primary btn-sm'])}}
                </div>
            </form>
          </div><!-- /.tab-pane -->
          <div class="tab-pane" id="password">
              <form method="POST" action="{{ route('admin.changepassword') }}">
              {{ csrf_field() }}
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                    {{Form::label('password','Password *')}}
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input class="form-control" name="password" type="password" value="" id="password">
                    </div>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} has-feedback">
                    {{Form::label('password_confirmation','Confirm Password *')}}
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input class="form-control" name="password_confirmation" type="password" value="" id="password_confirmation">
                        
                    </div>
                    @if ($errors->has('password_confirmation'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    {{Form::submit('Change',['class'=>'btn btn-primary btn-sm'])}}
                </div>
            </form>
          </div><!-- /.tab-pane -->
        </div><!-- /.tab-content -->
      </div><!-- /.nav-tabs-custom -->
    </div><!-- /.col -->
  </div><!-- /.row -->
@endsection