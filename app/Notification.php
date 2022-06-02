<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Notification extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['user_id','title','message','is_read'];
    protected $dates = ['created_at','updated_at'];
}
