@extends('layouts.admin')
@section('title','Store')
@section('pagename','Store')
@section('menuname','Store')
@section('content')
@guest

@endguest
@include('common.alerts')   
<div class="row">
    <div class="col-md-3">
       <div class="box box-primary">
        <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="{{asset('designs/store')}}{{'/'}}{{$storedesign->category->name}}{{'/'}}{{$storedesign->subcategory->name}}{{'/'}}{{$storedesign->title}}_preview.png" alt="User profile picture">
          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>Title</b> <a class="pull-right">{{$storedesign->title}}</a>
            </li>
            <li class="list-group-item">
              <b>Category</b> <a class="pull-right">{{$storedesign->category->name}}</a>
            </li>
            <li class="list-group-item">
              <b>SubCategory</b> <a class="pull-right">{{$storedesign->subcategory->name}}</a>
            </li>
            <li class="list-group-item">
                <b>Editable</b> 
                <a class="pull-right">
                    @if($storedesign->editable)
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
                <b>Selling Price</b> <a class="pull-right">${{$storedesign->selling_price}}</a>
            </li>
            <li class="list-group-item">
                    <b>Product</b> <a href="javascript:void(0)" class="pull-right">{{$storedesign->product->name}}</a>
                </li>
            <li class="list-group-item">
                <b>Created At</b> <a class="pull-right">{{$storedesign->created_at->format('m/d/Y h:m:i')}}</a>
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
           {{$storedesign->user->firstname}} {{$storedesign->user->lastname}}
           </p>
           <p class="text-muted">
            {{ $storedesign->user->email }}
           </p>
          <hr>
          <strong><i class="fa fa-map-marker margin-r-5"></i> Type</strong>
          <p class="text-muted">{{ $storedesign->type }}</p>
          <hr>
          <strong><i class="fa fa-pencil margin-r-5"></i> Status</strong>
          <p>
            @if($storedesign->status == 'Created')
                <span class="label label-success">{{$storedesign->status}}</span>
            @endif
            @if($storedesign->status == 'Waiting Approval')
                <span class="label label-warning">{{$storedesign->status}}</span>
            @endif
            @if($storedesign->status == 'Approved')
                <span class="label label-info">{{$storedesign->status}}</span>
            @endif
            @if($storedesign->status == 'Rejected')
                <span class="label label-danger">{{$storedesign->status}}</span>
            @endif
          </p>
          <hr>
          <strong><i class="fa fa-file-text-o margin-r-5"></i> Comment</strong>
          <p>{{ $storedesign->comment }}</p>
        </div>
      </div>
    </div>
    <div class="col-md-9">
        <div class="row margin-bottom">
            <div class="col-sm-4">
                
            </div>
            <div class="col-sm-4">
                <img class="img-responsive" src="{{asset('designs/store')}}{{'/'}}{{$storedesign->category->name}}{{'/'}}{{$storedesign->subcategory->name}}{{'/'}}{{$storedesign->title}}_preview.png" alt="Photo">
            </div>
            <div class="col-sm-4">
                
            </div>
        </div>
        <div class="nav-tabs-custom">               
            <div class="tab-content">                   
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
        </div>
    </div>
  </div>
@endsection