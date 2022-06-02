@extends('layouts.app2')
@section('title',"$page->title")
@section('content')

@if($page->headercomponents->count() > 0)
    <header class="header-area header-wrapper shoppingcart_header" id="header">
        @foreach ($page->headercomponents as $component)
            @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
        @endforeach
    </header>
@endif
<section class="sec-css">
	<div class="container">
	    <div class="row">
	        <div class="col-lg-4 mb-3">
	            <div class="color-box-one">
	                <a href="{{url('recent-orders')}}">
	                    <div class="d-flex">
	                        <img src="{{asset('images/dashboard.svg')}}"><span class="name-color-box">Dashboard</span>
	                    </div>
	                </a>
	            </div>
	        </div>
	        <div class="col-lg-4 mb-3">
	            <div class="color-box-two">
	                <a href="{{url('all-designs')}}">
	                    <div class="d-flex">
	                        <img src="{{asset('images/my_design.svg')}}"><span class="name-color-box">My Designs</span>
	                    </div>
	                </a>
	            </div>
	        </div>
	        <div class="col-lg-4 mb-3">
	            <div class="color-box-three">
	                <a href="{{url('all-orders')}}">
	                    <div class="d-flex">
	                        <img src="{{asset('images/my_order.svg')}}"><span class="name-color-box">My Orders</span>
	                    </div>
	                </a>
	            </div>
	        </div>
	        <div class="col-lg-4 mb-3">
	            <div class="color-box-four">
	                <a href="{{url('my-account')}}">
	                    <div class="d-flex">
	                        <img src="{{asset('images/acc_details.svg')}}"><span class="name-color-box">Account details</span>
	                    </div>
	                </a>
	            </div>
	        </div>
	    </div>

	</div>
</section>

@if($page->footercomponents->count() > 0)
    <footer id="footer" class="footer-area container_fixed">
        @foreach ($page->footercomponents as $component)
            @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
        @endforeach
    </footer>
@endif