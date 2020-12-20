<?php

namespace App\Http\Controllers\API;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    public function login(Request $request){
        $this->validateLogin($request);

        $credentials = $this->credentials($request);

        $token= \JWTAuth::attempt($credentials);

        return $this->responseToken($token);
    }

    private function responseToken($token){
        return $token ? ['token' => $token] :
            response() -> json([
                'error' => \Lang::get('auth.failed')
            ],400);
    }

    public function logout(Request $request)
    {
        \Auth::guard('api')->logout();
        return response()->json([],204);
    }

    public function refresh(Request $request)
    {
        $token = \Auth::guard('api')->refresh();
        return ['token' => $token];
    }
}
