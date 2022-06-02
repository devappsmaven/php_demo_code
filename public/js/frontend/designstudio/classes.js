//equivalente to class Orderes
function Orders(Order_Number) 
{
  this._Order_Number = Order_Number;
  this._subtotal = 0;
  this._tax = 0;
  this._shipping_cost = 0;
  this._discount = 0;
  this._total = 0;
  this._status = "created";
  this._date = null;
  this._shipby = null;
  this._promocode = ' ';
  this._Product_design_list = [];
  this._Customer = null;

}


Orders.prototype.searchelement = function(value) 
{
  var pos = 0;
  for (var i = 0; i < this._Product_design_list.length; i++) {
    
    if (this._Product_design_list[i]._design._design_name === value)
    {
      return pos;
    }
    pos++;
  }
  
    
  
    
}

Orders.prototype.addProductDesign = function(element) {
  var arrayproductdesign = [];

    if (this._Product_design_list)
    {
      arrayproductdesign =  this._Product_design_list;  

    }
    
    arrayproductdesign.push(element);

    this._Product_design_list = arrayproductdesign;
}


Orders.prototype.deleteProductDesign = function(pos) {


    var arrayproductdesign = [];
    if (this._Product_design_list)
    {
      arrayproductdesign =  this._Product_design_list;  
    }
    
    arrayproductdesign.splice(pos, 1);   
   
  this._Product_design_list = arrayproductdesign;
}





 Orders.prototype.Total = function() 
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
  }



//equivalente to class Customer
function Customer() 
{
  this._username = "";
  this._Id = null;
  this._Name = "";
  this._Phone = "";
  this._Email = "";
}

//equivalente to class Side
function Side() 
{
  this._Id = "";
  this._name = "";
  this._ColorList = [];
  this._ColorPersonalizeList = [];
  this.width_div = 0;
  this._height_div = 0;
  this._border_color_div = "";
  this._width_canvas = 0;
  this._height_canvas = 0;
  this._left = 0;
  this._top = 0;
  this._border_color_canvas = "";
  this._json = "";
  this._toDataURL = "";
  this._design_image = "";
  this._design_product_image = "";
  this._product_image = "";
  this._isempty = true;
}

 Side.prototype.addColor = function(color) 
{
    var arraycolors = [];
    arraycolors = this._ColorList;
    list.push(color);
    this._ColorList = arraycolors;
}


//equivalente to class Size
function Size() 
{
  this._size_name = "";
  this._quantity = 0;
  this._Id = "null";
}


//equivalente to class Design
function Design() 
{
  var arrayside = [];

    var front = new Side();
        front._Id = 1;
        front._name = 'front';
    
        arrayside.push(front);

    var right = new Side();
        right._Id = 2;
        right._name = 'right';
    
        arrayside.push(right);

    var back = new Side();
        back._Id = 3;
        back._name = 'back';
    
        arrayside.push(back);

    var left = new Side();
        left._Id = 4;
        left._name = 'left';
    
        arrayside.push(left);

  this._sideList = arrayside;
  this._design_name = null;
  this._Id = null;
}


 Design.prototype.getObjectById = function(id) 
{
    for (var i = this._sideList.length - 1; i >= 0; i--) 
    {
      if (this._sideList[i]._Id == id)
      {      
          return this._sideList[i];  
      }
      
    }
  }

