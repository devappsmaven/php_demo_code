
<style>
#accordion a:active {
    color: #007bff;
}
</style>
<template>
<div class="container">
  <section>
    <div class="row column_heading">
      <div class="col-sm-3 product_sidebar">
        <h5> ALL PRODUCTS</h5>
        <div id="accordion" class="myaccordion">
            <div class="card product_card" v-for="category in productcategories" :key="'category'+category.id">
              <div class="card-header">
                  <h2 class="mb-0">
                      <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" v-bind:data-target="'#'+category.slug" aria-expanded="false" aria-controls="collapseOne">
                      {{category.name}}
                      <span class="fa-stack fa-sm">
                      <i class="fas fa-stack-2x"></i>
                      <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                      </span>
                      </button>
                  </h2>
              </div>
              <div v-bind:id="category.slug" class="collapse" aria-labelledby="collapseOne" data-parent="#accordion">
                  <div class="card-body">
                      <ul>
                          <li v-for="subcategory in productsubcategories" :key="'subcategory-' + subcategory.id">
                            <a href="javascript: void(0)" v-on:click="getProducts(category.id,subcategory.id);" v-if="category.id === subcategory.category_id">{{subcategory.name}}</a>
                          </li>
                          <li><a href="javascript: void(0)" v-on:click="getProducts(category.id,null);">View All</a></li>
                      </ul>
                  </div>
              </div>
            </div>
        </div>
        <h5> ALL BRANDS</h5>
        <div id="accordion2" class="myaccordion">
            <div class="card product_card" v-for="brand in brands" :key="'brand'+brand.id">
              <div class="card-header">
                  <h2 class="mb-0">
                      <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" v-bind:data-target="'#'+brand.slug" aria-expanded="false" aria-controls="collapseOne">
                      {{brand.name}}
                      <span class="fa-stack fa-sm">
                      <i class="fas fa-stack-2x"></i>
                      <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                      </span>
                      </button>
                  </h2>
              </div>
              <div v-bind:id="brand.slug" class="collapse" aria-labelledby="collapseOne" data-parent="#accordion">
                  <div class="card-body">
                      <ul>
                          <li>
                            <a href="javascript: void(0)" v-on:click="getProducts(brand.id,null);">{{brand.name}}</a>
                          </li>
                          <li><a href="javascript: void(0)" v-on:click="getProducts(category.id,null);">View All</a></li>
                      </ul>
                  </div>
              </div>
            </div>
        </div>
    </div>
    <div class="col-md-9 col-sm-12 product_responsive" id="listproduct">
        <div class="row">
            <!-- column for pictures section -->
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
        <div class="row">
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
    <div class="col-md-9 col-sm-12 product_responsive" id="singleproduct" style="display:none">
      <div class="row">
        <div class="col-sm-4" v-for="product in products" :key="'product-' + product.id">
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
          axios.get(this.urlFamilyColors).then(response => {
              this.familycolors = response.data;
          });
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
      getProductCategories: function()
      {
          let $this = this
          axios.get(this.urlProductCategories).then(response => {
              this.productcategories = response.data;
          });
      },
      getProductSubCategories: function()
      {
          let $this = this
          axios.get(this.urlProductSubCategories).then(response => {
              this.productsubcategories = response.data;
          });
      },
      getProducts: function(category, subcategory)
      {
          document.getElementById('listproduct').style.display = 'none';
          document.getElementById('singleproduct').style.display = 'block';
          let $this = this
          axios.get(subcategory === null ? this.urlProducts + "/" + category : this.urlProducts + "/" + category + "/" + subcategory ).then(response => {
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
}


</script>
