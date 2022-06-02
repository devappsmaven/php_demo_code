<html lang="en"><head>
<meta charset="UTF-8">
<title>CodePen - Fullscreen drag-slider with parallax</title>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
<style>
@font-face {
  src: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/polar.otf");
  font-family: 'Polar';
}
*, *:before, *:after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

html, body {
  font-size: 62.5%;
  height: 100%;
  overflow: hidden;
}

body {
  /*background: #000;*/
}

svg {
  display: block;
  overflow: visible;
}

.slider-container {
  position: relative;
  height: 400px;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  cursor: all-scroll;
}

.slider-control {
  z-index: 2;
  position: absolute;
  top: 0;
  width: 12%;
  height: 100%;
  -webkit-transition: opacity 0.3s;
  transition: opacity 0.3s;
  will-change: opacity;
  opacity: 0;
}
.slider-control.inactive:hover {
  cursor: auto;
}
.slider-control:not(.inactive):hover {
  opacity: 1;
  cursor: pointer;
}
.slider-control.left {
  left: 0;
  background: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, 0.18)), to(rgba(0, 0, 0, 0)));
  background: linear-gradient(to right, rgba(0, 0, 0, 0.18) 0%, rgba(0, 0, 0, 0) 100%);
}
.slider-control.right {
  right: 0;
  background: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, 0)), to(rgba(0, 0, 0, 0.18)));
  background: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.18) 100%);
}

.slider-pagi {
  position: absolute;
  z-index: 3;
  left: 50%;
  bottom: 2rem;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  font-size: 0;
  list-style-type: none;
}
.slider-pagi__elem {
  position: relative;
  display: inline-block;
  vertical-align: top;
  width: 2rem;
  height: 2rem;
  margin: 0 0.5rem;
  border-radius: 50%;
  border: 2px solid #fff;
  cursor: pointer;
}
.slider-pagi__elem:before {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  width: 1.2rem;
  height: 1.2rem;
  background: #fff;
  border-radius: 50%;
  -webkit-transition: -webkit-transform 0.3s;
  transition: -webkit-transform 0.3s;
  transition: transform 0.3s;
  transition: transform 0.3s, -webkit-transform 0.3s;
  -webkit-transform: translate(-50%, -50%) scale(0);
          transform: translate(-50%, -50%) scale(0);
}
.slider-pagi__elem.active:before, .slider-pagi__elem:hover:before {
  -webkit-transform: translate(-50%, -50%) scale(1);
          transform: translate(-50%, -50%) scale(1);
}

.slider {
  z-index: 1;
  position: relative;
  height: 100%;
}
.slider.animating {
  -webkit-transition: -webkit-transform 0.5s;
  transition: -webkit-transform 0.5s;
  transition: transform 0.5s;
  transition: transform 0.5s, -webkit-transform 0.5s;
  will-change: transform;
}
.slider.animating .slide__bg {
  -webkit-transition: -webkit-transform 0.5s;
  transition: -webkit-transform 0.5s;
  transition: transform 0.5s;
  transition: transform 0.5s, -webkit-transform 0.5s;
  will-change: transform;
}

