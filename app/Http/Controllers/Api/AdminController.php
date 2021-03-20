<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('jwt.verify');
    }

    public function index()
    {

        return response()->json(['success'=>200,'message'=>'Estas en la pagina de inicio']);
     
    }
}
