<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Titulos;
use App\Models\Volumes;

use Exception;

class TitulosController extends Controller {
    public function lista(Request $obj) {
        try {
            $resposta = Titulos::lista($obj);
            for ($i = 0; $i < count($resposta); $i++) {
                $resposta[$i]['volumes'] = Volumes::listaPorTitulo($resposta[$i]['id']);
            }
            
            return response()->json(['sucesso' => true, 'data' => $resposta]);
        } catch (Exception $erro) {
            throw new Exception($erro->getMessage());
            return response()->json(['sucesso' => false, 'erro' => $erro->getMessage()]);
        }
    }

    public function visualizar(Request $obj) {
        try {
            $resposta = Titulos::visualizar($obj);
            if ($resposta) {
                $resposta[0]['volumes'] = Volumes::listaPorTitulo($obj->id);
            }
            
            return response()->json(['sucesso' => true, 'data' => $resposta]);
        } catch (Exception $erro) {
            throw new Exception($erro->getMessage());
            return response()->json(['sucesso' => false, 'erro' => $erro->getMessage()]);
        }
    }

    public function teste() {
        return "teste ok";
    }
}