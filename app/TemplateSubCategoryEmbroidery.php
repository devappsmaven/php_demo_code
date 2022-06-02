<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;


class TemplateSubCategoryEmbroidery extends Model implements AuditableContract 
{
    use Auditable;
    protected $fillable= ['title','filename','status','slug'];
    protected $dates = ['created_at','updated_at'];

    public function TemplatesEmbriodery()
    {
        return $this->hasMany('App\TemplateEmbroidery','subcategory_embroidery_id');
    }

    public function CategoryEmbroidery()
    {
        return $this->belongsTo('App\TemplateCategoryEmbroidery','category_embroidery_id','id');
    }
}
