<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Comment extends Model implements AuditableContract
{
    use Auditable;
    protected $fillable= ['text','is_approved','user_id'];
    protected $dates = ['created_at','updated_at'];

    public function posts()
    {
        return $this->belongsToMany('App\Post', 'posts_comments', 'comment_id', 'post_id');
    }

    public function gallerys()
    {
        return $this->belongsToMany('App\Gallery', 'galleries_comments', 'comment_id', 'gallery_id');
    }

    public function User()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

    public function replays()
    {
        return $this->belongsToMany('App\Comment', 'comment_replays', 'comment_id', 'comment_replay_id');
    }

    public function comments()
    {
        return $this->belongsToMany('App\Comment', 'comment_replays', 'comment_replay_id', 'comment_id');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product', 'products_comments', 'comment_id', 'product_id');
    }

    public function designs()
    {
        return $this->belongsToMany('App\Post', 'designs_comments', 'comment_id', 'design_id');
    }
}
