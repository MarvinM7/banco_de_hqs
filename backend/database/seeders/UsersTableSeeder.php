<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder {
    public function run() {
        // 1
        DB::table('usuarios')->insert([
			'name' 			=> 'Marvin Miguel da Silva',
			'email' 		=> 'marvin.atemu@gmail.com',
			'password' 		=> Hash::make('mm09101993'),
			'foto' 		    => ''
        ]);
        // 2
        DB::table('usuarios')->insert([
			'name' 			=> 'Maria Renata da Silva Eloy',
			'email' 		=> 'mariars.eloy@gmail.com',
			'password' 		=> Hash::make('aa123456'),
			'foto' 		    => ''
        ]);
    }
}
