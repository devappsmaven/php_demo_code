<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Rating extends Model implements AuditableContract 
{
    use Auditable;
    protected $fillable= ['value'];
    protected $dates = ['created_at','updated_at'];

    public function rateable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
