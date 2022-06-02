<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class ClipartEmbroidery extends Model implements AuditableContract 
{
    use Auditable;
    protected $fillable= ['title','filename','status','slug','type','editable'];
    protected $dates = ['created_at','updated_at'];

    public function CategoryEmbroidery()
    {
        return $this->belongsTo('App\ClipartCategoryEmbroidery','category_embroidery_id','id');
    }

    public function SubCategoryEmbroidery()
    {
        return $this->belongsTo('App\ClipartSubCategoryEmbroidery','subcategory_embroidery_id','id');
    }

    public function colors()
    {
        return $this->belongsToMany('App\Color', 'clipart_embroidery_colors', 'clipart_embroidery_id', 'color_id');
    }
}
