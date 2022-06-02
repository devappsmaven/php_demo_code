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
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h3 class="heading-product"> Custom Apparel- Free Shipping &amp; No Minimums </h3>
            <ul class="nav nav-tabs product-details-tab" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab"
                        aria-controls="all" aria-selected="true">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="published-tab" data-toggle="tab" href="#published" role="tab"
                        aria-controls="published" aria-selected="false">Published</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="saved-tab" data-toggle="tab" href="#saved" role="tab"
                        aria-controls="saved" aria-selected="false">Saved</a>
                </li>
            </ul>
            <div class="tab-content mt-5" id="myTabContent">
                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <div class="row">
                        @forelse($all_designs as $design)
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                <div class="product_printing mt-3">
                                    <?php
                                    if (count($design['designsides']) > 0){
                                        $image = $design['designsides'][0]['design_product_image'];
                                    }
                                    else{
                                        $image = 'http://3.20.166.91/vivid_test/public/images/no-image-available.jpg';
                                    }
                                    ?>
                                    <img src="{{$image}}" alt="" title="" class="img-fluid">
                                    <div class="printing_heading printing-p">
                                        <h4> {{ $design['displayname'] }} </h4>
                                        <p>Brand: {{ !empty($design['products']['brand'])?$design['products']['brand']:'' }}</p>
                                        <p>Sizes: {{ !empty($design['size']['name'])?$design['size']['name']:'' }}</p>
                                    </div>
                                    <div class="printing_price">
                                        <span class="pink_color">$ {{$design['price_per_shirt']}}</span>
                                        <span class="price-quantity">Quantity {{ !empty($design['products']['min_quantity'])?$design['products']['min_quantity']:'' }}</span>
                                    </div>

                                </div>
                            </div>
                        @empty
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                <b>Empty Designs</b>
                            </div>
                        @endforelse
                    </div>
                </div>
                <div class="tab-pane fade" id="published" role="tabpanel" aria-labelledby="published-tab">
                    <div class="row">
                        @forelse($publish_designs as $design)
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                <div class="product_printing mt-3">
                                    <?php
                                    if (count($design['designsides']) > 0){
                                        $image = $design['designsides'][0]['design_product_image'];
                                    }
                                    else{
                                        $image = 'http://3.20.166.91/vivid_test/public/images/no-image-available.jpg';
                                    }
                                    ?>
                                    <img src="{{$image}}" alt="" title="" class="img-fluid">
                                    <div class="printing_heading printing-p">
                                        <h4> {{ $design['displayname'] }} </h4>
                                        <p>Brand: {{ !empty($design['products']['brand'])?$design['products']['brand']:'' }}</p>
                                        <p>Sizes: {{ !empty($design['size']['name'])?$design['size']['name']:'' }}</p>
                                    </div>
                                    <div class="printing_price">
                                        <span class="pink_color">$ {{$design['price_per_shirt']}}</span>
                                        <span class="price-quantity">Quantity {{ !empty($design['products']['min_quantity'])?$design['products']['min_quantity']:'' }}</span>
                                    </div>

                                </div>
                            </div>
                        @empty
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                <b>Empty Designs</b>
                            </div>
                        @endforelse
                    </div>
                </div>
                <div class="tab-pane fade" id="saved" role="tabpanel" aria-labelledby="saved-tab">
                    <div class="row">
                        @forelse($saved_designs as $design)
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                <div class="product_printing mt-3">
                                    <?php
                                    if (count($design['designsides']) > 0){
                                        $image = $design['designsides'][0]['design_product_image'];
                                    }
                                    else{
                                        $image = 'http://3.20.166.91/vivid_test/public/images/no-image-available.jpg';
                                    }
                                    ?>
                                    <img src="{{$image}}" alt="" title="" class="img-fluid">
                                    <div class="printing_heading printing-p">
                                        <h4> {{ $design['displayname'] }} </h4>
                                        <p>Brand: {{ !empty($design['products']['brand'])?$design['products']['brand']:'' }}</p>
                                        <p>Sizes: {{ !empty($design['size']['name'])?$design['size']['name']:'' }}</p>
                                    </div>
                                    <div class="printing_price">
                                        <span class="pink_color">$ {{$design['price_per_shirt']}}</span>
                                        <span class="price-quantity">Quantity {{ !empty($design['products']['min_quantity'])?$design['products']['min_quantity']:'' }}</span>
                                    </div>

                                </div>
                            </div>
                        @empty
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                <b>Empty Designs</b>
                            </div>
                        @endforelse
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