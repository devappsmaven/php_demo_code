<div class="mobile_header">
         <a href="#" class="d-block px-3 py-2 text-center text-bold text-white" style="background-color: #00BBEA;font-weight: bold;">Please note: Our site is currently under maintenance and certain features are unavailable</a>
         <div class="wrapper">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar-header">
                  <img src="{{asset('images/support 3.png')}}" alt="" title=""/>
                  <h3>Talk to a Real Person</h3>
                  <h2>(800) 648-8518</h2>
               </div>
               <ul class="list-unstyled components">
                  <li>
                     <a href="{{asset('designstudio')}}">Design Studio</a>
                  </li>
                  <li>
                     <a href="#" class="homeSubmenu">Products<i class="fa fa-plus"></i></a>
                     <ul class="collapse list-unstyled" id="homeSubmenu">
                      @foreach ($productcategories as $category)
                        <li>
                          <a href="{{asset('product')}}/category/{{$category->slug}}">{{$category->name}}</a>
                        </li>
                      @endforeach
                     </ul>
                  </li>
                  <li>
                     <a href="{{asset('template-designs')}}">Designs Template</a>
                  </li>
                  <li>
                     <a href="{{asset('contact-us')}}">Contact us</a>
                  </li>
                  <li>
                     <a href="{{asset('price-quote')}}">Price Quote</a>
                  </li>
               </ul>
            </nav>
            <!-- Page Content  -->
            <div id="content">
               <nav class="navbar navbar-expand-lg" >
                  <div class="container-fluid">
                     <button type="button" id="sidebarCollapse" class="btn menu_btn">
                     <i class="fa fa-bars"></i>
                     <span>Menu</span>
                     </button>
                  </div>
               </nav>
            </div>
         </div>
      </div>

