<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Theme extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['name','status','active','color'];
    protected $dates = ['created_at','updated_at'];

    public function colors()
    {
        return $this->belongsToMany('App\Color', 'themes_colors', 'theme_id', 'color_id');
    }

    public function components()
    {
        return $this->belongsToMany('App\Component', 'themes_components', 'theme_id', 'component_id')->withPivot('active');
    }
}
