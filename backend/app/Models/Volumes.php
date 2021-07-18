<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Volumes extends Model {
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'volumes';

    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at'
    ];

    protected $fillable = [
        'id',
        'nome',
        'preco',
        'titulo_id',
        'capa',
        'data_lancamento',
        'ordem',
        'observacao'
    ];

    public static function lista($obj) {
        try {
            $titulo_id = null;
            if ($obj->titulo_id) {
                $titulo_id = $obj->titulo_id;
            }

            $data_lancamento = null;
            if ($obj->data_lancamento) {
                $data_lancamento = $obj->data_lancamento;
            }

            $ano_mes_lancamento = null;
            if ($obj->ano_mes_lancamento) {
                $ano_mes_lancamento = $obj->ano_mes_lancamento;
            }

            $editora_id = null;
            if ($obj->editora_id) {
                $editora_id = $obj->editora_id;
            }

            $resposta = Volumes::
                    join('titulos', 'titulos.id', '=', 'volumes.titulo_id')
					->select('volumes.*', 'titulos.nome AS titulo_nome')
                    ->when($titulo_id, function($query) use ($titulo_id) {
                        return $query->where('titulos.id', '=', $titulo_id);
                    })
                    ->when($editora_id, function($query) use ($editora_id) {
                        return $query->where('titulos.editora_id', '=', $editora_id);
                    })
                    ->when($data_lancamento, function($query) use ($data_lancamento) {
                        return $query->where('volumes.data_lancamento', '=', $data_lancamento);
                    })
                    ->when($ano_mes_lancamento, function($query) use ($ano_mes_lancamento) {
                        return $query->whereBetween('volumes.data_lancamento', ["$ano_mes_lancamento-01", "$ano_mes_lancamento-31"]);
                    })
                    ->orderBy('titulo_nome')
                    ->orderBy('volumes.nome')
                    ->get();
		    return $resposta;
        } catch (Exception $erro) {
            return $erro->getMessage();
        }
    }

    public static function listaPorTitulo($titulo_id) {
        $resposta = Volumes::
                    join('titulos', 'titulos.id', '=', 'volumes.titulo_id')
					->select('volumes.*')
                    ->where('volumes.titulo_id', '=', $titulo_id)
                    ->orderBy('ordem')
                    ->get();
		return $resposta;
    }
}
