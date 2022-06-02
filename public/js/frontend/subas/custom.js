
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var  pricequote_productid = null; 
var  pricequote_amnt = 0; 
var  pricequote_sidescolors = [];
var  pricequote_sizes = [];

window.onload = function() 
{     
    var today = new Date();
    $("#freeshippingindex").html(dateformat(getDeliveryDateObj(today,9)));
    var today = new Date();
    $("#rushdelivery").html(dateformat(getDeliveryDateObj(today,5)));

   
}

 if (window.location.href.includes('contact-us')) 
 {
    refreshcaptcha();
 }

 function refreshcaptcha()
 {
    $.ajax({
        type:'GET',
        dataType: 'json',
        url: '/refreshcaptcha',
        success:function(data)
        {
            document.getElementById("image-captcha").src = '';
            document.getElementById("image-captcha").src = '/img/captcha/' + data.image;
        }
    });  
 }

 function initpricequote()
 {
    
    $('#shirt-quantity-tab').removeClass('active');
    $('#shirt-quantity').removeClass('active');
    $('#shirt-quantity').attr('aria-expanded',false);

    $('#number-color-tab').removeClass('active');
    $('#number-color').removeClass('active');
    $('#number-color').attr('aria-expanded',false);

    $('#product-color-tab').removeClass('active');
    $('#product-color').removeClass('active');
    $('#product-color').attr('aria-expanded',false);

    $('#get-quote-tab').removeClass('active');
    $('#get-quote').removeClass('active');
    $('#get-quote').attr('aria-expanded',false);

    $('#select-product-tab').addClass('active');
    $('#select-product').addClass('active');
    $('#select-product').attr('aria-expanded',true);



    if(document.getElementById("price-quote-product") != undefined)
    document.getElementById("price-quote-product").src = '';
    if(document.getElementById("price-quote-product-preview") != undefined)
    document.getElementById("price-quote-product-preview").src = '';
    
 }

 function setpricequoteproduct(idproduct)
 {
    $.ajax({
        type:'GET',
        dataType: 'json',
        url: '/price-quote-selected-product/'+idproduct,
        success:function(data)
        {
            console.log(data);
            $('#select-product-tab').removeClass('active');
            $('#select-product').removeClass('active');
            $('#select-product').attr('aria-expanded',false);

            $('#shirt-quantity-tab').removeClass('active');
            $('#shirt-quantity').removeClass('active');
            $('#shirt-quantity').attr('aria-expanded',false);

            $('#number-color-tab').removeClass('active');
            $('#number-color').removeClass('active');
            $('#number-color').attr('aria-expanded',false);

            $('#get-quote-tab').removeClass('active');
            $('#get-quote').removeClass('active');
            $('#get-quote').attr('aria-expanded',false);

            $('#product-color-tab').addClass('active');
            $('#product-color').addClass('active');
            $('#product-color').attr('aria-expanded',true);
            document.getElementById("price-quote-selected-product").innerHTML =  "";
            document.getElementById("price-quote-selected-product").innerHTML =  data.info;
            document.getElementById("price-quote-shirt-quantity").innerHTML =  "";
            document.getElementById("price-quote-shirt-quantity").innerHTML =  data.sizes;
            document.getElementById("number-color").innerHTML =  "";
            document.getElementById("number-color").innerHTML =  data.sides;
            document.getElementById("get-quote").innerHTML =  "";
            document.getElementById("get-quote").innerHTML =  data.estimation;
            var day1 = new Date(dateFormat(Date.now(),"ddd mmm dd yyyy HH:MM:ss"));
            $("#freeshippingquote").html(dateformat(getDeliveryDateObj(day1,9)));
        }
    });  
 }

 function setpricequoteproductcolor()
 {  
    $('#select-product-tab').removeClass('active');
    $('#select-product').removeClass('active');
    $('#select-product').attr('aria-expanded',false);

    $('#product-color-tab').removeClass('active');
    $('#product-color').removeClass('active');
    $('#product-color').attr('aria-expanded',false);    

    $('#get-quote-tab').removeClass('active');
    $('#get-quote').removeClass('active');
    $('#get-quote').attr('aria-expanded',false);
    
    $('#number-color-tab').removeClass('active');
    $('#number-color').removeClass('active');
    $('#number-color').attr('aria-expanded',false);

    $('#shirt-quantity-tab').addClass('active');
    $('#shirt-quantity').addClass('active');
    $('#shirt-quantity').attr('aria-expanded',true);

    
 }

 function setpricequotenumbercolor()
 {  
    $('#select-product-tab').removeClass('active');
    $('#select-product').removeClass('active');
    $('#select-product').attr('aria-expanded',false);

    $('#product-color-tab').removeClass('active');
    $('#product-color').removeClass('active');
    $('#product-color').attr('aria-expanded',false);    

    $('#get-quote-tab').removeClass('active');
    $('#get-quote').removeClass('active');
    $('#get-quote').attr('aria-expanded',false);

    $('#shirt-quantity-tab').removeClass('active');
    $('#shirt-quantity').removeClass('active');
    $('#shirt-quantity').attr('aria-expanded',false);

    $('#number-color-tab').addClass('active');
    $('#number-color').addClass('active');
    $('#number-color').attr('aria-expanded',true);
 }

 function setpricequoteestimation()
 {  
    $.ajax({
        type:'POST',
        dataType: 'json',
        data: {
           pricequote_productid: pricequote_productid,
           pricequote_amnt: pricequote_amnt,
           pricequote_sidescolors: pricequote_sidescolors,
           pricequote_sizes: pricequote_sizes,
        },
        url: window.location.origin + '/api/calcpricequote',
        success:function(data)
        {
            var total = data;
            document.getElementById('itemPrice').innerHTML =  pricequote_amnt == 0 ? 0 : data/pricequote_amnt;
            document.getElementById('itemNumOfShirt').innerHTML = pricequote_amnt;
            document.getElementById('itemTotal').innerHTML = data;

            $('#select-product-tab').removeClass('active');
            $('#select-product').removeClass('active');
            $('#select-product').attr('aria-expanded',false);

            $('#product-color-tab').removeClass('active');
            $('#product-color').removeClass('active');
            $('#product-color').attr('aria-expanded',false);

            $('#number-color-tab').removeClass('active');
            $('#number-color').removeClass('active');
            $('#number-color').attr('aria-expanded',false);

            $('#shirt-quantity-tab').removeClass('active');
            $('#shirt-quantity').removeClass('active');
            $('#shirt-quantity').attr('aria-expanded',false);

            $('#get-quote-tab').addClass('active');
            $('#get-quote').addClass('active');
            $('#get-quote').attr('aria-expanded',true); 
        }
    });  
 }
 

 function startnewquote()
 {  
    $('#select-product-tab').addClass('active');
    $('#select-product').addClass('active');
    $('#select-product').attr('aria-expanded',true);

    $('#product-color-tab').removeClass('active');
    $('#product-color').removeClass('active');
    $('#product-color').attr('aria-expanded',false);

    $('#number-color-tab').removeClass('active');
    $('#number-color').removeClass('active');
    $('#number-color').attr('aria-expanded',false);

    $('#shirt-quantity-tab').removeClass('active');
    $('#shirt-quantity').removeClass('active');
    $('#shirt-quantity').attr('aria-expanded',false);

    $('#get-quote-tab').removeClass('active');
    $('#get-quote').removeClass('active');
    $('#get-quote').attr('aria-expanded',false);

    document.getElementById("price-quote-selected-product").innerHTML =  "";
    document.getElementById("price-quote-shirt-quantity").innerHTML =  "";
    document.getElementById("number-color").innerHTML =  "";
    document.getElementById("get-quote").innerHTML =  "";       
}

