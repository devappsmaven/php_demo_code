<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class DesignSize extends Pivot
{
    protected $fillable= ['quantity','size','price','ammount','order_id','created_at','updated_at'];
}
