@extends('layouts.admin')
@section('title','Design')
@section('pagename','Design')
@section('menuname','Design')
@section('content')
@guest

@endguest
@include('common.alerts')   
<div class="row">
    <div class="col-md-3">
       <div class="box box-primary">
        <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="{{asset('designs/designstudio')}}{{'/'}}{{$design->category->name}}{{'/'}}{{$design->subcategory->name}}{{'/'}}{{$design->title}}_front.png" alt="User profile picture">
          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>Title</b> <a class="pull-right">{{$design->title}}</a>
            </li>
            <li class="list-group-item">
              <b>Category</b> <a class="pull-right">{{$design->category->name}}</a>
            </li>
            <li class="list-group-item">
              <b>SubCategory</b> <a class="pull-right">{{$design->subcategory->name}}</a>
            </li>
            <li class="list-group-item">
                <b>Editable</b> 
                <a class="pull-right">
                    @if($design->editable)
                    <div class="form-group">
                        <label>
                        <input type="checkbox" class="minimal" disabled checked>
                        </label>
                    </div>
                    @else
                    <div class="form-group">
                        <label>
                        <input type="checkbox" class="minimal" disabled>
                        </label>
                    </div>
                    @endif
                </a>
            </li>
            <li class="list-group-item">
                <b>Selling Price</b> <a class="pull-right">${{$design->selling_price}}</a>
            </li>
            <li class="list-group-item">
                    <b>Product</b> <a href="{{route('childproducts.show', $design->product->parent->id)}}" class="pull-right">{{$design->product->name}}</a>
                </li>
            <li class="list-group-item">
                <b>Created At</b> <a class="pull-right">{{$design->created_at->format('m/d/Y h:m:i')}}</a>
            </li>
          </ul>
          <a href="#" class="btn btn-primary btn-block" style="display:none"><b>Follow</b></a>
        </div>
      </div>
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">More Info</h3>
        </div>
        <div class="box-body">
          <strong><i class="fa fa-book margin-r-5"></i>  Author</strong>
          <p class="text-muted">
           {{$design->user->firstname}} {{$design->user->lastname}}
           </p>
           <p class="text-muted">
            {{ $design->user->email }}
           </p>
          <hr>
          <strong><i class="fa fa-map-marker margin-r-5"></i> Type</strong>
          <p class="text-muted">{{ $design->type }}</p>
          <hr>
          <strong><i class="fa fa-pencil margin-r-5"></i> Status</strong>
          <p>
            @if($design->status == 'Created')
                <span class="label label-success">{{$design->status}}</span>
            @endif
            @if($design->status == 'Waiting Approval')
                <span class="label label-warning">{{$design->status}}</span>
            @endif
            @if($design->status == 'Approved')
                <span class="label label-info">{{$design->status}}</span>
            @endif
            @if($design->status == 'Rejected')
                <span class="label label-danger">{{$design->status}}</span>
            @endif
          </p>
          <hr>
          <strong><i class="fa fa-file-text-o margin-r-5"></i> Comment</strong>
          <p>{{ $design->comment }}</p>
        </div>
      </div>
    </div>
    <div class="col-md-9">
        <!--<div class="row margin-bottom">
            <div class="col-sm-3">
                <img class="img-responsive" src="{{asset('designs/designstudio')}}{{'/'}}{{$design->category->name}}{{'/'}}{{$design->subcategory->name}}{{'/'}}{{$design->title}}_front.png" alt="Photo">
            </div>
            <div class="col-sm-3">
                <img class="img-responsive" src="{{asset('designs/designstudio')}}{{'/'}}{{$design->category->name}}{{'/'}}{{$design->subcategory->name}}{{'/'}}{{$design->title}}_right.png" alt="Photo">
            </div>
            <div class="col-sm-3">
                <img class="img-responsive" src="{{asset('designs/designstudio')}}{{'/'}}{{$design->category->name}}{{'/'}}{{$design->subcategory->name}}{{'/'}}{{$design->title}}_back.png" alt="Photo">
            </div>
            <div class="col-sm-3">
                <img class="img-responsive" src="{{asset('designs/designstudio')}}{{'/'}}{{$design->category->name}}{{'/'}}{{$design->subcategory->name}}{{'/'}}{{$design->title}}_left.png" alt="Photo">
            </div>
        </div>-->
        <center>
            <div class="table-content table-responsive" style="margin-bottom: 30px;     overflow-x: hidden;">
                <div class="row">
                    @if(count($design->designsides) == 1)
                        <div class="col-md-3"></div>
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                              <a href="http://{{$design->designsides[0]->design_product_image}}" target="_blank">
                                <img class="img-responsive" src="http://{{$design->designsides[0]->design_product_image}}">
                              </a>
                              <br>
                              <a class="btn btn-link"  href="http://{{$design->designsides[0]->svg}}" style="display: inline-block; font-size: 10px; padding:0;" download>
                                  {{$design->title}}_{{$design->designsides[0]->side}}.svg
                              </a>
                            </div>
                        <div class="col-md-4"></div>
                    @elseif(count($design->designsides) == 2)
                        <div class="col-md-2"></div>
                            @foreach($design->designsides as $side)
                                <div class="col-md-4">
                                  <a href="http://{{$side->design_product_image}}" target="_blank">
                                    <img class="img-thumbnail" src="http://{{$side->design_product_image}}">
                                  </a>
                                  <br>
                                  <a class="btn btn-link"  href="http://{{$side->svg}}" style="display: inline-block; font-size: 10px; padding:0;" download>
                                      {{$design->title}}_{{$side->side}}.svg
                                  </a>
                                </div>
                            @endforeach
                        <div class="col-md-2"></div>
                    @elseif(count($design->designsides) == 3)
                        @foreach($design->designsides as $side)
                            <div class="col-md-4">
                              <a href="http://{{$side->design_product_image}}" target="_blank">
                                <img class="img-thumbnail" src="http://{{$side->design_product_image}}">
                              </a>
                              <br>
                              <a class="btn btn-link"  href="http://{{$side->svg}}" style="display: inline-block; font-size: 10px; padding:0;" download>
                                  {{$design->title}}_{{$side->side}}.svg
                              </a>
                            </div>
                        @endforeach
                    @else
                        @foreach($design->designsides as $side)
                            <div class="col-md-3">
                              <a href="http://{{$side->design_product_image}}" target="_blank">
                                <img class="img-thumbnail" src="http://{{$side->design_product_image}}">
                              </a>
                              <br>
                              <a class="btn btn-link"  href="http://{{$side->svg}}" style="display: inline-block; font-size: 10px; padding:0;" download>
                                  {{$design->title}}_{{$side->side}}.svg
                              </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </center>
        <!--<div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
                <li class=""><a href="#left_tab" data-toggle="tab" aria-expanded="false">Left</a></li>
                <li class=""><a href="#back_tab" data-toggle="tab" aria-expanded="false">Back</a></li>
                <li class=""><a href="#right_tab" data-toggle="tab" aria-expanded="false">Right</a></li>
                <li class="active"><a href="#front_tab" data-toggle="tab" aria-expanded="true">Front</a></li>
                <li class="pull-left header"><i class="fa fa-th"></i> Sides Information</li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="front_tab">
                    <ul class="products-list product-list-in-box">
                        <li class="item">
                            <div class="product-img">
                            <img src="http://vividcustoms.test/img/clipart/Full-Color/Cute-Monsters/cute-monsters003.png" alt="Product Image" style="width:50px; height:auto;">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Full-Color / Cute-Monsters
                                    <span class="label label-info pull-right">Clipart</span>
                                </a>
                                <span class="product-description">
                                        cute-monsters004
                                </span>
                                <span class="product-description">
                                    Full Color <div id="child_color_Gold" class="block" title="Gold" product_id="51" style="border-radius: 50%; background-image: linear-gradient(to right, red,orange,yellow,green,blue,indigo,violet);  width: 30px; height: 30px; border: 1px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px;float:left"></div>
                                </span>
                            </div>
                        </li>
                        <li class="item">
                            <div class="product-img">
                            <img src="http://vividcustoms.test/img/clipart/Full-Color/Cute-Monsters/cute-monsters002.png" alt="Product Image" style="width:50px; height:auto;">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Full-Color / Cute-Monsters
                                    <span class="label label-success pull-right">Uploaded</span>
                                </a>
                                <span class="product-description">
                                        cute-monsters002
                                </span>
                                <span class="product-description">
                                    <div id="child_color_Gold" class="block" title="Gold" product_id="51" style="border-radius: 50%; background-color: rgb(255, 255, 0); width: 30px; height: 30px; border: 1px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px;float:left"></div>
                                    <div id="child_color_Gold" class="block" title="Gold" product_id="51" style="border-radius: 50%; background-color: rgb(0, 0, 255); width: 30px; height: 30px; border: 1px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px;float:left"></div>
                                    <div id="child_color_Gold" class="block" title="Gold" product_id="51" style="border-radius: 50%; background-color: rgb(255, 0, 0); width: 30px; height: 30px; border: 1px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px;float:left"></div>
                                </span>
                            </div>
                        </li>
                        <li class="item">
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Text
                                    <span class="label label-default pull-right">Straigh Text</span>
                                </a>
                                <span class="product-description">
                                    Color: <div id="child_color_Gold" class="block" title="Gold" product_id="51" style="border-radius: 50%; background-color: rgb(255, 0, 255); width: 30px; height: 30px; border: 1px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px;float:left"></div>
                                </span>
                                <span class="product-description">
                                    Stroke Color:<div id="child_color_Gold" class="block" title="Gold" product_id="51" style="border-radius: 50%; background-color: rgb(0, 255, 0); width: 30px; height: 30px; border: 1px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px;float:left"></div>
                                </span>
                            </div>
                        </li>
                        <li class="item">
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Curved Text
                                    <span class="label label-warning pull-right">Curved Text</span>
                                </a>
                                <span class="product-description">
                                    Color: <div id="child_color_Gold" class="block" title="Gold" product_id="51" style="border-radius: 50%; background-color: rgb(255, 0, 255); width: 30px; height: 30px; border: 1px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px;float:left"></div>
                                </span>
                                <span class="product-description">
                                    Stroke Color:<div id="child_color_Gold" class="block" title="Gold" product_id="51" style="border-radius: 50%; background-color: rgb(0, 255, 0); width: 30px; height: 30px; border: 1px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px;float:left"></div>
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="right_tab">
                        
                </div>
                <div class="tab-pane" id="back_tab">
                        
                </div>
                <div class="tab-pane" id="left_tab">
                    
                </div>
            </div>
        </div>-->
    </div>
  </div>
@endsection