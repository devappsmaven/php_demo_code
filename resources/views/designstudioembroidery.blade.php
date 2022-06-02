<?php 
    //phpinfo();
    /*if (!extension_loaded('imagick'))
    {
        echo 'imagick not installed';
    }*/
    
?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Vivid Customs || EmbroideryEstudio</title>
    
    <meta http-equiv=“Pragma” content=”no-cache”>
    <meta http-equiv=“Expires” content=”-1″>
    <meta http-equiv=“CACHE-CONTROL” content=”NO-CACHE”>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, minimal-ui, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="shortcut icon" type="image/x-icon" href="https://www.vividcustoms.com/img/icon/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/fonts.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Niconne">
    <link rel="stylesheet" href="{{asset('css/frontend/designstudio/gijgo.css')}}">
    <link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/css/gijgo.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/shirtcolors.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/designstudio/custom.css')}}">
 
    <style type="text/css">
.color-33 {background: linear-gradient(to left, black 0%,black 50%,#000000 50%,white 50%,white 100%);}
.color-32 {background: linear-gradient(to left, navy 0%,navy 50%,#000000 50%,white 50%,white 100%);}
.color-34 {background: linear-gradient(to left, red 0%,red 50%,#000000 50%,white 50%,white 100%);}
.color-35 {background: linear-gradient(to left, blue 0%,blue 50%,#044fa3 50%,white 50%,white 100%);}
.ds-container{
  border: 0px solid #32a7e0;
  height: 810px;
  min-height:728px;
  width: 1300px;
  padding-right: 0px;
  padding-left: 0px;
  margin-right: auto;
  margin-left: auto;
  
}
.ds-header{
  border: 0px solid #32a7e0;
  width: 1300px;
  height: 60px;
  padding-right: 0px;
  padding-left: 0px;
  margin-right: auto;
  margin-left: auto;
}
.ds-footer{
  border: 0px solid #32a7e0;
  width: 1300px;
  height: 50px;
  padding-right: 5px;
  padding-left: 5px;
  margin-right: auto;
  margin-left: auto;
}
.ds-menu{
  border: 0px solid #32a7e0;
  width: 64px;
  height: 810px;
  min-height:728px;
  padding-right: 0px;
  padding-left: 0px;
  margin-right: auto;
  margin-left: auto;
  position: relative;
  float: left;
}
.ds-work-area{
  border: 0px solid #32a7e0;
  width: 491px;
  height: 810px;
  min-height:728px;
  padding-right: 10px;
  padding-left:10px;
  margin-right: auto;
  margin-left: auto;
  position: relative;
  float: left;
}
.ds-design-area{
  border: 0px solid #32a7e0;
  width: 743px;
  height: 810px;
  min-height:728px;
  padding-right: 0px;
  padding-left: 0px;
  margin-right: auto;
  margin-left: auto;
  position: relative;
  float: left;
}
.ds-logo{
  border: 0px solid #32a7e0;
  width: 210px;
  height: 60px;
  padding-right: 0px;
  padding-left: 0px;
  margin-left: 0px;
  position: relative;
  float: left;
}

.ds-price{
  border: 0px solid #32a7e0;
  width: 494px;
  height: 60px;
  padding-right: 0px;
  padding-left: 0px;
  margin-left: 0px;
  position: relative;
  float: left;
}

.ds-cart-area{
  border: 0px solid #32a7e0;
  width: 494px;
  height: 60px;
  padding-right: 0px;
  padding-left: 0px;
  margin-left: 0px;
  position: relative;
  float: left;
}
/*.ds-img {
    background-color: #32a7e0;
    border-radius: 75px;
    padding: 0px !important;
    max-width: none;
}*/
.uppercase{
    text-transform:uppercase;
    font-weight:bold;}

.ds-a {
  padding: 0px !important;
}

.ds-span {
  font-size: 10px !important;
}

.ds-li.active .ds-a .ds-img {
  background-color:#cccccc !important;
  padding: 0px !important;
}

/* .ds-li.active .ds-a{
  background-color: transparent;
  text-decoration: none;
  border:0px !important;
  padding: 0px !important;
}



.ds-li .ds-a:hover{
  background-color: transparent;
  text-decoration: none;
  border:0px !important;
  padding: 0px !important;
}
.ds-nav > .ds-li > .ds-a:hover,
.ds-nav > .ds-li > .ds-a:focus {
  text-decoration: none;
  background-color: transparent;
  padding: 0px !important;
  border-color: transparent;
}

.ds-nav > .ds-li > .ds-a:hover .ds-img,
.ds-nav > .ds-li > .ds-a:focus  .ds-img{
  background-color: #ccc;
  text-decoration: none;
  padding: 0px !important;
}*/


.ds-a:hover, .ds-a:visited, .ds-a:link, .ds-a:active{text-decoration:none;}
.ds-nav{border:none;}
.ds-nav .ds-li{border:none;  margin-bottom: 20px !important;}
.ds-li.active .ds-a{background-color:#cccccc !important;}
.ds-nav .ds-a{color:#ffffff !important;margin:0 !important;padding-top:1vh;padding-bottom:1vh;font-size:12;border:none !important;outline:none;padding:10px 1px;}
.ds-nav .ds-a:hover{background-color:transparent !important;}
.ds-nav .ds-li .ds-a{position:relative;display:block;padding:10px 10px;}
.ds-nav .ds-ul .ds-li{display:table-cell !important;width:1%; margin-bottom: 20px !important;}
.ds-nav{margin-bottom:0px !important;border:none; background-color:#ffffff;}
.ds-nav .ds-a{color:#000000 !important;margin:0 !important;padding-top:1vh;padding-bottom:1vh;font-size:12px;border:none !important;outline:none;padding:10px 1px;}
.ds-nav .ds-a:hover{background-color:#fff !important;}
.ds-nav .ds-li.active .ds-a {background-color:#ffffff !important;}
.hover{max-height:100px; max-width: 110px;}

.ds-img {
      background-color: #32a7e0;
      border-radius: 75px;
  }

  .ds-img:hover {
      background-color: #9eb1ba;
      border-radius: 75px;
  }

  .ds-img2 {
      background-color: #9eb1ba;
      border-radius: 15px;
      padding: 5px;
  }

  .ds-img2:hover {
      background-color: #9eb1ba;
      border-radius: 75px;
  }

  .panel-body{padding:8px;}
  .panel-heading, .panel-info,.input-group-addon, .breadcrumb{background-color:#fff !important;border:#9a9898 0px solid !important;color:#000000 !important; padding: 10px 5px;}
  .panel-heading{font-size:1.2rem;padding:5px 10px !important;border-bottom:0px solid transparent;}
  .breadcrumb{border-bottom:1px solid #9a9898 !important;}
  .panel-info>.panel-heading+.panel-collapse>.panel-body,.panel-body{border-top:0px solid #9a9898 !important;}
  .panelshadow{box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);}

  ol {
      margin-top: 0;
      margin-bottom: 10px;
  }

 .sides {
  position: absolute;
  bottom: 10vh;
  left: 50%;
  z-index: 15;
  width: 60%;
  padding-left: 0;
  margin-left: -30%;
  text-align: center;
  list-style: none;
  
  }

  .undoredo {
    position: absolute;
    bottom: 10px;
    /*left: 50%;*/
    z-index: 15;
    width: 100%;
    /*padding-left: 0;
    margin-left: -30%;*/
    text-align: center;
    list-style: none;
  }

  .sides li{
    display: inline-block;
    cursor: pointer;
    border: 1px solid #696973;
    opacity: 1;
    overflow: hidden;
    transition: all 0.4s;
    width: 30px;
    height: 30px;
    border-radius: 30px;
    margin: 5px;
  }

  .undoredo li{
    cursor: pointer;
    border: 1px solid #696973;
    opacity: 1;
    overflow: hidden;
    transition: all 0.4s;
    width: 30px;
    height: 30px;
    border-radius: 30px;
    margin: 5px;
  }

  .sides .active{
    background: #333333;
    border: 3px solid #31B0D5;
    opacity: 1;
    overflow: hidden;
    width: 50px;
    height: 50px;
    border-radius: 80px;
    margin: 5px;
    }

  .dsbutton{
    border: 1px solid #cccccc;
    padding: 8px 20px;
    color: #707277;
    border-radius: 10px;   

    }


.animate{border: 2px solid rgb(49, 176, 213) !important;}
.animate:after{content:url('../../img/icon/check.png');margin-left:3px;margin-top:2px;position:absolute;}
.animate2:after{content:url('../../img/icon/check.png');margin-left:3px;margin-top:2px;}
.canvasShirt{background-repeat:no-repeat;background-size:cover;background-position:top center;}
.carousel-caption{top:0;bottom:auto;text-shadow:2px 4px 6px #000000 !important;}
.carousel-control{opacity:1;}
.carousel-control.right{cursor:pointer; right:70px;left:auto;background-image:-webkit-linear-gradient(left,rgba(0,0,0,0) 0,rgba(0,0,0,.0) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,0) 0,rgba(0,0,0,.0) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,0)),to(rgba(0,0,0,.0)));background-image:linear-gradient(to right,rgba(0,0,0,0) 0,rgba(0,0,0,0) 100%);background-repeat:repeat-x;}
.carousel-control.left{cursor:pointer; left:70px;background-image:-webkit-linear-gradient(left,rgba(0,0,0,0) 0,rgba(0,0,0,.0) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,0) 0,rgba(0,0,0,.0) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,0)),to(rgba(0,0,0,.0)));background-image:linear-gradient(to right,rgba(0,0,0,0) 0,rgba(0,0,0,.0) 100%);background-repeat:repeat-x;}
.sizeinput{border:0px solid #eeeeee;padding-bottom:5px;}
.undoredo{top: 20px !important;width: 0px !important;right: 0 !important;margin-right: 10% !important;}

.block{float:left;border:1px solid #eeeeee;cursor:pointer;border-radius:50%;margin-right:1.7px;width:25px !important;height:25px !important;border: 2px solid #777777 !important; margin-bottom:5px;}

.loader{ position: absolute; top: 0 !important; bottom: 0 !important; left: 0 !important; right: 0 !important; background: url("/img/icon/loading.gif") 50% 50% no-repeat ; z-index: 99; width: 50% !important; height: 50% !important; margin: auto !important;border-radius: 50% !important;}
.loaderOnly{ position: absolute; top: 0 !important; bottom: 0 !important; left: 0 !important; right: 0 !important; background: url("/img/icon/loading.gif") 50% 50% no-repeat ; z-index: 99; width: 50% !important; height: 50% !important; margin: auto !important;border-radius: 50% !important;}
.loaderEmail{ position: absolute; top: 0 !important; bottom: 0 !important; left: 0 !important; right: 0 !important; background: url("/img/icon/sendingemail.gif") 50% 50% no-repeat ; z-index: 99; /*width: 50% !important; height: 50% !important; margin: auto !important;border-radius: 50% !important;*/}
.loaderSave{ position: absolute; top: 0 !important; bottom: 0 !important; left: 0 !important; right: 0 !important; background: url("/img/icon/saving.gif") 50% 50% no-repeat ; z-index: 99; /*width: 50% !important; height: 50% !important; margin: auto !important;border-radius: 50% !important;*/}
.nav>li>a>img { max-width: 15vw;}
.navbar {margin-bottom: 0px;}
.nav>li>a>img { max-width: 100%;}
body{overflow: scroll;}
.ds-menu{position: relative;display: block;}
.ds-work-area{position: relative; display: block; overflow: auto; }
.ds-design-area{ position: relative; display: block; float:left;}

.row.content{max-height:900px}
footer{background-color:transparent !important;}
header{border-bottom:1px solid #eee;}
#col10header, #col10body{max-width:1360px;}
.row.content{}
svg{display:block;font:8em 'Roboto';font-family:'Roboto', sans-serif;width:220px;height:33px;margin:0 0;}
.aa, .aa:focus, .aa:hover{color:#000000 !important;}
.web-coder-skull{fill:none;stroke:white;stroke-dasharray:6% 29%;stroke-width:5px;stroke-dashoffset:0%;animation:stroke-offset 5.5s infinite linear;}
.web-coder-skull:nth-child(6){stroke:blue;animation-delay:-1;}
.web-coder-skull:nth-child(2){stroke:red;animation-delay:-2s;}
.web-coder-skull:nth-child(3){stroke:black;animation-delay:-3s;}
.web-coder-skull:nth-child(4){stroke:blue;animation-delay:-4s;}
.web-coder-skull:nth-child(5){stroke:red;animation-delay:-5s;}
.web-coder-skull:nth-child(1){stroke:black;animation-delay:-1s;}
@keyframes  stroke-offset{100%{stroke-dashoffset:-35%;}
}
a:hover, a:visited, a:link, a:active{text-decoration:none;}
.breadcrumb>.active, .breadcrumb{border:0px solid;text-transform:uppercase;font-weight:bold;}
.modal-header{border-radius:5px;}
input[type=range]{-webkit-appearance:none;float:left;padding-top:10px;}
input[type=range]::-webkit-slider-runnable-track{height:10px;background:#696973;border:none;border-radius:3px;}
input[type=range]::-webkit-slider-thumb{-webkit-appearance:none;border:none;height:26px;width:26px;border-radius:50%;background:#31B0D5;margin-top:-6px;}
input[type=range]:focus{outline:none;}
input[type=range]:focus::-webkit-slider-runnable-track{background:#ccc;}
input[type=range]{border:1px solid white;float:left;padding-top:10px;}
input[type=range]::-moz-range-track{height:10px;background:#696973;border:none;border-radius:3px;}
input[type=range]::-moz-range-thumb{border:none;height:26px;width:26px;border-radius:50%;background:#31B0D5;}
input[type=range]:-moz-focusring{outline:1px solid white;outline-offset:-1px;}
input[type=range]:focus::-moz-range-track{background:#ccc;}
input[type=range]::-ms-track{height:10px;float:left;background:transparent;border-color:transparent;border-width:6px 0;color:transparent;}
input[type=range]::-ms-fill-lower{background:#777;border-radius:10px;}
input[type=range]::-ms-fill-upper{background:#696973;border-radius:3px;}
input[type=range]::-ms-thumb{border:none;height:26px;width:26px;border-radius:50%;background:#31B0D5;}
input[type=range]:focus::-ms-fill-lower{background:#888;}
input[type=range]:focus::-ms-fill-upper{background:#ccc;}
.modal-backdrop.in{opacity:0.1;}
#description_image{width:9em !important;}.tab-pane{border:none !important;margin-top:0}
textarea{resize:none;}
.btn-success{color:#fff;background-color:#4fc1f0;border-color:#0692cb;}
.btn-success.hover{color:#fff;background-color:#0692cb;border-color:#4fc1f0;}
.btn{border-radius:8px;}
.hover:hover{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); /*border:1px solid #000000;*/}
.active{border:2px solid #eeeeee;background:none !important;}
.nav{border:none;}
.nav li{border:none;}
li.active a{background-color:#cccccc !important;}
.nav a{color:#ffffff !important;margin:0 !important;padding-top:1vh;padding-bottom:1vh;font-size:12;border:none !important;outline:none;padding:10px 1px;}
.nav a:hover{background-color:transparent !important;}
.nav>li>a{position:relative;display:block;padding:10px 10px;}
.nav ul li{display:table-cell !important;width:1%;}
.navbar{margin-bottom:0px !important;}
#icon-img{border:none;background-color:#ffffff;}
#footer_menu,#footer_menu_art,#footer_menu_text{border:none;}
#footer_menu li.active a ,#footer_menu_art li.active a ,#footer_menu_text li.active a{background-color:transparent !important;}
#footer_menu li.active ,#footer_menu_art li.active ,#footer_menu_text li.active{background-color:transparent !important;border:0px solid transparent !important;}
#footer_menu li ,#footer_menu_art li ,#footer_menu_text li{background-color:transparent !important;border:0px solid transparent !important;display:table-cell !important;width:1%;}
#footer_menu li a:hover ,#footer_menu_art li a:hover ,#footer_menu_text li a:hover{background-color:transparent !important;}
#icon-img a, #footer_menu a ,#footer_menu_art a ,#footer_menu_text a{color:#000000 !important;margin:0 !important;padding-top:1vh;padding-bottom:1vh;font-size:12px;border:none !important;outline:none;padding:10px 1px;}
#icon-img a:hover, #footer_menu a:hover ,#footer_menu_art a:hover ,#footer_menu_text a:hover{background-color:#fff !important;}
#icon-img li.active a ,#footer_menu_art li.active a ,#footer_menu_text li.active a{background-color:#ffffff !important;}
#myCarousel .carousel-indicators li{cursor:pointer;border:1px solid #696973;opacity:1;overflow:hidden;transition:all 0.4s;width:50px;height:50px;border-radius:50px;margin:5px;}
#myCarousel .carousel-indicators .active{background:#333333;border:3px solid #31B0D5;opacity:1;overflow:hidden;width:80px;height:80px;border-radius:80px;margin:5px;}
#myCarousel .active{border:0px solid #eeeeee;}
.canvasShirt{background-repeat:no-repeat;background-size:cover;background-position:center center;}
.hover2{width:160px;height:auto;padding:5px;}
.clipart-hover:hover{border:1px solid #000000;}
.hover2:hover{border:1px solid #000000;}
#clipArtTable{width:100%;height:260px !important;overflow-x:hidden;}
#clipArtTable2{width:100%;height:260px !important;overflow-x:hidden;}
#templateTable{width:100%;height:400px !important;overflow-x:hidden;}
#templateTable2{width:100%;height:400px !important;overflow-x:hidden;}
.carousel-caption{top:0;bottom:auto;text-shadow:2px 4px 6px #000000 !important;}
{float:left;border:1px solid #eeeeee;cursor:pointer;border-radius:50%;margin-right:1.7px;width:30px !important;height:30px !important;}
.animate:after{content:url('../../img/icon/check.png');margin-left:3px;margin-top:2px;position:absolute;}
.animate2:after{content:url('../../img/icon/check.png');margin-left:3px;margin-top:2px;}
#fontmenu_bar{overflow-y:hidden;height:auto;border-bottom:1px solid #399fd9;background-color:transparent;}
#fontmenu_bar li a{color:#4fc1f0 !important;background-color:transparent;}
#fontmenu_bar li.active a{color:#000000 !important;background-color:transparent !important;}
#fontmenu_body{overflow-y:auto;height:200px;overflow-x:hidden;}
.row{width:100%;margin:0 auto;}
.fonts:hover{color:#4fc1f0;}
body{padding:5px;}
#sizeForm input{width:7%;}
.carousel-control{opacity:1;}
.carousel-control.right{right:70px;left:auto;background-image:-webkit-linear-gradient(left,rgba(0,0,0,0) 0,rgba(0,0,0,.0) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,0) 0,rgba(0,0,0,.0) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,0)),to(rgba(0,0,0,.0)));background-image:linear-gradient(to right,rgba(0,0,0,0) 0,rgba(0,0,0,0) 100%);background-repeat:repeat-x;}
.carousel-control.left{left:70px;background-image:-webkit-linear-gradient(left,rgba(0,0,0,0) 0,rgba(0,0,0,.0) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,0) 0,rgba(0,0,0,.0) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,0)),to(rgba(0,0,0,.0)));background-image:linear-gradient(to right,rgba(0,0,0,0) 0,rgba(0,0,0,.0) 100%);background-repeat:repeat-x;}
input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button{appearance:none;margin:0;}
.thumbnail{width:8vw;height:9vw;}

.SaveDesign{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.25) translate(-50%);transform:scale(0.25) translate(-50%);left:50%;}
.SaveDesignPreview{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.1) translate(-50%);transform:scale(0.15) translate(-50%);left:50%;}
.SaveDesignPreview2{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.1) translate(-50%);transform:scale(0.1) translate(-50%);left:50%;}
.thumbnail2{max-height:10em;height:auto; margin-bottom: 70px; margin-top:20px;}
.SharePreviewCase{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.1) translate(-50%);transform:scale(0.1) translate(-50%);left:50%;}
#rightSavedDesing{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.25) translate(-50%);transform:scale(0.25) translate(-50%);left:50%;}
#backSavedDesing{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.25) translate(-50%);transform:scale(0.25) translate(-50%);left:50%;}
#leftSavedDesing{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.25) translate(-50%);transform:scale(0.25) translate(-50%);left:50%;}
#col10header, #col10body{width:1360px !important;width:83.33333333%;margin-right:auto;margin-left:auto;}
#myCarouselIndicators{bottom:-10px;display:block;}
.hover2{width:160px;height:auto;padding:5px;}
.thumbnail2{margin-bottom: 70px; margin-top:20px;}

.panel-body{padding:8px;}
.panel-heading, .panel-info,.input-group-addon, .breadcrumb{background-color:#fff !important;border-color:#9a9898 !important;color:#000000 !important;}
.panel-heading{font-size:1.2rem;padding:5px 10px !important;border-bottom:0px solid transparent;}
.breadcrumb{border-bottom:1px solid #9a9898 !important;}
.panel-info>.panel-heading+.panel-collapse>.panel-body,.panel-body{border-top:1px solid #9a9898 !important;}
.uppercase{text-transform:uppercase;font-weight:bold;}
#clipArtTable a, #clipArtTable2 a{font-size:12px;}
.inputslider{padding-right:0px;padding-left:0px;}
.modal-header-success{color:#fff;padding:9px 15px;border-bottom:1px solid #eee;background-color:#5cb85c;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px;}
.modal-header-warning{color:#fff;padding:9px 15px;border-bottom:1px solid #eee;background-color:#f0ad4e;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px;}
.modal-header-danger{color:#fff;padding:9px 15px;border-bottom:1px solid #eee;background-color:#d9534f;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px;}
.modal-header-info{color:#fff;padding:9px 15px;border-bottom:1px solid #eee;background-color:#5bc0de;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px;}
.modal-header-primary{color:#fff;padding:9px 15px;border-bottom:1px solid #eee;background-color:#428bca;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px;}
.form-control2{border:1px solid #b7b7b7;border-radius:3px;display:block;height:2.3rem;margin-bottom:.5rem;text-align:center;width:5rem;}
.sizeinput{border:0px solid #eeeeee;padding-bottom:5px;}
.modal-body{overflow-y:auto;}
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button{-webkit-appearance:none;margin:0;}
.transparent:after{content:"";position:absolute;border-top:1px solid red;width:25px;transform:rotate(45deg);transform-origin:0% 0%;margin-left:3px;margin-top:2px;}
.transparent2:after{content:"";position:absolute;border-top:1px solid red;width:30px;transform:rotate(45deg);transform-origin:0% 0%;margin-left:3px;margin-top:2px;}
#dsmenu ul{padding:0;margin:0;width:100%;list-style-type:none;position:fixed;left:0;height:100%;}
#dsmenu ul li{background:#f8f8f8 none repeat scroll 0 0;float:left;position:relative;width:100%;border-top:1px solid#ddd;}
#dsmenu ul li a{background:#f8f8f8 none repeat scroll 0 0;color:#666666;display:block;float:left;font-size:12px;margin:0;padding:1em 5%;text-align:left;text-decoration:none;text-transform:uppercase;width:90%;font-weight:bold;}
.modal-xl{width:90%;max-width:1200px;}
#mi-modal{text-align:center !important;padding:0!important !important;}
#mi-modal{content:'' !important;display:inline-block !important;height:100% !important;vertical-align:middle !important;margin-right:-4px !important;}
#mi-modal .modal-dialog{display:inline-block !important;text-align:left !important;vertical-align:middle !important;}


.progress { position:relative; width:100%; }
.bar { background-color: #008000; width:0%; height:20px; }
.percent { position:absolute; display:inline-block; left:50%; color: #7F98B2;}

#footer_copyrigth, #description_image{display:block;}
#footer_menu_bar{display:none;}
#footer_menu li a img, #footer_menu_art li a img, #footer_menu_text li a img{width:7em;}
#footer_menu li a , #footer_menu_art li a , #footer_menu_text li a{font-size:8px;}
#work_area{display:block;}
#textarea_btn{display:none;}
header{position:relative;display:block;}
footer{position:relative;display:block;}
#myCarousel{-webkit-transform-origin:unset;transform-origin:unset;-webkit-transform:unset;-moz-transform:unset;-ms-transform:unset;-o-transform:unset;transform:unset;left:none;position:fixed;display:block;}
body{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(1.00);-moz-transform:scale(1.00);-ms-transform:scale(1.00);-o-transform:scale(1.00);transform:scale(1.00);}
.animate:after {content: url(../../img/icon/check.png);margin-left: 3px;margin-top: 2px;}
.animate2:after {content: url(../../img/icon/check.png);margin-left: 3px;margin-top: 2px;}
.transparent:after {content: ""; position: absolute; border-top: 1px solid red; width: 25px; transform: rotate(45deg); transform-origin: 0% 0%; margin-left: 3px; margin-top: 2px;}
.modal-header-danger {background-color: #a94442;}


.loader{ position: absolute; top: 0 !important; bottom: 0 !important; left: 0 !important; right: 0 !important; background: url("/img/icon/loading.gif") 50% 50% no-repeat ; z-index: 99; width: 50% !important; height: 50% !important; margin: auto !important;border-radius: 50% !important;}
.loaderEmail{ position: absolute; top: 0 !important; bottom: 0 !important; left: 0 !important; right: 0 !important; background: url("/img/icon/sendingemail.gif") 50% 50% no-repeat ; z-index: 99; /*width: 50% !important; height: 50% !important; margin: auto !important;border-radius: 50% !important;*/}
.loaderSave{ position: absolute; top: 0 !important; bottom: 0 !important; left: 0 !important; right: 0 !important; background: url("/img/icon/saving.gif") 50% 50% no-repeat ; z-index: 99; /*width: 50% !important; height: 50% !important; margin: auto !important;border-radius: 50% !important;*/}
.animate{border: 2px solid rgb(49, 176, 213) !important;}
.animate:after{content:url('../../img/icon/check.png');margin-left:3px;margin-top:2px;position:absolute;}
.animate2:after {content: url('../../img/icon/check.png');margin-left: 3px;margin-top: 2px;}
.transparent:after {content: ""; position: absolute; border-top: 1px solid red; width: 25px; transform: rotate(45deg); transform-origin: 0% 0%; margin-left: 3px; margin-top: 2px;}
.modal-header-danger {background-color: #a94442;}
.switch{position:relative;display:inline-block;width:55px;height:24px;}
.switch input{display:none;}
.inputslider{padding-right:0px;padding-left:0px;}
.switch{position:relative;display:inline-block;width:55px;height:24px;}
.switch input{display:none;}
.slider{position:absolute;cursor:pointer;top:0;left:0;right:0;bottom:0;background-color:#ccc;-webkit-transition:.4s;transition:.4s;}
.slider:before{position:absolute;content:"";height:20px;width:20px;left:4px;bottom:2px;background-color:white;-webkit-transition:.3s;transition:.3s;}
input:checked + .slider{background-color:#2196F3;}
input:focus + .slider{box-shadow:0 0 1px #2196F3;}
input:checked + .slider:before{-webkit-transform:translateX(26px);-ms-transform:translateX(26px);transform:translateX(26px);}
.slider.round{border-radius:34px;}
.slider.round:before{border-radius:50%;}
input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button{appearance:none;margin:0;}
input[type=range]{-webkit-appearance:none;float:left;padding-top:10px;}
input[type=range]::-webkit-slider-runnable-track{height:10px;background:#696973;border:none;border-radius:3px;}
input[type=range]::-webkit-slider-thumb{-webkit-appearance:none;border:none;height:26px;width:26px;border-radius:50%;background:#31B0D5;margin-top:-6px;}
input[type=range]:focus{outline:none;}
input[type=range]:focus::-webkit-slider-runnable-track{background:#ccc;}
input[type=range]{border:1px solid white;float:left;padding-top:10px;}
input[type=range]::-moz-range-track{height:10px;background:#696973;border:none;border-radius:3px;}
input[type=range]::-moz-range-thumb{border:none;height:26px;width:26px;border-radius:50%;background:#31B0D5;}
input[type=range]:-moz-focusring{outline:1px solid white;outline-offset:-1px;}
input[type=range]:focus::-moz-range-track{background:#ccc;}
input[type=range]::-ms-track{height:10px;float:left;background:transparent;border-color:transparent;border-width:6px 0;color:transparent;}
input[type=range]::-ms-fill-lower{background:#777;border-radius:10px;}
input[type=range]::-ms-fill-upper{background:#696973;border-radius:3px;}
input[type=range]::-ms-thumb{border:none;height:26px;width:26px;border-radius:50%;background:#31B0D5;}
input[type=range]:focus::-ms-fill-lower{background:#888;}
input[type=range]:focus::-ms-fill-upper{background:#ccc;}
    </style>
</head>

<body>
    <div id="loaderMain" class="loader" style="display: block;">
    </div>
    <div class="page"  id="app">
        <div class="ds-header">
            <div class="ds-logo">
                <a href="/index">
                <img src="{{asset('img/logo/logo.png')}}" id="logo" width="195" height="auto">
                </a>
            </div>
            <div class="ds-price">
            </div>
            <div class="ds-cart-area">
                <div class="input-group" style="margin-right: 0px !important; padding-right: 0px !important; float: right !important;">
                    <span>
                        <button id="saveSectionLI" class="btn btn-success btn-md" onclick=" deselectAllCanvases(); ShowSaveShare();return false;">
                            <span class="glyphicon glyphicon-save">
                            </span>Save & Share
                        </button>
                        @if(Session::has('shoppingcart'))
                            <button id="directcheckout" class="btn btn-success btn-md" style="display: inline;" onclick="SaveDesignNameWindow('Check-out');">
                                <span class="glyphicon glyphicon-shopping-cart">
                                </span>Checkout
                            </button>
                        @else
                            <button id="directcheckout" class="btn btn-success btn-md" style="display: none;" onclick="SaveDesignNameWindow('Check-out');">
                                <span class="glyphicon glyphicon-shopping-cart">
                                </span>Checkout
                            </button>
                        @endif
                        <button id="getPriceBtn" class="btn btn-success btn-md" onclick=" ShowGetPrice();">
                            <span class="glyphicon glyphicon-usd">
                            </span>Get Price
                        </button>
                        
                    </span>
                </div>
            </div>
        </div>
        <div class="ds-container">
            <div class="ds-menu" id="ds-menu">
                <ul class="ds-nav nav nav-tabs nav-stacked" id="main-menu" style="text-align: center; ">
                <li class="ds-li" style="border: 2px solid #ffffff; border-radius: 10px;" onclick="document.getElementById('ds-work-area').style.display = 'block';deselectAllCanvases();">
                    <a class="ds-a" data-toggle="tab" href="#productSection">
                    <img class="ds-img" id="change_item" src="{{asset('img/icon/product.png')}}"   style="/*width:100%;*/">
                    <br>
                    <span class="ds-span">Products</span>
                    </a>
                </li>
                <li class="ds-li" style="border: 2px solid #ffffff; border-radius: 10px;" onclick="document.getElementById('ds-work-area').style.display = 'block';deselectAllCanvases(); document.getElementById('editArt').style.display = 'none';  document.getElementById('newArt').style.display = 'block'; document.getElementById('div-clipartsubcategories').style.display = 'none'; document.getElementById('div-clipartcategories').style.display = 'block'; document.getElementById('div-cliparts').style.display = 'none'; document.getElementById('div-filtercliparts').style.display = 'none';/*activateMenu('image');*/">
                    <a class="ds-a" data-toggle="tab" href="#addArt">
                    <img class="ds-img" id="add_art" src="{{asset('img/icon/add-art.png')}}"  onclick="/*startcategories();*/" style="/*width:100%;*/">
                    <br>
                    <span class="ds-span">Add Art</span>
                    </a>
                </li>
                    <li  class="ds-li" onclick="document.getElementById('ds-work-area').style.display = 'block';deselectAllCanvases();" style="border: 2px solid #ffffff; border-radius: 10px;">
                    <a class="ds-a" data-toggle="tab" href="#textSection">
                        <img class="ds-img" id="add_text" src="{{asset('img/icon/add-text.png')}}" style="/*width:100%;*/">
                        <br>
                        <span class="ds-span">Add Text</span>
                    </a>
                </li>
                <li  class="ds-li" style="border: 2px solid #ffffff; border-radius: 10px;" onclick="document.getElementById('ds-work-area').style.display = 'block';deselectAllCanvases();">
                    <a class="ds-a" data-toggle="tab" href="#addTemplate">
                    <img class="ds-img" id="add_template" src="{{asset('img/icon/templates.png')}}"  onclick="/*starttemplatecategories();*/" style="/*width:100%;*/">
                    <br>
                    <span class="ds-span">Templates</span>
                    </a>
                </li>
                @auth
                    @if(Auth::user()->type === 'Admin')
                        @foreach(Auth::user()->roles as $role)
                            @if ($role->name == 'Store Designer')
                                <li  class="ds-li" id="saveStoreLI" style="border: 2px solid #ffffff; border-radius: 10px;">
                                    <a class="ds-a" data-toggle="tab" href="javascript:void(0)" onclick="document.getElementById('ds-work-area').style.display = 'block'; deselectAllCanvases(); /*showColorModal('saveStoreModal'); LoadStoreDesignsCategories();*/">
                                        <img class="ds-img" id="save_and_store" src="{{asset('img/icon/save-share.png')}}"   style="/*width:100%;*/">
                                        <br>
                                        <span class="ds-span"> Save &amp; Store</span>
                                    </a>
                                </li>
                                @break
                            @elseif($role->name == 'Template Designer' || $role->name == 'Admin')
                                    <li  class="ds-li" id="saveTemplateLI" style="border: 2px solid #ffffff; border-radius: 10px;">
                                        <a class="ds-a" data-toggle="tab" href="javascript:void(0)" onclick="document.getElementById('ds-work-area').style.display = 'block';deselectAllCanvases(); SaveDesignNameWindow('savetemplate');">
                                            <img class="ds-img" id="save_and_template" src="{{asset('img/icon/save-share.png')}}"   style="/*width:100%;*/">
                                            <br>
                                            <span class="ds-span"> Save &amp; Template</span>
                                        </a>
                                    </li>
                                @break   
                            @endif
                        @endforeach
                    @elseif(Auth::user()->type === 'Customer')     
                        <li  class="ds-li" id="your_design" onclick="document.getElementById('ds-work-area').style.display = 'block';deselectAllCanvases();/* ShowYourDesign(); return false;*/" style="border: 2px solid #ffffff; border-radius: 10px;">
                            <a class="ds-a" data-toggle="tab" href="javascript:void(0)">
                                <img class="ds-img" id="your_design" src="{{asset('img/icon/your-design.png')}}"   style="/*width:100%;*/">
                                <br>
                                <span class="ds-span">My Designs</span>
                            </a>
                        </li>
                    @else 
                        @foreach(Auth::user()->roles as $role)
                            @if ($role->name === 'Store Designer')
                                    <li  class="ds-li" id="saveStoreLI" style="border: 2px solid #ffffff; border-radius: 10px;">
                                        <a class="ds-a" data-toggle="tab" href="javascript:void(0)" onclick="document.getElementById('ds-work-area').style.display = 'block'; deselectAllCanvases(); /*showColorModal('saveStoreModal'); LoadStoreDesignsCategories();*/">
                                            <img class="ds-img" id="save_and_store" src="{{asset('img/icon/save-share.png')}}"   style="/*width:100%;*/">
                                            <br>
                                            <span class="ds-span"> Save &amp; Store</span>
                                        </a>
                                    </li>
                                @break
                            @elseif($role->name === 'Template Designer'  || $role->name == 'Admin')
                                    <li  class="ds-li" id="saveTemplateLI" style="border: 2px solid #ffffff; border-radius: 10px;">
                                        <a class="ds-a" data-toggle="tab" href="javascript:void(0)" onclick="document.getElementById('ds-work-area').style.display = 'block';deselectAllCanvases(); SaveDesignNameWindow('savetemplate');">
                                            <img class="ds-img" id="save_and_template" src="{{asset('img/icon/save-share.png')}}"   style="/*width:100%;*/">
                                            <br>
                                            <span class="ds-span"> Save &amp; Template</span>
                                        </a>
                                    </li>
                                @break   
                            @endif
                        @endforeach
                    @endif
                @endauth
            </ul>
            </div>
            <div class="ds-work-area" id="ds-work-area">
                <div class="tab-content">
                    <div id="defaultSection" class="tab-pane fade in active panelshadow">
                        <div class="panel panel-info" style="height: 400px;">
                            <div>
                                <h1 class="" style="text-align: center; font-size: 16px; color: #595d5f; margin-bottom:50px;">What would you like to do next?</h1>
                            </div>
                            <div class="panel-body">
                            <div class="row" style="margin-bottom: 40px;">
                                <div class="col-xs-6">
                                    <center>
                                        <li class="ds-li" style="border: 2px solid #ffffff; border-radius: 10px; list-style-type: none;" onclick="deselectAllCanvases();/* document.getElementById('editArt').style.display = 'none';  document.getElementById('newArt').style.display = 'block'; activateMenu('image');*/">
                                            <a class="ds-a" data-toggle="tab" href="#addArt">
                                                <img class="ds-img2" id="add_art" src="{{asset('img/icon/add-art.png')}}" style="width: 65px; margin-bottom:12px;" onclick="/*startcategories();*/">
                                                <br>
                                                <span class="dsbutton">Add Art</span>
                                            </a>
                                        </li>
                                    </center>
                                </div>
                                <div class="col-xs-6">
                                    <center>
                                        <li  class="ds-li" onclick="deselectAllCanvases();/* activateMenu('text');*/" style="border: 2px solid #ffffff; border-radius: 10px; list-style-type: none;">
                                            <a class="ds-a" data-toggle="tab" href="#textSection">
                                                <img class="ds-img2" id="add_text" src="{{asset('img/icon/add-text.png')}}" style="width: 65px; margin-bottom:12px;">
                                                <br>
                                                <span class="dsbutton">Add Text</span>
                                            </a>
                                        </li>
                                    </center>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <center>
                                        <li class="ds-li" style="border: 2px solid #ffffff; border-radius: 10px; list-style-type: none;" onclick="deselectAllCanvases();">
                                            <a class="ds-a" data-toggle="tab" href="#productSection">
                                                <img class="ds-img2" id="change_item" src="{{asset('img/icon/product.png')}}" style="width: 65px; margin-bottom:12px;" >
                                                <br>
                                                <span class="dsbutton">Products</span>
                                            </a>
                                        </li>
                                    </center>
                                </div>
                                <div class="col-xs-6">
                                        <center>
                                    <a data-toggle="tab" href="javascript:void(0)" onclick="startover();" class="dsbutton">Start Over</a></center>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div id="productSection" class="tab-pane fade panelshadow">
                        <div class="panel panel-info">
                            <div class="panel-body">
                                    <!--START PRODUCT DESCRIPTION-->
                                <div class="row">
                                    <div class="col-xs-7">
                                    <h5 id="product_name">{{$product->parent->name}}</h5>
                                    <div id="description_label">
                                        <p><strong>Brand:</strong> {{$product->brand}} </p>
                                        <p><strong>Size:</strong> YXS-5XL  <a href="javascript:void(0)" id="btnmodal" data-toggle="modal" data-target="#sizechartmodal"> size chart</a></p>
                                        <p><strong>Fabric:</strong> {{$product->fabric}}</p>
                                        <p><a href="#productlongdescription" data-toggle="collapse" id="more-details" class="collapsestart" onclick="moreless(this);">
                                            More Details
                                        </a></p>
                                    </div>
                                    </div>
                                </div>
                                <div id="productlongdescription" class="collapse">
                                    {!!$product->description!!}
                                </div>
                                
                                <!--END   PRODUCT DESCRIPTION-->
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <span class="uppercase">Selected Color</span> <span id="current_selected_product_color"></span>
                                <br>
                                <span class="uppercase">Current Product Color</span> <span id="current_product_color"> : {{$product->color->name}}</span>
                            </div>
                            <div class="panel-body">
                                <div class="row" style="width: 100%; margin: 0 auto;" id="child_product_color_div">Quantity 1-5<br>
                                    @foreach ($product->parent->colors as $color)
                                        <div id="child_color_minimum_{{$color->id}}" class="block color-{{$color->id}} {{$color->id == $product->color->id ? 'animate' : ''}}" title="{{$color->name}}" style="border-radius: 50%; background-color: {{$color->hex}}; width: 30px; height: 30px; border: 0px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px;" onclick="setcanvasproperties('{{$color->pivot->childproduct_id}}'); setactivecolor(this);"></div>    
                                    @endforeach
                                </div>
                                <br>
                                <div class="row" style="width: 100%; margin: 0 auto;" id="child_product_color_div6">Quantity 6+<br>
                                    @foreach ($product->parent->colors as $color)
                                        <div id="child_color_minimum_{{$color->id}}" class="block color-{{$color->id}} {{$color->id == $product->color->id ? 'animate' : ''}}" title="{{$color->Name}}" style="border-radius: 50%; background-color: {{$color->hex}}; width: 30px; height: 30px; border: 0px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px;" onclick="setcanvasproperties('{{$color->pivot->childproduct_id}}'); setactivecolor(this);"></div>    
                                    @endforeach
                                </div>
                                <hr>
                                <a type="button" id="changeproductbtn" name="changeproductbtn" style="cursor: pointer;"  data-toggle="modal" data-target="#productmodal" onclick="/*document.getElementById('listproduct').style.display = 'block'; document.getElementById('singleproduct').style.display = 'none';  document.getElementById('sortby-filter').style.display = 'none'; document.getElementById('results').style.display = 'none';*/">
                                    <center>
                                        <span class="" style="color: #ffffff !important; background-color: #32a7e0; padding: 8px 30px; border-radius: 8px; margin-left: auto; margin-right: auto; text-align: center; font-size: 1.8rem;">
                                            Change Product
                                        </span>
                                    </center>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div id="addArt" class="tab-pane fade panelshadow">
                        <div id="newArt">
                            <clipartsembroiderycomponent></clipartsembroiderycomponent>
                            <!--UPLOAD SECTION-->
                            <div class="panel-group">
                                <div class="panel panel-info">
                                    <div class="panel-heading"> <span class="uppercase">Upload your own Artwork </span></div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-xs-12 col-xs-12 col-xs-12">
                                                <div>
                                                    <h4>Have your own logo or image?</h4>
                                                    <h5>Simply just upload it!</h5><br>
                                                    <h6><b>We accept the following file types:</b><br>
                                                        JPEG, JPG, GIF, PNG, BMP, GIF, TIF, AI, EPS, PDF, PSD, SVG</h6>
                                                </div>
                                                <h5>Max Size: 10.0mb</h5>
                                                <br>
                                                <p>
                                                    <label for="termsOfUse">
                                                        <input type="checkbox" id="termsOfUse" name="termsOfUse" onchange="hideshowbutton(this);">
                                                        <span>I agree to the </span> <a href="{{asset('user-agreement')}}" target="blank">terms and conditions</a> for uploaded material
                                                    </label>
                                                </p>
                                            </div>
                                        </div>
                                        <form method="POST" action="{{ route('uploadclipart') }}"  id="uploadclipartform" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="row" id="uploaddiv" >
                                            <div class="col-xs-6 col-xs-6 col-xs-6" align="left"> <input type="file" id="file" name="file"  onchange="uploadImage();"/></div>
                                            <div class="col-xs-6 col-xs-6 col-xs-6" align="right"><button type="submit" id="upload" class="btn btn-info" style="background-color: #4fc1f0; display: none;">Upload</button></div>
                                            <div class="col-xs-12" id="uploadprogressbar">
                                                <div class="progress">
                                                    <div class="bar"></div >
                                                    <div class="percent">0%</div >
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                        <div id="uploadpreview" src="" style="display: none;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--START MODIFY ART SECTION-->
                        <div id="editArt" style="display: none;">
                            <div class="panel-group">
                                <!--<div class="panel panel-info" id="displaycolor">
                                    <div class="row" onclick="/*document.getElementById('editArt').style.display = 'none';*/  document.getElementById('newArt').style.display = 'none'; document.getElementById('changecolorArt').style.display = 'block';" style="cursor:pointer;">
                                        <div class="col-xs-2">
                                             <span class="uppercase">Color: </span>
                                        </div>
                                        <div class="col-xs-10">
                                            <div id="objectcolors2" name="objectcolors2" style="float:right;"></div>
                                        </div>
                                    </div>
                                </div>-->
                                <div class="panel panel-info" id="displaycolor">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <span class="uppercase">Color: </span>
                                    </div>
                                    <div class="col-xs-10">
                                        <div id="objectcolors" name="objectcolors" style="float:right;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-body" id="Artcolorink" name="Artcolorink">
                                    <span id="ArtcolorText" name="ArtcolorText" style="display:inline">Selected color name: <span id="Artcolor" name="Artcolor" style="display:inline"></span><br><br></span>
                                    <div id="inkcolorlist" class="row">
                                        <span style="display: block;">Select new color:</span>
                                        <div class="block transparent" id="artcolortransparent" style="border-radius:  50%;  margin-right: 1.7px; background-color: #ffffff; border:2px solid #eeeeee; cursor:pointer" onclick="document.getElementById('Artcolor').innerHTML = 'Transparent'; changecolor('transparent');">
                                        </div>
                                        @foreach($inkcolors as $inkcolor)
                                            <div id="artcolor{{$inkcolor->hex}}" class="block color-{{$inkcolor->id}}" title="{{$inkcolor->name}}" style="border-radius:  50%;  margin-right: 1.7px; background-color: {{$inkcolor->hex}}; border:1px solid #eeeeee; cursor:pointer" onclick="document.getElementById('Artcolor').innerHTML = '{{$inkcolor->name}}'; changecolor('{{$inkcolor->hex}}'); ">
                                            </div>
                                        @endforeach
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-xs-12 col-xs-12 col-xs-12" style="margin-top: 15px; padding-left: 0px;" id="checkcolorlegend">
                                        <span class="animate2"></span> Indicates a color already in your design
                                    </div>
                                    <br>
                                    <div class="col-xs-12 col-xs-12 col-xs-12" style="padding-left: 0px;" id="artcolortransparentlegend">
                                        <div class="block transparent" style="border-radius: 50%;  margin-right: 1.7px; background-color: #ffffff; border:2px solid #eeeeee; cursor:pointer;">
                                        </div> Indicates a color is transparent
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-right">
                                                <button class="btn btn-success" style="vertical-align:middle" onclick="document.getElementById('editArt').style.display = 'block';  document.getElementById('newArt').style.display = 'none'; document.getElementById('changecolorArt').style.display = 'none'; deselectAllCanvases();"><span>Done</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="panel panel-info" id="displaynoeditcolor">
                                    <div class="row">
                                        <div class="col-xs-2">
                                                <span class="uppercase">Color: </span>
                                        </div>
                                        <div class="col-xs-10">
                                            <div id="objectcolors3" name="objectcolors3" style="float:right;"></div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <span><b>COLOR EDIT:</b> NOT AVAILABLE FOR THIS IMAGE </span>
                                        <div class="row" id="removewhite">
                                            <div style="float:left;">
                                                <span>
                                                    <b>REMOVE WHITE: </b>
                                                </span>
                                            </div>
                                            <div style="float:right;">
                                                <label class="switch">
                                                    <input type="checkbox" id="removewhite" onclick="RemoveWhite(this);">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info" id="displayfullcolor" style="display:none">
                                        <div class="row">
                                            <div class="col-xs-2">
                                                <span class="uppercase">Color: </span>
                                            </div>
                                            <div class="col-xs-10">
                                                <span  style="float:right;">FULL COLOR IMAGE</span>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <span><b>COLOR EDIT:</b> NOT AVAILABLE FOR THIS IMAGE </span>
                                        </div>
                                    </div>

                                <div class="panel panel-info">
                                    <div class="panel-body">
                                        <center><i class="fa fa-lock" id="resizeicon" style="font-size:25px;color:#31b0d5; cursor: pointer;" onclick="SetScaleProportional('image');"></i></center>
                                        <div class="">
                                            <div class="row">
                                                <div class="col-xs-2 inputslider" align="left"> <span>Width</span> </div>
                                                <div class="col-xs-8  inputslider"> <input id="widthImage" type="range" min="1" max="12" name="widthImage" oninput="resize(event);"  step="0.1"> </div>
                                                <div class="col-xs-2 inputslider" align="right"><input id="widthvalueImage" type="text" onkeypress="validate(event);" name="widthvalueImage" min="1" max="12" oninput="resize(event);" step="0.1" style="width: 55px !important;" ></div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="">
                                            <div class="row">
                                                <div class="col-xs-2 inputslider" align="left"> <span>Height</span> </div>
                                                <div class="col-xs-8  inputslider"> <input id="heightImage" type="range" min="1" max="12" name="heightImage" oninput="resize(event);"  step="0.1"> </div>
                                                <div class="col-xs-2 inputslider" align="right"><input id="heightvalueImage" type="text" onkeypress="validate(event);" name="heightvalueImage" min="1" max="12" oninput="resize(event);" step="0.1" style="width: 55px !important;" ></div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="">
                                            <div class="row">
                                                <div class="col-xs-2 inputslider" align="left"> <span>Rotation</span> </div>
                                                <div class="col-xs-8  inputslider"> <input id="angleImage" type="range" min="-180" max="180" name="angleImage" oninput="rotate(event);"  step="5" value="0"> </div>
                                                <div class="col-xs-2 inputslider" align="right"><input id="anglevalueImage" type="number" onkeypress="validate(event);" name="anglevalueImage" min="-180" max="180" value="0" oninput="rotate(event);" step="5" style="width: 55px !important;" ></div>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- Start New Rotation Section -->
                                        <div class="col-xs-12 col-xs-12 col-xs-12 col-xs-12" style="padding-left: 1px; padding-right: 1px; margin-left:auto; margin-right:auto;">
                                            <div class="col-xs-4 col-xs-4 col-xs-4 col-xs-4" style="background-color: #eeeeee; padding: 1px; border-right: solid 4px white;">
                                                <div class="col-xs-6 col-xs-6 col-xs-6 col-xs-6" align="center" style="padding: 1px; border-right: solid 1px black;"><span onclick="flipX();" style="cursor: pointer;"><img src="{{asset('img/icon/icon-flip-across.png')}}" width="22px" height="auto"></span></div>
                                                <div class="col-xs-6 col-xs-6 col-xs-6 col-xs-6" align="center" style="padding: 1px;"><span onclick="flipY();" style="cursor: pointer;"><img src="{{asset('img/icon/icon-flip-up.png')}}" width="auto" height="20px"></span></div>
                                            </div>
                                            <div class="col-xs-5 col-xs-5 col-xs-5 col-xs-5" style="background-color: #eeeeee; padding: 1px; border-right: solid 4px white;">
                                                <div class="col-xs-6 col-xs-6 col-xs-6 col-xs-6" align="center" style="padding: 1px; border-right: solid 1px black;" onclick="SetLayer('forward');"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-layer-up.png')}}" width="auto" height="20px"></span></div>
                                                <div class="col-xs-6 col-xs-6 col-xs-6 col-xs-6" align="center" style="padding: 1px;" onclick="SetLayer('backward');"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-layer-down.png')}}" width="auto" height="20px"></span></div>
                                            </div>
                                            <div class="col-xs-3 col-xs-3 col-xs-3 col-xs-3" style="background-color: #eeeeee; padding: 1px;">
                                                <div class="col-xs-12 col-xs-12 col-xs-12 col-xs-12" align="center" style="padding: 1px;" onclick="SetLayer('center');"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-center.png')}}" width="auto" height="20px"></span></div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-xs-12 col-xs-12 col-xs-12" style="padding-left: 1px; padding-right: 1px;">
                                            <div class="col-xs-3 col-xs-3 col-xs-3 col-xs-4" align="center"><span>Flip</span></div>
                                            <div class="col-xs-4 col-xs-4 col-xs-4 col-xs-5" align="center"><span>Layers order</span></div>
                                            <div class="col-xs-2 col-xs-2 col-xs-2 col-xs-3" align="center"><span>Center</span></div>
                                        </div><br>
                                        <!-- End Rotation Section -->

                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-right">
                                            <button class="btn btn-success" style="vertical-align:middle" onclick="document.getElementById('editArt').style.display = 'none';  document.getElementById('newArt').style.display = 'block'; deselectAllCanvases();"><span>Back to category</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="changecolorArt" style="/*display: none;*/">
                        <div class="panel-group">
                            
                        </div>
                    </div>
                    </div>
                    <div id="addTemplate" class="tab-pane fade panelshadow">
                        <div class="panel-group">
                            <div class="panel panel-info">
                                <div class="panel-body">
                                        <templatescomponentembroidery></templatescomponentembroidery>
                                    <!--<div id="templateCategory">
                                        <div id="templateMenu" class="panel panel-info">
                                            <div id="templateCategories">
                                                <ol class="breadcrumb" id="templatebreadcrumb" style="cursor:pointer; margin-bottom: 5px;">
                                                    <li class="active" id="templatecategories">Design Templates</li>
                                                    <li id="templatesubcategories" style="display: none; "></li>
                                                    <li id="templatesubsubcategories" style="display: none;"></li>
                                                    <li id="clips" style="display: none;"></li>
                                                </ol>
                                            </div>
                                            <div class="input-group"  style="margin-bottom: 30px;">
                                                <input type="text" class="form-control" placeholder="Search template by name" name="searchtemplate" id="searchtemplate" oninput="ScanTemplate();">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-success" type="button" onclick="ScanTemplate();" style="background-color: #4fc1f0 !important;"><i class="glyphicon glyphicon-search" style="color: white;"></i></button>
                                                </div>
                                            </div>
                                            <div id="templateTable2" style="display: none;">
                                            </div>
                                            <div id="templateTable" style="display: block;">
                                                <div class="row text-center">
                                                    @foreach($templatecategories as $templatecategory)
                                                        <div class="col-xs-6">
                                                            <a href="javascript:void(0);" onclick="setTemplateCategory('{{ $templatecategory->name }}');" class="aa">
                                                            <img src="{{asset('img/category')}}{{'/'}}{{$templatecategory->filename}}" class="hover2" style="padding: 1vw; background-color:{{$templatecategory->background}}">
                                                                <div class="caption">
                                                                    <p>{{ $templatecategory->name}}</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="textSection" class="tab-pane fade panelshadow">
                        <div class="panel-group" id="new_text">
                            <div class="">
                                <div class="form-group" style="padding: 10px;">
                                    <label for="comment"><span class="uppercase">Enter text:</span></label>
                                    <textarea class="form-control" rows="3" id="textarea"></textarea>
                                    <br>
                                    <button type="button" id="textareabtn" class="btn btn-success btn-block form-control" style="display:block !important;" onclick="addtext();/*OpenClose('carousel_area','work_area','textareabtn');*/">Add Text</button>
                                </div>
                                <div class="panel-group">
                                    <div class="panel panel-info" id="fontbtn" style="display: none; ">
                                        <div class="panel-heading">
                                            <button class="btn btn-block" data-toggle="collapse" href="#fontpanel" onclick="fontMenu();" style="background-color: #ffffff;padding: 6px 0px;">
                                                <span class="uppercase" id="font_title" style="float: left;"> Change fonts</span>
                                                <span id="up" class="glyphicon glyphicon-triangle-top" style="display: block; float: right;margin-left: 10px;"></span>
                                                <span id="down" class="glyphicon glyphicon-triangle-bottom" style="display: none;float: right;margin-left: 10px;"></span>
                                                <span class="uppercase" id="font_preview" style="float: right;">Old standard </span>
                                            </button>
                                        </div>
                                        <div id="fontpanel" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div id="fontmenu" style="display: none;">
                                                    <ul id="fontmenu_bar" class="nav nav-tabs">
                                                                                            
                                                        <li class="active col-xs-12" align="center"><a data-toggle="tab" href="#home" class="uppercase">View all fonts</a></li>
                                                        @foreach ($fontcategories as $fontcategory)   
                                                            <li><a data-toggle="tab" href="#menu{{$fontcategory->name}}"><font>{{$fontcategory->name}}</font></a></li>
                                                        @endforeach
                                                    </ul>
                                                    <div id="fontmenu_body" class="tab-content">
                                                        <div id="home" class="tab-pane fade in active">
                                                            @foreach ($fonts as $font)                                          
                                                                <div class="row">
                                                                    <div class="col-xs-12"  style="border-bottom: 1px solid;" id="{{$font->name}}" onclick="setFont(this);">
                                                                        <center>
                                                                                <font class="fonts" id="{{$font->name}}" face="{{$font->name}}" size="{{$font->size}}" style="cursor: pointer; ">{{$font->displayname}}</font>
                                                                            <br>
                                                                            <span style="font-family: Helvetica !important;">{{$font->displayname}}</span>
                                                                        </center>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        @foreach ($fontcategories as $fontcategory) 
                                                            <div id="menu{{$fontcategory->name}}" class="tab-pane fade">
                                                                @foreach ($fontcategory->fonts as $font)                                       
                                                                <div class="row">
                                                                    <div class="col-xs-12" style="border-bottom: 1px solid;" id="{{$font->name}}" onclick="setFont(this);">
                                                                        <center>
                                                                            <font class="fonts" id="{{$font->name}}" face="{{$font->name}}" size="{{$font->size}}" style="cursor: pointer; ">{{$font->displayname}}</font>
                                                                            <br>
                                                                            <span style="font-family: Helvetica !important;">{{$font->displayname}}</span>
                                                                        </center>
                                                                    </div>
                                                                </div>  
                                                                @endforeach     
                                                            </div>  
                                                        @endforeach  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="textmenu" style="display: none;">
                                    <div class="panel panel-info" >
                                        <div class="panel-heading"><span class="uppercase">Text Color: </span><label id="Textcolor" name="Textcolor"></label></div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <span class="animate2"></span> Indicates a color already in your design<br>
                                                    <div class="row">
                                                        <div class="col-xs-12" style="margin-top:10px;">
                                                            @foreach($inkcolors as $inkcolor)
                                                                <div id="textcolor{{$inkcolor->hex}}" class="block" title="{{$inkcolor->name}}" style="border-radius:  50%; margin-right: 1.7px; background-color:{{$inkcolor->hex}}; width: 30px; height: 30px; border:1px solid #eeeeee; cursor:pointer" onclick="/*OpenClose('carousel_area','work_area','Textcolor');*/ document.getElementById('Textcolor').innerHTML = '{{$inkcolor->name}}';changecolorText('{{$inkcolor->hex}}','f');">
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                <br>
                                                <button type="button" class="btn btn-link" onclick="strokecolorlist();" style="cursor: pointer;"><span class="uppercase">Add Outline</span></button>
                                            </div>
                                        </div>
                                        <div id="Outlinediv" class="panel-footer" style="background-color: #fff !important; border-color: #9a9898 !important; color: #615c5c !important; display: none;">

                                            <h5><span class="">Text Stroke Color: </span><label id="Textstrokecolor" name="Textstrokecolor"></label></h5>

                                            <div class="row">                 
                                                    <div class="row">
                                                        <div class="col-xs-12" style="margin-top:10px;">
                                                            @foreach($inkcolors as $inkcolor)
                                                                <div id="strokecolor{{$inkcolor->hex}}" class="block" title="{{$inkcolor->name}}" style="border-radius:  50%; margin-right: 1.7px; background-color:{{$inkcolor->hex}}; width: 30px; height: 30px; border:1px solid #eeeeee; cursor:pointer" onclick="/*OpenClose('carousel_area','work_area','Textstrokecolor');*/ document.getElementById('Textstrokecolor').innerHTML = '{{$inkcolor->name}}';changecolorText('{{$inkcolor->hex}}','c');">
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                <br>
                                                <div class="input-group">
                                                    <div class="row">
                                                        <div class="col-xs-3 col-xs-3 col-xs-3 col-xl-3" style="white-space: nowrap;">Stroke Size</div>

                                                        <div class="col-xs-7 col-xs-7 col-xs-7 col-xl-7"><input type="range" min="0" max="10" value="0" id="strokewidth" step="1" style="width: 200px;" onchange="setStroke(this);" /></div>
                                                        <div class="col-xs-2 col-xs-2 col-xs-2 col-xl-2"><input min="0" max="10" value="0" id="strokewidthvalue" type="text" onkeypress="validate(event);" name="strokewidthvalue" step="1" style="width: 55px !important; float: left;" oninput="setStroke(this);" readonly></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <br>
                                <div class="panel panel-info">
                                    <div class="panel-heading"> <span class="uppercase"> Size</span></div>
                                    <div class="panel-body">
                                    <center><i class="fa fa-lock" id="resizeicontext" style="font-size:25px;color:#31b0d5; cursor: pointer;" onclick="SetScaleProportional('text');"></i></center>
                                        <div class="">
                                            <div class="row">
                                                <div class="col-xs-2 inputslider" align="left"> <span>Width</span> </div>
                                                <div class="col-xs-8  inputslider"> <input id="widthText" type="range" min="1" max="12" name="widthText" oninput="resize(event);" style="width: 100%;" step="0.1"> </div>
                                                <div class="col-xs-2 inputslider" align="right"><input id="widthvalueText" type="text" onkeypress="validate(event);" name="widthvalueText" min="1" max="12" oninput="resize(event);" step="0.1" style="width: 55px !important;" ></div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="">
                                            <div class="row">
                                                <div class="col-xs-2 inputslider" align="left"> <span>Height</span> </div>
                                                <div class="col-xs-8  inputslider"> <input id="heightText" type="range" min="1" max="12" name="heightText" oninput="resize(event);" style="width: 100%;" step="0.1"> </div>
                                                <div class="col-xs-2 inputslider" align="right"><input id="heightvalueText" type="text" onkeypress="validate(event);" name="heightvalueText" min="1" max="12" oninput="resize(event);" step="0.1" style="width: 55px !important;" ></div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                    <br>
                                    <div class="panel panel-info" >
                                        <div class="panel-heading"><span class="uppercase">Rotate</span></div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-xs-2 inputslider" align="left"> <span>Rotation</span> </div>
                                                <div class="col-xs-8  inputslider"> <input id="angleText" type="range" min="-180" max="180" name="angleText" oninput="rotate(event);"  step="5" value="0"> </div>
                                                <div class="col-xs-2 inputslider" align="right"><input id="anglevalueText" type="number" onkeypress="validate(event);" name="anglevalueText" min="-180" max="180" value="0" oninput="rotate(event);" step="5" style="width: 55px !important;" ></div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-xs-12 col-xs-12 col-xs-12 col-xs-12" style="padding-left: 1px; padding-right: 1px; margin-left:auto; margin-right:auto;">
                                                    <div class="col-xs-4 col-xs-4 col-xs-4 col-xs-4" style="background-color: #eeeeee; padding: 1px; border-right: solid 4px white;">
                                                        <div class="col-xs-6 col-xs-6 col-xs-6 col-xs-6" align="center" style="padding: 1px; border-right: solid 1px black;"><span onclick="flipX();" style="cursor: pointer;"><img src="{{asset('img/icon/icon-flip-across.png')}}" width="22px" height="auto"></span></div>
                                                        <div class="col-xs-6 col-xs-6 col-xs-6 col-xs-6" align="center" style="padding: 1px;"><span onclick="flipY();" style="cursor: pointer;"><img src="{{asset('img/icon/icon-flip-up.png')}}" width="auto" height="20px"></span></div>
                                                    </div>
                                                    <div class="col-xs-5 col-xs-5 col-xs-5 col-xs-5" style="background-color: #eeeeee; padding: 1px; border-right: solid 4px white;">
                                                        <div class="col-xs-6 col-xs-6 col-xs-6 col-xs-6" align="center" style="padding: 1px; border-right: solid 1px black;"><span onclick="SetLayer('forward');" style="cursor: pointer;"><img src="{{asset('img/icon/icon-layer-up.png')}}" width="auto" height="20px"></span></div>
                                                        <div class="col-xs-6 col-xs-6 col-xs-6 col-xs-6" align="center" style="padding: 1px;"><span onclick="SetLayer('backward');" style="cursor: pointer;"><img src="{{asset('img/icon/icon-layer-down.png')}}" width="auto" height="20px"></span></div>
                                                    </div>
                                                    <div class="col-xs-3 col-xs-3 col-xs-3 col-xs-3" style="background-color: #eeeeee; padding: 1px;">
                                                        <div class="col-xs-12 col-xs-12 col-xs-12 col-xs-12" align="center" style="padding: 1px;"><span onclick="SetLayer('center');" style="cursor: pointer;"><img src="{{asset('img/icon/icon-center.png')}}" width="auto" height="20px"></span></div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-xs-12 col-xs-12 col-xs-12" style="padding-left: 1px; padding-right: 1px;">
                                                    <div class="col-xs-3 col-xs-3 col-xs-3 col-xs-4" align="center"><span>Flip</span></div>
                                                    <div class="col-xs-4 col-xs-4 col-xs-4 col-xs-5" align="center"><span>Layers order</span></div>
                                                    <div class="col-xs-2 col-xs-2 col-xs-2 col-xs-3" align="center"><span>Center</span></div>
                                                </div><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-info" >
                                        <div class="panel-heading"><span class="uppercase">Text Effects</span></div>
                                        <div class="panel-body">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-xs-4 col-xs-4 col-xs-4 col-xs-4" align="right"><span class="label label-info" id="straight" style="cursor: pointer; font-size: 14px; font-weight: 500; ">Straight</span></div>
                                                    <div class="col-xs-4 col-xs-4 col-xs-4 col-xs-4" align="center">
                                                        <label class="switch">
                                                            <input type="checkbox" id="effect">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4 col-xs-4 col-xs-4 col-xs-4" align="left"><span class="label label-default" id="curved" style="cursor: pointer; font-size: 14px; font-weight: 500; ">Curve</span></div>
                                                </div>
                                            </div>
                                            <br>
                                            <div id="texteffecsarea" style="display: none;">
                                                <div class="">
                                                    <div class="row">
                                                        <div class="col-xs-2 inputslider" align="left"> <span style="font-size: 14px;">Font Size</span> </div>
                                                        <div class="col-xs-8  inputslider"><input id="sizeText" type="range" min="10" max="50" value="50" name="sizeText" onchange="resize(event);" style="width: 100%;/*width: 220px;*/"></div>
                                                        <div class="col-xs-2 inputslider" align="right"><input class="hidden-md" id="sizeTextvalue" type="text" onkeypress="validate(event);" name="sizeTextvalue" min="10" max="50" value="50" oninput="resize(event);" style="width: 55px !important; /*float: left;*/"></div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="">
                                                    <div class="row">
                                                        <div class="col-xs-2 inputslider" align="left"> <span style="font-size: 14px;">Curve</span> </div>
                                                        <div class="col-xs-8  inputslider"> <input type="range" min="-360" max="360" value="90" id="radius" step="1" style="width: 100%;/*width: 260px;*/" /></div>
                                                        <div class="col-xs-2 inputslider" align="right"><input min="-360" max="360" value="90" id="radiusvalue" type="text" onkeypress="validate(event);" name="radiusvalue" step="1" style="width: 55px !important;"></div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="">
                                                    <div class="row">
                                                        <div class="col-xs-2 col-xs-2 col-xs-2 col-xs-2 inputslider" align="left"> <span style="font-size: 14px;">Spacing</span> </div>
                                                        <div class="col-xs-8 col-xs-8 col-xs-8 col-xs-8  inputslider"> <input type="range" min="1" max="40" value="5" id="spacing" step="1"  /></div>
                                                        <div class="col-xs-2 col-xs-2 col-xs-2 col-xs-2 inputslider" align="right"><input min="1" max="40" value="5" id="spacingvalue" type="text" onkeypress="validate(event);" name="spacingvalue" step="1" style="width: 55px !important;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-xs-12" style="margin-bottom: 30px;">
                                            <div class="text-center">
                                            <button class="btn btn-success" style="width: 95%;" onclick="document.getElementById('textarea').value=''; /*document.getElementById('textarea2').value='';*/ document.getElementById('textareabtn').innerHTML = 'Add Text'; document.getElementById('fontbtn').style.display = 'none'; document.getElementById('textmenu').style.display = 'none'; deselectAllCanvases();"><span>Add New Text</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="priceSection" class="tab-pane fade">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <span class="uppercase">
                                    <h3>List of items in Cart</h3>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="Cart-section">
                                        <thead id="Cart-Head">
                                            <tr class="row">
                                                <th class="col-xs-1 col-xs-1 col-xs-1 col-xs-1">Design</th>
                                                <th class="col-xs-2 col-xs-2 col-xs-2 col-xs-2">Brand/Style</th>
                                                <th class="col-xs-1 col-xs-1 col-xs-1 col-xs-1">Color</th>
                                                <th class="col-xs-2 col-xs-2 col-xs-2 col-xs-2">Sizes</th>
                                                <th class="col-xs-1 col-xs-1 col-xs-1 col-xs-1">Quantity</th>
                                                <th class="col-xs-2 col-xs-2 col-xs-2 col-xs-2">Price Per Shirt</th>
                                                <th class="col-xs-2 col-xs-2 col-xs-2 col-xs-2">Total</th>
                                                <th class="col-xs-1 col-xs-1 col-xs-1 col-xs-1"> </th>
                                            </tr>
                                        </thead>
                                        <tbody id="Cart-body-section">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--CART SECTION-->
                        <div style="display: none;">
                            <h2 class="tab_title">Cart</h2>
                            <hr align="center" style="margin-bottom: 10px; background-color: #4598ba; height: 1px; border: 0;">
                            <form id="checkout_form" method="post" action="{{asset('cart')}}">
                                <table class="table" id="cart2" style="width: 100% !important;">
                                </table>
                                <input type="hidden" name="quantity" id="quantity">
                                <input type="hidden" name="price_per_shirt" id="price_per_shirt">
                                <input type="hidden" name="style_number" id="style_number">
                                <input type="hidden" name="id_product" id="id_product">
                                <input type="hidden" name="current_product_name" id="current_product_name">
                                <input type="hidden" name="current_brand_name" id="current_brand_name">
                                <input type="hidden" name="ordernumber" id="ordernumber">
                                <!-- Trigger the modal with a button -->
                                <button id="productPickerBtn" type="button" class="btn btn-info" data-toggle="modal" data-target="#productPicker" style="background-color: #399fd9;">the functionality of <br>this button needs to allow customer<br> adjust the quantity of a product of check out</button> <!-- taken out of the button onclick="setDesign();" -->
                                <!--this button is used to add a new shirt while keeping the same design-->
                                <button id="add_shirt_btn" type="button" class="btn btn-info" data-toggle="modal" data-target="#productPicker" style="background-color: #399fd9;">Add Shirt Color</button>
                                <!--this saves the last customer's design and clears the page from them add a new design-->
                                <button id="new_design_btn" type="button" class="btn btn-info" data-toggle="modal" data-target="#productPicker" style="background-color: #399fd9;">Add New Design</button>
                                <h3 id="cartTotal"></h3>
                                <input id="total" type="hidden" name="total">
                                <button type="button" id="checkoutBtn" class="btn btn-success" style="display: none;" onclick="">Check Out</button>
                            </form>
                        </div>
                    </div>
                    <div id="saveSection" class="tab-pane fade">
                    </div>
                </div>
            </div>
            <div class="ds-design-area col-xs-7" id="ds-design-area">
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                    <ol class="carousel-indicators sides" id="carousel-sides">
                    @php
                    $count = 0;
                    @endphp
                        @foreach ($product->sides as $side)
                        @if($side->pivot->enable)
                            @if($loop->first)
                                <li class="active"  data-target="#myCarousel" data-slide-to="{{$count}}" onclick="setcanvas({{$count}});">
                                    <img id="frontActiveImage" class="img-responsive" src="{{asset('img/product')}}{{'/'}}{{$side->pivot->image}}">
                                </li>
                            @else
                                <li data-target="#myCarousel" data-slide-to="{{$count}}"  onclick="setcanvas({{$count}});">
                                    <img id="frontActiveImage" class="img-responsive" src="{{asset('img/product')}}{{'/'}}{{$side->pivot->image}}">
                                </li>
                            @endif
                            @php
                            $count++;
                            @endphp
                            @endif
                        @endforeach
                    </ol>
                    <ol class="undoredo">
                    <li  name="undo" id="undo" style="border: 0px solid #696973;">
                        <img src="{{asset('img/icon/undo.png')}}" class="img-responsive" width="30" height="30">
                    </li>
                    <li name="redo" id="redo" style="border: 0px solid #696973;">
                        <img src="{{asset('img/icon/redo.png')}}" class="img-responsive" width="30" height="30">
                    </li>
                    <li  name="zoomin" id="zoomin" style="border: 0px solid #696973;">
                        <img src="{{asset('img/icon/zoomin.png')}}" class="img-responsive" width="30" height="30">
                    </li>
                    <li  name="zoomout" id="zoomout" style="border: 0px solid #696973;">
                        <img src="{{asset('img/icon/zoomout.png')}}" class="img-responsive" width="30" height="30">
                    </li>
                    <li  name="clone" id="clone" style="border: 0px solid #696973;" onclick="copyclipart();">
                        <img src="{{asset('img/icon/clone.png')}}" class="img-responsive" width="30" height="30">
                    </li>
                </ol>
                    <div class="carousel-inner"  id="carousel-inner">
                    @foreach ($product->sides as $side)
                        @if($side->pivot->enable && count($side->printareas) > 0)
                            @if($loop->first)
                                <div class="item active" id="{{$side->slug}}">
                                    <div class="canvasShirt" id="{{$side->slug}}CanvasShirt" style="border: 0px solid #eeeeee; width: 743px; height: 810px; min-height:728px; background-image: url('{{asset('img/product')}}{{'/'}}{{$side->pivot->image}}')">
                                        @if(count($product->parent->printareas) > 0)
                                            @foreach ($product->parent->printareas as $printarea)
                                                @if($printarea->side == $side->slug/* && $printarea->embroideryuse == 1*/)
                                                    <div id="{{$printarea->slug}}canvas-wrapper" style="width: {{$printarea->width}}px; height: {{$printarea->height}}px; border: 0px solid #32a7e0;  position: absolute; top:{{$printarea->top}}px; left:{{$printarea->left}}px">
                                                        <canvas id="{{$printarea->slug}}Canvas" style="border: 0px solid #000000; touch-action: none;">
                                                        </canvas>
                                                        <div class="tooltip-outline error-tooltip" style="left: 82px; display: none;" id="{{$side->slug}}desingerror">
                                                            <div class="clearfix">
                                                                <small style="color: red">Your Art/Work exceeds the print area</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @else
                                            No Print Area
                                        @endif
                                    </div>
                                    <div class="carousel-caption">
                                        <p>{{$side->name}}</p>
                                    </div>
                                </div>
                            @else
                                <div class="item" id="{{$side->slug}}">
                                    <div class="canvasShirt" id="{{$side->slug}}CanvasShirt" style="border: 0px solid #eeeeee; width: 743px; height: 810px; min-height:728px; background-image: url('{{asset('img/product')}}{{'/'}}{{$side->pivot->image}}')">
                                        @if(count($product->parent->printareas) > 0)
                                            @foreach ($product->parent->printareas as $printarea)
                                                @if($printarea->side == $side->slug/* && $printarea->embroideryuse == 1*/)
                                                    <div id="{{$printarea->slug}}canvas-wrapper" style="width: {{$printarea->width}}px; height: {{$printarea->height}}px; border: 0px solid #32a7e0;  position: absolute; top:{{$printarea->top}}px; left:{{$printarea->left}}px">
                                                        <canvas id="{{$printarea->slug}}Canvas" style="border: 0px solid #000000; touch-action: none;">
                                                        </canvas>
                                                        <div class="tooltip-outline error-tooltip" style="left: 82px; display: none;" id="{{$side->slug}}desingerror">
                                                            <div class="clearfix">
                                                                <small style="color: red">Your Art/Work exceeds the print area</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @else
                                            No Print Area
                                        @endif
                                    </div>
                                    <div class="carousel-caption">
                                        <p>{{$side->name}}</p>
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endforeach
                    </div>
                    <a class="left carousel-control" >
                        <span class="glyphicon glyphicon-chevron-left" style="color: #31B0D5;" href="#myCarousel" data-slide="prev" onclick="setcanvas('previous');"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control">
                        <span class="glyphicon glyphicon-chevron-right" style="color: #31B0D5;" href="#myCarousel" data-slide="next" onclick="setcanvas('next');"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="ds-footer">
        <center>  
            <ul class="list-inline">
                <li> 
                    <p style="font-size: 11px;">© 2019 Vivid Customs
                    |
                    <a href="{{asset('privacy')}}">Privacy</a>
                    |
                    <a href="{{asset('user-agreement')}}">Terms</a>
                    |
                    <a href="{{asset('faq')}}">FAQ</a>
                    </p>
                </li>
            </ul>
        </center>
        </div>
        <div id="saveTemplateModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title uppercase">Save Design Template</h5>
                    </div>
                    <div class="modal-body">
                        <div class="panel panel-default">
                            <div class="panel-heading">Select Category</div>
                            <div class="panel-body">
                                <select class="form-control" id="oldcategory[]" name="oldcategory[]" required="" multiple="" data-style="btn-primary" size="15">
                                    @foreach ($templatecategories as $category)
                                        <option value="{{ $category->id }}" disabled>{{ $category->name }}</option>  
                                        @foreach ($category->subcategories as $subcategory)
                                            @if($category->id == $subcategory->category_id)
                                                <option value="{{ $category->id }}{{ '_' }}{{ $subcategory->id }}">&nbsp;&nbsp;&nbsp;{{ $subcategory->name }}</option>  
                                            @endif
                                        @endforeach
                                    @endforeach
                                </select>
                                <center><button type="button" class="btn btn-link" data-toggle="collapse" data-target="#demo">Add New Design Template Category</button></center>
                                <div id="demo" class="collapse">
                                    <div class="panel panel-default">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="childcategory" placeholder="" name="childcategory" required="">
                                            <div class="help-block">Minimum of 1 characters and name have to be same that filename</div>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" id="parentcategory" name="parentcategory">
                                                <option value="0">Parent Product Category</option>
                                                @foreach ($templatecategories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>  
                                                @endforeach
                                            </select>
                                        </div>
                                        <center><button type="button" class="btn btn-primary" id="category_insert_btn" name="category_insert_btn" onclick="saveCategory();">Add New Product Category</button></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" onclick="savetemplate();">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="productmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" style="  max-width: 1360px;  width: 100%;height: auto; margin: auto;padding: 0;">
                <div class="modal-content" style="width: 100%; height: auto; margin: 0; padding: 0;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><span class="uppercase">Products</span></h4>
                    </div>
                    <div class="modal-body" style="width: 100%; height: 80vh;">
                        <productlistembroidery></productlistembroidery>
                    </div>
                </div>
                <button class="btn btn-info btn-block" id="btn-done" style="display:none; position:absolute; bottom:0; margin-bottom:0" onclick="document.getElementById('filters-colum').style.display = 'none'; document.getElementById('data-colum').style.display = 'block'; document.getElementById('listproduct').style.display = 'block'; document.getElementById('singleproduct').style.display = 'none'; document.getElementById('btn-done').style.display = 'none'; document.getElementById('sort-by').style.display = 'none';  document.getElementById('sortby-filter').style.display = 'block'; document.getElementById('results').style.display = 'block';">
                    Done
                </button>
            </div>
        </div>
        <div id="signupModal" class="modal fade " role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="text-align: center;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title uppercase">Login/Register</h5>
                        </div>
                        <div class="modal-body" style="background-color: #eeeeee;">
                            <form id="login-form" method="post" onsubmit="return login()" role="form" style="display: block;">
                                <div class="panel panel-info"  id="panellogin">
                                    <div class="panel-heading"> <span class="uppercase">RETURNING CUSTOMER </span></div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-xs-2" for="user_name" style="text-align: left;">Email:</label>
                                            <div class="col-xs-12 col-xs-10">
                                                <input type="username" class="form-control" id="user_name" placeholder="Enter Email" name="user_name"><br>
                                            </div>
                                            <!--<small id="passwordHelp" class="form-text text-muted" data-toggle="tooltip" data-placement="top" title="Passwords must be at least 8 characters in length include (lower case letters, upper case letters, number and special characters).">Make sure password meets specifications.</small>-->
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-xs-2" for="pass_word" style="text-align: left;">Password:</label>
                                            <div class="col-xs-12 col-xs-10">
                                                <input type="password" class="form-control" id="pass_word" placeholder="Enter Password" name="pass_word"><br>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <input type="hidden" name="operationL" id="operationL" value="login">
                                            <button type="button" class="btn btn-block" onclick="login();" style="cursor: pointer; text-transform: uppercase; text-decoration: none;font-size: 1em;background-color: #c00;border-color: #c00;color: #fff;font-weight: 500;padding: 10px;width: 100%;text-align: center;">Sign In</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="panel panel-info"  id="panelnew">
                                <div class="panel-heading"> <span class="uppercase">NEW CUSTOMER </span></div>
                                <div class="panel-body">
                                     <div class="form-group">
                                    <input type="hidden" name="operationL" id="operationL" value="login">
                                        <button type="button" class="btn btn-block" onclick="document.getElementById('panellogin').style.display= 'none'; document.getElementById('panelnew').style.display= 'none'; document.getElementById('panelregister').style.display= 'block';" style="cursor: pointer; text-transform: uppercase; text-decoration: none;font-size: 1em;background-color: #c00;border-color: #c00;color: #fff;font-weight: 500;padding: 10px;width: 100%;text-align: center;">Create Account</button>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-info" id="panelregister" style="display: none;">
                                <div class="panel-heading"> <span class="uppercase">NEW CUSTOMERS </span></div>
                                <div class="panel-body">
                                    <form action="{{asset('signuplogin.php')}}" method="post" class="form-horizontal">
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-xs-2" for="firstname"  style="text-align: left;"> <span class="visible-lg visible-md">First Name:</span> <span class="visible-sm visible-xs">First Name *</span></label>
                                            <div class="col-xs-12 col-xs-10">
                                                <input type="text" class="form-control" id="firstname" placeholder="Enter first name" name="firstName">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-xs-2" for="lastname"  style="text-align: left;">Last Name:</label>
                                            <div class="col-xs-12 col-xs-10">
                                                <input type="lastname" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastName">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-xs-2" for="username"  style="text-align: left;">Email:</label>
                                            <div class="col-xs-12 col-xs-10">
                                                <input type="username" class="form-control" id="username" placeholder="Enter Email" name="username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-xs-2" for="pwd"  style="text-align: left;">Password:</label>
                                            <div class="col-xs-12 col-xs-10" align="left">
                                                <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
                                                <a href="#passwordrules" class="" data-toggle="collapse">Specifications</a>
                                                <div id="passwordrules" class="collapse">
                                                  <p>Passwords must be at least 8 characters.</p>
                                                  <p>include (lower case letters, upper case letters, number and special characters)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-xs-2" for="email"  style="text-align: left;">E-mail:</label>
                                            <div class="col-xs-12 col-xs-10">
                                                <input type="email" class="form-control" id="email" placeholder="Enter E-mail" name="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-xs-2" for="email"  style="text-align: left;">Confirm E-mail:</label>
                                            <div class="col-xs-12 col-xs-10">
                                                <input type="email" class="form-control" id="confirmemail" placeholder="Enter Confirmation E-mail" name="confirmemail">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-xs-2" for="phone"  style="text-align: left;">Phone:</label>
                                            <div class="col-xs-12 col-xs-10">
                                                <input type="phone" class="form-control" id="phone" placeholder="Enter Phone" name="phone">
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-block" onclick="register();" style="cursor: pointer; text-transform: uppercase; text-decoration: none;font-size: 1em;background-color: #c00;border-color: #c00;color: #fff;font-weight: 500;padding: 10px;width: 100%;text-align: center;">Create Account</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         <div class="modal fade" id="SaveShareModal" role="dialog" style="overflow-y: auto;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" style="opacity: 1;">&times;</button>
                            <h4 class="modal-title">Save & Share</h4>
                        </div>
                        <div class="modal-body" style="overflow-y: hidden">
                            <div id="loaderOnly" class="loaderSave" style="display: none;"></div>
                            <div class="middlePage" id="design_name_area_only" style="display: none;">

                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title text-center"><span class="uppercase">Name your design</span></h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-xs-3">
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-2" for="designNameOnly">Name</label>
                                                        <div class="col-xs-10">
                                                            <input type="text" class="form-control" id="designNameOnly" placeholder="Enter Design Name" name="designNameOnly" required onkeypress="return alphanumeric_only(event);">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-xs-offset-2 col-xs-10">
                                                            <button type="saveandcontinueOnly" class="btn btn-default" onclick="SaveDesignNameWindow('SaveContinueOnly');">Save / Continue</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="SaveShareModalDiv">
                                <div class="panel panel-info">
                                    <div class="panel-heading"><center><span class="uppercase">Current design</span></center></div>
                                    <div class="panel-body" >
                                        <div class="row" id="savedDesigns">
                                        </div>
                                    </div>
                                </div>
                                <hr style="margin-bottom: 10px; background-color: #4598ba; height: 2px; border: 0;">
                                <div class="panel panel-info">
                                    <div class="row">
                                     <div class="col-xs-12">
                                        <div class="panel-heading"><center><span class="uppercase">Save</span></center></div>
                                        <center><button type="button" name="submit" class="btn btn-primary" onclick="SaveDesignNameWindow('save');" style="background-color: #399fd9; width: 90%;">
                                           Save
                                        </button></center>
                                        <center><small id="savebtnHelp" class="form-text text-muted" data-toggle="tooltip" data-placement="top" title="Create your account with us and enjoy the benefits of being a member.">Only for members.</small></center>
                                        <br>
                                    </div>
                                    </div>
                                </div>
                                <hr style="margin-bottom: 10px; background-color: #4598ba; height: 2px; border: 0;">
                                <center><h4 class="uppercase">OR</h4></center>
                                <hr style="margin-top: 10px; margin-bottom: 10px; background-color: #4598ba; height: 2px; border: 0;">
                                    <!--SHARE SECTION-->
                                    <div class="panel panel-info" id="share_div" name="share_div">
                                        <div class="col-xs-12">
                                        <div class="panel-heading">
                                            <center>
                                                <span class="uppercase">SHARE YOUR DESIGN</span>
                                            </center>
                                        </div>
                                        <div class="panel-body">
                                            <form class="form-horizontal" id="emailform">
                                                <div class="row">
                                                    <div class="col-xs-6" style="padding-left: 0px">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">Design Name:</span>
                                                            <input id="designnameshare" type="test" class="form-control" name="designnameshare" placeholder="Enter your Design Name" onkeypress="return alphanumeric_only(event);" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6" style="padding-right: 0px">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">Email To:</span>
                                                            <input id="to_email" type="text" class="form-control" name="to_email" placeholder="Enter your email" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-xs-12" style="padding-right: 0px">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">Message</span></span>
                                                            <textarea id="message" type="text" class="form-control" name="message" placeholder="Enter your message" required>
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div id="loaderEmail" class="loaderEmail" style="display: none;"></div>
                                                <div class="alert alert-success" id="emailmessage" style="display: none;">
                                                  <strong>Email Sent</strong>
                                                </div>
                                                <br>
                                                <center>
                                                    <button type="button" name="submit" class="btn btn-primary" onclick="SaveDesignNameWindow('saveasguest');" style="background-color: #399fd9; width: 90%;">
                                                      Send Email
                                                    </button>
                                                </center>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         <div class="modal fade" id="sizechartmodal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" onclick="if(isMobile()){showmodal('productSectionModal');}">×</button>
                    <h4 class="modal-title"><span class="uppercase">Size Chart</span></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                    <div class="col-xs-8 col-xs-8 col-xs-8">
                        <h4 class="modal-title">How to Measure</h4>
                        <br>
                        <div class="row">
                            <div class="col-xs-4 col-xs-4 col-xs-4">
                                <div for="sizechartimage" id="sizechartimage" name="sizechartimage">
                                    @if($product->parent->sizechartimage)
                                        <img src="{{asset('img/product')}}{{'/'}}{{$product->parent->sizechartimage}}" class="img-responsive">
                                    @endif
                                </div>   
                            </div>
                            <div class="col-xs-8 col-xs-8 col-xs-8 col-xs-8">    
                                <label for="sizechartdescription" id="sizechartdescription" name="sizechartdescription">
                                        {!!$product->parent->sizechartdescription!!}
                                </label>                                        
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-xs-4 col-xs-4 col-xs-4">
                        <h4 class="modal-title">Size Chart</h4>
                        <table class="table table-striped table-bordered" >
                            <thead>
                                <tr class="active">
                                    <th>Size</th>
                                    <th>Length</th>
                                    <th>Width</th>
                                </tr>
                            </thead>
                            <tbody id="sizechartable" name="sizechartable">
                                @foreach($product->parent->sizeschart as $sizechart)
                                    <tr>
                                        <td>{{  $sizechart->size }}</td>
                                        <td>{{  $sizechart->length }}</td>
                                        <td>{{  $sizechart->width }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" onclick="if(isMobile()){showmodal('productSectionModal');}">Close</button>
                </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="start-over-modal" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" style="color:red">Start Over?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Your design will be lost</p>
                        <p>Please return to Design Studio to save before you start over </p>
                        <p></p>
                
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-block" id="modal-star-over-btn-yes">Continue Without Saving</button>
                        <button type="button" class="btn btn-success btn-block" id="modal-star-over-btn-no">Return to Design Studio</button>
                    </div>
                </div>
            </div>
        </div>       
        
        <div class="modal fade" id="changeproductconfirmation-modal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">You will lose your current design?</h4>
                        <div class="row" id="designtmplist">
                            <div class="col-xs-3 col-xs-4 col-xs-6 col-xs-12"><img class="img-responsive" src=""></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" id="modal-btn-yes">Continue</button>
                        <button type="button" class="btn btn-primary" id="modal-btn-no">Cancel</button>
                    </div>
                </div>
            </div>
        </div>          
        <div class="modal fade" id="productPicker" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div id="loader" class="loader" style="display: none;">SAVING DESIGN</div>
                        <div id="product_style_area" style="display: block;">
                            <div class="row">
                                <div class="col-xs-7 col-xs-7 text-center" style="/*border: 1px solid #eeeeee*/ border-right: 1px solid #eeeeee;">
                                    <div class="row" id="getpriceDesign">
                                       
                                    </div>
                                </div>
                                <div class="col-xs-5 col-xs-5 visible-lg visible-md" style="/*border: 1px solid #eeeeee*/">
                                    <div id="shippingSection" style="">
                                        <h5><b style="color: #ff0000;">FREE SHIPPING</b><br>Guaranteed by: <span id="freeshipping" style="color: #5bc0de;"></span></h5>
                                        <h5><b>Expedited Shipping</b>: Add 15%<br>Guaranteed by: <span id="rushdelivery" style="color: #5bc0de;"></span></h5>
                                        <p><b>Saving Tips:</b><br style="line-height: 6px;">
                                            -Increase in quantity<br style="line-height: 5px;">-Reduce Ink Colors in design</p>
                                    </div>
                                </div>
                            </div>
                            <hr align="center" style="margin-bottom: 10px; margin-top: 30px; background-color: #4598ba; height: 1px; border: 0;">
                            <span class="">
                                <h4 style="font-weight: 600; text-transform: uppercase; font-size: 15px; text-align: center; text-decoration: underline; margin-bottom: 15px;">Enter Quantity for Pricing</h4>
                            </span>
                            <div class="productsizes2">
                                <div class="row productsizeseow2">
                                    <div id="infant" class="col-xs-5 sizeinput" style="display: none;">

                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_NB">
                                            <label for="NB">NB</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="NB" name="NB" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_0M">
                                            <label for="0M">0M</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="0M" name="0M" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_3M">
                                            <label for="3M">3M</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="3M" name="3M" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_6M">
                                            <label for="6M">6M</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="6M" name="6M" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_12M">
                                            <label for="12M">12M</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="12M" name="12M" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_18M">
                                            <label for="18M">18M</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="18M" name="18M" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_24M">
                                            <label for="24M">24M</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="24M" name="24M" oninput="temp(this);">
                                        </div>
                                        <h5 style="margin-top:1px;">Infant</h5>
                                    </div>
                                    <div id="toddlers" class="col-xs-7 sizeinput" style="display: none; /*float: right;*/">

                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_2T">
                                            <label for="2T">2T</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="2T" name="2T" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_3T">
                                            <label for="3T">3T</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="3T" name="3T" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_4T">
                                            <label for="4T">4T</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="4T" name="4T" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_5T">
                                            <label for="5T">5T</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="5T" name="5T" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_5_6">
                                            <label for="5_6">5_6</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="5_6" name="5_6" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_6T">
                                            <label for="6T">6T</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="6T" name="6T" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_7">
                                            <label for="7">7</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="7" name="7" oninput="temp(this);">
                                        </div>
                                        <h5 style="margin-top:1px;">Toddlers</h5>
                                    </div>
                                </div>
                                <div class="row productsizeseow2">
                                    <div id="youth" class="col-xs-5 sizeinput" style="display: none;">

                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_YXS">
                                            <label for="YXS" style="margin-bottom: 0px;">YXS</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="YXS" name="YXS" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_YS">
                                            <label for="YS" style="margin-bottom: 0px;">YS</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="YS" name="YS" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_YM">
                                            <label for="YM" style="margin-bottom: 0px;">YM</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="YM" name="YM" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_YL">
                                            <label for="YL" style="margin-bottom: 0px;">YL</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="YL" name="YL" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_YXL">
                                            <label for="YXL" style="margin-bottom: 0px;">YXL</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="YXL" name="YXL" oninput="temp(this);">
                                        </div>
                                        <h5 style="margin-top:1px;">Youth</h5>
                                    </div>
                                    <div id="adult" class="col-xs-7 sizeinput" style="display: none;/* float: right;*/">

                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_XS">
                                            <label for="XS" style="margin-bottom: 0px;">XS</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="XS" name="XS" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_S">
                                            <label for="S" style="margin-bottom: 0px;">S</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="S" name="S" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_M">
                                            <label for="M" style="margin-bottom: 0px;">M</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="M" name="M" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_L">
                                            <label for="L" style="margin-bottom: 0px;">L</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="L" name="L" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_XL">
                                            <label for="XL" style="margin-bottom: 0px;">XL</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="XL" name="XL" oninput="temp(this);">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_2XL">
                                            <label for="2XL" style="margin-bottom: 0px;">2XL</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="2XL" name="2XL" oninput="temp(this);" data-toggle="popover" data-trigger="hover" data-placement="top">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_3XL">
                                            <label for="3XL" style="margin-bottom: 0px;">3XL</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="3XL" name="3XL" oninput="temp(this);" data-toggle="popover" data-trigger="hover" data-placement="top">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_4XL">
                                            <label for="4XL" style="margin-bottom: 0px;">4XL</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="4XL" name="4XL" oninput="temp(this);" data-toggle="popover" data-trigger="hover" data-placement="top">
                                        </div>
                                        <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem; text-align: center;" id="div_5XL">
                                            <label for="5XL" style="margin-bottom: 0px;">5XL</label>
                                            <input type="number" onkeypress="validate(event);" class="form-control2" id="5XL" name="5XL" oninput="temp(this);" data-toggle="popover" data-trigger="hover" data-placement="top">
                                        </div>
                                        <h5 style="margin-top:1px;">Adult</h5>
                                    </div>
                                    <div class="row productsizeseow2">
                                        <div id="onesize" class="col-xs-12 sizeinput" style="display: none;/* float: right;*/">

                                            <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem;" id="div_ONE_SIZE">
                                                <label for="ONE_SIZE">ONE SIZE</label>
                                                <input type="number" onkeypress="validate(event);" class="form-control2" id="ONE_SIZE" name="ONE_SIZE" oninput="temp(this);">
                                            </div>
                                            <h5 style="margin-top:1px;">ONE SIZE</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr align="center" style="margin-bottom: 0px; background-color: #4598ba; height: 2px; border: 0;">
                            <!-- <div class="row">
                          <div style="color: #000; font-size: 24px; font-weight: 700;"><center>Your All Inclusive Pricing</center></div><br>
                          <div class="col-xs-12 col-xs-6 col-xs-6 col-xs-6">
                          <h4 id="itemPriceLabel" style="margin-top: 2px;"><b>Price per item:</b> <span id="itemPrice" style="color: #5cb85c; font-family: Arial;"></span></span></h4>
                          <h4 id="numOfShirtsLabel" style="position: relative; margin-top: 2px;"><b>Quantity:</b> <span style='color: #5cb85c; font-family: Arial;'> 0 item(s)</span></h4>
                          <h4 id="itemTotalLabel" style=""><b>Total:</b> <span id="itemTotal" style="color: #5cb85c; font-family: Arial;"></span></h4>
                          </div>
                        <div class="col-xs-12 col-xs-6 col-xs-6 col-xs-6">
                        <button type="button" class="btn btn-success" style="float: right;" id="AddKeepDesign" name="AddKeepDesign" onclick="SaveDesignNameWindow('AddKeepDesign');">Add To Cart</button></div>
                       </div>   -->

                            <!-- New Testing Start -->
                            <div class="row">
                                <span style="color: #000; font-size: 24px; font-weight: 700;">
                                    <center>Your All Inclusive Pricing</center>
                                </span><br>
                                <div class="col-xs-12 col-xs-4 col-xs-4 col-xs-4">
                                    <h4 id="itemPriceLabel" style="margin-top: 2px;"><b>Price per item:</b> <span id="itemPrice" style="color: #5cb85c; font-family: Arial;"></span></h4>
                                </div>
                                <div class="col-xs-12 col-xs-4 col-xs-4 col-xs-4">
                                    <h4 id="numOfShirtsLabel" style="position: relative; margin-top: 2px;"><b>Quantity:</b> <span style='color: #5cb85c; font-family: Arial;'> 0 item(s)</span></h4>
                                </div>
                                <div class="col-xs-12 col-xs-4 col-xs-4 col-xs-4">
                                    <h4 id="itemTotalLabel" style="position: relative; margin-top: 2px;"><b>Total:</b> <span id="itemTotal" style="color: #5cb85c; font-family: Arial;"></span></h4>
                                </div>
                            </div>
                            <hr align="center" style="margin-bottom: 10px; background-color: #4598ba; height: 2px; border: 0;">
                            <button type="button" class="btn btn-success" style="float: right;" id="AddKeepDesign" name="AddKeepDesign" onclick="SaveDesignNameWindow('AddKeepDesign');">Add To Cart</button>


                            <!-- New Testing End -->

                            
                        </div>
                        <div class="middlePage" id="design_name_area" style="display: none;">
                            <!--<div class="page-header">
                          <h1 class="logo">Techulus <small>Welcome to our place!</small></h1>
                          </div>-->
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title text-center"><span class="uppercase">Name your design</span></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-7">
                                            <div class="row" id="DesignNameDesigns">
                                       
                                            </div>
                                        </div>
                                        <div class="col-xs-5" style="border-left:1px solid #ccc;height:160px">
                                            <div class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="control-label col-xs-4" for="designName">Name</label>
                                                    <div class="col-xs-7">
                                                        <input type="text" class="form-control" id="designName" placeholder="Enter Design Name" name="designName">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-xs-4" for="designemail">E-mail:</label>
                                                    <div class="col-xs-7">
                                                        <input type="email" class="form-control" id="designemail" placeholder="Enter E-mail" name="designemail">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-offset-2 col-xs-7">
                                                        <button type="saveandcontinue" class="btn btn-default" onclick="SaveDesignNameWindow('SaveContinue');">Save / Continue</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--<input id="designName" name="designName" type="text" placeholder="Enter Design Name" class="form-control input-md">
                                      <input id="designemail" name="designemail" type="email" placeholder="Enter E-mail" class="form-control input-md">
                                      <button id="saveandcontinue" name="saveandcontinue"  type="button" class="btn btn-info btn-sm pull-right" onclick="SaveDesignNameWindow('SaveContinue');">Save/Continue</button>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row middlePage" id="cart_area" style="padding-top: 50px;" style="display: none;">
                            <div class="col-xs-12" style=" height: 300px; overflow-y: auto; overflow-x: hidden;">
                                <div class="table-responsive" id="Cart" style="display: none;">
                                    <span class="uppercase">
                                        <h4>Your Cart</h4>
                                        <hr align="center" style="margin-top: 1px; background-color: #4598ba; height: 1px; border: 0;">
                                    </span>
                                    <table class="table table-striped">
                                        <thead id="Cart-Head">
                                            <tr class="row">
                                                <th class="col-xs-1">Design</th>
                                                <th class="col-xs-2 visible-lg visible-md"  id="cart_brand">Brand/Style</th>
                                                <th class="col-xs-1 visible-lg visible-md"  id="cart_color">Color</th>
                                                <th class="col-xs-2 visible-lg visible-md"  id="cart_size">Sizes</th>
                                                <th class="col-xs-1">Quantity</th>
                                                <th class="col-xs-2 visible-lg visible-md"  id="cart_price">Price Per Shirt</th>
                                                <th class="col-xs-2">Sub-Total</th>
                                                <th class="col-xs-1"> </th>
                                            </tr>
                                        </thead>
                                        <tbody id="Cart-Body">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div style="display: inline;">
                            <div align="center">
                                <button type="button" class="btn btn-success" id="continuedesign" name="continuedesign" onclick="SaveDesignNameWindow('continuedesign');" style="float: right; display: inline;">Contiue Designing</button>
                                <button type="button" class="btn btn-success" id="KeepDesign" name="KeepDesign" style="display: none;" onclick="SaveDesignNameWindow('KeepDesign');" style="float: center; display: inline;">Create New Design</button>
                                <button type="button" class="btn btn-success" id="finalcheckout" name="finalcheckout" style="display: none;" onclick="SaveDesignNameWindow('Check-out');" style="float: left; display: inline;">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.0/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.1/axios.min.js"></script>-->
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
    <script src="{{asset('js/frontend/designstudio/fabric.js')}}"></script>
    <script src="{{asset('js/frontend/designstudio/custom_controls.js')}}"></script>
    <script src="{{asset('js/frontend/designstudio/curvedText.js')}}"></script>
    <script src="{{asset('js/frontend/designstudio/centering_guidelines.js')}}"></script>
    
    <script type="text/javascript">
        var Orientation = "";
        var windowwidth = "";
        var windowheight = "";
        var devicePixelRatio = "";
        var idproduct;
        var product = null;
        var canvasActive = null;
        var sideActive = null;
        var canvaslist = [];
        var canvasdesignlist = [];
        var objId=1;
        var ListColors = [];
        var clipartuploadedcolorlist = [];
        var radius = document.getElementById("radius");
        var radiusvalue = document.getElementById("radiusvalue");
        var spacing = document.getElementById("spacing");
        var spacingvalue = document.getElementById("spacingvalue");
        var idcolorselected = null;
        var editdesign = null;
        var edit = null;
        var user = null;
        var scale = 0.25;
        var textAdded = clipArtAdded = imageUploaded = colorChanged = addingToCart = resized = Checked = productchanged = saveOnly = false;
        var shoppingcart = { shop_number:'', subtotal:0, tax:0, shipping_cost:0, discount:0, total:0, status:"created", date:null, shipby:null, promocode:'', items:[], user:null, shippingType:'Standard Shipping', promocode:null, useexpedited: 1};
        var position = 0;
        var parameter = {type:null, value:null};
        var currentdesign = null;//  {arrayside :[], name:'',product:null, type:"Embroiderystudio", num_shirts:0, price_per_shirt:0, total:0};
        var templatedesign = null;
        var pos = 0;
        var front = back = null;       
        var counter = 5;
        var countsize = 0;
        var sidescolors = null;
        var designtoload = null;
        
        
    
         /*
         * Load initial information
         *
         * @return void
         */
        window.onload = function() 
        {
            var pathArray = window.location.pathname.split('/');
            if (pathArray[1] == 'designstudio') {
                switch (pathArray[2]) {
                case "p":
                        parameter.type = 'p';
                        parameter.value = pathArray[3];
                    break;
                case "e":
                        parameter.type = 'e';
                        parameter.value = pathArray[3];
                    break;
                case "a":
                    parameter.type = 'a';
                    parameter.value = pathArray[3];
                    break;
                case "r":
                    parameter.type = 'r';
                    parameter.value = pathArray[3];
                    break;
                case "t":
                        parameter.type = 't';
                        parameter.value = pathArray[3];
                    break;
                default:
                    //idproduct = 593;
                    //LoadInitialProduct();
                    break;
                }
            } 
            else 
            {
                //idproduct = 593;
                //LoadInitialProduct();
            }
            //reloadelements();
            $.ajax({
                type:'GET',
                dataType: 'json', 
                data: {parameter: parameter},
                //async:true,
                url: window.location.origin + '/initialinfoembroidery',
                success:function(data)
                {
                    user = data.user;
                    ListColors = data.inkcolors;
                    product = data.product;
                    if(data.shoppingcart != null)
                    {
                        shoppingcart = data.shoppingcart;
                    }
                    if(user != null)
                    {
                        shoppingcart.user = user;
                    }
                    currentdesign = {id:'',arrayside :[], name:'',product:product, type:"Embroiderystudio", num_shirts:0, price_per_shirt:0, total:0};
                    enableproductsizes();
                    cleanInputQuantity();
                    //front = new fabric.Canvas(product.printareas[0].slug+'Canvas');
                    //back = new fabric.Canvas(product.printareas[2].slug+'Canvas'); 
                    setcanvasproperties(product.id);
                    product.printareas.forEach(printarea => {
                        var canvasside = new fabric.Canvas(printarea.slug+'Canvas');
                            canvasside.side = printarea.side;
                            canvasside.name = printarea.slug;
                            canvasside.left = printarea.left;
                            canvasside.top = printarea.top;
                            product.sides.forEach(side=>{
                                if(side.slug == printarea.side)
                                {
                                    canvasside.productimg = side.pivot.image;
                                }
                            });
                            canvasside.setWidth(printarea.width);
                            canvasside.setHeight(printarea.height);
                            initCenteringGuidelines(canvasside);  
                            canvasside.undo = [];
                            canvasside.redo = [];
                            canvasside.state = null;
                            canvasside.width = printarea.width;
                            canvasside.height = printarea.height;
                            canvasside.left = printarea.left;
                            canvasside.top = printarea.top;
                        canvaslist.push(canvasside);
                        canvasside.on('mouse:up', function(e)
                        {
                            canvasActive=this;
                            displayinfo(e);
                            showcorners(e);
                        });
                        canvasside.on('mouse:down', function(e)
                        {
                            showcorners(e);
                        });
                        canvasside.on('object:added', function(e)
                        {
                            displayinfo(e);
                            applyimgfilters(e);
                            showcorners(e);
                        });
                        canvasside.on('object:moving',function(e)
                        {
                            hidecorners(e);
                        });
                        canvasside.on('object:removed',function(e)
                        {
                            initcanvas(e);
                        });
                    });
                    canvasActive = canvaslist[0];
                    if(data.design.length > 0)
                    {
                        if(parameter.type == 'e' || parameter.type == 't'  || parameter.type == 'a'   || parameter.type == 'r')
                        {
                            designtoload = data.design;
                        }
                    }
                },
                complete: function()
                {
                   document.getElementById("loaderMain").style.display = "none";
                }
            });
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document)
        .ajaxStart(function() 
        {
            document.getElementById('loader').style.display= 'block';
        })
        .ajaxStop(function() 
        {
            document.getElementById('loader').style.display= 'none';
        }); 
        
        function enableproductsizes()
        {
            document.getElementById('div_NB').style.display='none';
            document.getElementById('div_0M').style.display='none';
            document.getElementById('div_3M').style.display='none';
            document.getElementById('div_6M').style.display='none';
            document.getElementById('div_12M').style.display='none';
            document.getElementById('div_18M').style.display='none';
            document.getElementById('div_24M').style.display='none';
            document.getElementById('infant').style.display='none';

            document.getElementById('div_2T').style.display='none';
            document.getElementById('div_3T').style.display='none';
            document.getElementById('div_4T').style.display='none';
            document.getElementById('div_5T').style.display='none';
            document.getElementById('div_5_6').style.display='none';
            document.getElementById('div_6T').style.display='none';
            document.getElementById('div_7').style.display='none';
            document.getElementById('toddlers').style.display='none';


            document.getElementById('div_YXS').style.display='none';
            document.getElementById('div_YS').style.display='none';
            document.getElementById('div_YM').style.display='none';
            document.getElementById('div_YL').style.display='none';
            document.getElementById('div_YXL').style.display='none';
            document.getElementById('youth').style.display='none';


            document.getElementById('div_XS').style.display='none';
            document.getElementById('div_S').style.display='none';
            document.getElementById('div_M').style.display='none';
            document.getElementById('div_L').style.display='none';
            document.getElementById('div_XL').style.display='none';
            document.getElementById('div_2XL').style.display='none';
            document.getElementById('div_3XL').style.display='none';
            document.getElementById('div_4XL').style.display='none';
            document.getElementById('div_5XL').style.display='none';
            document.getElementById('adult').style.display='none';
            product.parent.sizes.forEach(size=>
            {
                if (size.name == "NB" || size.name == "0M" || size.name == "3M" || size.name == "6M" || size.name == "12M" || size.name == "18M" || size.name == "24M") 
                {
                    document.getElementById('infant').style.display='inline-block';
                }

                if (size.name == "2T" || size.name == "3T" || size.name == "4T" || size.name == "5T" || size.name == "5_6" || size.name == "6T" || size.name == "7") 
                {
                    document.getElementById('toddlers').style.display='inline-block';
                }

                if (size.name == "YXS" || size.name == "YS" || size.name == "YM" || size.name == "YL" || size.name == "YXL") 
                {
                    document.getElementById('youth').style.display='inline-block';
                }

                if (size.name == "XS" || size.name == "S" || size.name == "M" || size.name == "L" || size.name == "XL" || size.name == "2XL" || size.name == "3Xl" || size.name == "4XL" || size.name == "5XL")
                {
                    document.getElementById('adult').style.display='inline-block';
                }
                document.getElementById('div_'+size.name).style.display='inline-block';
            });
        }

        /**
         * Reset designstudio for a new design
         *
         * @return void
         */
        function startover() 
        {
            $("#start-over-modal").modal('show');
        }

        $("#modal-star-over-btn-yes").on("click", function() 
        {
            $("#start-over-modal").modal('hide');
        });

        $("#modal-star-over-btn-no").on("click", function() 
        {
            $("#start-over-modal").modal('hide');
        });

        function moreless(element)
        {
            if(document.getElementById(element.id).getAttribute('aria-expanded') == "true")
            {
                document.getElementById(element.id).innerHTML = "More Details";
            }
            else
            {
                document.getElementById(element.id).innerHTML = "Less Details";
            }
        }

       

        /**
         * set the default canvas and print area when the carousel sida is changed
         *
         * @return void
         */
        function setcanvas(direction)
        { 
            var find = false;      
            if(direction == "next")
            { 

                for (var i = 0; i < canvaslist.length; i++)
                {
                    var printarea = canvaslist[i];
                    if(printarea.name == canvasActive.name)
                    {
                        if((i+1) < canvaslist.length)
                        {
                            pos=i+1;
                        } 
                        else
                        {
                            pos = i;
                        }  
                        break;
                    }
                }

                for (var i = pos; i < canvaslist.length; i++)
                {
                    if(canvasActive.side != canvaslist[i].side)
                    {
                        canvasActive = canvaslist[i];
                        find = true;
                        break;
                    }
                }

                if(!find)
                {
                    for (var i = 0; i < pos; i++)
                    {
                        if(canvasActive.side != canvaslist[i].side)
                        {
                            canvasActive = canvaslist[i];
                            find = true;
                            break;
                        }
                    }   
                }

            }
            else if(direction == "previous")
            {           
                for (var i = 0; i < canvaslist.length; i++)
                {
                    var printarea = canvaslist[i];
                    if(printarea.name == canvasActive.name)
                    {
                        if(pos-1 == 0)
                        {
                            pos=canvaslist.length-1;
                            break;
                        }
                        else
                        {
                            pos = i;
                        } 
                        break;
                    }               
                }
                
                for (var i = pos; i >= 0 ; i--)
                {
                    if(canvasActive.side != canvaslist[i].side)
                    {
                        canvasActive = canvaslist[i];
                        find = true;
                        break;
                    }
                }
                if(!find)
                {
                    for (var i = canvaslist.length-1; i >= pos ; i--)
                    {
                        if(canvasActive.side != canvaslist[i].side)
                        {
                            canvasActive = canvaslist[i];
                            find = true;
                            break;
                        }
                    }   
                }
            }
            else if(direction == 1)
            {
                canvasActive = canvaslist[0];  
                for (var i = 1; i < canvaslist.length; i++)
                { 
                    $("#"+canvaslist[i].side).removeClass(" active");
                }    
                $("#"+canvaslist[0].side).addClass("active");
            }
            else if(direction == 3)
            {
                canvasActive = canvaslist[2];
               for (var i = 0; i < canvaslist.length; i++)
               {                 
                    $("#"+canvaslist[i].side).removeClass(" active");
               }    
               $("#"+canvaslist[2].side).addClass("active");
            }
            
            var textarea = document.getElementById('textarea');
            var Artcolor = document.getElementById("Artcolor");
            textarea.value = "";
            Artcolor.innerHTML = '';
            font = 'ABeeZee-Regular ';
            setTitleFont();
            deselectAllCanvases();      
            initCenteringGuidelines(canvasActive);      
        }

        /**
         * Change and load new product color from the child products color list
         *
         * @return void
         */
        function setcanvasproperties(id)
        {
            savetmpdesign();
            $.ajax({
                type:'GET',
                dataType: 'json', 
                data: {id: id},
                url: window.location.origin + '/productinfoembroidery/'+ id,
                success:function(data)
                {   
                    product = data.product;
                    currentdesign.product = product;
                    enableproductsizes();
                    cleanInputQuantity();
                    document.getElementById("product_name").innerHTML = data.product.parent.name;
                    document.getElementById("current_product_color").innerHTML = data.product.color.name;
                    var description_label = '<p><strong>Brand:</strong> ' + data.product.brand + ' </p>';
                    description_label += '<p><strong>Size:</strong> ' + data.product.parent.sizes[0].name  + '-' + data.product.parent.sizes[data.product.parent.sizes.length -1].name + '  <a href="javascript:void(0)" data-toggle="modal" data-target="#sizechartmodal"> size chart</a></p>';
                    description_label += '<p><strong>Fabric:</strong> ' + data.product.fabric + '</p>';
                    description_label += '<p><a href="#productlongdescription" data-toggle="collapse" id="more-details" class="collapsestart" onclick="moreless(this);"> More Details </a></p>';
                    document.getElementById("description_label").innerHTML = description_label;
                    var sidesinfo = ""; 
                    var innersinfo = ""; 
                    var countsides = 0;
                    var countinners = 0;  
                    canvaslist = [];
                    if(data.product.sides.length > 0)
                    {   
                        document.getElementById("carousel-sides").innerHTML = "";
                        document.getElementById("carousel-inner").innerHTML = "";
                        data.product.sides.forEach(side => {
                            if(side.pivot.enable == 1 &&  side.printareas.length > 0)
                            {  
                                if(countsides == 0)
                                {
                                    sidesinfo += ' <li class="active"  data-target="#myCarousel" data-slide-to="'+ countsides +'"><img id="frontActiveImage" class="img-responsive" src="' + window.location.origin + '/img/product/' + side.pivot.image +  '" onclick="setcanvas(' + (countsides+1) + ');"></li>';
                                    innersinfo += '<div id="'+side.slug+'" class="item active">';
                                        innersinfo += '<div id="'+side.slug+'CanvasShirt" class="canvasShirt" style="border: 0px solid rgb(238, 238, 238); width: 743px; height: 810px; min-height: 728px; background-image: url(' + window.location.origin + '/img/product/' + side.pivot.image +  ');">';
                                            data.product.printareas.forEach(printarea => { 
                                            if(printarea.side == side.slug/* && printarea.embroideryuse == 1*/)
                                            {  
                                                innersinfo += '<div id="'+printarea.slug+'canvas-wrapper" style="width: '+printarea.width+'px; height: '+printarea.height+'px; border: 0px solid rgb(50, 167, 224); position: absolute; top: '+printarea.top+'px; left: '+printarea.left+'px;">';
                                                    innersinfo += '<canvas id="'+printarea.slug+'Canvas" style="border: 0px solid rgb(0, 0, 0); touch-action: none; width: '+printarea.width+'px; height: '+printarea.height+'px;top: 0px; left:0px;"></canvas> ';
                                                    innersinfo += '<div id="'+printarea.slug+'desingerror" class="tooltip-outline error-tooltip" style="left: 82px; display: none;">';
                                                        innersinfo += '<div class="clearfix">';
                                                            innersinfo += '<small style="color: red;">Your Art/Work exceeds the print area</small>';
                                                            innersinfo += '</div>';
                                                    innersinfo += '</div>';
                                                innersinfo += '</div>';
                                            }
                                        });
                                        innersinfo += '</div> ';
                                        innersinfo += '<div class="carousel-caption">';
                                            innersinfo += '<p>'+side.name+'</p>';
                                        innersinfo += '</div>';
                                    innersinfo += '</div>';
                                }
                                else
                                {   
                                    sidesinfo += ' <li   data-target="#myCarousel" data-slide-to="'+ countsides +'"><img id="frontActiveImage" class="img-responsive" src="' + window.location.origin + '/img/product/' + side.pivot.image +  '" onclick="setcanvas(' + (countsides+1) + ');"></li>';
                                    innersinfo += '<div id="'+side.slug+'" class="item">';
                                        innersinfo += '<div id="'+side.slug+'CanvasShirt" class="canvasShirt" style="border: 0px solid rgb(238, 238, 238); width: 743px; height: 810px; min-height: 728px; background-image: url(' + window.location.origin + '/img/product/' + side.pivot.image +  ');">';
                                            data.product.printareas.forEach(printarea => {
                                                if(printarea.side == side.slug /* && printarea.embroideryuse == 1*/)
                                                {  
                                                    innersinfo += '<div id="'+printarea.slug+'canvas-wrapper" style="width: '+printarea.width+'px; height: '+printarea.height+'px; border: 0px solid rgb(50, 167, 224); position: absolute; top: '+printarea.top+'px; left: '+printarea.left+'px;">';
                                                        innersinfo += '<canvas id="'+printarea.slug+'Canvas" style="border: 0px solid rgb(0, 0, 0); touch-action: none; width: '+printarea.width+'px; height: '+printarea.height+'px;top: 0px; left:0px;"></canvas> ';
                                                        innersinfo += '<div id="'+printarea.slug+'desingerror" class="tooltip-outline error-tooltip" style="left: 82px; display: none;">';
                                                            innersinfo += '<div class="clearfix">';
                                                                innersinfo += '<small style="color: red;">Your Art/Work exceeds the print area</small>';
                                                            innersinfo += '</div>';
                                                        innersinfo += '</div>';
                                                    innersinfo += '</div>';
                                                }
                                            });
                                        innersinfo += '</div> ';
                                        innersinfo += '<div class="carousel-caption">';
                                            innersinfo += '<p>'+side.name+'</p>';
                                        innersinfo += '</div>';
                                    innersinfo += '</div>';
                                    
                                }
                                countsides ++;
                            }
                        });
                        document.getElementById("carousel-sides").innerHTML = sidesinfo;                       
                        document.getElementById("carousel-inner").innerHTML = innersinfo;
                    }
                },
                complete: function(){
                    product.printareas.forEach(printarea => {
                        var canvasside = new fabric.Canvas(printarea.slug+'Canvas');
                            canvasside.side = printarea.side;
                            canvasside.name = printarea.slug;
                            canvasside.left = printarea.left;
                            canvasside.top = printarea.top;
                            product.sides.forEach(side=>{
                                if(side.slug == printarea.side /* && printarea.embroideryuse == 1*/)
                                {
                                    canvasside.productimg = side.pivot.image;
                                }
                            });
                            canvasside.setWidth(printarea.width);
                            canvasside.setHeight(printarea.height);
                            initCenteringGuidelines(canvasside);      
                            canvasside.undo = [];
                            canvasside.redo = [];
                            canvasside.state = null; 
                        canvaslist.push(canvasside);
                        canvasside.on('mouse:up', function(e)
                        {
                            canvasActive=this;
                            displayinfo(e);
                            showcorners(e);
                        });
                        canvasside.on('mouse:down', function(e)
                        {
                            showcorners(e);
                        });
                        canvasside.on('object:added', function(e)
                        {
                            //displayinfo(e);
                        });
                        canvasside.on('object:moving',function(e)
                        {
                            hidecorners(e);
                        });
                    });

                    canvasActive = canvaslist[0];
                    if(canvasdesignlist.length > 0)
                    {
                        loadtmpdesigns();
                    }
                    if(designtoload != null)
                    {
                        loaddesigns(designtoload);
                    }
                    //$('.nav-tabs a[href="#productSection"]').tab('show');
                }
            });
        }


        /**
         * 
         * Transform straigt text into curved text and reverse
         * 
         * @return void
        */

        $('#effect,#straight, #curved').on('click', function(e) 
        {
            if (this.id == "curved")
            {
                effect.checked = true;
            }
            else if (this.id == "straight")
            {
                effect.checked = false;
            }
            else if (this.id == "effect")
            {
                effect.checked = document.getElementById("effect").checked;
            }
            var obj = canvasActive.getActiveObject();
            if (obj)
            {
                default_text = obj.getText();
                props = obj.toObject();
                var texteffecsarea = document.getElementById("texteffecsarea");
                if (effect.checked)
                {
                    $('#straight').removeClass("label-info");
                    $('#straight').addClass("label-default");
                    $('#curved').removeClass("label-default");
                    $('#curved').addClass("label-info");
                    texteffecsarea.style.display = "block";
                    delete props['type'];
                    props['textAlign'] = 'center';
                    props['reverse'] = false;
                    $('#spacing').val(5);
                    $('#spacingvalue').val(5);
                    $('#radius').val(90);
                    $('#radiusvalue').val(90);
                    props['type'] = 'curvedText';
                    props['id'] = obj.id;
                    var textSample = new fabric.CurvedText(default_text, props);
                    textSample.setControlsVisibility({
                        ml: false,
                        mr: false,
                        mb: false,
                        mt: false,
                        mtr: false,
                        bl: true,
                        tr: true,
                        tl: true,
                        br: true,
                    });

                    textSample.customiseCornerIcons({
                        settings: {
                            borderColor: '#4fc1f0',
                            cornerSize: 40,
                            cornerShape: 'circle',
                            cornerBackgroundColor: 'rgba(100,100,100,0)',
                            cornerPadding: 15,
                            hasRotatingPoint: true,
                        },
                        tr: {
                            icon: window.location.origin + '/img/icon/x.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        bl: {
                            icon: window.location.origin + '/img/icon/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        br: {
                            icon: window.location.origin + '/img/icon/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        ml: {
                            icon: window.location.origin + '/img/icon/left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        mr: {
                            icon: window.location.origin + '/img/icon/right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        mb: {
                            icon: window.location.origin + '/img/icon/down.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        mt: {
                            icon: window.location.origin + '/img/icon/up.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        tl: {
                            icon: window.location.origin + '/img/icon/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                    });
                } 
                else
                {
                    $('#straight').removeClass("label-default");
                    $('#straight').addClass("label-info");
                    $('#curved').removeClass("label-info");
                    $('#curved').addClass("label-default");
                    texteffecsarea.style.display = "none";
                    delete props['type'];
                    props['type'] = 'text';
                    props['id'] = obj.id;
                    $('#spacing').val(10);
                    $('#spacingvalue').val(10);
                    $('#radius').val(0);
                    $('#radiusvalue').val(0);

                    var textSample = new fabric.Text(default_text, props);
                    textSample.setControlsVisibility({
                        ml: false,
                        mr: false,
                        mb: false,
                        mt: false,
                        mtr: false,
                        bl: true,
                        tr: true,
                        tl: true,
                        br: true,
                    });

                    textSample.customiseCornerIcons({
                        settings: {
                            borderColor: '#4fc1f0',
                            cornerSize: 40,
                            cornerShape: 'circle',
                            cornerBackgroundColor: 'rgba(100,100,100,0)',
                            cornerPadding: 15,
                            hasRotatingPoint: true,
                        },
                        tr: {
                            icon: window.location.origin + '/img/icon/x.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        bl: {
                            icon: window.location.origin + '/img/icon/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        br: {
                            icon: window.location.origin + '/img/icon/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        ml: {
                            icon: window.location.origin + '/img/icon/left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        mr: {
                            icon: window.location.origin + '/img/icon/right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        mb: {
                            icon: window.location.origin + '/img/icon/down.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        mt: {
                            icon: window.location.origin + '/img/icon/up.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        tl: {
                            icon: window.location.origin + '/img/icon/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                    });
                }
                save();
                canvasActive.remove(obj);
                canvasActive.add(textSample);
                canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                canvasActive.renderAll();
            }
        });


        /**
         * Unselect all objects inside all print areas
         * 
         * @return void
         */

        function deselectAllCanvases() 
        {   
            canvaslist.forEach(printarea => 
            {
                if(printarea.getObjects().length > 0)
                {  
                    printarea.discardActiveObject();
                    printarea.renderAll();
                }
            });
            
        }

        /**
         * 
         * Change clipart color
         * 
         * @return void
        */

        function changecolor(newColor)
        {
            colorChanged = true;
            colorArt = newColor;
            $(".list-group-item").removeClass("active");
            $(this).addClass("active");
            var object = canvasActive.getActiveObject();
            if (object.type == "image")
            {
                if (newColor == 'No Color')
                {
                    object.filters = [];
                }
                /*else if (newColor == 'transparent')
                {
                    var filter = new fabric.Image.filters.RemoveWhite({
                        threshold: 60,
                        distance: 150,
                    });
                    object.filters.push(filter);
                }*/
                /* else  if (newColor == 'Add White')
                {
                    for (var i = 0; i < object.filters.length; i++) 
                    {
                        if(object.filters[i].distance != null)
                        {
                            object.filters.splice(i,1);
                        }
                    }
                    object.filters = [];
                } */
                else
                {
                    var filter = new fabric.Image.filters.Tint({
                        color: newColor,
                        opacity: 1.0
                    });
                    object.filters.push(filter);
                    object.colorlist[0].hex = newColor;
                    object.set({
                        colorName: Artcolor.innerHTML,
                        colorCode: newColor
                    });
                }
                document.getElementById("color_" + object.id).style.backgroundColor = newColor;
                if (newColor == "transparent") 
                {
                    $("#color" + object.id).addClass("transparent2");
                }
                else 
                {
                    $("#color" + object.id).removeClass("transparent2");
                }
                
                object.applyFilters(canvasActive.renderAll.bind(canvasActive));
            }
            else
            {
                var objectslist = object._objects;
                if (objectslist.length == 1) 
                {
                    if (objectslist[0].id.indexOf("fill_")!= -1)
                    {
                        objectslist[0].setFill(newColor);    
                    }
                    else if(objectslist[0].id.indexOf("stroke_")!= -1)
                    {
                        objectslist[0].setStroke(newColor);
                    }
                    else
                    {
                        objectslist[0].setFill(newColor);  
                        objectslist[0].setStroke(newColor);
                    }
                    canvasActive.renderAll();
                    document.getElementById("color_" + objectslist[0].id.split(".")[0]).style.backgroundColor = newColor;
                    if (newColor == "transparent") 
                    {
                        $("#color_" + objectslist[0].id.split(".")[0]).addClass("transparent2");
                    }
                    else 
                    {
                        $("#color_" + objectslist[0].id.split(".")[0]).removeClass("transparent2");
                    }
                } 
                else 
                {
                    if(idcolorselected != undefined)
                    {
                        for (var i = 0; i < objectslist.length; i++)
                        {
                            if (("color_" + objectslist[i].id.split(".")[0]) == idcolorselected)
                            {
                                objectslist[i].setFill(newColor);
                                objectslist[i].setStroke(newColor);
                                canvasActive.renderAll();
                                document.getElementById("color_" + objectslist[i].id.split(".")[0]).style.backgroundColor = newColor;
                                if (newColor == "transparent") 
                                {
                                    $("#color_" + objectslist[i].id.split(".")[0]).addClass("transparent2");
                                }
                                else 
                                {
                                    $("#color_" + objectslist[i].id.split(".")[0]).removeClass("transparent2");
                                }
                            }
                        }
                    }
                    else
                    {
                        if (objectslist.length == 1)
                        {
                            objectslist[0].setFill(newColor);
                            objectslist[0].setStroke(newColor);
                            canvasActive.renderAll();
                            document.getElementById("color_" + objectslist[0].id.split(".")[0]).style.backgroundColor = newColor;
                            if (newColor == "transparent") 
                            {
                                $("#color_" + objectslist[0].id.split(".")[0]).addClass("transparent2");
                            }
                            else 
                            {
                                $("#color_" + objectslist[0].id.split(".")[0]).removeClass("transparent2");
                            }
                        }
                        else
                        {
                            showalert('selectcoloralert', 'Please select a color to edit!', 'danger', 'Select Color');
                        }
                        
                    }
                    
                }
                save();
            }
            var currentcolor = newColor;
            if (currentcolor == "rgb(0,0,0)")
            {
                currentcolor = "#000000";
            }
            if (document.getElementById("artcolor" + currentcolor.replace("#", "").toLowerCase()) != null)
            {
                document.getElementById("artcolor" + currentcolor.replace("#", "").toLowerCase()).style.border = "2px solid #31B0D5";
            }
        }


        /**
         * Show normal alerts
         * 
         * @return void
        */

        function showalertnormal(id) 
        {
            $('#'+id).fadeIn(1000);
            setTimeout(function() 
            { 
                $('#'+id).fadeOut(1000); 
            }, 2000);
        }

        /**
         * Show closable alerts
         * 
         * @return void
        */
        function showalertclosable(id) 
        {
            $('#'+id).fadeIn(1000);   
        }

        /**
         * Show alerts
         * 
         * @return void
        */
        function showalert(id, message, type, title)
        {
            var modalfade = document.createElement('div');
            modalfade.id = id;
            modalfade.className = 'modal fade';
            modalfade.setAttribute("role", "dialog");
            var modaldialog = document.createElement('div');
            modaldialog.className = 'modal-dialog';
            modaldialog.style.position = 'fixed';
            modaldialog.style.top = "40%";
            modaldialog.style.left = "0";
            modaldialog.style.right = "0";
            modaldialog.style.bottom = "0";
            modalfade.appendChild(modaldialog);
            var modalheader = document.createElement('div');
            modalheader.className = 'modal-header modal-header-' + type;
            modaldialog.appendChild(modalheader);
            var buttonclose = document.createElement("button");
            buttonclose.className = 'close';
            buttonclose.setAttribute("data-dismiss", "modal");
            buttonclose.setAttribute("aria-hidden", "true");
            buttonclose.setAttribute("value", "Close");
            buttonclose.innerHTML = '&times';
            modalheader.appendChild(buttonclose);
            var modaltitle = document.createElement('h4');
            modaltitle.className = 'modal-title';
            modalheader.appendChild(modaltitle);
            var strong = document.createElement('strong');
            strong.innerHTML = title;
            modaltitle.appendChild(strong);
            var alert = document.createElement('div');
            alert.className = 'alert alert-' + type;
            alert.innerHTML = message;
            modaldialog.appendChild(alert);
            document.getElementsByTagName('body')[0].appendChild(modalfade);
            $('#' + id).modal();
        }



        /**
         * Change and load new product from the product list modal 
         *
         * @return void
         */
        function changeproduct(id)
        {
            savetmpdesign();
            
            $.ajax({
                type:'GET',
                dataType: 'json', 
                data: {id: id},
                url: window.location.origin + '/productinfoembroidery/'+ id,
                success:function(data)
                {   
                    product = data.product;
                    //front = new fabric.Canvas(product.printareas[0].slug+'Canvas');
                    //back = new fabric.Canvas(product.printareas[2].slug+'Canvas'); 
                    
                    currentdesign.product = product;
                    enableproductsizes();
                    cleanInputQuantity();
                    if(product.printareas.length != canvaslist.length)
                    {
                        $("#changeproductconfirmation-modal").modal('show');
                    }
                    else
                    {
                        loadchangeproduct();
                        if(canvasdesignlist.length > 0)
                        {
                            loadtmpdesigns();                            
                        }
                    }
                },
                complete: function()
                {
                    initCenteringGuidelines(canvasActive);      
                }
            });
        }

        function loadchangeproduct()
        {
            document.getElementById("product_name").innerHTML = product.parent.name;            
            document.getElementById("current_product_color").innerHTML = product.color.name;
            document.getElementById("sizechartimage").innerHTML= '<img src="'+window.location.origin+'/img/product/'+product.parent.sizechartimage+'" class="img-responsive">';
            document.getElementById("sizechartdescription").innerHTML= product.parent.sizechartdescription;
            document.getElementById("sizechartable").innerHTML = "";
            product.parent.sizeschart.forEach(sizeschart => 
            {
                document.getElementById("sizechartable").innerHTML += "<tr><td>"+sizeschart.size+"</td> <td>"+sizeschart.width+"</td> <td>"+sizeschart.length+"</td></tr>";
            });
            var description_label = '<p><strong>Brand:</strong> ' + product.brand + ' </p>';
            description_label += '<p><strong>Size:</strong> ' + product.parent.sizes[0].name  + '-' + product.parent.sizes[product.parent.sizes.length -1].name + '  <a href="javascript:void(0)" data-toggle="modal" data-target="#sizechartmodal"> size chart</a></p>';
            description_label += '<p><strong>Fabric:</strong> ' + product.fabric + '</p>';
            description_label += '<p><a href="#productlongdescription" data-toggle="collapse" id="more-details" class="collapsestart" onclick="moreless(this);"> More Details </a></p>';
            document.getElementById("description_label").innerHTML = description_label;
            var sidesinfo = ""; 
            var innersinfo = ""; 
            var countsides = 0;
            var countinners = 0;
            canvaslist = [];
            if(product.sides.length > 0)
            {   
                document.getElementById("carousel-sides").innerHTML = "";
                document.getElementById("carousel-inner").innerHTML = "";
                product.sides.forEach(side => {
                    if(side.pivot.enable == 1  &&  side.printareas.length > 0)
                    {  
                        if(countsides == 0)
                        {
                            sidesinfo += ' <li class="active"  data-target="#myCarousel" data-slide-to="'+ countsides +'"><img id="frontActiveImage" class="img-responsive" src="' + window.location.origin + '/img/product/' + side.pivot.image +  '" onclick="setcanvas(' + (countsides+1) + ');"></li>';
                            innersinfo += '<div id="'+side.slug+'" class="item active">';
                                innersinfo += '<div id="'+side.slug+'CanvasShirt" class="canvasShirt" style="border: 0px solid rgb(238, 238, 238); width: 743px; height: 810px; min-height: 728px; background-image: url(' + window.location.origin + '/img/product/' + side.pivot.image +  ');">';
                                product.printareas.forEach(printarea => {
                                    if(printarea.side == side.slug)
                                    {  
                                        innersinfo += '<div id="'+printarea.slug+'canvas-wrapper" style="width: '+printarea.width+'px; height: '+printarea.height+'px; border: 0px solid rgb(50, 167, 224); position: absolute; top: '+printarea.top+'px; left: '+printarea.left+'px;">';
                                            innersinfo += '<canvas id="'+printarea.slug+'Canvas" style="border: 0px solid rgb(0, 0, 0); touch-action: none; width: '+printarea.width+'px; height: '+printarea.height+'px;top: 0px; left:0px;"></canvas> ';
                                            innersinfo += '<div id="'+printarea.slug+'desingerror" class="tooltip-outline error-tooltip" style="left: 82px; display: none;">';
                                                innersinfo += '<div class="clearfix">';
                                                    innersinfo += '<small style="color: red;">Your Art/Work exceeds the print area</small>';
                                                innersinfo += '</div>';
                                            innersinfo += '</div>';
                                        innersinfo += '</div>';
                                    }
                                });
                                innersinfo += '</div> ';
                                innersinfo += '<div class="carousel-caption">';
                                    innersinfo += '<p>'+side.name+'</p>';
                                innersinfo += '</div>';
                            innersinfo += '</div>';
                        }
                        else
                        {    
                            sidesinfo += ' <li   data-target="#myCarousel" data-slide-to="'+ countsides +'"><img id="frontActiveImage" class="img-responsive" src="' + window.location.origin + '/img/product/' + side.pivot.image +  '" onclick="setcanvas(' + (countsides+1) + ');"></li>';
                            innersinfo += '<div id="'+side.slug+'" class="item">';
                                innersinfo += '<div id="'+side.slug+'CanvasShirt" class="canvasShirt" style="border: 0px solid rgb(238, 238, 238); width: 743px; height: 810px; min-height: 728px; background-image: url(' + window.location.origin + '/img/product/' + side.pivot.image +  ');">';
                                    product.printareas.forEach(printarea => {
                                        if(printarea.side == side.slug)
                                        {  
                                            innersinfo += '<div id="'+printarea.slug+'canvas-wrapper" style="width: '+printarea.width+'px; height: '+printarea.height+'px; border: 0px solid rgb(50, 167, 224); position: absolute; top: '+printarea.top+'px; left: '+printarea.left+'px;">';
                                                innersinfo += '<canvas id="'+printarea.slug+'Canvas" style="border: 0px solid rgb(0, 0, 0); touch-action: none; width: '+printarea.width+'px; height: '+printarea.height+'px;top: 0px; left:0px;"></canvas> ';
                                                innersinfo += '<div id="'+printarea.slug+'desingerror" class="tooltip-outline error-tooltip" style="left: 82px; display: none;">';
                                                    innersinfo += '<div class="clearfix">';
                                                        innersinfo += '<small style="color: red;">Your Art/Work exceeds the print area</small>';
                                                    innersinfo += '</div>';
                                                innersinfo += '</div>';
                                            innersinfo += '</div>';
                                        }
                                    });
                                innersinfo += '</div> ';
                                innersinfo += '<div class="carousel-caption">';
                                    innersinfo += '<p>'+side.name+'</p>';
                                innersinfo += '</div>';
                            innersinfo += '</div>';
                            
                        }
                        countsides ++;
                    }
                });
                document.getElementById("carousel-sides").innerHTML = sidesinfo;                       
                document.getElementById("carousel-inner").innerHTML = innersinfo;
            }                   
            var colorminimum = "";
            var colorminimum6 = "";
            
            if(product.parent.colors.length > 0)
            {   
                document.getElementById("child_product_color_div").innerHTML = "";
                document.getElementById("child_product_color_div6").innerHTML = "";
                product.parent.colors.forEach(color => {
                    var animate = '';
                    if(color.pivot.childproduct_id == product.id)
                    animate = "animate";
                    if(color.hex != null)
                        colorminimum += '<div id="child_color_minimum_' + color.id + '" title="White" onclick="setcanvasproperties(' + color.pivot.childproduct_id + '); setactivecolor(this);" class="block ' + animate + '" style="border-radius: 50%; background-color: ' + color.hex + '; width: 30px; height: 30px; border: 0px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px;"></div>';
                    else
                        colorminimum += '<img onclick="setcanvasproperties(' + color.pivot.childproduct_id + '); setactivecolor(this);" src="' + window.location.origin + '/img/color/' + color.file + '" id="child_color_minimum_' + color.id + '" class="block ' + animate + '" style="width: 30px; position: relative; height: 30px; border: 0px solid rgb(238, 238, 238); border-radius: 50%; cursor: pointer;">';
                });
                document.getElementById("child_product_color_div").innerHTML = colorminimum;
                document.getElementById("child_product_color_div6").innerHTML = colorminimum6;
            }

            product.printareas.forEach(printarea => {
                var canvasside = new fabric.Canvas(printarea.slug+'Canvas');
                    canvasside.side = printarea.side;
                    canvasside.name = printarea.slug;
                    canvasside.left = printarea.left;
                    canvasside.top = printarea.top;
                    product.sides.forEach(side=>{
                        if(side.slug == printarea.side)
                        {
                            canvasside.productimg = side.pivot.image;
                        }
                    });
                    canvasside.setWidth(printarea.width);
                    canvasside.setHeight(printarea.height);
                    initCenteringGuidelines(canvasActive);     
                    canvasside.undo = [];
                    canvasside.redo = [];
                    canvasside.state = null; 
                canvaslist.push(canvasside);
                canvasside.on('mouse:up', function(e)
                {
                    canvasActive=this;
                    displayinfo(e);
                    showcorners(e);
                });
                canvasside.on('mouse:down', function(e)
                {
                    showcorners(e);
                });
                canvasside.on('object:added', function(e)
                {
                    //displayinfo(e);
                });
                canvasside.on('object:moving',function(e)
                {
                    hidecorners(e);
                });
            });
            canvasActive = canvaslist[0];
            $('.nav-tabs a[href="#productSection"]').tab('show');
        }

        $("#modal-btn-yes").on("click", function() 
        {
            loadchangeproduct();
            canvasdesignlist = [];
            canvaslist.forEach(canvas => {
                canvas.clear();
            });
            $("#changeproductconfirmation-modal").modal('hide');
        });

        $("#modal-btn-no").on("click", function() 
        {
            $("#changeproductconfirmation-modal").modal('hide');
        });


        /**
        * Put the border circle blue an the check icon in the selected color
        *
        * @return void
        */
        function setactivecolor(element)
        {
            var circlescolors = document.getElementsByClassName("block");
            var i;
            for (i = 0; i < circlescolors.length; i++) 
            {
                if(circlescolors[i] == element)
                    element.className = "block animate";
                else
                    circlescolors[i].className = "block";
            }
        }

        /*var deleteIcon =  window.location.origin + '/img/icon/x.png?v=' + Math.floor((Math.random() * 10000) + 1);
        var deleteImg = document.createElement('img');
        deleteImg.src = deleteIcon;
        fabric.Object.prototype.transparentCorners = false;
        fabric.Object.prototype.cornerColor = 'rgba(100,100,100,0)';
        fabric.Object.prototype.cornerStyle = 'circle';
        function renderIcon(icon) {
            return function renderIcon(ctx, left, top, styleOverride, fabricObject) {
            var size = this.cornerSize;
            ctx.save();
            ctx.translate(left, top);
            ctx.rotate(fabric.util.degreesToRadians(fabricObject.angle));
            ctx.drawImage(icon, -size/2, -size/2, size, size);
            ctx.restore();
            }
        }

        fabric.Object.prototype.controls.deleteControl = new fabric.Control({
            position: { x: 0.5, y: -0.5 },
            offsetY: -16,
            offsetX: 16,
            cursorStyle: 'pointer',
            mouseUpHandler: deleteObject,
            render: renderIcon(deleteImg),
            cornerSize: 24
        });

        function deleteObject(eventData, target) {
            var canvas = target.canvas;
                canvas.remove(target);
            canvas.requestRenderAll();
        }*/

        /**
        *Add Image to a print area
        *
        * @return void
        */
        function addimg(clipart_id)
        { 
            $.ajax({
                type:'GET',
                dataType: 'json', 
                data: {clipart_id: clipart_id},
                url: window.location.origin + '/api/clipartembroiderybyid/'+ clipart_id,
                success:function(data)
                {  
                    var clipart = data.clipart;
                    
                    var editable = '';  
                    if(clipart.editable)
                    {
                        editable = '-editable';
                    }

                    if(clipart.type == 'png')
                    {                        
                        var imgSrc = window.location.origin + '/img/clipart-embroidery/'+ clipart.categoryembroidery + '/' + clipart.subcategoryembroidery + '/' + clipart.filename;
                        var leftvalue = 0;
                        var topvalue = 0;
                        fabric.Image.fromURL(imgSrc, function(img) 
                        {
                        leftvalue = canvasActive.width / 2;
                        topvalue = canvasActive.height / 2;

                            img.set({
                                id: 'clipart-' + objId +  editable,
                                left: leftvalue,
                                top: topvalue,
                                scaleX: 1,
                                scaleY: 1,
                                originX: 'center',
                                originY: 'center',
                                hasRotatingPoint: true,
                                snapAngle: 45,
                                snapThreshold: 45,
                                centeredRotation: true,
                                lockUniScaling: true,
                                padding: 0,
                                colorName: 'Black',
                                clipart: clipart,
                                editable: clipart.editable,
                                numbercolors: clipart.numbercolors,
                                colorlist: clipart.colors
                            }).scaleToWidth(100);

                            var BoundingRect = { left: 0,top: 0,width: 0,height: 0 };
                            
                            img.setOptions({
                                BoundingRect: BoundingRect
                            });
                            img.setControlsVisibility({
                                ml: false,
                                mr: false,
                                mb: false,
                                mt: false,
                                mtr: false,
                                bl: true,
                                tr: true,
                                tl: true,
                                br: true,
                            });

                            img.customiseCornerIcons({
                                settings: {
                                    borderColor: '#4fc1f0',
                                    cornerSize: 40,
                                    cornerShape: 'circle',
                                    cornerBackgroundColor: 'rgba(100,100,100,0)',
                                    cornerPadding: 15,
                                    hasRotatingPoint: true,
                                },
                                tr: {
                                    icon: window.location.origin + '/img/icon/x.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                bl: {
                                    icon: window.location.origin + '/img/icon/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                br: {
                                    icon: window.location.origin + '/img/icon/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                ml: {
                                    icon: window.location.origin + '/img/icon/left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                mr: {
                                    icon: window.location.origin + '/img/icon/right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                mb: {
                                    icon: window.location.origin + '/img/icon/down.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                mt: {
                                    icon: window.location.origin + '/img/icon/up.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                tl: {
                                    icon: window.location.origin + '/img/icon/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                            }, 
                            function() {
                                canvasActive.renderAll();
                            });
                            canvasActive.add(img);
                            canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                        });
                    }
                    else
                    {
                        var lines = data.info.split('\n');
                        if(lines.length > 1)
                        {
                            var leftvalue = 0;
                            var topvalue = 0;
                            leftvalue = canvasActive.width / 2;
                            topvalue = canvasActive.height / 2;
                            lines.splice(0, 1);
                            lines.splice(lines.length - 1, 1);
                            info = lines.join('\n');
                            fabric.loadSVGFromString(info, function(objects, options)
                            {
                                var obj = fabric.util.groupSVGElements(objects, options).paths;
                                var elements = [];
                                obj.forEach(function(svg) 
                                {
                                    svg.set({
                                        id: svg.id + "." + objId,
                                    });
                                    elements.push(svg);
                                    objId++;
                                });

                                var img = new fabric.Group(elements, {
                                    id: 'clipart-' + objId +  editable,
                                    left: leftvalue,
                                    top: topvalue,
                                    scaleX: 1,
                                    scaleY: 1,
                                    originX: 'center',
                                    originY: 'center',
                                    hasRotatingPoint: true,
                                    snapAngle: 45,
                                    snapThreshold: 45,
                                    centeredRotation: true,
                                    lockUniScaling: true,
                                    padding: 0,
                                    colorName: 'Black',
                                    clipart: clipart,
                                    editable: clipart.editable
                                }).scaleToWidth(100);

                                img.setControlsVisibility({
                                    ml: false,
                                    mr: false,
                                    mb: false,
                                    mt: false,
                                    mtr: false,
                                    bl: true,
                                    tr: true,
                                    tl: true,
                                    br: true,
                                    });

                                    img.customiseCornerIcons({
                                        settings: {
                                            borderColor: '#4fc1f0',
                                            cornerSize: 40,
                                            cornerShape: 'circle',
                                            cornerBackgroundColor: 'rgba(100,100,100,0)',
                                            cornerPadding: 15,
                                            hasRotatingPoint: true,
                                        },
                                        tr: {
                                            icon: window.location.origin + '/img/icon/x.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                        },
                                        bl: {
                                            icon: window.location.origin + '/img/icon/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                        },
                                        br: {
                                            icon: window.location.origin + '/img/icon/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                        },
                                        ml: {
                                            icon: window.location.origin + '/img/icon/left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                        },
                                        mr: {
                                            icon: window.location.origin + '/img/icon/right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                        },
                                        mb: {
                                            icon: window.location.origin + '/img/icon/down.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                        },
                                        mt: {
                                            icon: window.location.origin + '/img/icon/up.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                        },
                                        tl: {
                                            icon: window.location.origin + '/img/icon/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                        },
                                    }, function()
                                    {
                                        canvasActive.renderAll();
                                    });
                                canvasActive.add(img);
                                canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                            });
                        }
                    }
                    clipArtAdded = true;
                    save();
                }
            });
        }

        /**
        *Add Image to a print area
        *
        * @return void
        */
        function addtemplate(template_id)
        { 
            $.ajax({
                type:'GET',
                dataType: 'json', 
                data: {template_id: template_id},
                url: window.location.origin + '/api/templateembroiderybyid/'+ template_id,
                success:function(data)
                {  
                    var template = data.template;
                    
                    var editable = '';  
                    if(template.editable)
                    {
                        editable = '-editable';
                    }

                    if(template.type == 'png')
                    {                        
                        var imgSrc = window.location.origin + '/img/template-embroidery/'+ template.categoryembroidery + '/' + template.subcategoryembroidery + '/' + template.filename;
                        var leftvalue = 0;
                        var topvalue = 0;
                        fabric.Image.fromURL(imgSrc, function(img) 
                        {
                        leftvalue = canvasActive.width / 2;
                        topvalue = canvasActive.height / 2;

                            img.set({
                                id: 'clipart-' + objId +  editable,
                                left: leftvalue,
                                top: topvalue,
                                scaleX: 1,
                                scaleY: 1,
                                originX: 'center',
                                originY: 'center',
                                hasRotatingPoint: true,
                                snapAngle: 45,
                                snapThreshold: 45,
                                centeredRotation: true,
                                lockUniScaling: true,
                                padding: 0,
                                colorName: 'Black',
                                clipart: template,
                                editable: template.editable,
                                numbercolors: template.numbercolors,
                                colorlist: template.colors
                            }).scaleToWidth(100);

                            var BoundingRect = { left: 0,top: 0,width: 0,height: 0 };
                            
                            img.setOptions({
                                BoundingRect: BoundingRect
                            });
                            img.setControlsVisibility({
                                ml: false,
                                mr: false,
                                mb: false,
                                mt: false,
                                mtr: false,
                                bl: true,
                                tr: true,
                                tl: true,
                                br: true,
                            });

                            img.customiseCornerIcons({
                                settings: {
                                    borderColor: '#4fc1f0',
                                    cornerSize: 40,
                                    cornerShape: 'circle',
                                    cornerBackgroundColor: 'rgba(100,100,100,0)',
                                    cornerPadding: 15,
                                    hasRotatingPoint: true,
                                },
                                tr: {
                                    icon: window.location.origin + '/img/icon/x.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                bl: {
                                    icon: window.location.origin + '/img/icon/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                br: {
                                    icon: window.location.origin + '/img/icon/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                ml: {
                                    icon: window.location.origin + '/img/icon/left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                mr: {
                                    icon: window.location.origin + '/img/icon/right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                mb: {
                                    icon: window.location.origin + '/img/icon/down.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                mt: {
                                    icon: window.location.origin + '/img/icon/up.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                tl: {
                                    icon: window.location.origin + '/img/icon/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                            }, 
                            function() {
                                canvasActive.renderAll();
                            });
                            canvasActive.add(img);
                            canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                        });
                    }
                    else
                    {
                        var lines = data.info.split('\n');
                        if(lines.length > 1)
                        {
                            var leftvalue = 0;
                            var topvalue = 0;
                            leftvalue = canvasActive.width / 2;
                            topvalue = canvasActive.height / 2;
                            lines.splice(0, 1);
                            lines.splice(lines.length - 1, 1);
                            info = lines.join('\n');
                            fabric.loadSVGFromString(info, function(objects, options)
                            {
                                var obj = fabric.util.groupSVGElements(objects, options).paths;
                                var elements = [];
                                obj.forEach(function(svg) 
                                {
                                    svg.set({
                                        id: svg.id + "." + objId,
                                    });
                                    elements.push(svg);
                                    objId++;
                                });

                                var img = new fabric.Group(elements, {
                                    id: 'clipart-' + objId +  editable,
                                    left: leftvalue,
                                    top: topvalue,
                                    scaleX: 1,
                                    scaleY: 1,
                                    originX: 'center',
                                    originY: 'center',
                                    hasRotatingPoint: true,
                                    snapAngle: 45,
                                    snapThreshold: 45,
                                    centeredRotation: true,
                                    lockUniScaling: true,
                                    padding: 0,
                                    colorName: 'Black',
                                    clipart: template,
                                    editable: template.editable
                                }).scaleToWidth(100);

                                img.setControlsVisibility({
                                    ml: false,
                                    mr: false,
                                    mb: false,
                                    mt: false,
                                    mtr: false,
                                    bl: true,
                                    tr: true,
                                    tl: true,
                                    br: true,
                                    });

                                    img.customiseCornerIcons({
                                        settings: {
                                            borderColor: '#4fc1f0',
                                            cornerSize: 40,
                                            cornerShape: 'circle',
                                            cornerBackgroundColor: 'rgba(100,100,100,0)',
                                            cornerPadding: 15,
                                            hasRotatingPoint: true,
                                        },
                                        tr: {
                                            icon: window.location.origin + '/img/icon/x.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                        },
                                        bl: {
                                            icon: window.location.origin + '/img/icon/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                        },
                                        br: {
                                            icon: window.location.origin + '/img/icon/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                        },
                                        ml: {
                                            icon: window.location.origin + '/img/icon/left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                        },
                                        mr: {
                                            icon: window.location.origin + '/img/icon/right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                        },
                                        mb: {
                                            icon: window.location.origin + '/img/icon/down.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                        },
                                        mt: {
                                            icon: window.location.origin + '/img/icon/up.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                        },
                                        tl: {
                                            icon: window.location.origin + '/img/icon/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                        },
                                    }, function()
                                    {
                                        canvasActive.renderAll();
                                    });
                                canvasActive.add(img);
                                canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                            });
                        }
                    }
                    clipArtAdded = true;
                    save();
                }
            });
        }

        
        /**
         * 
         * Change color of the text
         * 
         * @return void
        */

        function changecolorText(newColor, type)
        {
            colorChanged = true;
            $(".list-group-item").removeClass("active");
            $(this).addClass("active");
            var object = canvasActive.getActiveObject();
            if (type == "c")
            {
                var strokevalue = null;
                strokeColor = newColor;
                object.setStroke(strokeColor);
                if (object.strokeWidth == 0) 
                {
                    strokevalue = 2;
                } 
                else
                {
                    strokevalue = object.strokeWidth;
                }
                document.getElementById("strokewidthvalue").value = strokevalue;
                document.getElementById("strokewidth").value = strokevalue;
                object.set({
                    strokecolorName: Textstrokecolor.innerHTML,
                    laststrokecolor: newColor,
                    strokeWidth: strokevalue,
                });
            } 
            else
            {
                colorText = newColor;
                object.setFill(colorText);
                if (object.stroke == null || object.fill == object.stroke)
                {
                    //object.setStroke(newColor);
                    //object.setStrokeWidth(0); 
                }
                object.set({
                    colorName: Textcolor.innerHTML,
                    //strokecolorName: Textstrokecolor.innerHTML, 
                    laststrokecolor: newColor,
                    //strokeWidth: 0
                });
            }
            canvasActive.renderAll(canvasActive);
            save();
            var currentcolor = newColor;
            if (currentcolor == "rgb(0,0,0)")
            {
                currentcolor = "#000000";
            }
            if (type !== "c")
            {
                if (document.getElementById("textcolor" + currentcolor.replace("#", "").toLowerCase()) != null)
                    document.getElementById("textcolor" + currentcolor.replace("#", "").toLowerCase()).style.border = "2px solid #31B0D5";
            } 
            else
            {
                if (document.getElementById("strokecolor" + currentcolor.replace("#", "").toLowerCase()) != null)
                    document.getElementById("strokecolor" + currentcolor.replace("#", "").toLowerCase()).style.border = "2px solid #31B0D5";
            }
        }

        /**
         * 
         * Show and hide the available stroke colors
        */

        function strokecolorlist()
        {
            var Outlinediv = document.getElementById('Outlinediv');
            if (Outlinediv.style.display == 'none')
            {
                Outlinediv.style.display = "block";
            } 
            else
            {
                Outlinediv.style.display = "none";
            }
        }


        /**
         * 
         * Validate only number in the inputs sizes
         * 
         * return boolean
        */

        function validate(evt) 
        {
            var theEvent = evt || window.event;
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode(key);
            var regex = /[0-9]|\./;
            if (!regex.test(key)) 
            {
                theEvent.returnValue = false;
                if (theEvent.preventDefault) theEvent.preventDefault();
            }
        }



        /**
         * 
         * Set font to specific text
         * 
         * @return void
        */

        function setFont(element)
        {
            colorChanged = true;
            $(".list-group-item").removeClass("active");
            $(this).addClass("active");
            var object = canvasActive.getActiveObject();
            font = element.id;
            object.set({
                fontFamily: font
            });
            canvasActive.renderAll(canvasActive);
            setTitleFont(element);
            save();
        }

        /**
         * Display the name of the font selected
         * 
         * @return void
        */

        function setTitleFont(element)
        {
            var font_preview = document.getElementById('font_preview');
            if (element != null)
            {
                font_preview.innerHTML = element.childNodes[0].childNodes[2].innerHTML;
                //font_preview.style.fontFamily = font;
            } 
            else
            {
                font_preview.innerHTML = "ABeeZee-Regular";
                font_preview.style.fontFamily = 'ABeeZee-Regular';
            }
        }

        /**
        *Add Image to a print area
        *
        * @return void
        */
        function adduploadimg(clipart_id)
        { 
            $.ajax({
                type:'GET',
                dataType: 'json', 
                data: {clipart_id: clipart_id},
                url: window.location.origin + '/api/clipartembroideryuploaded/'+ clipart_id,
                success:function(data)
                {  
                    var clipart = data.clipart;
                    if(clipart.type == 'png' || clipart.type == 'jpg' || clipart.type == 'jpeg' || clipart.type == 'bmp' || clipart.type == 'tif' || clipart.type == 'tiff')
                    {
                        var imgSrc = window.location.origin + '/img/clipart-embroidery/'+ clipart.categoryembroidery + '/' + clipart.subcategoryembroidery + '/' + clipart.filename;
                        var leftvalue = 0;
                        var topvalue = 0;
                        fabric.Image.fromURL(imgSrc, function(img) 
                        {
                            leftvalue = canvasActive.width / 2;
                            topvalue = canvasActive.height / 2;
                            img.set({
                                id: "uploaded-" + objId,
                                left: leftvalue,
                                top: topvalue,
                                scaleX: 1,
                                scaleY: 1,
                                originX: 'center',
                                originY: 'center',
                                hasRotatingPoint: true,
                                snapAngle: 45,
                                snapThreshold: 45,
                                colorlist: clipartuploadedcolorlist,
                                centeredRotation: true,
                                lockUniScaling: true,
                                padding: 0,
                                //colorName: 'Black',
                                clipart: clipart
                            }).scaleToWidth(100);

                            var BoundingRect = { left: 0,top: 0,width: 0,height: 0 };
                            
                            img.setOptions({
                                BoundingRect: BoundingRect
                            });
                            img.setControlsVisibility({
                                ml: false,
                                mr: false,
                                mb: false,
                                mt: false,
                                mtr: false,
                                bl: true,
                                tr: true,
                                tl: true,
                                br: true,
                            });
                            img.customiseCornerIcons({
                                settings: {
                                    borderColor: '#4fc1f0',
                                    cornerSize: 40,
                                    cornerShape: 'circle',
                                    cornerBackgroundColor: 'rgba(100,100,100,0)',
                                    cornerPadding: 15,
                                    hasRotatingPoint: true,
                                },
                                tr: {
                                    icon: window.location.origin + '/img/icon/x.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                bl: {
                                    icon: window.location.origin + '/img/icon/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                br: {
                                    icon: window.location.origin + '/img/icon/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                ml: {
                                    icon: window.location.origin + '/img/icon/left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                mr: {
                                    icon: window.location.origin + '/img/icon/right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                mb: {
                                    icon: window.location.origin + '/img/icon/down.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                mt: {
                                    icon: window.location.origin + '/img/icon/up.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                tl: {
                                    icon: window.location.origin + '/img/icon/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                            }, 
                            function() {
                                canvasActive.renderAll();
                            });
                            canvasActive.add(img);
                            canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                        });
                    }
                    else
                    {
                        var lines = data.info.split('\n');
                        if(lines.length > 1)
                        {
                            var leftvalue = 0;
                            var topvalue = 0;

                            leftvalue = canvasActive.width / 2;
                            topvalue = canvasActive.height / 2;

                            lines.splice(0, 1);
                            lines.splice(lines.length - 1, 1);
                            info = lines.join('\n');
                            fabric.loadSVGFromString(info, function(objects, options)
                            {
                                var obj = fabric.util.groupSVGElements(objects, options).paths;
                                var elements = [];
                                obj.forEach(function(svg) 
                                {
                                    svg.set({
                                        id: svg.id + "." + objId,
                                    });
                                    elements.push(svg);
                                    objId++;
                                });

                                var img = new fabric.Group(elements, {
                                    id: "uploaded-" + objId,
                                    left: leftvalue,
                                    top: topvalue,
                                    scaleX: 1,
                                    scaleY: 1,
                                    originX: 'center',
                                    originY: 'center',
                                    hasRotatingPoint: true,
                                    snapAngle: 45,
                                    snapThreshold: 45,
                                    centeredRotation: true,
                                    lockUniScaling: true,
                                    padding: 0,
                                    colorName: 'Black',
                                    clipart: clipart
                                }).scaleToWidth(100);

                                img.setControlsVisibility({
                                    ml: false,
                                    mr: false,
                                    mb: false,
                                    mt: false,
                                    mtr: false,
                                    bl: true,
                                    tr: true,
                                    tl: true,
                                    br: true,
                                });

                                    img.customiseCornerIcons({
                                        settings: {
                                            borderColor: '#4fc1f0',
                                            cornerSize: 40,
                                            cornerShape: 'circle',
                                            cornerBackgroundColor: 'rgba(100,100,100,0)',
                                            cornerPadding: 15,
                                            hasRotatingPoint: true,
                                        },
                                        tr: {
                                            icon: window.location.origin + '/img/icon/x.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                        },
                                        bl: {
                                            icon: window.location.origin + '/img/icon/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                        },
                                        br: {
                                            icon: window.location.origin + '/img/icon/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                        },
                                        ml: {
                                            icon: window.location.origin + '/img/icon/left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                        },
                                        mr: {
                                            icon: window.location.origin + '/img/icon/right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                        },
                                        mb: {
                                            icon: window.location.origin + '/img/icon/down.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                        },
                                        mt: {
                                            icon: window.location.origin + '/img/icon/up.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                        },
                                        tl: {
                                            icon: window.location.origin + '/img/icon/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                        },
                                    }, function()
                                    {
                                        canvasActive.renderAll();
                                    });
                                canvasActive.add(img);
                                canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                            });
                        }
                    }
                    clipArtAdded = true;
                    save();
                }
            });
        }

        /**
        * Add text to a print area.
        *
        * @return void
        */

        function addtext()
        {
            textAdded = true;
            default_text = document.getElementById("textarea").value;
            var obj = canvasActive.getActiveObject();
            if (default_text.length > 0)
            {
                if (obj!= undefined && (obj.type == 'curvedText' || obj.type == 'text'))
                {
                    props = obj.toObject();
                    if (obj.type == 'curvedText')
                    {
                        delete props['type'];
                        props['textAlign'] = 'center';
                        props['arcangle'] = obj.arcangle;
                        props['spacing'] = obj.spacing;
                        props['id'] = obj.id;
                        props['lockUniScaling'] = obj.lockUniScaling,
                        props['reverse'] = false;
                        props['type'] = 'curvedText';
                        var textSample = new fabric.CurvedText(default_text, props);
                            textSample.setControlsVisibility({
                                ml: false,
                                mr: false,
                                mb: false,
                                mt: false,
                                mtr: false,
                                bl: true,
                                tr: true,
                                tl: true,
                                br: true,
                            });

                            textSample.customiseCornerIcons({
                                settings: {
                                    borderColor: '#4fc1f0',
                                    cornerSize: 40,
                                    cornerShape: 'circle',
                                    cornerBackgroundColor: 'rgba(100,100,100,0)',
                                    cornerPadding: 15,
                                    hasRotatingPoint: true,
                                },
                            tr: {
                                icon: window.location.origin + '/img/icon/x.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            bl: {
                                icon: window.location.origin + '/img/icon/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            br: {
                                icon: window.location.origin + '/img/icon/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            ml: {
                                icon: window.location.origin + '/img/icon/left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            mr: {
                                icon: window.location.origin + '/img/icon/right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            mb: {
                                icon: window.location.origin + '/img/icon/down.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            mt: {
                                icon: window.location.origin + '/img/icon/up.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            tl: {
                                icon: window.location.origin + '/img/icon/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                        });
                        canvasActive.remove(obj);
                        canvasActive.add(textSample).renderAll();
                        canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                    } 
                    else
                    {
                        obj.setText(default_text);
                        var objtmp = obj;
                        canvasActive.remove(obj);
                        objtmp.setControlsVisibility({
                            ml: false,
                            mr: false,
                            mb: false,
                            mt: false,
                            mtr: false,
                            bl: true,
                            tr: true,
                            tl: true,
                            br: true,
                        });
                        objtmp.customiseCornerIcons({
                            settings: {
                                borderColor: '#4fc1f0',
                                cornerSize: 40,
                                cornerShape: 'circle',
                                cornerBackgroundColor: 'rgba(100,100,100,0)',
                                cornerPadding: 15,
                                hasRotatingPoint: true,
                            },
                            tr: {
                                icon: window.location.origin + '/img/icon/x.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            bl: {
                                icon: window.location.origin + '/img/icon/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            br: {
                                icon: window.location.origin + '/img/icon/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            ml: {
                                icon: window.location.origin + '/img/icon/left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            mr: {
                                icon: window.location.origin + '/img/icon/right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            mb: {
                                icon: window.location.origin + '/img/icon/down.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            mt: {
                                icon: window.location.origin + '/img/icon/up.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            tl: {
                                icon: window.location.origin + '/img/icon/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                        });
                        canvasActive.add(objtmp).renderAll();
                        canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                    }
                } 
                else
                {
                    var textSample = new fabric.Text(default_text, {
                        left: canvasActive.width / 2,
                        top: 50,
                        fontSize: 50,
                        strokeWidth: 0,
                        fontFamily: 'ABeeZee-Regular',
                        backgroundColor: 'transparent',
                        /*padding: 18,*/
                        //id: objId,
                        scaleX: 0.9,
                        charSpacing: 20,
                        snapAngle: 45,
                        snapThreshold: 45,
                        lockUniScaling : true,
                        centeredRotation: true,
                        originX: 'center',
                        originY: 'center',
                        scaleY: 0.9,
                        colorName: 'Black',
                        strokecolorName: 'Black',
                        fill: '#000000',
                        stroke: '',
                        type:'text'
                    });
                    textSample.setControlsVisibility({
                        ml: false,
                        mr: false,
                        mb: false,
                        mt: false,
                        mtr: false,
                        bl: true,
                        tr: true,
                        tl: true,
                        br: true,
                    });
                    textSample.customiseCornerIcons({
                        settings: {
                            borderColor: '#4fc1f0',
                            cornerSize: 40,
                            cornerShape: 'circle',
                            cornerBackgroundColor: 'rgba(100,100,100,0)',
                            cornerPadding: 15,
                            hasRotatingPoint: true,
                        },
                        tr: {
                            icon: window.location.origin + '/img/icon/x.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        bl: {
                            icon: window.location.origin + '/img/icon/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        br: {
                            icon: window.location.origin + '/img/icon/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        ml: {
                            icon: window.location.origin + '/img/icon/left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        mr: {
                            icon: window.location.origin + '/img/icon/right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        mb: {
                            icon: window.location.origin + '/img/icon/down.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        mt: {
                            icon: window.location.origin + '/img/icon/up.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        tl: {
                            icon: window.location.origin + '/img/icon/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                    }, 
                    function() {
                        canvasActive.renderAll();
                    });
                    canvasActive.add(textSample);
                    canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                    objId++;
                   save();
                }
            } 
            else
            {
                canvasActive.remove(obj);
            }
            canvasActive.renderAll();
            save();
        }

        /**
         * Activa and deactive scale propocional
         * 
         * @return void
         */

        function SetScaleProportional(typeobject) {
            var object = canvasActive.getActiveObject();
            if (typeobject == "image") 
            {
                if ($('#resizeicon').hasClass('fa fa-lock') || $('#resizeicon').hasClass('fa-lock fa')) {
                    $('#resizeicon').removeClass("fa fa-lock");
                    $('#resizeicon').addClass("fa fa-unlock");
                    object['setControlVisible']('ml', true);
                    object['setControlVisible']('mr', true);
                    object['setControlVisible']('mt', true);
                    object['setControlVisible']('mb', true);
                    object['setControlVisible']('br', false);
                    object['setControlVisible']('bl', false);
                    object['lockUniScaling'] = false;
                } else if ($('#resizeicon').hasClass('fa fa-unlock') || $('#resizeicon').hasClass('fa-unlock fa')) {
                    $('#resizeicon').removeClass("fa fa-unlock");
                    $('#resizeicon').addClass("fa fa-lock");
                    object['setControlVisible']('ml', false);
                    object['setControlVisible']('mr', false);
                    object['setControlVisible']('mt', false);
                    object['setControlVisible']('mb', false);
                    object['setControlVisible']('br', true);
                    object['setControlVisible']('bl', true);
                    object['lockUniScaling'] = true;
                }
            } else if (typeobject == "text") {
                if ($('#resizeicontext').hasClass('fa fa-lock') || $('#resizeicontext').hasClass('fa-lock fa')) {
                    $('#resizeicontext').removeClass("fa fa-lock");
                    $('#resizeicontext').addClass("fa fa-unlock");
                    object['setControlVisible']('ml', true);
                    object['setControlVisible']('mr', true);
                    object['setControlVisible']('mt', true);
                    object['setControlVisible']('mb', true);
                    object['setControlVisible']('br', false);
                    object['setControlVisible']('bl', false);
                    object['lockUniScaling'] = false;
                } else if ($('#resizeicontext').hasClass('fa fa-unlock') || $('#resizeicontext').hasClass('fa-unlock fa')) {
                    $('#resizeicontext').removeClass("fa fa-unlock");
                    $('#resizeicontext').addClass("fa fa-lock");
                    object['setControlVisible']('ml', false);
                    object['setControlVisible']('mr', false);
                    object['setControlVisible']('mt', false);
                    object['setControlVisible']('mb', false);
                    object['setControlVisible']('br', true);
                    object['setControlVisible']('bl', true);
                    object['lockUniScaling'] = true;
                }
            }
            canvasActive.renderAll();
        }

        /**
         * Move object to center front an back
         * 
         * @return void
         */

        function SetLayer(value) 
        {
            var object = canvasActive.getActiveObject();
            if (value == "forward") {
                object.bringForward();
            } else if (value == "backward") {
                object.sendBackwards();
            }
            else if(value == "center")
            {
                object.set('left', canvasActive.width / 2).setCoords();
            }
            canvasActive.renderAll();
            save();
        }

        /**
         * Edit text to a print area
         * 
         * @return void
         */
        $(function()
        {
            $('#textarea2').keyup(function() {
                default_text = this.value;
                var obj = canvasActive.getActiveObject();
                if (default_text.length > 0)
                {
                    if (obj && (obj.type == 'curvedText' || obj.type == 'text'))
                    {
                        props = obj.toObject();
                        if (obj.type == 'curvedText')
                        {
                            delete props['type'];
                            props['textAlign'] = 'center';
                            props['arcangle'] = obj.arcangle;
                            props['spacing'] = obj.spacing;
                            props['id'] = obj.id;
                            props['reverse'] = false;
                            props['type'] = 'curvedText';
                            var textSample = new fabric.CurvedText(default_text, props);
                                textSample.setControlsVisibility({
                                    ml: false,
                                    mr: false,
                                    mb: false,
                                    mt: false,
                                    mtr: false,
                                    bl: true,
                                    tr: true,
                                    tl: true,
                                    br: true,
                                });

                                textSample.customiseCornerIcons({
                                    settings: {
                                        borderColor: '#4fc1f0',
                                        cornerSize: 40,
                                        cornerShape: 'circle',
                                        cornerBackgroundColor: 'rgba(100,100,100,0)',
                                        cornerPadding: 15,
                                        hasRotatingPoint: true,
                                    },
                                tr: {
                                    icon: window.location.origin + '/img/icon/x.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                bl: {
                                    icon: window.location.origin + '/img/icon/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                br: {
                                    icon: window.location.origin + '/img/icon/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                ml: {
                                    icon: window.location.origin + '/img/icon/left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                mr: {
                                    icon: window.location.origin + '/img/icon/right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                mb: {
                                    icon: window.location.origin + '/img/icon/down.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                mt: {
                                    icon: window.location.origin + '/img/icon/up.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                tl: {
                                    icon: window.location.origin + '/img/icon/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                            });
                            canvasActive.remove(obj);
                            canvasActive.add(textSample).renderAll();
                            canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                        } 
                        else
                        {
                            obj.setText(this.value);
                            var objtmp = obj;
                            canvasActive.remove(obj);
                            objtmp.setControlsVisibility({
                                ml: false,
                                mr: false,
                                mb: false,
                                mt: false,
                                mtr: false,
                                bl: true,
                                tr: true,
                                tl: true,
                                br: true,
                            });
                            objtmp.customiseCornerIcons({
                                settings: {
                                    borderColor: '#4fc1f0',
                                    cornerSize: 40,
                                    cornerShape: 'circle',
                                    cornerBackgroundColor: 'rgba(100,100,100,0)',
                                    cornerPadding: 15,
                                    hasRotatingPoint: true,
                                },
                                tr: {
                                    icon: window.location.origin + '/img/icon/x.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                bl: {
                                    icon: window.location.origin + '/img/icon/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                br: {
                                    icon: window.location.origin + '/img/icon/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                ml: {
                                    icon: window.location.origin + '/img/icon/left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                mr: {
                                    icon: window.location.origin + '/img/icon/right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                mb: {
                                    icon: window.location.origin + '/img/icon/down.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                mt: {
                                    icon: window.location.origin + '/img/icon/up.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                tl: {
                                    icon: window.location.origin + '/img/icon/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                            });
                            canvasActive.add(objtmp).renderAll();
                            canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                        }
                    } 
                    else
                    {
                        var textSample = new fabric.Text(default_text, {
                            left: canvasActive.width / 2,
                            top: 50,
                            fontSize: 50,
                            strokeWidth: 0,
                            fontFamily: 'ABeeZee-Regular',
                            backgroundColor: 'transparent',
                            /*padding: 18,*/
                            //id: objId,
                            scaleX: 0.9,
                            charSpacing: 20,
                            snapAngle: 45,
                            snapThreshold: 45,
                            centeredRotation: true,
                            originX: 'center',
                            originY: 'center',
                            scaleY: 0.9,
                            colorName: 'Black',
                            strokecolorName: 'Black',
                            fill: '#000000',
                            stroke: ''
                        });
                        textSample.setControlsVisibility({
                            ml: false,
                            mr: false,
                            mb: false,
                            mt: false,
                            mtr: false,
                            bl: true,
                            tr: true,
                            tl: true,
                            br: true,
                        });
                        textSample.customiseCornerIcons({
                            settings: {
                                borderColor: '#4fc1f0',
                                cornerSize: 40,
                                cornerShape: 'circle',
                                cornerBackgroundColor: 'rgba(100,100,100,0)',
                                cornerPadding: 15,
                                hasRotatingPoint: true,
                            },
                            tr: {
                                icon: window.location.origin + '/img/icon/x.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            bl: {
                                icon: window.location.origin + '/img/icon/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            br: {
                                icon: window.location.origin + '/img/icon/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            ml: {
                                icon: window.location.origin + '/img/icon/left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            mr: {
                                icon: window.location.origin + '/img/icon/right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            mb: {
                                icon: window.location.origin + '/img/icon/down.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            mt: {
                                icon: window.location.origin + '/img/icon/up.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            tl: {
                                icon: window.location.origin + '/img/icon/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                        });
                        canvasActive.add(textSample).renderAll();
                        canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                        objId++;
                    }
                } 
                else
                {
                    canvasActive.remove(obj);
                }
                canvasActive.renderAll();
               save();
            });
        });

        /**
         * Rotate object in the print area
         * 
         * @return void
         */
        
        function rotate(e) 
        {
            $(".list-group-item").removeClass("active");
            $(this).addClass("active");
            
            var object = canvasActive.getActiveObject();
            var anglevalue = e.target.value;
            
            if (e.target.id == "angleImage") {
                object.setAngle(anglevalue).setCoords();
                document.getElementById("anglevalueImage").value = anglevalue;
            } else if (e.target.id == "anglevalueImage") {
                object.setAngle(anglevalue);
                document.getElementById("angleImage").value = anglevalue;
            } else if (e.target.id == "angleText") {
                object.setAngle(anglevalue);
                document.getElementById("anglevalueText").value = anglevalue;
            } else if (e.target.id == "anglevalueText") {
                object.setAngle(anglevalue);
                document.getElementById("angleText").value = anglevalue;
            }
            
            canvasActive.renderAll(canvasActive);
            save();
        }

        /**
         * FlipX the object in the canvas
         * 
         * @return void
         */
        function flipX() 
        {
            var object;
            //this is to style the list so that you can see what you clicked on
            $(".list-group-item").removeClass("active");
            $(this).addClass("active");
            var object = canvasActive.getActiveObject();
            object.set('flipX', !object.flipX);
            canvasActive.renderAll(canvasActive);
            save();
        }

        /**
         * 
         * Show and Hide the diferents fonts
         * 
         * @return void
        */

        function fontMenu()
        {
            var text_color = document.getElementById('text_color');
            var fontmenu = document.getElementById('fontmenu');
            if (font_title.innerHTML == "Fonts")
            {
                font_title.innerHTML = "Change Font";
                up.style.display = "block";
                down.style.display = "none";
                fontmenu.style.display = "none";
            } 
            else
            {
                font_title.innerHTML = "Fonts";
                up.style.display = "none";
                down.style.display = "block";
                fontmenu.style.display = "block";
            }
        }

        /**
         * FlipY the object in the canvas
         * 
         * @return void
         */
        function flipY() {
            var object;
            //this is to style the list so that you can see what you clicked on
            $(".list-group-item").removeClass("active");
            $(this).addClass("active");
            var object = canvasActive.getActiveObject();
            object.set('flipY', !object.flipY);
            canvasActive.renderAll(canvasActive);
            save();
        }

        /**
         * Resize the object in the canvas
         * 
         * @return void
         */

        function resize(e) 
        {
            resized = true;
            $(".list-group-item").removeClass("active");
            $(this).addClass("active");
            var object = canvasActive.getActiveObject();
            var element = e.target.id;
            switch (element) {
                case 'sizeText':
                    var sizeText = Number(document.getElementById('sizeText').value);
                    if (sizeText < 10) {
                        sizeText = 10;
                        document.getElementById('sizeText').value = sizeText;
                    } else if (sizeText > 50) {
                        sizeText = 50;
                        document.getElementById('sizeText').value = sizeText;
                    }
                    if (object.type == 'text') {
                        object.setFontSize(sizeText);
                    } else {
                        object.set("fontSize", sizeText);
                    }
                    document.getElementById('sizeTextvalue').value = sizeText;
                    break;
                case 'sizeTextvalue':
                    var sizeText = Number(document.getElementById('sizeTextvalue').value);
                    if (sizeText < 10) {
                        sizeText = 10;
                        document.getElementById('sizeTextvalue').value = sizeText;
                    } else if (sizeText > 50) {
                        sizeText = 50;
                        document.getElementById('sizeTextvalue').value = sizeText;
                    }
                    if (object.type == 'text') {
                        object.setFontSize(sizeText);
                    } else {
                        object.set("fontSize", sizeText);
                    }
                    document.getElementById('sizeText').value = sizeText;
                    break;
                case 'widthImage':
                    var Inch = Number(document.getElementById('widthImage').value);
                    if (Inch < 0) {
                        Inch = 1;
                        document.getElementById('widthImage').value = 1;
                    } else if (Inch > 12) {
                        Inch = 12;
                        document.getElementById('widthImage').value = 12;
                    }
                    document.getElementById('widthvalueImage').value = document.getElementById('widthImage').value;
                    var scaleX = (Inch.toFixed(2) * 35) / (1.3 * object.width.toFixed(2));
                    var Inchheigth = (object.height * scaleX * 1.3 / 35);
                    if (object.lockUniScaling) {
                        object.set('scaleX', scaleX.toFixed(2));
                        object.set('scaleY', scaleX.toFixed(2));
                        document.getElementById('heightImage').value = Inchheigth.toFixed(2);
                        document.getElementById('heightvalueImage').value = Inchheigth.toFixed(2);
                    } else {
                        object.set('scaleX', scaleX.toFixed(2));
                    }
                    break;
                case 'widthText':
                    var Inch = Number(document.getElementById('widthText').value);
                    if (Inch < 0) {
                        Inch = 1;
                        document.getElementById('widthText').value = 1;
                    } else if (Inch > 12) {
                        Inch = 12;
                        document.getElementById('widthText').value = 12;
                    }
                    document.getElementById('widthvalueText').value = document.getElementById('widthText').value;
                    var scaleX = (Inch.toFixed(2) * 35) / (1.3 * object.width.toFixed(2));
                    var Inchheigth = (object.height * scaleX * 1.3 / 35);
                    if (object.lockUniScaling) {
                        object.set('scaleX', scaleX.toFixed(2));
                        object.set('scaleY', scaleX.toFixed(2));
                        document.getElementById('heightText').value = Inchheigth.toFixed(2);
                        document.getElementById('heightvalueText').value = Inchheigth.toFixed(2);
                    } else {
                        object.set('scaleX', scaleX.toFixed(2));
                    }
                    break;
                case 'widthvalueImage':
                    var Inch = Number(document.getElementById('widthvalueImage').value);
                    if (Inch < 0) {
                        Inch = 1;
                        document.getElementById('widthvalueImage').value = 1;
                    } else if (Inch > 12) {
                        Inch = 12;
                        document.getElementById('widthvalueImage').value = 12;
                    }
                    document.getElementById('widthImage').value = document.getElementById('widthvalueImage').value;
                    var scaleX = (Inch.toFixed(2) * 35) / (1.3 * object.width.toFixed(2));
                    var Inchheigth = object.height * scaleX * 1.3 / 35;
                    if (object.lockUniScaling) {
                        object.set('scaleX', scaleX.toFixed(2));
                        object.set('scaleY', scaleX.toFixed(2));
                        document.getElementById('heightImage').value = Inchheigth.toFixed(2);
                        document.getElementById('heightvalueImage').value = Inchheigth.toFixed(2);
                    } else {
                        object.set('scaleX', scaleX.toFixed(2));
                    }
                    break;
                case 'widthvalueText':
                    var Inch = Number(document.getElementById('widthvalueText').value);
                    if (Inch < 0) {
                        Inch = 1;
                        document.getElementById('widthvalueText').value = 1;
                    } else if (Inch > 12) {
                        Inch = 12;
                        document.getElementById('widthvalueText').value = 12;
                    }
                    document.getElementById('widthText').value = document.getElementById('widthvalueText').value;
                    var scaleX = (Inch.toFixed(2) * 35) / (1.3 * object.width.toFixed(2));
                    var Inchheigth = object.height * scaleX * 1.3 / 35;
                    if (object.lockUniScaling) {
                        object.set('scaleX', scaleX.toFixed(2));
                        object.set('scaleY', scaleX.toFixed(2));
                        document.getElementById('heightText').value = Inchheigth.toFixed(2);
                        document.getElementById('heightvalueText').value = Inchheigth.toFixed(2);
                    } else {
                        object.set('scaleX', scaleX.toFixed(2));
                    }
                    break;
                case 'heightImage':
                    var Inch = Number(document.getElementById('heightImage').value);
                    if (Inch < 0) {
                        Inch = 1;
                        document.getElementById('heightImage').value = 1;
                    } else if (Inch > 16) {
                        Inch = 16;
                        document.getElementById('heightImage').value = 16;
                    }
                    document.getElementById('heightvalueImage').value = document.getElementById('heightImage').value;
                    var scaleY = (Inch * 35) / (1.3 * object.height);
                    var Inchwitdh = object.width * scaleY * 1.3 / 35;
                    if (object.lockUniScaling) {
                        object.set('scaleX', scaleY.toFixed(2));
                        object.set('scaleY', scaleY.toFixed(2));
                        document.getElementById('widthImage').value = Inchwitdh.toFixed(2);
                        document.getElementById('widthvalueImage').value = Inchwitdh.toFixed(2);
                    } else {
                        object.set('scaleY', scaleY.toFixed(2));
                    }
                    break;
                case 'heightText':
                    var Inch = Number(document.getElementById('heightText').value);
                    if (Inch < 0) {
                        Inch = 1;
                        document.getElementById('heightText').value = 1;
                    } else if (Inch > 16) {
                        Inch = 16;
                        document.getElementById('heightText').value = 16;
                    }
                    document.getElementById('heightvalueText').value = document.getElementById('heightText').value;
                    var scaleY = (Inch * 35) / (1.3 * object.height);
                    var Inchwitdh = object.width * scaleY * 1.3 / 35;
                    if (object.lockUniScaling) {
                        object.set('scaleX', scaleY.toFixed(2));
                        object.set('scaleY', scaleY.toFixed(2));
                        document.getElementById('widthText').value = Inchwitdh.toFixed(2);
                        document.getElementById('widthvalueText').value = Inchwitdh.toFixed(2);
                    } else {
                        object.set('scaleY', scaleY.toFixed(2));
                    }
                    break;
                case 'heightvalueImage':
                    var Inch = Number(document.getElementById('heightvalueImage').value);
                    if (Inch < 0) {
                        Inch = 1;
                        document.getElementById('heightvalueImage').value = 1;
                    } else if (Inch > 16) {
                        Inch = 16;
                        document.getElementById('heightvalueImage').value = 16;
                    }
                    document.getElementById('heightImage').value = document.getElementById('heightvalueImage').value;
                    var scaleY = (Inch * 35) / (1.3 * object.height);
                    var Inchwitdh = object.width * scaleY * 1.3 / 35;
                    if (object.lockUniScaling) {
                        object.set('scaleX', scaleY.toFixed(2));
                        object.set('scaleY', scaleY.toFixed(2));
                        document.getElementById('widthImage').value = Inchwitdh.toFixed(2);
                        document.getElementById('widthvalueImage').value = Inchwitdh.toFixed(2);
                    } else {
                        object.set('scaleY', scaleY.toFixed(2));
                    }
                    break;
                case 'heightvalueText':
                    var Inch = Number(document.getElementById('heightvalueText').value);
                    if (Inch < 0) {
                        Inch = 1;
                        document.getElementById('heightvalueText').value = 1;
                    } else if (Inch > 16) {
                        Inch = 16;
                        document.getElementById('heightvalueText').value = 16;
                    }
                    document.getElementById('heightText').value = document.getElementById('heightvalueText').value;
                    var scaleY = (Inch * 35) / (1.3 * object.height);
                    var Inchwitdh = object.width * scaleY * 1.3 / 35;
                    if (object.lockUniScaling) {
                        object.set('scaleX', scaleY.toFixed(2));
                        object.set('scaleY', scaleY.toFixed(2));
                        document.getElementById('widthText').value = Inchwitdh.toFixed(2);
                        document.getElementById('widthvalueText').value = Inchwitdh.toFixed(2);
                    } else {
                        object.set('scaleY', scaleY.toFixed(2));
                    }
                    break;
                default:
            }
            canvasActive.renderAll(canvasActive);
            save();
        }


        function showcorners(e)
        {
            var modifiedObject = e.target;
            if(modifiedObject != undefined)
            {
                modifiedObject.hasControls = true;
                modifiedObject.hasBorders = true;
                canvasActive.renderAll();
            }
        }

        function hidecorners(e)
        {   
            var modifiedObject = e.target;
            if(modifiedObject != undefined)
            {
                modifiedObject.hasControls = false;
                modifiedObject.hasBorders = false;
                canvasActive.renderAll();
            }
        }


        /**
        * Display edit view info when you select an object in the design print area.
        *
        * @return void
        */
        function displayinfo(e)
        {
            var modifiedObject = e.target;
            var editArt = document.getElementById("editArt");
            var changecolorArt = document.getElementById("changecolorArt");
            var newArt = document.getElementById("newArt");
            var fontbtn = document.getElementById("fontbtn");
            var fontmenu = document.getElementById("fontmenu");
            var textmenu = document.getElementById("textmenu");
            var Artcolor = document.getElementById("Artcolor");
            var Artcolorink = document.getElementById("Artcolorink");
            var ArtcolorText = document.getElementById("ArtcolorText");
            var Artselectcolor = document.getElementById("Artselectcolor");
            var fullcolormessage = document.getElementById("fullcolormessage");
            var colornoeditmessage = document.getElementById("colornoeditmessage");
            var fullcolormessage2 = document.getElementById("fullcolormessage2");
            var colornoeditmessage2 = document.getElementById("colornoeditmessage2");
            var Text_color = document.getElementById("Textcolor");
            var Text_strokecolor = document.getElementById("Textstrokecolor");
            var texteffecsarea = document.getElementById("texteffecsarea");
            var effect = document.getElementById("effect");
            var textarea = document.getElementById('textarea');
            document.getElementById("textareabtn").innerHTML = "Add Text";
            var sizeText = document.getElementById('sizeText');
            var widthImage = document.getElementById('widthImage');
            var widthvalueImage = document.getElementById('widthvalueImage');
            var heightImage = document.getElementById('heightImage');
            var heightvalueImage = document.getElementById('heightvalueImage');
            var angleImage = document.getElementById('angleImage');
            var anglevalueImage = document.getElementById('anglevalueImage');
            var artcolortransparent = document.getElementById('artcolortransparent');
            var artcolortransparentlegend = document.getElementById('artcolortransparentlegend');
            var checkcolorlegend = document.getElementById('checkcolorlegend');
            var inkcolorlist = document.getElementById("inkcolorlist");
            var objectcolors = document.getElementById("objectcolors");
            var objectcolors3 = document.getElementById("objectcolors3");
            var displaycolor = document.getElementById("displaycolor");
            var displaynoeditcolor = document.getElementById("displaynoeditcolor");
            var displayfullcolor = document.getElementById("displayfullcolor");
            var removewhite = document.getElementById("removewhite");
            var angleText = document.getElementById('angleText');
            var anglevalueText = document.getElementById('anglevalueText');
            var strokewidthvalue = document.getElementById("strokewidthvalue");
            var strokewidth = document.getElementById("strokewidth");
            var font_preview = document.getElementById("font_preview");
            if (e.target == undefined)
            {
                $('.nav-tabs a[href="#productSection"]').tab('show');
                newArt.style.display = 'none';
                editArt.style.display = 'none';
                changecolorArt.style.display = 'none';
                fontbtn.style.display = 'none';
                fontmenu.style.display = "none";
                textmenu.style.display = 'none';
                textarea.value = "";
                sizeText.value = "";
                Artcolor.innerHTML = '';
                Text_color.innerHTML = '';
                Text_strokecolor.innerHTML = '';
                font = 'ABeeZee-Regular ';
                setTitleFont();
            } 
            else if (e.target.type == 'image') 
            {
                objectcolors.innerHTML = "";
                objectcolors3.innerHTML = "";
                Artcolor.innerHTML = "";
                $('.nav-tabs a[href="#addArt"]').tab('show');
                widthImage.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);
                widthvalueImage.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);
                heightImage.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);
                heightvalueImage.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);
                angleImage.value = e.target.getAngle();
                anglevalueImage.value = e.target.getAngle();
                if (modifiedObject._controlsVisibility.ml) 
                {
                    $('#resizeicon').removeClass("fa fa-lock");
                    $('#resizeicon').addClass("fa fa-unlock");
                }
                else 
                {
                    $('#resizeicon').removeClass("fa fa-unlock");
                    $('#resizeicon').addClass("fa fa-lock");
                }
                
                
                if (modifiedObject.id.toString().indexOf("uploaded") == -1 || modifiedObject.id.toString().indexOf("Uploaded") == -1) 
                {
                    if (modifiedObject.id.toString().indexOf('editable') >= 0) 
                    {
                        if (modifiedObject.numbercolors != undefined) 
                        {
                            if (modifiedObject.numbercolors.length > 8) 
                            {
                                //console.log("PNG CLIPART NUMBER COLORS FULLCOLOR");
                                displaycolor.style.display = "none";
                                displaynoeditcolor.style.display = "none";
                                removewhite.style.display = "block";
                                displayfullcolor.style.display = "block"; 
                                Artcolorink.style.display= "none";
                            }
                            else
                            {
                                //console.log("PNG CLIPART COLOR NUMBERCOLORS 1-8");
                                for (var i = 0; i < modifiedObject.colorlist.length; i++) 
                                {
                                    var currentcolor = modifiedObject.colorlist[i].hex;
                                    objectcolors.innerHTML += '<div id="color_'+modifiedObject.id+'" class="color1" style="background-color: '+ currentcolor+'; width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;"  onclick="setcolor(this);"></div>';
                                }
                                displaycolor.style.display = "block";
                                displaynoeditcolor.style.display = "none";
                                removewhite.style.display = "block";
                                displayfullcolor.style.display = "none"; 
                                Artcolorink.style.display= "block";
                            }
                        } 
                        else if (modifiedObject.filters.length > 0) 
                        {
                            //console.log("PNG CLIPART 1 FILTER");
                            var found = ListColors.find(function(element) 
                            {
                                if ((element.hex) == rgb2hex(modifiedObject.filters[modifiedObject.filters.length - 1].color)) {
                                    return element;
                                }
                            });
                            var Artcolor_name = found.name;
                            objectcolors.innerHTML = '<div id="color_'+modifiedObject.id+'" class="color1" style="background-color: '+ rgb2hex(modifiedObject.filters[modifiedObject.filters.length - 1].color)+'; width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;" onclick="setcolor(this);"></div>';;
                            Artcolor.innerHTML = Artcolor_name;                                
                            displaycolor.style.display = "block";
                            displaynoeditcolor.style.display = "none";
                            removewhite.style.display = "block";
                            displayfullcolor.style.display = "none";      
                            Artcolorink.style.display= "block";
                        }
                        else 
                        {
                            //console.log("PNG CLIPART NO FILTER");
                            objectcolors.innerHTML = '<div id="color_'+modifiedObject.id+'" class="color1" style="background-color: rgb(0, 0, 0); width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;" onclick="setcolor(this);"></div>';
                            Artcolor.innerHTML = "Black";                                
                            displaycolor.style.display = "block";
                            displaynoeditcolor.style.display = "none";
                            removewhite.style.display = "block";
                            displayfullcolor.style.display = "none"; 
                            Artcolorink.style.display= "block";
                        }
                    }
                    else
                    {
                        if (modifiedObject.numbercolors != undefined) 
                        {
                            if (modifiedObject.numbercolors.length > 8) 
                            {   
                                displaycolor.style.display = "none";
                                displaynoeditcolor.style.display = "none";
                                removewhite.style.display = "block";
                                displayfullcolor.style.display = "block"; 
                                Artcolorink.style.display= "none";
                            }
                            else
                            {
                                //console.log("PNG CLIPART COLOR NUMBERCOLORS 1-8 NO EDIT");
                                for (var i = 0; i < modifiedObject.colorlist.length; i++) 
                                {
                                    var currentcolor = modifiedObject.colorlist[i].hex;
                                    objectcolors3.innerHTML += '<div class="color1" style="background-color: '+ currentcolor+'; width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;"></div>';
                                }
                                displaycolor.style.display = "none";
                                displaynoeditcolor.style.display = "block";
                                removewhite.style.display = "block";
                                displayfullcolor.style.display = "none"; 
                                Artcolorink.style.display= "none";
                            }
                        } 
                        else if (modifiedObject.filters.length > 0) 
                        {
                            //console.log("PNG CLIPART 1 FILTER NO EDIT");
                            var found = ListColors.find(function(element) 
                            {
                                if ((element.hex) == rgb2hex(modifiedObject.filters[modifiedObject.filters.length - 1].color)) {
                                    return element;
                                }
                            });
                            var Artcolor_name = found.name;
                            objectcolors3.innerHTML = '<div class="color1" style="background-color: '+ rgb2hex(modifiedObject.filters[modifiedObject.filters.length - 1].color)+'; width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;"></div>';
                            Artcolor.innerHTML = Artcolor_name;
                            displaycolor.style.display = "none";
                            displaynoeditcolor.style.display = "block";
                            removewhite.style.display = "block";
                            displayfullcolor.style.display = "none";   
                            Artcolorink.style.display= "none";
                        }
                        else 
                        {
                            //console.log("PNG CLIPART NO FILTER NO EDIT");
                            objectcolors3.innerHTML = '<div class="color1" style="background-color: rgb(0, 0, 0); width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;"></div>';
                            Artcolor.innerHTML = "Black";
                            displaycolor.style.display = "none";
                            displaynoeditcolor.style.display = "block";
                            removewhite.style.display = "block";
                            displayfullcolor.style.display = "none"; 
                            Artcolorink.style.display= "none";
                        }
                    }
                } 
                else 
                {
                    if (modifiedObject.colorlist != undefined) 
                    {
                        if (modifiedObject.colorlist.length > 8) 
                        {
                            //console.log("PNG CLIPART COLOR LIST FULLCOLOR");
                            displaycolor.style.display = "none";
                            displaynoeditcolor.style.display = "none";
                            removewhite.style.display = "block";
                            displayfullcolor.style.display = "block"; 
                            Artcolorink.style.display= "block";
                        }
                        else
                        {
                            //console.log("PNG CLIPART COLOR LIST COLORS 1-8");
                            for (var i = 0; i < modifiedObject.colorlist.length; i++) 
                            {
                                var currentcolor = modifiedObject.colorlist[i];
                                objectcolors3.innerHTML += '<div class="color1" style="background-color: '+ currentcolor+'; width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;"></div>';
                            }
                            displaycolor.style.display = "none";
                            displaynoeditcolor.style.display = "block";
                            removewhite.style.display = "block";
                            displayfullcolor.style.display = "none"; 
                            Artcolorink.style.display= "block";
                        }
                    } 
                    else 
                    {
                        if (modifiedObject.filters.length > 0) 
                        {
                            //console.log("PNG CLIPART COLOR FILTERS");
                            var found = ListColors.find(function(element) {
                                if ((element.hex) == rgb2hex(modifiedObject.filters[modifiedObject.filters.length - 1].color)) 
                                {
                                    return element;
                                }
                            });
                            var Artcolor_name = found.name;
                            var divColor = document.createElement("div");
                            divColor.id = "color" + modifiedObject.id;
                            divColor.className = "color1";
                            divColor.style.backgroundColor = rgb2hex(modifiedObject.filters[modifiedObject.filters.length - 1].color);
                            divColor.style.width = "30px";
                            divColor.style.height = "30px";
                            divColor.style.borderRadius = "30px";
                            divColor.style.display = "inline-flex";
                            divColor.style.border = "1px solid #eee";
                            divColor.style.cursor = "pointer";
                            divColor.addEventListener("click", function() 
                            {
                                idcolorselected = this.id;
                                colorselected = this.style.backgroundColor;
                                var listcircles = document.getElementsByClassName('color1');
                                for (var i = 0; i < listcircles.length; i++) 
                                {
                                    listcircles[i].style.border = "1px solid #eee";
                                }
                                this.style.border = "2px solid #31B0D5";
                            });
                            
                            objectcolors.appendChild(divColor);
                            Artcolor.innerHTML = Artcolor_name;
                            Artcolor.style.display= "none";
                            ArtcolorText.style.display= "none";
                            Artselectcolor.style.display= "none";
                            fullcolormessage.style.display= "none";
                            colornoeditmessage.style.display= "none";
                            fullcolormessage2.style.display= "none";
                            colornoeditmessage2.style.display= "block";
                            objectcolors.style.display= "block";
                            checkcolorlegend.style.display = "none";
                            artcolortransparentlegend.style.display = "none";
                            inkcolorlist.style.display = "none";
                            changecolorartbtn.style.display = "none";
                        } 
                        else
                        {   
                            //console.log("PNG CLIPART COLOR NO FILTERS");
                            var divColor = document.createElement("div");
                            divColor.id = "color" + modifiedObject.id;
                            divColor.className = "color1";
                            divColor.style.backgroundColor = "#000000";
                            divColor.style.width = "30px";
                            divColor.style.height = "30px";
                            divColor.style.borderRadius = "30px";
                            divColor.style.display = "inline-flex";
                            divColor.style.border = "1px solid #eee";
                            divColor.style.cursor = "pointer";
                            divColor.addEventListener("click", function() 
                            {
                                idcolorselected = this.id;
                                colorselected = this.style.backgroundColor;
                                var listcircles = document.getElementsByClassName('color1');
                                for (var i = 0; i < listcircles.length; i++) 
                                {
                                    listcircles[i].style.border = "1px solid #eee";
                                }
                                this.style.border = "2px solid #31B0D5";
                            });
                            objectcolors.appendChild(divColor);
                            Artcolor.innerHTML = "Black";
                            Artcolor.style.display= "none";
                            ArtcolorText.style.display= "none";
                            Artselectcolor.style.display= "none";
                            fullcolormessage.style.display= "none";
                            colornoeditmessage.style.display= "none";
                            fullcolormessage2.style.display= "none";
                            colornoeditmessage2.style.display= "block";
                            objectcolors.style.display= "block";
                            checkcolorlegend.style.display = "none";
                            artcolortransparentlegend.style.display = "none";
                            inkcolorlist.style.display = "none";
                            changecolorartbtn.style.display = "none";
                        }
                    }
                }
                editArt.style.display = 'block';
                //changeClipArtMenuSize();
                newArt.style.display = 'none';
                //activateMenu(e.target.type);
                font = 'ABeeZee-Regular';
                setTitleFont();
            } 
            else if (e.target.type == 'text' || e.target.type == 'curvedText') 
            {
                    
                widthText.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);
                widthvalueText.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);
                heightText.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);
                heightvalueText.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);
                if (modifiedObject._controlsVisibility.ml) 
                {
                    $('#resizeicontext').removeClass("fa fa-lock");
                    $('#resizeicontext').addClass("fa fa-unlock");
                } 
                else 
                {
                    $('#resizeicontext').removeClass("fa fa-unlock");
                    $('#resizeicontext').addClass("fa fa-lock");
                }
                $('.nav-tabs a[href="#textSection"]').tab('show');
                document.getElementById("textareabtn").innerHTML = "Update Text";
                fontbtn.style.display = 'block';
                fontmenu.style.display = "none";
                textmenu.style.display = 'block';
                var Text_color_name = "Black";
                var found = ListColors.find(function(element) {
                    if ((element.hex) == rgb2hex(modifiedObject.fill)) {
                        return element;
                    }
                });
                Text_color_name = found.name;
                Text_color.innerHTML = Text_color_name;
                var Text_Stroke_color_name = "";
                var found = ListColors.find(function(element) {
                    if ((element.hex) == rgb2hex(modifiedObject.stroke)) {
                        return element;
                    }
                });
                Text_strokecolor.innerHTML = Text_Stroke_color_name;
                document.getElementById("sizeText").value = Math.round(modifiedObject.getFontSize());
                document.getElementById('textarea').value = modifiedObject.text;
                document.getElementById("strokewidthvalue").value = modifiedObject.strokeWidth;
                document.getElementById("strokewidth").value = modifiedObject.strokeWidth;
                document.getElementById('angleText').value = e.target.getAngle();
                document.getElementById('anglevalueText').value = e.target.getAngle();
                
                if (modifiedObject.text != "") {
                    var fonts = document.getElementsByClassName("fonts");
                    for (i = 0; i < fonts.length; i++) {
                        fonts[i].innerHTML = modifiedObject.text.substring(0, 7);
                    }
                } else {
                    var fonts = document.getElementsByClassName("fonts");
                    for (i = 0; i < fonts.length; i++) {
                        fonts[i].innerHTML = fonts[i].id;
                    }
                }
                if (e.target.type == 'text') {
                    texteffecsarea.style.display = "none";
                    effect.checked = false;
                } else {
                    texteffecsarea.style.display = "block";
                    effect.checked = true;
                    document.getElementById("sizeText").value = modifiedObject.getFontSize();
                    document.getElementById("sizeTextvalue").value = modifiedObject.getFontSize();
                    document.getElementById("radius").value = modifiedObject.getArcangle();
                    document.getElementById("radiusvalue").value = modifiedObject.getArcangle();
                    document.getElementById("spacing").value = modifiedObject.getSpacing();
                    document.getElementById("spacingvalue").value = modifiedObject.getSpacing();
                }
                //font_preview.style.fontFamily = modifiedObject.fontFamily;
                font_preview.innerHTML = modifiedObject.fontFamily;
                
            } 
            else if (e.target.type == 'group')
            {
               if(modifiedObject != "")
                {
                    objectcolors.innerHTML = "";
                    objectcolors3.innerHTML = "";
                    Artcolor.innerHTML = "";
                    $('.nav-tabs a[href="#addArt"]').tab('show');
                    //changecolorArt.style.display = 'none';
                    var layerscolors = [];
                    artcolortransparent.style.display = "block";
                    artcolortransparentlegend.style.display = "block";
                    checkcolorlegend.style.display = "block";
                    inkcolorlist.style.display = "block";
                    widthImage.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);
                    widthvalueImage.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);
                    heightImage.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);
                    heightvalueImage.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);
                    angleImage.value = e.target.getAngle();
                    anglevalueImage.value = e.target.getAngle();

                    for (var i = 0; i < modifiedObject._objects.length; i++) 
                    {
                        if (!validate_layer(modifiedObject._objects[i], layerscolors)) 
                        {
                            layerscolors.push(modifiedObject._objects[i]);
                        }
                    }
                    
                    
                    if (modifiedObject.id.indexOf("editable") >=0) 
                    {
                        if (layerscolors.length > 0 && layerscolors.length < 2 )
                        {
                            //console.log("SVG 1 COLOR");
                            for (var i = 0; i < layerscolors.length; i++) 
                            {
                                var currentcolor = layerscolors[i].fill;
                                objectcolors.innerHTML += '<div id="color_'+layerscolors[i].id.split(".")[0]+'" class="color1" style="background-color: '+ currentcolor +'; width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;" onclick="setcolor(this);"></div>';
                            }
                            displaycolor.style.display = "block";
                            displaynoeditcolor.style.display = "none";
                            removewhite.style.display = "none";
                            displayfullcolor.style.display = "none";                           
                            Artcolorink.style.display= "block";
                        }
                        else if (layerscolors.length > 1 && layerscolors.length < 9)
                        {
                            //console.log("SVG 2-8 COLOR");
                            for (var i = 0; i < layerscolors.length; i++) 
                            {
                                var currentcolor = layerscolors[i].fill;
                                objectcolors.innerHTML += '<div id="color_'+layerscolors[i].id.split(".")[0]+'" class="color1" style="background-color: '+ currentcolor +'; width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;" onclick="setcolor(this);"></div>';
                            }

                            idcolorselected = "color_"+layerscolors[0].id.split(".")[0];
                            colorselected = layerscolors[0].fill;
                            var listcircles = document.getElementsByClassName('color1');
                            for (var i = 0; i < listcircles.length; i++) 
                            {
                                listcircles[i].style.border = "1px solid #eee";
                            }
                            document.getElementById(idcolorselected).style.border = "2px solid #31B0D5";
                            displaycolor.style.display = "block";
                            displaynoeditcolor.style.display = "none";
                            removewhite.style.display = "none";
                            displayfullcolor.style.display = "none";
                            Artcolorink.style.display= "block";
                        }
                        else
                        {   
                            displaycolor.style.display = "none";
                            displaynoeditcolor.style.display = "none";
                            removewhite.style.display = "none";
                            displayfullcolor.style.display = "block";                           
                            Artcolorink.style.display= "none";
                        }
                    }
                    else
                    {
                        if (layerscolors.length > 0 && layerscolors.length < 2 )
                        {
                            //console.log("SVG 1 COLOR NO EDIT");
                            for (var i = 0; i < layerscolors.length; i++) 
                            {
                                var currentcolor = layerscolors[i].fill;
                                objectcolors3.innerHTML += '<div class="color1" style="background-color: '+ currentcolor+'; width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;"></div>';
                            }
                            displaycolor.style.display = "none";
                            displaynoeditcolor.style.display = "block";
                            removewhite.style.display = "none";
                            displayfullcolor.style.display = "none";
                            ArtcolorText.style.display= "none";
                            inkcolorlist.style.display= "none";
                            Artcolorink.style.display= "none";
                            
                        }
                        else if (layerscolors.length > 1 && layerscolors.length < 9)
                        {
                            //console.log("SVG 2-8 COLOR NO EDIT");
                            for (var i = 0; i < layerscolors.length; i++) 
                            {
                                var currentcolor = layerscolors[i].fill;
                                    objectcolors3.innerHTML += '<div class="color1" style="background-color: '+ currentcolor+'; width: 30px; height: 30px; border-radius: 30px; display: inline-flex; border: 1px solid rgb(238, 238, 238); cursor: pointer;"></div>';
                            }
                            displaycolor.style.display = "none";
                            displaynoeditcolor.style.display = "block";
                            removewhite.style.display = "none";
                            displayfullcolor.style.display = "none";
                            Artcolorink.style.display= "none";
                        }
                        else
                        {
                            //console.log("SVG FULL COLOR NO EDIT");
                            displaycolor.style.display = "none";
                            displaynoeditcolor.style.display = "none";
                            removewhite.style.display = "none";
                            displayfullcolor.style.display = "block";
                            Artcolorink.style.display= "none";
                        }
                    }
                    editArt.style.display = 'block';
                    //changeClipArtMenuSize();
                    newArt.style.display = 'none';
                    //activateMenu(e.target.type);
                    font = 'ABeeZee-Regular';
                    setTitleFont();
                }
                else
                {
                    console.log("Internal error display info");
                }
                
            }
        }

        function applyimgfilters(o)
        {
            if (o.target.filters != undefined && o.target.filters.length > 0)
            {
                o.target.applyFilters(function()
                {
                    canvasActive.renderAll();
                });
            } 
        }


        function setcolor(element)
        {
            idcolorselected = element.id;
            colorselected = element.style.backgroundColor;
            var listcircles = document.getElementsByClassName('color1');
            for (var i = 0; i < listcircles.length; i++) 
            {
                listcircles[i].style.border = "1px solid #eee";
            }
            element.style.border = "2px solid #31B0D5";
        }

        /**
         * Validate SVG layer
         * 
         * @return boolean
         */

        function validate_layer(element, arraycolors) 
        {
            if (arraycolors.length > 0) {
                for (var i = 0; i < arraycolors.length; i++) {
                    if (arraycolors[i].id.split(".")[0] === element.id.split(".")[0]) {
                        return true;
                    }
                }
                return false;
            } else {
                return false;
            }
        }

        /**
         * Change RGB color to HEX color
         * 
         * @return string
         */

        function rgb2hex(rgb) 
        {
            if (rgb != null) 
            {
                value = rgb;
                rgb = rgb.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i);
                if ((rgb && rgb.length === 4)) 
                {
                    return "#" + ("0" + parseInt(rgb[1], 10).toString(16)).slice(-2) + ("0" + parseInt(rgb[2], 10).toString(16)).slice(-2) + ("0" + parseInt(rgb[3], 10).toString(16)).slice(-2);
                }
                else 
                {
                    return value;
                }
            }
            else 
            {
                return "";
            }
        }
   
        /**
        * Set the default values of the corners objects in the print area
        *
        * @return void
        */
        fabric.Object.prototype.transparentCorners = false;
        fabric.Canvas.prototype.customiseControls({
            tr: {
                    action: 'remove',
                    cursor: 'pointer'
            },
            bl: {
                    action: 'scale',
                    cursor: 'pointer'
            },
            br: {
                    action: 'scale',
                    cursor: 'pointer'
            },
            ml: {
                    action: 'scaleX',
                    cursor: 'pointer'
            },
            mr: {
                    action: 'scaleX',
                    cursor: 'pointer'
            },
            mb: {
                    action: 'scaleY',
                    cursor: 'pointer'
            },
            mt: {
                    action: 'scaleY',
                    cursor: 'pointer'
            },
        }, function() {
            canvaslist.forEach(canvas => {
                canvas.renderAll();
            });
        } );

        function initcanvas(e)
        {
            var modifiedObject = e.target;
            if(modifiedObject.className == "canvasShirt")
            {
                var textarea = document.getElementById('textarea');
                textarea.value = "";
                font = 'ABeeZee-Regular ';
                setTitleFont();
                deselectAllCanvases();
                save();
            }
        }

        $("#ds-design-area").click(function(e)
        {
            initcanvas(e);
        });

        /**
        * Save tmp design after change the products
        * 
        * @return void
        */
        function savetmpdesign()
        {
            var designtmplist = document.getElementById("designtmplist");
            designtmplist.innerHTML = "";            
            canvasdesignlist = [];
            currentdesign.arrayside = [];
            canvaslist.forEach(canvas => 
            {
                if(canvas.getObjects().length > 0)
                {
                    var designtmp =  {design:null,side:canvas.contextContainer.canvas.id, canvas:null,img:null,svg:null};
                    designtmp.design = JSON.parse(JSON.stringify(canvas));
                    designtmp.canvas = canvas;
                    designtmp.img = canvas.toDataURL('image/png');
                    designtmp.svg = canvas.toSVG();
                    designtmp.productimg = canvas.productimg;
                    designtmp.width = canvas.width;
                    designtmp.height = canvas.height;
                    designtmp.left = canvas.left;
                    designtmp.top = canvas.top;
                    canvasdesignlist.push(designtmp); 
                    currentdesign.arrayside.push(designtmp); 
                }
            });

        }

        /**
        * show and hide the upload button after accept the upload terms
        * 
        * @return void
        */
        function hideshowbutton(element) 
        {
            if (element.checked) 
            {
                document.getElementById("upload").style.display = "block";
            }
            else 
            {
                document.getElementById("upload").style.display = "none";
            }
        }

        /**
        * Preview upload clipart
        * 
        * @return void
        */
        function uploadImage()
        {
            var preview = document.createElement('img');
            preview.id= objId;
            preview.className = "uploadpreview";
            objId++;
            
            var file =  document.getElementById('file').files[0]; 
            var reader = new FileReader();
            reader.onload = function ()
            {
                preview.src = reader.result;
            }
            //SIZING THE IMG PREVIEW BEING UPLOADED
            preview.style.width = "10vw";
            preview.style.height = "10vw";
            if(file)
            {
                preview.src = reader.readAsDataURL(file);
                imageUploaded = true; //set for pricing purposes
            } 
            else
            {
                preview.src = "";
            }
            document.getElementById("uploadpreview").appendChild(preview);    
            
        }

        /**
        * 
        * Remove the white background in the upload image
        * 
        * @return void
        */

        function RemoveWhite(element) 
        {
            colorChanged = true;
            $(".list-group-item").removeClass("active");
            $(this).addClass("active");
            var object = canvasActive.getActiveObject();
            if (object.type == "image") 
            {
                if (element.checked) 
                {
                    var filter = new fabric.Image.filters.RemoveWhite({
                        threshold: 60,
                        distance: 150
                    });
                    object.filters.push(filter);
                }
                else 
                {
                    object.filters = [];
                }

                object.applyFilters(canvasActive.renderAll.bind(canvasActive));
                save();
            }
        }

        function loaddesigns(saveddesignname)
        {
            pos = 0;
            saveddesignname.forEach(canvasdesign => {
                if(canvasdesign != null)
                {
                    canvaslist[pos].loadFromDatalessJSON(canvasdesign, canvaslist[pos].renderAll.bind(canvaslist[pos]), function(o, object)
                    {
                        object.set('lockUniScaling', true);
                        if (o.type === 'image')
                        {
                            object.type = "image";
                            if (o.filters != undefined || object.filters.length > 0)
                            {
                                object.applyFilters(function()
                                {
                                    canvaslist[pos].renderAll(canvaslist[pos]);
                                });
                            } 
                        }
                        else
                        {
                            canvaslist[pos].renderAll();
                        }

                        object.setControlsVisibility({
                            ml: false,
                            mr: false,
                            mb: false,
                            mt: false,
                            mtr: false,
                            bl: true,
                            tr: true,
                            tl: true,
                            br: true,
                        });

                        object.customiseCornerIcons({
                            settings: {
                                    borderColor: '#4fc1f0',
                                    cornerSize: 40,
                                    cornerShape: 'circle',
                                    cornerBackgroundColor: 'rgba(100,100,100,0)',
                                    cornerPadding: 15,
                                    hasRotatingPoint: true,
                                },
                                tr: {
                                    icon: window.location.origin+ '/img/icon/x.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                bl: {
                                    icon: window.location.origin+ '/img/icon/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                br: {
                                    icon: window.location.origin+ '/img/icon/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                ml: {
                                    icon: window.location.origin+ '/img/icon/left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                mr: {
                                    icon: window.location.origin+ '/img/icon/right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                mb: {
                                    icon: window.location.origin+ '/img/icon/down.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                mt: {
                                    icon: window.location.origin+ '/img/icon/up.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                tl: {
                                    icon: window.location.origin+ '/img/icon/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                            }, 
                            function()
                            {
                                canvaslist[pos].renderAll();
                            }
                        );
                    });
                }
                pos++;
            });            
        }

        function loadtemplatedesigns(templatedesignname)
        {
            $.ajax({
                type:'GET',
                dataType: 'json', 
                data: {parameter: templatedesignname},
                url: window.location.origin + '/templatedesigninfoembroidery',
                success:function(data)
                {  
                    templatedesign = data.design;
                    data.product = product ;
                    currentdesign.product = product;
                    enableproductsizes();
                    cleanInputQuantity();
                    document.getElementById("product_name").innerHTML = data.product.parent.name;
                    document.getElementById("current_product_color").innerHTML = data.product.color.name;
                    var description_label = '<p><strong>Brand:</strong> ' + data.product.brand + ' </p>';
                    description_label += '<p><strong>Size:</strong> ' + data.product.parent.sizes[0].name  + '-' + data.product.parent.sizes[data.product.parent.sizes.length -1].name + '  <a href="javascript:void(0)" data-toggle="modal" data-target="#sizechartmodal"> size chart</a></p>';
                    description_label += '<p><strong>Fabric:</strong> ' + data.product.fabric + '</p>';
                    description_label += '<p><a href="#productlongdescription" data-toggle="collapse" id="more-details" class="collapsestart" onclick="moreless(this);"> More Details </a></p>';
                    document.getElementById("description_label").innerHTML = description_label;
                    var sidesinfo = ""; 
                    var innersinfo = ""; 
                    var countsides = 0;
                    var countinners = 0;  
                    canvaslist = [];
                    if(data.product.sides.length > 0)
                    {   
                        document.getElementById("carousel-sides").innerHTML = "";
                        document.getElementById("carousel-inner").innerHTML = "";
                        data.product.sides.forEach(side => {
                            if(side.pivot.enable == 1  &&  side.printareas.length > 0)
                            {  
                                if(countsides == 0)
                                {
                                    sidesinfo += ' <li class="active"  data-target="#myCarousel" data-slide-to="'+ countsides +'"><img id="frontActiveImage" class="img-responsive" src="' + window.location.origin + '/img/product/' + side.pivot.image +  '" onclick="setcanvas(' + (countsides+1) + ');"></li>';
                                    innersinfo += '<div id="'+side.slug+'" class="item active">';
                                        innersinfo += '<div id="'+side.slug+'CanvasShirt" class="canvasShirt" style="border: 0px solid rgb(238, 238, 238); width: 743px; height: 810px; min-height: 728px; background-image: url(' + window.location.origin + '/img/product/' + side.pivot.image +  ');">';
                                            data.product.printareas.forEach(printarea => { 
                                            if(printarea.side == side.slug)
                                            {  
                                                innersinfo += '<div id="'+printarea.slug+'canvas-wrapper" style="width: '+printarea.width+'px; height: '+printarea.height+'px; border: 0px solid rgb(50, 167, 224); position: absolute; top: '+printarea.top+'px; left: '+printarea.left+'px;">';
                                                    //innersinfo += '<div class="canvas-container" style="width: '+printarea.width+'px; height: '+printarea.height+'px;  position: relative; user-select: none;">';
                                                        innersinfo += '<canvas id="'+printarea.slug+'Canvas" style="border: 0px solid rgb(0, 0, 0); touch-action: none; width: '+printarea.width+'px; height: '+printarea.height+'px;top: 0px; left:0px;"></canvas> ';
                                                        innersinfo += '<div id="'+printarea.slug+'desingerror" class="tooltip-outline error-tooltip" style="left: 82px; display: none;">';
                                                            innersinfo += '<div class="clearfix">';
                                                                innersinfo += '<small style="color: red;">Your Art/Work exceeds the print area</small>';
                                                            innersinfo += '</div>';
                                                        innersinfo += '</div>';
                                                    //innersinfo += '</div>';
                                                innersinfo += '</div>';
                                            }
                                        });
                                        innersinfo += '</div> ';
                                        innersinfo += '<div class="carousel-caption">';
                                            innersinfo += '<p>'+side.name+'</p>';
                                        innersinfo += '</div>';
                                    innersinfo += '</div>';
                                }
                                else
                                {   
                                    sidesinfo += ' <li   data-target="#myCarousel" data-slide-to="'+ countsides +'"><img id="frontActiveImage" class="img-responsive" src="' + window.location.origin + '/img/product/' + side.pivot.image +  '" onclick="setcanvas(' + (countsides+1) + ');"></li>';
                                    innersinfo += '<div id="'+side.slug+'" class="item">';
                                        innersinfo += '<div id="'+side.slug+'CanvasShirt" class="canvasShirt" style="border: 0px solid rgb(238, 238, 238); width: 743px; height: 810px; min-height: 728px; background-image: url(' + window.location.origin + '/img/product/' + side.pivot.image +  ');">';
                                            data.product.printareas.forEach(printarea => {
                                                if(printarea.side == side.slug)
                                                {  
                                                    innersinfo += '<div id="'+printarea.slug+'canvas-wrapper" style="width: '+printarea.width+'px; height: '+printarea.height+'px; border: 0px solid rgb(50, 167, 224); position: absolute; top: '+printarea.top+'px; left: '+printarea.left+'px;">';
                                                        innersinfo += '<canvas id="'+printarea.slug+'Canvas" style="border: 0px solid rgb(0, 0, 0); touch-action: none; width: '+printarea.width+'px; height: '+printarea.height+'px;top: 0px; left:0px;"></canvas> ';
                                                        innersinfo += '<div id="'+printarea.slug+'desingerror" class="tooltip-outline error-tooltip" style="left: 82px; display: none;">';
                                                            innersinfo += '<div class="clearfix">';
                                                                innersinfo += '<small style="color: red;">Your Art/Work exceeds the print area</small>';
                                                            innersinfo += '</div>';
                                                        innersinfo += '</div>';
                                                    innersinfo += '</div>';
                                                }
                                            });
                                        innersinfo += '</div> ';
                                        innersinfo += '<div class="carousel-caption">';
                                            innersinfo += '<p>'+side.name+'</p>';
                                        innersinfo += '</div>';
                                    innersinfo += '</div>';
                                    
                                }
                                countsides ++;
                            }
                        });
                        document.getElementById("carousel-sides").innerHTML = sidesinfo;                       
                        document.getElementById("carousel-inner").innerHTML = innersinfo;
                    }
                }
                ,
                complete: function(data){
                    product.printareas.forEach(printarea => {
                        var canvasside = new fabric.Canvas(printarea.slug+'Canvas');
                            canvasside.side = printarea.side;
                            canvasside.name = printarea.slug;
                            canvasside.left = printarea.left;
                            canvasside.top = printarea.top;
                            product.sides.forEach(side=>{
                                if(side.slug == printarea.side)
                                {
                                    canvasside.productimg = side.pivot.image;
                                }
                            });
                            canvasside.setWidth(printarea.width);
                            canvasside.setHeight(printarea.height);
                            initCenteringGuidelines(canvasside);  
                            canvasside.undo = [];
                            canvasside.redo = [];
                            canvasside.state = null; 
                        canvaslist.push(canvasside);
                        canvasside.on('mouse:up', function(e)
                        {
                            canvasActive=this;
                            displayinfo(e);
                            showcorners(e);
                        });
                        canvasside.on('mouse:down', function(e)
                        {
                            showcorners(e);
                        });
                        canvasside.on('object:added', function(e)
                        {
                            displayinfo(e);
                            applyimgfilters(e);
                            showcorners(e);
                        });
                        canvasside.on('object:moving',function(e)
                        {
                            hidecorners(e);
                        });
                        canvasside.on('object:removed',function(e)
                        {
                            initcanvas(e);
                        });
                    });

                    canvasActive = canvaslist[0];
                    if(templatedesign != null/*canvasdesignlist.length > 0*/)
                    {
                        pos = 0;
                        templatedesign.forEach(canvasdesign => 
                        {
                            if(canvasdesign != null)
                            {
                                
                                canvaslist[pos].loadFromDatalessJSON(canvasdesign, canvaslist[pos].renderAll.bind(canvaslist[pos]), function(o, object)
                                {
                                    console.log(o);
                                    console.log(object);
                                    var src = o.src;
                                    object.set('lockUniScaling', true);
                                    if (o.type === 'image')
                                    {
                                        object.set('src', src.toLowerCase());
                                        object.type = "image";
                                        if (o.filters != undefined || object.filters.length > 0)
                                        {
                                            object.applyFilters(function()
                                            {
                                                canvaslist[pos].renderAll(canvaslist[pos]);
                                            });
                                        } 
                                    }
                                    
                                    else if (o.type === 'text')
                                    {
                                        fabric.Text.fromObject(o, function (o) {
                                           canvaslist[pos].renderAll(canvaslist[pos]);
                                        });
                                       
                                    }
                                    else
                                    {
                                        canvaslist[pos].renderAll.bind(canvaslist[pos]);
                                    }

                                    object.setControlsVisibility({
                                        ml: false,
                                        mr: false,
                                        mb: false,
                                        mt: false,
                                        mtr: false,
                                        bl: true,
                                        tr: true,
                                        tl: true,
                                        br: true,
                                    });

                                    object.customiseCornerIcons({
                                        settings: {
                                                borderColor: '#4fc1f0',
                                                cornerSize: 40,
                                                cornerShape: 'circle',
                                                cornerBackgroundColor: 'rgba(100,100,100,0)',
                                                cornerPadding: 15,
                                                hasRotatingPoint: true,
                                            },
                                            tr: {
                                                icon: window.location.origin+ '/img/icon/x.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                            },
                                            bl: {
                                                icon: window.location.origin+ '/img/icon/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                            },
                                            br: {
                                                icon: window.location.origin+ '/img/icon/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                            },
                                            ml: {
                                                icon: window.location.origin+ '/img/icon/left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                            },
                                            mr: {
                                                icon: window.location.origin+ '/img/icon/right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                            },
                                            mb: {
                                                icon: window.location.origin+ '/img/icon/down.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                            },
                                            mt: {
                                                icon: window.location.origin+ '/img/icon/up.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                            },
                                            tl: {
                                                icon: window.location.origin+ '/img/icon/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                            },
                                        }, 
                                        function()
                                        {
                                           canvaslist.forEach(canvas => 
                                            {
                                                canvas.renderAll();
                                            });
                                        }
                                    );
                                    
                                });
                               
                            }
                            pos++;
                        });
                    }
                }
            });
            
        }

        function saveCategory()
        {
            var childcategory = document.getElementById('childcategory').value;
            var parentcategory = document.getElementById('parentcategory').value;
            $.ajax({
                type: "POST",
                url: window.location.origin + '/createcategoryembroidery',
                data: { childcategory: childcategory,parentcategory: parentcategory},
                beforeSend: function() {
                },
                success: function(data) {
                   if(data.error != '')
                    {
                        alert(data.error);
                        document.getElementById('childcategory').value = "";
                    }
                    else
                    {
                        var optionsall = "";
                        var options = "";
                        for (var i = 0; i < data.categories.length; i++) 
                        {   
                            var tmpcategory = data.categories[i];
                            optionsall += ("<option value='"+tmpcategory.id+"'>"+tmpcategory.name+"</option>");
                            options += ("<option value='"+tmpcategory.id+"'>"+tmpcategory.name+"</option>");

                            for (var j = 0; j < tmpcategory.subcategories.length; j++) 
                            {
                                var tmpsubcategory = tmpcategory.subcategories[j];
                                optionsall += ("<option value='"+tmpsubcategory.category_id +'_' + tmpsubcategory.id+"'>"+tmpsubcategory.name+"</option>");
                            }
                        }
                        document.getElementById('oldcategory[]').innerHTML = optionsall;
                        document.getElementById('parentcategory').innerHTML = options;
                        document.getElementById('childcategory').value = "";
                    }
                   
                },
                error: function(error) {
                    console.log("error in method saveCategory");
                    console.log(error);
                }
            });
        }

        /**
        * Load tmp design after load product changed
        * 
        * @return void
        */
        function loadtmpdesigns()
        {
            pos = 0;
            canvasdesignlist.forEach(canvasdesign => {
                if(canvasdesign.design != null)
                {
                    canvaslist[pos].loadFromDatalessJSON(canvasdesign.design, canvaslist[pos].renderAll.bind(canvaslist[pos]), function(o, object)
                    {
                        object.set('lockUniScaling', true);
                        if (o.type === 'image')
                        {
                            object.type = "image";
                            if (o.filters != undefined || object.filters.length > 0)
                            {
                                object.applyFilters(function()
                                {
                                    canvaslist[pos].renderAll(canvaslist[pos]);
                                });
                            } 
                        }
                        else
                        {
                            canvaslist[pos].renderAll();
                        }

                        object.setControlsVisibility({
                            ml: false,
                            mr: false,
                            mb: false,
                            mt: false,
                            mtr: false,
                            bl: true,
                            tr: true,
                            tl: true,
                            br: true,
                        });

                        object.customiseCornerIcons({
                            settings: {
                                    borderColor: '#4fc1f0',
                                    cornerSize: 40,
                                    cornerShape: 'circle',
                                    cornerBackgroundColor: 'rgba(100,100,100,0)',
                                    cornerPadding: 15,
                                    hasRotatingPoint: true,
                                },
                                tr: {
                                    icon: window.location.origin+ '/img/icon/x.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                bl: {
                                    icon: window.location.origin+ '/img/icon/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                br: {
                                    icon: window.location.origin+ '/img/icon/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                ml: {
                                    icon: window.location.origin+ '/img/icon/left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                mr: {
                                    icon: window.location.origin+ '/img/icon/right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                mb: {
                                    icon: window.location.origin+ '/img/icon/down.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                mt: {
                                    icon: window.location.origin+ '/img/icon/up.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                                tl: {
                                    icon: window.location.origin+ '/img/icon/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),
                                },
                            }, 
                            function()
                            {
                                canvaslist[pos].renderAll();
                            }
                        );
                    });
                }
                pos++;
            });
        }

        $(function() {
            $(document).ready(function()
            {
                var bar = $('.bar');
                var percent = $('.percent');

                $('form').ajaxForm({
                    beforeSend: function() 
                    {
                        document.getElementById("uploadprogressbar").style.display = "block";
                        var percentVal = '0%';
                        bar.width(percentVal)
                        percent.html(percentVal);
                    },
                    uploadProgress: function(event, position, total, percentComplete) {
                        var percentVal = percentComplete + '%';
                        bar.width(percentVal)
                        percent.html(percentVal);
                    },
                    complete: function(xhr) {
                        clipartuploadedcolorlist = xhr.responseJSON.colorlist;
                        adduploadimg(xhr.responseJSON.clipart_id);
                        document.getElementById("termsOfUse").checked = false;
                        document.getElementById("file").value = "";
                        document.getElementById("upload").style.display = "none";
                        document.getElementById("uploadprogressbar").style.display = "none";
                        var percentVal = '0%';
                        bar.width(percentVal)
                        percent.html(percentVal);
                    }
                });
            }); 
        });

        radiusvalue.value = radius.value;
        spacingvalue.value = spacing.value;

        radius.oninput = function() 
        {
            $('#radiusvalue').val(this.value);
            var obj = canvasActive.getActiveObject();
            if (obj)
            {
                default_text = obj.getText();
                props = obj.toObject();
                if (this.value == 0)
                {
                    this.value = 1;
                }
                delete props['type'];
                props['textAlign'] = 'center';
                props['reverse'] = false;
                props['spacing'] = $('#spacing').val();
                if ($(this).val() > 0)
                {
                    props['arcangle'] = Math.abs(this.value);
                } 
                else
                {
                    props['arcangle'] = this.value;
                }
                props['type'] = 'curvedText';
                props['id'] = obj.id;
                var textSample = new fabric.CurvedText(default_text, props);
                textSample.setControlsVisibility({
                    ml: false,
                    mr: false,
                    mb: false,
                    mt: false,
                    mtr: false,
                    bl: true,
                    tr: true,
                    tl: true,
                    br: true,
                });
                textSample.customiseCornerIcons({
                    settings: {
                        borderColor: '#4fc1f0',
                        cornerSize: 40,
                        cornerShape: 'circle',
                        cornerBackgroundColor: 'rgba(100,100,100,0)',
                        cornerPadding: 15,
                        hasRotatingPoint: true,
                    },
                    tr: {
                        icon: window.location.origin + '/img/icon/x.png?v=' + Math.floor((Math.random() * 10000) + 1),
                    },
                    bl: {
                        icon: window.location.origin + '/img/icon/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                    },
                    br: {
                        icon: window.location.origin + '/img/icon/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                    },
                    ml: {
                        icon: window.location.origin + '/img/icon/left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                    },
                    mr: {
                        icon: window.location.origin + '/img/icon/right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                    },
                    mb: {
                        icon: window.location.origin + '/img/icon/down.png?v=' + Math.floor((Math.random() * 10000) + 1),
                    },
                    mt: {
                        icon: window.location.origin + '/img/icon/up.png?v=' + Math.floor((Math.random() * 10000) + 1),
                    },
                    tl: {
                        icon: window.location.origin + '/img/icon/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),
                    },
                });
                canvasActive.remove(obj);
                canvasActive.add(textSample).renderAll();
                canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
            }
            canvasActive.renderAll();
        }

        spacing.oninput = function() 
        {
            $('#spacingvalue').val(this.value);
            var obj = canvasActive.getActiveObject();
            if (obj)
            {
                default_text = obj.getText();
                props = obj.toObject();
                delete props['type'];
                props['textAlign'] = 'center';
                props['spacing'] = this.value;
                props['arcangle'] = $('#radius').val();
                props['reverse'] = false;
                props['type'] = 'curvedText';
                props['id'] = obj.id;
                var textSample = new fabric.CurvedText(default_text, props);
                textSample.setControlsVisibility({
                    ml: false,
                    mr: false,
                    mb: false,
                    mt: false,
                    mtr: false,
                    bl: true,
                    tr: true,
                    tl: true,
                    br: true,
                });
                textSample.customiseCornerIcons({
                    settings: {
                        borderColor: '#4fc1f0',
                        cornerSize: 40,
                        cornerShape: 'circle',
                        cornerBackgroundColor: 'rgba(100,100,100,0)',
                        cornerPadding: 15,
                        hasRotatingPoint: true,
                    },
                    tr: {
                        icon: window.location.origin + '/img/icon/x.png?v=' + Math.floor((Math.random() * 10000) + 1),
                    },
                    bl: {
                        icon: window.location.origin + '/img/icon/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                    },
                    br: {
                        icon: window.location.origin + '/img/icon/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                    },
                    ml: {
                        icon: window.location.origin + '/img/icon/left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                    },
                    mr: {
                        icon: window.location.origin + '/img/icon/right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                    },
                    mb: {
                        icon: window.location.origin + '/img/icon/down.png?v=' + Math.floor((Math.random() * 10000) + 1),
                    },
                    mt: {
                        icon: window.location.origin + '/img/icon/up.png?v=' + Math.floor((Math.random() * 10000) + 1),
                    },
                    tl: {
                        icon: window.location.origin + '/img/icon/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),
                    },
                });
                canvasActive.remove(obj);
                canvasActive.add(textSample).renderAll();
                canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
            }
            canvasActive.renderAll();
        }

        $("input[type=number]").bind('keyup input', function()
        {
            if ($(this).attr("id") == "radiusvalue" || $(this).attr("id") == "spacingvalue")
            {
                var obj = canvasActive.getActiveObject();
                if (obj)
                {
                    default_text = obj.getText();
                    props = obj.toObject();
                    if ($(this).attr("id") == "radiusvalue")
                    {
                        delete props['type'];
                        props['textAlign'] = 'center';
                        if ($(this).val() == 0)
                        {
                            props['arcangle'] = 1;
                            $('#radius').val(1);
                        } 
                        else
                        {
                            props['arcangle'] = $(this).val();
                            $('#radius').val(this.value);
                        }
                        props['spacing'] = $('#spacing').val();
                        props['reverse'] = false;
                        props['type'] = 'curvedText';
                        props['id'] = obj.id;
                        var textSample = new fabric.CurvedText(default_text, props);
                        textSample.setControlsVisibility({
                            ml: false,
                            mr: false,
                            mb: false,
                            mt: false,
                            mtr: false,
                            bl: true,
                            tr: true,
                            tl: true,
                            br: true,
                        });
                        textSample.customiseCornerIcons({
                            settings: {
                                borderColor: '#4fc1f0',
                                cornerSize: 40,
                                cornerShape: 'circle',
                                cornerBackgroundColor: 'rgba(100,100,100,0)',
                                cornerPadding: 15,
                                hasRotatingPoint: true,
                            },
                            tr: {
                                icon: window.location.origin + '/img/icon/x.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            bl: {
                                icon: window.location.origin + '/img/icon/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            br: {
                                icon: window.location.origin + '/img/icon/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            ml: {
                                icon: window.location.origin + '/img/icon/left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            mr: {
                                icon: window.location.origin + '/img/icon/right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            mb: {
                                icon: window.location.origin + '/img/icon/down.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            mt: {
                                icon: window.location.origin + '/img/icon/up.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            tl: {
                                icon: window.location.origin + '/img/icon/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                        });
                    } 
                    else if ($(this).attr("id") == "spacingvalue")
                    {
                        delete props['type'];
                        props['textAlign'] = 'center';
                        props['spacing'] = this.value;
                        props['arcangle'] = $('#radius').val();
                        props['reverse'] = false;
                        props['type'] = 'curvedText';
                        props['id'] = obj.id;
                        var textSample = new fabric.CurvedText(default_text, props);
                        textSample.setControlsVisibility({
                            ml: false,
                            mr: false,
                            mb: false,
                            mt: false,
                            mtr: false,
                            bl: true,
                            tr: true,
                            tl: true,
                            br: true,
                        });
                        textSample.customiseCornerIcons({
                            settings: {
                                borderColor: '#4fc1f0',
                                cornerSize: 40,
                                cornerShape: 'circle',
                                cornerBackgroundColor: 'rgba(100,100,100,0)',
                                cornerPadding: 15,
                                hasRotatingPoint: true,
                            },
                            tr: {
                                icon: window.location.origin + '/img/icon/x.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            bl: {
                                icon: window.location.origin + '/img/icon/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            br: {
                                icon: window.location.origin + '/img/icon/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            ml: {
                                icon: window.location.origin + '/img/icon/left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            mr: {
                                icon: window.location.origin + '/img/icon/right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            mb: {
                                icon: window.location.origin + '/img/icon/down.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            mt: {
                                icon: window.location.origin + '/img/icon/up.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                            tl: {
                                icon: window.location.origin + '/img/icon/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),
                            },
                        });
                        $('#spacing').val(this.value);
                    } 
                    save();
                    canvasActive.remove(obj);
                    canvasActive.add(textSample).renderAll();
                    canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                }
                canvasActive.renderAll();
            }
        });



        /**
        * Put the check mark in the active color circle
        * 
        * @return void
        */
        function selectcolors()
        {
            var listcircles = document.getElementsByClassName('block');
            for (var i = 0; i < listcircles.length; i++)
            {
                if (listcircles[i].id.indexOf('artcolor') != -1) 
                {
                    listcircles[i].classList.remove("animate");
                    listcircles[i].classList.remove("transparent2");
                    listcircles[i].style.border = "1px solid #eee";
                }
            }
        }

        /**
        * zoom more the active design
        * 
        * @return void
        */
        $('#zoomin').click(function() 
        {
            var valueadd = 0.5;       
            var zoomvalue = Number(scale) + valueadd;
            document.getElementById(canvasActive.side +  'CanvasShirt').style.transform = "scale(" + zoomvalue + ")";       
        });


        /**
        * zoom less the active design
        * 
        * @return void
        */
        $('#zoomout').click(function() 
        {
            var zoomvalue = 1;
            document.getElementById(canvasActive.side +  'CanvasShirt').style.transform = "scale(" + zoomvalue + ")";       
        });

        /**
        * Save the action in the active design
        * 
        * @return void
        */
        function save()
        {
            $('#redo').prop('disabled', true);
            if (canvasActive.state)
            {
                canvasActive.undo.push(canvasActive.state);
                $('#undo').prop('disabled', false);
            }
            canvasActive.state = JSON.stringify(canvasActive.toDatalessJSON());
        }

        /**
        * Save the current state in the redo stack, reset to a state in the undo stack, and enable the buttons accordingly.
        * Or, do the opposite (redo vs. undo)
        * @param playStack which stack to get the last state from and to then render the canvas as
        * @param saveStack which stack to push current state into
        * @param buttonsOn jQuery selector. Enable these buttons.
        * @param buttonsOff jQuery selector. Disable these buttons.
        */
        function replay(playStack, saveStack, buttonsOn, buttonsOff) 
        {
            saveStack.push(canvasActive.state);
            canvasActive.state = playStack.pop();
            var on = $(buttonsOn);
            var off = $(buttonsOff);
            // turn both buttons off for the moment to prevent rapid clicking
            on.prop('disabled', true);
            off.prop('disabled', true);
            canvasActive.clear();
            canvasActive.loadFromDatalessJSON(canvasActive.state, canvasActive.renderAll.bind(canvasActive), function(o, object) 
            {
                object.setControlsVisibility({
                    ml: false,
                    mr: false,
                    mb: false,
                    mt: false,
                    mtr: false,
                    bl: true,
                    tr: true,
                    tl: true,
                    br: true,
                });

                object.customiseCornerIcons({
                        settings: {
                            borderColor: '#4fc1f0',
                            cornerSize: 40,
                            cornerShape: 'circle',
                            cornerBackgroundColor: 'rgba(100,100,100,0)',
                            cornerPadding: 15,
                            hasRotatingPoint: true,
                        },
                        tr: {
                            icon: window.location.origin + '/img/icon/x.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        bl: {
                            icon: window.location.origin + '/img/icon/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        br: {
                            icon: window.location.origin + '/img/icon/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        ml: {
                            icon: window.location.origin + '/img/icon/left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        mr: {
                            icon: window.location.origin + '/img/icon/right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        mb: {
                            icon: window.location.origin + '/img/icon/down.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        mt: {
                            icon: window.location.origin + '/img/icon/up.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                        tl: {
                            icon: window.location.origin + '/img/icon/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),
                        },
                    }, function()
                    {
                        canvasActive.renderAll();
                    });
                on.prop('disabled', false);
                if (playStack.length) 
                {
                    off.prop('disabled', false);
                }
            });

        }

        /**
        * Make undo in the active design
        * 
        * @return void
        */
        $('#undo').click(function()
        {
            replay(canvasActive.undo, canvasActive.redo, '#redo', this);
        });


        /**
        * Make redo in the active design
        * 
        * @return void
        */
        $('#redo').click(function()
        {
            replay(canvasActive.redo, canvasActive.undo, '#undo', this);
        });

        /**
        * Make a copy of the object
        * 
        * @return void
        */

        function copyclipart() {
            var copyData = canvasActive.getActiveObject().toObject();
            fabric.util.enlivenObjects([copyData], function(objects) 
            {
                objects.forEach(function(o) 
                {
                    if (o.type === 'image')
                    {
                        o.type = "image";
                        if (o.filters != undefined || o.filters.length > 0)
                        {
                            o.applyFilters(function()
                            {
                                canvasActive.renderAll();
                            });
                        } 
                    }
                    else
                    {
                        canvasActive.renderAll();
                    }
                    o.set('top', o.top + 15);
                    o.set('left', o.left + 15);
                    o.setControlsVisibility({
                        ml: false,
                        mr: false,
                        mb: false,
                        mt: false,
                        mtr: false,
                        bl: true,
                        tr: true,
                        tl: true,
                        br: true,
                    });

                    o.customiseCornerIcons({
                        settings: {
                            borderColor: '#4fc1f0',
                            cornerSize: 40,
                            cornerShape: 'circle',
                            cornerBackgroundColor: 'rgba(100,100,100,0)',
                            cornerPadding: 15,
                            hasRotatingPoint: true,
                        },
                    tr: {
                        icon: window.location.origin + '/img/icon/x.png?v=' + Math.floor((Math.random() * 10000) + 1),
                    },
                    bl: {
                        icon: window.location.origin + '/img/icon/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                    },
                    br: {
                        icon: window.location.origin + '/img/icon/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                    },
                    ml: {
                        icon: window.location.origin + '/img/icon/left.png?v=' + Math.floor((Math.random() * 10000) + 1),
                    },
                    mr: {
                        icon: window.location.origin + '/img/icon/right.png?v=' + Math.floor((Math.random() * 10000) + 1),
                    },
                    mb: {
                        icon: window.location.origin + '/img/icon/down.png?v=' + Math.floor((Math.random() * 10000) + 1),
                    },
                    mt: {
                        icon: window.location.origin + '/img/icon/up.png?v=' + Math.floor((Math.random() * 10000) + 1),
                    },
                    tl: {
                        icon: window.location.origin + '/img/icon/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),
                    },
                });
                canvasActive.add(o);
                });
                save();
                canvasActive.discardActiveObject();
                canvasActive.setActiveObject(canvasActive.item(canvasActive.getObjects().length - 1));
                canvasActive.renderAll(canvasActive);
            });
        }

        function closemodal(element)
        {
            $('#' + element).modal('hide');
        }

        function showmodal(modalname)
        {
            $('#' + modalname).modal({
                backdrop: 'static',
                keyboard: false
            });
        }

        function showproductview()
        {  
            document.getElementById('listproduct').style.display = 'block'; 
            document.getElementById("filters-colum").style.display = 'none';
            document.getElementById("btn-done").style.display = 'none';
            document.getElementById("sort-by").style.display = 'none';
            document.getElementById("data-colum").style.display = 'block';
            document.getElementById('singleproduct').style.display = 'none'; 
            $("#productmodal").modal({
                backdrop: 'static',
                keyboard: false
            });
            $("#productmodal").modal("show");
            showmodal("productmodal");
        }

        function setStroke(element)
        {
            colorChanged = true;
            $(".list-group-item").removeClass("active");
            $(this).addClass("active");
            var object = canvasActive.getActiveObject();
            stroke = element.value;
            if (stroke == 0)
            {
                object.setStrokeWidth(stroke);
                object.setStroke('transparent');
            } 
            else
            {
                object.setStrokeWidth(stroke);
                object.setStroke(object.laststrokecolor);
            }
            if (element.id == "strokewidth")
            {
                document.getElementById('strokewidthvalue').value = stroke;
            } 
            canvasActive.renderAll(canvasActive);
            save();
        }

        function ShowSaveShare()
        {
            canvasActive.discardActiveObject();
            savetmpdesign();
            canvasActive.renderAll();
            var num = 0;
            canvaslist.forEach(printarea=>{
                num+= printarea.getObjects().length;
            });
            if (num > 0)
            {
                var saveshareimages = "";

                document.getElementById('designnameshare').value = "";
                document.getElementById('to_email').value = "";
                document.getElementById('message').value = "";
                
                document.getElementById('design_name_area_only').style.display = "none";
                document.getElementById("loaderOnly").style.display = "none";
                document.getElementById("loaderEmail").style.display = "none";
                document.getElementById('designNameOnly').value = "";
                document.getElementById('SaveShareModalDiv').style.display = "block";
                if(canvasdesignlist.length == 1)
                {
                    saveshareimages+= '<div class="col-md-4"></div>';
                    canvasdesignlist.forEach(printarea=>
                    {
                        var scale = 0.25;
                        saveshareimages+= '<div class="col-md-4 thumbnail2"><div class="product-item" style="background-size: cover; background-position: center center;border: 1px solid;background-image: url('+window.location.origin+'/img/product/'+printarea.productimg+');position: relative;margin: auto;width: 743px;height: 810px; webkit-transform-origin: 0 0; transform-origin: 0 0; -webkit-transform: scale('+scale+') translate(-50%); transform: scale('+scale+') translate(-50%); left: 50%;"><img class="PreviewSave" src="'+printarea.img+'" class="img-responsive" style="position: absolute; width: '+printarea.width+'px; height: '+printarea.height+'px; top: '+printarea.top+'px; left:'+printarea.left+'px;"></div></div>';
                    });
                    saveshareimages+= '<div class="col-md-4"></div>';
                }
                else if(canvasdesignlist.length == 2)
                {
                    saveshareimages+= '<div class="col-md-2"></div>';
                    canvasdesignlist.forEach(printarea=>
                    {
                        var scale = 0.25;
                        saveshareimages+= '<div class="col-md-4 thumbnail2"><div class="product-item" style="background-size: cover; background-position: center center;border: 1px solid;background-image: url('+window.location.origin+'/img/product/'+printarea.productimg+');position: relative;margin: auto;width: 743px;height: 810px; webkit-transform-origin: 0 0; transform-origin: 0 0; -webkit-transform: scale('+scale+') translate(-50%); transform: scale('+scale+') translate(-50%); left: 50%;"><img class="PreviewSave" src="'+printarea.img+'" class="img-responsive" style="position: absolute; width: '+printarea.width+'px; height: '+printarea.height+'px; top: '+printarea.top+'px; left:'+printarea.left+'px;"></div></div>';
                    });
                    saveshareimages+= '<div class="col-md-2"></div>';
                }
                else if(canvasdesignlist.length == 3)
                {
                    canvasdesignlist.forEach(printarea=>
                    {
                        var scale = 0.25;
                        saveshareimages+= '<div class="col-md-4 thumbnail2"><div class="product-item" style="background-size: cover; background-position: center center;border: 1px solid;background-image: url('+window.location.origin+'/img/product/'+printarea.productimg+');position: relative;margin: auto;width: 743px;height: 810px; webkit-transform-origin: 0 0; transform-origin: 0 0; -webkit-transform: scale('+scale+') translate(-50%); transform: scale('+scale+') translate(-50%); left: 50%;"><img class="PreviewSave" src="'+printarea.img+'" class="img-responsive" style="position: absolute; width: '+printarea.width+'px; height: '+printarea.height+'px; top: '+printarea.top+'px; left:'+printarea.left+'px;"></div></div>';
                    });
                }
                else if(canvasdesignlist.length > 3)
                {
                    canvasdesignlist.forEach(printarea=>
                    {
                        var scale = 0.25;
                        saveshareimages+= '<div class="col-md-3 thumbnail2"><div class="product-item" style="background-size: cover; background-position: center center;border: 1px solid;background-image: url('+window.location.origin+'/img/product/'+printarea.productimg+');position: relative;margin: auto;width: 743px;height: 810px; webkit-transform-origin: 0 0; transform-origin: 0 0; -webkit-transform: scale('+scale+') translate(-50%); transform: scale('+scale+') translate(-50%); left: 50%;"><img class="PreviewSave" src="'+printarea.img+'" class="img-responsive" style="position: absolute; width: '+printarea.width+'px; height: '+printarea.height+'px; top: '+printarea.top+'px; left:'+printarea.left+'px;"></div></div>';
                    });
                }
                
                document.getElementById("savedDesigns").innerHTML = saveshareimages;
                if (user != '' && user != undefined && user != null)
                {
                    document.getElementById('to_email').value = user.email;
                }
                $("#SaveShareModal").modal("show");
            }
            else
            {
                showalert('savesharealert', 'No design to save and share!', 'danger', 'Save & Share');
            }
        }

        function ShowGetPrice()
        {  
            canvasActive.discardActiveObject();
            savetmpdesign();
            canvasActive.renderAll();
            if (editdesign != null)
            {
                document.getElementById('AddKeepDesign').innerHTML = "Update Cart";
            } 
            else
            {
                document.getElementById('AddKeepDesign').innerHTML = "Add To Cart";
            }

            var num = 0;
            canvaslist.forEach(printarea=>{
                num+= printarea.getObjects().length;
            });

            var hasdesign = false;
            if (num > 0)
            {
                hasdesign = true;
                var getpriceimages = "";
                document.getElementById('product_style_area').style.display = 'block';
                document.getElementById('design_name_area').style.display = 'none';
                document.getElementById('AddKeepDesign').style.display = "block";
                document.getElementById('KeepDesign').style.display = "none";
                document.getElementById('finalcheckout').style.display = 'none';
                document.getElementById('cart_area').style.display = 'none';
                document.getElementById('continuedesign').style.display = 'inline';
                if(canvasdesignlist.length == 1)
                {
                    getpriceimages+= '<div class="col-md-4"></div>';
                    canvasdesignlist.forEach(printarea=>
                    {
                        var scale = 0.25;
                        getpriceimages+=' <div class="col-md-4 thumbnail2"><label for="'+printarea.canvas.name+'colors" id="'+printarea.canvas.name+'colors" name="'+printarea.canvas.name+'colors" style="font-size: 1.1rem;"></label><div style="background-size: cover; background-position: center center;border: 1px solid;background-image: url('+window.location.origin+'/img/product/'+printarea.productimg+');position: relative;margin: auto;width: 743px;height: 810px; webkit-transform-origin: 0 0; transform-origin: 0 0; -webkit-transform: scale('+scale+') translate(-50%); transform: scale('+scale+') translate(-50%); left: 50%;"><img class="PreviewSave" src="'+printarea.img+'" class="img-responsive" style="position: absolute; width: '+printarea.width+'px; height: '+printarea.height+'px; top: '+printarea.top+'px; left:'+printarea.left+'px;"></div></div>';
                    });
                    getpriceimages+= '<div class="col-md-4"></div>';
                }
                else if(canvasdesignlist.length == 2)
                {
                    getpriceimages+= '<div class="col-md-1"></div>';
                    canvasdesignlist.forEach(printarea=>
                    {
                        var scale = 0.25;
                        getpriceimages+=' <div class="col-md-4 thumbnail2"><label for="'+printarea.canvas.name+'colors" id="'+printarea.canvas.name+'colors" name="'+printarea.canvas.name+'colors" style="font-size: 1.1rem;"></label><div style="background-size: cover; background-position: center center;border: 1px solid;background-image: url('+window.location.origin+'/img/product/'+printarea.productimg+');position: relative;margin: auto;width: 743px;height: 810px; webkit-transform-origin: 0 0; transform-origin: 0 0; -webkit-transform: scale('+scale+') translate(-50%); transform: scale('+scale+') translate(-50%); left: 50%;"><img class="PreviewSave" src="'+printarea.img+'" class="img-responsive" style="position: absolute; width: '+printarea.width+'px; height: '+printarea.height+'px; top: '+printarea.top+'px; left:'+printarea.left+'px;"></div></div>';
                        getpriceimages+= '<div class="col-md-2"></div>';
                    });
                    getpriceimages+= '<div class="col-md-1"></div>';
                }
                else if(canvasdesignlist.length == 3)
                {
                    canvasdesignlist.forEach(printarea=>
                    {
                        var scale = 0.20;
                        getpriceimages+=' <div class="col-md-4 thumbnail2"><label for="'+printarea.canvas.name+'colors" id="'+printarea.canvas.name+'colors" name="'+printarea.canvas.name+'colors" style="font-size: 1.1rem;"></label><div style="background-size: cover; background-position: center center;border: 1px solid;background-image: url('+window.location.origin+'/img/product/'+printarea.productimg+');position: relative;margin: auto;width: 743px;height: 810px; webkit-transform-origin: 0 0; transform-origin: 0 0; -webkit-transform: scale('+scale+') translate(-50%); transform: scale('+scale+') translate(-50%); left: 50%;"><img class="PreviewSave" src="'+printarea.img+'" class="img-responsive" style="position: absolute; width: '+printarea.width+'px; height: '+printarea.height+'px; top: '+printarea.top+'px; left:'+printarea.left+'px;"></div></div>';
                    });
                }
                else if(canvasdesignlist.length > 3)
                {
                    canvasdesignlist.forEach(printarea=>
                    {
                        var scale = 0.25;
                        getpriceimages+=' <div class="col-md-6 thumbnail2"><label for="'+printarea.canvas.name+'colors" id="'+printarea.canvas.name+'colors" name="'+printarea.canvas.name+'colors" style="font-size: 1.1rem;"></label><div style="background-size: cover; background-position: center center;border: 1px solid;background-image: url('+window.location.origin+'/img/product/'+printarea.productimg+');position: relative;margin: auto;width: 743px;height: 810px; webkit-transform-origin: 0 0; transform-origin: 0 0; -webkit-transform: scale('+scale+') translate(-50%); transform: scale('+scale+') translate(-50%); left: 50%;"><img class="PreviewSave" src="'+printarea.img+'" class="img-responsive" style="position: absolute; width: '+printarea.width+'px; height: '+printarea.height+'px; top: '+printarea.top+'px; left:'+printarea.left+'px;"></div></div>';
                    });
                }
                
                document.getElementById("getpriceDesign").innerHTML = getpriceimages;
                document.getElementById("DesignNameDesigns").innerHTML = getpriceimages;
                    
               if(shoppingcart.items.length > 0)
                {
                    setColorsInk();
                    buildcart('Cart-Body');  
                    $('#productPicker').modal();  
                    document.getElementById("Cart").style.display = 'block';
                }    
                else
                {
                    setColorsInk();
                    if(shoppingcart.items.length > 0)
                    {
                        buildcart('Cart-Body');    
                    }
                    $('#productPicker').modal();
                }
            }
            if(shoppingcart.items.length > 0)
            {
                //console.log("shopping cart:");
                //console.log(shoppingcart);
                var getpriceimages = "";
                document.getElementById('product_style_area').style.display = 'none';
                document.getElementById('design_name_area').style.display = 'none';
                document.getElementById('AddKeepDesign').style.display = "none";
                document.getElementById('finalcheckout').style.display = 'inline';
                document.getElementById('continuedesign').style.display = 'inline';
                document.getElementById('cart_area').style.display = 'block';
                if(hasdesign)
                {
                    document.getElementById('product_style_area').style.display = 'block';
                    document.getElementById('AddKeepDesign').style.display = "block";
                    document.getElementById('KeepDesign').style.display = "none";
                    document.getElementById('finalcheckout').style.display = 'none';
                    document.getElementById('continuedesign').style.display = 'inline';
                }
                
                if(canvasdesignlist.length == 1)
                {
                    getpriceimages+= '<div class="col-md-4"></div>';
                    canvasdesignlist.forEach(printarea=>
                    {
                        var scale = 0.25;
                        getpriceimages+=' <div class="col-md-4 thumbnail2"><label for="'+printarea.canvas.name+'colors" id="'+printarea.canvas.name+'colors" name="'+printarea.canvas.name+'colors" style="font-size: 1.1rem;"></label><div style="background-size: cover; background-position: center center;border: 1px solid;background-image: url('+window.location.origin+'/img/product/'+printarea.productimg+');position: relative;margin: auto;width: 743px;height: 810px; webkit-transform-origin: 0 0; transform-origin: 0 0; -webkit-transform: scale('+scale+') translate(-50%); transform: scale('+scale+') translate(-50%); left: 50%;"><img class="PreviewSave" src="'+printarea.img+'" class="img-responsive" style="position: absolute; width: '+printarea.width+'px; height: '+printarea.height+'px; top: '+printarea.top+'px; left:'+printarea.left+'px;"></div></div>';
                    });
                    getpriceimages+= '<div class="col-md-4"></div>';
                }
                else if(canvasdesignlist.length == 2)
                {
                    getpriceimages+= '<div class="col-md-1"></div>';
                    canvasdesignlist.forEach(printarea=>
                    {
                        var scale = 0.25;
                        getpriceimages+=' <div class="col-md-4 thumbnail2"><label for="'+printarea.canvas.name+'colors" id="'+printarea.canvas.name+'colors" name="'+printarea.canvas.name+'colors" style="font-size: 1.1rem;"></label><div style="background-size: cover; background-position: center center;border: 1px solid;background-image: url('+window.location.origin+'/img/product/'+printarea.productimg+');position: relative;margin: auto;width: 743px;height: 810px; webkit-transform-origin: 0 0; transform-origin: 0 0; -webkit-transform: scale('+scale+') translate(-50%); transform: scale('+scale+') translate(-50%); left: 50%;"><img class="PreviewSave" src="'+printarea.img+'" class="img-responsive" style="position: absolute; width: '+printarea.width+'px; height: '+printarea.height+'px; top: '+printarea.top+'px; left:'+printarea.left+'px;"></div></div>';
                        getpriceimages+= '<div class="col-md-2"></div>';
                    });
                    getpriceimages+= '<div class="col-md-1"></div>';
                }
                else if(canvasdesignlist.length == 3)
                {
                    canvasdesignlist.forEach(printarea=>
                    {
                        var scale = 0.20;
                        getpriceimages+=' <div class="col-md-4 thumbnail2"><label for="'+printarea.canvas.name+'colors" id="'+printarea.canvas.name+'colors" name="'+printarea.canvas.name+'colors" style="font-size: 1.1rem;"></label><div style="background-size: cover; background-position: center center;border: 1px solid;background-image: url('+window.location.origin+'/img/product/'+printarea.productimg+');position: relative;margin: auto;width: 743px;height: 810px; webkit-transform-origin: 0 0; transform-origin: 0 0; -webkit-transform: scale('+scale+') translate(-50%); transform: scale('+scale+') translate(-50%); left: 50%;"><img class="PreviewSave" src="'+printarea.img+'" class="img-responsive" style="position: absolute; width: '+printarea.width+'px; height: '+printarea.height+'px; top: '+printarea.top+'px; left:'+printarea.left+'px;"></div></div>';
                    });
                }
                else if(canvasdesignlist.length > 3)
                {
                    canvasdesignlist.forEach(printarea=>
                    {
                        var scale = 0.25;
                        getpriceimages+=' <div class="col-md-6 thumbnail2"><label for="'+printarea.canvas.name+'colors" id="'+printarea.canvas.name+'colors" name="'+printarea.canvas.name+'colors" style="font-size: 1.1rem;"></label><div style="background-size: cover; background-position: center center;border: 1px solid;background-image: url('+window.location.origin+'/img/product/'+printarea.productimg+');position: relative;margin: auto;width: 743px;height: 810px; webkit-transform-origin: 0 0; transform-origin: 0 0; -webkit-transform: scale('+scale+') translate(-50%); transform: scale('+scale+') translate(-50%); left: 50%;"><img class="PreviewSave" src="'+printarea.img+'" class="img-responsive" style="position: absolute; width: '+printarea.width+'px; height: '+printarea.height+'px; top: '+printarea.top+'px; left:'+printarea.left+'px;"></div></div>';
                    });
                }
                document.getElementById("getpriceDesign").innerHTML = getpriceimages;
                document.getElementById("DesignNameDesigns").innerHTML = getpriceimages;
                setColorsInk();
                if(shoppingcart.items.length > 0)
                {
                    buildcart("Cart-Body");
                }
                document.getElementById("Cart").style.display = 'block';
                $('#productPicker').modal();
            }
            if(shoppingcart.items.length == 0 && num == 0)
            {
                showalert('getpricealert', 'No design to get price1', 'danger', 'Get price');
            }
            
        }

        function Checkout()
        {
            if(shoppingcart.items.length > 0)
            {
                window.location.href = "/shopping-cart";
            }
            else
            {
                showalert('getcartalert', 'There are currently no items in your cart', 'danger', 'Cart');
            }
        }

        function setColorsInk() 
        {  
            var pos = 0;
            canvaslist.forEach(canvas=>{ 
                var arraycolors = [];               
                if(canvas.getObjects().length > 0)
                {
                    var objs = canvas.getObjects();
                    for (var i = 0; i < objs.length; i++) 
                    {
                        if (objs[i].type === "image") 
                        {                          
                            if (objs[i].filters.length > 0) 
                            {
                                var color = rgb2hex(objs[i].filters[objs[i].filters.length - 1].color);
                                if (!validate_element(color, arraycolors)) 
                                {
                                    arraycolors.push(color);
                                }
                            } 
                            else if (!validate_element("#000000", arraycolors)) 
                            {
                                arraycolors.push("#000000");
                            }
                        } 
                        else if (objs[i].type === "text" || objs[i].type === "curvedText" || objs[i].type === "i-text") 
                        {
                            if (objs[i].fill != null && objs[i].fill.length > 0) 
                            {
                                var color = rgb2hex(objs[i].fill);
                                if (!validate_element(color, arraycolors)) 
                                {
                                    arraycolors.push(color);
                                }
                            } 
                            else if (!validate_element("#000000", arraycolors)) 
                            {
                                arraycolors.push("#000000");
                            }
                            
                            if (objs[i].stroke != null && objs[i].stroke.length > 0) 
                            {
                                var color = rgb2hex(objs[i].stroke);
                                if (!validate_element(color, arraycolors)) 
                                {
                                    arraycolors.push(color);
                                }
                            }
                        } 
                        else 
                        {
                            objlist = objs[i]._objects;
                            var layers = [];
                            for (var j = 0; j < objlist.length; j++) {
                                if (!validate_layer(objlist[j], layers)) {
                                    layers.push(objlist[j]);
                                    var color = objlist[j].fill;
                                    if (!validate_element(color, arraycolors)) {
                                    arraycolors.push(color);
                                    }
                                }
                            }
                        }
                    }
                    if (arraycolors.length > 8) 
                    {
                        var script = "Ink Color: full color";
                    } 
                    else 
                    {
                        var script = "Ink Color:" + arraycolors.length;
                    }
                    if(document.getElementById(canvas.name+"colors") != undefined)
                    {
                        document.getElementById(canvas.name+"colors").innerHTML = script; 
                    }
                    canvas.ColorList = arraycolors;
                }
                pos++;
            });
            
        }

        function validate_element(element, arraycolors) {
            if (arraycolors.length > 0) {
            for (var i = 0; i < arraycolors.length; i++) {
                if (arraycolors[i] === element) {
                return true;
                }
            }
            return false;
            } else {
            return false;
            }
        }
    
        
    
        function validate_layer(element, arraycolors) {
            if (arraycolors.length > 0) {
            for (var i = 0; i < arraycolors.length; i++) {
                if (arraycolors[i].id.split(".")[0] === element.id.split(".")[0]) {
                return true;
                }
            }
            return false;
            } else {
            return false;
            }
        }

        //Function to convert hex format to a rgb color
        function rgb2hex(rgb) {
            if (rgb != null) {
            value = rgb;
            rgb = rgb.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i);
            if ((rgb && rgb.length === 4)) {
                return "#" + ("0" + parseInt(rgb[1], 10).toString(16)).slice(-2) + ("0" + parseInt(rgb[2], 10).toString(16)).slice(-2) + ("0" + parseInt(rgb[3], 10).toString(16)).slice(-2);
            } else {
                return value;
            }
            } else {
            return "";
            }
        }

        function alphanumeric_only(event)
        {
            var keycode=event.keyCode?event.keyCode:event.which;
            if (/*(keycode == 32) || */(keycode >= 47 && keycode <= 57) || (keycode >= 65 && keycode <= 90) || (keycode >= 97 && keycode <= 122)) 
            {
                return true;
            }
            else 
            {
                showalert('nospecialcharapters','Sorry You can not insert Special Character','danger','No Special Character');
                return false;
            }
            return true;
        }

        function ValidateEmail(inputText) 
        {
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (inputText.match(mailformat)) 
            {
                return true;
            }
            else 
            {
                return false;
            }
        }

        function SaveDesignNameWindow(value) 
        {
            switch (value) 
            {
                case 'savetemplate':
                    var num = 0;
                    canvaslist.forEach(printarea=>{
                        num+= printarea.getObjects().length;
                    });

                    if (num > 0)
                    {
                        showmodal('saveTemplateModal');
                    }
                    else
                    {
                        showalert('savetemplatealert', 'No design to save as template', 'danger', 'Save Template');
                    }
                    break;
                case 'AddKeepDesign':
                    if (currentdesign.num_shirts < currentdesign.product.parent.min_quantity) 
                    {
                        showalert('minimunalert', 'The minimun quantity requiered for this product is 6', 'danger', 'Attencion');
                    } 
                    else 
                    {
                        setDesignName();
                    }
                    break;
                case 'continuedesign':
                    $('#productPicker').modal('hide');
                    break;
                case 'KeepDesign':
                    canvaslist.forEach(canvas => 
                    {
                        canvas.clear();
                    });                   
                    $('#productPicker').modal('hide');
                    setcanvas(1);
                    break;
                case 'SaveContinue':
                    if (editdesign != null) 
                    {
                        currentdesign._design._design_name = currentdesign._design._design_name.split("_")[1];
                        AddKeepDesign();
                    } 
                    else 
                    {
                        if (document.getElementById("designName").value != "" && document.getElementById("designemail").value != "" && ValidateEmail(document.getElementById("designemail").value)) 
                        {
                            if (document.getElementById("designName").value.split(" ").length > 1) 
                            {
                                showalert('Message15', 'Please enter a Design Name without space!', 'danger', 'Attencion!');
                            } 
                            else 
                            {
                                /*var exists = false;
                                if (shoppingcart.items.length > 0) 
                                {
                                    for (var i = 0; i < shoppingcart.items.length; i++) 
                                    {
                                        
                                        var design_name = document.getElementById("designName").value;
                                        if (design_name === shoppingcart.items[i].name) 
                                        {
                                            exists = true;
                                        }
                                    }
                                }
                                if (exists) 
                                {
                                    //showconfirmalert('Message14', 'You have a previous design saved with this name. Do you want override this design!', 'warning', 'Attencion!');
                                    showalert('Message14', 'You have a previous design saved with this name!', 'danger', 'Attencion!');
                                } 
                                else 
                                {*/
                                    currentdesign.name = document.getElementById('designName').value;
                                    currentdesign.email = document.getElementById('designemail').value;
                                    document.getElementById('product_style_area').style.display = 'none';
                                    document.getElementById('AddKeepDesign').style.display = "none";
                                    document.getElementById('KeepDesign').style.display = "block";
                                    document.getElementById('finalcheckout').style.display = 'inline';
                                    document.getElementById('continuedesign').style.display = 'none';
                                    document.getElementById('design_name_area').style.display = "none";
                                    document.getElementById('cart_area').style.display = "block";
                                    AddKeepDesign();
                               // }
                            }
                        } 
                        else 
                        {
                            if (document.getElementById("designName").value == "" && document.getElementById("designemail").value == "") 
                            {
                                showalert('Message13', 'Please enter a Design Name and email to continue!', 'danger', 'Attencion!');
                            } 
                            else if (document.getElementById("designName").value == "") 
                            {
                                showalert('Message11', 'Please enter a Design Name to continue!', 'danger', 'Attencion!');
                            } 
                            else 
                            {
                                showalert('Message12', 'The email format is incorrect. Please enter a valid email address to continue!', 'danger', 'Attencion!');
                            }
                        }
                    }
                    break;
                case 'Check-out':                   
                    Checkout();
                    break;
                case 'saveasguest':

                    if (document.getElementById("designnameshare").value != "" && document.getElementById('to_email').value != "") 
                    {

                        var emaildone = true;
                        var emaillist = document.getElementById('to_email').value.split(',');
                        for (var i = 0; i < emaillist.length; i++)
                        {
                            if (!ValidateEmail(emaillist[i]))
                            {
                                emaildone = false;
                                break;
                            }
                        }



                        if (emaildone /*ValidateEmail(document.getElementById('to_email').value)*/) 
                        {
                            /*var exists = false;
                            if (shoppingcart.items.length > 0) 
                            {
                                for (var i = 0; i < shoppingcart.items.length; i++) 
                                {
                                    
                                    var design_name = shoppingcart.items[i].name;
                                    if (design_name == document.getElementById("designnameshare").value) 
                                    {
                                        exists = true;
                                    }
                                }
                            }
                            if (exists) 
                            {
                                //showconfirmalert('Message14', 'You have a previous design saved with this name. Do you want override this design!', 'warning', 'Attencion!');
                                showalert('Message14', 'You have a previous design saved with this name!', 'danger', 'Attencion!');
                            } 
                            else 
                            {*/
                                currentdesign.name = document.getElementById('designnameshare').value;
                                currentdesign.email = document.getElementById('to_email').value;
                                saveDesign("saveasguest");
                            //}
                        } 
                        else 
                        {
                            showalert('emailfotmat', 'The email address entered is invalid!', 'danger', 'Email format error');
                        }
                    } 
                    else 
                    {
                        showalert('fillform', 'You must fill all form(s)!', 'danger', 'Attencion!!');
                    }
                    break;
                case 'save':
                    if (user != null) 
                    {
                        if (editdesign != null) 
                        {
                            var designname = editdesign.split("_")[1];
                            document.getElementById("designNameOnly").value = designname;
                            SaveDesignNameWindow('SaveContinueOnly');
                        } 
                        else if (edit != null) 
                        {
                            var designname = edit.split("_")[1];
                            document.getElementById("designNameOnly").value = designname;
                            SaveDesignNameWindow('SaveContinueOnly');
                        } 
                        else 
                        {
                            setDesignNameOnly();
                        }
                    } 
                    else 
                    {
                        showalert('savemessage', 'Create your account with us and enjoy the benefits of being a member', 'danger', 'You do not have permission to save the design.');
                    }
                    break;
                case 'SaveContinueOnly':
                    if (document.getElementById("designNameOnly").value != "") 
                    {
                        var exists = false;
                        if (shoppingcart.items.length > 0) 
                        {
                            for (var i = 0; i < shoppingcart.items.length; i++) 
                            {
                                var design_name = shoppingcart.items[i].name;
                                if (design_name == document.getElementById("designNameOnly").value) 
                                {
                                    exists = true;
                                }
                            }
                        }
                        if (exists) 
                        {
                            //showconfirmalert('DuplicateDesignNameOnly', 'You have a previous design saved with this name. Do you want override this design!', 'warning', 'Attencion!');
                            showalert('DuplicateDesignNameOnly', 'You have a previous design saved with this name!', 'danger', 'Attencion!');
                        } 
                        else 
                        {
                            currentdesign.name = document.getElementById('designNameOnly').value;
                            document.getElementById('designNameOnly').value = "";
                            saveOny = true;
                            saveDesign("saveOnly");
                        }
                    } 
                    else 
                    {
                        showalert('EmptyDesignNameOnly', 'Please enter a Design Name to continue!', 'danger', 'Attencion!');
                    }
                    break;
                default:
                    KeepDesign();
            }
        }

        function buildcart(body)
        {
            document.getElementById("directcheckout").style.display = "inline-block";
            var Cartbody = document.getElementById(body);
            while (Cartbody.firstChild) Cartbody.removeChild(Cartbody.firstChild);
            for (var i = 0; i < shoppingcart.items.length; i++)
            {   
                var tr = document.createElement("tr");
                tr.className = "row";
                var tdimg = document.createElement("td");
                tdimg.className = "col-lg-1 col-md-1 col-sm-1 col-xs-1 ";
                var img = document.createElement("img");
                img.src = shoppingcart.items[i].sides[0].img;
                img.style.width = "74px";
                img.style.height = "81px";
                var brimage = document.createElement("br");
                var aimage = document.createElement("a");
                aimage.id = shoppingcart.items[i].name;
                tdimg.className = "text-center";
                aimage.innerHTML = "edit";
                aimage.style.cursor = "pointer";
                aimage.href = window.location.origin + "/designstudioembroidery/e/" + shoppingcart.items[i].id;
                var tdbrandstyle = document.createElement("td");
                tdbrandstyle.className = "col-lg-2 col-md-2 col-sm-2 col-xs-2  visible-lg visible-md";
                tdbrandstyle.innerHTML = shoppingcart.items[i].product.brand + " " + shoppingcart.items[i].product.stylenumber;
                var tdcolor = document.createElement("td");
                tdcolor.className = "col-lg-1 col-md-1 col-sm-1 col-xs-1  visible-lg visible-md";
                tdcolor.innerHTML = shoppingcart.items[i].product.color;
                var tdsizes = document.createElement("td");
                tdsizes.className = "col-lg-2 col-md-2 col-sm-2 col-xs-2  visible-lg visible-md";
                var sizeinnerHTML = '';
                for (var j = 0; j < shoppingcart.items[i].sizes.length; j++) 
                {
                    if (shoppingcart.items[i].sizes[j].quantity > 0)
                    {      
                        sizeinnerHTML+= shoppingcart.items[i].sizes[j].name + ": " + shoppingcart.items[i].sizes[j].quantity + ", ";
                    }
                }
                tdsizes.innerHTML = sizeinnerHTML;
                var tdquantity = document.createElement("td");
                tdquantity.className = "col-lg-1 col-md-1 col-sm-1 col-xs-1";
                tdquantity.innerHTML = shoppingcart.items[i].num_shirts;
                var tdpricepershirt = document.createElement("td");
                tdpricepershirt.className = "col-lg-2 col-md-2 col-sm-2 col-xs-2  visible-lg visible-md";
                tdpricepershirt.innerHTML = "$" + (shoppingcart.items[i].price_per_shirt * 1).toFixed(2);
                var tdtotal = document.createElement("td");
                tdtotal.className = "col-lg-2 col-md-2 col-sm-2 col-xs-2";
                shoppingcart.items[i].total = shoppingcart.items[i].price_per_shirt * shoppingcart.items[i].num_shirts;
                tdtotal.innerHTML = "$" + (shoppingcart.items[i].total * 1).toFixed(2);
                //shoppingcart.total += shoppingcart.items[i].total;
                var tdbutton = document.createElement("td");
                tdbutton.className = "col-lg-1 col-md-1 col-sm-1 col-xs-1";
                var button = document.createElement("button");
                button.className = "btn btn-danger";
                button.id = i;
                button.addEventListener("click", function() 
                {
                   var row = this.parentNode.parentNode;
                    row.parentNode.removeChild(row);
                    if ( shoppingcart.items.length == 1 )
                    {
                        document.getElementById("Cart").style.display = "none";
                        document.getElementById("finalcheckout").style.display = "none";
                        document.getElementById("directcheckout").style.display = "none";
                        document.getElementById('product_style_area').style.display = 'none';
                        document.getElementById('design_name_area').style.display = 'none';
                        document.getElementById('AddKeepDesign').style.display = "none";
                        document.getElementById('finalcheckout').style.display = 'none';
                        document.getElementById('continuedesign').style.display = 'inline';
                        document.getElementById('cart_area').style.display = 'none';
                        $('#productPicker').modal('hide');
                        position = 0;
                        shoppingcart.items = [];
                        shoppingcart.subtotal = 0;
                        shoppingcart.tax = 0;
                        shoppingcart.shipping_cost = 0;
                        shoppingcart.discount = 0;
                        shoppingcart.total = 0;
                        shoppingcart = { shop_number:'', subtotal:0, tax:0, shipping_cost:0, discount:0, total:0, status:"created", date:null, shipby:null, promocode:'', items:[], user:null, shippingType:null, promocode:null, useexpedited: 1};
                        document.getElementById('itemPrice').innerHTML = "0.00";
                        document.getElementById('numOfShirtsLabel').innerHTML = "<b>Quantity:</b> <span style='color: #5cb85c; font-family: Arial;'> 0 item(s)</span>";
                        document.getElementById('itemTotal').innerHTML = "0.00";
                        document.getElementById('KeepDesign').style.display = "none";
                        document.getElementById('designemail').value = shoppingcart.user.email;
                        document.getElementById('designName').value = "";
                        currentdesign = {id:'',arrayside :[], name:'',product:product, type:"Embroiderystudio", num_shirts:0, price_per_shirt:0, total:0};
                        cleanInputQuantity();
                        var designtmplist = document.getElementById("designtmplist");
                        designtmplist.innerHTML = "";
                        canvasdesignlist = [];
                        currentdesign.arrayside = [];
                        canvaslist.forEach(canvas => 
                        {
                            canvas.clear();
                        });
                    }
                    else
                    { 
                        shoppingcart.items.splice(this.id,1);
                        position--;
                        if(shoppingcart.items.length > 0)
                        {
                            buildcart("Cart-Body");
                        }
                    } 
                    updatesessioninfo();
                });
                var spanbutton = document.createElement("span");
                spanbutton.className = "glyphicon glyphicon-remove";
                spanbutton.id = i;
                button.appendChild(spanbutton);
                tdbutton.appendChild(button);
                tdimg.appendChild(img);
                tdimg.appendChild(brimage);
                tdimg.appendChild(aimage);
                tr.appendChild(tdimg);
                tr.appendChild(tdbrandstyle);
                tr.appendChild(tdcolor);
                tr.appendChild(tdsizes);
                tr.appendChild(tdquantity);
                tr.appendChild(tdpricepershirt);
                tr.appendChild(tdtotal);
                tr.appendChild(tdbutton);
                Cartbody.appendChild(tr);
            }
            var trTotal = document.createElement("tr");
            var tdordertotal = document.createElement("td");
            tdordertotal.colSpan = 7;    
            var spanordertotal = document.createElement("span");
            spanordertotal.innerHTML = "Order Total";
            spanordertotal.style.float = "right";
            var tdtotal = document.createElement("td");
            tdtotal.colSpan = 3;
            tdtotal.innerHTML = "$" + (shoppingcart.total * 1).toFixed(2);
            tdordertotal.appendChild(spanordertotal);
            trTotal.appendChild(tdordertotal);
            trTotal.appendChild(tdtotal);
            var trsubTotal = document.createElement("tr");
            var tdordersubtotal = document.createElement("td");
            tdordersubtotal.colSpan = 7;
            var spanordersubtotal = document.createElement("span");
            spanordersubtotal.innerHTML = "Order Total";
            spanordersubtotal.style.float = "right";
            var tdsubtotal = document.createElement("td");
            tdsubtotal.colSpan = 3;
            tdsubtotal.innerHTML = "$" + (shoppingcart.subtotal * 1).toFixed(2);
            tdordersubtotal.appendChild(spanordersubtotal);
            trsubTotal.appendChild(tdordersubtotal);
            trsubTotal.appendChild(tdsubtotal);
            var trDiscount = document.createElement("tr");
            var tdorderDiscount = document.createElement("td");
            tdorderDiscount.colSpan = 7;
            var spanorderDiscount = document.createElement("span");
            spanorderDiscount.innerHTML = "Discount";
            spanorderDiscount.style.float = "right";
            var tdDiscount = document.createElement("td");
            tdDiscount.colSpan = 3;
            tdDiscount.innerHTML = "$" + shoppingcart.discount;
            tdorderDiscount.appendChild(spanorderDiscount);
            trDiscount.appendChild(tdorderDiscount);
            trDiscount.appendChild(tdDiscount);
            var trshippingcost = document.createElement("tr");
            var tdordershippingcost = document.createElement("td");
            tdordershippingcost.colSpan = 7;
            var spanordershippingcost = document.createElement("span");
            spanordershippingcost.innerHTML = "Shipping Cost";
            spanordershippingcost.style.float = "right";
            var tdshippingcost = document.createElement("td");
            tdshippingcost.colSpan = 3;
            tdshippingcost.innerHTML = "$" + shoppingcart.shipping_cost;
            tdordershippingcost.appendChild(spanordershippingcost);
            trshippingcost.appendChild(tdordershippingcost);
            trshippingcost.appendChild(tdshippingcost);
            var trTax = document.createElement("tr");
            var tdorderTax = document.createElement("td");
            tdorderTax.colSpan = 7;
            var spanorderTax = document.createElement("span");
            spanorderTax.innerHTML = "Order Tax";
            spanorderTax.style.float = "right";
            var tdTax = document.createElement("td");
            tdTax.colSpan = 3;
            tdTax.innerHTML = "$" + shoppingcart.tax;
            tdorderTax.appendChild(spanorderTax);
            trTax.appendChild(tdorderTax);
            trTax.appendChild(tdTax);
            Cartbody.appendChild(trsubTotal);
            updatesessioninfo()
        }

        function updatesessioninfo()
        {
            var total = 0;
            if (shoppingcart.items.length > 0)
            {
                shoppingcart.items.forEach(function(element) 
                {
                    if (element.total)
                    {
                        element.total = Number((element.total*1).toFixed(2));
                        total+= Number(element.total);          
                    }
                });

                shoppingcart.subtotal = Number((total*1).toFixed(2));
                shoppingcart.shipping_cost = 0.00;
                shoppingcart.discount = 0.00;
                shoppingcart.tax = 0.00;
                /*if (shoppingcart.discount > 0)
                {
                    shoppingcart.tax = Number(((((total-shoppingcart.discount)+shoppingcart.shipping_cost)* 8.25)/100).toFixed(2));  
                }
                else
                {
                    shoppingcart.tax = Number(((((total)+shoppingcart.shipping_cost)* 8.25)/100).toFixed(2));   
                }*/
                shoppingcart.total =  Number(((shoppingcart.subtotal + shoppingcart.tax)*1).toFixed(2));
                
            }
            
            


            $.ajax({
                type:'POST',
                dataType: 'json', 
                data: {
                        shoppingcart:  JSON.parse(JSON.stringify(shoppingcart)),
                    },
                url: window.location.origin + '/updatesessioninfoembroidery',
                success:function(data)
                {  
                    console.log('session shopping cart updated');
                },
                error: function(error)
                {
                    console.log("error in method updatesessioninfo:");
                    console.log(error);
                }
            });
        }

        function AddKeepDesign()
        {
            addingToCart = true;
            saveDesign("AddKeepDesign");
        }

        function cleanInputQuantity()
        {
            document.getElementById('NB').value='';
            document.getElementById('0M').value='';
            document.getElementById('3M').value='';
            document.getElementById('6M').value='';
            document.getElementById('12M').value='';
            document.getElementById('18M').value='';
            document.getElementById('24M').value='';

            document.getElementById('2T').value='';
            document.getElementById('3T').value='';
            document.getElementById('4T').value='';
            document.getElementById('5T').value='';
            document.getElementById('5_6').value='';
            document.getElementById('6T').value='';
            document.getElementById('7').value='';

            document.getElementById('YXS').value='';
            document.getElementById('YS').value='';
            document.getElementById('YM').value='';
            document.getElementById('YL').value='';
            document.getElementById('YXL').value='';
            
            document.getElementById('XS').value='';
            document.getElementById('S').value='';
            document.getElementById('M').value='';
            document.getElementById('L').value='';
            document.getElementById('XL').value='';
            document.getElementById('2XL').value='';
            document.getElementById('3XL').value='';
            document.getElementById('4XL').value='';
            document.getElementById('5XL').value='';

            //document.getElementById('AddKeepDesign').style.display = 'none';
            document.getElementById('KeepDesign').style.display = 'none';
            document.getElementById('finalcheckout').style.display = 'inline';
            document.getElementById('itemPrice').innerHTML = "$0";
            document.getElementById("numOfShirtsLabel").style.visibility = "visible";
            document.getElementById('numOfShirtsLabel').innerHTML = " <b>Quantity:</b> <span style='color: #5cb85c; font-family: Arial;'> 0 item(s)</span> ";
            document.getElementById("itemTotal").style.visibility = "visible";
            document.getElementById('itemTotal').innerHTML = "$0";
            currentdesign.price_per_shirt = 0;
            currentdesign.total = 0;
        }


        
        function saveDesign(from) 
        {                      
            setColorsInk();
            if ( textAdded || clipArtAdded || imageUploaded || colorChanged || addingToCart || resized || Checked || productchanged || saveOnly) 
            {
                if (from == "saveOnly") 
                {
                    //document.getElementById("loaderOnly").style.display = "block";
                    //document.getElementById('design_name_area_only').style.display = "none";
                } 
                else if (from == "saveasguest") 
                {
                    //document.getElementById("loaderEmail").style.display = "block";
                }
                else if (from == "AddKeepDesign") 
                {
                    document.getElementById("loader").style.display = "block";
                    document.getElementById('KeepDesign').style.display = "none";
                    document.getElementById('finalcheckout').style.display = "none";
                }
                var design = [];
                canvaslist.forEach(canvas=>{
                    canvas.discardActiveObject();
                    if(canvas.getObjects().length > 0)
                    {
                        
                        var saveddesign =  {status:"created"};
                        if (canvas.width != 0)
                        {
                            saveddesign.toDataURL = canvas.toDataURL('image/png');
                            saveddesign.svg = canvas.toSVG();
                            saveddesign.json = JSON.stringify(canvas);
                        }
                        saveddesign.width_canvas = canvas.width;
                        saveddesign.height_canvas = canvas.height;
                        saveddesign.width_div = document.getElementById(canvas.side + 'CanvasShirt').style.width.replace("px", "");
                        saveddesign.height_div = document.getElementById(canvas.side + 'CanvasShirt').style.height.replace("px", "");
                        saveddesign.border_color_div = 0;
                        saveddesign.left = document.getElementById(canvas.name + 'canvas-wrapper').style.left.replace("px", "");
                        saveddesign.top = document.getElementById(canvas.name + 'canvas-wrapper').style.top.replace("px", "");
                        saveddesign.border_color_canvas = 0;
                        saveddesign.design_image = "";
                        saveddesign.design_product_image = "";
                        newurl = document.getElementById(canvas.side + 'CanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById(canvas.side + 'CanvasShirt').style.backgroundImage.replace("url", "").length - 2);                           
                        saveddesign.product_image = newurl.replace("https://www.vividcustoms.com/","");
                        saveddesign.side = canvas.name;
                        saveddesign.colorlist = canvas.ColorList;
                        design.push(saveddesign);
                    }  
                });

               
                if (from == "saveOnly") 
                { 
                   //design.email = user.email;
                   $.ajax({
                        type:'POST',
                        dataType: 'json', 
                        data: {
                                email: user.email,
                                name: currentdesign.name,
                                product: product.id,
                                design: JSON.parse(JSON.stringify(design)),
                            },
                        url: window.location.origin + '/savedesignembroidery',
                        success:function(data)
                        {  
                            currentdesign.id = data.design.id;
                            document.getElementById("loaderOnly").style.display = "none";
                            document.getElementById('design_name_area_only').style.display = "block";
                            showalert('designsaved', 'Design saved!', 'success', 'Saved Design');
                            textAdded = clipArtAdded = imageUploaded = colorChanged = addingToCart = resized = Checked = productchanged = saveOnly = false;
                        },
                        error: function(error)
                        {
                            console.log("error in method saveDesign('saveOnly'):");
                            console.log(error);
                        }
                    });
                } 
                else if (from == "saveasguest") 
                {  
                    $.ajax({
                        type:'POST',
                        dataType: 'json', 
                        data: {
                                email: currentdesign.email,
                                name: currentdesign.name,
                                message:  document.getElementById('message').value,
                                product: currentdesign.product.id,
                                design: JSON.parse(JSON.stringify(design)),
                            },
                        url: window.location.origin + '/saveasguestembroidery',
                        success:function(data)
                        {  
                            currentdesign.id = data.design.id;
                            document.getElementById("loaderEmail").style.display = "none";
                            showalert('designsaved', 'Design saved!', 'success', 'Saved Design');
                        },
                        error: function(error)
                        {
                            console.log("error in method saveDesign('saveasguest'):");
                            console.log(error);
                        }
                    });
                    
                }
                else if (from == "AddKeepDesign")
                {  
                    var item= {name:null, type:'EmbroideryStudio', product:null, num_shirts:0, price_per_shirt:0, total:0, sides:[], sizes:currentdesign.product.parent.sizes};
                    item.name = currentdesign.name;
                    item.displayname = currentdesign.name;
                    var productitem = {id:null, brand:null, stylenumber:null, color:null, name:null, parent:null, isexpedited:null};
                    productitem.id = currentdesign.product.id;
                    productitem.brand = currentdesign.product.brand;
                    productitem.stylenumber = currentdesign.product.stylenumber;
                    productitem.color = currentdesign.product.color.name;
                    productitem.name = currentdesign.product.name;
                    productitem.parent = currentdesign.product.parent.id;
                    productitem.isexpedited = currentdesign.product.isexpedited;
                    item.product = productitem;
                    currentdesign.arrayside.forEach(sideitem => 
                    {
                        var side = {name:null, img:null,colorlist: null};
                        side.img = sideitem.img;
                        side.name = sideitem.side;
                        side.colorlist = sideitem.canvas.ColorList.length;
                        item.sides.push(side);
                    });
                    item.name = currentdesign.name;
                    item.displayname = currentdesign.name;
                    item.num_shirts = currentdesign.num_shirts;
                    item.price_per_shirt = Number(currentdesign.price_per_shirt);
                    item.total = Number(currentdesign.price_per_shirt) * Number(currentdesign.num_shirts);
                    shoppingcart.items.push(item); 
                    shoppingcart.subtotal+= Number(item.total);
                    shoppingcart.total += Number(item.total);
                    if (shoppingcart.items.length > 0) 
                    {
                       
                        for (var i = 0; i < shoppingcart.items.length; i++) 
                        {
                            if (shoppingcart.items[i].product.isexpedited == 0) 
                            {
                                shoppingcart.useexpedited = 0;
                            }
                        }
                    }
                   
                    $.ajax({
                        type:'POST',
                        dataType: 'json', 
                        data: {
                                email: currentdesign.email,
                                name: currentdesign.name,
                                product: currentdesign.product.id,
                                design: JSON.parse(JSON.stringify(design)),
                                shoppingcart:  JSON.parse(JSON.stringify(shoppingcart)),
                            },
                        url: window.location.origin + '/savegetpriceembroidery',
                        success:function(data)
                        {  
                            shoppingcart = data.shoppingcart;
                            if(shoppingcart.items.length > 0)
                            {
                                buildcart("Cart-Body");
                            }
                            currentdesign = {id:'',arrayside :[], name:'',product:product, type:"Embroiderystudio", num_shirts:0, price_per_shirt:0, total:0};
                            cleanInputQuantity();
                            position++;
                            document.getElementById("Cart").style.display = "block"; 
                            document.getElementById("KeepDesign").style.display = "inline"; 
                            var designtmplist = document.getElementById("designtmplist");
                            designtmplist.innerHTML = "";
                            canvasdesignlist = [];
                            currentdesign.arrayside = [];
                            canvaslist.forEach(canvas => 
                            {
                                canvas.clear();
                            });
                            showalert('designsaved', 'Item added success!', 'success', 'Saved Design');
                        },
                        error: function(error)
                        {
                            console.log("error in method saveDesign('AddKeepDesign'):");
                            console.log(error);
                        }
                    });
                    document.getElementById("loader").style.display = "none";
                    document.getElementById('KeepDesign').style.display = "none";
                    document.getElementById('finalcheckout').style.display = "inline";
                    textAdded = clipArtAdded = imageUploaded = colorChanged = addingToCart = resized = Checked = productchanged = saveOnly = false;
                }
            }
            else
            {
                if (from == "saveOnly") 
                {
                    showalert('savealert', 'No design to save!', 'danger', 'Save');
                } 
                else if (from == "saveasguest") 
                {
                    showalert('savealert', 'No design to save!', 'danger', 'Save');
                }
                else if (from == "AddKeepDesign")
                {
                    showalert('savealert', 'No design to save!', 'danger', 'Save');
                }
            }
        }

        function showconfirmalert(id, message, type, title)
        {
            var modalfade = document.createElement('div');
            modalfade.id = id;
            modalfade.className = 'modal fade';
            modalfade.setAttribute("role", "dialog");
            var modaldialog = document.createElement('div');
            modaldialog.className = 'modal-dialog';
            modaldialog.style.position = 'fixed';
            modaldialog.style.top = "40%";
            modaldialog.style.left = "0";
            modaldialog.style.right = "0";
            modaldialog.style.bottom = "0";
            modalfade.appendChild(modaldialog);
            var modalcontent = document.createElement('div');
            modalcontent.className = 'modal-content';
            modaldialog.appendChild(modalcontent);
            var modalheader = document.createElement('div');
            modalheader.className = 'modal-header modal-header-' + type;
            modalcontent.appendChild(modalheader);
            var buttonclose = document.createElement("button");
            buttonclose.className = 'close';
            buttonclose.setAttribute("data-dismiss", "modal");
            buttonclose.setAttribute("aria-hidden", "true");
            buttonclose.setAttribute("value", "Close");
            buttonclose.innerHTML = '&times';
            modalheader.appendChild(buttonclose);
            var modaltitle = document.createElement('h4');
            modaltitle.className = 'modal-title';
            modalheader.appendChild(modaltitle);
            var strong = document.createElement('strong');
            strong.innerHTML = title;
            modaltitle.appendChild(strong);
            var alert = document.createElement('div');
            alert.className = 'alert alert-' + type;
            alert.innerHTML = message;
            modalcontent.appendChild(alert);
            var modalfooter = document.createElement('div');
            modalfooter.className = 'modal-footer';
            var buttonyes = document.createElement("button");
            buttonyes.className = 'btn btn-default';
            buttonyes.setAttribute("data-dismiss", "modal");
            /*buttonyes.setAttribute("aria-hidden", "true");
            buttonyes.setAttribute("value", "Close");*/
            buttonyes.innerHTML = 'Yes';
            buttonyes.addEventListener("click", function() {
                confirmsave(id);
            });
            modalfooter.appendChild(buttonyes);
            var buttonno = document.createElement("button");
            buttonno.className = 'btn btn-primary';
            buttonno.setAttribute("data-dismiss", "modal");
            /*buttonno.setAttribute("aria-hidden", "true");
            buttonno.setAttribute("value", "Close");*/
            buttonno.innerHTML = 'No';
            modalfooter.appendChild(buttonno);
            modalcontent.appendChild(modalfooter);
            document.getElementsByTagName('body')[0].appendChild(modalfade);
            $('#' + id).modal();
        }

        function confirmsave(elementid)
        {
            if (elementid == "Message14")
            {
                //Order._Product_design_list[position]._design._design_name = document.getElementById('designName').value;
                //Order._Customer.email = document.getElementById("designemail").value;
                document.getElementById('design_name_area').style.display = "none";
                AddKeepDesign();
            } 
            else
            {
                currentdesign.name = document.getElementById('designNameOnly').value;
                document.getElementById('designNameOnly').value = "";
                saveOny = true;
                saveDesign("saveOnly");
            }
        }


        function login() 
        {
            var token    = $("input[name=_token]").val();
            var email    = $("input[name=user_name]").val();
            var password = $("input[name=pass_word]").val();
            var data = {
                _token:token,
                email:email,
                password:password
            };
            // Ajax Post 
            $.ajax({
                type:'POST',
                dataType: 'json', 
                url: window.location.origin + '/logindesignstudioembroidery',
                data: {_token:token,
                        email:email,
                        password:password},
                success: function (data)
                {
                    if(data.status == "success")
                    {
                        user = data.user;
                        setDesignNameOnly();
                    }
                    else 
                    {
                        showalert("loginerror", 'Your Email or Password is invalid', 'danger', 'Login Error');
                    }
                    
                },
                error: function (data)
                {
                    console.log('Fail to run Login..');
                }
            });
            return false;
        }

        function setDesignNameOnly() 
        {
            document.getElementById('design_name_area_only').style.display = "block";
            document.getElementById('SaveShareModalDiv').style.display = "none";
        }

        function getDeliveryDateObj(pday,businessDaysLeftForDelivery)
        {
            var deliveryDate = pday;
            var dayOfTheWeek = deliveryDate.getDay();
            var calendarDays = businessDaysLeftForDelivery;
            var deliveryDay = dayOfTheWeek + businessDaysLeftForDelivery;
            if (deliveryDay >= 6) 
            {
                businessDaysLeftForDelivery -= 6 - dayOfTheWeek;  //deduct this-week days
                calendarDays += 2;  //count this coming weekend
                deliveryWeeks = Math.floor(businessDaysLeftForDelivery / 5); //how many whole weeks?
                calendarDays += deliveryWeeks * 2;  //two days per weekend per week
            }
            deliveryDate.setTime(deliveryDate.getTime() + calendarDays * 24 * 60 * 60 * 1000);

            //making sure deliveryDate isn't on a federal holiday
            var newYears = new Date(2010,0,1);
            var independenceDay = new Date(2010,6,4);
            var VETRANS_DAY = new Date(2010, 10, 11);
            var christmas = new Date(2010, 11, 25);
            //this is a current date to reference
            var c = new Date();
            //finding mlk day
            var mlk = new Date(c.getFullYear(), 0, 1);
            var day = mlk.getDay();
            var target = 1;
            var diff = target - day;
            day = diff + 14 + 1;
            mlk.setDate(day);
            //finding Washington's birthday
            var washington = new Date(c.getFullYear(),1,1);
            day = washington.getDay();
            target = 1;
            diff = target - day;
            day = diff + 21 + 1;
            washington.setDate(day);
            //finding Memorial Day
            var memorial = new Date(c.getFullYear(),5,0);
            day = memorial.getDay();   
            target = 1;
            if(day > target)
            {
                diff = target - day;
                day = 31 + diff;
                memorial.setDate(day);
            }
            else if(day < target)
            {
                memorial.setDate(memorial.getDate() - 6);
            }
            //finding Labor Day
            var labor = new Date(c.getFullYear(), 8 , 1);
            day = labor.getDay();
            target = 1;
            if ( day >  target )
            {
                diff = day - target; 
                day = 7 - diff;
                labor.setDate(day + 1); //adding 1 because day is zero based and the date isn't
            }
            else if( day < target )
            {
                day++;
                labor.setDate(day);
            }
            //finding Columbus Day
            var columbus = new Date(c.getFullYear(),9,1);
            day = columbus.getDay();
            target = 1;
            if(day > target)
            {
                diff = day - target;
                day = 7 - diff;
                day = day + 7;
            }
            else if( day < target )
            {
                day = day + 1 + 7;
            }
            else
            {
                day += 7;
            }
            columbus.setDate(day+1);
            //finding thanksgiving
            var thanksgiving = new Date(c.getFullYear(), 10 , 1);
            day = thanksgiving.getDay();
            target = 4;         
            diff = target - day;
            day = diff + 21 + 1;
            thanksgiving.setDate(day);

            if(newYears.getMonth() == deliveryDate.getMonth() && newYears.getDate() == deliveryDate.getDate() ||
                independenceDay.getMonth() == deliveryDate.getMonth() && independenceDay.getDate() == deliveryDate.getDate() ||
                VETRANS_DAY.getMonth() == deliveryDate.getMonth() && VETRANS_DAY.getDate() == deliveryDate.getDate() ||
                christmas.getMonth() == deliveryDate.getMonth() && christmas.getDate() == deliveryDate.getDate() ||
                mlk.getMonth() == deliveryDate.getMonth() && mlk.getDate() == deliveryDate.getDate() ||
                washington.getMonth() == deliveryDate.getMonth() && washington.getDate() == deliveryDate.getDate() ||
                memorial.getMonth() == deliveryDate.getMonth() && memorial.getDate() == deliveryDate.getDate() ||
                labor.getMonth() == deliveryDate.getMonth() && labor.getDate() == deliveryDate.getDate() ||
                columbus.getMonth() == deliveryDate.getMonth() && columbus.getDate() == deliveryDate.getDate() ||
                thanksgiving.getMonth() == deliveryDate.getMonth() && thanksgiving.getDate() == deliveryDate.getDate() )
                {
                    deliveryDate.setDate(getDeliveryDateObj(deliveryDate,1).getDate());
                }
            return deliveryDate;
        }

        function dateformat(deliveryDate)
        {
            var day = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
            var month = ['Janurary','February','March','April','May','June','July','August','September','October','November','December'];
            return day[deliveryDate.getDay()] + ", " + month[deliveryDate.getMonth()] + " " + deliveryDate.getDate();
        }

        
        var dateFormat = function () {
            var token = /d{1,4}|m{1,4}|yy(?:yy)?|([HhMsTt])\1?|[LloSZ]|"[^"]*"|'[^']*'/g,
                timezone = /\b(?:[PMCEA][SDP]T|(?:Pacific|Mountain|Central|Eastern|Atlantic) (?:Standard|Daylight|Prevailing) Time|(?:GMT|UTC)(?:[-+]\d{4})?)\b/g,
                timezoneClip = /[^-+\dA-Z]/g,
                pad = function (val, len) {
                    val = String(val);
                    len = len || 2;
                    while (val.length < len) val = "0" + val;
                    return val;
                };

            // Regexes and supporting functions are cached through closure
            return function (date, mask, utc) {
                var dF = dateFormat;

                // You can't provide utc if you skip other args (use the "UTC:" mask prefix)
                if (arguments.length == 1 && Object.prototype.toString.call(date) == "[object String]" && !/\d/.test(date)) {
                    mask = date;
                    date = undefined;
                }

                // Passing date through Date applies Date.parse, if necessary
                date = date ? new Date(date) : new Date;
                if (isNaN(date)) throw SyntaxError("invalid date");

                mask = String(dF.masks[mask] || mask || dF.masks["default"]);

                // Allow setting the utc argument via the mask
                if (mask.slice(0, 4) == "UTC:") {
                    mask = mask.slice(4);
                    utc = true;
                }

                var _ = utc ? "getUTC" : "get",
                    d = date[_ + "Date"](),
                    D = date[_ + "Day"](),
                    m = date[_ + "Month"](),
                    y = date[_ + "FullYear"](),
                    H = date[_ + "Hours"](),
                    M = date[_ + "Minutes"](),
                    s = date[_ + "Seconds"](),
                    L = date[_ + "Milliseconds"](),
                    o = utc ? 0 : date.getTimezoneOffset(),
                    flags = {
                        d:    d,
                        dd:   pad(d),
                        ddd:  dF.i18n.dayNames[D],
                        dddd: dF.i18n.dayNames[D + 7],
                        m:    m + 1,
                        mm:   pad(m + 1),
                        mmm:  dF.i18n.monthNames[m],
                        mmmm: dF.i18n.monthNames[m + 12],
                        yy:   String(y).slice(2),
                        yyyy: y,
                        h:    H % 12 || 12,
                        hh:   pad(H % 12 || 12),
                        H:    H,
                        HH:   pad(H),
                        M:    M,
                        MM:   pad(M),
                        s:    s,
                        ss:   pad(s),
                        l:    pad(L, 3),
                        L:    pad(L > 99 ? Math.round(L / 10) : L),
                        t:    H < 12 ? "a"  : "p",
                        tt:   H < 12 ? "am" : "pm",
                        T:    H < 12 ? "A"  : "P",
                        TT:   H < 12 ? "AM" : "PM",
                        Z:    utc ? "UTC" : (String(date).match(timezone) || [""]).pop().replace(timezoneClip, ""),
                        o:    (o > 0 ? "-" : "+") + pad(Math.floor(Math.abs(o) / 60) * 100 + Math.abs(o) % 60, 4),
                        S:    ["th", "st", "nd", "rd"][d % 10 > 3 ? 0 : (d % 100 - d % 10 != 10) * d % 10]
                    };

                return mask.replace(token, function ($0) {
                    return $0 in flags ? flags[$0] : $0.slice(1, $0.length - 1);
                });
            };
        }();

        // Some common format strings
        dateFormat.masks = {
            "default":      "ddd mmm dd yyyy HH:MM:ss",
            shortDate:      "m/d/yy",
            mediumDate:     "mmm d, yyyy",
            longDate:       "mmmm d, yyyy",
            fullDate:       "dddd, mmmm d, yyyy",
            shortTime:      "h:MM TT",
            mediumTime:     "h:MM:ss TT",
            longTime:       "h:MM:ss TT Z",
            isoDate:        "yyyy-mm-dd",
            isoTime:        "HH:MM:ss",
            isoDateTime:    "yyyy-mm-dd'T'HH:MM:ss",
            isoUtcDateTime: "UTC:yyyy-mm-dd'T'HH:MM:ss'Z'"
        };

        // Internationalization strings
        dateFormat.i18n = {
            dayNames: [
                "Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat",
                "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"
            ],
            monthNames: [
                "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec",
                "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"
            ]
        };

        // For convenience...
        Date.prototype.format = function (mask, utc) {
            return dateFormat(this, mask, utc);
        };

        function setDesignName() 
        {
            document.getElementById('design_name_area').style.display = "block";
            if(shoppingcart.user != null)
            {
                document.getElementById('designemail').value = shoppingcart.user.email;
            }
            document.getElementById('product_style_area').style.display = "none";
            document.getElementById('AddKeepDesign').style.display = "none";
            document.getElementById('KeepDesign').style.display = "none";
            document.getElementById('finalcheckout').style.display = 'none';
            document.getElementById('cart_area').style.display = 'none';
            document.getElementById('continuedesign').style.display = 'none';
            
        }

        function enableproductsizes()
        {
            document.getElementById('div_NB').style.display='none';
            document.getElementById('div_0M').style.display='none';
            document.getElementById('div_3M').style.display='none';
            document.getElementById('div_6M').style.display='none';
            document.getElementById('div_12M').style.display='none';
            document.getElementById('div_18M').style.display='none';
            document.getElementById('div_24M').style.display='none';
            document.getElementById('infant').style.display='none';

            document.getElementById('div_2T').style.display='none';
            document.getElementById('div_3T').style.display='none';
            document.getElementById('div_4T').style.display='none';
            document.getElementById('div_5T').style.display='none';
            document.getElementById('div_5_6').style.display='none';
            document.getElementById('div_6T').style.display='none';
            document.getElementById('div_7').style.display='none';
            document.getElementById('toddlers').style.display='none';


            document.getElementById('div_YXS').style.display='none';
            document.getElementById('div_YS').style.display='none';
            document.getElementById('div_YM').style.display='none';
            document.getElementById('div_YL').style.display='none';
            document.getElementById('div_YXL').style.display='none';
            document.getElementById('youth').style.display='none';


            document.getElementById('div_XS').style.display='none';
            document.getElementById('div_S').style.display='none';
            document.getElementById('div_M').style.display='none';
            document.getElementById('div_L').style.display='none';
            document.getElementById('div_XL').style.display='none';
            document.getElementById('div_2XL').style.display='none';
            document.getElementById('div_3XL').style.display='none';
            document.getElementById('div_4XL').style.display='none';
            document.getElementById('div_5XL').style.display='none';
            document.getElementById('adult').style.display='none';
            product.parent.sizes.forEach(size=>
            {
                if (size.name == "NB" || size.name == "0M" || size.name == "3M" || size.name == "6M" || size.name == "12M" || size.name == "18M" || size.name == "24M") 
                {
                    document.getElementById('infant').style.display='inline-block';
                }

                if (size.name == "2T" || size.name == "3T" || size.name == "4T" || size.name == "5T" || size.name == "5_6" || size.name == "6T" || size.name == "7") 
                {
                    document.getElementById('toddlers').style.display='inline-block';
                }

                if (size.name == "YXS" || size.name == "YS" || size.name == "YM" || size.name == "YL" || size.name == "YXL") 
                {
                    document.getElementById('youth').style.display='inline-block';
                }

                if (size.name == "XS" || size.name == "S" || size.name == "M" || size.name == "L" || size.name == "XL" || size.name == "2XL" || size.name == "3Xl" || size.name == "4XL" || size.name == "5XL")
                {
                    document.getElementById('adult').style.display='inline-block';
                }
                document.getElementById('div_'+size.name).style.display='inline-block';
            });
        }

        /**
            * Move object to center front an back
            * 
            * @return void
        */
        function setlayer(value) 
        {
            var object = canvasActive.getActiveObject();
            if (value == "forward") {
                object.bringForward();
            } else if (value == "backward") {
                object.sendBackwards();
            }
            else if(value == "center")
            {
                object.set('left', canvasActive.width / 2).setCoords();
            }
            canvasActive.renderAll();
            save();
        }

        function setcolor(element)
        {
            idcolorselected = element.id;
             colorselected = element.style.backgroundColor;
            var listcircles = document.getElementsByClassName('color1');
            for (var i = 0; i < listcircles.length; i++) 
            {
                listcircles[i].style.border = "1px solid #eee";
            }
            element.style.border = "2px solid #31B0D5";
        }

        function temp(element)
        {   
            currentdesign.num_shirts = 0;
            for (var i = 0; i < currentdesign.product.parent.sizes.length; i++)
            {   
                if(currentdesign.product.parent.sizes[i].name == element.id)
                {
                    currentdesign.product.parent.sizes[i].quantity =  Number(element.value);
                    currentdesign.num_shirts +=  Number(element.value);
                    //break;
                }
                else
                {
                    currentdesign.num_shirts += currentdesign.product.parent.sizes[i].quantity;
                }
            }  
            calc_price();
        }

        function compareValues(key, order='asc') {
            return function(a, b) {
                if(!a.hasOwnProperty(key) || !b.hasOwnProperty(key)) {
                // property doesn't exist on either object
                return 0;
                }

                const varA = (typeof a[key] === 'string') ?
                a[key].toUpperCase() : a[key];
                const varB = (typeof b[key] === 'string') ?
                b[key].toUpperCase() : b[key];

                let comparison = 0;
                if (varA < varB) {
                comparison = 1;
                } else if (varA > varB) {
                comparison = -1;
                }
                return (
                (order == 'desc') ? (comparison * -1) : comparison
                );
            };
        }

        function calc_price() 
        {        
            sidescolors = [];
            for(var i= 0; i < currentdesign.arrayside.length; i++)
            {
                var element = {quantity:currentdesign.arrayside[i].canvas.ColorList.length, name:currentdesign.arrayside[i].canvas.contextContainer.canvas.id, price:0.00}
                sidescolors.push(element);
            }

            $.ajax({
                type:'POST',
                dataType: 'json', 
                data: {
                        amnt: currentdesign.num_shirts,
                        sidescolors: JSON.stringify(sidescolors.sort(compareValues('quantity'))),
                        product: product.id,
                        list: JSON.stringify(currentdesign.product.parent.sizes),
                    },
                url: window.location.origin + '/getquoteembroidery',
                success:function(data)
                {   
                    var msg = data.price;
                    currentdesign.product.parent.sizes = data.sizelist;
                    //display price in "Add Product and Styles"
                    if (currentdesign.num_shirts > 0) 
                    {
                        currentdesign.price_per_shirt = msg / currentdesign.num_shirts;
                        currentdesign.total = msg;
                        //document.getElementById('totalPriceLabel').innerHTML = msg;
                        document.getElementById("itemPriceLabel").style.visibility = "visible";
                        document.getElementById("itemPriceLabel").style.display = "block";
                        document.getElementById('itemPrice').style.visibility = "visible";
                        document.getElementById('itemPrice').style.display = "inline";
                        document.getElementById('itemPrice').innerHTML = "$" + (msg / currentdesign.num_shirts).toFixed(2);
                        document.getElementById("numOfShirtsLabel").style.visibility = "visible";
                        document.getElementById('numOfShirtsLabel').innerHTML = " <b>Quantity:</b> <span style='color: #5cb85c; font-family: Arial;'>" + currentdesign.num_shirts + " item(s)</span> ";
                        document.getElementById("itemTotal").style.visibility = "visible";
                        document.getElementById('itemTotal').innerHTML = "$" + (msg * 1).toFixed(2);
                        document.getElementById("itemTotalLabel").style.visibility = "visible";
                    }
                    else 
                    {
                        document.getElementById("itemPriceLabel").style.visibility = "visible";
                        document.getElementById("itemPriceLabel").style.display = "block";
                        document.getElementById('itemPrice').style.visibility = "visible";
                        document.getElementById('itemPrice').style.display = "inline";
                        document.getElementById('itemPrice').innerHTML = "$0";
                        document.getElementById("numOfShirtsLabel").style.visibility = "visible";
                        document.getElementById('numOfShirtsLabel').innerHTML = " <b>Quantity:</b> <span style='color: #5cb85c; font-family: Arial;'> 0 item(s)</span> ";
                        document.getElementById("itemTotal").style.visibility = "visible";
                        document.getElementById('itemTotal').innerHTML = "$0";
                        document.getElementById("itemTotalLabel").style.visibility = "visible";
                    }
                }
            });
        }

        function savetemplate()
        {            
            setColorsInk();
            var design = [];
            canvaslist.forEach(canvas=>{
                canvas.discardActiveObject();
                if(canvas.getObjects().length > 0)
                {
                    var saveddesign =  {status:"created"};
                    if (canvas.width != 0)
                    {
                        saveddesign.toDataURL = canvas.toDataURL('image/png');
                        saveddesign.svg = canvas.toSVG();
                        saveddesign.json = JSON.stringify(canvas);
                    }
                    saveddesign.width_canvas = canvas.width;
                    saveddesign.height_canvas = canvas.height;
                    saveddesign.width_div = document.getElementById(canvas.side + 'CanvasShirt').style.width.replace("px", "");
                    saveddesign.height_div = document.getElementById(canvas.side + 'CanvasShirt').style.height.replace("px", "");
                    saveddesign.border_color_div = 0;
                    saveddesign.left = document.getElementById(canvas.name + 'canvas-wrapper').style.left.replace("px", "");
                    saveddesign.top = document.getElementById(canvas.name + 'canvas-wrapper').style.top.replace("px", "");
                    saveddesign.border_color_canvas = 0;
                    saveddesign.design_image = "";
                    saveddesign.design_product_image = "";
                    newurl = document.getElementById(canvas.side + 'CanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById(canvas.side + 'CanvasShirt').style.backgroundImage.replace("url", "").length - 2);                           
                    saveddesign.product_image = newurl.replace("https://www.vividcustoms.com/","");
                    saveddesign.side = canvas.name;
                    saveddesign.colorlist = canvas.ColorList;
                    design.push(saveddesign);
                }  
            });

            var sel = document.getElementById('oldcategory[]');
            var templatecategories = [];
            
            for (i = 0; i < sel.options.length; i++) 
            {
                opt = sel.options[i];
                if (opt.selected === true ) 
                {
                    templatecategories.push(opt.value);
                }
            }

            $.ajax({
                type:'POST',
                dataType: 'json', 
                data: {
                        email: currentdesign.email,
                        name: currentdesign.name,
                        product: currentdesign.product.id,
                        design: JSON.parse(JSON.stringify(design)),
                        templatecategories:templatecategories,
                    },
                url: window.location.origin + '/saveastemplateembroidery',  
                success:function(data)
                {  
                    console.log(data);
                    closemodal('saveTemplateModal');
                    //document.getElementById("loaderEmail").style.display = "none"; 
                    showalert('designsaved', 'Design saved!', 'success', 'Saved Design');
                },
                error: function(error) {
                    console.log("error in method savetemplate");
                    console.log(error);
                }
            });
        }

        
        fabric.Object.prototype.transparentCorners = false;

        fabric.Canvas.prototype.customiseControls({
            tr: {
                action: 'remove',
                cursor: 'pointer'
            },
            bl: {
                action: 'scale',
                cursor: 'pointer'
            },
            br: {
                action: 'scale',
                cursor: 'pointer'
            },
            ml: {
                action: 'scaleX',
                cursor: 'pointer'
            },
            mr: {
                action: 'scaleX',
                cursor: 'pointer'
            },
            mb: {
                action: 'scaleY',
                cursor: 'pointer'
            },
            mt: {
                action: 'scaleY',
                cursor: 'pointer'
            },
            tl: {
                action: 'rotate',
                cursor: 'pointer'
            },
        }, function() {
             canvaslist.forEach(canvas => {
                canvas.renderAll();
            });
        });

        function isMobile()
        {
            return false;
        }

        var day3 = new Date(dateFormat(Date.now(),"ddd mmm dd yyyy HH:MM:ss"));
        shoppingcart.shipby = getDeliveryDateObj(day3,4);
        var dayO = new Date();
        shoppingcart.date = getDeliveryDateObj(dayO,0);
        
    </script>
</body>

</html>