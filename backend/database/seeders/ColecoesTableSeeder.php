<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColecoesTableSeeder extends Seeder {
    public function run() {
		// 1
        DB::table('colecoes')->insert([
            'nome' => 'Marvel Deluxe',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
		// 2
        DB::table('colecoes')->insert([
            'nome' => 'Encadernados Novos 52',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 3
        DB::table('colecoes')->insert([
            'nome' => 'Encadernados Watchmen',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
