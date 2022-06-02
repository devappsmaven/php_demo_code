<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vivid Customs || Designstudio</title>
    <meta charset="utf-8">
    <meta http-equiv=“Pragma” content=”no-cache”>
    <meta http-equiv=“Expires” content=”-1″>
    <meta http-equiv=“CACHE-CONTROL” content=”NO-CACHE”>
    <meta name="viewport" content="width=device-width, minimal-ui, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/frontend/subas/icon/favicon.png')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Niconne" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/fonts.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/42fa7d18a0.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/frontend/designstudio/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/frontend/designstudio/responsive.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="modal fade" id="disableview" role="dialog">
        <div class="modal-dialog" style=" width: 100%; height: auto; margin: 0; padding: 0;">
            <!-- Modal content-->
            <div class="modal-content" style=" height: auto;min-height: 100%;border-radius: 0;">
                <div class="modal-body text-center">
                    <h1>PLEASE TURN YOUR DEVICE VERTICALLY</h1>
                    <h1>TO USE THE DESIGN STUDIO PAGE.</h1>
                    <img src="{{asset('img/turnvertical.png')}}" style="width: 20%">
                </div>
            </div>
        </div>
    </div>
    <header class="text-center">
        <div class="text-center">
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10" style="/*width: auto; max-width: 1360px;*/" id="col10header">
                    <div class="card-header card-fixed-top" id="header_bar" style="/*max-width: 1360px !important;*/">
                        <div class="row visible-lg visible-md">
                            <div class="col-md-5 col-lg-5">
                                <a href="https://www.vividcustoms.com')}}">
                                    <img src="{{asset('img/logo/vividcustoms-logo-small3.png')}}" id="logo" class="img-responsive visible-lg visible-md" width="200" height="60">
                                </a>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <h5 id="totalPriceh4" style="font-family: sans-serif; font-size: 1.2rem; text-transform: uppercase;">Total Price : $<span id="totalPriceLabel">0</span>&nbsp;</h5>
                            </div>
                            <div class="col-md-5 col-lg-5">
                                <div class="input-group" style="margin-right: 0px !important; padding-right: 0px !important; float: right !important;">
                                    <span>
                                        <button id="saveSectionLI" class="btn btn-success btn-lg" onclick=" deselectAllCanvases(); ShowSaveShare();return false;">
                                            <span class="glyphicon glyphicon-save">
                                            </span>Save & Share
                                        </button>
                                        <button id="directcheckout" class="btn btn-success btn-lg" style="display: none;" onclick="SaveDesignNameWindow('Check-out');">
                                            <span class="glyphicon glyphicon-shopping-cart">
                                            </span>Checkout
                                        </button>
                                        <button id="getPriceBtn" class="btn btn-success btn-lg" onclick=" ShowGetPrice();">
                                            <span class="glyphicon glyphicon-usd">
                                            </span>Get Price
                                        </button>
                                        
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
            </div>
             <nav class="navbar  visible-sm visible-xs">
                <div class=" navbar-header">
                <div class="navbar-toggle" style="padding: 0;  margin-top: 0px; margin-right: 0px; margin-bottom: 0px;">
                    <div class="row">
                        <div class="col-xs-3" style=" padding-right: 5px; padding-left: 5px; border-left: 1px solid #eee; border-right: 1px solid #eee;">
                            <span style="cursor: pointer !important;" onclick="ShowYourDesign();return false;">
                                <img src="{{asset('img/icon/your-design-mobile.png')}}" id="getPriceBtn" style="height: 20px;">
                            </span>
                            <br>
                            <span style="font-size: 12px;">Design</span>
                        </div>
                        <div class="col-xs-3" style=" padding-right: 5px; padding-left: 5px; border-right: 1px solid #eee; border-right: 1px solid #eee;">
                            <span id="directcheckout" onclick="ShowSaveShare();return false;">
                                <img src="{{asset('img/icon/save.png')}}" style="height: 20px;">
                            </span>
                            <br>
                            <span style="font-size: 12px;">Save</span>
                        </div>
                        <div class="col-xs-3" style=" padding-right: 5px; padding-left: 5px; border-right: 1px solid #eee; border-right: 1px solid #eee;">
                            <span id="directcheckout" onclick="SaveDesignNameWindow('Check-out');">
                                <img src="{{asset('img/icon/cart.png')}}" style="height: 20px;">
                            </span>
                            <br>
                            <span style="font-size: 12px;">Cart</span>
                        </div>
                        <div class="col-xs-3" style=" padding-right: 5px; padding-left: 5px; border-left: 1px solid #eee; border-right: 1px solid #eee;">
                            <span style="cursor: pointer !important;" onclick=" ShowGetPrice();">
                                <img src="{{asset('img/icon/money.png')}}" id="getPriceBtn" style="height: 20px;">
                            </span>
                            <br>
                            <span style="font-size: 12px;">Price</span>
                        </div>
                    </div>
                </div>
                <div class="navbar-brand" style="padding-top: 5px; padding-left: 10px;">
                    <div data-toggle="collapse" data-target="#dsmenu">
                        <a href="javascript:void(0)">
                            <img src="{{asset('img/logo/vividcustoms-logo-vc.png')}}" id="logosmall" style="width: 2.5em;">
                        </a>
                    </div>
                </div>
                </div>
                <div class="collapse navbar-collapse" id="dsmenu">
                    <ul style="">
                        <li style="">
                            <a href="{{asset('index')}}" style="">Home</a>
                        </li>
                        <li>
                            <a href="{{asset('designstudio')}}">Design Studio</a>
                        </li>
                        <li>
                            <a href="{{asset('login')}}">My account</a>
                        </li>
                        <li>
                            <a href="{{asset('products')}}">products</a>
                        </li>
                        <li>
                            <a href="{{asset('templatedesign')}}">Design Templates</a>
                        </li>
                        <li class="mean-last">
                            <a href="{{asset('contact')}}">Contact</a>
                        </li>
                        @guest
                            
                        @else                            
                            <li class="mean-last" id="logoutmobile">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <div class="container-fluid" id="page">
        <div class="row content">

            <div class="modal fade" id="SaveShareModal" role="dialog" style="overflow-y: auto;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" style="opacity: 1;">&times;</button>
                            <h4 class="modal-title">Save & Share</h4>
                        </div>
                        <div class="modal-body" style="overflow-y: hidden">
                            <div id="loaderOnly" class="loader" style="display: none;">SAVING DESIGN</div>
                            <div class="middlePage" id="design_name_area_only" style="display: none;">

                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title text-center"><span class="uppercase">Name your design</span></h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2" for="designNameOnly">Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="designNameOnly" placeholder="Enter Design Name" name="designNameOnly">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="saveandcontinueOnly" class="btn btn-default" onclick="SaveDesignNameWindow('SaveContinueOnly');">Save / Continue</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
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
                                            <!--<div class="col-md-6">-->
                                                <div class="col-lg-3 col-md-6 col-xs-12 thumbnail2">
                                                        <div id="frontSavedDesing" style="background-size: cover; background-position: center center; border: 1px solid;" >
                                                            <img id="frontPreviewSave" src="" class="img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 col-xs-12 thumbnail2">
                                                        <div id="rightSavedDesing" style="background-size: cover; background-position: center center; border: 1px solid;">
                                                            <img class="img-responsive" id="rightPreviewSave" src="">
                                                        </div>
                                                    </div>
                                            <!--</div>
                                            <div class="col-md-6">-->
                                                <div class="col-lg-3 col-md-6 col-xs-12 thumbnail2">
                                                        <div id="backSavedDesing" style="background-size: cover; background-position: center center; border: 1px solid;">
                                                            <img class="img-responsive" id="backPreviewSave" src="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 col-xs-12 thumbnail2">
                                                        <div id="leftSavedDesing" style="background-size: cover; background-position: center center; border: 1px solid;">
                                                            <img class="img-responsive" id="leftPreviewSave" src="">
                                                        </div>
                                                    </div> 
                                            <!--</div>-->
                                        </div>
                                    </div>
                                </div>
                                <hr style="margin-bottom: 10px; background-color: #4598ba; height: 2px; border: 0;">
                                <div class="panel panel-info">
                                    <div class="row">
                                     <div class="col-lg-12">
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
                                        <div class="col-lg-12">
                                        <div class="panel-heading"><center><span class="uppercase">Share your design</span></center></div>
                                        <div class="panel-body">
                                            <form class="form-horizontal" style="display: none;">
                                                <p>Via Facebook, Twitter, Instagram, or Email!</p>
                                                <i class="fa fa-facebook" aria-hidden="true" style="font-size: 5vh;"></i>
                                                <i class="fa fa-twitter" aria-hidden="true" style="font-size: 5vh;"></i>
                                                <i class="fa fa-instagram" aria-hidden="true" style="font-size: 5vh;"></i>
                                                <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 5vh;"></i>
                                            </form>
                                            <form class="form-horizontal" id="emailform">
                                                <!--URLs for front, right, back, and left designs with products-->
                                                <input type="hidden" id="frontShirtURL" name="frontShirtURL">
                                                <input type="hidden" id="frontImageURL" name="frontImageURL">
                                                <input type="hidden" id="rightShirtURL" name="rightShirtURL">
                                                <input type="hidden" id="rightImageURL" name="rightImageURL">
                                                <input type="hidden" id="backShirtURL" name="backShirtURL">
                                                <input type="hidden" id="backImageURL" name="backImageURL">
                                                <input type="hidden" id="leftShirtURL" name="leftShirtURL">
                                                <input type="hidden" id="leftImageURL" name="leftImageURL">
                                                <input type="hidden" id="designURL" name="designURL">
                                                <div class="input-group">
                                                    <span class="input-group-addon">Desing Name:</span>
                                                    <input id="designnameshare" type="test" class="form-control" name="designnameshare" placeholder="Enter your Design Name">
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6" style="padding-left: 0px">
                                                         <div class="input-group">
                                                            <span class="input-group-addon">Email From:</span>
                                                            <input id="from_email" type="email" class="form-control" name="from_email" placeholder="Enter your email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="padding-right: 0px">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">Email To:</span>
                                                            <input id="to_email" type="text" class="form-control" name="to_email" placeholder="Enter email address separated by commas">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="input-group">
                                                    <span class="input-group-addon">Message:</span>
                                                    <textarea id="message" type="text" class="form-control" name="message" placeholder="Enter message" maxlength="145"></textarea>
                                                </div>
                                                <br>
                                                <!--SHARE DESIGN PREVIEWS--> 
                                                <div id="shareDesigns" class="row" style="display: none;">
                                                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 thumbnail2">
                                                        <div id="frontSharePreviewCase" style="background-size: cover; background-position: center center;">
                                                            <img id="sharePreviewFront" class="img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 thumbnail2">
                                                        <div id="rightSharePreviewCase" style="background-size: cover; background-position: center center;">
                                                            <img id="sharePreviewRight" class="img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 thumbnail2">
                                                        <div id="backSharePreviewCase" style="background-size: cover; background-position: center center;">
                                                            <img id="sharePreviewBack" class="img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 thumbnail2">
                                                        <div id="leftSharePreviewCase" style="background-size: cover; background-position: center center;">
                                                            <img id="sharePreviewLeft" class="img-responsive">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="loaderEmail" class="loader" style="display: none;"></div>
                                                <div class="alert alert-success" id="emailmessage" style="display: none;">
                                                  <strong>Email Sent</strong>
                                                </div>
                                                <br>
                                                <center><button type="button" name="submit" class="btn btn-primary" onclick="SaveDesignNameWindow('sendemail');" style="background-color: #399fd9; width: 90%;">
                                                    Send Email
                                                </button></center>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="YourDesignsModalError" role="dialog">
                <div class="modal-dialog" style="top: 40% !important;">
                    <!-- Modal content-->
                    <div class="modal-header modal-header-danger">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><strong>Only for members!</strong></h4>
                    </div>
                    <div class="alert alert-danger">
                        Create your account with us and enjoy the benefits of being a member
                    </div>
                </div>
            </div>
            <!-- Modal Save Share -->
            <div class="modal fade" id="YourDesignsModal" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" style="opacity: 1;">&times;</button>
                            <h4 class="modal-title">View your previous designs!</h4>
                        </div>
                        <div class="modal-body">
                            <div id="loaderOnly" class="loader" style="display: none;">LOADING DESIGN</div>
                            <div class="row" id="SaveShareModalDiv">
                                <div class="col-lg-12">
                                    <div class="panel panel-info">
                                        <div class="panel-heading"><span class="uppercase">View your previous designs!</span> </div>
                                        <div class="panel-body">
                                            <select class="form-control" id="mydesings" onChange="loadImages(this.value);">
                                                <?php 
                                       function dirTree($dir) 
                                       {
                                           $arDir = [];
                                           $d = dir($dir);
                                           while (false !== ($entry = $d->read())) 
                                           {
                                               
                                               if($entry != '.' && $entry != '..' && is_dir($dir.$entry))
                                               { 
                                                 echo ('<option title="'.$entry.'" value="'.$entry.'">'.explode("_",$entry)[1].'</option>');
                                               }
                                       
                                           }
                                           $d->close();
                                           return $arDir;
                                       }                         
                                       if (isset($_SESSION['user']))
                                       {
                                           echo ('<option title="Select the design">Select the design</option>');
                                           $dir = dirname(__FILE__).'/designs/'.$_SESSION['user']['Username'].'/';
                                           if (is_dir($dir))
                                           {
                                             dirTree($dir);
                                           }
                                           
                                       } 
                                       else
                                       {
                                           echo ('<option title="Select the design">Select the design</option>');     
                                       }  
                                       
                                       ?>
                                            </select>
                                            <br>
                                            <!--SAVED DESIGN-->
                                            <div id="yourdesing">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img class="img-responsive" id="frontPreviewSaveDesign"  style="max-width: 250px;">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <img class="img-responsive" id="rightPreviewSaveDesign"  style="max-width: 250px;">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <img class="img-responsive" id="backPreviewSaveDesign"  style="max-width: 250px;">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <img class="img-responsive" id="leftPreviewSaveDesign"  style="max-width: 250px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <button type="button" name="LoadDesign" class="btn btn-primary btn-block" onclick="LoadDesigns(null);" data-dismiss="modal" style="background-color: #399fd9;">
                                                    <label class="">
                                                        Load Design
                                                    </label>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                    <div class="col-md-7 col-lg-7 text-center" style="/*border: 1px solid #eeeeee*/ border-right: 1px solid #eeeeee;">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 thumbnail2">
                                                <label for="frontcolos" id="frontcolos" name="frontcolos" style="font-size: 1.1rem;"></label>
                                                <div id="frontSavedDesingPreview" style="background-repeat: no-repeat; background-size: cover; background-position: center center; border: 1px #000000 solid;">
                                                    <img id="frontSavePreview" src="" alt="" class="img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 thumbnail2">
                                                <label for="rightcolos" id="rightcolos" name="rightcolos" style="font-size: 1.1rem;"></label>
                                                <div id="rightSavedDesingPreview" style="background-repeat: no-repeat; background-size: cover; background-position: center center; border: 1px #000000 solid;">
                                                    <img id="rightSavePreview" src="" alt="" class="img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 thumbnail2">
                                                <label for="backcolos" id="backcolos" name="backcolos" style="font-size: 1.1rem; " ></label>
                                                <div id="backSavedDesingPreview" style="background-repeat: no-repeat; background-size: cover; background-position: center center; border: 1px #000000 solid;">
                                                    <img id="backSavePreview" src="" alt="" class="img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 thumbnail2">
                                                <label for="leftcolos" id="leftcolos" name="leftcolos" style="font-size: 1.1rem;"></label>
                                                <div id="leftSavedDesingPreview" style="background-repeat: no-repeat; background-size: cover; background-position: center center; border: 1px #000000 solid;">
                                                    <img id="leftSavePreview" src="" alt="" class="img-responsive">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-lg-5 visible-lg visible-md" style="/*border: 1px solid #eeeeee*/">
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
                                        <div id="infant" class="col-lg-5 sizeinput" style="display: none;">

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
                                        <div id="toddlers" class="col-lg-7 sizeinput" style="display: none; /*float: right;*/">

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
                                        <div id="youth" class="col-lg-5 sizeinput" style="display: none;">

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
                                        <div id="adult" class="col-lg-7 sizeinput" style="display: none;/* float: right;*/">

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
                                            <div id="onesize" class="col-lg-12 sizeinput" style="display: none;/* float: right;*/">

                                                <div class="" style="display:none; -webkit-box-flex: 0;flex: 0 0 2.25rem; margin-right: .25rem;" id="div_ONE_SIZE">
                                                    <label for="ONE_SIZE">ONE SIZE</label>
                                                    <input type="number" onkeypress="validate(event);" class="form-control2" id="ONE_SIZE" name="ONE_SIZE" oninput="temp(this);">
                                                </div>
                                                <h5 style="margin-top:1px;">ONE SIZE</h5>
                                            </div>
                                        </div>
                                        <div class="row productsizeseow2" id="personalizeresumen">
                                            
                                        </div>
                                    </div>
                                </div>

                                <hr align="center" style="margin-bottom: 0px; background-color: #4598ba; height: 2px; border: 0;">
                                <!-- <div class="row">
                              <div style="color: #000; font-size: 24px; font-weight: 700;"><center>Your All Inclusive Pricing</center></div><br>
                              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                              <h4 id="itemPriceLabel" style="margin-top: 2px;"><b>Price per item:</b> <span id="itemPrice" style="color: #5cb85c; font-family: Arial;"></span></span></h4>
                              <h4 id="numOfShirtsLabel" style="position: relative; margin-top: 2px;"><b>Quantity:</b> <span style='color: #5cb85c; font-family: Arial;'> 0 item(s)</span></h4>
                              <h4 id="itemTotalLabel" style=""><b>Total:</b> <span id="itemTotal" style="color: #5cb85c; font-family: Arial;"></span></h4>
                              </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <button type="button" class="btn btn-success" style="float: right;" id="AddKeepDesign" name="AddKeepDesign" onclick="SaveDesignNameWindow('AddKeepDesign');">Add To Cart</button></div>
                           </div>   -->

                                <!-- New Testing Start -->
                                <div class="row">
                                    <span style="color: #000; font-size: 24px; font-weight: 700;">
                                        <center>Your All Inclusive Pricing</center>
                                    </span><br>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <h4 id="itemPriceLabel" style="margin-top: 2px;"><b>Price per item:</b> <span id="itemPrice" style="color: #5cb85c; font-family: Arial;"></span></h4>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <h4 id="numOfShirtsLabel" style="position: relative; margin-top: 2px;"><b>Quantity:</b> <span style='color: #5cb85c; font-family: Arial;'> 0 item(s)</span></h4>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
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
                                            <div class="col-md-5">
                                                <div class="row">
                                                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 thumbnail2">
                                                        <label for="frontcolos2" id="frontcolos2" name="frontcolos2"></label>
                                                        <div id="frontSavedDesingPreview2" style="background-repeat: no-repeat; background-size: cover; background-position: center center;">
                                                            <img id="frontSavePreview2" src="" alt="" class="img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 thumbnail2">
                                                        <label for="rightcolos2" id="rightcolos2" name="rightcolos2"></label>
                                                        <div id="rightSavedDesingPreview2" style="background-repeat: no-repeat; background-size: cover; background-position: center center;">
                                                            <img id="rightSavePreview2" src="" alt="" class="img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 thumbnail2">
                                                        <label for="backcolos2" id="backcolos2" name="backcolos2"></label>
                                                        <div id="backSavedDesingPreview2" style="background-repeat: no-repeat; background-size: cover; background-position: center center;">
                                                            <img id="backSavePreview2" src="" alt="" class="img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 thumbnail2">
                                                        <label for="leftcolos2" id="leftcolos2" name="leftcolos2"></label>
                                                        <div id="leftSavedDesingPreview2" style="background-repeat: no-repeat; background-size: cover; background-position: center center;">
                                                            <img id="leftSavePreview2" src="" alt="" class="img-responsive">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7" style="border-left:1px solid #ccc;height:160px">
                                                <div class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2" for="designName">Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="designName" placeholder="Enter Design Name" name="designName">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2" for="designemail">E-mail:</label>
                                                        <div class="col-sm-10">
                                                            <input type="email" class="form-control" id="designemail" placeholder="Enter E-mail" name="designemail">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
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
                                    <div class="col-lg-12" style=" height: 300px; overflow-y: auto; overflow-x: hidden;">
                                        <div class="table-responsive" id="Cart" style="display: none;">
                                            <span class="uppercase">
                                                <h4>Your Cart</h4>
                                                <hr align="center" style="margin-top: 1px; background-color: #4598ba; height: 1px; border: 0;">
                                            </span>
                                            <table class="table table-striped">
                                                <thead id="Cart-Head">
                                                    <tr class="row">
                                                        <th class="col-lg-1">Design</th>
                                                        <th class="col-lg-2 visible-lg visible-md"  id="cart_brand">Brand/Style</th>
                                                        <th class="col-lg-1 visible-lg visible-md"  id="cart_color">Color</th>
                                                        <th class="col-lg-2 visible-lg visible-md"  id="cart_size">Sizes</th>
                                                        <th class="col-lg-1">Quantity</th>
                                                        <th class="col-lg-2 visible-lg visible-md"  id="cart_price">Price Per Shirt</th>
                                                        <th class="col-lg-2">Sub-Total</th>
                                                        <th class="col-lg-1"> </th>
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
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document" style="  max-width: 1360px;  width: 100%;height: 100%; margin: auto;padding: 0;">
                    <div class="modal-content" style="width: 100%; height: 100%; margin: 0; padding: 0; overflow: auto;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"><span class="uppercase">Products</span></h4>
                        </div>
                        <div class="modal-body">
                            <div class="panel-group" id="accordion" name="accordion">

                            </div>
                        </div>
                        <!--<div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>-->
                    </div>
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
                            <div class="panel panel-info"  id="panellogin">
                                <div class="panel-heading"> <span class="uppercase">RETURNING CUSTOMER </span></div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="control-label col-xs-12 col-md-2" for="user_name" style="text-align: left;">Username:</label>
                                        <div class="col-xs-12 col-md-10">
                                            <input type="username" class="form-control" id="user_name" placeholder="Enter Username" name="user_name"><br>
                                        </div>
                                        <!--<small id="passwordHelp" class="form-text text-muted" data-toggle="tooltip" data-placement="top" title="Passwords must be at least 8 characters in length include (lower case letters, upper case letters, number and special characters).">Make sure password meets specifications.</small>-->
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-xs-12 col-md-2" for="pass_word" style="text-align: left;">Password:</label>
                                        <div class="col-xs-12 col-md-10">
                                            <input type="password" class="form-control" id="pass_word" placeholder="Enter Password" name="pass_word"><br>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                    <input type="hidden" name="operationL" id="operationL" value="login">
                                        <button type="button" class="btn btn-block" onclick="login();" style="cursor: pointer; text-transform: uppercase; text-decoration: none;font-size: 1em;background-color: #c00;border-color: #c00;color: #fff;font-weight: 500;padding: 10px;width: 100%;text-align: center;">Sign In</button>
                                    </div>
                                </div>
                            </div>
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
                                            <label class="control-label col-xs-12 col-md-2" for="firstname"  style="text-align: left;"> <span class="visible-lg visible-md">First Name:</span> <span class="visible-sm visible-xs">First Name *</span></label>
                                            <div class="col-xs-12 col-md-10">
                                                <input type="text" class="form-control" id="firstname" placeholder="Enter first name" name="firstName">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-md-2" for="lastname"  style="text-align: left;">Last Name:</label>
                                            <div class="col-xs-12 col-md-10">
                                                <input type="lastname" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastName">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-md-2" for="username"  style="text-align: left;">Username:</label>
                                            <div class="col-xs-12 col-md-10">
                                                <input type="username" class="form-control" id="username" placeholder="Enter Username" name="username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-md-2" for="pwd"  style="text-align: left;">Password:</label>
                                            <div class="col-xs-12 col-md-10" align="left">
                                                <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
                                                <a href="#passwordrules" class="" data-toggle="collapse">Specifications</a>
                                                <div id="passwordrules" class="collapse">
                                                  <p>Passwords must be at least 8 characters.</p>
                                                  <p>include (lower case letters, upper case letters, number and special characters)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-md-2" for="email"  style="text-align: left;">E-mail:</label>
                                            <div class="col-xs-12 col-md-10">
                                                <input type="email" class="form-control" id="email" placeholder="Enter E-mail" name="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-md-2" for="email"  style="text-align: left;">Confirm E-mail:</label>
                                            <div class="col-xs-12 col-md-10">
                                                <input type="email" class="form-control" id="confirmemail" placeholder="Enter Confirmation E-mail" name="confirmemail">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-md-2" for="phone"  style="text-align: left;">Phone:</label>
                                            <div class="col-xs-12 col-md-10">
                                                <input type="phone" class="form-control" id="phone" placeholder="Enter Phone" name="phone">
                                            </div>
                                        </div>
                                        <input type="hidden" name="operationR" id="operationR" value="signup">
                                        <button type="button" class="btn btn-block" onclick="register();" style="cursor: pointer; text-transform: uppercase; text-decoration: none;font-size: 1em;background-color: #c00;border-color: #c00;color: #fff;font-weight: 500;padding: 10px;width: 100%;text-align: center;">Create Account</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                    </select>
                                    <center><button type="button" class="btn btn-link" data-toggle="collapse" data-target="#demo">Add New Design Template Category</button></center>
                                    <div id="demo" class="collapse">
                                        <div class="panel panel-default">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="newcategoryname" placeholder="" name="newcategoryname" required="">
                                                <div class="help-block">Minimum of 1 characters and name have to be same that filename</div>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" id="newcategory" name="newcategory">
                                                    <option value="0">Parent Product Category</option>
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
            <div id="saveStoreModal" class="modal fade" role="dialog">
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
                                    <select class="form-control" id="oldstorecategory[]" name="oldstorecategory[]" required="" multiple="" data-style="btn-primary" size="15">
                                    </select>
                                    <center><button type="button" class="btn btn-link" data-toggle="collapse" data-target="#storedemo">Add New Design Template Category</button></center>
                                    <div id="storedemo" class="collapse">
                                        <div class="panel panel-default">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="newstorecategoryname" placeholder="" name="newstorecategoryname" required="">
                                                <div class="help-block">Minimum of 1 characters and name have to be same that filename</div>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" id="newstorecategory" name="newstorecategory">
                                                    <option value="0">Parent Product Category</option>
                                                </select>
                                            </div>
                                            <center><button type="button" class="btn btn-primary" id="category_insert_btn" name="category_insert_btn" onclick="saveStoreCategory();">Add New Product Category</button></center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" onclick="savestoredesign();">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-10" style="/*width: auto; max-width: 1360px;*/" id="col10body">
                <div class="">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 visible-lg" id="menu_area" name="menu_area">
                            <ul class="nav nav-tabs nav-stacked" id="icon-img" style="/*height: 90%;*/ text-align: center; ">
                                <li class="active" style="border: 2px solid #ffffff; border-radius: 10px;" onclick="deselectAllCanvases();">
                                    <a data-toggle="tab" href="#productSection"><img class="menu_btn" id="change_item" src="{{asset('img/icon/product.png')}}" onclick="activateMenu(this);">
                                        <br>Products</a>
                                </li>
                                <li style="border: 2px solid #ffffff; border-radius: 10px;" onclick="deselectAllCanvases(); document.getElementById('editArt').style.display = 'none';  document.getElementById('newArt').style.display = 'block'; activateMenu('image');">
                                    <a data-toggle="tab" href="#addArt"><img class="menu_btn" id="add_art" src="{{asset('img/icon/add-art.png')}}" style="width: 100%;" onclick="startcategories();"><br>Add Art</a>
                                </li>
                                 <li onclick="deselectAllCanvases(); activateMenu('text');" style="border: 2px solid #ffffff; border-radius: 10px;">
                                    <a data-toggle="tab" href="#textSection">
                                        <img class="menu_btn" id="add_text" src="{{asset('img/icon/add-text.png')}}" style="width: 100%;">
                                        <br>Add Text
                                    </a>
                                </li>
                                <li style="border: 2px solid #ffffff; border-radius: 10px;" onclick="deselectAllCanvases(); activateMenu('template');">
                                    <a data-toggle="tab" href="#addTemplate"><img class="menu_btn" id="add_template" src="{{asset('img/icon/templates.png')}}" style="width: 100%;" onclick="starttemplatecategories();"><br>Templates</a>
                                </li>
                                <li id="personalizeLI" style="border: 2px solid #ffffff; border-radius: 10px;" onclick="deselectAllCanvases(); activateMenu('personalize'); displaypersonalize('backCanvas', true); $('#PersonalizeNotification').modal('show');">
                                    <a data-toggle="tab" href="#personalize"><img class="menu_btn" src="{{asset('img/icon/personalize.png')}}" style="width: 100%;"><br>Personalize</a>
                                </li>
                                <li id="your_design" onclick="deselectAllCanvases(); ShowYourDesign();return false;" style="border: 2px solid #ffffff; border-radius: 10px;">
                                    <a>
                                        <img class="menu_btn" src="{{asset('img/icon/your-design.png')}}" style="width: 100%;" onclick="activateMenu(this);">
                                        <br>My Designs
                                    </a>
                                </li>
                                <li id="saveTemplateLI" style="border: 2px solid #ffffff; border-radius: 10px; display: none;">
                                    <a data-toggle="tab" href="javascript:void(0)" onclick="deselectAllCanvases(); showColorModal('saveTemplateModal'); LoadDesignsCategories();">
                                        <img class="menu_btn" id="save_and_template" src="{{asset('img/icon/save-share.png')}}" style="width: 100%;" onclick="activateMenu(this);">
                                        <br>Save &amp; Template
                                    </a>
                                </li>
                                <li id="saveStoreLI" style="border: 2px solid #ffffff; border-radius: 10px; display: none;">
                                    <a data-toggle="tab" href="javascript:void(0)" onclick="deselectAllCanvases(); showColorModal('saveStoreModal'); LoadStoreDesignsCategories();">
                                        <img class="menu_btn" id="save_and_store" src="{{asset('img/icon/save-share.png')}}" style="width: 100%;" onclick="activateMenu(this);">
                                        <br>Save &amp; Store
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4" id="work_area" style="/*width: 100%;*/ height: 810px; overflow: auto; /*overflow:scroll; height:810px;*/">
                            <div class="tab-content">
                                <div id="productSection" class="tab-pane fade in active panelshadow">
                                    <div class="panel panel-info">
                                        <div class="panel-heading"><span class="uppercase">Current Product</span>
                                          <a type="button"  id="changeproduct" name="changeproduct"   style="float: right; cursor: pointer;" href="javascript:void(0)">
                                            <span class="uppercase">Change Product</span>
                                          </a>
                                        </div>
                                        <div class="panel-body">
                                          <!--START PRODUCT DESCRIPTION-->
                                          <div class="row">
                                            <div class="col-sm-6 col-md-6 col-lg-6">
                                              <img id="description_image">
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-6">
                                              <h5 id="product_name">T-Shirt</h5>
                                              <div id="description_label">
                                      
                                              </div>
                                            </div>
                                          </div>
                                          <!-- Modal -->
                                          <div class="modal fade" id="sizechartmodal" role="dialog">
                                            <div class="modal-dialog modal-lg ">
                                              <!-- Modal content-->
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title"><span class="uppercase">Size Chart</span></h4>
                                                </div>
                                                <div class="modal-body">
                                                  <div class="row">
                                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                                      <h4 class="modal-title">How to Measure</h4>
                                                        <br>
                                                        <div class="row">
                                                          <div class="col-lg-4 col-md-4 col-sm-4">
                                                            <div for="sizechartimage" id="sizechartimage" name="sizechartimage">
                                                              
                                                            </div>   
                                                          </div>
                                                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">    
                                                              <label for="sizechartdescription" id="sizechartdescription" name="sizechartdescription"></label>                                        
                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                      <h4 class="modal-title">Size Chart</h4>
                                                      <table class="table table-striped table-bordered" id="sizechartable" name="sizechartable" >
                                                      </table>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <!--END   PRODUCT DESCRIPTION-->
                                        </div>
                                      </div>
                                      <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <span class="uppercase">Change Product Color</span>
                                            <span style="float: right"> Current Color
                                                <span id="current_product_color"></span>
                                                <span id="current_selected_product_color" style="display: none;"></span>
                                            </span>
                                        </div>
                                        <div class="panel-body">
                                        <div class="row" id="child_product_color_div"> 
                                        </div>
                                        <br>
                                        <div class="row" id="child_product_color_div6"> 
                                        </div>
                                        </div>
                                    </div> 
                                </div>
                                <div id="addArt" class="tab-pane fade panelshadow">
                                    <div id="newArt">
                                        <div id="clipartCategory" >
                                            <div id="clipArtMenu" class="panel panel-info">
                                              <div id="clipArtCategories">
                                                <ol class="breadcrumb" id="breadcrumb" style="cursor:pointer; margin-bottom: 5px;">
                                                  <li class="active" id="categories">Clip Art Categories</li>
                                                  <li id="subcategories" style="display: none; "></li>
                                                  <li id="subsubcategories" style="display: none;"></li>
                                                  <li id="clips" style="display: none;"></li>
                                                </ol>
                                              </div>                        
                                              <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search clipart by name" name="searchclipart" id="searchclipart" oninput="Scan();">
                                                <div class="input-group-btn">
                                                  <button class="btn btn-success" type="button" onclick="Scan();" style="background-color: #4fc1f0 !important;">
                                                    <i class="glyphicon glyphicon-search" style="color: white;"></i>
                                                  </button>
                                                </div>
                                              </div>
                                              <div id="clipArtTable2" style="display: none;" >
                                              </div>
                                              <div id="clipArtTable"  style="display: block;">
                                                <div class="row text-center">
                                                    @foreach($clipartcategories as $clipartcategory)
                                                        <div class="col-xs-4">
                                                            <a href="javascript:void(0);" onclick="setCategory('{{$clipartcategory->title}}');">
                                                                <img src="{{asset('img/clipart')}}{{'/'}}{{$clipartcategory->title}}{{'/'}}{{$clipartcategory->filename}}" alt="{{$clipartcategory->title}}"  class="hover" style="padding: 1vw;">
                                                                <div class="caption">
                                                                    <p>{{$clipartcategory->title}}</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                </div>                       
                                            </div>      
                                            </div>
                                        </div>
                                        <!--UPLOAD SECTION-->
                                        <div class="panel-group">
                                            <div class="panel panel-info">
                                                <div class="panel-heading"> <span class="uppercase">Upload your own Artwork </span></div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-12 col-lg-12">
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
                                                    <div class="row" id="uploaddiv" style="">
                                                        <div class="col-sm-6 col-md-6 col-lg-6" align="left"> <input type="file" id="file" name="file"  onchange="uploadImage();"/></div>
                                                        <div class="col-sm-6 col-md-6 col-lg-6" align="right"><button id="upload" class="btn btn-info" style="background-color: #4fc1f0; display: none;">Upload</button></div>
                                                    </div>
                                                    <div id="loaderupload" class="loader" style="display: none;">UPLOADING</div>
                                                    <div id="uploadpreview" src="" style="display: none;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--START MODIFY ART SECTION-->
                                    <div id="editArt" style="display: none;">
                                        <div class="panel-group">
                                            <div class="panel panel-info" style="">
                                                <div class="panel-heading">
                                                    <span class="uppercase">Edit Color: </span>
                                                </div>

                                                <div class="panel-body" id="Artcolorink" name="Artcolorink" style="">
                                                    <span>Select a color to edit: </span><label id="Artcolor" name="Artcolor"></label>
                                                    <div id="objectcolors" name="objectcolors">                                                       
                                                    </div>
                                                    <br>
                                                    <div id="inkcolorlist">
                                                        <span style="display: block;">Select new color:</span>
                                                        <div class="block transparent" id="artcolortransparent" style="border-radius:  50%;  margin-right: 1.7px; background-color: #ffffff; border:2px solid #eeeeee; cursor:pointer" onclick="document.getElementById('Artcolor').innerHTML = 'Transparent'; changeColor('transparent');">
                                                        </div>
                                                        @foreach($inkcolors as $inkcolor)
                                                            <div id="artcolor{{$inkcolor->hex}}" class="block" title="{{$inkcolor->name}}" style="border-radius:  50%;  margin-right: 1.7px; background-color: {{$inkcolor->hex}}; border:1px solid #eeeeee; cursor:pointer" onclick="document.getElementById('Artcolor').innerHTML = '{{$inkcolor->name}}'; changeColor('{{$inkcolor->hex}}'); ">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-sm-12" style="margin-top: 15px; padding-left: 0px;" id="checkcolorlegend">
                                                        <span class="animate2"></span> Indicates a color already in your design
                                                    </div>
                                                    <br>
                                                    <div class="col-md-12 col-lg-12 col-sm-12" style="margin-top: 15px; padding-left: 0px;" id="artcolortransparentlegend">
                                                        <div class="block transparent" style="border-radius: 50%;  margin-right: 1.7px; background-color: #ffffff; border:2px solid #eeeeee; cursor:pointer;">
                                                        </div> Indicates a color is transparent
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel panel-info" style="">
                                                <div class="panel-heading"><span class="uppercase">Edit Art</span></div>
                                                <div class="panel-body">
                                                    <center><i class="fa fa-lock" id="resizeicon" style="font-size:25px;color:#31b0d5; cursor: pointer;" onclick="SetScaleProportional();"></i></center>
                                                    <div class="">
                                                        <div class="row">
                                                            <div class="col-lg-2 inputslider" align="left"> <span>Width</span> </div>
                                                            <div class="col-lg-8  inputslider"> <input id="widthImage" type="range" min="1" max="12" name="widthImage" oninput="resize(event);" style="width: 100%;" step="0.1"> </div>
                                                            <div class="col-lg-2 inputslider" align="right"><input id="widthvalueImage" type="text" onkeypress="validate(event);" name="widthvalueImage" min="1" max="12" oninput="resize(event);" step="0.1" style="width: 55px !important;" readonly="true"></div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="">
                                                        <div class="row">
                                                            <div class="col-lg-2 inputslider" align="left"> <span>Height</span> </div>
                                                            <div class="col-lg-8  inputslider"> <input id="heightImage" type="range" min="1" max="12" name="heightImage" oninput="resize(event);" style="width: 100%;" step="0.1"> </div>
                                                            <div class="col-lg-2 inputslider" align="right"><input id="heightvalueImage" type="text" onkeypress="validate(event);" name="heightvalueImage" min="1" max="12" oninput="resize(event);" step="0.1" style="width: 55px !important;" readonly="true"></div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="">
                                                        <div class="row">
                                                            <div class="col-lg-2 inputslider" align="left"> <span>Rotation</span> </div>
                                                            <div class="col-lg-8  inputslider"> <input id="angleImage" type="range" min="-180" max="180" name="angleImage" oninput="rotate(event);" style="width: 100%;" step="5" value="0"> </div>
                                                            <div class="col-lg-2 inputslider" align="right"><input id="anglevalueImage" type="number" onkeypress="validate(event);" name="anglevalueImage" min="-180" max="180" value="0" oninput="rotate(event);" step="5" style="width: 55px !important;" readonly="true"></div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <!-- Start New Rotation Section -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-left: 1px; padding-right: 1px; margin-left:auto; margin-right:auto;">
                                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="background-color: #eeeeee; padding: 1px; border-right: solid 4px white;">
                                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" style="padding: 1px; border-right: solid 1px black;"><span onclick="flipX();" style="cursor: pointer;"><img src="{{asset('img/icon/icon-flip-across.png')}}" width="22px" height="auto"></span></div>
                                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" style="padding: 1px;"><span onclick="flipY();" style="cursor: pointer;"><img src="{{asset('img/icon/icon-flip-up.png')}}" width="auto" height="20px"></span></div>
                                                        </div>
                                                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5" style="background-color: #eeeeee; padding: 1px; border-right: solid 4px white;">
                                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" style="padding: 1px; border-right: solid 1px black;" onclick="SetLayer('forward');"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-layer-up.png')}}" width="auto" height="20px"></span></div>
                                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" style="padding: 1px;" onclick="SetLayer('backward');"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-layer-down.png')}}" width="auto" height="20px"></span></div>
                                                        </div>
                                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="background-color: #eeeeee; padding: 1px;">
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center" style="padding: 1px;" onclick="SetLayer('center');"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-center.png')}}" width="auto" height="20px"></span></div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-left: 1px; padding-right: 1px;">
                                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-4" align="center"><span>Flip</span></div>
                                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-5" align="center"><span>Layers order</span></div>
                                                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-3" align="center"><span>Center</span></div>
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
                                </div>
                                <div id="addTemplate" class="tab-pane fade panelshadow">
                                    <div class="panel-group">
                                        <div class="panel panel-info">
                                            <div class="panel-body">
                                                <div id="templateCategory">
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
                                                </div>
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
                                                <button type="button" id="textarea_btn" class="btn btn-success btn-block form-control" onclick="/*OpenClose('carousel_area','work_area','textarea_btn');*/">Add Text</button>
                                            </div>
                                            <div class="panel-group">
                                                <div class="panel panel-info" id="font_btn" style="display: none; ">
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
                                                            <div id="font_menu" style="display: none;">
                                                                <ul id="font_menu_bar" class="nav nav-tabs">
                                                                                                        
                                                                    <li class="active col-xs-12" align="center"><a data-toggle="tab" href="#home" class="uppercase">View all fonts</a></li>
                                                                    @foreach ($fontcategories as $fontcategory)   
                                                                        <li><a data-toggle="tab" href="#menu{{$fontcategory->name}}"><font>{{$fontcategory->name}}</font></a></li>');
                                                                    @endforeach
                                                                </ul>
                                                                <div id="font_menu_body" class="tab-content">
                                                                    <div id="home" class="tab-pane fade in active">
                                                                        @foreach ($fonts as $font)                                          
                                                                            <div class="row">
                                                                                <div class="col-lg-12"  style="border-bottom: 1px solid;" id="{{$font->name}}" onclick="setFont(this);">
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
                                                                                <div class="col-lg-12" style="border-bottom: 1px solid;" id="{{$font->name}}" onclick="setFont(this);">
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
                                            <div id="text_menu" style="display: none;">
                                                <div class="panel panel-info" style="">
                                                    <div class="panel-heading"><span class="uppercase">Text Color: </span><label id="Textcolor" name="Textcolor"></label></div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <span class="animate2"></span> Indicates a color already in your design<br>
                                                                <div class="row">
                                                                    <div class="col-xs-12" style="margin-top:10px;">
                                                                        @foreach($inkcolors as $inkcolor)
                                                                            <div id="textcolor{{$inkcolor->hex}}" class="block" title="{{$inkcolor->name}}" style="border-radius:  50%; margin-right: 1.7px; background-color:{{$inkcolor->hex}}; width: 30px; height: 30px; border:1px solid #eeeeee; cursor:pointer" onclick="OpenClose('carousel_area','work_area','Textcolor'); document.getElementById('Textcolor').innerHTML = '{{$inkcolor->name}}';changeColorText('{{$inkcolor->hex}}','f');">
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
                                                                            <div id="strokecolor{{$inkcolor->hex}}" class="block" title="{{$inkcolor->name}}" style="border-radius:  50%; margin-right: 1.7px; background-color:{{$inkcolor->hex}}; width: 30px; height: 30px; border:1px solid #eeeeee; cursor:pointer" onclick="OpenClose('carousel_area','work_area','Textstrokecolor'); document.getElementById('Textstrokecolor').innerHTML = '{{$inkcolor->name}}';changeColorText('{{$inkcolor->hex}}','f');">
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            <br>
                                                            <div class="input-group">
                                                                <div class="row">
                                                                    <div class="col-xs-3 col-md-3 col-lg-3 col-xl-3" style="white-space: nowrap;">Stroke Size</div>

                                                                    <div class="col-xs-7 col-md-7 col-lg-7 col-xl-7"><input type="range" min="0" max="10" value="0" id="strokewidth" step="1" style="width: 200px;" onchange="setStroke(this);" /></div>
                                                                    <div class="col-xs-2 col-md-2 col-lg-2 col-xl-2"><input min="0" max="10" value="0" id="strokewidthvalue" type="text" onkeypress="validate(event);" name="strokewidthvalue" step="1" style="width: 55px !important; float: left;" oninput="setStroke(this);" readonly></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                                <br>
                                                <div class="panel panel-info" style="">
                                                    <div class="panel-heading"><span class="uppercase">Rotate</span></div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-lg-2 inputslider" align="left"> <span>Rotation</span> </div>
                                                            <div class="col-lg-8  inputslider"> <input id="angleText" type="range" min="-180" max="180" name="angleText" oninput="rotate(event);" style="width: 100%;" step="5" value="0"> </div>
                                                            <div class="col-lg-2 inputslider" align="right"><input id="anglevalueText" type="number" onkeypress="validate(event);" name="anglevalueText" min="-180" max="180" value="0" oninput="rotate(event);" step="5" style="width: 55px !important;" readonly="true"></div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-left: 1px; padding-right: 1px; margin-left:auto; margin-right:auto;">
                                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="background-color: #eeeeee; padding: 1px; border-right: solid 4px white;">
                                                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" style="padding: 1px; border-right: solid 1px black;"><span onclick="flipX();" style="cursor: pointer;"><img src="http://vividcustoms.test/img/icon/icon-flip-across.png" width="22px" height="auto"></span></div>
                                                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" style="padding: 1px;"><span onclick="flipY();" style="cursor: pointer;"><img src="http://vividcustoms.test/img/icon/icon-flip-up.png" width="auto" height="20px"></span></div>
                                                                </div>
                                                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5" style="background-color: #eeeeee; padding: 1px; border-right: solid 4px white;">
                                                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" style="padding: 1px; border-right: solid 1px black;"><span onclick="SetLayer('forward');" style="cursor: pointer;"><img src="http://vividcustoms.test/img/icon/icon-layer-up.png" width="auto" height="20px"></span></div>
                                                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" style="padding: 1px;"><span onclick="SetLayer('backward');" style="cursor: pointer;"><img src="http://vividcustoms.test/img/icon/icon-layer-down.png" width="auto" height="20px"></span></div>
                                                                </div>
                                                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="background-color: #eeeeee; padding: 1px;">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center" style="padding: 1px;"><span onclick="SetLayer('center');" style="cursor: pointer;"><img src="http://vividcustoms.test/img/icon/icon-center.png" width="auto" height="20px"></span></div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-left: 1px; padding-right: 1px;">
                                                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-4" align="center"><span>Flip</span></div>
                                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-5" align="center"><span>Layers order</span></div>
                                                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-3" align="center"><span>Center</span></div>
                                                            </div><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-info" style="">
                                                    <div class="panel-heading"><span class="uppercase">Text Effects</span></div>
                                                    <div class="panel-body">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="right"><span class="label label-info" id="straight" style="cursor: pointer; font-size: 14px; font-weight: 500; ">Straight</span></div>
                                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="center">
                                                                    <label class="switch">
                                                                        <input type="checkbox" id="effect">
                                                                        <span class="slider round"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="left"><span class="label label-default" id="curved" style="cursor: pointer; font-size: 14px; font-weight: 500; ">Curve</span></div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div id="texteffecsarea" style="display: none;">
                                                            <div class="">
                                                                <div class="row">
                                                                    <div class="col-lg-2 inputslider" align="left"> <span style="font-size: 14px;">Font Size</span> </div>
                                                                    <div class="col-lg-8  inputslider"><input id="sizeText" type="range" min="10" max="50" value="50" name="sizeText" onchange="resize(event);" style="width: 100%;/*width: 220px;*/"></div>
                                                                    <div class="col-lg-2 inputslider" align="right"><input class="hidden-md" id="sizeTextvalue" type="text" onkeypress="validate(event);" name="sizeTextvalue" min="10" max="50" value="50" oninput="resize(event);" style="width: 55px !important; /*float: left;*/"></div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="">
                                                                <div class="row">
                                                                    <div class="col-lg-2 inputslider" align="left"> <span style="font-size: 14px;">Curve</span> </div>
                                                                    <div class="col-lg-8  inputslider"> <input type="range" min="-360" max="360" value="90" id="radius" step="1" style="width: 100%;/*width: 260px;*/" /></div>
                                                                    <div class="col-lg-2 inputslider" align="right"><input min="-360" max="360" value="90" id="radiusvalue" type="text" onkeypress="validate(event);" name="radiusvalue" step="1" style="width: 55px !important;"></div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="">
                                                                <div class="row">
                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 inputslider" align="left"> <span style="font-size: 14px;">Spacing</span> </div>
                                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8  inputslider"> <input type="range" min="1" max="40" value="5" id="spacing" step="1" style="width: 100%;" /></div>
                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 inputslider" align="right"><input min="1" max="40" value="5" id="spacingvalue" type="text" onkeypress="validate(event);" name="spacingvalue" step="1" style="width: 55px !important;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-xs-12" style="margin-bottom: 30px;">
                                                        <div class="text-center">
                                                            <button class="btn btn-success" style="width: 95%;" onclick="document.getElementById('textarea').value=''; document.getElementById('textarea2').value=''; document.getElementById('textarea_btn').innerHTML = 'Add Text'; document.getElementById('font_btn').style.display = 'none'; document.getElementById('text_menu').style.display = 'none'; deselectAllCanvases();"><span>Add New Text</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="personalize" class="tab-pane fade panelshadow">
                                    <div id="personalize_new">
                                        <div class="panel-group">
                                            <div class="panel panel-info">
                                                <div class="panel-heading">
                                                    <label for="comment"><span class="uppercase">Add Names & Numbers:</span></label>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-xs-4">
                                                            <div class="checkbox">
                                                                <label style="font-size: 1.3rem;"></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="checkbox">
                                                                <label><input type="checkbox" value="" id="textpersonalizecheck" name="textpersonalizecheck">Add Name</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="checkbox">
                                                                <label><input type="checkbox" value="" id="numberpersonalizecheck" name="numberpersonalizecheck">Add Number</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr style="margin-top: 0px; margin-bottom: 0px;">
                                                    <div class="row">
                                                        <div class="col-xs-4">
                                                            <div class="checkbox">
                                                                <label style="font-size: 1.3rem;">Side: </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="checkbox">
                                                                <select class="form-control" id="textpersonalizeside" name="textpersonalizeside" disabled onchange="movedesigntoside(this);">
                                                                    <option>Front</option>
                                                                    <option selected>Back</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="checkbox">
                                                                <select class="form-control" id="numberpersonalizeside" name="numberpersonalizeside" disabled onchange="movedesigntoside(this);">
                                                                    <option>Front</option>
                                                                    <option selected>Back</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr style="margin-top: 0px; margin-bottom: 0px;">
                                                    <div class="row">
                                                        <div class="col-xs-4">
                                                            <div class="checkbox">
                                                                <label style="font-size: 1.3rem;">Height: </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="checkbox">
                                                                <select class="form-control" id="textpersonalizeheight" name="textpersonalizeheight" disabled onchange="changefontsize(this);">
                                                                    <option>1 In</option>
                                                                    <option selected>2 In</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="checkbox">
                                                                <select class="form-control" id="numberpersonalizeheight" name="numberpersonalizeheight" disabled onchange="changefontsize(this);">
                                                                    <option>4 In</option>
                                                                    <option>6 In</option>
                                                                    <option selected>8 In</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr style="margin-top: 0px; margin-bottom: 0px;">
                                                    <div class="row">
                                                        <div class="col-xs-4">
                                                            <div class="checkbox">
                                                                <label style="font-size: 1.3rem;">Fill Color: </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <div id="textpersonalizecolor" name="textpersonalizecolor" class="block" title="Black" style="border-radius:  50%; margin-right: 1.7px; background-color: #000000; width: 30px; height: 30px; border:1px solid #eeeeee; cursor:pointer" disabled onclick="setcolorpersonalize(this);"></div><span id="textpersonalizecolorname" name="textpersonalizecolorname" disabled >Black</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <div id="numberpersonalizecolor" name="numberpersonalizecolor" class="block" title="Black" style="border-radius:  50%; margin-right: 1.7px; background-color: #000000; width: 30px; height: 30px; border:1px solid #eeeeee; cursor:pointer" disabled onclick="setcolorpersonalize(this);"></div><span id="numberpersonalizecolorname" name="numberpersonalizecolorname" disabled >Black</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr style="margin-top: 0px; margin-bottom: 0px;">
                                                    <div class="row">
                                                        <div class="col-xs-4">
                                                            <div class="checkbox">
                                                                <label style="font-size: 1.3rem;">Stroke Color: </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <div id="textpersonalizestrokecolor" name="textpersonalizestrokecolor" class="block" title="Black" style="border-radius:  50%; margin-right: 1.7px; background-color: #000000; width: 30px; height: 30px; border:1px solid #eeeeee; cursor:pointer" disabled onclick="setcolorpersonalize(this);"></div><span id="textpersonalizestrokecolorname" name="textpersonalizestrokecolorname" disabled >Black</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <div id="numberpersonalizestrokecolor" name="numberpersonalizestrokecolor" class="block" title="Black" style="border-radius:  50%; margin-right: 1.7px; background-color: #000000; width: 30px; height: 30px; border:1px solid #eeeeee; cursor:pointer" disabled onclick="setcolorpersonalize(this);"></div><span id="numberpersonalizestrokecolorname" name="numberpersonalizestrokecolorname" disabled >Black</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr style="margin-top: 0px; margin-bottom: 0px;">
                                                    <br>
                                                    <p><button class="btn btn-success" style="width: 95%; margin-bottom: 30px;" onclick="createpersonalizelist();"><span style="text-transform: uppercase; font-size: 1.4rem;">Enter Custom List</span></button>
                                                    </p>
                                                    <p>Complete list required for accurate pricing</p>
                                                    <p style="font-size: 1.3rem;">Name Only = $4.00 each<br>
                                                    Numbers Only= $3.00 each<br>
                                                    Stroke Color = $2.00 each<br>
                                                    Name & Number Combo = $6.00 </p>
                                                    <p>Price listed is an add on print for orders of 6 pieces or more.  Price differs when ordering less than 6 items.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="personalize_edit" style="display: none;">
                                        <div class="panel panel-info" style="">
                                            <div class="panel-heading"><span class="uppercase" id="personalizecolorselected">Text Color: </span><label id="personalizecolorselectedname">Black</label></div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($inkcolors as $inkcolor)
                                                        <div id="artcolorpersonalize{{$inkcolor->hex}}" class="block" title="{{$inkcolor->name}}" style="border-radius:  50%;  margin-right: 1.7px; background-color: {{$inkcolor->hex}}; border:1px solid #eeeeee; cursor:pointer" onclick="document.getElementById('personalizecolorselectedname').innerHTML = '{{$inkcolor->name}}';changepersonalizeColor('{{$inkcolor->hex}}');"></div>
                                                    @endforeach    
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-success" style="width: 95%;" onclick="document.getElementById('personalize_edit').style.display='none'; document.getElementById('personalize_new').style.display='block';"><span>Select Color</span></button>
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
                                                            <th class="col-lg-1 col-md-1 col-sm-1 col-xs-1">Design</th>
                                                            <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Brand/Style</th>
                                                            <th class="col-lg-1 col-md-1 col-sm-1 col-xs-1">Color</th>
                                                            <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Sizes</th>
                                                            <th class="col-lg-1 col-md-1 col-sm-1 col-xs-1">Quantity</th>
                                                            <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Price Per Shirt</th>
                                                            <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Total</th>
                                                            <th class="col-lg-1 col-md-1 col-sm-1 col-xs-1"> </th>
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
                        <div class="col-lg-7" id="carousel_area">
                            <!--START CAROUSEL-->
                            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                                <!-- Indicators -->
                                <ol class="carousel-indicators" id="myCarouselIndicators">
                                    <li id="frontActive" data-target="#myCarousel" data-slide-to="0" class="active" onclick="  canvasCounter = 1; initCenteringGuidelines(front);">
                                        <img id="frontActiveImage" class="img-responsive">
                                    </li>
                                    <li id="rightActive" data-target="#myCarousel" data-slide-to="1" onclick="canvasCounter = 2; initCenteringGuidelines(right);  ">
                                        <img id="rightActiveImage" class="img-responsive">
                                    </li>
                                    <li id="backActive" data-target="#myCarousel" data-slide-to="2" onclick="canvasCounter = 3; initCenteringGuidelines(back);  ">
                                        <img id="backActiveImage" class="img-responsive">
                                    </li>
                                    <li id="leftActive" data-target="#myCarousel" data-slide-to="3" onclick=" canvasCounter = 4; initCenteringGuidelines(left); ">
                                        <img id="leftActiveImage" class="img-responsive">
                                    </li>
                                </ol>
                                <ol class="carousel-indicators undoredo" id="myCarouselIndicatorsUndoRedo">
                                    <li id="undo" name="undo" style="border: 0px solid #696973;">
                                        <img src="{{asset('img/icon/undo.png')}}" class="img-responsive" width="50" height="50">
                                    </li>
                                    <li id="redo" name="redo" style="border: 0px solid #696973;">
                                        <img src="{{asset('img/icon/redo.png')}}" class="img-responsive" width="50" height="50">
                                    </li>
                                    <li id="zoomin" name="zoomin" style="border: 0px solid #696973;">
                                        <img src="{{asset('img/icon/zoomin.png')}}" class="img-responsive" width="50" height="50">
                                    </li>
                                    <li id="zoomout" name="zoomout" style="border: 0px solid #696973;">
                                        <img src="{{asset('img/icon/zoomout.png')}}" class="img-responsive" width="50" height="50">
                                    </li>
                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active" id="frontItem">
                                        <div class="canvasShirt" id="frontCanvasShirt" style="border: 0px solid #eeeeee; width: 743px; height: 810px">
                                            <div id="frontcanvas-wrapper" style="width: 375px; height: 600px; border: 0px solid #eeeeee;  position: relative; top:110px; left:180px">
                                                <canvas id="frontCanvas" style="border: 0px solid #eeeeee; touch-action: none;">
                                                </canvas>
                                                <div class="tooltip-outline error-tooltip" style="left: 82px; display: none;" id="frontdesingerror">
                                                    <div class="clearfix">
                                                        <small style="color: red">Your Art/Work exceeds the print area</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-caption">
                                            <p>Front</p>
                                        </div>
                                    </div>
                                    <div class="item" id="rightItem">
                                        <div class="canvasShirt" id="rightCanvasShirt" style="border: 0px solid #eeeeee; width: 743px; height: 810px">
                                            <div id="rightcanvas-wrapper" style="width: 250px; height: 250px; border: 0px solid #eeeeee;   position: relative; top:400px; left:200px">
                                                <canvas id="rightCanvas" style="border: 0px solid #eeeeee; touch-action: none;">
                                                </canvas>
                                                <div class="tooltip-outline error-tooltip" style="left: 82px; display: none;" id="rightdesingerror">
                                                    <div class="clearfix">
                                                        <small style="color: red">Your Art/Work exceeds the print area</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-caption">
                                            <p>Right</p>
                                        </div>
                                    </div>
                                    <div class="item" id="backItem">
                                        <div class="canvasShirt" id="backCanvasShirt" style="border: 0px solid #eeeeee; width: 743px; height: 810px">
                                            <div id="backcanvas-wrapper" style="width: 375px; height: 600px; border: 0px solid #eeeeee;  position: relative; top:110px; left:180px">
                                                <canvas id="backCanvas" style="border: 0px solid #eeeeee; touch-action: none;">
                                                </canvas>
                                                <div class="tooltip-outline error-tooltip" style="left: 82px; display: none;" id="backdesingerror">
                                                    <div class="clearfix">
                                                        <small style="color: red">Your Art/Work exceeds the print area</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-caption">
                                            <p>Back</p>
                                        </div>
                                    </div>
                                    <div class="item" id="leftItem">
                                        <div class="canvasShirt" id="leftCanvasShirt" style="border: 0px solid #eeeeee; width: 743px; height: 810px">
                                            <div id="leftcanvas-wrapper" style="width:250px; height: 250px; border: 0px solid #eeeeee;  position: relative; top:400px; left:280px">
                                                <canvas id="leftCanvas" style="border: 0px solid #eeeeee; touch-action: none;">
                                                </canvas>
                                                <div class="tooltip-outline error-tooltip" style="left: 82px; display: none;" id="leftdesingerror">
                                                    <div class="clearfix">
                                                        <small style="color: red">Your Art/Work exceeds the print area</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-caption">
                                            <p>Left</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev" onclick="setCanvas('previous');">
                                    <span class="glyphicon glyphicon-chevron-left" style="color: #31B0D5;"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next" onclick="setCanvas('next');">
                                    <span class="glyphicon glyphicon-chevron-right" style="color: #31B0D5;"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
            </div>
            <div class="container" id="lifechat">
              <ul class="list-unstyled visible-lg visible-md" style="position:fixed; bottom:0; right:100px; display: none !important;">
                <li><a data-placement="top" data-toggle="popover"  data-title="Chat with as" data-container="body" type="button" data-html="true" class="btn btn-success" id="login" style="cursor:pointer">Chat Now</a></li>
                <div id="popover-content" class="hide">
                
                  <form class="form" role="form">
                     <div>
                        <label for="email">What is your email address?</label>
                        <input type="email" name="liveemail" id="liveemail" class="form-control">
                        <label for="name">What is your name?</label>
                        <input type="text" name="livename" id="livename" class="form-control input-md">            
                        <label for="about">Please enter your reason for chatting today</label>
                        <textarea rows="3" name="liveabout" id="liveabout" class="form-control input-md"></textarea>
                        <br>
                        <div class="row">
                          <div class="col-xs-6"><button type="button" class="btn btn-primary btn-block" data-loading-text="Sending info..">
                        Submit</button></div>
                          <div class="col-xs-6"><button type="button" class="btn btn-danger btn-block">
                        Cancel</button></div>
                        </div>
                    </div>
                  </form>
                </div>
              </ul>
            </div>
        </div>
   <footer style="background-color: transparent !important; width: -moz-available;">
        
        <div class="row" id="footer_copyrigth">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center" style="display: block;">
                <center>
                    <p>&copy; 2018 Vivid Customs</p>
                    <ul class="list-inline">
                        <li>
                            <a href="{{asset('privacy')}}">Privacy</a>
                            |
                            <a href="{{asset('user-agreement')}}">Terms</a>
                            |
                            <a href="{{asset('faq')}}">FAQ</a>
                        </li>
                    </ul>
                </center>
            </div>
        </div>
        <nav class="navbar" id="footer_menu_bar">
            <ul class="nav nav-tabs nav-justified" id="footer_menu">
                <li style="border: 2px solid #ffffff; border-radius: 10px;">
                    <a onclick='$("#productSectionModal").modal("show");'>
                        <img class="menu_btn" id="change_item" src="{{asset('img/icon/product.png')}}">
                        <br>
                        Products
                    </a>
                </li>
                <li style="border: 2px solid #ffffff; border-radius: 10px;">
                    <a onclick='startcategories(); $("#AddArtModal").modal("show");'>
                        <img class="menu_btn" id="add_art" src="{{asset('img/icon/add-art.png')}}">
                        <br>
                        Add Art
                    </a>
                </li> 
                <li style="border: 2px solid #ffffff; border-radius: 10px;" onclick="document.getElementById('AddTextModalbtn').innerHTML='Add to Design';">
                    <a data-toggle="modal" data-target="#AddTextModal">
                        <img class="menu_btn" id="add_text" src="{{asset('img/icon/add-text.png')}}">
                        <br>
                        Add Text
                    </a>
                </li>
                <li style="border: 2px solid #ffffff; border-radius: 10px;" onclick="deselectAllCanvases();">
                    <a onclick="starttemplatecategories(); $('#AddTemplateModal').modal('show');">
                        <img class="menu_btn" id="add_template" src="{{asset('img/icon/templates.png')}}">
                        <br>
                        Templates
                    </a>
                </li>
                <li style="border: 2px solid #ffffff; border-radius: 10px;">
                    <a onclick='$("#PersonalizeModal").modal("show");$("#PersonalizeNotification").modal("show");'>
                        <img class="menu_btn" src="{{asset('img/icon/personalize.png')}}">
                        <br>
                        Personalize
                    </a>
                </li>
                
            </ul>
            <ul class="nav nav-tabs nav-justified" id="footer_menu_art" style="display: none;">
                <li style="border: 2px solid #ffffff; border-radius: 10px;">
                    <a onclick='$("#ArtColorModal").modal("show");'>
                        <img class="menu_btn" id="color_art" src="{{asset('img/icon/color.png')}}">
                        <br>
                        Color
                    </a>
                </li>
                <li style="border: 2px solid #ffffff; border-radius: 10px;">
                    <a data-toggle="modal" data-target="#LayerModal">
                        <img class="menu_btn" id="layers_art" src="{{asset('img/icon/layers.png')}}">
                        <br>
                        Layers
                    </a>
                </li>
                <li style="border: 2px solid #ffffff; border-radius: 10px;">
                    <a data-toggle="modal" data-target="#ResizeModal">
                        <img class="menu_btn" id="resize_art" src="{{asset('img/icon/resize.png')}}">
                        <br>
                        Resize
                    </a>
                </li>
                <li style="border: 2px solid #ffffff; border-radius: 10px;">
                    <a data-toggle="modal" data-target="#TextRotateModal">
                        <img class="menu_btn" id="rotate_art" src="{{asset('img/icon/rotate.png')}}">
                        <br>
                        Rotate
                    </a>
                </li>
            </ul>
            <ul class="nav nav-tabs nav-justified" id="footer_menu_text" style="display: none;">
                <li style="border: 2px solid #ffffff; border-radius: 10px;" onclick="document.getElementById('AddTextModalbtn').innerHTML='Update';">
                    <a data-toggle="modal" data-target="#AddTextModal">
                        <img class="menu_btn" id="change_text" src="{{asset('img/icon/add-text.png')}}">
                        <br>
                        Change Text
                    </a>
                </li>
                <li style="border: 2px solid #ffffff; border-radius: 10px;">
                    <a onclick='$("#FontModal").modal("show");'>
                        <img class="menu_btn" id="font" src="{{asset('img/icon/add-text.png')}}">
                        <br>
                        Font
                    </a>
                </li>
                <li style="border: 2px solid #ffffff; border-radius: 10px;">
                    <a data-toggle="modal" data-target="#TextColorModal">
                        <img class="menu_btn" id="colo_text" src="{{asset('img/icon/color.png')}}">
                        <br>
                        Color
                    </a>
                </li>
                <li style="border: 2px solid #ffffff; border-radius: 10px;">
                    <a data-toggle="modal" data-target="#LayerModal">
                        <img class="menu_btn" id="layers_text" src="{{asset('img/icon/layers.png')}}">
                        <br>
                        Layers
                    </a>
                </li>
                <li style="border: 2px solid #ffffff; border-radius: 10px;">
                    <a data-toggle="modal" data-target="#TextRotateModal">
                        <img class="menu_btn" id="rotate_text" src="{{asset('img/icon/rotate.png')}}">
                        <br>
                        Rotate
                    </a>
                </li>
                <li style="border: 2px solid #ffffff; border-radius: 10px;">
                    <a data-toggle="modal" data-target="#TextEffectsModal">
                        <img class="menu_btn" id="effect" src="{{asset('img/icon/effects.png')}}">
                        <br>
                        Curve Text
                    </a>
                </li>
            </ul>
        </nav>
    </footer>

    <!-- Modal Add Art -->
    <div class="modal fade" id="productSectionModal" role="dialog">
        <div class="modal-dialog" style=" width: 100%; height: auto; margin: 0; padding: 0;">
            <div class="modal-content" style=" width: 100%; height: 100%; margin: 0; padding: 0;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title uppercase">Products</h5>
                </div>
                <div class="modal-body">
                    <div class="panel panel-info">
                        <div class="panel-heading"><span class="uppercase">Current Product</span> 
                            <a type="button"  id="changeproductModal" name="changeproductModal"   style="float: right; cursor: pointer;" href="javascript:void(0)">
                            <span class="uppercase">Change Product</span>
                                </a></div>
                            <div class="panel-body">
                                <!--START PRODUCT DESCRIPTION-->
                                <div class="row">
                                <div class="col-xs-4 col-sm-6 col-md-6 col-lg-6">
                                    <img id="description_imageModal">
                                </div>
                                <div class="col-xs-8 col-sm-6 col-md-6 col-lg-6">
                                    <h5 id="product_nameModal">T-Shirt</h5>
                                    <div id="description_labelModal">
                                    </div>
                                </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="sizechartmodalModal" role="dialog">
                                    <div class="modal-dialog modal-lg ">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><span class="uppercase">Size Chart</span></h4>
                                        </div>
                                        <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                            <h4 class="modal-title">How to Measure</h4>
                                                <br>
                                                <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div for="sizechartimageModal" id="sizechartimageModal" name="sizechartimageModal"></div>   
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">    
                                                    <label for="sizechartdescriptionModal" id="sizechartdescriptionModal" name="sizechartdescriptionModal"></label>                                        
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <h4 class="modal-title">Size Chart</h4>
                                            <table class="table table-striped table-bordered" id="sizechartableModal" name="sizechartableModal" >
                                            </table>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!--END   PRODUCT DESCRIPTION-->
                            </div>
                        </div>
                        <div class="panel panel-info">
                        <div class="panel-heading">
                            <span class="uppercase">Change Product Color</span> 
                            <span id="current_product_colorModal"><span id="current_selected_product_colorModal" style="display: none;"></span></span>
                        </div>
                        <div class="panel-body">
                            <div class="row" id="child_product_color_divModal"> 
                            </div>
                            <div class="row" id="child_product_color_div6Modal"> 
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Modal Add Art -->
    <div class="modal fade" id="AddArtModal" role="dialog">
        <div class="modal-dialog" style=" width: 100%; height: auto; margin: 0; padding: 0;">
            <div class="modal-content" style=" width: 100%; height: 100%; margin: 0; padding: 0;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title uppercase">Art Work</h5>
                </div>
                <div class="modal-body">
                    <div id="clipart" >
                        <div id="clipArtMenu" class="panel panel-info">
                            <div id="clipArtCategories">
                            <ol class="breadcrumb" id="breadcrumb" style="cursor:pointer; margin-bottom: 5px;"><li class="active" id="categoriesModal">Clip Art Categories</li><li id="subcategoriesModal" style="display: none; "></li><li id="subsubcategoriesModal" style="display: none;"></li><li id="clips" style="display: none;"></li></ol>
                            </div>
                            <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search clipart by name" name="searchclipartModal" id="searchclipartModal" oninput="Scan();">
                            <div class="input-group-btn">
                                <button class="btn btn-success" type="button" onclick="Scan();" style="background-color: #4fc1f0 !important;"><i class="glyphicon glyphicon-search" style="color: white;"></i></button>
                            </div>
                            </div>
                            <div id="clipArtTable2Modal" style="display: none;">
                            </div>
                            <div id="clipArtTableModal" style="display: block;">
                                <div class="row text-center">
                                    @foreach($clipartcategories as $clipartcategory)
                                        <div class="col-xs-4">
                                            <a href="javascript:void(0);" onclick="setCategory('{{$clipartcategory->title}}');">
                                                <img src="{{asset('img/clipart')}}{{'/'}}{{$clipartcategory->title}}{{'/'}}{{$clipartcategory->filename}}" alt="{{$clipartcategory->title}}"  class="hover" style="padding: 1vw;">
                                                <div class="caption">
                                                    <p>{{$clipartcategory->title}}</p>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>              
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading uppercase"> Upload </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div>
                                        <h4>Have your own logo or image?</h4>
                                        <h5>Simply just upload it!</h5><br>
                                        <h6><b>We accept the following file types:</b><br>
                                            JPEG, JPG, GIF, PNG, BMP, GIF, TIF, AI, EPS, PDF, PSD, SVG</h6>
                                    </div>
                                    <h5>Max Size: 10.0mb</h5>
                                    <br>
                                    <p>
                                        <label for="termsOfUseModal">
                                            <input type="checkbox" id="termsOfUseModal" name="termsOfUseModal" onchange="hideshowbutton(this);">
                                            <span>I agree to the </span> <a href="{{asset('user-agreement')}}">terms and conditions</a> for uploaded material
                                        </label>
                                    </p>
                                </div>
                            </div>
                            <div class="row" id="uploaddivModal" style="">
                                <div class="col-sm-6 col-md-6 col-lg-6" align="left"> <input type="file" id="fileModal" name="fileModal"  onchange="uploadImage();" /></div>
                                <div class="col-sm-6 col-md-6 col-lg-6" align="right"><button id="uploadModal" class="btn btn-info" style="background-color: #4fc1f0; display: none;">Upload</button></div>
                            </div>
                             <div id="uploadpreviewModal" src="" style="display: none;"></div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Add Art -->
    <div class="modal fade" id="AddTemplateModal" role="dialog">
        <div class="modal-dialog" style=" width: 100%; height: auto; margin: 0; padding: 0;">
            <div class="modal-content" style=" width: 100%; height: 100%; margin: 0; padding: 0;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title uppercase">Template</h5>
                </div>
                <div class="modal-body">
                    <div id="templateCategory">
                        <div id="templateMenu" class="panel panel-info">
                            <div id="templateCategories">
                            <ol class="breadcrumb" id="templatebreadcrumb" style="cursor:pointer; margin-bottom: 5px;">
                                <li class="active" id="templatecategoriesModal">Design Templates</li>
                                <li id="templatesubcategoriesModal" style="display: none; "></li>
                                <li id="templatesubsubcategoriesModal" style="display: none;"></li>
                                <li id="clips" style="display: none;"></li>
                            </ol>
                            </div>
                            <div class="input-group"  style="margin-bottom: 30px;">
                            <input type="text" class="form-control" placeholder="Search template by name" name="searchtemplateModal" id="searchtemplateModal" oninput="ScanTemplate();">
                            <div class="input-group-btn">
                                <button class="btn btn-success" type="button" onclick="ScanTemplate();" style="background-color: #4fc1f0 !important;">
                                <i class="glyphicon glyphicon-search" style="color: white;"></i>
                                </button>
                            </div>
                            </div>
                            <div id="templateTable2Modal" style="display: none;">
                            </div>
                            <div id="templateTableModal" style="display: block;">
                            </div>                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Color Art -->
    <div class="modal fade" id="ArtColorModal" role="dialog">
        <div class="modal-dialog" style=" width: 100%; margin: 0; padding: 0; position: absolute; bottom: 0;">
            <div class="modal-content" style=" width: 100%; height: 100%; margin: 0; padding: 0;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="opacity: 1;">&times;</button>
                    <h5 class="modal-title uppercase">Select your color</h5>
                </div>
                <div class="modal-body">
                    <div id="objectcolorsModal" name="objectcolorsModal"></div>
                    <hr>
                    <div id="inkcolorlistModal">
                        <span style="display: block;">Select new color:</span>
                        <div class="block transparent" id="artcolortransparenttModal" style="border-radius:  50%;  margin-right: 1.7px; background-color: #ffffff; border:2px solid #eeeeee; cursor:pointer" onclick="document.getElementById('Artcolor').innerHTML = 'Transparent'; changeColor('transparent');">
                        </div>
                        @foreach($inkcolors as $inkcolor)
                            <div id="artcolortModal{{$inkcolor->hex}}" class="block" title="{{$inkcolor->name}}" style="border-radius:  50%;  margin-right: 1.7px; background-color: {{$inkcolor->hex}}; border:1px solid #eeeeee; cursor:pointer" onclick="document.getElementById('Artcolor').innerHTML = '{{$inkcolor->name}}'; changeColor('{{$inkcolor->hex}}'); ">
                            </div>
                        @endforeach
                    </div>
                    <br>
                    <div class="row" style="float: left;">
                        <div class="col-md-12 col-lg-12 col-sm-12" style="margin-top: 15px; padding-left: 0px;" id="artcolortransparentlegendModal">
                            <div class="block transparent" style="border-radius: 50%;  margin-right: 1.7px; background-color: #ffffff; border:2px solid #eeeeee; cursor:pointer;"></div>
                            Indicates a color is transparent
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12" style="margin-top: 15px; padding-left: 0px;" id="checkcolorlegendModal">
                            <span class="animate2">
                            </span>
                            Indicates a color already in your design
                        </div>
                        <br>
                    </div>
                </div>
                <div class="modal-footer" style="border-top: 0px solid #e5e5e5;">
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Color Art -->
    <div class="modal fade" id="ResizeModal" role="dialog">
        <div class="modal-dialog" style=" width: 100%; margin: 0; padding: 0; position: absolute; bottom: 0;">
            <div class="modal-content" style=" width: 100%; height: 100%; margin: 0; padding: 0;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="opacity: 1;">&times;</button>
                    <h5 class="modal-title uppercase">Size</h5>
                </div>
                <div class="modal-body">
                    <center><i class="fa fa-lock" id="resizeiconModal" style="font-size:25px;color:#31b0d5; cursor: pointer;" onclick="SetScaleProportional();"></i></center>
                    <div class="">
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-xs-2 inputslider" align="left"> <span>Width</span> </div>
                            <div class="col-ms-8 col-sm-8 col-xs-8  inputslider"> <input id="widthModal" type="range" min="1" max="12" name="widthModal" oninput="resize(event);" style="width: 100%;" step="0.1"> </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 inputslider" align="right"><input id="widthvalueModal" type="text" onkeypress="validate(event);" name="widthvalueModal" min="1" max="12" oninput="resize(event);" step="0.1" style="width: 55px !important;" readonly="true"></div>
                        </div>
                    </div>
                    <br>
                    <div class="">
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-xs-2 inputslider" align="left"> <span>Height</span> </div>
                            <div class="col-ms-8 col-sm-8 col-xs-8  inputslider"> <input id="heightModal" type="range" min="1" max="12" name="heightModal" oninput="resize(event);" style="width: 100%;" step="0.1"> </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 inputslider" align="right"><input id="heightvalueModal" type="text" onkeypress="validate(event);" name="heightvalueModal" min="1" max="12" oninput="resize(event);" step="0.1" style="width: 55px !important;" readonly="true"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Enter text -->
    <div class="modal fade" id="AddTextModal" role="dialog">
        <div class="modal-dialog" style=" width: 100%; height: auto; margin: 0; padding: 0;">
            <div class="modal-content" style=" width: 100%; height: 100%; margin: 0; padding: 0;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title uppercase">Enter your text:</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <textarea class="form-control" rows="5" id="textarea2" placeholder="- Enter the text here -"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="AddTextModalbtn" onclick="  unselectall('addtext');">Add to Design</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Fonts -->
    <div class="modal fade" id="FontModal" role="dialog">
        <div class="modal-dialog" style=" width: 100%;  margin: 0; padding: 0;">
            <div class="modal-content" style=" width: 100%; margin: 0; padding: 0;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title uppercase">Select your font:</h5>
                </div>
                <div class="modal-body">
                    <div id="font_menuModal" style="display: none;">
                        <ul id="font_menu_barModal" class="nav nav-tabs">
                                                                
                            <li class="active col-xs-12" align="center"><a data-toggle="tab" href="#homeModal" class="uppercase">View all fonts</a></li>
                            @foreach ($fontcategories as $fontcategory)   
                                <li><a data-toggle="tab" href="#menuModal{$fontcategory->name}}"><font>{{$fontcategory->name}}</font></a></li>');
                            @endforeach
                        </ul>
                        <div id="font_menu_bodyModal" class="tab-content">
                            <div id="homeModal" class="tab-pane fade in active">
                                @foreach ($fonts as $font)                                          
                                    <div class="row">
                                        <div class="col-lg-12"  style="border-bottom: 1px solid;" id="{{$font->name}}" onclick="setFont(this);">
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
                                <div id="menuModal{{$fontcategory->name}}" class="tab-pane fade">
                                    @foreach ($fontcategory->fonts as $font)                                       
                                    <div class="row">
                                        <div class="col-lg-12" style="border-bottom: 1px solid;" id="{{$font->name}}" onclick="setFont(this);">
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
    <!-- Modal Color Text -->
    <div class="modal fade" id="TextColorModal" role="dialog">
        <div class="modal-dialog" style=" width: 100%; margin: 0; padding: 0; position: absolute; bottom: 0;">
            <div class="modal-content" style=" width: 100%; height: 100%; margin: 0; padding: 0;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="opacity: 1;">&times;</button>
                    <h5 class="modal-title uppercase">Color</h5>
                </div>
                <div class="modal-body">
                    <h4>Text Color: <label id="Textcolor" name="Textcolor"></label></h4>   
                        <div class="row">
                            <div class="col-xs-12">
                                @foreach($inkcolors as $inkcolor)
                                    <div id="textcolorModal{{$inkcolor->hex}}" class="block" title="{{$inkcolor->name}}" style="border-radius:  50%; margin-right: 1.7px; background-color: {{$inkcolor->hex}}; width: 30px; height: 30px; border:1px solid #eeeeee; cursor:pointer" onclick="OpenClose('carousel_area','work_area','Textcolor'); document.getElementById('Textcolor').innerHTML = '{{$inkcolor->name}}'; changeColorText('{{$inkcolor->hex}}','f');"></div>
                                @endforeach
                            </div>
                        </div>    
                    <!--END COLOR SECTION-->
                    <br>
                    <br>
                    <h4>Text Stroke Color: <label id="Textstrokecolor" name="Textstrokecolor"></label></h4>
                    <!--COLOR SECTION-->
                    <div class="row">
                        <div class="col-xs-12">
                            @foreach($inkcolors as $inkcolor)
                                <div id="strokecolorModal{{$inkcolor->hex}}" class="block" title="{{$inkcolor->name}}" style="border-radius:  50%; margin-right: 1.7px; background-color: {{$inkcolor->hex}}; width: 30px; height: 30px; border:1px solid #eeeeee; cursor:pointer" onclick="OpenClose('carousel_area','work_area','Textstrokecolor'); document.getElementById('Textstrokecolor').innerHTML = '{{$inkcolor->name}}'; changeColorText('{{$inkcolor->hex}}','c');"></div>
                            @endforeach
                        </div>
                    </div>
                    <br>
                    <div class="input-group">
                        <div class="row">
                            <div class="col-xs-3 col-md-3 col-lg-3 col-xl-3" style="white-space: nowrap;">Stroke Size</div>
                            <div class="col-xs-7 col-md-7 col-lg-7 col-xl-7"><input type="range" min="0" max="10" value="0" id="strokewidthModal" step="1" style="width: 200px;" onchange="setStroke(this);" /></div>
                            <div class="col-xs-2 col-md-2 col-lg-2 col-xl-2"><input min="0" max="10" value="0" id="strokewidthvalueModal" type="number" onkeypress="validate(event);" name="strokewidthvalue" step="1" style="width: 55px !important; float: left;" oninput="setStroke(this);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Stroke Color Text -->
    <div class="modal fade" id="LayerModal" role="dialog">
        <div class="modal-dialog" style=" width: 100%; margin: 0; padding: 0; position: absolute; bottom: 0;">
            <div class="modal-content" style=" width: 100%; height: 100%; margin: 0; padding: 0;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="opacity: 1;">&times;</button>
                    <h5 class="modal-title uppercase">Layers</h5>
                </div>
                <div class="modal-body">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-left: 1px; padding-right: 1px; margin-left:auto; margin-right:auto;">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color: #eeeeee; padding: 1px; border-right: solid 4px white;">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" style="padding: 1px; border-right: solid 1px black;" onclick="SetLayer('forward');"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-layer-up.png')}}" width="auto" height="20px"></span></div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" style="padding: 1px;" onclick="SetLayer('backward');"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-layer-down.png')}}" width="auto" height="20px"></span></div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-left: 1px; padding-right: 1px;">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center"><span>Bring Forward</span></div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center"><span>Send Backward</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal rotate text -->
    <div class="modal fade" id="TextRotateModal" role="dialog">
        <div class="modal-dialog" style=" width: 100%; margin: 0; padding: 0; position: absolute; bottom: 0;">
            <div class="modal-content" style=" width: 100%; margin: 0; padding: 0;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="opacity: 1;">&times;</button>
                    <h5 class="modal-title uppercase">Select your rotation effect:</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-2 inputslider" align="left"> <span>Rotation</span> </div>
                        <div class="col-ms-8 col-sm-8 col-xs-8  inputslider"> <input id="angleImageModal" type="range" min="-180" max="180" value="0" name="angleImageModal" oninput="rotate(event);" style="width: 100%;" step="5"> </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 inputslider" align="right"><input id="anglevalueImageModal" type="text" onkeypress="validate(event);" name="anglevalueImageModal" min="-180" max="180" value="0" oninput="rotate(event);" step="5" style="width: 55px !important;" readonly="true"></div>
                    </div>
                    <br>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-left: 1px; padding-right: 1px; margin-left:auto; margin-right:auto;">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="background-color: #eeeeee; padding: 1px; border-right: solid 4px white;">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center" style="padding: 1px; border-right: solid 1px black;" onclick="flipX();"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-flip-across.png')}}" width="22px" height="auto"></span></div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="background-color: #eeeeee; padding: 1px; border-right: solid 4px white;">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center" style="padding: 1px;" onclick="flipY();"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-flip-up.png')}}" width="auto" height="20px"></span></div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="background-color: #eeeeee; padding: 1px;">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center" style="padding: 1px;" onclick="SetLayer('center');"><span style="cursor: pointer;"><img src="{{asset('img/icon/icon-center.png')}}" width="auto" height="20px"></span></div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-left: 1px; padding-right: 1px;">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="center"><span>Flip</span></div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="center"><span>Flop</span></div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="center"><span>Center</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Modal confirm-->
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="mi-modal">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <input type="hidden" name="urltemplate" id="urltemplate" value="">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">You will lose your current design?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" id="modal-btn-yes">Continue</button>
                    <button type="button" class="btn btn-primary" id="modal-btn-no">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <div class="alert" role="alert" id="result"></div>


    <!-- Modal Personalize -->
    <div class="modal fade" id="PersonalizeModal" role="dialog">
        <div class="modal-dialog modal-lg" style=" width: 100%; margin: 0; padding: 0; position: absolute; ">
            <div class="modal-content" style=" width: 100%; margin: 0; padding: 0;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title uppercase">ADD NAMES & NUMBERS:</h5>
                </div>
                <div class="modal-body">
                    <div id="personalize_newModal">
                        <div class="panel-group">
                            <div class="panel panel-info">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="checkbox">
                                                <label>Step 1: </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="" id="textpersonalizecheckModal" name="textpersonalizecheckModal">Add Name</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="" id="numberpersonalizecheckModal" name="numberpersonalizecheckModal">Add Number</label>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="margin-top: 0px; margin-bottom: 0px;">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="checkbox">
                                                <label>Side: </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="checkbox">
                                                <select class="form-control" id="textpersonalizesideModal" name="textpersonalizesideModal" disabled="true" onchange="movedesigntoside(this);">
                                                    <option>Front</option>
                                                    <option selected>Back</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="checkbox">
                                                <select class="form-control" id="numberpersonalizesideModal" name="numberpersonalizesideModal" disabled="true" onchange="movedesigntoside(this);">
                                                    <option>Front</option>
                                                    <option selected>Back</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="margin-top: 0px; margin-bottom: 0px;">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="checkbox">
                                                <label>Height: </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="checkbox">
                                                <select class="form-control" id="textpersonalizeheightModal" name="textpersonalizeheightModal" disabled="true" onchange="changefontsize(this);">
                                                    <option>1 In</option>
                                                    <option selected>2 In</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="checkbox">
                                                <select class="form-control" id="numberpersonalizeheightModal" name="numberpersonalizeheightModal" disabled="true" onchange="changefontsize(this);">
                                                    <option>4 In</option>
                                                    <option>6 In</option>
                                                    <option selected>8 In</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="margin-top: 0px; margin-bottom: 0px;">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="checkbox">
                                                <label>Fill Color: </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="checkbox">
                                                <label>
                                                    <div id="textpersonalizecolorModal" name="textpersonalizecolorModal" class="block" title="Black" style="border-radius:  50%; margin-right: 1.7px; background-color: #000000; width: 30px; height: 30px; border:1px solid #eeeeee; cursor:pointer" disabled="true" onclick="setcolorpersonalize(this);"></div><span id="textpersonalizecolornameModal" name="textpersonalizecolornameModal" disabled="true" >Black</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="checkbox">
                                                <label>
                                                    <div id="numberpersonalizecolorModal" name="numberpersonalizecolorModal" class="block" title="Black" style="border-radius:  50%; margin-right: 1.7px; background-color: #000000; width: 30px; height: 30px; border:1px solid #eeeeee; cursor:pointer" disabled="true" onclick="setcolorpersonalize(this);"></div><span id="numberpersonalizecolornameModal" name="numberpersonalizecolornameModal" disabled="true" >Black</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="margin-top: 0px; margin-bottom: 0px;">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="checkbox">
                                                <label>Stroke Color: </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="checkbox">
                                                <label>
                                                    <div id="textpersonalizestrokecolorModal" name="textpersonalizestrokecolorModal" class="block" title="Black" style="border-radius:  50%; margin-right: 1.7px; background-color: #000000; width: 30px; height: 30px; border:1px solid #eeeeee; cursor:pointer" disabled="true" onclick="setcolorpersonalize(this);"></div><span id="textpersonalizestrokecolornameModal" name="textpersonalizestrokecolornameModal" disabled="true" >Black</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="checkbox">
                                                <label>
                                                    <div id="numberpersonalizestrokecolorModal" name="numberpersonalizestrokecolorModal" class="block" title="Black" style="border-radius:  50%; margin-right: 1.7px; background-color: #000000; width: 30px; height: 30px; border:1px solid #eeeeee; cursor:pointer" disabled="true" onclick="setcolorpersonalize(this);"></div><span id="numberpersonalizestrokecolornameModal" name="numberpersonalizestrokecolornameModal" disabled="true" >Black</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="margin-top: 0px; margin-bottom: 0px;">
                                    <br>
                                    <p><button class="btn btn-success" style="width: 95%;" onclick="createpersonalizelist();"><span style="text-transform: uppercase; font-size: 1.4rem;">Enter Custom List</span></button>
                                    </p>
                                    <p>Complete list required for accurate pricing</p>
                                                    <p style="font-size: 1.3rem;">Name Only = $4.00 each<br>
                                                    Numbers Only= $3.00 each<br>
                                                    Stroke Color = $2.00 each<br>
                                                    Name & Number Combo = $6.00 </p>
                                                    <p>Price listed is an add on print for orders of 6 pieces or more.  Price differs when ordering less than 6 items.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="personalize_editModal" style="display: none;">
                        <div class="panel panel-info" style="">
                            <div class="panel-heading"><span class="uppercase" id="personalizecolorselectedModal">Text Color: </span><label id="personalizecolorselectednameModal">Black</label></div>
                            <div class="panel-body">
                                <div class="row">
                                    @foreach($inkcolors as $inkcolor)
                                        <div id="artcolorpersonalizeModal{{$inkcolor->hex}}" class="block" title="{{$inkcolor->name}}" style="border-radius:  50%;  margin-right: 1.7px; background-color: {{$inkcolor->hex}}; border:1px solid #eeeeee; cursor:pointer" onclick="document.getElementById('personalizecolorselectednameModal').innerHTML = '{{$inkcolor->name}}';changepersonalizeColor('{{$inkcolor->hex}}');"></div>
                                    @endforeach  
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success" style="width: 95%;" onclick="document.getElementById('personalize_editModal').style.display='none'; document.getElementById('personalize_newModal').style.display='block';"><span>Select Color</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Personalize List -->
    <div class="modal fade" id="PersonalizeListModal" role="dialog" style="overflow-x: hidden; overflow-y: auto;">
        <div class="modal-dialog modal-xl" style="">
            <div class="modal-content" style=" ">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title uppercase">Customer List</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <table id="myTable" class="table">
                                <thead>
                                    <tr>
                                        <td>Preview</td>
                                    </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td align="center">
                                        <div class="row">
                                            <div class="col-md-6" id="personalize_canvas_front_div" style="display: none;">
                                                <span>Front</span>
                                                <canvas id="personalize_canvas_front" width="175" height="233" style="border:1px solid #333333;"></canvas>         
                                            </div>
                                            <div class="col-md-6" id="personalize_canvas_back_div" style="display: none;">
                                                <span>Back</span>
                                                <canvas id="personalize_canvas_back" width="175" height="233" style="border:1px solid #333333;"></canvas>          
                                            </div>
                                        </div>
                                    </td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-8">
                            <table id="myTable2" class=" table order-list">
                                <thead>
                                    <tr>
                                        <td>Name</td>
                                        <td>Number</td>
                                        <td>Size</td>
                                        <td>Remove</td>
                                    </tr>
                                </thead>
                                <tbody id="personalizetable" align="center">

                                </tbody >
                                <tfoot align="center">
                                    <tr>
                                        <td>
                                            <input type="button" class="btn btn-xs" id="addrow" value="Add Row" onclick="addpersonalizerow();" />
                                        </td>
                                    </tr>
                                    <tr>
                                    </tr>
                                </tfoot>
                            </table>

                            <p>Totals: <span id="personalizetotalsname" name="personalizetotalsname">0</span>  names and <span id="personalizetotalsnumber" name="personalizetotalsnumber">0</span> numbers on <span id="personalizetotalssizename" name="personalizetotalssizename">0</span> items</p>
                            <p>Sizes: <span id="personalizesizelist" name="personalizesizelist"></span></p>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                      <input type="button" class="btn btn-xs" id="addrow" value="Save & Exit" onclick="SavePersonalizeList(true); CloseModal('PersonalizeListModal');" />
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Personalize List -->
    <div class="modal fade" id="PersonalizeNotification" role="dialog" style="overflow-x: hidden; overflow-y: auto;">
        <div class="alert alert-danger alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
           <center>
           	<p>This section is under maintenance at the moment</p>
            <p>Please check  back shortly</p>
            </br>
            <p>We apologize for the inconvenience.</p>
           </center>
        </div>
    </div>

    <!-- Modal effects text -->
    <div class="modal fade" id="TextEffectsModal" role="dialog">
        <div class="modal-dialog" style=" width: 100%; margin: 0; padding: 0; position: absolute; bottom: 0;">
            <div class="modal-content" style=" width: 100%; margin: 0; padding: 0;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="opacity: 1;">&times;</button>
                    <h5 class="modal-title uppercase">Effect:</h5>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><span class="label label-info" id="straightModal" style="cursor: pointer; font-size: 14px; font-weight: 500; float: right;">Straight</span></div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <label class="switch">
                                    <input type="checkbox" id="effectModal">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><span class="label label-default" id="curvedModal" style="cursor: pointer; font-size: 14px; font-weight: 500; float: left;">Curve</span></div>
                        </div>
                    </div>
                    <br>
                    <div id="texteffecsareaModal" style="display: none;">
                        <div class="">
                            <div class="row">
                                <div class="col-md-2 col-sm-2 col-xs-2 inputslider" align="left"> <span>Font Size</span> </div>
                                <div class="col-ms-8 col-sm-8 col-xs-8  inputslider"> <input id="sizeTextModal" type="range" min="1" max="50" value="30" name="sizeTextModal" oninput="resize(event);" style="width: 100%;"> </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 inputslider" align="right"><input id="sizeTextvalueModal" type="text" onkeypress="validate(event);" name="sizeTextvalueModal" min="1" max="50" value="30" oninput="resize(event);" style="width: 55px !important;"></div>
                            </div>
                        </div>
                        <br>
                     
                            <div class="row">
                                <div class="col-md-1 col-sm-1 col-xs-1 inputslider" align="left"> <span>Curve</span> </div>
                                <div class="col-ms-9 col-sm-9 col-xs-9  inputslider"> <input type="range" min="-360" max="360" value="90" id="radiusModal" step="1" style="width: 1005;" /></div>
                                <div class="col-md-1 col-sm-1 col-xs-1 inputslider" align="right"><input min="-360" max="360" value="90" id="radiusvalueModal" type="text" onkeypress="validate(event);" name="radiusvalueModal" step="1" style="width: 55px !important;"></div>
                            </div>
                       
                        <br>
                       
                            <div class="row">
                                <div class="col-md-2 col-sm-2 col-xs-2 inputslider" align="left"> <span>Spacing</span> </div>
                                <div class="col-ms-8 col-sm-8 col-xs-8  inputslider"> <input type="range" min="1" max="40" value="5" id="spacingModal" step="1" style="width:100%;" /> </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 inputslider" align="right"><input min="1" max="40" value="5" id="spacingvalueModal" type="text" onkeypress="validate(event);" name="spacingvalueModal" step="1" style="width: 55px !important;"></div>
                            </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/frontend/designstudio/fabric.js')}}"></script>
     <script src="{{asset('js/frontend/designstudio/custom_controls.js')}}"></script>
     <script src="{{asset('js/frontend/designstudio/curvedText.js')}}"></script>
     <script src="{{asset('js/frontend/designstudio/centering_guidelines.js')}}"></script>
     <script src="{{asset('js/frontend/designstudio/classes.js')}}"></script>
     <script src="{{asset('js/frontend/designstudio/designstudio2.js')}}"></script>

</body>

</html>