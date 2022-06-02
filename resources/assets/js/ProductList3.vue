
<style>
.loader{ position: absolute; top: 0 !important; bottom: 0 !important; left: 0 !important; right: 0 !important; background: url("/img/icon/loading.gif") 50% 50% no-repeat ; z-index: 99; width: 50% !important; height: 50% !important; margin: auto !important;border-radius: 50% !important;}

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
  
  /* Create a custom radio button */
  .checkmark {
	position: absolute;
	top: 0;
	left: 0;
	height: 25px;
	width: 25px;
	border-radius: 50%;
  }
  
  /* On mouse-over, add a grey background color */
  .radio-container:hover input ~ .checkmark {
	background-color: #2196F3;
  }
    
  /* Create the indicator (the dot/circle - hidden when not checked) */
  .checkmark:after {
	content: "";
	position: absolute;
	display: none;
  }
  
  /* Show the indicator (dot/circle) when checked */
  .radio-container input:checked ~ .checkmark:after {
	display: block;
  }
  
  /* Style the indicator (dot/circle) */
  .radio-container .checkmark:after {
	  top: 8px;
	  left: 8px;
	  width: 8px;
	  height: 8px;
	  border-radius: 50%;
	  background: #eeeeee;
  }

  .product-filter {
	cursor:pointer;
	line-height:1;
	position:relative;
	text-align:center;
	text-decoration:none;
	transition-duration:.25s;
	transition-timing-function:cubic-bezier(.65,.05,.36,1);
	outline:0;vertical-align:middle;
	white-space:nowrap;
	-webkit-appearance:none;
	-moz-appearance:none;
	appearance:none;
	display:inline-block;
	color:#211e22;
	background:#fff;
	border:1px solid #dfdfe1;
	border-radius:50vw;
	box-shadow:inset 0 0 0 2px transparent;
	font-size:16px;
	height:2rem;
	padding:0 1rem;
	width:auto;
	margin-top: 5px;
  }

  .product-filter:hover {
	color:#e63d90;
	box-shadow:inset 0 0 0 2px #e63d90
  }

  .printing_heading p {
	font-style: normal;
	font-weight: normal;
	font-size: 11px;
	line-height: 20px;
	text-transform: uppercase;
	color: #7d7d7d;
	font-family: 'Arial';
}
</style>
<template>

