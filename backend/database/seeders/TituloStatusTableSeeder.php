<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TituloStatusTableSeeder extends Seeder {
    public function run() {
		// 1
        DB::table('titulo_status')->insert([
            'nome' => 'Em lançamento',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
		// 2
        DB::table('titulo_status')->insert([
            'nome' => 'Concluído',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
		// 3
        DB::table('titulo_status')->insert([
            'nome' => 'Pausado',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
		// 4
        DB::table('titulo_status')->insert([
            'nome' => 'Abandonado',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
