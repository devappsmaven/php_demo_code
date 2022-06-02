<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class OrderDetail extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['user_id','order_id','billing_street','billing_city','billing_state','billing_zip','billing_apartment','billing_country','shipping_street','shipping_city','shipping_state','shipping_zip','shipping_apartment','shipping_country'];
    protected $dates = ['created_at','updated_at'];


    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
