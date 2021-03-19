<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id','name','ref','image'];
}
