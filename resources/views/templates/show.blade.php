@extends('layouts.admin')
@section('title','Template')
@section('pagename','Template')
@section('menuname','Template')
@section('content')
@guest

@endguest
@include('common.alerts')   
<div class="row">
    <div class="col-md-3">
       <div class="box box-primary">
        <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="{{asset('designs/template')}}{{'/'}}{{$template->category->slug}}{{'/'}}{{$template->subcategory->slug}}{{'/'}}{{$template->title}}_front.png" alt="User profile picture">
          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>Title</b> <a class="pull-right">{{$template->title}}</a>
            </li>
            <li class="list-group-item">
              <b>Category</b> <a class="pull-right">{{$template->category->name}}</a>
            </li>
            <li class="list-group-item">
              <b>SubCategory</b> <a class="pull-right">{{$template->subcategory->name}}</a>
            </li>
            <li class="list-group-item">
                <b>Editable</b> 
                <a class="pull-right">
                    @if($template->editable)
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
                <b>Selling Price</b> <a class="pull-right">${{$template->selling_price}}</a>
            </li>
            <li class="list-group-item">
                    <b>Product</b> <a href="{{route('childproducts.show', $template->product->parent->id)}}" class="pull-right">{{$template->product->name}}</a>
                </li>
            <li class="list-group-item">
                <b>Created At</b> <a class="pull-right">{{$template->created_at->format('m/d/Y h:m:i')}}</a>
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
           {{$template->user->firstname}} {{$template->user->lastname}}
           </p>
           <p class="text-muted">
            {{ $template->user->email }}
           </p>
          <hr>
          <strong><i class="fa fa-map-marker margin-r-5"></i> Type</strong>
          <p class="text-muted">{{ $template->type }}</p>
          <hr>
          <strong><i class="fa fa-pencil margin-r-5"></i> Status</strong>
          <p>
            @if($template->status == 'Created')
                <span class="label label-success">{{$template->status}}</span>
            @endif
            @if($template->status == 'Waiting Approval')
                <span class="label label-warning">{{$template->status}}</span>
            @endif
            @if($template->status == 'Approved')
                <span class="label label-info">{{$template->status}}</span>
            @endif
            @if($template->status == 'Rejected')
                <span class="label label-danger">{{$template->status}}</span>
            @endif
          </p>
          <hr>
          <strong><i class="fa fa-file-text-o margin-r-5"></i> Comment</strong>
          <p>{{ $template->comment }}</p>
        </div>
      </div>
    </div>
    <div class="col-md-9">
        <center>
            <div class="table-content table-responsive" style="margin-bottom: 30px;     overflow-x: hidden;">
                <div class="row">
                    @if(count($template->designsides) == 1)
                        <div class="col-md-3"></div>
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                              <a href="http://{{$template->designsides[0]->design_product_image}}" target="_blank">
                                <img class="img-responsive" src="http://{{$template->designsides[0]->design_product_image}}">
                              </a>
                              <br>
                              <a class="btn btn-link"  href="http://{{$template->designsides[0]->svg}}" style="display: inline-block; font-size: 10px; padding:0;" download>
                                  {{$template->title}}_{{$template->designsides[0]->side}}.svg
                              </a>
                            </div>
                        <div class="col-md-4"></div>
                    @elseif(count($template->designsides) == 2)
                        <div class="col-md-2"></div>
                            @foreach($template->designsides as $side)
                                <div class="col-md-4">
                                  <a href="http://{{$side->design_product_image}}" target="_blank">
                                    <img class="img-thumbnail" src="http://{{$side->design_product_image}}">
                                  </a>
                                  <br>
                                  <a class="btn btn-link"  href="http://{{$side->svg}}" style="display: inline-block; font-size: 10px; padding:0;" download>
                                      {{$template->title}}_{{$side->side}}.svg
                                  </a>
                                </div>
                            @endforeach
                        <div class="col-md-2"></div>
                    @elseif(count($template->designsides) == 3)
                        @foreach($template->designsides as $side)
                            <div class="col-md-4">
                              <a href="http://{{$side->design_product_image}}" target="_blank">
                                <img class="img-thumbnail" src="http://{{$side->design_product_image}}">
                              </a>
                              <br>
                              <a class="btn btn-link"  href="http://{{$side->svg}}" style="display: inline-block; font-size: 10px; padding:0;" download>
                                  {{$template->title}}_{{$side->side}}.svg
                              </a>
                            </div>
                        @endforeach
                    @else
                        @foreach($template->designsides as $side)
                            <div class="col-md-3">
                              <a href="http://{{$side->design_product_image}}" target="_blank">
                                <img class="img-thumbnail" src="http://{{$side->design_product_image}}">
                              </a>
                              <br>
                              <a class="btn btn-link"  href="http://{{$side->svg}}" style="display: inline-block; font-size: 10px; padding:0;" download>
                                  {{$template->title}}_{{$side->side}}.svg
                              </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </center>
        <!--<div class="nav-tabs-custom">               
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
        </div>*-->
    </div>
  </div>

  <form method="POST" class="approve-model">
        <div id="approve-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" style="width:55%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="approve-width-modalLabel">Approve Template Design</h4>
                    </div>
                    <div class="modal-body">
                        <h4>You Want You Sure Approve This Template Design?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Approve</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection