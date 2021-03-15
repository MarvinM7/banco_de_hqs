<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SolicitacaoTiposTableSeeder extends Seeder {
    public function run() {
		// 1
        DB::table('solicitacao_tipos')->insert([
            'nome' => 'Sugestões',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
		// 2
        DB::table('solicitacao_tipos')->insert([
            'nome' => 'Erros',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
