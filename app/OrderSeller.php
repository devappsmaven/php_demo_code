<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class OrderSeller extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['order_id','store_id'];
    protected $dates = ['created_at','updated_at'];


    public function orders()
    {
        return $this->hasMany('App\Order', 'id', 'order_id');
    }

    public function order()
    {
        return $this->hasOne('App\Order', 'id', 'order_id');
    }
}