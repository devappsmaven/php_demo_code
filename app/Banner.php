<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;



class Banner extends Model implements AuditableContract 
{
    use Auditable;
    protected $fillable= ['name','status','title','link','image'];
    protected $dates = ['created_at','updated_at'];
}
