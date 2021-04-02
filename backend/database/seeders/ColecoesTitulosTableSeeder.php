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
            'ordem'      => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
		// 2
        DB::table('colecoes_titulos')->insert([
            'colecao_id' => 3,
            'titulo_id'  => 24,
            'ordem'      => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
		// 3
        DB::table('colecoes_titulos')->insert([
            'colecao_id' => 3,
            'titulo_id'  => 25,
            'ordem'      => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
		// 4
        DB::table('colecoes_titulos')->insert([
            'colecao_id' => 3,
            'titulo_id'  => 26,
            'ordem'      => 4,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
		// 5
        DB::table('colecoes_titulos')->insert([
            'colecao_id' => 3,
            'titulo_id'  => 27,
            'ordem'      => 5,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 6
        DB::table('colecoes_titulos')->insert([
            'colecao_id' => 2,
            'titulo_id'  => 68,
            'ordem'      => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 7
        DB::table('colecoes_titulos')->insert([
            'colecao_id' => 2,
            'titulo_id'  => 69,
            'ordem'      => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 8
        DB::table('colecoes_titulos')->insert([
            'colecao_id' => 2,
            'titulo_id'  => 70,
            'ordem'      => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
