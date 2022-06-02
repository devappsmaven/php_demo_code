<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
        <div class="pull-left image">
            <img src="{{asset('img/profile')}}{{'/'}}{{$user->image}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>{{$user->firstname}} {{$user->lastname}}</p>
            <a href=javascript:void(0)><i class="fa fa-circle text-success"></i> Online</a>
        </div>
        </div>
        <form action=javascript:void(0) method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>
        </div>
        </form>
        <ul class="sidebar-menu" data-widget="tree" data-api="tree" data-accordion=0>
            <li class="header">MAIN NAVIGATION</li>
            @canatleast(['admin.dashboard','admin.dashboard2','admin.charts'])
                <li class="treeview" id="dashboard-all">
                    <a href=javascript:void(0)>
                        <i class="fa fa-line-chart"></i> <span>Dashboard<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu" id="dashboard-menu">
                        @can('admin.dashboard')
                            <li id="dashboard-li"><a href="{{route('admin.dashboard')}}" id="dashboard-a"><i class="fa fa-list-alt"></i> Dashboard</a></li>
                        @endcan
                        <!--@can('admin.dashboard2')
                            <li id="dashboard2-li"><a href="{{route('admin.dashboard2')}}" id="dashboard2-a"><i class="fa fa-pencil-square-o"></i> Dashboard 2</a></li>
                        @endcan
                        @can('admin.charts')
                            <li id="charts-li"><a href="{{route('admin.charts')}}" id="charts-a"><i class="fa fa-pencil-square-o"></i> Dashboard Charts</a></li>
                        @endcan-->
                    </ul>
                </li>
            @endcan
            @canatleast(['orders.new','orders.all'])
                <li class="treeview" id="new-all">
                    <a href=javascript:void(0)>
                        <i class="fa fa-line-chart"></i> <span>Sales<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu" id="new-all-menu">
                        @can('orders.new')
                            <li><a href="{{route('orders.new')}}" id="new-a"><i class="fa fa-list-alt"></i> New Orders</a></li>
                        @endcan
                        @can('orders.all')
                            <li id="all-li"><a href="{{route('orders.all')}}" id="all-a"><i class="fa fa-pencil-square-o"></i> All Orders</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @canatleast(['orders.screenprinting','orders.digitalprinting','orders.embroidery'])
                <li class="treeview" id="department">
                    <a href=javascript:void(0)>
                        <i class="fa  fa-tasks"></i> <span>Department<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu" id="department-menu">
                        @can('orders.screenprinting')
                            <li><a href="{{route('orders.screenprinting')}}" id="screenprinting-a"><i class="fa  fa-pencil-square-o"></i> Screen Printing</a></li>
                        @endcan
                        @can('orders.digitalprinting')
                            <li id="all-li"><a href="{{route('orders.digitalprinting')}}" id="digitalprinting-a"><i class="fa fa-television"></i> Digital Printing</a></li>
                        @endcan
                        @can('orders.embroidery')
                            <li id="all-li"><a href="{{route('orders.embroidery')}}" id="embroidery-a"><i class="fa  fa-crosshairs"></i>Embroidery</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @canatleast(['promocodes.index'])
                <li class="treeview" id="promocode">
                    <a href=javascript:void(0)><i class="fa fa-clone"></i> <span>Promo Code<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu" id="promocode-menu">
                        @can('promocodes.index')
                            <li><a href="{{route('promocodes.index')}}" id="promocode-a"><i class="fa fa-qrcode"></i>Manage Promo Code</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan


                <li class="treeview" id="taxcharges">
                    <a href=javascript:void(0)><i class="fa fa-line-chart"></i> <span>Tax Charges<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu" id="promocode-menu">
                        <!-- @can('promocodes.index') -->
                            <li><a href="{{route('taxcharges.index')}}" id="taxcharges-a"><i class="fa fa-qrcode"></i>Manage Tax Charges</a></li>
                        <!-- @endcan -->
                    </ul>
                </li>

                <li class="treeview" id="stores">
                    <a href=javascript:void(0)><i class="fa  fa-tasks"></i> <span>Store's<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu" id="promocode-menu">
                        <!-- @can('promocodes.index') -->
                            <li><a href="{{route('stores.index')}}" id="taxcharges-a"><i class="fa fa-qrcode"></i>Manage Stores</a></li>
                        <!-- @endcan -->
                    </ul>
                </li>


            <li class="header">PRODUCTS SECTION</li>            
            @canatleast(['categories.index','subcategories.index','products.index'])
                <li class="treeview" id="product">
                    <a href=javascript:void(0)><i class="fa fa-reorder"></i> <span>Products<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu" id="product-menu">
                        @can('products.index')
                            <li><a href="{{route('products.index')}}" id="product-a"><i class="ion ion-tshirt"></i>Manage Products</a></li>
                        @endcan
                        @can('categories.index')
                            <li><a href="{{route('categories.index')}}" id="product-categories-a"><i class="fa fa-sort-amount-asc"></i>Categories</a></li>
                        @endcan
                        @can('subcategories.index')
                            <li><a href="{{route('subcategories.index')}}" id="product-subcategories-a"><i class="fa fa-sort-amount-desc"></i>SubCategories</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('shirtcolors.index')
                            <li><a href="{{route('shirtcolors.index')}}" id="shirt-color-a"><i class="ion ion-tshirt"></i>Shirt Colors</a></li>
            @endcan
            <!--            
            @canatleast(['shirtcolors.index','inkcolors.index'])
                <li class="treeview" id="shirt-ink-color">
                    <a href=javascript:void(0)><i class="fa fa-paint-brush"></i> <span>Manage Colors<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu" id="shirt-ink-color-menu">
                        @can('shirtcolors.index')
                            <li><a href="{{route('shirtcolors.index')}}" id="shirt-color-a"><i class="ion ion-tshirt"></i>Shirt Colors</a></li>
                        @endcan
                        @can('inkcolors.index')
                            <li><a href="{{route('inkcolors.index')}}" id="ink-color-a"><i class="fa fa-paint-brush"></i>Ink Colors</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan
           	-->
            @canatleast(['sizes.index'])
                <!--   <li class="treeview" id="size">
                 <a href=javascript:void(0)><i class="fa fa-arrows"></i> <span>Product Size<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu" id="size-menu"> -->
                        @can('sizes.index')
                            <li><a href="{{route('sizes.index')}}" id="size-a"><i class="fa fa-arrows-alt"></i>Manage Sizes</a></li>
                        @endcan
                    <!-- </ul>
                </li> -->
            @endcan
            @canatleast(['brands.index'])
               <!-- <li class="treeview" id="brand">
                    <a href=javascript:void(0)><i class="fa fa-shirtsinbulk"></i> <span>Brands<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu" id="brand-menu"> -->
                        @can('brands.index')
                            <li><a href="{{route('brands.index')}}" id="brand-a"><i class="fa fa-shirtsinbulk"></i>Manage Brands</a></li>
                        @endcan
                <!--    </ul>
                </li> -->
            @endcan
            @canatleast(['priceshirttable.index','pricediscounttable.index','pricepersonalizetable.index'])
                <li class="treeview" id="price">
                    <a href=javascript:void(0)><i class="fa fa-dollar"></i> <span>Printing Price<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu"  id="price-menu">
                        @can('priceshirttable.index')
                            <li><a href="{{route('priceshirttable.index')}}" id="price-shirt-table-a"><i class="fa fa-money"></i>Pricing Table</a></li>
                        @endcan
                        @can('pricediscounttable.index')
                            <li><a href="{{route('pricediscounttable.index')}}" id="price-discount-table-a"><i class="fa fa-money"></i>Pricing Discount Table</a></li>
                        @endcan
                        @can('pricepersonalizetable.index')
                            <li><a href="{{route('pricepersonalizetable.index')}}" id="price-personalize-table-a"><i class="fa fa-money"></i>Pricing Personalize Table</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan           
            @canatleast(['sides.index'])
            <li class="treeview" id="media">
                <a href=javascript:void(0)><i class="fa fa-hourglass"></i> <span>Print Placements<i class="fa fa-angle-left pull-right"></i></span></a>
                <ul class="treeview-menu"  id="sides-menu">
                    @can('sides.index')
                        <li><a href="{{route('sides.index')}}"  id="side-a"><i class="fa fa-hourglass-end"></i>Manage Side</a></li>
                    @endcan
                </ul>
            </li>
        	@endcan
        	<li class="header">DESIGN STUDIO</li>
        	    @can('clipartcategories.index')
                    <li><a href="{{route('clipartcategories.index')}}"  id="clipart-a"><i class="fa fa-picture-o"></i>Manage Cliparts</a></li>
                @endcan
           
            <!--
        	@canatleast(['clipartcategories.index'])
                <li class="treeview" id="clipart">
                    <a href=javascript:void(0)><i class="fa fa-picture-o"></i> <span>Cliparts<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu"  id="clipart-menu">
                        @can('clipartcategories.index')
                            <li><a href="{{route('clipartcategories.index')}}"  id="clipart-a"><i class="fa fa-picture-o"></i>Manage Cliparts</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan
       		-->
            @can('inkcolors.index')
                            <li><a href="{{route('inkcolors.index')}}" id="ink-color-a"><i class="fa fa-paint-brush"></i>Ink Colors</a></li>
            @endcan

            @canatleast(['fontscategories.index','fonts.index'])
                <li class="treeview" id="font">
                    <a href=javascript:void(0)><i class="fa fa-fonticons"></i> <span>Fonts<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu"  id="font-menu">
                        @can('fontscategories.index')
                            <li><a href="{{route('fontscategories.index')}}"  id="fonts-categories-a"><i class="fa fa-text-height"></i>Manage Fonts Categories</a></li>
                        @endcan
                        @can('fonts.index')
                            <li><a href="{{route('fonts.index')}}" id="fonts-a"><i class="fa fa-font"></i>Manage Fonts</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan

            @canatleast(['designs.index','admin.showopencart'])
                <li class="treeview" id="designs">
                    <a href=javascript:void(0)>
                        <i class="fa  fa-pencil-square"></i> <span>Designs<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu" id="designs-menu">
                        @can('designs.index')
                            <li><a href="{{route('designs.index')}}" id="designstudio-a"><i class="fa fa-magic"></i> All Designs</a></li>
                        @endcan
                        @can('admin.showopencart')
                            <li id="open-li"><a href="{{route('admin.showopencart')}}" id="open-a"><i class="fa fa-heartbeat"></i>Open Cart</a></li>
                        @endcan
                        @can('admin.showopencartsended')
                            <li id="open-li-sended"><a href="{{route('admin.showopencartsended')}}" id="open-a-sended"><i class="fa fa-heartbeat"></i>Open Cart Sended</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @canatleast(['templates.index','templates.categories','templates.subcategories','templates.pending'])
                <li class="treeview" id="templatesdesigns">
                    <a href=javascript:void(0)>
                        <i class="fa  fa-pencil-square"></i> <span>Templates Designs<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu" id="templatesdesigns-menu">
                        @can('templates.index')
                            <li id="template-li"><a href="{{route('templates.index')}}" id="templates-a"><i class="fa fa-ship"></i> View All</a></li>
                        @endcan
                        @can('templates.categories')
                            <li id="templates-categories-li"><a href="{{route('templates.categories')}}" id="templates-categories-a"><i class="fa fa-gift"></i>Categories</a></li>
                        @endcan
                        @can('templates.subcategories')
                            <li id="templates-subcategories-li"><a href="{{route('templates.subcategories')}}" id="templates-subcategories-a"><i class="fa fa-heartbeat"></i>Sub Categories</a></li>
                        @endcan
                        @can('templates.pending')
                            <li id="templates-pending-li"><a href="{{route('templates.pending')}}" id="pending-a"><i class="fa fa-heartbeat"></i>Pending</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan
            <li class="header">EMBROIDERY</li>
                @can('clipartcategoriesembroidery.index')
                    <li><a href="{{route('clipartcategoriesembroidery.index')}}"  id="clipart-a"><i class="fa fa-picture-o"></i>Manage Embroidery ClipArts</a></li>
                @endcan
                @can('templatecategoriesembroidery.index')
                    <li><a href="{{route('templatecategoriesembroidery.index')}}"  id="clipart-a"><i class="fa fa-picture-o"></i>Manage Embroidery Templates</a></li>
                @endcan
                @canatleast(['priceshirttableembroidery.index','pricediscounttableembroidery.index','pricepersonalizetableembroidery.index'])
                    <li class="treeview" id="price">
                        <a href=javascript:void(0)><i class="fa fa-dollar"></i> <span>Embroidery Printing Price<i class="fa fa-angle-left pull-right"></i></span></a>
                        <ul class="treeview-menu"  id="price-menu">
                            @can('priceshirttableembroidery.index')
                                <li><a href="{{route('priceshirttableembroidery.index')}}" id="price-shirt-table-a"><i class="fa fa-money"></i>Pricing Table</a></li>
                            @endcan
                            @can('pricediscounttable.index')
                                <li><a href="{{route('pricediscounttableembroidery.index')}}" id="price-discount-table-a"><i class="fa fa-money"></i>Pricing Discount Table</a></li>
                            @endcan
                        </ul>
                    </li>
                @endcan
            <li class="header">ASSOCIATES - USERS</li>
            @canatleast(['users.index'])
                <li class="treeview" id="user-role">
                    <a href=javascript:void(0)>
                        <i class="fa fa-user-plus"></i> <span>Manage Users<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu" id="user-role-menu">
                        @can('users.index')
                            <li><a href="{{route('users.index')}}" id="user-a"><i class="fa fa-user"></i> Users</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @canatleast(['roles.index','associates.index'])
                <li class="treeview" id="associate-role">
                    <a href=javascript:void(0)>
                        <i class="fa fa-user-plus"></i> <span>Manage Associates<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu" id="associate-role-menu">
                        @can('associates.index')
                            <li><a href="{{route('associates.index')}}" id="associate-a"><i class="fa fa-user"></i> Associates</a></li>
                        @endcan
                        @can('roles.index')
                            <li id="role-li"><a href="{{route('roles.index')}}" id="role-a"><i class="fa fa-users"></i> Roles</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan
                        
            <li class="header">MANAGE PAGES</li>
            @canatleast(['admin.shownewsletters','admin.newslettershistory'])
                <li class="treeview" id="newsletter">
                    <a href=javascript:void(0)><i class="fa fa-envelope"></i> <span>Newsletters<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu" id="newsletter-menu">
                        @can('admin.shownewsletters')
                            <li><a href="{{ route('admin.shownewsletters') }}" id="newsletter-a"><i class="fa fa-envelope-o"></i>Send Newsletters</a></li>
                        @endcan
                        @can('admin.newslettershistory')
                            <li><a href="{{  route('admin.newslettershistory') }}" id="newsletterhistory-a"><i class="fa fa-envelope"></i>Newsletters History</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @canatleast(['storedesign.index'])
                <li class="treeview" id="storedesign">
                    <a href=javascript:void(0)>
                        <i class="fa  fa-pencil-square"></i> <span>Store Designs<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu" id="storedesign-menu">
                       @can('storedesign.index')
                            <li id="storedesign-li"><a href="{{route('storedesign.index')}}" id="storedesign-a"><i class="fa fa-gift"></i>Store Designs</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @canatleast(['record.index'])
                <li class="treeview" id="history">
                    <a href=javascript:void(0)><i class="fa fa-globe"></i> <span>History Record <i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu" id="history-menu">
                        @can('records.index')
                            <li><a href="{{route('records.index')}}" id="history-a"><i class="fa fa-history"></i>All Records</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @canatleast(['reservedwords.index'])
                <li class="treeview" id="reserved-word">
                    <a href=javascript:void(0)><i class="fa fa-clone"></i> <span>Reserved Words<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu" id="reserved-word-menu">
                        @can('reservedwords.index')
                            <li><a href="{{route('reservedwords.index')}}"  id="reserved-word-a"><i class="fa fa-file-word-o"></i>Manage Reserved Words</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @canatleast(['themes.index'])
                <li class="treeview" id="appearance">
                    <a href=javascript:void(0)><i class="fa fa-building"></i> <span>Appearance<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu"  id="appearance-menu">
                        @can('themes.index')
                            <li><a href="{{route('themes.index')}}"  id="appearance-a"><i class="fa fa-building-o"></i>Theme</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @canatleast(['posts.index','posts.categories','posts.tags','posts.subcategories'])
                <li class="treeview" id="post">
                    <a href=javascript:void(0)><i class="fa fa-newspaper-o"></i> <span>Post<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu"  id="post-menu">
                        @can('posts.index')
                            <li><a href="{{route('posts.index')}}"  id="post-index"><i class="fa fa-newspaper-o"></i>Manage Posts</a></li>
                        @endcan
                        @can('posts.categories')
                            <li><a href="{{route('posts.categories')}}"  id="post-categories"><i class="fa fa-sort-amount-asc"></i>Categories</a></li>
                        @endcan
                        @can('posts.subcategories')
                            <li><a href="{{route('posts.subcategories')}}"  id="post-subcategories"><i class="fa fa-sort-amount-desc"></i>Subcategories</a></li>
                        @endcan
                        @can('posts.tags')
                            <li><a href="{{route('posts.tags')}}"  id="post-tags"><i class="fa fa-tags"></i>Tags</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @canatleast(['gallerys.index'])
                <li class="treeview" id="gallery">
                    <a href=javascript:void(0)><i class="fa fa-newspaper-o"></i> <span>Gallery<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu"  id="gallery-menu">
                        @can('gallerys.index')
                            <li><a href="{{route('gallerys.index')}}"  id="gallery-a"><i class="fa fa-newspaper-o"></i>Manage Galleries</a></li>
                        @endcan
                        @can('gallerys.categories')
                            <li><a href="{{route('gallerys.categories')}}"  id="gallery-categories"><i class="fa fa-sort-amount-asc"></i>Categories</a></li>
                        @endcan
                        @can('gallerys.subcategories')
                            <li><a href="{{route('gallerys.subcategories')}}"  id="gallery-subcategories"><i class="fa fa-sort-amount-desc"></i>Subcategories</a></li>
                        @endcan
                        @can('gallerys.tags')
                            <li><a href="{{route('gallerys.tags')}}"  id="gallery-tags"><i class="fa fa-tags"></i>Tags</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @canatleast(['stores.index','stores.designers','stores.categories','stores.subcategories'])
                <!--<li class="treeview" id="stores">
                    <a href=javascript:void(0)><i class="fa fa-newspaper-o"></i> <span>Store<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu"  id="stores-menu">
                        @can('stores.index')
                            <li><a href="{{route('stores.index')}}"  id="stores-index"><i class="fa fa-newspaper-o"></i>Applications</a></li>
                        @endcan
                        @can('stores.designers')
                            <li><a href="{{route('stores.designers')}}"  id="stores-designers"><i class="fa fa-sort-amount-asc"></i>Designers</a></li>
                        @endcan
                        @can('stores.categories')
                            <li><a href="{{route('stores.categories')}}"  id="stores-categories"><i class="fa fa-sort-amount-desc"></i>Categories</a></li>
                        @endcan
                        @can('stores.subcategories')
                            <li><a href="{{route('stores.subcategories')}}"  id="stores-subcategories"><i class="fa fa-sort-amount-desc"></i>Subcategories</a></li>
                        @endcan
                    </ul>
                </li>-->
            @endcan
            @canatleast(['tags.index'])
                <!--<li class="treeview" id="tag">
                    <a href=javascript:void(0)><i class="fa fa-tags"></i> <span>Tags<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu"  id="tag-menu">
                        @can('tags.index')
                            <li><a href="{{route('tags.index')}}"  id="tag-a"><i class="fa fa-tag"></i>Manage Tags</a></li>
                        @endcan
                    </ul>
                </li>-->
            @endcan
            @canatleast(['comments.index'])
                <li class="treeview" id="comment">
                    <a href=javascript:void(0)><i class="fa fa-comments"></i> <span>Comments<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu"  id="comment-menu">
                        @can('comments.index')
                            <li><a href="{{route('comments.index')}}"  id="comment-a"><i class="fa fa-commenting"></i>Manage Comments</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @canatleast(['pages.index'])
                <li class="treeview" id="page">
                    <a href=javascript:void(0)><i class="fa fa-chrome"></i> <span>Pages<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu"  id="page-menu">
                        @can('pages.index')
                            <li><a href="{{route('pages.index')}}"  id="page-a"><i class="fa fa-chrome"></i>Manage Pages</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @canatleast(['components.index'])
                <li class="treeview" id="component">
                    <a href=javascript:void(0)><i class="fa fa-bookmark"></i> <span>Page Components<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu"  id="component-menu">
                        @can('components.index')
                            <li><a href="{{route('components.index')}}"  id="component-a"><i class="fa fa-bookmark-o"></i>Manage Page Components</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @canatleast(['medias.index'])
                <li class="treeview" id="media">
                    <a href=javascript:void(0)><i class="fa fa-picture-o"></i> <span>Media<i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu"  id="media-menu">
                        @can('medias.index')
                            <li><a href="{{route('medias.index')}}"  id="media-a"><i class="fa fa-picture-o"></i>Manage Media</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan
           
        </ul>
    </section>
</aside>