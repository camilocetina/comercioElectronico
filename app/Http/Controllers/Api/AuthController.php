<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;



class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware(['jwt.verify'])->except('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email','password');
        try{
            if(!$token = JWTAuth::attempt($credentials))
            {
                return response()->json(['success'=>false],401);
            }
        }
        catch(JWTException $e)
        {
            return response()->json(['success'=>false,'error' => 'no puede crear el JWT'],500);
        }

    

        return response()->json(['success'=>true,'token' => $token],200);
    }
    /**
     * validate toke JWT
     * 
    */
    public function checkToken()
    {
        return response()->json(['success'=>true],200);
    }

    public function Logout()

    {
        $logout = auth()->logout();

        return response()->json(['success'=>true],200);
    }
}
