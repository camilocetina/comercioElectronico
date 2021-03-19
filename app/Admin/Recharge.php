<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Recharge extends Model
{
    protected $fillable = ['id','supplier_id','product_id','amount','state','priority'];
}
