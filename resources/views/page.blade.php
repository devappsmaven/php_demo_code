@extends('layouts.app2')
@section('title',"$page->title")
@section('content')

@if($page->headercomponents->count() > 0)
<header class="header-area header-wrapper" id="header">
    @foreach ($page->headercomponents as $component)
        @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
    @endforeach
</header>
@endif
<div id="app">
@if($theme->name == 'default')
    @if($page->mobileareacomponents->count() > 0)
        @foreach ($page->mobileareacomponents as $component)
            @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
        @endforeach
    @endif
    <section id="page-content" class="mobile_bar">
          <div class="logo_responsive">
            <a class="navbar-brand" href="{{asset('index')}}"> <img src="{{asset('images/logo.png')}}" alt="" title=""/></a>
         </div>
        @if($page->slug === 'products' || $page->slug === 'single-product')
            <div class="container_fixed top">
                @include('common.alerts')
                @if($page->leftsidecomponents->count() > 0 || $page->bodycomponents->count() > 0 || $page->rightsidecomponents->count() > 0)
                    @foreach ($page->leftsidecomponents as $component)
                        @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
                    @endforeach
                    @foreach ($page->bodycomponents as $component)
                        @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
                    @endforeach
                    @foreach ($page->rightsidecomponents as $component)
                        @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
                    @endforeach
                @endif
            </div>
        @else
            @include('common.alerts')
            @if($page->leftsidecomponents->count() > 0 || $page->bodycomponents->count() > 0 || $page->rightsidecomponents->count() > 0)
                @foreach ($page->leftsidecomponents as $component)
                    @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
                @endforeach
                @foreach ($page->bodycomponents as $component)
                    @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
                @endforeach
                @foreach ($page->rightsidecomponents as $component)
                    @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
                @endforeach
            @endif
        @endif
    </section>
@elseif($theme->name == 'subas')
    @if($page->mobileareacomponents->count() > 0)
        @foreach ($page->mobileareacomponents as $component)
            @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
        @endforeach
    @endif
    <section id="page-content" class="page-wrapper">
        <div class="blog-section mb-50">
            <div class="container">
                <div class="row">
                    @include('common.alerts')
                    @if($page->leftsidecomponents->count() > 0 && $page->bodycomponents->count() > 0 && $page->rightsidecomponents->count() > 0)
                        <div class="col-md-3 col-xs-12">
                            @foreach ($page->leftsidecomponents as $component)
                                @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
                            @endforeach
                        </div>
                        <div class="col-md-6 col-xs-12">
                            @foreach ($page->bodycomponents as $component)

                                @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
                            @endforeach
                        </div>
                        <div class="col-md-3 col-xs-12">
                            @foreach ($page->rightsidecomponents as $component)
                                @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
                            @endforeach
                        </div>
                    @elseif($page->leftsidecomponents->count() > 0 && $page->bodycomponents->count() > 0 && $page->rightsidecomponents->count() == 0)
                        <div class="col-md-3 col-xs-12">
                            @foreach ($page->leftsidecomponents as $component)
                                @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
                            @endforeach
                        </div>
                        <div class="col-md-9 col-xs-12">
                            @foreach ($page->bodycomponents as $component)
                                @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
                            @endforeach
                        </div>
                    @elseif($page->leftsidecomponents->count() == 0 && $page->bodycomponents->count() > 0 && $page->rightsidecomponents->count() > 0)
                        <div class="col-md-9 col-xs-12">
                            @foreach ($page->bodycomponents as $component)
                                @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
                            @endforeach
                        </div>
                        <div class="col-md-3 col-xs-12">
                            @foreach ($page->rightsidecomponents as $component)
                                @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
                            @endforeach
                        </div>
                    @elseif($page->leftsidecomponents->count() == 0 && $page->bodycomponents->count() > 0 && $page->rightsidecomponents->count() == 0)
                        <div class="col-md-12 col-xs-12">
                            @foreach ($page->bodycomponents as $component)
                                @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
                            @endforeach
                        </div>
                    @elseif($page->leftsidecomponents->count() > 0 && $page->bodycomponents->count() == 0 && $page->rightsidecomponents->count() == 0)
                       <div class="col-md-3 col-xs-12">
                            @foreach ($page->leftsidecomponents as $component)
                                @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
                            @endforeach
                        </div>
                    @elseif($page->leftsidecomponents->count() == 0 && $page->bodycomponents->count() == 0 && $page->rightsidecomponents->count() > 0)
                        <div class="col-md-3 col-xs-12">
                            @foreach ($page->rightsidecomponents as $component)
                                @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
                            @endforeach
                        </div>
                    @else
                        <div class="col-md-12 col-xs-12">

                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@elseif($theme->name == 'eshopper')
    @if($page->mobileareacomponents->count() > 0)
    @foreach ($page->mobileareacomponents as $component)
        @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
    @endforeach
    @endif
    <section>
        <div class="container">
            <div class="row">
            @include('common.alerts')
                @if($page->leftsidecomponents->count() > 0 && $page->bodycomponents->count() > 0 && $page->rightsidecomponents->count() > 0)
                    <div class="col-md-3 col-xs-12">
                        <div class="left-sidebar">
                            @foreach ($page->leftsidecomponents as $component)
                                @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        @foreach ($page->bodycomponents as $component)
                            @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
                        @endforeach
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="left-sidebar">
                            @foreach ($page->rightsidecomponents as $component)
                                @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
                            @endforeach
                        </div>
                    </div>
                @elseif($page->leftsidecomponents->count() > 0 && $page->bodycomponents->count() > 0 && $page->rightsidecomponents->count() == 0)
                    <div class="col-md-3 col-xs-12">
                        <div class="left-sidebar">
                            @foreach ($page->leftsidecomponents as $component)
                                @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-9 col-xs-12">
                        @foreach ($page->bodycomponents as $component)
                            @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
                        @endforeach
                    </div>
                @elseif($page->leftsidecomponents->count() == 0 && $page->bodycomponents->count() > 0 && $page->rightsidecomponents->count() > 0)
                    <div class="col-md-9 col-xs-12">
                        @foreach ($page->bodycomponents as $component)
                            @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
                        @endforeach
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="left-sidebar">
                            @foreach ($page->rightsidecomponents as $component)
                                @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
                            @endforeach
                        </div>
                    </div>
                @elseif($page->leftsidecomponents->count() == 0 && $page->bodycomponents->count() > 0 && $page->rightsidecomponents->count() == 0)
                    <div class="col-md-12 col-xs-12">
                        @foreach ($page->bodycomponents as $component)
                            @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
                        @endforeach
                    </div>
                @elseif($page->leftsidecomponents->count() > 0 && $page->bodycomponents->count() == 0 && $page->rightsidecomponents->count() == 0)
                    <div class="col-md-3 col-xs-12">
                        <div class="left-sidebar">
                            @foreach ($page->leftsidecomponents as $component)
                                @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
                            @endforeach
                        </div>
                    </div>
                @elseif($page->leftsidecomponents->count() == 0 && $page->bodycomponents->count() == 0 && $page->rightsidecomponents->count() > 0)
                    <div class="col-md-3 col-xs-12">
                        <div class="left-sidebar">
                            @foreach ($page->rightsidecomponents as $component)
                                @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endif

</div>
@if($page->footercomponents->count() > 0)
    <footer id="footer" class="footer-area container_fixed">
        @foreach ($page->footercomponents as $component)
            @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
        @endforeach
    </footer>
@endif
@endsection
