/************************************************************************************
GLOBAL VARIABLES 
*************************************************************************************/

var Orientation = "";

var windowwidth = "";

var windowheight = "";

var devicePixelRatio = "";

var idproduct = null;

var product = null;

var colorsmin1 = [];

var colorsmin6 = [];

var currentcolor = 'White';

var canvasCounter = 1;

var front = new fabric.Canvas('frontCanvas');

var right = new fabric.Canvas('rightCanvas');

var back = new fabric.Canvas('backCanvas');

var left = new fabric.Canvas('leftCanvas');

var canvaspreviewfront = new fabric.Canvas("personalize_canvas_front");

var canvaspreviewback = new fabric.Canvas("personalize_canvas_back");

var text = "";

var colorText = "#000000";

var colorArt = "#000000";

var strokeColor = "#000000";

var strokeWidth = 3;

var font = 'ABeeZee-Regular';

var objId = 0.0;

var textAdded = false;

var clipArtAdded = false;

var imageUploaded = false;

var colorChanged = false;

var addingToCart = false;

var Checked = false;

var resized = false;

var productchanged = false;

var quantityOfProduct = 0;

var costOfProduct = 1.0;

var pricePerUnit = 0.0;

var totalPrice = 0.0;

var role = "";

var device = "computer";

var radius = document.getElementById("radius");

var radiusvalue = document.getElementById("radiusvalue");

var spacing = document.getElementById("spacing");

var spacingvalue = document.getElementById("spacingvalue");

var radiusModal = document.getElementById("radiusModal");

var radiusvalueModal = document.getElementById("radiusvalueModal");

var spacingModal = document.getElementById("spacingModal");

var spacingvalueModal = document.getElementById("spacingvalueModal");

var viewporttype = "";

var previousselectedobjecttype = "";

var div = document.getElementById('clipArtCategories');

var category = "";

var subcategory = "";

var categories = document.getElementById('categories');

var subcategories = document.getElementById('subcategories');

var subsubcategories = document.getElementById('subsubcategories');

var categoriesModal = document.getElementById('categoriesModal');

var subcategoriesModal = document.getElementById('subcategoriesModal');

var subsubcategoriesModal = document.getElementById('subsubcategoriesModal');



var templatecategory = "";

var templatesubcategory = "";

var templatecategories = document.getElementById('templatecategories');

var templatesubcategories = document.getElementById('templatesubcategories');

var templatesubsubcategories = document.getElementById('templatesubsubcategories');

var templatecategoriesModal = document.getElementById('templatecategoriesModal');

var templatesubcategoriesModal = document.getElementById('templatesubcategoriesModal');

var templatesubsubcategoriesModal = document.getElementById('templatesubsubcategoriesModal');



var font_btn = document.getElementById('font_btn');

var font_title = document.getElementById('font_title');

var up = document.getElementById('up');

var down = document.getElementById('down');

var savedDesignsDiv = document.getElementById('savedDesigns');

var edit = null;

var editdesign = null;

var scalepoportional = true;

var saveOnly = false;

var guidelines = null;

var user_email = "";

var user = null;

var position = 0;

var overridemode = false;

var ListColors = [];

var Order = null

var customer = new Customer();

var frontstate = null;

var rightstate = null;

var backstate = null;

var leftstate = null;

var frontundo = [];

var rightundo = [];

var backundo = [];

var leftundo = [];

var frontredo = [];

var rightredo = [];

var backredo = [];

var leftredo = [];

var idcolorselected = null;

var namecolorselected = null;

var colorselected = null;

var zoom = false;

var scale = 1;

var elementpersonalizeselected = null;

var productsizelist = null;

var personalizelist = null;

var counter = 5;

var countsize = 0;

var emails = null;

var template = null;

var pathArray = window.location.pathname.split('/');

window.onload = function() 
{
    windowheight = Math.min(screen.availHeight, window.innerHeight);
    windowwidth = Math.min(screen.availWidth, window.innerWidth);
    windowheight = screen.availHeight;
    windowwidth = screen.availWidth;
    windowheight = window.innerHeight;
    windowwidth = window.innerWidth;
    if (windowheight > windowwidth) 
        Orientation = "PORTRAIT";
    else 
        Orientation = "LANDSCAPE";

    if (windowwidth < 768) 
    {
        viewporttype = "xs";
        $("#directcheckout").removeClass("btn-lg");
        $("#directcheckout").removeClass("btn-md");
        $("#directcheckout").removeClass("btn-sm");
        $("#directcheckout").addClass("btn-xs");
        $("#getPriceBtn").removeClass("btn-lg");
        $("#getPriceBtn").removeClass("btn-md");
        $("#getPriceBtn").removeClass("btn-sm");
        $("#getPriceBtn").addClass("btn-xs");
        $("#signup").removeClass("btn-lg");
        $("#signup").removeClass("btn-md");
        $("#signup").removeClass("btn-sm");
        $("#signup").addClass("btn-xs");
        $("#logout").removeClass("btn-lg");
        $("#logout").removeClass("btn-md");
        $("#logout").removeClass("btn-sm");
        $("#logout").addClass("btn-xs");
    } 
    else if (windowwidth >= 768 && windowwidth <= 992) 
    {
        viewporttype = "sm";
        $("#directcheckout").removeClass("btn-lg");
        $("#directcheckout").removeClass("btn-md");
        $("#directcheckout").removeClass("btn-xs");
        $("#directcheckout").addClass("btn-sm");
        $("#getPriceBtn").removeClass("btn-lg");
        $("#getPriceBtn").removeClass("btn-md");
        $("#getPriceBtn").removeClass("btn-xs");
        $("#getPriceBtn").addClass("btn-sm");
        $("#signup").removeClass("btn-lg");
        $("#signup").removeClass("btn-md");
        $("#signup").removeClass("btn-xs");
        $("#signup").addClass("btn-sm");
        $("#logout").removeClass("btn-lg");
        $("#logout").removeClass("btn-md");
        $("#logout").removeClass("btn-xs");
        $("#logout").addClass("btn-sm");
    }
    else if (windowwidth > 992 && windowwidth <= 1200) 
    {
        viewporttype = "md";
        $("#directcheckout").removeClass("btn-lg");
        $("#directcheckout").removeClass("btn-sm");
        $("#directcheckout").removeClass("btn-xs");
        $("#directcheckout").addClass("btn-md");
        $("#getPriceBtn").removeClass("btn-lg");
        $("#getPriceBtn").removeClass("btn-sm");
        $("#getPriceBtn").removeClass("btn-xs");
        $("#getPriceBtn").addClass("btn-md");
        $("#signup").removeClass("btn-lg");
        $("#signup").removeClass("btn-sm");
        $("#signup").removeClass("btn-xs");
        $("#signup").addClass("btn-md");
        $("#logout").removeClass("btn-lg");
        $("#logout").removeClass("btn-sm");
        $("#logout").removeClass("btn-xs");
        $("#logout").addClass("btn-md");
    }
    else 
    {
        viewporttype = "lg";
        $("#directcheckout").removeClass("btn-sx");
        $("#directcheckout").removeClass("btn-md");
        $("#directcheckout").removeClass("btn-xs");
        $("#directcheckout").addClass("btn-md");
        $("#getPriceBtn").removeClass("btn-xs");
        $("#getPriceBtn").removeClass("btn-md");
        $("#getPriceBtn").removeClass("btn-xs");
        $("#getPriceBtn").addClass("btn-md");
        $("#signup").removeClass("btn-xs");
        $("#signup").removeClass("btn-md");
        $("#signup").removeClass("btn-xs");
        $("#signup").addClass("btn-md");
        $("#logout").removeClass("btn-xs");
        $("#logout").removeClass("btn-md");
        $("#logout").removeClass("btn-xs");
        $("#logout").addClass("btn-md");
    }

    if (viewporttype == "xs" || viewporttype == "sm" || viewporttype == "md") 
    {
        scale = ((window.innerHeight - (100)) / 810).toFixed(2);
        document.getElementById('myCarousel').setAttribute('style', " display:block; -moz-transform: scale(" + scale + ") translate(-50%); -ms-transform:  scale(" + scale + ") translate(-50%);  -o-transform:  scale(" + scale + ") translate(-50%); transform: scale(" + scale + ") translate(-50%)");
        document.getElementById('widthModal').setAttribute('style', " display:block; -moz-transform: scale(" + scale + ") ; -ms-transform:  scale(" + scale + ");  -o-transform:  scale(" + scale + "); transform: scale(" + scale + ");");
        document.getElementById('heightModal').setAttribute('style', " display:block; -moz-transform: scale(" + scale + ") ; -ms-transform:  scale(" + scale + ");  -o-transform:  scale(" + scale + "); transform: scale(" + scale + ");");
        if (windowheight > windowwidth) 
            CloseModal("disableview");
        else 
            ShowModal("disableview");
    }
    else 
        CloseModal("disableview");

    if (isMobile()) 
    {
        device = "mobile";
        document.getElementById("footer_menu").style.display = "block";
        document.getElementById("footer_menu_text").style.display = "none";
        document.getElementById("footer_menu_art").style.display = "none";
    }
    $('body').on('contextmenu', '#myCarousel', function(e) {
        return false;
    });

    if (pathArray[1] == 'studio' || pathArray[1] == 'designstudio')
    {
        switch (pathArray[2]) 
        {
            case "p":
                    idproduct = pathArray[3];
                break;
            case "editing":
                    idproduct = pathArray[3];
                    //qs["editdesign"] = pathArray[4];
                break;
            case "edit":
                    idproduct = pathArray[3];
                    //qs["editdesign"] = pathArray[4];
                    editdesign = pathArray[4];
                break;
            case "e":
                    idproduct = pathArray[3]; 
                    //qs["email"] = pathArray[4];
                    emails = pathArray[4];
                break;
            case "t":
                    idproduct = pathArray[3];
                    //qs["template"] = pathArray[4];
                    template = pathArray[4];
                break;
            default:
                    idproduct = 0;
                break;
        }
        LoadInitialProduct();
    }
    else
    {
        LoadInitialProduct();
    }
};



