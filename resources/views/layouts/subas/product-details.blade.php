<!-- single-product-area start -->
<div class="single-product-area mb-80">
    <div class="row">
        <!-- imgs-zoom-area start -->
        <div class="col-md-5 col-sm-5 col-xs-12">
            <div class="imgs-zoom-area">
                <img id="zoom_03" src="{{asset('img/product')}}{{'/'}}{{$product->image}}" data-zoom-image="{{asset('img/product')}}{{'/'}}{{$product->image}}" alt="">
                <div class="row">
                    <div class="col-xs-12">
                        <div id="gallery_01" class="carousel-btn slick-arrow-3 mt-30">
                          <div class="p-c">
                              <a href="javascript:void(0)" data-image="{{asset('img/product')}}{{'/'}}{{$product->image}}" data-zoom-image="{{asset('img/product')}}{{'/'}}{{$product->image}}">
                                  <img class="zoom_03" src="{{asset('img/product')}}{{'/'}}{{$product->image}}" alt="">
                              </a>
                          </div>
                          @if($product->aditionalimages->count() > 0)
                            @foreach($product->aditionalimages as $aditionalimage)
                                <div class="p-c">
                                    <a href="javascript:void(0)" data-image="{{asset('img/product')}}{{'/'}}{{$aditionalimage->file}}" data-zoom-image="{{asset('img/product')}}{{'/'}}{{$aditionalimage->file}}">
                                        <img class="zoom_03" src="{{asset('img/product')}}{{'/'}}{{$aditionalimage->file}}" alt="">
                                    </a>
                                </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- imgs-zoom-area end -->
        <!-- single-product-info start -->
        <div class="col-md-7 col-sm-7 col-xs-12"> 
            <div class="single-product-info">
                <h3 class="text-black-1">{{$product->name}}</h3>
                <h6 class="brand-name-2">{{$product->brand}}</h6>
                <!--  hr -->
                <hr>
                <!-- single-pro-color-rating -->
                <div class="single-pro-color-rating clearfix">
                    <div class="sin-pro-color">
                        <p class="color-title">Color</p>
                        <div class="">
                            <ul>
                                @if($childproducts->count() > 0)
                                    @foreach($childproducts as $childproduct)
                                        @if($childproduct->status == 'Enable' && $childproduct->visibility == 'Visible' )
                                            <li>
                                                <div id="child_product_{{$childproduct->id}}" class="color-{{$childproduct->color->id}}" onmouseover="display_child_product_image('{{asset('img/product')}}{{'/'}}{{$childproduct->image}}','{{url('/designstudio/p', $childproduct->slug)}}');"  style="border-radius: 50%;  width: 30px; height: 30px; border: 1px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px; float: left;"></div>   
                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- hr -->
                <hr>
                <!-- Ratings stars-->
                <div class="plus-minus-pro-action clearfix">
                    <div class="sin-pro-action">
                    <div class="pro-rating sin-pro-rating f-right" style="display:none;">
                        <a href="javascript:void(0)" tabindex="0"><i class="zmdi zmdi-star" style="font-size: xx-large;"></i></a>
                        <a href="javascript:void(0)" tabindex="0"><i class="zmdi zmdi-star" style="font-size: xx-large;"></i></a>
                        <a href="javascript:void(0)" tabindex="0"><i class="zmdi zmdi-star"  style="font-size: xx-large;"></i></a>
                        <a href="javascript:void(0)" tabindex="0"><i class="zmdi zmdi-star-half" style="font-size: xx-large;"></i></a>
                        <a href="javascript:void(0)" tabindex="0"><i class="zmdi zmdi-star-outline" style="font-size: xx-large;"></i></a>
                        <span class="text-black-5">({{$product->ratings->count()}} Rating)</span>
                    </div>
                <b class="pull-left">({{$product->ratings->count()}} Rating) </b>
                <br>
                <fieldset class="rating">
                    <input type="radio" {{$product->averageRating == 5 ? 'checked' : ''}} /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                    <input type="radio" {{$product->averageRating == 4.5 ? 'checked' : ''}}/><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                    <input type="radio" {{$product->averageRating == 4 ? 'checked' : ''}}/><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                    <input type="radio" {{$product->averageRating == 3.5 ? 'checked' : ''}}/><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                    <input type="radio" {{$product->averageRating == 3 ? 'checked' : ''}}/><label class = "full" for="star3" title="Meh - 3 stars"></label>
                    <input type="radio" {{$product->averageRating == 2.5 ? 'checked' : ''}}/><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                    <input type="radio" {{$product->averageRating == 2 ? 'checked' : ''}} /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                    <input type="radio" {{$product->averageRating == 1.5 ? 'checked' : ''}} /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                    <input type="radio" {{$product->averageRating == 1 ? 'checked' : ''}} /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                    <input type="radio" {{$product->averageRating == 0.5 ? 'checked' : ''}}/><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                </fieldset>
                </div>
                </div>
                <hr>
                <!-- plus-minus-pro-action -->
                <div class="plus-minus-pro-action clearfix">
                    <div class="sin-pro-action">
                        <ul class="action-button">
                            <li>
                                <a href="javascript:void(0)" title="{{$product->favorite_to_users->count()}} Favorite" tabindex="0"><i class="zmdi zmdi-favorite"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" title="{{$product->view_count}} view" tabindex="0"><i class="zmdi zmdi-eye"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- plus-minus-pro-action end -->
                <hr>
                <div>
                    @if($childproducts->count() > 0)
                    <a href="{{url('/designstudio/p',$childproducts[0]->id)}}"  id="go_designstudio" class="button extra-small button-black" tabindex="-1">
                        <span class="text-uppercase">Take to Studio</span>
                    </a>
                    @endif
                </div>
            </div>
        </div>
        <!-- single-product-info end -->
    </div>
    <!-- single-product-tab -->
    <div class="row">
        <div class="col-md-12">
            <!-- hr -->
            <hr>
            <div class="single-product-tab">
                <ul class="reviews-tab mb-20">
                    <li  class="active"><a href="#description" data-toggle="tab">description</a></li>
                    <li><a href="#reviews" data-toggle="tab">reviews({{$product->comments->count()}})</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="description">
                        <p>{!!$product->description!!}</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="reviews">
                        <!-- reviews-tab-desc -->
                        <div class="reviews-tab-desc">
                                @foreach ($product->comments as $comment)
                                @if($comment->is_approved == 'Approved')
                            <!-- single comments -->
                            <div class="media mt-30">
                                <div class="media-left">
                                    <a href="javascript:void(0)"><img class="media-object" src="{{asset('img/profile')}}{{'/'}}{{$comment->user->image}}" alt="review author"></a>
                                </div>
                                <div class="media-body">
                                    <div class="clearfix">
                                        <div class="name-commenter pull-left">
                                            <h6 class="media-heading"><a href="">{{$comment->user->firstname}} {{$comment->user->lastname}}</a></h6>
                                            <p class="mb-10">{{$comment->created_at->diffForHumans()}}</p>
                                        </div>
                                    </div>
                                    <p class="mb-0">{{$comment->text}}</p>
                                </div>
                            </div>
                            @endif
                            @endforeach 
                        </div>
                    </div>
                </div>
            </div>
            <!--  hr -->
            <hr>
            @auth
                <form role="form" method="POST" action="/admin/comments/sendproductcomment" enctype="multipart/form-data" class="colors_form" novalidate="novalidate">
                    {{csrf_field()}}
                    <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" id="product_id" name="product_id" value="{{$product->id}}">
                    <!-- leave your comment -->
                    <div class="leave-comment">
                        <h4 class="blog-section-title border-left mb-30">leave your comment</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" value="{{Auth::user()->firstname}} {{Auth::user()->lastname}}" readonly>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="email" value="{{Auth::user()->email}}" readonly>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="subject" style="display:none">
                            </div>
                            <div class="col-md-12">
                                <textarea class="custom-textarea" placeholder="Your comment here..." id="text" name="text"></textarea>
                            </div>
                            <div class="col-md-12">
                                <b class="pull-left">Rating: </b>
                                <fieldset class="rating">
                                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                    <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                    <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                    <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                    <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                    <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                </fieldset>
                            </div>
                        </div>
                        <button class="submit-btn-1 black-bg mt-30 btn-hover-2" type="submit">submit comment</button>
                    </div>
                    <!--  -->
                </form>
            @endauth
        </div>
    </div>
