<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['id','name','lastname','document','birthday','phone'];

    public function order()
    {
    	return $this->HasMany('App\Admin\Order');
    }
}
