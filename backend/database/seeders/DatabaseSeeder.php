<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run() {
        $this->call(UsersTableSeeder::class);
        $this->call(ColecoesTableSeeder::class);
        $this->call(EditorasTableSeeder::class);
        $this->call(TituloStatusTableSeeder::class);
        $this->call(TitulosTableSeeder::class);
        $this->call(VolumesTableSeeder::class);
        $this->call(ColecoesTitulosTableSeeder::class);
        $this->call(SolicitacaoTiposTableSeeder::class);
        $this->call(SolicitacaoStatusTableSeeder::class);
    }
}
