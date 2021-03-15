<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColecoesTitulosTableSeeder extends Seeder {
    public function run() {
		// 1
        DB::table('colecoes_titulos')->insert([
            'colecao_id' => 3,
            'titulo_id'  => 23,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
		// 2
        DB::table('colecoes_titulos')->insert([
            'colecao_id' => 3,
            'titulo_id'  => 24,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
		// 3
        DB::table('colecoes_titulos')->insert([
            'colecao_id' => 3,
            'titulo_id'  => 25,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
		// 4
        DB::table('colecoes_titulos')->insert([
            'colecao_id' => 3,
            'titulo_id'  => 26,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
		// 5
        DB::table('colecoes_titulos')->insert([
            'colecao_id' => 3,
            'titulo_id'  => 27,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