</div>
<!-- single-product-area end -->
<div class="related-product-area">
    <div class="row">
        <div class="col-md-12">
            <div class="section-title text-left mb-40">
                <h2 class="uppercase">related product</h2>
                <h6>There are many variations of passages of brands available,</h6>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="active-related-product">
            @foreach($product->relatedproducts as $relatedproduct)
              <!-- product-item start -->
              <div class="col-xs-12">
                  <div class="product-item">
                      <div class="product-img">
                          <a href="{{route('single-product', $relatedproduct->id)}}">
                              <img src="{{asset('img/product')}}{{'/'}}{{$relatedproduct->image}}" alt=""/>
                          </a>
                      </div>
                      <div class="product-info">
                          <h6 class="product-title">
                              <a href="{{route('single-product', $relatedproduct->id)}}">{{$relatedproduct->name}}</a>
                          </h6>
                          <div class="pro-rating">
                              <a href="javascript:void(0)"><i class="zmdi zmdi-star"></i></a>
                              <a href="javascript:void(0)"><i class="zmdi zmdi-star"></i></a>
                              <a href="javascript:void(0)"><i class="zmdi zmdi-star"></i></a>
                              <a href="javascript:void(0)"><i class="zmdi zmdi-star-half"></i></a>
                              <a href="javascript:void(0)"><i class="zmdi zmdi-star-outline"></i></a>
                          </div>
                          <h3 class="pro-price">$ {{$relatedproduct->price}}</h3>
                          <ul class="action-button">
                            <li>
                                <a href="javascript:void(0)" title="{{$relatedproduct->favorite_to_users->count()}} Favorite" tabindex="0"><i class="zmdi zmdi-favorite"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" title="{{$relatedproduct->view_count}} view" tabindex="0"><i class="zmdi zmdi-eye"></i></a>
                            </li>
                          </ul>
                      </div>
                  </div>
              </div>
              <!-- product-item end -->
            @endforeach
        </div>   
    </div>
</div>