function LoadInitialProduct()
{
    $.get(window.location.origin + '/initialinfo/'+ idproduct,function(data)
    {  
        //console.log(data);
        product = data.product;
        colorsmin1 = product.colorsmin1;
        colorsmin6 = product.colorsmin6;
        user = data.user;
        if(user == null)
        {
            var roles = [{id: 2, name: "Customer", slug: "customer", description: "Registered Customer", special: "no-access", status:"Enable", created_at: "2019-04-15 21:28:11",updated_at: "2019-04-15 21:28:11",}];
                user = {firstname: "", id: null, lastname: "",password: "",roles: roles, username: "",email: "",name: "",newsletter: "",
                        phone: "",special_offers: "",status: "1", birthday: null, shippingType : "", shippingStreet : "", shippingCity : "",
                        shippingState : "", shippingZip : "", billingStreet : "", billingCity : "", billingState : "", billingZip : "",
                        cardtype : "", cardnumber : "", company : "" };
        }   
        ListColors = data.inkcolors;
        Order = data.Order;
        current_brand_name= product.brand;
        min_quantity = product.min_quantity;   
        current_product_name =  product.name; 
        currentcolor =  product.color.name; 
        updateCanvasProperty('start');
        setsessionInfo();        
    });
}


function updateCanvasProperty(type)
{
    if(type =='start')
    {
        document.getElementById('product_name').innerHTML =  product.parent.name; 
        document.getElementById('product_nameModal').innerHTML =  product.name;
        document.getElementById('description_image').src =window.location.origin+'/img/product/' + product.image;     
        document.getElementById('description_imageModal').src =window.location.origin+'/img/product/' + product.image;
        if (product.frontenable)
        {
            var frontCanvasShirt = document.getElementById('frontCanvasShirt');
                frontCanvasShirt.style.position = 'relative';
                frontCanvasShirt.style.margin = 'auto';
                frontCanvasShirt.style.width = '743px';
                frontCanvasShirt.style.height = '810px'; 
                frontCanvasShirt.style.border = '0px solid ' + '#eeeeee';
                frontCanvasShirt.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.frontimage + "')";
            var frontActiveImages = document.getElementById('frontActiveImage');
                frontActiveImages.src = window.location.origin+'/img/product/' + product.frontimage;
            var frontCanvaswrapper = document.getElementById('frontcanvas-wrapper'); 
                frontCanvaswrapper.style.position = 'relative';
                frontCanvaswrapper.style.width =  product.frontwidth + 'px'; 
                frontCanvaswrapper.style.height =  product.frontheight + 'px'; 
                frontCanvaswrapper.style.top =  product.fronttop + 'px';
                frontCanvaswrapper.style.left =  product.frontleft + 'px';
                frontCanvaswrapper.style.border = '0px solid ' + '#eeeeee';
                front.setWidth(product.frontwidth);
                front.setHeight(product.frontheight);
            var frontSavedDesing = document.getElementById('frontSavedDesing');
                frontSavedDesing.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.frontimage + "')";
                frontSavedDesing.style.position = 'relative';
                frontSavedDesing.style.margin = 'auto';
                frontSavedDesing.style.width = '743px';
                frontSavedDesing.style.height = '810px'; 
            var frontPreviewSave = document.getElementById('frontPreviewSave');
                frontPreviewSave.style.position = 'relative';
                frontPreviewSave.style.width = product.frontwidth + 'px'; 
                frontPreviewSave.style.height = product.frontheight + 'px'; 
                frontPreviewSave.style.top = product.fronttop + 'px';
                frontPreviewSave.style.left = product.frontleft + 'px';
            var frontSharePreviewCase = document.getElementById('frontSharePreviewCase');
                frontSharePreviewCase.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.frontimage + "')";
                frontSharePreviewCase.style.position = 'relative';
                frontSharePreviewCase.style.margin = 'auto';
                frontSharePreviewCase.style.width = '743px';
                frontSharePreviewCase.style.height = '810px'; 
            var sharePreviewFront = document.getElementById('sharePreviewFront');
                sharePreviewFront.style.position = 'relative';
                sharePreviewFront.style.width = product.frontwidth + 'px'; 
                sharePreviewFront.style.height = product.frontheight + 'px'; 
                sharePreviewFront.style.top = product.fronttop + 'px';
                sharePreviewFront.style.left = product.frontleft + 'px';
            var frontSavedDesingPreview = document.getElementById('frontSavedDesingPreview');
                frontSavedDesingPreview.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.frontimage + "')";
                frontSavedDesingPreview.style.position = 'relative';
                frontSavedDesingPreview.style.margin = 'auto';
                frontSavedDesingPreview.style.width = '743px';
                frontSavedDesingPreview.style.height = '810px'; 
            var frontSavedDesingPreview2 = document.getElementById('frontSavedDesingPreview2');
                frontSavedDesingPreview2.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.frontimage + "')";
                frontSavedDesingPreview2.style.position = 'relative';
                frontSavedDesingPreview2.style.margin = 'auto';
                frontSavedDesingPreview2.style.width = '743px';
                frontSavedDesingPreview2.style.height = '810px'; 
            var frontSavePreview = document.getElementById('frontSavePreview');
                frontSavePreview.style.position = 'relative';
                frontSavePreview.style.width = product.frontwidth + 'px'; 
                frontSavePreview.style.height = product.frontheight + 'px'; 
                frontSavePreview.style.top = product.fronttop + 'px';
                frontSavePreview.style.left = product.frontleft + 'px';
            var frontSavePreview2 = document.getElementById('frontSavePreview2');
                frontSavePreview2.style.position = 'relative';
                frontSavePreview2.style.width = product.frontwidth + 'px'; 
                frontSavePreview2.style.height = product.frontheight + 'px'; 
                frontSavePreview2.style.top = product.fronttop + 'px';
                frontSavePreview2.style.left = product.frontleft + 'px';
            var frontShirtURL = document.getElementById('frontShirtURL');
                frontShirtURL.value = window.location.origin+'/img/product/' + product.frontimage;
        }
        if (product.rightenable)
        {
            var rightCanvasShirt = document.getElementById('rightCanvasShirt');
                rightCanvasShirt.style.position = 'relative';
                rightCanvasShirt.style.margin = 'auto';
                rightCanvasShirt.style.width = '743px';
                rightCanvasShirt.style.height = '810px'; 
                rightCanvasShirt.style.border = '0px solid ' + '#eeeeee';
                rightCanvasShirt.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.rightimage + "')";
            var rightActiveImages = document.getElementById('rightActiveImage');
                rightActiveImages.src = window.location.origin+'/img/product/' + product.rightimage;
            var rightCanvaswrapper = document.getElementById('rightcanvas-wrapper'); 
                rightCanvaswrapper.style.position = 'relative';
                rightCanvaswrapper.style.width =  product.rightwidth + 'px'; 
                rightCanvaswrapper.style.height =  product.rightheight + 'px'; 
                rightCanvaswrapper.style.top =  product.righttop + 'px';
                rightCanvaswrapper.style.left =  product.rightleft + 'px';
                rightCanvaswrapper.style.border = '0px solid ' + '#eeeeee';
                right.setWidth(product.rightwidth);
                right.setHeight(product.rightheight);
            var rightSavedDesing = document.getElementById('rightSavedDesing');
                rightSavedDesing.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.rightimage + "')";
                rightSavedDesing.style.position = 'relative';
                rightSavedDesing.style.margin = 'auto';
                rightSavedDesing.style.width = '743px';
                rightSavedDesing.style.height = '810px'; 
            var rightPreviewSave = document.getElementById('rightPreviewSave');
                rightPreviewSave.style.position = 'relative';
                rightPreviewSave.style.width = product.rightwidth + 'px'; 
                rightPreviewSave.style.height = product.rightheight + 'px'; 
                rightPreviewSave.style.top = product.righttop + 'px';
                rightPreviewSave.style.left = product.rightleft + 'px';
            var rightSharePreviewCase = document.getElementById('rightSharePreviewCase');
                rightSharePreviewCase.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.rightimage + "')";
                rightSharePreviewCase.style.position = 'relative';
                rightSharePreviewCase.style.margin = 'auto';
                rightSharePreviewCase.style.width = '743px';
                rightSharePreviewCase.style.height = '810px'; 
            var sharePreviewFront = document.getElementById('sharePreviewFront');
                sharePreviewFront.style.position = 'relative';
                sharePreviewFront.style.width = product.rightwidth + 'px'; 
                sharePreviewFront.style.height = product.rightheight + 'px'; 
                sharePreviewFront.style.top = product.righttop + 'px';
                sharePreviewFront.style.left = product.rightleft + 'px';
            var rightSavedDesingPreview = document.getElementById('rightSavedDesingPreview');
                rightSavedDesingPreview.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.rightimage + "')";
                rightSavedDesingPreview.style.position = 'relative';
                rightSavedDesingPreview.style.margin = 'auto';
                rightSavedDesingPreview.style.width = '743px';
                rightSavedDesingPreview.style.height = '810px'; 
            var rightSavedDesingPreview2 = document.getElementById('rightSavedDesingPreview2');
                rightSavedDesingPreview2.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.rightimage + "')";
                rightSavedDesingPreview2.style.position = 'relative';
                rightSavedDesingPreview2.style.margin = 'auto';
                rightSavedDesingPreview2.style.width = '743px';
                rightSavedDesingPreview2.style.height = '810px'; 
            var rightSavePreview = document.getElementById('rightSavePreview');
                rightSavePreview.style.position = 'relative';
                rightSavePreview.style.width = product.rightwidth + 'px'; 
                rightSavePreview.style.height = product.rightheight + 'px'; 
                rightSavePreview.style.top = product.righttop + 'px';
                rightSavePreview.style.left = product.rightleft + 'px';
            var rightSavePreview2 = document.getElementById('rightSavePreview2');
                rightSavePreview2.style.position = 'relative';
                rightSavePreview2.style.width = product.rightwidth + 'px'; 
                rightSavePreview2.style.height = product.rightheight + 'px'; 
                rightSavePreview2.style.top = product.righttop + 'px';
                rightSavePreview2.style.left = product.rightleft + 'px';
            var rightShirtURL = document.getElementById('rightShirtURL');
                rightShirtURL.value = window.location.origin+'/img/product/' + product.rightimage;
        }
        if (product.backenable)
        {
            var backCanvasShirt = document.getElementById('backCanvasShirt');
                backCanvasShirt.style.position = 'relative';
                backCanvasShirt.style.margin = 'auto';
                backCanvasShirt.style.width = '743px';
                backCanvasShirt.style.height = '810px'; 
                backCanvasShirt.style.border = '0px solid ' + '#eeeeee';
                backCanvasShirt.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.backimage + "')";
            var backActiveImages = document.getElementById('backActiveImage');
                backActiveImages.src = window.location.origin+'/img/product/' + product.backimage;
            var backCanvaswrapper = document.getElementById('backcanvas-wrapper'); 
                backCanvaswrapper.style.position = 'relative';
                backCanvaswrapper.style.width =  product.backwidth + 'px'; 
                backCanvaswrapper.style.height =  product.backheight + 'px'; 
                backCanvaswrapper.style.top =  product.backtop + 'px';
                backCanvaswrapper.style.left =  product.backleft + 'px';
                backCanvaswrapper.style.border = '0px solid ' + '#eeeeee';
                back.setWidth(product.backwidth);
                back.setHeight(product.backheight);
            var backSavedDesing = document.getElementById('backSavedDesing');
                backSavedDesing.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.backimage + "')";
                backSavedDesing.style.position = 'relative';
                backSavedDesing.style.margin = 'auto';
                backSavedDesing.style.width = '743px';
                backSavedDesing.style.height = '810px'; 
            var backPreviewSave = document.getElementById('backPreviewSave');
                backPreviewSave.style.position = 'relative';
                backPreviewSave.style.width = product.backwidth + 'px'; 
                backPreviewSave.style.height = product.backheight + 'px'; 
                backPreviewSave.style.top = product.backtop + 'px';
                backPreviewSave.style.left = product.backleft + 'px';
            var backSharePreviewCase = document.getElementById('backSharePreviewCase');
                backSharePreviewCase.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.backimage + "')";
                backSharePreviewCase.style.position = 'relative';
                backSharePreviewCase.style.margin = 'auto';
                backSharePreviewCase.style.width = '743px';
                backSharePreviewCase.style.height = '810px'; 
            var sharePreviewFront = document.getElementById('sharePreviewFront');
                sharePreviewFront.style.position = 'relative';
                sharePreviewFront.style.width = product.backwidth + 'px'; 
                sharePreviewFront.style.height = product.backheight + 'px'; 
                sharePreviewFront.style.top = product.backtop + 'px';
                sharePreviewFront.style.left = product.backleft + 'px';
            var backSavedDesingPreview = document.getElementById('backSavedDesingPreview');
                backSavedDesingPreview.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.backimage + "')";
                backSavedDesingPreview.style.position = 'relative';
                backSavedDesingPreview.style.margin = 'auto';
                backSavedDesingPreview.style.width = '743px';
                backSavedDesingPreview.style.height = '810px'; 
            var backSavedDesingPreview2 = document.getElementById('backSavedDesingPreview2');
                backSavedDesingPreview2.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.backimage + "')";
                backSavedDesingPreview2.style.position = 'relative';
                backSavedDesingPreview2.style.margin = 'auto';
                backSavedDesingPreview2.style.width = '743px';
                backSavedDesingPreview2.style.height = '810px'; 
            var backSavePreview = document.getElementById('backSavePreview');
                backSavePreview.style.position = 'relative';
                backSavePreview.style.width = product.backwidth + 'px'; 
                backSavePreview.style.height = product.backheight + 'px'; 
                backSavePreview.style.top = product.backtop + 'px';
                backSavePreview.style.left = product.backleft + 'px';
            var backSavePreview2 = document.getElementById('backSavePreview2');
                backSavePreview2.style.position = 'relative';
                backSavePreview2.style.width = product.backwidth + 'px'; 
                backSavePreview2.style.height = product.backheight + 'px'; 
                backSavePreview2.style.top = product.backtop + 'px';
                backSavePreview2.style.left = product.backleft + 'px';
            var backShirtURL = document.getElementById('backShirtURL');
                backShirtURL.value = window.location.origin+'/img/product/' + product.rightimage;
        }
        if (product.leftenable)
        {
            var leftCanvasShirt = document.getElementById('leftCanvasShirt');
                leftCanvasShirt.style.position = 'relative';
                leftCanvasShirt.style.margin = 'auto';
                leftCanvasShirt.style.width = '743px';
                leftCanvasShirt.style.height = '810px'; 
                leftCanvasShirt.style.border = '0px solid ' + '#eeeeee';
                leftCanvasShirt.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.leftimage + "')";
            var leftActiveImages = document.getElementById('leftActiveImage');
                leftActiveImages.src = window.location.origin+'/img/product/' + product.leftimage;
            var leftCanvaswrapper = document.getElementById('leftcanvas-wrapper'); 
                leftCanvaswrapper.style.position = 'relative';
                leftCanvaswrapper.style.width =  product.leftwidth + 'px'; 
                leftCanvaswrapper.style.height =  product.leftheight + 'px'; 
                leftCanvaswrapper.style.top =  product.lefttop + 'px';
                leftCanvaswrapper.style.left =  product.leftleft + 'px';
                leftCanvaswrapper.style.border = '0px solid ' + '#eeeeee';
                left.setWidth(product.leftwidth);
                left.setHeight(product.leftheight);
            var leftSavedDesing = document.getElementById('leftSavedDesing');
                leftSavedDesing.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.leftimage + "')";
                leftSavedDesing.style.position = 'relative';
                leftSavedDesing.style.margin = 'auto';
                leftSavedDesing.style.width = '743px';
                leftSavedDesing.style.height = '810px'; 
            var leftPreviewSave = document.getElementById('leftPreviewSave');
                leftPreviewSave.style.position = 'relative';
                leftPreviewSave.style.width = product.leftwidth + 'px'; 
                leftPreviewSave.style.height = product.leftheight + 'px'; 
                leftPreviewSave.style.top = product.lefttop + 'px';
                leftPreviewSave.style.left = product.leftleft + 'px';
            var leftSharePreviewCase = document.getElementById('leftSharePreviewCase');
                leftSharePreviewCase.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.leftimage + "')";
                leftSharePreviewCase.style.position = 'relative';
                leftSharePreviewCase.style.margin = 'auto';
                leftSharePreviewCase.style.width = '743px';
                leftSharePreviewCase.style.height = '810px'; 
            var sharePreviewFront = document.getElementById('sharePreviewFront');
                sharePreviewFront.style.position = 'relative';
                sharePreviewFront.style.width = product.leftwidth + 'px'; 
                sharePreviewFront.style.height = product.leftheight + 'px'; 
                sharePreviewFront.style.top = product.lefttop + 'px';
                sharePreviewFront.style.left = product.leftleft + 'px';
            var leftSavedDesingPreview = document.getElementById('leftSavedDesingPreview');
                leftSavedDesingPreview.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.leftimage + "')";
                leftSavedDesingPreview.style.position = 'relative';
                leftSavedDesingPreview.style.margin = 'auto';
                leftSavedDesingPreview.style.width = '743px';
                leftSavedDesingPreview.style.height = '810px'; 
            var leftSavedDesingPreview2 = document.getElementById('leftSavedDesingPreview2');
                leftSavedDesingPreview2.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.leftimage + "')";
                leftSavedDesingPreview2.style.position = 'relative';
                leftSavedDesingPreview2.style.margin = 'auto';
                leftSavedDesingPreview2.style.width = '743px';
                leftSavedDesingPreview2.style.height = '810px'; 
            var leftSavePreview = document.getElementById('leftSavePreview');
                leftSavePreview.style.position = 'relative';
                leftSavePreview.style.width = product.leftwidth + 'px'; 
                leftSavePreview.style.height = product.leftheight + 'px'; 
                leftSavePreview.style.top = product.lefttop + 'px';
                leftSavePreview.style.left = product.leftleft + 'px';
            var leftSavePreview2 = document.getElementById('leftSavePreview2');
                leftSavePreview2.style.position = 'relative';
                leftSavePreview2.style.width = product.leftwidth + 'px'; 
                leftSavePreview2.style.height = product.leftheight + 'px'; 
                leftSavePreview2.style.top = product.lefttop + 'px';
                leftSavePreview2.style.left = product.leftleft + 'px';
            var leftShirtURL = document.getElementById('leftShirtURL');
                leftShirtURL.value = window.location.origin+'/img/product/' + product.rightimage;
        }

        //add or set product
        //if(Order._Product_design_list[0] != undefined)
        //{
            //Order._Product_design_list[position]._Product = product;
            //guidelines = Order._Product_design_list[position]._Product.guidelines;
            //productsizelist = Order._Product_design_list[position]._Product.Sizes;
        //}
        ShowDescription();        
        ShowChildsProducts();       
    }
    else
    {
        $.get(window.location.origin + '/productinfo/'+ idproduct,function(data)
        {
            //console.log(data);
            product = data.product;
            colorsmin1 = product.colorsmin1;
            colorsmin6 = product.colorsmin6;
            current_brand_name= product.brand;
            min_quantity = product.min_quantity;   
            current_product_name =  product.name; 
            currentcolor =  product.color.name; 
            document.getElementById('product_name').innerHTML =  product.parent.name; 
            document.getElementById('product_nameModal').innerHTML =  product.name;
            document.getElementById('description_image').src =window.location.origin+'/img/product/' + product.image;     
            document.getElementById('description_imageModal').src =window.location.origin+'/img/product/' + product.image;
            if (product.frontenable)
            {
                var frontCanvasShirt = document.getElementById('frontCanvasShirt');
                    frontCanvasShirt.style.position = 'relative';
                    frontCanvasShirt.style.margin = 'auto';
                    frontCanvasShirt.style.width = '743px';
                    frontCanvasShirt.style.height = '810px'; 
                    frontCanvasShirt.style.border = '0px solid ' + '#eeeeee';
                    frontCanvasShirt.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.frontimage + "')";
                var frontActiveImages = document.getElementById('frontActiveImage');
                    frontActiveImages.src = window.location.origin+'/img/product/' + product.frontimage;
                var frontCanvaswrapper = document.getElementById('frontcanvas-wrapper'); 
                    frontCanvaswrapper.style.position = 'relative';
                    frontCanvaswrapper.style.width =  product.frontwidth + 'px'; 
                    frontCanvaswrapper.style.height =  product.frontheight + 'px'; 
                    frontCanvaswrapper.style.top =  product.fronttop + 'px';
                    frontCanvaswrapper.style.left =  product.frontleft + 'px';
                    frontCanvaswrapper.style.border = '0px solid ' + '#eeeeee';
                    front.setWidth(product.frontwidth);
                    front.setHeight(product.frontheight);
                var frontSavedDesing = document.getElementById('frontSavedDesing');
                    frontSavedDesing.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.frontimage + "')";
                    frontSavedDesing.style.position = 'relative';
                    frontSavedDesing.style.margin = 'auto';
                    frontSavedDesing.style.width = '743px';
                    frontSavedDesing.style.height = '810px'; 
                var frontPreviewSave = document.getElementById('frontPreviewSave');
                    frontPreviewSave.style.position = 'relative';
                    frontPreviewSave.style.width = product.frontwidth + 'px'; 
                    frontPreviewSave.style.height = product.frontheight + 'px'; 
                    frontPreviewSave.style.top = product.fronttop + 'px';
                    frontPreviewSave.style.left = product.frontleft + 'px';
                var frontSharePreviewCase = document.getElementById('frontSharePreviewCase');
                    frontSharePreviewCase.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.frontimage + "')";
                    frontSharePreviewCase.style.position = 'relative';
                    frontSharePreviewCase.style.margin = 'auto';
                    frontSharePreviewCase.style.width = '743px';
                    frontSharePreviewCase.style.height = '810px'; 
                var sharePreviewFront = document.getElementById('sharePreviewFront');
                    sharePreviewFront.style.position = 'relative';
                    sharePreviewFront.style.width = product.frontwidth + 'px'; 
                    sharePreviewFront.style.height = product.frontheight + 'px'; 
                    sharePreviewFront.style.top = product.fronttop + 'px';
                    sharePreviewFront.style.left = product.frontleft + 'px';
                var frontSavedDesingPreview = document.getElementById('frontSavedDesingPreview');
                    frontSavedDesingPreview.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.frontimage + "')";
                    frontSavedDesingPreview.style.position = 'relative';
                    frontSavedDesingPreview.style.margin = 'auto';
                    frontSavedDesingPreview.style.width = '743px';
                    frontSavedDesingPreview.style.height = '810px'; 
                var frontSavedDesingPreview2 = document.getElementById('frontSavedDesingPreview2');
                    frontSavedDesingPreview2.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.frontimage + "')";
                    frontSavedDesingPreview2.style.position = 'relative';
                    frontSavedDesingPreview2.style.margin = 'auto';
                    frontSavedDesingPreview2.style.width = '743px';
                    frontSavedDesingPreview2.style.height = '810px'; 
                var frontSavePreview = document.getElementById('frontSavePreview');
                    frontSavePreview.style.position = 'relative';
                    frontSavePreview.style.width = product.frontwidth + 'px'; 
                    frontSavePreview.style.height = product.frontheight + 'px'; 
                    frontSavePreview.style.top = product.fronttop + 'px';
                    frontSavePreview.style.left = product.frontleft + 'px';
                var frontSavePreview2 = document.getElementById('frontSavePreview2');
                    frontSavePreview2.style.position = 'relative';
                    frontSavePreview2.style.width = product.frontwidth + 'px'; 
                    frontSavePreview2.style.height = product.frontheight + 'px'; 
                    frontSavePreview2.style.top = product.fronttop + 'px';
                    frontSavePreview2.style.left = product.frontleft + 'px';
                var frontShirtURL = document.getElementById('frontShirtURL');
                    frontShirtURL.value = window.location.origin+'/img/product/' + product.frontimage;
            }
            if (product.rightenable)
            {
                var rightCanvasShirt = document.getElementById('rightCanvasShirt');
                    rightCanvasShirt.style.position = 'relative';
                    rightCanvasShirt.style.margin = 'auto';
                    rightCanvasShirt.style.width = '743px';
                    rightCanvasShirt.style.height = '810px'; 
                    rightCanvasShirt.style.border = '0px solid ' + '#eeeeee';
                    rightCanvasShirt.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.rightimage + "')";
                var rightActiveImages = document.getElementById('rightActiveImage');
                    rightActiveImages.src = window.location.origin+'/img/product/' + product.rightimage;
                var rightCanvaswrapper = document.getElementById('rightcanvas-wrapper'); 
                    rightCanvaswrapper.style.position = 'relative';
                    rightCanvaswrapper.style.width =  product.rightwidth + 'px'; 
                    rightCanvaswrapper.style.height =  product.rightheight + 'px'; 
                    rightCanvaswrapper.style.top =  product.righttop + 'px';
                    rightCanvaswrapper.style.left =  product.rightleft + 'px';
                    rightCanvaswrapper.style.border = '0px solid ' + '#eeeeee';
                    right.setWidth(product.rightwidth);
                    right.setHeight(product.rightheight);
                var rightSavedDesing = document.getElementById('rightSavedDesing');
                    rightSavedDesing.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.rightimage + "')";
                    rightSavedDesing.style.position = 'relative';
                    rightSavedDesing.style.margin = 'auto';
                    rightSavedDesing.style.width = '743px';
                    rightSavedDesing.style.height = '810px'; 
                var rightPreviewSave = document.getElementById('rightPreviewSave');
                    rightPreviewSave.style.position = 'relative';
                    rightPreviewSave.style.width = product.rightwidth + 'px'; 
                    rightPreviewSave.style.height = product.rightheight + 'px'; 
                    rightPreviewSave.style.top = product.righttop + 'px';
                    rightPreviewSave.style.left = product.rightleft + 'px';
                var rightSharePreviewCase = document.getElementById('rightSharePreviewCase');
                    rightSharePreviewCase.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.rightimage + "')";
                    rightSharePreviewCase.style.position = 'relative';
                    rightSharePreviewCase.style.margin = 'auto';
                    rightSharePreviewCase.style.width = '743px';
                    rightSharePreviewCase.style.height = '810px'; 
                var sharePreviewFront = document.getElementById('sharePreviewFront');
                    sharePreviewFront.style.position = 'relative';
                    sharePreviewFront.style.width = product.rightwidth + 'px'; 
                    sharePreviewFront.style.height = product.rightheight + 'px'; 
                    sharePreviewFront.style.top = product.righttop + 'px';
                    sharePreviewFront.style.left = product.rightleft + 'px';
                var rightSavedDesingPreview = document.getElementById('rightSavedDesingPreview');
                    rightSavedDesingPreview.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.rightimage + "')";
                    rightSavedDesingPreview.style.position = 'relative';
                    rightSavedDesingPreview.style.margin = 'auto';
                    rightSavedDesingPreview.style.width = '743px';
                    rightSavedDesingPreview.style.height = '810px'; 
                var rightSavedDesingPreview2 = document.getElementById('rightSavedDesingPreview2');
                    rightSavedDesingPreview2.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.rightimage + "')";
                    rightSavedDesingPreview2.style.position = 'relative';
                    rightSavedDesingPreview2.style.margin = 'auto';
                    rightSavedDesingPreview2.style.width = '743px';
                    rightSavedDesingPreview2.style.height = '810px'; 
                var rightSavePreview = document.getElementById('rightSavePreview');
                    rightSavePreview.style.position = 'relative';
                    rightSavePreview.style.width = product.rightwidth + 'px'; 
                    rightSavePreview.style.height = product.rightheight + 'px'; 
                    rightSavePreview.style.top = product.righttop + 'px';
                    rightSavePreview.style.left = product.rightleft + 'px';
                var rightSavePreview2 = document.getElementById('rightSavePreview2');
                    rightSavePreview2.style.position = 'relative';
                    rightSavePreview2.style.width = product.rightwidth + 'px'; 
                    rightSavePreview2.style.height = product.rightheight + 'px'; 
                    rightSavePreview2.style.top = product.righttop + 'px';
                    rightSavePreview2.style.left = product.rightleft + 'px';
                var rightShirtURL = document.getElementById('rightShirtURL');
                    rightShirtURL.value = window.location.origin+'/img/product/' + product.rightimage;
            }
            if (product.backenable)
            {
                var backCanvasShirt = document.getElementById('backCanvasShirt');
                    backCanvasShirt.style.position = 'relative';
                    backCanvasShirt.style.margin = 'auto';
                    backCanvasShirt.style.width = '743px';
                    backCanvasShirt.style.height = '810px'; 
                    backCanvasShirt.style.border = '0px solid ' + '#eeeeee';
                    backCanvasShirt.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.backimage + "')";
                var backActiveImages = document.getElementById('backActiveImage');
                    backActiveImages.src = window.location.origin+'/img/product/' + product.backimage;
                var backCanvaswrapper = document.getElementById('backcanvas-wrapper'); 
                    backCanvaswrapper.style.position = 'relative';
                    backCanvaswrapper.style.width =  product.backwidth + 'px'; 
                    backCanvaswrapper.style.height =  product.backheight + 'px'; 
                    backCanvaswrapper.style.top =  product.backtop + 'px';
                    backCanvaswrapper.style.left =  product.backleft + 'px';
                    backCanvaswrapper.style.border = '0px solid ' + '#eeeeee';
                    back.setWidth(product.backwidth);
                    back.setHeight(product.backheight);
                var backSavedDesing = document.getElementById('backSavedDesing');
                    backSavedDesing.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.backimage + "')";
                    backSavedDesing.style.position = 'relative';
                    backSavedDesing.style.margin = 'auto';
                    backSavedDesing.style.width = '743px';
                    backSavedDesing.style.height = '810px'; 
                var backPreviewSave = document.getElementById('backPreviewSave');
                    backPreviewSave.style.position = 'relative';
                    backPreviewSave.style.width = product.backwidth + 'px'; 
                    backPreviewSave.style.height = product.backheight + 'px'; 
                    backPreviewSave.style.top = product.backtop + 'px';
                    backPreviewSave.style.left = product.backleft + 'px';
                var backSharePreviewCase = document.getElementById('backSharePreviewCase');
                    backSharePreviewCase.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.backimage + "')";
                    backSharePreviewCase.style.position = 'relative';
                    backSharePreviewCase.style.margin = 'auto';
                    backSharePreviewCase.style.width = '743px';
                    backSharePreviewCase.style.height = '810px'; 
                var sharePreviewFront = document.getElementById('sharePreviewFront');
                    sharePreviewFront.style.position = 'relative';
                    sharePreviewFront.style.width = product.backwidth + 'px'; 
                    sharePreviewFront.style.height = product.backheight + 'px'; 
                    sharePreviewFront.style.top = product.backtop + 'px';
                    sharePreviewFront.style.left = product.backleft + 'px';
                var backSavedDesingPreview = document.getElementById('backSavedDesingPreview');
                    backSavedDesingPreview.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.backimage + "')";
                    backSavedDesingPreview.style.position = 'relative';
                    backSavedDesingPreview.style.margin = 'auto';
                    backSavedDesingPreview.style.width = '743px';
                    backSavedDesingPreview.style.height = '810px'; 
                var backSavedDesingPreview2 = document.getElementById('backSavedDesingPreview2');
                    backSavedDesingPreview2.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.backimage + "')";
                    backSavedDesingPreview2.style.position = 'relative';
                    backSavedDesingPreview2.style.margin = 'auto';
                    backSavedDesingPreview2.style.width = '743px';
                    backSavedDesingPreview2.style.height = '810px'; 
                var backSavePreview = document.getElementById('backSavePreview');
                    backSavePreview.style.position = 'relative';
                    backSavePreview.style.width = product.backwidth + 'px'; 
                    backSavePreview.style.height = product.backheight + 'px'; 
                    backSavePreview.style.top = product.backtop + 'px';
                    backSavePreview.style.left = product.backleft + 'px';
                var backSavePreview2 = document.getElementById('backSavePreview2');
                    backSavePreview2.style.position = 'relative';
                    backSavePreview2.style.width = product.backwidth + 'px'; 
                    backSavePreview2.style.height = product.backheight + 'px'; 
                    backSavePreview2.style.top = product.backtop + 'px';
                    backSavePreview2.style.left = product.backleft + 'px';
                var backShirtURL = document.getElementById('backShirtURL');
                    backShirtURL.value = window.location.origin+'/img/product/' + product.rightimage;
            }
            if (product.leftenable)
            {
                var leftCanvasShirt = document.getElementById('leftCanvasShirt');
                    leftCanvasShirt.style.position = 'relative';
                    leftCanvasShirt.style.margin = 'auto';
                    leftCanvasShirt.style.width = '743px';
                    leftCanvasShirt.style.height = '810px'; 
                    leftCanvasShirt.style.border = '0px solid ' + '#eeeeee';
                    leftCanvasShirt.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.leftimage + "')";
                var leftActiveImages = document.getElementById('leftActiveImage');
                    leftActiveImages.src = window.location.origin+'/img/product/' + product.leftimage;
                var leftCanvaswrapper = document.getElementById('leftcanvas-wrapper'); 
                    leftCanvaswrapper.style.position = 'relative';
                    leftCanvaswrapper.style.width =  product.leftwidth + 'px'; 
                    leftCanvaswrapper.style.height =  product.leftheight + 'px'; 
                    leftCanvaswrapper.style.top =  product.lefttop + 'px';
                    leftCanvaswrapper.style.left =  product.leftleft + 'px';
                    leftCanvaswrapper.style.border = '0px solid ' + '#eeeeee';
                    left.setWidth(product.leftwidth);
                    left.setHeight(product.leftheight);
                var leftSavedDesing = document.getElementById('leftSavedDesing');
                    leftSavedDesing.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.leftimage + "')";
                    leftSavedDesing.style.position = 'relative';
                    leftSavedDesing.style.margin = 'auto';
                    leftSavedDesing.style.width = '743px';
                    leftSavedDesing.style.height = '810px'; 
                var leftPreviewSave = document.getElementById('leftPreviewSave');
                    leftPreviewSave.style.position = 'relative';
                    leftPreviewSave.style.width = product.leftwidth + 'px'; 
                    leftPreviewSave.style.height = product.leftheight + 'px'; 
                    leftPreviewSave.style.top = product.lefttop + 'px';
                    leftPreviewSave.style.left = product.leftleft + 'px';
                var leftSharePreviewCase = document.getElementById('leftSharePreviewCase');
                    leftSharePreviewCase.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.leftimage + "')";
                    leftSharePreviewCase.style.position = 'relative';
                    leftSharePreviewCase.style.margin = 'auto';
                    leftSharePreviewCase.style.width = '743px';
                    leftSharePreviewCase.style.height = '810px'; 
                var sharePreviewFront = document.getElementById('sharePreviewFront');
                    sharePreviewFront.style.position = 'relative';
                    sharePreviewFront.style.width = product.leftwidth + 'px'; 
                    sharePreviewFront.style.height = product.leftheight + 'px'; 
                    sharePreviewFront.style.top = product.lefttop + 'px';
                    sharePreviewFront.style.left = product.leftleft + 'px';
                var leftSavedDesingPreview = document.getElementById('leftSavedDesingPreview');
                    leftSavedDesingPreview.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.leftimage + "')";
                    leftSavedDesingPreview.style.position = 'relative';
                    leftSavedDesingPreview.style.margin = 'auto';
                    leftSavedDesingPreview.style.width = '743px';
                    leftSavedDesingPreview.style.height = '810px'; 
                var leftSavedDesingPreview2 = document.getElementById('leftSavedDesingPreview2');
                    leftSavedDesingPreview2.style.backgroundImage = "url('"+window.location.origin+"/img/product/"+ product.leftimage + "')";
                    leftSavedDesingPreview2.style.position = 'relative';
                    leftSavedDesingPreview2.style.margin = 'auto';
                    leftSavedDesingPreview2.style.width = '743px';
                    leftSavedDesingPreview2.style.height = '810px'; 
                var leftSavePreview = document.getElementById('leftSavePreview');
                    leftSavePreview.style.position = 'relative';
                    leftSavePreview.style.width = product.leftwidth + 'px'; 
                    leftSavePreview.style.height = product.leftheight + 'px'; 
                    leftSavePreview.style.top = product.lefttop + 'px';
                    leftSavePreview.style.left = product.leftleft + 'px';
                var leftSavePreview2 = document.getElementById('leftSavePreview2');
                    leftSavePreview2.style.position = 'relative';
                    leftSavePreview2.style.width = product.leftwidth + 'px'; 
                    leftSavePreview2.style.height = product.leftheight + 'px'; 
                    leftSavePreview2.style.top = product.lefttop + 'px';
                    leftSavePreview2.style.left = product.leftleft + 'px';
                var leftShirtURL = document.getElementById('leftShirtURL');
                    leftShirtURL.value = window.location.origin+'/img/product/' + product.rightimage;
            }

            //add or set product
            //if(Order._Product_design_list[0] != undefined)
            //{
                //Order._Product_design_list[position]._Product = product;
                //guidelines = Order._Product_design_list[position]._Product.guidelines;
                //productsizelist = Order._Product_design_list[position]._Product.Sizes;
            //}
            ShowDescription();        
            ShowChildsProducts();       
        });
    }
    
}

