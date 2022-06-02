<div class="container_fixed02">
    <!-- Screen Printing -->
    <div class="screen_printing" style="margin-top:100px;">
        <h1  style="width:auto; border-bottom:none;">GET A QUICK QUOTE</h1>

        <div id="main-get-quote">
            <p style="color: #4598ba; font-size: 14px; margin-bottom: 0px; text-transform: uppercase;">STEP 1: SELECT PRODUCT</p>
            <p> <b>Current Product:</b> <span id="currentproductgetquote">{{$product->name}}</span> <span style="cursor: pointer; color: #4598ba;" onclick="displayproductgetquote();">(Change Product)</span></p>
            <p style="color: #4598ba; font-size: 14px; margin-bottom: 0px; text-transform: uppercase;">STEP 2: SELECT PRODUCT COLOR</p>
            <div class="sin-pro-color">
                <p class="color-title">No minimum</p>
                <div id="product-color">
                    <ul>
                        @foreach($childproducts as $childproduct)
                          @if ( $childproduct->min_quantity == 1)
                              @if($loop->first)
                                  <li>
                                      <div id="price-quote-product-color{{$childproduct->id}}" class="block animate  color-{{$childproduct->color->id}}" onclick=" setactivecolor(this);  setpricequoteproductcolor('{{$childproduct->name}}', '{{$childproduct->id}}');"  style="border-radius: 50%;  width: 30px; height: 30px; border: 1px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px; float: left;"></div>
                                  </li>
                              @else
                                  <li>
                                      <div id="price-quote-product-color{{$childproduct->id}}" class="block  color-{{$childproduct->color->id}}" onclick=" setactivecolor(this);  setpricequoteproductcolor('{{$childproduct->name}}', '{{$childproduct->id}}');"  style="border-radius: 50%;  width: 30px; height: 30px; border: 1px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px; float: left;"></div>
                                  </li>
                              @endif
                          @endif
                        @endforeach
                   </ul>
                </div>
                <br>
                <br>
                <p class="color-title">6 Piece minimum</p>
                <div id="product-color">
                    <ul>
                        @foreach($childproducts as $childproduct)
                          @if ( $childproduct->min_quantity != 1)
                              @if($loop->first)
                                  <li>
                                      <div id="price-quote-product-color{{$childproduct->id}}" class="block animate  color-{{$childproduct->color->id}}" onclick=" setactivecolor(this);  setpricequoteproductcolor('{{$childproduct->name}}', '{{$childproduct->id}}');"  style="border-radius: 50%;  width: 30px; height: 30px; border: 1px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px; float: left;"></div>
                                  </li>
                              @else
                                  <li>
                                      <div id="price-quote-product-color{{$childproduct->id}}" class="block  color-{{$childproduct->color->id}}" onclick=" setactivecolor(this);  setpricequoteproductcolor('{{$childproduct->name}}', '{{$childproduct->id}}');"  style="border-radius: 50%;  width: 30px; height: 30px; border: 1px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px; float: left;"></div>
                                  </li>
                              @endif
                          @endif
                        @endforeach
                   </ul>
                </div>
            </div>
            <br>
            <br>
            Current Product Color: <span id="currentcolorname"> {{$product->color->name}}  </span>
            <br>
            <hr align="center" style="margin-bottom: 10px; margin-top: 10px; background-color: #4598ba; height: 1px; border: 0;">
            <br>
            <div id="shirt-quantity">
                <p style="color: #4598ba; font-size: 14px; margin-bottom: 0px; text-transform: uppercase;">STEP 3:ENTER SHIRT QUANTITY</p>
                <div style="display: inline-block; margin-bottom: 15px;">
                    <div class="row">
                        @foreach($product->parent->sizes as $size)
                            <div class="col-sm-1">
                                <div class="orm-inline" style="-webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_XS">
                                    <label for="{{$size->name}}" class="sizes">{{$size->name}}</label>
                                    <input type="number" onkeypress="validate(event);" class="form-control" id="{{$size->name}}" name="{{$size->name}}" oninput="getquotesetsize(this);">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <br>
            <hr align="center" style="margin-bottom: 10px; margin-top: 10px; background-color: #4598ba; height: 1px; border: 0;">
            <br>
            <div id="number-color">
                <p style="color: #4598ba; font-size: 14px; margin-bottom: 0px; text-transform: uppercase;">STEP 4: ENTER NUMBER OF INK COLORS IN YOUR DESIGN</p>
                <div class="row">
                    @foreach($product->sides as $side)
                        <div class="col-sm-3">
                            <label for="{{$side->slug}}">{{$side->name}}</label>
                            <select class="form-control" id="{{$side->slug}}" name="{{$side->slug}}" onchange="getquotesetside(this);">
                                <option title="0" value="0" selected="">0</option>
                                <option title="1" value="1">1</option>
                                <option title="2" value="2">2</option>
                                <option title="3" value="3">3</option>
                                <option title="4" value="4">4</option>
                                <option title="5" value="5">5</option>
                                <option title="6" value="6">6</option>
                                <option title="7" value="7">7</option>
                                <option title="8" value="8">8</option>
                            </select>
                        </div>
                    @endforeach
                </div>
            </div>
            <br>
            <hr align="center" style="margin-bottom: 10px; margin-top: 10px; background-color: #4598ba; height: 1px; border: 0;">
            <br>
            <div id="get-quote">
                <h1  style="width:auto; border-bottom:none; text-transform: uppercase;">Your All Inclusive Pricing</h1>
                <br>
                <div class="row text-center">
                    <div class="col-md-6" style="border-right: 1px solid #6d6f71;">
                        <h3 id="itemPriceLabel" style="visibility: visible; display: block;"><b>Price per item: </b>$ <span id="itemPrice" style="color: rgb(92, 184, 92); visibility: visible; display: inline;">$0.00</span> </h3>
                        <h3 id="numOfShirtsLabel" style="visibility: visible;"> <b>Quantity:</b> <span style="color: #5cb85c;"> <span id="itemNumOfShirt"></span> item(s)</span></h3>
                        <h3 id="itemTotalLabel" style="visibility: visible;"><b>Total: </b>$ <span id="itemTotal" style="color: rgb(92, 184, 92); visibility: visible;">$0.00</span></h3>
                    </div>
                    <div class="col-md-6">
                        <h3><strong>FREE Shipping</strong></h3>
                        <h5>Guaranteed by <span id="freeshippingquote" name="freeshippingquote" style="color: #5bc0de;"></span></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                    <center>
                        <a class="design_btn" href="http://vividcustoms.test:8080/designstudio">Start Designing</a>
                    </center>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
            </div>
        </div>

        <div id="product-list-get-quote" style="display:none;">
          <productlist3></productlist3>
        </div>
    </div>
</div>
