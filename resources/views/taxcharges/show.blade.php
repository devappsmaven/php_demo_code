@extends('layouts.admin')
@section('title','Tax Charges Details')
@section('pagename','Tax Charges Details')
@section('menuname','Tax Charges Details')
@section('content')

<div class="row">
  <div class="box box-primary">
      <div class="box-body box-profile">
          <div class="box-body">
              <div class="form-group{{ $errors->has('tax_identifier') ? ' has-error' : '' }} has-feedback">
                  <label for="name">Tax Identifier</label>
                  <div class="input-group">
                      <div class="input-group-addon">
                          <i class="fa fa-qrcode"></i>
                      </div>
                      <input type="text" class="form-control" name="tax_identifier" placeholder="Enter Tax Identifier" value="{{ $taxcharge->tax_identifier }}" disabled>
                  </div>
                  @if ($errors->has('tax_identifier'))
                      <span class="invalid-feedback" role="alert">
                          <strong class="text-red">{{ $errors->first('tax_identifier') }}</strong>
                      </span>
                  @endif
              </div>

              <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }} has-feedback">
                  <label for="name">Country</label>
                  <div class="input-group">
                      <div class="input-group-addon">
                          <i class="fa fa-qrcode"></i>
                      </div>
                      <input type="text" class="form-control" name="country" placeholder="Enter Country" value="{{ $taxcharge->country }}" disabled>
                  </div>
                  @if ($errors->has('country'))
                      <span class="invalid-feedback" role="alert">
                          <strong class="text-red">{{ $errors->first('country') }}</strong>
                      </span>
                  @endif
              </div>

              <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }} has-feedback">
                  <label for="name">State</label>
                  <div class="input-group">
                      <div class="input-group-addon">
                          <i class="fa fa-qrcode"></i>
                      </div>
                      <input type="text" class="form-control" name="state" placeholder="Enter State" value="{{ $taxcharge->state }}" disabled>
                  </div>
                  @if ($errors->has('state'))
                      <span class="invalid-feedback" role="alert">
                          <strong class="text-red">{{ $errors->first('state') }}</strong>
                      </span>
                  @endif
              </div>

              <div class="form-group{{ $errors->has('postal_code') ? ' has-error' : '' }} has-feedback">
                  <label for="name">Postal Code</label>
                  <div class="input-group">
                      <div class="input-group-addon">
                          <i class="fa fa-qrcode"></i>
                      </div>
                      <input type="text" class="form-control" name="postal_code" placeholder="Enter Postal Code" value="{{ $taxcharge->postal_code }}" disabled>
                  </div>
                  @if ($errors->has('postal_code'))
                      <span class="invalid-feedback" role="alert">
                          <strong class="text-red">{{ $errors->first('postal_code') }}</strong>
                      </span>
                  @endif
              </div>

              <div class="form-group{{ $errors->has('percentage') ? ' has-error' : '' }} has-feedback">
                  <label for="name">Percentage</label>
                  <div class="input-group">
                      <div class="input-group-addon">
                          <i class="fa fa-qrcode"></i>
                      </div>
                      <input type="text" class="form-control" name="percentage" placeholder="Enter Percentage" value="{{ $taxcharge->percentage }}" disabled>
                  </div>
                  @if ($errors->has('price'))
                      <span class="invalid-feedback" role="alert">
                          <strong class="text-red">{{ $errors->first('percentage') }}</strong>
                      </span>
                  @endif
              </div>

              
          </div>
      </div>
  </div>
</div>
@endsection