function ShowDescription()
{
    var elms = document.querySelectorAll('[id="child_product_color_div_childsDescription"]');
    for(var i = 0; i < elms.length; i++) {                      
        var elchildsDescription =  elms[i];
        while ( elchildsDescription.firstChild ) elchildsDescription.removeChild( elchildsDescription.firstChild );
        elchildsDescription.innerHTML="";
    }
    var eldescription_label = document.getElementById("description_label");
    while ( eldescription_label.firstChild ) eldescription_label.removeChild( eldescription_label.firstChild );
    eldescription_label.innerHTML="Product Description";
    var eldescription_labelModal = document.getElementById("description_labelModal");
    while ( eldescription_labelModal.firstChild ) eldescription_labelModal.removeChild( eldescription_labelModal.firstChild );
    eldescription_labelModal.innerHTML="Product Description";
    eldescription_label.innerHTML="<strong>Brand:</strong>"+ product.brand;
    eldescription_labelModal.innerHTML="<strong>Brand:</strong>"+ product.brand;
    var h = document.createElement("h");        
    h.className = "modal-title";
    h.innerHTML = "<h6><b>Sizes:</b> "+ product.sizes[0].name + "-" + product.sizes[product.sizes.length-1].name +" <a href='javascript:void(0)' id=btnmodal"+product.id+"><br>size chart</a></h6><h6><b>Fabric:</b>"+product.fabric+"</h6>";
    document.getElementById("description_label").appendChild(h);
    var hModal = document.createElement("h");                   
    hModal.className = "modal-title";
    hModal.innerHTML = "<h6><b>Sizes:</b> "+ product.sizes[0].name + "-" + product.sizes[product.sizes.length-1].name +" <a href='javascript:void(0)' id=btnmodalModal"+product.id+"><br>size chart</a></h6><h6><b>Fabric:</b>"+product.fabric+"</h6>";
    document.getElementById("description_labelModal").appendChild(hModal);
    document.getElementById("current_product_color").innerHTML = " : "+product.color.name;
    document.getElementById("current_product_colorModal").innerHTML = " : "+product.color.name;
    var btn = document.getElementById("btnmodal"+product.id+"");
    var btnModal = document.getElementById("btnmodalModal"+product.id+"");
    btn.addEventListener("click", function()
    {
        $(".modal-body #sizechartimage").html("<img src='"+window.location.origin+"/img/product/" + product.parent.sizechartimage +"'>");
        $(".modal-body #sizechartdescription").html(product.sizechartdescription);
        var table='<thead><tr class="active"><th>Size</th><th>Length</th><th>Width</th></tr></thead><tbody>';
        product.parent.sizeschart.forEach(function(element) 
        {   
            table += '<tr><td>' + element.size + '</td><td>' + element.length + '</td><td>' + element.width + '</td></tr>';
        });
        $(".modal-body #sizechartable").html(table);
        $("#sizechartmodal").modal();
    });

    btnModal.addEventListener("click", function()
    {
        $(".modal-body #sizechartimageModal").html("<img src='"+window.location.origin+"/img/product/" + product.parent.sizechartimage +"'>");
        $(".modal-body #sizechartdescriptionModal").html(product.sizechartdescription);
        var tableModal = '<thead><tr class="active"><th>Size</th><th>Length</th><th>Width</th></tr></thead><tbody>';
        product.parent.sizeschart.forEach(function(element) 
        {   
            tableModal += '<tr><td>' + element.size + '</td><td>' + element.length + '</td><td>' + element.width + '</td></tr>';
        });
        $(".modal-body #sizechartableModal").html(tableModal);
        $("#sizechartmodalModal").modal();
    });
}

