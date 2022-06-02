<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class PricePersonalizeTable  extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['RANGEFROM','RANGETO','NAME','NUMBER','BOTH','STROKECOLOR'];
    protected $dates = ['created_at','updated_at'];

}