function display_child_product_image(url_imag,url_designstudio )
{
    document.getElementById('zoom_03').src = url_imag;
    document.getElementById('go_designstudio').href = url_designstudio;
}

if(document.getElementById('birthday') != undefined )
{   
    var cleave = new Cleave('.input-date', {
        date: true,
        delimiter: '/',
        datePattern: ['m','d','Y']
    });
}

if(document.getElementById('phone') != undefined )
{   
    var cleavePhone = new Cleave('.input-phone', {
        phone: true,
        phoneRegionCode: 'US',
        delimiter: '-'
    });
}

if(document.getElementById('input-credit-card') != undefined )
{ 
    var cleaveCreditCard = new Cleave('.input-credit-card', {
        creditCard: true
    });
 
}


if(document.getElementById('input-phone') != undefined )
{ 
    var cleavePhone = new Cleave('.input-phone', {
        phone: true,
        phoneRegionCode: 'US',
        delimiter: '-'
    });
}  

if(document.getElementById('input-month') != undefined )
{ 
    var cleave = new Cleave('.input-month', {
        date: true,
        datePattern: ['m']
    });
}   

if(document.getElementById('input-year') != undefined )
{ 
    var cleave = new Cleave('.input-year', {
        date: true,
        datePattern: ['y']
    });
}
const navExpand = [].slice.call(document.querySelectorAll('.nav-expand'))
const backLink = `<li class="nav-item">
	<a class="nav-link nav-back-link" href="javascript:;">
		Back
	</a>
</li>`

navExpand.forEach(item => {
	item.querySelector('.nav-expand-content').insertAdjacentHTML('afterbegin', backLink)
	item.querySelector('.nav-link').addEventListener('click', () => item.classList.add('active'))
	item.querySelector('.nav-back-link').addEventListener('click', () => item.classList.remove('active'))
})


// ---------------------------------------
// not-so-important stuff starts here

const ham = document.getElementById('ham');
if(ham != undefined)
{
    ham.addEventListener('click', function() {
        document.body.classList.toggle('nav-is-toggled')
    });
}


var shoppingcart = { subtotal:0, tax:0, shipping_cost:0, discount:0, total:0, status:"created", date:null, shipby:null, promocode:'', items:[], user:null, shippingType:'Standard Shipping', promocode:null};

$.ajax({
    type:'GET',
    dataType: 'json', 
    //data: {parameter: parameter},
    url: window.location.origin + '/getsessioninfo',
    success:function(data)
    {
        if(data.shoppingcart != null)
        {
          shoppingcart = data.shoppingcart;
          var day1 = new Date(dateFormat(Date.now(),"ddd mmm dd yyyy HH:MM:ss"));
          $("#freeshippingcart").html(dateformat(getDeliveryDateObj(day1,9)));
          var day2 = new Date(dateFormat(Date.now(),"ddd mmm dd yyyy HH:MM:ss"));
          $("#rushdelivery").html(dateformat(getDeliveryDateObj(day2,5)));
          var day3 = new Date(dateFormat(Date.now(),"ddd mmm dd yyyy HH:MM:ss"));
          shoppingcart.shipby = getDeliveryDateObj(day3,4);
          var dayO = new Date();
          //shoppingcart.date = getDeliveryDateObj(dayO,0);     
          console.log(shoppingcart);     
        }
        
    }
});

function startqetaquote()
{
    window.location.href= window.location.origin+'/price-quote';
}

function updateAfterAdd(element)
{
    var designname = element.split('_')[0];
    var size = element.split('_')[2];
    for (var i = 0; i < shoppingcart.items.length; i++)
    {
        if(shoppingcart.items[i].name.split('_')[0] == designname)
        {
            for (var j = 0; j < shoppingcart.items[i].sizes.length; j++)
            {
                if(shoppingcart.items[i].sizes[j].name == size)
                {
                    shoppingcart.items[i].num_shirts= Number(shoppingcart.items[i].num_shirts) - Number(shoppingcart.items[i].sizes[j].quantity);
                    shoppingcart.items[i].sizes[j].quantity = Number(document.getElementById('qtybutton_' + element).value);
                    shoppingcart.items[i].num_shirts = Number(shoppingcart.items[i].num_shirts) +  Number(shoppingcart.items[i].sizes[j].quantity);                    
                    break;
                }
            }       
        }
    }
    calc_price();
}

