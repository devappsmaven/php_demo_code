<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;


class AditionalImage extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['name','file','slug', 'images_url'];
    protected $dates = ['created_at','updated_at'];

    public function products()
    {
        return $this->belongsToMany('App\Product', 'product_aditional_image', 'aditional_image_id', 'product_id');
    }
}
