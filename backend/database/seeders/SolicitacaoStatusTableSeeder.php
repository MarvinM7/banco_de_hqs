<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SolicitacaoStatusTableSeeder extends Seeder {
    public function run() {
		// 1
        DB::table('solicitacao_status')->insert([
            'nome' => 'Em aberto',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
		// 2
        DB::table('solicitacao_status')->insert([
            'nome' => 'Fechada',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 3
        DB::table('solicitacao_status')->insert([
            'nome' => 'Em análise',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
