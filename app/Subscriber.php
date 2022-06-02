<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Subscriber extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['email','status','token'];
    protected $dates = ['created_at','updated_at'];
}