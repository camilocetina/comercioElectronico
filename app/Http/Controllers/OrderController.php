<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('jwt.verify');
    // }
    public function getData(Request $request)
    {
        return $request;
    }
}
