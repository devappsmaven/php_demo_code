<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Post extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['title','slug','image','body','view_count','is_approved','user_id'];
    protected $dates = ['created_at','updated_at'];

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'categories_posts', 'post_id', 'category_id');
    }

    public function subcategories()
    {
        return $this->belongsToMany('App\SubCategory', 'categories_posts', 'post_id', 'subcategory_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'posts_tags', 'post_id', 'tag_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->belongsToMany('App\Comment', 'posts_comments', 'post_id', 'comment_id');
    }

    public function favorite_to_users()
    {
        return $this->belongsToMany('App\User', 'post_user', 'post_id', 'user_id');
    }
}
