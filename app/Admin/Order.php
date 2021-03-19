<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id','client_id','product_id','value','cant','direction','priority','state'];  
}