function updateAfterDelete(element)
{
    var designname = element.split('_')[0];
    var size = element.split('_')[2];
    for (var i = 0; i < shoppingcart.items.length; i++)
    {
        if(shoppingcart.items[i].name.split('_')[0] == designname)
        {
            for (var j = 0; j < shoppingcart.items[i].sizes.length; j++)
            {
                if(shoppingcart.items[i].sizes[j].name == size)
                {
                    shoppingcart.items[i].num_shirts= Number(shoppingcart.items[i].num_shirts) - Number(shoppingcart.items[i].sizes[j].quantity);
                    shoppingcart.items[i].sizes[j].quantity = Number(document.getElementById('qtybutton_' + element).value);
                    shoppingcart.items[i].num_shirts = Number(shoppingcart.items[i].num_shirts) +  Number(shoppingcart.items[i].sizes[j].quantity);
                    break;
                }
            }       
        }
    }

    calc_price();
}

function calc_price() 
{
    var url = window.location.origin;
    if(shoppingcart.items[0].type == 'Designstudio')
    {
        url+= '/calcprice';
    }
    else
    {
        url+= '/calcpriceembroidery';
    }
    $.ajax({
        type:'POST',
        dataType: 'json', 
        data: {
                /*amnt: currentdesign.num_shirts,
                sidescolors: JSON.stringify(sidescolors.sort(compareValues('quantity'))),
                product: product.id,
                list: JSON.stringify(currentdesign.product.parent.sizes),*/
                shoppingcart:  JSON.parse(JSON.stringify(shoppingcart)),
            },
       // url: window.location.origin + '/calcprice',
       url: url,
        success:function(data)
        {  
            console.log(data);
            window.location = window.location;
        }
    });
}

function addElements(info)
{
    var data = info.split("_");
    var table = data[0];
    var element = data[1];
    var x = document.getElementById("sizesenables_" + table);
    var option = document.createElement("option");  
        option.value = getValuebySize(element.toUpperCase());
        option.text = element.toUpperCase();
        x.add(option);
    for (var i = 0; i < shoppingcart.items.length; i++)
    {
        if(shoppingcart.items[i].name == table)
        {
            for (var j = 0; j < shoppingcart.items[i].sizes.length; j++)
            {
                if(shoppingcart.items[i].sizes[j].name == element)
                {
                    shoppingcart.items[i].num_shirts -= Number(shoppingcart.items[i].sizes[j].quantity);
                    shoppingcart.items[i].sizes[j].quantity = 0;
                    //console.log(shoppingcart);
                    break;
                }
            }       
        }
    }

    calc_price();

}

function addSize(name) 
{
    var size = document.getElementById("sizesenables_" + name).value;
    if (size!= "")
    {
        var x = document.getElementById("sizesenables_" + name);
        for (var i = x.length - 1; i >= 0; i--) 
        {
            if(x[i].value==size)
            {
                x.remove(i);
            }         
        }

        for (var i = 0; i < shoppingcart.items.length; i++)
        {
            if(shoppingcart.items[i].name == name)
            {
                for (var j = 0; j < shoppingcart.items[i].sizes.length; j++)
                {
                    if(shoppingcart.items[i].sizes[j].name == size)
                    {
                        shoppingcart.items[i].num_shirts = Number(shoppingcart.items[i].num_shirts) + 1;
                        shoppingcart.items[i].sizes[j].quantity = 1;
                        //console.log(shoppingcart);
                        break;
                    }
                }       
            }
        }

        calc_price();
      }  
}

function ValidatePhone()
{
    return true;
}

function ValidateEmail()
{
    return true;
}

function calcshipping_cost()
{
    return 0;
}

    function getValuebySize(value)
    {
        console.log(value);
    }

    /*currentdesign.num_shirts = 0;
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
    //window.location= window.location;
    console.log(shoppingcart);*/

    function setState(element)
    {
        shoppingcart.user.ship_state = element.value;
        if(element.value == 'TX')
        {
            calc_tax();
        }
        else
        {
            shoppingcart.tax = 0;
        }
        displayTotals();
    }

    function calc_tax()
    {
        if (shoppingcart.discount > 0)
        {
            shoppingcart.tax = Number((((shoppingcart.subtotal-shoppingcart.discount)*8.25)/100).toFixed(2));  
        }
        else
        {
            shoppingcart.tax = Number(((((shoppingcart.subtotal))*8.25)/100).toFixed(2));   
        }
        //document.getElementById('ordertax').innerHTML = "$"+shoppingcart.tax;
        //document.getElementById('ordertax2').innerHTML = "$"+shoppingcart.tax;
    }


    function calc_shipping_cost(value)
    {
        //var value = document.getElementById(element.id).value;
        //creating variable to hold the value before any shipping cost is applied.   
        var temptotal = shoppingcart.total;// Number(document.getElementById('finaltotal').innerHTML);
        var shipping_cost = 0.0;
        //updating the total
        switch(value)
        {
            case "Expedited 1 Week":
                shipping_cost = (temptotal/100)*15; 
                temptotal += shipping_cost;
                //document.getElementById('shipping_cost').innerHTML = "$" + shipping_cost.toFixed(2);
                document.getElementById('shipping_cost_value').innerHTML = "$" + shipping_cost.toFixed(2);
                document.getElementById('shipping_cost_value2').innerHTML = "$" + shipping_cost.toFixed(2);
                var day1week = new Date(dateFormat(Date.now(),"ddd mmm dd yyyy HH:MM:ss"));
                shoppingcart.shipby = getDeliveryDateObj(day1week,1);
                break;
            case "Standard Shipping":
                //document.getElementById('shipping_cost').innerHTML = "$0.00";
                document.getElementById('shipping_cost_value').innerHTML = "$0.00";
                document.getElementById('shipping_cost_value2').innerHTML = "$0.00";
                var daystandard = new Date(dateFormat(Date.now(),"ddd mmm dd yyyy HH:MM:ss"));
                shoppingcart.shipby = getDeliveryDateObj(daystandard,4);
                shipping_cost = 0;
                break;
            case "Pick Up":
                //document.getElementById('shipping_cost').innerHTML = "$0.00";
                document.getElementById('shipping_cost_value').innerHTML = "$0.00";
                document.getElementById('shipping_cost_value2').innerHTML = "$0.00";
                var daypickup = new Date(dateFormat(Date.now(),"ddd mmm dd yyyy HH:MM:ss"));
                shoppingcart.shipby = getDeliveryDateObj(daypickup,4);
                shipping_cost = 0;
                break;
        }

        document.getElementById('ship_type_title').innerHTML = value; 
        document.getElementById('ship_type_title2').innerHTML = value; 
        shoppingcart.shippingType = value;
        shoppingcart.shipping_cost = (Number(shipping_cost*1).toFixed(2)*1);

        $.ajax({
            type:'POST',
            dataType: 'json', 
            data: {
                    shoppingcart:  JSON.parse(JSON.stringify(shoppingcart)),
                },
            url: window.location.origin + '/updatesessioninfo',
            success:function(data)
            {  
                displayTotals();
                showalert('shippingmethod', 'Shipping Method changed success!', 'success', 'Change Shipping Method');
            }
        });
        
    }

