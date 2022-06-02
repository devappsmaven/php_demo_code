
<style>
.loader{ position: absolute; top: 0 !important; bottom: 0 !important; left: 0 !important; right: 0 !important; background: url("/img/icon/loading.gif") 50% 50% no-repeat ; z-index: 99; width: 50% !important; height: 50% !important; margin: auto !important;border-radius: 50% !important;}

.take-studio-btn {
    border-radius: 30px;
    background-color: #00BBEA;
    color: white;
    font-weight: bold;
    text-transform: capitalize;
    margin-top: 15px;
    border: 0px;
    padding: 15px;
}
/* The container */
.radio-container {
	display: block;
	position: relative;
	padding-left: 35px;
	margin-bottom: 12px;
	cursor: pointer;
	font-size: 22px;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
  }
  
  /* Hide the browser's default radio button */
  .radio-container input {
	position: absolute;
	opacity: 0;
	cursor: pointer;
  }
  
  .checkmark {
	position: absolute;
	top: 0;
	left: 0;
	height: 25px;
	width: 25px;
	border-radius: 50%;
  }
  
  .radio-container:hover input ~ .checkmark {
	background-color: #2196F3;
  }
    
  .checkmark:after {
	content: "";
	position: absolute;
	display: none;
  }
  
  .radio-container input:checked ~ .checkmark:after {
	display: block;
  }
  
  .radio-container .checkmark:after {
	  top: 8px;
	  left: 8px;
	  width: 8px;
	  height: 8px;
	  border-radius: 50%;
	  background: #eeeeee;
  }


.align-items-center {
    -webkit-box-align: center!important;
    -ms-flex-align: center!important;
    align-items: center!important;
}

.justify-content-between {
    -webkit-box-pack: justify!important;
    -ms-flex-pack: justify!important;
    justify-content: space-between!important;
}

.d-flex {
    display: -webkit-box!important;
    display: -ms-flexbox!important;
    display: flex!important;
}
/*.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0,0,0,.03);
    border-bottom: 1px solid rgba(0,0,0,.125);
}

.mb-0, .my-0 {
    margin-bottom: 0!important;
    margin-top: 0;
}

.card-body {
    -webkit-box-flex: 1; 
    -ms-flex: 1 1 auto;
     flex: 1 1 auto; 
     padding: 1.25rem; 
}*/


ul.pagination {
    display: inline-block;
    padding: 0;
    margin: 0;
}

ul.pagination li {display: inline;}

ul.pagination li a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
}

/*.card-body ul li {
	font-family: 'Conv_ProximaNova-Regular';
}

ul,
li {
	margin: 0;
	padding: 0;
	list-style: none
}

.product_printing {
	float: left;
	width: 100%;
	text-align: center;
	margin-top: 50px;
}
.product_printing img {
	max-width: 85%;
	height: auto;
	width: auto;
	vertical-align: middle;
	border: none;
	outline: none;
}

.printing_heading h4 {
	font-family: 'Conv_Proxima Nova Bold';
	font-style: normal;
	font-size: 18px;
	line-height: 20px;
	text-transform: uppercase;
	color: #000000;
	margin-top: 8px;
	margin-bottom: 5px;
	height: 36px;
}

.printing_heading span {
	font-style: normal;
	font-weight: normal;
	font-size: 13px;
	line-height: 20px;
	text-transform: uppercase;
	color: #7d7d7d;
	font-family: 'Arial';
  font-weight: 700;
}

.pink_color {
	text-transform: uppercase;
	color: #E63D90;
	padding-right: 5px;
	font-family: 'Conv_Proxima Nova Bold';
}

.black_color {
	text-align: center;
	text-transform: uppercase;
	color: #000000;
	font-family: 'Conv_Proxima Nova Bold';
}*/





/*.mySlides {display: none}
img {vertical-align: middle;}


.slideshow-container {
  max-width: 403.75px;
  position: relative;
  margin: auto;
}*/


.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}


.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

.product_sidebar{
    overflow-y: none;
    height: auto;
}

</style>
<template>

