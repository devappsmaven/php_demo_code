<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;


class ClipartSubCategory extends Model implements AuditableContract 
{
    use Auditable;
    protected $fillable= ['title','filename','status','slug'];
    protected $dates = ['created_at','updated_at'];

    public function Cliparts()
    {
        return $this->hasMany('App\Clipart','subcategory_id');
    }

    public function Category()
    {
        return $this->belongsTo('App\ClipartCategory','category_id','id');
    }
}
