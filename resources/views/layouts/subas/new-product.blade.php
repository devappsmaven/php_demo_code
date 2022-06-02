<div class="row">
        <div class="col-md-12">
            <div class="section-title text-left mb-40">
                <h2 class="uppercase">Coming Soon</h2>
            </div>
        </div>
    </div>
@if($newproduct)
    <div class="up-comming-product-section mb-80">
        <div class="container">
            <div class="row">
                <!-- up-comming-pro -->
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="up-comming-pro gray-bg clearfix">
                        <div class="up-comming-pro-img f-left">
                            <a href="#">
                                <img src="{{asset('img/product')}}{{'/'}}{{$newproduct->image}}" alt="">
                            </a>
                        </div>
                        <div class="up-comming-pro-info f-left">
                            <h3><a href="{{route('single-product', $newproduct->id)}}">{{$newproduct->name}}</a></h3>
                            <p>{!!$newproduct->description!!}</p>
                            <div class="up-comming-time">
                                <div data-countdown="2017/02/02"><span class="cdown days"><span class="time-count">0</span> <p>Days</p></span> <span class="cdown hour"><span class="time-count">0</span> <p>Hour</p></span> <span class="cdown minutes"><span class="time-count">00</span> <p>Mint</p></span> <span class="cdown second"> <span><span class="time-count">00</span> <p>Sec</p></span></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm col-xs-12">
                    <div class="banner-item banner-1">
                        <div class="banner-img">
                            <a href="{{route('single-product', $newproduct->id)}}"><img src="img/banner/1.jpg" alt=""></a>
                        </div>
                        <div class="banner-info">
                            <h3><a href="{{route('single-product', $newproduct->id)}}">{{$newproduct->name}}(Details)</a></h3>
                            <ul class="banner-featured-list">
                                <li>
                                    <i class="zmdi zmdi-check"></i><span>{{$newproduct->brand}}</span>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-check"></i><span>{{$newproduct->fabric}}</span>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-check"></i><span>{{$newproduct->stylenumber}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif