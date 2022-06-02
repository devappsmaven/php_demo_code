<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Newsletter extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['from','to','subject','message','attach'];
    protected $dates = ['created_at','updated_at'];
}
