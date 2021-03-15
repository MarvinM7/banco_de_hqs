<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitulosTableSeeder extends Seeder {
    public function run() {
		// 1
        DB::table('titulos')->insert([
            'nome'       => 'Fullmetal Alchemist',
            'editora_id' => 2,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 2
        DB::table('titulos')->insert([
            'nome'       => 'My Hero Academia',
            'editora_id' => 2,
            'status_id'  => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 3
        DB::table('titulos')->insert([
            'nome'       => 'Virgem Depois dos 30',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 4
        DB::table('titulos')->insert([
            'nome'       => 'Yu Yu Hakusho',
            'editora_id' => 2,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 5
        DB::table('titulos')->insert([
            'nome'       => 'My Hero Academia Illegals',
            'editora_id' => 2,
            'status_id'  => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 6
        DB::table('titulos')->insert([
            'nome'       => 'Hunter x Hunter',
            'editora_id' => 2,
            'status_id'  => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 7
        DB::table('titulos')->insert([
            'nome'       => 'Naruto Gold',
            'editora_id' => 3,
            'status_id'  => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 8
        DB::table('titulos')->insert([
            'nome'       => 'Boruto: Naruto Next Generations',
            'editora_id' => 3,
            'status_id'  => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 9
        DB::table('titulos')->insert([
            'nome'       => 'Dragon Ball',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 10
        DB::table('titulos')->insert([
            'nome'       => 'Dragon Ball Super',
            'editora_id' => 3,
            'status_id'  => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 11
        DB::table('titulos')->insert([
            'nome'       => 'Yu-Gi-Oh!',
            'editora_id' => 2,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 12
        DB::table('titulos')->insert([
            'nome'       => 'Lobo Solitário',
            'editora_id' => 3,
            'status_id'  => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 13
        DB::table('titulos')->insert([
            'nome'       => 'Jujutsu Kaisen',
            'editora_id' => 3,
            'status_id'  => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 14
        DB::table('titulos')->insert([
            'nome'       => 'Sherlock',
            'editora_id' => 3,
            'status_id'  => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 15
        DB::table('titulos')->insert([
            'nome'       => 'Red Garden',
            'editora_id' => 5,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 16
        DB::table('titulos')->insert([
            'nome'       => 'One Punch-Man',
            'editora_id' => 3,
            'status_id'  => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 17
        DB::table('titulos')->insert([
            'nome'       => 'Dr. Slump',
            'editora_id' => 3,
            'status_id'  => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 18
        DB::table('titulos')->insert([
            'nome'       => 'Injustiça',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 19
        DB::table('titulos')->insert([
            'nome'       => 'Injustiça 2',
            'editora_id' => 3,
            'status_id'  => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 20
        DB::table('titulos')->insert([
            'nome'       => 'Tartarugas Ninja',
            'editora_id' => 1,
            'status_id'  => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 21
        DB::table('titulos')->insert([
            'nome'       => 'Black Hammer',
            'editora_id' => 6,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 22
        DB::table('titulos')->insert([
            'nome'       => 'O Máskara',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 23
        DB::table('titulos')->insert([
            'nome'       => 'Watchmen - Edição Definitiva',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 24
        DB::table('titulos')->insert([
            'nome'       => 'Antes de Watchmen: Comediante/Rorschach',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 25
        DB::table('titulos')->insert([
            'nome'       => 'Antes de Watchmen: Minutemen/Espectral',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 26
        DB::table('titulos')->insert([
            'nome'       => 'Antes de Watchmen: Coruja/Dr. Manhattan',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 27
        DB::table('titulos')->insert([
            'nome'       => 'Antes de Watchmen: Ozymandias/Corsário Carmesim',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 28
        DB::table('titulos')->insert([
            'nome'       => 'Naruto',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 29
        DB::table('titulos')->insert([
            'nome'       => 'Rurouni Kenshin',
            'editora_id' => 2,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 30
        DB::table('titulos')->insert([
            'nome'       => 'Soul Eater',
            'editora_id' => 2,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 31
        DB::table('titulos')->insert([
            'nome'       => 'One Piece',
            'editora_id' => 3,
            'status_id'  => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 32
        DB::table('titulos')->insert([
            'nome'       => 'Bakuman',
            'editora_id' => 2,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 33
        DB::table('titulos')->insert([
            'nome'       => 'Death Note',
            'editora_id' => 2,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 34
        DB::table('titulos')->insert([
            'nome'       => 'Death Note - Black Edition',
            'editora_id' => 2,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 35
        DB::table('titulos')->insert([
            'nome'       => 'Death Note - Black Edition: How To Read',
            'editora_id' => 2,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 36
        DB::table('titulos')->insert([
            'nome'       => 'Magi: O Labirinto da Magia',
            'editora_id' => 2,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 37
        DB::table('titulos')->insert([
            'nome'       => 'Bleach',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 38
        DB::table('titulos')->insert([
            'nome'       => 'V de Vingança',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 39
        DB::table('titulos')->insert([
            'nome'       => 'Maus',
            'editora_id' => 11,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 40
        DB::table('titulos')->insert([
            'nome'       => 'Blue Exorcist',
            'editora_id' => 2,
            'status_id'  => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 41
        DB::table('titulos')->insert([
            'nome'       => 'Another',
            'editora_id' => 2,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 42
        DB::table('titulos')->insert([
            'nome'       => 'Homem-Aranha Superior',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 43
        DB::table('titulos')->insert([
            'nome'       => 'Diário do Futuro',
            'editora_id' => 2,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 44
        DB::table('titulos')->insert([
            'nome'       => 'Bestiarius',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 45
        DB::table('titulos')->insert([
            'nome'       => 'Dragão Negro',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 46
        DB::table('titulos')->insert([
            'nome'       => 'Ogiva',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 47
        DB::table('titulos')->insert([
            'nome'       => 'O Ninguém',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 48
        DB::table('titulos')->insert([
            'nome'       => 'Funny Creek',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 49
        DB::table('titulos')->insert([
            'nome'       => 'Os Mitos de Cthulhu',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //green blood, Fate stay night, shaman king
    }
}