function ShowChildsProducts()
{
    //childs products - colors
    var el = document.getElementById("child_product_color_div");
    while ( el.firstChild ) el.removeChild( el.firstChild );   
    var elModal = document.getElementById("child_product_color_divModal");
    while ( elModal.firstChild ) elModal.removeChild( elModal.firstChild ); 
    //min colors 1
    var el = document.getElementById("child_product_color_div");      
        el.innerHTML="Quantity 1-5<br>";       
    var elModal = document.getElementById("child_product_color_divModal");        
        elModal.innerHTML="Quantity 1-5<br>"; 
    colorsmin1.forEach(function(element) 
    {   
        var iDiv = document.createElement("div");                                     
            iDiv.id = "child_color_" + element.name.replace(/ /g, "_");
            iDiv.className = "block";
            iDiv.innerHTML = "";
            iDiv.style.borderRadius = "50%";
            iDiv.style.backgroundColor  = element.hex;
            iDiv.style.width = "30px";
            iDiv.style.height = "30px";
            iDiv.style.border = "1px solid #eeeeee";
            iDiv.style.cursor = "pointer"; 
            iDiv.style.marginRight = "1.7px";
            iDiv.setAttribute("title", element.name);
            iDiv.setAttribute("product_id", element.product_id);
        var iDivModal = document.createElement("div");                                     
            iDivModal.id = "child_color_Modal" + element.name.replace(/ /g, "_");
            iDivModal.className = "block";
            iDivModal.innerHTML = "";
            iDivModal.style.borderRadius = "50%";
            iDivModal.style.backgroundColor  =  element.hex;
            iDivModal.style.width = "30px";
            iDivModal.style.height = "30px";
            iDivModal.style.border = "1px solid #eeeeee";
            iDivModal.style.cursor = "pointer"; 
            iDivModal.style.marginRight = "1.7px";
            iDivModal.setAttribute("title",  + element.name);
            iDivModal.setAttribute("product_id", element.product_id);
        if (element.hex == "")
        {
            var imgI = document.createElement("img");
                imgI.src = window.location.origin+"/img/color/" + element.file;
                imgI.id = "child_color_" + element.name.replace(/ /g, "_");
                imgI.style.width = "30px";
                imgI.style.position = "relative";
                imgI.style.height = "30px";
                imgI.style.border = "1px solid #eeeeee";
                imgI.style.borderRadius  = "50%"; 
                imgI.style.cursor = "pointer"; 
                imgI.setAttribute("product_id", element.product_id);
                imgI.addEventListener("click", function()
                {
                    child_product_color = element.name;
                    idproduct = this.getAttribute("product_id");
                    updateCanvasProperty();   
                    $("#productSectionModal").modal("hide");
                    document.getElementById("current_product_color").innerHTML = " : " + element.name;
                });
                imgI.addEventListener("mouseover", function()
                {   
                    ShowDescription(element.product_id); 
                });
                document.getElementById("child_product_color_div6").appendChild(imgI);
            var imgIModal = document.createElement("img");
                imgIModal.src = window.location.origin+"/img/color/" + element.file;
                imgIModal.id = "child_color_Modal" + element.name.replace(/ /g, "_");
                imgIModal.style.width = "30px";
                imgIModal.style.position = "relative";
                imgIModal.style.height = "30px";
                imgIModal.style.border = "1px solid #eeeeee";
                imgIModal.style.borderRadius  = "50%"; 
                imgIModal.setAttribute("product_id", element.product_id);
                imgIModal.addEventListener("click", function()
                {
                    child_product_color = element.name;
                    idproduct = this.getAttribute("product_id");
                    updateCanvasProperty();   
                    $("#productSectionModal").modal("hide");
                    document.getElementById("current_product_colorModal").innerHTML = " : " + element.name;
                });
                imgI.addEventListener("mouseover", function()
                {
                    ShowDescription(element.product_id); 
                });
                document.getElementById("child_product_color_div6Modal").appendChild(imgIModal);
    }
    else
    {
            iDiv.addEventListener("click", function()
            {
                child_product_color = element.name;
                idproduct = this.getAttribute("product_id");
                updateCanvasProperty();   
                $("#productSectionModal").modal("hide");
                document.getElementById("current_product_color").innerHTML = " : " + element.name;
                selectshirtcolor(this);
            });
            iDiv.addEventListener("mouseover", function()
            {
                document.getElementById("current_selected_product_color").innerHTML = element.name;
                ShowDescription(element.product_id); 
            });
            iDiv.addEventListener("mouseout", function()
            {
                document.getElementById("current_selected_product_color").innerHTML = "";
            });
            document.getElementById("child_product_color_div").appendChild(iDiv);
            iDivModal.addEventListener("click", function()
            {
                child_product_color = element.name;
                idproduct = this.getAttribute("product_id");
                updateCanvasProperty();   
                $("#productSectionModal").modal("hide");
                document.getElementById("current_product_colorModal").innerHTML = " : " + element.name;
                selectshirtcolor(this);
            });
            iDivModal.addEventListener("mouseover", function()
            {
                document.getElementById("current_selected_product_colorModal").innerHTML = element.name;
                    ShowDescription(element.product_id); 
            });
            iDivModal.addEventListener("mouseout", function()
            {
                document.getElementById("current_selected_product_colorModal").innerHTML = "";
            });
            document.getElementById("child_product_color_divModal").appendChild(iDivModal);
    }    
    });

    //min color 6
    var el6 = document.getElementById("child_product_color_div6");
    while ( el6.firstChild ) el6.removeChild( el6.firstChild );
    var el6Modal = document.getElementById("child_product_color_div6Modal");
    while ( el6Modal.firstChild ) el6Modal.removeChild( el6Modal.firstChild );
    var el6 = document.getElementById("child_product_color_div6");
    el6.innerHTML="Quantity 6+<br>";
    var el6Modal = document.getElementById("child_product_color_div6Modal");
    el6Modal.innerHTML="Quantity 6+<br>";
    colorsmin6.forEach(function(element) 
    {   
        var iDiv = document.createElement("div");                                     
            iDiv.id = "child_color_6_" + element.name.replace(/ /g, "_");
            iDiv.className = "block";
            iDiv.innerHTML = "";
            iDiv.style.borderRadius = "50%";
            iDiv.style.backgroundColor  = element.hex;
            iDiv.style.width = "30px";
            iDiv.style.height = "30px";
            iDiv.style.border = "1px solid #eeeeee";
            iDiv.style.cursor = "pointer"; 
            iDiv.style.marginRight = "1.7px";
            iDiv.setAttribute("title", element.name);
            iDiv.setAttribute("product_id", element.product_id);
        var iDivModal = document.createElement("div");                                     
            iDivModal.id = "child_color_6_Modal" + element.name.replace(/ /g, "_");
            iDivModal.className = "block";
            iDivModal.innerHTML = "";
            iDivModal.style.borderRadius = "50%";
            iDivModal.style.backgroundColor  =  element.hex;
            iDivModal.style.width = "30px";
            iDivModal.style.height = "30px";
            iDivModal.style.border = "1px solid #eeeeee";
            iDivModal.style.cursor = "pointer"; 
            iDivModal.style.marginRight = "1.7px";
            iDivModal.setAttribute("title",  + element.name);
            iDivModal.setAttribute("product_id", element.product_id);
        if (element.hex == "")
        {
            var imgI = document.createElement("img");
                imgI.src = window.location.origin+"/img/color/" + element.file;
                imgI.id = "child_color_6_" + element.name.replace(/ /g, "_");
                imgI.style.width = "30px";
                imgI.style.position = "relative";
                imgI.style.height = "30px";
                imgI.style.border = "1px solid #eeeeee";
                imgI.style.borderRadius  = "50%"; 
                imgI.style.cursor = "pointer"; 
                imgI.setAttribute("product_id", element.product_id);
                imgI.addEventListener("click", function()
                {
                    child_product_color = element.name;
                    idproduct = this.getAttribute("product_id");
                    updateCanvasProperty();   
                    $("#productSectionModal").modal("hide");
                    document.getElementById("current_product_color").innerHTML = " : " + element.name;
                });
                imgI.addEventListener("mouseover", function()
                {   
                    ShowDescription(element.product_id); 
                });
                document.getElementById("child_product_color_div6").appendChild(imgI);
            var imgIModal = document.createElement("img");
                imgIModal.src = window.location.origin+"/img/color/" + element.file;
                imgIModal.id = "child_color_6_Modal" + element.name.replace(/ /g, "_");
                imgIModal.style.width = "30px";
                imgIModal.style.position = "relative";
                imgIModal.style.height = "30px";
                imgIModal.style.border = "1px solid #eeeeee";
                imgIModal.style.borderRadius  = "50%"; 
                imgIModal.setAttribute("product_id", element.product_id);
                imgIModal.addEventListener("click", function()
                {
                    child_product_color = element.name;
                    idproduct = this.getAttribute("product_id");
                    updateCanvasProperty();   
                    $("#productSectionModal").modal("hide");
                    document.getElementById("current_product_colorModal").innerHTML = " : " + element.name;
                });
                imgI.addEventListener("mouseover", function()
                {
                    ShowDescription(element.product_id); 
                });
                document.getElementById("child_product_color_div6Modal").appendChild(imgIModal);
    }
    else
    {
            iDiv.addEventListener("click", function()
            {
                child_product_color = element.name;
                idproduct = this.getAttribute("product_id");
                updateCanvasProperty();   
                $("#productSectionModal").modal("hide");
                document.getElementById("current_product_color").innerHTML = " : " + element.name;
                selectshirtcolor(this);
            });
            iDiv.addEventListener("mouseover", function()
            {
                document.getElementById("current_selected_product_color").innerHTML = element.name;
                ShowDescription(element.product_id); 
            });
            iDiv.addEventListener("mouseout", function()
            {
                document.getElementById("current_selected_product_color").innerHTML = "";
            });
            document.getElementById("child_product_color_div6").appendChild(iDiv);
            iDivModal.addEventListener("click", function()
            {
                child_product_color = element.name;
                idproduct = this.getAttribute("product_id");
                updateCanvasProperty();   
                $("#productSectionModal").modal("hide");
                document.getElementById("current_product_colorModal").innerHTML = " : " + element.name;
                selectshirtcolor(this);
            });
            iDivModal.addEventListener("mouseover", function()
            {
                document.getElementById("current_selected_product_colorModal").innerHTML = element.name;
                    ShowDescription(element.product_id); 
            });
            iDivModal.addEventListener("mouseout", function()
            {
                document.getElementById("current_selected_product_colorModal").innerHTML = "";
            });
            document.getElementById("child_product_color_div6Modal").appendChild(iDivModal);
    }    
    });

    var listcircles = document.getElementsByClassName('block');
    for (var i = 0; i < listcircles.length; i++)
    {
        listcircles[i].classList.remove("animate");
        listcircles[i].style.border = "1px solid #eee";
    }
    //var currentcolor = child_product_color.replace("/", "_");
    currentcolor = currentcolor.replace(" ", "_");
    if (isMobile())
    {
        if( document.getElementById("child_color_Modal_" + currentcolor) != undefined)
        {
            document.getElementById("child_color_Modal_" + currentcolor).classList.add("animate");
            document.getElementById("child_color_Modal_" + currentcolor).style.border = " 2px solid #31B0D5";
        }
        else if(document.getElementById("child_color_6_Modal_" + currentcolor) != undefined)
        {
            
            document.getElementById("child_color_Modal_6_" + currentcolor).classList.add("animate");
            document.getElementById("child_color_Modal_6_" + currentcolor).style.border = " 2px solid #31B0D5";
        }
        
    } 
    else
    {
        if( document.getElementById("child_color_" + currentcolor) != undefined)
        {
            document.getElementById("child_color_" + currentcolor).classList.add("animate");
            document.getElementById("child_color_" + currentcolor).style.border = " 2px solid #31B0D5";
        }
        else if( document.getElementById("child_color_6_" + currentcolor) != undefined)
        {
            document.getElementById("child_color_6_" + currentcolor).classList.add("animate");
            document.getElementById("child_color_6_" + currentcolor).style.border = " 2px solid #31B0D5";
        }
    }

}

