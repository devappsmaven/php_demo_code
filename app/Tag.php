<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Tag extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['name','slug','status','type'];
    protected $dates = ['created_at','updated_at'];
    
    public function posts()
    {
        return $this->belongsToMany('App\Post', 'posts_tags', 'tag_id', 'post_id');
    }

    public function gallerys()
    {
        return $this->belongsToMany('App\Gallery', 'galleries_tags', 'tag_id', 'gallery_id');
    }
}
