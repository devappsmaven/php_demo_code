<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;
use Illuminate\Support\Str;

class Component extends Model implements AuditableContract 
{
    use Auditable;
protected $fillable= ['name','slug','order','status', 'content', 'is_editable','type'];
    protected $dates = ['created_at','updated_at'];

    public function pages()
    {
        return $this->belongsToMany('App\Page', 'pages_components', 'component_id', 'page_id');
    }
    
    public function themes()
    {
        return $this->belongsToMany('App\Theme', 'themes_components', 'component_id', 'theme_id')->withPivot('active');
    }

    
}