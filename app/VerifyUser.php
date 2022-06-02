<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class VerifyUser extends Model  implements AuditableContract
{
    use  Auditable ;

    protected $fillable = [
        'user_id','token'
    ];

    protected $dates = ['created_at','updated_at'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
