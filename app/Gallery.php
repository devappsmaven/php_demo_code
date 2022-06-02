<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Gallery extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['title','slug','image','body','view_count','is_approved','user_id'];
    protected $dates = ['created_at','updated_at'];

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'galleries_categories', 'gallery_id', 'category_id');
    }

    public function subcategories()
    {
        return $this->belongsToMany('App\SubCategory', 'galleries_categories', 'gallery_id', 'subcategory_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'galleries_tags', 'gallery_id', 'tag_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->belongsToMany('App\Comment', 'galleries_comments', 'gallery_id', 'comment_id');
    }   

    public function favorite_to_users()
    {
        return $this->belongsToMany('App\User', 'galleries_user', 'gallery_id', 'user_id');
    }

    
}
