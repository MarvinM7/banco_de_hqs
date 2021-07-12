<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Editoras;

use Exception;

class EditorasController extends Controller {
    public function lista(Request $obj) {
        try {
            $resposta = Editoras::lista($obj);
            
            return response()->json(['sucesso' => true, 'data' => $resposta]);
        } catch (Exception $erro) {
            throw new Exception($erro->getMessage());
            return response()->json(['sucesso' => false, 'erro' => $erro->getMessage()]);
        }
    }
}