<div class="container-fluid">
    <div id="loaderproduct" class="loader" v-show="loading">
    </div>
    <section>
        <div class="row column_heading">
        <div class="col-lg-3 product_sidebar">
            <h5> ALL PRODUCTS</h5>
            <br>
            <h5> PRICE QUOTE</h5>
            <div id="accordionpricequote" class="myaccordion">               
                <div class="card product_card">
                    <div>                        
                        <input id="price_quote_quantity" name="price_quote_quantity" type="number" style="border:none; border-bottom:1px solid #E63D90; width:50px; text-align: center; color: #22252C; font-size: 18px; font-family: 'Conv_ProximaNova-Regular';" v-bind:value="price_quote_quantity" required min="1">
                        <label for="price_quote_quantity" style="font-size: 18px; font-family: 'Conv_ProximaNova-Regular';">Quantity</label>
                    </div>
                    <div>                        
                        <input id="price_quote_front_color" name="price_quote_front_color" type="number" style="border:none; border-bottom:1px solid #E63D90; width:50px; text-align: center; font-size: 18px; font-family: 'Conv_ProximaNova-Regular';" v-bind:value="price_quote_front_color" required min="1" max="8">
                        <label for="price_quote_front_color" style="font-size: 18px; font-family: 'Conv_ProximaNova-Regular';">Color Front</label>
                    </div>
                    <div>                       
                        <input id="price_quote_back_color" name="price_quote_back_color" type="number" style="border:none; border-bottom:1px solid #E63D90; width:50px; text-align: center; font-size: 18px; font-family: 'Conv_ProximaNova-Regular';" v-bind:value="price_quote_back_color" required min="0" max="8"> 
                        <label for="price_quote_back_color" style="font-size: 18px; font-family: 'Conv_ProximaNova-Regular';">Color Back</label>
                    </div>
                    <button type="button" class="btn design_btn" style="border: 0px solid rgb(230, 61, 144);
    box-sizing: border-box;
    border-radius: 5px;
    background-color: rgb(230, 61, 144);
    padding: 5px;
    color: white;
    font-family: Conv_ProximaNova-Regular;
    width: 230px;
    text-transform: uppercase;
    font-size: 18px;
    font-weight: bold;
    float: left;
    margin-top: 9px;
    box-shadow: rgb(204, 204, 204) 0px 0px 1px;
    transition: all 0.5s ease-in-out 0s;
    cursor: pointer;
    text-decoration: none !important;color:white;" v-on:click="UpdatePrice();">Update Price</button>
                </div>
            </div>
            <br>
            <h5> CATEGORIES</h5>
            <div id="accordionproducts" class="myaccordion">
                <div class="card product_card"   v-for="category in categories" :key="category.id">
                    <div class="card-header" id="collapseOne">
                        <h2 class="mb-0">
                            <span class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseOne"   v-on:click="colapsemenu(this,category.slug);">
                                {{category.name}}
                                <span class="fa-stack fa-sm">
                                <i class="fas fa-stack-2x"></i>
                                <i class="fas fa-plus fa-stack-1x fa-inverse" v-bind:id="category.slug+'-icon'"></i>
                                </span>
                            </span>
                        </h2>
                    </div>
                    <div v-bind:id="category.slug" class="collapse" aria-labelledby="collapseOne" data-parent="#accordionproducts" style="display:none;">
                        <div class="card-body">
                            <ul v-for="(subcategory,indexsubcategory) in subcategories" :key="subcategory.id" >
                                <li v-if="subcategory.category_id === category.id">
                                    <input type="checkbox" v-bind:class="'category:' +category.slug" v-model="filtersSelectedCategory" :value="category.name+':'+subcategory.name" v-bind:id="subcategory.name"  v-on:change="ValidateSelectedAllCategory($event,category.id, category.name)" style="transform: scale(2);">
                                    <span style="color: #22252C; margin-left: 5px;">{{subcategory.name}}</span> 
                                </li>
                                <li v-if="indexsubcategory == subcategories.length-1">
                                    <input type="checkbox" v-bind:value="category.name+':View All'" v-bind:id="category.name+': View All'" v-on:change="SelectedAllCategory($event,category.id, category.name)" style="transform: scale(2);">
                                    <span style="color: #22252C; margin-left: 5px;">View All</span> 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div id="accordionbrands" class="myaccordion">
                <div class="card product_card">
                    <div class="card-header" id="collapseBrand">
                        <h5 class="mb-0">
                            <span class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseBrand" style="font-size: 24px; color: #22252C;font-family: 'Conv_Proxima Nova Bold';margin: 0;"   v-on:click="colapsemenu(this,'all-brands');">
                                <h5> ALL BRANDS</h5>
                                <span class="fa-stack fa-sm">
                                <i class="fas fa-stack-2x"></i>
                                <i class="fas fa-plus fa-stack-1x fa-inverse" id="all-brands-icon"></i>
                                </span>
                            </span>
                        </h5>
                    </div>
                    <div id="all-brands" class="collapse" aria-labelledby="collapseBrand" data-parent="#accordionbrands">
                        <div class="card-body">
                            <ul v-for="(brand, indexbrand) in brands" :key="brand.id">                               
                                <li>
                                    <input class="FilterBrand" type="checkbox" v-model="filtersSelectedBrand" :value="'Brand:'+brand.name" v-bind:id="brand.name" style="transform: scale(2);">
                                    <span style="color: #22252C; margin-left: 5px;"> {{brand.name}} </span>
                                </li>                                   
                                <li v-if="indexbrand == brands.length-1">
                                <input class="FilterBrand" type="checkbox" v-model="SelectedBrandAll" :value="'Brand:View All'" v-bind:id="'View All'" v-on:change="SelectedAllBrand" style="transform: scale(2);">
                                <span style="color: #22252C; margin-left: 5px;"> View All </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div id="accordioncolors" class="myaccordion"> 
                <div class="card product_card">
                    <div class="card-header" id="collapseColor">
                        <h5 class="mb-0">
                            <span class="d-flex align-items-center justify-content-between btn btn-link collapse show" data-toggle="collapse" data-target="#all-colors" aria-expanded="true" aria-controls="collapseColor" style="font-size: 24px; color: #22252C;font-family: 'Conv_Proxima Nova Bold';margin: 0;"   onclick="colapsemenu(this,'all-colors');">
                                ALL COLORS
                                <span class="fa-stack fa-sm">
                                <i class="fas fa-stack-2x"></i>
                                <i class="fas fa-minus fa-stack-1x fa-inverse" id="all-colors-icon"></i>
                                </span>
                            </span>
                        </h5>
                    </div>
                    <div id="all-colors" class="collapse show" aria-labelledby="collapseColor" data-parent="#accordioncolors">  
                        <div v-for="(familycolor, indexcolor) in familycolors" :key="familycolor.id">
                            <label class="radio-container" style="float: left; width: 20px;margin-top: 20px;">
                                <input class="FilterColor" type="radio" v-bind:id="familycolor.name" v-model="filtersSelectedColor" :value="'Color:'+familycolor.name">
                                <span class="checkmark" v-bind:style="'background-color:'+familycolor.hex+'; border: 1px solid #eeeeee;'"></span>
                            </label>
                            <label class="radio-container" style="float: left; width: 20px;margin-top: 20px;" v-if="indexcolor == familycolors.length-1">
                                <input class="FilterColor" type="radio" v-bind:id="'View All'"  v-model="filtersSelectedColor" value="Color:View All">
                                <span class="checkmark" style="background-image: linear-gradient(to right, red , orange, yellow, green,  blue,black, purple, pink, brown) !important;; border: 1px solid #eeeeee;"></span>
                            </label>
                        </div>
                        <br style="float:none !important">
                    </div>
                </div>
            </div>
            <br>
            <div id="accordionfabrics" class="myaccordion">
                <div class="card product_card">
                    <div class="card-header" id="collapseFabric">
                        <h5 class="mb-0">
                            <span class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#all-fabrics" aria-expanded="false" aria-controls="collapseFabric" style="font-size: 24px; color: #22252C;font-family: 'Conv_Proxima Nova Bold';margin: 0;"  v-on:click="colapsemenu(this,'all-fabrics');">
                                <h5> ALL FABRICS</h5>
                                <span class="fa-stack fa-sm">
                                <i class="fas fa-stack-2x"></i>
                                <i class="fas fa-plus fa-stack-1x fa-inverse" id="all-fabrics-icon"></i>
                                </span>
                            </span>
                        </h5>
                    </div>
                    <div id="all-fabrics" class="collapse" aria-labelledby="collapseFabric" data-parent="#accordionfabrics">
                        <div class="card-body">
                            <ul v-for="(fabric, indexfabric) in fabrics" :key="fabric.id">
                                <li>
                                    <input class="FilterFabric" type="checkbox" v-model="filtersSelectedFabric" :value="'Fabric:'+fabric.name" v-bind:id="fabric.name"  v-on:change="computedProducts" style="transform: scale(2);">
                                    <span style="color: #22252C; margin-left: 5px;"> {{fabric.name}} </span>
                                </li>       
                                <li  v-show="indexfabric == fabrics.length-1">
                                    <input class="FilterFabric" type="checkbox"  v-model="SelectedFabricAll" value="Fabric:View All" v-bind:id="'Fabric:View All'" v-on:change="SelectedAllFabric" style="transform: scale(2);">
                                    <span style="color: #22252C; margin-left: 5px;"> View All </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-9 col-sm-12 product_responsive" id="listproduct">
                <div class="row" v-show="filtersSelected.length > 0"> 
                        <div class="form-inline">
                            <h5>Sort By:</h5>                           
                            <select class="form-control"  v-on:click="sortBy(sortby);" v-model="sortby">
                                <option value="name">Name</option>
                                <option value="fabric">Fabric</option>
                                <option value="stylenumber">Stylenumber</option>
                                <option value="price">Price</option>
                                <option value="min_quantity">Min Quantity</option>
                                <option value="status">Status</option>
                                <option value="view_count">Views</option>
                            </select>
                            </div>
                    </div>
                <div class="row" v-show="filtersSelected.length > 0">
                <h5> Filters: </h5> 
                    <button type="button" class="btn product-filter" v-show="lessfilters == true"  v-for="(filter) in firstfiltersSelected" :key="'less'+filter">{{filter}} <span  class="close" style="margin-left: 3px; margin-top: -6px;"  v-on:click="removeFilter(filter)">&times;</span></button>
                    <button type="button" class="btn product-filter" v-show="lessfilters == false"  v-for="(filter) in filtersSelected" :key="'more'+filter">{{filter}} <span  class="close" style="margin-left: 3px; margin-top: -6px;"  v-on:click="removeFilter(filter)">&times;</span></button>
                    <button type="button" class="btn product-filter" v-show="lessfilters == true && (filtersSelected.length-firstfiltersSelected.length) > 0" v-on:click="showfilters('more')">+{{(filtersSelected.length-firstfiltersSelected.length)}}</button>
                    <button type="button" class="btn product-filter" v-show="lessfilters == false"  v-on:click="showfilters('less')">Show Less</button>
                    <button type="button" style="border: none ; text-decoration: underline ; display: inline-block; cursor:pointer; color: #211e22; background: #fff;" v-on:click="removeFilter('All')">Remove All <span class="close" style="margin-left: 3px; margin-top: -6px;">&times;</span></button>
                </div>  
                <div class="row" v-show="filtersSelected.length > 0">     
                    <div class="col-sm-4" style="margin-top: 20px; margin-bottom: 10px;"  v-for="product in filterProducts" :key="product.id">        
                        <div class="product_printing" style="margin-bottom: 10px;">
                            <a href="javascript:void(0)" v-on:click="viewsingleproduct(product);"> 
                                <img v-bind:src=" path + '/img/product/'+ product.image" alt="" title="" v-bind:id="'product-' + product.id"> </a>
                                <div class="printing_heading">
                                <a  href="javascript:void(0)" v-on:click="viewsingleproduct(product);"><h4  style="font-size:16px; border-bottom: none; line-height: 20px;">  {{product.name}}  </h4> </a>
                                <p> Brand:  {{product.brand}} </p>
                                <p> Sizes: {{product.sizes[0].name}} - {{product.sizes[product.sizes.length - 1].name}}</p>
                                <p> {{product.products.length}} colors | {{product.min_quantity == 6 ? 'Minimum 6' : 'No minimum'}} </p>
                            </div> 
                            <div class="printing_price">
                                <span class="pink_color" style="font-size:12px;">{{product.price_quote}}</span>                                                                  
                                <span class="black_color" style="font-size:12px;">QUANTITY  {{price_quote_quantity}}</span>
                            </div>
                        </div> 
                        <br>
                        <center>
                            <div style="padding-top: 10px; margin-right:0px;">
                                <div  v-for="productcolor in product.products" :key="productcolor.id" style="display: inline-flex;">
                                    <div v-if="filtersSelectedColor.indexOf('Color:'+productcolor.color.colorfamily) >= 0 || filtersSelectedColor.indexOf('Color:View All') >= 0" v-bind:class="'block  colour-colorDisplay  color-'+ productcolor.color_id"  v-bind:id="'productcolor-'+ productcolor.id"  v-on:mouseover="displayChildImage(productcolor);">
                                    </div>
                                </div>
                                
                            </div>                    
                        </center>
                    </div>
                </div>
                <br>        
                <div class="row" v-show="filterProducts.length > 0 && filtersSelected.length > 0">
                    <div class="col-sm-2" > 
                    </div>
                    <div class="col-sm-8" >
                        <paginate
                            :page-count="pageCount"
                            :page-range="3"
                            :margin-pages="1"
                            :click-handler="clickCallback"
                            :prev-text="'Prev'"
                            :next-text="'Next'"
                            :container-class="'pagination'"
                            :page-class="'page-item'">
                            <span slot="prevContent">Changed previous button</span>
                            <span slot="nextContent">Changed next button</span>
                            <span slot="breakViewContent">
                                <svg width="16" height="4" viewBox="0 0 16 4">
                                <circle fill="#999999" cx="2" cy="2" r="2" />
                                <circle fill="#999999" cx="8" cy="2" r="2" />
                                <circle fill="#999999" cx="14" cy="2" r="2" />
                                </svg>
                            </span>
                        </paginate>
                    </div>
                    <div class="col-sm-2" > 
                    </div>
                </div>
                <br>
                <div class="row"  v-show="filtersSelected.length == 0">            
                    <h3> Custom Apparel- Free Shipping & No Minimums </h3>
                    <div class="col-sm-6">
                        <a href="single-product.html">
                            <h4> Athletic </h4>
                            <img src="images/4343 1.png" class="full_width">
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="single-product.html">
                            <h4> Bags </h4>
                            <img src="images/dsdsd 1.png" class="full_width">
                        </a>
                    </div>
                </div>
                <div class="row"  v-show="filtersSelected.length == 0">
                    <div class="col-sm-4">
                        <a href="single-product.html">
                            <h4> Fit </h4>
                            <img src="images/fit 1.png" class="full_width">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="single-product.html" class="full_width">
                            <h4> Ladies </h4>
                            <img src="images/ladies 1.png" class="full_width">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="single-product.html">
                            <h4> Polos </h4>
                            <img src="images/polos 1.png" class="full_width">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="single-product.html">
                            <h4> T-Shirts </h4>
                            <img src="images/re 1.png" class="full_width">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="single-product.html">
                            <h4> Unisex-Mens </h4>
                            <img src="images/3232 1.png" class="full_width">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="single-product.html">
                            <h4> Work-Clothes </h4>
                            <img src="images/dsds 1.png" class="full_width">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 product_responsive" id="singleproduct">
                <a href="javascript: void(0)" v-on:click="viewproductlist()" style="font-size: 30px; color: rgb(230, 61, 144); float: right; font-weight: 700;line-height: 1;">
                    X
                </a>
                <div class="row" v-if="product">
                    <!-- column for pictures section -->
                    <div class="col-md-6 col-sm-12 slider_width">
                        <div class="clearfix">
                            <div class="slideshow-container">
                                <div class="mySlides" style="width: 403.75px; display:block;">
                                    <div class="numbertext">1 / {{product.sides.length + 1}}</div>
                                        <img v-bind:src="path + '/img/product/'+ product.image"  id="default-image-thumb">
                                    <div class="text">Main</div>
                                </div>
                                <div class="mySlides fade" v-for="(side,indexside)  in product.sides"  :key="'side'+side.id" style="width: 403.75px; display:none;">
                                    <div class="numbertext">{{indexside}} / {{product.sides.length + 1}}</div>
                                        <img v-bind:src="path + '/img/product/'+ side.image">
                                    <div class="text">{{side.name}}</div>
                                </div>    
                                <a class="prev" v-on:click="plusSlides(-1)" style="background: #00BBEA;
    width: 30px;
    height: 30px;
    border-radius: 20px;
    text-align: center;
    padding-top: 3px;
    padding-left: 8px;
    color: white;">&#10094;</a>
                                <a class="next" v-on:click="plusSlides(1)" style="background: #00BBEA;
    width: 30px;
    height: 30px;
    border-radius: 20px;
    text-align: center;
    padding-top: 3px;
    padding-left: 8px;
    color: white;">&#10095;</a>

                            </div>
                            <br>
                            <div style="text-align:center;     margin-top: 5px;
    transition-duration: 40ms;
    width: 511.438px;
    transform: translate3d(0px, 0px, 0px);">
                                 <span class="dot active" v-on:click="currentSlide(1)" style="width: 97px;" id="default-image">
                                    <img v-bind:src="path + '/img/product/'+ product.image">
                                </span>
                                <span class="dot" v-for="(side,indexside) in product.sides"  :key="side.id" v-on:click="currentSlide(indexside+2)" style="width: 97px;">
                                    <img v-bind:src="path + '/img/product/'+ side.image">
                                </span>
                            </div>
                            <!--<ul id="lightSlider">
                                <li v-bind:data-thumb="path + '/img/product/'+ product.image" id="default-image-thumb">
                                    <img v-bind:src="path + '/img/product/'+ product.image" id="default-image">
                                </li>
                                <li  v-for="side in product.sides"  :key="side.id" v-bind:data-thumb="path + '/img/product/'+ side.image">
                                    <img v-bind:src="path + '/img/product/'+ side.image">
                                </li>
                            </ul>-->
                        </div>
                    </div>
                    <!-- this is where i have to work for right section-->
                    <div class="col-md-6 col-sm-12">
                        <div class="product-heading">
                            <h5> {{product.name}}</h5>
                            <p> {{product.brand}} </p>
                            <div class="ratting_star">
                                <span v-bind:class="product.averageRating >= 1 ? 'fas fa-star' : 'far fa-star'"></span>
                                <span v-bind:class="product.averageRating >= 2 ? 'fas fa-star' : 'far fa-star'"></span>
                                <span v-bind:class="product.averageRating >= 3 ? 'fas fa-star' : 'far fa-star'"></span>
                                <span v-bind:class="product.averageRating >= 4 ? 'fas fa-star' : 'far fa-star'"></span>
                                <span v-bind:class="product.averageRating >= 5 ? 'fas fa-star' : 'far fa-star'"></span>
                            </div>
                            <div class="product_details">
                                <p> sizes:</p>
                                <span> {{product.sizes[0].name}} - {{product.sizes[product.sizes.length - 1].name}}</span>
                            </div>
                            <div class="product_details">
                                <p> fabric:</p>
                                <span>{{product.fabric}}  </span>
                            </div>
                            <div class="product_details">
                                <p> min.quantity:</p>
                                <span>  {{product.min_quantity}} </span>
                            </div>
                        <div class="product_details">
                                <p class="mt-1"> <i class="fab fa-gratipay heart_color"  v-bind:title="product.favorite_to_users.length"></i>
                                <i class="fas fa-eye eye_color" v-bind:title="product.view_count"></i>
                                </p>
                            </div>
                            <div class="product_details selected_color">
                                <p class="color_Select"> selected color:</p>                            
                                <div v-for="(childproduct, indexchildproduct) in product.products" :key="'selectedchildproduct'+childproduct.id">
                                    <div v-if="indexchildproduct == 0" id="single-product-selected-color" v-bind:class="'colour-colorDisplay color-'+childproduct.color.id"></div>
                                    <span v-if="indexchildproduct == 0" id="single-product-selected-name" style="display: inline-block"> {{childproduct.color.name}} </span>
                                </div>
                            </div>
                            color section
                            <div>
                                <div class="color_box">
                                    <h6> Choose a color and start designing:</h6>
                                    <div v-for="(childproduct, indexchildproduct) in product.products" :key="childproduct.id">
                                        <div  v-if="indexchildproduct == 0" v-bind:id="'price-quote-product-color'+childproduct.id" v-bind:class="'block animate colour-colorDisplay color-'+childproduct.color.id" v-on:click="setactivecolor($event,childproduct);" v-on:mouseover="displayChildImage(childproduct.image);"></div>
                                        <div  v-if="indexchildproduct > 0"  v-bind:id="'price-quote-product-color'+childproduct.id" v-bind:class="'block  colour-colorDisplay color-'+childproduct.color.id" v-on:click="setactivecolor($event,childproduct);" v-on:mouseover="displayChildImage(childproduct.image);"></div>
                                    </div>
                                </div>
                            </div>
                            <a v-if="product.products.length > 0"  id="take-to-studio" class="btn btn-info take-studio-btn" tabindex="-1" style="">
                                <span class="text-uppercase">START DESIGNING</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row container" v-if="product">
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active " id="home-tab" data-toggle="tab" href="#DESCRIPTION" role="tab" aria-controls="home"
                                aria-selected="true">DESCRIPTION</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link description-head" id="profile-tab" data-toggle="tab" href="#REVIEWS" role="tab" aria-controls="profile"
                                aria-selected="false">REVIEWS(0)</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active description-tab back-color" id="DESCRIPTION" role="tabpanel" aria-labelledby="home-tab">
                                
                                <p>
                                    <span v-html="product.description"></span>
                                </p>
                            </div>
                            <div class="tab-pane fade back-color"  id="REVIEWS" role="tabpanel" aria-labelledby="profile-tab"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

