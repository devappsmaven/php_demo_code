<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class ShoppingCart extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['shop_number','subtotal','discount','shipping_cost','tax','total','shipby','shippingType','status','customer_id','user_id','promocode_id','isexpedited'];
    protected $dates = ['created_at','updated_at'];

    

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

    public function items()
    {
        return $this->belongsToMany('App\Design', 'orders_designs', 'order_id', 'design_id');
    }

    public function promocode()
    {
        return $this->belongsTo('App\Promocode','promocode_id','id');
    }
}