function selectshirtcolor(element)
{   
    var listcircles = document.getElementsByClassName("block");
    for (var i = 0; i < listcircles.length; i++)
    {
        if (listcircles[i].id.indexOf('artcolor') == -1) 
        {
            listcircles[i].classList.remove("animate");
            listcircles[i].style.border = "1px solid #eee";
        }
    }
    element.classList.add("animate");
    element.style.border = "2px solid #31B0D5";

    
}

function setsessionInfo()
{
    document.getElementById('getPriceBtn').innerHTML = "Get Price";
    if (user == null || includeRole(user.roles,"Customer"))
    {
        document.getElementById('saveStoreLI').style.display = "none";
        document.getElementById('personalizeLI').style.display = "block";
        document.getElementById('saveTemplateLI').style.display = "none";
        document.getElementById('your_design').style.display = "block";
        document.getElementById('saveSectionLI').style.display = "inline";
        document.getElementById('getPriceBtn').style.display = "inline";
        document.getElementById('totalPriceLabel').style.display = "inline";
        document.getElementById('totalPriceh4').style.display = "inline";

        if(editdesign != null)
        {
            document.getElementById('getPriceBtn').innerHTML = "Update Design";
            document.getElementById('share_div').style.display = "block";
        }     
    }
    else if (includeRole(user.roles,"Store Designer") )
    {
        document.getElementById('personalizeLI').style.display = "none";
        document.getElementById('saveStoreLI').style.display = "block";
        document.getElementById('saveTemplateLI').style.display = "none";
        document.getElementById('your_design').style.display = "none";
        document.getElementById('saveSectionLI').style.display = "none";
        document.getElementById('getPriceBtn').style.display = "none";
        document.getElementById('totalPriceLabel').style.display = "none";
        document.getElementById('totalPriceh4').style.display = "none";
        document.getElementById('share_div').style.display = "none";
        if(edit != null)
        {
            document.getElementById('getPriceBtn').innerHTML = "Update Design";
            document.getElementById('share_div').style.display = "block";
        } 
    }
    else if (includeRole(user.roles,"Admin")) 
    {
        document.getElementById('saveSectionLI').style.display = "none";
        document.getElementById('getPriceBtn').style.display = "none";
        document.getElementById('share_div').style.display = "none";
        document.getElementById('saveTemplateLI').style.display = "block";
        document.getElementById('saveStoreLI').style.display = "none";
    } 
    else
    {
        document.getElementById('personalizeLI').style.display = "none";
        document.getElementById('saveTemplateLI').style.display = "block";
        document.getElementById('saveStoreLI').style.display = "none";
        document.getElementById('your_design').style.display = "none";
        document.getElementById('saveSectionLI').style.display = "none";
        document.getElementById('getPriceBtn').style.display = "none";
        document.getElementById('totalPriceLabel').style.display = "none";
        document.getElementById('totalPriceh4').style.display = "none";
    }
    //var today = new Date();
    //$("#freeshipping").html(dateformat(getDeliveryDateObj(today, 9)));
    //var today = new Date();
    //$("#rushdelivery").html(dateformat(getDeliveryDateObj(today, 5)));
    

    loadProductAndDesign();
    if(Order == null)
    {
        Order = new Orders("");
        Order._Customer = user; 
        var design = new Design();
        if (editdesign != null)
        {
            design._design_name = editdesign;
        }
        if (edit != null)
        {
            design._design_name = edit;
        }
        var product_design = new Product_Design();
        product_design._status = "created";
        product_design._design = design;
        Order._Product_design_list.push(product_design);
        position = Order._Product_design_list.length - 1;
        if (edit == null)
        {
            Order._Product_design_list[position]._Product = product;
            guidelines = Order._Product_design_list[position]._Product.guidelines;
            productsizelist = Order._Product_design_list[position]._Product.Sizes;
        }
        $(".loading").fadeOut("slow");
        $(".loading-text").fadeOut("slow");
    }
    saveAllCanvasInitial();
}

