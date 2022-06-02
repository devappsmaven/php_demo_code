<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use App\Traits\Rateable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class PrintArea extends Model implements AuditableContract
{
    use Auditable, Rateable;

    protected $fillable= ['name','slug','status','side','guidelineshorizontal','guidelinesvertical','guidelinesyouth','guidelinesadult','guidelinesleftchest','width','height','left','top','embroideryuse'];
   
    protected $dates = ['created_at','updated_at'];

    public function sides()
    {
        return $this->belongsToMany('App\Side', 'sides_print_areas', 'print_area_id', 'side_id');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product', 'products_print_areas', 'print_area_id', 'product_id');
    }

    
}
