<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Category extends Model implements AuditableContract 
{
    use Auditable;
    protected $fillable= ['name','status','description','filename','background','author','type', 'slug','visibility','order'];
    protected $dates = ['created_at','updated_at'];

    public function SubCategories()
    {
        return $this->hasMany('App\SubCategory','category_id');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product', 'product_categories', 'category_id', 'product_id');
    }

    public function designs()
    {
        return $this->hasMany('App\Designs','category_id');
    }

    public function posts()
    {
        return $this->belongsToMany('App\Post', 'categories_posts', 'category_id', 'post_id');
    }

    public function gallerys()
    {
        return $this->belongsToMany('App\Gallery', 'galleries_categories', 'category_id', 'gallery_id');
    }
}
