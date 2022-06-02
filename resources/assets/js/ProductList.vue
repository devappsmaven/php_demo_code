<style>
.ds-brands-left, .ds-colors-left, .ds-search-left, .ds-fabric-left{
    margin-bottom: 10px;
}
.product-item {
  margin-bottom: 30px;
  transition: all 0.3s ease 0s;
}
.product-img img {
  width: 100%;
}
.product-header {
   border-bottom: 1px solid #C4C4C4;
    text-align: center;
    line-height: 40px;
    color: #000000;
    font-family: 'Conv_Proxima Nova Bold';
    margin-bottom: 10px;
    color: #434343;
    font-family: "Raleway",sans-serif;
}

.shop-pagination {
  padding: 10px;
}
.shop-pagination > li {
  display: inline-block;
  margin-right: 3px;
}
.shop-pagination > li:last-child {
  margin-right: 0;
}
.shop-pagination > li > a {
  border: 1px solid #eee;
  color: #999999;
  display: block;
  font-family: roboto;
  font-size: 13px;
  font-weight: 400;
  height: 30px;
  line-height: 30px;
  text-align: center;
  width: 30px;
}
.shop-pagination > li.active a,
.shop-pagination > li:hover a {
  border-color: #00c6ff;
  color: #00c6ff;
}

.imgs-zoom-area {
  width: 100%;
}
.imgs-zoom-area img {
  width: 100% !important;
}
#gallery_01 img {
  width: 100%;
}
#gallery_01 {
  padding: 0 30px;
}
.p-c {
  border: 1px solid #fff;
  padding: 0 5px;
}
.p-c a.active img {
  border: 1px solid #FF7F00;
}
#gallery_01.slick-arrow-3 .arrow-next.slick-arrow {
  right: -3px;
}
/* -------------------------------------
    10.2 Single product info
------------------------------------- */
.single-product-info h3 {
  font-weight: 500;
  margin-bottom: 5px;
}
.brand-name-2 {
  color: #999999;
  font-style: italic;
  text-transform: capitalize;
}
/* -------------------------------------
    10.3 Product reviews tab
------------------------------------- */
.reviews-tab li {
  display: inline-block;
  margin-right: 35px;
}
.reviews-tab li:last-child {
  margin-right: 0;
}
.reviews-tab li a {
  display: block;
  font-weight: 500;
  line-height: 20px;
  text-transform: uppercase;
}
.reviews-tab li.active a {
  border-bottom: 1px solid #ffcc99;
}
.reply-delate ul li {
  display: inline-block;
}
.reply-delate ul li a {
  font-size: 13px;
}
.saparator {
  margin: auto 5px;
}
/* -------------------------------------
    10.4 product color and rating
------------------------------------- */
.color-title {
  color: #575757;
  line-height: 25px;
  margin-bottom: 0;
  text-transform: uppercase;
  width: 70px;
}
.single-pro-color-rating .block {
  display: inline-block;
}
.sin-pro-rating span {
  font-size: 13px;
}
/* -------------------------------------
    10.5 Product Cart plus minus
------------------------------------- */
.cart-plus-minus {
  border: 1px solid #cccccc;
  height: 25px;
  text-align: center;
  width: 90px;
  color: #666666;
}
.qtybutton {
  background: #cccccc none repeat scroll 0 0;
  height: 100%;
  width: 30%;
}
.dec.qtybutton {
  float: left;
}
.inc.qtybutton {
  float: right;
}
input.cart-plus-minus-box {
  background: transparent none repeat scroll 0 0;
  box-shadow: none;
  font-family: roboto;
  height: 100%;
  margin-bottom: 0;
  padding: 0;
  text-align: center;
  width: 40%;
}


.myaccordion {
	margin: 4px auto;
	box-shadow: 0 0 1px rgba(0, 0, 0, 0.1);
}

.myaccordion .card,
.myaccordion .card:last-child .card-header {
	border: none;
}

.myaccordion .card-header {
	border-bottom-color: #C4C4C4;
	background: none;
	padding: 5px;
}

.myaccordion .fa-stack {
	font-size: 18px;
}

