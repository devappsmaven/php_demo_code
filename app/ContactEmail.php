<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class ContactEmail extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['firstname','lastname','email','phone','subject','message','attach'];
    protected $dates = ['created_at','updated_at'];
}