//equivalente to class Size
function Product_Design() 
{
  this._Id = null;
  this._design = null;
  this._Product = null;
  var sizeList = [];
    //infant
    var nb0m = new Size();
    nb0m._size_name = 'NB';
    nb0m._quantity = 0;
    nb0m._Id = 1;
    sizeList.push(nb0m);

    var _0m = new Size();
    _0m._size_name = '0M';
    _0m._quantity = 0;
    _0m._Id = 2;
    sizeList.push(_0m);

    var _3m = new Size();
    _3m._size_name = '3M';
    _3m._quantity = 0;
    _3m._Id = 3;
    sizeList.push(_3m);

    var _6m = new Size();
    _6m._size_name = '6M';
    _6m._quantity = 0;
    _6m._Id = 4;
    sizeList.push(_6m);

    var _12m = new Size();
    _12m._size_name = '12M';
    _12m._quantity = 0;
    _12m._Id = 5;
    sizeList.push(_12m);

    var _18m = new Size();
    _18m._size_name = '18M';
    _18m._quantity = 0;
    _18m._Id = 6;
    sizeList.push(_18m);

    var _24m = new Size();
    _24m._size_name = '24M';
    _24m._quantity = 0;
    _24m._Id = 7;
    sizeList.push(_24m);

    //toddler

    var _2t = new Size();
    _2t._size_name = '2T';
    _2t._quantity = 0;
    _2t._Id = 8;
    sizeList.push(_2t);

    var _3t = new Size();
    _3t._size_name = '3T';
    _3t._quantity = 0;
    _3t._Id = 9;
    sizeList.push(_3t);

    var _4t = new Size();
    _4t._size_name = '4T';
    _4t._quantity = 0;
    _4t._Id = 10;
    sizeList.push(_4t);

    var _5t = new Size();
    _5t._size_name = '5T';
    _5t._quantity = 0;
    _5t._Id = 11;
    sizeList.push(_5t);

    var _5_6t = new Size();
    _5_6t._size_name = '5_6';
    _5_6t._quantity = 0;
    _5_6t._Id = 12;
    sizeList.push(_5_6t);

    var _6t = new Size();
    _6t._size_name = '6T';
    _6t._quantity = 0;
    _6t._Id = 13;
    sizeList.push(_6t);

    var _7t = new Size();
    _7t._size_name = '7';
    _7t._quantity = 0;
    _7t._Id = 14;
    sizeList.push(_7t);

    //youth

    var yxs = new Size();
    yxs._size_name = 'YXS';
    yxs._quantity = 0;
    yxs._Id = 15;
    sizeList.push(yxs);

    var ys = new Size();
    ys._size_name = 'YS';
    ys._quantity = 0;
    ys._Id = 16;
    sizeList.push(ys);

    var ym = new Size();
    ym._size_name = 'YM';
    ym._quantity = 0;
    ym._Id = 17;
    sizeList.push(ym);

    var yl = new Size();
    yl._size_name = 'YL';
    yl._quantity = 0;
    yl._Id = 18;
    sizeList.push(yl);

    var yxl = new Size();
    yxl._size_name = 'YXL';
    yxl._quantity = 0;
    yxl._Id = 19;
    sizeList.push(yxl);

    //adult

   

    var xs = new Size();
    xs._size_name = 'XS';
    xs._quantity = 0;
    xs._Id = 20;
    sizeList.push(xs);

    var s = new Size();
    s._size_name = 'S';
    s._quantity = 0;
    s._Id = 21;
    sizeList.push(s);

    var m = new Size();
    m._size_name = 'M';
    m._quantity = 0;
    m._Id = 22;
    sizeList.push(m);

    var l = new Size();
    l._size_name = 'L';
    l._quantity = 0;
    l._Id = 23;
    sizeList.push(l);

    var xl = new Size();
    xl._size_name = 'XL';
    xl._quantity = 0;
    xl._Id = 24;
    sizeList.push(xl);

    var xxl = new Size();
    xxl._size_name = '2XL';
    xxl._quantity = 0;
    xxl._Id = 25;
    sizeList.push(xxl);

    var xxxl = new Size();
    xxxl._size_name = '3XL';
    xxxl._quantity = 0;
    xxxl._Id = 26;
    sizeList.push(xxxl);

    var xxxxl = new Size();
    xxxxl._size_name = '4XL';
    xxxxl._quantity = 0;
    xxxxl._Id = 27;
    sizeList.push(xxxxl);

    var xxxxxl = new Size();
    xxxxxl._size_name = '5XL';
    xxxxxl._quantity = 0;
    xxxxxl._Id = 28;
    sizeList.push(xxxxxl);

    var onesize = new Size();
    onesize._size_name = 'ONE_SIZE';
    onesize._quantity = 0;
    onesize._Id = 29;
    sizeList.push(onesize);

    this._sizeList = sizeList;

    this._sizepersonalizeList = sizeList;

    this._personalize = null;

    this._personalizetype = "";

     this._type = "Designstudio";

   this._status = null;

   this._num_shirts = 0;

   this._price_per_shirt = 0;

  this._total = 0;


 Product_Design.prototype.getObjectByName = function(value) 
  {
    for (var i = this._sizeList.length - 1; i >= 0; i--) 
    { 
      if (this._sizeList[i]._size_name == value /*|| this._sizeList[i]._size_name == value.substring(1)*/)
      {   
        return this._sizeList[i];  
      }
      
    }
  }



Product_Design.prototype.numshirts = function() 
  {
    var numshirts = 0; 
    if (this._sizeList)
    {
      for (var i = this._sizeList.length - 1; i >= 0; i--) 
      {
        if (this._sizeList[i]._quantity > 0)
        {      
            numshirts+= this._sizeList[i]._quantity;
        }
        
      }
    }
    
      this._num_shirts = numshirts;
     return numshirts;
  }

Product_Design.prototype.sizes2 = function() 
  {
    var sizes = "|"; 
    for (var i = 0; i < this._sizeList.length; i++) 
    {
    
      if (this._sizeList[i]._quantity > 0)
      {      
          sizes+= this._sizeList[i]._size_name + "|";
      }
      
    }
    return sizes;  
  }
}


Product_Design.prototype.sizes = function() 
{
  var sizes = ""; 
  for (var i = 0; i < this._sizeList.length; i++) 
  {
  
    if (this._sizeList[i]._quantity > 0)
    {      
        sizes+= this._sizeList[i]._size_name + ": " + this._sizeList[i]._quantity + ", ";
    }
    
  }
  return sizes;  
}




function Color() 
{
  this._Hex = null;
  this._Name = null;
}
