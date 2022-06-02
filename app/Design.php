<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Design extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['title','name','displayname','filename','selling_price','number_shirts','price_per_shirt','total','comment','editable','status','type','view_count','defaultside','background','personalizetype', 'personalizelist','num_shirts'];
    protected $dates = ['created_at','updated_at'];

    public function Category()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }

    public function SubCategory()
    {
        return $this->belongsTo('App\SubCategory','subcategory_id','id');
    }

    public function User()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

    public function Product()
    {
        return $this->belongsTo('App\Product','product_id','id');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Order', 'orders_designs', 'design_id', 'order_id');
    }

    public function sizes()
    {
        return  $this->belongsToMany('App\Size')->using('App\DesignSize')->withPivot(['quantity','price','ammount','created_at','updated_at']);
    }

    public function personalizelist()
    {
        return $this->hasMany('App\Personalize','design_id');
    }

    public function designsides()
    {
        return $this->hasMany('App\DesignSide','design_id');
    }

    public function comments()
    {
        return $this->belongsToMany('App\Comment', 'designs_comments', 'design_id', 'comment_id');
    }

    public function favorite_to_users()
    {
        return $this->belongsToMany('App\User', 'design_user', 'design_id', 'user_id');
    }

    public function design_sizes()
    {
        return $this->belongsToMany('App\Design', 'design_size', 'design_id', 'size_id');
    }

    public function products()
    {
        return $this->hasOne('App\Product', 'id', 'product_id');
    }

    public function color()
    {
        return $this->hasOne('App\Color', 'id', 'color_id');
    }

    public function size()
    {
        return $this->hasOne('App\Size', 'id', 'size_id');
    }

    public function design_side()
    {
        return $this->hasOne('App\DesignSide','design_id');
    }
}
