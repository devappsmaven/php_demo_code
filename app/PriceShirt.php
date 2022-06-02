<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class PriceShirt extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['RANGEFROM','RANGETO','_INFANT','_INFANTWHITE','_TODDLER','_TODDLERWHITE','_YOUTH','_YOUTHWHITE','_ADULT','_ADULTWHITE','_2xl','_2xlWHITE','_3xl','_3xlWHITE','_4xl','_4xlWHITE','_5xl','_5xlWHITE','_ONE_SIZE','_ONE_SIZEWHITE'];
    protected $dates = ['created_at','updated_at'];

    public function products()
    {
        return $this->belongsToMany('App\Product', 'product_price_shirt', 'price_shirt_id', 'product_id');
    }
}
