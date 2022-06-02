<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class RelatedProduct extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['product_id','related_product_id'];
    protected $dates = ['created_at','updated_at'];
    public function products()
    {
        return $this->belongsTo('App\Product', 'related_product', 'related_product_id', 'product_id');
    }
}