function redirectpage(url)
{
  window.location.href= window.location.origin+'/designstudio/e/'+ url;
}

function validatepromocode()
{
    var promocodeentered = document.getElementById("promocode").value;
    var promocodealert = document.getElementById("promocodealert");
    var validpromo = false;

    if (promocodeentered.length > 0)
    {
        $.ajax({
            dataType: 'json', 
            url: window.location.origin + '/getpromocode',
            data: { 
                    promocode:promocodeentered,
                },
            success: function(data)
            {
               
                if (data.promocode == null)
                {
                    promocodealert.style.display = "none";
                    showalert('promocodeexist',"The PROMO CODE entered is not valid!.", 'danger','PROMO CODE ERROR');  
                }
                else
                {
                    var promocode = data.promocode; 
                    var day = new Date();
                    var date2 = new Date(promocode.expirationdate);
                    var diffMS = new Date(date2.getTime() - day.getTime());
                    var diffS = diffMS / 1000;    
                    if (diffS < 0)
                    {
                        promocodealert.style.display = "none";
                        showalert('promocodeexpired',"The PROMO CODE entered was expired!.", 'danger','PROMO CODE ERROR');  
                    }
                    else
                    {
                        if (shoppingcart.subtotal >= Number(promocode.minimumspend) && shoppingcart.subtotal <= Number(promocode.maximumspend) )
                        {
                            if (promocode.limitpercoupon > 0)
                            {
                               /* $.ajax({

                                type: "POST",

                                url: "generalInfo.php",

                                data: { 
                                            table:"promocodeused",

                                            clave:shoppingcart.user.email,
                                        },

                                success: function(data)
                                {*/
                                    //if (data == 0)
                                    if(shoppingcart.promocode == null)
                                    {
                                        shoppingcart.promocode = promocode;

                                        if (promocode.type == 'Cart % Discount')
                                        {
                                            shoppingcart.discount = (Number(shoppingcart.subtotal)*promocode.amount/100);
                                        }
                                        else if(promocode.type == "Cart Discount")
                                        {
                                            shoppingcart.discount = promocode.amount;
                                        }
                                        else if (promocode.type = "Product Discount")
                                        {
                                            showalert('promocodeerrorinternal',"No PROMO CODE Product Discount to apply!.", 'danger','PROMO CODE ERROR'); 
                                        }
                                        else if (promocode.type = "Product % Discount")
                                        {
                                            showalert('promocodeerrorinternal',"No PROMO CODE Product % Discount to apply!.", 'danger','PROMO CODE ERROR'); 
                                        }
                                        else
                                        {
                                            showalert('promocodeerrorinternal',"No PROMO CODE to apply!.", 'danger','PROMO CODE ERROR'); 
                                        }
                                        document.getElementById("orderdiscount").innerHTML= "$"+shoppingcart.discount;
                                        promocodealert.style.display = "block";
                                        document.getElementById("promocode").value = "";
                                        $.ajax({
                                            type:'POST',
                                            dataType: 'json', 
                                            data: {
                                                    shoppingcart:  JSON.parse(JSON.stringify(shoppingcart)),
                                                },
                                            url: window.location.origin + '/updatesessioninfo',
                                            success:function(data)
                                            {  
                                                displayTotals();
                                                showalert('promocodeapply',"The PROMO CODE entered was applied success!.", 'success','PROMO CODE ERROR');  
                                            }
                                        });
                                    }
                                    else
                                    {
                                        promocodealert.style.display = "none";
                                        showalert('promocodeused',"The PROMO CODE entered was used for you!.", 'danger','PROMO CODE ERROR');  
                                    }

                                /*},

                                error: function (error)

                                {

                                    console.log("error in method loadRole():");
                                    console.log(error);

                                }

                                });   */
                            
                            }
                            else
                            {
                                promocodealert.style.display = "none";
                                showalert('promocodeexpired',"The PROMO CODE LIMIT FINISH!.", 'danger','PROMO CODE ERROR');  
                            }
                            
                        }
                        else
                        {
                            promocodealert.style.display = "none";
                            showalert('promocodespend',"The spend value for this code is between "+promocode.minimumspend+" and "+promocode.maximumspend+" dolars!.", 'danger','PROMO CODE ERROR');  
                        }
                    }
                }
                
                

            },
            error: function (error)
            {
                console.log("error in method loadRole():");
                console.log(error);
            }
        });         
    }
    else
    {
        showalert('promocodeempty',"You have to enter a PROMO CODE!.", 'danger','PROMO CODE ERROR');  
    }
}

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
        modalheader.className = 'modal-header alert-' + type;
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


function displayTotals()
{ 
    if (shoppingcart.discount > 0)
    {
        //shoppingcart.tax = Number(((((Number(shoppingcart.subtotal)-Number(shoppingcart.discount))+Number(shoppingcart.shipping_cost))* 8.25)/100).toFixed(2));  
        //shoppingcart.tax = 0;
        shoppingcart.total = (Number(shoppingcart.subtotal)-Number(shoppingcart.discount)) + Number(shoppingcart.tax) + Number(shoppingcart.shipping_cost);
        document.getElementById('orderdiscount').innerHTML = "$-" + shoppingcart.discount;
        document.getElementById('orderdiscount2').innerHTML = "$-" + shoppingcart.discount;
        document.getElementById('orderdiscount').style.color = "red";
      //document.getElementById('orderdiscount2').innerHTML = "$-"+shoppingcart.discount;
    }
    else
    {
      //shoppingcart.tax = Number((((Number(shoppingcart.subtotal) + Number(shoppingcart.shipping_cost))* 8.25)/100).toFixed(2));   
      //shoppingcart.tax = 0;
      shoppingcart.total = Number(shoppingcart.subtotal)+ Number(shoppingcart.tax) + Number(shoppingcart.shipping_cost);
      document.getElementById('orderdiscount').innerHTML = "$0.00";
      document.getElementById('orderdiscount2').innerHTML = "0.00";
      document.getElementById('orderdiscount').style.color = "none";
      //document.getElementById('orderdiscount2').innerHTML = "";
    }
    
   document.getElementById('ordersubtotal').innerHTML = "$"+shoppingcart.subtotal;
   document.getElementById('ordersubtotal2').innerHTML = "$"+shoppingcart.subtotal;
    
    document.getElementById('ordertax').innerHTML = "$"+shoppingcart.tax;
    document.getElementById('ordertax2').innerHTML = "$"+shoppingcart.tax;
    document.getElementById('ordertotal').innerHTML = "$"+(Number(shoppingcart.total)).toFixed(2);
    document.getElementById('ordertotal2').innerHTML = "$"+(Number(shoppingcart.total)).toFixed(2);
}