<div class="container">
<div id="loader" class="loader" v-show="loading">
</div>
  <section>
    <div class="row column_heading">
      <div class="col-sm-3 product_sidebar">
        <h5> ALL PRODUCTS</h5>
        <br>
        <h5> PRICE QUOTE</h5>
        <div id="accordionpricequote" class="myaccordion">               
            <div class="card product_card">
                <div>                        
                    <input id="price_quote_quantity" name="price_quote_quantity" type="number" style="border-bottom:1px solid #E63D90; width:50px; text-align: center; color: #22252C; font-size: 18px; font-family: 'Conv_ProximaNova-Regular';" v-bind:value="price_quote_quantity" required min="1">
                    <label for="price_quote_quantity" style="font-size: 18px; font-family: 'Conv_ProximaNova-Regular';">Quantity</label>
                </div>
                <div>                        
                    <input id="price_quote_front_color" name="price_quote_front_color" type="number" style="border-bottom:1px solid #E63D90; width:50px; text-align: center; font-size: 18px; font-family: 'Conv_ProximaNova-Regular';" v-bind:value="price_quote_front_color" required min="1" max="8">
                    <label for="price_quote_front_color" style="font-size: 18px; font-family: 'Conv_ProximaNova-Regular';">Color Front</label>
                </div>
                <div>                       
                    <input id="price_quote_back_color" name="price_quote_back_color" type="number" style="border-bottom:1px solid #E63D90; width:50px; text-align: center; font-size: 18px; font-family: 'Conv_ProximaNova-Regular';" v-bind:value="price_quote_back_color" required min="0" max="8"> 
                    <label for="price_quote_back_color" style="font-size: 18px; font-family: 'Conv_ProximaNova-Regular';">Color Back</label>
                </div>
                <button type="button" class="btn design_btn" style="color:white;" v-on:click="UpdatePrice();">Update Price</button>
            </div>
        </div>
        <br>
        <h5> CATEGORIES</h5>
            <div id="accordionproducts" class="myaccordion" style="display:none !important;">
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
                        <div v-bind:id="category.slug" class="collapse" aria-labelledby="collapseOne" data-parent="#accordionproducts">
                            <div class="card-body">
                                <ul v-for="(subcategory,indexsubcategory) in subcategories" :key="subcategory.id" v-show="subcategory.category_id === category.id">
                                    <li>
                                       <input type="checkbox" v-model="filtersSelected" :value="'Category:' +category.slug+'/'+subcategory.slug" v-bind:id="subcategory.name" v-on:change="getfilteredData">
                                     <span style="color: #337ab7;">{{subcategory.name}}</span> 
                                    </li>
                                    <li v-show="indexsubcategory == subcategories.length-1">
                                       <input type="checkbox" v-model="filtersSelected" :value="'Category:' +category.slug+'/View All'" v-bind:id="'View All'" v-on:change="getfilteredData">
                                     <span style="color: #337ab7;">View All</span> 
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
                                <input class="FilterBrand" type="checkbox" v-model="filtersSelected" :value="'Brand:'+brand.name" v-bind:id="brand.name" v-on:change="getfilteredData"><span> {{brand.name}} </span>
                            </li>                                   
                            <li v-if="indexbrand == brands.length-1">
                             <input class="FilterBrand" type="checkbox" v-model="filtersSelected" :value="'Brand:View All'" v-bind:id="'View All'" v-on:change="getfilteredData"><span> View All </span>
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
                            <label class="radio-container" style="float: left; width: 20px;"><pre></pre>
                                <input class="FilterColor" type="radio" name="radiofilter" v-model="filtersSelected" :value="'Color:'+familycolor.name" v-bind:id="familycolor.name" v-on:change="getfilteredData">
                                <span class="checkmark" v-bind:style="'background-color:'+familycolor.hex+'; border: 1px solid #eeeeee;'"></span>
                            </label>
                            <label class="radio-container" style="float: left; width: 20px;" v-if="indexcolor == familycolors.length-1"><pre></pre>
                                <input class="FilterColor" type="radio" name="radiofilter"  v-model="filtersSelected" value="Color:View All" v-bind:id="'Color:View All'" v-on:change="getfilteredData">
                                <span class="checkmark" style="background-image: linear-gradient(to right, red , orange, yellow, green,  blue,black, purple, pink, brown) !important;; border: 1px solid #eeeeee;"></span>
                            </label>
                        </div>
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
                                <input class="FilterFabric" type="checkbox" v-model="filtersSelected" :value="'Fabric:'+fabric.name" v-bind:id="fabric.name" v-on:change="getfilteredData">
                                <span> {{fabric.name}} </span>
                            </li>       
                            <li  v-show="indexfabric == fabrics.length-1">
                                <input class="FilterFabric" type="checkbox" v-model="filtersSelected" :value="'Fabric:View All'" v-bind:id="'Fabric:View All'" v-on:change="getfilteredData">
                                <span> View All </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9 col-sm-12 product_responsive" id="listproduct">
        <div class="row" v-show="filtersSelected.length > 0">
            <div class="col-sm-8">
                <h5> Filters: </h5> 
                    <button type="button" class="product-filter"  v-for="filter in filtersSelected" :key="filter">{{filter}} <span class="close" style="margin-left: 3px; margin-top: -6px;"  v-on:click="removeFilter(filter)">&times;</span></button>
                    <button type="button" style="border: none ; text-decoration: underline ; display: inline-block; cursor:pointer; color: #211e22; background: #fff;"  v-on:click="removeFilter('All')">Remove All <span class="close" style="margin-left: 3px; margin-top: -6px;" v-on:click="removeFilter('All')">&times;</span></button>
                    
            </div>
            <div class="col-sm-4"> 
                <div class="form-inline">
                    <h5>Sort By:</h5>                           
                    <select class="form-control"  v-on:click="sortBy(sortby);" v-model="sortby">
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
        <div class="row" v-show="filtersSelected.length > 0">     
            <div class="col-sm-4" style="margin-top: 20px; margin-bottom: 10px;"  v-for="product in filterProducts" :key="product.id">        
                <div class="product_printing" style="margin-bottom: 10px;">
                    <a href=""> 
                        <img v-bind:src=" path + '/img/product/'+ product.image" alt="" title="" v-bind:id="'product-' + product.id"> </a>
                        <div class="printing_heading">
                        <a href=""><h4  style="font-size:16px; border-bottom: none; line-height: 20px;">  {{product.name}}  </h4> </a>
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
                        <div  v-for="productcolor in product.products" :key="productcolor.id" :class="'block  colour-colorDisplay  color-'+ productcolor.color_id" v-if="selectedFilters.indexOf('Color:'+productcolor.color.colorfamily) >= 0" v-bind:id="'productcolor-'+ productcolor.id"  v-on:mouseover="displayChildImage(productcolor);">
                        </div>
                    </div>                    
                </center>
            </div>
        </div>
        <br>
        
        <div class="row" v-show="filtersSelected.length > 0">
           <center> <ul class="shop-pagination box-shadow text-center ptblr-10-30" pagination>
                <li ><a href="javascript:void(0)" v-on:click="fetchPaginateProducts(pagination.prev_page_url)" :disabled="!pagination.prev_page_url"><span aria-hidden="true">&laquo;</span></a></li>
                <li>Showing : {{pagination.from}}-{{pagination.to}} of {{pagination.total}}</li>
                <li class="active"><a a href="javascript:void(0)" v-on:click="fetchPaginateProducts(pagination.next_page_url)" :disabled="!pagination.next_page_url"><span aria-hidden="true">&raquo;</span></a></li>
            </ul></center>
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
    <div class="col-md-9 col-sm-12 product_responsive" id="singleproduct">
      <div class="row">
        <div class="col-sm-4" v-for="product in filterProducts" :key="product.id">
            <h4> {{product.parent != null ? product.parent.name: product.name}} </h4>
            <img v-bind:src=" path + '/img/product/'+ product.image"  class="full_width">
              <button  type="button" class="button" tabindex="0" style="cursor: pointer; text-transform: uppercase; text-decoration: none;font-size: 1em;background-color: #E63D90;border-color: #E63D90;color: #fff;font-weight: 500;padding: 10px;width: 100%;text-align: center;"   v-on:click="setpricequoteproducthere(product.id);">
                Select
            </button>
        </div>
      </div>
    </div>
  </div>
