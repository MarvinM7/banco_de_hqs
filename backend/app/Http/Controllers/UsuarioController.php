<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use DB, Exception;

class UsuarioController extends Controller {
    public function inserir(Request $obj) {
        if (User::where('email', $obj->email)->first()) {
            return response()->json(['sucesso' => false, 'erro' => 'E-mail já cadastrado.']);
        }

        DB::beginTransaction();
        try {
            try {
                User::create([
                    'name' => $obj->nome,
                    'email' => $obj->email,
                    'password' => Hash::make($obj->senha)
                ]);
            } catch (Exception $erro) {
                return response()->json(['sucesso' => false, 'erro' => $erro->getMessage()]);
            }

            DB::commit();
			return response()->json(['sucesso' => true, 'data' => 'Inserido com sucesso.']);
        } catch (Exception $erro) {
            DB::rollBack();
			return response()->json(['sucesso' => false, 'erro' => $erro->getMessage()]);
        }
    }

    public function inserirGoogle(Request $obj) {
        if (User::where('email', $obj->email)->where('googleId', $obj->googleId)->first()) {
            return response()->json(['sucesso' => false, 'erro' => 'E-mail já cadastrado.']);
        }

        DB::beginTransaction();
        try {
            try {
                $usuario = User::create([
                    'name'     => $obj->nome,
                    'email'    => $obj->email,
                    'password' => Hash::make('inserirSenhaGoogle'),
                    'googleId' => $obj->googleId
                ]);
            } catch (Exception $erro) {
                return response()->json(['sucesso' => false, 'erro' => $erro->getMessage()]);
            }

            DB::commit();
			return response()->json(['sucesso' => true, 'data' => $usuario->id]);
        } catch (Exception $erro) {
            DB::rollBack();
			return response()->json(['sucesso' => false, 'erro' => $erro->getMessage()]);
        }
    }
}