function ActiveCheckoutConfirm()
{
  if (enable_order_complete())
  {
     $("#lishoppingcart").removeClass('active');
      $("#ashoppingcart").attr("aria-expanded",false);

     
      $("#licheckout").removeClass('active');
      $("#acheckout").attr("aria-expanded",false);

      $("#liordercomplete").removeClass('active');
      $("#liordercomplete").attr("aria-expanded",false);

      $("#licheckoutconfirm").addClass("active");
      $("#acheckoutconfirm").attr("aria-expanded",true);
      $("#acheckoutconfirm").addClass("active");
      $("#checkoutconfirm").addClass("active");

       $("#shopping-cart").removeClass('active');

     
        $("#checkout").removeClass('active');
        $("#order-complete").removeClass('active');

        document.getElementById("acheckoutconfirm").style.display ="block";
        $(".loading").fadeOut("slow");
        $(".loading-text").fadeOut("slow");
        $.ajax({
            type:'POST',
            dataType: 'json', 
            data: {
                    shoppingcart:  JSON.parse(JSON.stringify(shoppingcart)),
                },
            url: window.location.origin + '/completeorder',
            success:function(data)
            {  
                document.getElementById("checkoutconfirm").innerHTML = data.shoppingcart;
                showalert('informationentered', 'Information entered success!', 'success', 'Check Information Entered');
            }
        });
        
    
        document.getElementById('ship_type_title').innerHTML = shoppingcart.shippingType;
        document.getElementById('ship_type_title2').innerHTML = shoppingcart.shippingType;
    }

}


