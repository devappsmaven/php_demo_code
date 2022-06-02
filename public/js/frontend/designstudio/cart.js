var Order = null;
var card_type ="";
var ship_type = "Standard Shipping";
var currentshirtprice = 0;


window.onload = function() 
{   
  //getOrderInSession();

}


function getOrderInSession()
{
  $.ajax({

        type: "POST",

        url: "sessionInfo.php",

        data: { 
                 value:"Order",

                 operation:"select",

              },

        success: function(data)

        {
           
           if (data == "")
           {
             //window.location = "index";
           }
           else
           {
              Order = JSON.parse(data); 
             
              var day1 = new Date(dateFormat(Date.now(),"ddd mmm dd yyyy HH:MM:ss"));
              $("#freeshippingcart").html((getDeliveryDateObj(day1,9)));
              var day2 = new Date(dateFormat(Date.now(),"ddd mmm dd yyyy HH:MM:ss"));
              $("#rushdelivery").html((getDeliveryDateObj(day2,5)));
              Order._promocode = ' ';
              Order._discount = 0;
              init_shipping_cost();
              var day3 = new Date(dateFormat(Date.now(),"ddd mmm dd yyyy HH:MM:ss"));
              Order._shipby = getDeliveryDateObj(day3,4);
              //var dayO = new Date();
              Order._date = new Date(dateFormat(Date.now(),"ddd mmm dd yyyy HH:MM:ss"));
           }

           $(".loading").fadeOut("slow");
           $(".loading-text").fadeOut("slow");
        },

        error: function (error)

        {

            console.log("error in method loadRole():");
            console.log(error);

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

    showSizesEnables(table);

    sortSelect(table);

    updateAfterDelete(info);

}

function showSizesEnables(table)

{

    if (document.getElementById("sizesenables_" + table).length == 0)

    {

        document.getElementById("sizesenables_div_" + table).style.display="none";

    }

    else

    {

        document.getElementById("sizesenables_div_" + table).style.display="block";

    }

}


function sortTable(table) 

{

  var table, rows, switching, i, x, y, shouldSwitch;

  table = document.getElementById("tbody_" + table);

  switching = true;

  /* Make a loop that will continue until

  no switching has been done: */

  while (switching) 

  {

    // Start by saying: no switching is done:

    switching = false;

    rows = table.getElementsByTagName("TR");

    /* Loop through all table rows (except the

    first, which contains table headers): */

    for (i = 0; i < (rows.length - 1); i++) {

      // Start by saying there should be no switching:

      shouldSwitch = false;

      /* Get the two elements you want to compare,

      one from current row and one from the next: */

      x = rows[i];

      y = rows[i + 1];
  
      // Check if the two rows should switch place:
      if ( getValuebySize( x.id.split("_")[1] ) > getValuebySize( y.id.split("_")[1])) { //Number(x.id) > Number(y.id)
 
        // I so, mark as a switch and break the loop:

        

        shouldSwitch= true;

        break;

      }

    }

    if (shouldSwitch) {

      /* If a switch has been marked, make the switch

      and mark that a switch has been done: */

      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);

      switching = true;

    }

  }

}


function sortSelect(table) 

{

  var select, rows, switching, i, x, y, shouldSwitch;

  select = document.getElementById("sizesenables_" + table);

  switching = true;

  /* Make a loop that will continue until

  no switching has been done: */

  while (switching) 

  {

    // Start by saying: no switching is done:

    switching = false;

    rows = select.getElementsByTagName("option");
    

    /* Loop through all table rows (except the

    first, which contains table headers): */

    for (i = 0; i < (rows.length - 1); i++) {

      

      // Start by saying there should be no switching:

      shouldSwitch = false;

      /* Get the two elements you want to compare,

      one from current row and one from the next: */

      x = rows[i];

      y = rows[i + 1];

      // Check if the two rows should switch place:

      

      if (Number(x.value ) > Number(y.value )) 

      {

        // I so, mark as a switch and break the loop:

        shouldSwitch= true;

        break;

      }

    }

    if (shouldSwitch) {

      /* If a switch has been marked, make the switch

      and mark that a switch has been done: */

     

      select.insertBefore(rows[i + 1], rows[i]);

      switching = true;

    }

  }



}


function updateAfterDelete(info)
{
    
     var num_shirts = 0;
    var data = info.split("_");
    var producdesign = data[0];
    var sizename = data[1];    
    
    Order._Product_design_list[producdesign]._sizeList[getValuebySize(sizename.toUpperCase())-1]._quantity = 0;
    for (var i =0; i<  Order._Product_design_list[producdesign]._sizeList.length; i++)
    {
      if (Order._Product_design_list[producdesign]._sizeList[i]._quantity > 0)
      {
         num_shirts +=  Number(Order._Product_design_list[producdesign]._sizeList[i]._quantity);      
      }
    }
    Order._Product_design_list[producdesign]._num_shirts =  num_shirts;
    var listprice =  document.getElementsByClassName("shirt_price_" + producdesign);   
   var listquantity =  document.getElementsByClassName("quantity_" + producdesign);
   var listsize =  document.getElementsByClassName("size_" + producdesign);
   var listtotal =  document.getElementsByClassName("item_total_" + producdesign);
   
   Order._Product_design_list[producdesign]._total = 0;
   document.getElementById("subtotal_" + producdesign).innerHTML ="";
   for (var i = 0; i< listprice.length; i++)
   {
      calc_price(producdesign,i, listsize[i].innerHTML);
   }

     
   
    /*var newtotal= 0;
     var num_shirts = 0;
    var data = info.split("_");
    var producdesign = data[0];
    var sizename = data[1];
    var listprice =  document.getElementsByClassName("shirt_price_" + producdesign);
    var listtotal =  document.getElementsByClassName("item_total_" + producdesign);
    var listquantity =  document.getElementsByClassName("quantity_" + producdesign);
    var listsize =  document.getElementsByClassName("size_" + producdesign);
    
    Order._Product_design_list[producdesign]._sizeList[getValuebySize(sizename.toUpperCase())-1]._quantity = 0;
    for (var i =0; i<  Order._Product_design_list[producdesign]._sizeList.length; i++)
    {
      if (Order._Product_design_list[producdesign]._sizeList[i]._quantity > 0)
      {
        num_shirts +=  Number(Order._Product_design_list[producdesign]._sizeList[i]._quantity);  
      }
        
    }
    Order._Product_design_list[producdesign]._num_shirts =  num_shirts;


    //var listprice =  document.getElementsByClassName("shirt_price_" + producdesign);
   //var listtotal =  document.getElementsByClassName("item_total_" + producdesign);
   //var listquantity =  document.getElementsByClassName("quantity_" + producdesign);
   //var listsize =  document.getElementsByClassName("size_" + producdesign);
   //var price_per_shirt = 0;
   //for (var i = 0; i< listprice.length; i++)
   //{
      //calc_price(listsize[i].innerHTML,num_shirts,listquantity[i].value,Order._Product_design_list[producdesign]._Product.Colors,Order._Product_design_list[producdesign]._Product.Id,i,producdesign);
      //calc_price(producdesign,i, listsize[i].innerHTML);
    
   //}
     
   //var listprice =  document.getElementsByClassName("shirt_price_" + producdesign);   
   //var listquantity =  document.getElementsByClassName("quantity_" + producdesign);
   //var listsize =  document.getElementsByClassName("size_" + producdesign);
   

   for (var i = 0; i< listprice.length; i++)
   {
     Order._Product_design_list[producdesign]._total = 0;
     document.getElementById("subtotal_" + producdesign).innerHTML ="";
     calc_price(producdesign,i, listsize[i].innerHTML);
     //calc_price(listsize[i].innerHTML,num_shirts,listquantity[i].value,Order._Product_design_list[producdesign]._Product.Colors,Order._Product_design_list[producdesign]._Product.Id,i,producdesign);
   }*/

   //updateOrderInfo();
    
}


function updateAfterAdd(info)
{
    

    var num_shirts = 0;
    var data = info.split("_");
    var producdesign = data[0];
    var sizename = data[1];    
    
    Order._Product_design_list[producdesign]._sizeList[getValuebySize(sizename.toUpperCase())-1]._quantity = Number(document.getElementById("qtybutton_" + info).value);
    for (var i =0; i<  Order._Product_design_list[producdesign]._sizeList.length; i++)
    {
      if (Order._Product_design_list[producdesign]._sizeList[i]._quantity > 0)
      {
         num_shirts +=  Number(Order._Product_design_list[producdesign]._sizeList[i]._quantity);      
      }
    }
   
   Order._Product_design_list[producdesign]._num_shirts =  num_shirts;
   var listprice =  document.getElementsByClassName("shirt_price_" + producdesign);   
   var listquantity =  document.getElementsByClassName("quantity_" + producdesign);
   var listsize =  document.getElementsByClassName("size_" + producdesign);
   var listtotal =  document.getElementsByClassName("item_total_" + producdesign);
   
   Order._Product_design_list[producdesign]._total = 0;
   document.getElementById("subtotal_" + producdesign).innerHTML ="";
   for (var i = 0; i< listprice.length; i++)
   {
      calc_price(producdesign,i, listsize[i].innerHTML);
   }

     
   
}

function calc_price(producdesign,pos,size)
{ 
    var listpersonalizeprice = document.getElementsByClassName("shirt_personalize_price_0");
    var listprice =  document.getElementsByClassName("shirt_price_" + producdesign);
    var listtotal =  document.getElementsByClassName("item_total_" + producdesign);
    var listquantity =  document.getElementsByClassName("quantity_" + producdesign);
    var listsize =  document.getElementsByClassName("size_" + producdesign);
     var newsubtotal = 0;
   $.ajax({

      type: "post",

      url: "get_shirt_price.php",

      data: {

        amnt : Order._Product_design_list[producdesign]._num_shirts,

        f_colors : Order._Product_design_list[producdesign]._design._sideList[0]._ColorList.length - Order._Product_design_list[producdesign]._design._sideList[0]._ColorPersonalizeList.length,

        r_colors : Order._Product_design_list[producdesign]._design._sideList[1]._ColorList.length,

        b_colors : Order._Product_design_list[producdesign]._design._sideList[2]._ColorList.length - Order._Product_design_list[producdesign]._design._sideList[2]._ColorPersonalizeList.length,

        l_colors : Order._Product_design_list[producdesign]._design._sideList[3]._ColorList.length,

        product: Order._Product_design_list[producdesign]._Product.Id,

        color: Order._Product_design_list[producdesign]._Product.Colors,

        size: size,

         f_personalize_colors: Order._Product_design_list[producdesign]._design._sideList[0]._ColorPersonalizeList,


            b_personalize_colors: Order._Product_design_list[producdesign]._design._sideList[2]._ColorPersonalizeList,


           // list: JSON.stringify(Order._Product_design_list[producdesign]._sizeList),


            personalizesizelist: Order._Product_design_list[producdesign]._sizepersonalizeList,

            personalizelist: Order._Product_design_list[producdesign]._personalize,

            personalizetype:  Order._Product_design_list[producdesign]._personalizetype,


      },

      beforeSend: function()
      {

      },
      success: function(msg)
      { 
        
        if (listprice[pos] != undefined)
        {
          if (msg != "")
          {        
            listprice[pos].innerHTML =  msg;
            currentshirtprice = msg;
          }
          else
          {         
            listprice[pos].innerHTML =  0;
          }
          listtotal[pos].innerHTML =  (listquantity[pos].value * Number(listprice[pos].innerHTML)).toFixed(2);  
         
          for (var i = 0 ; i < listtotal.length; i++)
          {
              newsubtotal += Number(listtotal[i].innerHTML);
          }
          
          if (listpersonalizeprice.length > 0)
          {
            newsubtotal +=  Number(listpersonalizeprice[0].innerHTML);
            Order._Product_design_list[producdesign]._total = newsubtotal;
            document.getElementById("subtotal_" + producdesign).innerHTML = (Order._Product_design_list[producdesign]._total- Number(listpersonalizeprice[0].innerHTML)).toFixed(2);
          }
          else
          {
            Order._Product_design_list[producdesign]._total = newsubtotal;
            document.getElementById("subtotal_" + producdesign).innerHTML = Order._Product_design_list[producdesign]._total.toFixed(2);
          }
          
          
          Order._subtotal = newsubtotal.toFixed(2);
          Order._shipping_cost = 0.00;
          Order._discount = 0.00;
          Order._tax = 0.00;
          Order._total = Order._subtotal + Order._tax;
          document.getElementById("final_total").innerHTML = "";
          document.getElementById("final_total").innerHTML = (Order._total*1).toFixed(2);
        }
        

       /* var newsubtotal = Number(Order._Product_design_list[producdesign]._num_shirts * Number(currentshirtprice).toFixed(2));
        Order._Product_design_list[producdesign]._total += newsubtotal;
        document.getElementById("subtotal_" + producdesign).innerHTML = Order._Product_design_list[producdesign]._total;
        var newtotal= 0;
        for (var j =0; j<  Order._Product_design_list.length; j++)
        {
            newtotal+= Order._Product_design_list[j]._total;
        }
        Order._subtotal = newtotal.toFixed(2);
        Order._shipping_cost = 0.00;
        Order._discount = 0.00;
        Order._tax = 0.00;
        Order._total = Order._subtotal + Order._tax;
        document.getElementById("final_total").innerHTML = "";
        document.getElementById("final_total").innerHTML = Order._total;*/
          /*// var newtotal = Number(Order._Product_design_list[producdesign]._num_shirts * Number(msg).toFixed(2));
          Order._Product_design_list[producdesign]._total += Number(listtotal[pos].innerHTML);
          document.getElementById("subtotal_" + producdesign).innerHTML = Order._Product_design_list[producdesign]._total;
          var newtotal= 0;
          for (var i =0; i<  Order._Product_design_list.length; i++)
          {
              newtotal+= Order._Product_design_list[i]._total;
          }
          Order._subtotal = newtotal.toFixed(2);
          Order._shipping_cost = 0.00;
          Order._discount = 0.00;
          Order._tax = 0.00;
          Order._total = Order._subtotal + Order._tax;
          document.getElementById("final_total").innerHTML = "";
          document.getElementById("final_total").innerHTML = Order._total;

          //updateOrderInfo();*/
          
          //updateOrderInfo();
          displayTotals();

       
      },
      error: function (error)
      {
        console.log("error in method calc_price('"+quantity+","+ _2xl+","+ _3xl+","+ _4xl+","+ _5xl+"'):");
          console.log(error); 

      }
    });
}

/*Orders.prototype.Total = function() 
 {
    var total = 0;
    if (this._Product_design_list)
    {
      this._Product_design_list.forEach(function(element) 
      {
        if (element._total)
        {
            total+= Number(element._total);          
        }
          
      });
    }
    
    this._subtotal = Number(total.toFixed(2));
    this._shipping_cost = 0.00;
    this._discount = 0.00;
    if (this._discount > 0)
    {
      this._tax = Number(((((total-this._discount)+this._shipping_cost)* 8.25)/100).toFixed(2));  
    }
    else
    {
     this._tax = Number(((((total)+this._shipping_cost)* 8.25)/100).toFixed(2));   
    }
    this._total = this._subtotal + this._tax;
    return this._total;
  }*/


function calc_price2($size,$quantity,$numcolors,$color,$idproduct,pos,producdesign)
{
  var $color_col = "";
  var $size_price_col = "";
  
  if($numcolors > 0)
  {
    switch ($numcolors) 
    {
      case 0:
          $color_col = "0_Color";
          break;
      case 1:
          $color_col = "1_Color";
          break;
      case 2:
          $color_col = "2_Color";
          break;
      case 3:
          $color_col = "3_Color";
          break;
      case 4:
          $color_col = "4_color";
          break;
      case 5:
          $color_col = "5_Color";
          break;
      case 6:
          $color_col = "6_Color";
          break;
      case 7:
          $color_col = "7_Color";
          break;
      default:
          $color_col = "8_Color";
          break;
    }

    if($size=="NB" || $size=="0M" || $size=="3M" || $size=="6M" || $size=="12M" || $size=="18M" || $size=="24M")
    {
        if ($color == "White") 
        {
            $size_price_col = "_INFANTWHITE";
        }
        else
        {
            $size_price_col = "_INFANT";    
        }
        
    }
    else if($size=="2T" || $size=="3T" || $size=="4T" || $size=="5T" || $size=="5_6" || $size=="6T" || $size=="7")
    {
        if ($color == "White") 
        {
            $size_price_col = "_TODDLERWHITE";
        }
        else
        {
            $size_price_col = "_TODDLER";
        }
    }
    else if ($size =="YXS" || $size=="YS" || $size=="YM" || $size=="YL" || $size=="YXL")
    {
        if ($color == "White") 
        {
            $size_price_col = "_YOUTHWHITE";
        }
        else
        {
            $size_price_col = "_YOUTH";
        }
    }
    else if($size=="XS" || $size=="S" || $size=="M" || $size=="L" || $size=="XL")
    {
        if ($color == "White") 
        {
            $size_price_col = "_ADULTWHITE";
        }
        else
        {
            $size_price_col = "_ADULT";
        }
    }
    else if($size=="2XL")
    {
        if ($color == "White") 
        {
            $size_price_col = "_2xlWHITE";
        }
        else
        {
            $size_price_col = "_2xl";
        }
    }
    else if($size=="3XL")
    {
        if ($color == "White") 
        {
            $size_price_col = "_3xlWHITE";
        }
        else
        {
            $size_price_col = "_3xl";
        }
    }
    else if($size=="4XL")
    {
        if ($color == "White") 
        {
            $size_price_col = "_4xlWHITE";
        }
        else
        {
            $size_price_col = "_4xl";
        }
    }
    else if($size=="5XL")
    {
        if ($color == "White") 
        {
            $size_price_col = "_5xlWHITE";
        }
        else
        {
            $size_price_col = "_5xl";
        }
    }

    $.ajax({

      type: "post",

      url: "Calc_Price.php",

      data: {

        size_price_col : $size_price_col,

        color_col : $color_col,

        quantity : $quantity,

        idproduct : $idproduct,

      },

      beforeSend: function()
      {
         
      },
      success: function(msg)
      { 
          var listprice =  document.getElementsByClassName("shirt_price_" + producdesign);
          var listtotal =  document.getElementsByClassName("item_total_" + producdesign);
          var listquantity =  document.getElementsByClassName("quantity_" + producdesign);
          var listsize =  document.getElementsByClassName("size_" + producdesign);

        if (msg != "")
        {
          listprice[pos].innerHTML =  msg;
        }
        else
        {
          listprice[pos].innerHTML =  0;
        }
        
         listtotal[pos].innerHTML =  (listquantity[pos].value * Number(listprice[pos].innerHTML)).toFixed(2);
         // var newtotal = Number(Order._Product_design_list[producdesign]._num_shirts * Number(msg).toFixed(2));
          Order._Product_design_list[producdesign]._total += Number(listtotal[pos].innerHTML);
          document.getElementById("subtotal_" + producdesign).innerHTML = Order._Product_design_list[producdesign]._total.toFixed(2);
           var newtotal= 0;
          for (var i =0; i<  Order._Product_design_list.length; i++)
          {
              newtotal+= Order._Product_design_list[i]._total;
          }
          Order._subtotal = newtotal.toFixed(2);
          Order._total = newtotal.toFixed(2);
          document.getElementById("final_total").innerHTML = Order._total.toFixed(2);
       
      },
      error: function (error)

      {

        console.log("error in method calc_price('"+quantity+","+ _2xl+","+ _3xl+","+ _4xl+","+ _5xl+"'):");
          console.log(error); 

      }

    });
  }
  else
  {
      return 0;
  }

     

}


function updateOrderInfo()

{
    
 
     var jsonOrder = JSON.stringify(Order);
       
      $.ajax({

          type: "POST",

          url: "sessionInfo.php",

          data: { 
                   value:"Order",

                   operation:"update",

                   Order : jsonOrder,
                },

          success: function(data)
          {
            
            //get the complete order saved in the database
            Order = JSON.parse(data);
           
          },

        error: function (error)

        {

            console.log("error in method updateOrderInfo():");
            console.log(error);

        }

    });   

}


function addSize(product_design_number) 

{

     var shirt_price = document.getElementsByClassName('product-price'); 

     var size = document.getElementById("sizesenables_" + product_design_number).value;


     if (size!= "")

     {

         //var tbl = document.getElementById(product_design_number); //"sizesenables"

         var tblBody = document.getElementById("tbody_" + product_design_number);

         var tablesizes = [];

         

         for (var i = tblBody.childNodes.length - 1; i >= 0; i--) {

            if( typeof tblBody.childNodes[i].id != 'undefined')

            {

                tablesizes.push(tblBody.childNodes[i].id);

            }

         }



         var maintr = document.createElement("tr"); 

            maintr.className = product_design_number;

            maintr.id = product_design_number + "_" + getSizebyValue(size).toUpperCase();


           var sizes = document.createElement("td");

             //sizes.className = "product-thumbnail";

             sizes.className += " size_details";

             var sizes_name = document.createElement('span');

              sizes_name.className = "size_"+ product_design_number;

             sizes_name.innerHTML = getSizebyValue(size).toUpperCase();

         /*var product = document.createElement("td");

             product.className = "product-thumbnail";

             var div = document.createElement("div");

                 div.className = "pro-thumbnail-info text-left";

                 var h6 = document.createElement("h6");

                     h6.className = "product-title-2";

                     var a = document.createElement("a");

                        a.href = "#";

                        a.innerHTML = Order._Product_design_list[product_design_number]._Product.Name;

                     var Brand = document.createElement("p");                

                     Brand.innerHTML = "Brand: "+ Order._Product_design_list[product_design_number]._Product.Brand;

                     var Stylenumber = document.createElement("p"); 

                     Stylenumber.className = "size_details";     

                     Stylenumber.innerHTML = "StyleNumber: "+ Order._Product_design_list[product_design_number]._Product.StyleNumber;



                     //The reason the Size_Span is created and added to the p tag is because we need the actual size to be isolated so we can save it

                     var Size = document.createElement("p"); 

                     var Size_Span = document.createElement("span");

                     Size_Span.innerHTML = getSizebyValue(size).toUpperCase();

                     Size_Span.className = "size_details";

                     Size_Span.className += " size_"+product_design_number;

                     Size.innerHTML = "Size: ";

                     Size.appendChild(Size_Span);*/


         var price = document.createElement("td");

             price.className = "product-price";

             price.className += " size_details";

             var symbol = document.createElement('span');

             symbol.innerHTML = "$";

             var shirtprice = document.createElement('span');

              shirtprice.className = "shirt_price_"+ product_design_number;

             shirtprice.innerHTML = Order._Product_design_list[product_design_number]._price_per_shirt;

         var quantity = document.createElement("td");

             quantity.className = "product-quantity";    

              var divq = document.createElement("div");

                  divq.className = "cart-plus-minus"; 

                  divq.style.textAlign  = "center";

                  divq.style.margin = "auto";

                  var dec = document.createElement("div");

                      dec.className = "dec qtybutton";

                      dec.innerHTML = "-";

                      dec.addEventListener("click",function(event)
                      {

                          event.preventDefault();

                           var $button = $(this);

                            var oldValue = $button.parent().find("input").val();

                            if ($button.text() == "+") {

                                var newVal = parseFloat(oldValue) + 1;

                            } 

                            else {

                                // Don't allow decrementing below zero

                                if (oldValue > 0) {

                                    var newVal = parseFloat(oldValue) - 1;

                                } 

                                else {

                                    newVal = 0;

                                }

                            }

                            $button.parent().find("input").val(newVal);    

                            updateAfterAdd($button.parent().find("input")[0].id.replace("qtybutton_",""));                                             

                      });

                  var input = document.createElement("input");

                      input.type = "text";

                      input.value = "1";

                      input.id = "qtybutton_" + product_design_number + "_" + getSizebyValue(size).toUpperCase();

                      input.name = "qtybutton_" + product_design_number + "_" + getSizebyValue(size).toUpperCase();

                      input.className = "cart-plus-minus-box";

                      input.className += " size_details quantity_" + product_design_number;

                      input.addEventListener("click",function(event){

                          event.preventDefault();

                           updateAfterAdd(this.id.replace("qtybutton_",""));

                      }); 

                      input.addEventListener("change",function(event){

                          event.preventDefault();                        

                           updateAfterAdd(this.id.replace("qtybutton_",""));

                      });

                  var inc = document.createElement("div");

                      inc.className = "inc qtybutton";

                      inc.innerHTML = "+";

                      inc.addEventListener("click",function(event)
                      {

                          event.preventDefault();

                          var $button = $(this);

                            var oldValue = $button.parent().find("input").val();

                            if ($button.text() == "+") {

                                var newVal = parseFloat(oldValue) + 1;

                            } 

                            else {

                                // Don't allow decrementing below zero

                                if (oldValue > 0) {

                                    var newVal = parseFloat(oldValue) - 1;

                                } 

                                else {

                                    newVal = 0;

                                }

                            }

                            $button.parent().find("input").val(newVal);
                            
                           updateAfterAdd($button.parent().find("input")[0].id.replace("qtybutton_",""));   

                      });                    

         var subtotal = document.createElement("td");

             subtotal.className = "product-subtotal";

             subtotal.className += " size_details";

             subtotal.innerHTML="$";

             var itemtotal = document.createElement('span');

                 itemtotal.innerHTML = Order._Product_design_list[product_design_number]._price_per_shirt;

                 itemtotal.id = "total_" + product_design_number + "_" + getSizebyValue(size).toUpperCase();

                 itemtotal.className = "item_total_" + product_design_number;

         var remove = document.createElement("td");

             remove.className = "product-remove";

              //var close = document.createElement("a");

                  //close.href = "#";

                  var icon = document.createElement("i");

                  icon.className = "zmdi zmdi-close";

                  icon.style.cursor = "pointer";

                  //icon.style.postion = "relative";

                 // icon.style.margin = "auto";

                  icon.addEventListener("click",function(event){

                        event.preventDefault();

                        $(this).closest('tr').remove();
                    
                        addElements(this.parentNode.parentNode.id);
                        
                    }); 

                    /*h6.appendChild(a);

                 div.appendChild(h6);

                 div.appendChild(Brand);

                 div.appendChild(Stylenumber);

                 div.appendChild(Size);

             product.appendChild(div);

         maintr.appendChild(product);*/
        sizes.appendChild(sizes_name);

         maintr.appendChild(sizes);

             price.appendChild(symbol);

             price.appendChild(shirtprice);

         maintr.appendChild(price);

                 divq.appendChild(dec);

                 divq.appendChild(input);

                 divq.appendChild(inc);

             quantity.appendChild(divq);

         maintr.appendChild(quantity);

             subtotal.appendChild(itemtotal);

         maintr.appendChild(subtotal);

                 //close.appendChild(icon);

             //remove.appendChild(close);
             remove.appendChild(icon);

         maintr.appendChild(remove);

         tblBody.appendChild(maintr);

         //tbl.appendChild(tblBody);



         //this removed the selected size from the list of avaiable sizes (to add)

         var x = document.getElementById("sizesenables_" + product_design_number);

          for (var i = x.length - 1; i >= 0; i--) 

          {         

            if(x[i].value==size)

            {

                 x.remove(i);

            }         

          }

          showSizesEnables(product_design_number);

          sortTable(product_design_number);

          updateAfterAdd(product_design_number + "_" + getSizebyValue(size).toUpperCase());

        //  updateOrderInfo();

      }                                                  

}






function getSizebyValue(value)

{

    var size = "";

    switch(value) 

    {
        case "1":

             size = "NB";

            break;

        case "2":

            size = "0M";

            break;

        case "3":

             size = "3M";

            break;

        case "4":

            size = "6M";

            break;

        case "5":

             size = "12M";

            break;

        case "6":

            size = "18M";

            break;

        case "7":

             size = "24M";

            break;

        case "8":

            size = "2T";

            break;

        case "9":

             size = "3T";

            break;

        case "10":

            size = "4T";

            break;

        case "11":

             size = "5T";

            break;

         case "12":

            size = "5_6";

            break;

        case "13":

             size = "6T";

            break;

        case "14":

            size = "7";

            break;

        case "15":

             size = "YXS";

            break;

        case "16":

            size = "YS";

            break;

        case "17":

             size = "YM";

            break;

        case "18":

            size = "YL";

            break;

        case "19":

             size = "YXL";

            break;

         case "20":

            size = "XS";

            break;

        case "21":

            size = "S";

            break;

        case "22":

             size = "M";

            break;

        case "23":

            size = "L";

            break;

        case "24":

             size = "XL";

            break;

        case "25":

            size = "2XL";

            break;

        case "26":

             size = "3XL";

            break;

        case "27":

            size = "4XL";

            break;

        case "28":

            size = "5XL";

            break;

    }



    return size;

}



function getValuebySize(value)

{

    var size = "";

    switch(value) 

    {
        case "NB":

             size = "1";

            break;

        case "0M":

            size = "2";

            break;

        case "3M":

             size = "3";

            break;

        case "6M":

            size = "4";

            break;

        case "12M":

             size = "5";

            break;

        case "18M":

            size = "6";

            break;

        case "24M":

             size = "7";

            break;

        case "2T":

            size = "8";

            break;

        case "3T":

             size = "9";

            break;

        case "4T":

            size = "10";

            break;

        case "5T":

             size = "11";

            break;

        case "5_6":

             size = "12";

            break;

         case "6T":

             size = "13";

            break;

        case "7":

            size = "14";

            break;

        case "YXS":

             size = "15";

            break;

        case "YS":

            size = "16";

            break;

        case "YM":

             size = "17";

            break;

        case "YL":

            size = "18";

            break;

        case "YXL":

             size = "19";

            break;

        case "XS":

            size = "20";

            break;

        case "S":

            size = "21";

            break;

        case "M":

             size = "22";

            break;

        case "L":

            size = "23";

            break;

        case "XL":

             size = "24";

            break;

        case "2XL":

            size = "25";

            break;

        case "3XL":

             size = "26";

            break;

        case "4XL":

            size = "27";

            break;

        case "5XL":

            size = "28";

            break;
        
    }



    return size;

}





function normalizeYear(year){
    // Century fix
    var YEARS_AHEAD = 20;
    if (year<100){
        var nowYear = new Date().getFullYear();
        year += Math.floor(nowYear/100)*100;
        if (year > nowYear + YEARS_AHEAD){
            year -= 100;
        } else if (year <= nowYear - 100 + YEARS_AHEAD) {
            year += 100;
        }
    }
    return year;
}

function validatedate(){
   var expirydate = document.getElementById('expirydate');
    var match=$('#expirydate').val().match(/^\s*(0?[1-9]|1[0-2])\-(\d\d|\d{4})\s*$/);
    if (!match){
        //alert('Input string isn\'t match the expiration date format or date fragments are invalid.')
         expirydate.style.borderColor = "red";

            expirydate.focus();

              return false;
        //return;
    }
    var exp = new Date(normalizeYear(1*match[2]),1*match[1]-1,1).valueOf();
    var now=new Date();
    var currMonth = new Date(now.getFullYear(),now.getMonth(),1).valueOf();
    if (exp<=currMonth){
       expirydate.style.borderColor = "red";

            expirydate.focus();
        //alert('Expired');
    } else {
        //alert('Valid');
        expirydate.style.borderColor = "transparent";

          //expirydate.blur();

          return true;
    };
}


function validatesecuritycode()

{

  var securitycode = document.getElementById('securitycode');  

  if (card_type!= null)

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

 




//-------------------------------------------------------------------------------------------SHANE METHOD------------------------------------------------


function show_or_hide_shipping_details()
{  

    //this is an array of all the shipping details

    var shipping_details_arr = document.getElementsByClassName('shipping_details');

    var opacity = 1;

    //deciding if customer_details will be visible based on the value of ship_type

    if(document.getElementById('ship_type').value == "Pick Up")

    {

      for (var i = 0; i < shipping_details_arr.length; i++) 

      {
        shipping_details_arr[i].style.display= 'none';
      }

    }

    else

    {

      for (var i = 0; i < shipping_details_arr.length; i++) 

      {
        shipping_details_arr[i].style.display= 'block';

      }

    }

    calc_shipping_cost();

 }

function init_shipping_cost()
{ 
  
  var shipping_cost = 0.0;
  var temp_total = Number(document.getElementById('final_total').innerHTML);
  shipping_cost = (temp_total/100)*15; 
  document.getElementById('shipping_cost').innerHTML = "$" + shipping_cost.toFixed(2);
  displayTotals();
}


 function calc_shipping_cost(element)
{ 
  /*if (element == '')
  {
    var value = "Standard Shipping";
  }
  else if (element == null)
  {
    var value = "Expedited 1 Week";
  }
  else
  {*/
    var value = document.getElementById(element.id).value;
 // }
    
    //creating variable to hold the value before any shipping cost is applied.

    

    var temp_total = Number(document.getElementById('final_total').innerHTML);

    var shipping_cost = 0.0;

    //updating the total

    switch(value)

    {

        case "Expedited 1 Week":

            shipping_cost = (temp_total/100)*15; 

            temp_total += shipping_cost;
            //document.getElementById('shipping_cost').innerHTML = "$" + shipping_cost.toFixed(2);
            document.getElementById('shipping_cost_value').innerHTML = "$" + shipping_cost.toFixed(2);
            document.getElementById('shipping_cost_value2').innerHTML = "$" + shipping_cost.toFixed(2);
            var day1week = new Date(dateFormat(Date.now(),"ddd mmm dd yyyy HH:MM:ss"));
            Order._shipby = getDeliveryDateObj(day1week,1);
            break;

        case "Standard Shipping":
            //document.getElementById('shipping_cost').innerHTML = "$0.00";
            document.getElementById('shipping_cost_value').innerHTML = "$0.00";
            document.getElementById('shipping_cost_value2').innerHTML = "$0.00";
            var daystandard = new Date(dateFormat(Date.now(),"ddd mmm dd yyyy HH:MM:ss"));
            Order._shipby = getDeliveryDateObj(daystandard,4);
            shipping_cost = 0;

            break;

        case "Pick Up":
            //document.getElementById('shipping_cost').innerHTML = "$0.00";
            document.getElementById('shipping_cost_value').innerHTML = "$0.00";
            document.getElementById('shipping_cost_value2').innerHTML = "$0.00";
            var daypickup = new Date(dateFormat(Date.now(),"ddd mmm dd yyyy HH:MM:ss"));
            Order._shipby = getDeliveryDateObj(daypickup,4);
            shipping_cost = 0;

            break;

            

    }

    document.getElementById('ship_type_title').innerHTML = value; 
    document.getElementById('ship_type_title2').innerHTML = value; 
    Order._Customer.shippingType = value;
    ship_type = value;
    Order._shipping_cost = (Number(shipping_cost*1).toFixed(2)*1);
    displayTotals();

}

function displayTotals()
{
  
    if (Order._discount > 0)
    {
      Order._tax = Number(((((Order._subtotal-Order._discount)+Order._shipping_cost)* 8.25)/100).toFixed(2));  
      Order._total = (Number(Order._subtotal)-Order._discount) + Order._tax +Order._shipping_cost;
      document.getElementById('orderdiscount').innerHTML = "$-"+Order._discount;
      document.getElementById('orderdiscount').style.color = "red";
      document.getElementById('orderdiscount2').innerHTML = "$-"+Order._discount;
    }
    else
    {
     Order._tax = Number(((((Order._subtotal)+Order._shipping_cost)* 8.25)/100).toFixed(2));   
     Order._total = Number(Order._subtotal)+ Order._tax+ Order._shipping_cost;
     document.getElementById('orderdiscount').innerHTML = "";
     document.getElementById('orderdiscount').style.color = "none";
      document.getElementById('orderdiscount2').innerHTML = "";
    }
    
   document.getElementById('ordersubtotal').innerHTML = "$"+Order._subtotal;
    
    document.getElementById('ordertax').innerHTML = "$"+Order._tax;
    document.getElementById('ordertotal').innerHTML = "$"+(Number(Order._total)).toFixed(2);

    
    document.getElementById('ordertax2').innerHTML = "$"+Order._tax;
    document.getElementById('ordertotal2').innerHTML = "$"+(Number(Order._total)).toFixed(2);
   
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
    
    for (i = 0; i < listshipping.length; i++) 
    {
      if (listshipping[i].checked)
      {
        ship_type = listshipping[i].id;
      }
    }

    if (ship_type != "Pick Up")
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
    var expirydate = document.getElementById('expirydate').value;
    var securitycode = document.getElementById('securitycode').value;
    var billing_street = document.getElementById('billing_street').value;
    var billing_city = document.getElementById('billing_city').value;
    var billing_state = document.getElementById('billing_state').value;
    var billing_zip = document.getElementById('billing_zip').value;
    
    if (ship_type != "Pick Up")
    {
       if(cardfirstname != "" && cardlastname != ""  && cardnumber != "" && expirydate != "" && securitycode != "" && billing_street != "" && billing_city != "" && billing_state != "" && billing_zip != "" && firstname != "" && lastname != "" && email != "" && phone != "" && ship_street != "" && ship_city != "" && ship_zip != "" )
        {

          if (validatedate() && validateCCNum(document.getElementById('cardnumber')) && validatesecuritycode() && ValidateEmail() && ValidatePhone()) 
          {
            Order._Customer.firstname = firstname;
            Order._Customer.lastname = lastname;
            Order._Customer.cardfirstname = cardfirstname;
            Order._Customer.cardlastname = cardlastname;
            Order._Customer.company = company;
            Order._Customer.cardcompany = cardcompany;
            Order._Customer.email = email;
            Order._Customer.phone = phone;
            Order._Customer.shippingType = ship_type;
            Order._Customer.shippingStreet = ship_street;
            Order._Customer.shippingCity = ship_city;
            Order._Customer.shippingState = ship_state;
            Order._Customer.shippingZip = ship_zip;
            Order._Customer.billingStreet = billing_street;
            Order._Customer.billingCity = billing_city;
            Order._Customer.billingState = billing_state;
            Order._Customer.billingZip = billing_zip;
            Order._Customer.cardtype = document.getElementById("cardtype").value;
            Order._Customer.cardnumber = document.getElementById("cardnumber").value.substr(-4);
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

             ShowAlert('fieldsregisterformat',messageformaterror, 'danger','Checkout Format Error');
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
            
            if (expirydate == "")
            {
              messageemptyerror+= "'Expiry Date' ";
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
              ShowAlert('fieldsregisterempty',messageemptyerror, 'danger','Checkout Error');  
            }
        }
    }
    else
    {
       if(cardfirstname != "" && cardlastname != "" && cardnumber != "" && expirydate != "" && securitycode != "" && billing_street != "" && billing_city != "" && billing_state != "" && billing_zip != "" && firstname != "" && lastname != "" && email != "" && phone != "")
        {
          if (validatedate() && validateCCNum(document.getElementById('cardnumber')) && validatesecuritycode() && ValidateEmail() && ValidatePhone()) 
          {
            Order._Customer.firstname = firstname;
            Order._Customer.lastname = lastname;
            Order._Customer.company = company;
            Order._Customer.cardfirstname = cardfirstname;
            Order._Customer.cardlastname = cardlastname;
            Order._Customer.cardcompany = cardcompany;
            Order._Customer.email = email;
            Order._Customer.phone = phone;
            Order._Customer.shippingType = ship_type;
            Order._Customer.shippingStreet = '11119 Neeshaw Dr';
            Order._Customer.shippingCity = 'Houston';
            Order._Customer.shippingState = "Texas";
            Order._Customer.shippingZip = "77065";
            Order._Customer.billingStreet = billing_street;
            Order._Customer.billingCity = billing_city;
            Order._Customer.billingState = billing_state;
            Order._Customer.billingZip = billing_zip;
            Order._Customer.cardtype = document.getElementById("cardtype").value;
            Order._Customer.cardnumber = document.getElementById("cardnumber").value.substr(-4);

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

             ShowAlert('fieldsregisterformat',messageformaterrorstore, 'danger','Checkout Format Error');
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
            
            if (expirydate == "")
            {
              messageemptyerrorstore+= "'Expiry Date' ";
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

            ShowAlert('fieldsregisteremptystore',messageemptyerrorstore, 'danger','Checkout Error');
        }
    }

 
   return result;


}
function removeElementsByClass(className){
    var elements = document.getElementsByClassName(className);
    while(elements.length > 0){
        elements[0].parentNode.removeChild(elements[0]);
    }
}

function ShowAlert(id,message,type,title)
{
 removeElementsByClass("modal fade");
    var modalfade = document.createElement('div');
     //var x = Math.floor((Math.random() * 100000) + 1);
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
  modalheader.className = 'modal-header modal-header-'+type;
  modaldialog.appendChild(modalheader);

  var buttonclose = document.createElement("button");
  buttonclose.className = 'close';
  buttonclose.setAttribute("data-dismiss", "modal");
  buttonclose.setAttribute("aria-hidden", "true");
  buttonclose.setAttribute("value", "Close");
  buttonclose.innerHTML = '&times';
  modalheader.appendChild(buttonclose); 

  var modaltitle =  document.createElement('h4'); 
  modaltitle.className = 'modal-title';
  modaltitle.style.color="white";
  modalheader.appendChild(modaltitle); 

  var strong =  document.createElement('strong'); 
  strong.innerHTML = title;
  modaltitle.appendChild(strong);

  var alert = document.createElement('div');
  alert.className = 'alert alert-'+type;
  alert.innerHTML = message;
  modaldialog.appendChild(alert);
  

  document.getElementsByTagName('body')[0].appendChild(modalfade);

  $('#'+id).modal();
}

function ShowAlert2(id,message,type,title,body)
{
 removeElementsByClass("modal fade");
    var modalfade = document.createElement('div');
     //var x = Math.floor((Math.random() * 100000) + 1);
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
  modalheader.className = 'modal-header modal-header-'+type;
  modaldialog.appendChild(modalheader);

  var buttonclose = document.createElement("button");
  buttonclose.className = 'close';
  buttonclose.setAttribute("data-dismiss", "modal");
  buttonclose.setAttribute("aria-hidden", "true");
  buttonclose.setAttribute("value", "Close");
  buttonclose.innerHTML = '&times';
  modalheader.appendChild(buttonclose); 

  var modaltitle =  document.createElement('h4'); 
  modaltitle.className = 'modal-title';
  modaltitle.style.color="white";
  modalheader.appendChild(modaltitle); 

  var strong =  document.createElement('strong'); 
  strong.innerHTML = title;
  modaltitle.appendChild(strong);

  var pm = document.createElement("p");
  var hm = document.createElement("h4");
  hm.innerHTML = message;
  pm.appendChild(hm);

  var pb = document.createElement("p");  
  var hb = document.createElement("h4");
  hb.innerHTML = body;
  pb.appendChild(hb);

  var alert = document.createElement('div');
  alert.className = 'alert alert-'+type;
  pb.className = 'text-center';

  alert.appendChild(pm);
  alert.appendChild(pb);
  //alert.innerHTML = message;
  modaldialog.appendChild(alert);
  

  document.getElementsByTagName('body')[0].appendChild(modalfade);

  $('#'+id).modal();
}




/*function completorder()
{
 // if (enable_order_complete()) 
  //{
    save_order(); 
    //order_complete();
  }
  else
  {
    alert("please fill all fields");
  }
}*/



function save_order()

{

  

    get_order_details();

    //saving order details

    $.ajax({

        type: "post",

        url: "save_order.php",

        data:

        {

            Order: JSON.stringify(Order),

        },
        beforeSend: function() {          
        },

        success: function (data)

        {
            email_receipt();
        },

        error: function (data)

        {
            console.log("Error occured in save order.");
        }

    });

}

function email_receipt()

{

    $.ajax(

    {

        type: "post",

        url: "email_receipt.php",

        data : 
        {

            Order: JSON.stringify(Order),

        },
        beforeSend: function() {
          $(".loading").fadeIn("slow");
          $(".loading-text").fadeIn("slow");
        },

        success: function (data)
        {
          order_complete();
          $(".loading").fadeOut("slow");
          $(".loading-text").fadeOut("slow");
        },

        error: function (data)

        {
            console.log("Error occured in email_receipt!");
        }

    });

}

function charge_customer()
{
  
  var firstname = document.getElementById('cardfirstname').value;

  var lastname = document.getElementById('cardlastname').value;

  var cardnumber = document.getElementById('cardnumber').value;

  var expirydate = document.getElementById('expirydate').value;

  var securitycode = document.getElementById('securitycode').value;





  $.ajax({

    type: "POST",

    url: "../AutorizePHP/charge-credit-card.php",

    data: { 

            firstname:firstname,

            lastname:lastname,

            cardnumber: cardnumber,

            expirydate:expirydate,

            securitycode: securitycode,

            street: Order._Customer.billingStreet,

            city: Order._Customer.billingCity,

            state: Order._Customer.billingState,

            zipcode: Order._Customer.billingZip,

            amount: Order._total,

          },
     beforeSend: function() {         

      
     },

    success: function(result) 

    {

      if (result == "Ok")
      {
        save_order();
      }    
      else
      {
        ShowAlert2('transactionfail','We are unable to process your card', 'danger','Transaction Error','Please review the card information'); 
      }

    },

    error: function(result){

      alert("An error occured during charge_customer");

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
            ordercompleteinfo += Order._Customer.firstname + " " + Order._Customer.lastname;
            ordercompleteinfo +='                                      </li>';
            if (Order._Customer.company.length> 0)
            {
              ordercompleteinfo +='                                       <li>';
              ordercompleteinfo +='                                     <span>Comapny:</span>';
              ordercompleteinfo += Order._Customer.company;
              ordercompleteinfo +='                                      </li>';
            }
            ordercompleteinfo +='                                       <li>';
            ordercompleteinfo +='                                           <span>Address:</span>';
            ordercompleteinfo += Order._Customer.shippingStreet + ", " + Order._Customer.shippingCity +  ", " + Order._Customer.shippingState + ", " + Order._Customer.shippingZip ;
            ordercompleteinfo +='                                      </li>';
            ordercompleteinfo +='                                      <li>';
            ordercompleteinfo +='                                         <span>email:</span>';
            ordercompleteinfo += Order._Customer.email;
            ordercompleteinfo +='                                     </li>';
            ordercompleteinfo +='                                     <li>';
            ordercompleteinfo +='                                        <span>phone : </span>';
            ordercompleteinfo += Order._Customer.phone;
            ordercompleteinfo +='                                    </li>';
            ordercompleteinfo +='                               </ul>';
            ordercompleteinfo +='                           </div>';
            ordercompleteinfo +='                          <div class="bill-details pl-30">';
            ordercompleteinfo +='                              <h6 class="widget-title border-left mb-20">billing details</h6>';
            ordercompleteinfo +='                             <ul class="bill-address">';
            ordercompleteinfo +='                                       <li>';
            ordercompleteinfo +='                                           <span>Name:</span>';
            ordercompleteinfo += Order._Customer.firstname + " " + Order._Customer.lastname;
            ordercompleteinfo +='                                      </li>';
            ordercompleteinfo +='                                <li>';
            ordercompleteinfo +='                                    <span>Address:</span>';
            ordercompleteinfo += Order._Customer.billingStreet + ", " + Order._Customer.billingCity +  ", " + Order._Customer.billingState + ", " + Order._Customer.billingZip ;
            ordercompleteinfo +='                               </li>';
            ordercompleteinfo +='                              <li>';
            ordercompleteinfo +='                                 <span>email:</span>';
            ordercompleteinfo += Order._Customer.email;
            ordercompleteinfo +='                           </li>';
            ordercompleteinfo +='                           <li>';
            ordercompleteinfo +='                               <span>phone : </span>';
            ordercompleteinfo += Order._Customer.phone;
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

function setaddressvalues(element)
{   
    var AddressSelected = element.value.split('•');

    document.getElementById('billing_street').value = AddressSelected[1];
    document.getElementById('billing_city').value = AddressSelected[2];
    document.getElementById('billing_state').value = AddressSelected[3];
    document.getElementById('billing_zip').value = AddressSelected[4];

}

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
      var jsonOrder = JSON.stringify(Order);
      $.ajax({

          type: "POST",
          url: "sessionInfo.php",
          data: { 
                   value:"Order",
                   operation:"build",
                   Order : jsonOrder,
                },
          beforeSend: function()
          {
             $(".loading").fadeIn("slow");
             $(".loading-text").fadeIn("slow");
          },
          success: function(data)
          {
            $(".loading").fadeOut("slow");
            $(".loading-text").fadeOut("slow");
            document.getElementById("checkoutconfirm").innerHTML = data;//Order = JSON.parse(data); 
            document.getElementById('ship_type_title').innerHTML = Order._Customer.shippingType;
            document.getElementById('ship_type_title').innerHTML = ship_type;
          },
          error: function (error)
          {
              console.log("error in method ActiveCheckoutConfirm()");
              console.log(error);

          }

      });   
    }

}


/*
$('#cardnumber').on('keyup', function(e){
    var val = $(this).val();
    var newval = '';
    val = val.replace(/\s/g, '');
    
    if  (val.length > 0 && val.length < 16)
    {
      for(var i=0; i < val.length; i++) {
        if(i%4 == 0 && i > 0) newval = newval.concat(' ');
        newval = newval.concat(val[i]);
      }
      $(this).val(newval);

      this.focus();
      this.style.borderColor = "red";
    
    }
    else
    {
      var card = $(this).val();
      $(this).val(card.substring(0, 19));
       this.style.border = "1px solid #26c4ff";
        this.blur();
    }
    
  });*/


  
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

function ValidateEmail2()  
{   
  var email = document.getElementById('email');  

  if (card_type!= null)

  {
    var myRe = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    var myArray = myRe.exec(email.value);

    if(email.value!=myArray)

    {

      email.focus();

        email.style.borderColor = "red";  

      return false;



    }

    else

    {

      email.style.borderColor = "transparent"; 

      //email.blur();

      return true;  

    }

  }

  else

  {

    email.focus();

      email.style.borderColor = "red"; 

    return false;

  } 
}  


function ValidatePhone()  
{   
  var phone = document.getElementById('phone');  

  if (card_type!= null)

  {
    //var myRe = /^[0-9]{12}$/;
    var myRe = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;

    var myArray = myRe.exec(phone.value);

    if(phone.value!=myArray)

    {

      phone.focus();

        phone.style.borderColor = "red";  

      return false;



    }

    else

    {

      phone.style.borderColor = "transparent"; 

      //email.blur();

      return true;  

    }

  }

  else

  {

    phone.focus();

      phone.style.borderColor = "red"; 

    return false;

  } /*return true;*/

  
}  





function validatepromocode()
{
  var promocodeentered = document.getElementById("promocode").value;
  var promocodealert = document.getElementById("promocodealert");
  var validpromo = false;

  if (promocodeentered.length> 0)
  {
     $.ajax({

        type: "POST",

        url: "generalInfo.php",

        data: { 
                 table:"promocode",

                 clave:promocodeentered,
              },

        success: function(data)

        {
            var promocode = JSON.parse(data); 
           if (promocode == null)
           {
           	  promocodealert.style.display = "none";
              ShowAlert('promocodeexist',"The PROMO CODE entered is not valid!.", 'danger','PROMO CODE ERROR');  
           }
           else
           {
             
              var day = new Date();
              var date2 = new Date(promocode.expirationdate);
              var diffMS = new Date(date2.getTime() - day.getTime());
              
                //console.log(diffMS + ' ms');

                var diffS = diffMS / 1000;    

                if (diffS < 0)
                {
                  promocodealert.style.display = "none";
                  ShowAlert('promocodeexpired',"The PROMO CODE entered was expired!.", 'danger','PROMO CODE ERROR');  
                }
                else
                {
                  if (Order._subtotal >= Number(promocode.minimumspend) && Order._subtotal <= Number(promocode.maximumspend) )
                  {
                      if (promocode.limitpercoupon > 0)
                      {
                         $.ajax({

                            type: "POST",

                            url: "generalInfo.php",

                            data: { 
                                     table:"promocodeused",

                                     clave:Order._Customer.email,
                                  },

                            success: function(data)
                            {
                              if (data == 0)
                              {
                                if (promocode.type == 'Cart % Discount')
                                {
                                  Order._discount = (Order._subtotal*promocode.amount/100);
                                }
                                else if(promocode.type == "Cart Discount")
                                {
                                  Order._discount = value;
                                }
                                else if (promocode.type = "Product Discount")
                                {
                                  ShowAlert('promocodeerrorinternal',"No PROMO CODE Product Discount to apply!.", 'danger','PROMO CODE ERROR'); 
                                }
                                else if (promocode.type = "Product % Discount")
                                {
                                  ShowAlert('promocodeerrorinternal',"No PROMO CODE Product % Discount to apply!.", 'danger','PROMO CODE ERROR'); 
                                }
                                else
                                {
                                  ShowAlert('promocodeerrorinternal',"No PROMO CODE to apply!.", 'danger','PROMO CODE ERROR'); 
                                }
                                document.getElementById("orderdiscount").innerHTML= "$"+Order._discount;
                                displayTotals();
                                Order._promocode = promocode;
                                promocodealert.style.display = "block";
                                document.getElementById("promocode").value = "";
                              }
                              else
                              {
                              	promocodealert.style.display = "none";
                                ShowAlert('promocodeused',"The PROMO CODE entered was used for you!.", 'danger','PROMO CODE ERROR');  
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
                      	  promocodealert.style.display = "none";
                          ShowAlert('promocodeexpired',"The PROMO CODE LIMIT FINISH!.", 'danger','PROMO CODE ERROR');  
                      }
                      
                  }
                  else
                  {
                  	promocodealert.style.display = "none";
                    ShowAlert('promocodespend',"The spend value for this code is between "+promocode.minimumspend+" and "+promocode.maximumspend+" dolars!.", 'danger','PROMO CODE ERROR');  
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
    ShowAlert('promocodeempty',"You have to enter a PROMO CODE!.", 'danger','PROMO CODE ERROR');  
  }
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


const isNumericInput = (event) => {
  const key = event.keyCode;
  return ((key >= 48 && key <= 57) || // Allow number line
    (key >= 96 && key <= 105) // Allow number pad
  );
};

const isModifierKey = (event) => {
  const key = event.keyCode;
  return (event.shiftKey === true || key === 35 || key === 36) || // Allow Shift, Home, End
    (key === 8 || key === 9 || key === 13 || key === 46) || // Allow Backspace, Tab, Enter, Delete
    (key > 36 && key < 41) || // Allow left, up, right, down
    (
      // Allow Ctrl/Command + A,C,V,X,Z
      (event.ctrlKey === true || event.metaKey === true) &&
      (key === 65 || key === 67 || key === 86 || key === 88 || key === 90)
    )
};

const enforceFormat = (event) => {
  // Input must be of a valid number format or a modifier key, and not longer than ten digits
  if(!isNumericInput(event) && !isModifierKey(event)){
    event.preventDefault();
  }
};

const formatToPhone = (event) => {
  if(isModifierKey(event)) {return;}

  // I am lazy and don't like to type things more than once
  const target = event.target;
  const input = event.target.value.replace(/\D/g,'').substring(0,10); // First ten digits of input only
  const zip = input.substring(0,3);
  const middle = input.substring(3,6);
  const last = input.substring(6,10);

  if(input.length > 6){target.value = `${zip}-${middle}-${last}`;}
  else if(input.length > 3){target.value = `${zip}-${middle}`;}
  else if(input.length > 0){target.value = `${zip}`;}
};

const inputElement = document.getElementById('phone');
inputElement.addEventListener('keydown',enforceFormat);
inputElement.addEventListener('keyup',formatToPhone);



$('#expirydate').on('keyup', function(e){
    var val = $(this).val();
    var newval = '';
    val = val.replace(/\s/g, '');
    
    if  (val.length > 0 && val.length < 5)
    {
      for(var i=0; i < val.length; i++) 
      {
        if(i%2 == 0 && i > 0) newval = newval.concat('-');
        newval = newval.concat(val[i]);
      }
      $(this).val(newval);

      this.focus();
      this.style.borderColor = "red";
    
    }
    else
    {
      var card = $(this).val();
      $(this).val(card.substring(0, 5));
       this.style.border = "1px solid #26c4ff";
        this.blur();
    }
    
  });


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
