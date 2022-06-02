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
.product-info {
  background: #f6f6f6 none repeat scroll 0 0;
  padding: 20px 0;
  text-align: center;
}
.product-title {
  color: #434343;
  font-family: "Raleway",sans-serif;
  font-size: 14px;
  font-weight: 700;
  margin-bottom: 10px;
  overflow: hidden;
  text-overflow: ellipsis;
  text-transform: uppercase;
  white-space: nowrap;
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

</style>

<template>
<div class="container">
    <div class="row" id="listproduct">
        <div class="col-lg-4" id="filters-colum">
            <div class="ds-search-left">
                <div class="input-group">
                <input type="text" class="form-control" placeholder="Search"   id="name" name="name" v-model="search" v-on:input="getfilteredData">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="button" v-on:click="getfilteredData">
                    <i class="glyphicon glyphicon-search"></i>
                    </button>
                </div>
                </div>
            </div>
            <div class="ds-search-left">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapsefamilycolor">Colors</a>
                          </h4>
                      </div>
                      <div id="collapsefamilycolor" class="panel-collapse collapse">
                          <ul class="list-group" v-for="familycolor in familycolors" :key="familycolor.id">
                              <li class="list-group-item">
                                  <label>
                                      <input type="checkbox" v-model="filtersSelected" :value="'colorfamily-'+familycolor.name" v-bind:id="familycolor.name" v-on:change="getfilteredData">
                                      {{familycolor.name}}
                                  </label>
                              </li>
                          </ul>
                      </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapsebrand">Brands</a>
                            </h4>
                        </div>
                        <div id="collapsebrand" class="panel-collapse collapse">
                            <ul class="list-group" v-for="brand in brands" :key="brand.id">
                                <li class="list-group-item">
                                    <label>
                                        <input type="checkbox" v-model="filtersSelected" :value="'brand-'+brand.name" v-bind:id="brand.name" v-on:change="getfilteredData">
                                        {{brand.name}}
                                    </label>
                                </li>
                            </ul>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapsefabric">Fabric</a>
                            </h4>
                        </div>
                        <div id="collapsefabric" class="panel-collapse collapse">
                            <ul class="list-group" v-for="fabric in fabrics" :key="fabric.id">
                                <li class="list-group-item">
                                    <label>
                                        <input type="checkbox" v-model="filtersSelected" :value="'fabric-'+fabric.name" v-bind:id="fabric.name" v-on:change="getfilteredData">
                                        {{fabric.name}}
                                    </label>
                                </li>
                            </ul>
                        </div>
                      </div>
                </div>
            </div>
          </div>
        <div class="col-lg-8" style="border: 1px solid; padding: 15px;" id="data-colum">
            <div class="row visible-lg" style="border: 1px solid; padding: 15px;">
                <div class="col-xs-6 ">
                    <div class="row">
                        <div class="col-sm-6">Sort by:</div>
                        <div class="col-sm-6">
                            <select v-on:click="sortBy(sortby);" v-model="sortby">
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
                    <span style="float:right;">Showing : {{pagination.from}}-{{pagination.to}} of {{pagination.total}}.</span>
                </div>
            </div>
             <div class="row visible-lg" style="border: 1px solid; padding: 15px;">
                <span v-on:click="displayfilters()">Filters:({{filtersSelected.length}})</span>
                <div class="alert alert-success alert-dismissible fade in" v-for="filter in filtersSelected" :key="filter" style="width:fit-content; display: inline-block; padding-bottom: 0px; padding-top: 0px; margin-bottom: 1px; margin-right: 5px; padding-right: 25px; padding-left: 5px;">
                    <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close" v-on:click="removeFilter(filter)">&times;</a>
                    <strong> {{filter.replace(/brand-|fabric-|colorfamily-/gi,'')}}</strong>
                </div>
            </div>
            <div class="row" style="border: 1px solid; padding: 15px;">
            <div v-for="product in filterProducts" :key="product.id" class="col-sm-4 col-xs-12">
                <div class="product-item">
                    <div class="product-img">
                        <a href="javascript: void(0)" v-on:click="viewsingleproduct(product); getChildProducts(product.id);">
                            <img v-bind:src=" path + '/img/product/'+ product.image" alt="" v-bind:id="'product-' + product.id">
                        </a>
                    </div>
                    <div class="product-info">
                        <h6 class="product-title">
                            <a href="javascript: void(0)"> {{product.name}} </a>
                        </h6>
                    </div>
                    <div class="product-info">
                        <div class="row"  style="margin-right: 0px; margin-left: 6px;">
                            <center>
                                <div  v-for="productcolor in product.products"   :key="productcolor.id" :class="'block circle color-'+ productcolor.color_id" v-if="selectedFilters.indexOf('colorfamily-'+productcolor.color.colorfamily) >= 0" v-bind:id="'productcolor-'+ productcolor.id"  v-on:mouseover="displayChildImage(productcolor);">
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row"  style="border: 1px solid; padding: 15px;">
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
            <div class="col-md-4">
                <div id="productcarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#productcarousel0" data-slide-to="0" class="active"></li>
                        <li data-target="#productcarousel0" data-slide-to="1" class=""></li>
                        </ol>
                    <div class="carousel-inner">
                        <div class="item active" align="center">
                            <img id="zoom_03" v-bind:src=" path + '/img/product/'+ product.image" v-bind:data-zoom-image=" path + '/img/product/'+ product.image" alt="" style="max-width:350px; height:auto;">
                        </div>
                    </div><!-- Left and right controls -->
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
            </div>
        </div>
    </div>
</div>

</template>

<script>

export default {
    data() {
        return {
            products: [],
            childproducts: [],
            filterProducts: [],
            filtersSelected: [],
            familycolors: [],
            filtersSelected: [],
            brands:[],
            fabrics:[],
            urlProducts : window.location.origin + '/vivid_test/api/productenablegrid',
            urlChildProducts : window.location.origin + '/vivid_test/api/childproducts',
            urlFamilyColors: window.location.origin + '/vivid_test/api/familycolorenable',
            urlBrands: window.location.origin + '/vivid_test/api/brandenable',
            urlFabric: window.location.origin + '/vivid_test/api/fabric',
            pagination: [],
            product:'',
            search:'',
            sortby:'',
            path: window.location.origin + '/vivid_test',
        }
    },
    mounted(){
        this.getProducts();
        //this.getCategories();
        this.getFamilyColors();
        this.getBrands();
        this.getFabric();
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
            let url_imag =  window.location.origin + '/vivid_test/public/img/product/' + childproduct.image;
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
            let url_imag =  window.location.origin + '/vivid_test/public/img/product/' + child.image;
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
                                    let url_imag =  window.location.origin + '/vivid_test/public/img/product/' + child.image;
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
                        let url_imag =  window.location.origin + '/vivid_test/public/img/product/' + element.image;
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
