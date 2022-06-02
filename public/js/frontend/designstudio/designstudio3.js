var price = {

    product_price: 1,

    num_shirts: 1,

    f_colors: 1,

    f_price: 1,

    r_colors: 1,

    r_price: 1,

    b_colors: 1,

    b_price: 1,

    l_colors: 1,

    l_price: 1,

    brand: "",

    style_number: "",

    total: 1

};



/************************************************************************************

GLOBAL VARIABLES 

*************************************************************************************/

var specialcharapters = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;

var Orientation = "";

var windowwidth = "";

var windowheight = "";

var devicePixelRatio = "";

var idproduct;

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

var position = 0;

var overridemode = false;

var ListColors = [];

var Order = new Orders("");

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

var qs = [];
/*
var qs = (function(a) {
//console.log(a);
    if (a == "")

        return {};

    var b = {};

    for (var i = 0; i < a.length; ++i) {

        var p = a[i].split('=', 2);

        if (p.length == 1)

            b[p[0]] = "";

        else

            b[p[0]] = decodeURIComponent(p[1].replace(/\+/g, " "));

    }

    return b;

})(window.location.search.substr(1).split('&'));

*/

//console.log(top.location.href.match(/([^\/]+)$/));

var pathArray = window.location.pathname.split('/');

if (pathArray[1] == 'studio' || pathArray[1] == 'designstudio')
{
    switch (pathArray[2]) 
    {
        case "product":
                qs["idproduct"] = pathArray[3];  
                idproduct = pathArray[3];
                 LoadInitialProduct();
            break;
        case "editdesign":
                qs["editdesign"] = pathArray[3];
            break;
        case "edit":
                qs["editdesign"] = pathArray[3];
            break;
        case "email":
                 qs["idproduct"] = pathArray[3];  
                qs["email"] = pathArray[4];
            break;
        case "template":
                qs["idproduct"] = pathArray[3];  
                qs["template"] = pathArray[4];
            break;
        default:
            idproduct = 593;
            LoadInitialProduct();
            break;
    }
}
else
{
    idproduct = 593;
    LoadInitialProduct();
}

window.onload = function() 
{
    windowheight = Math.min(screen.availHeight, window.innerHeight);

    windowwidth = Math.min(screen.availWidth, window.innerWidth);

    windowheight = screen.availHeight;

    windowwidth = screen.availWidth;

    windowheight = window.innerHeight;

    windowwidth = window.innerWidth;

    if (windowheight > windowwidth) {

        Orientation = "PORTRAIT";

    } else {

        Orientation = "LANDSCAPE";

    }

    if (windowwidth < 768) {

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

    } else if (windowwidth >= 768 && windowwidth <= 992) {

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

    } else if (windowwidth > 992 && windowwidth <= 1200) {

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

    } else {

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

    if (viewporttype == "xs" || viewporttype == "sm" || viewporttype == "md") {

        scale = ((window.innerHeight - (100)) / 810).toFixed(2);

        document.getElementById('myCarousel').setAttribute('style', " display:block; -moz-transform: scale(" + scale + ") translate(-50%); -ms-transform:  scale(" + scale + ") translate(-50%);  -o-transform:  scale(" + scale + ") translate(-50%); transform: scale(" + scale + ") translate(-50%)");

        document.getElementById('widthModal').setAttribute('style', " display:block; -moz-transform: scale(" + scale + ") ; -ms-transform:  scale(" + scale + ");  -o-transform:  scale(" + scale + "); transform: scale(" + scale + ");");

        document.getElementById('heightModal').setAttribute('style', " display:block; -moz-transform: scale(" + scale + ") ; -ms-transform:  scale(" + scale + ");  -o-transform:  scale(" + scale + "); transform: scale(" + scale + ");");

        if (windowheight > windowwidth) {

            CloseModal("disableview");

        } 
        else 
        {
        	if(isMobile())
        	{
        		showColorModal("disableview");	
        	}
        	else
        	{
        		CloseModal("disableview");
        	}
        }

    } 
    else 
    {

        CloseModal("disableview");

    }

    if (isMobile()) {

       /* device = "mobile";

        document.getElementById("footer_menu").style.display = "block";

        document.getElementById("footer_menu_text").style.display = "none";

        document.getElementById("footer_menu_art").style.display = "none";

        document.getElementById('work_area').style.display = "none";

         setsessionInfo(true);*/

    }

    else

    {

     // startcategories();  
      /*setsessionInfo(true);

	    startcategories();

	    starttemplatecategories();
*/
    }

   



    $('body').on('contextmenu', '#myCarousel', function(e) {

        return false;

    });



    /*$(document).ready(function()



    {



    $('img').bind('contextmenu', function(e){



        return false;



    }); 



    });*/



};





/********************************************************************************************************



FUNCTIONS



*********************************************************************************************************/



//testing to see if the user is using a mobile device. If the user is using a mobile device this function will return true.



function isMobile()



{



    if (navigator.userAgent.match(/Android/i)



        ||

        navigator.userAgent.match(/webOS/i)



        ||

        navigator.userAgent.match(/iPhone/i)



        ||

        navigator.userAgent.match(/iPad/i)



        ||

        navigator.userAgent.match(/iPod/i)



        ||

        navigator.userAgent.match(/BlackBerry/i)



        ||

        navigator.userAgent.match(/Windows Phone/i)



    )



    {



        return true;



    } else



    {



        return false;



    }



}







function setsessionInfo(type)



{

    
    
    $.ajax({
        type:'GET',
        dataType: 'json',
        url: 'api/sessionInfo',
        success:function(data)
        {
            customer = JSON.parse(data);
            console.log(customer);
            //document.getElementById("image-captcha").src = '';
            //document.getElementById("image-captcha").src = '/img/captcha/' + data.image;
        }
    });  
    


    //make ajax funtcion for server.



    $.ajax({



        cache: false,



        type: "POST",



        url: "api/sessionInfo.php",



        data: {



            value: "session",



        },



        beforeSend: function() {







        },



        success: function(data)



        {







            customer = JSON.parse(data);






            


            if (customer == null || customer.Role == "Customer")



            {

                document.getElementById('saveStoreLI').style.display = "none";


                ////document.getElementById('personalizeLI').style.display = "block";


                document.getElementById('saveTemplateLI').style.display = "none";



                document.getElementById('your_design').style.display = "block";



                document.getElementById('saveSectionLI').style.display = "inline";



                document.getElementById('getPriceBtn').style.display = "inline";



                document.getElementById('totalPriceLabel').style.display = "inline";



                document.getElementById('totalPriceh4').style.display = "inline";



            }

            else if (customer.Role == "Store Designer")

            {

                

                ////document.getElementById('personalizeLI').style.display = "none";


                document.getElementById('saveStoreLI').style.display = "block";


                document.getElementById('saveTemplateLI').style.display = "none";



                document.getElementById('your_design').style.display = "none";



                document.getElementById('saveSectionLI').style.display = "none";



                document.getElementById('getPriceBtn').style.display = "none";



                document.getElementById('totalPriceLabel').style.display = "none";



                document.getElementById('totalPriceh4').style.display = "none";

            }

            else



            {



                ////document.getElementById('personalizeLI').style.display = "none";

                document.getElementById('saveTemplateLI').style.display = "block";

                
                document.getElementById('saveStoreLI').style.display = "none";


                document.getElementById('your_design').style.display = "none";



                document.getElementById('saveSectionLI').style.display = "none";



                document.getElementById('getPriceBtn').style.display = "none";



                document.getElementById('totalPriceLabel').style.display = "none";



                document.getElementById('totalPriceh4').style.display = "none";

            }





            var today = new Date();



            $("#freeshipping").html(dateformat(getDeliveryDateObj(today, 9)));



            var today = new Date();



            $("#rushdelivery").html(dateformat(getDeliveryDateObj(today, 5)));



            initPage();









        },



        error: function(error)



        {



            console.log("error in method setsessionInfo");



            console.log(error);



        }







    });



}







function initPage()



{



    //load product



    loadProductAndDesign();







    loadColors();







    //if (customer == null || customer != '' || customer.Role == "Customer")



    //{ 



    //init order object



    initOrder();







    //making default image for save, share, and "get price" preview



    saveAllCanvasInitial();



    //}



}









function loadProductAndDesign()



{


       document.getElementById('getPriceBtn').innerHTML = "Get Price";

        var device = null;



        var id_product = null;







        if (qs["email"] != undefined)



        {



            emails = qs["email"];



        }



        if (qs["editdesign"] != undefined)



        {



            editdesign = qs["editdesign"];





            if (customer != null)



            {



                if (customer.Role != "Customer")



                {



                    if (customer.Role == "Admin") 
                    {
                        document.getElementById('saveSectionLI').style.display = "none";



                        document.getElementById('getPriceBtn').style.display = "none";



                        document.getElementById('share_div').style.display = "none";



                        document.getElementById('saveTemplateLI').style.display = "block";

                        document.getElementById('saveStoreLI').style.display = "none";

                    } 
                    else  if (customer.Role != "Store Designer") 
                    {

                        document.getElementById('saveSectionLI').style.display = "none";



                        document.getElementById('getPriceBtn').style.display = "none";



                        document.getElementById('share_div').style.display = "none";



                        document.getElementById('saveTemplateLI').style.display = "none";

                        document.getElementById('saveStoreLI').style.display = "block";

                    }
                    else 
                    {

                        document.getElementById('saveSectionLI').style.display = "inline";



                        document.getElementById('getPriceBtn').style.display = "none";



                        document.getElementById('share_div').style.display = "none";



                        document.getElementById('saveTemplateLI').style.display = "none";

                        document.getElementById('saveStoreLI').style.display = "none";

                    }



                } else



                {



                    document.getElementById('your_design').style.display = "block";



                    document.getElementById('getPriceBtn').style.display = "inline";


                    document.getElementById('getPriceBtn').innerHTML = "Update Design";



                    document.getElementById('share_div').style.display = "block";



                }

            }



        }



        if (qs["edit"] != undefined)



        {



            edit = qs["edit"];







            if (customer != null)



            {



                if (customer.Role != "Customer")



                {



                    if (customer.Role != "Admin") {

                        document.getElementById('saveSectionLI').style.display = "none";



                        document.getElementById('getPriceBtn').style.display = "none";



                        document.getElementById('share_div').style.display = "none";



                        document.getElementById('saveTemplateLI').style.display = "block";

                        document.getElementById('saveStoreLI').style.display = "none";

                    }
                    else  if (customer.Role != "Store Designer") 
                    {

                        document.getElementById('saveSectionLI').style.display = "none";



                        document.getElementById('getPriceBtn').style.display = "none";



                        document.getElementById('share_div').style.display = "none";



                        document.getElementById('saveTemplateLI').style.display = "none";

                        document.getElementById('saveStoreLI').style.display = "block";

                    }
                     else {





                        document.getElementById('saveSectionLI').style.display = "innline";



                        document.getElementById('getPriceBtn').style.display = "none";



                        document.getElementById('share_div').style.display = "none";



                        document.getElementById('saveTemplateLI').style.display = "none";

                        document.getElementById('saveStoreLI').style.display = "none";

                    }



                } else



                {



                    document.getElementById('your_design').style.display = "block";



                    document.getElementById('getPriceBtn').style.display = "inline";



                    document.getElementById('getPriceBtn').innerHTML = "Update Design";



                    document.getElementById('share_div').style.display = "block";



                }



            }



        }



        if (qs["template"] != undefined)



        {



            template = qs["template"];



        }



        if (qs["device"] != undefined)



        {



            device = qs["device"];



        }



        if (qs["idproduct"] != undefined)



        {



            id_product = qs["idproduct"];



        }









        if (emails != null)



        {



            idproduct = id_product;



            //LoadInitialProduct();



            LoadDesigns(emails);



        } else if (edit != null)



        {



            //idproduct = id_product;



            //LoadInitialProduct();



            LoadDesigns(edit);



        } else if (editdesign != null)



        {



            //idproduct = id_product;



            //LoadInitialProduct();



            LoadDesigns(editdesign);



        } else if (template != null)



        {



            idproduct = id_product;







            LoadInitialProduct();







            LoadDesignsTemplate(template);



        } else if (id_product != null)



        {







            idproduct = id_product;



            LoadInitialProduct();



        }







   /* } else



    {



        idproduct = 593;



        LoadInitialProduct();



    }*/



}







function LoadDesigns(value)



{



    //shows previews of saved design when user wants to see a saved design



    if (value == null)



    {



        var desing = document.getElementById("mydesings").value;



    } else



    {



        var desing = value;



    }



    var guest = desing.split("_", 1);



    //var file = 'designs/' + guest+ '/' + desing + '/' + desing + '.json?v='+Math.floor((Math.random() * 10000) + 1);



    var file = 'designs/' + guest + '/' + desing + '/' + desing + '.json';



    //searching for json file of design and applying it to all sides (canvases)



    $.ajax({



        type: "GET",



        dataType: "JSON",



        url: "https://www.vividcustoms.com/"+file,



        beforeSend: function() {







        },



        success: function(text)



        {



            idproduct = text[0].objects[text[0].objects.length - 1].idproduct;



            personalizelist = text[0].objects[text[0].objects.length - 1].personalize;



            LoadInitialProduct();



            designloaded = true;



            var json = text[0];



            /*for (var i = 0; i < json.objects.length; i++)



            {



                if (json.objects[i].type == "image")



                {



                    json.objects[i].src = json.objects[i].src.replace("https://www.vividcustoms.com/", "");



                }



            }*/







            front.loadFromDatalessJSON(json, front.renderAll.bind(front), function(o, object)



                {



                    if (o.type === 'image')



                    {



                        //object.src= "";



                        object.type = "image";



                        if (o.filters != undefined || object.filters.length > 0)



                        {



                            object.applyFilters(function()



                                {



                                    front.renderAll();



                                    //canvasCounter =1;



                                    //savetmpdesign();                   



                                });







                        } else



                        {



                            front.renderAll();



                            //canvasCounter =1;



                            //savetmpdesign();                      



                        }



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



                                icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            bl: {



                                icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            br: {



                                icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            ml: {



                                icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            mr: {



                                icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            mb: {



                                icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            mt: {



                                icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            tl: {

                                icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                            },



                        }, function()



                        {



                            front.renderAll();



                        });



                });



            json = text[1];



            /*for (var i = 0; i < json.objects.length; i++)



            {



                if (json.objects[i].type == "image")



                {



                    json.objects[i].src = json.objects[i].src.replace("https://www.vividcustoms.com/", "");



                }



            }*/



            right.loadFromDatalessJSON(json, right.renderAll.bind(right), function(o, object) {



                if (o.type === 'image' && (o.filters != undefined || object.filters.length > 0))



                {



                    object.applyFilters(function()



                        {



                            right.renderAll();



                            //canvasCounter =2;



                            //savetmpdesign();     



                        });



                } else



                {



                    right.renderAll();



                    //canvasCounter =2;



                    //savetmpdesign();         



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



                            icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        bl: {



                            icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        br: {



                            icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        ml: {



                            icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mr: {



                            icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mb: {



                            icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mt: {



                            icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        tl: {

                            icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                        },



                    }, function()



                    {



                        right.renderAll();



                    });



            });



            json = text[2];



           /* for (var i = 0; i < json.objects.length; i++)



            {



                if (json.objects[i].type == "image")



                {



                    json.objects[i].src = json.objects[i].src.replace("https://www.vividcustoms.com/", "");



                }



            }*/



            back.loadFromDatalessJSON(json, back.renderAll.bind(back), function(o, object) {



                if (o.type === 'image' && (o.filters != undefined || object.filters.length > 0))



                {



                    object.applyFilters(function()



                        {



                            back.renderAll();



                            // canvasCounter =3;



                            //savetmpdesign();



                        });



                } else



                {



                    back.renderAll();



                    //canvasCounter =3;



                    //savetmpdesign();



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



                            icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        bl: {



                            icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        br: {



                            icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        ml: {



                            icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mr: {



                            icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mb: {



                            icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mt: {



                            icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        tl: {

                            icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                        },



                    }, function()



                    {



                        back.renderAll();



                    });







            });



            json = text[3];



            /*for (var i = 0; i < json.objects.length; i++)



            {



                if (json.objects[i].type == "image")



                {



                    json.objects[i].src = json.objects[i].src.replace("https://www.vividcustoms.com/", "");



                }



            }*/



            left.loadFromDatalessJSON(json, left.renderAll.bind(left), function(o, object) {



                if (o.type === 'image' && (o.filters != undefined || object.filters.length > 0))



                {



                    object.applyFilters(function()



                        {



                            left.renderAll();



                            //canvasCounter =4;



                            // savetmpdesign(); 



                        });



                } else



                {



                    left.renderAll();



                    //canvasCounter =4;



                    //savetmpdesign(); 



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



                            icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        bl: {



                            icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        br: {



                            icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        ml: {



                            icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mr: {



                            icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mb: {



                            icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mt: {



                            icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        tl: {

                            icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                        },



                    }, function()



                    {



                        left.renderAll();



                    });







            });



            //canvasCounter =1;



        },



        error: function(error)



        {



            console.log("error in method LoadDesigns('" + value + "'):");



            console.log(error);



        }



    });



}







function LoadDesignsTemplate(design)



{



    var file = design.replace(/%7c|%7C/g,"/");



    $.ajax({



        type: "GET",



        dataType: "JSON",



        url: "https://www.vividcustoms.com/" + file + '?v=' + Math.floor((Math.random() * 10000) + 1),



        beforeSend: function() {







        },



        success: function(text) {



            designloaded = true;



            var json = text[0];







            front.loadFromDatalessJSON(json, front.renderAll.bind(front), function(o, object)



                {



                    if (o.type === 'image' && (o.filters != undefined || object.filters.length > 0))



                    {



                        object.applyFilters(function()



                            {



                                front.renderAll();



                                //canvasCounter =1;



                                savetmpdesign();



                            });



                    } else



                    {



                        front.renderAll();



                        //canvasCounter =1;



                        savetmpdesign();



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



                                icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            bl: {



                                icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            br: {



                                icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            ml: {



                                icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            mr: {



                                icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            mb: {



                                icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            mt: {



                                icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            tl: {

                                icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                            },



                        }, function()



                        {



                            front.renderAll();



                        });



                });



            right.loadFromDatalessJSON(text[1], right.renderAll.bind(right), function(o, object) {



                if (o.type === 'image' && (o.filters != undefined || object.filters.length > 0))



                {



                    object.applyFilters(function()



                        {



                            right.renderAll();



                            //canvasCounter =2;



                            savetmpdesign();



                        });



                } else



                {



                    right.renderAll();



                    // canvasCounter =2;



                    savetmpdesign();



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



                            icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        bl: {



                            icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        br: {



                            icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        ml: {



                            icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mr: {



                            icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mb: {



                            icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mt: {



                            icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        tl: {

                            icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                        },



                    }, function()



                    {



                        right.renderAll();



                    });



            });



            back.loadFromDatalessJSON(text[2], back.renderAll.bind(back), function(o, object) {



                if (o.type === 'image' && (o.filters != undefined || object.filters.length > 0))



                {



                    object.applyFilters(function()



                        {



                            back.renderAll();



                            //canvasCounter =3;



                            savetmpdesign();



                        });



                } else



                {



                    back.renderAll();



                    //canvasCounter =3;



                    savetmpdesign();



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



                            icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        bl: {



                            icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        br: {



                            icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        ml: {



                            icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mr: {



                            icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mb: {



                            icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mt: {



                            icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        tl: {

                            icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                        },



                    }, function()



                    {



                        back.renderAll();



                    });







            });



            left.loadFromDatalessJSON(text[3], left.renderAll.bind(left), function(o, object) {



                if (o.type === 'image' && (o.filters != undefined || object.filters.length > 0))



                {



                    object.applyFilters(function()



                        {



                            left.renderAll();



                            //canvasCounter =4;



                            savetmpdesign();



                        });



                } else



                {



                    left.renderAll();



                    //canvasCounter =4;



                    savetmpdesign();



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



                            icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        bl: {



                            icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        br: {



                            icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        ml: {



                            icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mr: {



                            icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mb: {



                            icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mt: {



                            icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        tl: {

                            icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                        },



                    }, function()



                    {



                        left.renderAll();



                    });







            });



            //canvasCounter =1;



            //front.renderAll();







        },



        error: function()



        {



            console.log("error in method LoadDesignsTemplate('" + design + "'):");



            console.log(error);



        }



    });



}







function LoadInitialProduct()



{







    $.ajax({



        cache: false,

        type: "POST",



        url: "https://www.vividcustoms.com/productInfo.php",



        data: {



            value: "StyleNumber-Parent-Colors",



            idproduct: idproduct



        },



        beforeSend: function() {







        },



        success: function(data)



        {







            var info = data.split("@");



            StyleNumber = info[0];



            parent_product_name = info[1];



            child_product_color = info[2];



            updateCanvasProperty();



            ShowDescription();



            ShowChildsProducts();



        },



        error: function(error)



        {



            console.log("error in method loadProductAndDesign:");



            console.log(error);



        }



    });



}







function updateCanvasProperty()



{



    productchanged = true;



    $.ajax({



        cache: false,

        type: "POST",



        url: "https://www.vividcustoms.com/generalInfo.php",



        data: {



            table: "product&canvasinfo",



            operation: "parent",



            idproduct: idproduct,



            StyleNumber: StyleNumber,



            parent_product_name: parent_product_name,



            child_product_color: child_product_color



        },



        beforeSend: function() {







        },



        success: function(data)



        {







            eval(data);

            if(Order._Product_design_list[0] != undefined)
            {
                addproduct("update");    
            }
            /*

            if (customer == null || customer != '' || customer.Role == "Customer")
            {
                if(Order._Product_design_list[position] == 'undefined')
                {
                    addproduct("update");    
                }
            }*/
        },



        error: function(error)



        {



            console.log("error in method updateCanvasProperty():");



            console.log(error);



        }



    });



    unselectall('updateCanvasProperty');



}









function unselectall(value)



{

    switch (canvasCounter) {



        case 1:



            front.discardActiveObject();



            savetmpdesign();





            front.renderAll();



            break;



        case 2:



            right.discardActiveObject();



            savetmpdesign();



            right.renderAll();



            break;



        case 3:



            back.discardActiveObject();



            savetmpdesign();



            back.renderAll();



            break;



        default:



            left.discardActiveObject();



            savetmpdesign();



            left.renderAll();



            break;



    }

}









function ShowDescription()



{



    $.ajax({



        cache: false,

        type: "POST",



        url: "https://www.vividcustoms.com/generalInfo.php",



        data: {



            table: "product&canvasinfo",



            operation: "childsDescription",



            idproduct: idproduct,



            StyleNumber: StyleNumber,



            parent_product_name: parent_product_name,



            child_product_color: child_product_color



        },



        beforeSend: function() {







        },



        success: function(data)



        {



            eval(data);



        },



        error: function(error)



        {



            console.log("error in method ShowDescription():");



            console.log(error);



        }



    });



}







function ShowChildsProducts()



{



    $.ajax({



        cache: false,

        type: "POST",



        url: "https://www.vividcustoms.com/generalInfo.php",



        data: {



            idproduct: idproduct,



            table: "product&canvasinfo",



            operation: "childs",



            StyleNumber: StyleNumber,



            parent_product_name: parent_product_name,



            child_product_color: child_product_color



        },



        beforeSend: function() {







        },



        success: function(data)



        {



            eval(data);





            var listcircles = document.getElementsByClassName('block');



            for (var i = 0; i < listcircles.length; i++)



            {



                listcircles[i].classList.remove("animate");



                listcircles[i].style.border = "1px solid #eee";



            }



            var currentcolor = child_product_color.replace("/", "_");

            currentcolor = currentcolor.replace(" ", "_");



            if (isMobile())



            {



                document.getElementById("child_color_Modal_" + currentcolor).classList.add("animate");



                document.getElementById("child_color_Modal_" + currentcolor).style.border = " 2px solid #31B0D5";



            } else



            {



                document.getElementById("child_color_" + currentcolor).classList.add("animate");



                document.getElementById("child_color_" + currentcolor).style.border = " 2px solid #31B0D5";



            }



            ShowDescription(idproduct);



        },



        error: function(error)



        {



            console.log("error in method ShowChildsProducts():");



            console.log(error);



        }



    });



}









function initOrder()



{







    $.ajax({







        cache: false,

        type: "POST",







        url: "https://www.vividcustoms.com/sessionInfo.php",







        data: {



            value: "Order",







            operation: "select",







        },







        success: function(data)



        {







            if (data == "")



            {



                //initialOrderNumber();







                if (customer == null /*|| customer != '' || customer.Role == "Customer"*/ )



                {



                    //if (customer == null)



                    //{



                    customer = new Customer({

                        Firstname: "",

                        Id: null,

                        Lastname: "",

                        Password: "",

                        Role: "Customer",

                        Username: "",

                        email: "",

                        name: "",

                        newsletter: "",

                        phone: "",

                        special_offers: "",

                        status: "1",

                        birthday: null

                    });



                    //}



                    //customer = new Customer({ email:"",Id:null, Username:""});







                }



                Order._Customer = customer;



                Order._Customer.shippingType = "";



                Order._Customer.shippingStreet = "";



                Order._Customer.shippingCity = "";



                Order._Customer.shippingState = "";



                Order._Customer.shippingZip = "";



                Order._Customer.billingStreet = "";



                Order._Customer.billingCity = "";



                Order._Customer.billingState = "";



                Order._Customer.billingZip = "";



                Order._Customer.cardtype = "";



                Order._Customer.cardnumber = "";



                Order._Customer.company = ""; 



                createProductDesign();









            } 



            else



            {



                Ordertmp = JSON.parse(data);







                loadOrder(Ordertmp);







            }



        },







        error: function(error)







        {



            console.log("error in method initOrder():");



            console.log(error);







        }







    });



}







function loadColors()



{







    $.ajax({







        cache: false,

        type: "POST",







        url: "https://www.vividcustoms.com/generalInfo.php",







        data: {



            table: "color",



            operation: "select",



        },







        success: function(data)



        {



            ListColors = JSON.parse(data);



        },







        error: function(error)







        {



            console.log("error in method loadColors():");



            console.log(error);







        }







    });



}









function loadOrder(value)



{







    //Order._Order_Number = value._Order_Number;



    Order._subtotal = value._subtotal;



    Order._tax = value._tax;



    Order._total = value._total;



    Order._status = value._status;



    Order._date = value._date;



    Order._Customer = value._Customer;





    value._Product_design_list.forEach(function(element)



        {



            var product_designtmp = new Product_Design();



            product_designtmp._Id = element._Id;



            product_designtmp._design = element._design;



            if (editdesign != null)



            {



                product_designtmp._design._design_name = editdesign;



            }



            if (edit != null)



            {



                product_designtmp._design._design_name = edit;



            }



            product_designtmp._Product = element._Product;



            product_designtmp._sizeList = element._sizeList;



            product_designtmp._sizepersonalizeList = element._sizepersonalizeList;



            product_designtmp._personalize = element._personalize;



            personalizelist = element._personalize;



            product_designtmp._personalizetype = element._personalizetype;



            product_designtmp._status = element._status;



            product_designtmp._num_shirts = element._num_shirts;



            product_designtmp._price_per_shirt = element._price_per_shirt;



            product_designtmp._total = element._total;



            Order.addProductDesign(product_designtmp);



        });







    if (editdesign != null)



    {



        // design._design_name = editdesign;



        position = Order.searchelement(editdesign);



        loadCart("Cart-Body");



        loadCart('Cart-body-section');



    } else if (edit != null)



    {



        position = Order.searchelement(edit);



    } 

    else



    {

        

        if (Order._Product_design_list[Order._Product_design_list.length - 1]._status != "created")



        {



            createProductDesign();



            position = Order._Product_design_list.length - 1;



        } 

        else



        {



            position = Order._Product_design_list.length - 1;







        }



        loadCart("Cart-Body");



        loadCart('Cart-body-section');



    }



}









function createProductDesign()



{



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







    addproduct();



    $(".loading").fadeOut("slow");



    $(".loading-text").fadeOut("slow");



}







function addproduct()



{







    $.ajax({



        cache: false,

        type: "POST",



        url: "https://www.vividcustoms.com/generalInfo.php",



        data: {



            operation: 'select',



            clave: 'idproduct',



            idproduct: idproduct,



            table: 'product'



        },



        beforeSend: function() {







        },



        success: function(data)



        {



            var jsonData = JSON.parse(data);



           



            if (edit == null)



            {


                Order._Product_design_list[position]._Product = jsonData;







                guidelines = Order._Product_design_list[position]._Product.guidelines;



                productsizelist = Order._Product_design_list[position]._Product.Sizes.split(" ");







            }







        },



        error: function(error)



        {



            console.log("error in method addproduct():");



            console.log(error);



        }



    });



}







function saveAllCanvasInitial()



{



    /* front.deactivateAll();



       front.renderAll();



       right.deactivateAll();



       right.renderAll();



       back.deactivateAll();



       back.renderAll();



       left.deactivateAll();



       left.renderAll();*/







   // html2canvas($("#frontCanvasShirt"),



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







function get_related_products()



{



    var quantity_related_products = Order._Product_design_list[position]._Product._related_products.length;



    var count_related_products = 0;



    if (quantity_related_products > 0)



    {



        while (count_related_products < 4 && count_related_products < quantity_related_products)



        {



            document.getElementById("relatedproduct" + (count_related_products + 1)).style.display = "inline-block";



            document.getElementById("relatedproduct" + (count_related_products + 1)).style.backgroundImage = 'url("https://www.vividcustoms.com/img/Product_Images/' + Order._Product_design_list[position]._Product._related_products[count_related_products].Image + '")';



            document.getElementById("relatedproductname" + (count_related_products + 1)).innerHTML = Order._Product_design_list[position]._Product._related_products[count_related_products].Name;



            document.getElementById("relatedproductdesign" + (count_related_products + 1)).src = document.getElementById('frontSavePreview').src;







            document.getElementById("relatedproductdesign" + (count_related_products + 1)).addEventListener("click", function() {



                var pos = this.id.substr(this.id.length - 1);



                setProduct(Order._Product_design_list[position]._Product._related_products[pos].StyleNumber,



                    Order._Product_design_list[position]._Product._related_products[pos].Parent,



                    Order._Product_design_list[position]._Product._related_products[pos].Colors);







            });



            count_related_products++;



        }



    }



}









function ShowGetPrice()



{



    



    switch (canvasCounter) {



        case 1:



            front.discardActiveObject();



            savetmpdesign();



            //canvas.setActiveObject(canvas.item(canvas.getObjects().length-1));



            front.renderAll();



            break;



        case 2:



            right.discardActiveObject();



            savetmpdesign();



            //canvas.setActiveObject(canvas.item(canvas.getObjects().length-1));



            right.renderAll();



            break;



        case 3:



            back.discardActiveObject();



            savetmpdesign();



            //canvas.setActiveObject(canvas.item(canvas.getObjects().length-1));



            back.renderAll();



            break;



        default:



            left.discardActiveObject();



            savetmpdesign();



            //canvas.setActiveObject(canvas.item(canvas.getObjects().length-1));



            left.renderAll();



            break;



    }







    if (editdesign != null)



    {



        document.getElementById('AddKeepDesign').innerHTML = "Update Cart";



    } else



    {



        document.getElementById('AddKeepDesign').innerHTML = "Add To Cart";



    }



    var num = front.getObjects().length + right.getObjects().length + back.getObjects().length + left.getObjects().length;









    if (Order._Product_design_list.length == 1)



    {







        if (num > 0)



        {



          
        	setColorsInk();

		    if((Order._Product_design_list[position]._design._sideList[0]._ColorList.length + Order._Product_design_list[position]._design._sideList[1]._ColorList.length + Order._Product_design_list[position]._design._sideList[2]._ColorList.length + Order._Product_design_list[position]._design._sideList[3]._ColorList.length) > 0)
		    {


	            getPrice();


	            loadCart('Cart-body-section');



	            $('#productPicker').modal();

			}
		    else
		    {
		    	ShowAlert('getalertnocolors','No design to save and share!','danger','No colors');
		    }

          



        } else



        {



            ShowAlert('getpricealert', 'No design to get price', 'danger', 'Get price');



        }



    } else



    {







        if (Order._Product_design_list[Order._Product_design_list.length - 2]._status != "created")



        {

        	setColorsInk();

		    if((Order._Product_design_list[position]._design._sideList[0]._ColorList.length + Order._Product_design_list[position]._design._sideList[1]._ColorList.length + Order._Product_design_list[position]._design._sideList[2]._ColorList.length + Order._Product_design_list[position]._design._sideList[3]._ColorList.length) > 0)
		    {

	            getPrice();





	            loadCart('Cart-body-section');



	            if (num <= 0)



	            {



	                document.getElementById('AddKeepDesign').style.display = "none";



	                document.getElementById('finalcheckout').style.display = 'block';



	            }



	            $('#productPicker').modal();

            
			}
		    else
		    {
		    	ShowAlert('getalertnocolors','No design to save and share!','danger','No colors');
		    }



         


        } else



        {



            ShowAlert('getpricealert', 'No design to get price', 'danger', 'Get price');



        }



    }









}







function getPrice()



{

    defineSizes();



    setColorsInk();

   
    	if (editdesign != null)

	    {     

	        if (Order._Product_design_list[position]._personalize != null)

	        {

	             for (var i = 0; i < Order._Product_design_list[position]._sizepersonalizeList.length; i++)



	                {



	                    if (Order._Product_design_list[position]._sizepersonalizeList[i]._quantity > 0)



	                    {

	                        document.getElementById(Order._Product_design_list[position]._sizepersonalizeList[i]._size_name).value = (Order._Product_design_list[position]._sizepersonalizeList[i]._quantity);

	                        temp(document.getElementById(Order._Product_design_list[position]._sizepersonalizeList[i]._size_name));

	                    }



	                }



	                document.getElementById("personalizeresumen").innerHTML = "";



	        }

	        else

	        {

	             for (var i = 0; i < Order._Product_design_list[position]._sizeList.length; i++)



	            {



	                if (Order._Product_design_list[position]._sizeList[i]._quantity > 0)



	                {



	                    document.getElementById(Order._Product_design_list[position]._sizeList[i]._size_name).value = Order._Product_design_list[position]._sizeList[i]._quantity;



	                    temp(document.getElementById(Order._Product_design_list[position]._sizeList[i]._size_name));



	                }



	            }



	            document.getElementById("personalizeresumen").innerHTML = "";

	        }



	       



	    } 

	    else



	    {



	        

	           



	            



	            if (Order._Product_design_list[position]._personalize != null)

	            {

	                var personalizestring = "";

	                 document.getElementById("personalizeresumen").innerHTML = personalizestring

	                var personalizestring2 = "";

	                if (Order._Product_design_list[position]._personalize.length > 0)

	                {

	                  

	                    for (var i = 0; i < Order._Product_design_list[position]._sizepersonalizeList.length; i++)



	                    {



	                        if (Order._Product_design_list[position]._sizepersonalizeList[i]._quantity > 0)



	                        {

	                            document.getElementById(Order._Product_design_list[position]._sizepersonalizeList[i]._size_name).value = Order._Product_design_list[position]._sizepersonalizeList[i]._quantity;

	                            temp(document.getElementById(Order._Product_design_list[position]._sizepersonalizeList[i]._size_name));

	                            if (Order._Product_design_list[position]._personalizetype == "text only")

	                            {

	                                personalizestring += (Order._Product_design_list[position]._sizepersonalizeList[i]._size_name + ": Name: (" + Order._Product_design_list[position]._sizepersonalizeList[i]._quantity + ")" );

	                            }

	                            else if (Order._Product_design_list[position]._personalizetype == "number only")

	                            {

	                                personalizestring += (Order._Product_design_list[position]._sizepersonalizeList[i]._size_name + ": Number: (" + Order._Product_design_list[position]._sizepersonalizeList[i]._quantity + ")" );

	                            }

	                            else

	                            {

	                                personalizestring += (Order._Product_design_list[position]._sizepersonalizeList[i]._size_name + ": Name + Number: (" + Order._Product_design_list[position]._sizepersonalizeList[i]._quantity + ")" );

	                            }



	                            personalizestring += "<br>";

	                            

	                        }



	                    }    

	                }



	                //console.log(Order._Product_design_list[position]._sizepersonalizeList);



	                document.getElementById("personalizeresumen").innerHTML = personalizestring

	            }

	            else

	            {

	                for (var i = 0; i < Order._Product_design_list[position]._sizeList.length; i++)

	                {

	                    document.getElementById(Order._Product_design_list[position]._sizeList[i]._size_name).value = "";



	                    Order._Product_design_list[position]._sizeList[i]._quantity = 0;     



	                    document.getElementById('itemPrice').innerHTML = "0.00";



	                    document.getElementById('numOfShirtsLabel').innerHTML = "<b>Quantity:</b> <span style='color: #5cb85c; font-family: Arial;'> 0 item(s)</span>";



	                    document.getElementById('itemTotal').innerHTML = "0.00";



	                    document.getElementById('KeepDesign').style.display = "none";



	                    document.getElementById('designemail').value = "";



	                    document.getElementById('designName').value = "";

	                }



	                document.getElementById("personalizeresumen").innerHTML = "";

	            }



	    }



	    document.getElementById('design_name_area').style.display = "none";



	    document.getElementById('cart_area').style.display = "none";



	    document.getElementById('product_style_area').style.display = "block";



	    document.getElementById('AddKeepDesign').style.display = "inline";



	    document.getElementById('continuedesign').style.display = "inline";



	    document.getElementById('finalcheckout').style.display = "none";
    

}







//method for show and hide the enabled sizes for the current product.



function defineSizes()



{



    $.ajax({



        cache: false,

        type: "POST",



        url: "https://www.vividcustoms.com/generalInfo.php",



        data: {



            operation: 'select',



            clave: 'sizes',



            idproduct: idproduct,



            table: 'product'



        },



        beforeSend: function() {







        },



        success: function(data)



        {

            eval(data);



        },



        error: function(result) {



            console.log("error in method defineSizes():");



            console.log(result);



        }



    });



}



/*function setColorsInk()



{



    var arraycolors = [];



    var arraypersonalizecolors = [];



    



    var objs = front.getObjects();



 



    for (var i = 0; i < objs.length; i++)



    {





        if (objs[i].type === "image")



        {
            
            if (objs[i].id != "" && objs[i].id != null && !Number.isInteger(objs[i].id))  {

                if (objs[i].id.indexOf("Uploaded") != -1)



                {

                    if (objs[i].colorlist != undefined) {

                        if (objs[i].colorlist.length > 8) {

                            arraycolors.push("f");

                            arraycolors.push("u");

                            arraycolors.push("l");

                            arraycolors.push("l");

                            arraycolors.push("c");

                            arraycolors.push("o");

                            arraycolors.push("l");

                            arraycolors.push("o");

                            arraycolors.push("r");

                        } else {

                            for (var j = 0; j < objs[i].colorlist.length; j++) {

                                var color = rgb2hex(objs[i].colorlist[j]);



                                if (!validate_element(color, arraycolors))



                                {



                                    arraycolors.push(color);



                                }

                            }

                        }



                    } else {

                        arraycolors.push("k");

                        arraycolors.push("a");

                        arraycolors.push("t");

                        arraycolors.push("i");

                        arraycolors.push("e");

                    }



                }

            } 

            else if (objs[i]._element.src.includes('Patriotic/Police')) 
            {
                arraycolors.push("#ffffff");
                arraycolors.push("#0d45e4");
            }

            else



            {



                if (objs[i].filters.length > 0)



                {



                    var color = rgb2hex(objs[i].filters[objs[i].filters.length - 1].color);



                    if (!validate_element(color, arraycolors))



                    {



                        arraycolors.push(color);



                    }







                } else if (!validate_element("#000000", arraycolors))



                {



                    arraycolors.push("#000000");



                }



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







                } else if (!validate_element("#000000", arraycolors))



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





                if (objs[i].type === "i-text")



                {



                  

                        if (objs[i].fill != null && objs[i].fill.length > 0)



                        {



                            var color = rgb2hex(objs[i].fill);



                            if (!validate_element_personalize(color, arraypersonalizecolors))



                            {

                                var colorelement = {type: "", color: ""};

                                colorelement.type = "fill"+ objs[i].id;

                                colorelement.color = color;

                                arraypersonalizecolors.push(colorelement);



                            }







                        } 

                        else if (!validate_element_personalize("#000000", arraypersonalizecolors))



                        {



                            var colorelement = {type: "", color: ""};

                            colorelement.type = "fill"+ objs[i].id;

                            colorelement.color = "#000000";

                            arraypersonalizecolors.push(colorelement);

                            //arraypersonalizecolors.push("#000000");



                        }







                        if (objs[i].stroke != null && objs[i].stroke.length > 0)



                        {



                            var color = rgb2hex(objs[i].stroke);



                            if (!validate_element_personalize(color, arraypersonalizecolors))



                            {



                                //arraypersonalizecolors.push(color);

                                var colorelement = {type: "", color: ""};

                                colorelement.type = "stroke"+ objs[i].id;

                                colorelement.color = "#000000";

                                arraypersonalizecolors.push(colorelement);  



                            }







                        }

                    







                } 

        } 

        

        else



        {

            

            objlist = objs[i]._objects; 

            var layers = [];



            for (var j = 0; j < objlist.length; j++)



            {



                if (!validate_layer(objlist[j], layers))



                {



                    layers.push(objlist[j]);                   



                    var color = objlist[j].fill;



                    if (!validate_element(color, arraycolors))



                    {



                        arraycolors.push(color);



                    }

                }

            }

        }

    }



    Order._Product_design_list[position]._design._sideList[0]._ColorList = arraycolors;

    Order._Product_design_list[position]._design._sideList[0]._ColorPersonalizeList = arraypersonalizecolors;







    if (arraycolors.length > 8)



    {



        var script = "Ink Color: full color";



    } else



    {



        var script = "Ink Color:" + arraycolors.length;



    }







    frontcolos.innerHTML = script;



    arraycolors = [];



    objs = right.getObjects();



    for (var i = 0; i < objs.length; i++)



    {



        if (objs[i].type === "image")



        {

            if (objs[i].id != "" && objs[i].id != null && !Number.isInteger(objs[i].id))  {



                if (objs[i].id.indexOf("Uploaded") != -1)



                {

                    if (objs[i].colorlist != undefined) {

                        if (objs[i].colorlist.length > 8) {

                            arraycolors.push("f");

                            arraycolors.push("u");

                            arraycolors.push("l");

                            arraycolors.push("l");

                            arraycolors.push("c");

                            arraycolors.push("o");

                            arraycolors.push("l");

                            arraycolors.push("o");

                            arraycolors.push("r");

                        } else {

                            for (var j = 0; j < objs[i].colorlist.length; j++) {

                                var color = rgb2hex(objs[i].colorlist[j]);



                                if (!validate_element(color, arraycolors))



                                {



                                    arraycolors.push(color);



                                }

                            }

                        }



                    } else {

                        arraycolors.push("k");

                        arraycolors.push("a");

                        arraycolors.push("t");

                        arraycolors.push("i");

                        arraycolors.push("e");

                    }





                }

            } 
            else if (objs[i]._element.src.includes('Patriotic/Police')) 
            {
                arraycolors.push("#ffffff");
                arraycolors.push("#0d45e4");
            }
            else



            {



                if (objs[i].filters.length > 0)



                {



                    var color = rgb2hex(objs[i].filters[objs[i].filters.length - 1].color);



                    if (!validate_element(color, arraycolors))



                    {



                        arraycolors.push(color);



                    }







                } else if (!validate_element("#000000", arraycolors))



                {



                    arraycolors.push("#000000");



                }



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



                } else if (!validate_element("#000000", arraycolors))



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



            for (var j = 0; j < objlist.length; j++)



            {



                if (!validate_layer(objlist[j], layers))



                {



                    layers.push(objlist[j]);                   



                    var color = objlist[j].fill;



                    if (!validate_element(color, arraycolors))



                    {



                        arraycolors.push(color);



                    }

                }

            }



        }



    }



    Order._Product_design_list[position]._design._sideList[1]._ColorList = arraycolors;



    if (arraycolors.length > 8)



    {



        var script = "Ink Color: Full color";



    } else



    {



        var script = "Ink Color:" + arraycolors.length;



    }



    rightcolos.innerHTML = script;



    arraycolors = [];



    arraypersonalizecolors = [];



    objs = back.getObjects();



    for (var i = 0; i < objs.length; i++)



    {



        if (objs[i].type === "image")



        {



            if (objs[i].id != "" && objs[i].id != null && !Number.isInteger(objs[i].id))  {



                if (objs[i].id.indexOf("Uploaded") != -1)



                {

                    if (objs[i].colorlist != undefined) {

                        if (objs[i].colorlist.length > 8) {

                            arraycolors.push("f");

                            arraycolors.push("u");

                            arraycolors.push("l");

                            arraycolors.push("l");

                            arraycolors.push("c");

                            arraycolors.push("o");

                            arraycolors.push("l");

                            arraycolors.push("o");

                            arraycolors.push("r");

                        } else {

                            for (var j = 0; j < objs[i].colorlist.length; j++) {

                                var color = rgb2hex(objs[i].colorlist[j]);



                                if (!validate_element(color, arraycolors))



                                {



                                    arraycolors.push(color);



                                }

                            }

                        }



                    } else {

                        arraycolors.push("k");

                        arraycolors.push("a");

                        arraycolors.push("t");

                        arraycolors.push("i");

                        arraycolors.push("e");

                    }





                }

            } 

            else if (objs[i]._element.src.includes('Patriotic/Police')) 
            {
                arraycolors.push("#ffffff");
                arraycolors.push("#0d45e4");
            }

            else



            {



                if (objs[i].filters.length > 0)



                {



                    var color = rgb2hex(objs[i].filters[objs[i].filters.length - 1].color);



                    if (!validate_element(color, arraycolors))



                    {



                        arraycolors.push(color);



                    }







                } else if (!validate_element("#000000", arraycolors))



                {



                    arraycolors.push("#000000");



                }



            }







        } else if (objs[i].type === "text" || objs[i].type === "curvedText" || objs[i].type === "i-text")



        {



          



                if (objs[i].fill != null && objs[i].fill.length > 0)



                {



                    var color = rgb2hex(objs[i].fill);



                    if (!validate_element(color, arraycolors))



                    {



                        arraycolors.push(color);



                    }



                } else if (!validate_element("#000000", arraycolors))



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





                if (objs[i].type === "i-text")



                {



                  

                    if (objs[i].fill != null && objs[i].fill.length > 0)



                    {



                        var color = rgb2hex(objs[i].fill);



                        if (!validate_element_personalize(color, arraypersonalizecolors))



                        {

                            var colorelement = {type: "", color: ""};

                            colorelement.type = "fill"+ objs[i].id;

                            colorelement.color = color;

                            arraypersonalizecolors.push(colorelement);



                        }







                    } 

                    else if (!validate_element_personalize("#000000", arraypersonalizecolors))



                    {



                        var colorelement = {type: "", color: ""};

                        colorelement.type = "fill"+ objs[i].id;

                        colorelement.color = "#000000";

                        arraypersonalizecolors.push(colorelement);

                        //arraypersonalizecolors.push("#000000");



                    }







                    if (objs[i].stroke != null && objs[i].stroke.length > 0)



                    {



                        var color = rgb2hex(objs[i].stroke);



                        if (!validate_element_personalize(color, arraypersonalizecolors))



                        {



                            //arraypersonalizecolors.push(color);

                            var colorelement = {type: "", color: ""};

                            colorelement.type = "stroke"+ objs[i].id;

                            colorelement.color = "#000000";

                            arraypersonalizecolors.push(colorelement);  



                        }



                    }

                } 



        } 

        else

        {   

            objlist = objs[i]._objects; 

            var layers = [];



            for (var j = 0; j < objlist.length; j++)



            {



                if (!validate_layer(objlist[j], layers))



                {



                    layers.push(objlist[j]);                   



                    var color = objlist[j].fill;



                    if (!validate_element(color, arraycolors))



                    {



                        arraycolors.push(color);



                    }

                }

            }

        }



    }



    Order._Product_design_list[position]._design._sideList[2]._ColorList = arraycolors;

    Order._Product_design_list[position]._design._sideList[2]._ColorPersonalizeList = arraypersonalizecolors;



    if (arraycolors.length > 8)



    {



        var script = "Ink Color: Full color";



    } else



    {



        var script = "Ink Color:" + arraycolors.length;



    }



    backcolos.innerHTML = script;



    arraycolors = [];



    objs = left.getObjects();



    for (var i = 0; i < objs.length; i++)



    {



        if (objs[i].type === "image")



        {



            if (objs[i].id != "" && objs[i].id != null && !Number.isInteger(objs[i].id))  {



                if (objs[i].id.indexOf("Uploaded") != -1)



                {

                    if (objs[i].colorlist != undefined) {

                        if (objs[i].colorlist.length > 8) {

                            arraycolors.push("f");

                            arraycolors.push("u");

                            arraycolors.push("l");

                            arraycolors.push("l");

                            arraycolors.push("c");

                            arraycolors.push("o");

                            arraycolors.push("l");

                            arraycolors.push("o");

                            arraycolors.push("r");

                        } else {

                            for (var j = 0; j < objs[i].colorlist.length; j++) {

                                var color = rgb2hex(objs[i].colorlist[j]);



                                if (!validate_element(color, arraycolors))



                                {



                                    arraycolors.push(color);



                                }

                            }

                        }



                    } else {

                        arraycolors.push("k");

                        arraycolors.push("a");

                        arraycolors.push("t");

                        arraycolors.push("i");

                        arraycolors.push("e");

                    }





                }



            } 

            else if (objs[i]._element.src.includes('Patriotic/Police')) 
            {
                arraycolors.push("#ffffff");
                arraycolors.push("#0d45e4");
            }

            else



            {



                if (objs[i].filters.length > 0)



                {



                    var color = rgb2hex(objs[i].filters[objs[i].filters.length - 1].color);



                    if (!validate_element(color, arraycolors))



                    {



                        arraycolors.push(color);



                    }







                } else if (!validate_element("#000000", arraycolors))



                {



                    arraycolors.push("#000000");



                }



            }







        } else if (objs[i].type === "text" || objs[i].type === "curvedText" || objs[i].type === "i-text")



        {



           



                if (objs[i].fill != null && objs[i].fill.length > 0)



                {



                    var color = rgb2hex(objs[i].fill);



                    if (!validate_element(color, arraycolors))



                    {



                        arraycolors.push(color);



                    }







                } else if (!validate_element("#000000", arraycolors))



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



            



        } else



        {



            objlist = objs[i]._objects;



            var layers = [];



            for (var i = 0; i < objlist.length; i++)



            {



                if (!validate_layer(objlist[i], layers))



                {



                    layers.push(objlist[i]);



                }



            }







            if (layers > 8) {

                arraycolors.push("f");

                arraycolors.push("u");

                arraycolors.push("l");

                arraycolors.push("l");

                arraycolors.push("c");

                arraycolors.push("o");

                arraycolors.push("l");

                arraycolors.push("o");

                arraycolors.push("r");

            } else {

                for (var j = objlist.length - 1; j >= 0; j--)



                {





                    if (objlist[j].fill != null && objlist[j].fill.length > 0)



                    {



                        var color = rgb2hex(objlist[j].fill);



                        if (!validate_element(color, arraycolors))



                        {



                            arraycolors.push(color);



                        }







                    } else if (!validate_element("#000000", arraycolors))



                    {



                        arraycolors.push("#000000");



                    }



                }

            }



        }



    }



    Order._Product_design_list[position]._design._sideList[3]._ColorList = arraycolors;



    if (arraycolors.length > 8)



    {



        var script = "Ink Color: Full color";



    } else



    {



        var script = "Ink Color:" + arraycolors.length;



    }



    leftcolos.innerHTML = script;



}*/

function setColorsInk()

{

    var arraycolors = [];

    var arraypersonalizecolors = [];

    var objs = front.getObjects();

    for (var i = 0; i < objs.length; i++)

    {

        if (objs[i].type === "image")

        {

            if (objs[i].id != "" && objs[i].id != null && !Number.isInteger(objs[i].id)) {

                if (objs[i].id.indexOf("Uploaded") != -1)

                {

                    if (objs[i].colorlist != undefined) {

                        if (objs[i].colorlist.length > 8) {

                            arraycolors.push("f");

                            arraycolors.push("u");

                            arraycolors.push("l");

                            arraycolors.push("l");

                            arraycolors.push("c");

                            arraycolors.push("o");

                            arraycolors.push("l");

                            arraycolors.push("o");

                            arraycolors.push("r");

                        } else {

                            for (var j = 0; j < objs[i].colorlist.length; j++) {

                                var color = rgb2hex(objs[i].colorlist[j]);

                                if (!validate_element(color, arraycolors))

                                {

                                    arraycolors.push(color);

                                }

                            }

                        }

                    } else {

                        arraycolors.push("k");

                        arraycolors.push("a");

                        arraycolors.push("t");

                        arraycolors.push("i");

                        arraycolors.push("e");

                    }

                }

            }
            else if (objs[i]._element.src.includes('Patriotic/Police')) 
            {
                arraycolors.push("#ffffff");
                arraycolors.push("#0d45e4");
            }
             else

            {

                if (objs[i].filters.length > 0)

                {

                    var color = rgb2hex(objs[i].filters[objs[i].filters.length - 1].color);

                    if (!validate_element(color, arraycolors))

                    {

                        arraycolors.push(color);

                    }

                } else if (!validate_element("#000000", arraycolors))

                {

                    arraycolors.push("#000000");

                }

            }

        } else if (objs[i].type === "text" || objs[i].type === "curvedText" || objs[i].type === "i-text")

        {

            if (objs[i].fill != null && objs[i].fill.length > 0)

            {

                var color = rgb2hex(objs[i].fill);

                if (!validate_element(color, arraycolors))

                {

                    arraycolors.push(color);

                }

            } else if (!validate_element("#000000", arraycolors))

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

            if (objs[i].type === "i-text")

            {

                if (objs[i].fill != null && objs[i].fill.length > 0)

                {

                    var color = rgb2hex(objs[i].fill);

                    if (!validate_element_personalize(color, arraypersonalizecolors))

                    {

                        var colorelement = {

                            type: "",

                            color: ""

                        };

                        colorelement.type = "fill" + objs[i].id;

                        colorelement.color = color;

                        arraypersonalizecolors.push(colorelement);

                    }

                } else if (!validate_element_personalize("#000000", arraypersonalizecolors))

                {

                    var colorelement = {

                        type: "",

                        color: ""

                    };

                    colorelement.type = "fill" + objs[i].id;

                    colorelement.color = "#000000";

                    arraypersonalizecolors.push(colorelement);

                    //arraypersonalizecolors.push("#000000");

                }

                if (objs[i].stroke != null && objs[i].stroke.length > 0)

                {

                    var color = rgb2hex(objs[i].stroke);

                    if (!validate_element_personalize(color, arraypersonalizecolors))

                    {

                        //arraypersonalizecolors.push(color);

                        var colorelement = {

                            type: "",

                            color: ""

                        };

                        colorelement.type = "stroke" + objs[i].id;

                        colorelement.color = "#000000";

                        arraypersonalizecolors.push(colorelement);

                    }

                }

            }

        } else

        {

            objlist = objs[i]._objects;

            var layers = [];

            for (var j = 0; j < objlist.length; j++)

            {

                if (!validate_layer(objlist[j], layers) && objlist[j].fill != 'transparent')

                {

                    layers.push(objlist[j]);

                    var color = objlist[j].fill;

                    if (!validate_element(color, arraycolors))

                    {

                        arraycolors.push(color);

                    }

                }

            }

        }

    }
    

    Order._Product_design_list[position]._design._sideList[0]._ColorList = arraycolors;

    Order._Product_design_list[position]._design._sideList[0]._ColorPersonalizeList = arraypersonalizecolors;

    if (arraycolors.length > 8)

    {

        var script = "Ink Color: full color";

    } else

    {

        var script = "Ink Color:" + arraycolors.length;

    }

    frontcolos.innerHTML = script;

    arraycolors = [];

    objs = right.getObjects();

    for (var i = 0; i < objs.length; i++)

    {

        if (objs[i].type === "image")

        {

            if (objs[i].id != "" && objs[i].id != null && !Number.isInteger(objs[i].id)) {

                if (objs[i].id.indexOf("Uploaded") != -1)

                {

                    if (objs[i].colorlist != undefined) {

                        if (objs[i].colorlist.length > 8) {

                            arraycolors.push("f");

                            arraycolors.push("u");

                            arraycolors.push("l");

                            arraycolors.push("l");

                            arraycolors.push("c");

                            arraycolors.push("o");

                            arraycolors.push("l");

                            arraycolors.push("o");

                            arraycolors.push("r");

                        } else {

                            for (var j = 0; j < objs[i].colorlist.length; j++) {

                                var color = rgb2hex(objs[i].colorlist[j]);

                                if (!validate_element(color, arraycolors))

                                {

                                    arraycolors.push(color);

                                }

                            }

                        }

                    } else {

                        arraycolors.push("k");

                        arraycolors.push("a");

                        arraycolors.push("t");

                        arraycolors.push("i");

                        arraycolors.push("e");

                    }

                }

            } 
            else if (objs[i]._element.src.includes('Patriotic/Police')) 
            {
                arraycolors.push("#ffffff");
                arraycolors.push("#0d45e4");
            }
            else

            {

                if (objs[i].filters.length > 0)

                {

                    var color = rgb2hex(objs[i].filters[objs[i].filters.length - 1].color);

                    if (!validate_element(color, arraycolors))

                    {

                        arraycolors.push(color);

                    }

                } else if (!validate_element("#000000", arraycolors))

                {

                    arraycolors.push("#000000");

                }

            }

        } else if (objs[i].type === "text" || objs[i].type === "curvedText" || objs[i].type === "i-text")

        {

            if (objs[i].fill != null && objs[i].fill.length > 0)

            {

                var color = rgb2hex(objs[i].fill);

                if (!validate_element(color, arraycolors))

                {

                    arraycolors.push(color);

                }

            } else if (!validate_element("#000000", arraycolors))

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

        } else

        {

            objlist = objs[i]._objects;

            var layers = [];

            for (var j = 0; j < objlist.length; j++)

            {

                if (!validate_layer(objlist[j], layers) && objlist[j].fill != 'transparent')

                {

                    layers.push(objlist[j]);

                    var color = objlist[j].fill;

                    if (!validate_element(color, arraycolors))

                    {

                        arraycolors.push(color);

                    }

                }

            }

        }

    }

    Order._Product_design_list[position]._design._sideList[1]._ColorList = arraycolors;

    if (arraycolors.length > 8)

    {

        var script = "Ink Color: Full color";

    } else

    {

        var script = "Ink Color:" + arraycolors.length;

    }

    rightcolos.innerHTML = script;

    arraycolors = [];

    arraypersonalizecolors = [];

    objs = back.getObjects();

    for (var i = 0; i < objs.length; i++)

    {

        if (objs[i].type === "image")

        {

            if (objs[i].id != "" && objs[i].id != null && !Number.isInteger(objs[i].id)) {

                if (objs[i].id.indexOf("Uploaded") != -1)

                {

                    if (objs[i].colorlist != undefined) {

                        if (objs[i].colorlist.length > 8) {

                            arraycolors.push("f");

                            arraycolors.push("u");

                            arraycolors.push("l");

                            arraycolors.push("l");

                            arraycolors.push("c");

                            arraycolors.push("o");

                            arraycolors.push("l");

                            arraycolors.push("o");

                            arraycolors.push("r");

                        } else {

                            for (var j = 0; j < objs[i].colorlist.length; j++) {

                                var color = rgb2hex(objs[i].colorlist[j]);

                                if (!validate_element(color, arraycolors))

                                {

                                    arraycolors.push(color);

                                }

                            }

                        }

                    } else {

                        arraycolors.push("k");

                        arraycolors.push("a");

                        arraycolors.push("t");

                        arraycolors.push("i");

                        arraycolors.push("e");

                    }

                }

            } 
            else if (objs[i]._element.src.includes('Patriotic/Police')) 
            {
                arraycolors.push("#ffffff");
                arraycolors.push("#0d45e4");
            }
            else

            {

                if (objs[i].filters.length > 0)

                {

                    var color = rgb2hex(objs[i].filters[objs[i].filters.length - 1].color);

                    if (!validate_element(color, arraycolors))

                    {

                        arraycolors.push(color);

                    }

                } else if (!validate_element("#000000", arraycolors))

                {

                    arraycolors.push("#000000");

                }

            }

        } else if (objs[i].type === "text" || objs[i].type === "curvedText" || objs[i].type === "i-text")

        {

            if (objs[i].fill != null && objs[i].fill.length > 0)

            {

                var color = rgb2hex(objs[i].fill);

                if (!validate_element(color, arraycolors))

                {

                    arraycolors.push(color);

                }

            } else if (!validate_element("#000000", arraycolors))

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

            if (objs[i].type === "i-text")

            {

                if (objs[i].fill != null && objs[i].fill.length > 0)

                {

                    var color = rgb2hex(objs[i].fill);

                    if (!validate_element_personalize(color, arraypersonalizecolors))

                    {

                        var colorelement = {

                            type: "",

                            color: ""

                        };

                        colorelement.type = "fill" + objs[i].id;

                        colorelement.color = color;

                        arraypersonalizecolors.push(colorelement);

                    }

                } else if (!validate_element_personalize("#000000", arraypersonalizecolors))

                {

                    var colorelement = {

                        type: "",

                        color: ""

                    };

                    colorelement.type = "fill" + objs[i].id;

                    colorelement.color = "#000000";

                    arraypersonalizecolors.push(colorelement);

                    //arraypersonalizecolors.push("#000000");

                }

                if (objs[i].stroke != null && objs[i].stroke.length > 0)

                {

                    var color = rgb2hex(objs[i].stroke);

                    if (!validate_element_personalize(color, arraypersonalizecolors))

                    {

                        //arraypersonalizecolors.push(color);

                        var colorelement = {

                            type: "",

                            color: ""

                        };

                        colorelement.type = "stroke" + objs[i].id;

                        colorelement.color = "#000000";

                        arraypersonalizecolors.push(colorelement);

                    }

                }

            }

        } else

        {

            objlist = objs[i]._objects;

            var layers = [];

            for (var j = 0; j < objlist.length; j++)

            {

                if (!validate_layer(objlist[j], layers) && objlist[j].fill != 'transparent')

                {

                    layers.push(objlist[j]);

                    var color = objlist[j].fill;

                    if (!validate_element(color, arraycolors))

                    {

                        arraycolors.push(color);

                    }

                }

            }

        }

    }

    Order._Product_design_list[position]._design._sideList[2]._ColorList = arraycolors;

    Order._Product_design_list[position]._design._sideList[2]._ColorPersonalizeList = arraypersonalizecolors;

    if (arraycolors.length > 8)

    {

        var script = "Ink Color: Full color";

    } else

    {

        var script = "Ink Color:" + arraycolors.length;

    }

    backcolos.innerHTML = script;

    arraycolors = [];

    objs = left.getObjects();

    for (var i = 0; i < objs.length; i++)

    {

        if (objs[i].type === "image")

        {

            if (objs[i].id != "" && objs[i].id != null && !Number.isInteger(objs[i].id)) {

                if (objs[i].id.indexOf("Uploaded") != -1)

                {

                    if (objs[i].colorlist != undefined) {

                        if (objs[i].colorlist.length > 8) {

                            arraycolors.push("f");

                            arraycolors.push("u");

                            arraycolors.push("l");

                            arraycolors.push("l");

                            arraycolors.push("c");

                            arraycolors.push("o");

                            arraycolors.push("l");

                            arraycolors.push("o");

                            arraycolors.push("r");

                        } else {

                            for (var j = 0; j < objs[i].colorlist.length; j++) {

                                var color = rgb2hex(objs[i].colorlist[j]);

                                if (!validate_element(color, arraycolors))

                                {

                                    arraycolors.push(color);

                                }

                            }

                        }

                    } else {

                        arraycolors.push("k");

                        arraycolors.push("a");

                        arraycolors.push("t");

                        arraycolors.push("i");

                        arraycolors.push("e");

                    }

                }

            }
            else if (objs[i]._element.src.includes('Patriotic/Police')) 
            {
                arraycolors.push("#ffffff");
                arraycolors.push("#0d45e4");
            }
             else

            {

                if (objs[i].filters.length > 0)

                {

                    var color = rgb2hex(objs[i].filters[objs[i].filters.length - 1].color);

                    if (!validate_element(color, arraycolors))

                    {

                        arraycolors.push(color);

                    }

                } else if (!validate_element("#000000", arraycolors))

                {

                    arraycolors.push("#000000");

                }

            }

        } else if (objs[i].type === "text" || objs[i].type === "curvedText" || objs[i].type === "i-text")

        {

            if (objs[i].fill != null && objs[i].fill.length > 0)

            {

                var color = rgb2hex(objs[i].fill);

                if (!validate_element(color, arraycolors))

                {

                    arraycolors.push(color);

                }

            } else if (!validate_element("#000000", arraycolors))

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

        } else

        {

            objlist = objs[i]._objects;

            var layers = [];

            for (var i = 0; i < objlist.length; i++)

            {

                if (!validate_layer(objlist[i], layers))

                {

                    layers.push(objlist[i]);

                }

            }

            if (layers > 8) {

                arraycolors.push("f");

                arraycolors.push("u");

                arraycolors.push("l");

                arraycolors.push("l");

                arraycolors.push("c");

                arraycolors.push("o");

                arraycolors.push("l");

                arraycolors.push("o");

                arraycolors.push("r");

            } else {

                for (var j = objlist.length - 1; j >= 0; j--)

                {

                    if (objlist[j].fill != null && objlist[j].fill.length > 0)

                    {

                        var color = rgb2hex(objlist[j].fill);

                        if (!validate_element(color, arraycolors))

                        {

                            arraycolors.push(color);

                        }

                    } else if (!validate_element("#000000", arraycolors))

                    {

                        arraycolors.push("#000000");

                    }

                }

            }

        }

    }

    Order._Product_design_list[position]._design._sideList[3]._ColorList = arraycolors;

    if (arraycolors.length > 8)

    {

        var script = "Ink Color: Full color";

    } else

    {

        var script = "Ink Color:" + arraycolors.length;

    }

    leftcolos.innerHTML = script;

}










/*function selectcolors()



{



    var listcircles = document.getElementsByClassName('block');



    for (var i = 0; i < listcircles.length; i++)



    {

        if (listcircles[i].id.indexOf('artcolor') != -1) {



            listcircles[i].classList.remove("animate");



            listcircles[i].classList.remove("transparent2");



            listcircles[i].style.border = "1px solid #eee";

        }



    }







    for (var i = 0; i < Order._Product_design_list[position]._design._sideList[canvasCounter - 1]._ColorList.length; i++)



    {



        var currentcolor = Order._Product_design_list[position]._design._sideList[canvasCounter - 1]._ColorList[i];



        if (currentcolor == "rgb(0,0,0)")



        {



            currentcolor = "#000000";



        }



        if (isMobile())



        {

            if (document.getElementById("artcolorModal" + currentcolor.replace("#", "").toLowerCase()) != null)

                document.getElementById("artcolorModal" + currentcolor.replace("#", "").toLowerCase()).classList.add("animate");



        } else



        {



            if (document.getElementById("artcolor" + currentcolor.replace("#", "").toLowerCase()) != null)

                document.getElementById("artcolor" + currentcolor.replace("#", "").toLowerCase()).classList.add("animate");



        }



    }









}*/









function selectcolors()



{



    var listcircles = document.getElementsByClassName('block');



    for (var i = 0; i < listcircles.length; i++)



    {

        if (listcircles[i].id.indexOf('artcolor') != -1) {



            listcircles[i].classList.remove("animate");



            listcircles[i].classList.remove("transparent2");



            listcircles[i].style.border = "1px solid #eee";

        }



    }



    for (var i = 0; i < Order._Product_design_list[position]._design._sideList[canvasCounter - 1]._ColorList.length; i++)



    {



        var currentcolor = Order._Product_design_list[position]._design._sideList[canvasCounter - 1]._ColorList[i];



        if (currentcolor == "rgb(0,0,0)")



        {



            currentcolor = "#000000";



        }



        if (isMobile())



        {

            if (document.getElementById("artcolorModal" + currentcolor.replace("#", "").toLowerCase()) != null)

                document.getElementById("artcolorModal" + currentcolor.replace("#", "").toLowerCase()).classList.add("animate");

            if (document.getElementById("artcolorpersonalizeModal" + currentcolor.replace("#", "").toLowerCase()) != null)

                document.getElementById("artcolorpersonalizeModal" + currentcolor.replace("#", "").toLowerCase()).classList.add("animate");

            



        } else



        {



            if (document.getElementById("artcolor" + currentcolor.replace("#", "").toLowerCase()) != null)

                document.getElementById("artcolor" + currentcolor.replace("#", "").toLowerCase()).classList.add("animate");

            if (document.getElementById("artcolorpersonalize" + currentcolor.replace("#", "").toLowerCase()) != null)

                document.getElementById("artcolorpersonalize" + currentcolor.replace("#", "").toLowerCase()).classList.add("animate");



        }



    }







}





function setColorsInk2()



{



    var arraycolors = [];



    var objs = front.getObjects();







    for (var i = 0; i < objs.length; i++)



    {



        if (objs[i].type === "image")



        {



            if (objs[i].getSrc().indexOf("Uploaded") != -1)



            {



                arraycolors.push("f");

                arraycolors.push("u");

                arraycolors.push("l");

                arraycolors.push("l");

                arraycolors.push("c");

                arraycolors.push("o");

                arraycolors.push("l");

                arraycolors.push("o");

                arraycolors.push("r");



            } else



            {



                if (objs[i].filters.length > 0)



                {



                    var color = rgb2hex(objs[i].filters[objs[i].filters.length - 1].color);



                    if (!validate_element(color, arraycolors))



                    {



                        arraycolors.push(color);



                    }







                } else if (!validate_element("#000000", arraycolors))



                {



                    arraycolors.push("#000000");



                }



            }







        } else if (objs[i].type === "text" || objs[i].type === "curvedText")



        {



            if (objs[i].fill != null && objs[i].fill.length > 0)



            {



                var color = rgb2hex(objs[i].fill);



                if (!validate_element(color, arraycolors))



                {



                    arraycolors.push(color);



                }







            } else if (!validate_element("#000000", arraycolors))



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



        } else



        {



            objlist = objs[i]._objects;



            var layers = [];



            for (var i = 0; i < objlist.length; i++)



            {



                if (!validate_layer(objlist[i], layers))



                {



                    layers.push(objlist[i]);



                }



            }







            if (layers > 8) {

                arraycolors.push("f");

                arraycolors.push("u");

                arraycolors.push("l");

                arraycolors.push("l");

                arraycolors.push("c");

                arraycolors.push("o");

                arraycolors.push("l");

                arraycolors.push("o");

                arraycolors.push("r");

            } else {

                for (var j = objlist.length - 1; j >= 0; j--)



                {





                    if (objlist[j].fill != null && objlist[j].fill.length > 0)



                    {



                        var color = rgb2hex(objlist[j].fill);



                        if (!validate_element(color, arraycolors))



                        {



                            arraycolors.push(color);



                        }







                    } else if (!validate_element("#000000", arraycolors))



                    {



                        arraycolors.push("#000000");



                    }



                }

            }









        }







    }







    Order._Product_design_list[position]._design._sideList[0]._ColorList = arraycolors;







    if (arraycolors.length > 8)



    {



        var script = "Ink Color: full color";



    } else



    {



        var script = "Ink Color:" + arraycolors.length;



    }







    frontcolos.innerHTML = script;



    arraycolors = [];



    objs = right.getObjects();



    for (var i = 0; i < objs.length; i++)



    {



        if (objs[i].type === "image")



        {



            if (objs[i].getSrc().indexOf("Uploaded") != -1)



            {



                arraycolors.push("f");

                arraycolors.push("u");

                arraycolors.push("l");

                arraycolors.push("l");

                arraycolors.push("c");

                arraycolors.push("o");

                arraycolors.push("l");

                arraycolors.push("o");

                arraycolors.push("r");



            } else



            {



                if (objs[i].filters.length > 0)



                {



                    var color = rgb2hex(objs[i].filters[objs[i].filters.length - 1].color);



                    if (!validate_element(color, arraycolors))



                    {



                        arraycolors.push(color);



                    }







                } else if (!validate_element("#000000", arraycolors))



                {



                    arraycolors.push("#000000");



                }



            }







        } else if (objs[i].type === "text" || objs[i].type === "curvedText")



        {



            if (objs[i].fill != null && objs[i].fill.length > 0)



            {



                var color = rgb2hex(objs[i].fill);



                if (!validate_element(color, arraycolors))



                {



                    arraycolors.push(color);



                }







            } else if (!validate_element("#000000", arraycolors))



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



            /*else if(!validate_element("#000000",arraycolors))



            {           



              arraycolors.push("#000000");



            }*/



        } else



        {





            objlist = objs[i]._objects;



            var layers = [];



            for (var i = 0; i < objlist.length; i++)



            {



                if (!validate_layer(objlist[i], layers))



                {



                    layers.push(objlist[i]);



                }



            }



            if (layers > 8) {

                arraycolors.push("f");

                arraycolors.push("u");

                arraycolors.push("l");

                arraycolors.push("l");

                arraycolors.push("c");

                arraycolors.push("o");

                arraycolors.push("l");

                arraycolors.push("o");

                arraycolors.push("r");

            } else {

                for (var j = objlist.length - 1; j >= 0; j--)



                {



                    //objlist[i]



                    if (objlist[j].fill != null && objlist[j].fill.length > 0)



                    {



                        var color = rgb2hex(objlist[j].fill);



                        if (!validate_element(color, arraycolors))



                        {



                            arraycolors.push(color);



                        }







                    } else if (!validate_element("#000000", arraycolors))



                    {



                        arraycolors.push("#000000");



                    }



                }

            }





        }



    }



    Order._Product_design_list[position]._design._sideList[1]._ColorList = arraycolors;



    if (arraycolors.length > 8)



    {



        var script = "Ink Color: Full color";



    } else



    {



        var script = "Ink Color:" + arraycolors.length;



    }



    rightcolos.innerHTML = script;



    arraycolors = [];



    objs = back.getObjects();



    for (var i = 0; i < objs.length; i++)



    {



        if (objs[i].type === "image")



        {



            if (objs[i].getSrc().indexOf("Uploaded") != -1)



            {



                arraycolors.push("f");

                arraycolors.push("u");

                arraycolors.push("l");

                arraycolors.push("l");

                arraycolors.push("c");

                arraycolors.push("o");

                arraycolors.push("l");

                arraycolors.push("o");

                arraycolors.push("r");



            } else



            {



                if (objs[i].filters.length > 0)



                {



                    var color = rgb2hex(objs[i].filters[objs[i].filters.length - 1].color);



                    if (!validate_element(color, arraycolors))



                    {



                        arraycolors.push(color);



                    }







                } else if (!validate_element("#000000", arraycolors))



                {



                    arraycolors.push("#000000");



                }



            }







        } else if (objs[i].type === "text" || objs[i].type === "curvedText")



        {



            if (objs[i].fill != null && objs[i].fill.length > 0)



            {



                var color = rgb2hex(objs[i].fill);



                if (!validate_element(color, arraycolors))



                {



                    arraycolors.push(color);



                }







            } else if (!validate_element("#000000", arraycolors))



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



            /* else if(!validate_element("#000000",arraycolors))



             {           



               arraycolors.push("#000000");



             }*/



        } else



        {





            objlist = objs[i]._objects;



            var layers = [];



            for (var i = 0; i < objlist.length; i++)



            {



                if (!validate_layer(objlist[i], layers))



                {



                    layers.push(objlist[i]);



                }



            }



            if (layers > 8) {

                arraycolors.push("f");

                arraycolors.push("u");

                arraycolors.push("l");

                arraycolors.push("l");

                arraycolors.push("c");

                arraycolors.push("o");

                arraycolors.push("l");

                arraycolors.push("o");

                arraycolors.push("r");

            } else {

                for (var j = objlist.length - 1; j >= 0; j--)



                {



                    //objlist[i]



                    if (objlist[j].fill != null && objlist[j].fill.length > 0)



                    {



                        var color = rgb2hex(objlist[j].fill);



                        if (!validate_element(color, arraycolors))



                        {



                            arraycolors.push(color);



                        }







                    } else if (!validate_element("#000000", arraycolors))



                    {



                        arraycolors.push("#000000");



                    }



                }

            }





        }



    }



    Order._Product_design_list[position]._design._sideList[2]._ColorList = arraycolors;



    if (arraycolors.length > 8)



    {



        var script = "Ink Color: Full color";



    } else



    {



        var script = "Ink Color:" + arraycolors.length;



    }



    backcolos.innerHTML = script;



    arraycolors = [];



    objs = left.getObjects();



    for (var i = 0; i < objs.length; i++)



    {



        if (objs[i].type === "image")



        {



            if (objs[i].getSrc().indexOf("Uploaded") != -1)



            {



                arraycolors.push("f");

                arraycolors.push("u");

                arraycolors.push("l");

                arraycolors.push("l");

                arraycolors.push("c");

                arraycolors.push("o");

                arraycolors.push("l");

                arraycolors.push("o");

                arraycolors.push("r");



            } else



            {



                if (objs[i].filters.length > 0)



                {



                    var color = rgb2hex(objs[i].filters[objs[i].filters.length - 1].color);



                    if (!validate_element(color, arraycolors))



                    {



                        arraycolors.push(color);



                    }







                } else if (!validate_element("#000000", arraycolors))



                {



                    arraycolors.push("#000000");



                }



            }







        } else if (objs[i].type === "text" || objs[i].type === "curvedText")



        {



            if (objs[i].fill != null && objs[i].fill.length > 0)



            {



                var color = rgb2hex(objs[i].fill);



                if (!validate_element(color, arraycolors))



                {



                    arraycolors.push(color);



                }







            } else if (!validate_element("#000000", arraycolors))



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



            /*else if(!validate_element("#000000",arraycolors))



            {           



              arraycolors.push("#000000");



            }*/



        } else



        {





            objlist = objs[i]._objects;



            var layers = [];



            for (var i = 0; i < objlist.length; i++)



            {



                if (!validate_layer(objlist[i], layers))



                {



                    layers.push(objlist[i]);



                }



            }



            if (layers > 8) {

                arraycolors.push("f");

                arraycolors.push("u");

                arraycolors.push("l");

                arraycolors.push("l");

                arraycolors.push("c");

                arraycolors.push("o");

                arraycolors.push("l");

                arraycolors.push("o");

                arraycolors.push("r");

            } else {

                for (var j = objlist.length - 1; j >= 0; j--)



                {



                    //objlist[i]



                    if (objlist[j].fill != null && objlist[j].fill.length > 0)



                    {



                        var color = rgb2hex(objlist[j].fill);



                        if (!validate_element(color, arraycolors))



                        {



                            arraycolors.push(color);



                        }







                    } else if (!validate_element("#000000", arraycolors))



                    {



                        arraycolors.push("#000000");



                    }



                }

            }





        }



    }



    Order._Product_design_list[position]._design._sideList[3]._ColorList = arraycolors;



    if (arraycolors.length > 8)



    {



        var script = "Ink Color: Full color";



    } else



    {



        var script = "Ink Color:" + arraycolors.length;



    }



    leftcolos.innerHTML = script;



}





/*



function selectcolors()



{



    var listcircles = document.getElementsByClassName('block');



    for (var i = 0; i < listcircles.length; i++)



    {

        if (listcircles[i].id.indexOf('artcolor') != -1) {



            listcircles[i].classList.remove("animate");



            listcircles[i].classList.remove("transparent2");



            listcircles[i].style.border = "1px solid #eee";

        }



    }







    for (var i = 0; i < Order._Product_design_list[position]._design._sideList[canvasCounter - 1]._ColorList.length; i++)



    {



        var currentcolor = Order._Product_design_list[position]._design._sideList[canvasCounter - 1]._ColorList[i];



        if (currentcolor == "rgb(0,0,0)")



        {



            currentcolor = "#000000";



        }



        if (isMobile())



        {

            if (document.getElementById("artcolorModal" + currentcolor.replace("#", "").toLowerCase()) != null)

                document.getElementById("artcolorModal" + currentcolor.replace("#", "").toLowerCase()).classList.add("animate");



        } else



        {



            if (document.getElementById("artcolor" + currentcolor.replace("#", "").toLowerCase()) != null)

                document.getElementById("artcolor" + currentcolor.replace("#", "").toLowerCase()).classList.add("animate");



        }



    }









}









function selectcolors()



{



    var listcircles = document.getElementsByClassName('block');



    for (var i = 0; i < listcircles.length; i++)



    {

        if (listcircles[i].id.indexOf('artcolor') != -1) {



            listcircles[i].classList.remove("animate");



            listcircles[i].classList.remove("transparent2");



            listcircles[i].style.border = "1px solid #eee";

        }



    }







    for (var i = 0; i < Order._Product_design_list[position]._design._sideList[canvasCounter - 1]._ColorList.length; i++)



    {



        var currentcolor = Order._Product_design_list[position]._design._sideList[canvasCounter - 1]._ColorList[i];



        if (currentcolor == "rgb(0,0,0)")



        {



            currentcolor = "#000000";



        }



        if (isMobile())



        {

            if (document.getElementById("artcolorModal" + currentcolor.replace("#", "").toLowerCase()) != null)

                document.getElementById("artcolorModal" + currentcolor.replace("#", "").toLowerCase()).classList.add("animate");



        } else



        {



            if (document.getElementById("artcolor" + currentcolor.replace("#", "").toLowerCase()) != null)

                document.getElementById("artcolor" + currentcolor.replace("#", "").toLowerCase()).classList.add("animate");



        }



    }









}*/





function selectcolorsT()



{



    var listcircles = document.getElementsByClassName('block');



    for (var i = 0; i < listcircles.length; i++)



    {

        if (listcircles[i].id.indexOf('textcolor') != -1 || listcircles[i].id.indexOf('strokecolor') != -1) {



            listcircles[i].classList.remove("animate");



            listcircles[i].style.border = "1px solid #eee";

        }



    }







    for (var i = 0; i < Order._Product_design_list[position]._design._sideList[canvasCounter - 1]._ColorList.length; i++)



    {



        var currentcolor = Order._Product_design_list[position]._design._sideList[canvasCounter - 1]._ColorList[i];



        if (currentcolor == "rgb(0,0,0)")



        {



            currentcolor = "#000000";



        }



        if (isMobile())



        {



            if (document.getElementById("textcolorModal" + currentcolor.replace("#", "").toLowerCase()) != null)

                document.getElementById("textcolorModal" + currentcolor.replace("#", "").toLowerCase()).classList.add("animate");



            if (document.getElementById("strokecolorModal" + currentcolor.replace("#", "").toLowerCase()) != null)

                document.getElementById("strokecolorModal" + currentcolor.replace("#", "").toLowerCase()).classList.add("animate");



        } else



        {





            if (document.getElementById("textcolor" + currentcolor.replace("#", "").toLowerCase()) != null)

                document.getElementById("textcolor" + currentcolor.replace("#", "").toLowerCase()).classList.add("animate");



            if (document.getElementById("strokecolor" + currentcolor.replace("#", "").toLowerCase()) != null)

                document.getElementById("strokecolor" + currentcolor.replace("#", "").toLowerCase()).classList.add("animate");



        }



    }









}









function selectshirtcolor(element)



{



    var listcircles = document.getElementsByClassName("block");



    for (var i = 0; i < listcircles.length; i++)



    {

        if (listcircles[i].id.indexOf('artcolor') == -1) {

            listcircles[i].classList.remove("animate");



            listcircles[i].style.border = "1px solid #eee";

        }





    }



    element.classList.add("animate");



    element.style.border = "2px solid #31B0D5";



}







function validate_element(element, arraycolors)



{



    if (arraycolors.length > 0)



    {



        for (var i = 0; i < arraycolors.length; i++)



        {







            if (arraycolors[i] === element)



            {



                return true;



            }



        }



        return false;



    } else



    {



        return false;



    }







}





function validate_element_personalize(element, arraycolors)



{



    if (arraycolors.length > 0)



    {



        for (var i = 0; i < arraycolors.length; i++)



        {







            if (arraycolors[i].color === element)



            {



                return true;



            }



        }



        return false;



    } else



    {



        return false;



    }







}







function validate_layer(element, arraycolors)



{



    if (arraycolors.length > 0)



    {



        for (var i = 0; i < arraycolors.length; i++)



        {







            if (arraycolors[i].id.split(".")[0] === element.id.split(".")[0])



            {



                return true;



            }



        }



        return false;



    } else



    {



        return false;



    }







}







//Function to convert hex format to a rgb color



function rgb2hex(rgb)



{



    if (rgb != null)



    {



        value = rgb;



        rgb = rgb.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i);



        if ((rgb && rgb.length === 4))



        {



            return "#" + ("0" + parseInt(rgb[1], 10).toString(16)).slice(-2) + ("0" + parseInt(rgb[2], 10).toString(16)).slice(-2) + ("0" + parseInt(rgb[3], 10).toString(16)).slice(-2);



        } else



        {



            return value;



        }



    } else



    {



        return "";



    }







    //rgb2hex



    //hex2rgb



    /*var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(rgb);



    return result ? {



        r: parseInt(result[1], 16),



        g: parseInt(result[2], 16),



        b: parseInt(result[3], 16)



    } : value;*/



}







function ShowSaveShare()



{



    switch (canvasCounter) {



        case 1:



            front.discardActiveObject();



            savetmpdesign();



            //canvas.setActiveObject(canvas.item(canvas.getObjects().length-1));



            front.renderAll();



            break;



        case 2:



            right.discardActiveObject();



            savetmpdesign();



            //canvas.setActiveObject(canvas.item(canvas.getObjects().length-1));



            right.renderAll();



            break;



        case 3:



            back.discardActiveObject();



            savetmpdesign();



            //canvas.setActiveObject(canvas.item(canvas.getObjects().length-1));



            back.renderAll();



            break;



        default:



            left.discardActiveObject();



            savetmpdesign();



            //canvas.setActiveObject(canvas.item(canvas.getObjects().length-1));



            left.renderAll();



            break;



    }







    var num = front.getObjects().length + right.getObjects().length + back.getObjects().length + left.getObjects().length;



    if (num > 0)



    {



        //initialDesign();     



        document.getElementById('design_name_area_only').style.display = "none";



        document.getElementById('designNameOnly').value = "";



        document.getElementById('SaveShareModalDiv').style.display = "block";



        if (Order._Customer.email != '' && Order._Customer.email != undefined)



        {



            document.getElementById('from_email').value = Order._Customer.email;



        }



        $("#SaveShareModal").modal("show");



    } else



    {



        ShowAlert('savesharealert', 'No design to save and share!', 'danger', 'Save & Share');



    }



}







function ShowYourDesign()



{







    if (typeof(Order._Customer.Id) != 'undefined')



    {



        $("#YourDesignsModal").modal("show");



    } else



    {



        //$("#YourDesignsModalError").modal("show");
        deselectAllCanvases(); 
        CloseModal('SaveShareModal');
        document.getElementById('panellogin').style.display ='block';
        document.getElementById('panelnew').style.display ='block';
        document.getElementById('panelregister').style.display ='none';
        $('#signupModal').modal();



    }



}









function setCanvas(direction)



{







    if (direction == 'next')



    {



        if ($("#frontItem").hasClass('active') && $("#rightItem").hasClass('item'))



        {



            canvasCounter = 2;



            initCenteringGuidelines(right);



        }







        if ($("#rightItem").hasClass('active') && $("#backItem").hasClass('item'))



        {



            canvasCounter = 3;



            initCenteringGuidelines(back);



        }







        if ($("#backItem").hasClass('active') && $("#leftItem").hasClass('item'))



        {



            canvasCounter = 4;



            initCenteringGuidelines(left);



        }







        if ($("#leftItem").hasClass('active') && $("#frontItem").hasClass('item'))



        {



            canvasCounter = 1;



            initCenteringGuidelines(front);



        }



    } else if (direction == 'previous')



    {



        if ($("#frontItem").hasClass('active') && $("#leftItem").hasClass('item'))



        {



            canvasCounter = 4;



            initCenteringGuidelines(left);



        }







        if ($("#leftItem").hasClass('active') && $("#backItem").hasClass('item'))



        {



            canvasCounter = 3;



            initCenteringGuidelines(back);



        }







        if ($("#backItem").hasClass('active') && $("#rightItem").hasClass('item'))



        {



            canvasCounter = 2;



            initCenteringGuidelines(right);



        }







        if ($("#rightItem").hasClass('active') && $("#frontItem").hasClass('item'))



        {



            canvasCounter = 1;



            initCenteringGuidelines(front);



        }



    } else



    {



        canvasCounter = direction;



        switch (direction)



        {



            case 1:





                $("#frontActive").addClass("active");

                $("#frontItem").addClass(" active");



                $("#backItem").removeClass("active");

                $("#backActive").removeClass("active");

                $("#rightItem").removeClass("active");

                $("#rightActive").removeClass("active");

                $("#leftItem").removeClass("active");

                $("#leftActive").removeClass("active");



                initCenteringGuidelines(front);





                break;



            case 2:





                $("#rightActive").addClass("active");

                $("#rightItem").addClass(" active");



                $("#frontItem").removeClass("active");

                $("#frontActive").removeClass("active");

                $("#backItem").removeClass("active");

                $("#backActive").removeClass("active");

                $("#leftItem").removeClass("active");

                $("#leftActive").removeClass("active");



                initCenteringGuidelines(right);

                break;



            case 3:



                $("#backActive").addClass("active");

                $("#backItem").addClass(" active");



                $("#frontItem").removeClass("active");

                $("#frontActive").removeClass("active");

                $("#rightItem").removeClass("active");

                $("#rightActive").removeClass("active");

                $("#leftItem").removeClass("active");

                $("#leftActive").removeClass("active");

                initCenteringGuidelines(back);



                break;



            case 4:



                $("#leftActive").addClass("active");

                $("#leftItem").addClass(" active");



                $("#frontItem").removeClass("active");

                $("#frontActive").removeClass("active");

                $("#rightItem").removeClass("active");

                $("#rightActive").removeClass("active");

                $("#backItem").removeClass("active");

                $("#backActive").removeClass("active");



                initCenteringGuidelines(left);



                break;



            default:







        }



    }



    updateCanvasProperty();







    var editArt = document.getElementById("editArt");



    var newArt = document.getElementById("newArt");



    var fontbtn = document.getElementById("font_btn");



    var fontmenu = document.getElementById("font_menu");



    var textmenu = document.getElementById("text_menu");



    var Art_color = document.getElementById("Artcolor");



    var Text_color = document.getElementById("Textcolor");



    var Text_strokecolor = document.getElementById("Textstrokecolor");



    var texteffecsarea = document.getElementById("texteffecsarea");



    var effect = document.getElementById("effect");









    newArt.style.display = 'block';



    editArt.style.display = 'none';



    fontbtn.style.display = 'none';



    font_menu.style.display = "none";



    textmenu.style.display = 'none';



    document.getElementById('textarea').value = "";



    document.getElementById('textarea2').value = "";



    document.getElementById('sizeText').value = "";



    Art_color.innerHTML = '';



    Text_color.innerHTML = '';



    Text_strokecolor.innerHTML = '';



    document.getElementById("footer_menu").style.display = "block";



    document.getElementById("footer_menu_text").style.display = "none";



    document.getElementById("footer_menu_art").style.display = "none";



}









function setDesignName()



{







    /*if (Order._Product_design_list[position].numshirts() < Order._Product_design_list[position]._Product.Min_Quantity)



    {



        ShowAlert('minimunalert', 'The minimun quantity requiered for this product is 6', 'danger', 'Attencion');



    } 

    else



    {*/



        if (editdesign != null)



        {



            document.getElementById('design_name_area').style.display = "none";



            document.getElementById('product_style_area').style.display = "none";



            document.getElementById('AddKeepDesign').style.display = "none";



            document.getElementById('continuedesign').style.display = "none";



            SaveDesignNameWindow("SaveContinue");



        } else



        {



            document.getElementById('design_name_area').style.display = "block";



            document.getElementById('product_style_area').style.display = "none";



            document.getElementById('AddKeepDesign').style.display = "none";



            document.getElementById('continuedesign').style.display = "none";



            if (typeof Order._Customer.email != 'undefined')



            {



                document.getElementById('designemail').value = Order._Customer.email;



            }



        }



   // }



}









function setDesignNameOnly()



{



    document.getElementById('design_name_area_only').style.display = "block";



    document.getElementById('SaveShareModalDiv').style.display = "none";



}







function SaveDesignNameWindow(value)



{



    switch (value)



    {



        case 'AddKeepDesign':

            

            if (Order._Product_design_list[position].numshirts() < Order._Product_design_list[position]._Product.Min_Quantity)



            {



                ShowAlert('minimunalert', 'The minimun quantity requiered for this product is 6', 'danger', 'Attencion');



            } 

            else



            {



               setDesignName();



            }



            //if (Order._Product_design_list[position]._num_shirts <= 5)



            //{



            //    setDesignName();



            //} 

            //else



            //{



                /*if (Order._Product_design_list[position]._design._sideList[0]._ColorList.length > 8 || Order._Product_design_list[position]._design._sideList[1]._ColorList.length > 8 || Order._Product_design_list[position]._design._sideList[2]._ColorList.length > 8 || Order._Product_design_list[position]._design._sideList[3]._ColorList.length > 8)



                {



                   ShowAlert('There are too many ink colors in your design. Limit: 8-Colors','Color Quantity','danger','Color Quantity Error');



                }



                else



                {*/



                //setDesignName();



                //}



            //}







            break;



        case 'continuedesign':









            if (Order._Product_design_list[position]._status == 'created')



            {



                for (var i = 0; i < Order._Product_design_list[position]._sizeList.length; i++)



                {



                    Order._Product_design_list[position]._sizeList[i]._quantity = 0;



                }



                Order._Product_design_list[position]._num_shirts = 0;



                Order._Product_design_list[position]._price_per_shirt = 0;



                Order._Product_design_list[position]._total = 0;



                buildcart("Cart-Body");



                buildcart('Cart-body-section');



            }



            $('#productPicker').modal('hide');







            break;



        case 'SaveContinue':



            if (editdesign != null)



            {



                Order._Product_design_list[position]._design._design_name = Order._Product_design_list[position]._design._design_name.split("_")[1];



                AddKeepDesign();



            } 



            else



            {







                if (document.getElementById("designName").value != "" && document.getElementById("designemail").value != "" && ValidateEmail(document.getElementById("designemail").value))



                {





                    //console.log("MATCH BETWEEN design_name:" + document.getElementById("designName").value + " and format:" + specialcharapters + " result:"+  document.getElementById("designName").value.match(specialcharapters))

                    if (document.getElementById("designName").value.match(specialcharapters)/*format.test(document.getElementById("designName").value)*/)



                    {







                        ShowAlert('Message15', 'Please enter a Design Name without space or special charapter!', 'danger', 'Attencion!');



                    } else



                    {







                        var exists = false;







                        if (Order._Product_design_list.length > 1)



                        {



                            for (var i = 0; i < Order._Product_design_list.length - 1; i++)



                            {



                                var design_name = Order._Product_design_list[i]._design._design_name.split("_");



                                if (design_name[1] == document.getElementById("designName").value)



                                {



                                    exists = true;



                                }



                            }



                        }









                        if (exists)



                        {



                            ShowConfirmAlert('Message14', 'You have a previous design saved with this name. Do you want override this design!', 'warning', 'Attencion!');



                        } else



                        {



                            Order._Product_design_list[position]._design._design_name = document.getElementById('designName').value;



                            Order._Customer.email = document.getElementById("designemail").value;



                            document.getElementById('design_name_area').style.display = "none";



                            AddKeepDesign();



                        }



                    }







                } else



                {







                    if (document.getElementById("designName").value == "" && document.getElementById("designemail").value == "")



                    {



                        ShowAlert('Message13', 'Please enter a Design Name and email to continue!', 'danger', 'Attencion!');



                    } else if (document.getElementById("designName").value == "")



                    {



                        ShowAlert('Message11', 'Please enter a Design Name to continue!', 'danger', 'Attencion!');



                    } else



                    {







                        ShowAlert('Message12', 'The email format is incorrect. Please enter a valid email address to continue!', 'danger', 'Attencion!');



                    }



                }



            }









            break;



        case 'Check-out':



            //Order._Product_design_list[position]._design._design_name = document.getElementById('designName').value;



            Checkout();



            break;



        case 'sendemail':







            if (document.getElementById("designnameshare").value != "" && document.getElementById('to_email').value != "" && document.getElementById('from_email').value != "" && document.getElementById('message').value != "")



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







                if (emaildone && ValidateEmail(document.getElementById('from_email').value))



                {







                    var exists = false;







                    if (Order._Product_design_list.length > 1)



                    {



                        for (var i = 0; i < Order._Product_design_list.length - 1; i++)



                        {



                            var design_name = Order._Product_design_list[i]._design._design_name.split("_");



                            if (design_name[1] == document.getElementById("designnameshare").value)



                            {



                                exists = true;



                            }



                        }



                    }









                    if (exists)



                    {



                        ShowConfirmAlert('Message14', 'You have a previous design saved with this name. Do you want override this design!', 'warning', 'Attencion!');



                    } else



                    {



                        /*if (document.getElementById("designnameshare").value.split(" ").length > 1)



                        {







                            ShowAlert('Message15', 'Please enter a Design Name without space!', 'danger', 'Attencion!');



                        }*/
                        if (document.getElementById("designnameshare").value.match(specialcharapters)/*format.test(document.getElementById("designName").value)*/)



                    {







                        ShowAlert('Message15', 'Please enter a Design Name without space or special charapter!', 'danger', 'Attencion!');



                    }  else



                        {



                            Order._Product_design_list[position]._design._design_name = document.getElementById('designnameshare').value;



                            Order._Customer.email = document.getElementById('from_email').value;



                            saveDesign("sendemail");



                        }



                    }



                } else



                {



                    ShowAlert('emailfotmat', 'The email address entered is invalid!', 'danger', 'Email format error');



                }







            } else



            {



                ShowAlert('fillform', 'You must fill all form(s)!', 'danger', 'Attencion!!');



            }







            break;



        case 'save':



            if (Order._Customer.Id != null)



            {



                if (editdesign != null)



                {



                    var designname = editdesign.split("_")[1];



                    document.getElementById("designNameOnly").value = designname;



                    SaveDesignNameWindow('SaveContinueOnly');



                } else if (edit != null)



                {



                    var designname = edit.split("_")[1];



                    document.getElementById("designNameOnly").value = designname;



                    SaveDesignNameWindow('SaveContinueOnly');



                } else



                {



                    setDesignNameOnly();



                }



            } else



            {


            	deselectAllCanvases(); 
                CloseModal('SaveShareModal');
                document.getElementById('panellogin').style.display ='block';
                document.getElementById('panelnew').style.display ='block';
                document.getElementById('panelregister').style.display ='none';
            	$('#signupModal').modal();
                //ShowAlert('savemessage', 'Create your account with us and enjoy the benefits of being a member', 'danger', 'You do not have permission to save the design.');



            }



            break;



        case 'SaveContinueOnly':



            if (document.getElementById("designNameOnly").value != "")



            {



                var exists = false;



                if (Order._Product_design_list.length > 1)



                {



                    for (var i = 0; i < position; i++)



                    {



                        var design_name = Order._Product_design_list[i]._design._design_name.split("_");



                        if (design_name[1] == document.getElementById("designNameOnly").value)



                        {



                            exists = true;



                        }



                    }



                }







                if (exists)



                {



                    ShowConfirmAlert('Message15', 'You have a previous design saved with this name. Do you want override this design!', 'warning', 'Attencion!');



                } else



                {







                    Order._Product_design_list[position]._design._design_name = document.getElementById('designNameOnly').value;



                    document.getElementById('designNameOnly').value = "";



                    saveOny = true;



                    saveDesign("saveOnly");



                }



            } else



            {



                ShowAlert('Message11', 'Please enter a Design Name to continue!', 'danger', 'Attencion!');



            }







            break;



        default:



            KeepDesign();



    }



}







function ValidateEmail(inputText)



{



    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;



    if (inputText.match(mailformat))



    {



        //document.form1.text1.focus();



        return true;



    } else



    {



        //alert("You have entered an invalid email address!");



        //document.form1.text1.focus();



        return false;



    }



}







function ValidateEmail2(element)



{



    var myRe;



    myRe = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;



    var myArray = myRe.exec(element);



    if (element != myArray)



    {



        return false;



    } else



    {



        return true;



    }



}









function AddKeepDesign()



{



    addingToCart = true;



    cleanInputQuantity();



    saveDesign("AddKeepDesign");



}







function KeepDesign()



{



    $('#productPicker').modal('hide');



    document.getElementById('AddKeepDesign').style.display = 'inline-block';



    document.getElementById('continuedesign').style.display = "inline-block";



    document.getElementById('KeepDesign').style.display = 'none';



    ResetDesignStudio();



    createProductDesign();



}







function ResetDesignStudio()



{



    front.clear();



    savefrontcanvastmp();



    right.clear();



    saverightcanvastmp();



    back.clear();



    savebackcanvastmp();



    left.clear();



    saveleftcanvastmp();



    idproduct = 593;



    LoadInitialProduct();



    document.getElementById('itemPrice').innerHTML = "$0.00";



    document.getElementById('numOfShirtsLabel').innerHTML = " <b>Quantity:</b> <span style='color: #5cb85c; font-family: Arial;'> 0 item(s)</span>";



    document.getElementById('itemTotal').innerHTML = "$0.00";



    document.getElementById('KeepDesign').style.display = "none";



    document.getElementById('designemail').value = "";



    document.getElementById('designName').value = "";









    /*if (device == "mobile" && Orientation === "PORTRAIT" || device == "mobile" && Orientation === 0)



    {



      $('.nav-tabs a[href="#productSection"]').tab('show');   



    }*/



}









function cleanInputQuantity()



{



    /*for (var i = 0; i < Order._Product_design_list[position]._sizeList.length; i++) 



    {



      document.getElementById(Order._Product_design_list[position]._sizeList[i]._size_name).value = "";   



    }*/



    document.getElementById('AddKeepDesign').style.display = 'none';



    document.getElementById('KeepDesign').style.display = 'inline';



    document.getElementById('finalcheckout').style.display = 'inline';







}









function Checkout()



{



    if (Order._Product_design_list.length == 0)



    {



        ShowAlert('getcartalert', 'There are currently no items in your cart', 'danger', 'Cart');



    } else if (Order._Product_design_list.length == 1)



    {



        if (Order._Product_design_list[position]._status == "In Cart")



        {



            var form = document.getElementById("checkout_form");



            form.submit();



        } else



        {



            ShowAlert('getcartalert', 'There are currently no items in your cart', 'danger', 'Cart');



        }



    } else



    {



        if (Order._Product_design_list[Order._Product_design_list.length - 2]._status == "In Cart")



        {



            var form = document.getElementById("checkout_form");



            form.submit();



        }



    }







}









function updateOrderSession()



{



    $.ajax({



        cache: false,

        type: "POST",



        url: "https://www.vividcustoms.com/sessionInfo.php",



        data: {



            value: "Order",



            operation: "updateLastProductDesignStatus",



        },



        beforeSend: function() {







        },



        success: function(data)



        {







        },



        error: function(error)



        {



            console.log("error in method updateOrderSession():");



            console.log(error);



        }



    });



}







function submitForm()



{



    $.ajax({



        cache: false,

        type: "POST",



        url: "https://www.vividcustoms.com/sessionInfo.php",



        data: {



            value: "Order",



            operation: "updateLastProductDesignStatus",



        },



        beforeSend: function() {







        },



        success: function(data)



        {



            var form = document.getElementById("checkout_form");



            form.submit();



        },



        error: function(error)



        {



            console.log("error in method submitForm():");



            console.log(error);



        }



    });



}







function saveDesign(from)



{



    if (textAdded || clipArtAdded || imageUploaded || colorChanged || addingToCart || resized || Checked || productchanged || saveOnly)



    {







        //$('.modal').modal('hide'); // closes all active pop ups.



        //$('.modal-backdrop').remove(); // removes the grey overlay.







        if (typeof Order._Customer.Username == 'undefined' || Order._Customer.Username == '' && Order._Customer.email != '')



        {



            user_email = Order._Customer.email;



        } else



        {



            user_email = Order._Customer.Username + "/" + Order._Customer.email;



        }



        Order.edit = '';







        if (editdesign != null)



        {



            Order.edit = editdesign;



        }



        if (edit != null)



        {



            Order.edit = edit;



        }













        front.discardActiveObject();

        right.discardActiveObject();

        back.discardActiveObject();

        left.discardActiveObject();



        textAdded = clipArtAdded = imageUploaded = colorChanged = addingToCart = resized = Checked = productchanged = saveOnly = false;



        //editdesign = null;



        var jsonfront = [];



        var jsonfront = JSON.parse(JSON.stringify(front));



        jsonfront.objects.push({



            width_canvas: front.width,



            height_canvas: front.height,



            width_div: document.getElementById('frontCanvasShirt').style.width.replace("px", ""),



            height_div: document.getElementById('frontCanvasShirt').style.height.replace("px", ""),



            left: document.getElementById('frontcanvas-wrapper').style.left.replace("px", ""),



            top: document.getElementById('frontcanvas-wrapper').style.top.replace("px", ""),



            idproduct: idproduct,



            device: device,



            user_email: user_email,



            personalize:   Order._Product_design_list[position]._personalize,



            personalizetype:   Order._Product_design_list[position]._personalizetype,



        });



        Order._Product_design_list[position]._design._sideList[0]._json = JSON.stringify(jsonfront);



        if (front.width != 0)



        {



            Order._Product_design_list[position]._design._sideList[0]._toDataURL = front.toDataURL('image/png');



            Order._Product_design_list[position]._design._sideList[0]._svg = front.toSVG();



        }


        if (front.getObjects().length > 0)
        {
            Order._Product_design_list[position]._design._sideList[0]._isempty = false;            
        }
        else
        {
            Order._Product_design_list[position]._design._sideList[0]._isempty = true;
        }



        Order._Product_design_list[position]._design._sideList[0]._width_canvas = front.width;



        Order._Product_design_list[position]._design._sideList[0]._height_canvas = front.height;



        Order._Product_design_list[position]._design._sideList[0]._width_div = document.getElementById('frontCanvasShirt').style.width.replace("px", "");



        Order._Product_design_list[position]._design._sideList[0]._height_div = document.getElementById('frontCanvasShirt').style.height.replace("px", "");



        Order._Product_design_list[position]._design._sideList[0]._border_color_div = 0;



        Order._Product_design_list[position]._design._sideList[0]._left = document.getElementById('frontcanvas-wrapper').style.left.replace("px", "");



        Order._Product_design_list[position]._design._sideList[0]._top = document.getElementById('frontcanvas-wrapper').style.top.replace("px", "");



        Order._Product_design_list[position]._design._sideList[0].border_color_canvas = 0;



        Order._Product_design_list[position]._design._sideList[0]._design_image = "";



        Order._Product_design_list[position]._design._sideList[0]._design_product_image = "";

        newurl = document.getElementById('frontCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('frontCanvasShirt').style.backgroundImage.replace("url", "").length - 2);
        Order._Product_design_list[position]._design._sideList[0]._product_image = newurl.replace("https://www.vividcustoms.com/","");
        //Order._Product_design_list[position]._design._sideList[0]._product_image = document.getElementById('frontCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('frontCanvasShirt').style.backgroundImage.replace("url", "").length - 2);







        var jsonright = [];



        var jsonright = JSON.parse(JSON.stringify(right));



        jsonright.objects.push({



            width_canvas: right.width,



            height_canvas: right.height,



            width_div: document.getElementById('rightCanvasShirt').style.width.replace("px", ""),



            height_div: document.getElementById('rightCanvasShirt').style.height.replace("px", ""),



            left: document.getElementById('rightcanvas-wrapper').style.left.replace("px", ""),



            top: document.getElementById('rightcanvas-wrapper').style.top.replace("px", ""),



            idproduct: idproduct,



            device: device,



            user_email: user_email,



            personalize:   Order._Product_design_list[position]._personalize,



            personalizetype:   Order._Product_design_list[position]._personalizetype,







        });



        Order._Product_design_list[position]._design._sideList[1]._json = JSON.stringify(jsonright);



        if (right.width != 0)



        {



            Order._Product_design_list[position]._design._sideList[1]._toDataURL = right.toDataURL('image/png');



            Order._Product_design_list[position]._design._sideList[1]._svg = right.toSVG();



        }

        if (right.getObjects().length > 0)
        {  
            Order._Product_design_list[position]._design._sideList[1]._isempty = false;            
        }
        else
        {
            Order._Product_design_list[position]._design._sideList[1]._isempty = true;
        }



        Order._Product_design_list[position]._design._sideList[1]._width_canvas = right.width;



        Order._Product_design_list[position]._design._sideList[1]._height_canvas = right.height;



        Order._Product_design_list[position]._design._sideList[1]._width_div = document.getElementById('rightCanvasShirt').style.width.replace("px", "");



        Order._Product_design_list[position]._design._sideList[1]._height_div = document.getElementById('rightCanvasShirt').style.height.replace("px", "");



        Order._Product_design_list[position]._design._sideList[1]._border_color_div = 0;



        Order._Product_design_list[position]._design._sideList[1]._left = document.getElementById('rightcanvas-wrapper').style.left.replace("px", "");



        Order._Product_design_list[position]._design._sideList[1]._top = document.getElementById('rightcanvas-wrapper').style.top.replace("px", "");



        Order._Product_design_list[position]._design._sideList[1]._border_color_canvas = 0;



        Order._Product_design_list[position]._design._sideList[1]._design_image = "";



        Order._Product_design_list[position]._design._sideList[1]._design_product_image = "";


        newurl = document.getElementById('rightCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('rightCanvasShirt').style.backgroundImage.replace("url", "").length - 2);
        Order._Product_design_list[position]._design._sideList[1]._product_image = newurl.replace("https://www.vividcustoms.com/","");
        //Order._Product_design_list[position]._design._sideList[1]._product_image = document.getElementById('rightCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('rightCanvasShirt').style.backgroundImage.replace("url", "").length - 2);



        var jsonback = [];



        var jsonback = JSON.parse(JSON.stringify(back));



        jsonback.objects.push({



            width_canvas: back.width,



            height_canvas: back.height,



            width_div: document.getElementById('backCanvasShirt').style.width.replace("px", ""),



            height_div: document.getElementById('backCanvasShirt').style.height.replace("px", ""),



            left: document.getElementById('backcanvas-wrapper').style.left.replace("px", ""),



            top: document.getElementById('backcanvas-wrapper').style.top.replace("px", ""),



            idproduct: idproduct,



            device: device,



            user_email: user_email,



            personalize:   Order._Product_design_list[position]._personalize,



            personalizetype:   Order._Product_design_list[position]._personalizetype,



        });



        Order._Product_design_list[position]._design._sideList[2]._json = JSON.stringify(jsonback);



        if (back.width != 0)



        {



            Order._Product_design_list[position]._design._sideList[2]._toDataURL = back.toDataURL('image/png');



            Order._Product_design_list[position]._design._sideList[2]._svg = back.toSVG();



        }

        if (back.getObjects().length > 0)
        {
            Order._Product_design_list[position]._design._sideList[2]._isempty = false;            
        }
        else
        {
            Order._Product_design_list[position]._design._sideList[2]._isempty = true;            
        }



        Order._Product_design_list[position]._design._sideList[2]._width_canvas = back.width;



        Order._Product_design_list[position]._design._sideList[2]._height_canvas = back.height;



        Order._Product_design_list[position]._design._sideList[2]._width_div = document.getElementById('backCanvasShirt').style.width.replace("px", "");



        Order._Product_design_list[position]._design._sideList[2]._height_div = document.getElementById('backCanvasShirt').style.height.replace("px", "");



        Order._Product_design_list[position]._design._sideList[2]._border_color_div = 0;



        Order._Product_design_list[position]._design._sideList[2]._left = document.getElementById('backcanvas-wrapper').style.left.replace("px", "");



        Order._Product_design_list[position]._design._sideList[2]._top = document.getElementById('backcanvas-wrapper').style.top.replace("px", "");



        Order._Product_design_list[position]._design._sideList[2]._border_color_canvas = 0;



        Order._Product_design_list[position]._design._sideList[2]._design_image = "";



        Order._Product_design_list[position]._design._sideList[2]._design_product_image = "";


        newurl = document.getElementById('backCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('backCanvasShirt').style.backgroundImage.replace("url", "").length - 2);
        Order._Product_design_list[position]._design._sideList[2]._product_image = newurl.replace("https://www.vividcustoms.com/","");
        //Order._Product_design_list[position]._design._sideList[2]._product_image = document.getElementById('backCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('backCanvasShirt').style.backgroundImage.replace("url", "").length - 2);



        var jsonleft = [];



        var jsonleft = JSON.parse(JSON.stringify(left));



        jsonleft.objects.push({



            width_canvas: left.width,



            height_canvas: left.height,



            width_div: document.getElementById('leftCanvasShirt').style.width.replace("px", ""),



            height_div: document.getElementById('leftCanvasShirt').style.height.replace("px", ""),



            left: document.getElementById('leftcanvas-wrapper').style.left.replace("px", ""),



            top: document.getElementById('leftcanvas-wrapper').style.top.replace("px", ""),



            idproduct: idproduct,



            device: device,



            user_email: user_email,



            personalize:   Order._Product_design_list[position]._personalize,



            personalizetype:   Order._Product_design_list[position]._personalizetype,



        });



        Order._Product_design_list[position]._design._sideList[3]._json = JSON.stringify(jsonleft);







        if (left.width != 0)



        {



            Order._Product_design_list[position]._design._sideList[3]._toDataURL = left.toDataURL('image/png');



            Order._Product_design_list[position]._design._sideList[3]._svg = left.toSVG();



        }

        if (left.getObjects().length > 0)
        { 
            Order._Product_design_list[position]._design._sideList[3]._isempty = false;            
        }
        else
        { 
            Order._Product_design_list[position]._design._sideList[3]._isempty = true;            
        }



        Order._Product_design_list[position]._design._sideList[3]._width_canvas = left.width;



        Order._Product_design_list[position]._design._sideList[3]._height_canvas = left.height;



        Order._Product_design_list[position]._design._sideList[3]._width_div = document.getElementById('leftCanvasShirt').style.width.replace("px", "");



        Order._Product_design_list[position]._design._sideList[3]._height_div = document.getElementById('leftCanvasShirt').style.height.replace("px", "");



        Order._Product_design_list[position]._design._sideList[3]._border_color_div = 0;



        Order._Product_design_list[position]._design._sideList[3]._left = document.getElementById('leftcanvas-wrapper').style.left.replace("px", "");



        Order._Product_design_list[position]._design._sideList[3]._top = document.getElementById('leftcanvas-wrapper').style.top.replace("px", "");



        Order._Product_design_list[position]._design._sideList[3]._border_color_canvas = 0;



        Order._Product_design_list[position]._design._sideList[3]._design_image = "";



        Order._Product_design_list[position]._design._sideList[3]._design_product_image = "";



        newurl = document.getElementById('leftCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('leftCanvasShirt').style.backgroundImage.replace("url", "").length - 2);
        Order._Product_design_list[position]._design._sideList[3]._product_image = newurl.replace("https://www.vividcustoms.com/","");
        //Order._Product_design_list[position]._design._sideList[3]._product_image = document.getElementById('leftCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('leftCanvasShirt').style.backgroundImage.replace("url", "").length - 2);



        Order.Total();



        var jsonOrder = JSON.stringify(Order);







        $.ajax({



            cache: false,

            type: "POST",



            url: "https://www.vividcustoms.com/savedesign.php",



            data: {



                Order: jsonOrder,



                position: position,



            },



            beforeSend: function() {



                if (from == "saveOnly")



                {



                    document.getElementById("loaderOnly").style.display = "block";



                    document.getElementById('design_name_area_only').style.display = "none";



                } else if (from == "sendemail")



                {



                    document.getElementById("loaderEmail").style.display = "block";



                } else



                {



                    document.getElementById("loader").style.display = "block";



                    document.getElementById('KeepDesign').style.display = "none";



                    document.getElementById('finalcheckout').style.display = "none";



                }







            },



            success: function(data)



            {







                var savedOrder = JSON.parse(data);



                



                Order._Product_design_list[position]._design._sideList[0]._design_product_image = savedOrder._Product_design_list[position]._design._sideList[0]._design_product_image;



                Order._Product_design_list[position]._design._sideList[1]._design_product_image = savedOrder._Product_design_list[position]._design._sideList[1]._design_product_image;



                Order._Product_design_list[position]._design._sideList[2]._design_product_image = savedOrder._Product_design_list[position]._design._sideList[2]._design_product_image;



                Order._Product_design_list[position]._design._sideList[3]._design_product_image = savedOrder._Product_design_list[position]._design._sideList[3]._design_product_image;







                Order._Product_design_list[position]._design._sideList[0]._design_image = savedOrder._Product_design_list[position]._design._sideList[0]._design_product_image;



                Order._Product_design_list[position]._design._sideList[1]._design_image = savedOrder._Product_design_list[position]._design._sideList[1]._design_product_image;



                Order._Product_design_list[position]._design._sideList[2]._design_image = savedOrder._Product_design_list[position]._design._sideList[2]._design_product_image;



                Order._Product_design_list[position]._design._sideList[3]._design_image = savedOrder._Product_design_list[position]._design._sideList[3]._design_product_image;



                Order._Product_design_list[position]._design._design_name = savedOrder._Product_design_list[position]._design._design_name;



                Order._Customer.Username = savedOrder._Customer.Username;







                var previousdesigns = document.getElementById("mydesings");



                var option = document.createElement("option");



                option.id = Order._Product_design_list[position]._design._design_name;



                option.value = Order._Product_design_list[position]._design._design_name;



                var design_name = Order._Product_design_list[position]._design._design_name.split("_");



                option.innerHTML = design_name[1];



                previousdesigns.appendChild(option);



                if (from == "sendemail")



                {



                    Order._Product_design_list[position]._status = "saved";



                    send();



                    document.getElementById("loaderEmail").style.display = "none";







                } else if (from == "saveOnly")



                {



                    Order._Product_design_list[position]._status = "saved";



                    document.getElementById('loaderOnly').style.display = "none";



                    document.getElementById('SaveShareModalDiv').style.display = "block";



                    CloseModal('SaveShareModal');

                    ShowAlert('saveonlyalert', 'Your design was saved successfully!', 'success', 'Save');



                } else if (from == "AddKeepDesign")



                {



                    Order._Product_design_list[position]._status = "In Cart";



                    loadCart("Cart-Body");



                    loadCart('Cart-body-section');



                    updateOrderSession();



                    document.getElementById("loader").style.display = "none";



                    document.getElementById("product_style_area").style.display = "none";



                    document.getElementById('cart_area').style.display = "block";



                    document.getElementById("KeepDesign").style.display = "inline";



                    document.getElementById("finalcheckout").style.display = "inline";







                } else



                {



                    if (Order._Product_design_list[position]._Product != null)



                    {



                        Order._Product_design_list[position]._status = "In Cart";



                    }



                    submitForm();



                }



            },



            error: function(error)



            {



                console.log("error in method saveDesign():");



                console.log(error);



            }



        });



    } else



    {



        if (from == "sendemail")



        {



            send();



        }



    }



}







function send()



{



    $.ajax({



        cache: false,

        type: "POST",



        url: "https://www.vividcustoms.com/email.php",



        data: {



            frontShirtURL: "",

            frontImageURL: Order._Product_design_list[position]._design._sideList[0]._design_image,

            frontdesignempty: Order._Product_design_list[position]._design._sideList[0]._isempty,

            rightShirtURL: "",

            rightImageURL: Order._Product_design_list[position]._design._sideList[1]._design_image,

            rightdesignempty: Order._Product_design_list[position]._design._sideList[1]._isempty,

            backShirtURL: "",

            backImageURL: Order._Product_design_list[position]._design._sideList[2]._design_image,

            backdesignempty: Order._Product_design_list[position]._design._sideList[2]._isempty,

            leftShirtURL: "",

            leftImageURL: Order._Product_design_list[position]._design._sideList[3]._design_image,

            leftdesignempty: Order._Product_design_list[position]._design._sideList[3]._isempty,

            designURL: Order._Product_design_list[position]._design._design_name,

            to_email: document.getElementById("to_email").value,

            from_email: document.getElementById("from_email").value,

            designnameshare: document.getElementById("designnameshare").value,

            message: document.getElementById("message").value.replace(/\n\r?/g, '<br />'),

            idproduct: Order._Product_design_list[position]._Product.Id,

            device: device,



        },



        beforeSend: function() {







        },



        success: function(data)



        {



            //ShowAlert('emailmessage', 'The email was sent successfully!', 'success', 'Email Sended');

            ShowAlertClosable("emailmessage");



            document.getElementById('priceSection').style.display = 'none';



            document.getElementById("to_email").value = "";



            document.getElementById("from_email").value = "";



            document.getElementById("message").value = "";



            document.getElementById("designnameshare").value = "";



        },



        error: function(error)



        {



            ShowAlert('emailerrormessage', 'Error sending the email!', 'danger', 'E-mail Sent Error');



            console.log("error in method send():");



            console.log(error);



        }



    });



}







function Scan()



{



    if (isMobile())



    {



        var clipart = document.getElementById('searchclipartModal');



    } else



    {



        var clipart = document.getElementById('searchclipart');



    }







    var step = 3;



    if (viewporttype == "xs" || viewporttype == "sm")



    {



        step = 2;



    } else



    {



        step = 3;



    }







    var xhttp = new XMLHttpRequest();



    xhttp.onreadystatechange = function()



    {



        if (this.readyState == 4 && this.status == 200)



        {



            if (isMobile())



            {



                document.getElementById('clipArtTableModal').style.display = "none";



                document.getElementById('clipArtTable2Modal').innerHTML = this.responseText;



                document.getElementById('clipArtTable2Modal').style.display = "block";



            } else



            {



                document.getElementById('clipArtTable').style.display = "none";



                document.getElementById('clipArtTable2').innerHTML = this.responseText;



                document.getElementById('clipArtTable2').style.display = "block";



            }







        }



    };



    xhttp.open("GET", "https://www.vividcustoms.com/scan.php?clipart=" + clipart.value + "&viewporttype=" + viewporttype + "&step=" + step, true);



    xhttp.send();



}







function ScanTemplate()



{



    if (isMobile())



    {



        var template = document.getElementById('searchtemplateModal');



    } else



    {



        var template = document.getElementById('searchtemplate');



    }







    var step = 2;



    var xhttp = new XMLHttpRequest();



    xhttp.onreadystatechange = function()



    {



        if (this.readyState == 4 && this.status == 200)



        {



            if (isMobile())



            {



                document.getElementById('templateTableModal').style.display = "none";



                document.getElementById('templateTable2Modal').innerHTML = "";



                document.getElementById('templateTable2Modal').innerHTML = this.responseText;



                document.getElementById('templateTable2Modal').style.display = "block";



            } else



            {



                document.getElementById('templateTable').style.display = "none";



                document.getElementById('templateTable2').innerHTML = "";



                document.getElementById('templateTable2').innerHTML = this.responseText;



                document.getElementById('templateTable2').style.display = "block";



            }







        }



    };



    xhttp.open("GET", "https://www.vividcustoms.com/scan.php?template=" + template.value + "&viewporttype=" + viewporttype + "&step=" + step, true);



    xhttp.send();



}




function ShowAlertNormal(id) {
   $('#'+id).fadeIn(1000);
   setTimeout(function() { 
       $('#'+id).fadeOut(1000); 
   }, 2000);
}



function ShowAlertClosable(id) {
   $('#'+id).fadeIn(1000);   
}



function ShowAlert(id, message, type, title)



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







function ShowConfirmAlert(id, message, type, title)



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



        Order._Product_design_list[position]._design._design_name = document.getElementById('designName').value;



        Order._Customer.email = document.getElementById("designemail").value;



        document.getElementById('design_name_area').style.display = "none";



        AddKeepDesign();



    } else



    {



        Order._Product_design_list[position]._design._design_name = document.getElementById('designNameOnly').value;



        document.getElementById('designNameOnly').value = "";



        saveOny = true;



        saveDesign("saveOnly");



    }



}



function toDataURL(url, callback) {

  var xhr = new XMLHttpRequest();

  xhr.onload = function() {

    var reader = new FileReader();

    reader.onloadend = function() {

      callback(reader.result);

    }

    reader.readAsDataURL(xhr.response);

  };

  xhr.open('GET', url);

  xhr.responseType = 'blob';

  xhr.send();

}









function ShowAddImg(element, colorlist, consecutive)



{

   

    var leftvalue = 0;



    var topvalue = 0;



    var imgSrc = element;



    var ext = imgSrc.split('.').pop();



    



    if (ext != "png" && ext != "PNG" && ext != "jpg" && ext != "JPG" && ext != "jpeg" && ext != "JPEG" && ext != "gif" && ext != "GIF" && ext != "tif" && ext != "TIF" && ext != "bmp" && ext != "BMP") 

    {

        

            imgSrc = element.replace("."+ext, consecutive) + ".png";



              fabric.Image.fromURL(imgSrc, function(img) {



                    switch (canvasCounter) {



                        case 1:



                            leftvalue = front.width / 2;



                            topvalue = front.height / 2;







                            break;



                        case 2:



                            leftvalue = right.width / 2;



                            topvalue = right.height / 2;







                            break;



                        case 3:



                            leftvalue = back.width / 2;



                            topvalue = back.height / 2;







                            break;



                        default:



                            leftvalue = left.width / 2;



                            topvalue = left.height / 2;







                    }



                    img.set({



                        id: "Uploaded" + objId,



                        left: leftvalue,



                        top: topvalue,



                        scaleX: 1,



                        scaleY: 1,



                        width: img.width,



                        height: img.height,



                        originX: 'center',



                        originY: 'center',



                        hasRotatingPoint: true,



                        lockUniScaling: true,



                        snapAngle: 45,



                        snapThreshold: 45,



                        centeredRotation: true,



                        padding: 0,



                        colorlist: colorlist



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



                                icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            bl: {



                                icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            br: {



                                icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            ml: {



                                icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            mr: {



                                icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            mb: {



                                icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            mt: {



                                icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            tl: {

                                icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                            },



                        }, function()



                        {



                            front.renderAll();



                            right.renderAll();



                            back.renderAll();



                            left.renderAll();



                        });



                     //var filter = new fabric.Image.filters.RemoveWhite({

                     //       threshold: 60,

                     //       distance: 150

                     //   });



                     //   img.filters.push(filter);

                     //img.applyFilters(front.renderAll.bind(front));

                     //img.applyFilters(right.renderAll.bind(right));

                     //img.applyFilters(back.renderAll.bind(back));

                     //img.applyFilters(left.renderAll.bind(left));



                     //img.filters = [];

                     //img.applyFilters(front.renderAll.bind(front));

                     //img.applyFilters(right.renderAll.bind(right));

                     //img.applyFilters(back.renderAll.bind(back));

                     //img.applyFilters(left.renderAll.bind(left));







                    var BoundingRect = {

                        left: img.left,

                        top: img.top,

                        width: img.width,

                        height: img.height

                    };



                    img.setOptions({

                        BoundingRect: BoundingRect

                    });



                    switch (canvasCounter) {



                        case 1:



                            front.add(img);







                            break;



                        case 2:



                            right.add(img);



                            break;



                        case 3:



                            back.add(img);



                            break;



                        default:



                            left.add(img);



                    }



                });



    }

    else 

    {

            var imgupload = document.getElementsByClassName("uploadpreview")[document.getElementsByClassName("uploadpreview").length-1];

            imgSrc = element.replace("."+ext, consecutive) + ".png";

            toDataURL(imgSrc, function(dataUrl) 

            {   



                 switch (canvasCounter) {



                case 1:



                    leftvalue = front.width / 2;



                    topvalue = front.height / 2;







                    break;



                case 2:



                    leftvalue = right.width / 2;



                    topvalue = right.height / 2;







                    break;



                case 3:



                    leftvalue = back.width / 2;



                    topvalue = back.height / 2;







                    break;



                default:



                    leftvalue = left.width / 2;



                    topvalue = left.height / 2;







            }





              var img = new fabric.Image(imgupload, {



                     id: "Uploaded" + objId,



                    left: leftvalue,



                    top: topvalue,



                    scaleX: 1,



                    scaleY: 1,



                    //width: img.width,



                    //height: img.height,



                    originX: 'center',



                    originY: 'center',



                    hasRotatingPoint: true,



                    lockUniScaling: true,



                    snapAngle: 45,



                    snapThreshold: 45,



                    centeredRotation: true,



                    padding: 0,



                    colorlist: colorlist



                }).scaleToWidth(100);







            var BoundingRect = {

                left: img.left,

                top: img.top,

                width: img.width,

                height: img.height

            };



            img.setOptions({

                BoundingRect: BoundingRect

            });







               switch (canvasCounter) {



                case 1:



                    front.add(img);







                    break;



                case 2:



                    right.add(img);



                    break;



                case 3:



                    back.add(img);



                    break;



                default:



                    left.add(img);



            }





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



                        icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    bl: {



                        icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    br: {



                        icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    ml: {



                        icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    mr: {



                        icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    mb: {



                        icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    mt: {



                        icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    tl: {

                        icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                    },



                }, function()



                {



                    front.renderAll();



                    right.renderAll();



                    back.renderAll();



                    left.renderAll();



                });



            })



          



            /*  fabric.Image.fromURL(imgSrc, function(img) {



            switch (canvasCounter) {



                case 1:



                    leftvalue = front.width / 2;



                    topvalue = front.height / 2;







                    break;



                case 2:



                    leftvalue = right.width / 2;



                    topvalue = right.height / 2;







                    break;



                case 3:



                    leftvalue = back.width / 2;



                    topvalue = back.height / 2;







                    break;



                default:



                    leftvalue = left.width / 2;



                    topvalue = left.height / 2;







            }



            img.set({



                id: "Uploaded" + objId,



                left: leftvalue,



                top: topvalue,



                scaleX: 1,



                scaleY: 1,



                width: img.width,



                height: img.height,



                originX: 'center',



                originY: 'center',



                hasRotatingPoint: true,



                lockUniScaling: true,



                snapAngle: 45,



                snapThreshold: 45,



                centeredRotation: true,



                padding: 0,



                colorlist: colorlist



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



                        icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    bl: {



                        icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    br: {



                        icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    ml: {



                        icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    mr: {



                        icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    mb: {



                        icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    mt: {



                        icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    tl: {

                        icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                    },



                }, function()



                {



                    front.renderAll();



                    right.renderAll();



                    back.renderAll();



                    left.renderAll();



                });



             //var filter = new fabric.Image.filters.RemoveWhite({

             //       threshold: 60,

             //       distance: 150

             //   });



             //   img.filters.push(filter);

             //img.applyFilters(front.renderAll.bind(front));

             //img.applyFilters(right.renderAll.bind(right));

             //img.applyFilters(back.renderAll.bind(back));

             //img.applyFilters(left.renderAll.bind(left));



             //img.filters = [];

             //img.applyFilters(front.renderAll.bind(front));

             //img.applyFilters(right.renderAll.bind(right));

             //img.applyFilters(back.renderAll.bind(back));

             //img.applyFilters(left.renderAll.bind(left));







            var BoundingRect = {

                left: img.left,

                top: img.top,

                width: img.width,

                height: img.height

            };



            img.setOptions({

                BoundingRect: BoundingRect

            });



            switch (canvasCounter) {



                case 1:



                    front.add(img);







                    break;



                case 2:



                    right.add(img);



                    break;



                case 3:



                    back.add(img);



                    break;



                default:



                    left.add(img);



            }



        });*/

    }







  



    clipArtAdded = true;



    //unselectall('ShowAddImg');



    savetmpdesign();



}




function uploadImage()
{

    var preview = document.createElement('img');

        preview.id= objId;

        preview.className = "uploadpreview";

        objId++;

    //if (isMobile())
    //{
        var fileModal = document.getElementById('fileModal').files[0]; 
    //}
    //else
    //{
        var file = document.getElementById('file').files[0];     
    //}
    

    var reader = new FileReader();

    reader.onload = function (){

        preview.src = reader.result;

         //ShowAddImg(reader.result);

    }



    //SIZING THE IMG PREVIEW BEING UPLOADED

    preview.style.width = "10vw";

    preview.style.height = "10vw";



    if(file != null){

        preview.src = reader.readAsDataURL(file);

        imageUploaded = true; //set for pricing purposes

    }
     if(fileModal != null){

        preview.src = reader.readAsDataURL(fileModal);

        imageUploaded = true; //set for pricing purposes

    }  
    else{

        preview.src = "";

    }

    //if (isMobile())
    //{
        document.getElementById("uploadpreviewModal").appendChild(preview);
    //}
    //else
    //{
        document.getElementById("uploadpreview").appendChild(preview);    
    //}

    

}





$(document).ready(function(e) {



    $('#upload').on('click', function() {



        var file_data = $('#file').prop('files')[0];



        var form_data = new FormData();



        imageUploaded = true;



        form_data.append('file', file_data);





        if (document.getElementById("file").files.length == 0) {

            ShowAlert("uploadempty", "No files selected", "danger", "Upload Error");

        } else {



            $.ajax({



                url: 'https://www.vividcustoms.com/getconsecutive.php',

                cache: false,

                type: "POST",

                data: {

                    clave: "upload",

                },

                beforeSend: function() {



                },

                success: function(response) {

                    form_data.append('consecutive', response);

                    uploadimagefile(file_data, form_data, response);



                },

                error: function(error) {



                    document.getElementById("loaderupload").style.display = "none";



                    console.log("error in method uploadfile():");



                    console.log(error);



                }



            });









        }



    });



});





function uploadimagefile(file_data, form_data, consecutive) {





    $.ajax({



        url: 'https://www.vividcustoms.com/uploadfile.php',



        dataType: 'text',



        cache: false,



        contentType: false,



        processData: false,



        data: form_data,



        type: 'post',



        beforeSend: function()



        {



            document.getElementById("loaderupload").style.display = "block";



        },



        success: function(response) {



            switch (response)



            {

                case '3':



                    ShowAlert('Message' + response, 'Sorry, your file is too large!', 'danger', 'Upload error');



                    break;



                case '4':



                    ShowAlert('Message' + response, 'Sorry, only JPG, JPEG, PNG, BMP, PDF, AI, EPS, SVG, PSD, TIF & GIF files are allowed!', 'danger', 'Upload error');



                    break;



                case '5':



                    ShowAddImg('img/Uploaded/' + file_data.name, null,consecutive);



                    //if (isMobile()) {

                        document.getElementById("uploadModal").style.display = "none";

                        document.getElementById("termsOfUseModal").checked = false;

                        CloseModal("AddArtModal");

                    //} else {

                        document.getElementById("upload").style.display = "none";

                        document.getElementById("termsOfUse").checked = false;

                    //}



                    savetmpdesign();



                    break;



                case '6':



                    ShowAlert('Message' + response, 'Sorry, there was an error uploading your file!', 'danger', 'Upload error');



                    break;



                case '7':



                    ShowAlert('Message' + response, 'File is not an image!', 'danger', 'Upload error');



                    break;



                default:

                    

                    ShowAddImg('img/Uploaded/' + file_data.name, JSON.parse(response)[2], consecutive);

                    //if (isMobile()) {

                        document.getElementById("uploadModal").style.display = "none";

                        document.getElementById("termsOfUseModal").checked = false;

                        CloseModal("AddArtModal");

                    //} else {

                        document.getElementById("upload").style.display = "none";

                        document.getElementById("termsOfUse").checked = false;

                    //}



                    savetmpdesign();





            }

            //if (isMobile()) {

                document.getElementById("fileModal").value = "";

            //} else {

                document.getElementById("file").value = "";

            //}



            document.getElementById("loaderupload").style.display = "none";









        },



        error: function(error)



        {



            document.getElementById("loaderupload").style.display = "none";



            console.log("error in method uploadfile():");



            console.log(error);



        }



    });

}









$(document).ready(function(e) {



    $('#uploadModal').on('click', function()



        {



            var file_data = $('#fileModal').prop('files')[0];



            var form_data = new FormData();



            imageUploaded = true;



            form_data.append('file', file_data);





            if (document.getElementById("fileModal").files.length == 0) {

                ShowAlert("uploadempty", "No files selected", "danger", "Upload Error");

            } else {

                $.ajax({



                    url: 'https://www.vividcustoms.com/getconsecutive.php',

                    cache: false,

                    type: "POST",

                    data: {

                        clave: "upload",

                    },

                    beforeSend: function() {



                    },

                    success: function(response) {

                        form_data.append('consecutive', response);

                        uploadimagefile(file_data, form_data, response);



                    },

                    error: function(error) {



                        document.getElementById("loaderupload").style.display = "none";



                        console.log("error in method uploadfile():");



                        console.log(error);



                    }



                });

            }









        });



});







$("#subsubcategories").click(function()



    {



        categories.classList.remove("active");



        subcategories.classList.add("active");



    });





$("#templatesubsubcategories").click(function()



    {



        templatecategories.classList.remove("active");



        templatesubcategories.classList.add("active");



    });









$("#subsubcategoriesModal").click(function()



    {



        categoriesModal.classList.remove("active");



        subcategoriesModal.classList.add("active");



    });



$("#templatesubsubcategoriesModal").click(function()



    {



        templatecategoriesModal.classList.remove("active");



        templatesubcategoriesModal.classList.add("active");



    });







$("#subcategories").click(function()



    {



        invisibleTables("subcategories");



        subcategory = null;



        showTable(category);





        subsubcategories.style.display = "none";



        categories.classList.remove("active");



        subsubcategories.classList.remove("active");



        subcategories.classList.add("active");



    });





$("#templatesubcategories").click(function()



    {



        invisibletemplateTables();



        templatesubcategory = null;



        showtemplateTable(templatecategory);



        templatesubsubcategories.style.display = "none";



        templatecategories.classList.remove("active");



        templatesubsubcategories.classList.remove("active");



        templatesubcategories.classList.add("active");



    });







$("#subcategoriesModal").click(function()



    {



        invisibleTables("subcategoriesModal");



        subcategory = null;



        showTable(category);



        subsubcategoriesModal.style.display = "none";



        categoriesModal.classList.remove("active");



        subsubcategoriesModal.classList.remove("active");



        subcategoriesModal.classList.add("active");



    });



$("#templatesubcategoriesModal").click(function()



    {



        invisibletemplateTables();



        templatesubcategory = null;



        showtemplateTable(templatecategory);



        templatesubsubcategoriesModal.style.display = "none";



        templatecategoriesModal.classList.remove("active");



        templatesubsubcategoriesModal.classList.remove("active");



        templatesubcategoriesModal.classList.add("active");



    });







$("#categories").click(function()



    {



        startcategories();



    });



$("#templatecategories").click(function()



    {



        starttemplatecategories();



    });







$("#categoriesModal").click(function()



    {



        startcategories();



    });



$("#templatecategoriesModal").click(function()



    {



        starttemplatecategories();



    });







function startcategories()



{

    category = null;



    subcategory = null;



    invisibleTables("startcategories");



    showTable(category, subcategory);



    if (isMobile())



    {



        subcategoriesModal.style.display = "none";



        subsubcategoriesModal.style.display = "none";



        subcategoriesModal.classList.remove("active");



        subsubcategoriesModal.classList.remove("active");



        categoriesModal.classList.add("active");



    } else



    {



        subcategories.style.display = "none";



        subsubcategories.style.display = "none";



        subcategories.classList.remove("active");



        subsubcategories.classList.remove("active");



        categories.classList.add("active");



    }







}





function starttemplatecategories()



{

    templatecategory = null;



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



    } else



    {



        templatesubcategories.style.display = "none";



        templatesubsubcategories.style.display = "none";



        templatesubcategories.classList.remove("active");



        templatesubsubcategories.classList.remove("active");



        templatecategories.classList.add("active");



    }







}







function setCategory(element)



{



    category = element;



    subcategory = null;



    invisibleTables("setCategory");



    showTable(category, subcategory);



    if (isMobile())



    {



        subcategoriesModal.style.display = "inline";



        subcategoriesModal.innerHTML = element;



        categories.classList.remove("active");



        subsubcategories.classList.remove("active");



        subcategories.classList.add("active");



    } else



    {



        subcategories.style.display = "inline";



        subcategories.innerHTML = element;



        categories.classList.remove("active");



        subsubcategories.classList.remove("active");



        subcategories.classList.add("active");



    }







}





function settemplateCategory(element)



{



    templatecategory = element;



    templatesubcategory = null;



    invisibletemplateTables();



    showtemplateTable(templatecategory, templatesubcategory);



    if (isMobile())



    {



        templatesubcategoriesModal.style.display = "inline";



        templatesubcategoriesModal.innerHTML = element;



        templatecategories.classList.remove("active");



        templatesubsubcategories.classList.remove("active");



        templatesubcategories.classList.add("active");



    } else



    {



        templatesubcategories.style.display = "inline";



        templatesubcategories.innerHTML = element;



        templatecategories.classList.remove("active");



        templatesubsubcategories.classList.remove("active");



        templatesubcategories.classList.add("active");



    }







}







function setSubCategory(element)



{



    subcategory = element;



    invisibleTables("setSubCategory");



    showTable(category, subcategory);



    if (isMobile())



    {



        subsubcategoriesModal.style.display = "inline";



        subsubcategoriesModal.innerHTML = element;



        categoriesModal.classList.remove("active");



        subcategoriesModal.classList.remove("active");



        subsubcategoriesModal.classList.add("active");



    } else



    {



        subsubcategories.style.display = "inline";



        subsubcategories.innerHTML = element;



        categories.classList.remove("active");



        subcategories.classList.remove("active");



        subsubcategories.classList.add("active");



    }







}



function settemplateSubCategory(element)



{



    templatesubcategory = element;



    invisibletemplateTables();



    showtemplateTable(templatecategory, templatesubcategory);



    if (isMobile())



    {



        templatesubsubcategoriesModal.style.display = "inline";



        templatesubsubcategoriesModal.innerHTML = element;



        templatecategoriesModal.classList.remove("active");



        templatesubcategoriesModal.classList.remove("active");



        templatesubsubcategoriesModal.classList.add("active");



    } else



    {



        templatesubsubcategories.style.display = "inline";



        templatesubsubcategories.innerHTML = element;



        templatecategories.classList.remove("active");



        templatesubcategories.classList.remove("active");



        templatesubsubcategories.classList.add("active");



    }







}







function showTable(category, subcategory)



{



    var urlcategory = "https://www.vividcustoms.com/categories.php";



    $.ajax({



        cache: false,

        type: "POST",



        url: urlcategory,



        data: {



            category: category,



            subcategory: subcategory,



            step: (viewporttype == "xs" || viewporttype == "sm") ? 2 : 3



        },



        beforeSend: function() {







        },



        success: function(data)



        {



            if (document.getElementById('clipArtTable2Modal') != undefined)



            {



                document.getElementById('clipArtTable2Modal').innerHTML = data;





                document.getElementById('clipArtTable2Modal').style.display = "block";



            } 
            if (document.getElementById('clipArtTable2') != undefined)



            {

                //setTimeout(function(){ 

                
                document.getElementById('clipArtTable2').innerHTML = data;

                document.getElementById('clipArtTable2').style.opacity = 1;

                document.getElementById('clipArtTable2').style.display = "block";
   
            //},100);
                
                
                



            }







        },



        error: function(error)



        {



            console.log("error in method showTable('" + category + "," + subcategory + "'):");



            console.log(error);



        }



    })



}



function showtemplateTable(category, subcategory)



{



    var urlcategory = "https://www.vividcustoms.com/templates.php";



    $.ajax({



        cache: false,

        type: "POST",



        url: urlcategory,



        data: {



            templatecategory: templatecategory,



            templatesubcategory: templatesubcategory,



            step: (viewporttype == "xs" || viewporttype == "sm") ? 2 : 3



        },



        beforeSend: function() {







        },



        success: function(data)



        {



            if (document.getElementById('templateTable2Modal') != undefined)



            {



                document.getElementById('templateTable2Modal').innerHTML = data;



                document.getElementById('templateTable2Modal').style.display = "block";



            } 
            if (document.getElementById('templateTable2') != undefined)



            {



                document.getElementById('templateTable2').innerHTML = data;



                document.getElementById('templateTable2').style.display = "block";



            }







        },



        error: function(error)



        {



            console.log("error in method showtemplateTable('" + category + "," + subcategory + "'):");



            console.log(error);



        }



    })



}







function invisibleTables(from)
{
	
    if (document.getElementById("clipArtTableModal") != undefined)
    {
        document.getElementById("clipArtTableModal").style.display = "none";
        //document.getElementById("clipArtTable2Modal").style.display = "none";
    } 
    if (document.getElementById("clipArtTable") != undefined)
    {
        document.getElementById("clipArtTable").style.display = "none";
        //document.getElementById("clipArtTable2").style.display = "none";
    }
}



function invisibletemplateTables()
{
    if (document.getElementById("templateTableModal") != undefined)
    {
        document.getElementById("templateTableModal").style.display = "none";
        //document.getElementById("templateTable2Modal").style.display = "none";
    } 
    if (document.getElementById("templateTable") != undefined)
    {
        document.getElementById("templateTable").style.display = "none";
        //document.getElementById("templateTable2").style.display = "none";
    }
}







var getFileBlob = function(url, cb) {



    var xhr = new XMLHttpRequest();



    xhr.open("GET", url);



    xhr.responseType = "blob";



    xhr.addEventListener('load', function() {



        cb(xhr.response);



    });



    xhr.send();



};







var blobToFile = function(blob, name) {



    blob.lastModifiedDate = new Date();



    blob.name = name;



    return blob;



};







var getFileObject = function(filePathOrUrl, cb) {



    getFileBlob(filePathOrUrl, function(blob)



        {



            cb(blobToFile(blob, filePathOrUrl.split("/")[filePathOrUrl.split("/").length - 1]));



        });



};







function addImg(element) {

    $.ajax({

        cache: false,

        type: "POST",

        url: "https://www.vividcustoms.com/getpath.php",

        data: {

            filename: element.src,

            from: "Addimg",

        },

        beforeSend: function() {

            $(".loading").fadeIn("slow");

            $(".loading-text").fadeIn("slow");

        },

        success: function(data)

        {

            var info = data;

            var lines = info.split('\n');

            if (lines.length > 1) {

                var leftvalue = 0;

                var topvalue = 0;

                switch (canvasCounter) {

                    case 1:

                        leftvalue = front.width / 2;

                        topvalue = front.height / 2;

                        break;

                    case 2:

                        leftvalue = right.width / 2;

                        topvalue = right.height / 2;

                        break;

                    case 3:

                        leftvalue = back.width / 2;

                        topvalue = back.height / 2;

                        break;

                    default:

                        leftvalue = left.width / 2;

                        topvalue = left.height / 2;

                }

                lines.splice(0, 1);

                lines.splice(lines.length - 1, 1);

                info = lines.join('\n');

                fabric.loadSVGFromString(info, function(objects, options)

                    {

                        var obj = fabric.util.groupSVGElements(objects, options).paths;

                        var elements = [];

                        obj.forEach(function(svg) {

                            svg.set({

                                id: svg.id + "." + objId,

                            });

                            elements.push(svg);

                            objId++;

                        });

                        var img = new fabric.Group(elements, {

                            id: objId,

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

                            colorName: 'Black'

                        }).scaleToWidth(100);

                        switch (canvasCounter) {

                            case 1:

                                front.add(img);

                                break;

                            case 2:

                                right.add(img);

                                break;

                            case 3:

                                back.add(img);

                                break;

                            default:

                                left.add(img);

                        }

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

                                    icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),

                                },

                                bl: {

                                    icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),

                                },

                                br: {

                                    icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),

                                },

                                ml: {

                                    icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),

                                },

                                mr: {

                                    icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),

                                },

                                mb: {

                                    icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),

                                },

                                mt: {

                                    icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),

                                },

                                tl: {

                                    icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                                },

                            }, function()

                            {

                                front.renderAll();

                                right.renderAll();

                                back.renderAll();

                                left.renderAll();

                            });

                    });

                clipArtAdded = true;

                //unselectall('addImg');

                if (isMobile())

                {

                    $("#AddArtModal").modal("hide");

                }

                savetmpdesign();

            } else {

                var imgSrc = data;

                var leftvalue = 0;

                var topvalue = 0;

                fabric.Image.fromURL(imgSrc, function(img) {

                    switch (canvasCounter) {

                        case 1:

                            leftvalue = front.width / 2;

                            topvalue = front.height / 2;

                            break;

                        case 2:

                            leftvalue = right.width / 2;

                            topvalue = right.height / 2;

                            break;

                        case 3:

                            leftvalue = back.width / 2;

                            topvalue = back.height / 2;

                            break;

                        default:

                            leftvalue = left.width / 2;

                            topvalue = left.height / 2;

                    }

                    img.set({

                        id: objId,

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

                        colorName: 'Black'

                    }).scaleToWidth(100);

                    var BoundingRect = {

                        left: 0,

                        top: 0,

                        width: 0,

                        height: 0

                    };

                    img.setOptions({

                        BoundingRect: BoundingRect

                    });

                    switch (canvasCounter) {

                        case 1:

                            front.add(img);

                            break;

                        case 2:

                            right.add(img);

                            break;

                        case 3:

                            back.add(img);

                            break;

                        default:

                            left.add(img);

                    }

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

                            icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),

                        },

                        bl: {

                            icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),

                        },

                        br: {

                            icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),

                        },

                        ml: {

                            icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),

                        },

                        mr: {

                            icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),

                        },

                        mb: {

                            icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),

                        },

                        mt: {

                            icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),

                        },

                        tl: {

                            icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                        },

                    }, function() {

                        front.renderAll();

                        right.renderAll();

                        back.renderAll();

                        left.renderAll();

                    });

                    var filter = new fabric.Image.filters.Tint({

                        color: "#000000",

                        opacity: 1.0

                    });

                    img.filters.push(filter);

                    img.applyFilters(front.renderAll.bind(front));

                    img.applyFilters(right.renderAll.bind(right));

                    img.applyFilters(back.renderAll.bind(back));

                    img.applyFilters(left.renderAll.bind(left));

                });

                clipArtAdded = true;

                //unselectall('addImg');

                //OpenClose('carousel_area','work_area','addImg');   

                if (document.getElementById('AddArtModal') != undefined) 
                {

                    $("#AddArtModal").modal("hide");

                }

                savetmpdesign();

            }

            $(".loading").fadeOut("slow");

            $(".loading-text").fadeOut("slow");

        },

        error: function(error)

        {

            console.log("error in method addproduct():");

            console.log(error);

        }

    });

}







function addImg2(element)



{





    var leftvalue = 0;



    var topvalue = 0;



    switch (canvasCounter) {



        case 1:



            leftvalue = front.width / 2;



            topvalue = front.height / 2;



            break;



        case 2:



            leftvalue = right.width / 2;



            topvalue = right.height / 2;



            break;



        case 3:



            leftvalue = back.width / 2;



            topvalue = back.height / 2;



            break;



        default:



            leftvalue = left.width / 2;



            topvalue = left.height / 2;



    }









    $.ajax({



        cache: false,

        type: "POST",



        url: "https://www.vividcustoms.com/getpath.php",



        data: {



            filename: element.src,



            from: "Addimg",



        },



        beforeSend: function() {



            $(".loading").fadeIn("slow");



            $(".loading-text").fadeIn("slow");



        },



        success: function(data)



        {



            var info = data;



            var lines = info.split('\n');



            lines.splice(0, 3);



            lines.splice(lines.length - 1, 1);



            info = lines.join('\n');



            fabric.loadSVGFromString(info, function(objects, options)



                {



                    var obj = fabric.util.groupSVGElements(objects, options).paths;



                    var elements = [];



                    obj.forEach(function(svg) {



                        svg.set({



                            id: svg.id + "." + objId,



                        });



                        elements.push(svg);



                        objId++;



                    });



                    var img = new fabric.Group(elements, {



                        id: objId,



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



                        colorName: 'Black'



                    }).scaleToWidth(100);







                    switch (canvasCounter) {



                        case 1:



                            front.add(img);



                            break;



                        case 2:



                            right.add(img);



                            break;



                        case 3:



                            back.add(img);



                            break;



                        default:



                            left.add(img);



                    }







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



                                icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            bl: {



                                icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            br: {



                                icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            ml: {



                                icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            mr: {



                                icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            mb: {



                                icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            mt: {



                                icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            tl: {

                                icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                            },



                        }, function()



                        {



                            front.renderAll();



                            right.renderAll();



                            back.renderAll();



                            left.renderAll();



                        });







                });







            clipArtAdded = true;



            //unselectall('addImg');



            //OpenClose('carousel_area','work_area','addImg');   



            if (isMobile())



            {



                $("#AddArtModal").modal("hide");



            }



            savetmpdesign();







            $(".loading").fadeOut("slow");



            $(".loading-text").fadeOut("slow");



        },



        error: function(error)



        {



            console.log("error in method addproduct():");



            console.log(error);



        }



    });







    /*getFileObject(element.src, function (fileObject) 



    {



        //console.log(fileObject);



        var reader = new FileReader();



        reader.onload = function(e) {



          var contents = e.target.result;



          //displayContents(contents);



          alert(contents);



           fabric.loadSVGFromString(contents, function(objects, options) 



           {



              var obj = fabric.util.groupSVGElements(objects, options);



              console.log(obj);



              //front.add(obj);



          });



        };



        reader.readAsText(fileObject);



    });*/







    //var file = getFile(element.src);



    //console.log(file);



    /*



      fabric.loadSVGFromString(element.src, function(objects, options) {



        var obj = fabric.util.groupSVGElements(objects, options);



        canvas.add(obj);



    });*/



    /*



    $.ajax({



        cache: false,

 type: "POST",



        url: "https://www.vividcustoms.com/getpath.php",



        data: { 



                  filename: element.src



              },



      beforeSend: function(){



          $(".loading").fadeIn("slow");



          $(".loading-text").fadeIn("slow");



      },



      success: function(data)



      {       



        



         var imgSrc = data;



     var leftvalue = 0;



     var topvalue = 0;  



    switch (canvasCounter){



        case 1:



             leftvalue = front.width/2;



             topvalue = front.height/2;                     



            break;



        case 2:



             leftvalue = right.width/2;



             topvalue = right.height/2;                       



            break;



        case 3:



             leftvalue = back.width/2;



             topvalue = back.height/2;                     



            break;



        default:



             leftvalue = left.width/2;



             topvalue = left.height/2;                      



    }               







     //if (imgSrc.indexOf("svg") != -1)



     //{ 







        getFileObject(imgSrc, function (fileObject) 



        {



           var url = URL.createObjectURL(fileObject);



           var itemId = 1;



           var elements = [];



           fabric.loadSVGFromString(url, function(objects, options) 



           {



            console.log(objects);



            console.log(options);



             objects.forEach(function(svg) {



                 svg.set({



                   id: objId,



                 //fabric.Image.fromObject(svg, function(img){



                    //img.set({



                    //    id: objId



                   // });



                    //elements.push(img);



                   // objId++;



                 });



                elements.push(svg);



                objId++;



              });



              var img = new fabric.Group(elements, {



                  id: objId,



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



                  padding : 0,



                  colorName: 'Black'



              }).scaleToWidth(100);



             //img.setOptions({BoundingRect: BoundingRect});



              switch (canvasCounter){



                  case 1:



                      front.add(img);



                      break;



                  case 2:



                      right.add(img);



                      break;



                  case 3:



                      back.add(img);



                      break;



                  default:



                      left.add(img);



              }







              img.setControlsVisibility( {



                  ml: false,



                  mr: false,



                  mb: false,



                  mt: false,



                  mtr: false,



                  bl: true,



                  tr: true,



                  tl: true,



                  br: true,



              } );







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



                       icon: 'https://www.vividcustoms.com/img/x.png?v='+Math.floor((Math.random() * 10000) + 1),



                  },



                  bl: {



                       icon: 'https://www.vividcustoms.com/img/resize_left.png?v='+Math.floor((Math.random() * 10000) + 1),



                  },



                  br: {



                       icon: 'https://www.vividcustoms.com/img/resize_right.png?v='+Math.floor((Math.random() * 10000) + 1),



                  },



                  ml: {



                       icon: 'https://www.vividcustoms.com/img/left.png?v='+Math.floor((Math.random() * 10000) + 1),



                  },



                  mr: {



                       icon: 'https://www.vividcustoms.com/img/right.png?v='+Math.floor((Math.random() * 10000) + 1),



                  },



                  mb: {



                       icon: 'https://www.vividcustoms.com/img/down.png?v='+Math.floor((Math.random() * 10000) + 1),



                  },



                  mt: {



                       icon: 'https://www.vividcustoms.com/img/up.png?v='+Math.floor((Math.random() * 10000) + 1),



                  },



                  tl: {

                             icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v='+Math.floor((Math.random() * 10000) + 1),

                      },



              }, function() 



                {



                  front.renderAll();



                  right.renderAll();



                  back.renderAll();



                  left.renderAll();



                });



           }); 







      }); 



         



    



     clipArtAdded = true;



      unselectall('addImg');



      //OpenClose('carousel_area','work_area','addImg');   



      if (isMobile())



      {



        $("#AddArtModal").modal("hide");



      }



      savetmpdesign();







       $(".loading").fadeOut("slow");



      $(".loading-text").fadeOut("slow");



        



      },



      error: function (error)



      {



        console.log("error in method addproduct():");



        console.log(error);



      }



  }) ;



  */









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



    front.renderAll();



    right.renderAll();



    back.renderAll();



    left.renderAll();



});





function RemoveWhite(element) {

    colorChanged = true;

    $(".list-group-item").removeClass("active");



    $(this).addClass("active");



    switch (canvasCounter)



    {



        case 1:



            var object = front.getActiveObject();



            break;



        case 2:



            var object = right.getActiveObject();



            break;



        case 3:



            var object = back.getActiveObject();



            break;



        default:



            var object = left.getActiveObject();



    }



    if (object.type == "image") {



        if (element.checked) {

            var filter = new fabric.Image.filters.RemoveWhite({

                threshold: 60,

                distance: 150

            });



            object.filters.push(filter);

        } else {

            object.filters = [];

        }







        switch (canvasCounter)



        {



            case 1:



                object.applyFilters(front.renderAll.bind(front));



                break;



            case 2:



                object.applyFilters(right.renderAll.bind(right));



                break;



            case 3:



                object.applyFilters(back.renderAll.bind(back));



                break;



            default:



                object.applyFilters(left.renderAll.bind(left));



        }





        save();



        savetmpdesign();





    }



}





/* function changeColor(newColor)



 {









   colorChanged = true;



   colorArt = newColor;



   $(".list-group-item").removeClass("active");



   $(this).addClass("active");



   switch (canvasCounter)



   {



       case 1:



           var object = front.getActiveObject();



           break;



       case 2:



           var object = right.getActiveObject();



           break;



       case 3:



           var object = back.getActiveObject();



           break;



       default:



           var object = left.getActiveObject();



   }      







   if (object.type == "image")



   {



     if (newColor == 'No Color')



     {



       object.filters = [];

     } 



   else  if (newColor == 'transparent')



     { 



        var filter = new fabric.Image.filters.RemoveWhite({

         threshold: 60,

         distance: 150

       });

     

       object.filters.push(filter);





     } 



     else  if (newColor == 'Remove White')



     {

       

        var filter = new fabric.Image.filters.RemoveWhite({

         threshold: 60,

         distance: 150

       });

     

       object.filters.push(filter);



     } 



     else



     {



       var filter = new fabric.Image.filters.Tint({



         color: newColor,



         opacity: 1.0



       });







       object.filters.push(filter);



       object.set({



                   colorName: Artcolor.innerHTML,



                   colorCode: newColor           



               });



     }   







     document.getElementById("color"+object.id).style.backgroundColor = newColor;



      if(newColor == "transparent")

       {

         $("#color"+object.id).addClass("transparent2");

       }

      else

      {

       $("#color"+object.id).removeClass("transparent2");

      }  







     switch (canvasCounter)



     {



       case 1:



           object.applyFilters(front.renderAll.bind(front));



           break;



       case 2:



           object.applyFilters(right.renderAll.bind(right));



           break;



       case 3:



           object.applyFilters(back.renderAll.bind(back));



           break;



       default:



           object.applyFilters(left.renderAll.bind(left));



     }



   }



   else 



   {



     



     var objectslist = object._objects;



     if (objectslist.length = 1)

     {

       



           objectslist[0].setFill(newColor); 



           objectslist[0].setStroke(newColor); 



           

          switch (canvasCounter){



                       case 1:



                           front.renderAll();



                           break;



                       case 2:



                           right.renderAll();



                           break;



                       case 3:



                           back.renderAll();



                           break;



                       default:



                          left.renderAll();



                   }







           document.getElementById("color"+objectslist[0].id.split(".")[0]).style.backgroundColor = newColor;

         if(newColor == "transparent")

         {

           $("#color"+objectslist[0].id.split(".")[0]).addClass("transparent2");

         }

        else

        {

         $("#color"+objectslist[0].id.split(".")[0]).removeClass("transparent2");

        }  



         

     }

     else

     {

       for (var i = 0; i < objectslist.length; i++) 



       {



         if(("color"+objectslist[i].id.split(".")[0]) == idcolorselected)



         {



           objectslist[i].setFill(newColor); 



           objectslist[i].setStroke(newColor); 



           

          switch (canvasCounter){



                       case 1:



                           front.renderAll();



                           break;



                       case 2:



                           right.renderAll();



                           break;



                       case 3:



                           back.renderAll();



                           break;



                       default:



                          left.renderAll();



                   }







           document.getElementById("color"+objectslist[i].id.split(".")[0]).style.backgroundColor = newColor;

         if(newColor == "transparent")

         {

           $("#color"+objectslist[i].id.split(".")[0]).addClass("transparent2");

         }

        else

        {

         $("#color"+objectslist[i].id.split(".")[0]).removeClass("transparent2");

        }  



         }  





       }



     }



     

    



        



         save();



         //unselectall('changeColor');



         savetmpdesign(); 



         //return;





     



   } 



    setColorsInk();



    selectcolors();



    var currentcolor = newColor;



    



   if (currentcolor == "rgb(0,0,0)")



     {



       currentcolor = "#000000";



     }



     if (isMobile())



     {

       if (document.getElementById("artcolorModal"+currentcolor.replace("#","").toLowerCase()) != null)

       document.getElementById("artcolorModal"+currentcolor.replace("#","").toLowerCase()).style.border = "2px solid #31B0D5";



     }



     else



     {

       if (document.getElementById("artcolor"+currentcolor.replace("#","").toLowerCase()) != null)

       document.getElementById("artcolor"+currentcolor.replace("#","").toLowerCase()).style.border = "2px solid #31B0D5";  



   

     }



 }*/





function changeColor(newColor)



{







    colorChanged = true;



    colorArt = newColor;



    $(".list-group-item").removeClass("active");



    $(this).addClass("active");



    switch (canvasCounter)



    {



        case 1:



            var object = front.getActiveObject();



            break;



        case 2:



            var object = right.getActiveObject();



            break;



        case 3:



            var object = back.getActiveObject();



            break;



        default:



            var object = left.getActiveObject();



    }







    if (object.type == "image")



    {



        if (newColor == 'No Color')



        {



            object.filters = [];





        } else if (newColor == 'transparent')



        {





            var filter = new fabric.Image.filters.RemoveWhite({

                threshold: 60,

                distance: 150,

            });



            object.filters.push(filter);



        }



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



            object.set({



                colorName: Artcolor.innerHTML,



                colorCode: newColor



            });



        }







        document.getElementById("color" + object.id).style.backgroundColor = newColor;



        if (newColor == "transparent") {

            $("#color" + object.id).addClass("transparent2");

        } else {

            $("#color" + object.id).removeClass("transparent2");

        }



        switch (canvasCounter)



        {



            case 1:



                object.applyFilters(front.renderAll.bind(front));



                break;



            case 2:



                object.applyFilters(right.renderAll.bind(right));



                break;



            case 3:



                object.applyFilters(back.renderAll.bind(back));



                break;



            default:



                object.applyFilters(left.renderAll.bind(left));



        }



    } else



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

            



            





            switch (canvasCounter) {



                case 1:



                    front.renderAll();



                    break;



                case 2:



                    right.renderAll();



                    break;



                case 3:



                    back.renderAll();



                    break;



                default:



                    left.renderAll();



            }







            document.getElementById("color" + objectslist[0].id.split(".")[0]).style.backgroundColor = newColor;

            if (newColor == "transparent") {

                $("#color" + objectslist[0].id.split(".")[0]).addClass("transparent2");

            } else {

                $("#color" + objectslist[0].id.split(".")[0]).removeClass("transparent2");

            }





        } else {





            for (var i = 0; i < objectslist.length; i++)



            {



                if (("color" + objectslist[i].id.split(".")[0]) == idcolorselected)



                {



                    objectslist[i].setFill(newColor);



                    objectslist[i].setStroke(newColor);





                    switch (canvasCounter) {



                        case 1:



                            front.renderAll();



                            break;



                        case 2:



                            right.renderAll();



                            break;



                        case 3:



                            back.renderAll();



                            break;



                        default:



                            left.renderAll();



                    }



                    document.getElementById("color" + objectslist[i].id.split(".")[0]).style.backgroundColor = newColor;



                    if (newColor == "transparent") {

                        $("#color" + objectslist[i].id.split(".")[0]).addClass("transparent2");

                    } else {

                        $("#color" + objectslist[i].id.split(".")[0]).removeClass("transparent2");

                    }

                }



            }





        }









        save();



        //unselectall('changeColor');



        savetmpdesign();



        //return;









    }



    setColorsInk();



    selectcolors();



    var currentcolor = newColor;



    if (currentcolor == "rgb(0,0,0)")



    {



        currentcolor = "#000000";



    }



    if (isMobile())



    {

        if (document.getElementById("artcolorModal" + currentcolor.replace("#", "").toLowerCase()) != null)

            document.getElementById("artcolorModal" + currentcolor.replace("#", "").toLowerCase()).style.border = "2px solid #31B0D5";



    } else



    {

        if (document.getElementById("artcolor" + currentcolor.replace("#", "").toLowerCase()) != null)

            document.getElementById("artcolor" + currentcolor.replace("#", "").toLowerCase()).style.border = "2px solid #31B0D5";



    }



}







function changeColorText(newColor, type)



{







    colorChanged = true;



    $(".list-group-item").removeClass("active");



    $(this).addClass("active");



    switch (canvasCounter)



    {



        case 1:



            var object = front.getActiveObject();



            break;



        case 2:



            var object = right.getActiveObject();



            break;



        case 3:



            var object = back.getActiveObject();



            break;



        default:



            var object = left.getActiveObject();



    }



    if (type == "c")



    {



        var strokevalue = null;



        strokeColor = newColor;







        object.setStroke(strokeColor);



        if (object.strokeWidth == 0) {



            strokevalue = 2;



        } else



        {



            strokevalue = object.strokeWidth;



        }



        document.getElementById("strokewidthvalue").value = strokevalue;



        document.getElementById("strokewidth").value = strokevalue;



        document.getElementById("strokewidthvalueModal").value = strokevalue;



        document.getElementById("strokewidthModal").value = strokevalue;



        //object.setstrokewidth(2);



        object.set({



            strokecolorName: Textstrokecolor.innerHTML,



            laststrokecolor: newColor,



            strokeWidth: strokevalue,



        });



    } else



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



    switch (canvasCounter) {



        case 1:



            front.renderAll(front);



            break;



        case 2:



            right.renderAll(right);



            break;



        case 3:



            back.renderAll(back);



            break;



        default:



            left.renderAll(left);



    }



    //unselectall('changeColorText');



    //OpenClose('carousel_area','work_area','changeColorText');



    savetmpdesign();



    save();



    setColorsInk();



    selectcolorsT();



    var currentcolor = newColor;



    if (currentcolor == "rgb(0,0,0)")



    {



        currentcolor = "#000000";



    }



    if (isMobile())



    {



        if (type !== "c")



        {

            if (document.getElementById("textcolorModal" + currentcolor.replace("#", "").toLowerCase()) != null)

                document.getElementById("textcolorModal" + currentcolor.replace("#", "").toLowerCase()).style.border = "2px solid #31B0D5";



        } else



        {

            if (document.getElementById("strokecolorModal" + currentcolor.replace("#", "").toLowerCase()) != null)

                document.getElementById("strokecolorModal" + currentcolor.replace("#", "").toLowerCase()).style.border = "2px solid #31B0D5";



        }







    } else



    {



        if (type !== "c")



        {

            if (document.getElementById("textcolor" + currentcolor.replace("#", "").toLowerCase()) != null)

                document.getElementById("textcolor" + currentcolor.replace("#", "").toLowerCase()).style.border = "2px solid #31B0D5";



        } else



        {

            if (document.getElementById("strokecolor" + currentcolor.replace("#", "").toLowerCase()) != null)

                document.getElementById("strokecolor" + currentcolor.replace("#", "").toLowerCase()).style.border = "2px solid #31B0D5";



        }



    }



}







function setFont(element)



{



    colorChanged = true;



    $(".list-group-item").removeClass("active");



    $(this).addClass("active");



    switch (canvasCounter)



    {



        case 1:



            var object = front.getActiveObject();



            break;



        case 2:



            var object = right.getActiveObject();



            break;



        case 3:



            var object = back.getActiveObject();



            break;



        default:



            var object = left.getActiveObject();



    }



    font = element.id;



    object.set({

        fontFamily: font

    });



    switch (canvasCounter)



    {



        case 1:



            front.renderAll(front);



            break;



        case 2:



            right.renderAll(right);



            break;



        case 3:



            back.renderAll(back);



            break;



        default:



            left.renderAll(left);



    }



    setTitleFont(element);



    //unselectall('setFont');



    if (isMobile())



    {



        $("#FontModal").modal("hide");



    }







    save();



    //OpenClose("carousel_area","work_area",'setFont');



    savetmpdesign();



}









function setStroke(element)



{



    colorChanged = true;



    $(".list-group-item").removeClass("active");



    $(this).addClass("active");



    switch (canvasCounter)



    {



        case 1:



            var object = front.getActiveObject();



            break;



        case 2:



            var object = right.getActiveObject();



            break;



        case 3:



            var object = back.getActiveObject();



            break;



        default:



            var object = left.getActiveObject();



    }



    stroke = element.value;



    if (stroke == 0)



    {



        object.setStrokeWidth(stroke);



        object.setStroke('transparent');



    } else



    {



        object.setStrokeWidth(stroke);



        object.setStroke(object.laststrokecolor);







    }









    if (element.id == "strokewidth")



    {



        document.getElementById('strokewidthvalue').value = stroke;



    } else



    {



        document.getElementById('strokewidthvalueModal').value = stroke;



    }



    switch (canvasCounter)



    {



        case 1:



            front.renderAll(front);



            break;



        case 2:



            right.renderAll(right);



            break;



        case 3:



            back.renderAll(back);



            break;



        default:



            left.renderAll(left);



    }



    //unselectall('setStroke');



    savetmpdesign();



}









function wrapCanvasText(t, canvas, maxW, maxH, fontFamily, strokeColor)



{



    if (typeof maxH === "undefined")



    {



        maxH = 0;



    }



    var words = t.split(" ");



    var formatted = '';



    var sansBreaks = t.replace(/(\r\n|\n|\r)/gm, "");



    var lineHeight = new fabric.Text(sansBreaks, {



        fontFamily: fontFamily,



        fontSize: 30,



    }).height;



    // adjust for vertical offset



    var maxHAdjusted = maxH > 0 ? maxH - lineHeight : 0;



    var context = canvas.getContext("2d");



    context.font = 30 + "px " + fontFamily;



    var currentLine = "";



    var breakLineCount = 0;



    for (var n = 0; n < words.length; n++)



    {



        var isNewLine = currentLine == "";



        var testOverlap = currentLine + ' ' + words[n];



        var w = context.measureText(testOverlap).width;



        if (w < maxW)



        {



            currentLine += words[n] + ' ';



            formatted += words[n] += ' ';



        } else



        {



            if (isNewLine)



            {



                var wordOverlap = "";



                for (var i = 0; i < words[n].length; ++i)



                {



                    wordOverlap += words[n].charAt(i);



                    var withHypeh = wordOverlap + "-";



                    if (context.measureText(withHypeh).width >= maxW)



                    {



                        withHypeh = wordOverlap.substr(0, wordOverlap.length - 2) + "-";



                        words[n] = words[n].substr(wordOverlap.length - 1, words[n].length);



                        formatted += withHypeh;



                        break;



                    }



                }



            }



            n--;



            formatted += '\n';



            breakLineCount++;



            currentLine = "";



        }



        if (maxHAdjusted > 0 && (breakLineCount * lineHeight) > maxHAdjusted)



        {



            formatted = formatted.substr(0, formatted.length - 3) + "...\n";



            break;



        }



    }



    formatted = formatted.substr(0, formatted.length - 1);



    return formatted;



}







/*searchclipart = document.getElementById('searchclipart');



searchclipart.onkeydown = searchclipart.onkeyup  = Scan*/







//searchclipartModal = document.getElementById('searchclipartModal');



//searchclipartModal.onkeydown = searchclipartModal.onkeyup  = Scan







function fontMenu()



{



    var text_color = document.getElementById('text_color');



    var font_menu = document.getElementById('font_menu');



    if (font_title.innerHTML == "Fonts")



    {



        font_title.innerHTML = "Change Font";



        up.style.display = "block";



        down.style.display = "none";



        font_menu.style.display = "none";



    } else



    {



        font_title.innerHTML = "Fonts";



        up.style.display = "none";



        down.style.display = "block";



        font_menu.style.display = "block";



    }



}







function strokecolorlist()



{



    var Outlinediv = document.getElementById('Outlinediv');



    if (Outlinediv.style.display == 'none')



    {



        Outlinediv.style.display = "block";



    } else



    {



        Outlinediv.style.display = "none";



    }







}







function setTitleFont(element)



{



    var font_preview = document.getElementById('font_preview');



    if (element != null)



    {

        

        font_preview.innerHTML = element.childNodes[0].childNodes[2].innerHTML;



        //font_preview.style.fontFamily = font;



    } else



    {



        font_preview.innerHTML = "ABeeZee-Regular";



        font_preview.style.fontFamily = 'ABeeZee-Regular';



    }



}







function resize(e)



{



    resized = true;



    var object;



    $(".list-group-item").removeClass("active");



    $(this).addClass("active");



    switch (canvasCounter)



    {



        case 1:



            object = front.getActiveObject();



            break;



        case 2:



            object = right.getActiveObject();



            break;



        case 3:



            object = back.getActiveObject();



            break;



        default:



            object = left.getActiveObject();



    }



    var element = e.target.id;



    switch (element)



    {



        case 'sizeText':



            var sizeText = Number(document.getElementById('sizeText').value);



            if (sizeText < 10) {

                sizeText = 10;

                document.getElementById('sizeText').value = sizeText;

            } else if (sizeText > 50) {

                sizeText = 50;

                document.getElementById('sizeText').value = sizeText;

            }





            if (object.type == 'text')



            {



                object.setFontSize(sizeText);

            } else



            {



                object.set("fontSize", sizeText);



            }



            document.getElementById('sizeTextvalue').value = sizeText;



            break;



        case 'sizeTextModal':



            var sizeText = Number(document.getElementById('sizeTextModal').value);



            if (sizeText < 10) {

                sizeText = 10;

                document.getElementById('sizeTextModal').value = sizeText;

            } else if (sizeText > 50) {

                sizeText = 50;

                document.getElementById('sizeTextModal').value = sizeText;

            }



            if (object.type == 'text')



            {



                object.setFontSize(sizeText);







            } else



            {



                object.set("fontSize", sizeText);



            }



            document.getElementById('sizeTextvalueModal').value = sizeText;



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



            if (object.type == 'text')



            {



                object.setFontSize(sizeText);







            } else



            {



                object.set("fontSize", sizeText);



            }



            document.getElementById('sizeText').value = sizeText;



            break;



        case 'sizeTextvalueModal':



            var sizeText = Number(document.getElementById('sizeTextvalueModal').value);



            if (sizeText < 10) {

                sizeText = 10;

                document.getElementById('sizeTextvalueModal').value = sizeText;

            } else if (sizeText > 50) {

                sizeText = 50;

                document.getElementById('sizeTextvalueModal').value = sizeText;

            }



            if (object.type == 'text')



            {



                object.setFontSize(sizeText);

            } else



            {



                object.set("fontSize", sizeText);



            }



            document.getElementById('sizeTextModal').value = sizeText;



            break;



        case 'widthImage':



            var Inch = Number(document.getElementById('widthImage').value);



            if (Inch < 0)



            {



                Inch = 1;



                document.getElementById('widthImage').value = 1;



            } else if (Inch > 12)



            {



                Inch = 12;



                document.getElementById('widthImage').value = 12;



            }



            document.getElementById('widthvalueImage').value = document.getElementById('widthImage').value;



            var scaleX = (Inch.toFixed(2) * 35) / (1.3 * object.width.toFixed(2));



            var Inchheigth = (object.height * scaleX * 1.3 / 35);



            if (object.lockUniScaling)



            {



                object.set('scaleX', scaleX.toFixed(2));



                object.set('scaleY', scaleX.toFixed(2));



                document.getElementById('heightImage').value = Inchheigth.toFixed(2);



                document.getElementById('heightvalueImage').value = Inchheigth.toFixed(2);







            } else



            {



                object.set('scaleX', scaleX.toFixed(2));



            }



            break;



        case 'widthvalueImage':



            var Inch = Number(document.getElementById('widthvalueImage').value);



            if (Inch < 0)



            {



                Inch = 1;



                document.getElementById('widthvalueImage').value = 1;



            } else if (Inch > 12)



            {



                Inch = 12;



                document.getElementById('widthvalueImage').value = 12;



            }



            document.getElementById('widthImage').value = document.getElementById('widthvalueImage').value;



            var scaleX = (Inch.toFixed(2) * 35) / (1.3 * object.width.toFixed(2));



            var Inchheigth = object.height * scaleX * 1.3 / 35;



            if (object.lockUniScaling)



            {



                object.set('scaleX', scaleX.toFixed(2));



                object.set('scaleY', scaleX.toFixed(2));



                document.getElementById('heightImage').value = Inchheigth.toFixed(2);



                document.getElementById('heightvalueImage').value = Inchheigth.toFixed(2);







            } else



            {



                object.set('scaleX', scaleX.toFixed(2));



            }



            break;



        case 'widthModal':



            var Inch = Number(document.getElementById('widthModal').value);



            if (Inch < 0)



            {



                Inch = 1;



                document.getElementById('heightModal').value = 1;



            } else if (Inch > 12)



            {



                Inch = 12;



                document.getElementById('heightModal').value = 12;



            }



            document.getElementById('widthvalueModal').value = document.getElementById('widthModal').value;



            var scaleX = (Inch.toFixed(2) * 35) / (1.3 * object.width.toFixed(2));



            var Inchheigth = object.height * scaleX * 1.3 / 35;



            if (object.lockUniScaling)



            {



                object.set('scaleX', scaleX.toFixed(2));



                object.set('scaleY', scaleX.toFixed(2));



                document.getElementById('heightModal').value = Inchheigth.toFixed(2);



                document.getElementById('heightvalueModal').value = Inchheigth.toFixed(2);







            } else



            {



                object.set('scaleX', scaleX.toFixed(2));



            }



            break;



        case 'widthvalueModal':



            var Inch = Number(document.getElementById('widthvalueModal').value);



            if (Inch < 0)



            {



                Inch = 1;



                document.getElementById('widthvalueModal').value = 1;



            } else if (Inch > 12)



            {



                Inch = 12;



                document.getElementById('widthvalueModal').value = 12;



            }



            document.getElementById('widthModal').value = document.getElementById('widthvalueModal').value;



            var scaleX = (Inch.toFixed(2) * 35) / (1.3 * object.width.toFixed(2));



            var Inchheigth = object.height * scaleX * 1.3 / 35;



            if (object.lockUniScaling)



            {



                object.set('scaleX', scaleX.toFixed(2));



                object.set('scaleY', scaleX.toFixed(2));



                document.getElementById('heightModal').value = Inchheigth.toFixed(2);



                document.getElementById('heightvalueModal').value = Inchheigth.toFixed(2);







            } else



            {



                object.set('scaleX', scaleX.toFixed(2));



            }



            break;



        case 'heightImage':



            var Inch = Number(document.getElementById('heightImage').value);



            if (Inch < 0)



            {



                Inch = 1;



                document.getElementById('heightImage').value = 1;



            } else if (Inch > 16)



            {



                Inch = 16;



                document.getElementById('heightImage').value = 16;



            }







            document.getElementById('heightvalueImage').value = document.getElementById('heightImage').value;



            var scaleY = (Inch * 35) / (1.3 * object.height);



            var Inchwitdh = object.width * scaleY * 1.3 / 35;



            if (object.lockUniScaling)



            {



                object.set('scaleX', scaleY.toFixed(2));



                object.set('scaleY', scaleY.toFixed(2));



                document.getElementById('widthImage').value = Inchwitdh.toFixed(2);;



                document.getElementById('widthvalueImage').value = Inchwitdh.toFixed(2);;



            } else



            {



                object.set('scaleY', scaleY.toFixed(2));



            }



            break;



        case 'heightvalueImage':



            var Inch = Number(document.getElementById('heightvalueImage').value);



            if (Inch < 0)



            {



                Inch = 1;



                document.getElementById('heightvalueImage').value = 1;



            } else if (Inch > 16)



            {



                Inch = 16;



                document.getElementById('heightvalueImage').value = 16;



            }







            document.getElementById('heightImage').value = document.getElementById('heightvalueImage').value;



            var scaleY = (Inch * 35) / (1.3 * object.height);



            var Inchwitdh = object.width * scaleY * 1.3 / 35;



            if (object.lockUniScaling)



            {



                object.set('scaleX', scaleY.toFixed(2));



                object.set('scaleY', scaleY.toFixed(2));



                document.getElementById('widthImage').value = Inchwitdh.toFixed(2);



                document.getElementById('widthvalueImage').value = Inchwitdh.toFixed(2);



            } else



            {



                object.set('scaleY', scaleY.toFixed(2));



            }



            break;



        case 'heightModal':



            var Inch = Number(document.getElementById('heightModal').value);



            if (Inch < 0)



            {



                Inch = 1;



                document.getElementById('heightModal').value = 1;



            } else if (Inch > 16)



            {



                Inch = 16;



                document.getElementById('heightModal').value = 16;



            }







            document.getElementById('heightvalueModal').value = document.getElementById('heightModal').value;



            var scaleY = (Inch * 35) / (1.3 * object.height);



            var Inchwitdh = object.width * scaleY * 1.3 / 35;



            if (object.lockUniScaling)



            {



                object.set('scaleX', scaleY.toFixed(2));



                object.set('scaleY', scaleY.toFixed(2));



                document.getElementById('widthModal').value = Inchwitdh.toFixed(2);



                document.getElementById('widthvalueModal').value = Inchwitdh.toFixed(2);



            } else



            {



                object.set('scaleY', scaleY.toFixed(2));



            }



            break;



        case 'heightvalueModal':



            var Inch = Number(document.getElementById('heightvalueModal').value);



            if (Inch < 0)



            {



                Inch = 1;



                document.getElementById('heightvalueModal').value = 1;



            } else if (Inch > 16)



            {



                Inch = 16;



                document.getElementById('heightvalueModal').value = 16;



            }







            document.getElementById('heightModal').value = document.getElementById('heightvalueModal').value;



            var scaleY = (Inch * 35) / (1.3 * object.height);



            var Inchwitdh = object.width * scaleY * 1.3 / 35;



            if (object.lockUniScaling)



            {



                object.set('scaleX', scaleY.toFixed(2));



                object.set('scaleY', scaleY.toFixed(2));



                document.getElementById('widthModal').value = Inchwitdh.toFixed(2);



                document.getElementById('widthvalueModal').value = Inchwitdh.toFixed(2);



            } else



            {



                object.set('scaleY', scaleY.toFixed(2));



            }



            break;







        default:



    }



    switch (canvasCounter)



    {



        case 1:



            front.renderAll(front);



            break;



        case 2:



            right.renderAll(right);



            break;



        case 3:



            back.renderAll(back);



            break;



        default:



            left.renderAll(left);



    }







    //unselectall('resize');    



    savetmpdesign();



    save();



    return false;



}









function validate_size(obj, canvasCounter)



{



    var canvas = null;







    switch (canvasCounter) {



        case 1:



            canvas = front;



            break;



        case 2:



            canvas = right;



            break;



        case 3:



            canvas = back;



            break;



        default:



            canvas = left;



            break;



    }









    if (obj != null)



    {









        /*obj.lockMovementX= false;



        obj.lockMovementY= false;



        obj.lockScalingX= false;



        obj.lockScalingY= false;



        obj.lockUniScaling= false;



        obj.lockRotation= false;*/







        //var obj = e.target;



        var rect = obj.getBoundingRect();









        if (rect.left < 0 || rect.top < 0 || rect.left + rect.width > canvas.getWidth() || rect.top + rect.height > canvas.getHeight())



        {



            //obj['borderColor'] = '#00ff00';







            if (obj.getAngle() != obj.originalState.angle)



            {



                obj.setAngle(obj.originalState.angle);



            } else



            {



                obj.setTop(obj.originalState.top);



                obj.setLeft(obj.originalState.left);



                obj.setScaleX(obj.originalState.scaleX);



                obj.setScaleY(obj.originalState.scaleY);



            }



            obj.setCoords();



        }



        //canvas.renderAll(canvas);



        var array = [];



        array.push(obj.getBoundingRect().width);



        array.push(obj.getBoundingRect().height);



        array.push(obj.getBoundingRect().left);



        array.push(obj.getBoundingRect().top);



        obj.strokeDashArray = array;



    } else



    {



        /* front.forEachObject(function(obj) 



         {



           obj.lockMovementX= true;



           obj.lockMovementY= true;



           obj.lockScalingX= true;



           obj.lockScalingY= true;



           obj.lockUniScaling= true;



           obj.lockRotation= true;



         })*/



    }









}







function rotate(e) {





    var object;

    $(".list-group-item").removeClass("active");

    $(this).addClass("active");

    switch (canvasCounter) {

        case 1:

            var object = front.getActiveObject();

            break

        case 2:

            var object = right.getActiveObject();

            break;

        case 3:

            var object = back.getActiveObject();

            break;

        default:

            var object = left.getActiveObject();

    }



    var anglevalue = e.target.value;



    if (e.target.id == "angleImage") {

        object.setAngle(anglevalue);

        document.getElementById("anglevalueImage").value = anglevalue;

    } else if (e.target.id == "anglevalueImage") {

        object.setAngle(anglevalue);

        document.getElementById("angleImage").value = anglevalue;

    } else if (e.target.id == "angleImageModal") {

        object.setAngle(anglevalue);

        document.getElementById("anglevalueImageModal").value = anglevalue;

    } else if (e.target.id == "anglevalueImageModal") {

        object.setAngle(anglevalue);

        document.getElementById("angleImageModal").value = anglevalue;

    } else if (e.target.id == "angleText") {

        object.setAngle(anglevalue);

        document.getElementById("anglevalueText").value = anglevalue;

    } else if (e.target.id == "anglevalueText") {

        object.setAngle(anglevalue);

        document.getElementById("angleText").value = anglevalue;

    }



    switch (canvasCounter) {

        case 1:

            front.renderAll(front);

            break

        case 2:

            right.renderAll(right);

            break;

        case 3:

            back.renderAll(back);

            break;

        default:

            left.renderAll(left);

    }

    //unselectall('rotate2');     

    save();

    savetmpdesign();

}







function rotate2(direction)







{







    var object;







    //this is to style the list so that you can see what you clicked on







    $(".list-group-item").removeClass("active");







    $(this).addClass("active");







    //DECIDING WHICH CANVAS TO GET OBJECT FROM







    switch (canvasCounter) {







        case 1:







            var object = front.getActiveObject();







            break







        case 2:







            var object = right.getActiveObject();







            break;







        case 3:







            var object = back.getActiveObject();







            break;







        default:







            var object = left.getActiveObject();







    }









    //var object = canvas.getActiveObject();







    var anglerotation = Math.round(object.getAngle());







    if (direction == 'right')







    {







        anglerotation += 5;







    } else







    {







        anglerotation -= 5;







    }









    object.setAngle(anglerotation);









    switch (canvasCounter) {







        case 1:







            front.renderAll(front);







            break







        case 2:







            right.renderAll(right);







            break;







        case 3:







            back.renderAll(back);







            break;







        default:







            left.renderAll(left);







    }









    //validate_size(object,canvasCounter);



    //unselectall('rotate2');     



    if (object.type == 'image')



    {



        OpenClose("carousel_area", "work_area", 'rotate2');



    } else



    {



        OpenClose("carousel_area", "work_area", 'rotate2');



    }



    save();



    savetmpdesign();







}









function flipX() {







    var object;







    //this is to style the list so that you can see what you clicked on







    $(".list-group-item").removeClass("active");







    $(this).addClass("active");







    //DECIDING WHICH CANVAS TO GET OBJECT FROM







    switch (canvasCounter) {







        case 1:







            var object = front.getActiveObject();







            break







        case 2:







            var object = right.getActiveObject();







            break;







        case 3:







            var object = back.getActiveObject();







            break;







        default:







            var object = left.getActiveObject();







    }









    object.set('flipX', !object.flipX);









    switch (canvasCounter) {







        case 1:







            front.renderAll(front);







            break







        case 2:







            right.renderAll(right);







            break;







        case 3:







            back.renderAll(back);







            break;







        default:







            left.renderAll(left);







    }







    //unselectall('flipX');







    if (object.type == 'image')



    {



        OpenClose("carousel_area", "work_area", 'flipX');



    } else



    {



        OpenClose("carousel_area", "work_area", 'flipX');



    }



    save();



    savetmpdesign();







}









function flipY() {







    var object;







    //this is to style the list so that you can see what you clicked on







    $(".list-group-item").removeClass("active");







    $(this).addClass("active");







    //DECIDING WHICH CANVAS TO GET OBJECT FROM







    switch (canvasCounter) {







        case 1:







            var object = front.getActiveObject();







            break







        case 2:







            var object = right.getActiveObject();







            break;







        case 3:







            var object = back.getActiveObject();







            break;







        default:







            var object = left.getActiveObject();







    }









    object.set('flipY', !object.flipY);









    switch (canvasCounter) {







        case 1:







            front.renderAll(front);







            break







        case 2:







            right.renderAll(right);







            break;







        case 3:







            back.renderAll(back);







            break;







        default:







            left.renderAll(left);







    }









    //unselectall('flipY');







    if (object.type == 'image')



    {



        OpenClose("carousel_area", "work_area", 'flipY');



    } else



    {



        OpenClose("carousel_area", "work_area", 'flipY');



    }



    save();



    savetmpdesign();







}









function EditObject(event, target)







{







    var modifiedObject = target;







    var editArt = document.getElementById("editArt");







    var addText = document.getElementById("textSection");







    var textarea_btn = document.getElementById("textarea_btn");







    var textarea2 = document.getElementById("textarea2");







    var fontbtn = document.getElementById("font_btn");







    //var textcolor = document.getElementById("text_color"); 







    //var textsize = document.getElementById("text_size"); 







    var Art_color = document.getElementById("Artcolor");







    var Text_color = document.getElementById("Textcolor");







    var Text_strokecolor = document.getElementById("Textstrokecolor");







    var radius = document.getElementById("radius");







    var radiusvalue = document.getElementById("radiusvalue");







    var spacing = document.getElementById("spacing");







    var spacingvalue = document.getElementById("spacingvalue");









    if (typeof(target) == "undefined")







    {







        previousselectedobjecttype = '';







        editArt.style.display = 'none';







        addText.style.display = 'none';







        fontbtn.style.display = 'none';







        Text_color.style.display = 'none';







        //textsize.style.display = 'none';  







        document.getElementById('textarea2').value = "";







        document.getElementById('sizeText').value = "";







        //document.getElementById('angleText').value = "";   







        Art_color.innerHTML = '';







        Text_color.innerHTML = '';







        Text_strokecolor.innerHTML = '';







        radius.value = 0;







        radiusvalue.value = 0;







        spacing.value = 10;







        spacingvalue.value = 10;







        textarea_btn.innerHTML = "Add Text";







    } else if (target.type == 'image')







    {







        previousselectedobjecttype = 'image';









        //if (viewporttype == "xs" || (viewporttype != "xs" && viewporttype != "xlg"  && (Orientation === "PORTRAIT" || Orientation === 0) )) 



        //{



        OpenClose('work_area', 'carousel_area', 'editArt');



        // }



        //$('.nav-tabs a[href="#addArt"]').tab('show'); 







        Art_color.innerHTML = modifiedObject.colorName;







        document.getElementById("widthImage").value = Math.round(modifiedObject.getWidth() / 35);







        document.getElementById("heightImage").value = Math.round(modifiedObject.getHeight() / 35);







        //document.getElementById("angleImage").value = Math.round(modifiedObject.getAngle());







        editArt.style.display = 'block';







        textarea_btn.innerHTML = "Add Text";







        //changeClipArtMenuSize();                 







        //newArt.style.display = 'none';    







        //modifiedObject.set('stroke', fill.toRgbString());                           







    } else if (target.type == 'text' || target.type == 'curvedText')







    {



        previousselectedobjecttype = 'text';







        //if (viewporttype == "xs" || (viewporttype != "xs" && viewporttype != "xlg"  && (Orientation === "PORTRAIT" || Orientation === 0) )) 



        //{



        OpenClose('work_area', 'carousel_area', 'editText');



        //}







        Text_color.innerHTML = modifiedObject.colorName;







        Text_strokecolor.innerHTML = modifiedObject.strokecolorName;







        addText.style.display = 'block';









        fontbtn.style.display = 'block';







        Text_color.style.display = 'block';







        textarea_btn.innerHTML = "Update";







        //textsize.style.display = 'block';  







        document.getElementById("sizeText").value = Math.round(modifiedObject.getFontSize());







        document.getElementById('textarea2').value = modifiedObject.text;







        if (target.type == 'text')







        {







            radius.value = 0;







            radiusvalue.value = 0;







            spacing.value = 10;







            spacingvalue.value = 10;









        } else



        {



            radius.value = modifiedObject.arcangle;







            radiusvalue.value = modifiedObject.arcangle;







            spacing.value = modifiedObject.spacing;







            spacingvalue.value = modifiedObject.spacing;



        }









    }







}



function displaypersonalize(side, set)

{

    if (editdesign != null || edit != null || emails != null)

    {

        if (side == "backCanvas")

        {

            objectsbacklist = back.getObjects();

            if (objectsbacklist.length > 0)

            {

                for (var i = 0; i < objectsbacklist.length; i++) 

                { 

                    if (objectsbacklist[i].type == 'i-text') 

                    {

                        

                        var valueselected = "";

                        switch (objectsbacklist[i].getFontSize())

                        {



                            case 31:

                                valueselected = "1 In";

                                break;

                            case 62:

                                valueselected = "2 In";

                                break;

                            case 124:

                                valueselected = "4 In";

                                break;

                            case 186:

                                valueselected = "6 In";

                                break;

                            case 248:

                                valueselected = "8 In";

                                break;

                        }



                        if (objectsbacklist[i].id.indexOf("text") != -1)

                        {

                            if (isMobile())

                            {

                                //document.getElementById("textpersonalizecheckModal").checked = true;

                                document.getElementById("textpersonalizesideModal").disabled = false;

                                document.getElementById("textpersonalizesideModal").value = "Back";

                                document.getElementById("textpersonalizeheightModal").disabled = false;

                                $("#textpersonalizeheightModal select").val(valueselected);

                                document.getElementById("textpersonalizecolorModal").disabled = false;

                                document.getElementById("textpersonalizecolorModal").style.backgroundColor = objectsbacklist[i].fill;

                                document.getElementById("textpersonalizecolornameModal").innerHTML = findcolorname(objectsbacklist[i].fill);

                                document.getElementById("textpersonalizestrokecolorModal").disabled = false;

                                document.getElementById("textpersonalizestrokecolorModal").style.backgroundColor = objectsbacklist[i].stroke;

                                document.getElementById("textpersonalizestrokecolornameModal").innerHTML = findcolorname(objectsbacklist[i].stroke);

                            }

                            else

                            {

                                document.getElementById("textpersonalizecheck").checked = true;

                                document.getElementById("textpersonalizeside").disabled = false;

                                document.getElementById("textpersonalizeside").value = "Back";

                                document.getElementById("textpersonalizeheight").disabled = false;

                                $("#textpersonalizeheight select").val(valueselected);

                                document.getElementById("textpersonalizecolor").disabled = false;

                                document.getElementById("textpersonalizecolor").style.backgroundColor = objectsbacklist[i].fill;

                                document.getElementById("textpersonalizecolorname").innerHTML = findcolorname(objectsbacklist[i].fill);

                                document.getElementById("textpersonalizestrokecolor").disabled = false;

                                document.getElementById("textpersonalizestrokecolor").style.backgroundColor = objectsbacklist[i].stroke;

                                document.getElementById("textpersonalizestrokecolorname").innerHTML = findcolorname(objectsbacklist[i].stroke);



                            }

                        }

                        else

                        {

                            if (isMobile())

                            {

                                document.getElementById("numberpersonalizecheckModal").checked = true;

                                 document.getElementById("numberpersonalizesideModal").disabled = false;

                                 document.getElementById("numberpersonalizesideModal").value = "Back";

                                document.getElementById("numberpersonalizeheightModal").disabled = false;

                                $("#numberpersonalizeheightModal select").val(valueselected);

                                document.getElementById("numberpersonalizecolorModal").disabled = false;

                                document.getElementById("numberpersonalizecolorModal").style.backgroundColor = objectsbacklist[i].fill;

                                document.getElementById("numberpersonalizecolornameModal").innerHTML = findcolorname(objectsbacklist[i].fill);

                                document.getElementById("numberpersonalizestrokecolorModal").disabled = false;

                                document.getElementById("numberpersonalizestrokecolorModal").style.backgroundColor = objectsbacklist[i].stroke;

                                document.getElementById("numberpersonalizestrokecolornameModal").innerHTML = findcolorname(objectsbacklist[i].stroke);

                            }

                            else

                            {

                                document.getElementById("numberpersonalizecheck").checked = true;

                                document.getElementById("numberpersonalizeside").disabled = false;

                                document.getElementById("numberpersonalizeside").value = "Back";

                                document.getElementById("numberpersonalizeheight").disabled = false;

                                $("#numberpersonalizeheight select").val(valueselected);

                                document.getElementById("numberpersonalizecolor").disabled = false;

                                document.getElementById("numberpersonalizecolor").style.backgroundColor = objectsbacklist[i].fill;

                                document.getElementById("numberpersonalizecolorname").innerHTML = findcolorname(objectsbacklist[i].fill);

                                document.getElementById("numberpersonalizestrokecolor").disabled = false;

                                document.getElementById("numberpersonalizestrokecolor").style.backgroundColor = objectsbacklist[i].stroke;

                                document.getElementById("numberpersonalizestrokecolorname").innerHTML = findcolorname(objectsbacklist[i].stroke);

                            }

                        }

                        

                    }

                }    



                if (set)

                {

                    setCanvas(3);

                }

            }        

        }    

    }

    

}



function findcolorname(color)

{

    for (var i = 0; i < ListColors.length; i++) 

    {

        if (("#" + ListColors[i].Hex) == color)

        {

            return ListColors[i].Name;

        }

    }

}





function displayinfo(e)

{

    var modifiedObject = e.target;



    var editArt = document.getElementById("editArt");



    var newArt = document.getElementById("newArt");



    var fontbtn = document.getElementById("font_btn");



    var fontmenu = document.getElementById("font_menu");



    var textmenu = document.getElementById("text_menu");



    var Art_color = document.getElementById("Artcolor");



    var Text_color = document.getElementById("Textcolor");



    var Text_strokecolor = document.getElementById("Textstrokecolor");



    var texteffecsarea = document.getElementById("texteffecsarea");



    var effect = document.getElementById("effect");



    var textarea = document.getElementById('textarea');



    var textarea2 = document.getElementById('textarea2');



    var sizeText = document.getElementById('sizeText');



    var footer_menu = document.getElementById("footer_menu");



    var footer_menu_text = document.getElementById("footer_menu_text");



    var footer_menu_art = document.getElementById("footer_menu_art");



    var frontdesingerror = document.getElementById('frontdesingerror');



    var rightdesingerror = document.getElementById('rightdesingerror');



    var backdesingerror = document.getElementById('backdesingerror');



    var leftdesingerror = document.getElementById('leftdesingerror');



    var widthModal = document.getElementById('widthModal');



    var widthvalueModal = document.getElementById('widthvalueModal');



    var heightModal = document.getElementById('heightModal');



    var heightvalueModal = document.getElementById('heightvalueModal');



    var angleImageModal = document.getElementById('angleImageModal');



    var anglevalueImageModal = document.getElementById('anglevalueImageModal');



    var artcolortransparentModal = document.getElementById('artcolortransparentModal');



    var artcolortransparentlegendModal = document.getElementById('artcolortransparentlegendModal');



    var widthImage = document.getElementById('widthImage');



    var widthvalueImage = document.getElementById('widthvalueImage');



    var heightImage = document.getElementById('heightImage');



    var heightvalueImage = document.getElementById('heightvalueImage');



    var angleImage = document.getElementById('angleImage');



    var anglevalueImage = document.getElementById('anglevalueImage');



    var artcolortransparent = document.getElementById('artcolortransparent');



    var artcolortransparentlegend = document.getElementById('artcolortransparentlegend');



    var checkcolorlegend = document.getElementById('checkcolorlegend');



    var checkcolorlegendModal = document.getElementById('checkcolorlegendModal');



    var inkcolorlist = document.getElementById("inkcolorlist");



    var strokewidthvalueModal = document.getElementById("strokewidthvalueModal");



    var strokewidthModal = document.getElementById("strokewidthModal");



    var angleText = document.getElementById('angleText');



    var anglevalueText = document.getElementById('anglevalueText');



    var strokewidthvalue = document.getElementById("strokewidthvalue");



    var strokewidth = document.getElementById("strokewidth");

    var font_preview = document.getElementById("font_preview");



    if (e.target == undefined)



    {



        $('.nav-tabs a[href="#productSection"]').tab('show');



        newArt.style.display = 'block';



        editArt.style.display = 'none';



        fontbtn.style.display = 'none';



        font_menu.style.display = "none";



        textmenu.style.display = 'none';



        textarea.value = "";



        textarea2.value = "";



        sizeText.value = "";



        Art_color.innerHTML = '';



        Text_color.innerHTML = '';



        Text_strokecolor.innerHTML = '';



        footer_menu.style.display = "block";



        footer_menu_text.style.display = "none";



        footer_menu_art.style.display = "none";



        frontdesingerror.style.display = 'none';



        font = 'ABeeZee-Regular ';



        setTitleFont();

    } 

    else if (e.target.type == 'image') 

    {
          $('.nav-tabs a[href="#addArt"]').tab('show');

           setColorsInk();
        
        if (e.target._element.src.includes('Patriotic/Police')) 
        {
            
            if (isMobile()) {

                colors = document.getElementById("objectcolorsModal");

                widthModal.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);

                widthvalueModal.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);

                heightModal.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);

                heightvalueModal.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);

                angleImageModal.value = e.target.getAngle();

                anglevalueImageModal.value = e.target.getAngle();

                if (modifiedObject._controlsVisibility.ml) {

                    $('#resizeiconModal').removeClass("fa fa-lock");

                    $('#resizeiconModal').addClass("fa fa-unlock");

                } else {

                    $('#resizeiconModal').removeClass("fa fa-unlock");

                    $('#resizeiconModal').addClass("fa fa-lock");

                }

            } else {

                colors = document.getElementById("objectcolors");

                widthImage.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);

                widthvalueImage.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);

                heightImage.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);

                heightvalueImage.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);

                angleImage.value = e.target.getAngle();

                anglevalueImage.value = e.target.getAngle();

                if (modifiedObject._controlsVisibility.ml) {

                    $('#resizeicon').removeClass("fa fa-lock");

                    $('#resizeicon').addClass("fa fa-unlock");

                } else {

                    $('#resizeicon').removeClass("fa fa-unlock");

                    $('#resizeicon').addClass("fa fa-lock");

                }

            }

            colors.innerHTML = "";

            footer_menu.style.display = "none";

            footer_menu_text.style.display = "none";

            footer_menu_art.style.display = "block";

            if (isMobile()) {

                    //artcolortransparentModal.style.display = "none";  

                    artcolortransparentlegendModal.style.display = "none";

                    checkcolorlegendModal.style.display = "none";

                    inkcolorlist.style.display = "none";

                } 

                else

                {

                    artcolortransparent.style.display = "none";

                    artcolortransparentlegend.style.display = "none";

                    checkcolorlegend.style.display = "none";

                    inkcolorlist.style.display = "none";

                }
                tmpcolorlist = ['#ffffff','#0d45e4'];

            for (var i = 0; i <tmpcolorlist.length; i++) {

                            var currentcolor =tmpcolorlist[i];

                            var divColor = document.createElement("div");

                            divColor.style.backgroundColor = currentcolor;

                            divColor.style.width = "30px";

                            divColor.style.height = "30px";

                            divColor.style.borderRadius = "30px";

                            divColor.style.display = "inline-flex";

                            divColor.style.border = "1px solid #eee";

                            divColor.style.cursor = "pointer";

                            colors.appendChild(divColor);

                            var divColor = document.createElement("div");

                        }

                        divColor.innerHTML = "<b>COLOR EDIT: </b> NOT AVAILABLE FOR THIS IMAGE";

                        colors.appendChild(divColor);

                        var divrow = document.createElement("div");

                        divrow.className = "row";

                        var divcollabel = document.createElement("div");

                        divcollabel.className = "col-xs-6 col-sm-6 col-md-6 col-lg-6";
                        
                        var divcolcheck = document.createElement("div");

                        divcolcheck.className = "col-xs-6 col-sm-6 col-md-6 col-lg-6";

                        divrow.appendChild(divcollabel);

                        divrow.appendChild(divcolcheck);

                        colors.appendChild(divrow);

                        if (isMobile()) {

                            //inkcolorlistModal.style.display= "none";

                            inkcolorlistModal.innerHTML = "";

                        } else {

                            inkcolorlist.style.display = "none";

                        }

                        Art_color.innerHTML = "";

        }
        else
        {
           

            setColorsInk();

            selectcolors();

            var colors = null;



            if (isMobile()) {

                colors = document.getElementById("objectcolorsModal");

                widthModal.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);

                widthvalueModal.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);

                heightModal.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);

                heightvalueModal.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);

                angleImageModal.value = e.target.getAngle();

                anglevalueImageModal.value = e.target.getAngle();

                if (modifiedObject._controlsVisibility.ml) {

                    $('#resizeiconModal').removeClass("fa fa-lock");

                    $('#resizeiconModal').addClass("fa fa-unlock");

                } else {

                    $('#resizeiconModal').removeClass("fa fa-unlock");

                    $('#resizeiconModal').addClass("fa fa-lock");

                }

            } else {

                colors = document.getElementById("objectcolors");

                widthImage.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);

                widthvalueImage.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);

                heightImage.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);

                heightvalueImage.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);

                angleImage.value = e.target.getAngle();

                anglevalueImage.value = e.target.getAngle();

                if (modifiedObject._controlsVisibility.ml) {

                    $('#resizeicon').removeClass("fa fa-lock");

                    $('#resizeicon').addClass("fa fa-unlock");

                } else {

                    $('#resizeicon').removeClass("fa fa-unlock");

                    $('#resizeicon').addClass("fa fa-lock");

                }

            }

            colors.innerHTML = "";

            footer_menu.style.display = "none";

            footer_menu_text.style.display = "none";

            footer_menu_art.style.display = "block";



            if (modifiedObject.id.toString().indexOf("Uploaded") == -1) {



                if (isMobile()) {

                    artcolortransparentModal.style.display = "block";

                    artcolortransparentlegendModal.style.display = "block";

                    checkcolorlegendModal.style.display = "block";

                    inkcolorlist.style.display = "block";

                } else {

                    artcolortransparent.style.display = "block";

                    artcolortransparentlegend.style.display = "block";

                    checkcolorlegend.style.display = "block";

                    inkcolorlist.style.display = "block";

                }







                if (modifiedObject.filters.length > 0) {

                    var found = ListColors.find(function(element) {

                        if (("#" + element.Hex) == rgb2hex(modifiedObject.filters[modifiedObject.filters.length - 1].color)) {

                            return element;

                        }

                    });

                    var Art_color_name = found.Name;

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

                    divColor.addEventListener("click", function() {

                        idcolorselected = this.id;

                        colorselected = this.style.backgroundColor;

                        var listcircles = document.getElementsByClassName('color1');

                        for (var i = 0; i < listcircles.length; i++) {

                            listcircles[i].style.border = "1px solid #eee";

                        }

                        this.style.border = "2px solid #31B0D5";

                    });

                    colors.appendChild(divColor);

                    Art_color.innerHTML = Art_color_name;

                } else {

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

                    divColor.addEventListener("click", function() {

                        idcolorselected = this.id;

                        colorselected = this.style.backgroundColor;

                        var listcircles = document.getElementsByClassName('color1');

                        for (var i = 0; i < listcircles.length; i++) {

                            listcircles[i].style.border = "1px solid #eee";

                        }

                        this.style.border = "2px solid #31B0D5";

                    });

                    colors.appendChild(divColor);

                    Art_color.innerHTML = "Black";

                }

            } 

            else 

            {

                if (isMobile()) {

                    //artcolortransparentModal.style.display = "none";  

                    artcolortransparentlegendModal.style.display = "none";

                    checkcolorlegendModal.style.display = "none";

                    inkcolorlist.style.display = "none";

                } 

                else

                {

                    artcolortransparent.style.display = "none";

                    artcolortransparentlegend.style.display = "none";

                    checkcolorlegend.style.display = "none";

                    inkcolorlist.style.display = "none";

                }



                if (modifiedObject.colorlist != undefined) {

                    if (modifiedObject.colorlist.length > 88) {

                        var divColor = document.createElement("div");

                        divColor.innerHTML = "<b>COLOR EDIT: </b> NOT AVAILABLE FOR THIS IMAGE";

                        colors.appendChild(divColor);

                        var divrow = document.createElement("div");

                        divrow.className = "row";

                        var divcollabel = document.createElement("div");

                        divcollabel.className = "col-xs-6 col-sm-6 col-md-6 col-lg-6";

                        var spanl = document.createElement("span");

                        spanl.innerHTML = "<b>REMOVE WHITE</b>";

                        var divcolcheck = document.createElement("div");

                        divcolcheck.className = "col-xs-6 col-sm-6 col-md-6 col-lg-6";

                        if (modifiedObject.filters.length > 0) {

                            divcolcheck.innerHTML = '<label class="switch"><input type="checkbox" id="removewhite" onclick="RemoveWhite(this);" checked><span class="slider round"></span></label>';

                        } else {

                            divcolcheck.innerHTML = '<label class="switch"><input type="checkbox" id="removewhite" onclick="RemoveWhite(this);"><span class="slider round"></span></label>';

                        }

                        divcollabel.appendChild(spanl);

                        divrow.appendChild(divcollabel);

                        divrow.appendChild(divcolcheck);

                        colors.appendChild(divrow);



                        if (isMobile()) {

                            //inkcolorlistModal.style.display= "none";

                            inkcolorlistModal.innerHTML = "<b>FULL COLOR IMAGE</b>";

                        } else {

                            inkcolorlist.style.display = "none";

                        }

                        Art_color.innerHTML = "FULL COLOR IMAGE";

                    }
                     else
                      {

                        for (var i = 0; i < modifiedObject.colorlist.length; i++) {

                            var currentcolor = modifiedObject.colorlist[i];

                            var divColor = document.createElement("div");

                            divColor.style.backgroundColor = currentcolor;

                            divColor.style.width = "30px";

                            divColor.style.height = "30px";

                            divColor.style.borderRadius = "30px";

                            divColor.style.display = "inline-flex";

                            divColor.style.border = "1px solid #eee";

                            divColor.style.cursor = "pointer";

                            colors.appendChild(divColor);

                            var divColor = document.createElement("div");

                        }

                        divColor.innerHTML = "<b>COLOR EDIT: </b> NOT AVAILABLE FOR THIS IMAGE";

                        colors.appendChild(divColor);

                        var divrow = document.createElement("div");

                        divrow.className = "row";

                        var divcollabel = document.createElement("div");

                        divcollabel.className = "col-xs-6 col-sm-6 col-md-6 col-lg-6";

                        var spanl = document.createElement("span");

                        spanl.innerHTML = "<b>REMOVE WHITE</b>";

                        var divcolcheck = document.createElement("div");

                        divcolcheck.className = "col-xs-6 col-sm-6 col-md-6 col-lg-6";

                        if (modifiedObject.filters.length > 0) {

                            divcolcheck.innerHTML = '<label class="switch"><input type="checkbox" id="removewhite" onclick="RemoveWhite(this);" checked><span class="slider round"></span></label>';

                        } else {

                            divcolcheck.innerHTML = '<label class="switch"><input type="checkbox" id="removewhite" onclick="RemoveWhite(this);"><span class="slider round"></span></label>';

                        }

                        divcollabel.appendChild(spanl);

                        divrow.appendChild(divcollabel);

                        divrow.appendChild(divcolcheck);

                        colors.appendChild(divrow);



                        if (isMobile()) {

                            //inkcolorlistModal.style.display= "none";

                            inkcolorlistModal.innerHTML = "";

                        } else {

                            inkcolorlist.style.display = "none";

                        }

                        Art_color.innerHTML = "";

                    }

                } else {

                    if (isMobile()) {

                        artcolortransparentModal.style.display = "block";

                        artcolortransparentlegendModal.style.display = "block";

                        checkcolorlegendModal.style.display = "block";

                        inkcolorlist.style.display = "block";

                    } else {

                        artcolortransparent.style.display = "block";

                        artcolortransparentlegend.style.display = "block";

                        checkcolorlegend.style.display = "block";

                        inkcolorlist.style.display = "block";

                    }







                    if (modifiedObject.filters.length > 0) {

                        var found = ListColors.find(function(element) {

                            if (("#" + element.Hex) == rgb2hex(modifiedObject.filters[modifiedObject.filters.length - 1].color)) {

                                return element;

                            }

                        });

                        var Art_color_name = found.Name;

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

                        divColor.addEventListener("click", function() {

                            idcolorselected = this.id;

                            colorselected = this.style.backgroundColor;

                            var listcircles = document.getElementsByClassName('color1');

                            for (var i = 0; i < listcircles.length; i++) {

                                listcircles[i].style.border = "1px solid #eee";

                            }

                            this.style.border = "2px solid #31B0D5";

                        });

                        colors.appendChild(divColor);

                        Art_color.innerHTML = Art_color_name;

                    } else {

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

                        divColor.addEventListener("click", function() {

                            idcolorselected = this.id;

                            colorselected = this.style.backgroundColor;

                            var listcircles = document.getElementsByClassName('color1');

                            for (var i = 0; i < listcircles.length; i++) {

                                listcircles[i].style.border = "1px solid #eee";

                            }

                            this.style.border = "2px solid #31B0D5";

                        });

                        colors.appendChild(divColor);

                        Art_color.innerHTML = "Black";

                    }

                }



            }
        }

        



        editArt.style.display = 'block';



        changeClipArtMenuSize();



        newArt.style.display = 'none';



        activateMenu(e.target.type);



        font = 'ABeeZee-Regular';



        setTitleFont();

    } 

    else if (e.target.type == 'i-text') 

    {   

        

        if (isMobile()) 

        {

            document.getElementById("personalize_newModal").style.display = "block";

            document.getElementById("personalize_editModal").style.display = "none";

        } 

        else

        {

            $('.nav-tabs a[href="#personalize"]').tab('show');

            document.getElementById("personalize_new").style.display = "block";

            document.getElementById("personalize_edit").style.display = "none";

        }



        displaypersonalize(e.target.ctx.canvas.id, false);

    }

    else if (e.target.type == 'text' || e.target.type == 'curvedText') 

    {      

        

       

        setColorsInk();



        selectcolorsT();



        footer_menu.style.display = "none";



        footer_menu_text.style.display = "block";



        footer_menu_art.style.display = "none";



        $('.nav-tabs a[href="#textSection"]').tab('show');



        fontbtn.style.display = 'block';



        font_menu.style.display = "none";



        textmenu.style.display = 'block';



        activateMenu(e.target.type);



        var Text_color_name = "Black";







        var found = ListColors.find(function(element) 

        {

            

            if (("#" + element.Hex) == rgb2hex(modifiedObject.fill)) {

                return element;



            }



        });



        Text_color_name = found.Name;



        Text_color.innerHTML = Text_color_name;









        var Text_Stroke_color_name = "";



        var found = ListColors.find(function(element)



            {



                if (("#" + element.Hex) == rgb2hex(modifiedObject.stroke))



                {



                    return element;



                }



            });



        //Text_Stroke_color_name = found.Name;



        Text_strokecolor.innerHTML = Text_Stroke_color_name;



        document.getElementById("sizeText").value = Math.round(modifiedObject.getFontSize());



        document.getElementById('textarea').value = modifiedObject.text;



        document.getElementById('textarea2').value = modifiedObject.text;



        //document.getElementById("strokewidthvalue").value = modifiedObject.strokeWidth;



        //document.getElementById("strokewidth").value = modifiedObject.strokeWidth;



        document.getElementById("strokewidthvalueModal").value = modifiedObject.strokeWidth;



        document.getElementById("strokewidthModal").value = modifiedObject.strokeWidth;



        if (isMobile()) {

            document.getElementById('angleImageModal').value = e.target.getAngle();



            document.getElementById('anglevalueImageModal').value = e.target.getAngle();



        } else {

            document.getElementById('angleText').value = e.target.getAngle();



            document.getElementById('anglevalueText').value = e.target.getAngle();



        }












        if (modifiedObject.text != "")



        {



            var fonts = document.getElementsByClassName("fonts");



            for (i = 0; i < fonts.length; i++)



            {



                fonts[i].innerHTML = modifiedObject.text.substring(0, 7);



            }



        } else



        {



            var fonts = document.getElementsByClassName("fonts");



            for (i = 0; i < fonts.length; i++)



            {



                fonts[i].innerHTML = fonts[i].id;



            }



        }







        if (e.target.type == 'text')



        {



            texteffecsarea.style.display = "none";



            effect.checked = false;



        } 
        else



        {



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

        $('.nav-tabs a[href="#addArt"]').tab('show');



        var colors = null;

        var layerscolors = [];

        if (isMobile()) {

            colors = document.getElementById("objectcolorsModal");

            artcolortransparentModal.style.display = "block";

            artcolortransparentlegendModal.style.display = "block";

            checkcolorlegendModal.style.display = "block";

            inkcolorlist.style.display = "block";

             widthModal.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);

            widthvalueModal.value = (e.target.getWidth() * 1.3 / 35).toFixed(2);

            heightModal.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);

            heightvalueModal.value = (e.target.getHeight() * 1.3 / 35).toFixed(2);

            angleImageModal.value = e.target.getAngle();

            anglevalueImageModal.value = e.target.getAngle();

        } else {

            colors = document.getElementById("objectcolors");

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

        }

        colors.innerHTML = "";

        footer_menu.style.display = "none";

        footer_menu_text.style.display = "none";

        footer_menu_art.style.display = "block";



      



        for (var i = 0; i < modifiedObject._objects.length; i++) {

            if (!validate_layer(modifiedObject._objects[i], layerscolors)) {

                layerscolors.push(modifiedObject._objects[i]);

            }

        }







        if (layerscolors.length > 8) {



            var divColor = document.createElement("div");

            divColor.innerHTML = "<b>COLOR EDIT:</b> NOT AVAILABLE FOR THIS IMAGE";

            colors.appendChild(divColor);

            if (isMobile()) {

                inkcolorlistModal.style.display = "none";

            } else {

                inkcolorlist.style.display = "none";

            }

            Artcolor.innerHTML = "FULL COLOR IMAGE";



            if (isMobile()) {

                artcolortransparentModal.style.display = "none";

                artcolortransparentlegendModal.style.display = "none";

                checkcolorlegendModal.style.display = "none";

                inkcolorlist.style.display = "none";

            } else {

                artcolortransparent.style.display = "none";

                artcolortransparentlegend.style.display = "none";

                checkcolorlegend.style.display = "none";

                inkcolorlist.style.display = "none";

            }



        } else {

            setColorsInk();

            selectcolors();

            for (var i = 0; i < layerscolors.length; i++)



            {

               

                var currentcolor = layerscolors[i].fill;

                console.log(currentcolor);

                var idcurrentcolor = layerscolors[i].id.split(".")[0];

                var divColor = document.createElement("div");

                divColor.id = "color" + idcurrentcolor;

                if (currentcolor == "transparent") {

                    divColor.className = "color1 transparent2";

                } else {

                    divColor.className = "color1";

                }

                divColor.style.backgroundColor = currentcolor;

                divColor.style.width = "30px";

                divColor.style.height = "30px";

                divColor.style.borderRadius = "30px";

                divColor.style.display = "inline-flex";

                divColor.style.border = "1px solid #eee";

                divColor.style.cursor = "pointer";

                divColor.addEventListener("click", function() {

                    idcolorselected = this.id;

                    colorselected = this.style.backgroundColor;

                    var listcircles = document.getElementsByClassName('color1');

                    for (var i = 0; i < listcircles.length; i++) {

                        listcircles[i].style.border = "1px solid #eeeeee";

                    }

                    this.style.border = "2px solid #31B0D5";

                    if (isMobile()) {

                        document.getElementById("inkcolorlistModal").style.display = "block";

                    } else {

                        document.getElementById("inkcolorlist").style.display = "block";

                    }

                });

                colors.appendChild(divColor);



            }





        }



        editArt.style.display = 'block';



        changeClipArtMenuSize();



        newArt.style.display = 'none';



        activateMenu(e.target.type);



        font = 'ABeeZee-Regular';



        setTitleFont();

    }







}









front.on('mouse:up', function(e)



    {

        displayinfo(e);

    });







right.on('mouse:up', function(e)



    {

        displayinfo(e);



    });







back.on('mouse:up', function(e)



    {

        displayinfo(e);



    });









left.on('mouse:up', function(e)



    {

        displayinfo(e);



    });









var lastClosestAngle = 0,



    snapAfterRotate = false;







function calculateClosestAngle(targetObj) {



    // if angle > 360 then mod 360



    var currentAngle = targetObj.angle;



    //var normalizedAngle = Math.abs(Math.round(Math.asin(Math.sin(currentAngle * Math.PI/360.0)) * 360.0/Math.PI));



    var normalizedAngle = Math.abs(currentAngle);



    snapAfterRotate = true;



    /*if (normalizedAngle > 0 && normalizedAngle < 45) {



        return 45;



    } else if (normalizedAngle > 45 && normalizedAngle < 90) {



        return 90;



    } else if (normalizedAngle > 90 && normalizedAngle < 135) {



        return 135;



    } else if (normalizedAngle > 135 && normalizedAngle <= 180) {



        return 180;



    } else if (normalizedAngle > 180 && normalizedAngle < 225) {



        return 225;



    } else if (normalizedAngle > 225 && normalizedAngle < 270) {



        return 270;



    } else if (normalizedAngle > 270 && normalizedAngle <= 315) {



        return 315;



    } else if (normalizedAngle > 315 && normalizedAngle < 360) {



        return 360;



    } else{



      return normalizedAngle;



    }*/



    return normalizedAngle;



}







front.on("object:scaling", function(e)



    {



        if (isMobile())



        {



            document.getElementById('widthModal').value = (e.target.getWidth() * 1.3 / 35).toFixed(2);



            document.getElementById('widthvalueModal').value = (e.target.getWidth() * 1.3 / 35).toFixed(2);



            document.getElementById('heightModal').value = (e.target.getHeight() * 1.3 / 35).toFixed(2);



            document.getElementById('heightvalueModal').value = (e.target.getHeight() * 1.3 / 35).toFixed(2);



        } else



        {



            document.getElementById('widthImage').value = (e.target.getWidth() * 1.3 / 35).toFixed(2);



            document.getElementById('widthvalueImage').value = (e.target.getWidth() * 1.3 / 35).toFixed(2);



            document.getElementById('heightImage').value = (e.target.getHeight() * 1.3 / 35).toFixed(2);



            document.getElementById('heightvalueImage').value = (e.target.getHeight() * 1.3 / 35).toFixed(2);



        }



    });







right.on("object:scaling", function(e) {



    if (isMobile())



    {



        document.getElementById('widthModal').value = (e.target.getWidth() * 1.3 / 35).toFixed(2);



        document.getElementById('widthvalueModal').value = (e.target.getWidth() * 1.3 / 35).toFixed(2);



        document.getElementById('heightModal').value = (e.target.getHeight() * 1.3 / 35).toFixed(2);



        document.getElementById('heightvalueModal').value = (e.target.getHeight() * 1.3 / 35).toFixed(2);



    } else



    {



        document.getElementById('widthImage').value = (e.target.getWidth() * 1.3 / 35).toFixed(2);



        document.getElementById('widthvalueImage').value = (e.target.getWidth() * 1.3 / 35).toFixed(2);



        document.getElementById('heightImage').value = (e.target.getHeight() * 1.3 / 35).toFixed(2);



        document.getElementById('heightvalueImage').value = (e.target.getHeight() * 1.3 / 35).toFixed(2);



    }



});









back.on("object:scaling", function(e) {



    if (isMobile())



    {



        document.getElementById('widthModal').value = (e.target.getWidth() * 1.3 / 35).toFixed(2);



        document.getElementById('widthvalueModal').value = (e.target.getWidth() * 1.3 / 35).toFixed(2);



        document.getElementById('heightModal').value = (e.target.getHeight() * 1.3 / 35).toFixed(2);



        document.getElementById('heightvalueModal').value = (e.target.getHeight() * 1.3 / 35).toFixed(2);



    } else



    {



        document.getElementById('widthImage').value = (e.target.getWidth() * 1.3 / 35).toFixed(2);



        document.getElementById('widthvalueImage').value = (e.target.getWidth() * 1.3 / 35).toFixed(2);



        document.getElementById('heightImage').value = (e.target.getHeight() * 1.3 / 35).toFixed(2);



        document.getElementById('heightvalueImage').value = (e.target.getHeight() * 1.3 / 35).toFixed(2);



    }



});









left.on("object:scaling", function(e) {



    if (isMobile())



    {



        document.getElementById('widthModal').value = (e.target.getWidth() * 1.3 / 35).toFixed(2);



        document.getElementById('widthvalueModal').value = (e.target.getWidth() * 1.3 / 35).toFixed(2);



        document.getElementById('heightModal').value = (e.target.getHeight() * 1.3 / 35).toFixed(2);



        document.getElementById('heightvalueModal').value = (e.target.getHeight() * 1.3 / 35).toFixed(2);



    } else



    {



        document.getElementById('widthImage').value = (e.target.getWidth() * 1.3 / 35).toFixed(2);



        document.getElementById('widthvalueImage').value = (e.target.getWidth() * 1.3 / 35).toFixed(2);



        document.getElementById('heightImage').value = (e.target.getHeight() * 1.3 / 35).toFixed(2);



        document.getElementById('heightvalueImage').value = (e.target.getHeight() * 1.3 / 35).toFixed(2);



    }



});









front.on("object:rotating", function(rotEvtData) {



    var targetObj = rotEvtData.target;



    lastClosestAngle = calculateClosestAngle(targetObj);



});







right.on("object:rotating", function(rotEvtData) {



    var targetObj = rotEvtData.target;



    lastClosestAngle = calculateClosestAngle(targetObj);



});







back.on("object:rotating", function(rotEvtData) {



    var targetObj = rotEvtData.target;



    lastClosestAngle = calculateClosestAngle(targetObj);



});







left.on("object:rotating", function(rotEvtData) {



    var targetObj = rotEvtData.target;



    lastClosestAngle = calculateClosestAngle(targetObj);



});







//function used to keep objects in the canvas.



front.on("object:modified", function(e)



    {



        save();



        //validate_size(front.getActiveObject(),1);   



        var modifiedObj = e.target;



        var bound = modifiedObj.getBoundingRect();



        if (bound.left < 0 || bound.top < 0 || bound.left + bound.width > front.getWidth() || bound.top + bound.height > front.getHeight())



        {



            modifiedObj.set('borderColor', '#4fc1f0');



            document.getElementById('frontdesingerror').style.display = 'block';



        } else



        {



            modifiedObj.set('borderColor', '#4fc1f0');



            document.getElementById('frontdesingerror').style.display = 'none';



        }



        if (modifiedObj.angle && snapAfterRotate) {



            modifiedObj.setAngle(lastClosestAngle);



            snapAfterRotate = false;









            front.renderAll();



        }







    });







right.on("object:modified", function(e)



    {



        var modifiedObj = e.target;



        var bound = modifiedObj.getBoundingRect();



        if (bound.left < 0 || bound.top < 0 || bound.left + bound.width > right.getWidth() || bound.top + bound.height > right.getHeight())



        {



            modifiedObj.set('borderColor', '#4fc1f0');



            document.getElementById('rightdesingerror').style.display = 'block';



        } else



        {



            modifiedObj.set('borderColor', '#4fc1f0');



            document.getElementById('rightdesingerror').style.display = 'none';



        }



        if (modifiedObj.angle && snapAfterRotate) {



            modifiedObj.setAngle(lastClosestAngle);



            snapAfterRotate = false;









            right.renderAll();



        }



        save();



    });







back.on("object:modified", function(e)



    {



        var modifiedObj = e.target;



        var bound = modifiedObj.getBoundingRect();



        if (bound.left < 0 || bound.top < 0 || bound.left + bound.width > back.getWidth() || bound.top + bound.height > back.getHeight())



        {



            modifiedObj.set('borderColor', '#4fc1f0');



            document.getElementById('backdesingerror').style.display = 'block';



        } else



        {



            modifiedObj.set('borderColor', '#4fc1f0');



            document.getElementById('backdesingerror').style.display = 'none';



        }



        if (modifiedObj.angle && snapAfterRotate) {



            modifiedObj.setAngle(lastClosestAngle);



            snapAfterRotate = false;









            back.renderAll();



        }



        save();



    });







left.on("object:modified", function(e)



    {



        var modifiedObj = e.target;



        var bound = modifiedObj.getBoundingRect();



        if (bound.left < 0 || bound.top < 0 || bound.left + bound.width > left.getWidth() || bound.top + bound.height > left.getHeight())



        {



            modifiedObj.set('borderColor', '#4fc1f0');



            document.getElementById('leftdesingerror').style.display = 'block';



        } else



        {



            modifiedObj.set('borderColor', '#4fc1f0');



            document.getElementById('leftdesingerror').style.display = 'none';



        }



        if (modifiedObj.angle && snapAfterRotate) {



            modifiedObj.setAngle(lastClosestAngle);



            snapAfterRotate = false;









            left.renderAll();



        }



        save();



    });







front.on('after:render', function()



    {



        front.forEachObject(function(obj)



            {



                var array = [];



                array.push(obj.getBoundingRect().width);



                array.push(obj.getBoundingRect().height);



                array.push(obj.getBoundingRect().left);



                array.push(obj.getBoundingRect().top);



                obj.strokeDashArray = array;







                /*var bound = obj.getBoundingRect();







                if (bound.left < 0 || bound.top < 0 || bound.left + bound.width > front.getWidth() || bound.top + bound.height > front.getHeight()) 



                { 



                  obj.set('borderColor','#4fc1f0');  



                }



                else



                {



                  obj.set('borderColor','#4fc1f0');   



                }*/







                /*front.getContext().strokeRect(



                    bound.left + 0.5,



                    bound.top + 0.5,



                    bound.width,



                    bound.height



                );*/









            })



    });







right.on('after:render', function()



    {



        right.forEachObject(function(obj)



            {



                var array = [];



                array.push(obj.getBoundingRect().width);



                array.push(obj.getBoundingRect().height);



                array.push(obj.getBoundingRect().left);



                array.push(obj.getBoundingRect().top);



                obj.strokeDashArray = array;



            })



    });







back.on('after:render', function()



    {



        back.forEachObject(function(obj)



            {



                var array = [];



                array.push(obj.getBoundingRect().width);



                array.push(obj.getBoundingRect().height);



                array.push(obj.getBoundingRect().left);



                array.push(obj.getBoundingRect().top);



                obj.strokeDashArray = array;



            })



    });







left.on('after:render', function()



    {



        left.forEachObject(function(obj)



            {



                var array = [];



                array.push(obj.getBoundingRect().width);



                array.push(obj.getBoundingRect().height);



                array.push(obj.getBoundingRect().left);



                array.push(obj.getBoundingRect().top);



                obj.strokeDashArray = array;



            })



    });









function savefrontcanvastmp()



{









    //html2canvas($("#frontcanvas-wrapper"), {







        //onrendered: function(frontCanvas) {







            var srcimg = frontCanvas.toDataURL("image/png");







            document.getElementById('frontSavePreview').src = srcimg;







            document.getElementById('frontPreviewSave').src = srcimg;







            document.getElementById('sharePreviewFront').src = srcimg;







            document.getElementById('frontImageURL').value = srcimg;







            document.getElementById('frontSavePreview2').src = srcimg;







        //},







    //});







}









function saverightcanvastmp()







{







    //html2canvas($("#rightcanvas-wrapper"), {







        //onrendered: function(rightCanvas) {







            var srcimg = rightCanvas.toDataURL("image/png");







            document.getElementById('rightSavePreview').src = srcimg;







            document.getElementById('rightPreviewSave').src = srcimg;







            document.getElementById('sharePreviewRight').src = srcimg;







            document.getElementById('rightImageURL').value = srcimg;







            document.getElementById('rightSavePreview2').src = srcimg;









        //},







    //});







}









function savebackcanvastmp()







{







    //html2canvas($("#backcanvas-wrapper"), {







        //onrendered: function(backCanvas) {







            var srcimg = backCanvas.toDataURL("image/png");







            document.getElementById('backSavePreview').src = srcimg;







            document.getElementById('backPreviewSave').src = srcimg;







            document.getElementById('sharePreviewBack').src = srcimg;







            document.getElementById('backImageURL').value = srcimg;







            document.getElementById('backSavePreview2').src = srcimg;







        //},







    //});







}









function saveleftcanvastmp()







{







   // html2canvas($("#leftcanvas-wrapper"), {







        //onrendered: function(leftCanvas) {







            var srcimg = leftCanvas.toDataURL("image/png");







            document.getElementById('leftSavePreview').src = srcimg;







            document.getElementById('leftPreviewSave').src = srcimg;







            document.getElementById('sharePreviewLeft').src = srcimg;







            document.getElementById('leftImageURL').value = srcimg;







            document.getElementById('leftSavePreview2').value = srcimg;







       // },







    //});







}









function savetmpdesign()







{







    //save();









    switch (canvasCounter) {







        case 1:







            savefrontcanvastmp();







            break







        case 2:







            saverightcanvastmp();







            break;







        case 3:







            savebackcanvastmp();







            break;







        default:







            saveleftcanvastmp();







    }









}









function temp(element)



{



    Order._Product_design_list[position].getObjectByName(element.id)._quantity = Number(element.value);



    quantity = Order._Product_design_list[position].numshirts();



    calc_price();



}







function calc_price()







{





    /*if ((document.getElementById("textpersonalizecheck").checked || document.getElementById("textpersonalizecheckModal").checked) && (document.getElementById("numberpersonalizecheck").checked || document.getElementById("numberpersonalizecheckModal").checked))

    {

      Order._Product_design_list[position]._personalizetype = "both";

    }

    else if ((document.getElementById("textpersonalizecheck").checked || document.getElementById("textpersonalizecheckModal").checked) && (!document.getElementById("numberpersonalizecheck").checked || !document.getElementById("numberpersonalizecheckModal").checked))

    {

     Order._Product_design_list[position]._personalizetype = "text only";

    }

    else if ((!document.getElementById("textpersonalizecheck").checked || !document.getElementById("textpersonalizecheckModal").checked) && (document.getElementById("numberpersonalizecheck").checked || document.getElementById("numberpersonalizecheckModal").checked))

    {

     Order._Product_design_list[position]._personalizetype = "number only";

    }

    else

    {*/

        Order._Product_design_list[position]._personalizetype = "none";

    //}







    $.ajax({







        cache: false,

        type: "POST",



        url: "https://www.vividcustoms.com/get_quote.php",







        data: {







            amnt: quantity,







            f_colors: Order._Product_design_list[position]._design._sideList[0]._ColorList.length - Order._Product_design_list[position]._design._sideList[0]._ColorPersonalizeList.length,







            r_colors: Order._Product_design_list[position]._design._sideList[1]._ColorList.length,







            b_colors: Order._Product_design_list[position]._design._sideList[2]._ColorList.length - Order._Product_design_list[position]._design._sideList[2]._ColorPersonalizeList.length,







            l_colors: Order._Product_design_list[position]._design._sideList[3]._ColorList.length,







            product: JSON.stringify(Order._Product_design_list[position]._Product),





            f_personalize_colors: JSON.stringify(Order._Product_design_list[position]._design._sideList[0]._ColorPersonalizeList),





            b_personalize_colors: JSON.stringify(Order._Product_design_list[position]._design._sideList[2]._ColorPersonalizeList),





            list: JSON.stringify(Order._Product_design_list[position]._sizeList),





            personalizesizelist: JSON.stringify(Order._Product_design_list[position]._sizepersonalizeList),



            personalizelist: JSON.stringify(Order._Product_design_list[position]._personalize),



            personalizetype:  Order._Product_design_list[position]._personalizetype,







        },







        beforeSend: function() {





           



        },



        success: function(msg)







        {



          





            //display price in "Add Product and Styles"







            if (quantity > 0)







            {









                //document.getElementById('totalPriceLabel').innerHTML = msg;







                //price.total = Number(msg);







                document.getElementById("itemPriceLabel").style.visibility = "visible";







                document.getElementById("itemPriceLabel").style.display = "block";







                //itemTotal = (price.num_shirts) * pricePerUnit;                







                document.getElementById('itemPrice').style.visibility = "visible";







                document.getElementById('itemPrice').style.display = "inline";







                document.getElementById('itemPrice').innerHTML = "$" + (msg / quantity).toFixed(2);







                Order._Product_design_list[position]._price_per_shirt = (msg / quantity).toFixed(2);







                document.getElementById("numOfShirtsLabel").style.visibility = "visible";







                document.getElementById('numOfShirtsLabel').innerHTML = " <b>Quantity:</b> <span style='color: #5cb85c; font-family: Arial;'>" + quantity + " item(s)</span> ";







                document.getElementById("itemTotal").style.visibility = "visible";







                document.getElementById('itemTotal').innerHTML = "$" + (msg * 1).toFixed(2);







                Order._Product_design_list[position]._total = (msg * 1).toFixed(2);







                document.getElementById("itemTotalLabel").style.visibility = "visible";







            } else







            {







                document.getElementById("itemPriceLabel").style.visibility = "visible";







                document.getElementById("itemPriceLabel").style.display = "block";







                //itemTotal = (price.num_shirts) * pricePerUnit;                







                document.getElementById('itemPrice').style.visibility = "visible";







                document.getElementById('itemPrice').style.display = "inline";







                document.getElementById('itemPrice').innerHTML = "$0";







                document.getElementById("numOfShirtsLabel").style.visibility = "visible";







                document.getElementById('numOfShirtsLabel').innerHTML = " <b>Quantity:</b> <span style='color: #5cb85c; font-family: Arial;'> 0 item(s)</span> ";







                document.getElementById("itemTotal").style.visibility = "visible";







                document.getElementById('itemTotal').innerHTML = "$0";







                document.getElementById("itemTotalLabel").style.visibility = "visible";







            }







            //showing shipping information when







            //getShippingInformation();







        },



        error: function(error)







        {







            console.log("error in method calc_price('" + element + "'):");



            console.log(error);







        }







    });







}









function getShippingInformation()



{



    var div = document.getElementById('shippingSection').style.visibility = "visible";







    var deliveryDate = new Date();







    //MAKE SURE THIS LINE IS WRITE SINCE I'M TESTING WITH IT







    deliveryDate.setDate(deliveryDate.getDate() + 14);







    //make sure delivery date isn't on weekend







    if (deliveryDate.getDay() == 6)



    {







        deliveryDate.setDate(deliveryDate.getDate() + 2);







    } else if (deliveryDate.getDate() == 0)



    {







        deliveryDate.setDate(deliveryDate.getDate() + 1);







    }







    //making sure deliveryDate isn't on a federal holiday







    var newYears = new Date(2017, 0, 1);







    var independenceDay = new Date(2017, 6, 4);







    var VETRANS_DAY = new Date(2017, 10, 11);







    var christmas = new Date(2017, 11, 25);







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







    var washington = new Date(c.getFullYear(), 1, 1);







    day = washington.getDay();







    target = 1;







    diff = target - day;







    day = diff + 21 + 1;







    washington.setDate(day);







    //finding Memorial Day







    var memorial = new Date(c.getFullYear(), 5, 0);







    day = memorial.getDay();







    target = 1;







    if (day > target)



    {







        diff = target - day;







        day = 31 + diff;







        memorial.setDate(day);







    } else if (day < target)



    {







        memorial.setDate(memorial.getDate() - 6);







    }







    //finding Labor Day







    var labor = new Date(c.getFullYear(), 8, 1);







    day = labor.getDay();







    target = 1;







    if (day > target)



    {







        diff = day - target;







        day = 7 - diff;







        labor.setDate(day + 1); //adding 1 because day is zero based and the date isn't







    } else if (day < target)



    {







        day++;







        labor.setDate(day);







    }







    //finding Columbus Day







    var columbus = new Date(c.getFullYear(), 9, 1);







    day = columbus.getDay();







    target = 1;







    if (day > target)



    {







        diff = day - target;







        day = 7 - diff;







        day = day + 7;







    } else if (day < target)



    {







        day = day + 1 + 7;







    } else



    {







        day += 7;







    }







    columbus.setDate(day + 1);







    //finding thanksgiving







    var thanksgiving = new Date(c.getFullYear(), 10, 1);







    day = thanksgiving.getDay();







    target = 4;







    diff = target - day;







    day = diff + 21 + 1;







    thanksgiving.setDate(day);









    //making sure the delivery date isn't a holiday







    if (newYears.getMonth() == deliveryDate.getMonth() && newYears.getDate() == deliveryDate.getDate() ||







        independenceDay.getMonth() == deliveryDate.getMonth() && independenceDay.getDate() == deliveryDate.getDate() ||







        VETRANS_DAY.getMonth() == deliveryDate.getMonth() && VETRANS_DAY.getDate() == deliveryDate.getDate() ||







        christmas.getMonth() == deliveryDate.getMonth() && christmas.getDate() == deliveryDate.getDate() ||







        mlk.getMonth() == deliveryDate.getMonth() && mlk.getDate() == deliveryDate.getDate() ||







        washington.getMonth() == deliveryDate.getMonth() && washington.getDate() == deliveryDate.getDate() ||







        memorial.getMonth() == deliveryDate.getMonth() && memorial.getDate() == deliveryDate.getDate() ||







        labor.getMonth() == deliveryDate.getMonth() && labor.getDate() == deliveryDate.getDate() ||







        columbus.getMonth() == deliveryDate.getMonth() && columbus.getDate() == deliveryDate.getDate() ||







        thanksgiving.getMonth() == deliveryDate.getMonth() && thanksgiving.getDate() == deliveryDate.getDate())



    {







        deliveryDate.setDate(deliveryDate.getDate() + 1);







    }







    //arrays for date formatting







    var day = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];







    var month = ['Janurary', 'Feburary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];







    document.getElementById('deliveryDate').innerHTML = day[deliveryDate.getDay()] + ", " + month[deliveryDate.getMonth()] + " " + deliveryDate.getDate();



}









function loadCart(body)



{



    if (Order._Product_design_list.length <= 0)



    {







        //document.getElementById("getPriceLabel").innerHTML = "Get Price"; 



        document.getElementById("Cart").style.display = "none";



        document.getElementById("finalcheckout").style.display = "none";



        buildcart(body);



    } 

    else if (Order._Product_design_list.length == 1)



    {



        if (Order._Product_design_list[position]._status == "In Cart")



        {



            //document.getElementById("getPriceLabel").innerHTML = "View Cart";



            document.getElementById("Cart").style.display = "block";



            document.getElementById("directcheckout").style.display = "inline-block";



            buildcart(body);



        } else



        {



            //document.getElementById("getPriceLabel").innerHTML = "Get Price"; 



            document.getElementById("Cart").style.display = "none";



            document.getElementById("finalcheckout").style.display = "none";



            document.getElementById("directcheckout").style.display = "none";



            buildcart("Cart-Body");



            buildcart('Cart-body-section');



        }



    } else



    {



        if (Order._Product_design_list[Order._Product_design_list.length - 2]._status == "In Cart")



        {







            //document.getElementById("getPriceLabel").innerHTML = "View Cart";



            document.getElementById("Cart").style.display = "block";



            document.getElementById("directcheckout").style.display = "inline-block";



            buildcart(body);



        } else



        {



            //document.getElementById("getPriceLabel").innerHTML = "Get Price"; 



            document.getElementById("Cart").style.display = "none";



            document.getElementById("finalcheckout").style.display = "none";



            document.getElementById("directcheckout").style.display = "none";



        }



    }









}







function buildcart(body)



{



    var Cartbody = document.getElementById(body);



    while (Cartbody.firstChild /*&& Cartbody.firstChild.id != "Cart-Total" */ ) Cartbody.removeChild(Cartbody.firstChild);



    for (var i = 0; i < Order._Product_design_list.length; i++)



    {

        



        if (Order._Product_design_list[i]._status === "In Cart" /*&&  Order._Product_design_list[i]._Product != null|| Order._Product_design_list[i]._status == "saved"*/ )



        {

            /*if (isMobile())

            {

                document.getElementById("cart_brand").style.display = "none";

                document.getElementById("cart_color").style.display = "none";

                document.getElementById("cart_size").style.display = "none";

                document.getElementById("cart_price").style.display = "none";

            }

            else

            {

                document.getElementById("cart_brand").style.display = "block";

                document.getElementById("cart_color").style.display = "block";

                document.getElementById("cart_size").style.display = "block";

                document.getElementById("cart_price").style.display = "block";

            }*/



            var tr = document.createElement("tr");



            tr.className = "row";



            var tdimg = document.createElement("td");



            tdimg.className = "col-lg-1 col-md-1 col-sm-1 col-xs-1 ";



            var img = document.createElement("img");



            img.src = Order._Product_design_list[i]._design._sideList[0]._design_product_image + '?v=' + Math.floor((Math.random() * 10000) + 1);



            img.style.width = "74px";



            img.style.height = "81px";



            var brimage = document.createElement("br");



            var aimage = document.createElement("a");



            aimage.id = Order._Product_design_list[i]._design._design_name;



            tdimg.className = "text-center";



            aimage.innerHTML = "edit";



            aimage.style.cursor = "pointer";



            aimage.href = "https://www.vividcustoms.com/designstudio/editdesign/" + Order._Product_design_list[i]._design._design_name;



            var tdbrandstyle = document.createElement("td");



           /* if (isMobile())

            {

                tdbrandstyle.style.display = "none";

            }

            else

            {

                tdbrandstyle.style.display = "block";

            }*/



            tdbrandstyle.className = "col-lg-2 col-md-2 col-sm-2 col-xs-2  visible-lg visible-md";



            tdbrandstyle.innerHTML = Order._Product_design_list[i]._Product.Brand + " " + Order._Product_design_list[i]._Product.StyleNumber;



            var tdcolor = document.createElement("td");



           /* if (isMobile())

            {

                tdcolor.style.display = "none";

            }

            else

            {

                tdcolor.style.display = "block";

            }*/



            tdcolor.className = "col-lg-1 col-md-1 col-sm-1 col-xs-1  visible-lg visible-md";



            tdcolor.innerHTML = Order._Product_design_list[i]._Product.Colors;



            var tdsizes = document.createElement("td");



           /* if (isMobile())

            {

                tdsizes.style.display = "none";

            }

            else

            {

                tdsizes.style.display = "block";

            }*/



            tdsizes.className = "col-lg-2 col-md-2 col-sm-2 col-xs-2  visible-lg visible-md";



            tdsizes.innerHTML = Order._Product_design_list[i].sizes();



            var tdquantity = document.createElement("td");



            tdquantity.className = "col-lg-1 col-md-1 col-sm-1 col-xs-1";



            tdquantity.innerHTML = Order._Product_design_list[i].numshirts();



            var tdpricepershirt = document.createElement("td");



            /*if (isMobile())

            {

                tdpricepershirt.style.display = "none";

            }

            else

            {

                tdpricepershirt.style.display = "block";

            }*/





            tdpricepershirt.className = "col-lg-2 col-md-2 col-sm-2 col-xs-2  visible-lg visible-md";



            tdpricepershirt.innerHTML = "$" + (Order._Product_design_list[i]._price_per_shirt * 1).toFixed(2);



            var tdtotal = document.createElement("td");



            tdtotal.className = "col-lg-2 col-md-2 col-sm-2 col-xs-2";



            tdtotal.innerHTML = "$" + (Order._Product_design_list[i]._total * 1).toFixed(2);



            var tdbutton = document.createElement("td");



            tdbutton.className = "col-lg-1 col-md-1 col-sm-1 col-xs-1";



            var button = document.createElement("button");



            button.className = "btn btn-danger";



            button.id = i;



            button.addEventListener("click", function() {



                //this.parentElement.style.display='none';         



                var row = this.parentNode.parentNode;



                row.parentNode.removeChild(row);



                



                if (Order._Product_design_list.length == 1 )



                {

                    document.getElementById("Cart").style.display = "none";



                    document.getElementById("finalcheckout").style.display = "none";



                    position = 0;



                    Order._Product_design_list[position]._status = "created";



                    Order._Product_design_list[position]._num_shirts = 0;



                    Order._Product_design_list[position]._price_per_shirt = 0;



                    Order._Product_design_list[position]._total = 0;



                    document.getElementById("directcheckout").style.display = "none";



                    Order._subtotal = 0;



                    Order._tax = 0;



                    Order._shipping_cost = 0;



                    Order._discount = 0;



                    Order._total = 0;



                    totalPriceh4.innerHTML = "Total Price: $" + Order._total;



                    document.getElementById('itemPrice').innerHTML = "0.00";



                    document.getElementById('numOfShirtsLabel').innerHTML = "<b>Quantity:</b> <span style='color: #5cb85c; font-family: Arial;'> 0 item(s)</span>";



                    document.getElementById('itemTotal').innerHTML = "0.00";



                    document.getElementById('KeepDesign').style.display = "none";



                    document.getElementById('designemail').value = "";



                    document.getElementById('designName').value = "";



                }

                 else



                { 



                    Order.deleteProductDesign(this.id);



                    var tmpselect = document.getElementById("mydesings");



                    tmpselect.remove(this.id);



                    position = Order._Product_design_list.length - 1;



                    loadCart("Cart-Body");



                    //loadCart('Cart-body-section');   



                }



                



                updateOrderInfo();



                updateOrderSession();



               



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



            //Order._Product_design_list[i]._status = "In Cart";



        }



    }









    var trTotal = document.createElement("tr");



    var tdordertotal = document.createElement("td");



    if (isMobile())

    {

        tdordertotal.colSpan = 3;

    }

    else

    {

        tdordertotal.colSpan = 7;    

    }



    var spanordertotal = document.createElement("span");



    spanordertotal.innerHTML = "Order Total";



    spanordertotal.style.float = "right";



    var tdtotal = document.createElement("td");



    

    if (isMobile())

    {

        tdtotal.colSpan = 1;

    }

    else

    {

        tdtotal.colSpan = 3;

    }



    tdtotal.innerHTML = "$" + (Order.Total() * 1).toFixed(2);



    tdordertotal.appendChild(spanordertotal);



    trTotal.appendChild(tdordertotal);



    trTotal.appendChild(tdtotal);







    var trsubTotal = document.createElement("tr");



    var tdordersubtotal = document.createElement("td");



    if (isMobile())

    {

        tdordersubtotal.colSpan = 3;

    }

    else

    {

        tdordersubtotal.colSpan = 7;

    }



    



    var spanordersubtotal = document.createElement("span");



    spanordersubtotal.innerHTML = "Order Total";



    spanordersubtotal.style.float = "right";



    var tdsubtotal = document.createElement("td");



    if (isMobile())

    {

        tdsubtotal.colSpan = 1;

    }

    else

    {

        tdsubtotal.colSpan = 3;

    }





    tdsubtotal.innerHTML = "$" + (Order._subtotal * 1).toFixed(2);



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



    tdDiscount.innerHTML = "$" + Order._discount;



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



    tdshippingcost.innerHTML = "$" + Order._shipping_cost;



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



    tdTax.innerHTML = "$" + Order._tax;



    tdorderTax.appendChild(spanorderTax);



    trTax.appendChild(tdorderTax);



    trTax.appendChild(tdTax);



    Cartbody.appendChild(trsubTotal);



    totalPriceh4.innerHTML = "Total Price: $" + Order._total;







}









function updateOrderInfo()







{







    //position = Order._Product_design_list.length-1;



    var jsonOrder = JSON.stringify(Order);







    $.ajax({







        cache: false,

        type: "POST",







        url: "https://www.vividcustoms.com/sessionInfo.php",







        data: {



            value: "Order",







            operation: "update",







            Order: jsonOrder,



        },







        success: function(data)



        {



            //get the complete order saved in the database



            //Order = JSON.parse(data);



            // Ordertmp = JSON.parse(data); 



            //loadOrder(Ordertmp);



        },







        error: function(error)







        {







            console.log("error in method updateOrderInfo():");



            console.log(error);







        }







    });







}









function set_active_menu_btn(id)



{

    /*

        //gradding all of the menu buttons



        var btn_arr = document.getElementsByClassName("menu_btn");



        for (var i = 0; i < btn_arr.length; i++) 



        {



          //checking if the button is the one we clicked on, if it is we are going to make it grey



          if(btn_arr[i].id == id && btn_arr[i].src.indexOf("-hover") > 0)



          {



            btn_arr[i].onmouseover = null;



            btn_arr[i].onmouseout = null;



          }



          //if the button is not the one we clicked on then we will make is blue and reset the hover effect



          else



          {



            btn_arr[i].src = btn_arr[i].src.replace("-hover", "" );



            btn_arr[i].onmouseover = function(){this.src = this.src.substring(0, this.src.indexOf(".png")) + "-hover.png";};



            btn_arr[i].onmouseout = function(){this.src = this.src.replace("-hover", "" );}; 



          }



        }*/



}







function show_hover_color(color)



{



    var hover_colors = document.getElementsByClassName("hover_color");



    for (var i = 0; i < hover_colors.length; i++) {

        hover_colors[i].innerHTML = color;

    }



}





function deselectAllCanvases()







{







    front.deactivateAll();







    front.renderAll();







    right.deactivateAll();







    right.renderAll();







    back.deactivateAll();







    back.renderAll();







    left.deactivateAll();







    left.renderAll();







}









$('#changeproduct').on('click', function(e) {


    $.ajax({

        cache: false,

        type: "POST",

        url: "https://www.vividcustoms.com/generalInfo.php",

        data: {

            clave: "ProductList",

            table: 'product',

            step: 4,

        },

        success: function(data) {



            var x = document.getElementById("accordion");

            x.innerHTML = data;

            $('#productModal').modal({

                backdrop: 'static',

                keyboard: false

            });

        },

        error: function(error) {

            console.log("error in event changeproduct(click)");

            console.log(error);

        }

    });

});





$('#changeproductModal').on('click', function(e) {

    $.ajax({

        cache: false,

        type: "POST",

        url: "https://www.vividcustoms.com/generalInfo.php",

        data: {

            clave: "ProductList",

            table: 'product',

            step: 2,

        },

        success: function(data) {

            $('#productSectionModal').modal('hide');

            var x = document.getElementById("accordion");

            x.innerHTML = data;

            $('#productModal').modal({

                backdrop: 'static',

                keyboard: false

            });

        },

        error: function(error) {

            console.log("error in event changeproduct(click)");

            console.log(error);

        }

    });

});









//when add_shirt_btn ("add shirt color") is clicked the productModal will appear for the customer to pick out a new shirt to put there design on'







$("#add_shirt_btn").on('click', function(e) {







    $('#productModal').modal({







        backdrop: 'static',







        keyboard: false







    });







});









function showColorModal(modalname)







{







    $('#' + modalname).modal({







        backdrop: 'static',







        keyboard: false







    });







}









function CloseModal(element)







{







    $('#' + element).modal('hide');







}









function activateMenu(type)



{

    var add_art = document.getElementById("add_art");

    var add_text = document.getElementById("add_text");

    var elements = document.getElementsByClassName("menu_btn");

    for (var i = 0; i < elements.length; i++) {

        elements[i].style.backgroundColor = "#31b0d5";

    }



    if (type == "image" || type == "group") {

        add_art.style.backgroundColor = "#9eb1ba";

    } else if (type == "text" || type == "CurvedText") {

        add_text.style.backgroundColor = "#9eb1ba";

    }

    /*else

    {

      type.style.backgroundColor="#9eb1ba";

    }*/

}







function login()



{







    var username = document.getElementById('user_name');



    var password = document.getElementById('pass_word');



    var operation = document.getElementById('operationL');







    if (username.value == "" && password.value == "")



    {



        ShowAlert('fieldsloginempty', "The username and password are empty. Please enter username and password", 'danger', 'Login Error');



    } else if (username.value == "" && password.value != "")



    {



        ShowAlert('usernameloginempty', "The username is empty. Please enter an username", 'danger', 'Login Error');



    } else if (username.value != "" && password.value == "")



    {



        ShowAlert('passwoordloginempty', "The password is empty. Please enter a password", 'danger', 'Login Error');



    } else



    {



        $.ajax({







            cache: false,



            type: "POST",







            url: "https://www.vividcustoms.com/signuplogin.php",







            data:



            {







                username: username.value,







                password: password.value,







                operation: operation.value,







            },







            beforeSend: function()



            {







            },



            success: function(result)



            {



               





                if (IsJsonString(result))



                {



                    var signup = document.getElementById("signup").style.display = "none";



                    var logout = document.getElementById("logout").style.display = "inline";



                    CloseModal('signupModal');

                    document.getElementById("logoutmobile").style.display = "block";



                    Order._Customer = JSON.parse(result);


                    if (Order._Customer == null || Order._Customer.Role == "Customer")



                    {

                        document.getElementById('saveStoreLI').style.display = "none";


                        //document.getElementById('personalizeLI').style.display = "block";


                        document.getElementById('saveTemplateLI').style.display = "none";



                        document.getElementById('your_design').style.display = "block";



                        document.getElementById('saveSectionLI').style.display = "inline";



                        document.getElementById('getPriceBtn').style.display = "inline";



                        document.getElementById('totalPriceLabel').style.display = "inline";



                        document.getElementById('totalPriceh4').style.display = "inline";

                        fillmydesigns();



                    }

                    else if (Order._Customer.Role == "Store Designer")

                    {

                        

                        //document.getElementById('personalizeLI').style.display = "none";


                        document.getElementById('saveStoreLI').style.display = "block";


                        document.getElementById('saveTemplateLI').style.display = "none";



                        document.getElementById('your_design').style.display = "none";



                        document.getElementById('saveSectionLI').style.display = "none";



                        document.getElementById('getPriceBtn').style.display = "none";



                        document.getElementById('totalPriceLabel').style.display = "none";



                        document.getElementById('totalPriceh4').style.display = "none";

                    }

                    else



                    {



                        //document.getElementById('personalizeLI').style.display = "none";

                        document.getElementById('saveTemplateLI').style.display = "block";

                        
                        document.getElementById('saveStoreLI').style.display = "none";


                        document.getElementById('your_design').style.display = "none";



                        document.getElementById('saveSectionLI').style.display = "none";



                        document.getElementById('getPriceBtn').style.display = "none";



                        document.getElementById('totalPriceLabel').style.display = "none";



                        document.getElementById('totalPriceh4').style.display = "none";

                    }







                } else



                {



                    ShowAlert("loginerror", 'Your Login Name or Password is invalid', 'danger', 'Login Error');



                }







                //change sign up button here







                /* */







            },







            error: function(error)



            {







                console.log("error in method login():");



                console.log(error);







            }







        });



    }



}









function register() {









    var firstName = document.getElementById('firstname');



    var lastName = document.getElementById('lastname');



    var username = document.getElementById('username');



    var password = document.getElementById("password");



    var email = document.getElementById('email');



    var confirmemail = document.getElementById('confirmemail');



    var phone = document.getElementById('phone');



    var operation = document.getElementById('operationR');









    if (firstName.value != "" && lastName.value != "" && username.value != "" && password.value != "" && email.value != "" && phone.value)



    {



        if (valid_format(password, false) && valid_format(email, false) && valid_format(phone, false), compareemails())



        {



            $.ajax({







                cache: false,

                type: "POST",







                url: "https://www.vividcustoms.com/signuplogin.php",







                data: {



                    firstname: firstName.value,



                    lastname: lastName.value,



                    username: username.value,



                    password: password.value,



                    email: email.value,



                    phone: phone.value,



                    operation: operation.value,



                },



                beforeSend: function()



                {







                },



                success: function(data)



                {



                    switch (data)



                    {



                        case '1':



                            ShowAlert('serverregistererror1', "Sorry. The username entered is a reserved word for as. Please change the username to continue.", 'danger', 'Register Error');



                            break



                        case '2':



                            ShowAlert('serverregistererror2', "Sorry. The username entered is in use. Please change the username to continue.", 'danger', 'Register Error');



                            break;



                        case '5':



                            ShowAlert('serverregistererror5', "Sorry. We have problems for create your account. Please try again.", 'danger', 'Register Error');



                        case '4':



                            ShowAlert('serverregistererror4', "Sorry. We have problems for send you a registration email. Please try again.", 'danger', 'Register Error');



                            break;



                        default:



                            Order._Customer = JSON.parse(data);



                            ShowAlert('serverregistererror3', "Your account was created successfully. Enjoy the benefits of being a member.", 'success', 'Registration Success');



                            CloseModal("signupModal");



                            var signup = document.getElementById("signup").style.display = "none";



                            var logout = document.getElementById("logout").style.display = "inline";





                    }



                },



                error: function(error)



                {



                    console.log("error in method register():");



                    console.log(error);



                }



            });



        } else



        {

            if (!compareemails()) {

                ShowAlert('emailsnotmach', 'The emails address are diferents', 'danger', 'Emails Match Error');

            } else {

                var messageformaterror = "The following fields format is incorrect. ";



                if (!valid_format(password, false))



                {



                    messageformaterror += "'Password' ";



                }







                if (!valid_format(email, false))



                {



                    messageformaterror += "'Email' ";



                }





                if (!valid_format(confirmemail, false))



                {



                    messageformaterror += "'Confirm Email' ";



                }







                if (!valid_format(phone, false))



                {



                    messageformaterror += "'Phone' ";



                }







                ShowAlert('fieldsregisterformat', messageformaterror, 'danger', 'Register Format Error');

            }







        }



    } else



    {



        var messageemptyerror = "Please fill in the following fields to continue: ";



        if (firstName.value == "")



        {



            messageemptyerror += "'First Name' ";



        }







        if (lastName.value == "")



        {



            messageemptyerror += "'Last Name' ";



        }







        if (username.value == "")



        {



            messageemptyerror += "'Username' ";



        }







        if (password.value == "")



        {



            messageemptyerror += "'Password' ";



        }







        if (email.value == "")



        {



            messageemptyerror += "'Email' ";



        }





        if (confirmemail.value == "")



        {



            messageemptyerror += "'Confirm Email' ";



        }







        if (phone.value == "")



        {



            messageemptyerror += "''Phone' ";



        }







        ShowAlert('fieldsregisterempty', messageemptyerror, 'danger', 'Register Error');



    }









}




function IsJsonString(str) {
        try {
            JSON.parse(str);
        } catch (e) {
            return false;
        }
        return true;
    }




function valid_format(element, message)



{



    var myRe;



    if (element.id == "phone")



    {



        myRe = /^[2-9]\d{2}[2-9]\d{2}\d{4}$/;



        //myRe = /^\d{10}$/;



    } else if (element.id == "email")



    {



        myRe = /\S+@\S+\.\S+/;



    } else if (element.id == "password")



    {



        myRe = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;



    }



    var myArray = myRe.exec(element.value);



    if (element.value != myArray)



    {



        if (message)



        {



            ShowAlert('format' + element.name + 'register', "The " + element.name + " format is incorrect", 'danger', 'Format Error');



        }



        return false;



    } else



    {



        return true;



    }



}









//method for call the order saved in session



function getOrderInSession()



{



    $.ajax({







        cache: false,

        type: "POST",







        url: "https://www.vividcustoms.com/sessionInfo.php",







        data: {







            value: "Order",







            operation: "select",







        },







        beforeSend: function() {







        },



        success: function(data)







        {



            order = JSON.parse(data);



        },







        error: function(error)







        {







            console.log("error in method getOrderInSession():");



            console.log(error);







        }







    });



}









function savetemplate()







{







    category_design = [];







    var select = document.getElementById('oldcategory[]');







    var opts = select.options;







    for (var i = 0; i < opts.length; i++)







    {







        if (opts[i].selected)







        {







            category_design.push(opts[i].value);







        }







    }









    //prepare design to save







    var data = [];







    var frontdatalist = "";



    if (front.width > 0)



    {



        frontdatalist += front.toDataURL('image/png', 1.0);



    }







    data.push(front);







    var rightdatalist = "";



    if (right.width > 0)



    {



        rightdatalist += right.toDataURL('image/png', 1.0);



    }







    data.push(right);







    var backdatalist = "";







    if (back.width > 0)



    {



        backdatalist += back.toDataURL('image/png', 1.0);



    }







    data.push(back);







    var leftdatalist = "";







    if (left.width > 0)



    {



        leftdatalist += left.toDataURL('image/png', 1.0);



    }



    data.push(left);







    var jsonData = JSON.stringify(data);



    var sidelist = [];







    frontside = new Side();



    frontside._name = "front";



    frontside._json = JSON.stringify(front);



    if (front.width > 0)



    {



        frontside._toDataURL = front.toDataURL('image/png');



    }



    frontside._width_canvas = front.width;



    frontside._height_canvas = front.height;



    frontside._width_div = document.getElementById('frontCanvasShirt').style.width.replace("px", "");



    frontside._height_div = document.getElementById('frontCanvasShirt').style.height.replace("px", "");



    frontside._border_color_div = 0;



    frontside._left = document.getElementById('frontcanvas-wrapper').style.left.replace("px", "");



    frontside._top = document.getElementById('frontcanvas-wrapper').style.top.replace("px", "");



    frontside._border_color_canvas = 0;



    frontside._design_image = "";



    frontside._design_product_image = "";



   newurl = document.getElementById('frontCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('frontCanvasShirt').style.backgroundImage.replace("url", "").length - 2);
   frontside._product_image = newurl.replace("https://www.vividcustoms.com/","");
   //frontside._product_image = document.getElementById('frontCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('frontCanvasShirt').style.backgroundImage.replace("url", "").length - 2);









    rightside = new Side();



    rightside._name = "right";



    rightside._json = JSON.stringify(right);



    if (right.width > 0)



    {



        rightside._toDataURL = right.toDataURL('image/png');



    }







    rightside._width_canvas = right.width;



    rightside._height_canvas = right.height;



    rightside._width_div = document.getElementById('rightCanvasShirt').style.width.replace("px", "");



    rightside._height_div = document.getElementById('rightCanvasShirt').style.height.replace("px", "");



    rightside._border_color_div = 0;



    rightside._left = document.getElementById('rightcanvas-wrapper').style.left.replace("px", "");



    rightside._top = document.getElementById('rightcanvas-wrapper').style.top.replace("px", "");



    rightside._border_color_canvas = 0;



    rightside._design_image = "";



    rightside._design_product_image = "";



    newurl = document.getElementById('rightCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('rightCanvasShirt').style.backgroundImage.replace("url", "").length - 2);
   rightside._product_image = newurl.replace("https://www.vividcustoms.com/","");
   //rightside._product_image = document.getElementById('rightCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('rightCanvasShirt').style.backgroundImage.replace("url", "").length - 2);









    backside = new Side();



    backside._name = "back";



    backside._json = JSON.stringify(back);



    if (back.width > 0)



    {



        backside._toDataURL = back.toDataURL('image/png');



    }



    backside._width_canvas = back.width;



    backside._height_canvas = back.height;



    backside._width_div = document.getElementById('backCanvasShirt').style.width.replace("px", "");



    backside._height_div = document.getElementById('backCanvasShirt').style.height.replace("px", "");



    backside._border_color_div = 0;



    backside._left = document.getElementById('backcanvas-wrapper').style.left.replace("px", "");



    backside._top = document.getElementById('backcanvas-wrapper').style.top.replace("px", "");



    backside._border_color_canvas = 0;



    backside._design_image = "";



    backside._design_product_image = "";



    newurl = document.getElementById('backCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('backCanvasShirt').style.backgroundImage.replace("url", "").length - 2);
   backside._product_image = newurl.replace("https://www.vividcustoms.com/","");
   //backside._product_image = document.getElementById('backCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('backCanvasShirt').style.backgroundImage.replace("url", "").length - 2);









    leftside = new Side();



    leftside._name = "left";



    leftside._json = JSON.stringify(left);



    if (left.width > 0)



    {



        leftside._toDataURL = left.toDataURL('image/png');



    }



    leftside._width_canvas = left.width;



    leftside._height_canvas = left.height;



    leftside._width_div = document.getElementById('leftCanvasShirt').style.width.replace("px", "");



    leftside._height_div = document.getElementById('leftCanvasShirt').style.height.replace("px", "");



    leftside._border_color_div = 0;



    leftside._left = document.getElementById('leftcanvas-wrapper').style.left.replace("px", "");



    leftside._top = document.getElementById('leftcanvas-wrapper').style.top.replace("px", "");



    leftside._border_color_canvas = 0;



    leftside._design_image = "";



    leftside._design_product_image = "";



    newurl = document.getElementById('leftCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('leftCanvasShirt').style.backgroundImage.replace("url", "").length - 2);
   leftside._product_image = newurl.replace("https://www.vividcustoms.com/","");
   //leftside._product_image = document.getElementById('leftCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('leftCanvasShirt').style.backgroundImage.replace("url", "").length - 2);







    sidelist.push(JSON.stringify(frontside));



    sidelist.push(JSON.stringify(rightside));



    sidelist.push(JSON.stringify(backside));



    sidelist.push(JSON.stringify(leftside));









    if (category_design.length > 0)



    {



        $.ajax({







            cache: false,



            type: "POST",







            url: "https://www.vividcustoms.com/savedesign.php",







            data: {







                category_design: category_design,







                idproduct: idproduct,







                json: jsonData,







                StyleNumber: StyleNumber,







                sidelist: sidelist







            },







            beforeSend: function() {







            },



            success: function(data)



            {



                ShowAlert('designtemplatesaved', 'The design template was saved successfully!', 'success', 'Design Saved');



            },







            error: function(error)







            {







                console.log("error in method savetemplate()");



                console.log(error);







            }







        });



    }







    $('#saveTemplateModal').modal('hide');







}


function storeColorsInk()



{



    var arraycolors = [];



    var arraypersonalizecolors = [];



    



    var objs = front.getObjects();



 



    for (var i = 0; i < objs.length; i++)



    {





        if (objs[i].type === "image")



        {

            if (objs[i].id != "" && objs[i].id != null && !Number.isInteger(objs[i].id))  {

                if (objs[i].id.indexOf("Uploaded") != -1)



                {

                    if (objs[i].colorlist != undefined) {

                        if (objs[i].colorlist.length > 8) {

                            arraycolors.push("f");

                            arraycolors.push("u");

                            arraycolors.push("l");

                            arraycolors.push("l");

                            arraycolors.push("c");

                            arraycolors.push("o");

                            arraycolors.push("l");

                            arraycolors.push("o");

                            arraycolors.push("r");

                        } else {

                            for (var j = 0; j < objs[i].colorlist.length; j++) {

                                var color = rgb2hex(objs[i].colorlist[j]);



                                if (!validate_element(color, arraycolors))



                                {



                                    arraycolors.push(color);



                                }

                            }

                        }



                    } else {

                        arraycolors.push("k");

                        arraycolors.push("a");

                        arraycolors.push("t");

                        arraycolors.push("i");

                        arraycolors.push("e");

                    }



                }

            } else



            {



                if (objs[i].filters.length > 0)



                {



                    var color = rgb2hex(objs[i].filters[objs[i].filters.length - 1].color);



                    if (!validate_element(color, arraycolors))



                    {



                        arraycolors.push(color);



                    }







                } else if (!validate_element("#000000", arraycolors))



                {



                    arraycolors.push("#000000");



                }



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







                } else if (!validate_element("#000000", arraycolors))



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





                if (objs[i].type === "i-text")



                {



                  

                        if (objs[i].fill != null && objs[i].fill.length > 0)



                        {



                            var color = rgb2hex(objs[i].fill);



                            if (!validate_element_personalize(color, arraypersonalizecolors))



                            {

                                var colorelement = {type: "", color: ""};

                                colorelement.type = "fill"+ objs[i].id;

                                colorelement.color = color;

                                arraypersonalizecolors.push(colorelement);



                            }







                        } 

                        else if (!validate_element_personalize("#000000", arraypersonalizecolors))



                        {



                            var colorelement = {type: "", color: ""};

                            colorelement.type = "fill"+ objs[i].id;

                            colorelement.color = "#000000";

                            arraypersonalizecolors.push(colorelement);

                            //arraypersonalizecolors.push("#000000");



                        }







                        if (objs[i].stroke != null && objs[i].stroke.length > 0)



                        {



                            var color = rgb2hex(objs[i].stroke);



                            if (!validate_element_personalize(color, arraypersonalizecolors))



                            {



                                //arraypersonalizecolors.push(color);

                                var colorelement = {type: "", color: ""};

                                colorelement.type = "stroke"+ objs[i].id;

                                colorelement.color = "#000000";

                                arraypersonalizecolors.push(colorelement);  



                            }







                        }

                    







                } 

        } 

        

        else



        {

            

            objlist = objs[i]._objects; 

            var layers = [];



            for (var j = 0; j < objlist.length; j++)



            {



                if (!validate_layer(objlist[j], layers) && objlist[j].fill != 'transparent')



                {



                    layers.push(objlist[j]);                   



                    var color = objlist[j].fill;



                    if (!validate_element(color, arraycolors))



                    {



                        arraycolors.push(color);



                    }

                }

            }

        }

    }



    return  arraycolors.length;

}




function savestoredesign()







{







    category_design = [];







    var select = document.getElementById('oldstorecategory[]');







    var opts = select.options;







    for (var i = 0; i < opts.length; i++)







    {







        if (opts[i].selected)







        {







            category_design.push(opts[i].value);







        }







    }









    //prepare design to save







    var data = [];







    var frontdatalist = "";



    if (front.width > 0)



    {



        frontdatalist += front.toDataURL('image/png', 1.0);



    }







    data.push(front);







    var rightdatalist = "";



    if (right.width > 0)



    {



        rightdatalist += right.toDataURL('image/png', 1.0);



    }







    data.push(right);







    var backdatalist = "";







    if (back.width > 0)



    {



        backdatalist += back.toDataURL('image/png', 1.0);



    }







    data.push(back);







    var leftdatalist = "";







    if (left.width > 0)



    {



        leftdatalist += left.toDataURL('image/png', 1.0);



    }



    data.push(left);







    var jsonData = JSON.stringify(data);



    var sidelist = [];







    frontside = new Side();



    frontside._name = "front";



    frontside._json = JSON.stringify(front);



    if (front.width > 0)



    {



        frontside._toDataURL = front.toDataURL('image/png');



    }



    frontside._width_canvas = front.width;



    frontside._height_canvas = front.height;



    frontside._width_div = document.getElementById('frontCanvasShirt').style.width.replace("px", "");



    frontside._height_div = document.getElementById('frontCanvasShirt').style.height.replace("px", "");



    frontside._border_color_div = 0;



    frontside._left = document.getElementById('frontcanvas-wrapper').style.left.replace("px", "");



    frontside._top = document.getElementById('frontcanvas-wrapper').style.top.replace("px", "");



    frontside._border_color_canvas = 0;



    frontside._design_image = "";



    frontside._design_product_image = "";



   newurl = document.getElementById('frontCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('frontCanvasShirt').style.backgroundImage.replace("url", "").length - 2);
   frontside._product_image = newurl.replace("https://www.vividcustoms.com/","");
   //frontside._product_image = document.getElementById('frontCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('frontCanvasShirt').style.backgroundImage.replace("url", "").length - 2);









    rightside = new Side();



    rightside._name = "right";



    rightside._json = JSON.stringify(right);



    if (right.width > 0)



    {



        rightside._toDataURL = right.toDataURL('image/png');



    }







    rightside._width_canvas = right.width;



    rightside._height_canvas = right.height;



    rightside._width_div = document.getElementById('rightCanvasShirt').style.width.replace("px", "");



    rightside._height_div = document.getElementById('rightCanvasShirt').style.height.replace("px", "");



    rightside._border_color_div = 0;



    rightside._left = document.getElementById('rightcanvas-wrapper').style.left.replace("px", "");



    rightside._top = document.getElementById('rightcanvas-wrapper').style.top.replace("px", "");



    rightside._border_color_canvas = 0;



    rightside._design_image = "";



    rightside._design_product_image = "";



    newurl = document.getElementById('rightCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('rightCanvasShirt').style.backgroundImage.replace("url", "").length - 2);
   rightside._product_image = newurl.replace("https://www.vividcustoms.com/","");
   //rightside._product_image = document.getElementById('rightCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('rightCanvasShirt').style.backgroundImage.replace("url", "").length - 2);









    backside = new Side();



    backside._name = "back";



    backside._json = JSON.stringify(back);



    if (back.width > 0)



    {



        backside._toDataURL = back.toDataURL('image/png');



    }



    backside._width_canvas = back.width;



    backside._height_canvas = back.height;



    backside._width_div = document.getElementById('backCanvasShirt').style.width.replace("px", "");



    backside._height_div = document.getElementById('backCanvasShirt').style.height.replace("px", "");



    backside._border_color_div = 0;



    backside._left = document.getElementById('backcanvas-wrapper').style.left.replace("px", "");



    backside._top = document.getElementById('backcanvas-wrapper').style.top.replace("px", "");



    backside._border_color_canvas = 0;



    backside._design_image = "";



    backside._design_product_image = "";



    newurl = document.getElementById('backCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('backCanvasShirt').style.backgroundImage.replace("url", "").length - 2);
   backside._product_image = newurl.replace("https://www.vividcustoms.com/","");
   //backside._product_image = document.getElementById('backCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('backCanvasShirt').style.backgroundImage.replace("url", "").length - 2);









    leftside = new Side();



    leftside._name = "left";



    leftside._json = JSON.stringify(left);



    if (left.width > 0)



    {



        leftside._toDataURL = left.toDataURL('image/png');



    }



    leftside._width_canvas = left.width;



    leftside._height_canvas = left.height;



    leftside._width_div = document.getElementById('leftCanvasShirt').style.width.replace("px", "");



    leftside._height_div = document.getElementById('leftCanvasShirt').style.height.replace("px", "");



    leftside._border_color_div = 0;



    leftside._left = document.getElementById('leftcanvas-wrapper').style.left.replace("px", "");



    leftside._top = document.getElementById('leftcanvas-wrapper').style.top.replace("px", "");



    leftside._border_color_canvas = 0;



    leftside._design_image = "";



    leftside._design_product_image = "";



    newurl = document.getElementById('leftCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('leftCanvasShirt').style.backgroundImage.replace("url", "").length - 2);
   leftside._product_image = newurl.replace("https://www.vividcustoms.com/","");
   //leftside._product_image = document.getElementById('leftCanvasShirt').style.backgroundImage.replace("url", "").substring(2, document.getElementById('leftCanvasShirt').style.backgroundImage.replace("url", "").length - 2);







    sidelist.push(JSON.stringify(frontside));



    sidelist.push(JSON.stringify(rightside));



    sidelist.push(JSON.stringify(backside));



    sidelist.push(JSON.stringify(leftside));









    if (category_design.length > 0)



    {



        $.ajax({







            cache: false,



            type: "POST",







            url: "https://www.vividcustoms.com/savedesign.php",







            data: {







                category_design: category_design,







                idproduct: idproduct,







                json: jsonData,







                StyleNumber: StyleNumber,







                sidelist: sidelist







            },







            beforeSend: function() {







            },



            success: function(data)



            {



                ShowAlert('storedesignsaved', 'The store design was saved successfully!', 'success', 'Design Saved');



            },







            error: function(error)







            {







                console.log("error in method savestoredesign()");



                console.log(error);







            }







        });



    }







    $('#saveStoreModal').modal('hide');







}









function selectAllSubcategories(element)



{









    var select = document.getElementById('oldcategory[]');







    var opts = select.options;







    for (var i = 0; i < opts.length; i++)







    {







        var info = opts[i].value.split("_");







        if (info[0] == element.value)







        {







            opts[i].selected = true;







        }







    }









    element.selected = false;









}


function selectStoreAllSubcategories(element)



{









    var select = document.getElementById('oldstorecategory[]');







    var opts = select.options;







    for (var i = 0; i < opts.length; i++)







    {







        var info = opts[i].value.split("_");







        if (info[0] == element.value)







        {







            opts[i].selected = true;







        }







    }









    element.selected = false;









}









function saveCategory()



{









    var newcategoryname = document.getElementById('newcategoryname');







    var newcategory = document.getElementById('newcategory').value;


 console.log(newcategory);

            console.log(newcategoryname);






    $.ajax({







        cache: false,



        type: "POST",







        url: "https://www.vividcustoms.com/scan.php",







        data: {







            operation: "save",

            type: "TemplateDesign",





            newcategoryname: newcategoryname.value,







            newcategory: newcategory







        },







        beforeSend: function() {



            console.log(newcategory);

            console.log(newcategoryname);



        },



        success: function(data)







        {



                        console.log(data);



            LoadDesignsCategories();







        },







        error: function(error)







        {



            console.log("error in method saveCategory");



            console.log(error);







        }







    });







}





function saveStoreCategory()



{









    var newstorecategoryname = document.getElementById('newstorecategoryname');







    var newstorecategory = document.getElementById('newstorecategory').value;









    $.ajax({







        cache: false,



        type: "POST",







        url: "https://www.vividcustoms.com/scan.php",







        data: {







            operation: "save",

            type: "StoreDesign",







            newstorecategoryname: newstorecategoryname.value,







            newstorecategory: newstorecategory







        },







        beforeSend: function() {







        },



        success: function(data)







        {



            console.log(data);



            LoadStoreDesignsCategories();







        },







        error: function(error)







        {



            console.log("error in method saveStoreCategory");



            console.log(error);







        }







    });







}









function LoadDesignsCategories()



{







    $.ajax({







        type: "GET",







        url: "https://www.vividcustoms.com/scan.php?designTemplate=designTemplate",







        beforeSend: function() {







        },



        success: function(data)







        {







            document.getElementById('oldcategory[]').innerHTML = data;







            document.getElementById('newcategory').innerHTML = data;







        },







        error: function(error)







        {







            var message = document.getElementById('emailerrormessage');







            message.style.display = "block";







            setTimeout(function() {

                message.style.display = "none";

            }, 3000);







        }







    })







}


function LoadStoreDesignsCategories()



{







    $.ajax({







        type: "GET",







        url: "https://www.vividcustoms.com/scan.php?designStore=designStore",







        beforeSend: function() {







        },



        success: function(data)







        {







            document.getElementById('oldstorecategory[]').innerHTML = data;







            document.getElementById('newstorecategory').innerHTML = data;







        },







        error: function(error)







        {







            var message = document.getElementById('emailerrormessage');







            message.style.display = "block";







            setTimeout(function() {

                message.style.display = "none";

            }, 3000);







        }







    })







}









$(function()



    {



        $('#textarea,#textarea2').keyup(function() {







            switch (canvasCounter) {



                case 1:



                    canvas = front;



                    break



                case 2:



                    canvas = right;



                    break;



                case 3:



                    canvas = back;



                    break;



                default:



                    canvas = left;



            }







            default_text = this.value;



            var obj = canvas.getActiveObject();



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



                                icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            bl: {



                                icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            br: {



                                icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            ml: {



                                icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            mr: {



                                icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            mb: {



                                icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            mt: {



                                icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            tl: {

                                icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                            },



                        });



                        canvas.remove(obj);



                        canvas.add(textSample).renderAll();



                        canvas.setActiveObject(canvas.item(canvas.getObjects().length - 1));



                    } else



                    {







                        obj.setText(this.value);



                        var objtmp = obj;



                        canvas.remove(obj);



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



                                icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            bl: {



                                icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            br: {



                                icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            ml: {



                                icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            mr: {



                                icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            mb: {



                                icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            mt: {



                                icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



                            },



                            tl: {

                                icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                            },



                        });



                        canvas.add(objtmp).renderAll();



                        canvas.setActiveObject(canvas.item(canvas.getObjects().length - 1));



                    }









                } else



                {



                    //props['type'] = 'text';



                    //var textSample = new fabric.Text(default_text, props);



                    var textSample = new fabric.Text(default_text, {



                        left: canvas.width / 2,



                        top: 50,



                        fontSize: 50,



                        strokeWidth: 0,



                        fontFamily: 'ABeeZee-Regular',



                        backgroundColor: 'transparent',



                        /*padding: 18,*/



                        id: objId,



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



                            icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        bl: {



                            icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        br: {



                            icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        ml: {



                            icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mr: {



                            icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mb: {



                            icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mt: {



                            icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },

                        tl: {

                            icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                        },



                    });



                    canvas.add(textSample).renderAll();



                    canvas.setActiveObject(canvas.item(canvas.getObjects().length - 1));



                    objId++;



                }



            } else



            {



                canvas.remove(obj);



            }









            canvas.renderAll();



            //unselectall('addtext');



            //canvas.discardActiveObject();







            savetmpdesign();







            //canvas.setActiveObject(canvas.item(canvas.getObjects().length-1));



            //canvas.renderAll();



            save();



        });



    });







/*function triggerMouseEvent (node, eventType) {



  var clickEvent = document.createEvent ('MouseEvents');



  clickEvent.initEvent (eventType, true, true);



  node.dispatchEvent (clickEvent);



}*/









radiusvalue.value = radius.value;



spacingvalue.value = spacing.value;







radiusvalueModal.value = radiusModal.value;



spacingvalueModal.value = spacingModal.value;









radius.oninput = function() {









    $('#radiusvalue').val(this.value);









    var canvas = null;



    switch (canvasCounter) {



        case 1:



            canvas = front;



            break



        case 2:



            canvas = right;



            break;



        case 3:



            canvas = back;



            break;



        default:



            canvas = left;



    }







    var obj = canvas.getActiveObject();



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



        } else



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



                icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            bl: {



                icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            br: {



                icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            ml: {



                icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            mr: {



                icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            mb: {



                icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            mt: {



                icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            tl: {

                icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

            },



        });







        canvas.remove(obj);



        canvas.add(textSample).renderAll();



        canvas.setActiveObject(canvas.item(canvas.getObjects().length - 1));



    }



    canvas.renderAll();



}









radiusModal.oninput = function() {









    $('#radiusvalueModal').val(this.value);









    var canvas = null;



    switch (canvasCounter) {



        case 1:



            canvas = front;



            break



        case 2:



            canvas = right;



            break;



        case 3:



            canvas = back;



            break;



        default:



            canvas = left;



    }







    var obj = canvas.getActiveObject();



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



        props['spacing'] = $('#spacingModal').val();



        if ($(this).val() > 0)



        {







            props['arcangle'] = Math.abs(this.value);



        } else



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



                icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            bl: {



                icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            br: {



                icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            ml: {



                icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            mr: {



                icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            mb: {



                icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            mt: {



                icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            tl: {

                icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

            },



        });







        canvas.remove(obj);



        canvas.add(textSample).renderAll();



        canvas.setActiveObject(canvas.item(canvas.getObjects().length - 1));



    }



    canvas.renderAll();



}









spacing.oninput = function() {



    $('#spacingvalue').val(this.value);



    var canvas = null;



    switch (canvasCounter) {



        case 1:



            canvas = front;



            break



        case 2:



            canvas = right;



            break;



        case 3:



            canvas = back;



            break;



        default:



            canvas = left;



    }







    var obj = canvas.getActiveObject();



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



                icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            bl: {



                icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            br: {



                icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            ml: {



                icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            mr: {



                icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            mb: {



                icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            mt: {



                icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            tl: {

                icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

            },



        });









        canvas.remove(obj);



        canvas.add(textSample).renderAll();



        canvas.setActiveObject(canvas.item(canvas.getObjects().length - 1));



    }



    canvas.renderAll();



}







spacingModal.oninput = function() {



    $('#spacingvalueModal').val(this.value);



    var canvas = null;



    switch (canvasCounter) {



        case 1:



            canvas = front;



            break



        case 2:



            canvas = right;



            break;



        case 3:



            canvas = back;



            break;



        default:



            canvas = left;



    }







    var obj = canvas.getActiveObject();



    if (obj)



    {



        default_text = obj.getText();



        props = obj.toObject();









        delete props['type'];



        props['textAlign'] = 'center';



        props['spacing'] = this.value;



        props['arcangle'] = $('#radiusModal').val();



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



                icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            bl: {



                icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            br: {



                icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            ml: {



                icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            mr: {



                icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            mb: {



                icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            mt: {



                icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



            tl: {

                icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

            },



        });







        canvas.remove(obj);



        canvas.add(textSample).renderAll();



        canvas.setActiveObject(canvas.item(canvas.getObjects().length - 1));



    }



    canvas.renderAll();



}









$("input[type=number]").bind('keyup input', function()



    {



        if ($(this).attr("id") == "radiusvalue" || $(this).attr("id") == "spacingvalue" || $(this).attr("id") == "radiusvalueModal" || $(this).attr("id") == "spacingvalueModal")



        {



            var canvas = null;



            switch (canvasCounter) {



                case 1:



                    canvas = front;



                    break



                case 2:



                    canvas = right;



                    break;



                case 3:



                    canvas = back;



                    break;



                default:



                    canvas = left;



            }







            var obj = canvas.getActiveObject();



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



                    } else



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



                            icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        bl: {



                            icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        br: {



                            icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        ml: {



                            icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mr: {



                            icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mb: {



                            icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mt: {



                            icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        tl: {

                            icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                        },



                    });









                } else if ($(this).attr("id") == "radiusvalueModal")



                {









                    delete props['type'];



                    props['textAlign'] = 'center';



                    if ($(this).val() == 0)



                    {



                        props['arcangle'] = 1;



                        $('#radiusModal').val(1);



                    } else



                    {



                        props['arcangle'] = $(this).val();



                        $('#radiusModal').val(this.value);



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



                            icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        bl: {



                            icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        br: {



                            icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        ml: {



                            icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mr: {



                            icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mb: {



                            icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mt: {



                            icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        tl: {

                            icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                        },



                    });









                } else if ($(this).attr("id") == "spacingvalue")



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



                            icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        bl: {



                            icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        br: {



                            icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        ml: {



                            icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mr: {



                            icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mb: {



                            icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mt: {



                            icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        tl: {

                            icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                        },



                    });









                    $('#spacing').val(this.value);



                } else if ($(this).attr("id") == "spacingvalueModal")



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



                            icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        bl: {



                            icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        br: {



                            icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        ml: {



                            icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mr: {



                            icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mb: {



                            icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mt: {



                            icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        tl: {

                            icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                        },



                    });









                    $('#spacingModal').val(this.value);



                }







                save();







                canvas.remove(obj);



                canvas.add(textSample).renderAll();



                canvas.setActiveObject(canvas.item(canvas.getObjects().length - 1));



            }



            canvas.renderAll();



            // OpenClose("carousel_area","work_area",'inputvaluekeyup');



        }



    });



function hideshowbutton(element) {

    if (element.id == "termsOfUse") {



        if (element.checked) {

            document.getElementById("upload").style.display = "block";

        } else {

            document.getElementById("upload").style.display = "none";

        }

    } else {

        if (element.checked) {

            document.getElementById("uploadModal").style.display = "block";

        } else {

            document.getElementById("uploadModal").style.display = "none";

        }

    }

}



function createpersonalizelist() 

{

    if (front.getObjects().length > 0 || back.getObjects().length > 0) 

    {

        if (isMobile()) 

        {

            CloseModal("PersonalizeModal");

            $("#PersonalizeListModal")[0].children[0].style.position = "absolute";

            $("#PersonalizeListModal")[0].children[0].style.marginTop = "0px";

            $("#PersonalizeListModal")[0].children[0].style.marginBottom = "0px";

            $("#PersonalizeListModal")[0].children[0].style.marginLeft = "0px";

            $("#PersonalizeListModal")[0].children[0].style.marginRight = "0px";

            $("#PersonalizeListModal")[0].children[0].style.paddingTop = "0px";

            $("#PersonalizeListModal")[0].children[0].style.paddingBottom = "0px";

            $("#PersonalizeListModal")[0].children[0].style.paddingLeft = "0px";

            $("#PersonalizeListModal")[0].children[0].style.paddingRight = "0px";

            $("#PersonalizeListModal")[0].children[0].style.width = "100%";



            $("#PersonalizeListModal")[0].children[0].children[0].style.width = "100%";

            $("#PersonalizeListModal")[0].children[0].children[0].style.marginTop = "0px";

            $("#PersonalizeListModal")[0].children[0].children[0].style.marginBottom = "0px";

            $("#PersonalizeListModal")[0].children[0].children[0].style.marginLeft = "0px";

            $("#PersonalizeListModal")[0].children[0].children[0].style.marginRight = "0px";

            $("#PersonalizeListModal")[0].children[0].children[0].style.paddingTop = "0px";

            $("#PersonalizeListModal")[0].children[0].children[0].style.paddingBottom = "0px";

            $("#PersonalizeListModal")[0].children[0].children[0].style.paddingLeft = "0px";

            $("#PersonalizeListModal")[0].children[0].children[0].style.paddingRight = "0px";

            $("#PersonalizeListModal").modal("show");

            canvaspreviewfront.clear();

            canvaspreviewback.clear();

            

        }

        else

        {

            $("#PersonalizeListModal").modal("show");

            canvaspreviewfront.clear();

            canvaspreviewback.clear();

        }



        if (document.getElementById("textpersonalizeside").value == "Front" || document.getElementById("textpersonalizesideModal").value == "Front" || document.getElementById("numberpersonalizeside").value == "Front" || document.getElementById("numberpersonalizesideModal").value == "Front") 

        {

            document.getElementById("personalize_canvas_front_div").style.display = "block";

        }

        else

        {

            document.getElementById("personalize_canvas_front_div").style.display = "none";

        }



        if (document.getElementById("textpersonalizeside").value == "Back" || document.getElementById("textpersonalizesideModal").value == "Back" || document.getElementById("numberpersonalizeside").value == "Back" || document.getElementById("numberpersonalizesideModal").value == "Back") 

        {

            document.getElementById("personalize_canvas_back_div").style.display = "block";

        }

        else

        {

            document.getElementById("personalize_canvas_back_div").style.display = "none";

        }



        startpersonalizerow();

    } 



}





function changepersonalizeColor(newColor)

{



    switch (elementpersonalizeselected) 

    {



        case "textpersonalizecolor":



            if (document.getElementById('textpersonalizeside').value == "Front") {

                var list = front.getObjects();

                for (var i = 0; i < list.length; i++) {

                    if (list[i].id == "textpersonalizefront") {

                        object = list[i];

                        break;

                    }

                }



                if (object != null) {



                    object.setFill(newColor);

                    if (object.stroke == "") {

                        document.getElementById("textpersonalizestrokecolor").style.backgroundColor = newColor;

                        document.getElementById("textpersonalizestrokecolorname").innerHTML = document.getElementById("personalizecolorselectedname").innerHTML;

                    }

                    front.renderAll(front);

                }

            } 

            else {

                var list = back.getObjects();

                for (var i = 0; i < list.length; i++) {

                    if (list[i].id == "textpersonalizeback") {

                        object = list[i];

                        break;

                    }

                }



                if (object != null) {

                    object.setFill(newColor);

                    if (object.stroke == "") {

                        document.getElementById("textpersonalizestrokecolor").style.backgroundColor = newColor;

                        document.getElementById("textpersonalizestrokecolorname").innerHTML = document.getElementById("personalizecolorselectedname").innerHTML;

                    }

                    back.renderAll(back);

                }

            }



            document.getElementById("textpersonalizecolor").style.backgroundColor = newColor;

            document.getElementById("textpersonalizecolorname").innerHTML = document.getElementById("personalizecolorselectedname").innerHTML;



            break;



        case "textpersonalizecolorModal":



            if (document.getElementById('textpersonalizesideModal').value == "Front") {

                var list = front.getObjects();

                for (var i = 0; i < list.length; i++) {

                    if (list[i].id == "textpersonalizefront") {

                        object = list[i];

                        break;

                    }

                }



                if (object != null) {



                    object.setFill(newColor);

                    if (object.stroke == "") {

                        document.getElementById("textpersonalizestrokecolorModal").style.backgroundColor = newColor;

                        document.getElementById("textpersonalizestrokecolornameModal").innerHTML = document.getElementById("personalizecolorselectednameModal").innerHTML;

                    }

                    front.renderAll(front);

                }

            } 

            else {

                var list = back.getObjects();

                for (var i = 0; i < list.length; i++) {

                    if (list[i].id == "textpersonalizeback") {

                        object = list[i];

                        break;

                    }

                }



                if (object != null) {

                    object.setFill(newColor);

                    if (object.stroke == "") {

                        document.getElementById("textpersonalizestrokecolorModal").style.backgroundColor = newColor;

                        document.getElementById("textpersonalizestrokecolornameModal").innerHTML = document.getElementById("personalizecolorselectednameModal").innerHTML;

                    }

                    back.renderAll(back);

                }

            }



            document.getElementById("textpersonalizecolorModal").style.backgroundColor = newColor;

            document.getElementById("textpersonalizecolornameModal").innerHTML = document.getElementById("personalizecolorselectednameModal").innerHTML;



            break;





        case "numberpersonalizecolor":



            if (document.getElementById('numberpersonalizeside').value == "Front") {

                var list = front.getObjects();

                for (var i = 0; i < list.length; i++) {

                    if (list[i].id == "numberpersonalizefront") {

                        object = list[i];

                        break;

                    }

                }



                if (object != null) {



                    object.setFill(newColor);

                    if (object.stroke == "") {

                        document.getElementById("numberpersonalizestrokecolor").style.backgroundColor = newColor;

                        document.getElementById("numberpersonalizestrokecolorname").innerHTML = document.getElementById("personalizecolorselectedname").innerHTML;

                    }

                    front.renderAll(front);

                }

            } else {

                var list = back.getObjects();

                for (var i = 0; i < list.length; i++) {

                    if (list[i].id == "numberpersonalizeback") {

                        object = list[i];

                        break;

                    }

                }



                if (object != null) {

                    object.setFill(newColor);

                    if (object.stroke == "") {

                        document.getElementById("numberpersonalizestrokecolor").style.backgroundColor = newColor;

                        document.getElementById("numberpersonalizestrokecolorname").innerHTML = document.getElementById("personalizecolorselectedname").innerHTML;

                    }

                    back.renderAll(back);

                }

            }



            document.getElementById("numberpersonalizecolor").style.backgroundColor = newColor;

            document.getElementById("numberpersonalizecolorname").innerHTML = document.getElementById("personalizecolorselectedname").innerHTML;



            break;



        case "numberpersonalizecolorModal":



            if (document.getElementById('numberpersonalizesideModal').value == "Front") {

                var list = front.getObjects();

                for (var i = 0; i < list.length; i++) {

                    if (list[i].id == "numberpersonalizefront") {

                        object = list[i];

                        break;

                    }

                }



                if (object != null) {



                    object.setFill(newColor);

                    if (object.stroke == "") {

                        document.getElementById("numberpersonalizestrokecolorModal").style.backgroundColor = newColor;

                        document.getElementById("numberpersonalizestrokecolornameModal").innerHTML = document.getElementById("personalizecolorselectednameModal").innerHTML;

                    }

                    front.renderAll(front);

                }

            } else {

                var list = back.getObjects();

                for (var i = 0; i < list.length; i++) {

                    if (list[i].id == "numberpersonalizeback") {

                        object = list[i];

                        break;

                    }

                }



                if (object != null) {

                    object.setFill(newColor);

                    if (object.stroke == "") {

                        document.getElementById("numberpersonalizestrokecolorModal").style.backgroundColor = newColor;

                        document.getElementById("numberpersonalizestrokecolornameModal").innerHTML = document.getElementById("personalizecolorselectednameModal").innerHTML;

                    }

                    back.renderAll(back);

                }

            }



            document.getElementById("numberpersonalizecolorModal").style.backgroundColor = newColor;

            document.getElementById("numberpersonalizecolornameModal").innerHTML = document.getElementById("personalizecolorselectednameModal").innerHTML;



            break;



        case "textpersonalizestrokecolor":



            if (document.getElementById('textpersonalizeside').value == "Front") {

                var list = front.getObjects();

                for (var i = 0; i < list.length; i++) {

                    if (list[i].id == "textpersonalizefront") {

                        object = list[i];

                        break;

                    }

                }



                if (object != null) {



                    object.setStroke(newColor);

                    object.setStrokeWidth(3);

                    front.renderAll(front);

                }

            } else {

                var list = back.getObjects();

                for (var i = 0; i < list.length; i++) {

                    if (list[i].id == "textpersonalizeback") {

                        object = list[i];

                        break;

                    }

                }



                if (object != null) {

                    object.setStroke(newColor);

                    object.setStrokeWidth(3);

                    back.renderAll(back);

                }

            }



            document.getElementById("textpersonalizestrokecolor").style.backgroundColor = newColor;

            document.getElementById("textpersonalizestrokecolorname").innerHTML = document.getElementById("personalizecolorselectedname").innerHTML;



            break;





        case "textpersonalizestrokecolorModal":



            if (document.getElementById('textpersonalizesideModal').value == "Front") {

                var list = front.getObjects();

                for (var i = 0; i < list.length; i++) {

                    if (list[i].id == "textpersonalizefront") {

                        object = list[i];

                        break;

                    }

                }



                if (object != null) {



                    object.setStroke(newColor);

                    object.setStrokeWidth(3);

                    front.renderAll(front);

                }

            } else {

                var list = back.getObjects();

                for (var i = 0; i < list.length; i++) {

                    if (list[i].id == "textpersonalizeback") {

                        object = list[i];

                        break;

                    }

                }



                if (object != null) {

                    object.setStroke(newColor);

                    object.setStrokeWidth(3);

                    back.renderAll(back);

                }

            }



            document.getElementById("textpersonalizestrokecolorModal").style.backgroundColor = newColor;

            document.getElementById("textpersonalizestrokecolornameModal").innerHTML = document.getElementById("personalizecolorselectednameModal").innerHTML;



            break;



        case "numberpersonalizestrokecolor":



            if (document.getElementById('numberpersonalizeside').value == "Front") {

                var list = front.getObjects();

                for (var i = 0; i < list.length; i++) {

                    if (list[i].id == "numberpersonalizefront") {

                        object = list[i];

                        break;

                    }

                }



                if (object != null) {



                    object.setStroke(newColor);

                    object.setStrokeWidth(3);

                    front.renderAll(front);

                }

            } else {

                var list = back.getObjects();

                for (var i = 0; i < list.length; i++) {

                    if (list[i].id == "numberpersonalizeback") {

                        object = list[i];

                        break;

                    }

                }



                if (object != null) {

                    object.setStroke(newColor);

                    object.setStrokeWidth(3);

                    back.renderAll(back);

                }

            }



            document.getElementById("numberpersonalizestrokecolor").style.backgroundColor = newColor;

            document.getElementById("numberpersonalizestrokecolorname").innerHTML = document.getElementById("personalizecolorselectedname").innerHTML;



            break;



      case "numberpersonalizestrokecolorModal":



            if (document.getElementById('numberpersonalizesideModal').value == "Front") {

                var list = front.getObjects();

                for (var i = 0; i < list.length; i++) {

                    if (list[i].id == "numberpersonalizefront") {

                        object = list[i];

                        break;

                    }

                }



                if (object != null) {



                    object.setStroke(newColor);

                    object.setStrokeWidth(3);

                    front.renderAll(front);

                }

            } else {

                var list = back.getObjects();

                for (var i = 0; i < list.length; i++) {

                    if (list[i].id == "numberpersonalizeback") {

                        object = list[i];

                        break;

                    }

                }



                if (object != null) {

                    object.setStroke(newColor);

                    object.setStrokeWidth(3);

                    back.renderAll(back);

                }

            }



            document.getElementById("numberpersonalizestrokecolorModal").style.backgroundColor = newColor;

            document.getElementById("numberpersonalizestrokecolornameModal").innerHTML = document.getElementById("personalizecolorselectednameModal").innerHTML;



            break;

    }

    setColorsInk();

    selectcolors();

}





function setcolorpersonalize(element) 

{   

    setColorsInk();

    selectcolors();

    elementpersonalizeselected = element.id;

    switch (element.id) {



        case "textpersonalizecolor":



            if (document.getElementById('textpersonalizecheck').checked) {

                document.getElementById("personalize_new").style.display = "none";

                document.getElementById("personalize_edit").style.display = "block";

                document.getElementById("personalizecolorselected").innerHTML = "Name Color: ";

                if (document.getElementById('textpersonalizeside').value == "Front") {

                    var list = front.getObjects();

                    for (var i = 0; i < list.length; i++) {

                        if (list[i].id == "textpersonalizefront") {

                            object = list[i];

                            break;

                        }

                    }



                    if (object != null) {

                        front.setActiveObject(object);

                        front.renderAll(front);

                        setCanvas(1);



                    }

                } else {

                    var list = back.getObjects();

                    for (var i = 0; i < list.length; i++) {

                        if (list[i].id == "textpersonalizeback") {

                            object = list[i];

                            break;

                        }

                    }



                    if (object != null) {

                        back.setActiveObject(object);

                        back.renderAll(back);                        

                        setCanvas(3);

                    }

                }



            }



            break;



        case "textpersonalizecolorModal":



            if (document.getElementById('textpersonalizecheckModal').checked) 

            {



                document.getElementById("personalize_newModal").style.display = "none";

                document.getElementById("personalize_editModal").style.display = "block";

                document.getElementById("personalizecolorselectedModal").innerHTML = "Name Color: ";

                if (document.getElementById('textpersonalizesideModal').value == "Front") {

                    var list = front.getObjects();

                    for (var i = 0; i < list.length; i++) {

                        if (list[i].id == "textpersonalizefront") {

                            object = list[i];

                            break;

                        }

                    }



                    if (object != null) {

                        front.setActiveObject(object);

                        front.renderAll(front);

                        setCanvas(1);

                    }

                } else {

                    var list = back.getObjects();

                    for (var i = 0; i < list.length; i++) {

                        if (list[i].id == "textpersonalizeback") {

                            object = list[i];

                            break;

                        }

                    }



                    if (object != null) {

                        back.setActiveObject(object);

                        back.renderAll(back);

                        setCanvas(3);

                    }

                }



            }



            break;



        case "numberpersonalizecolor":



            if (document.getElementById('numberpersonalizecheck').checked) {

                document.getElementById("personalize_new").style.display = "none";

                document.getElementById("personalize_edit").style.display = "block";

                document.getElementById("personalizecolorselected").innerHTML = "Number Color: ";

                if (document.getElementById('numberpersonalizeside').value == "Front") {

                    var list = front.getObjects();

                    for (var i = 0; i < list.length; i++) {

                        if (list[i].id == "numberpersonalizefront") {

                            object = list[i];

                            break;

                        }

                    }



                    if (object != null) {

                        front.setActiveObject(object);

                        front.renderAll(front);

                        setCanvas(1);

                    }

                } else {

                    var list = back.getObjects();

                    for (var i = 0; i < list.length; i++) {

                        if (list[i].id == "numberpersonalizeback") {

                            object = list[i];

                            break;

                        }

                    }



                    if (object != null) {

                        back.setActiveObject(object);

                        back.renderAll(back);

                        setCanvas(3);

                    }

                }

            }



            break;



        case "numberpersonalizecolorModal":



            if (document.getElementById('numberpersonalizecheckModal').checked) {

                document.getElementById("personalize_newModal").style.display = "none";

                document.getElementById("personalize_editModal").style.display = "block";

                document.getElementById("personalizecolorselectedModal").innerHTML = "Number Color: ";

                if (document.getElementById('numberpersonalizesideModal').value == "Front") {

                    var list = front.getObjects();

                    for (var i = 0; i < list.length; i++) {

                        if (list[i].id == "numberpersonalizefront") {

                            object = list[i];

                            break;

                        }

                    }



                    if (object != null) {

                        front.setActiveObject(object);

                        front.renderAll(front);

                        setCanvas(1);

                    }

                } else {

                    var list = back.getObjects();

                    for (var i = 0; i < list.length; i++) {

                        if (list[i].id == "numberpersonalizeback") {

                            object = list[i];

                            break;

                        }

                    }



                    if (object != null) {

                        back.setActiveObject(object);

                        back.renderAll(back);

                        setCanvas(3);

                    }

                }

            }



            break;



        case "textpersonalizestrokecolor":



            if (document.getElementById('textpersonalizecheck').checked) {

                document.getElementById("personalize_new").style.display = "none";

                document.getElementById("personalize_edit").style.display = "block";

                document.getElementById("personalizecolorselected").innerHTML = "Name Stroke Color: ";

                if (document.getElementById('textpersonalizeside').value == "Front") {

                    var list = front.getObjects();

                    for (var i = 0; i < list.length; i++) {

                        if (list[i].id == "textpersonalizefront") {

                            object = list[i];

                            break;

                        }

                    }



                    if (object != null) {

                        front.setActiveObject(object);

                        front.renderAll(front);

                        setCanvas(1);

                    }

                } else {

                    var list = back.getObjects();

                    for (var i = 0; i < list.length; i++) {

                        if (list[i].id == "textpersonalizeback") {

                            object = list[i];

                            break;

                        }

                    }



                    if (object != null) {

                        back.setActiveObject(object);

                        back.renderAll(back);

                        setCanvas(3);

                    }

                }

            }



            break;



        case "textpersonalizestrokecolorModal":



            if (document.getElementById('textpersonalizecheckModal').checked) {

                document.getElementById("personalize_newModal").style.display = "none";

                document.getElementById("personalize_editModal").style.display = "block";

                document.getElementById("personalizecolorselectedModal").innerHTML = "Name Stroke Color: ";

                if (document.getElementById('textpersonalizesideModal').value == "Front") {

                    var list = front.getObjects();

                    for (var i = 0; i < list.length; i++) {

                        if (list[i].id == "textpersonalizefront") {

                            object = list[i];

                            break;

                        }

                    }



                    if (object != null) {

                        front.setActiveObject(object);

                        front.renderAll(front);

                        setCanvas(1);

                    }

                } else {

                    var list = back.getObjects();

                    for (var i = 0; i < list.length; i++) {

                        if (list[i].id == "textpersonalizeback") {

                            object = list[i];

                            break;

                        }

                    }



                    if (object != null) {

                        back.setActiveObject(object);

                        back.renderAll(back);

                        setCanvas(3);

                    }

                }

            }



            break;



        case "numberpersonalizestrokecolor":



            if (document.getElementById('numberpersonalizecheck').checked) {

                document.getElementById("personalize_new").style.display = "none";

                document.getElementById("personalize_edit").style.display = "block";

                document.getElementById("personalizecolorselected").innerHTML = "Number Stroke Color: ";

                if (document.getElementById('numberpersonalizeside').value == "Front") {

                    var list = front.getObjects();

                    for (var i = 0; i < list.length; i++) {

                        if (list[i].id == "numberpersonalizefront") {

                            object = list[i];

                            break;

                        }

                    }



                    if (object != null) {

                        front.setActiveObject(object);

                        front.renderAll(front);

                        setCanvas(1);

                    }

                } else {

                    var list = back.getObjects();

                    for (var i = 0; i < list.length; i++) {

                        if (list[i].id == "numberpersonalizeback") {

                            object = list[i];

                            break;

                        }

                    }



                    if (object != null) {

                        back.setActiveObject(object);

                        back.renderAll(back);

                        setCanvas(3);

                    }

                }

            }



            break;





        case "numberpersonalizestrokecolorModal":



            if (document.getElementById('numberpersonalizecheckModal').checked) {

                document.getElementById("personalize_newModal").style.display = "none";

                document.getElementById("personalize_editModal").style.display = "block";

                document.getElementById("personalizecolorselectedModal").innerHTML = "Number Stroke Color: ";

                if (document.getElementById('numberpersonalizesideModal').value == "Front") {

                    var list = front.getObjects();

                    for (var i = 0; i < list.length; i++) {

                        if (list[i].id == "numberpersonalizefront") {

                            object = list[i];

                            break;

                        }

                    }



                    if (object != null) {

                        front.setActiveObject(object);

                        front.renderAll(front);

                        setCanvas(1);

                    }

                } else {

                    var list = back.getObjects();

                    for (var i = 0; i < list.length; i++) {

                        if (list[i].id == "numberpersonalizeback") {

                            object = list[i];

                            break;

                        }

                    }



                    if (object != null) {

                        back.setActiveObject(object);

                        back.renderAll(back);

                        setCanvas(3);

                    }

                }

            }



            break;

    }

}





function changefontsize(element) 

{



    if (element.id == "textpersonalizeheight" || element.id == "textpersonalizeheightModal") {

        var value = null;



        switch (element.value) {



             case "1 In":



                value = 40;



                break;



            case "2 In":



                value = 80;



                break;



            case "4 In":



                value = 160;



                break;



            case "6 In":



                value = 240;



                break;



            case "8 In":



                value = 320;



                break;







        }



        if (document.getElementById("textpersonalizeside").value == "Front" || document.getElementById("textpersonalizesideModal").value == "Front") {

            object = null;



            var list = front.getObjects();

            for (var i = 0; i < list.length; i++) {

                if (list[i].id == "textpersonalizefront") {

                    object = list[i];

                    break;

                }

            }



            if (object != null) {

                object.set({

                    fontSize: value

                });

                front.add(object);

                front.setActiveObject(object);

                front.renderAll(front);

                setCanvas(1);

                $('.nav-tabs a[href="#personalize"]').tab('show');



                /*document.getElementById("personalize_new").style.display="block";

              document.getElementById("personalize_edit").style.display="none";*/

            }

        } else {

            object = null;



            var list = back.getObjects();

            for (var i = 0; i < list.length; i++) {

                if (list[i].id == "textpersonalizeback") {

                    object = list[i];

                    break;

                }

            }



            if (object != null) {



                object.set({

                    fontSize: value

                });

                back.add(object);

                back.setActiveObject(object);

                back.renderAll(back);

                setCanvas(3);

                $('.nav-tabs a[href="#personalize"]').tab('show');



            }

        }

    } else {



        var value = null;



        switch (element.value) {



            

            case "1 In":



                value = 40;



                break;



            case "2 In":



                value = 80;



                break;



            case "4 In":



                value = 160;



                break;



            case "6 In":



                value = 240;



                break;



            case "8 In":



                value = 320;



                break;



        }



        if (document.getElementById("numberpersonalizeside").value == "Front" || document.getElementById("numberpersonalizesideModal").value == "Front") {

            object = null;



            var list = front.getObjects();

            for (var i = 0; i < list.length; i++) {

                if (list[i].id == "numberpersonalizefront") {

                    object = list[i];

                    break;

                }

            }



            if (object != null) {



                object.set({

                    fontSize: value

                });

                front.add(object);

                front.renderAll(front);

                setCanvas(1);

                front.setActiveObject(object);

            }

        } else {

            object = null;



            var list = back.getObjects();

            for (var i = 0; i < list.length; i++) {

                if (list[i].id == "numberpersonalizeback") {

                    object = list[i];

                    break;

                }

            }



            if (object != null) {



                object.set({

                    fontSize: value

                });

                back.add(object);

                back.renderAll(back);

                setCanvas(3);

                back.setActiveObject(object);

            }

        }

    }



}



function movedesigntoside(element) 

{

    if (element.id == "textpersonalizeside" || element.id == "textpersonalizesideModal") {

        if (element.value == "Front") {

            object = null;

            var list = back.getObjects();

            for (var i = 0; i < list.length; i++) {

                if (list[i].id == "textpersonalizeback") {

                    object = list[i];

                    break;

                }

            }



            if (object != null) {

                object.set({

                    id: "textpersonalizefront"

                });

                front.add(object);

                front.renderAll(front);

                back.remove(object);

                back.renderAll(front);

                setCanvas(1);

                front.setActiveObject(object);

            }

        } else {

            object = null;

            var list = front.getObjects();

            for (var i = 0; i < list.length; i++) {

                if (list[i].id == "textpersonalizefront") {

                    object = list[i];

                    break;

                }

            }



            if (object != null) {

                object.set({

                    id: "textpersonalizeback"

                });

                back.add(object);

                back.renderAll(back);

                front.remove(object);

                front.renderAll(back);

                setCanvas(3);

                back.setActiveObject(object);

            }

        }

    } else {

        if (element.value == "Front") {

            object = null;

            var list = back.getObjects();



            for (var i = 0; i < list.length; i++) {

                if (list[i].id == "numberpersonalizeback") {

                    object = list[i];

                    break;

                }

            }



            if (object != null) {

                object.set({

                    id: "numberpersonalizefront"

                });

                front.add(object);

                front.renderAll(front);

                back.remove(object);

                back.renderAll(front);

                setCanvas(1);

                front.setActiveObject(object);

            }

        } else {

            object = null;

            var list = front.getObjects();

            for (var i = 0; i < list.length; i++) {

                if (list[i].id == "numberpersonalizefront") {

                    object = list[i];

                    break;

                }

            }



            if (object != null) {

                object.set({

                    id: "numberpersonalizeback"

                });

                back.add(object);

                back.renderAll(back);

                front.remove(object);

                front.renderAll(back);

                setCanvas(3);

                back.setActiveObject(object);

            }

        }

    }



}





$('#textpersonalizecheck').on('click', function(e) 

{

    var textpersonalizecanvas = null;

    var textpersonalizeid = null;

    if (document.getElementById("textpersonalizeside").value == "Front") 

    {

        textpersonalizecanvas = front;

        textpersonalizeid = "front";

        setCanvas(1);

    } else {

        textpersonalizecanvas = back;

        textpersonalizeid = "back";

        setCanvas(3);

    }





    if (this.checked) 

    {

        document.getElementById("textpersonalizeside").disabled = false;

        document.getElementById("textpersonalizeheight").disabled = false;

        document.getElementById("textpersonalizecolor").disabled = false;

        document.getElementById("textpersonalizestrokecolor").disabled = false;



        var textSample = new fabric.IText("EXAMPLE", 

        {



            left: textpersonalizecanvas.width / 2,



            top: 50,



            fontSize: 80,



            strokeWidth: 0,



            fontFamily: 'collegeb',



            backgroundColor: 'transparent',



            id: "textpersonalize" + textpersonalizeid,



            editable: false,



            originX: 'center',



            originY: 'center',



            colorName: 'Black',



            strokecolorName: '',



            fill: '#000000',



            stroke: '',



           textAlign : "center"



        });



        /*var BoundingRect = {left:textSample.left, top:textSample.top, width:textSample.width, height:textSample.height};



        textSample.setOptions({BoundingRect: BoundingRect});*/



        textSample.setControlsVisibility({



            ml: false,



            mr: false,



            mb: false,



            mt: false,



            mtr: false,



            bl: false,



            tr: true,



            tl: false,



            br: false,



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



                icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



        });



        textpersonalizecanvas.add(textSample).renderAll(textpersonalizecanvas);



        textpersonalizecanvas.setActiveObject(textpersonalizecanvas.item(textpersonalizecanvas.getObjects().length - 1));



    } else {

        var list = textpersonalizecanvas.getObjects();

        for (var i = 0; i < list.length; i++) {

            if (list[i].id == "textpersonalize" + textpersonalizeid) {

                textpersonalizecanvas.remove(list[i]);

                break

            }

        }

        document.getElementById("textpersonalizeside").disabled = true;

        document.getElementById("textpersonalizeheight").disabled = true;

        document.getElementById("textpersonalizecolor").disabled = true;

        document.getElementById("textpersonalizestrokecolor").disabled = true;

    }

});



$('#numberpersonalizecheck').on('click', function(e)

{

    var numberpersonalizecanvas = null;

    var numberpersonalizeid = null;



    if (document.getElementById("numberpersonalizeside").value == "Front") {

        numberpersonalizecanvas = front;

        numberpersonalizeid = "front";

        setCanvas(1);

    } else {

        numberpersonalizecanvas = back;

        numberpersonalizeid = "back";

        setCanvas(3);

    }





    if (this.checked) {

        document.getElementById("numberpersonalizeside").disabled = false;

        document.getElementById("numberpersonalizeheight").disabled = false;

        document.getElementById("numberpersonalizecolor").disabled = false;

        document.getElementById("numberpersonalizestrokecolor").disabled = false;



        var textSample = new fabric.IText("00", {



            left: numberpersonalizecanvas.width / 2,



            top: 250,



            fontSize: 320,



            strokeWidth: 0,



            fontFamily: 'collegeb',



            backgroundColor: 'transparent',



            id: "numberpersonalize" + numberpersonalizeid,



            editable: false,



            snapAngle: 45,



            snapThreshold: 45,



            centeredRotation: true,



            originX: 'center',



            originY: 'center',



            scaleY: 1,



            colorName: 'Black',



            strokecolorName: '',



            fill: '#000000',



            stroke: '',



            textAlign : "center"



            



        });



        textSample.setControlsVisibility({



            ml: false,



            mr: false,



            mb: false,



            mt: false,



            mtr: false,



            bl: false,



            tr: true,



            tl: false,



            br: false,



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



                icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



        });



        numberpersonalizecanvas.add(textSample).renderAll();

        numberpersonalizecanvas.setActiveObject(numberpersonalizecanvas.item(numberpersonalizecanvas.getObjects().length - 1));

    } else {

        var list = numberpersonalizecanvas.getObjects();

        for (var i = 0; i < list.length; i++) {

            if (list[i].id == "numberpersonalize" + numberpersonalizeid) {

                numberpersonalizecanvas.remove(list[i]);

                break

            }

        }

        document.getElementById("numberpersonalizeside").disabled = true;

        document.getElementById("numberpersonalizeheight").disabled = true;

        document.getElementById("numberpersonalizecolor").disabled = true;

        document.getElementById("numberpersonalizestrokecolor").disabled = true;

    }



});



$('#textpersonalizecheckModal').on('click', function(e) 

{

    var textpersonalizecanvas = null;

    var textpersonalizeid = null;

    if (document.getElementById("textpersonalizesideModal").value == "Front")

    {

        textpersonalizecanvas = front;

        textpersonalizeid = "front";

        setCanvas(1);

    } 

    else 

    {

        textpersonalizecanvas = back;

        textpersonalizeid = "back";

        setCanvas(3);

    }





    if (this.checked)

     {

        document.getElementById("textpersonalizesideModal").disabled = false;

        document.getElementById("textpersonalizeheightModal").disabled = false;

        document.getElementById("textpersonalizecolorModal").disabled = false;

        document.getElementById("textpersonalizestrokecolorModal").disabled = false;

        





        var textSample = new fabric.IText("Example", {



            left: textpersonalizecanvas.width / 2,



            top: 50,



            fontSize: 62,



            strokeWidth: 0,



            fontFamily: 'PROMESH-Regular',



            backgroundColor: 'transparent',



            id: "textpersonalize" + textpersonalizeid,



            scaleX: 1,



            charSpacing: 20,



            snapAngle: 45,



            snapThreshold: 45,



            centeredRotation: true,



            originX: 'center',



            originY: 'center',



            colorName: 'Black',



            strokecolorName: '',



            fill: '#000000',



            stroke: ''



        });



        /*var BoundingRect = {left:textSample.left, top:textSample.top, width:textSample.width, height:textSample.height};



        textSample.setOptions({BoundingRect: BoundingRect});*/



        textSample.setControlsVisibility({



            ml: false,



            mr: false,



            mb: false,



            mt: false,



            mtr: false,



            bl: false,



            tr: true,



            tl: false,



            br: false,



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



                icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



        });



        textpersonalizecanvas.add(textSample).renderAll(textpersonalizecanvas);



        textpersonalizecanvas.setActiveObject(textpersonalizecanvas.item(textpersonalizecanvas.getObjects().length - 1));



    } 

    else 

    {

        var list = textpersonalizecanvas.getObjects();

        for (var i = 0; i < list.length; i++) {

            if (list[i].id == "textpersonalize" + textpersonalizeid) {

                textpersonalizecanvas.remove(list[i]);

                break

            }

        }

        document.getElementById("textpersonalizesideModal").disabled = true;

        document.getElementById("textpersonalizeheightModal").disabled = true;

        document.getElementById("textpersonalizecolorModal").disabled = true;

        document.getElementById("textpersonalizestrokecolorModal").disabled = true;

    }

});



$('#numberpersonalizecheckModal').on('click', function(e) 

{

    var numberpersonalizecanvas = null;

    var numberpersonalizeid = null;



    if (document.getElementById("numberpersonalizesideModal").value == "Front") {

        numberpersonalizecanvas = front;

        numberpersonalizeid = "front";

        setCanvas(1);

    } else {

        numberpersonalizecanvas = back;

        numberpersonalizeid = "back";

        setCanvas(3);

    }





    if (this.checked) {

        document.getElementById("numberpersonalizesideModal").disabled = false;

        document.getElementById("numberpersonalizeheightModal").disabled = false;

        document.getElementById("numberpersonalizecolorModal").disabled = false;

        document.getElementById("numberpersonalizestrokecolorModal").disabled = false;



        var textSample = new fabric.IText("00", {



            left: numberpersonalizecanvas.width / 2,



            top: 250,



            fontSize: 248,



            strokeWidth: 0,



            fontFamily: 'PROMESH-Regular',



            backgroundColor: 'transparent',



            id: "numberpersonalize" + numberpersonalizeid,



            isEditing: false,



            charSpacing: 20,



            snapAngle: 45,



            snapThreshold: 45,



            centeredRotation: true,



            originX: 'center',



            originY: 'center',



            scaleY: 1,



            colorName: 'Black',



            strokecolorName: '',



            fill: '#000000',



            stroke: ''



        });



        textSample.setControlsVisibility({



            ml: false,



            mr: false,



            mb: false,



            mt: false,



            mtr: false,



            bl: false,



            tr: true,



            tl: false,



            br: false,



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



                icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



            },



        });



        numberpersonalizecanvas.add(textSample).renderAll();

        numberpersonalizecanvas.setActiveObject(numberpersonalizecanvas.item(numberpersonalizecanvas.getObjects().length - 1));

    } else {

        var list = numberpersonalizecanvas.getObjects();

        for (var i = 0; i < list.length; i++) {

            if (list[i].id == "numberpersonalize" + numberpersonalizeid) {

                numberpersonalizecanvas.remove(list[i]);

                break

            }

        }

        document.getElementById("numberpersonalizesideModal").disabled = true;

        document.getElementById("numberpersonalizeheightModal").disabled = true;

        document.getElementById("numberpersonalizecolorModal").disabled = true;

        document.getElementById("numberpersonalizestrokecolorModal").disabled = true;

    }



});



function drawpersonalize(pos)

{

  var namepreview = "";

  var numberpreview = ""; 

  var nameobject = null;

  var numberobject = null;

  canvaspreviewfront.clear();

  canvaspreviewback.clear();

 

  if (document.getElementById("textpersonalizecheck").checked || document.getElementById("textpersonalizecheckModal").checked)

  {

    namepreview = document.getElementById("namepersonalize"+pos).value;

  }

  if (document.getElementById("numberpersonalizecheck").checked || document.getElementById("numberpersonalizecheckModal").checked)

  {

    numberpreview = document.getElementById("numberpersonalize"+pos).value;

  }



  if (front.getObjects().length > 0)

  {

    for (var i = 0; i< front.getObjects().length ; i++) 

    {

      if (front.getObjects()[i].id == "textpersonalizefront")

      {

        nameobject = front.getObjects()[i];

      }

      if (front.getObjects()[i].id == "numberpersonalizefront")

      {

        numberobject = front.getObjects()[i];

        

      }

    }

  }

  

  if (back.getObjects().length > 0)

  {

    for (var i = 0; i< back.getObjects().length ; i++) 

    {

      if (back.getObjects()[i].id == "textpersonalizeback")

      { 

        nameobject = back.getObjects()[i];

      }

      if (back.getObjects()[i].id == "numberpersonalizeback")

      { 

        numberobject = back.getObjects()[i];

      }

    }



  }



  if (namepreview.length > 0)

  {

        var nameSample = new fabric.Text(namepreview.toUpperCase(), 

        {

              left: nameobject.left / 2,

              top: nameobject.top/2,

              fontSize: nameobject.getFontSize()/2,

              strokeWidth: nameobject.strokeWidth,

              fontFamily:nameobject.getFontFamily(),

              backgroundColor: nameobject.backgroundColor,

              charSpacing: nameobject.charSpacing/2,

              originX: nameobject.originX,

              originY: nameobject.originY,

              fill: nameobject.fill,

              stroke:nameobject.stroke,

              selectable : false,

        });



        nameSample.setControlsVisibility({

              ml: false,

              mr: false,

              mb: false,

              mt: false,

              mtr: false,

              bl: false,

              tr: false,

              tl: false,

              br: false,

        });



        if (nameobject.id.indexOf("front") != -1)

        {

           canvaspreviewfront.add(nameSample).renderAll();    

        }

        else

        {

          canvaspreviewback.add(nameSample).renderAll();     

        }

  }

   

  if (numberpreview.length > 0)

  {

        var numberSample = new fabric.Text(numberpreview.toUpperCase(), 

    {

          left: numberobject.left / 2,

          top: numberobject.top/2,

          fontSize: numberobject.getFontSize()/2,

          strokeWidth: numberobject.strokeWidth,

          fontFamily:numberobject.getFontFamily(),

          backgroundColor: numberobject.backgroundColor,

          charSpacing: numberobject.charSpacing/2,

          originX:numberobject.originX,

          originY:numberobject.originY,

          fill: numberobject.fill,

          stroke:numberobject.stroke,

          selectable: false,

    });



    numberSample.setControlsVisibility({

          ml: false,

          mr: false,

          mb: false,

          mt: false,

          mtr: false,

          bl: false,

          tr: false,

          tl: false,

          br: false,

    });



    if (numberobject.id.indexOf("front") != -1)

    {

        canvaspreviewfront.add(numberSample).renderAll();    

    }

    else

    {

        canvaspreviewback.add(numberSample).renderAll();     

    }

  }

}



$('#effect,#straight, #curved,#effectModal,#straightModal, #curvedModal').on('click', function(e) {







    if (this.id == "curved")



    {



        effect.checked = true;



    } else if (this.id == "straight")



    {



        effect.checked = false;



    } else if (this.id == "curvedModal")



    {



        effectModal.checked = true;



    } else if (this.id == "straightModal")



    {



        effectModal.checked = false;



    } else if (this.id == "effect")



    {



        effect.checked = document.getElementById("effect").checked;



    } else if (this.id == "effectModal")



    {



        effectModal.checked = document.getElementById("effectModal").checked;



    }









    var canvas = null;



    switch (canvasCounter) {



        case 1:



            canvas = front;



            break



        case 2:



            canvas = right;



            break;



        case 3:



            canvas = back;



            break;



        default:



            canvas = left;



    }







    var obj = canvas.getActiveObject();







    if (obj)



    {



        default_text = obj.getText();



        props = obj.toObject();







        if (isMobile())



        {



            var texteffecsarea = document.getElementById("texteffecsareaModal");



            if (effectModal.checked)



            {



                $('#straightModal').removeClass("label-info");



                $('#straightModal').addClass("label-default");



                $('#curvedModal').removeClass("label-default");



                $('#curvedModal').addClass("label-info");



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



                //var textSample = new fabric.CurvedText(default_text, props);  



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



                        icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    bl: {



                        icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    br: {



                        icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    ml: {



                        icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    mr: {



                        icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    mb: {



                        icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    mt: {



                        icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    tl: {

                        icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                    },



                });







            } else //else if(!effect.checked || this.id == "straight")



            {



                $('#straightModal').removeClass("label-default");



                $('#straightModal').addClass("label-info");



                $('#curvedModal').removeClass("label-info");



                $('#curvedModal').addClass("label-default");



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



                        icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    bl: {



                        icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    br: {



                        icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    ml: {



                        icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    mr: {



                        icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    mb: {



                        icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    mt: {



                        icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    tl: {

                        icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                    },



                });



            }



        } else



        {







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



                        icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    bl: {



                        icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    br: {



                        icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    ml: {



                        icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    mr: {



                        icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    mb: {



                        icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    mt: {



                        icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    tl: {

                        icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                    },



                });







            } else //else if(!effect.checked || this.id == "straight")



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



                        icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    bl: {



                        icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    br: {



                        icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    ml: {



                        icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    mr: {



                        icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    mb: {



                        icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    mt: {



                        icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



                    },



                    tl: {

                        icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                    },



                });



            }



        }



        save();



        canvas.remove(obj);



        canvas.add(textSample);



        canvas.setActiveObject(canvas.item(canvas.getObjects().length - 1));



        canvas.renderAll();



    }



});







window.addEventListener("resize", function()



    {









        windowheight = Math.min(screen.availHeight, window.innerHeight);



        windowwidth = Math.min(screen.availWidth, window.innerWidth);



        windowheight = screen.availHeight;



        windowwidth = screen.availWidth;



        windowheight = window.innerHeight;



        windowwidth = window.innerWidth;



        if (windowheight > windowwidth)



        {



            Orientation = "PORTRAIT";



        } else



        {



            Orientation = "LANDSCAPE";



        }







        if (windowwidth < 768)



        {



            viewporttype = "xs";



        } else if (windowwidth >= 768 && windowwidth <= 992)



        {



            viewporttype = "sm";



        } else if (windowwidth > 992 && windowwidth <= 1200)



        {



            viewporttype = "md";



        } else



        {



            viewporttype = "lg";



        }







        if (viewporttype == "xs" || viewporttype == "sm" || viewporttype == "md")



        {



            var scale = 1;



            scale = ((window.innerHeight - (100)) / 810).toFixed(2);



            document.getElementById('myCarousel').setAttribute('style', " display:block; -moz-transform: scale(" + scale + ") translate(-50%); -ms-transform:  scale(" + scale + ") translate(-50%);  -o-transform:  scale(" + scale + ") translate(-50%); transform: scale(" + scale + ") translate(-50%)");



            if (windowheight > windowwidth && isMobile())



            {



                CloseModal("disableview");



            } else



            {



                showColorModal("disableview");



            }



        } 
        else



        {



            document.getElementById('myCarousel').setAttribute('style', " -webkit-transform-origin: unset; transform-origin: unset;-webkit-transform: unset; -moz-transform: unset; -ms-transform: unset; -o-transform:  unset; transform: unset; left: none;position: fixed;display: block;");







            CloseModal("disableview");



        }









        if (isMobile())



        {



          



            document.getElementById("footer_menu").style.display = "block";



            document.getElementById("footer_menu_text").style.display = "none";



            document.getElementById("footer_menu_art").style.display = "none";



            document.getElementById("productPicker").style.overflowY = "auto";



        } else



        {



            // startcategories();  



        }









    })







window.addEventListener("orientationchange", function()



    {



        windowheight = Math.min(screen.availHeight, window.innerHeight);



        windowwidth = Math.min(screen.availWidth, window.innerWidth);







        windowheight = screen.availHeight;



        windowwidth = screen.availWidth;



        windowheight = window.innerHeight;



        windowwidth = window.innerWidth;







        if (windowheight > windowwidth)



        {



            Orientation = "PORTRAIT";



        } else



        {



            Orientation = "LANDSCAPE";



        }







        if (windowwidth < 768)



        {



            viewporttype = "xs";



        } else if (windowwidth >= 768 && windowwidth <= 992)



        {



            viewporttype = "sm";



        } else if (windowwidth > 992 && windowwidth <= 1200)



        {



            viewporttype = "md";



        } else



        {



            viewporttype = "lg";



        }







        if (viewporttype == "xs" || viewporttype == "sm" || viewporttype == "md")



        {


            if (windowheight > windowwidth && isMobile())



            {

            	console.log("here");

            	

                CloseModal("disableview");



            } else



            {



                showColorModal("disableview");



            }



        }
        else



        {



            CloseModal("disableview");



        }







        startcategories();







    }, false);









function OpenClose(open, close, from)



{



    windowheight = window.innerHeight /*screen.availHeight*/ ;



    windowwidth = window.innerWidth /*screen.availWidth*/ ;







    if ((screen.availHeight > screen.availWidth) || (window.innerHeight > window.innerWidth))



    {



        Orientation = "PORTRAIT";



    } else



    {



        Orientation = "LANDSCAPE";



    }







    if (windowwidth < 768)



    {



        viewporttype = "xs";



    } else if (windowwidth >= 768 && windowwidth <= 992)



    {



        viewporttype = "sm";



    } else if (windowwidth > 992 && windowwidth <= 1200)



    {



        viewporttype = "md";



    } else



    {



        viewporttype = "lg";



    }







    if (viewporttype == "lg" || viewporttype == "md" && Orientation == "LANDSCAPE")



    {



        document.getElementById(open).style.display = "block";



        document.getElementById(close).style.display = "block";



    } else



    {



        document.getElementById(open).style.display = "block";



        document.getElementById(close).style.display = "none";



    }







}







$(document).ready(function() {



    $('[data-toggle="popover"]').popover();



});









function setProduct(value, parent, child) {









    document.getElementById('productModal').style.display = 'none';







    StyleNumber = value;







    parent_product_name = parent;







    child_product_color = child;







    costOfProduct = 2;







    updateCanvasProperty();







    //if (!isMobile())



    //{



    ShowChildsProducts();



    //}









    savetmpdesign();







    OpenClose("myCarousel", "work_area", 'setProduct()');









}







function loadImages(design)







{



    //shows previews of saved design when user wants to see a saved design  









    //var design =   document.getElementById("mydesings").value;







    if (design != 'Select the design')







    {







        savedDesignsDiv.style.display = "block";







        var guest = design.split("_", 1);







        var file = 'designs/' + guest + '/' + design + '/' + design;







        document.getElementById('frontSavedDesing').style.display = "block";



        document.getElementById('frontPreviewSave').style.display = "block";



        document.getElementById('frontPreviewSaveDesign').style.display = "block";



        document.getElementById('frontPreviewSaveDesign').src = file + '_front.png';









        document.getElementById('rightSavedDesing').style.display = "block";



        document.getElementById('rightPreviewSave').style.display = "block";



        document.getElementById('rightPreviewSaveDesign').style.display = "block";



        document.getElementById('rightPreviewSaveDesign').src = file + '_right.png';









        document.getElementById('backSavedDesing').style.display = "block";



        document.getElementById('backPreviewSave').style.display = "block";



        document.getElementById('backPreviewSaveDesign').style.display = "block";



        document.getElementById('backPreviewSaveDesign').src = file + '_back.png';









        document.getElementById('leftSavedDesing').style.display = "block";



        document.getElementById('leftPreviewSave').style.display = "block";



        document.getElementById('leftPreviewSaveDesign').style.display = "block";



        document.getElementById('leftPreviewSaveDesign').src = file + '_left.png';







    } else







    {



        ResetDesignStudio();



        savedDesignsDiv.style.display = "none";









    }



}









function changeicon(elementid)



{







    var up = document.getElementById(elementid + 'up');



    var down = document.getElementById(elementid + 'down');



    if (up.style.display == "block")



    {



        up.style.display = "none";



        down.style.display = "block";



    } else



    {



        up.style.display = "block";



        down.style.display = "none";



    }



}









// Prevent pull refresh chrome



/*var lastTouchY = 0;



var preventPullToRefresh = false;



window.document.body.addEventListener("touchstart", function(e){



  if (e.touches.length != 1) { return; }



  lastTouchY = e.touches[0].clientY;



  preventPullToRefresh = window.pageYOffset == 0;



}, false);*/







// Prevent pull refresh chrome



/*window.document.body.addEventListener("touchmove", function(e){



  var touchY = e.touches[0].clientY;



  var touchYDelta = touchY - lastTouchY;



  lastTouchY = touchY;



  if (preventPullToRefresh) {



      // To suppress pull-to-refresh it is sufficient to preventDefault the first overscrolling touchmove.



      preventPullToRefresh = false;



      if (touchYDelta > 0) {



          e.preventDefault();



          return;



      }



  }







}, false);*/









/*



(function() {



fabric.util.addListener(fabric.window, 'load', function() {



  var canvas = this.__canvas || this.canvas,



      canvases = this.__canvases || this.canvases;







  canvas && canvas.calcOffset && canvas.calcOffset();







  if (canvases && canvases.length) {



    for (var i = 0, len = canvases.length; i < len; i++) {



      canvases[i].calcOffset();



    }



  }



});



})();*/







function SetScaleProportional()



{



    switch (canvasCounter)



    {



        case 1:



            var object = front.getActiveObject();



            break;



        case 2:



            var object = right.getActiveObject();



            break;



        case 3:



            var object = back.getActiveObject();



            break;



        default:



            var object = left.getActiveObject();



    }









    if (isMobile())



    {



        //$('#resizeiconModal').removeClass("fa fa-unlock");



        //$('#resizeiconModal').addClass("fa fa-lock");  



        if ($('#resizeiconModal').hasClass('fa fa-lock') || $('#resizeiconModal').hasClass('fa-lock fa'))



        {



            $('#resizeiconModal').removeClass("fa fa-lock");



            $('#resizeiconModal').addClass("fa fa-unlock");



            object['setControlVisible']('ml', true);



            object['setControlVisible']('mr', true);



            object['setControlVisible']('mt', true);



            object['setControlVisible']('mb', true);



            object['setControlVisible']('br', false);



            object['setControlVisible']('bl', false);



            object['lockUniScaling'] = false;



            //object.lockUniScaling = true;



        } else



        {



            $('#resizeiconModal').removeClass("fa fa-unlock");



            $('#resizeiconModal').addClass("fa fa-lock");



            object['setControlVisible']('ml', false);



            object['setControlVisible']('mr', false);



            object['setControlVisible']('mt', false);



            object['setControlVisible']('mb', false);



            object['setControlVisible']('br', true);



            object['setControlVisible']('bl', true);



            object['lockUniScaling'] = true;



            //object.lockUniScaling = false;



        }



    } else



    {



        if ($('#resizeicon').hasClass('fa fa-lock') || $('#resizeicon').hasClass('fa-lock fa'))



        {



            $('#resizeicon').removeClass("fa fa-lock");



            $('#resizeicon').addClass("fa fa-unlock");



            object['setControlVisible']('ml', true);



            object['setControlVisible']('mr', true);



            object['setControlVisible']('mt', true);



            object['setControlVisible']('mb', true);



            object['setControlVisible']('br', false);



            object['setControlVisible']('bl', false);



            object['lockUniScaling'] = false;



            //object.lockUniScaling = true;



        } else



        {



            $('#resizeicon').removeClass("fa fa-unlock");



            $('#resizeicon').addClass("fa fa-lock");



            object['setControlVisible']('ml', false);



            object['setControlVisible']('mr', false);



            object['setControlVisible']('mt', false);



            object['setControlVisible']('mb', false);



            object['setControlVisible']('br', true);



            object['setControlVisible']('bl', true);



            object['lockUniScaling'] = true;



            //object.lockUniScaling = false;



        }







    }



    switch (canvasCounter) {



        case 1:



            front.renderAll();



            break;



        case 2:



            right.renderAll();



            break;



        case 3:



            back.renderAll();



            break;



        default:



            left.renderAll();



    }



}







function SetLayer(value)



{



    switch (canvasCounter)



    {



        case 1:



            var object = front.getActiveObject();



            break;



        case 2:



            var object = right.getActiveObject();



            break;



        case 3:



            var object = back.getActiveObject();



            break;



        default:



            var object = left.getActiveObject();



    }







    if (value == "forward")



    {



        object.bringForward();



    } else if (value == "backward")



    {



        object.sendBackwards();



    }





    switch (canvasCounter) {



        case 1:

            if (value == "center")

                object.set('left', front.width / 2).setCoords();

            front.renderAll();



            break;



        case 2:

            if (value == "center")

                object.set('left', right.width / 2).setCoords();

            right.renderAll(right);



            break;



        case 3:

            if (value == "center")

                object.set('left', back.width / 2).setCoords();

            back.renderAll(back);



            break;



        default:

            if (value == "center")

                object.set('left', left.width / 2).setCoords();

            left.renderAll(left);



    }



    save();



}







$(document).ready(function() {



    $('[data-toggle="tooltip"]').tooltip();



});







function changeClipArtMenuSize()



{



    /* var clipArtMenu = document.getElementById('clipArtMenu');



    document.getElementById('ClipsArtImages').style.height = '230px';*/



}









function validate(evt) {



    var theEvent = evt || window.event;



    var key = theEvent.keyCode || theEvent.which;



    key = String.fromCharCode(key);



    var regex = /[0-9]|\./;



    if (!regex.test(key)) {



        theEvent.returnValue = false;



        if (theEvent.preventDefault) theEvent.preventDefault();



    }



}









/**



 * Push the current state into the undo stack and then capture the current state



 */



function save()



{







    switch (canvasCounter) {



        case 1:



            frontredo = [];



            $('#redo').prop('disabled', true);



            // initial call won't have a state



            if (frontstate) {



                frontundo.push(frontstate);



                $('#undo').prop('disabled', false);



            }



            frontstate = JSON.stringify(front.toDatalessJSON());



            //front.renderAll(front);



            break;



        case 2:



            rightredo = [];



            $('#redo').prop('disabled', true);



            // initial call won't have a state



            if (rightstate) {



                rightundo.push(rightstate);



                $('#undo').prop('disabled', false);



            }



            rightstate = JSON.stringify(right.toDatalessJSON());



            //right.renderAll(right);



            break;



        case 3:



            backredo = [];



            $('#redo').prop('disabled', true);



            // initial call won't have a state



            if (backstate) {



                backundo.push(backstate);



                $('#undo').prop('disabled', false);



            }



            backstate = JSON.stringify(back.toDatalessJSON());



            //back.renderAll(back);



            break;



        default:



            leftredo = [];



            $('#redo').prop('disabled', true);



            // initial call won't have a state



            if (leftstate) {



                leftundo.push(leftstate);



                $('#undo').prop('disabled', false);



            }



            leftstate = JSON.stringify(left.toDatalessJSON());



            //left.renderAll(left);



    }



    // clear the redo stack







}









/**



 * Save the current state in the redo stack, reset to a state in the undo stack, and enable the buttons accordingly.



 * Or, do the opposite (redo vs. undo)



 * @param playStack which stack to get the last state from and to then render the canvas as



 * @param saveStack which stack to push current state into



 * @param buttonsOn jQuery selector. Enable these buttons.



 * @param buttonsOff jQuery selector. Disable these buttons.



 */



function replay(playStack, saveStack, buttonsOn, buttonsOff) {



    //var canvas = null;



    switch (canvasCounter) {



        case 1:



            //canvas = front;



            saveStack.push(frontstate);



            frontstate = playStack.pop();



            var on = $(buttonsOn);



            var off = $(buttonsOff);



            // turn both buttons off for the moment to prevent rapid clicking



            on.prop('disabled', true);



            off.prop('disabled', true);



            front.clear();



            front.loadFromDatalessJSON(frontstate, front.renderAll.bind(front), function(o, object) {



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



                            icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        bl: {



                            icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        br: {



                            icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        ml: {



                            icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mr: {



                            icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mb: {



                            icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mt: {



                            icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        tl: {

                            icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                        },



                    }, function()



                    {



                        front.renderAll();



                    });



                // now turn the buttons back on if applicable



                on.prop('disabled', false);



                if (playStack.length) {



                    off.prop('disabled', false);



                }



            });



            break;



        case 2:



            //canvas = front;



            saveStack.push(rightstate);



            rightstate = playStack.pop();



            var on = $(buttonsOn);



            var off = $(buttonsOff);



            // turn both buttons off for the moment to prevent rapid clicking



            on.prop('disabled', true);



            off.prop('disabled', true);



            right.clear();



            right.loadFromDatalessJSON(rightstate, right.renderAll.bind(right), function(o, object) {



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



                            icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        bl: {



                            icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        br: {



                            icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        ml: {



                            icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mr: {



                            icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mb: {



                            icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mt: {



                            icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        tl: {

                            icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                        },



                    }, function()



                    {



                        right.renderAll();



                    });



                // now turn the buttons back on if applicable



                on.prop('disabled', false);



                if (playStack.length) {



                    off.prop('disabled', false);



                }



            });



            break;



        case 3:



            //canvas = front;



            saveStack.push(backstate);



            backstate = playStack.pop();



            var on = $(buttonsOn);



            var off = $(buttonsOff);



            // turn both buttons off for the moment to prevent rapid clicking



            on.prop('disabled', true);



            off.prop('disabled', true);



            back.clear();



            back.loadFromDatalessJSON(backstate, back.renderAll.bind(back), function(o, object) {



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



                            icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        bl: {



                            icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        br: {



                            icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        ml: {



                            icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mr: {



                            icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mb: {



                            icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mt: {



                            icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        tl: {

                            icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                        },





                    }, function()



                    {



                        back.renderAll();



                    });



                // now turn the buttons back on if applicable



                on.prop('disabled', false);



                if (playStack.length) {



                    off.prop('disabled', false);



                }



            });



            break;



        default:



            //canvas = front;



            saveStack.push(leftstate);



            leftstate = playStack.pop();



            var on = $(buttonsOn);



            var off = $(buttonsOff);



            // turn both buttons off for the moment to prevent rapid clicking



            on.prop('disabled', true);



            off.prop('disabled', true);



            left.clear();



            left.loadFromDatalessJSON(leftstate, left.renderAll.bind(left), function(o, object) {



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



                            icon: 'https://www.vividcustoms.com/img/x.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        bl: {



                            icon: 'https://www.vividcustoms.com/img/resize_left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        br: {



                            icon: 'https://www.vividcustoms.com/img/resize_right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        ml: {



                            icon: 'https://www.vividcustoms.com/img/left.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mr: {



                            icon: 'https://www.vividcustoms.com/img/right.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mb: {



                            icon: 'https://www.vividcustoms.com/img/down.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        mt: {



                            icon: 'https://www.vividcustoms.com/img/up.png?v=' + Math.floor((Math.random() * 10000) + 1),



                        },



                        tl: {

                            icon: 'https://www.vividcustoms.com/img/rotation_circle.png?v=' + Math.floor((Math.random() * 10000) + 1),

                        },



                    }, function()



                    {



                        left.renderAll();



                    });



                // now turn the buttons back on if applicable



                on.prop('disabled', false);



                if (playStack.length) {



                    off.prop('disabled', false);



                }



            });



            break;



    }









}







$('#undo').click(function()



    {



        switch (canvasCounter) {



            case 1:



                replay(frontundo, frontredo, '#redo', this);



                break;



            case 2:



                replay(rightundo, rightredo, '#redo', this);



                break;



            case 3:



                replay(backundo, backredo, '#redo', this);



                break;



            default:



                replay(leftundo, leftredo, '#redo', this);



                break;



        }







    });



$('#redo').click(function()



    {



        switch (canvasCounter) {



            case 1:



                replay(frontredo, frontundo, '#undo', this);



                break;



            case 2:



                replay(rightredo, rightundo, '#undo', this);



                break;



            case 3:



                replay(backredo, backundo, '#undo', this);



                break;



            default:



                replay(leftredo, leftundo, '#undo', this);



                break;



        }



    })









$('#zoomin').click(function() {

    var valueaddfront = 0.5;

    var valueaddrigth = 0;

    var valueaddback = 0.35;

    var valueaddleft = 0.35;



    if (isMobile()) {

        valueaddfront = 1;

        valueaddrigth = 1;

        valueaddback = 1;

        valueaddleft = 1;

    }



    var zoomvaluefront = Number(scale) + valueaddfront;

    var zoomvalueright = Number(scale) + valueaddrigth;

    var zoomvalueback = Number(scale) + valueaddback;

    var zoomvalueleft = Number(scale) + valueaddleft;



    document.getElementById('frontCanvasShirt').style.transform = "scale(" + zoomvaluefront + ")";

    document.getElementById('rightCanvasShirt').style.transform = "scale(" + zoomvalueright + ")";

    document.getElementById('backCanvasShirt').style.transform = "scale(" + zoomvalueback + ")";

    document.getElementById('leftCanvasShirt').style.transform = "scale(" + zoomvalueleft + ")";



    zoom = true;

})









$('#zoomout').click(function() {

    var zoomvaluefront = 1;

    var zoomvalueright = 1;

    var zoomvalueback = 1;

    var zoomvalueleft = 1;



    document.getElementById('frontCanvasShirt').style.transform = "scale(" + zoomvaluefront + ")";

    document.getElementById('rightCanvasShirt').style.transform = "scale(" + zoomvalueright + ")";

    document.getElementById('backCanvasShirt').style.transform = "scale(" + zoomvalueback + ")";

    document.getElementById('leftCanvasShirt').style.transform = "scale(" + zoomvalueleft + ")";



    zoom = false;



})









function getDeliveryDateObj(day, businessDaysLeftForDelivery) {







    var deliveryDate = day;



    var dayOfTheWeek = deliveryDate.getDay();



    var calendarDays = businessDaysLeftForDelivery;



    var deliveryDay = dayOfTheWeek + businessDaysLeftForDelivery;



    if (deliveryDay >= 6)



    {



        businessDaysLeftForDelivery -= 6 - dayOfTheWeek; //deduct this-week days



        calendarDays += 2; //count this coming weekend



        deliveryWeeks = Math.floor(businessDaysLeftForDelivery / 5); //how many whole weeks?



        calendarDays += deliveryWeeks * 2; //two days per weekend per week



    }



    deliveryDate.setTime(deliveryDate.getTime() + calendarDays * 24 * 60 * 60 * 1000);







    //making sure deliveryDate isn't on a federal holiday



    var newYears = new Date(2010, 0, 1);



    var independenceDay = new Date(2010, 6, 4);



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



    var washington = new Date(c.getFullYear(), 1, 1);



    day = washington.getDay();



    target = 1;



    diff = target - day;



    day = diff + 21 + 1;



    washington.setDate(day);



    //finding Memorial Day



    var memorial = new Date(c.getFullYear(), 5, 0);



    day = memorial.getDay();



    target = 1;



    if (day > target)



    {



        diff = target - day;



        day = 31 + diff;



        memorial.setDate(day);



    } else if (day < target)



    {



        memorial.setDate(memorial.getDate() - 6);



    }



    //finding Labor Day



    var labor = new Date(c.getFullYear(), 8, 1);



    day = labor.getDay();



    target = 1;



    if (day > target)



    {



        diff = day - target;



        day = 7 - diff;



        labor.setDate(day + 1); //adding 1 because day is zero based and the date isn't



    } else if (day < target)



    {



        day++;



        labor.setDate(day);



    }



    //finding Columbus Day



    var columbus = new Date(c.getFullYear(), 9, 1);



    day = columbus.getDay();



    target = 1;



    if (day > target)



    {



        diff = day - target;



        day = 7 - diff;



        day = day + 7;



    } else if (day < target)



    {



        day = day + 1 + 7;



    } else



    {



        day += 7;



    }



    columbus.setDate(day + 1);



    //finding thanksgiving



    var thanksgiving = new Date(c.getFullYear(), 10, 1);



    day = thanksgiving.getDay();



    target = 4;



    diff = target - day;



    day = diff + 21 + 1;



    thanksgiving.setDate(day);







    if (newYears.getMonth() == deliveryDate.getMonth() && newYears.getDate() == deliveryDate.getDate() ||



        independenceDay.getMonth() == deliveryDate.getMonth() && independenceDay.getDate() == deliveryDate.getDate() ||



        VETRANS_DAY.getMonth() == deliveryDate.getMonth() && VETRANS_DAY.getDate() == deliveryDate.getDate() ||



        christmas.getMonth() == deliveryDate.getMonth() && christmas.getDate() == deliveryDate.getDate() ||



        mlk.getMonth() == deliveryDate.getMonth() && mlk.getDate() == deliveryDate.getDate() ||



        washington.getMonth() == deliveryDate.getMonth() && washington.getDate() == deliveryDate.getDate() ||



        memorial.getMonth() == deliveryDate.getMonth() && memorial.getDate() == deliveryDate.getDate() ||



        labor.getMonth() == deliveryDate.getMonth() && labor.getDate() == deliveryDate.getDate() ||



        columbus.getMonth() == deliveryDate.getMonth() && columbus.getDate() == deliveryDate.getDate() ||



        thanksgiving.getMonth() == deliveryDate.getMonth() && thanksgiving.getDate() == deliveryDate.getDate())



    {



        deliveryDate.setDate(getDeliveryDateObj(deliveryDate, 1).getDate());



    }



    return deliveryDate;



}







function dateformat(deliveryDate)



{



    var day = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];



    var month = ['Janurary', 'Feburary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];



    return day[deliveryDate.getDay()] + ", " + month[deliveryDate.getMonth()] + " " + deliveryDate.getDate();



}





function compareemails() {

    var email = document.getElementById("email").value;

    var confirmemail = document.getElementById('confirmemail').value;

    if (email != "" && confirmemail != "" && email != confirmemail) {

        return false;

    } else {

        return true;

    }

}







function AddTemplate(file) {

    if (isMobile()) 
    {
        $("#AddTemplateModal").modal('hide');
    }

    document.getElementById("urltemplate").value = file;

    $("#mi-modal").modal('show');

}



$("#modal-btn-yes").on("click", function() {

    front.clear();

    LoadDesignsTemplate(document.getElementById("urltemplate").value);

    $("#mi-modal").modal('hide');

    $("#AddTemplateModal").modal('hide');
});



$("#modal-btn-no").on("click", function() {

    $("#mi-modal").modal('hide');

    if (isMobile()) {

        $("#AddTemplateModal").modal('show');

        $("#AddTemplateModal").css("overflow-x", "hidden");

        $("#AddTemplateModal").css("overflow-y", "auto");

    }

});





//desactivate multiselection in canvas.



front.selection = false; //enable or  disable grouping selection



right.selection = false; //enable or  disable grouping selection



back.selection = false; //enable or  disable grouping selection



left.selection = false; //enable or  disable grouping selection









$('frontCanvas').off('dblclick');

$('rightCanvas').off('dblclick');

$('backCanvas').off('dblclick');

$('leftCanvas').off('dblclick');









//take acction in multiselection



/*front.observe('selection:created', function (e)//disable rotation/scling on selected group



{



if (e.target.type === 'group') 



{



    e.target.hasControls = false;



}



});*/







// show message when the page was close



/*$(function()



{



  $(window).on('beforeunload',function(){



    alert(document.activeElement.href);

    return 'message';



  })



});*/



/*

window.addEventListener("beforeunload", function (e) {

  var confirmationMessage = "\o/";



  e.returnValue = confirmationMessage;     // Gecko, Trident, Chrome 34+

  return confirmationMessage;              // Gecko, WebKit, Chrome <34

});*/

function startpersonalizerow()

{

    var el = $("table.order-list")[0].children[1];

    while (el.firstChild) el.removeChild(el.firstChild);

    if (personalizelist != null && personalizelist.length > 0) 

    { 

       

        var countername = counternumber = countersizename = 0;       

        for (var i = 0; i < personalizelist.length; i++) 

        {

            var optionslist = "";

            optionslist += ("<option selected disabled>SIZE</option>");

            for (var j = 0; j < productsizelist.length; j++) 

            {

                if (productsizelist[j] == personalizelist[i].size_name)

                {

                    optionslist += ("<option selected>" + productsizelist[j] + "</option>");

                }

                else

                {

                    optionslist += ("<option >" + productsizelist[j] + "</option>");    

                }

            }



            var newRow = $('<tr id="rowpersonalize' + i + '">');

            var cols = "";

            if (document.getElementById("textpersonalizecheck").checked || document.getElementById("textpersonalizecheckModal").checked)

            {

                if (personalizelist[i].name != "")

                { 

                    countername ++;

                } 

              cols += '<td class="col-xs-6"><input type="text" class="form-control" name="namepersonalize' + i + '"  id="namepersonalize' + i + '" oninput="SavePersonalizeList(false); drawpersonalize('+ "'" +i + "'" +');" onclick="drawpersonalize('+ "'" +i + "'" +');" value="'+personalizelist[i].name+'"/></td>';  

            }

            else

            {

              cols += '<td class="col-xs-6"></td>';

            }

            if (document.getElementById("numberpersonalizecheck").checked || document.getElementById("numberpersonalizecheckModal").checked)

            {

                if (personalizelist[i].number != "")

                { 

                    counternumber ++;

                }

              cols += '<td class="col-xs-2"><input type="text" class="form-control" name="numberpersonalize' + i + '" id="numberpersonalize' + i + '" oninput="SavePersonalizeList(false); drawpersonalize('+ "'" +i + "'" +');" onclick="drawpersonalize('+ "'" +i + "'" +');" value="'+personalizelist[i].number+'"/></td>';

            }

            else

            {

              cols += '<td class="col-xs-2"></td>';

            }

            cols += '<td class="col-xs-2"><select class="form-control" id="sizepersonalize' + i + '" name="sizepersonalize' + i + '"  onchange="SavePersonalizeList(false);">' + optionslist + '</select></td>';

            cols += '<td class="col-xs-1"><a href="javascript:void(0)" name="remove' + i + '" class="ibtnDel"><span class="glyphicon glyphicon-trash"></span></a></td>';

            newRow.append(cols);

            $("table.order-list").append(newRow);



            

            if (personalizelist[i].size_name != "SIZE")

            {

                countersizename ++;

            }

        }



        $("#personalizetotalsname").html(countername);

        $("#personalizetotalsnumber").html(counternumber);

        $("#personalizetotalssizename").html(countersizename);

        counter = personalizelist.length;

        personalizelisttmp = null;

        personalizelisttmp = personalizelist;

        var sizestext = "";



        for (var i = 0; i < productsizelist.length; i++) 

        {   

            for (var j = 0; j < personalizelist.length; j++)

            {

                if((personalizelist[j].size_name === productsizelist[i]))

                {

                    countsize+=1;

                }

            }



            if (countsize > 0)

            {

                sizestext += "("+countsize+")" + productsizelist[i] + ",";    

                 Order._Product_design_list[position]._sizepersonalizeList.find(function(element,pos) 

                {

                   if (productsizelist[i] == element._size_name) 

                   { 

                        Order._Product_design_list[position]._sizepersonalizeList[pos]._quantity = countsize;

                   }

                });

                countsize = 0;  

            }

        }



       document.getElementById("personalizesizelist").innerHTML = sizestext.substr(0,sizestext.length - 1);

       Order._Product_design_list[position]._personalize = personalizelist;

    }

    else

    {

        var optionslist = "";

        var countername = counternumber = countersizename = 0;

        optionslist += ("<option selected disabled>SIZE</option>");

        for (var j = 0; j < productsizelist.length; j++) 

        {

            optionslist += ("<option >" + productsizelist[j] + "</option>");    

        }

        for (var i = 1; i < counter; i++) 

        {

            var newRow = $('<tr id="rowpersonalize' + i + '">');

            var cols = "";

            if (document.getElementById("textpersonalizecheck").checked || document.getElementById("textpersonalizecheckModal").checked)

            {

              cols += '<td class="col-xs-6"><input type="text" class="form-control" name="namepersonalize' + i + '"  id="namepersonalize' + i + '" oninput="SavePersonalizeList(false); drawpersonalize('+ "'" +i + "'" +');" onclick="drawpersonalize('+ "'" +i + "'" +');"/></td>';  

            }

            else

            {

              cols += '<td class="col-xs-6"></td>';

            }

            if (document.getElementById("numberpersonalizecheck").checked || document.getElementById("numberpersonalizecheckModal").checked)

            {

              cols += '<td class="col-xs-2"><input type="text" class="form-control" name="numberpersonalize' + i + '" id="numberpersonalize' + i + '" oninput="SavePersonalizeList(false); drawpersonalize('+ "'" +i + "'" +');" onclick="drawpersonalize('+ "'" +i + "'" +');"/></td>';

            }

            else

            {

              cols += '<td class="col-xs-2"></td>';

            }

            cols += '<td class="col-xs-2"><select class="form-control" id="sizepersonalize' + i + '" name="sizepersonalize' + i + '"  onchange="SavePersonalizeList(false);">' + optionslist + '</select></td>';

            cols += '<td class="col-xs-1"><a href="javascript:void(0)" id="removepersonalize' + i + '" name="removepersonalize' + i + '" class="ibtnDel"><span class="glyphicon glyphicon-trash"></span></a></td>';

            newRow.append(cols);

            $("table.order-list").append(newRow);

        }



       $("#personalizetotalsname").html(countername);

        $("#personalizetotalsnumber").html(counternumber);

        $("#personalizetotalssizename").html(countersizename);

        counter = 5;

        Order._Product_design_list[position]._personalize = null;

    }



    

}



function addpersonalizerow()

{

    var optionslist = "";

     optionslist += ("<option selected disabled>SIZE</option>");

    for (var i = 0; i < productsizelist.length; i++) {

        optionslist += ("<option >" + productsizelist[i] + "</option>");

    }



    var newRow = $('<tr id="rowpersonalize' + counter + '">');

    var cols = "";

    if (document.getElementById("textpersonalizecheck").checked || document.getElementById("textpersonalizecheckModal").checked)

    {

      cols += '<td class="col-xs-6"><input type="text" class="form-control" name="namepersonalize' + counter + '"  id="namepersonalize' + counter + '" oninput="SavePersonalizeList(false); drawpersonalize('+ "'" +counter + "'" +');" onclick="drawpersonalize('+ "'" +counter + "'" +');"/></td>';  

    }

    else

    {

      cols += '<td class="col-xs-6"></td>';  

    }

    

    if (document.getElementById("numberpersonalizecheck").checked || document.getElementById("numberpersonalizecheckModal").checked)

    {

      cols += '<td class="col-xs-2"><input type="text" class="form-control" name="numberpersonalize' + counter + '" id="numberpersonalize' + counter + '" oninput="SavePersonalizeList(false); drawpersonalize('+ "'" +counter + "'" +');" onclick="drawpersonalize('+ "'" +counter + "'" +');"/></td>';

    }

    else

    {

     cols += '<td class="col-xs-2"></td>'; 

    }

    cols += '<td class="col-xs-2"><select class="form-control" id="sizesizepersonalize' + counter + '" name="sizesizepersonalize' + counter + '" onchange="SavePersonalizeList(false);">' + optionslist + '</select></td>';

    cols += '<td class="col-xs-1"><a href="javascript:void(0)" id="removepersonalize' + counter + '" name="removepersonalize' + counter + '" class="ibtnDel"><span class="glyphicon glyphicon-trash"></span></a></td>';

    newRow.append(cols);

    $("table.order-list").append(newRow);

    counter++;

}



$("table.order-list").on("click", ".ibtnDel", function(event) 

{   

    if (Order._Product_design_list[position]._personalize != null)

    {   

        Order._Product_design_list[position]._personalize.splice($(this).closest("tr")[0].id.split("rowpersonalize")[1],1);

        startpersonalizerow();

    }

    $(this).closest("tr").remove();

    //counter -= 1

});





function SavePersonalizeList(save) 

{

    var list =  $("table.order-list").find('input,select');



    var countername = counternumber = countersizename = 0;

    var personalizelisttmp = [];

    var step = 3;



    if ((document.getElementById("textpersonalizecheck").checked || document.getElementById("textpersonalizecheckModal").checked) && (document.getElementById("numberpersonalizecheck").checked || document.getElementById("numberpersonalizecheckModal").checked))

    {

     step = 3;

    }

    else if ((document.getElementById("textpersonalizecheck").checked || document.getElementById("textpersonalizecheckModal").checked) && (!document.getElementById("numberpersonalizecheck").checked || !document.getElementById("numberpersonalizecheckModal").checked))

    {

     step = 2;

    }

    else if ((!document.getElementById("textpersonalizecheck").checked || !document.getElementById("textpersonalizecheckModal").checked) && (document.getElementById("numberpersonalizecheck").checked || document.getElementById("numberpersonalizecheckModal").checked))

    {

     step = 2;

    }

   

    for (var i = 0; i < list.length-1; i+=step)

    {

        if (list[i].type != "button")

        {

            var personalize = {name:"", number:"", size_name:""};

            if ((document.getElementById("textpersonalizecheck").checked || document.getElementById("textpersonalizecheckModal").checked) && (document.getElementById("numberpersonalizecheck").checked || document.getElementById("numberpersonalizecheckModal").checked))

            {

                if (list[i].value != "")

                { 

                   personalize.name = list[i].value;

                    countername ++;

                } 

                

                          

                if (list[i+1].value != "")

                { 

                   personalize.number = list[i+1].value;

                    counternumber ++;

                }

                



                if (list[i+2].value != "SIZE")

                {

                    personalize.size_name = list[i+2].value;

                    countersizename ++;

                }

            }

            else if ((document.getElementById("textpersonalizecheck").checked || document.getElementById("textpersonalizecheckModal").checked) && (!document.getElementById("numberpersonalizecheck").checked || !document.getElementById("numberpersonalizecheckModal").checked))

            {

                if (list[i].value != "")

                { 

                   personalize.name = list[i].value;

                    countername ++;

                } 

               

                if (list[i+1].value != "SIZE")

                {

                    personalize.size_name = list[i+1].value;

                    countersizename ++;

                }

            }

            else if ((!document.getElementById("textpersonalizecheck").checked || !document.getElementById("textpersonalizecheckModal").checked) && (document.getElementById("numberpersonalizecheck").checked || document.getElementById("numberpersonalizecheckModal").checked))

            {

                      

                if (list[i].value != "")

                { 

                   personalize.number = list[i].value;

                    counternumber ++;

                }



                if (list[i+1].value != "SIZE")

                {

                    personalize.size_name = list[i+1].value;

                    countersizename ++;

                }

            }

          

            if ((document.getElementById("textpersonalizecheck").checked || document.getElementById("textpersonalizecheckModal").checked) && (document.getElementById("numberpersonalizecheck").checked || document.getElementById("numberpersonalizecheckModal").checked))

            {

              if (personalize.name != "" && personalize.number != "" && personalize.size_name != "")

              { 

                personalizelisttmp.push(personalize);

              }

              $("#personalizetotalsname").html(countername);

              $("#personalizetotalsnumber").html(counternumber);

              $("#personalizetotalssizename").html(countersizename);

            }

            else if ((document.getElementById("textpersonalizecheck").checked || document.getElementById("textpersonalizecheckModal").checked) && (!document.getElementById("numberpersonalizecheck").checked || !document.getElementById("numberpersonalizecheckModal").checked))

            {

              if (personalize.name != "" && personalize.size_name != "")

              { 

                personalizelisttmp.push(personalize);

               

              }

              $("#personalizetotalsname").html(countername);

              $("#personalizetotalsnumber").html(0);

              $("#personalizetotalssizename").html(countersizename);

            }

            else if ((!document.getElementById("textpersonalizecheck").checked || !document.getElementById("textpersonalizecheckModal").checked) && (document.getElementById("numberpersonalizecheck").checked || document.getElementById("numberpersonalizecheckModal").checked))

            { 

              if (personalize.number != "" && personalize.size_name != "")

              {

                personalizelisttmp.push(personalize);

               

              } 

              $("#personalizetotalsname").html(0);

              $("#personalizetotalsnumber").html(counternumber);

              $("#personalizetotalssizename").html(countersizename);

            }

        }

        

    }

    if (personalizelisttmp.length > 0 && save)

    {  

        personalizelist = personalizelisttmp;

    }



    var sizestext = "";



    for (var i = 0; i < productsizelist.length; i++) 

    {   

        for (var j = 0; j < personalizelisttmp.length; j++)

        {

            if((personalizelisttmp[j].size_name === productsizelist[i]))

            {

                countsize+=1;

            }

        }



        if (countsize > 0)

        {

            sizestext += "("+countsize+") " + productsizelist[i] + ", ";  



            if (save)

            {

                Order._Product_design_list[position]._sizepersonalizeList.find(function(element,pos) 

                {

                   if (productsizelist[i] == element._size_name) 

                   { 

                        Order._Product_design_list[position]._sizepersonalizeList[pos]._quantity = countsize;

                   }

                });

            }  

            

            countsize = 0;  

        }

    }



   document.getElementById("personalizesizelist").innerHTML = sizestext.substr(0,sizestext.length - 2);



    if (save)

    {

        Order._Product_design_list[position]._personalize = personalizelist;

    }

}



$("[data-toggle=popover]").popover({
    html: true, 
    content: function() {
          return $('#popover-content').html();
        }
});


function fillmydesigns()
{



    $.ajax({



        cache: false,

        type: "POST",

        url: "https://www.vividcustoms.com/fillmydesigns.php",
        
        success: function(data)
        {
           document.getElementById("mydesings").innerHTML = data;

        },

        error: function(error)

        {
            console.log("error in method fillmydesigns():");
            console.log(error);
        }

    });



}