</section>
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
            price_quote_quantity: 100,
            price_quote_front_color: 1,
            price_quote_back_color: 0,
            loading: true,
            currentmenu: '',
            collapsemenu: true,
        }
    },
    mounted(){
         loading: true,
        this.getProducts();
        //this.getCategories();
        this.getFamilyColors();
        this.getBrands();
        this.getFabric();
        this.getCategories();
        this.getSubCategories();
        this.viewproductlist();
        this. loadproductquote();
        if(parent.indesignstudio)
        {
           console.log("Loading from Designstudio");
        }
        else
        {
           console.log("Loading from Product Page");
        }
    },
    computed:{
        selectedFilters: function() {
            let filters = [];
            //let checkedFiters = this.brands.filter(obj => obj.status);           
            if( Array.isArray(this.filtersSelected) && this.filtersSelected.length > 0)
            {
                this.filtersSelected.forEach(element => {
                    filters.push(element);
                });
            }
            else
            {
                  filters.push(this.filtersSelected);
            }
			
            return filters;
        },
        totalPages: function() {
          return Math.ceil(this.filterProducts / 4)
        },
    },
    methods:{
        async getFamilyColors()
        {
            await axios.get(this.urlFamilyColors).then(response => {
                this.familycolors = response.data;
            });
        },
        removeFilter: function(filterelement)
        {
            if(filterelement == 'All')
            {
                this.filtersSelected = [];
            }
            else
            {
                for( var i = 0; i < this.filtersSelected.length; i++)
                {
                    if ( this.filtersSelected[i] == filterelement)
                    {
                        this.filtersSelected.splice(i, 1);
                    }
                }
            }
            
            this.getfilteredData();
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
                this.products = response.data.data;
                this.product = this.products[0];
                this.makePagination(response.data);
                this.getfilteredData();
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
            //let PriceQuoteProducts = []; 
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
                    url: window.location.origin + '/api/productpricequote',

                    //if received a response from the server
                    success: function( datas, textStatus, jqXHR) {
                        element.price_quote = "$ " + datas + " each -";
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
                    url: window.location.origin + '/api/productpricequote',
                    success:function(data)
                    {
                        return "$ " + data + " each -";
                    }
                });
        },
        /*displayChildProductImage(childproduct)
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
        },*/
        displayChildImage(child)
        {
            let url_imag =  window.location.origin + '/img/product/' + child.image;
            document.getElementById('product-'+child.parent_id).src = url_imag;
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



            if(this.selectedFilters.indexOf('Brand:View All') >= 0)
            {
                console.log(this.selectedFilters)
                this.selectedFilters.splice(this.selectedFilters.indexOf('Brand:View All'), 1);
                let brandsfilters= document.getElementsByClassName('FilterBrand');
                console.log(brandsfilters);
                for (let i = 0; i < brandsfilters.length; i++)
                {  
                    document.getElementById(brandsfilters[i].id).checked = true;
                    this.selectedFilters.push('Brand:' + brandsfilters[i].id);
                    //brandsfilters[i].checked = true;
                   
                }
                //this.brandsfilters.forEach( brand => {
                    //console.log('Brand:' + brand.)
                    
                   
                    //brand.checked = true;
                //});
                console.log(this.selectedFilters)
            } 
            // first check if filters where selected
            
            if (this.selectedFilters.length > 0)
            { 
                this.products.forEach(element =>
                { 
                    
                    if(this.selectedFilters.indexOf('Brand:' + element.brand) >= 0)
                    {
                       filteredDataByfiltersBrand.push(element);
                    }

                    if(this.selectedFilters.indexOf('Fabric:' + element.fabric) >= 0)
                    {
                        filteredDataByfiltersFabric.push(element);
                    }

                    element.products.forEach(childproduct =>
                    {     
                        if(this.selectedFilters.indexOf('Color:' + childproduct.color.colorfamily) >= 0 || this.selectedFilters.indexOf('Color:View All') >= 0)
                        {
                            element.image = childproduct.image
                            filteredDataByfiltersColor.push(element);
                        }
                    })

                    element.categories.forEach(category =>
                    {     
                        if(this.selectedFilters.indexOf('Category:' + category.category) >= 0)
                        {
                            filteredDataByfiltersCategory.push(element);
                        }
                    })
                });


				if(filteredDataByfiltersBrand.length > 0 || filteredDataByfiltersFabric.length > 0 ||  filteredDataByfiltersColor.length > 0 || filteredDataByfiltersCategory.length > 0)
                {
                   let filterProductstmp = filteredDataByfiltersBrand.concat(filteredDataByfiltersFabric.concat(filteredDataByfiltersColor.concat(filteredDataByfiltersCategory)));
                   this.filterProducts = filterProductstmp.filter((item, pos) => filterProductstmp.indexOf(item) === pos)
                }
                else
                {
                    this.filterProducts = [];
                }
            }
  
            /*if (this.selectedFilters.length > 0)
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
                    if(this.selectedFilters.indexOf('Fabric:' + element.fabric) >= 0)
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
                        if(this.selectedFilters.indexOf('Color:'+child.color.colorfamily) >= 0)
                        {  
                            let url_imag =  window.location.origin + '/img/product/' + child.image;  element.image = child.image;
                            if(!hascolor)
                            {
                                //counthascolor ++;
                                hascolor = true;
                                filteredDataByfiltersColor.push(element);
                                if(document.getElementById('product-'+child.parent_id) != undefined)
                                {
                                  
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
            }*/
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
            //document.getElementById('btn-done').style.display = 'none';
            this.product = element;
        },
        viewproductlist()
        {
            document.getElementById('listproduct').style.display = 'block';
            document.getElementById('singleproduct').style.display = 'none';
            //document.getElementById('btn-done').style.display = 'none';
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
                //element.setAttribute("aria-expanded", false);
                document.getElementById(menu).style.display = "none";
                document.getElementById(menu).setAttribute("class", "collapse");        
                document.getElementById(menu+"-icon").setAttribute("class", document.getElementById(menu+"-icon").getAttribute('class').replace("minus","plus"));      
            }
            else
            {
                //element.setAttribute("aria-expanded", true);
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
      }
    }
}
/*export default {
    data() {
        return {
            productcategories: [],
            productsubcategories: [],
            products: [],
            familycolors: [],
            brands:[],
            fabrics:[],
            urlProductCategories : window.location.origin + '/api/productcategoryenable',
            urlProductSubCategories : window.location.origin + '/api/productsubcategoryenable',
            urlProducts : window.location.origin + '/api/product/category',
            urlFamilyColors: window.location.origin + '/api/familycolorenable',
            urlBrands: window.location.origin + '/api/brandenable',
            urlFabric: window.location.origin + '/api/fabric',
            path: window.location.origin ,
            price_quote_quantity: 100,
            price_quote_front_color: 1,
            price_quote_back_color: 0,
            filtersSelected: []
        }
    },
    mounted(){
      this.getProductCategories();
      this.getProductSubCategories();
      this.viewproductlist();
      this.getFamilyColors();
      this.getBrands();
      this.getFabric();
    },
    methods:{
      getFamilyColors: function()
      {
          await axios.get(this.urlFamilyColors).then(response => {
              this.familycolors = response.data;
          });
      },
      getBrands: function()
      {
          await axios.get(this.urlBrands).then(response => {
              this.brands = response.data;
          });
      },
      getFabric: function()
      {
          await axios.get(this.urlFabric).then(response => {
              this.fabrics = response.data;
          });
      },
      getProductCategories: function()
      {
          let $this = this
          await axios.get(this.urlProductCategories).then(response => {
              this.productcategories = response.data;
          });
      },
      getProductSubCategories: function()
      {
          let $this = this
          await axios.get(this.urlProductSubCategories).then(response => {
              this.productsubcategories = response.data;
          });
      },
      UpdatePrice: function()
      {
         console.log(this.price_quote_quantity + ' - ' + this.price_quote_front_color + ' - ' +  this.price_quote_back_color)
      },
      setValue(id)
      {
         if(id =='price_quote_quantity')
         {
             this.price_quote_quantity = document.getElementById(id).value;
         }
          else if(id =='price_quote_front_color')
         {
             this.price_quote_front_color = document.getElementById(id).value;
         }
          else if(id =='price_quote_back_color')
         {
             this.price_quote_back_color = document.getElementById(id).value;
         }
      },
      colapsemenu: function(element,menu)
      {
          //console.log(element)
        if(currentmenu == menu || currentmenu == '')
        {
            if(!collapsemenu)
            {
                //element.setAttribute("aria-expanded", false);
                document.getElementById(menu).style.display = "none";
                document.getElementById(menu).setAttribute("class", "collapse");        
                document.getElementById(menu+"-icon").setAttribute("class", document.getElementById(menu+"-icon").getAttribute('class').replace("minus","plus"));      
            }
            else
            {
                //element.setAttribute("aria-expanded", true);
                document.getElementById(menu).style.display = "block";
                document.getElementById(menu).setAttribute("class", "collapse show");
                document.getElementById(menu+"-icon").setAttribute("class", document.getElementById(menu+"-icon").getAttribute('class').replace("plus","minus"));      
            }
        }
        else
        {

        }
        
        collapsemenu = !collapsemenu;
        currentmenu == menu
      },
      getfilteredData: function()
      {

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
                    if(this.selectedFilters.indexOf('Brand:' + element.brand) >= 0)
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
                    if(this.selectedFilters.indexOf('Fabric:' + element.fabric) >= 0)
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
                        if(this.selectedFilters.indexOf('Color:'+child.color.colorfamily) >= 0)
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
        },
      getProducts: function(category, subcategory)
      {
          document.getElementById('listproduct').style.display = 'none';
          document.getElementById('singleproduct').style.display = 'block';
          let $this = this
          await axios.get(subcategory === null ? this.urlProducts + "/" + category : this.urlProducts + "/" + category + "/" + subcategory ).then(response => {
              this.products = response.data;
          });
      },
      viewproductlist()
      {
          document.getElementById('listproduct').style.display = 'block';
          document.getElementById('singleproduct').style.display = 'none';
      },
      setpricequoteproducthere(productid) {
        setpricequoteproduct(productid);
      }
    }
}*/


</script>
