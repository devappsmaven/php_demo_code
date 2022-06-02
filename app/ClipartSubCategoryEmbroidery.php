<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;


class ClipartSubCategoryEmbroidery extends Model implements AuditableContract 
{
    use Auditable;
    protected $fillable= ['title','filename','status','slug'];
    protected $dates = ['created_at','updated_at'];

    public function ClipartsEmbriodery()
    {
        return $this->hasMany('App\ClipartEmbroidery','subcategory_embroidery_id');
    }

    public function CategoryEmbroidery()
    {
        return $this->belongsTo('App\ClipartCategoryEmbroidery','category_embroidery_id','id');
    }
}
