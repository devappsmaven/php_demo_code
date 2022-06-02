<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;


class ClipartCategory extends Model implements AuditableContract 
{
    use Auditable;
    protected $fillable= ['title','filename','status','slug'];
    protected $dates = ['created_at','updated_at'];

    public function SubCategories()
    {
        return $this->hasMany('App\ClipartSubCategory','category_id');
    }
}
