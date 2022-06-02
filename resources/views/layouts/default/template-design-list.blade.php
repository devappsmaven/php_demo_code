<div class="container_fixed top">
  <section class="product_page">
      <ul class="breadcrumbs">
          <li><a href="{{asset('index')}}">Home</a></li>
          <li>/</li>
          <li><a href="{{asset('template-designs')}}">Templates Designs</a></li>
      </ul>
      <div class="row column_heading">
          <div class="col-sm-3 product_sidebar">
              <h5> ALL TEMPLATES DESIGNS</h5>
              <div id="accordion" class="myaccordion">
                  <div class="card product_card">
                      @foreach ($productcategories as $category)
                          <div class="card-header" id="collapseOne">
                              <h2 class="mb-0">
                                  <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#{{$category->slug}}" aria-expanded="false" aria-controls="collapseOne">
                                  {{$category->name}}
                                  <span class="fa-stack fa-sm">
                                  <i class="fas fa-stack-2x"></i>
                                  <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                                  </span>
                                  </button>
                              </h2>
                          </div>
                          <div id="{{$category->slug}}" class="collapse" aria-labelledby="collapseOne" data-parent="#accordion">
                              <div class="card-body">
                                  <ul>
                                      @foreach ($category->subcategories as $subcategory)
                                          @if($subcategory->visibility == 'Visible' && $subcategory->status == 'Enable')
                                              <li><a href="/template-designs/category/{{$category->slug}}/{{$subcategory->slug}}">{{$subcategory->name}}</a></li>
                                          @endif
                                      @endforeach
                                      <li><a href="/template-designs/category/{{$category->slug}}">View All</a></li>
                                  </ul>
                              </div>
                          </div>
                      @endforeach
                  </div>
              </div>
          </div>

          @if($pcategory && $psubcategory)
          <div class="col-md-9 col-sm-12 product_responsive">
            <div class="row">
              @foreach ($templatedesigns as $design)
                @if($design->type == 'Template')
                  <div class="col-sm-4">
                      <a href="{{asset('designstudio/t')}}{{'/'}}{{$design->id}}">
                          <h4> {{$design->category->name}}/{{$design->subcategory->name}} </h4>
                          <img class="full_width" src="{{asset('designs/template')}}{{'/'}}{{$design->category->slug}}{{'/'}}{{$design->subcategory->slug}}{{'/'}}{{$design->title}}_{{$design->defaultside}}_preview.png"  style="max-width:322px; max-height:368px; background-color:{{$design->background}};">
                          <h4> {{$design->displayname}} </h4>
                      </a>
                  </div>
                @endif
              @endforeach
            </div>
          </div>
          <div class="d-flex justify-content-center">{{$templatedesigns->links("pagination::bootstrap-4")}} </div>
          @elseif($pcategory && !$psubcategory)
          <div class="col-md-9 col-sm-12 product_responsive">
            <div class="row">
                @foreach ($templatedesigns as $design)
                    <div class="col-sm-4">
                        <a href="{{asset('designstudio/t')}}{{'/'}}{{$design->id}}">
                            <h4> {{$design->category->name}}/{{$design->subcategory->name}} </h4>
                            <img class="full_width" src="{{asset('designs/template')}}{{'/'}}{{$design->category->slug}}{{'/'}}{{$design->subcategory->slug}}{{'/'}}{{$design->title}}_{{$design->defaultside}}_preview.png"  style="max-width:322px; max-height:368px; background-color:{{$design->background}};">
                            <h4> {{$design->displayname}} </h4>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">{{$templatedesigns->links("pagination::bootstrap-4")}} </div>
          </div>
          @else
          <!-- second row for fit/ladies/polos section-->
          <div class="col-md-9 col-sm-12 product_responsive">
              <div class="row">
                  <!-- column for pictures section -->
                  <h3> Custom Apparel- Free Shipping & No Minimums </h3>
                  <div class="col-sm-6">
                      <a href="/product/category/athletic">
                          <h4> Athletic </h4>
                          <img src="images/4343 1.png" class="full_width">
                      </a>
                  </div>
                  <div class="col-sm-6">
                      <a href="/product/category/bags">
                          <h4> Bags </h4>
                          <img src="images/dsdsd 1.png" class="full_width">
                      </a>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-4">
                      <a href="/product/category/fit">
                          <h4> Fit </h4>
                          <img src="images/fit 1.png" class="full_width">
                      </a>
                  </div>
                  <div class="col-sm-4">
                      <a href="/product/category/ladies" class="full_width">
                          <h4> Ladies </h4>
                          <img src="images/ladies 1.png" class="full_width">
                      </a>
                  </div>
                  <div class="col-sm-4">
                      <a href="/product/category/polos">
                          <h4> Polos </h4>
                          <img src="images/polos 1.png" class="full_width">
                      </a>
                  </div>
                  <div class="col-sm-4">
                      <a href="/product/category/t-shirts">
                          <h4> T-Shirts </h4>
                          <img src="images/re 1.png" class="full_width">
                      </a>
                  </div>
                  <div class="col-sm-4">
                      <a href="/product/category/unisex-mens">
                          <h4> Unisex-Mens </h4>
                          <img src="images/3232 1.png" class="full_width">
                      </a>
                  </div>
                  <div class="col-sm-4">
                      <a href="/product/category/work-clothes">
                          <h4> Work-Clothes </h4>
                          <img src="images/dsds 1.png" class="full_width">
                      </a>
                  </div>
              </div>
          </div>
          @endif
      </div>
  </section>
</div>
