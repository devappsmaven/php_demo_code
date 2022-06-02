<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Size extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['name','status','orden','price','quantity'];
    protected $dates = ['created_at','updated_at'];

    public function products()
    {
        return $this->belongsToMany('App\Product', 'product_size', 'size_id', 'product_id');
    }

    public function designs()
    {
        return $this->belongsToMany(Design::class)->widthTimestamps()->withPivot(['price']);
    }
}
