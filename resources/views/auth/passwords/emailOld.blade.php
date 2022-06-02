@extends('layouts.app')
@section('title','Reset Password')
@section('menuname','Reset Password')
@section('content')
<!-- LOGIN SECTION START -->
<div class="login-section mb-80" style="background-color: #eeeeee;">
    <div class="container">
        <div class="row mb-30 mt-30">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                @include('common.alerts') 
                <div class="new-customers">
                    <form method="POST" action="{{ route('password.email') }}">
                        {{csrf_field()}}
                        
                        <h6 class="blog-section-title mb-30">Account recovery with Vivid Customs</h6>
                        <div class="login-account p-30" style="background-color: #ffffff">
                            <div class="row form-group">  
                            <p class="mb-5"><b>E-Mail Address *</b></p>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required style="box-shadow: none!important; border: 1px solid #0e0e0e !important; border-radius: 0px;">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            <br>
                            <button type="submit" class="btn btn-primary" style="cursor: pointer; text-transform: uppercase; text-decoration: none;font-size: 1em;background-color: #c00;border-color: #c00;color: #fff;font-weight: 500;width: 100%;text-align: center;">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>
</div>
<!-- LOGIN SECTION END --> 
@endsection
