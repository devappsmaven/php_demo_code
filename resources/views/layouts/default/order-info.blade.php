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
                    <h5 class="mb-2">Order Details</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-3">
                    <div class="order-image-box">
                        <img src="{{$order['design_image']}}">
                    </div>
                </div>

                <div class="col-md-8 col-lg-9">
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <h6>Order ID:</h6>
                            <p>{{$order['order_number']}}</p>
                        </div>
                        <div class="col-6 col-lg-4">
                            <h6>SubTotal:</h6>
                            <p>${{$order['subtotal']}}</p>
                        </div>
                        <div class="col-6 col-lg-4">
                            <h6>Discount:</h6>
                            <p>${{$order['discount']}}</p>
                        </div>
                        <div class="col-6 col-lg-4">
                            <h6 class="mt-3">Shipping Cost:</h6>
                            <p>${{$order['shipping_cost']}}</p>
                        </div>
                        <div class="col-6 col-lg-4">
                            <h6 class="mt-3">Tax:</h6>
                            <p>${{$order['tax']}}</p>
                        </div>
                        <div class="col-6 col-lg-4">
                            <h6 class="mt-3">Order total:</h6>
                            <p>${{$order['total']}}</p>
                        </div>
                        <div class="col-6 col-lg-4">
                            <h6 class="mt-3">Order Date:</h6>
                            <p>{{$order['order_number']}}</p>
                        </div>
                        <div class="col-6 col-lg-4">
                            <h6 class="mt-3">Shipping Method:</h6>
                            <p>{{$order['shippingType']}}</p>
                        </div>
                        <div class="col-6 col-lg-4">
                            <h6 class="mt-3">Tracking Number:</h6>
                            <p>{{$order['tracking_number']}}</p>
                        </div>
                        <div class="col-6 col-lg-4">
                            <h6 class="mt-3">Carrier:</h6>
                            <p>{{$order['carrier']}}</p>
                        </div>
                        <div class="col-6 col-lg-4">
                            <h6 class="mt-3">Service:</h6>
                            <p>{{$order['service']}}</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <h5>Billing Details</h5>
                            <h6 class="mt-3">Address</h6>
                            @if(!empty($order_info->billing_zip))
                                <p>{{ $order_info->billing_apartment.' '.$order_info->billing_street.', '.$order_info->billing_city.' '.$order_info->billing_state.', '.$order_info->billing_country.' '.$order_info->billing_zip }}</p>
                            @else
                                <p></p>
                            @endif
                            <div class="row ">
                                <div class="col-lg-12 ">
                                    <h6>Email</h6>
                                    <p>{{ $user->email }}</p>
                                </div>
                                <div class="col-lg-12 ">
                                    <h6>Phone</h6>
                                    <p>{{ $user->phone }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <h5>Shipping Details</h5>
                            <h6 class="mt-3">Address</h6>
                            @if(!empty($order_info->shipping_zip))
                                <p>{{ $order_info->shipping_apartment.' '.$order_info->shipping_street.', '.$order_info->shipping_city.' '.$order_info->shipping_state.', '.$order_info->shipping_country.' '.$order_info->shipping_zip }}</p>
                            @else
                                <p></p>
                            @endif
                            <div class="row">
                                <div class="col-lg-12 ">
                                    <h6>Email</h6>
                                    <p>{{ $user->email }}</p>
                                </div>
                                <div class="col-lg-12 ">
                                    <h6>Phone</h6>
                                    <p>{{ $user->phone }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="box-shad">
                        <h5>{{ $product->name }}</h5>
                        <div class="flex-side">
                            <div>
                                <h6>Brand:</h6>
                                <p>{{ $product->brand }}</p>
                            </div>
                            <div>
                                <h6>Style#:</h6>
                                <p>{{ $product->stylenumber }}</p>
                            </div>
                            <div>
                                <h6>Color:</h6>
                                <p>{{ $product->color->name }}</p>
                            </div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="box-shad">
                        <div class="flex-side">
                            @forelse($sizes as $size)
                                <div class="size-box">
                                    <h4>{{ $size['name'] }}</h4>
                                    <p>{{ $size['count'] }}</p>
                                </div>
                            @empty
                                <div class="size-box">
                                    <h4>No Sizes available for this Product</h4>
                                </div>
                            @endforelse
                        </div>
                    </div>
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