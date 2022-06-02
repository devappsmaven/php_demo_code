<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class ChatRelation extends Model implements AuditableContract 
{
    use Auditable;
    protected $fillable= ['user_1','user_2'];
    protected $dates = ['created_at','updated_at'];
}
