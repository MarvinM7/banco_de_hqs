<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Titulos;
use App\Models\UsuarioVolume;
use App\Models\Volumes;

use DB, Exception;

class UsuarioVolumeController extends Controller {
    public function lista(Request $obj) {
        try {
            $resposta = UsuarioVolume::agrupadoPorTitulo($obj);
            
            if ($resposta) {
                for ($i = 0; $i < count($resposta); $i++) {
                    $resposta[$i]['volumes'] = Volumes::listaPorTitulo($resposta[$i]['titulo_id']);
                    $resposta[$i]['volumes_usuario'] = UsuarioVolume::lista($obj);
                }
            }
            return response()->json(['sucesso' => true, 'data' => $resposta]);
        } catch (Exception $erro) {
            throw new Exception($erro->getMessage());
            return response()->json(['sucesso' => false, 'erro' => $erro->getMessage()]);
        }
    }

    public function inserir(Request $obj) {
        DB::beginTransaction();
        try {
            $volumes = Volumes::listaPorTitulo($obj->titulo_id);
            for ($i = 0; $i < count($volumes); $i++) {
                UsuarioVolume::
                        where('usuario_volume.usuario_id', '=', $obj->usuario_id)
                        ->where('usuario_volume.volume_id', '=', $volumes[$i]['id'])
                        ->delete();
            }

            for ($i = 0; $i < count($obj->volumes); $i++) {
                $resposta = UsuarioVolume::create([
                    'usuario_id' 	=> $obj->usuario_id,
                    'volume_id' 	=> $obj->volumes[$i]['id'],
                ]);
            }

            DB::commit();
			return response()->json(['sucesso'=> true, 'data'=> 'Inserido com sucesso.']);
        } catch (Exception $erro) {
            DB::rollBack();
			return response()->json(['sucesso'=> false, 'erro'=> $erro->getMessage()]);
        }
    }
}