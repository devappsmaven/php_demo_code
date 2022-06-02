<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Store extends Model implements AuditableContract 
{
    use Auditable;
    protected $fillable= ['name','newname','statusname','messagename','banner','newbanner','statusbanner','messagebanner','slogan','newslogan','statuslogan',
                          'messagelogan', 'description','newdescription','statusdescription','logo','newlogo','statuslogo','messagelogo','slug','status'];
    protected $dates = ['created_at','updated_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function pricesoldtable()
    {
        return $this->hasMany('App\PriceSoldTable');
    }

    public function orders()
    {
        return $this->hasMany('App\Order', 'id', 'order_id');
    }
}
