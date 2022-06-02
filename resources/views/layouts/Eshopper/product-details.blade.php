<div class="product-details">
    <div class="col-sm-5">
      <div class="view-product">
          <img id="zoom_03" src="{{asset('img/product')}}{{'/'}}{{$product->image}}" alt="">
          <h3>ZOOM</h3>
      </div>
      <div id="similar-product" class="carousel slide">        
        <div class="carousel-inner">  
          @foreach($product->aditionalimages as $aditionalimage)
            @if ($countadditionalimage == 1)
              <div class="item active">	
            @endif
            <a href=""><img src="{{asset('img/product')}}{{'/'}}{{$aditionalimage->file}}" class="img-responsive" alt="" style="max-width:85px; heigth:auto;"></a>
            @if($countadditionalimage % 3 == 0 && $countadditionalimage >=3)
                </div>  
                @if($loop->remaining)
                  <div class="item">	
                @endif
            @endif
            @php $countadditionalimage ++; @endphp
          @endforeach
        </div>   
        <a class="left item-control" href="#similar-product" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="right item-control" href="#similar-product" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
    </div>
    <div class="col-sm-7">
        <div class="product-information">
            <h2>{{$product->name}}</h2>
            <p>{{$product->stylenumber}}</p>
            <p>
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
            </p>
            <br  style="float:none">
            <br  style="float:none">
            <p><b>Colors:</b> </p>
            <div id="child_product_color_div6" class="row">
              @foreach($childproducts as $childproduct)
                  <div id="child_product_{{$childproduct->id}}" class="color-{{$childproduct->color->id}}" onmouseover="display_child_product_image('{{asset('img/product')}}{{'/'}}{{$childproduct->image}}','{{url('/designstudio/p', $childproduct->slug)}}');"  style="border-radius: 50%;  width: 30px; height: 30px; border: 1px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px; float: left;"></div>   
              @endforeach
            </div>
            <br>
            <p><b>Availability:</b> In Stock</p>
            <p><b>Condition:</b> New</p>
            <p><b>Brand:</b> {{$product->brand}}</p>
            <span>
              @if($childproducts->count() > 0)
              <a href="{{url('/designstudio/p',$childproducts[0]->slug)}}"  id="go_designstudio" class="btn btn-fefault cart">
                <i class="fa fa-shopping-cart"></i>
                Take to Studio
              </a>
              @endif
            </span>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li>
                      @guest
                          <a href=""><i class="fa fa-heart"></i>{{$product->favorite_to_users->count()}} favorite</a>
                      @else
                          <a href="{{ route('products.favorite', $product->id) }}"  onclick="event.preventDefault(); document.getElementById('favorite-form-{{ $product->id }}').submit();"
                              class="{{ !Auth::user()->favorite_products->where('pivot.product_id',$product->id)->count()  == 0 ? 'favorite_products' : ''}}">
                              <i class="fa fa-heart"></i>{{ $product->favorite_to_users->count() }} favorite</a>

                          <form id="favorite-form-{{ $product->id }}" method="POST" action="{{ route('products.favorite', $product->id) }}" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      @endguest
                    </li>
                    <li><a href="javascript:void(0)"><i class="fa fa-eye"></i>{{$product->view_count}} views</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="category-tab shop-details-tab">
  <div class="col-sm-12">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#details" data-toggle="tab">Details</a></li>
      <li class=""><a href="#reviews" data-toggle="tab">Reviews ({{$product->comments->count()}})</a></li>
    </ul>
  </div>
  <div class="tab-content">
    <div class="tab-pane fade active in" id="details">
      <div role="tabpanel" class="tab-pane active" id="description">
          <p>{!!$product->description!!}</p>
      </div>
    </div>
    
    
    
    <div class="tab-pane fade" id="reviews">
      <div class="col-sm-12">
        @foreach ($product->comments as $comment)
          @if($comment->is_approved == 'Approved')
            <ul>
              <li><a href=""><i class="fa fa-user"></i> {{$comment->user->firstname}} {{$comment->user->lastname}}</a></li>
              <li><a href=""><i class="fa fa-clock-o"></i>{{$comment->created_at->format('h:m a')}}</a></li>
              <li><a href=""><i class="fa fa-calendar-o"></i>{{$comment->created_at->format('M d, Y')}}</a></li>
            </ul>
            <p>{{$comment->text}}</p>
          @endif
         @endforeach 
         @auth
        <p><b>Write Your Review</b></p>
        <form role="form" method="POST" action="/admin/comments/sendproductcomment" enctype="multipart/form-data" class="colors_form" novalidate="novalidate">
          {{csrf_field()}}
          <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
          <input type="hidden" id="product_id" name="product_id" value="{{$product->id}}">
          <span>
            <input type="text" name="name" value="{{Auth::user()->firstname}} {{Auth::user()->lastname}}" readonly>
            <input type="text" name="email" value="{{Auth::user()->email}}" readonly>
          </span>
          <textarea class="custom-textarea" placeholder="Your comment here..." id="text" name="text"></textarea>
          <b class="pull-left">Rating: </b><fieldset class="rating">
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
          <button type="submit" class="btn btn-default pull-right">
            Submit
          </button>
        </form>
        @endauth
      </div>
    </div>
    
  </div>
</div>
<div class="recommended_items">
  <h2 class="title text-center">recommended items</h2>
  
<div id="recommended-item-carousel" class="carousel slide">
  <div class="carousel-inner">
    @foreach($product->relatedproducts as $relatedproduct)
      @if ($countrelatedproduct == 1)
          <div class="item active">	
      @endif	
        <div class="col-sm-4">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="{{asset('img/product')}}{{'/'}}{{$relatedproduct->image}}" alt="">
                <h2>${{$relatedproduct->price}}</h2>
                <p>{{$relatedproduct->name}}</p>
                <a href="{{route('single-product', $relatedproduct->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View</a>
              </div>
            </div>
          </div>
        </div>
        @if($countrelatedproduct % 3 == 0 && $countrelatedproduct >=3)
            </div>  
            @if($loop->remaining)
              <div class="item">	
            @endif	
        @endif
        @php $countrelatedproduct ++; @endphp
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
