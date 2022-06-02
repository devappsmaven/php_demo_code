<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Cart extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['user_id','product_id','size_id','design_id','quantity','price_per_item'];
    protected $dates = ['created_at','updated_at'];

    public function sizes()
    {
        return $this->belongsToMany('App\Size', 'product_size', 'product_id', 'size_id');
    }

    public function sizeschart()
    {
        return $this->belongsToMany('App\SizeChart', 'product_size_chart', 'product_id', 'size_chart_id');
    }

    public function designs()
    {
        return $this->hasOne('App\Design', 'id', 'design_id');
    }

    public function product()
    {
        return $this->hasOne('App\Product', 'id', 'product_id');
    }

    public function size()
    {
        return $this->hasOne('App\Size', 'id', 'size_id');
    }

    public function design_sides()
    {
        return $this->hasMany('App\DesignSide', 'design_id', 'design_id');
    }
}
