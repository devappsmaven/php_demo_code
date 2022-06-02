<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class UserSavedCard extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['user_id','card_holder_name','card_number','expires_at'];
    protected $dates = ['created_at','updated_at'];

    public function userInfo()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