function enable_order_complete()
{
    var result= false;
    var firstname = document.getElementById('firstname').value;
    var lastname = document.getElementById('lastname').value;
    var company = document.getElementById('company').value;
    var cardcompany = document.getElementById('cardcompany').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;    
    var listshipping = document.getElementsByClassName('ship_type_radio');
    
    if (shoppingcart.shippingType != "Pick Up")
    {
      var ship_street = document.getElementById('ship_street').value;
      var ship_city = document.getElementById('ship_city').value;
      var ship_state = document.getElementById('ship_state').value;
      var ship_zip = document.getElementById('ship_zip').value;
    }
    
    var order_complete_label = document.getElementById('liordercomplete');
    var complete_order_btn = document.getElementById('complete_order_btn');
    var cardfirstname = document.getElementById('cardfirstname').value;
    var cardlastname = document.getElementById('cardlastname').value;
    var cardnumber = document.getElementById('cardnumber').value;
    var cardtype = document.getElementById('cardtype').value;
    var expirymonth = document.getElementById('expirymonth').value;
    var expiryyear = document.getElementById('expiryyear').value;
    var securitycode = document.getElementById('securitycode').value;
    var billing_street = document.getElementById('billing_street').value;
    var billing_city = document.getElementById('billing_city').value;
    var billing_state = document.getElementById('billing_state').value;
    var billing_zip = document.getElementById('billing_zip').value;
    
    if (shoppingcart.shippingType != "Pick Up")
    {
       if(cardfirstname != "" && cardlastname != ""  && cardnumber != "" && expirymonth != "" && expiryyear != "" && securitycode != "" && billing_street != "" && billing_city != "" && billing_state != "" && billing_zip != "" && firstname != "" && lastname != "" && email != "" && phone != "" && ship_street != "" && ship_city != "" && ship_zip != "" )
        {

          if (validatedate() && validateCCNum(document.getElementById('cardnumber')) && validatesecuritycode() && ValidateEmail() && ValidatePhone()) 
          {
            shoppingcart.user.firstname = firstname;
            shoppingcart.user.lastname = lastname;
            shoppingcart.user.cardfirstname = cardfirstname;
            shoppingcart.user.cardlastname = cardlastname;
            shoppingcart.user.company = company;
            shoppingcart.user.cardcompany = cardcompany;
            shoppingcart.user.email = email;
            shoppingcart.user.phone = phone;
            shoppingcart.user.cardtype = cardtype;
            //shoppingcart.shippingType = ship_type;
            shoppingcart.user.shipping_street = ship_street;
            shoppingcart.user.shipping_city = ship_city;
            shoppingcart.user.shipping_state = ship_state;
            shoppingcart.user.shipping_zip = ship_zip;
            shoppingcart.user.billing_street = billing_street;
            shoppingcart.user.billing_city = billing_city;
            shoppingcart.user.billing_state = billing_state;
            shoppingcart.user.billing_zip = billing_zip;
            shoppingcart.user.cardtype = document.getElementById("cardtype").value;
            shoppingcart.user.cardnumber = document.getElementById("cardnumber").value.substr(-4);
            result = true;
          }
          else
          {
            var messageformaterror = "The following fields format is incorrect. ";
            if (!validatedate())
            {
               messageformaterror+= "'Expiry Date' ";
            }

            if (!validateCCNum(document.getElementById('cardnumber')))
            {
              messageformaterror+= "'Card Number' ";
            }

            if (!validatesecuritycode())
            {
              messageformaterror+= "'Security Code' ";
            }

            if(!ValidateEmail())
            {
              messageformaterror+= "'Email' "; 
            }

            if(!ValidatePhone())
            {
              messageformaterror+= "'Phone' "; 
            }

             showalert('fieldsregisterformat',messageformaterror, 'danger','Checkout Format Error');
          }
            
        }  
        else
        {
            var messageemptyerror = "Please fill in the following fields to continue: ";
            if (firstname == "")
            {
               messageemptyerror+= "'First Name' ";
            }
            
            if (lastname == "")
            {
               messageemptyerror+= "'Last Name' ";
            }

            if (email == "")
            {
              messageemptyerror+= "'Email' ";
            }

            if (phone == "")
            {
                messageemptyerror+= "'Phone' ";
            }
            
            if (ship_street == "")
            {
              messageemptyerror+= "'Shipping Street' ";
            }         

            if (ship_city == "")
            {
              messageemptyerror+= "'Shipping City' ";
            }          

            if (ship_state == "")
            {
              messageemptyerror+= "''Shipping State' ";
            }

            if (ship_zip == "")
            {
               messageemptyerror+= "'Shipping Zip' ";
            }

            if (cardfirstname == "")
            {
              messageemptyerror+= "'First Name on Card' ";
            }

            if (cardlastname == "")
            {
              messageemptyerror+= "'Last Name on Card' ";
            }

            if (cardnumber == "")
            {
                messageemptyerror+= "'Card Number' ";
            }
            
            if (expirymonth == "")
            {
              messageemptyerror+= "'Expiry Month' ";
            }   

            if (expiryyear == "")
            {
              messageemptyerror+= "'Expiry Year' ";
            }         

            if (securitycode == "")
            {
              messageemptyerror+= "'Security Code' ";
            }          

            if (billing_street == "")
            {
              messageemptyerror+= "''Billing Street' ";
            }

            if (billing_city == "")
            {
              messageemptyerror+= "''Billing City' ";
            }

            if (billing_state == "")
            {
              messageemptyerror+= "''Billing State' ";
            }

            if (billing_zip == "")
            {
              messageemptyerror+= "''Billing Zip' ";
            }

            if (messageemptyerror != "Please fill in the following fields to continue: ") 
            {
              showalert('fieldsregisterempty',messageemptyerror, 'danger','Checkout Error');  
            }
        }
    }
    else
    {
       if(cardfirstname != "" && cardlastname != "" && cardnumber != "" && expirymonth != "" && expiryyear != "" && securitycode != "" && billing_street != "" && billing_city != "" && billing_state != "" && billing_zip != "" && firstname != "" && lastname != "" && email != "" && phone != "")
        {
          if (validatedate() && validateCCNum(document.getElementById('cardnumber')) && validatesecuritycode() && ValidateEmail() && ValidatePhone()) 
          {
            shoppingcart.user.firstname = firstname;
            shoppingcart.user.lastname = lastname;
            shoppingcart.user.company = company;
            shoppingcart.user.cardfirstname = cardfirstname;
            shoppingcart.user.cardlastname = cardlastname;
            shoppingcart.user.cardcompany = cardcompany;
            shoppingcart.user.email = email;
            shoppingcart.user.phone = phone;
            //shoppingcart.shippingType = ship_type;
            shoppingcart.user.shipping_street = '11119 Neeshaw Dr';
            shoppingcart.user.shipping_city = 'Houston';
            shoppingcart.user.shipping_state = "Texas";
            shoppingcart.user.shipping_zip = "77065";
            shoppingcart.user.billing_street = billing_street;
            shoppingcart.user.billing_city = billing_city;
            shoppingcart.user.billing_state = billing_state;
            shoppingcart.user.billing_zip = billing_zip;
            shoppingcart.user.cardtype = document.getElementById("cardtype").value;
            shoppingcart.user.cardnumber = document.getElementById("cardnumber").value.substr(-4);

              result = true;
          }
          else
          {
            var messageformaterrorstore = "The following fields format is incorrect. ";
            if (!validatedate())
            {
               messageformaterrorstore+= "'Expiry Date' ";
            }

            
            if (!validateCCNum(document.getElementById('cardnumber')))
            {
              messageformaterrorstore+= "'Card Number' ";
            }

            if (!validatesecuritycode())
            {
              messageformaterrorstore+= "'Security Code' ";
            }

            if(!ValidateEmail())
            {
              messageformaterrorstore+= "'Email' "; 
            }

            if(!ValidatePhone())
            {
              messageformaterrorstore+= "'Phone' "; 
            }

             showalert('fieldsregisterformat',messageformaterrorstore, 'danger','Checkout Format Error');
          }
            
        } 
        else
        {
            var messageemptyerrorstore = "Please fill in the following fields to continue: ";
            if (firstname == "")
            {
               messageemptyerrorstore+= "'First Name' ";
            }

            if (lastname == "")
            {
               messageemptyerrorstore+= "'LastName' ";
            }

            if (email == "")
            {
              messageemptyerrorstore+= "'Email' ";
            }

            if (phone == "")
            {
                messageemptyerrorstore+= "'Phone' ";
            }

            if (cardfirstname == "")
            {
              messageemptyerrorstore+= "'First Name on Card' ";
            }

            if (cardlastname == "")
            {
              messageemptyerrorstore+= "'Last Name on Card' ";
            }

            if (cardnumber == "")
            {
                messageemptyerrorstore+= "'Card Number' ";
            }
            
            if (expirymonth == "")
            {
              messageemptyerrorstore+= "'Expiry Month' ";
            }         

            if (expiryyear == "")
            {
              messageemptyerrorstore+= "'Expiry Year' ";
            }         

            if (securitycode == "")
            {
              messageemptyerrorstore+= "'Security Code' ";
            }          

            if (billing_street == "")
            {
              messageemptyerrorstore+= "''Billing Street' ";
            }

            if (billing_city == "")
            {
              messageemptyerrorstore+= "''Billing City' ";
            }

            if (billing_state == "")
            {
              messageemptyerrorstore+= "''Billing State' ";
            }

            if (billing_zip == "")
            {
              messageemptyerrorstore+= "''Billing Zip' ";
            }

            showalert('fieldsregisteremptystore',messageemptyerrorstore, 'danger','Checkout Error');
        }
    }

 
   return result;


}

