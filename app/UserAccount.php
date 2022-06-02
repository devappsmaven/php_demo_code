<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class UserAccount extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['store_id','user_id','branch_name','account_number','account_holder_name','routing_number'];
    protected $dates = ['created_at','updated_at'];
}
