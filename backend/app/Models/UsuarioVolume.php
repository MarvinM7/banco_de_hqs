<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

use Exception;

class UsuarioVolume extends Model {
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'usuario_volume';

    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at'
    ];

    protected $fillable = [
        'id',
        'usuario_id',
        'volume_id',
        'created_at',
    ];

    public static function lista($obj) {
        try {
            $usuario_id = null;
            if ($obj->usuario_id) {
                $usuario_id = $obj->usuario_id;
            }

            $titulo_id = null;
            if ($obj->titulo_id) {
                $titulo_id = $obj->titulo_id;
            }

            $resposta = UsuarioVolume::
                        join('volumes', 'volumes.id', '=', 'usuario_volume.volume_id')
                        ->join('titulos', 'titulos.id', '=', 'volumes.titulo_id')
                        ->join('editoras', 'editoras.id', '=', 'titulos.editora_id')
                        ->select('usuario_volume.id', 'volumes.id AS volume_id', 'volumes.nome', 'titulos.id AS titulo_id', 'titulos.nome AS titulo_nome', 'titulos.editora_id AS editora_id', 'editoras.nome AS editora_nome')
                        ->when($usuario_id, function($query) use ($usuario_id) {
                            return $query->where('usuario_volume.usuario_id', '=', $usuario_id);
                        })
                        ->when($titulo_id, function($query) use ($titulo_id) {
                            return $query->where('titulos.id', '=', $titulo_id);
                        })
                        ->orderBy('titulos.nome')
                        ->orderBy('titulos.id')
                        ->orderBy('volumes.ordem')
                        ->get();
            return $resposta;
        } catch (Exception $erro) {
            return $erro->getMessage();
        }
        
    }

    public static function agrupadoPorTitulo($obj) {
        try {
            $usuario_id = null;
            if ($obj->usuario_id) {
                $usuario_id = $obj->usuario_id;
            }

            $titulo_id = null;
            if ($obj->titulo_id) {
                $titulo_id = $obj->titulo_id;
            }

            $resposta = UsuarioVolume::
                        join('volumes', 'volumes.id', '=', 'usuario_volume.volume_id')
                        ->join('titulos', 'titulos.id', '=', 'volumes.titulo_id')
                        ->join('editoras', 'editoras.id', '=', 'titulos.editora_id')
                        ->select('titulos.id AS titulo_id', 'titulos.nome AS titulo_nome', 'titulos.editora_id AS editora_id', 'editoras.nome AS editora_nome', 'usuario_volume.usuario_id', DB::raw('count(*) as usuario_volume_quantidade'))
                        ->when($usuario_id, function($query) use ($usuario_id) {
                            return $query->where('usuario_volume.usuario_id', '=', $usuario_id);
                        })
                        ->when($titulo_id, function($query) use ($titulo_id) {
                            return $query->where('titulos.id', '=', $titulo_id);
                        })
                        ->orderBy('titulos.nome')
                        ->orderBy('titulos.id')
                        ->orderBy('volumes.ordem')
                        ->groupBy('usuario_volume.usuario_id', 'titulos.editora_id', 'titulos.id', 'titulo_nome', 'editora_nome')
                        ->get();
            return $resposta;
        } catch (Exception $erro) {
            return $erro->getMessage();
        }
    }
}