function setsameaddress()
{
  if (document.getElementById('sameaddress').checked)
  {
     document.getElementById('cardfirstname').value = document.getElementById('firstname').value;
     document.getElementById('cardlastname').value = document.getElementById('lastname').value;
     document.getElementById('cardcompany').value = document.getElementById('company').value;
     document.getElementById('ship_street').value = document.getElementById('billing_street').value;
     document.getElementById('ship_city').value = document.getElementById('billing_city').value;
     document.getElementById('ship_state').value = document.getElementById('billing_state').value;
     document.getElementById('ship_zip').value = document.getElementById('billing_zip').value;
  }
  else
  {
    document.getElementById('cardfirstname').value = "";
     document.getElementById('cardlastname').value = ""
     document.getElementById('cardcompany').value = "";
      document.getElementById('ship_street').value = "";
      document.getElementById('ship_city').value = "";
      document.getElementById('ship_state').value = "";
      document.getElementById('ship_zip').value = "";
  }
}

function validatedate(){
     return true;
     
 }


 function validateCCNum(element)
{
    var ccnum = element.value;
    var ccCheckRegExp = /[^\d\s-]/;
    var isValid = !ccCheckRegExp.test(ccnum);
    var i;

    if (isValid) {
        var cardNumbersOnly = ccnum.replace(/[\s-]/g,"");
        var cardNumberLength = cardNumbersOnly.length;

        var arrCheckTypes = ['visa', 'mastercard', 'amex', 'discover', 'dinners', 'jcb'];
        for(i=0; i<arrCheckTypes.length; i++) {
            var lengthIsValid = false;
            var prefixIsValid = false;
            var prefixRegExp;

            switch (arrCheckTypes[i]) {
                case "mastercard":
                    lengthIsValid = (cardNumberLength === 16);
                    prefixRegExp = /^5[1-5]/;
                    break;

                case "visa":
                    lengthIsValid = (cardNumberLength === 16 || cardNumberLength === 13);
                    prefixRegExp = /^4/;
                    break;

                case "amex":
                    lengthIsValid = (cardNumberLength === 15);
                    prefixRegExp = /^3([47])/;
                    break;

                case "discover":
                    lengthIsValid = (cardNumberLength === 15 || cardNumberLength === 16);
                    prefixRegExp = /^(6011|5)/;
                    break;

                case "dinners":
                    lengthIsValid = (cardNumberLength === 14);
                    prefixRegExp = /^(300|301|302|303|304|305|36|38)/;
                    break;

                case "jcb":
                    lengthIsValid = (cardNumberLength === 15 || cardNumberLength === 16);
                    prefixRegExp = /^(2131|1800|35)/;
                    break;

                default:
                    prefixRegExp = /^$/;
            }

            prefixIsValid = prefixRegExp.test(cardNumbersOnly);
            isValid = prefixIsValid && lengthIsValid;

            // Check if we found a correct one
            if(isValid) {
                break;
            }
        }
    }

    if (!isValid) {
      //console.log(false);
      cardnumber.focus();
      cardnumber.style.borderColor = "red";
      return false;  
        //return false;
    }

    // Remove all dashes for the checksum checks to eliminate negative numbers
    ccnum = ccnum.replace(/[\s-]/g,"");
    // Checksum ("Mod 10")
    // Add even digits in even length strings or odd digits in odd length strings.
    var checksum = 0;
    for (i = (2 - (ccnum.length % 2)); i <= ccnum.length; i += 2) {
        checksum += parseInt(ccnum.charAt(i - 1));
    }

    // Analyze odd digits in even length strings or even digits in odd length strings.
    for (i = (ccnum.length % 2) + 1; i < ccnum.length; i += 2) {
        var digit = parseInt(ccnum.charAt(i - 1)) * 2;
        if (digit < 10) {
            checksum += digit;
        } else {
            checksum += (digit - 9);
        }
    }

    if (checksum % 10 === 0)
    {
      cardnumber.style.borderColor = "transparent";
      //cardnumber.blur();
      return true;  
    }
    else
    {
       cardnumber.focus();
      cardnumber.style.borderColor = "red";
      return false; 
    }
    //return (checksum % 10) === 0;
    //console.log(checksum);
    //console.log((checksum % 10) === 0);
}

function ValidateEmail()
{
   var inputText = document.getElementById('email');

  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(inputText.value.match(mailformat))
  {
     inputText.style.borderColor = "transparent"; 
    return true;
  }
  else
  {
    inputText.focus();
    inputText.style.borderColor = "red";  
    return false;
  }
}
function validatesecuritycode()

{

  var securitycode = document.getElementById('securitycode');  

  if (document.getElementById('cardtype').value != null)

  {
    var myRe = /^[0-9]{3,4}$/;

    var myArray = myRe.exec(securitycode.value);

    if(securitycode.value!=myArray)

    {

      securitycode.focus();

        securitycode.style.borderColor = "red";  

      return false;



    }

    else

    {

      securitycode.style.borderColor = "transparent"; 

      //securitycode.blur();

      return true;  

    }

  }

  else

  {

    securitycode.focus();

      securitycode.style.borderColor = "red"; 

    return false;

  } 



 }

