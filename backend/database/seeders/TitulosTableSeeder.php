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
            'nome'       => 'Tartarugas Ninja - Coleção Clássica',
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
        // 50
        DB::table('titulos')->insert([
            'nome'       => 'Fate/Stay Night',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 51
        DB::table('titulos')->insert([
            'nome'       => 'Green Blood',
            'editora_id' => 2,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 52
        DB::table('titulos')->insert([
            'nome'       => 'Invasão! Chega de Segredos!',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 53
        DB::table('titulos')->insert([
            'nome'       => 'Crise de Identidade',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 54
        DB::table('titulos')->insert([
            'nome'       => 'Crise Final - Edição Definitiva',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 55
        DB::table('titulos')->insert([
            'nome'       => 'Reino do Amanhã - Edição Definitiva',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 56
        DB::table('titulos')->insert([
            'nome'       => 'Reino do Amanhã - Edição Definitiva',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 57
        DB::table('titulos')->insert([
            'nome'       => 'Shazam! & A Sociedade dos Monstros',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 58
        DB::table('titulos')->insert([
            'nome'       => 'Shazam! & A Sociedade dos Monstros',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 59
        DB::table('titulos')->insert([
            'nome'       => 'Superman e A Legião dos Super-Heróis',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 60
        DB::table('titulos')->insert([
            'nome'       => 'O Dia Mais Claro',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 61
        DB::table('titulos')->insert([
            'nome'       => 'A Noite Mais Densa',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 62
        DB::table('titulos')->insert([
            'nome'       => 'Lanterna Verde - A Vingança dos Lanternas Verdes',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 63
        DB::table('titulos')->insert([
            'nome'       => 'Lanterna Verde - A Vingança dos Lanternas Verdes',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 64
        DB::table('titulos')->insert([
            'nome'       => 'Zero Hora - Crise no Tempo',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 65
        DB::table('titulos')->insert([
            'nome'       => 'Justiça - Edição Definitiva',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 66
        DB::table('titulos')->insert([
            'nome'       => 'Justiça - Edição Definitiva',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 67
        DB::table('titulos')->insert([
            'nome'       => 'Crise Infinita - Edição Definitiva',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 68
        DB::table('titulos')->insert([
            'nome'       => 'Arqueiro Verde - Máquina Mortífera',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 69
        DB::table('titulos')->insert([
            'nome'       => 'Arqueiro Verde - A Guerra dos Renegados',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 70
        DB::table('titulos')->insert([
            'nome'       => 'Arqueiro Verde - A Queda',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 71
        DB::table('titulos')->insert([
            'nome'       => 'Lendas do Universo DC: Lanterna Verde & Arqueiro Verde',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 72
        DB::table('titulos')->insert([
            'nome'       => 'Lanterna Verde & Arqueiro Verde - Sem Destino',
            'editora_id' => 12,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 73
        DB::table('titulos')->insert([
            'nome'       => 'Arqueiro Verde',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 74
        DB::table('titulos')->insert([
            'nome'       => 'Arqueiro Verde - Ano Um',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 75
        DB::table('titulos')->insert([
            'nome'       => 'Arqueiro Verde',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 76
        DB::table('titulos')->insert([
            'nome'       => 'Arqueiro Verde',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 77
        DB::table('titulos')->insert([
            'nome'       => 'Arqueiro Verde - Pássaros da Noite',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 78
        DB::table('titulos')->insert([
            'nome'       => 'Arqueiro Verde - O Surto',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 79
        DB::table('titulos')->insert([
            'nome'       => 'Lanterna Verde - A Guerra dos Anéis',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 80
        DB::table('titulos')->insert([
            'nome'       => 'Lanterna Verde - A Guerra dos Anéis',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 81
        DB::table('titulos')->insert([
            'nome'       => 'Arlequina - Apagão de Poder',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 82
        DB::table('titulos')->insert([
            'nome'       => 'Aquaman - As Profundezas',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 83
        DB::table('titulos')->insert([
            'nome'       => 'Aquaman - Os Outros',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 84
        DB::table('titulos')->insert([
            'nome'       => 'Aquaman - A Morte de Um Rei',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 85
        DB::table('titulos')->insert([
            'nome'       => 'Vilania Eterna',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 86
        DB::table('titulos')->insert([
            'nome'       => 'Vilania Eterna',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 87
        DB::table('titulos')->insert([
            'nome'       => 'Shazam! Com Uma Palavra Mágica...',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 88
        DB::table('titulos')->insert([
            'nome'       => 'Shazam! Com Uma Palavra Mágica...',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 89
        DB::table('titulos')->insert([
            'nome'       => 'Liga da Justiça da América - Os Mais Perigosos do Mundo',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 90
        DB::table('titulos')->insert([
            'nome'       => 'Mulher-Maravilha - Sangue',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 91
        DB::table('titulos')->insert([
            'nome'       => 'Mulher-Maravilha - Direito de Nascença',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 92
        DB::table('titulos')->insert([
            'nome'       => 'Mulher-Maravilha - Força',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 93
        DB::table('titulos')->insert([
            'nome'       => 'Mulher-Maravilha - Guerra',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 94
        DB::table('titulos')->insert([
            'nome'       => 'Mulher-Maravilha - Pele',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 95
        DB::table('titulos')->insert([
            'nome'       => 'Mulher-Maravilha - Ossos',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 96
        DB::table('titulos')->insert([
            'nome'       => 'Superman - Qual É O Preço do Amanhã?',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 97
        DB::table('titulos')->insert([
            'nome'       => 'Mulher-Maravilha - Sangue',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 98
        DB::table('titulos')->insert([
            'nome'       => 'Superman - À Prova de Balas',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 99
        DB::table('titulos')->insert([
            'nome'       => 'Os Livros do Destino',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 100
        DB::table('titulos')->insert([
            'nome'       => 'Os Caçadores',
            'editora_id' => 8,
            'status_id'  => 2,
            'observacao' => 'Os valores dos volumes desse título apesar de aparecem em Reais (R$), são em Cruzado Novo (NCz$).',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 101
        DB::table('titulos')->insert([
            'nome'       => 'Arqueiro Verde',
            'editora_id' => 3,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 102
        DB::table('titulos')->insert([
            'nome'       => 'Recado A Adolf',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 103
        DB::table('titulos')->insert([
            'nome'       => 'Sky Masters da Força Espacial',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 104
        DB::table('titulos')->insert([
            'nome'       => 'Grama',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 105
        DB::table('titulos')->insert([
            'nome'       => 'Fronteiras do Além',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 106
        DB::table('titulos')->insert([
            'nome'       => 'Cannon',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 107
        DB::table('titulos')->insert([
            'nome'       => 'Por Deus Ou Pelo Acaso',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 108
        DB::table('titulos')->insert([
            'nome'       => 'Maxwell, O Gato Mágico',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 109
        DB::table('titulos')->insert([
            'nome'       => 'Destino Adiado',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 110
        DB::table('titulos')->insert([
            'nome'       => 'Rohan No Louvre',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 111
        DB::table('titulos')->insert([
            'nome'       => 'O Preço da Desonra - Kubidai Hikiukenin',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 112
        DB::table('titulos')->insert([
            'nome'       => 'Lone Sloane',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 113
        DB::table('titulos')->insert([
            'nome'       => 'Um Pequeno Assassinato',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 114
        DB::table('titulos')->insert([
            'nome'       => 'Marada - A Mulher-Lobo',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 115
        DB::table('titulos')->insert([
            'nome'       => 'Cinco Por Infinito',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 116
        DB::table('titulos')->insert([
            'nome'       => 'O Relatório de Brodeck',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 117
        DB::table('titulos')->insert([
            'nome'       => 'Espadas e Bruxas',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 118
        DB::table('titulos')->insert([
            'nome'       => 'A Arte de Charlie Chan Hock Chye',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 119
        DB::table('titulos')->insert([
            'nome'       => 'A Arte de Charlie Chan Hock Chye',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 120
        DB::table('titulos')->insert([
            'nome'       => 'Guardiões do Louvre',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 121
        DB::table('titulos')->insert([
            'nome'       => 'Um Pedaço de Madeira e Aço',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 122
        DB::table('titulos')->insert([
            'nome'       => 'Jane',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 123
        DB::table('titulos')->insert([
            'nome'       => 'Roseira, Medalha, Engenho e Outras Histórias',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 124
        DB::table('titulos')->insert([
            'nome'       => 'Conto de Areia',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 125
        DB::table('titulos')->insert([
            'nome'       => 'Moby Dick',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 126
        DB::table('titulos')->insert([
            'nome'       => 'Blood - Uma História de Sangue',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 127
        DB::table('titulos')->insert([
            'nome'       => 'Moonshadow',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 128
        DB::table('titulos')->insert([
            'nome'       => 'Beasts of Burden',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 129
        DB::table('titulos')->insert([
            'nome'       => 'Beasts of Burden - Cães Sábios e Homens Nefastos',
            'editora_id' => 1,
            'status_id'  => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 130
        DB::table('titulos')->insert([
            'nome'       => 'Chainsaw Man',
            'editora_id' => 3,
            'status_id'  => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 131
        DB::table('titulos')->insert([
            'nome'       => 'Spy X Family',
            'editora_id' => 3,
            'status_id'  => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // 132
        DB::table('titulos')->insert([
            'nome'       => 'Edens Zero',
            'editora_id' => 2,
            'status_id'  => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //green blood, shaman king
    }
}