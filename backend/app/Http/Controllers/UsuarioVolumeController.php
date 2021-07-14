<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Titulos;
use App\Models\UsuarioVolume;
use App\Models\Volumes;

use Exception;

class UsuarioVolumeController extends Controller {
    public function lista(Request $obj) {
        try {
            $resposta = UsuarioVolume::lista($obj);
            
            if ($resposta) {
                for ($i = 0; $i < count($resposta); $i++) {
                    $resposta[$i]['volumes'] = Volumes::listaPorTitulo($resposta[$i]['titulo_id']);
                }
            }
            return response()->json(['sucesso' => true, 'data' => $resposta]);
        } catch (Exception $erro) {
            throw new Exception($erro->getMessage());
            return response()->json(['sucesso' => false, 'erro' => $erro->getMessage()]);
        }
    }
}