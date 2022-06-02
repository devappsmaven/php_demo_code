<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class PromoCode extends Model implements AuditableContract 
{
    use Auditable;
    protected $fillable= ['name','description','type','amount','freeshipping','expirationdate','minimumspend','maximumspend','individualuseonly','excludesaleitems','limitpercoupon','limitperuser','status'];
    protected $dates = ['created_at','updated_at'];
}
