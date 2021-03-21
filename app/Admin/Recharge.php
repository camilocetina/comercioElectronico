<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Recharge extends Model
{
    protected $fillable = ['id','supplier_id','product_id','amount','state','priority'];

    	 public function suplier()
    {
    	return $this->belongsTo('App\Admin\Suplier');
    } 

    	 public function product()
    {
    	return $this->hasMany('App\Admin\Product');
    } 
     
     
           
}
