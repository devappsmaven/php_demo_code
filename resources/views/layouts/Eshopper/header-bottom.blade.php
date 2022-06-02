<div class="header-bottom visible-lg visible-md">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="mainmenu pull-left">
                    <ul class="nav navbar-nav collapse navbar-collapse">
                        <li><a href="{{asset('designstudio')}}">Designstudio</a></li>
                        <li><a href="{{asset('products')}}">Products</a></li>
                        <li><a href="{{asset('template-designs')}}">Design Templates</a></li>
                        <li><a href="{{asset('our-services')}}">Our Services</a></li>
                        <li><a href="{{asset('about-us')}}">About us</a></li>
                        <li><a href="{{asset('contact-us')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="search_box pull-right">
                    <form  method="POST" action="{{route('product.search')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="text" id="productsearch" name="productsearch" placeholder="Search product here...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>