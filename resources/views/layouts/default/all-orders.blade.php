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
        <div class="seller-container account-details">
            <div class="row">
                <div class="col-12">
                    <h5 class="mb-2">My Orders</h5>
                </div>
            </div>
            <div class="row">
                @forelse($orders as $order)
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
                        <a href="{{url('view-orders/'.$order['order_number'])}}">
                            <div class="product_printing">
                                <img src="{{$order['design_image']}}" alt="" title="" class="img-fluid">
                                <div class="printing_heading printing-p">
                                    <h4>{{$order['designs'][0]['displayname']}}</h4>
                                    <p>Order Number : {{$order['order_number']}}</p>
                                </div>
                                <div class="printing_price">
                                    <span class="pink_color">${{$order['total']}}</span>
                                    <span class="price-quantity">Quantity {{$order['items']}}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <b> No Orders Yet</b>
                @endforelse
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