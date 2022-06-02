@extends('layouts.admin')
@section('title','Theme Details')
@section('pagename','Theme Details')
@section('menuname','Theme Details')
@section('content')
@include('common.alerts') 

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-1">
            </div>
            <div class="col-xs-10">
                <center>
                    <iframe src="http://vividcustoms.test/preview/{{ $theme->name }}/index" style="position: relative;z-index: 1;width: 1920px;   height: 1200px;-webkit-transform-origin: 0 0;-moz-transform-origin: 0 0;transform-origin: 0 0;-webkit-transform:  scale(0.7, 0.7);-moz-transform:  scale(0.7, 0.7); transform:  scale(0.7, 0.7); overflow: hidden;">
                    </iframe>
                </center>
            </div>
            <div class="col-xs-1">
            </div>
        </div>
    </div>
@endsection