.slide {
  position: absolute;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
}
.slide.active .slide__overlay,
.slide.active .slide__text {
  opacity: 1;
  -webkit-transform: translateX(0);
          transform: translateX(0);
}
.slide__bg {
  position: absolute;
  top: 0;
  left: -50%;
  width: 100%;
  height: 100%;
  background-size: cover;
  will-change: transform;
}
.slide:nth-child(1) {
  left: 0;
}
.slide:nth-child(1) .slide__bg {
  left: 0;
  background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/3d-slider-3.jpg");
}
.slide:nth-child(1) .slide__overlay-path {
  fill: #e99c7e;
}
@media (max-width: 991px) {
  .slide:nth-child(1) .slide__text {
    background-color: rgba(233, 156, 126, 0.8);
  }
}
.slide:nth-child(2) {
  left: 100%;
}
.slide:nth-child(2) .slide__bg {
  left: -50%;
  background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/3d-slider-2.jpg");
}
.slide:nth-child(2) .slide__overlay-path {
  fill: #e1ccae;
}
@media (max-width: 991px) {
  .slide:nth-child(2) .slide__text {
    background-color: rgba(225, 204, 174, 0.8);
  }
}
.slide:nth-child(3) {
  left: 200%;
}
.slide:nth-child(3) .slide__bg {
  left: -100%;
  background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/3d-slider-1.jpg");
}
.slide:nth-child(3) .slide__overlay-path {
  fill: #adc5cd;
}
@media (max-width: 991px) {
  .slide:nth-child(3) .slide__text {
    background-color: rgba(173, 197, 205, 0.8);
  }
}
.slide:nth-child(4) {
  left: 300%;
}
.slide:nth-child(4) .slide__bg {
  left: -150%;
  background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/3d-slider-4.jpg");
}
.slide:nth-child(4) .slide__overlay-path {
  fill: #cbc6c3;
}
@media (max-width: 991px) {
  .slide:nth-child(4) .slide__text {
    background-color: rgba(203, 198, 195, 0.8);
  }
}
.slide__content {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.slide__overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  height: 100%;
  min-height: 810px;
  -webkit-transition: opacity 0.2s 0.5s, -webkit-transform 0.5s 0.5s;
  transition: opacity 0.2s 0.5s, -webkit-transform 0.5s 0.5s;
  transition: transform 0.5s 0.5s, opacity 0.2s 0.5s;
  transition: transform 0.5s 0.5s, opacity 0.2s 0.5s, -webkit-transform 0.5s 0.5s;
  will-change: transform, opacity;
  -webkit-transform: translate3d(-20%, 0, 0);
          transform: translate3d(-20%, 0, 0);
  opacity: 0;
}
@media (max-width: 991px) {
  .slide__overlay {
    display: none;
  }
}
.slide__overlay path {
  opacity: 0.8;
}
.slide__text {
  position: absolute;
  width: 25%;
  bottom: 15%;
  left: 12%;
  color: #fff;
  -webkit-transition: opacity 0.5s 0.8s, -webkit-transform 0.5s 0.8s;
  transition: opacity 0.5s 0.8s, -webkit-transform 0.5s 0.8s;
  transition: transform 0.5s 0.8s, opacity 0.5s 0.8s;
  transition: transform 0.5s 0.8s, opacity 0.5s 0.8s, -webkit-transform 0.5s 0.8s;
  will-change: transform, opacity;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  opacity: 0;
}
@media (max-width: 991px) {
  .slide__text {
    left: 0;
    bottom: 0;
    width: 100%;
    height: 20rem;
    text-align: center;
    -webkit-transform: translateY(50%);
            transform: translateY(50%);
    -webkit-transition: opacity 0.5s 0.5s, -webkit-transform 0.5s 0.5s;
    transition: opacity 0.5s 0.5s, -webkit-transform 0.5s 0.5s;
    transition: transform 0.5s 0.5s, opacity 0.5s 0.5s;
    transition: transform 0.5s 0.5s, opacity 0.5s 0.5s, -webkit-transform 0.5s 0.5s;
    padding: 0 1rem;
  }
}
.slide__text-heading {
  font-family: "Polar", Helvetica, Arial, sans-serif;
  font-size: 5rem;
  margin-bottom: 2rem;
}
@media (max-width: 991px) {
  .slide__text-heading {
    line-height: 20rem;
    font-size: 3.5rem;
  }
}
.slide__text-desc {
  font-family: "Open Sans", Helvetica, Arial, sans-serif;
  font-size: 1.8rem;
  margin-bottom: 1.5rem;
}
@media (max-width: 991px) {
  .slide__text-desc {
    display: none;
  }
}
.slide__text-link {
  z-index: 5;
  display: inline-block;
  position: relative;
  padding: 0.5rem;
  cursor: pointer;
  font-family: "Open Sans", Helvetica, Arial, sans-serif;
  font-size: 2.3rem;
  -webkit-perspective: 1000px;
          perspective: 1000px;
}
@media (max-width: 991px) {
  .slide__text-link {
    display: none;
  }
}
.slide__text-link:before {
  z-index: -1;
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #000;
  -webkit-transform-origin: 50% 100%;
          transform-origin: 50% 100%;
  -webkit-transform: rotateX(-85deg);
          transform: rotateX(-85deg);
  -webkit-transition: -webkit-transform 0.3s;
  transition: -webkit-transform 0.3s;
  transition: transform 0.3s;
  transition: transform 0.3s, -webkit-transform 0.3s;
  will-change: transform;
}
.slide__text-link:hover:before {
  -webkit-transform: rotateX(0);
          transform: rotateX(0);
}
</style>
<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</head>
<body translate="no">
<div class="slider-container">
  <div class="slider-control left inactive"></div>
  <div class="slider-control right"></div>
  <ul class="slider-pagi"></ul>
  <div class="slider">
    <div class="slide slide-0 active">
      <div class="slide__bg"></div>
      <div class="slide__content">
        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
          <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
        </svg>
        <div class="slide__text">
          <h2 class="slide__text-heading">Project name 1</h2>
          <p class="slide__text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia.</p>
          <a class="slide__text-link">Project link</a>
        </div>
      </div>
    </div>
    <div class="slide slide-1 ">
      <div class="slide__bg"></div>
      <div class="slide__content">
        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
          <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
        </svg>
        <div class="slide__text">
          <h2 class="slide__text-heading">Project name 2</h2>
          <p class="slide__text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia.</p>
          <a class="slide__text-link">Project link</a>
        </div>
      </div>
    </div>
    <div class="slide slide-2">
      <div class="slide__bg"></div>
      <div class="slide__content">
        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
          <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
        </svg>
        <div class="slide__text">
          <h2 class="slide__text-heading">Project name 3</h2>
          <p class="slide__text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia.</p>
          <a class="slide__text-link">Project link</a>
        </div>
      </div>
    </div>
    <div class="slide slide-3">
      <div class="slide__bg"></div>
      <div class="slide__content">
        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
          <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
        </svg>
        <div class="slide__text">
          <h2 class="slide__text-heading">Project name 4</h2>
          <p class="slide__text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia.</p>
          <a class="slide__text-link">Project link</a>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script id="rendered-js">
