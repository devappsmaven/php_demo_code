<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class ProductCategory extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['product_id','category_id','subcategory_id'];
    protected $dates = ['created_at','updated_at'];

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'product_categories', 'product_id', 'category_id');
    }
}