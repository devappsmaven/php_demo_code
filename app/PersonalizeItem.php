<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class PersonalizeItem extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['design_id','name','number','size','total'];
    protected $dates = ['created_at','updated_at'];

    public function design()
    {
        return $this->belongsTo('App\Design','design_id','id');
    }
}
