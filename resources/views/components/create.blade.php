@extends('layouts.admin')
@section('title','Create Components')
@section('pagename','Create Components')
@section('menuname','Create Components')
@section('content')
@include('common.alerts')  
<div class="container-fluid">
    <form role="form" method="POST" action="{{route('components.store')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-sm-8">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <!--<div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }} has-feedback">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control" name="slug">
                            @if ($errors->has('slug'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('slug') }}</strong>
                                </span>
                            @endif
                        </div>-->
                        <div class="form-group{{ $errors->has('order') ? ' has-error' : '' }} has-feedback">
                            <label for="order">Order</label>
                            <input type="number" class="form-control" name="order">
                            @if ($errors->has('order'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('order') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <a class="btn btn-default btn-sm waves-effect waves-light upload-media" data-toggle="modal" data-target="#modal-upload-media">Add Media</a>
                        </div>
                        <div id="modal-upload-media" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog" style="width:95%;">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="custom-width-modalLabel">Insert Media</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <div class="nav-tabs-custom">
                                                    <ul class="nav nav-tabs">
                                                      <li><a href="#uploadfiles" data-toggle="tab">Upload Files</a></li>
                                                      <li class="active"><a href="#medialibrary" data-toggle="tab">Media Library</a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                      <div class="tab-pane" id="uploadfiles">
                                                        <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }} has-feedback">
                                                            <label for="file">Image</label>
                                                            <input type="file" class="form-control" name="file" value={{old('file')}}>
                                                            @if ($errors->has('file'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong class="text-red">{{ $errors->first('file') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                      </div>
                                                      <div class="active tab-pane" id="medialibrary">
                                                        <div class="timeline-body" style="width:1500px; overflow-y: auto; height: 600px;">
                                                            @foreach($medias as $media)
                                                                <div style="position:relative; display:inline">
                                                                    <label class="image-checkbox">
                                                                        <i class="fa fa-check hidden"></i>
                                                                        <img class="img-responsive" src="{{asset('img')}}{{'/'}}{{ $media->url }}{{'/'}}{{ $media->file }}"  style="width:100px; max-width:100px; max-height: 100px;" />
                                                                        <input type="checkbox" name="image[]" value="" />
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                          </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                            </div>
                                            <div class="col-sm-2"></div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info waves-effect remove-data-from-delete-form" data-dismiss="modal">Insert Into Component</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }} has-feedback">
                            <label for="type">Area</label>
                            <select class="form-control" name="type">
                                <option disabled selected>--Select Option--</option>
                                <option>Header</option>
                                <option>Mobile Area</option>
                                <option>Left Side</option>
                                <option>Body</option>
                                <option>Rigth Side</option>
                                <option>Footer</option>
                            </select>
                            @if ($errors->has('type'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('type') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('section') ? ' has-error' : '' }} has-feedback">
                            <label for="section">Section</label>
                            <select class="form-control" name="section">
                                <option disabled selected>--Select Option--</option>
                                <option>Header Top Area</option>
                                <option>Header Middle Area</option>
                                <option>Header Bottom Area</option>
                                <option>Mobile Menu Area</option>
                                <option>Product Search Left</option>
                                <option>Post Search Left</option>
                                <option>Gallery Search Left</option>
                                <option>Design Template Search Left</option>
                                <option>Category Products Left</option>
                                <option>Category Posts Left</option>
                                <option>Category Gallery Left</option>
                                <option>Category Template Design Left</option>
                                <option>Price Range Left</option>
                                <option>Color Left</option>
                                <option>Brand Left</option>
                                <option>Recent Products Left</option>
                                <option>Popular Posts Left</option>
                                <option>Popular Galleries Left</option>
                                <option>Content</option>
                                <option>403</option>
                                <option>404</option>
                                <option>500</option>
                                <option>About us</option>
                                <option>Checkout</option>
                                <option>Contact Map</option>
                                <option>Contact Form</option>
                                <option>Contact Info</option>
                                <option>Email Verify</option>
                                <option>Login/Register</option>
                                <option>Login</option>
                                <option>Password Email</option>
                                <option>Password Reset</option>
                                <option>Register</option>
                                <option>Order Complete</option>
                                <option>Password Reset</option>
                                <option>Shopping Cart</option>
                                <option>Team Member</option>
                                <option>Wishlist</option>
                                <option>Product Details</option>
                                <option>Main Product List</option>
                                <option>Product List</option>
                                <option>Featured Products</option>
                                <option>New Product</option>
                                <option>Carousel Slider</option>
                                <option>Main Brands</option>
                                <option>Main Latest Blog</option>
                                <option>Main Latest Gallery</option>
                                <option>Post Details</option>
                                <option>Post List</option>
                                <option>Gallery Details</option>
                                <option>Gallery List</option>
                                <option>Template Design Details</option>
                                <option>Template Design List</option>
                                <option>Price Quote</option>
                                <option>Subscribe</option>
                                <option>Product Search Right</option>
                                <option>Post Search Right</option>
                                <option>Gallery Search Right</option>
                                <option>Design Template Search Right</option>
                                <option>Category Products Right</option>
                                <option>Category Posts Right</option>
                                <option>Category Gallery Right</option>
                                <option>Category Template Design Right</option>
                                <option>Price Range Right</option>
                                <option>Color Right</option>
                                <option>Brand Right</option>
                                <option>Recent Products Right</option>
                                <option>Popular Posts Right</option>
                                <option>Popular Galleries Right</option>
                                <option>Footer Top Area</option>
                                <option>Footer Middle Area</option>
                                <option>Footer Bottom Area</option>
                                <option>Order Info</option>
                                <option>Account Info</option>
                                <option>Our Services</option>
                                <option>Search Order</option>
                                <option>Header Top Area</option>
                            </select>
                            @if ($errors->has('section'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('section') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                            <label for="status">Status</label>
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
                        </div>
                        <div class="form-group">
                            <label>Themes</label>
                            <select class="form-control" multiple data-placeholder="Select a Theme" style="width: 100%;" name="themes[]">
                                @foreach ($themes as $theme)
                                    <option value="{{ $theme->id }}">{{ $theme->name }}</option>  
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group{{ $errors->has('is_editable') ? ' has-error' : '' }} has-feedback">
                            <label>
                            <input type="checkbox" class="minimal" name="is_editable" id="is_editable">
                            </label>
                                Editable
                            </label>
                            @if ($errors->has('is_editable'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('is_editable') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>

@endsection