<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = ['id','product_id','amount'];

     public function product()
    {
    	return $this->hasMany('App\Admin\Product');
    } 
}
