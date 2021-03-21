<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    protected $fillable = ['name','lastname','document','phone','direction'];

     public function recharge()
    {
    	return $this->HasMany('App\Admin\Recharge');
    }
}