</template>

<script>

import Paginate from 'vuejs-paginate'
Vue.component('paginate', Paginate)

export default {
    data() {
        return {
            products: [],
            categories: [],
            subcategories: [],
            childproducts: [],
            filterProducts: [],
            filterProductsPaginate: [],
            firstfiltersSelected: [],
            familycolors: [],
            filtersSelected: [],
            filtersSelectedCategory: [],
            filtersSelectedBrand: [],
            filtersSelectedFabric: [],
            filtersSelectedColor: '',
            brands:[],
            fabrics:[],
            urlProducts : window.location.origin + '/vivid_test/api/productenablegrid',
            urlCategories : window.location.origin + '/vivid_test/api/productcategoryenable',
            urlSubcategories : window.location.origin + '/vivid_test/api/productsubcategoryenable',
            urlChildProducts : window.location.origin + '/vivid_test/api/childproducts',
            urlFamilyColors: window.location.origin + '/vivid_test/api/familycolorenable',
            urlBrands: window.location.origin + '/vivid_test/api/brandenable',
            urlFabric: window.location.origin + '/vivid_test/api/fabric',
            pagination: [],
            product:'',
            search:'',
            sortby:'',
            path: window.location.origin + '/vivid_test',
            price_quote_quantity: 100,
            price_quote_front_color: 1,
            price_quote_back_color: 0,
            loading: true,
            currentmenu: '',
            collapsemenu: true,
            lessfilters: true,    
            SelectedFabricAll: false,
            SelectedBrandAll: false, 
            itemperpage: 18,
            pageNumber: 1,  
            slideIndex: 1,
        }
    },
    mounted(){
        loading: true,
        this.getProducts();
        this.getFamilyColors();
        this.getBrands();
        this.getFabric();
        this.getCategories();
        this.getSubCategories();
        this.viewproductlist();
        this.loadproductquote();
    },
    computed:{ 
        pageCount(){
            let l = this.filterProductsPaginate.length,
                s = this.itemperpage;
            return Math.ceil(l/s);
        }, 
        computedProducts: function () {
            this.loading = true;
            this.filtersSelected = [];     
         
            this.filtersSelectedFabric.forEach(element => {
                this.filtersSelected.push(element);
            });
            
            if(this.filtersSelectedFabric.length == this.fabrics.length)
            {
                this.SelectedFabricAll = true;
            }
            else
            {
                this.SelectedFabricAll = false;
            }

            this.filtersSelectedCategory.forEach(element => {
                this.filtersSelected.push(element);
            });
           
            if(this.filtersSelectedColor != null && this.filtersSelectedColor != '')
            {
                    this.filtersSelected.push(this.filtersSelectedColor);
            }

            this.filtersSelectedBrand.forEach(element => {
                this.filtersSelected.push(element);
            });

            if(this.filtersSelectedBrand.length == this.brands.length)
            {
                this.SelectedBrandAll = true;
            }
            else
            {
                this.SelectedBrandAll = false;
            }

            this.firstfiltersSelected = this.filtersSelected.slice(0, 3);
            

            this.filterProducts =  this.products.filter((item) => {
                return (this.search.length === 0 || item.name.includes(this.search)) &&
                (this.filtersSelectedFabric.length === 0 || this.filtersSelectedFabric.includes('Fabric:' + item.fabric)) &&
                (this.filtersSelectedCategory.length === 0 || this.includesCategory(this.filtersSelectedCategory,item.categories)) &&
                (this.filtersSelectedColor.length === 0 || this.includesColor(this.filtersSelectedColor,item)) &&
                (this.filtersSelectedBrand.length === 0 || this.filtersSelectedBrand.includes('Brand:' + item.brand))
            });
            
            this.filterProductsPaginate =  this.filterProducts;
            if(this.pageNumber > this.pageCount)
            {
                this.pageNumber = 1;
            }
            this.clickCallback(this.pageNumber);
            this.viewproductlist();
            this.loading = false;
        }
    },
    methods:{ 
        clickCallback: function(pageNumber)
        { 
            this.pageNumber = pageNumber;
            const start = (pageNumber-1) * this.itemperpage,
                end = start + this.itemperpage;
            let tmp = [];
            tmp = this.filterProductsPaginate;
            this.filterProducts = [];
            this.filterProducts = tmp.slice(start, end);
        },
        SetChangeProduct: function()
        {
            changeproduct(product.id);
        },
        SelectedAllFabric: function() {
            this.filtersSelectedFabric = [];
            if (this.SelectedFabricAll) {
                for( var i = 0; i < this.fabrics.length; i++)
                {
                   this.filtersSelectedFabric.push('Fabric:' + this.fabrics[i].name);
                }
            }
        },
        ValidateSelectedAllCategory: function(event, id, name)
        {            
            document.getElementById(name + ":View All").checked = this.subcategories.filter(obj => obj.category_id == id).every(i => this.filtersSelectedCategory.includes(name + ':' + i.name));
           
        },
        SelectedAllCategory: function(event, id, name)
        {            
            if(event.target.checked)
            {
                for( var i = 0; i < this.subcategories.length; i++)
                {                    
                    if (id == this.subcategories[i].category_id && !this.filtersSelectedCategory.includes(name + ':' + this.subcategories[i].name)) 
                    {
                        this.filtersSelectedCategory.push(name + ':' + this.subcategories[i].name);
                    }
                }                
            }
            else
            {
                for( var i = 0; i < this.subcategories.length; i++)
                {
                    if (id == this.subcategories[i].category_id && this.filtersSelectedCategory.includes(name + ':' + this.subcategories[i].name)) 
                    {
                        this.filtersSelectedCategory.splice(this.filtersSelectedCategory.indexOf(name + ':' + this.subcategories[i].name),1); 
                    }
                }
            }
           
        },
        SelectedAllBrand: function() {
            this.filtersSelectedBrand = [];
            if (this.SelectedBrandAll) {
                for( var i = 0; i < this.brands.length; i++)
                {
                   this.filtersSelectedBrand.push('Brand:' + this.brands[i].name);
                }
            }
        },
        async getFamilyColors()
        {
            await axios.get(this.urlFamilyColors).then(response => {
                this.familycolors = response.data;
            });
        },
        showfilters: function(type)
        {
            if(type == 'more')
            {
                this.lessfilters = false;
            }
            else
            {
                this.lessfilters = true;
            }
        },
        includesCategory(source, target)
        {
            if(source.length > 0 && target.length > 0)
            {
                for( var i = 0; i < target.length; i++)
                {
                    if(source.includes(target[i].category))
                    {
                        return true;
                    }
                }
                return false;
            }
            else
            {
                return false;
            }
        },
        includesColor(source, target)
        {
            if(target.products.length > 0)
            {
                for( var i = 0; i < target.products.length; i++)
                {
                    if(source === "Color:" + target.products[i].color.colorfamily || source === "Color:View All")
                    {
                        target.image=target.products[i].image;
                        return true;
                    }
                }
                return false;
            }
            else
            {
                return false;
            }
        },
        removeFilter: function(filterelement)
        {
           
            if(filterelement == 'All')
            {
                this.firstfiltersSelected = [];
                this.filtersSelected = [];
                this.filtersSelectedCategory = [];
                this.filtersSelectedBrand = [];
                this.filtersSelectedFabric = [];
                this.filtersSelectedColor = [];
            }
            else
            {
                if (this.filtersSelectedCategory.includes(filterelement)){
                    this.filtersSelectedCategory.splice(this.filtersSelectedCategory.indexOf(filterelement), 1);                    
                }
                else if (this.filtersSelectedBrand.includes(filterelement)){
                    this.filtersSelectedBrand.splice(this.filtersSelectedBrand.indexOf(filterelement), 1);                    
                }
                else if (this.filtersSelectedFabric.includes(filterelement)){
                    this.filtersSelectedFabric.splice(this.filtersSelectedFabric.indexOf(filterelement), 1);                    
                }
                else if (this.filtersSelectedColor == filterelement){
                    this.filtersSelectedColor = '';                    
                }
                this.filtersSelected.splice(this.filtersSelected.indexOf(filterelement), 1);
                this.firstfiltersSelected = this.filtersSelected.slice(0, 3);
            }
        },
        async getBrands()
        {
            await axios.get(this.urlBrands).then(response => {
                this.brands = response.data;
            });
        },
        async getFabric()
        {
            await axios.get(this.urlFabric).then(response => {
                this.fabrics = response.data;
            });
        },
        async getCategories()
        {
            await axios.get(this.urlCategories).then(response => {
                this.categories = response.data;
            });
        },
        async getSubCategories()
        {
            await axios.get(this.urlSubcategories).then(response => {
                this.subcategories = response.data;
            });
        },
        async getProducts()
        {
            this.loading= true;
            let $this = this
            await axios.get(this.urlProducts).then(response => {
                this.products = response.data;
                this.product = this.products[0];
                
                this.loadproductquote();
            });
        },
        async getChildProducts(idproduct)
        {
            let $this = this
            await axios.get(this.urlChildProducts + '/' + idproduct).then(response => {
                this.childproducts = response.data;
            });
        },
        loadproductquote: function()
        {          
            for (let index = 0; index < this.products.length; index++) {
                const element = this.products[index];
               
                 $.ajax({
                     type:'POST',
                    dataType: 'json',
                    data: {
                        idproduct: element.id,
                        price_quote_quantity: this.price_quote_quantity,
                        price_quote_front_color: this.price_quote_front_color,
                        price_quote_back_color: this.price_quote_back_color
                    }, 
                    url: window.location.origin + '/vivid_test/api/productpricequote',

                    //if received a response from the server
                    success: function( datas, textStatus, jqXHR) {
                        element.price_quote = "$ " + datas.toFixed(2) + " each -";
                    },
                    //If there was no resonse from the server
                    error: function(jqXHR, textStatus, errorThrown){
                        element.price_quote = "$ 0.00 each -";
                    },
                    //capture the request before it was sent to server
                    beforeSend: function(jqXHR, settings){
                        element.price_quote = 'calc...';
                    },
                    //this is called after the response or error functions are finished
                    //so that we can take some action
                    complete: function(jqXHR, textStatus){

                    }
                }); 
            }
            this.loading = false;
            this.viewproductlist();
        },
        getdataproductprice: function(value){
            $.ajax({
                    type:'POST',
                    dataType: 'json',
                    data: {
                        idproduct: value.id,
                        price_quote_quantity: this.price_quote_quantity,
                        price_quote_front_color: this.price_quote_front_color,
                        price_quote_back_color: this.price_quote_back_color
                    },
                    url: window.location.origin + '/vivid_test/api/productpricequote',
                    success:function(data)
                    {
                        return "$ " + data + " each -";
                    }
                });
        },
        sortBy(prop)
        {
            this.sortby = prop;
            this.filterProducts.sort((a,b) => a[prop] < b[prop] ? -1 : 1)
        },
        displayfilters()
        {
            if(this.isMobile())
            {
                document.getElementById("filters-colum").style.display = 'block';
                document.getElementById("btn-done").style.display = 'block';
                document.getElementById("data-colum").style.display = 'none';
                document.getElementById("sort-by").style.display = 'none';
            }
        },
        displaysortby()
        {
            if(this.isMobile())
            {
                document.getElementById("filters-colum").style.display = 'none';
                document.getElementById("btn-done").style.display = 'block';
                document.getElementById("data-colum").style.display = 'none';
                document.getElementById("sort-by").style.display = 'block';
            }
        },
        isMobile()
        {
            if (navigator.userAgent.match(/Android/i)
            ||
            navigator.userAgent.match(/webOS/i)
            ||
            navigator.userAgent.match(/iPhone/i)
            ||
            navigator.userAgent.match(/iPad/i)
            ||
            navigator.userAgent.match(/iPod/i)
            ||
            navigator.userAgent.match(/BlackBerry/i)
            ||
            navigator.userAgent.match(/Windows Phone/i)
            )
            {
                return true;
            }
            else
            {
                return false;
            }
        },
        viewsingleproduct(element)
        {
            if(parent.indesignstudio)
            {
                document.getElementById('listproduct').style.display = 'none';
                document.getElementById('singleproduct').style.display = 'block';
                this.product = element;
                console.log(this.product);
                this.setproduct(this.product.products[0]);
               
                const el = document.getElementById('lightSlider')
                //window.lightSlider(el)
                console.log(el);
            }
            else
            {
                window.location = window.location.origin + '/product/'+ element.id
            }
           
        },
        viewproductlist()
        {
            document.getElementById('listproduct').style.display = 'block';
            document.getElementById('singleproduct').style.display = 'none';
        }, 
        UpdatePrice: function()
      {
        
        this.price_quote_quantity = document.getElementById('price_quote_quantity').value;
        this.price_quote_front_color = document.getElementById('price_quote_front_color').value;
        this.price_quote_back_color = document.getElementById('price_quote_back_color').value;

        this. loadproductquote();
        },
        colapsemenu: function(element,menu)
        {          
            if(this.currentmenu == menu || this.currentmenu == '')
            {
                if(!this.collapsemenu)
                {
                    document.getElementById(menu).style.display = "none";
                    document.getElementById(menu).setAttribute("class", "collapse");        
                    document.getElementById(menu+"-icon").setAttribute("class", document.getElementById(menu+"-icon").getAttribute('class').replace("minus","plus"));      
                }
                else
                {
                    document.getElementById(menu).style.display = "block";
                    document.getElementById(menu).setAttribute("class", "collapse show");
                    document.getElementById(menu+"-icon").setAttribute("class", document.getElementById(menu+"-icon").getAttribute('class').replace("plus","minus"));      
                }
            }
            else
            {
                
            }
            
            this.collapsemenu = !this.collapsemenu;
            this.currentmenu == menu
        },
        setproduct: function(product)
        {
            let taketostudio = document.getElementById('take-to-studio');
            taketostudio.innerHTML = "";
            var a = document.createElement("a");
                a.className = "take-studio-btn";
                a.href = "javascript: void(0)";
                a.setAttribute("data-dismiss","modal");
                var span = document.createElement("span");
                    span.className = "text-uppercase";
                    span.innerHTML = "TAKE TO STUDIO";
                a.appendChild(span);
                a.addEventListener("click",function(event)
                {
                    document.getElementById('listproduct').style.display = 'block';
                    document.getElementById('singleproduct').style.display = 'none';
                    changeproduct(product.id); 
                }); 
            taketostudio.appendChild(a);
        },
        setactivecolor(event,product){
             var circlescolors = document.getElementsByClassName("block");
            var i;
            for (i = 0; i < circlescolors.length; i++)
            {
                circlescolors[i].className = circlescolors[i].className.replace("animate","");
            }
            event.target.className += " animate";
            document.getElementById('single-product-selected-color').className = 'colour-colorDisplay color-' + product.color.id;
            document.getElementById('single-product-selected-name').innerHTML = product.color.name;
            this.setproduct(product);
            
        },
        displayChildImage(image)
        {
            let url_imag =  '';
            if(document.getElementById('product-'+image.parent_id) != undefined){
                 let url_imag =  window.location.origin + '/vivid_test/public/img/product/' + image.image;
                document.getElementById('product-'+image.parent_id).src = url_imag; 
            }

            if(document.getElementById('default-image-thumb') != undefined){ 
                 let url_imag =  window.location.origin + '/vivid_test/public/img/product/' + image;
                document.getElementById('default-image-thumb').src = url_imag;    
            }

           if(document.getElementById('default-image') != undefined){ 
                let url_imag =  window.location.origin + '/vivid_test/public/img/product/' + image;
                document.getElementById('default-image').src = url_imag;    
            }
        },
        plusSlides(n)
        {
            this.showSlides(this.slideIndex += n);
        },
        currentSlide(n) {
            this.showSlides(this.slideIndex = n);
        },
        showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) 
            {
                this.slideIndex = 1
            }    
            if (n < 1) 
            {
                this.slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) 
            {
                slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) 
            {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[this.slideIndex-1].style.display = "block";  
            dots[this.slideIndex-1].className += " active";
        }
    }
} 
</script>