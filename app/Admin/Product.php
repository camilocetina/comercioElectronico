<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id','name','ref','image'];

     public function order()
    {
    	return $this->belongsToMany('App\Admin\Order');
    	
    }
    public function inventory()
    {
    	return $this->belongsTo('App\Admin\Inventory');
    	
    }
     public function recharge()
    {
    	return $this->belongsTo('App\Admin\Recharge');
    } 
}
