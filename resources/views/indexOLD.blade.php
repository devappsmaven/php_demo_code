@extends('layouts.app')
@section('title','Custom T-shirt Printing - Embroidery - Houston')
@section('menuname','Index')
@section('content')
<div id="mainbannerdiv" class="visible-lg visible-md visible-sm" style=" background-image: url({{asset('img/banner/banner-bg.jpg')}}); height: 626px;  background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <div class="bannertopdiv">
        <div class="bannerimgdiv">
            <img src="{{asset('img/banner/banner-bg2.png')}}" class="img-responsive bannerimg" style="margin-left: auto; margin-right: auto; ">
        </div>   
        <div class="bannertextdiv">
            <div class="row" style="display: block;">
                <div class="col-xs-12" align="center">
                    <div class="">
                        <h4 class="opacity4">Create your own custom t-shirts with our<br>easy to use Design Studio<h4>
                         <a href="{{asset('designstudio')}}" class="button extra-small button-black" tabindex="0" style="cursor: pointer; background-color: #e62a9ad4 ;">
                            <span style="font-weight: bold;font-size: 25px; ">Start Designing</span>
                        </a>
                    </div>
                </div>                    
            </div>
        </div>
    </div>
 </div>
<div class="wrapper visible-xs">
    <center>
        <img src="{{asset('/img/banner/banner-bg-xs5.png')}}" class="img-responsive visible-xs">
        <a href="{{asset('designstudio')}}" class="button extra-small button-black" tabindex="0" style="cursor: pointer; background-color: #e62a9ad4 ;">
            <span style="font-size: 20px; " class="visible-xs">Start Designing</span>
        </a>
    </center>
</div>
 <div class="backgroundship mb-80" style="background-image: url({{asset('img/banner/banner-bg-wood.png')}}); height: 125px; background-position: center center;">
  <div  class="opacity2">
        <div class="container container-ship">
            <div class="content">                    
                <div class="row text-center" style="">                      
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 shippingtype opacity3 column1" style="height: 125px; ">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-4" align="right" style="-ms-transform: translateY(100%); -webkit-transform: translateY(100%); -moz-transform: translateY(100%); -o-transform: translateY(100%); transform: translateY(100%);">
                
                
                                <img src="{{asset('img/others/standard-shipping.png')}}" style="height: 46px; width: auto;">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-8 column-text" align="left"  style="">
                                <h5 style="color: #fff; font-family: 'Arial Black', sans-serif; font-size: 19px;">FREE SHIPPING</h5>
                                <h6 style="color: #fff; ">Guaranteed by:</h6>
                                <h6 style="color: #ffec6a; font-size: 16px;" id="freeshippingindex" ></h6>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 shippingtype opacity3 column2" style="height: 125px;">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-4" align="right"  style="-ms-transform: translateY(100%); -webkit-transform: translateY(100%); -moz-transform: translateY(100%); -o-transform: translateY(100%); transform: translateY(100%);">
                                <img src="{{asset('img/others/expedited-shipping2.png')}}"  style="height: 46px; width: auto;">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-8 column-text" align="left"  style="">
                                <h5 style="color: #fff; font-family: 'Arial Black', sans-serif;  font-size: 19px;">RUSH DELIVERY</h5>
                                <h6 style="color: #fff;">Guaranteed by:</h6>
                                <h6 style="color: #ffec6a; font-size: 16px;" id="rushdelivery"></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 opacity3 column3" style="height: 125px;">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-4" align="right"  style="-ms-transform: translateY(100%); -webkit-transform: translateY(100%); -moz-transform: translateY(100%); -o-transform: translateY(100%); transform: translateY(100%);">
                                <img src="{{asset('img/others/pick-up.png')}}" style="height: 46px; width: auto;">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-8 column-text" align="left"  style="">
                                <h5 style="color: #fff; font-family: 'Arial Black', sans-serif;  font-size: 19px;">SAME DAY AVAILABILITY</h5>
                                <h6 style="color: #fff;">Available for pick up<br>Houston,TX</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
