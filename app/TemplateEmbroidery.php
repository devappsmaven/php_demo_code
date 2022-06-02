<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class TemplateEmbroidery extends Model implements AuditableContract 
{
    use Auditable;
    protected $fillable= ['title','filename','status','slug','type'];
    protected $dates = ['created_at','updated_at'];

    public function CategoryEmbroidery()
    {
        return $this->belongsTo('App\TemplateCategoryEmbroidery','category_embroidery_id','id');
    }

    public function SubCategoryEmbroidery()
    {
        return $this->belongsTo('App\TemplateSubCategoryEmbroidery','subcategory_embroidery_id','id');
    }

    public function colors()
    {
        return $this->belongsToMany('App\Color', 'template_embroidery_colors', 'template_embroidery_id', 'color_id');
    }
}