function saveAllCanvasInitial()
{
    //front.deactivateAll();
    //front.renderAll();
    //right.deactivateAll();
    //right.renderAll();
    //back.deactivateAll();
    //back.renderAll();
    //left.deactivateAll();
    //left.renderAll();
    //html2canvas($("#frontCanvasShirt"),
    //{
        //onrendered: function(frontCanvas)
        //{
            var srcimgfront = frontCanvas.toDataURL("image/png");
            document.getElementById('frontSavePreview').src = srcimgfront;
            document.getElementById('frontPreviewSave').src = srcimgfront;
            document.getElementById('sharePreviewFront').src = srcimgfront;
            var srcimgright = rightCanvas.toDataURL("image/png");
            document.getElementById('rightSavePreview').src = srcimgright;
            document.getElementById('rightPreviewSave').src = srcimgright;
            document.getElementById('sharePreviewRight').src = srcimgright;
            var srcimgback = backCanvas.toDataURL("image/png");
            document.getElementById('backSavePreview').src = srcimgback;
            document.getElementById('backPreviewSave').src = srcimgback;
            document.getElementById('sharePreviewBack').src = srcimgback;
            var srcimgleft = leftCanvas.toDataURL("image/png");
            document.getElementById('leftSavePreview').src = srcimgleft;
            document.getElementById('leftPreviewSave').src = srcimgleft;
            document.getElementById('sharePreviewLeft').src = srcimgleft;
        //},
    //});
}

