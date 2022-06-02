@if(Auth::user()->has_store)
    @if(Auth::user()->store->status == "Waiting Approval")
        <div class="alert alert-warning"><strong>Warning! </strong> We notify to you the more early posible. for now steel navegate <a href="index" class="alert-link">our web site</a></div>
    @else
        <div class="login-section mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="my-account-content" id="accordion2">
                            @if($user->designs->count() > 0)
                            <div id="recommended-item-carousel" class="carousel slide">
                                    <div class="carousel-inner">
                                            @foreach($user->designs as $storedesign)
                                                @if($storedesign->type == 'Store Design')
                                                    @if ($countstoredesigns == 1)
                                                        <div class="item active">	
                                                   @endif
                                                    <div class="col-sm-4">
                                                        <div class="product-image-wrapper">
                                                            <div class="single-products">
                                                                <div class="productinfo text-center">
                                                                    <img src="{{asset('designs/store')}}{{'/'}}{{$storedesign->category->name}}{{'/'}}{{$storedesign->subcategory->name}}{{'/'}}{{$storedesign->title}}_preview.png">
                                                                    <h3>{{$storedesign->title}}</h3>
                                                                    <h3>${{$storedesign->selling_price}}</h3>
                                                                
                                                                    @if($storedesign->status == "Created")
                                                                        <h3 class="pro-price" style="color:#00a65a;"> {{$storedesign->status}}</h3>
                                                                        <center>
                                                                            <a class="btn btn-info" type="button" href="{{url('designstudio/sd',$storedesign->id)}}">Edit</a> 
                                                                            <a class="btn btn-warning" href="{{ route('storedesign.sendcreatestoredesign', $storedesign->id) }}"  onclick="event.preventDefault(); document.getElementById('favorite-form-{{ $storedesign->id }}').submit();" style="background: #ff7f00;">
                                                                                Send
                                                                            </a>
                                                                            <form id="favorite-form-{{ $storedesign->id }}" method="POST" action="{{ route('storedesign.sendcreatestoredesign', $storedesign->id) }}" style="display: none;">
                                                                                {{ csrf_field() }}
                                                                            </form>
                                                                        </center>
                                                                    @elseif($storedesign->status == "Waiting Approval")
                                                                        <h3 class="pro-price" style="color:#f39c12;"> {{$storedesign->status}}</h3>
                                                                        Time waiting: <span style="color:#f39c12;">{{ $storedesign->updated_at->diffForHumans() }}</span>
                                                                        <br>
                                                                    @elseif($storedesign->status == "Approved")
                                                                        <h3 class="pro-price" style="color:#00c0ef;"> {{$storedesign->status}}</h3>
                                                                    @elseif($storedesign->status == "Rejected")
                                                                        <h3 class="pro-price" style="color:#dd4b39;"> {{$storedesign->status}}</h3>
                                                                        Note: <span style="color:#dd4b39;">{{ $storedesign->comment }}</span>
                                                                        <br>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if($countstoredesigns % 3 == 0 && $countstoredesigns >=3)
                                                        </div>  
                                                        <div class="item">	
                                                    @endif
                                                    @php $countstoredesigns ++; @endphp
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                    </a>			
                                </div>
                                <!-- FEATURED PRODUCT SECTION START -->
                                <div class="featured-product-section mb-50" style="display:none;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="section-title text-left mb-40">
                                                    <h2 class="uppercase">My Designs</h2>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="featured-product">
                                            <div class="row active-featured-product slick-arrow-2">
                                                @foreach($user->designs as $storedesign)
                                                    @if($storedesign->type == 'Store Design')
                                                         <!-- product-item start -->
                                                            <div class="col-xs-12">
                                                                <div class="product-item">
                                                                    <div class="product-img">
                                                                        <a href="javascript:void(0)">
                                                                        <img src="{{asset('designs/store')}}{{'/'}}{{$storedesign->category->name}}{{'/'}}{{$storedesign->subcategory->name}}{{'/'}}{{$storedesign->title}}_preview.png">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-info">
                                                                        <h6 class="product-title">
                                                                            <a href="javascript:void(0)">{{$storedesign->title}}</a>
                                                                        </h6>
                                                                        @if($storedesign->status == "Approved")
                                                                            <div class="pro-rating">
                                                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                                                <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                                            </div>
                                                                        @endif
                                                                        <h3 class="pro-price">$ {{$storedesign->selling_price}}</h3>
                                                                        @if($storedesign->status == "Created")
                                                                            <h3 class="pro-price" style="color:#00a65a;"> {{$storedesign->status}}</h3>
                                                                            <center>
                                                                                <a class="submit-btn-1 btn-xs mt-20 btn-hover-1" type="button" href="{{url('designstudio/sd',$storedesign->id)}}">Edit</a> 
                                                                                <a class="submit-btn-1 btn-xs mt-20 btn-hover-1" href="{{ route('storedesign.sendcreatestoredesign', $storedesign->id) }}"  onclick="event.preventDefault(); document.getElementById('favorite-form-{{ $storedesign->id }}').submit();" style="background: #ff7f00;">
                                                                                    Send
                                                                                </a>
                                                                                    <form id="favorite-form-{{ $storedesign->id }}" method="POST" action="{{ route('storedesign.sendcreatestoredesign', $storedesign->id) }}" style="display: none;">
                                                                                        {{ csrf_field() }}
                                                                                    </form>
                                                                            </center>
                                                                        @elseif($storedesign->status == "Waiting Approval")
                                                                            <h3 class="pro-price" style="color:#f39c12;"> {{$storedesign->status}}</h3>
                                                                            Time waiting: <span style="color:#f39c12;">{{ $storedesign->updated_at->diffForHumans() }}</span>
                                                                            <br>
                                                                        @elseif($storedesign->status == "Approved")
                                                                            <h3 class="pro-price" style="color:#00c0ef;"> {{$storedesign->status}}</h3>
                                                                        @elseif($storedesign->status == "Rejected")
                                                                            <h3 class="pro-price" style="color:#dd4b39;"> {{$storedesign->status}}</h3>
                                                                            <span style="color:#dd4b39;">{{ $storedesign->comment }}</span>
                                                                            <br>
                                                                        @endif
                                                                        <br>
                                                                        <ul class="action-button">
                                                                            <li>
                                                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                        <br>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- product-item end -->
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>          
                                    </div>            
                                </div>
                                <!-- FEATURED PRODUCT SECTION END -->
                            @endif
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion2" href="#personal_info">My Store: {{Auth::user()->store->name}}</a>
                                    </h4>
                                </div>
                                <div id="personal_info" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <div class="row mt-20">
                                            <div class="col-md-12">
                                                <div class="section-title text-center mb-20">
                                                    <h2 class="uppercase">My Store Information</h2>
                                                </div>
                                            </div>
                                        </div>

                                        <form method="POST" action="{{ route('stores.updateinfo',Auth::user()->store->id) }}"  enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="login-account p-30 box-shadow">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                    <input type="text"  class="form-control" name="newname" placeholder="Store Name ..." value="{{Auth::user()->store->name}}">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control"  name="newslogan" placeholder="Store Slogan ..."  value="{{Auth::user()->store->slogan}}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <img src="{{asset('img/store')}}{{'/'}}{{Auth::user()->store->banner}}"  class="img-responsive img-thumbnail">
                                                        <input type="file" name="newbanner">   
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <button class="btn btn-default" type="submit" value="register">Change</button>
                                                    </div>
                                                </div>
                                            </div>    
                                        </form>
                                        @if(Auth::user()->store->statusname == 'Waiting Approval' || Auth::user()->store->statuslogan == 'Waiting Approval' || Auth::user()->store->statusbanner == 'Waiting Approval' ||
                                            Auth::user()->store->statusname == 'Rejected' || Auth::user()->store->statuslogan == 'Rejected' || Auth::user()->store->statusbanner == 'Rejected')
                                            <div class="row mt-20">
                                                <div class="col-md-12">
                                                    <div class="section-title text-center mb-20">
                                                        <h2 class="uppercase">My Store New Information</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="login-account p-30 box-shadow">
                                                <div class="row mb-20">
                                                    @if(Auth::user()->store->statusname == 'Waiting Approval' || Auth::user()->store->statusname == 'Rejected')
                                                        <div class="col-sm-6">
                                                           @if(Auth::user()->store->statusname == 'Waiting Approval')
                                                                <input type="text" class="form-control" value="{{Auth::user()->store->newname}}" readonly>
                                                                <br>
                                                                <strong class="alert alert-warning"><strong>Warning!</strong> Your change is waiting for approval.</strong>
                                                            @elseif(Auth::user()->store->statusname == 'Rejected')
                                                                <strong class="alert alert-danger"><strong>Name Rejected!</strong> {{Auth::user()->store->messagename}}</strong>
                                                            @endif
                                                        </div>
                                                    @endif
                                                    
                                                    @if(Auth::user()->store->statuslogan == 'Waiting Approval' || Auth::user()->store->statuslogan == 'Rejected')
                                                        <div class="col-sm-6">
                                                            @if(Auth::user()->store->statuslogan == 'Waiting Approval')
                                                                <input type="text" class="form-control" value="{{Auth::user()->store->newslogan}}" readonly>
                                                                <br>
                                                                <strong class="alert alert-warning"><strong>Warning!</strong> Your change is waiting for approval.</strong>
                                                            @elseif(Auth::user()->store->statuslogan == 'Rejected')
                                                                <strong class="alert alert-danger"><strong>Slogan Rejected!</strong> {{Auth::user()->store->messageslogan}}</strong>
                                                            @endif
                                                        </div>
                                                    @endif
                                                </div>
                                                
                                                    
                                                @if(Auth::user()->store->statusbanner == 'Waiting Approval' || Auth::user()->store->statusbanner == 'Rejected')
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            @if(Auth::user()->store->statusbanner == 'Waiting Approval')
                                                                <img src="{{asset('img/store')}}{{'/'}}{{Auth::user()->store->newbanner}}"  class="img-responsive img-thumbnail">
                                                                <br>
                                                                <br>
                                                                <strong class="alert alert-warning"><strong>Warning!</strong> Your change is waiting for approval.</strong>
                                                            @elseif(Auth::user()->store->statusbanner == 'Rejected')
                                                                <strong class="alert alert-danger"><strong>Banner Rejected!</strong> {{Auth::user()->store->messagebanner}}</strong>
                                                            @endif 
                                                        </div>
                                                    </div>
                                                @endif
                                            </div> 
                                        @endif  
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@else
    <div class="alert alert-danger"><strong>Oh snap!</strong> You are not a Store Designer Register <a href="store-subscribe" class="alert-link">Click here to apply</a> Enjoy.</div>
@endif
