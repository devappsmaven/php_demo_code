@extends('layouts.app2')
@section('title','Password/Email')
@section('menuname','Password/Email')
@section('content')
<header class="header-area header-wrapper" id="header">
    @include( 'layouts.'.$theme->name.".header-top-bar-1")
    @include( 'layouts.'.$theme->name.".header-middle-area")
    @include( 'layouts.'.$theme->name.".header-bottom")
</header>
@if($theme->name == 'default')
    @include( 'layouts.'.$theme->name.".mobile-menu-area")
    <section id="page-content" class="mobile_bar">
      <div class="container_fixed top">
        @include('common.alerts')
        @include( 'layouts.'.$theme->name.".password-email")
      </div>
    </section>
    <br>
@elseif($theme->name == 'subas')
    @include( 'layouts.'.$theme->name.".mobile-menu-area")
    <section id="page-content" class="page-wrapper">
        <div class="blog-section mb-50">
            <div class="container">
                <div class="row">
                @include('common.alerts')
                    @include( 'layouts.'.$theme->name.".password-email")
                </div>
            </div>
        </div>
    </section>
    <br>
@elseif($theme->name == 'eshopper')
    @include( 'layouts.'.$theme->name.".mobile-menu-area")
    <section>
        <div class="container">
            <div class="row">
            @include('common.alerts')
                <div class="col-md-3 col-xs-12 offset-8">

                </div>
                <div class="col-md-6 col-xs-12">
                    @include( 'layouts.'.$theme->name.".password-email")
                </div>
                <div class="col-md-3 col-xs-12">

                </div>
            </div>
        </div>
    </section>
    <br>
@endif

<footer id="footer" class="footer-area container_fixed">
    @include( 'layouts.'.$theme->name.".footer-top")
    @include( 'layouts.'.$theme->name.".footer-middle")
    @include( 'layouts.'.$theme->name.".footer-bottom")
</footer>

@endsection
