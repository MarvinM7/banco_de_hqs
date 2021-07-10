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
        $resposta = Volumes::
					select('*')
                    ->get();
		return $resposta;
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
