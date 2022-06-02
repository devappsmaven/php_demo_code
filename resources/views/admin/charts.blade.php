@extends('layouts.admin')
@section('title','Chart')
@section('pagename','Chart')
@section('menuname','Chart')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Chart Demo</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                                
                            
                            {!! $chartbar->html() !!}
                            {!! $chartdonut->html() !!}
                            {!! $chartarea->html() !!}
                            {!! $chartgeo->html() !!}
                        </div>
                        <div class="col-sm-6">
                            {!! $chartpie->html() !!}   
                            {!! $chartline->html() !!}     
                            {!! $chartareaspline->html() !!}
                            {!! $chartpercentage->html() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Charts::scripts() !!}

{!! $chartbar->script() !!}
{!! $chartpie->script() !!}
{!! $chartdonut->script() !!}
{!! $chartline->script() !!}
{!! $chartarea->script() !!}
{!! $chartareaspline->script() !!}
{!! $chartgeo->script() !!}
{!! $chartpercentage->script() !!}
  
@endsection

