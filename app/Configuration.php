<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Configuration extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['logo','sitename','url','email','language','timezone','dateformat','minutes_lockout','price_quote_quantity','price_quote_front_color','price_quote_back_color'];
    protected $dates = ['created_at','updated_at'];
}
