@extends('layouts.admin')
@section('title','Create Tax Charges')
@section('pagename','Create Tax Charges')
@section('menuname','Create Tax Charges')
@section('content')


<div class="row">
    @include('common.alerts')  
    <form role="form" method="POST" action="{{route('taxcharges.store')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="box box-primary">
            <div class="box-body box-profile">
                <div class="box-body">

                    <div class="form-group{{ $errors->has('tax_identifier') ? ' has-error' : '' }} has-feedback">
                        <label for="name">Tax Identifier *</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-qrcode"></i>
                            </div>
                            <input type="text" class="form-control" name="tax_identifier" placeholder="Enter Tax Identifier">
                        </div>
                        @if ($errors->has('tax_identifier'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('tax_identifier') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }} has-feedback">
                        <label for="name">Country *</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-qrcode"></i>
                            </div>
                            <input type="text"  class="form-control" name="country" id="country" placeholder="Enter Country">
                        </div>
                        @if ($errors->has('country'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('country') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }} has-feedback">
                        <label for="name">State *</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-qrcode"></i>
                            </div>
                            <input type="text"  class="form-control" name="state" id="state" placeholder="Enter State">
                        </div>
                        @if ($errors->has('state'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('state') }}</strong>
                            </span>
                        @endif
                    </div>

                    <!-- <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                        <label for="status">State *</label>
                        <select class="form-control" name="status">
                            <option disabled selected>--Select Option--</option>
                            <option>Enable</option>
                            <option>Disable</option>
                        </select>
                        @if ($errors->has('status'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('status') }}</strong>
                            </span>
                        @endif
                    </div> -->

                    <div class="form-group{{ $errors->has('postal_code') ? ' has-error' : '' }} has-feedback">
                        <label for="name">Postal Code *</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-qrcode"></i>
                            </div>
                            <input type="text" class="form-control" name="postal_code" placeholder="Enter Postal Code">
                        </div>
                        @if ($errors->has('postal_code'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('postal_code') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('percentage') ? ' has-error' : '' }} has-feedback">
                        <label for="name">Percentage *</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-qrcode"></i>
                            </div>
                            <input type="text" class="form-control" name="percentage" placeholder="Enter Percentage">
                        </div>
                        @if ($errors->has('percentage'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('percentage') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection