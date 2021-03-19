<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    protected $fillable = ['name','lastname','document','phone','direction'];
}
