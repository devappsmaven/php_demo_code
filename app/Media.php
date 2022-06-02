<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Media extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['file','user_id','uploaded_to'];
    protected $dates = ['created_at','updated_at'];
    
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
