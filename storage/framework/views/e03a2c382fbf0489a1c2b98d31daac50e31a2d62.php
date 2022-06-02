<header class="header_bg">
    <div href="#" class="d-block px-3 py-2 text-center text-bold text-white" style="background-color: #00BBEA;font-weight: bold;">Please note: Our site is currently under maintenance and certain features are unavailable</div>
    <?php if(auth()->guard()->guest()): ?>
        <div class="top_header top_padding">
            <div class="container_fixed">
                <div class="top_icons">
                    <div class="price_bg">
                        <img src="<?php echo e(asset('images/price.png')); ?>"/>
                        <span><a href="<?php echo e(url('price-quote')); ?>">Price Quote</a></span>
                        <!--<a href="#"  data-toggle="modal"  data-target="#getaquote" title="Quickview" style="color: #ffffff; height: 40px; line-height: 40px; overflow: hidden; padding: 10px 20px; text-align: center; text-transform: capitalize; white-space: nowrap; width: 50px;" onclick="startqetaquote();">
                            <span>Price Quote</span>
                        </a>-->
                    </div>
                    <div class="price_bg">
                        <img src="<?php echo e(asset('images/account.png')); ?>"/>
                        <span><a href="<?php echo e(url('login')); ?>">My Account</a></span>
                    </div>
                    <div class="price_bg">
                        <img src="<?php echo e(asset('images/cart.png')); ?>"/>
                        <span><a href="<?php echo e(url('login')); ?>">My Store</a></span>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if(auth()->guard()->check()): ?>
        <div class="top_header top_padding">
            <div class="container_fixed">
                <div class="top_icons">
                    <div class="price_bg">
                        <img src="<?php echo e(asset('images/price.png')); ?>"/>
                        <span><a href="<?php echo e(url('price-quote')); ?>">Price Quote</a></span>
                    </div>
                    <div class="price_bg">
                        <img src="<?php echo e(asset('images/account.png')); ?>"/>
                        <span>
                            <div class="dropdown" style="cursor:pointer;">
                                <span type="button" data-toggle="dropdown">
                                    My Account
                                </span>
                                <div class="dropdown-menu">
                                    <h5 class="dropdown-header"> Welcome,  <?php echo e(Auth::user()->firstname); ?></h5>
                                    <h5 class="dropdown-header"><a href="<?php echo e(url('my-account')); ?>"><span style="color:#6c757d;"><i class="fa fa-user"></i>  My Account</span></a></h5>
                                    <h5 class="dropdown-header">
                                        <a href="<?php echo e(route('logout')); ?>"  onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        <span style="color:#6c757d;margin-top: 10px;"><i class="fa fa-power-off"></i>  Logout</span>
                                        </a>
                                    </h5>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo e(csrf_field()); ?>

                                    </form>
                                </div>
                            </div>
                        </span>
                    </div>
                    <div class="price_bg">
                        <img src="<?php echo e(asset('images/cart.png')); ?>"/>
                        <?php if(in_array('Store Designer', Auth::user()->roles->pluck('name')->toArray())): ?>
                            <span><a href="<?php echo e(url('my-store')); ?>">My Store</a></span>
                        <?php else: ?>                                                    
                            <span><a href="<?php echo e(url('store-subscribe')); ?>">My Store</a></span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
        <div class="menu_bg">
        <div class="container_fixed">
            <div class="row">
                <div class="col-md-2">
                    <a href="<?php echo e(url('/')); ?>"> <img src="<?php echo e(asset('images/logo.png')); ?>"/></a>
                </div>
                <div class="col-md-6">
                    <?php if(!empty($component)): ?>
                        <?php echo $component->content; ?>

                    <?php endif; ?>
                </div>
                <div class="col-md-4">
                    <a class="design_btn" href="<?php echo e(url('designstudio')); ?>"><center>Start Designing</center> </a>
                    <a class="support_text" href="tel:8006488518">
                    <img src="<?php echo e(asset('images/support.png')); ?>"/>
                    <span>(800) 648-8518</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
