<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Models\User;

class AuthController extends Controller {
    
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['login', 'loginGoogle']]);
    }

    public function login(Request $request) {
        $credentials = $request->only(['email', 'password']);

        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function loginGoogle(Request $request) {
        try {
            $credentials = User::
                            where('email', $request->email)
                            ->where('googleId', $request->googleId)
                            ->first();

            if (!$token = JWTAuth::fromUser($credentials)) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }

            return $this->respondWithToken($token);
        } catch (JWTException $e) {
            return response()->json(['error' => 'Erro ao logar'], 500);
        }
    }

    public function me() {
        return response()->json(auth()->user());
    }

    public function renovarToken() {
        try {
            return response()->json(['sucesso' => true, 'token' => auth()->refresh()]);
        } catch (JWTException $e) {
            return response()->json(['sucesso' => false, 'status' => 'Erro ao tentar renovar o token.']);
        }
    }

    public function logout() {
        auth()->logout();

        return response()->json(['sucesso' => true]);
    }

    public function refresh() {
        return $this->respondWithToken(auth()->refresh());
    }
    
    protected function respondWithToken($token) {
        $usuario = $this->me();
        $resposta = [
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL(),
            'usuario' => $usuario
        ];
        
        return response()->json(['sucesso' => true, 'data' => $resposta]);
    }
}