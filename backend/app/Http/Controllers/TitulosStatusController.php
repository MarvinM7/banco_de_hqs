<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TitulosStatus;

use Exception;

class TitulosStatusController extends Controller {
    public function lista(Request $obj) {
        try {
            $resposta = TitulosStatus::lista($obj);
            
            return response()->json(['sucesso' => true, 'data' => $resposta]);
        } catch (Exception $erro) {
            throw new Exception($erro->getMessage());
            return response()->json(['sucesso' => false, 'erro' => $erro->getMessage()]);
        }
    }
}