.myaccordion .btn {
	width: 100%;
	color: #22252C;
	padding: 0;
	font-size: 18px;
	font-family: 'Conv_ProximaNova-Regular';
}

.myaccordion .btn-link:hover,
.myaccordion .btn-link:focus {
	text-decoration: none;
}

.myaccordion li+li {
	margin-top: 10px;
}

.product_card i {
	color: #22252C;
	font-size: 14px;
}

.column_heading h5 {
	font-size: 24px;
	color: #22252C;
	font-family: 'Conv_Proxima Nova Bold';
	margin: 0;
}

.breadcrumbs li {
	display: inline;
	color: #00BBEA;
}

.breadcrumbs li a {
	font-family: 'Conv_Proxima Nova Bold';
	color: #00BBEA;
	font-size: 15px;
	text-transform: uppercase;
}

.breadcrumbs {
	margin-top: 19px;
}

.column_heading {
	margin-top: 20px;
}

.card-header {
	padding: .75rem 0.25rem;
}



</style>

<template>
<div class="container-fluid">
    <div class="row" id="listproduct">
        <div class="col-lg-3" id="filters-colum">
            <div class="ds-search-left">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Search"   id="name" name="name" v-model="search" v-on:input="getfilteredData" style=" border-radius: 0px;border: 1px solid #0e0e0e;color: #000000; height: 40px; margin-bottom: 20px; padding-left: 20px;">
                    <span class="glyphicon glyphicon-search form-control-feedback"></span>                    
                </div>
            </div>
            <br>
            <div class="ds-search-left">
                <div class="myaccordion" id="accordion">
                    <div class="card product_card"  v-for="category in categories" :key="category.id">
                      <div class="card-header">
                          <h4 class="mb-0">
                            <a data-toggle="collapse" data-parent="#accordion" v-bind:href="'#collapsecategory' + category.slug"  style="color: #000000;">
                              {{category.name}}
                              <span class="glyphicon glyphicon-plus pull-right"></span>
                            </a>
                          </h4>
                      </div>
                      <div v-bind:id="'collapsecategory' + category.slug" class="card-collapse collapse">
                          <ul class="list-group" v-for="subcategory in subcategories" :key="subcategory.id" v-show="subcategory.category_id === category.id">
                              <li class="list-group-item" style="border:none; padding: 0px 15px; !important">
                                  <label>
                                      <input type="checkbox" v-model="filtersSelected" :value="category.slug+'/'+subcategory.slug" v-bind:id="subcategory.name" v-on:change="getfilteredData">
                                     <span style="color: #337ab7;">{{subcategory.name}}</span> 
                                  </label>
                              </li>
                          </ul>
                      </div>
                    </div>
                </div>
                <br>
                <br>
                 <div class="myaccordion" id="accordionproperties">
                    <div class="card product_card">
                      <div class="card-header">
                          <h4 class="mb-0">
                            <a data-toggle="collapse" data-parent="#accordionproperties" href="#collapsefamilycolor"  style="color: #000000;">
                              Colors
                              <span class="glyphicon glyphicon-plus pull-right"></span>
                            </a>
                          </h4>
                      </div>
                      <div id="collapsefamilycolor" class="card-collapse collapse">
                          <ul class="list-group" v-for="familycolor in familycolors" :key="familycolor.id">
                              <li class="list-group-item" style="border:none; padding: 0px 15px; !important">
                                  <label>
                                      <input type="checkbox" v-model="filtersSelected" :value="'colorfamily-'+familycolor.name" v-bind:id="familycolor.name" v-on:change="getfilteredData">
                                     <span style="color: #337ab7;">{{familycolor.name}}</span> 
                                  </label>
                              </li>
                          </ul>
                      </div>
                    </div>
                    <br>
                    <br>
                    <div class="card product_card">
                        <div class="card-header">
                            <h4 class="mb-0">
                            <a data-toggle="collapse" data-parent="#accordionproperties" href="#collapsebrand"  style="color: #000000;">
                                Brands
                                <span class="glyphicon glyphicon-plus pull-right"></span>
                            </a>
                            </h4>
                        </div>
                        <div id="collapsebrand" class="card-collapse collapse">
                            <ul class="list-group" v-for="brand in brands" :key="brand.id">
                                <li class="list-group-item"  style="border:none; padding: 0px 15px; !important">
                                    <label>
                                        <input type="checkbox" v-model="filtersSelected" :value="'brand-'+brand.name" v-bind:id="brand.name" v-on:change="getfilteredData">
                                        <span style="color: #337ab7;">{{brand.name}}</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="card product_card">
                        <div class="card-header">
                            <h4 class="mb-0">
                            <a data-toggle="collapse" data-parent="#accordionproperties" href="#collapsefabric"  style="color: #000000;">
                                Fabric
                                <span class="glyphicon glyphicon-plus pull-right"></span>
                            </a>
                            </h4>
                        </div>
                        <div id="collapsefabric" class="card-collapse collapse">
                            <ul class="list-group" v-for="fabric in fabrics" :key="fabric.id">
                                <li class="list-group-item"  style="border:none; padding: 0px 15px; !important">
                                    <label>
                                        <input type="checkbox" v-model="filtersSelected" :value="'fabric-'+fabric.name" v-bind:id="fabric.name" v-on:change="getfilteredData">
                                        <span style="color: #337ab7;">{{fabric.name}}</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        <div class="col-lg-9" id="data-colum">
            <div class="row visible-lg">
                <div class="col-xs-6 ">
                    <div class="row">
                        <div class="col-sm-3">
                            <label style="font-family: inherit; font-weight: 500; line-height: 1.1; color:#000000;font-size: 18px;">Sort by:</label>
                        </div>
                        <div class="col-sm-9">
                            <select v-on:click="sortBy(sortby);" v-model="sortby" style="background:#fff none repeat scroll 0 0;border:1px solid transparent;color:#000000;font-size:13px;height:40px;margin-bottom:20px;padding-left:20px;width:100%;">
                               <option value="name" selected="selected">Name</option>
                                <option value="fabric">Fabric</option>
                                <option value="stylenumber">Stylenumber</option>
                                <option value="price">Price</option>
                                <option value="min_quantity">Min Quantity</option>
                                <option value="status">Status</option>
                                <option value="view_count">Views</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <span style="font-family: inherit; font-weight: 500; line-height: 1.1; color:#000000;font-size: 18px; float:right;">Showing : {{pagination.from}}-{{pagination.to}} of {{pagination.total}}.</span>
                </div>
            </div>
            <br>
             <div class="row visible-lg">
                <div class="col-xs-12">
                    <span v-on:click="displayfilters()" style="font-family: inherit; font-weight: 500; line-height: 1.1; color:#000000;font-size: 18px;">Filters:({{filtersSelected.length}})</span>
                    <div class="alert alert-success alert-dismissible fade in" v-for="filter in filtersSelected" :key="filter" style="width:fit-content; display: inline-block; padding-bottom: 0px; padding-top: 0px; margin-bottom: 1px; margin-right: 5px; padding-right: 25px; padding-left: 5px;">
                        <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close" v-on:click="removeFilter(filter)">&times;</a>
                        <strong> {{filter.replace(/brand-|fabric-|colorfamily-/gi,'')}}</strong>
                    </div>
                </div>
            </div>
            <div class="row">
            <div v-for="product in filterProducts" :key="product.id" class="col-sm-4 col-xs-12">
                <div class="product-item"> 
                    <h4 class="product-header">
                        {{product.name}}
                    </h4>
                    <div class="product-img">
                        <a href="javascript: void(0)" v-on:click="viewsingleproduct(product); getChildProducts(product.id);">
                            <img v-bind:src=" path + '/img/product/'+ product.image" alt="" v-bind:id="'product-' + product.id">
                        </a>
                    </div>                   
                    <div class="product-info">
                        <div class="row"  style="margin-right: 0px; margin-left: 6px;">
                            <center>
                                <div  v-for="productcolor in product.products"   :key="productcolor.id" :class="'block circle color-'+ productcolor.color_id" v-if="selectedFilters.indexOf('colorfamily-'+productcolor.color.colorfamily) >= 0 || selectedFilters.indexOf('ViewAll') >= 0" v-bind:id="'productcolor-'+ productcolor.id"  v-on:mouseover="displayChildImage(productcolor);">
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <ul class="shop-pagination box-shadow text-center ptblr-10-30" pagination>
                <li ><a href="javascript:void(0)" v-on:click="fetchPaginateProducts(pagination.prev_page_url)" :disabled="!pagination.prev_page_url"><span aria-hidden="true">&laquo;</span></a></li>
                <li>Showing : {{pagination.from}}-{{pagination.to}} of {{pagination.total}}</li>
                <li class="active"><a a href="javascript:void(0)" v-on:click="fetchPaginateProducts(pagination.next_page_url)" :disabled="!pagination.next_page_url"><span aria-hidden="true">&raquo;</span></a></li>
            </ul>
        </div>
        </div>
    </div>
    <div  id="singleproduct" style="display:none">
         <a href="javascript: void(0)" v-on:click="viewproductlist()">
            X
        </a>
        <div class="row">
            <!--<div class="col-md-4">
                <div id="productcarousel" class="carousel slide" data-ride="carousel">/div>
                    
                    <ol class="carousel-indicators">
                        <li data-target="#productcarousel0" data-slide-to="0" class="active"></li>
                        <li data-target="#productcarousel0" data-slide-to="1" class=""></li>
                        </ol>
                    <div class="carousel-inner">
                        <div class="item active" align="center">
                            <img id="zoom_03" v-bind:src=" path + '/img/product/'+ product.image" v-bind:data-zoom-image=" path + '/img/product/'+ product.image" alt="" style="max-width:350px; height:auto;">
                        </div>
                    </div>
                    <a class="left carousel-control" href="#productcarousel0" data-slide="prev" style="left: 10px !important;">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#productcarousel0" data-slide="next" style="right: 10px !important;">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-8">
                <h4 class="modal-title uppercase" align="center"><b></b> {{product.name}} </h4>
                <div class="row"> Choose color: <span class="hover_color">White</span>
                    <br>
                    <div class="row">
                    </div>
                    <span class="Colors_for_minimum_of_6+">Quantity 6+</span>
                    <br>
                    <div class="row">
                        <div  v-for="childproduct in childproducts"   :key="childproduct.id" :class="'block color-'+ childproduct.color_id"  v-on:mouseover="displayChildProductImage(childproduct);">
                        </div>
                    </div>
                    <hr>
                    <h6 class="modal-title"><b>Brand: </b> {{product.brand}} </h6>
                    <hr>
                    <div id="take-to-studio">

                    </div>
                </div>
            </div>-->
            <!-- column for pictures section 
            <div class="col-md-5 col-sm-12 slider_width">
                <div class="clearfix">
                    <ul id ="lightSlider">
                        <li v-bind:data-thumb="path + '/img/product/'+ side.image" v-for="side in product.sides" :key="side.id">
                            <img v-bind:src="path + '/img/product/'+ side.image">
                        </li>
                    </ul>
                </div>
            </div>-->
            <div class="clearfix"><div class="lSSlideOuter "><div class="lSSlideWrapper usingCss" style="transition-duration: 400ms; transition-timing-function: ease;"><ul id="lightSlider" class="lightSlider lSSlide" style="width: 2580px; transform: translate3d(-430px, 0px, 0px); height: 447.109px; padding-bottom: 0%;"><li data-thumb="http://vividcustoms.test:8080/img/product/DOrE3A7GOTHSZPds1565126075.jpg" class="clone left" style="width: 410px; margin-right: 20px;"><img src="http://vividcustoms.test:8080/img/product/DOrE3A7GOTHSZPds1565126075.jpg"></li><li data-thumb="http://vividcustoms.test:8080/img/product/qQUaFu5Ta7Jvhec51565126112.jpg" class="lslide active" style="width: 410px; margin-right: 20px;"><img src="http://vividcustoms.test:8080/img/product/qQUaFu5Ta7Jvhec51565126112.jpg"></li> <li data-thumb="http://vividcustoms.test:8080/img/product/p493hBts98fWZ5Em1565126076.jpg" class="lslide" style="width: 410px; margin-right: 20px;"><img src="http://vividcustoms.test:8080/img/product/p493hBts98fWZ5Em1565126076.jpg"></li> <li data-thumb="http://vividcustoms.test:8080/img/product/vBQX92eWjmlizcTX1565126073.jpg" class="lslide" style="width: 410px; margin-right: 20px;"><img src="http://vividcustoms.test:8080/img/product/vBQX92eWjmlizcTX1565126073.jpg"></li> <li data-thumb="http://vividcustoms.test:8080/img/product/DOrE3A7GOTHSZPds1565126075.jpg" class="lslide" style="width: 410px; margin-right: 20px;"><img src="http://vividcustoms.test:8080/img/product/DOrE3A7GOTHSZPds1565126075.jpg"></li><li data-thumb="http://vividcustoms.test:8080/img/product/qQUaFu5Ta7Jvhec51565126112.jpg" class="clone right" style="width: 410px; margin-right: 20px;"><img src="http://vividcustoms.test:8080/img/product/qQUaFu5Ta7Jvhec51565126112.jpg"></li></ul><div class="lSAction"><a class="lSPrev"><i class="fas fa-arrow-left"></i></a><a class="lSNext"><i class="fas fa-arrow-right"></i></a></div></div><ul class="lSPager lSGallery" style="margin-top: 5px; transition-duration: 400ms; width: 415.5px; transform: translate3d(0px, 0px, 0px);"><li style="width:100%;width:98.75px;margin-right:5px" class="active"><a href="#"><img src="http://vividcustoms.test:8080/img/product/qQUaFu5Ta7Jvhec51565126112.jpg"></a></li><li style="width:100%;width:98.75px;margin-right:5px"><a href="#"><img src="http://vividcustoms.test:8080/img/product/p493hBts98fWZ5Em1565126076.jpg"></a></li><li style="width:100%;width:98.75px;margin-right:5px"><a href="#"><img src="http://vividcustoms.test:8080/img/product/vBQX92eWjmlizcTX1565126073.jpg"></a></li><li style="width:100%;width:98.75px;margin-right:5px"><a href="#"><img src="http://vividcustoms.test:8080/img/product/DOrE3A7GOTHSZPds1565126075.jpg"></a></li></ul></div></div>
        </div>
    </div>
