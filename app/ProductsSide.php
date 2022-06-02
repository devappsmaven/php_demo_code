<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class ProductsSide extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['product_id','side_id','image','enable'];
    protected $dates = ['created_at','updated_at'];

    // public function sides()
    // {
    //     return $this->belongsToMany('App\Product', 'products', 'side_id', 'product_id')->withPivot('image','enable');
    // }
}
