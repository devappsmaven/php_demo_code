<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;
use Illuminate\Support\Str;

class Page extends Model implements AuditableContract 
{
    use Auditable;
    protected $fillable= ['title','slug','meta_key','meta_description','content','status','published'];
    protected $dates = ['created_at','updated_at'];

    /*protected $guarded = [];
    public static function findBySlug($slug)
    {
        return new Page([
            'title' => Str::title(str_replace('-','',$slug)),
            'content' => 'Content of the page '. Str::title(str_replace('-','',$slug)),
            'slug' => $slug,
        ]);
    }
    */

    /*public function components()
    {
        return $this->belongsToMany('App\Component', 'pages_components', 'page_id', 'component_id');
    }*/

    public function headercomponents()
    {
        return $this->belongsToMany('App\Component', 'pages_components', 'page_id', 'component_id')->wherePivot('type', 'Header');
    }

    public function mobileareacomponents()
    {
        return $this->belongsToMany('App\Component', 'pages_components', 'page_id', 'component_id')->wherePivot('type', 'Mobile Area');
    }

    public function leftsidecomponents()
    {
        return $this->belongsToMany('App\Component', 'pages_components', 'page_id', 'component_id')->wherePivot('type', 'Left Side');
    }

    public function bodycomponents()
    {
        return $this->belongsToMany('App\Component', 'pages_components', 'page_id', 'component_id')->wherePivot('type', 'Body');
    }

    public function rightsidecomponents()
    {
        return $this->belongsToMany('App\Component', 'pages_components', 'page_id', 'component_id')->wherePivot('type', 'Right Side');
    }

    public function footercomponents()
    {
        return $this->belongsToMany('App\Component', 'pages_components', 'page_id', 'component_id')->wherePivot('type', 'Footer');
    }
}

