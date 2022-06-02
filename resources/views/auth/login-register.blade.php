@extends('layouts.app2')
@section('title','Login/Register')
@section('menuname','Login/Register')
@section('content')
<header class="header-area header-wrapper" id="header">
    @include( 'layouts.'.$theme->name.".header-top-bar-1")
    @include( 'layouts.'.$theme->name.".header-middle-area")
    @include( 'layouts.'.$theme->name.".header-bottom")
</header>
@if($theme->name == 'default')
    @include( 'layouts.'.$theme->name.".mobile-menu-area")
        page-content" class="mobile_bar">  
            <div class="container_fixed top">
                @include('common.alerts') 
                @include( 'layouts.'.$theme->name.".login-register")
            </div>
        </section>
    <br>
@elseif($theme->name == 'subas')
    @include( 'layouts.'.$theme->name.".mobile-menu-area")
    <section id="page-content" class="page-wrapper">
        <div class="blog-section mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        @include( 'layouts.'.$theme->name.".login-register")
                    </div>
                </div>
            </div>
        </div>
    </section>
@elseif($theme->name == 'eshopper')
    @include( 'layouts.'.$theme->name.".mobile-menu-area")
    <section>
        <div class="container">
            <div class="row">
                @include( 'layouts.'.$theme->name.".login-register")
            </div>
        </div>
    </section>
@endif

<footer id="footer" class="footer-area container_fixed">
    @include( 'layouts.'.$theme->name.".footer-top")
    @include( 'layouts.'.$theme->name.".footer-middle")
    @include( 'layouts.'.$theme->name.".footer-bottom")
</footer>

@endsection
