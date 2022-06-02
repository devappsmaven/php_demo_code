@extends('layouts.app2')
@extends('layouts.default.header-top-bar-1')
@section('title','Dashboard - Store Designer')
@section('content')

<section class="sec-css">
	<div class="container">
	    <div class="row">
	        <div class="col-lg-4 mb-3">
	            <div class="color-box-one">
	                <a href="#">
	                    <div class="d-flex">
	                        <img src="{{asset('images/dashboard.svg')}}"><span class="name-color-box">Dashboard</span>
	                    </div>
	                </a>
	            </div>
	        </div>
	        <div class="col-lg-4 mb-3">
	            <div class="color-box-two">
	                <a href="#">
	                    <div class="d-flex">
	                        <img src="{{asset('images/my_design.svg')}}"><span class="name-color-box">My Designs</span>
	                    </div>
	                </a>
	            </div>
	        </div>
	        <div class="col-lg-4 mb-3">
	            <div class="color-box-three">
	                <a href="#">
	                    <div class="d-flex">
	                        <img src="{{asset('images/my_order.svg')}}"><span class="name-color-box">My Orders</span>
	                    </div>
	                </a>
	            </div>
	        </div>
	        <div class="col-lg-4 mb-3">
	            <div class="color-box-four">
	                <a href="#">
	                    <div class="d-flex">
	                        <img src="{{asset('images/acc_details.svg')}}"><span class="name-color-box">Account details</span>
	                    </div>
	                </a>
	            </div>
	        </div>
	    </div>

	</div>
</section>

@endsection