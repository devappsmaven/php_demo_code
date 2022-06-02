<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use App\Traits\Rateable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Product extends Model implements AuditableContract
{
    use Auditable, Rateable;
    protected $fillable= ['stylenumber','fabric','visibility','name','slug','price','min_quantity','status','image','description','brand','sizechartimage','sizechartdescription'
                            ,'frontimage','rightimage','backimage','leftimage','frontenable','rightenable','backenable','leftenable', 'ispersonalize','isembroidery','isexpedited'
    /*,'frontimage','frontenable','frontenable','frontguidelineshorizontal','frontguidelinesvertical','frontguidelinesyouth','frontguidelinesadult','frontguidelinesleftchest','frontwidth','frontheight','frontleft','fronttop'
    ,'rightimage','rightenable','rightguidelineshorizontal','rightguidelinesvertical','rightguidelinesyouth','rightguidelinesadult','rightguidelinesleftchest','rightwidth','rightheight','rightleft','righttop'
    ,'backimage','backenable','backguidelineshorizontal','backguidelinesvertical','backguidelinesyouth','backguidelinesadult','backguidelinesleftchest','backwidth','backheight','backleft','backtop'
    ,'leftimage','leftenable','leftguidelineshorizontal','leftguidelinesvertical','leftguidelinesyouth','leftguidelinesadult','leftguidelinesleftchest','leftwidth','leftheight','leftleft','lefttop'*/
    ,'_INFANT','_INFANTWHITE','_TODDLER','_TODDLERWHITE','_YOUTH','_YOUTHWHITE','_ADULT','_ADULTWHITE','_2xl','_2xlWHITE','_3xl','_3xlWHITE','_4xl','_4xlWHITE','_5xl','_5xlWHITE','_ONE_SIZE','_ONE_SIZEWHITE','parent_id','color_id','price_quote', 'c_image_url'];
    protected $dates = ['created_at','updated_at'];

    public function color()
    {
        return $this->hasOne('App\Color', 'id', 'color_id');
    }

    public function parent()
    {
        return $this->hasOne('App\Product', 'id', 'parent_id');
    }

    public function sizes()
    {
        return $this->belongsToMany('App\Size', 'product_size', 'product_id', 'size_id');
    }

    public function relatedproducts()
    {
        return $this->belongsToMany('App\Product', 'related_products', 'product_id', 'related_product_id');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product', 'related_products', 'related_product_id', 'product_id');
    }

    public function sizeschart()
    {
        return $this->belongsToMany('App\SizeChart', 'product_size_chart', 'product_id', 'size_chart_id');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'product_categories', 'product_id', 'category_id');
    }

    public function subcategories()
    {
        return $this->belongsToMany('App\SubCategory', 'product_categories', 'product_id', 'subcategory_id');
    }

    public function aditionalimages()
    {
        return $this->belongsToMany('App\AditionalImage', 'product_aditional_image', 'product_id', 'aditional_image_id');
    }

    public function priceshirt()
    {
        return $this->belongsToMany('App\PriceShirt', 'product_price_shirt', 'product_id', 'price_shirt_id');
    }

    public function design()
    {
        return $this->hasOne('App\Design', 'id', 'design_id');
    }

    public function comments()
    {
        return $this->belongsToMany('App\Comment', 'products_comments', 'product_id', 'comment_id');
    }

    public function sides()
    {
        return $this->belongsToMany('App\Side', 'products_sides', 'product_id', 'side_id')->withPivot('image','enable');
    }

    public function printareas()
    {
        return $this->belongsToMany('App\PrintArea', 'products_print_areas', 'product_id', 'print_area_id');
    }

    public function favorite_to_users()
    {
        return $this->belongsToMany('App\User', 'product_user', 'product_id', 'user_id');
    }

    public function colors()
    {
        return $this->belongsToMany('App\Color', 'product_colors', 'product_id', 'color_id')->withPivot('childproduct_id', 'min_quantity');
    }

    public function product_sides()
    {
        return $this->hasMany('App\ProductsSide', 'product_id', 'id');
    }

    public function childProducts()
    {
        return $this->hasMany('App\Product','parent_id');
    }

    public function category()
    {
        return $this->hasOne('App\ProductCategory', 'product_id', 'id');
    }

    // public function child_product()
    // {
    //     return $this->hasMany('App\Product','user_id');
    // }
}
