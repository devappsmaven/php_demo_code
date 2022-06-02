<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class DesignSide extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['design_id','side','image','json','svg','width_div','height_div','width_canvas','height_canvas','left_canvas','top_canvas','design_image','design_product_image'];
    protected $dates = ['created_at','updated_at'];

    public function design()
    {
        return $this->belongsTo('App\Design','design_id','id');
    }
}