function loadProductAndDesign()
{
    if (emails != null)
    {
        LoadDesigns(emails);
    } 
    else if (edit != null)
    {       
        LoadDesigns(edit);
    }
    else if (editdesign != null)
    {       
        LoadDesigns(editdesign);
    }
    else if (template != null)
    {
        LoadDesignsTemplate(template);
    }
}

function includeRole(array,element)
{
    for (var i = 0; i < array.length; i++)
    {
        if (array[i].name == element) 
        {
            return true;
        }
    }
    return false;
}


function startcategories()
{
    /*category = null;
    subcategory = null;
    invisibleTables();
    showTable(category, subcategory);
    if (isMobile())
    {
        subcategoriesModal.style.display = "none";
        subsubcategoriesModal.style.display = "none";
        subcategoriesModal.classList.remove("active");
        subsubcategoriesModal.classList.remove("active");
        categoriesModal.classList.add("active");
    } 
    else
    {
        subcategories.style.display = "none";
        subsubcategories.style.display = "none";
        subcategories.classList.remove("active");
        subsubcategories.classList.remove("active");
        categories.classList.add("active");
    }*/
}

function starttemplatecategories()
{
    /*templatecategory = null;
    templatesubcategory = null;
    invisibletemplateTables();
    showtemplateTable(templatecategory, templatesubcategory);
    if (isMobile())
    {
        templatesubcategoriesModal.style.display = "none";
        templatesubsubcategoriesModal.style.display = "none";
        templatesubcategoriesModal.classList.remove("active");
        templatesubsubcategoriesModal.classList.remove("active");
        templatecategoriesModal.classList.add("active");
    } 
    else
    {
        templatesubcategories.style.display = "none";
        templatesubsubcategories.style.display = "none";
        templatesubcategories.classList.remove("active");
        templatesubsubcategories.classList.remove("active");
        templatecategories.classList.add("active");
    }*/
}

