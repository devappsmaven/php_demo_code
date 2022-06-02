<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class SubCategory extends Model implements AuditableContract
{
    use Auditable;
    protected $table = 'subcategories';
    protected $fillable= ['name','status','description','category_id','filename','background','author','type','slug','visibility','order'];
    protected $dates = ['created_at','updated_at'];

    public function Category()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product', 'product_categories', 'subcategory_id', 'product_id');
    }

    public function designs()
    {
        return $this->hasMany('App\Designs','subcategory_id');
    }
}
