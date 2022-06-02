@extends('layouts.app2')
@section('title',"$page->title")
@section('content')

@if($page->headercomponents->count() > 0)
    <header class="header-area header-wrapper shoppingcart_header" id="header">
        @foreach ($page->headercomponents as $component)
            @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
        @endforeach
    </header>
@endif


<section class="sec-css">
 
    <div class="container">
        @include('common.alerts')
        <a href="{{url('dashboard')}}"class="btn btn-go-back">Go To Dashboard</a>
        <div class="seller-container account-details mt-2">
            <div class="row">
                <div class="col-12">
                    <h5 class="mb-2">Account Details</h5>
                    <button class="edit-btn" data-toggle="modal" data-target="#editStore">
                        <img src="{{asset('images/edit.png')}}">
                    </button>
                    
                    <div class="row">
                        <div class="col-12">
                            <h6>Cover Image</h6>
                            <div class="account-cover mt-4">
                                <img src="{{asset('img/store/'.$store->banner)}}">
                            </div>
                        </div>
                        <div class="col-6">
                            <h6>Store Name</h6>
                            <p>{{ $store->name }}</p>

                        </div>
                        <!-- <div class="col-6">
                            <h6>Slogan</h6>
                            <p>{{ $store->slogan }}</p>
                        </div> -->
                        <div class="col-12">
                            <h6>Store Description</h6>
                            <p>{{ $store->description }}</p>
                        </div>
                    </div>


                    <!-- Edit Store  -->
                    <div class="modal fade" id="editStore" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-self">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Store Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form class="form row" action="{{url('stores/updateinfo/'.$store->id)}}" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        {{ csrf_field() }}
                                        <div class="form-group col-12">
                                            <div class="seller-profile">
                                                <img src="{{asset('images/file-uploader.png')}}" class="uploader-img">
                                                <div class="upload-btn-wrapper">
                                                    <button class="btn upload-btn">Upload Cover Image</button>
                                                    <input type="file" name="newbanner" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="StoreName">Enter Store Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Store Name" name="newname">

                                        </div>
                                        <!-- <div class="form-group col-12">
                                            <label for="slogan">Enter Slogan</label>
                                            <input type="text" class="form-control" placeholder="Enter Slogan" name="newslogan">
                                        </div> -->
                                        <div class="form-group col-12">
                                            <label for="StoreDescription">Store Description</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter Store Description" name="newdescription"></textarea>
                                        </div>
                                        <div class="form-group col-12">
                                              <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
                                          </div>
                                    </div>
                                   
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@if($page->footercomponents->count() > 0)
    <footer id="footer" class="footer-area container_fixed">
        @foreach ($page->footercomponents as $component)
            @if($component->status == 'Enable' && $component->active) @include( 'layouts.'.$theme->name.".".$component->slug) @endif
        @endforeach
    </footer>
@endif