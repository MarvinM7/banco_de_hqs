<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Titulos extends Model {
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'titulos';

    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at'
    ];

    protected $fillable = [
        'id',
        'nome',
        'editora_id',
        'status_id',
        'observacao',
    ];

    public static function lista($obj) {
        $resposta = Titulos::
                    join('titulo_status', 'titulo_status.id', '=', 'titulos.status_id')
                    ->join('editoras', 'editoras.id', '=', 'titulos.editora_id')
					->select('titulos.*', 'titulo_status.nome AS status_nome', 'editoras.nome AS editora_nome', )
                    ->orderBy('titulos.nome')
                    ->get();
		return $resposta;
    }

    public static function visualizar($obj) {
        $id = $obj->id;
        $resposta = Titulos::
                    join('titulo_status', 'titulo_status.id', '=', 'titulos.status_id')
                    ->join('editoras', 'editoras.id', '=', 'titulos.editora_id')
					->select('titulos.*', 'titulo_status.nome AS status_nome', 'editoras.nome AS editora_nome', )
                    ->where('titulos.id', '=', $id)
                    ->orderBy('titulos.nome')
                    ->get();
		return $resposta;
    }
}
