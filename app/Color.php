<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Color extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['name','file','status','hex','order'];
    protected $dates = ['created_at','updated_at'];

    public function clipart()
    {
        return $this->belongsToMany('App\Clipart', 'clipart_colors', 'color_id', 'clipart_id');
    }

    public function themes()
    {
        return $this->belongsToMany('App\Theme', 'themes_colors', 'color_id', 'theme_id');
    }

    public function product()
    {
        return $this->hasOne('App\Product', 'id', 'product_id');
    }

    public function object()
    {
        return $this->belongsTo('App\Object','object_id','id');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product', 'product_colors', 'color_id', 'product_id')->withPivot('childproduct_id','min_quantity');
    }

    public function product_sides()
    {
        return $this->hasMany('App\ProductsSide', 'product_id', 'id');
    }
}
