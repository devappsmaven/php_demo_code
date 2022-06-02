<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class FontCategory extends Model implements AuditableContract 
{
    use Auditable;
    protected $fillable= ['name','status','description'];
    protected $dates = ['created_at','updated_at'];

    public function Fonts()
    {
        return $this->hasMany('App\Font','fontcategory_id');
    }
}
