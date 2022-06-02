<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class SizeChart extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['size','width','length'];
    protected $dates = ['created_at','updated_at'];

    public function products()
    {
        return $this->belongsToMany('App\Product', 'product_size_chart', 'size_chart_id', 'product_id');
    }
}
