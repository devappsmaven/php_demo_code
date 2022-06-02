<div class="mobile_header">
         <a href="#" class="d-block px-3 py-2 text-center text-bold text-white" style="background-color: #00BBEA;font-weight: bold;">Please note: Our site is currently under maintenance and certain features are unavailable</a>
         <div class="wrapper">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar-header">
                  <img src="<?php echo e(asset('images/support 3.png')); ?>" alt="" title=""/>
                  <h3>Talk to a Real Person</h3>
                  <h2>(800) 648-8518</h2>
               </div>
               <ul class="list-unstyled components">
                  <li>
                     <a href="<?php echo e(asset('designstudio')); ?>">Design Studio</a>
                  </li>
                  <li>
                     <a href="#" class="homeSubmenu">Products<i class="fa fa-plus"></i></a>
                     <ul class="collapse list-unstyled" id="homeSubmenu">
                      <?php $__currentLoopData = $productcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                          <a href="<?php echo e(asset('product')); ?>/category/<?php echo e($category->slug); ?>"><?php echo e($category->name); ?></a>
                        </li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </ul>
                  </li>
                  <li>
                     <a href="<?php echo e(asset('template-designs')); ?>">Designs Template</a>
                  </li>
                  <li>
                     <a href="<?php echo e(asset('contact-us')); ?>">Contact us</a>
                  </li>
                  <li>
                     <a href="<?php echo e(asset('price-quote')); ?>">Price Quote</a>
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