</div>

</template>

<script>

export default {
    data() {
        return {
            products: [],
            categories: [],
            subcategories: [],
            childproducts: [],
            filterProducts: [],
            filtersSelected: [],
            familycolors: [],
            filtersSelected: [],
            brands:[],
            fabrics:[],
            urlProducts : window.location.origin + '/api/productenablegrid',
            urlCategories : window.location.origin + '/api/productcategoryenable',
            urlSubcategories : window.location.origin + '/api/productsubcategoryenable',
            urlChildProducts : window.location.origin + '/api/childproducts',
            urlFamilyColors: window.location.origin + '/api/familycolorenable',
            urlBrands: window.location.origin + '/api/brandenable',
            urlFabric: window.location.origin + '/api/fabric',
            pagination: [],
            product:'',
            search:'',
            sortby:'',
            path: window.location.origin ,
        }
    },
    mounted(){
        this.getProducts();
        //this.getCategories();
        this.getFamilyColors();
        this.getBrands();
        this.getFabric();
        this.getCategories();
        this.getSubCategories();
        this.viewproductlist();
    },
    computed:{
        selectedFilters: function() {
			let filters = [];
			//let checkedFiters = this.brands.filter(obj => obj.status);
			this.filtersSelected.forEach(element => {
				filters.push(element);
            });
            return filters;
        },
        totalPages: function() {
          return Math.ceil(this.filterProducts / 4)
        },
    },
    methods:{
        getFamilyColors: function()
        {
            axios.get(this.urlFamilyColors).then(response => {
                this.familycolors = response.data;
            });
        },
        removeFilter: function(filterelement)
        {
            for( var i = 0; i < this.filtersSelected.length; i++)
            {
                if ( this.filtersSelected[i] == filterelement)
                {
                    this.filtersSelected.splice(i, 1);
                }
            }
            this.getfilteredData();
        },
        getBrands: function()
        {
            axios.get(this.urlBrands).then(response => {
                this.brands = response.data;
            });
        },
        getFabric: function()
        {
            axios.get(this.urlFabric).then(response => {
                this.fabrics = response.data;
            });
        },
        getCategories: function()
        {
            axios.get(this.urlCategories).then(response => {
                this.categories = response.data;
            });
        },
        getSubCategories: function()
        {
            axios.get(this.urlSubcategories).then(response => {
                this.subcategories = response.data;
            });
        },
        getProducts: function()
        {
            let $this = this
            axios.get(this.urlProducts).then(response => {
                this.products = response.data.data;
                this.product = this.products[0];
                this.makePagination(response.data);
                this.getfilteredData();
            });
        },
        getChildProducts: function(idproduct)
        {
            let $this = this
            axios.get(this.urlChildProducts + '/' + idproduct).then(response => {
                this.childproducts = response.data;
            });
        },
        displayChildProductImage(childproduct)
        {
            let url_imag =  window.location.origin + '/img/product/' + childproduct.image;
            document.getElementById('zoom_03').src = url_imag;
            let taketostudio = document.getElementById('take-to-studio');
            taketostudio.innerHTML = "";
            var a = document.createElement("a");
                a.className = "button extra-small button-black";
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
                    document.getElementById('btn-done').style.display = 'none';
                    changeproduct(childproduct.id);

                });
            taketostudio.appendChild(a);
        },
        displayChildImage(child)
        {
            let url_imag =  window.location.origin + '/img/product/' + child.image;
            document.getElementById('product-'+child.parent_id).src = url_imag;
            document.getElementById('zoom_03').src = url_imag;
            /*let taketostudio = document.getElementById('take-to-studio');
            taketostudio.innerHTML = "";
            var a = document.createElement("a");
                a.className = "button extra-small button-black";
                a.href = "javascript: void(0)";
                a.setAttribute("data-dismiss","modal");
                var span = document.createElement("span");
                    span.className = "text-uppercase";
                    span.innerHTML = "TAKE TO STUDIO";
                a.appendChild(span);
                a.addEventListener("click",function(event)
                {
                    changeproduct(childproduct.id);
                });
            taketostudio.appendChild(a);*/
        },
        getfilteredData: function()
        {
            let filteredDataByfilters = [];
            let filteredDataByfiltersCategory = [];
            let filteredDataByfiltersBrand = [];
            let filteredDataByfiltersFabric = [];
            let filteredDataByfiltersColor = [];
            let filteredDataBySearch = [];
            let hascolor = false;
            let counthascolor = 0;
            let childscolors = document.getElementsByClassName("block circle");

            if(childscolors.length > 0)
            {
                for (let index = 0; index < childscolors.length; index++)
                {
                    const element = childscolors[index];
                     element.style.display= "none";
                }
            }          

            // first check if filters where selected
            
            if (this.selectedFilters.length > 0)
            {
                this.products.forEach(element =>
                {
                    if(this.selectedFilters.indexOf('brand-' + element.brand) >= 0)
                    {
                        filteredDataByfiltersBrand.push(element);
                    }
                });
				if(filteredDataByfiltersBrand.length > 0)
                {
                    this.filterProducts = filteredDataByfiltersBrand;
                }
                else
                {
                    this.filterProducts = this.products;
                }
            }

            if (this.selectedFilters.length > 0)
            {
                this.products.forEach(element =>
                {         
                    element.categories.forEach(category =>
                    {     
                        if(this.selectedFilters.indexOf(category.category) == 0)
                        {
                            filteredDataByfiltersCategory.push(element);
                        }
                    })
                });

				if(filteredDataByfiltersCategory.length > 0)
                {
                    this.filterProducts = filteredDataByfiltersCategory;
                }
                else
                {
                    this.filterProducts = this.products;
                }
            }

            if (this.selectedFilters.length > 0)
            {
                this.filterProducts.forEach(element =>
                {
                    if(this.selectedFilters.indexOf('fabric-' + element.fabric) >= 0)
                    {
                        filteredDataByfiltersFabric.push(element);
                    }
                });
                if(filteredDataByfiltersFabric.length > 0)
                {
                    this.filterProducts = filteredDataByfiltersFabric;
                }
            }
            if (this.selectedFilters.length > 0)
            {
                this.filterProducts.forEach(element =>
                {
                    element.products.forEach(child=>{
                        if(this.selectedFilters.indexOf('colorfamily-'+child.color.colorfamily) >= 0)
                        {
                            if(!hascolor)
                            {
                                //counthascolor ++;
                                hascolor = true;
                                filteredDataByfiltersColor.push(element);
                                if(document.getElementById('product-'+child.parent_id) != undefined)
                                {
                                    let url_imag =  window.location.origin + '/img/product/' + child.image;
                                    document.getElementById('product-'+child.parent_id).src = url_imag;
                                }
                            }
                            if( document.getElementById('productcolor-' + child.id) != undefined)
                            {
                              document.getElementById('productcolor-' + child.id).style.display = "block";
                            }
                        }
                    });
                    hascolor = false;
                });
				if(filteredDataByfiltersColor.length > 0)
                {
                    this.filterProducts = filteredDataByfiltersColor;
                }
            }
			// then filter according to keyword, for now this only affects the name attribute of each data
            if (this.search !== '')
            {
				filteredDataBySearch = this.products.filter(obj => obj.name.toUpperCase().match(this.search.toUpperCase()));
				this.filterProducts = filteredDataBySearch;
            }

            if(this.selectedFilters.length == 0 && this.search == '')
            {
                this.filterProducts = this.products;
                this.products.forEach(element =>
                {
                    if(document.getElementById('product-'+element.id) != undefined)
                    {
                        let url_imag =  window.location.origin + '/img/product/' + element.image;
                        document.getElementById('product-'+element.id).src = url_imag;
                    }
                });
                //this.getProducts();
            }
            else
            {
                let last_page = Math.ceil(this.filterProducts.length / this.pagination.per_page) < 1 ? 1 : Math.ceil(this.filterProducts.length / this.pagination.per_page);
                let data = {
                    current_page: this.pagination.current_page,
                    first_page_url: this.urlProducts+"?page=1",
                    from: 1,
                    last_page:  last_page,
                    last_page_url: this.urlProducts+"?page="+last_page,
                    next_page_url: this.urlProducts+"?page="+(this.pagination.current_page < last_page ? this.pagination.current_page+1 : last_page),
                    path: this.pagination.path,
                    per_page: this.pagination.per_page,
                    prev_page_url: this.urlProducts+"?page="+(last_page > 1 ? last_page-1 : 1),
                    to: this.filterProducts.length < this.pagination.per_page ? this.filterProducts.length : this.pagination.per_page,
                    total: this.filterProducts.length,
                }
                this.makePagination(data);
            }


        },
        makePagination(data)
        {
            let pagination =
            {
                current_page: data.current_page,
                first_page_url: data.first_page_url,
                from: data.from,
                last_page: data.last_page,
                last_page_url: data.last_page_url,
                next_page_url: data.next_page_url,
                path: data.path,
                per_page: data.per_page,
                prev_page_url: data.prev_page_url,
                to: data.to,
                total: data.total,
            }
            this.pagination = pagination;
        },
        fetchPaginateProducts(url)
        {
            this.urlProducts = url
            this.getProducts()
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
            document.getElementById('listproduct').style.display = 'none';
            document.getElementById('singleproduct').style.display = 'block';
            document.getElementById('btn-done').style.display = 'none';
            this.product = element;
        },
        viewproductlist()
        {
            document.getElementById('listproduct').style.display = 'block';
            document.getElementById('singleproduct').style.display = 'none';
            document.getElementById('btn-done').style.display = 'none';
        }
    }
}
</script>
