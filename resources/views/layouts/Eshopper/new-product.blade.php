@if($newproduct)
<h2 class="title text-center">Coming soon</h2>
<div class="product-details">
    <div class="col-sm-5">
      <div class="view-product">
          <img id="zoom_03" src="{{asset('img/product')}}{{'/'}}{{$newproduct->image}}" alt="" style="height: auto !important;">
          <h3>ZOOM</h3>
          <img src="images/home/new.png" class="new" alt="" style="width: 63px; height: auto; border: 0px;">
      </div>
      <div id="similar-product" class="carousel slide" data-ride="carousel">        
          <div class="carousel-inner">  
             
                <div class="item active">
                  <a href=""><img src="{{asset('img/product')}}{{'/'}}{{$newproduct->frontimage}}" class="img-responsive" alt="" style="max-width:85px; heigth:auto;"></a>
                  <a href=""><img src="{{asset('img/product')}}{{'/'}}{{$newproduct->rightimage}}" class="img-responsive" alt="" style="max-width:85px; heigth:auto;"></a>
                  <a href=""><img src="{{asset('img/product')}}{{'/'}}{{$newproduct->backimage}}" class="img-responsive" alt="" style="max-width:85px; heigth:auto;"></a>
                  <a href=""><img src="{{asset('img/product')}}{{'/'}}{{$newproduct->leftimage}}" class="img-responsive" alt="" style="max-width:85px; heigth:auto;"></a>
                </div>
          </div>     
      </div>
    </div>
    <div class="col-sm-7">
        <div class="product-information">
            <h2>{{$newproduct->name}}</h2>
            <p>{{$newproduct->stylenumber}}</p>
            <p><b>Availability:</b> In Stock</p>
            <p><b>Condition:</b> New</p>
            <p><b>Brand:</b> {{$newproduct->brand}}</p>
            <p><b>Description:</b></p>
            <p>{!!$newproduct->description!!}</p>
        </div>
    </div>
</div>
@endif
