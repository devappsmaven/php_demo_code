<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class TaxCharge extends Model implements AuditableContract 
{
    use Auditable;
    protected $fillable= ['tax_identifier','country','state','postal_code','percentage'];
    protected $dates = ['created_at','updated_at'];
}
