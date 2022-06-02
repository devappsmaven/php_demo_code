<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;


class ClipartCategoryEmbroidery extends Model implements AuditableContract 
{
    use Auditable;
    protected $fillable= ['title','filename','status','slug'];
    protected $dates = ['created_at','updated_at'];

    public function SubCategoriesEmbriodery()
    {
        return $this->hasMany('App\ClipartSubCategoryEmbroidery','category_embroidery_id');
    }
}
