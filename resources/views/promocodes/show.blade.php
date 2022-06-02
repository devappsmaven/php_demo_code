@extends('layouts.admin')
@section('title','Promo Code Details')
@section('pagename','Promo Code Details')
@section('menuname','Promo Code Details')
@section('content')

<div class="row">
  <div class="col-md-6">
  <!-- Profile Image -->
  <div class="box box-primary">
      <div class="box-body box-profile">
          <div class="box-body">
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                  <label for="name">Name</label>
                  <div class="input-group">
                      <div class="input-group-addon">
                          <i class="fa fa-qrcode"></i>
                      </div>
                      <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ $promocode->name }}" disabled>
                  </div>
                  @if ($errors->has('name'))
                      <span class="invalid-feedback" role="alert">
                          <strong class="text-red">{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
              </div>
              <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }} has-feedback">
                  <label for="name">Description</label>
                  <textarea  class="form-control" name="description" id="description" cols="30" rows="3" disabled>{{ $promocode->description }}</textarea>
                  @if ($errors->has('description'))
                      <span class="invalid-feedback" role="alert">
                          <strong class="text-red">{{ $errors->first('description') }}</strong>
                      </span>
                  @endif
              </div>
              <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                  <label for="status">Status</label>
                  <select class="form-control select2" name="status" disabled>
                      <option disabled selected>--Select Option--</option>
                      @if($promocode->status == 'Enable')
                          <option selected>Enable</option>
                          <option>Disable</option>
                      @endif
                      @if($promocode->status == 'Disable')
                          <option>Enable</option>
                          <option selected>Disable</option>
                      @endif
                  </select>
                  @if ($errors->has('status'))
                      <span class="invalid-feedback" role="alert">
                          <strong class="text-red">{{ $errors->first('status') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
      </div><!-- /.box-body -->
  </div><!-- /.box -->

  
  </div><!-- /.col -->
  <div class="col-md-6">
  <div class="nav-tabs-custom">
      <ul class="nav nav-tabs nav-justified">
      <li class="active"><a href="#general" data-toggle="tab">General</a></li>
      <li><a href="#usagerestriction" data-toggle="tab">Usage Restriction</a></li>
      <li><a href="#usagelimits" data-toggle="tab">Usage Limits</a></li>
      </ul>
      <div class="tab-content">
      <div class="active tab-pane" id="general">
          <div class="box-body">
              <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }} has-feedback">
                  <label for="type">Discount type</label>
                  <select class="form-control select2" name="type" disabled>
                      <option disabled>--Select Option--</option>
                      @if($promocode->type == 'Cart Discount')
                          <option value="Cart Discount" selected>Cart Discount</option>
                          <option value="Cart % Discount">Cart % Discount</option>
                          <option value="Product Discount">Product Discount</option>
                          <option value="Product % Discount">Product % Discount</option>
                      @endif
                      @if($promocode->type == 'Cart % Discount')
                          <option value="Cart Discount">Cart Discount</option>
                          <option value="Cart % Discount" selected>Cart % Discount</option>
                          <option value="Product Discount">Product Discount</option>
                          <option value="Product % Discount">Product % Discount</option>
                      @endif
                      @if($promocode->type == 'Product Discount')
                          <option value="Cart Discount">Cart Discount</option>
                          <option value="Cart % Discount">Cart % Discount</option>
                          <option value="Product Discount" selected>Product Discount</option>
                          <option value="Product % Discount">Product % Discount</option>
                      @endif
                      @if($promocode->type == 'Product % Discount')
                          <option value="Cart Discount">Cart Discount</option>
                          <option value="Cart % Discount">Cart % Discount</option>
                          <option value="Product Discount">Product Discount</option>
                          <option value="Product % Discount" selected>Product % Discount</option>
                      @endif
                      
                  </select>
                  @if ($errors->has('type'))
                      <span class="invalid-feedback" role="alert">
                          <strong class="text-red">{{ $errors->first('type') }}</strong>
                      </span>
                  @endif
              </div>
              <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }} has-feedback">
                  <label for="amount">Coupon amount</label>
                  <div class="input-group">
                      <div class="input-group-addon">
                          <i class="fa fa-money"></i>
                      </div>
                      <input type="text" class="form-control" name="amount" placeholder="Enter amount" value="{{ $promocode->amount }}" disabled>
                  </div>
                  @if ($errors->has('amount'))
                      <span class="invalid-feedback" role="alert">
                          <strong class="text-red">{{ $errors->first('amount') }}</strong>
                      </span>
                  @endif
              </div>
              <div class="form-group{{ $errors->has('freeshipping') ? ' has-error' : '' }} has-feedback">
                  <label>
                  <input type="checkbox" class="minimal" name="freeshipping" id="freeshipping" {{ $promocode->freeshipping ? 'checked' : '' }} disabled>
                  </label>
                  Free Shipping(Check this box if the coupon grants free shipping.)
                  </label>
                  @if ($errors->has('freeshipping'))
                      <span class="invalid-feedback" role="alert">
                          <strong class="text-red">{{ $errors->first('freeshipping') }}</strong>
                      </span>
                  @endif
              </div>
              <div class="form-group{{ $errors->has('expirationdate') ? ' has-error' : '' }} has-feedback">
                  {{Form::label('expirationdate','Coupon expiry date')}}
                  <div class="input-group">
                      <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                      </div>
                      {{Form::text('expirationdate',$promocode->expirationdate,['class'=>'form-control', 'data-inputmask' => '"alias": "mm/dd/yyyy"', 'data-mask' => '','id' => 'expirationdate', 'name' => 'expirationdate', 'disabled'])}}
                  </div>
                  @if ($errors->has('expirationdate'))
                      <span class="invalid-feedback" role="alert">
                          <strong class="text-red">{{ $errors->first('expirationdate') }}</strong>
                      </span>
                  @endif 
              </div>
          </div>
      </div><!-- /.tab-pane -->
      <div class="tab-pane" id="usagerestriction">
          <div class="box-body">
              <div class="form-group{{ $errors->has('minimumspend') ? ' has-error' : '' }} has-feedback">
                  <label for="minimumspend">Minimum Spend</label>
                  <div class="input-group">
                      <div class="input-group-addon">
                          <i class="fa fa-money"></i>
                      </div>
                      <input type="text" class="form-control" name="minimumspend" placeholder="Enter minimum spend" value="{{ $promocode->minimumspend }}" disabled>
                  </div>
                  @if ($errors->has('minimumspend'))
                      <span class="invalid-feedback" role="alert">
                          <strong class="text-red">{{ $errors->first('minimumspend') }}</strong>
                      </span>
                  @endif
              </div>
              <div class="form-group{{ $errors->has('maximumspend') ? ' has-error' : '' }} has-feedback">
                  <label for="maximumspend">Maximum Spend</label>
                  <div class="input-group">
                      <div class="input-group-addon">
                          <i class="fa fa-money"></i>
                      </div>
                      <input type="text" class="form-control" name="maximumspend" placeholder="Enter Maximum Spend" value="{{ $promocode->maximumspend }}" disabled>
                  </div>
                  @if ($errors->has('maximumspend'))
                      <span class="invalid-feedback" role="alert">
                          <strong class="text-red">{{ $errors->first('maximumspend') }}</strong>
                      </span>
                  @endif
              </div>
              <div class="form-group{{ $errors->has('individualuseonly') ? ' has-error' : '' }} has-feedback">
                  <label>
                  <input type="checkbox" class="minimal" name="individualuseonly" id="individualuseonly"  {{ $promocode->individualuseonly ? 'checked' : '' }} disabled>
                  </label>
                  Individual Use Only(Check this box if the coupon cannot be used in conjunction with other coupons.)
                  </label>
                  @if ($errors->has('individualuseonly'))
                      <span class="invalid-feedback" role="alert">
                          <strong class="text-red">{{ $errors->first('individualuseonly') }}</strong>
                      </span>
                  @endif
              </div>
              <div class="form-group{{ $errors->has('excludesaleitems') ? ' has-error' : '' }} has-feedback ">
                  <label>
                  <input type="checkbox" class="minimal" name="excludesaleitems" id="excludesaleitems"  {{ $promocode->excludesaleitems ? 'checked' : '' }} disabled>
                  </label>
                      Exclude Sale Items(Check this box if the coupon should not apply to items on sale. Per-item coupons will only work if the item is not on sale. Per-cart coupons will only work if there are no sale items in the cart.)
                  </label>
                  @if ($errors->has('excludesaleitems'))
                      <span class="invalid-feedback" role="alert">
                          <strong class="text-red">{{ $errors->first('excludesaleitems') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
      </div><!-- /.tab-pane -->

      <div class="tab-pane" id="usagelimits">
          <div class="box-body">
              <div class="form-group{{ $errors->has('limitpercoupon') ? ' has-error' : '' }} has-feedback">
                  <label for="limitpercoupon">Limit Per Coupon</label>
                  <div class="input-group">
                      <div class="input-group-addon">
                          <i class="fa fa-sort-numeric-asc"></i>
                      </div>
                      <input type="text" class="form-control" name="limitpercoupon" placeholder="Enter limit per coupon" value="{{ $promocode->limitpercoupon }}" disabled>
                  </div>
                  @if ($errors->has('limitpercoupon'))
                      <span class="invalid-feedback" role="alert">
                          <strong class="text-red">{{ $errors->first('limitpercoupon') }}</strong>
                      </span>
                  @endif
              </div>
              <div class="form-group{{ $errors->has('limitperuser') ? ' has-error' : '' }} has-feedback">
                  <label for="limitperuser">Limit Per User</label>
                  <div class="input-group">
                      <div class="input-group-addon">
                          <i class="fa fa-sort-numeric-desc"></i>
                      </div>
                  <input type="text" class="form-control" name="limitperuser" placeholder="Enter Limit Per User" value="{{ $promocode->limitperuser }}" disabled>
                  </div>
                  @if ($errors->has('limitperuser'))
                      <span class="invalid-feedback" role="alert">
                          <strong class="text-red">{{ $errors->first('limitperuser') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
      </div><!-- /.tab-pane -->
      </div><!-- /.tab-content -->
  </div><!-- /.nav-tabs-custom -->
  </div><!-- /.col -->
    </div>
@endsection