<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Font extends Model implements AuditableContract 
{
    use Auditable;
    protected $table = 'fonts';
    protected $fillable= ['displayname','name','size','file','status','description','fontcategory_id','slug'];
    protected $dates = ['created_at','updated_at'];

    public function Category()
    {
        return $this->belongsTo('App\FontCategory','fontcategory_id','id');
    }
}
