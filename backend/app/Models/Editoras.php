<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Editoras extends Model {
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'editoras';

    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at'
    ];

    protected $fillable = [
        'id',
        'nome'
    ];

    public static function lista($obj) {
        $resposta = Editoras::
                    select('*')
                    ->orderBy('nome')
                    ->get();
		return $resposta;
    }
}
