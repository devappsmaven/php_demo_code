<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class PriceShirtTableEmbroidery extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['RANGEFROM','RANGETO','_1COLOR','_2COLOR','_3COLOR','_4COLOR','_5COLOR','_6COLOR','_7COLOR','_8COLOR'];
    protected $dates = ['created_at','updated_at'];

}
