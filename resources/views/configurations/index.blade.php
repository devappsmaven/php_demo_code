@extends('layouts.admin')
@section('title','Themes')
@section('pagename','Themes')
@section('menuname','Themes')
@section('content')
@include('common.alerts') 
<div class="row">
    @foreach ($themes as $theme)
        @if($theme->active)
            <div class="col-xs-4">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <h3 class="profile-username text-center">Active: {{ $theme->name }}</h3>
                        <img src="{{asset('img/others')}}{{'/'}}{{$theme->name}}.png"  class="img-responsive" alt="">
                        <div class="row">
                            <div class="col-xs-4">
                            </div>
                            <div class="col-xs-4">
                                @can('themes.edit')
                                    <a href="{{route('themes.edit', $theme->id)}}" class="btn btn-info btn-block"><b>Customize</b></a>
                                @endcan
                            </div>
                            <div class="col-xs-4">
                                @can('themes.show')
                                    <a href="{{route('themes.show', $theme->id)}}" class="btn btn-info btn-block"><b>Theme Details</b></a>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
        <div class="col-xs-4">
                <div class="box box-primary">
                    <div class="box-body box-profile"> 
                        <h3 class="profile-username text-center">{{ $theme->name }}</h3>
                        <img src="{{asset('img/others')}}{{'/'}}{{$theme->name}}.png"  class="img-responsive" alt="">
                        <div class="row">
                            <div class="col-xs-4">
                                @can('themes.activate')
                                    <a class="btn btn-default btn-block activate_theme" data-toggle="modal" data-target="#activate-theme-width-modal" data-url="{!! URL::route('themes.activate', $theme->id) !!}" data-id="{{$theme->id}}" data-token="{{ csrf_token() }}"><b>Activate</b></a>
                                @endcan
                            </div>
                            <div class="col-xs-4">
                                <a href="http://vividcustoms.test/preview/{{ $theme->name }}/index" target="blank" class="btn btn-success btn-block"><b>Live Preview</b></a>
                            </div>
                            <div class="col-xs-4">
                                @can('themes.show')
                                    <a href="{{route('themes.show', $theme->id)}}" class="btn btn-info btn-block"><b>Theme Details</b></a>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</div>

<form method="POST" class="activate-theme-model">
    <div id="activate-theme-width-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="activate-theme-width-modalLabel">Activate Theme</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Activate This Theme?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light">Activate</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection