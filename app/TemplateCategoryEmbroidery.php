<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;


class TemplateCategoryEmbroidery extends Model implements AuditableContract 
{
    use Auditable;
    protected $fillable= ['title','filename','status','slug'];
    protected $dates = ['created_at','updated_at'];

    public function SubCategoriesEmbriodery()
    {
        return $this->hasMany('App\TemplateSubCategoryEmbroidery','category_embroidery_id');
    }
}
