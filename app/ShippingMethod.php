<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class ShippingMethod extends Model implements AuditableContract 
{
    use Auditable;
    protected $fillable= ['name','is_free','price'];
    protected $dates = ['created_at','updated_at'];
}
