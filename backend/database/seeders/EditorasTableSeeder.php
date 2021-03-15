<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EditorasTableSeeder extends Seeder {
    public function run() {
		// 1
        DB::table('editoras')->insert([
            'nome' => 'Pipoca e Nanquim',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
		// 2
        DB::table('editoras')->insert([
            'nome' => 'JBC',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
		// 3
        DB::table('editoras')->insert([
            'nome' => 'Panini Comics',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
		// 4
        DB::table('editoras')->insert([
            'nome' => 'Devir',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 5
        DB::table('editoras')->insert([
            'nome' => 'New Pop',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 6
        DB::table('editoras')->insert([
            'nome' => 'Intrínseca',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 7
        DB::table('editoras')->insert([
            'nome' => 'Mythos',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 8
        DB::table('editoras')->insert([
            'nome' => 'Abril',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 9
        DB::table('editoras')->insert([
            'nome' => 'Salvat',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 10
        DB::table('editoras')->insert([
            'nome' => 'Eaglemoss',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 11
        DB::table('editoras')->insert([
            'nome' => 'Companhia das Letras',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