$(document).ready(function () {

    var t;

    function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    //document.getElementById('txt').innerHTML =
    //h + ":" + m + ":" + s;
    t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
    }

  var $slider = $(".slider"),
  $slideBGs = $(".slide__bg"),
  diff = 0,
  curSlide = 0,
  numOfSlides = $(".slide").length - 1,
  animating = false,
  animTime = 500,
  autoSlideTimeout,
  autoSlideDelay = 6000,
  $pagination = $(".slider-pagi");


  startTime();

  function createBullets() {
    for (var i = 0; i < numOfSlides + 1; i++) {
      //if (window.CP.shouldStopExecution(0)) break;
      if(t == 500) break;
      //startTime();
      var $li = $("<li class='slider-pagi__elem'></li>");
      $li.addClass("slider-pagi__elem-" + i).data("page", i);
      if (!i) $li.addClass("active");
      $pagination.append($li);
    }startTime();//window.CP.exitedLoop(0);
  };

  createBullets();

  function manageControls() {
    $(".slider-control").removeClass("inactive");
    if (!curSlide) $(".slider-control.left").addClass("inactive");
    if (curSlide === numOfSlides) $(".slider-control.right").addClass("inactive");
  };

  function autoSlide() {
    autoSlideTimeout = setTimeout(function () {
      curSlide++;
      if (curSlide > numOfSlides) curSlide = 0;
      changeSlides();
    }, autoSlideDelay);
  };

  autoSlide();

  function changeSlides(instant) {
    if (!instant) {
      animating = true;
      manageControls();
      $slider.addClass("animating");
      $slider.css("top");
      $(".slide").removeClass("active");
      $(".slide-" + curSlide).addClass("active");
      setTimeout(function () {
        $slider.removeClass("animating");
        animating = false;
      }, animTime);
    }
    window.clearTimeout(autoSlideTimeout);
    $(".slider-pagi__elem").removeClass("active");
    $(".slider-pagi__elem-" + curSlide).addClass("active");
    $slider.css("transform", "translate3d(" + -curSlide * 100 + "%,0,0)");
    $slideBGs.css("transform", "translate3d(" + curSlide * 50 + "%,0,0)");
    diff = 0;
    autoSlide();
  }

  function navigateLeft() {
    if (animating) return;
    if (curSlide > 0) curSlide--;
    changeSlides();
  }

  function navigateRight() {
    if (animating) return;
    if (curSlide < numOfSlides) curSlide++;
    changeSlides();
  }

  $(document).on("mousedown touchstart", ".slider", function (e) {
    if (animating) return;
    window.clearTimeout(autoSlideTimeout);
    var startX = e.pageX || e.originalEvent.touches[0].pageX,
    winW = $(window).width();
    diff = 0;

    $(document).on("mousemove touchmove", function (e) {
      var x = e.pageX || e.originalEvent.touches[0].pageX;
      diff = (startX - x) / winW * 70;
      if (!curSlide && diff < 0 || curSlide === numOfSlides && diff > 0) diff /= 2;
      $slider.css("transform", "translate3d(" + (-curSlide * 100 - diff) + "%,0,0)");
      $slideBGs.css("transform", "translate3d(" + (curSlide * 50 + diff / 2) + "%,0,0)");
    });
  });

  $(document).on("mouseup touchend", function (e) {
    $(document).off("mousemove touchmove");
    if (animating) return;
    if (!diff) {
      changeSlides(true);
      return;
    }
    if (diff > -8 && diff < 8) {
      changeSlides();
      return;
    }
    if (diff <= -8) {
      navigateLeft();
    }
    if (diff >= 8) {
      navigateRight();
    }
  });

  $(document).on("click", ".slider-control", function () {
    if ($(this).hasClass("left")) {
      navigateLeft();
    } else {
      navigateRight();
    }
  });

  $(document).on("click", ".slider-pagi__elem", function () {
    curSlide = $(this).data("page");
    changeSlides();
  });

});
    </script>


</body></html>