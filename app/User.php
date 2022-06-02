<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Support\Facades\Hash;
use App\Traits\LockableTrait;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;
use OwenIt\Auditing\Contracts\UserResolver;
use Illuminate\Support\Facades\Auth;
use Cache;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements AuditableContract, UserResolver, JWTSubject
{
    use Notifiable, ShinobiTrait, LockableTrait, Auditable ;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','lastname','username','password','email','phone'
    ];

    // protected $fillable = [
    //     'firstname','lastname','username','birthday','password','email','phone','newsletter','special_offers','billing_street','billing_city','billing_state','billing_zip',
    //     'shipping_street','shipping_city','shipping_state','shipping_zip','company','cardcompany','image', 'status','about','has_store','type','verified','cardtype','cardnumber'
    // ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['birthday', 'created_at','updated_at'];

    public function setPasswordAttribute($value)
    {
        if ($value)
        {
            $this->attributes['password']= app('hash')->needsRehash($value) ? Hash::make($value): $value;
        }
    }

    public static function resolveId()
    {
        return Auth::check() ? Auth::user()->getAuthIdentifier() : null;
    }

    public function isOnline()
    {
        return Cache::has('user-is-online-'.$this->id);
    }

    public function designs()
    {
        return $this->hasMany('App\Design','user_id');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment','user_id');
    }

    public function orders()
    {
        return $this->hasMany('App\Order','customer_id');
    }

    public function ordersassigned()
    {
        return $this->hasMany('App\Order','user_id');
    }

    public function posts()
    {
        return $this->hasMany('App\Post','user_id');
    }

    public function gallerys()
    {
        return $this->hasMany('App\Gallery','user_id');
    }

    public function favorite_posts()
    {
        return $this->belongsToMany('App\Post', 'post_user', 'user_id', 'post_id');
    }

    public function favorite_gallerys()
    {
        return $this->belongsToMany('App\Gallery', 'galleries_user', 'user_id', 'gallery_id');
    }

    public function favorite_products()
    {
        return $this->belongsToMany('App\Product', 'product_user', 'user_id', 'product_id');
    }

    public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }

    public function ratings()
    {
        return $this->hasMany('App\Rating');
    }

    public function store()
    {
        return $this->hasOne('App\Store');
    }
    
    public function favorite_designs()
    {
        return $this->belongsToMany('App\Post', 'design_user', 'user_id', 'design_id');
    }


    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    
    public function getJWTCustomClaims()
    {
        return [
            'user_id' => $this->getKey(),
            'user_email' => $this->attributes['email']
        ];
    }
}
