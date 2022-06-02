<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Clipart extends Model implements AuditableContract 
{
    use Auditable;
    protected $fillable= ['title','filename','status','slug','type'];
    protected $dates = ['created_at','updated_at'];

    public function Category()
    {
        return $this->belongsTo('App\ClipartCategory','category_id','id');
    }

    public function SubCategory()
    {
        return $this->belongsTo('App\ClipartSubCategory','subcategory_id','id');
    }

    public function colors()
    {
        return $this->belongsToMany('App\Color', 'clipart_colors', 'clipart_id', 'color_id');
    }
}
