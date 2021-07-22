<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\PasswordResets;

use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Carbon\Carbon;

use Exception;

class AuthController extends Controller {
    
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['login', 'loginGoogle', 'esqueceuSenha', 'trocarSenha']]);
    }

    public function login(Request $obj) {
        $credentials = $obj->only(['email', 'password']);

        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function loginGoogle(Request $obj) {
        try {
            $credentials = User::
                            where('email', $obj->email)
                            ->where('googleId', $obj->googleId)
                            ->first();

            if (!$token = JWTAuth::fromUser($credentials)) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }

            return $this->respondWithToken($token);
        } catch (JWTException $e) {
            return response()->json(['error' => 'Erro ao logar'], 500);
        }
    }

    public function esqueceuSenha(Request $obj) {
        try {
            $usuario = User::
                        where('email', $obj->email)
                        ->first();
            
            if (!$usuario) {
                return response()->json(['sucesso' => true, 'data' => 'Usuário não encontrado.']); 
            }

            $token = Str::random(60);
            DB::table('password_resets')->insert([
                'email' => $obj->email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]);

            $email_link = urlencode($obj->email);

            $html = "<a href='https://bancodehqs.com.br/trocarsenha/$token/$email_link'>Clique aqui<a/> para resetar sua senha.";

            Mail::send([], [], function ($message) use ($obj, $html) {
                $message
                    ->to($obj->email)
                    ->subject('Redefinição de senha')
                    ->setBody($html, 'text/html');
            });

            return response()->json(['sucesso' => true, 'data' => 'OK']);
        } catch (Exception $erro) {
			return response()->json(['sucesso' => false, 'erro' => $erro->getMessage()]);
        }
    }

    public function trocarSenha(Request $obj) {       
        $token = PasswordResets::
                    where('email', $obj->email)
                    ->where('token', $obj->token)
                    ->first();
        
        if (!$token) {
            return response()->json(['sucesso'=> false, 'erro'=> 'Token não encontrado. Tente recuperar a senha novamente.']);
        }

        $usuario = User::
                    where('email', $obj->email)
                    ->first();

		if (!$usuario) {
			return response()->json(['sucesso'=> false, 'erro'=> 'Usuário não encontrado.']);
		}

		if ($obj->password) {
			$usuario->password = Hash::make($obj->password);
		}

		DB::beginTransaction();

		try {
            $usuario->save();
			
			DB::commit();

            $credentials = $obj->only(['email', 'password']);

            if (!$token = auth()->attempt($credentials)) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }
            
            DB::table('password_resets')->where('email', $obj->email)->delete();

            return $this->respondWithToken($token);
		} catch (Exception $error) {
			DB::rollBack();
			return response()->json(['sucesso' => false, 'erro' => $error->getMessage()]);
		}
    }

    public function me() {
        return response()->json(auth()->user());
    }

    public function renovarToken() {
        try {
            return response()->json(['sucesso' => true, 'token' => auth()->refresh()]);
        } catch (JWTException $e) {
            return response()->json(['sucesso' => false, 'erro' => 'Erro ao tentar renovar o token.']);
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