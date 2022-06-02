@extends('layouts.app')
@section('title','Contact')
@section('menuname','Contact')
@section('content')
@if($theme =='subas')
<!-- ADDRESS SECTION START -->
<div class="address-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="padding-top: 20px;">
                    <p style="text-align: justify;">Vivid Custom's Customer Service is ready to assist you!  If you have any questions about your order, pricing or product information please choose from one of the following options.  You may also find answers in our frequently asked questions (FAQ) by clicking <a href="faq">here</a>.</p><br>
                    <center>
                    <h6>Representatives are available:<br><br>
                    <b>MON-FRI:</b> 8:30am to 5pm Central Time</h6></center><br>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="contact-address box-shadow">
                        <h3 style="font-weight: 600;">Visit Us</h3>
                        <i class="zmdi zmdi-pin"></i>
                        <h6>11119 Neeshaw Dr</h6>
                        <h6>Houston, Texas 77065</h6>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 mb-80">
                    <div class="contact-address box-shadow">
                        <h3 style="font-weight: 600;">Call Us</h3>
                        <a href="tel:8006488518"><i class="zmdi zmdi-phone"></i>
                        <h6>1800 - 648 - 8518</h6></a><br>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- ADDRESS SECTION END --> 
    
    <!-- MESSAGE BOX SECTION START -->
    <div class="message-box-section mt--50 mb-80">
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('common.alerts')      
                    <div class="message-box box-shadow" style="background-color: #f5fcfd;">
                        <form role="form" method="POST" action="{{route('contact.store')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="blog-section-title mb-30">Email Us</h4>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                        <h6>First Name</h6>
                                        <input type="text" class="form-control" name="firstname" value={{old('firstname')}}>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                        <h6>Last Name</h6>
                                        <input type="text" class="form-control" name="lastname" value={{old('lastname')}}>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <h6>Email Address</h6>
                                        <input type="text" class="form-control" name="email" value={{old('email')}}>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                        <h6>Phone Number</h6>
                                        <input type="text" class="form-control"  name="phone" value={{old('phone')}}>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                                        <h6>Subject</h6>
                                        <input type="text" class="form-control" name="subject" value={{old('subject')}}>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                                        <h6>Message</h6>
                                        <textarea class="custom-textarea" class="form-control"  name="message">{{old('message')}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group{{ $errors->has('files') ? ' has-error' : '' }}">
                                        <h6>Attach files</h6>
                                        <input type="file" id="multiFiles" name="files[]" multiple="multiple"/>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">
                                        <h6>Captcha Code</h6>
                                        <input type="text" class="form-control" name="captcha" id="captcha"/>
                                    </div>
                                </div>
                                <div class="col-md-6" align="center" style="padding-top: 25px;">
                                    <img id="imgcaptcha">
                                    <button type="button" class="btn btn-success btn-refresh" id="refreshcaptcha" style=""><i class="zmdi zmdi-refresh" ></i></button>
                                </div>
                                <div class="col-md-12">
                                    <button class="submit-btn-1 mt-30 btn-hover-1" type="submit" id="fileButton">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MESSAGE BOX SECTION END --> 
    @elseif($theme == 'eshopper')
    <div class="contact-form">
            <h2 class="title text-center">Get In Touch</h2>
            <div class="status alert alert-success" style="display: none"></div>
            <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                <div class="form-group col-md-6">
                    <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                </div>
                <div class="form-group col-md-12">
                    <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
                </div>
                <div class="form-group col-md-12">
                    <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
                </div>                        
                <div class="form-group col-md-12">
                    <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                </div>
            </form>
        </div>
    @endif
@endsection
