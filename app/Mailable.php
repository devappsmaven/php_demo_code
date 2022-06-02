<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Mailable extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['name','message','view', 'status'];
    protected $dates = ['created_at','updated_at'];

    
}