function setCanvas()
{

}

function deselectAllCanvases()
{

}

function activateMenu(element)
{

}

function CloseModal(element)
{
    $('#' + element).modal('hide');
}

function ShowModal(element)
{
    $('#' + element).modal({
        backdrop: 'static',
        keyboard: false
    });
}

function isMobile()
{
    if (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i))
        return true;
    else
        return false;
}

//jQuery(document).ready(function(){
    $(window).on("load",(function(e){
    
    /* $.get('sessioninfo/session',function(data){
        console.log(data)
    });*/
    //e.preventDefault();
    //$.ajaxSetup({
    //    headers: {
    //        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    //    }
    //});
    //jQuery.ajax({
    //    url: "sessioninfo/session",
    //    method: 'post',
    //    data: {
    //        value: 'session',
    //    },
    //    beforeSend: function() {
    //        //console.log("here");
    //    },
    //    success: function(result){
    //        console.log(result);
    //    }});
    }));
// });

$('#changeproduct').on('click', function(e) 
{
    /*if( viewporttype == "xs")
    {

    }
    else if(viewporttype == "sm")
    {

    }
    else if(viewporttype == "md")
    {
        
    }
    else
    {
        
    }*/
    //var data = '';
   // var x = document.getElementById("accordion");
    //x.innerHTML = data;
    document.getElementById('listproduct').style.display = 'block';
    document.getElementById('singleproduct').style.display = 'none';
    $('#productModal').modal({backdrop: 'static',keyboard: false});
    /*$.ajax({
        cache: false,
        type: "POST",
        url: "http://vividcustoms.test/generalInfo.php",
        data: { clave: "ProductList", table: 'product', step: 4, },
        success: function(data) 
        {
            var x = document.getElementById("accordion");
            x.innerHTML = data;
            $('#productModal').modal({backdrop: 'static',keyboard: false});
        },
        error: function(error) 
        {
            console.log("error in event changeproduct(click)");
            console.log(error);
        }
    });*/

});