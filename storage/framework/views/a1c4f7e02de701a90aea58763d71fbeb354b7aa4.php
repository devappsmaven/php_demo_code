<!doctype html>
<html class="no-js" lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vivid Customs || <?php echo $__env->yieldContent('title'); ?></title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Vivid Customs">
    <meta name="description" content="<?php echo e($page->meta_description ?? ''); ?>">
    <meta name="keywords" content="<?php echo e($page->meta_key ?? ''); ?>">
    <!-- Favicon-->
    <?php if(file_exists(public_path('/img/logo/favicon.png'))): ?>
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('/img/logo/favicon.png')); ?><?php echo '?v='.rand(); ?>">
    <?php else: ?>
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('/img/icon/favicon.png')); ?><?php echo '?v='.rand(); ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/frontend/default/bootstrap.css')); ?><?php echo '?v='.rand(); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/frontend/default/bootstrap.min.css')); ?><?php echo '?v='.rand(); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/frontend/default/font.css')); ?><?php echo '?v='.rand(); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/frontend/default/style.css')); ?><?php echo '?v='.rand(); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/frontend/default/media-queries.css')); ?><?php echo '?v='.rand(); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/shirtcolors.css')); ?><?php echo '?v='.rand(); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/frontend/default/new-style.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/frontend/default/lightslider.css')); ?><?php echo '?v='.rand(); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('css/frontend/default/pagination.css')); ?><?php echo '?v='.rand(); ?>">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <?php echo $__env->yieldContent('content'); ?>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <!-- Popper.JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
      <!-- Bootstrap JS -->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
      <script type="text/javascript">
         $(document).ready(function () {
             $('#sidebarCollapse').on('click', function (event) {
                 event.stopPropagation();
                 $('#sidebar').toggleClass('active');
                 $('.mobile_bar').toggleClass('activemobile_bar');
             });
             $('#sidebar').click(function(event) {
                event.stopPropagation();
             })

             $('.homeSubmenu').click(function(event) {
                event.stopPropagation();
                $('#homeSubmenu').toggleClass('collapse');
             })

             $('html, body').click(function(){
               if ($('#sidebar').hasClass('active')){
                  $('#sidebar').removeClass('active');
                  $('.mobile_bar').removeClass('activemobile_bar');
               }
             });
         });
      </script>

      <script>$("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
         $(e.target)
           .prev()
           .find("i:last-child")
           .toggleClass("fa-minus fa-plus");
         });
      </script>
      <script src="<?php echo e(asset('js/frontend/subas/vendor/jquery-3.1.1.min.js')); ?><?php echo '?v='.rand(); ?>"></script>
      <script src="<?php echo e(asset('js/frontend/default/bootstrap.js')); ?><?php echo '?v='.rand(); ?>"></script>
      <script src="<?php echo e(asset('js/frontend/default/bootstrap.min.js')); ?><?php echo '?v='.rand(); ?>"></script>
      <script src="<?php echo e(asset('js/frontend/default/custom.js')); ?><?php echo '?v='.rand(); ?>"></script>
      <script src="<?php echo e(asset('js/frontend/default/lightslider.js')); ?><?php echo '?v='.rand(); ?>"></script>
      <script src="<?php echo e(asset('js/app.js')); ?><?php echo '?v='.rand(); ?>"></script>
      <script type="text/javascript">
         $(document).ready(function() {
             $('#lightSlider').lightSlider({
                 gallery:true,
                 item:1,
                 loop:true,
                 auto: false,
                 thumbItem:4,
                 slideMargin:20,
                 slideEndAnimation: true,
                 pause: 2000,
                 enableDrag: false,
                 cssEasing: 'ease',
                 easing: 'linear',
                 verticalHeight:500,
                 thumbMargin: 5,
                 currentPagerPosition:'middle',
                 prevHtml :'<i class="fas fa-arrow-left"></i>',
                 nextHtml :'<i class="fas fa-arrow-right"></i>',
                 onSliderLoad: function(el) {
                     // el.lightGallery({
                     //     selector: '#lightSlider .lslide'
                     // });
                 }
             });
         });
         $(document).ready(function() {
             // $("#lightSlider").lightSlider({
             //     item: 4,
             //     autoWidth: true,
             //     slideMove: 1, // slidemove will be 1 if loop is true
             //     slideMargin: 10,
             //     auto: true,
             //     loop: true,
             //     thumbItem:4,
             //     prevHtml :'<i class="fas fa-arrow-left"></i>',
             //     nextHtml :'<i class="fas fa-arrow-right"></i>',
             //     controls : true,
             //     gallery: true,
             //     currentPagerPosition: 'middle',

             //     onBeforeStart: function (el) {},
             //     onSliderLoad: function (el) {},
             //     onBeforeSlide: function (el) {},
             //     onAfterSlide: function (el) {},
             //     onBeforeNextSlide: function (el) {},
             //     onBeforePrevSlide: function (el) {}
             // });
         });
      </script>
</body>

</html>
