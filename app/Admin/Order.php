<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id','client_id','product_id','value','cant','direction','priority','state']; 

    public function client()
    {
    	return $this->belongsTo('App\Admin\Client');
    } 
    public function products()
    {
    	return $this->belongsToMany('App\Admin\Product');
    	
    }
}
