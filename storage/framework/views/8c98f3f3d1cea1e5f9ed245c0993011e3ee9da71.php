<?php $__env->startSection('title',"$page->title"); ?>
<?php $__env->startSection('content'); ?>

<?php if($page->headercomponents->count() > 0): ?>
<header class="header-area header-wrapper" id="header">
    <?php $__currentLoopData = $page->headercomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</header>
<?php endif; ?>
<div id="app">
<?php if($theme->name == 'default'): ?>
    <?php if($page->mobileareacomponents->count() > 0): ?>
        <?php $__currentLoopData = $page->mobileareacomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <section id="page-content" class="mobile_bar">
          <div class="logo_responsive">
            <a class="navbar-brand" href="<?php echo e(asset('index')); ?>"> <img src="<?php echo e(asset('images/logo.png')); ?>" alt="" title=""/></a>
         </div>
        <?php if($page->slug === 'products' || $page->slug === 'single-product'): ?>
            <div class="container_fixed top">
                <?php echo $__env->make('common.alerts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php if($page->leftsidecomponents->count() > 0 || $page->bodycomponents->count() > 0 || $page->rightsidecomponents->count() > 0): ?>
                    <?php $__currentLoopData = $page->leftsidecomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $page->bodycomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $page->rightsidecomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <?php echo $__env->make('common.alerts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php if($page->leftsidecomponents->count() > 0 || $page->bodycomponents->count() > 0 || $page->rightsidecomponents->count() > 0): ?>
                <?php $__currentLoopData = $page->leftsidecomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $page->bodycomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $page->rightsidecomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endif; ?>
    </section>
<?php elseif($theme->name == 'subas'): ?>
    <?php if($page->mobileareacomponents->count() > 0): ?>
        <?php $__currentLoopData = $page->mobileareacomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <section id="page-content" class="page-wrapper">
        <div class="blog-section mb-50">
            <div class="container">
                <div class="row">
                    <?php echo $__env->make('common.alerts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php if($page->leftsidecomponents->count() > 0 && $page->bodycomponents->count() > 0 && $page->rightsidecomponents->count() > 0): ?>
                        <div class="col-md-3 col-xs-12">
                            <?php $__currentLoopData = $page->leftsidecomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <?php $__currentLoopData = $page->bodycomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="col-md-3 col-xs-12">
                            <?php $__currentLoopData = $page->rightsidecomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php elseif($page->leftsidecomponents->count() > 0 && $page->bodycomponents->count() > 0 && $page->rightsidecomponents->count() == 0): ?>
                        <div class="col-md-3 col-xs-12">
                            <?php $__currentLoopData = $page->leftsidecomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="col-md-9 col-xs-12">
                            <?php $__currentLoopData = $page->bodycomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php elseif($page->leftsidecomponents->count() == 0 && $page->bodycomponents->count() > 0 && $page->rightsidecomponents->count() > 0): ?>
                        <div class="col-md-9 col-xs-12">
                            <?php $__currentLoopData = $page->bodycomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="col-md-3 col-xs-12">
                            <?php $__currentLoopData = $page->rightsidecomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php elseif($page->leftsidecomponents->count() == 0 && $page->bodycomponents->count() > 0 && $page->rightsidecomponents->count() == 0): ?>
                        <div class="col-md-12 col-xs-12">
                            <?php $__currentLoopData = $page->bodycomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php elseif($page->leftsidecomponents->count() > 0 && $page->bodycomponents->count() == 0 && $page->rightsidecomponents->count() == 0): ?>
                       <div class="col-md-3 col-xs-12">
                            <?php $__currentLoopData = $page->leftsidecomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php elseif($page->leftsidecomponents->count() == 0 && $page->bodycomponents->count() == 0 && $page->rightsidecomponents->count() > 0): ?>
                        <div class="col-md-3 col-xs-12">
                            <?php $__currentLoopData = $page->rightsidecomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php else: ?>
                        <div class="col-md-12 col-xs-12">

                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php elseif($theme->name == 'eshopper'): ?>
    <?php if($page->mobileareacomponents->count() > 0): ?>
    <?php $__currentLoopData = $page->mobileareacomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <section>
        <div class="container">
            <div class="row">
            <?php echo $__env->make('common.alerts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php if($page->leftsidecomponents->count() > 0 && $page->bodycomponents->count() > 0 && $page->rightsidecomponents->count() > 0): ?>
                    <div class="col-md-3 col-xs-12">
                        <div class="left-sidebar">
                            <?php $__currentLoopData = $page->leftsidecomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <?php $__currentLoopData = $page->bodycomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="left-sidebar">
                            <?php $__currentLoopData = $page->rightsidecomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php elseif($page->leftsidecomponents->count() > 0 && $page->bodycomponents->count() > 0 && $page->rightsidecomponents->count() == 0): ?>
                    <div class="col-md-3 col-xs-12">
                        <div class="left-sidebar">
                            <?php $__currentLoopData = $page->leftsidecomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <?php $__currentLoopData = $page->bodycomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php elseif($page->leftsidecomponents->count() == 0 && $page->bodycomponents->count() > 0 && $page->rightsidecomponents->count() > 0): ?>
                    <div class="col-md-9 col-xs-12">
                        <?php $__currentLoopData = $page->bodycomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="left-sidebar">
                            <?php $__currentLoopData = $page->rightsidecomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php elseif($page->leftsidecomponents->count() == 0 && $page->bodycomponents->count() > 0 && $page->rightsidecomponents->count() == 0): ?>
                    <div class="col-md-12 col-xs-12">
                        <?php $__currentLoopData = $page->bodycomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php elseif($page->leftsidecomponents->count() > 0 && $page->bodycomponents->count() == 0 && $page->rightsidecomponents->count() == 0): ?>
                    <div class="col-md-3 col-xs-12">
                        <div class="left-sidebar">
                            <?php $__currentLoopData = $page->leftsidecomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php elseif($page->leftsidecomponents->count() == 0 && $page->bodycomponents->count() == 0 && $page->rightsidecomponents->count() > 0): ?>
                    <div class="col-md-3 col-xs-12">
                        <div class="left-sidebar">
                            <?php $__currentLoopData = $page->rightsidecomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

</div>
<?php if($page->footercomponents->count() > 0): ?>
    <footer id="footer" class="footer-area container_fixed">
        <?php $__currentLoopData = $page->footercomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($component->status == 'Enable' && $component->active): ?> <?php echo $__env->make( 'layouts.'.$theme->name.".".$component->slug, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </footer>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>