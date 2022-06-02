<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Commission extends Model implements AuditableContract 
{
    use Auditable;
    protected $fillable= ['store_id','paid_by','amount','paid_amount','transaction_id', 'payment_method','status','type'];
    protected $dates = ['created_at','updated_at'];

    public function store()
    {
        return $this->belongsTo('App\Store','store_id','id');
    }

}