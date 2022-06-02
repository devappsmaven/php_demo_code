<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Order extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['order_number','subtotal','discount','shipping_cost','tax','total','shipby','shippingType','status','tracking_number','carrier','service','customer_id','user_id','promocode_id','items','txn_id','currency','receipt_url','payment_status'];
    protected $dates = ['created_at','updated_at'];

    public function customer()
    {
        return $this->belongsTo('App\User','customer_id','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

    public function designs()
    {
        return $this->belongsToMany('App\Design', 'orders_designs', 'order_id', 'design_id');
    }

    public function promocode()
    {
        return $this->belongsTo('App\PromoCode','promocode_id','id');
    }

    public function design_sides()
    {
        return $this->hasMany('App\DesignSide', 'id', 'design_id');
    }

    public function product()
    {
        return $this->hasOne('App\Product', 'id', 'product_id');
    }

    public function shipping_method()
    {
        return $this->belongsTo('App\ShippingMethod','shipping_id','id');
    }

    public function address()
    {
        return $this->hasOne('App\OrderDetail');
    }

    public function order_store()
    {
        return $this->belongsToMany('App\Store', 'order_sellers', 'order_id', 'store_id');
    }

}
