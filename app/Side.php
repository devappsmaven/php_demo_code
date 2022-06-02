<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Side extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['name','status','backgroundimage'];
    protected $dates = ['created_at','updated_at'];

    /*public function design()
    {
        return $this->belongsTo('App\Design','design_id','id');
    }*/

    public function products()
    {
        return $this->belongsToMany('App\Product', 'products_sides', 'side_id', 'product_id')->withPivot('image','enable');;
    }

    public function printareas()
    {
        return $this->belongsToMany('App\PrintArea', 'sides_print_areas', 'side_id', 'print_area_id');
    }
    
}