function removeElementsByClass(className){
    var elements = document.getElementsByClassName(className);
    while(elements.length > 0){
        elements[0].parentNode.removeChild(elements[0]);
    }
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


    function ActiveCheckout()
    {
        $(".loading").fadeIn("slow");
        $(".loading-text").fadeIn("slow");

        $("#lishoppingcart").removeClass('active');
        $("#ashoppingcart").attr("aria-expanded",false);
        
        //$("#licheckout").removeClass('active');
        $("#acheckout").addClass("active"); 

        $("#liordercomplete").removeClass('active');
        $("#liordercomplete").attr("aria-expanded",false);


        $("#licheckoutconfirm").removeClass('active');
        $("#acheckoutconfirm").attr("aria-expanded",false);

        $("#licheckout").addClass("active");
        $("#licheckout").attr("aria-expanded",true);

        $("#shopping-cart").removeClass('active');

        $("#checkout").addClass("active");
        $("#checkoutconfirm").removeClass('active');
        $("#order-complete").removeClass('active');

        $(".loading").fadeOut("slow");
        $(".loading-text").fadeOut("slow");

        displayTotals();

    }


    function getDeliveryDateObj(pday,businessDaysLeftForDelivery) {
  
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
        var month = ['Janurary','Feburary','March','April','May','June','July','August','September','October','November','December'];
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
  
      function charge_customer()
      { 
        var firstname = document.getElementById('cardfirstname').value;
        var lastname = document.getElementById('cardlastname').value;
        var cardnumber = document.getElementById('cardnumber').value;
        var expirydate = document.getElementById('expirymonth').value + '-' + document.getElementById('expiryyear').value;
        var securitycode = document.getElementById('securitycode').value;
      
        $.ajax({
            type:'POST',
            dataType: 'json', 
            data: { 
                    cardnumber: cardnumber.replace(/ /g,''),
                    expirydate:expirydate,
                    securitycode: securitycode,
                    shoppingcart:  JSON.parse(JSON.stringify(shoppingcart)),
                },
            url: window.location.origin + '/saveorder',
           beforeSend: function() 
           {    
             console.log(cardnumber.replace(/ /g,''),);
           },
          success: function(result) 
          {
              console.log(result);
            if (result.message == "Ok")
            {
              displayTotals();
              document.getElementById('congratulations_order_number_label').innerHTML = 'Order Number: ' + result.order.order_number;
              get_order_details();
              order_complete();
            }    
            else
            {
              showalert('transactionfail','We are unable to process your card', 'danger','Transaction Error'); 
            }
          },
          error: function(result)
          {
            showalert('internalerror','An error occured during charge_customer', 'danger','Transaction Error'); 
          }
      
        });    
      
      }  
      
      function order_complete()
      {  
        $("#lishoppingcart").removeClass('active');
        $("#ashoppingcart").attr("aria-expanded",false);
      
         
        $("#licheckout").removeClass('active');
        $("#acheckout").attr("aria-expanded",false);
      
         $("#licheckoutconfirm").removeClass('active');
        $("#acheckoutconfirm").attr("aria-expanded",false);
      
         
        $("#liordercomplete").addClass("active");
      
           
        $("#aordercomplete").addClass("active");
        $("#aordercomplete").attr("aria-expanded",true);
      
        $("#shopping-cart").removeClass('active');
        $("#checkout").removeClass('active');
        $("#checkoutconfirm").removeClass('active');
        $("#order-complete").addClass("active");
      
      
        document.getElementById("lishoppingcart").style.display ="none";
        document.getElementById("licheckout").style.display ="none";
        document.getElementById("licheckoutconfirm").style.display ="none";
      }
      
      
      function get_order_details()
      {      
      
              //making font and text style normal
              var ordercompleteinfo = '<div class="bill-details p-30" >';
                  ordercompleteinfo +='     <h6 class="widget-title border-left mb-20">shipping details</h6>';
                  ordercompleteinfo +='                                    <ul class="bill-address">';
                  ordercompleteinfo +='                                       <li>';
                  ordercompleteinfo +='                                           <span>Name:</span>';
                  ordercompleteinfo += shoppingcart.user.firstname + " " + shoppingcart.user.lastname;
                  ordercompleteinfo +='                                      </li>';
                  if (shoppingcart.user.company.length> 0)
                  {
                    ordercompleteinfo +='                                       <li>';
                    ordercompleteinfo +='                                     <span>Comapny:</span>';
                    ordercompleteinfo += shoppingcart.user.company;
                    ordercompleteinfo +='                                      </li>';
                  }
                  ordercompleteinfo +='                                       <li>';
                  ordercompleteinfo +='                                           <span>Address:</span>';
                  ordercompleteinfo += shoppingcart.user.shipping_street + ", " + shoppingcart.user.shipping_city +  ", " + shoppingcart.user.shipping_state + ", " + shoppingcart.user.shipping_zip ;
                  ordercompleteinfo +='                                      </li>';
                  ordercompleteinfo +='                                      <li>';
                  ordercompleteinfo +='                                         <span>email:</span>';
                  ordercompleteinfo += shoppingcart.user.email;
                  ordercompleteinfo +='                                     </li>';
                  ordercompleteinfo +='                                     <li>';
                  ordercompleteinfo +='                                        <span>phone : </span>';
                  ordercompleteinfo += shoppingcart.user.phone;
                  ordercompleteinfo +='                                    </li>';
                  ordercompleteinfo +='                               </ul>';
                  ordercompleteinfo +='                           </div>';
                  ordercompleteinfo +='                          <div class="bill-details pl-30">';
                  ordercompleteinfo +='                              <h6 class="widget-title border-left mb-20">billing details</h6>';
                  ordercompleteinfo +='                             <ul class="bill-address">';
                  ordercompleteinfo +='                                       <li>';
                  ordercompleteinfo +='                                           <span>Name:</span>';
                  ordercompleteinfo += shoppingcart.user.firstname + " " + shoppingcart.user.lastname;
                  ordercompleteinfo +='                                      </li>';
                  ordercompleteinfo +='                                <li>';
                  ordercompleteinfo +='                                    <span>Address:</span>';
                  ordercompleteinfo += shoppingcart.user.billing_street + ", " + shoppingcart.user.billing_city +  ", " + shoppingcart.user.billing_state + ", " + shoppingcart.user.billing_zip ;
                  ordercompleteinfo +='                               </li>';
                  ordercompleteinfo +='                              <li>';
                  ordercompleteinfo +='                                 <span>email:</span>';
                  ordercompleteinfo += shoppingcart.user.email;
                  ordercompleteinfo +='                           </li>';
                  ordercompleteinfo +='                           <li>';
                  ordercompleteinfo +='                               <span>phone : </span>';
                  ordercompleteinfo += shoppingcart.user.phone;
                  ordercompleteinfo +='                          </li>';
                  ordercompleteinfo +='                      </ul>';
                  ordercompleteinfo +='</div>';
              document.getElementById('order-complete-info').innerHTML = ordercompleteinfo;
      
               document.getElementById('lishoppingcart').style.display= 'none';
              document.getElementById('licheckout').style.display= 'none';
      
      }
      
      function can_we_congratulate()
      {
          if(checked_out)
          {
               document.getElementById('aordercomplete').click();       
          }
          //if they have checked out send them to checkoutpage. ?with error message?
          else
          {
              document.getElementById('checkout').click();      
          }
      }
      
      
      
      
      function congratulations()
      {
          document.getElementById('congratulations_order_number_label').style.textTransform = "initial";
      }


      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }