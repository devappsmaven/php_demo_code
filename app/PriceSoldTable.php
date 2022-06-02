<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class PriceSoldTable extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['RANGEFROM','RANGETO','percent'];
    protected $dates = ['created_at','updated_at'];

    public function store()
    {
        return $this->belongsTo('App\Store');
    }
}
