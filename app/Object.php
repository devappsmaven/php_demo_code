<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Object extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['type','value'];
    protected $dates = ['created_at','updated_at'];

    public function design()
    {
        return $this->belongsTo('App\Design','design_id','id');
    }

    public function colors()
    {
        return $this->hasMany('App\Color','object_id');
    }
}
