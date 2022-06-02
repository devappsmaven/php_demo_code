@extends('layouts.admin')
@section('title','Theme Edit')
@section('pagename','Theme Edit')
@section('menuname','Theme Edit')
@section('content')
@include('common.alerts') 

  <div class="row">
    <div class="col-md-3">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">{{$theme->name}}</h3>
          <div class="box-tools">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="box-body no-padding">
          <ul class="nav nav-pills nav-stacked nav-tabs">
            <li class="active"><a href="#theme-color" data-toggle="tab"><i class="fa fa-caret-square-o-up"></i>Customizing Colors<span class="label label-primary pull-right"></span></a></li>
            <li><a href="#theme-background" data-toggle="tab"><i class="fa fa-caret-square-o-up"></i>Customizing Background Image<span class="label label-primary pull-right"></span></a></li>
            <li><a href="#theme-favicon" data-toggle="tab"><i class="fa fa-caret-square-o-up"></i>Customizing Favicon<span class="label label-primary pull-right"></span></a></li>
       
            <li><a href="#header-top" data-toggle="tab"><i class="fa fa-caret-square-o-up"></i> Header Top Area<span class="label label-primary pull-right">2</span></a></li>
            <!-- <li><a href="#header-middle" data-toggle="tab"><i class="fa fa-caret-square-o-right"></i> Header Middle Area<span class="label label-primary pull-right">2</span></a></li>
            <li><a href="#header-bottom" data-toggle="tab"><i class="fa fa-caret-square-o-down"></i> Header Bottom Area <span class="label label-warning pull-right">1</span></a></li>
            <li><a href="#mobile" data-toggle="tab"><i class="fa fa-mobile"></i> Mobile Area<span class="label label-primary pull-right">1</span></a></li>
            <li><a href="#left-side" data-toggle="tab"><i class="fa fa-align-left"></i> Left Side Area<span class="label label-primary pull-right">1</span></a></li>
            <li><a href="#body" data-toggle="tab"><i class="fa fa-align-center"></i> Content Area<span class="label label-primary pull-right">1</span></a></li>
            <li><a href="#right-side" data-toggle="tab"><i class="fa fa-align-right"></i> Right Side Area<span class="label label-primary pull-right">1</span></a></li>
            <li><a href="#footer-top" data-toggle="tab"><i class="fa fa-arrow-circle-up"></i>Footer Top Area<span class="label label-primary pull-right">1</span></a></li>
            <li><a href="#footer-middle" data-toggle="tab"><i class="fa fa-arrow-circle-left"></i>Footer Middle Area<span class="label label-primary pull-right">1</span></a></li>
            <li><a href="#footer-bottom" data-toggle="tab"><i class="fa fa-arrow-circle-down"></i>Footer Bottom Area<span class="label label-primary pull-right">1</span></a></li>
          -->
          </ul>
        </div>
      </div>
      
    </div>
    <div class="col-md-9 tab-content">
      <div class="box box-primary tab-pane active" id="theme-color">
        <div class="box-header with-border">
          <h3 class="box-title">Customizing Colors</h3>
        </div>
        <div class="box-body">
          <form role="form" method="POST" action="/admin/themes/setcolor/{{$theme->id}}" enctype="multipart/form-data" class="colors_form" novalidate="novalidate">
            {{csrf_field()}}
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('themecolor') ? ' has-error' : '' }} has-feedback">
                      <label for="themecolors">Color List</label>
                      {!! Form::select('themecolor' , $themecolors, $theme->color , ['id' => 'themecolor','class' => 'form-control select2 selectcolors', 'style' => 'width:100%;']) !!}
                      @if ($errors->has('themecolor'))
                          <span class="invalid-feedback" role="alert">
                              <strong class="text-red">{{ $errors->first('themecolor') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('themebackgroundcolor') ? ' has-error' : '' }} has-feedback">
                      <label for="themebackgroundcolor">Background Color</label>
                      <div class="input-group my-colorpicker2">
                          <input type="text" class="form-control" name="themebackgroundcolor" value="{{$theme->backgroundcolor}}">
                          <div class="input-group-addon">
                              <i></i>
                          </div>
                      </div>
                      @if ($errors->has('themecolor'))
                          <span class="invalid-feedback" role="alert">
                              <strong class="text-red">{{ $errors->first('themebackgroundcolor') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
              </div>	
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
          </form>
        </div>
      </div>
      <div class="box box-primary tab-pane" id="theme-background">
        <div class="box-header with-border">
          <h3 class="box-title">Customizing Background Image</h3>
        </div>
        <div class="box-body">
          <form role="form" method="POST" action="/admin/themes/setbackground/{{$theme->id}}" enctype="multipart/form-data" class="colors_form" novalidate="novalidate">
            {{csrf_field()}}
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group{{ $errors->has('themebackgroundimage') ? ' has-error' : '' }} has-feedback">
                      <label for="themebackgroundimage">Image</label>
                      @if($theme->backgroundimage != '')
                      <img class="img-responsive" src="{{asset($theme->backgroundimage)}}">
                      <a href="{{ route('themes.unsetbackground', $theme->id) }}"  onclick="event.preventDefault(); document.getElementById('favorite-form-{{ $theme->id }}').submit();">Remove</a>
                      
                      @endif
                      {{Form::file('themebackgroundimage')}}
                      @if ($errors->has('themebackgroundimage'))
                          <span class="invalid-feedback" role="alert">
                              <strong class="text-red">{{ $errors->first('themebackgroundimage') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
              </div>	
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
          </form>
          <form id="favorite-form-{{ $theme->id }}" method="POST" action="{{ route('themes.unsetbackground', $theme->id) }}" style="display: none;">
              {{ csrf_field() }}
          </form>
        </div>
      </div>
      <div class="box box-primary tab-pane" id="theme-favicon">
        <div class="box-header with-border">
          <h3 class="box-title">Customizing Favicon</h3>
        </div>
        <div class="box-body">
          <form role="form" method="POST" action="/admin/themes/setfavicon/{{$theme->id}}" enctype="multipart/form-data" class="colors_form" novalidate="novalidate">
            {{csrf_field()}}
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group{{ $errors->has('favicon') ? ' has-error' : '' }} has-feedback">
                      <label for="favicon">Image</label>
                      @if(file_exists(public_path('/img/logo/favicon.png')))
                      <img class="img-responsive help-block" src="{{asset('/img/logo/favicon.png')}}">                      
                      @endif
                    {{Form::file('favicon', ['accept' => '.png'])}}
                    <small class="text-muted">Please upload 512x512 png file.</small>
                      @if ($errors->has('favicon'))
                          <span class="invalid-feedback" role="alert">
                              <strong class="text-red">{{ $errors->first('favicon') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
              </div>  
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
          </form>
        </div>
      </div>
      <div class="box box-primary tab-pane" id="header-top">
        <div class="box-header with-border">
          <h3 class="box-title">Header Top Area</h3>
        </div>
        <div class="box-body">
          <form role="form" method="POST" action="/admin/components/setactivetopheader" enctype="multipart/form-data" class="colors_form" novalidate="novalidate">
            {{csrf_field()}}
            <div class="container">
              <div class="row">
                <div class="form-group">
                  @foreach ($theme->components as $component)
                      @if($component->section == 'Header Top Area')
                        <div class="col-md-12">
                          <label style="border-color: #367fa9; border-radius: 3px; border:1px solid #367fa9;">
                            <img src="{{asset('img/component')}}{{'/'}}{{$theme->name}}{{'/'}}{{$component->image}}" class="img-responsive img-check {{$component->active ? 'check' : ''}}">
                            <input type="radio" name="component_id" id="{{$component->id}}" value="{{$component->id}}" class="hidden" autocomplete="off">
                          </label>
                        </div>
                      @endif
                    @endforeach
                  </div>
                  </div>	
                </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
          </form>
        </div>
      </div>
      <div class="box box-primary tab-pane" id="header-middle">
        <div class="box-header with-border">
          <h3 class="box-title">Header Middle Area</h3>
        </div>
        <div class="box-body">
            <form role="form" method="POST" action="/admin/components/setactivetopheader" enctype="multipart/form-data" class="colors_form" novalidate="novalidate">
              {{csrf_field()}}
              <div class="container">
                <div class="row">
                  <div class="form-group">
                    @foreach ($theme->components as $component)
                        @if($component->section == 'Header Middle Area')
                          <div class="col-md-12">
                            <label style="border-color: #367fa9; border-radius: 3px; border:1px solid #367fa9;">
                              <img src="{{asset('img/component')}}{{'/'}}{{$theme->name}}{{'/'}}{{$component->image}}" class="img-responsive img-check {{$component->active ? 'check' : ''}}">
                              <input type="radio" name="component_id" id="{{$component->id}}" value="{{$component->id}}" class="hidden" autocomplete="off">
                            </label>
                          </div>
                        @endif
                      @endforeach
                    </div>
                    </div>	
                  </div>
              <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
              </div>
            </form>
        </div>
      </div>
      <div class="box box-primary tab-pane" id="header-bottom">
        <div class="box-header with-border">
          <h3 class="box-title">Header Bottom Area</h3>
        </div>
        <div class="box-body">
          <form role="form" method="POST" action="/admin/components/setactivetopheader" enctype="multipart/form-data" class="colors_form" novalidate="novalidate">
            {{csrf_field()}}
            <div class="container">
              <div class="row">
                <div class="form-group">
                  @foreach ($theme->components as $component)
                      @if($component->section == 'Header Bottom Area')
                        <div class="col-md-12">
                          <label style="border-color: #367fa9; border-radius: 3px; border:1px solid #367fa9;">
                            <img src="{{asset('img/component')}}{{'/'}}{{$theme->name}}{{'/'}}{{$component->image}}" class="img-responsive img-check {{$component->active ? 'check' : ''}}">
                            <input type="radio" name="component_id" id="{{$component->id}}" value="{{$component->id}}" class="hidden" autocomplete="off">
                          </label>
                        </div>
                      @endif
                    @endforeach
                  </div>
                  </div>	
                </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
          </form>
        </div>
      </div>
      <div class="box box-primary tab-pane" id="mobile">
        <div class="box-header with-border">
          <h3 class="box-title">Mobile Area</h3>
        </div>
        <div class="box-body">
          Mobile Area Content
        </div>
      </div>
      <div class="box box-primary tab-pane" id="left-side">
        <div class="box-header with-border">
          <h3 class="box-title">Left Side Area</h3>
        </div>
        <div class="box-body">
            Left Side Area Content
        </div>
      </div>
      <div class="box box-primary tab-pane" id="body">
        <div class="box-header with-border">
          <h3 class="box-title">Content Area</h3>
        </div>
        <div class="box-body">
            Content Area Content
        </div>
      </div>
      <div class="box box-primary tab-pane" id="right-side">
        <div class="box-header with-border">
          <h3 class="box-title">Right Side Area</h3>
        </div>
        <div class="box-body">
            Right Side Area Content
        </div>
      </div>
      <div class="box box-primary tab-pane" id="footer-top">
        <div class="box-header with-border">
          <h3 class="box-title">Footer Top Area</h3>
        </div>
        <div class="box-body">
            Footer Top  Area Content
        </div>
      </div>
      <div class="box box-primary tab-pane" id="footer-middle">
        <div class="box-header with-border">
          <h3 class="box-title">Footer Middle Area</h3>
        </div>
        <div class="box-body">
            Footer Middle Area Content
        </div>
      </div>
      <div class="box box-primary tab-pane" id="footer-bottom">
          <div class="box-header with-border">
            <h3 class="box-title">Footer Bottom Area</h3>
          </div>
          <div class="box-body">
              Footer Bottom Area Content
          </div>
        </div>
    </div>
  </div>
@endsection