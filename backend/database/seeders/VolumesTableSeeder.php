<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VolumesTableSeeder extends Seeder {
    public function run() {
        if (true) { //Fullmetal Alchemist 1-27
            // 1
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 16.90,
                'titulo_id'       => 1,
                'data_lancamento' => '2016-07-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 2
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 16.90,
                'titulo_id'       => 1,
                'data_lancamento' => '2016-08-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 3
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 16.90,
                'titulo_id'       => 1,
                'data_lancamento' => '2016-09-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 4
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 16.90,
                'titulo_id'       => 1,
                'data_lancamento' => '2016-10-01',
                'ordem'           => 4,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 5
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 16.90,
                'titulo_id'       => 1,
                'data_lancamento' => '2016-11-01',
                'ordem'           => 5,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 6
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 16.90,
                'titulo_id'       => 1,
                'data_lancamento' => '2017-01-01',
                'ordem'           => 6,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 7
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 16.90,
                'titulo_id'       => 1,
                'data_lancamento' => '2017-02-01',
                'ordem'           => 7,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 8
            DB::table('volumes')->insert([
                'nome'            => 'Volume 08',
                'preco'           => 16.90,
                'titulo_id'       => 1,
                'data_lancamento' => '2017-03-01',
                'ordem'           => 8,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 9
            DB::table('volumes')->insert([
                'nome'            => 'Volume 09',
                'preco'           => 16.90,
                'titulo_id'       => 1,
                'data_lancamento' => '2017-04-01',
                'ordem'           => 9,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 10
            DB::table('volumes')->insert([
                'nome'            => 'Volume 10',
                'preco'           => 16.90,
                'titulo_id'       => 1,
                'data_lancamento' => '2017-05-01',
                'ordem'           => 10,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 11
            DB::table('volumes')->insert([
                'nome'            => 'Volume 11',
                'preco'           => 16.90,
                'titulo_id'       => 1,
                'data_lancamento' => '2017-06-01',
                'ordem'           => 11,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 12
            DB::table('volumes')->insert([
                'nome'            => 'Volume 12',
                'preco'           => 16.90,
                'titulo_id'       => 1,
                'data_lancamento' => '2017-07-01',
                'ordem'           => 12,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 13
            DB::table('volumes')->insert([
                'nome'            => 'Volume 13',
                'preco'           => 16.90,
                'titulo_id'       => 1,
                'data_lancamento' => '2017-09-01',
                'ordem'           => 13,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 14
            DB::table('volumes')->insert([
                'nome'            => 'Volume 14',
                'preco'           => 16.90,
                'titulo_id'       => 1,
                'data_lancamento' => '2017-10-01',
                'ordem'           => 14,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 15
            DB::table('volumes')->insert([
                'nome'            => 'Volume 15',
                'preco'           => 16.90,
                'titulo_id'       => 1,
                'data_lancamento' => '2017-11-01',
                'ordem'           => 15,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 16
            DB::table('volumes')->insert([
                'nome'            => 'Volume 16',
                'preco'           => 16.90,
                'titulo_id'       => 1,
                'data_lancamento' => '2017-12-01',
                'ordem'           => 16,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 17
            DB::table('volumes')->insert([
                'nome'            => 'Volume 17',
                'preco'           => 16.90,
                'titulo_id'       => 1,
                'data_lancamento' => '2018-01-01',
                'ordem'           => 17,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 18
            DB::table('volumes')->insert([
                'nome'            => 'Volume 18',
                'preco'           => 17.90,
                'titulo_id'       => 1,
                'data_lancamento' => '2018-02-01',
                'ordem'           => 18,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 19
            DB::table('volumes')->insert([
                'nome'            => 'Volume 19',
                'preco'           => 17.90,
                'titulo_id'       => 1,
                'data_lancamento' => '2018-03-01',
                'ordem'           => 19,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 20
            DB::table('volumes')->insert([
                'nome'            => 'Volume 20',
                'preco'           => 17.90,
                'titulo_id'       => 1,
                'data_lancamento' => '2018-04-01',
                'ordem'           => 20,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 21
            DB::table('volumes')->insert([
                'nome'            => 'Volume 21',
                'preco'           => 17.90,
                'titulo_id'       => 1,
                'data_lancamento' => '2018-06-01',
                'ordem'           => 21,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 22
            DB::table('volumes')->insert([
                'nome'            => 'Volume 22',
                'preco'           => 17.90,
                'titulo_id'       => 1,
                'data_lancamento' => '2018-07-01',
                'ordem'           => 22,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 23
            DB::table('volumes')->insert([
                'nome'            => 'Volume 23',
                'preco'           => 19.50,
                'titulo_id'       => 1,
                'data_lancamento' => '2018-09-01',
                'ordem'           => 23,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 24
            DB::table('volumes')->insert([
                'nome'            => 'Volume 24',
                'preco'           => 19.50,
                'titulo_id'       => 1,
                'data_lancamento' => '2018-10-01',
                'ordem'           => 24,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 25
            DB::table('volumes')->insert([
                'nome'            => 'Volume 25',
                'preco'           => 19.50,
                'titulo_id'       => 1,
                'data_lancamento' => '2018-11-01',
                'ordem'           => 25,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 26
            DB::table('volumes')->insert([
                'nome'            => 'Volume 26',
                'preco'           => 19.50,
                'titulo_id'       => 1,
                'data_lancamento' => '2018-11-01',
                'ordem'           => 26,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 27
            DB::table('volumes')->insert([
                'nome'            => 'Volume 27',
                'preco'           => 19.50,
                'titulo_id'       => 1,
                'data_lancamento' => '2018-11-01',
                'ordem'           => 27,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Virgem Depois dos 30 28
            // 28
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 49.90,
                'titulo_id'       => 3,
                'data_lancamento' => '2019-05-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }
        
        if (true) { //Yu Yu Hakusho 29-47
            // 29
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 14.90,
                'titulo_id'       => 4,
                'data_lancamento' => '2014-10-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 30
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 14.90,
                'titulo_id'       => 4,
                'data_lancamento' => '2014-11-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 31
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 14.90,
                'titulo_id'       => 4,
                'data_lancamento' => '2014-12-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 32
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 14.90,
                'titulo_id'       => 4,
                'data_lancamento' => '2015-01-01',
                'ordem'           => 4,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 33
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 14.90,
                'titulo_id'       => 4,
                'data_lancamento' => '2015-02-01',
                'ordem'           => 5,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 34
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 14.90,
                'titulo_id'       => 4,
                'data_lancamento' => '2015-03-01',
                'ordem'           => 6,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 35
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 14.90,
                'titulo_id'       => 4,
                'data_lancamento' => '2015-04-01',
                'ordem'           => 7,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 36
            DB::table('volumes')->insert([
                'nome'            => 'Volume 08',
                'preco'           => 14.90,
                'titulo_id'       => 4,
                'data_lancamento' => '2015-05-01',
                'ordem'           => 8,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 37
            DB::table('volumes')->insert([
                'nome'            => 'Volume 09',
                'preco'           => 14.90,
                'titulo_id'       => 4,
                'data_lancamento' => '2015-06-01',
                'ordem'           => 9,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 38
            DB::table('volumes')->insert([
                'nome'            => 'Volume 10',
                'preco'           => 14.90,
                'titulo_id'       => 4,
                'data_lancamento' => '2015-07-01',
                'ordem'           => 10,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 39
            DB::table('volumes')->insert([
                'nome'            => 'Volume 11',
                'preco'           => 14.90,
                'titulo_id'       => 4,
                'data_lancamento' => '2015-08-01',
                'ordem'           => 11,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 40
            DB::table('volumes')->insert([
                'nome'            => 'Volume 12',
                'preco'           => 14.90,
                'titulo_id'       => 4,
                'data_lancamento' => '2015-09-01',
                'ordem'           => 12,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 41
            DB::table('volumes')->insert([
                'nome'            => 'Volume 13',
                'preco'           => 14.90,
                'titulo_id'       => 4,
                'data_lancamento' => '2015-10-01',
                'ordem'           => 13,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 42
            DB::table('volumes')->insert([
                'nome'            => 'Volume 14',
                'preco'           => 14.90,
                'titulo_id'       => 4,
                'data_lancamento' => '2015-11-01',
                'ordem'           => 14,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 43
            DB::table('volumes')->insert([
                'nome'            => 'Volume 15',
                'preco'           => 15.90,
                'titulo_id'       => 4,
                'data_lancamento' => '2015-12-01',
                'ordem'           => 15,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 44
            DB::table('volumes')->insert([
                'nome'            => 'Volume 16',
                'preco'           => 15.90,
                'titulo_id'       => 4,
                'data_lancamento' => '2016-01-01',
                'ordem'           => 16,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 45
            DB::table('volumes')->insert([
                'nome'            => 'Volume 17',
                'preco'           => 15.90,
                'titulo_id'       => 4,
                'data_lancamento' => '2016-02-01',
                'ordem'           => 17,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 46
            DB::table('volumes')->insert([
                'nome'            => 'Volume 18',
                'preco'           => 15.90,
                'titulo_id'       => 4,
                'data_lancamento' => '2016-03-01',
                'ordem'           => 18,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 47
            DB::table('volumes')->insert([
                'nome'            => 'Volume 19',
                'preco'           => 15.90,
                'titulo_id'       => 4,
                'data_lancamento' => '2016-04-01',
                'ordem'           => 19,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Dragon Ball 48-89
            // 48
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 10.90,
                'titulo_id'       => 9,
                'data_lancamento' => '2012-05-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 49
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 10.90,
                'titulo_id'       => 9,
                'data_lancamento' => '2012-06-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 50
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 10.90,
                'titulo_id'       => 9,
                'data_lancamento' => '2012-07-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 51
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 10.90,
                'titulo_id'       => 9,
                'data_lancamento' => '2012-08-01',
                'ordem'           => 4,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 52
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 10.90,
                'titulo_id'       => 9,
                'data_lancamento' => '2012-09-01',
                'ordem'           => 5,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 53
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 10.90,
                'titulo_id'       => 9,
                'data_lancamento' => '2012-10-01',
                'ordem'           => 6,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 54
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 10.90,
                'titulo_id'       => 9,
                'data_lancamento' => '2012-11-01',
                'ordem'           => 7,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 55
            DB::table('volumes')->insert([
                'nome'            => 'Volume 08',
                'preco'           => 10.90,
                'titulo_id'       => 9,
                'data_lancamento' => '2012-12-01',
                'ordem'           => 8,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 56
            DB::table('volumes')->insert([
                'nome'            => 'Volume 09',
                'preco'           => 10.90,
                'titulo_id'       => 9,
                'data_lancamento' => '2013-01-01',
                'ordem'           => 9,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 57
            DB::table('volumes')->insert([
                'nome'            => 'Volume 10',
                'preco'           => 10.90,
                'titulo_id'       => 9,
                'data_lancamento' => '2013-02-01',
                'ordem'           => 10,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 58
            DB::table('volumes')->insert([
                'nome'            => 'Volume 11',
                'preco'           => 10.90,
                'titulo_id'       => 9,
                'data_lancamento' => '2013-03-01',
                'ordem'           => 11,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 59
            DB::table('volumes')->insert([
                'nome'            => 'Volume 12',
                'preco'           => 10.90,
                'titulo_id'       => 9,
                'data_lancamento' => '2013-04-01',
                'ordem'           => 12,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 60
            DB::table('volumes')->insert([
                'nome'            => 'Volume 13',
                'preco'           => 10.90,
                'titulo_id'       => 9,
                'data_lancamento' => '2013-05-01',
                'ordem'           => 13,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 61
            DB::table('volumes')->insert([
                'nome'            => 'Volume 14',
                'preco'           => 10.90,
                'titulo_id'       => 9,
                'data_lancamento' => '2013-06-01',
                'ordem'           => 14,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 62
            DB::table('volumes')->insert([
                'nome'            => 'Volume 15',
                'preco'           => 10.90,
                'titulo_id'       => 9,
                'data_lancamento' => '2013-07-01',
                'ordem'           => 15,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 63
            DB::table('volumes')->insert([
                'nome'            => 'Volume 16',
                'preco'           => 10.90,
                'titulo_id'       => 9,
                'data_lancamento' => '2013-08-01',
                'ordem'           => 16,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 64
            DB::table('volumes')->insert([
                'nome'            => 'Volume 17',
                'preco'           => 10.90,
                'titulo_id'       => 9,
                'data_lancamento' => '2013-09-01',
                'ordem'           => 17,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 65
            DB::table('volumes')->insert([
                'nome'            => 'Volume 18',
                'preco'           => 10.90,
                'titulo_id'       => 9,
                'data_lancamento' => '2013-10-01',
                'ordem'           => 18,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 66
            DB::table('volumes')->insert([
                'nome'            => 'Volume 19',
                'preco'           => 10.90,
                'titulo_id'       => 9,
                'data_lancamento' => '2013-11-01',
                'ordem'           => 19,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 67
            DB::table('volumes')->insert([
                'nome'            => 'Volume 20',
                'preco'           => 10.90,
                'titulo_id'       => 9,
                'data_lancamento' => '2013-12-01',
                'ordem'           => 20,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 68
            DB::table('volumes')->insert([
                'nome'            => 'Volume 21',
                'preco'           => 10.90,
                'titulo_id'       => 9,
                'data_lancamento' => '2014-01-01',
                'ordem'           => 21,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 69
            DB::table('volumes')->insert([
                'nome'            => 'Volume 22',
                'preco'           => 10.90,
                'titulo_id'       => 9,
                'data_lancamento' => '2014-02-01',
                'ordem'           => 22,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 70
            DB::table('volumes')->insert([
                'nome'            => 'Volume 23',
                'preco'           => 10.90,
                'titulo_id'       => 9,
                'data_lancamento' => '2014-03-01',
                'ordem'           => 23,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 71
            DB::table('volumes')->insert([
                'nome'            => 'Volume 24',
                'preco'           => 10.90,
                'titulo_id'       => 9,
                'data_lancamento' => '2014-04-01',
                'ordem'           => 24,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 72
            DB::table('volumes')->insert([
                'nome'            => 'Volume 25',
                'preco'           => 11.50,
                'titulo_id'       => 9,
                'data_lancamento' => '2014-05-01',
                'ordem'           => 25,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 73
            DB::table('volumes')->insert([
                'nome'            => 'Volume 26',
                'preco'           => 11.50,
                'titulo_id'       => 9,
                'data_lancamento' => '2014-06-01',
                'ordem'           => 26,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 74
            DB::table('volumes')->insert([
                'nome'            => 'Volume 27',
                'preco'           => 11.50,
                'titulo_id'       => 9,
                'data_lancamento' => '2014-07-01',
                'ordem'           => 27,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 75
            DB::table('volumes')->insert([
                'nome'            => 'Volume 28',
                'preco'           => 11.50,
                'titulo_id'       => 9,
                'data_lancamento' => '2014-08-01',
                'ordem'           => 28,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 76
            DB::table('volumes')->insert([
                'nome'            => 'Volume 29',
                'preco'           => 11.50,
                'titulo_id'       => 9,
                'data_lancamento' => '2014-09-01',
                'ordem'           => 29,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 77
            DB::table('volumes')->insert([
                'nome'            => 'Volume 30',
                'preco'           => 11.50,
                'titulo_id'       => 9,
                'data_lancamento' => '2014-10-01',
                'ordem'           => 30,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 78
            DB::table('volumes')->insert([
                'nome'            => 'Volume 31',
                'preco'           => 11.50,
                'titulo_id'       => 9,
                'data_lancamento' => '2014-11-01',
                'ordem'           => 31,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 79
            DB::table('volumes')->insert([
                'nome'            => 'Volume 32',
                'preco'           => 11.50,
                'titulo_id'       => 9,
                'data_lancamento' => '2014-12-01',
                'ordem'           => 32,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 80
            DB::table('volumes')->insert([
                'nome'            => 'Volume 33',
                'preco'           => 11.50,
                'titulo_id'       => 9,
                'data_lancamento' => '2015-01-01',
                'ordem'           => 33,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 81
            DB::table('volumes')->insert([
                'nome'            => 'Volume 34',
                'preco'           => 11.50,
                'titulo_id'       => 9,
                'data_lancamento' => '2015-02-01',
                'ordem'           => 34,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 82
            DB::table('volumes')->insert([
                'nome'            => 'Volume 35',
                'preco'           => 11.50,
                'titulo_id'       => 9,
                'data_lancamento' => '2015-03-01',
                'ordem'           => 35,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 83
            DB::table('volumes')->insert([
                'nome'            => 'Volume 36',
                'preco'           => 11.50,
                'titulo_id'       => 9,
                'data_lancamento' => '2015-04-01',
                'ordem'           => 36,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 84
            DB::table('volumes')->insert([
                'nome'            => 'Volume 37',
                'preco'           => 11.50,
                'titulo_id'       => 9,
                'data_lancamento' => '2015-05-01',
                'ordem'           => 37,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 85
            DB::table('volumes')->insert([
                'nome'            => 'Volume 38',
                'preco'           => 11.50,
                'titulo_id'       => 9,
                'data_lancamento' => '2015-06-01',
                'ordem'           => 38,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 86
            DB::table('volumes')->insert([
                'nome'            => 'Volume 39',
                'preco'           => 11.50,
                'titulo_id'       => 9,
                'data_lancamento' => '2015-07-01',
                'ordem'           => 39,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 87
            DB::table('volumes')->insert([
                'nome'            => 'Volume 40',
                'preco'           => 11.50,
                'titulo_id'       => 9,
                'data_lancamento' => '2015-08-01',
                'ordem'           => 40,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 88
            DB::table('volumes')->insert([
                'nome'            => 'Volume 41',
                'preco'           => 11.50,
                'titulo_id'       => 9,
                'data_lancamento' => '2015-09-01',
                'ordem'           => 41,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 89
            DB::table('volumes')->insert([
                'nome'            => 'Volume 42',
                'preco'           => 11.50,
                'titulo_id'       => 9,
                'data_lancamento' => '2015-10-01',
                'ordem'           => 42,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Watchmen 90
            // 90
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 110.00,
                'titulo_id'       => 23,
                'data_lancamento' => '2017-12-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Antes de Watchmen 91-94
            // 91
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 74.00,
                'titulo_id'       => 24,
                'data_lancamento' => '2019-03-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 92
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 97.00,
                'titulo_id'       => 25,
                'data_lancamento' => '2019-10-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 93
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 97.00,
                'titulo_id'       => 26,
                'data_lancamento' => '2019-11-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 94
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 84.00,
                'titulo_id'       => 27,
                'data_lancamento' => '2019-12-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Injusti??a 95-107
            // 95
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 22.90,
                'titulo_id'       => 18,
                'data_lancamento' => '2014-03-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 96
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 24.90,
                'titulo_id'       => 18,
                'data_lancamento' => '2014-12-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 97
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 18.90,
                'titulo_id'       => 18,
                'data_lancamento' => '2015-03-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 98
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 22.90,
                'titulo_id'       => 18,
                'data_lancamento' => '2015-10-01',
                'ordem'           => 4,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 99
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 22.90,
                'titulo_id'       => 18,
                'data_lancamento' => '2016-04-01',
                'ordem'           => 5,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 100
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 22.90,
                'titulo_id'       => 18,
                'data_lancamento' => '2016-10-01',
                'ordem'           => 6,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 101
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 22.90,
                'titulo_id'       => 18,
                'data_lancamento' => '2017-04-01',
                'ordem'           => 7,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 102
            DB::table('volumes')->insert([
                'nome'            => 'Volume 08',
                'preco'           => 22.90,
                'titulo_id'       => 18,
                'data_lancamento' => '2017-10-01',
                'ordem'           => 8,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 103
            DB::table('volumes')->insert([
                'nome'            => 'Volume 09',
                'preco'           => 26.90,
                'titulo_id'       => 18,
                'data_lancamento' => '2018-02-01',
                'ordem'           => 9,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 104
            DB::table('volumes')->insert([
                'nome'            => 'Volume 10',
                'preco'           => 24.90,
                'titulo_id'       => 18,
                'data_lancamento' => '2018-06-01',
                'ordem'           => 10,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 105
            DB::table('volumes')->insert([
                'nome'            => 'Volume 11',
                'preco'           => 26.90,
                'titulo_id'       => 18,
                'data_lancamento' => '2018-10-01',
                'ordem'           => 11,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 106
            DB::table('volumes')->insert([
                'nome'            => 'Volume 12',
                'preco'           => 21.90,
                'titulo_id'       => 18,
                'data_lancamento' => '2019-01-01',
                'ordem'           => 12,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 107
            DB::table('volumes')->insert([
                'nome'            => 'Volume 13',
                'preco'           => 22.90,
                'titulo_id'       => 18,
                'data_lancamento' => '2019-10-01',
                'ordem'           => 13,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Black Hammer 108-111
            // 108
            DB::table('volumes')->insert([
                'nome'            => 'Origens Secretas',
                'preco'           => 39.90,
                'titulo_id'       => 21,
                'data_lancamento' => '2018-05-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 109
            DB::table('volumes')->insert([
                'nome'            => 'O Evento',
                'preco'           => 44.90,
                'titulo_id'       => 21,
                'data_lancamento' => '2018-10-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 110
            DB::table('volumes')->insert([
                'nome'            => 'Era da Destrui????o - Parte I',
                'preco'           => 44.90,
                'titulo_id'       => 21,
                'data_lancamento' => '2019-04-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 111
            DB::table('volumes')->insert([
                'nome'            => 'Era da Destrui????o - Parte II',
                'preco'           => 44.90,
                'titulo_id'       => 21,
                'data_lancamento' => '2020-04-01',
                'ordem'           => 4,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Rurouni Kenshin 112-139
            // 112
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2012-11-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 113
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2012-12-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 114
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2013-01-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 115
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2013-02-01',
                'ordem'           => 4,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 116
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2013-03-01',
                'ordem'           => 5,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 117
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2013-04-01',
                'ordem'           => 6,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 118
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2013-05-01',
                'ordem'           => 7,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 119
            DB::table('volumes')->insert([
                'nome'            => 'Volume 08',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2013-06-01',
                'ordem'           => 8,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 120
            DB::table('volumes')->insert([
                'nome'            => 'Volume 09',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2013-07-01',
                'ordem'           => 9,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 121
            DB::table('volumes')->insert([
                'nome'            => 'Volume 10',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2013-08-01',
                'ordem'           => 10,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 122
            DB::table('volumes')->insert([
                'nome'            => 'Volume 11',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2013-09-01',
                'ordem'           => 11,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 123
            DB::table('volumes')->insert([
                'nome'            => 'Volume 12',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2013-10-01',
                'ordem'           => 12,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 124
            DB::table('volumes')->insert([
                'nome'            => 'Volume 13',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2013-11-01',
                'ordem'           => 13,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 125
            DB::table('volumes')->insert([
                'nome'            => 'Volume 14',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2013-12-01',
                'ordem'           => 14,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 126
            DB::table('volumes')->insert([
                'nome'            => 'Volume 15',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2014-01-01',
                'ordem'           => 15,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 127
            DB::table('volumes')->insert([
                'nome'            => 'Volume 16',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2014-02-01',
                'ordem'           => 16,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 128
            DB::table('volumes')->insert([
                'nome'            => 'Volume 17',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2014-04-01',
                'ordem'           => 17,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 129
            DB::table('volumes')->insert([
                'nome'            => 'Volume 18',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2014-05-01',
                'ordem'           => 18,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 130
            DB::table('volumes')->insert([
                'nome'            => 'Volume 19',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2014-06-01',
                'ordem'           => 19,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 131
            DB::table('volumes')->insert([
                'nome'            => 'Volume 20',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2014-07-01',
                'ordem'           => 20,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 132
            DB::table('volumes')->insert([
                'nome'            => 'Volume 21',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2014-08-01',
                'ordem'           => 21,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 133
            DB::table('volumes')->insert([
                'nome'            => 'Volume 22',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2014-09-01',
                'ordem'           => 22,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 134
            DB::table('volumes')->insert([
                'nome'            => 'Volume 23',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2014-10-01',
                'ordem'           => 23,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 135
            DB::table('volumes')->insert([
                'nome'            => 'Volume 24',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2014-11-01',
                'ordem'           => 24,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 136
            DB::table('volumes')->insert([
                'nome'            => 'Volume 25',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2014-12-01',
                'ordem'           => 25,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 137
            DB::table('volumes')->insert([
                'nome'            => 'Volume 26',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2015-01-01',
                'ordem'           => 26,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 138
            DB::table('volumes')->insert([
                'nome'            => 'Volume 27',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2015-02-01',
                'ordem'           => 27,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 139
            DB::table('volumes')->insert([
                'nome'            => 'Volume 28',
                'preco'           => 13.90,
                'titulo_id'       => 29,
                'data_lancamento' => '2015-03-01',
                'ordem'           => 28,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Bakuman 140-159
            // 140
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 10.90,
                'titulo_id'       => 32,
                'data_lancamento' => '2011-08-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 141
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 10.90,
                'titulo_id'       => 32,
                'data_lancamento' => '2011-09-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 142
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 10.90,
                'titulo_id'       => 32,
                'data_lancamento' => '2011-10-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 143
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 10.90,
                'titulo_id'       => 32,
                'data_lancamento' => '2011-11-01',
                'ordem'           => 4,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 144
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 10.90,
                'titulo_id'       => 32,
                'data_lancamento' => '2011-12-01',
                'ordem'           => 5,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 145
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 10.90,
                'titulo_id'       => 32,
                'data_lancamento' => '2012-01-01',
                'ordem'           => 6,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 156
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 10.90,
                'titulo_id'       => 32,
                'data_lancamento' => '2012-02-01',
                'ordem'           => 7,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 157
            DB::table('volumes')->insert([
                'nome'            => 'Volume 08',
                'preco'           => 10.90,
                'titulo_id'       => 32,
                'data_lancamento' => '2012-04-01',
                'ordem'           => 8,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 158
            DB::table('volumes')->insert([
                'nome'            => 'Volume 09',
                'preco'           => 10.90,
                'titulo_id'       => 32,
                'data_lancamento' => '2012-05-01',
                'ordem'           => 9,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 159
            DB::table('volumes')->insert([
                'nome'            => 'Volume 10',
                'preco'           => 11.90,
                'titulo_id'       => 32,
                'data_lancamento' => '2012-06-01',
                'ordem'           => 10,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 150
            DB::table('volumes')->insert([
                'nome'            => 'Volume 11',
                'preco'           => 11.90,
                'titulo_id'       => 32,
                'data_lancamento' => '2012-07-01',
                'ordem'           => 11,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 151
            DB::table('volumes')->insert([
                'nome'            => 'Volume 12',
                'preco'           => 11.90,
                'titulo_id'       => 32,
                'data_lancamento' => '2012-08-01',
                'ordem'           => 12,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 152
            DB::table('volumes')->insert([
                'nome'            => 'Volume 13',
                'preco'           => 11.90,
                'titulo_id'       => 32,
                'data_lancamento' => '2012-09-01',
                'ordem'           => 13,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 153
            DB::table('volumes')->insert([
                'nome'            => 'Volume 14',
                'preco'           => 11.90,
                'titulo_id'       => 32,
                'data_lancamento' => '2012-10-01',
                'ordem'           => 14,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 154
            DB::table('volumes')->insert([
                'nome'            => 'Volume 15',
                'preco'           => 11.90,
                'titulo_id'       => 32,
                'data_lancamento' => '2012-11-01',
                'ordem'           => 15,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 155
            DB::table('volumes')->insert([
                'nome'            => 'Volume 16',
                'preco'           => 11.90,
                'titulo_id'       => 32,
                'data_lancamento' => '2012-12-01',
                'ordem'           => 16,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 156
            DB::table('volumes')->insert([
                'nome'            => 'Volume 17',
                'preco'           => 11.90,
                'titulo_id'       => 32,
                'data_lancamento' => '2013-01-01',
                'ordem'           => 17,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 157
            DB::table('volumes')->insert([
                'nome'            => 'Volume 18',
                'preco'           => 11.90,
                'titulo_id'       => 32,
                'data_lancamento' => '2013-02-01',
                'ordem'           => 18,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 158
            DB::table('volumes')->insert([
                'nome'            => 'Volume 19',
                'preco'           => 11.90,
                'titulo_id'       => 32,
                'data_lancamento' => '2013-03-01',
                'ordem'           => 19,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 159
            DB::table('volumes')->insert([
                'nome'            => 'Volume 20',
                'preco'           => 11.90,
                'titulo_id'       => 32,
                'data_lancamento' => '2013-04-01',
                'ordem'           => 20,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Soul Eater 160-184
            // 160
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 10.90,
                'titulo_id'       => 30,
                'data_lancamento' => '2012-07-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 161
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 10.90,
                'titulo_id'       => 30,
                'data_lancamento' => '2012-08-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 162
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 10.90,
                'titulo_id'       => 30,
                'data_lancamento' => '2012-10-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 163
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 10.90,
                'titulo_id'       => 30,
                'data_lancamento' => '2012-11-01',
                'ordem'           => 4,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 164
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 10.90,
                'titulo_id'       => 30,
                'data_lancamento' => '2012-12-01',
                'ordem'           => 5,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 165
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 10.90,
                'titulo_id'       => 30,
                'data_lancamento' => '2013-01-01',
                'ordem'           => 6,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 166
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 10.90,
                'titulo_id'       => 30,
                'data_lancamento' => '2013-02-01',
                'ordem'           => 7,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 167
            DB::table('volumes')->insert([
                'nome'            => 'Volume 08',
                'preco'           => 10.90,
                'titulo_id'       => 30,
                'data_lancamento' => '2013-03-01',
                'ordem'           => 8,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 168
            DB::table('volumes')->insert([
                'nome'            => 'Volume 09',
                'preco'           => 10.90,
                'titulo_id'       => 30,
                'data_lancamento' => '2013-04-01',
                'ordem'           => 9,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 169
            DB::table('volumes')->insert([
                'nome'            => 'Volume 10',
                'preco'           => 10.90,
                'titulo_id'       => 30,
                'data_lancamento' => '2013-05-01',
                'ordem'           => 10,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 170
            DB::table('volumes')->insert([
                'nome'            => 'Volume 11',
                'preco'           => 10.90,
                'titulo_id'       => 30,
                'data_lancamento' => '2013-06-01',
                'ordem'           => 11,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 171
            DB::table('volumes')->insert([
                'nome'            => 'Volume 12',
                'preco'           => 10.90,
                'titulo_id'       => 30,
                'data_lancamento' => '2013-07-01',
                'ordem'           => 12,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 172
            DB::table('volumes')->insert([
                'nome'            => 'Volume 13',
                'preco'           => 10.90,
                'titulo_id'       => 30,
                'data_lancamento' => '2013-08-01',
                'ordem'           => 13,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 173
            DB::table('volumes')->insert([
                'nome'            => 'Volume 14',
                'preco'           => 10.90,
                'titulo_id'       => 30,
                'data_lancamento' => '2013-09-01',
                'ordem'           => 14,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 174
            DB::table('volumes')->insert([
                'nome'            => 'Volume 15',
                'preco'           => 10.90,
                'titulo_id'       => 30,
                'data_lancamento' => '2013-10-01',
                'ordem'           => 15,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 175
            DB::table('volumes')->insert([
                'nome'            => 'Volume 16',
                'preco'           => 10.90,
                'titulo_id'       => 30,
                'data_lancamento' => '2013-11-01',
                'ordem'           => 16,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 176
            DB::table('volumes')->insert([
                'nome'            => 'Volume 17',
                'preco'           => 10.90,
                'titulo_id'       => 30,
                'data_lancamento' => '2013-12-01',
                'ordem'           => 17,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 177
            DB::table('volumes')->insert([
                'nome'            => 'Volume 18',
                'preco'           => 10.90,
                'titulo_id'       => 30,
                'data_lancamento' => '2014-01-01',
                'ordem'           => 18,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 178
            DB::table('volumes')->insert([
                'nome'            => 'Volume 19',
                'preco'           => 11.90,
                'titulo_id'       => 30,
                'data_lancamento' => '2014-02-01',
                'ordem'           => 19,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 179
            DB::table('volumes')->insert([
                'nome'            => 'Volume 20',
                'preco'           => 11.90,
                'titulo_id'       => 30,
                'data_lancamento' => '2014-03-01',
                'ordem'           => 20,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 180
            DB::table('volumes')->insert([
                'nome'            => 'Volume 21',
                'preco'           => 11.90,
                'titulo_id'       => 30,
                'data_lancamento' => '2014-04-01',
                'ordem'           => 21,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 181
            DB::table('volumes')->insert([
                'nome'            => 'Volume 22',
                'preco'           => 11.90,
                'titulo_id'       => 30,
                'data_lancamento' => '2014-05-01',
                'ordem'           => 22,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 182
            DB::table('volumes')->insert([
                'nome'            => 'Volume 23',
                'preco'           => 11.90,
                'titulo_id'       => 30,
                'data_lancamento' => '2014-06-01',
                'ordem'           => 23,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 183
            DB::table('volumes')->insert([
                'nome'            => 'Volume 24',
                'preco'           => 11.90,
                'titulo_id'       => 30,
                'data_lancamento' => '2014-07-01',
                'ordem'           => 24,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 184
            DB::table('volumes')->insert([
                'nome'            => 'Volume 25',
                'preco'           => 11.90,
                'titulo_id'       => 30,
                'data_lancamento' => '2014-08-01',
                'ordem'           => 25,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //O M??skara 185
            // 185
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 84.90,
                'titulo_id'       => 22,
                'data_lancamento' => '2020-04-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Death Note 186-198
            // 186
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 10.90,
                'titulo_id'       => 33,
                'data_lancamento' => '2007-06-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 187
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 10.90,
                'titulo_id'       => 33,
                'data_lancamento' => '2007-07-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 188
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 10.90,
                'titulo_id'       => 33,
                'data_lancamento' => '2007-08-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 189
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 10.90,
                'titulo_id'       => 33,
                'data_lancamento' => '2007-09-01',
                'ordem'           => 4,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 190
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 10.90,
                'titulo_id'       => 33,
                'data_lancamento' => '2007-10-01',
                'ordem'           => 5,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 191
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 10.90,
                'titulo_id'       => 33,
                'data_lancamento' => '2007-11-01',
                'ordem'           => 6,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 192
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 10.90,
                'titulo_id'       => 33,
                'data_lancamento' => '2007-12-01',
                'ordem'           => 7,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 193
            DB::table('volumes')->insert([
                'nome'            => 'Volume 08',
                'preco'           => 10.90,
                'titulo_id'       => 33,
                'data_lancamento' => '2008-01-01',
                'ordem'           => 8,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 194
            DB::table('volumes')->insert([
                'nome'            => 'Volume 09',
                'preco'           => 10.90,
                'titulo_id'       => 33,
                'data_lancamento' => '2008-03-01',
                'ordem'           => 9,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 195
            DB::table('volumes')->insert([
                'nome'            => 'Volume 10',
                'preco'           => 10.90,
                'titulo_id'       => 33,
                'data_lancamento' => '2087-04-01',
                'ordem'           => 10,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 196
            DB::table('volumes')->insert([
                'nome'            => 'Volume 11',
                'preco'           => 10.90,
                'titulo_id'       => 33,
                'data_lancamento' => '2008-05-01',
                'ordem'           => 11,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 197
            DB::table('volumes')->insert([
                'nome'            => 'Volume 12',
                'preco'           => 10.90,
                'titulo_id'       => 33,
                'data_lancamento' => '2008-06-01',
                'ordem'           => 12,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 198
            DB::table('volumes')->insert([
                'nome'            => 'Volume 13',
                'preco'           => 19.90,
                'titulo_id'       => 33,
                'data_lancamento' => '2008-08-01',
                'ordem'           => 13,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Death Note - Black Edition 199-204
            // 199
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 39.00,
                'titulo_id'       => 34,
                'data_lancamento' => '2013-06-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 200
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 39.00,
                'titulo_id'       => 34,
                'data_lancamento' => '2013-07-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 201
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 39.00,
                'titulo_id'       => 34,
                'data_lancamento' => '2013-08-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 202
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 39.00,
                'titulo_id'       => 34,
                'data_lancamento' => '2013-10-01',
                'ordem'           => 4,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 203
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 39.00,
                'titulo_id'       => 34,
                'data_lancamento' => '2013-11-01',
                'ordem'           => 5,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 204
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 39.00,
                'titulo_id'       => 34,
                'data_lancamento' => '2013-12-01',
                'ordem'           => 6,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Death Note - Black Edition: How To Read 205
            // 205
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 39.00,
                'titulo_id'       => 35,
                'data_lancamento' => '2017-12-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Magi: O Labirinto da Magia 206-242
            // 206
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 12.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2014-07-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 207
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 12.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2014-08-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 208
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 12.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2014-09-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 209
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 12.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2014-10-01',
                'ordem'           => 4,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 210
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 12.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2014-11-01',
                'ordem'           => 5,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 211
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 12.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2014-12-01',
                'ordem'           => 6,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 212
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 12.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2015-01-01',
                'ordem'           => 7,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 213
            DB::table('volumes')->insert([
                'nome'            => 'Volume 08',
                'preco'           => 12.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2015-02-01',
                'ordem'           => 8,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 214
            DB::table('volumes')->insert([
                'nome'            => 'Volume 09',
                'preco'           => 12.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2015-03-01',
                'ordem'           => 9,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 215
            DB::table('volumes')->insert([
                'nome'            => 'Volume 10',
                'preco'           => 12.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2015-04-01',
                'ordem'           => 10,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 216
            DB::table('volumes')->insert([
                'nome'            => 'Volume 11',
                'preco'           => 12.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2015-05-01',
                'ordem'           => 11,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 217
            DB::table('volumes')->insert([
                'nome'            => 'Volume 12',
                'preco'           => 12.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2015-06-01',
                'ordem'           => 12,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 218
            DB::table('volumes')->insert([
                'nome'            => 'Volume 13',
                'preco'           => 12.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2015-08-01',
                'ordem'           => 13,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 219
            DB::table('volumes')->insert([
                'nome'            => 'Volume 14',
                'preco'           => 12.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2015-09-01',
                'ordem'           => 14,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 220
            DB::table('volumes')->insert([
                'nome'            => 'Volume 15',
                'preco'           => 12.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2015-10-01',
                'ordem'           => 15,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 221
            DB::table('volumes')->insert([
                'nome'            => 'Volume 16',
                'preco'           => 12.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2015-11-01',
                'ordem'           => 16,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 222
            DB::table('volumes')->insert([
                'nome'            => 'Volume 17',
                'preco'           => 12.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2015-12-01',
                'ordem'           => 17,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 223
            DB::table('volumes')->insert([
                'nome'            => 'Volume 18',
                'preco'           => 12.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2016-01-01',
                'ordem'           => 18,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 224
            DB::table('volumes')->insert([
                'nome'            => 'Volume 19',
                'preco'           => 13.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2016-02-01',
                'ordem'           => 19,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 225
            DB::table('volumes')->insert([
                'nome'            => 'Volume 20',
                'preco'           => 13.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2016-03-01',
                'ordem'           => 20,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 226
            DB::table('volumes')->insert([
                'nome'            => 'Volume 21',
                'preco'           => 13.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2016-04-01',
                'ordem'           => 21,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 227
            DB::table('volumes')->insert([
                'nome'            => 'Volume 22',
                'preco'           => 13.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2016-06-01',
                'ordem'           => 22,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 228
            DB::table('volumes')->insert([
                'nome'            => 'Volume 23',
                'preco'           => 13.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2016-07-01',
                'ordem'           => 23,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 229
            DB::table('volumes')->insert([
                'nome'            => 'Volume 24',
                'preco'           => 13.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2016-09-01',
                'ordem'           => 24,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 230
            DB::table('volumes')->insert([
                'nome'            => 'Volume 25',
                'preco'           => 13.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2016-12-01',
                'ordem'           => 25,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 231
            DB::table('volumes')->insert([
                'nome'            => 'Volume 26',
                'preco'           => 14.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2017-02-01',
                'ordem'           => 26,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 232
            DB::table('volumes')->insert([
                'nome'            => 'Volume 27',
                'preco'           => 14.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2017-04-01',
                'ordem'           => 27,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 233
            DB::table('volumes')->insert([
                'nome'            => 'Volume 28',
                'preco'           => 14.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2017-06-01',
                'ordem'           => 28,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 234
            DB::table('volumes')->insert([
                'nome'            => 'Volume 29',
                'preco'           => 14.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2017-08-01',
                'ordem'           => 29,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 235
            DB::table('volumes')->insert([
                'nome'            => 'Volume 30',
                'preco'           => 14.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2017-10-01',
                'ordem'           => 30,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 236
            DB::table('volumes')->insert([
                'nome'            => 'Volume 31',
                'preco'           => 15.50,
                'titulo_id'       => 36,
                'data_lancamento' => '2018-01-01',
                'ordem'           => 31,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 237
            DB::table('volumes')->insert([
                'nome'            => 'Volume 32',
                'preco'           => 15.50,
                'titulo_id'       => 36,
                'data_lancamento' => '2018-03-01',
                'ordem'           => 32,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 238
            DB::table('volumes')->insert([
                'nome'            => 'Volume 33',
                'preco'           => 15.50,
                'titulo_id'       => 36,
                'data_lancamento' => '2018-06-01',
                'ordem'           => 33,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 239
            DB::table('volumes')->insert([
                'nome'            => 'Volume 34',
                'preco'           => 17.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2018-11-01',
                'ordem'           => 34,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 240
            DB::table('volumes')->insert([
                'nome'            => 'Volume 35',
                'preco'           => 17.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2018-11-01',
                'ordem'           => 35,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 241
            DB::table('volumes')->insert([
                'nome'            => 'Volume 36',
                'preco'           => 17.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2018-12-01',
                'ordem'           => 36,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 242
            DB::table('volumes')->insert([
                'nome'            => 'Volume 37',
                'preco'           => 17.90,
                'titulo_id'       => 36,
                'data_lancamento' => '2018-12-01',
                'ordem'           => 37,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Yu-Gi-Oh! 243-280
            // 243
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2006-07-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 244
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2006-08-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 245
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2006-09-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 246
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2006-10-01',
                'ordem'           => 4,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 247
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2006-11-01',
                'ordem'           => 5,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 248
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2006-12-01',
                'ordem'           => 6,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 249
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2007-03-01',
                'ordem'           => 7,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 250
            DB::table('volumes')->insert([
                'nome'            => 'Volume 08',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2007-04-01',
                'ordem'           => 8,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 251
            DB::table('volumes')->insert([
                'nome'            => 'Volume 09',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2007-05-01',
                'ordem'           => 9,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 252
            DB::table('volumes')->insert([
                'nome'            => 'Volume 10',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2007-06-01',
                'ordem'           => 10,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 253
            DB::table('volumes')->insert([
                'nome'            => 'Volume 11',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2007-07-01',
                'ordem'           => 11,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 254
            DB::table('volumes')->insert([
                'nome'            => 'Volume 12',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2007-08-01',
                'ordem'           => 12,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 255
            DB::table('volumes')->insert([
                'nome'            => 'Volume 13',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2007-10-01',
                'ordem'           => 13,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 256
            DB::table('volumes')->insert([
                'nome'            => 'Volume 14',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2007-11-01',
                'ordem'           => 14,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 257
            DB::table('volumes')->insert([
                'nome'            => 'Volume 15',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2008-01-01',
                'ordem'           => 15,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 258
            DB::table('volumes')->insert([
                'nome'            => 'Volume 16',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2008-02-01',
                'ordem'           => 16,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 259
            DB::table('volumes')->insert([
                'nome'            => 'Volume 17',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2008-03-01',
                'ordem'           => 17,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 260
            DB::table('volumes')->insert([
                'nome'            => 'Volume 18',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2008-04-01',
                'ordem'           => 18,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 261
            DB::table('volumes')->insert([
                'nome'            => 'Volume 19',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2008-06-01',
                'ordem'           => 19,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 262
            DB::table('volumes')->insert([
                'nome'            => 'Volume 20',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2008-07-01',
                'ordem'           => 20,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 263
            DB::table('volumes')->insert([
                'nome'            => 'Volume 21',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2008-08-01',
                'ordem'           => 21,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 264
            DB::table('volumes')->insert([
                'nome'            => 'Volume 22',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2008-09-01',
                'ordem'           => 22,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 265
            DB::table('volumes')->insert([
                'nome'            => 'Volume 23',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2008-10-01',
                'ordem'           => 23,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 266
            DB::table('volumes')->insert([
                'nome'            => 'Volume 24',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2008-11-01',
                'ordem'           => 24,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 267
            DB::table('volumes')->insert([
                'nome'            => 'Volume 25',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2008-12-01',
                'ordem'           => 25,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 268
            DB::table('volumes')->insert([
                'nome'            => 'Volume 26',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2009-01-01',
                'ordem'           => 26,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 269
            DB::table('volumes')->insert([
                'nome'            => 'Volume 27',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2009-03-01',
                'ordem'           => 27,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 270
            DB::table('volumes')->insert([
                'nome'            => 'Volume 28',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2009-04-01',
                'ordem'           => 28,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 271
            DB::table('volumes')->insert([
                'nome'            => 'Volume 29',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2009-05-01',
                'ordem'           => 29,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 272
            DB::table('volumes')->insert([
                'nome'            => 'Volume 30',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2009-06-01',
                'ordem'           => 30,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 273
            DB::table('volumes')->insert([
                'nome'            => 'Volume 31',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2009-07-01',
                'ordem'           => 31,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 274
            DB::table('volumes')->insert([
                'nome'            => 'Volume 32',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2009-08-01',
                'ordem'           => 32,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 275
            DB::table('volumes')->insert([
                'nome'            => 'Volume 33',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2009-09-01',
                'ordem'           => 33,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 276
            DB::table('volumes')->insert([
                'nome'            => 'Volume 34',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2009-10-01',
                'ordem'           => 34,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 277
            DB::table('volumes')->insert([
                'nome'            => 'Volume 35',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2009-11-01',
                'ordem'           => 35,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 278
            DB::table('volumes')->insert([
                'nome'            => 'Volume 36',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2009-12-01',
                'ordem'           => 36,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 279
            DB::table('volumes')->insert([
                'nome'            => 'Volume 37',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2010-01-01',
                'ordem'           => 37,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 280
            DB::table('volumes')->insert([
                'nome'            => 'Volume 38',
                'preco'           => 10.90,
                'titulo_id'       => 11,
                'data_lancamento' => '2010-02-01',
                'ordem'           => 38,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //V de Vingan??a 281
            // 281
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 24.00,
                'titulo_id'       => 38,
                'data_lancamento' => '2012-05-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Maus 282
            // 282
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 39.00,
                'titulo_id'       => 39,
                'data_lancamento' => '2005-06-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Another 283-287
            // 283
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 13.90,
                'titulo_id'       => 41,
                'data_lancamento' => '2013-02-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 284
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 13.90,
                'titulo_id'       => 41,
                'data_lancamento' => '2013-03-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 285
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 13.90,
                'titulo_id'       => 41,
                'data_lancamento' => '2013-04-01',
                'ordem'           => 4,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 286
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 13.90,
                'titulo_id'       => 41,
                'data_lancamento' => '2013-05-01',
                'ordem'           => 5,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 287
            DB::table('volumes')->insert([
                'nome'            => 'Volume 00',
                'preco'           => 00.00,
                'titulo_id'       => 41,
                'data_lancamento' => '2018-03-01',
                'observacao'      => 'Volume lan??ado exlusivamente com o box que custou R$ 129,00.',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Di??rio do Futuro 288-299
            // 288
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 13.90,
                'titulo_id'       => 43,
                'data_lancamento' => '2013-01-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 289
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 13.90,
                'titulo_id'       => 43,
                'data_lancamento' => '2013-02-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 290
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 13.90,
                'titulo_id'       => 43,
                'data_lancamento' => '2013-04-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 291
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 13.90,
                'titulo_id'       => 43,
                'data_lancamento' => '2013-05-01',
                'ordem'           => 4,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 292
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 13.90,
                'titulo_id'       => 43,
                'data_lancamento' => '2013-06-01',
                'ordem'           => 5,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 293
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 13.90,
                'titulo_id'       => 43,
                'data_lancamento' => '2013-07-01',
                'ordem'           => 6,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 294
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 13.90,
                'titulo_id'       => 43,
                'data_lancamento' => '2013-08-01',
                'ordem'           => 7,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 295
            DB::table('volumes')->insert([
                'nome'            => 'Volume 08',
                'preco'           => 13.90,
                'titulo_id'       => 43,
                'data_lancamento' => '2013-09-01',
                'ordem'           => 8,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 296
            DB::table('volumes')->insert([
                'nome'            => 'Volume 09',
                'preco'           => 13.90,
                'titulo_id'       => 43,
                'data_lancamento' => '2013-10-01',
                'ordem'           => 9,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 297
            DB::table('volumes')->insert([
                'nome'            => 'Volume 10',
                'preco'           => 13.90,
                'titulo_id'       => 43,
                'data_lancamento' => '2013-11-01',
                'ordem'           => 10,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 298
            DB::table('volumes')->insert([
                'nome'            => 'Volume 11',
                'preco'           => 13.90,
                'titulo_id'       => 43,
                'data_lancamento' => '2013-12-01',
                'ordem'           => 11,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 299
            DB::table('volumes')->insert([
                'nome'            => 'Volume 12',
                'preco'           => 13.90,
                'titulo_id'       => 43,
                'data_lancamento' => '2014-01-01',
                'ordem'           => 12,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Homem-Aranha Superior 300-318
            // 300
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 6.50,
                'titulo_id'       => 42,
                'data_lancamento' => '2013-12-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 301
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 6.50,
                'titulo_id'       => 42,
                'data_lancamento' => '2014-01-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 302
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 6.50,
                'titulo_id'       => 42,
                'data_lancamento' => '2014-02-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 303
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 6.50,
                'titulo_id'       => 42,
                'data_lancamento' => '2014-03-01',
                'ordem'           => 4,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 304
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 6.50,
                'titulo_id'       => 42,
                'data_lancamento' => '2014-04-01',
                'ordem'           => 5,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 305
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 6.50,
                'titulo_id'       => 42,
                'data_lancamento' => '2014-05-01',
                'ordem'           => 6,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 306
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 6.50,
                'titulo_id'       => 42,
                'data_lancamento' => '2014-06-01',
                'ordem'           => 7,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 307
            DB::table('volumes')->insert([
                'nome'            => 'Volume 08',
                'preco'           => 6.50,
                'titulo_id'       => 42,
                'data_lancamento' => '2014-07-01',
                'ordem'           => 8,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 308
            DB::table('volumes')->insert([
                'nome'            => 'Volume 09',
                'preco'           => 6.50,
                'titulo_id'       => 42,
                'data_lancamento' => '2014-08-01',
                'ordem'           => 9,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 309
            DB::table('volumes')->insert([
                'nome'            => 'Volume 10',
                'preco'           => 6.50,
                'titulo_id'       => 42,
                'data_lancamento' => '2014-09-01',
                'ordem'           => 10,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 310
            DB::table('volumes')->insert([
                'nome'            => 'Volume 11',
                'preco'           => 6.50,
                'titulo_id'       => 42,
                'data_lancamento' => '2014-10-01',
                'ordem'           => 11,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 311
            DB::table('volumes')->insert([
                'nome'            => 'Volume 12',
                'preco'           => 6.50,
                'titulo_id'       => 42,
                'data_lancamento' => '2014-11-01',
                'ordem'           => 12,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 312
            DB::table('volumes')->insert([
                'nome'            => 'Volume 13',
                'preco'           => 6.50,
                'titulo_id'       => 42,
                'data_lancamento' => '2014-12-01',
                'ordem'           => 13,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 313
            DB::table('volumes')->insert([
                'nome'            => 'Volume 14',
                'preco'           => 7.20,
                'titulo_id'       => 42,
                'data_lancamento' => '2015-01-01',
                'ordem'           => 14,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 314
            DB::table('volumes')->insert([
                'nome'            => 'Volume 15',
                'preco'           => 7.20,
                'titulo_id'       => 42,
                'data_lancamento' => '2015-02-01',
                'ordem'           => 15,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 315
            DB::table('volumes')->insert([
                'nome'            => 'Volume 16',
                'preco'           => 7.20,
                'titulo_id'       => 42,
                'data_lancamento' => '2015-03-01',
                'ordem'           => 16,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 316
            DB::table('volumes')->insert([
                'nome'            => 'Volume 17',
                'preco'           => 7.20,
                'titulo_id'       => 42,
                'data_lancamento' => '2015-04-01',
                'ordem'           => 17,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 317
            DB::table('volumes')->insert([
                'nome'            => 'Volume 18',
                'preco'           => 7.20,
                'titulo_id'       => 42,
                'data_lancamento' => '2015-05-01',
                'ordem'           => 18,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 318
            DB::table('volumes')->insert([
                'nome'            => 'Volume 19',
                'preco'           => 7.20,
                'titulo_id'       => 42,
                'data_lancamento' => '2015-06-01',
                'ordem'           => 19,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Diario do Futuro 319-330
            // 319
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 13.90,
                'titulo_id'       => 43,
                'data_lancamento' => '2013-01-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 320
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 13.90,
                'titulo_id'       => 43,
                'data_lancamento' => '2013-02-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 321
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 13.90,
                'titulo_id'       => 43,
                'data_lancamento' => '2013-04-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 322
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 13.90,
                'titulo_id'       => 43,
                'data_lancamento' => '2013-05-01',
                'ordem'           => 4,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 323
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 13.90,
                'titulo_id'       => 43,
                'data_lancamento' => '2013-06-01',
                'ordem'           => 5,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 324
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 13.90,
                'titulo_id'       => 43,
                'data_lancamento' => '2013-07-01',
                'ordem'           => 6,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 325
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 13.90,
                'titulo_id'       => 43,
                'data_lancamento' => '2013-08-01',
                'ordem'           => 7,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 326
            DB::table('volumes')->insert([
                'nome'            => 'Volume 08',
                'preco'           => 13.90,
                'titulo_id'       => 43,
                'data_lancamento' => '2013-09-01',
                'ordem'           => 8,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 327
            DB::table('volumes')->insert([
                'nome'            => 'Volume 09',
                'preco'           => 13.90,
                'titulo_id'       => 43,
                'data_lancamento' => '2013-10-01',
                'ordem'           => 9,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 328
            DB::table('volumes')->insert([
                'nome'            => 'Volume 10',
                'preco'           => 13.90,
                'titulo_id'       => 43,
                'data_lancamento' => '2013-11-01',
                'ordem'           => 10,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 329
            DB::table('volumes')->insert([
                'nome'            => 'Volume 11',
                'preco'           => 13.90,
                'titulo_id'       => 43,
                'data_lancamento' => '2013-12-01',
                'ordem'           => 11,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 330
            DB::table('volumes')->insert([
                'nome'            => 'Volume 12',
                'preco'           => 13.90,
                'titulo_id'       => 43,
                'data_lancamento' => '2014-01-01',
                'ordem'           => 12,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Bleach 331-404
            // 331
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2007-07-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 332
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2007-08-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 333
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2007-09-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 334
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2007-10-01',
                'ordem'           => 4,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 335
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2007-11-01',
                'ordem'           => 5,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 336
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2007-12-01',
                'ordem'           => 6,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 337
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2008-01-01',
                'ordem'           => 7,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 338
            DB::table('volumes')->insert([
                'nome'            => 'Volume 08',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2008-02-01',
                'ordem'           => 8,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 339
            DB::table('volumes')->insert([
                'nome'            => 'Volume 09',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2008-03-01',
                'ordem'           => 9,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 340
            DB::table('volumes')->insert([
                'nome'            => 'Volume 10',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2008-04-01',
                'ordem'           => 10,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 341
            DB::table('volumes')->insert([
                'nome'            => 'Volume 11',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2008-05-01',
                'ordem'           => 11,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 342
            DB::table('volumes')->insert([
                'nome'            => 'Volume 12',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2008-06-01',
                'ordem'           => 12,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 343
            DB::table('volumes')->insert([
                'nome'            => 'Volume 13',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2008-07-01',
                'ordem'           => 13,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 344
            DB::table('volumes')->insert([
                'nome'            => 'Volume 14',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2008-08-01',
                'ordem'           => 14,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 345
            DB::table('volumes')->insert([
                'nome'            => 'Volume 15',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2008-09-01',
                'ordem'           => 15,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 346
            DB::table('volumes')->insert([
                'nome'            => 'Volume 16',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2008-10-01',
                'ordem'           => 16,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 347
            DB::table('volumes')->insert([
                'nome'            => 'Volume 17',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2008-11-01',
                'ordem'           => 17,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 348
            DB::table('volumes')->insert([
                'nome'            => 'Volume 18',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2008-12-01',
                'ordem'           => 18,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 349
            DB::table('volumes')->insert([
                'nome'            => 'Volume 19',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2009-01-01',
                'ordem'           => 19,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 350
            DB::table('volumes')->insert([
                'nome'            => 'Volume 20',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2009-02-01',
                'ordem'           => 20,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 351
            DB::table('volumes')->insert([
                'nome'            => 'Volume 21',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2009-03-01',
                'ordem'           => 21,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 352
            DB::table('volumes')->insert([
                'nome'            => 'Volume 22',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2009-04-01',
                'ordem'           => 22,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 353
            DB::table('volumes')->insert([
                'nome'            => 'Volume 23',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2009-05-01',
                'ordem'           => 23,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 354
            DB::table('volumes')->insert([
                'nome'            => 'Volume 24',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2009-06-01',
                'ordem'           => 24,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 355
            DB::table('volumes')->insert([
                'nome'            => 'Volume 25',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2009-07-01',
                'ordem'           => 25,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 356
            DB::table('volumes')->insert([
                'nome'            => 'Volume 26',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2009-08-01',
                'ordem'           => 26,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 357
            DB::table('volumes')->insert([
                'nome'            => 'Volume 27',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2009-09-01',
                'ordem'           => 27,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 358
            DB::table('volumes')->insert([
                'nome'            => 'Volume 28',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2009-10-01',
                'ordem'           => 28,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 359
            DB::table('volumes')->insert([
                'nome'            => 'Volume 29',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2009-11-01',
                'ordem'           => 29,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 360
            DB::table('volumes')->insert([
                'nome'            => 'Volume 30',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2009-12-01',
                'ordem'           => 30,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 361
            DB::table('volumes')->insert([
                'nome'            => 'Volume 31',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2010-01-01',
                'ordem'           => 31,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 362
            DB::table('volumes')->insert([
                'nome'            => 'Volume 32',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2010-02-01',
                'ordem'           => 32,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 363
            DB::table('volumes')->insert([
                'nome'            => 'Volume 33',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2010-03-01',
                'ordem'           => 33,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 364
            DB::table('volumes')->insert([
                'nome'            => 'Volume 34',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2010-04-01',
                'ordem'           => 34,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 365
            DB::table('volumes')->insert([
                'nome'            => 'Volume 35',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2010-06-01',
                'ordem'           => 35,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 366
            DB::table('volumes')->insert([
                'nome'            => 'Volume 36',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2010-08-01',
                'ordem'           => 36,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 367
            DB::table('volumes')->insert([
                'nome'            => 'Volume 37',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2010-10-01',
                'ordem'           => 37,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 368
            DB::table('volumes')->insert([
                'nome'            => 'Volume 38',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2010-12-01',
                'ordem'           => 38,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 369
            DB::table('volumes')->insert([
                'nome'            => 'Volume 39',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2011-02-01',
                'ordem'           => 39,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 370
            DB::table('volumes')->insert([
                'nome'            => 'Volume 40',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2011-04-01',
                'ordem'           => 40,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 371
            DB::table('volumes')->insert([
                'nome'            => 'Volume 41',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2011-06-01',
                'ordem'           => 41,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 372
            DB::table('volumes')->insert([
                'nome'            => 'Volume 42',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2011-08-01',
                'ordem'           => 42,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 373
            DB::table('volumes')->insert([
                'nome'            => 'Volume 43',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2011-10-01',
                'ordem'           => 43,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 374
            DB::table('volumes')->insert([
                'nome'            => 'Volume 44',
                'preco'           => 9.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2011-12-01',
                'ordem'           => 44,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 375
            DB::table('volumes')->insert([
                'nome'            => 'Volume 45',
                'preco'           => 10.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2012-02-01',
                'ordem'           => 45,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 376
            DB::table('volumes')->insert([
                'nome'            => 'Volume 46',
                'preco'           => 10.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2012-04-01',
                'ordem'           => 46,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 377
            DB::table('volumes')->insert([
                'nome'            => 'Volume 47',
                'preco'           => 10.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2012-06-01',
                'ordem'           => 47,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 378
            DB::table('volumes')->insert([
                'nome'            => 'Volume 48',
                'preco'           => 10.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2012-08-01',
                'ordem'           => 48,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 379
            DB::table('volumes')->insert([
                'nome'            => 'Volume 49',
                'preco'           => 10.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2012-10-01',
                'ordem'           => 19,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 380
            DB::table('volumes')->insert([
                'nome'            => 'Volume 50',
                'preco'           => 10.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2012-12-01',
                'ordem'           => 50,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 381
            DB::table('volumes')->insert([
                'nome'            => 'Volume 51',
                'preco'           => 10.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2013-02-01',
                'ordem'           => 51,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 382
            DB::table('volumes')->insert([
                'nome'            => 'Volume 52',
                'preco'           => 10.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2013-04-01',
                'ordem'           => 52,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 383
            DB::table('volumes')->insert([
                'nome'            => 'Volume 53',
                'preco'           => 10.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2013-06-01',
                'ordem'           => 53,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 384
            DB::table('volumes')->insert([
                'nome'            => 'Volume 54',
                'preco'           => 10.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2013-08-01',
                'ordem'           => 54,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 385
            DB::table('volumes')->insert([
                'nome'            => 'Volume 55',
                'preco'           => 10.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2013-10-01',
                'ordem'           => 55,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 386
            DB::table('volumes')->insert([
                'nome'            => 'Volume 56',
                'preco'           => 10.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2013-12-01',
                'ordem'           => 56,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 387
            DB::table('volumes')->insert([
                'nome'            => 'Volume 57',
                'preco'           => 11.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2014-02-01',
                'ordem'           => 57,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 388
            DB::table('volumes')->insert([
                'nome'            => 'Volume 58',
                'preco'           => 11.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2014-04-01',
                'ordem'           => 58,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 389
            DB::table('volumes')->insert([
                'nome'            => 'Volume 59',
                'preco'           => 11.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2014-06-01',
                'ordem'           => 59,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 390
            DB::table('volumes')->insert([
                'nome'            => 'Volume 60',
                'preco'           => 11.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2014-08-01',
                'ordem'           => 60,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 391
            DB::table('volumes')->insert([
                'nome'            => 'Volume 61',
                'preco'           => 11.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2014-10-01',
                'ordem'           => 61,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 392
            DB::table('volumes')->insert([
                'nome'            => 'Volume 62',
                'preco'           => 11.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2014-12-01',
                'ordem'           => 62,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 393
            DB::table('volumes')->insert([
                'nome'            => 'Volume 63',
                'preco'           => 11.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2015-02-01',
                'ordem'           => 63,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 394
            DB::table('volumes')->insert([
                'nome'            => 'Volume 64',
                'preco'           => 11.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2015-04-01',
                'ordem'           => 64,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 395
            DB::table('volumes')->insert([
                'nome'            => 'Volume 65',
                'preco'           => 11.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2015-06-01',
                'ordem'           => 65,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 396
            DB::table('volumes')->insert([
                'nome'            => 'Volume 66',
                'preco'           => 12.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2015-08-01',
                'ordem'           => 66,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 397
            DB::table('volumes')->insert([
                'nome'            => 'Volume 67',
                'preco'           => 12.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2015-11-01',
                'ordem'           => 67,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 398
            DB::table('volumes')->insert([
                'nome'            => 'Volume 68',
                'preco'           => 12.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2016-02-01',
                'ordem'           => 68,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 399
            DB::table('volumes')->insert([
                'nome'            => 'Volume 69',
                'preco'           => 12.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2016-05-01',
                'ordem'           => 69,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 400
            DB::table('volumes')->insert([
                'nome'            => 'Volume 70',
                'preco'           => 13.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2016-08-01',
                'ordem'           => 70,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 401
            DB::table('volumes')->insert([
                'nome'            => 'Volume 71',
                'preco'           => 13.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2016-11-01',
                'ordem'           => 71,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 402
            DB::table('volumes')->insert([
                'nome'            => 'Volume 72',
                'preco'           => 13.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2017-01-01',
                'ordem'           => 72,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 403
            DB::table('volumes')->insert([
                'nome'            => 'Volume 73',
                'preco'           => 13.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2017-07-01',
                'ordem'           => 73,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 404
            DB::table('volumes')->insert([
                'nome'            => 'Volume 74',
                'preco'           => 13.90,
                'titulo_id'       => 37,
                'data_lancamento' => '2017-11-01',
                'ordem'           => 74,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Naruto 405-476
            // 405
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2007-05-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 406
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2007-06-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 407
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2007-07-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 408
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2007-08-01',
                'ordem'           => 4,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 409
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2007-09-01',
                'ordem'           => 5,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 410
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2007-10-01',
                'ordem'           => 6,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 411
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2007-11-01',
                'ordem'           => 7,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 412
            DB::table('volumes')->insert([
                'nome'            => 'Volume 08',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2007-12-01',
                'ordem'           => 8,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 413
            DB::table('volumes')->insert([
                'nome'            => 'Volume 09',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2008-01-01',
                'ordem'           => 9,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 414
            DB::table('volumes')->insert([
                'nome'            => 'Volume 10',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2008-02-01',
                'ordem'           => 10,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 415
            DB::table('volumes')->insert([
                'nome'            => 'Volume 11',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2008-03-01',
                'ordem'           => 11,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 416
            DB::table('volumes')->insert([
                'nome'            => 'Volume 12',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2008-04-01',
                'ordem'           => 12,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 417
            DB::table('volumes')->insert([
                'nome'            => 'Volume 13',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2008-05-01',
                'ordem'           => 13,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 418
            DB::table('volumes')->insert([
                'nome'            => 'Volume 14',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2008-06-01',
                'ordem'           => 14,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 419
            DB::table('volumes')->insert([
                'nome'            => 'Volume 15',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2008-07-01',
                'ordem'           => 15,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 420
            DB::table('volumes')->insert([
                'nome'            => 'Volume 16',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2008-08-01',
                'ordem'           => 16,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 421
            DB::table('volumes')->insert([
                'nome'            => 'Volume 17',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2008-09-01',
                'ordem'           => 17,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 422
            DB::table('volumes')->insert([
                'nome'            => 'Volume 18',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2008-10-01',
                'ordem'           => 18,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 423
            DB::table('volumes')->insert([
                'nome'            => 'Volume 19',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2008-11-01',
                'ordem'           => 19,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 424
            DB::table('volumes')->insert([
                'nome'            => 'Volume 20',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2008-12-01',
                'ordem'           => 20,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 425
            DB::table('volumes')->insert([
                'nome'            => 'Volume 21',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2009-01-01',
                'ordem'           => 21,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 426
            DB::table('volumes')->insert([
                'nome'            => 'Volume 22',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2009-02-01',
                'ordem'           => 22,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 427
            DB::table('volumes')->insert([
                'nome'            => 'Volume 23',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2009-03-01',
                'ordem'           => 23,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 428
            DB::table('volumes')->insert([
                'nome'            => 'Volume 24',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2009-04-01',
                'ordem'           => 24,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 429
            DB::table('volumes')->insert([
                'nome'            => 'Volume 25',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2009-05-01',
                'ordem'           => 25,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 430
            DB::table('volumes')->insert([
                'nome'            => 'Volume 26',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2009-06-01',
                'ordem'           => 26,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 431
            DB::table('volumes')->insert([
                'nome'            => 'Volume 27',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2009-07-01',
                'ordem'           => 27,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 432
            DB::table('volumes')->insert([
                'nome'            => 'Volume 28',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2009-08-01',
                'ordem'           => 28,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 433
            DB::table('volumes')->insert([
                'nome'            => 'Volume 29',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2009-09-01',
                'ordem'           => 29,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 434
            DB::table('volumes')->insert([
                'nome'            => 'Volume 30',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2009-10-01',
                'ordem'           => 30,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 435
            DB::table('volumes')->insert([
                'nome'            => 'Volume 31',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2009-11-01',
                'ordem'           => 31,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 436
            DB::table('volumes')->insert([
                'nome'            => 'Volume 32',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2009-12-01',
                'ordem'           => 32,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 437
            DB::table('volumes')->insert([
                'nome'            => 'Volume 33',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2010-01-01',
                'ordem'           => 33,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 438
            DB::table('volumes')->insert([
                'nome'            => 'Volume 34',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2010-02-01',
                'ordem'           => 34,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 439
            DB::table('volumes')->insert([
                'nome'            => 'Volume 35',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2010-03-01',
                'ordem'           => 35,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 440
            DB::table('volumes')->insert([
                'nome'            => 'Volume 36',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2010-04-01',
                'ordem'           => 36,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 441
            DB::table('volumes')->insert([
                'nome'            => 'Volume 37',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2010-05-01',
                'ordem'           => 37,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 442
            DB::table('volumes')->insert([
                'nome'            => 'Volume 38',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2010-06-01',
                'ordem'           => 38,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 443
            DB::table('volumes')->insert([
                'nome'            => 'Volume 39',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2010-07-01',
                'ordem'           => 39,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 444
            DB::table('volumes')->insert([
                'nome'            => 'Volume 40',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2010-08-01',
                'ordem'           => 40,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 445
            DB::table('volumes')->insert([
                'nome'            => 'Volume 41',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2010-09-01',
                'ordem'           => 41,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 446
            DB::table('volumes')->insert([
                'nome'            => 'Volume 42',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2010-10-01',
                'ordem'           => 42,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 447
            DB::table('volumes')->insert([
                'nome'            => 'Volume 43',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2010-11-01',
                'ordem'           => 43,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 448
            DB::table('volumes')->insert([
                'nome'            => 'Volume 44',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2010-12-01',
                'ordem'           => 44,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 449
            DB::table('volumes')->insert([
                'nome'            => 'Volume 45',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2011-01-01',
                'ordem'           => 45,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 450
            DB::table('volumes')->insert([
                'nome'            => 'Volume 46',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2011-02-01',
                'ordem'           => 46,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 451
            DB::table('volumes')->insert([
                'nome'            => 'Volume 47',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2011-03-01',
                'ordem'           => 47,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 452
            DB::table('volumes')->insert([
                'nome'            => 'Volume 48',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2011-04-01',
                'ordem'           => 48,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 453
            DB::table('volumes')->insert([
                'nome'            => 'Volume 49',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2011-06-01',
                'ordem'           => 49,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 454
            DB::table('volumes')->insert([
                'nome'            => 'Volume 50',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2011-08-01',
                'ordem'           => 50,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 455
            DB::table('volumes')->insert([
                'nome'            => 'Volume 51',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2011-10-01',
                'ordem'           => 51,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 456
            DB::table('volumes')->insert([
                'nome'            => 'Volume 52',
                'preco'           => 9.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2011-12-01',
                'ordem'           => 52,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 457
            DB::table('volumes')->insert([
                'nome'            => 'Volume 53',
                'preco'           => 10.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2012-02-01',
                'ordem'           => 53,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 458
            DB::table('volumes')->insert([
                'nome'            => 'Volume 54',
                'preco'           => 10.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2012-04-01',
                'ordem'           => 54,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 459
            DB::table('volumes')->insert([
                'nome'            => 'Volume 55',
                'preco'           => 10.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2012-06-01',
                'ordem'           => 55,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 460
            DB::table('volumes')->insert([
                'nome'            => 'Volume 56',
                'preco'           => 10.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2012-08-01',
                'ordem'           => 56,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 461
            DB::table('volumes')->insert([
                'nome'            => 'Volume 57',
                'preco'           => 10.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2012-10-01',
                'ordem'           => 57,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 462
            DB::table('volumes')->insert([
                'nome'            => 'Volume 58',
                'preco'           => 10.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2012-12-01',
                'ordem'           => 58,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 463
            DB::table('volumes')->insert([
                'nome'            => 'Volume 59',
                'preco'           => 10.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2013-02-01',
                'ordem'           => 59,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 464
            DB::table('volumes')->insert([
                'nome'            => 'Volume 60',
                'preco'           => 10.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2013-05-01',
                'ordem'           => 60,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 465
            DB::table('volumes')->insert([
                'nome'            => 'Volume 61',
                'preco'           => 10.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2013-07-01',
                'ordem'           => 61,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 466
            DB::table('volumes')->insert([
                'nome'            => 'Volume 62',
                'preco'           => 10.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2013-09-01',
                'ordem'           => 62,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 467
            DB::table('volumes')->insert([
                'nome'            => 'Volume 63',
                'preco'           => 10.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2013-11-01',
                'ordem'           => 63,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 468
            DB::table('volumes')->insert([
                'nome'            => 'Volume 64',
                'preco'           => 10.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2014-01-01',
                'ordem'           => 64,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 469
            DB::table('volumes')->insert([
                'nome'            => 'Volume 65',
                'preco'           => 10.90,
                'titulo_id'       => 28,
                'data_lancamento' => '2014-04-01',
                'ordem'           => 65,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 470
            DB::table('volumes')->insert([
                'nome'            => 'Volume 66',
                'preco'           => 11.50,
                'titulo_id'       => 28,
                'data_lancamento' => '2014-06-01',
                'ordem'           => 66,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 471
            DB::table('volumes')->insert([
                'nome'            => 'Volume 67',
                'preco'           => 11.50,
                'titulo_id'       => 28,
                'data_lancamento' => '2014-08-01',
                'ordem'           => 67,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 472
            DB::table('volumes')->insert([
                'nome'            => 'Volume 68',
                'preco'           => 11.50,
                'titulo_id'       => 28,
                'data_lancamento' => '2014-10-01',
                'ordem'           => 68,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 473
            DB::table('volumes')->insert([
                'nome'            => 'Volume 69',
                'preco'           => 11.50,
                'titulo_id'       => 28,
                'data_lancamento' => '2014-12-01',
                'ordem'           => 69,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 474
            DB::table('volumes')->insert([
                'nome'            => 'Volume 70',
                'preco'           => 11.50,
                'titulo_id'       => 28,
                'data_lancamento' => '2015-02-01',
                'ordem'           => 70,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 475
            DB::table('volumes')->insert([
                'nome'            => 'Volume 71',
                'preco'           => 11.50,
                'titulo_id'       => 28,
                'data_lancamento' => '2015-04-01',
                'ordem'           => 71,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 476
            DB::table('volumes')->insert([
                'nome'            => 'Volume 72',
                'preco'           => 11.50,
                'titulo_id'       => 28,
                'data_lancamento' => '2015-06-01',
                'ordem'           => 72,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Bestiarius 477-483
            // 477
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 15.90,
                'titulo_id'       => 44,
                'data_lancamento' => '2016-11-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 478
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 16.90,
                'titulo_id'       => 44,
                'data_lancamento' => '2017-01-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 479
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 16.90,
                'titulo_id'       => 44,
                'data_lancamento' => '2017-03-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 480
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 16.90,
                'titulo_id'       => 44,
                'data_lancamento' => '2017-07-01',
                'ordem'           => 4,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 481
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 16.90,
                'titulo_id'       => 44,
                'data_lancamento' => '2017-11-01',
                'ordem'           => 5,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 482
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 19.90,
                'titulo_id'       => 44,
                'data_lancamento' => '2018-10-01',
                'ordem'           => 6,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 483
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 22.90,
                'titulo_id'       => 44,
                'data_lancamento' => '2019-08-01',
                'ordem'           => 7,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }
        
        if (true) { //Red Garden 484-487
            // 484
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 12.00,
                'titulo_id'       => 15,
                'data_lancamento' => '2012-10-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 485
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 12.00,
                'titulo_id'       => 15,
                'data_lancamento' => '2013-02-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 486
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 12.00,
                'titulo_id'       => 15,
                'data_lancamento' => '2013-06-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 487
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 13.90,
                'titulo_id'       => 15,
                'data_lancamento' => '2013-09-01',
                'ordem'           => 4,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Drag??o Negro 488
            // 488
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 69.90,
                'titulo_id'       => 45,
                'data_lancamento' => '2019-02-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Ogiva 489
            // 489
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 79.90,
                'titulo_id'       => 46,
                'data_lancamento' => '2020-12-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //O Ningu??m 490
            // 490
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 59.90,
                'titulo_id'       => 47,
                'data_lancamento' => '2019-06-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Funny Creek 491
            // 491
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 69.90,
                'titulo_id'       => 48,
                'data_lancamento' => '2020-10-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Os Mitos de Cthulhu 492
            // 492
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 39.90,
                'titulo_id'       => 49,
                'data_lancamento' => '2019-06-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Fate/Stay Night 493-512
            // 493
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 12.90,
                'titulo_id'       => 50,
                'data_lancamento' => '2015-12-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 494
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 12.90,
                'titulo_id'       => 50,
                'data_lancamento' => '2016-01-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 495
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 12.90,
                'titulo_id'       => 50,
                'data_lancamento' => '2016-02-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 496
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 12.90,
                'titulo_id'       => 50,
                'data_lancamento' => '2016-03-01',
                'ordem'           => 4,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 497
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 12.90,
                'titulo_id'       => 50,
                'data_lancamento' => '2016-04-01',
                'ordem'           => 5,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 498
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 12.90,
                'titulo_id'       => 50,
                'data_lancamento' => '2016-05-01',
                'ordem'           => 6,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 499
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 12.90,
                'titulo_id'       => 50,
                'data_lancamento' => '2016-06-01',
                'ordem'           => 7,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 500
            DB::table('volumes')->insert([
                'nome'            => 'Volume 08',
                'preco'           => 12.90,
                'titulo_id'       => 50,
                'data_lancamento' => '2016-07-01',
                'ordem'           => 8,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 501
            DB::table('volumes')->insert([
                'nome'            => 'Volume 09',
                'preco'           => 12.90,
                'titulo_id'       => 50,
                'data_lancamento' => '2016-08-01',
                'ordem'           => 9,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 502
            DB::table('volumes')->insert([
                'nome'            => 'Volume 10',
                'preco'           => 12.90,
                'titulo_id'       => 50,
                'data_lancamento' => '2016-09-01',
                'ordem'           => 10,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 503
            DB::table('volumes')->insert([
                'nome'            => 'Volume 11',
                'preco'           => 12.90,
                'titulo_id'       => 50,
                'data_lancamento' => '2016-10-01',
                'ordem'           => 11,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 504
            DB::table('volumes')->insert([
                'nome'            => 'Volume 12',
                'preco'           => 12.90,
                'titulo_id'       => 50,
                'data_lancamento' => '2016-11-01',
                'ordem'           => 12,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 505
            DB::table('volumes')->insert([
                'nome'            => 'Volume 13',
                'preco'           => 12.90,
                'titulo_id'       => 50,
                'data_lancamento' => '2016-12-01',
                'ordem'           => 13,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 506
            DB::table('volumes')->insert([
                'nome'            => 'Volume 14',
                'preco'           => 12.90,
                'titulo_id'       => 50,
                'data_lancamento' => '2017-01-01',
                'ordem'           => 14,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 507
            DB::table('volumes')->insert([
                'nome'            => 'Volume 15',
                'preco'           => 12.90,
                'titulo_id'       => 50,
                'data_lancamento' => '2017-02-01',
                'ordem'           => 15,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 508
            DB::table('volumes')->insert([
                'nome'            => 'Volume 16',
                'preco'           => 12.90,
                'titulo_id'       => 50,
                'data_lancamento' => '2017-03-01',
                'ordem'           => 16,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 509
            DB::table('volumes')->insert([
                'nome'            => 'Volume 17',
                'preco'           => 12.90,
                'titulo_id'       => 50,
                'data_lancamento' => '2017-04-01',
                'ordem'           => 17,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 510
            DB::table('volumes')->insert([
                'nome'            => 'Volume 18',
                'preco'           => 12.90,
                'titulo_id'       => 50,
                'data_lancamento' => '2017-05-01',
                'ordem'           => 18,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 511
            DB::table('volumes')->insert([
                'nome'            => 'Volume 19',
                'preco'           => 12.90,
                'titulo_id'       => 50,
                'data_lancamento' => '2017-06-01',
                'ordem'           => 19,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 512
            DB::table('volumes')->insert([
                'nome'            => 'Volume 20',
                'preco'           => 12.90,
                'titulo_id'       => 50,
                'data_lancamento' => '2017-07-01',
                'ordem'           => 20,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Green Blood 513-517
            // 513
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 14.50,
                'titulo_id'       => 51,
                'data_lancamento' => '2015-01-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 514
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 14.50,
                'titulo_id'       => 51,
                'data_lancamento' => '2015-02-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 515
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 14.50,
                'titulo_id'       => 51,
                'data_lancamento' => '2015-03-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 516
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 14.50,
                'titulo_id'       => 51,
                'data_lancamento' => '2015-04-01',
                'ordem'           => 4,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 517
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 14.50,
                'titulo_id'       => 51,
                'data_lancamento' => '2015-05-01',
                'ordem'           => 5,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Invas??o! Chega de Segredos! 518
            // 518
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 53.00,
                'titulo_id'       => 52,
                'data_lancamento' => '2018-07-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Invas??o! Chega de Segredos! 519
            // 519
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 68.00,
                'titulo_id'       => 53,
                'data_lancamento' => '2018-12-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Crise Final 520
            // 520
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 92.00,
                'titulo_id'       => 54,
                'data_lancamento' => '2014-05-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Reino do Amanh?? 521
            // 521
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 89.00,
                'titulo_id'       => 55,
                'data_lancamento' => '2013-10-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Reino do Amanh?? 522
            // 522
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 89.00,
                'titulo_id'       => 56,
                'data_lancamento' => '2017-12-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Shazam! & A Sociedade dos Monstros 523
            // 523
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 27.90,
                'titulo_id'       => 57,
                'data_lancamento' => '2014-12-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Shazam! & A Sociedade dos Monstros 524
            // 524
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 59.00,
                'titulo_id'       => 58,
                'data_lancamento' => '2019-03-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Superman e A Legi??o dos Super-Her??is 525
            // 525
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 26.90,
                'titulo_id'       => 59,
                'data_lancamento' => '2014-06-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //O Dia Mais Claro 526
            // 526
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 193.00,
                'titulo_id'       => 60,
                'data_lancamento' => '2018-11-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //A Noite Mais Densa 527
            // 527
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 189.00,
                'titulo_id'       => 61,
                'data_lancamento' => '2020-11-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Lanterna Verde - A Vingan??a dos Lanternas Verdes 528
            // 528
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 79.00,
                'titulo_id'       => 62,
                'data_lancamento' => '2011-08-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Lanterna Verde - A Vingan??a dos Lanternas Verdes 529
            // 529
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 106.00,
                'titulo_id'       => 63,
                'data_lancamento' => '2019-06-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Zero Hora - Crise no Tempo 530
            // 530
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 71.00,
                'titulo_id'       => 64,
                'data_lancamento' => '2020-01-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Justi??a - Edi????o Definitiva 531
            // 531
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 110.00,
                'titulo_id'       => 65,
                'data_lancamento' => '2013-09-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Justi??a - Edi????o Definitiva 532
            // 532
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 110.00,
                'titulo_id'       => 66,
                'data_lancamento' => '2017-10-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Crise Infinita - Edi????o Definitiva 533
            // 533
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 67.00,
                'titulo_id'       => 67,
                'data_lancamento' => '2015-05-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Arqueiro Verde - M??quina Mort??fera 534
            // 534
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 34.90,
                'titulo_id'       => 68,
                'data_lancamento' => '2017-04-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Arqueiro Verde - A Guerra dos Renegados 535
            // 535
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 51.00,
                'titulo_id'       => 69,
                'data_lancamento' => '2018-02-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Arqueiro Verde - A Queda 536
            // 536
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 51.00,
                'titulo_id'       => 70,
                'data_lancamento' => '2018-02-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Lendas do Universo DC: Lanterna Verde & Arqueiro Verde 537-539
            // 537
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 23.90,
                'titulo_id'       => 71,
                'data_lancamento' => '2016-12-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 538
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 23.90,
                'titulo_id'       => 71,
                'data_lancamento' => '2016-12-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 539
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 23.90,
                'titulo_id'       => 71,
                'data_lancamento' => '2016-12-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Lanterna Verde & Arqueiro Verde - Sem Destino 540
            // 540
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 22.90,
                'titulo_id'       => 72,
                'data_lancamento' => '2014-06-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Arqueiro Verde 541-548
            // 541
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 19.90,
                'titulo_id'       => 73,
                'data_lancamento' => '2017-06-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 542
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 19.90,
                'titulo_id'       => 73,
                'data_lancamento' => '2017-09-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 543
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 19.90,
                'titulo_id'       => 73,
                'data_lancamento' => '2017-12-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 544
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 28.90,
                'titulo_id'       => 73,
                'data_lancamento' => '2018-04-01',
                'ordem'           => 4,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 545
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 22.90,
                'titulo_id'       => 73,
                'data_lancamento' => '2018-10-01',
                'ordem'           => 5,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 546
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 26.90,
                'titulo_id'       => 73,
                'data_lancamento' => '2019-01-01',
                'ordem'           => 6,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 547
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 22.90,
                'titulo_id'       => 73,
                'data_lancamento' => '2019-05-01',
                'ordem'           => 7,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 548
            DB::table('volumes')->insert([
                'nome'            => 'Volume 08',
                'preco'           => 30.90,
                'titulo_id'       => 73,
                'data_lancamento' => '2019-10-01',
                'ordem'           => 8,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Arqueiro Verde - Ano Um 549
            // 549
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 15.90,
                'titulo_id'       => 74,
                'data_lancamento' => '2009-01-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Arqueiro Verde 550-564
            // 550
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 6.50,
                'titulo_id'       => 75,
                'data_lancamento' => '2013-09-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 551
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 6.50,
                'titulo_id'       => 75,
                'data_lancamento' => '2013-10-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 552
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 6.50,
                'titulo_id'       => 75,
                'data_lancamento' => '2013-11-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 553
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 6.50,
                'titulo_id'       => 75,
                'data_lancamento' => '2013-12-01',
                'ordem'           => 4,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 554
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 6.50,
                'titulo_id'       => 75,
                'data_lancamento' => '2014-01-01',
                'ordem'           => 5,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 555
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 6.50,
                'titulo_id'       => 75,
                'data_lancamento' => '2014-02-01',
                'ordem'           => 6,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 556
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 6.50,
                'titulo_id'       => 75,
                'data_lancamento' => '2014-03-01',
                'ordem'           => 7,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 557
            DB::table('volumes')->insert([
                'nome'            => 'Volume 08',
                'preco'           => 6.50,
                'titulo_id'       => 75,
                'data_lancamento' => '2014-04-01',
                'ordem'           => 8,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 558
            DB::table('volumes')->insert([
                'nome'            => 'Volume 09',
                'preco'           => 6.50,
                'titulo_id'       => 75,
                'data_lancamento' => '2014-05-01',
                'ordem'           => 9,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 559
            DB::table('volumes')->insert([
                'nome'            => 'Volume 10',
                'preco'           => 7.50,
                'titulo_id'       => 75,
                'data_lancamento' => '2014-06-01',
                'ordem'           => 10,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 560
            DB::table('volumes')->insert([
                'nome'            => 'Volume 11',
                'preco'           => 6.50,
                'titulo_id'       => 75,
                'data_lancamento' => '2014-10-01',
                'ordem'           => 11,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 561
            DB::table('volumes')->insert([
                'nome'            => 'Volume 12',
                'preco'           => 6.50,
                'titulo_id'       => 75,
                'data_lancamento' => '2014-11-01',
                'ordem'           => 12,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 562
            DB::table('volumes')->insert([
                'nome'            => 'Volume 13',
                'preco'           => 7.20,
                'titulo_id'       => 75,
                'data_lancamento' => '2015-04-01',
                'ordem'           => 13,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 563
            DB::table('volumes')->insert([
                'nome'            => 'Volume 14',
                'preco'           => 7.20,
                'titulo_id'       => 75,
                'data_lancamento' => '2015-05-01',
                'ordem'           => 14,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 564
            DB::table('volumes')->insert([
                'nome'            => 'Volume 15',
                'preco'           => 7.20,
                'titulo_id'       => 75,
                'data_lancamento' => '2015-06-01',
                'ordem'           => 15,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Arqueiro Verde 565-571
            // 565
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 7.20,
                'titulo_id'       => 76,
                'data_lancamento' => '2015-08-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 566
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 7.20,
                'titulo_id'       => 76,
                'data_lancamento' => '2015-09-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 567
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 7.20,
                'titulo_id'       => 76,
                'data_lancamento' => '2015-10-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 568
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 7.20,
                'titulo_id'       => 76,
                'data_lancamento' => '2015-11-01',
                'ordem'           => 4,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 569
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 7.20,
                'titulo_id'       => 76,
                'data_lancamento' => '2015-12-01',
                'ordem'           => 5,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 570
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 7.60,
                'titulo_id'       => 76,
                'data_lancamento' => '2016-01-01',
                'ordem'           => 6,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 571
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 7.60,
                'titulo_id'       => 76,
                'data_lancamento' => '2016-02-01',
                'ordem'           => 7,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Arqueiro Verde - P??ssaros da Noite 572
            // 572
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 21.90,
                'titulo_id'       => 77,
                'data_lancamento' => '2016-05-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Arqueiro Verde - O Surto 573
            // 573
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 25.90,
                'titulo_id'       => 78,
                'data_lancamento' => '2016-11-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Lanterna Verde - A Guerra dos An??is 574-575
            // 574
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 27.90,
                'titulo_id'       => 79,
                'data_lancamento' => '2014-08-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 575
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 27.90,
                'titulo_id'       => 79,
                'data_lancamento' => '2014-11-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Lanterna Verde - A Guerra dos An??is 576-577
            // 576
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 64.00,
                'titulo_id'       => 80,
                'data_lancamento' => '2020-05-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 577
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 64.00,
                'titulo_id'       => 80,
                'data_lancamento' => '2020-06-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Arlequina - Apag??o de Poder 578
            // 578
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 58.00,
                'titulo_id'       => 81,
                'data_lancamento' => '2018-07-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Aquaman - As Profundezas 579
            // 579
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 25.90,
                'titulo_id'       => 82,
                'data_lancamento' => '2015-05-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Aquaman - Os Outros 580
            // 580
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 29.90,
                'titulo_id'       => 83,
                'data_lancamento' => '2016-11-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Aquaman - A Morte de Um Rei 581
            // 581
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 35.90,
                'titulo_id'       => 84,
                'data_lancamento' => '2017-04-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Vilania Eterna 582
            // 582
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 71.00,
                'titulo_id'       => 85,
                'data_lancamento' => '2019-04-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Vilania Eterna 583-589
            // 583
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 4.90,
                'titulo_id'       => 86,
                'data_lancamento' => '2014-06-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 584
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 7.50,
                'titulo_id'       => 86,
                'data_lancamento' => '2014-07-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 585
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 7.50,
                'titulo_id'       => 86,
                'data_lancamento' => '2014-08-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 586
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 7.50,
                'titulo_id'       => 86,
                'data_lancamento' => '2014-09-01',
                'ordem'           => 4,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 587
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 7.50,
                'titulo_id'       => 86,
                'data_lancamento' => '2014-10-01',
                'ordem'           => 5,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 588
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 7.50,
                'titulo_id'       => 86,
                'data_lancamento' => '2014-11-01',
                'ordem'           => 6,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 589
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 7.20,
                'titulo_id'       => 86,
                'data_lancamento' => '2014-12-01',
                'ordem'           => 7,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Shazam! Com Uma Palavra M??gica... 590
            // 590
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 29.90,
                'titulo_id'       => 87,
                'data_lancamento' => '2015-10-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Shazam! Com Uma Palavra M??gica... 591
            // 591
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 58.00,
                'titulo_id'       => 88,
                'data_lancamento' => '2019-03-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Liga da Justi??a da Am??rica - Os Mais Perigosos do Mundo 592
            // 592
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 32.90,
                'titulo_id'       => 89,
                'data_lancamento' => '2017-10-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Mulher-Maravilha - Sangue 593
            // 593
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 29.90,
                'titulo_id'       => 90,
                'data_lancamento' => '2016-04-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Mulher-Maravilha - Direito de Nascen??a 594
            // 594
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 27.90,
                'titulo_id'       => 91,
                'data_lancamento' => '2016-10-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Mulher-Maravilha - For??a 595
            // 595
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 31.90,
                'titulo_id'       => 92,
                'data_lancamento' => '2017-07-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Mulher-Maravilha - Guerra 596
            // 596
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 39.00,
                'titulo_id'       => 93,
                'data_lancamento' => '2018-03-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Mulher-Maravilha - Pele 597
            // 597
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 48.00,
                'titulo_id'       => 94,
                'data_lancamento' => '2018-09-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Mulher-Maravilha - Ossos 598
            // 598
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 58.00,
                'titulo_id'       => 95,
                'data_lancamento' => '2019-12-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }
        
        if (true) { //Superman - Qual ?? O Pre??o do Amanh??? 599
            // 599
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 28.90,
                'titulo_id'       => 96,
                'data_lancamento' => '2016-08-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Mulher-Maravilha - Sangue 600
            // 600
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 60.00,
                'titulo_id'       => 97,
                'data_lancamento' => '2019-08-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Superman - ?? Prova de Balas 601
            // 601
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 158.00,
                'titulo_id'       => 98,
                'data_lancamento' => '2015-03-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Os Livros do Destino 602
            // 602
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 25.90,
                'titulo_id'       => 99,
                'data_lancamento' => '2014-08-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Os Ca??adores 603-605
            // 603
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 1.50,
                'titulo_id'       => 100,
                'data_lancamento' => '1989-02-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 604
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 1.50,
                'titulo_id'       => 100,
                'data_lancamento' => '1989-03-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 605
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 1.50,
                'titulo_id'       => 100,
                'data_lancamento' => '1989-04-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Os Ca??adores 606-613
            // 606
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 4.90,
                'titulo_id'       => 101,
                'data_lancamento' => '2002-11-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 607
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 5.50,
                'titulo_id'       => 101,
                'data_lancamento' => '2002-12-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 608
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 5.50,
                'titulo_id'       => 101,
                'data_lancamento' => '2003-01-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 609
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 5.50,
                'titulo_id'       => 101,
                'data_lancamento' => '2003-01-01',
                'ordem'           => 4,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 610
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 5.50,
                'titulo_id'       => 101,
                'data_lancamento' => '2003-02-01',
                'ordem'           => 5,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 611
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 6.50,
                'titulo_id'       => 101,
                'data_lancamento' => '2003-05-01',
                'ordem'           => 6,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 612
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 6.50,
                'titulo_id'       => 101,
                'data_lancamento' => '2003-06-01',
                'ordem'           => 7,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 613
            DB::table('volumes')->insert([
                'nome'            => 'Volume 08',
                'preco'           => 6.50,
                'titulo_id'       => 101,
                'data_lancamento' => '2003-07-01',
                'ordem'           => 8,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Recado A Adolf 614-615
            // 614
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 89.90,
                'titulo_id'       => 102,
                'data_lancamento' => '2020-10-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 615
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 89.90,
                'titulo_id'       => 102,
                'data_lancamento' => '2020-12-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Sky Masters da For??a Espacial
            // 616
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 129.90,
                'titulo_id'       => 103,
                'data_lancamento' => '2020-08-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Grama 617
            // 617
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 79.90,
                'titulo_id'       => 104,
                'data_lancamento' => '2020-07-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Fronteiras do Al??m 618
            // 618
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 69.90,
                'titulo_id'       => 105,
                'data_lancamento' => '2020-06-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Cannon 619
            // 619
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 99.90,
                'titulo_id'       => 106,
                'data_lancamento' => '2017-06-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Por Deus Ou Pelo Acaso 620
            // 620
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 62.90,
                'titulo_id'       => 107,
                'data_lancamento' => '2020-05-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Maxwell, O Gato M??gico 621
            // 621
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 59.90,
                'titulo_id'       => 108,
                'data_lancamento' => '2020-03-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Destino Adiado 622
            // 622
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 69.90,
                'titulo_id'       => 109,
                'data_lancamento' => '2020-02-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Rohan No Louvre 623
            // 623
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 69.90,
                'titulo_id'       => 110,
                'data_lancamento' => '2020-01-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //O Pre??o da Desonra - Kubidai Hikiukenin 624
            // 624
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 59.90,
                'titulo_id'       => 111,
                'data_lancamento' => '2019-08-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Lone Sloane 625
            // 625
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 129.90,
                'titulo_id'       => 112,
                'data_lancamento' => '2019-04-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Um Pequeno Assassinato 626
            // 626
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 54.90,
                'titulo_id'       => 113,
                'data_lancamento' => '2017-11-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Marada - A Mulher-Lobo 627
            // 627
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 54.90,
                'titulo_id'       => 114,
                'data_lancamento' => '2018-02-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Cinco Por Infinito 628
            // 628
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 149.90,
                'titulo_id'       => 115,
                'data_lancamento' => '2018-11-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //O Relat??rio de Brodeck 629
            // 629
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 120.00,
                'titulo_id'       => 116,
                'data_lancamento' => '2018-12-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Espadas e Bruxas 630
            // 630
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 120.00,
                'titulo_id'       => 117,
                'data_lancamento' => '2017-05-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //A Arte de Charlie Chan Hock Chye 631
            // 631
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 69.90,
                'titulo_id'       => 118,
                'data_lancamento' => '2018-07-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //A Arte de Charlie Chan Hock Chye 632
            // 632
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 69.90,
                'titulo_id'       => 119,
                'data_lancamento' => '2019-09-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Guardi??es do Louvre 633
            // 633
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 59.90,
                'titulo_id'       => 120,
                'data_lancamento' => '2018-05-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Um Peda??o de Madeira e A??o 634
            // 634
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 69.90,
                'titulo_id'       => 121,
                'data_lancamento' => '2018-05-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Jane 635
            // 635
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 49.90,
                'titulo_id'       => 122,
                'data_lancamento' => '2019-07-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Roseira, Medalha, Engenho e Outras Hist??rias 636
            // 636
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 89.90,
                'titulo_id'       => 123,
                'data_lancamento' => '2019-11-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Conto de Areia 637
            // 637
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 69.90,
                'titulo_id'       => 124,
                'data_lancamento' => '2018-03-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Moby Dick 638
            // 638
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 120.00,
                'titulo_id'       => 125,
                'data_lancamento' => '2017-08-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Blood - Uma Hist??ria de Sangue 639
            // 639
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 59.90,
                'titulo_id'       => 126,
                'data_lancamento' => '2018-08-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Moonshadow 640
            // 640
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 139.90,
                'titulo_id'       => 127,
                'data_lancamento' => '2019-12-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Beasts of Burden 641-642
            // 641
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01 - Rituais Animais',
                'preco'           => 69.90,
                'titulo_id'       => 128,
                'data_lancamento' => '2017-09-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 642
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02 - Rituais Animais',
                'preco'           => 79.90,
                'titulo_id'       => 128,
                'data_lancamento' => '2020-02-01',
                'ordem'           => 2,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Beasts of Burden - C??es S??bios e Homens Nefastos 643
            // 643
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 59.90,
                'titulo_id'       => 129,
                'data_lancamento' => '2019-05-01',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Chainsaw Man 644-646
            // 644
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 29.90,
                'titulo_id'       => 130,
                'capa'            => '644.jpg',
                'data_lancamento' => '2021-03-26',
                'ordem'           => 1,
                'link_amazon'     => 'amzn.to/3erYBzw',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);

            // 645
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 29.90,
                'titulo_id'       => 130,
                'capa'            => '645.jpg',
                'data_lancamento' => '2021-05-21',
                'ordem'           => 2,
                'link_amazon'     => 'amzn.to/3hMihjs',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);

            // 646
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 29.90,
                'titulo_id'       => 130,
                'capa'            => '646.jpg',
                'data_lancamento' => '2021-07-02',
                'ordem'           => 3,
                'link_amazon'     => 'amzn.to/3im0bns',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Jujutsu Kaisen 647-656
            // 647
            DB::table('volumes')->insert([
                'nome'            => 'Volume 00',
                'preco'           => 29.90,
                'titulo_id'       => 13,
                'capa'            => '647.jpg',
                'data_lancamento' => '2021-03-12',
                'ordem'           => 1,
                'link_amazon'     => 'amzn.to/2TnZphu',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 648
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 22.90,
                'titulo_id'       => 13,
                'capa'            => '648.jpg',
                'data_lancamento' => '2020-08-03',
                'ordem'           => 2,
                'link_amazon'     => 'amzn.to/3z7pEI6',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 649
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 22.90,
                'titulo_id'       => 13,
                'capa'            => '649.jpg',
                'data_lancamento' => '2020-11-06',
                'ordem'           => 3,
                'link_amazon'     => 'amzn.to/3wMGCKc',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 650
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 22.90,
                'titulo_id'       => 13,
                'capa'            => '650.jpg',
                'data_lancamento' => '2020-12-14',
                'ordem'           => 4,
                'link_amazon'     => 'amzn.to/3z6wEVC',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 651
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 29.90,
                'titulo_id'       => 13,
                'capa'            => '651.jpg',
                'data_lancamento' => '2021-02-12',
                'ordem'           => 5,
                'link_amazon'     => 'amzn.to/3ze5jB5',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 652
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 29.90,
                'titulo_id'       => 13,
                'capa'            => '652.jpg',
                'data_lancamento' => '2021-04-16',
                'ordem'           => 6,
                'link_amazon'     => 'amzn.to/3wOGY39',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 653
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 29.90,
                'titulo_id'       => 13,
                'capa'            => '653.jpg',
                'data_lancamento' => '2021-06-07',
                'ordem'           => 7,
                'link_amazon'     => 'amzn.to/3ilMHYT',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 654
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 29.90,
                'titulo_id'       => 13,
                'capa'            => '654.jpg',
                'data_lancamento' => '2021-07-09',
                'ordem'           => 8,
                'link_amazon'     => 'amzn.to/3exCjfs',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 655
            DB::table('volumes')->insert([
                'nome'            => 'Volume 08',
                'preco'           => 29.90,
                'titulo_id'       => 13,
                'capa'            => '655.jpg',
                'data_lancamento' => '2021-08-13',
                'ordem'           => 9,
                'link_amazon'     => 'amzn.to/3hJK8AU',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 656
            DB::table('volumes')->insert([
                'nome'            => 'Volume 09',
                'preco'           => 29.90,
                'titulo_id'       => 13,
                //'capa'            => '656.jpg',
                'data_lancamento' => '2021-09-10',
                'ordem'           => 10,
                //'link_amazon'     => '',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Chainsaw Man 657
             // 657
             DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 29.90,
                'titulo_id'       => 130,
                //'capa'            => '657.jpg',
                'data_lancamento' => '2021-09-10',
                'ordem'           => 4,
                //'link_amazon'     => '',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //My Hero Academia Illegals 658-665
            // 658
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 27.90,
                'titulo_id'       => 5,
                'capa'            => '658.jpg',
                'data_lancamento' => '2020-07-20',
                'ordem'           => 1,
                'link_amazon'     => 'amzn.to/2Tha7pN',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 659
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 27.90,
                'titulo_id'       => 5,
                'capa'            => '659.jpg',
                'data_lancamento' => '2020-07-20',
                'ordem'           => 2,
                'link_amazon'     => 'amzn.to/2UqHFSS',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 660
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 27.90,
                'titulo_id'       => 5,
                'capa'            => '660.jpg',
                'data_lancamento' => '2020-12-15',
                'ordem'           => 3,
                'link_amazon'     => 'amzn.to/2Um5D1K',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 661
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 27.90,
                'titulo_id'       => 5,
                'capa'            => '661.jpg',
                'data_lancamento' => '2020-12-15',
                'ordem'           => 4,
                'link_amazon'     => 'amzn.to/2UfCG7O',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 662
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 29.90,
                'titulo_id'       => 5,
                'capa'            => '662.jpg',
                'data_lancamento' => '2021-02-26',
                'ordem'           => 5,
                'link_amazon'     => 'amzn.to/3znK8N5',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 663
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 29.90,
                'titulo_id'       => 5,
                'capa'            => '663.jpg',
                'data_lancamento' => '2021-02-26',
                'ordem'           => 6,
                'link_amazon'     => 'amzn.to/3ik6XtT',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 664
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 29.90,
                'titulo_id'       => 5,
                'capa'            => '664.jpg',
                'data_lancamento' => '2021-07-20',
                'ordem'           => 7,
                'link_amazon'     => 'amzn.to/3z7BAcS',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 665
            DB::table('volumes')->insert([
                'nome'            => 'Volume 08',
                'preco'           => 29.90,
                'titulo_id'       => 5,
                'capa'            => '665.jpg',
                'data_lancamento' => '2021-07-20',
                'ordem'           => 8,
                'link_amazon'     => 'amzn.to/3kr0qAp',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { // Spy X Family 666-671
            // 666
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 29.90,
                'titulo_id'       => 131,
                'capa'            => '666.jpg',
                'data_lancamento' => '2020-09-03',
                'ordem'           => 1,
                'link_amazon'     => 'amzn.to/3if0fVW',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 667
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 29.90,
                'titulo_id'       => 131,
                'capa'            => '667.jpg',
                'data_lancamento' => '2020-11-13',
                'ordem'           => 2,
                'link_amazon'     => 'amzn.to/3hLueG8',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 668
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 22.90,
                'titulo_id'       => 131,
                'capa'            => '668.jpg',
                'data_lancamento' => '2021-01-11',
                'ordem'           => 3,
                'link_amazon'     => 'amzn.to/3euOeuw',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 669
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 29.90,
                'titulo_id'       => 131,
                'capa'            => '669.jpg',
                'data_lancamento' => '2021-03-12',
                'ordem'           => 4,
                'link_amazon'     => 'amzn.to/2VL17tW',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 670
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 29.90,
                'titulo_id'       => 131,
                'capa'            => '670.jpg',
                'data_lancamento' => '2021-05-14',
                'ordem'           => 5,
                'link_amazon'     => 'amzn.to/2Um7eog',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 671
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 29.90,
                'titulo_id'       => 131,
                'capa'            => '671.jpg',
                'data_lancamento' => '2021-07-16',
                'ordem'           => 6,
                'link_amazon'     => 'amzn.to/3er2ULe',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //My Hero Academia 672-699
            // 672
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 14.90,
                'titulo_id'       => 2,
                'capa'            => '672.jpg',
                'data_lancamento' => '2016-10-01',
                'ordem'           => 1,
                'link_amazon'     => 'amzn.to/2VPizxr',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 673
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 14.90,
                'titulo_id'       => 2,
                'capa'            => '673.jpg',
                'data_lancamento' => '2016-12-01',
                'ordem'           => 2,
                'link_amazon'     => 'amzn.to/3xU5P76',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 674
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 14.90,
                'titulo_id'       => 2,
                'capa'            => '674.jpg',
                'data_lancamento' => '2017-02-01',
                'ordem'           => 3,
                'link_amazon'     => 'amzn.to/3krTToX',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 675
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 14.90,
                'titulo_id'       => 2,
                'capa'            => '675.jpg',
                'data_lancamento' => '2017-04-01',
                'ordem'           => 4,
                'link_amazon'     => 'amzn.to/3euwwaI',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 676
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 14.90,
                'titulo_id'       => 2,
                'capa'            => '676.jpg',
                'data_lancamento' => '2017-07-01',
                'ordem'           => 5,
                'link_amazon'     => 'amzn.to/3z4yMNu',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 677
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 14.90,
                'titulo_id'       => 2,
                'capa'            => '677.jpg',
                'data_lancamento' => '2017-09-01',
                'ordem'           => 6,
                'link_amazon'     => 'amzn.to/3rimVca',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 678
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 14.90,
                'titulo_id'       => 2,
                'capa'            => '678.jpg',
                'data_lancamento' => '2017-11-01',
                'ordem'           => 7,
                'link_amazon'     => 'amzn.to/36J4nbA',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 679
            DB::table('volumes')->insert([
                'nome'            => 'Volume 08',
                'preco'           => 14.90,
                'titulo_id'       => 2,
                'capa'            => '679.jpg',
                'data_lancamento' => '2018-01-01',
                'ordem'           => 8,
                'link_amazon'     => 'amzn.to/3hMrSa7',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 680
            DB::table('volumes')->insert([
                'nome'            => 'Volume 09',
                'preco'           => 15.90,
                'titulo_id'       => 2,
                'capa'            => '680.jpg',
                'data_lancamento' => '2018-03-01',
                'ordem'           => 9,
                'link_amazon'     => 'amzn.to/3ikMp4r',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 681
            DB::table('volumes')->insert([
                'nome'            => 'Volume 10',
                'preco'           => 15.90,
                'titulo_id'       => 2,
                'capa'            => '681.jpg',
                'data_lancamento' => '2018-06-01',
                'ordem'           => 10,
                'link_amazon'     => 'amzn.to/3evJm8C',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 682
            DB::table('volumes')->insert([
                'nome'            => 'Volume 11',
                'preco'           => 15.90,
                'titulo_id'       => 2,
                'capa'            => '682.jpg',
                'data_lancamento' => '2018-08-01',
                'ordem'           => 11,
                'link_amazon'     => 'amzn.to/2UfHgD2',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 683
            DB::table('volumes')->insert([
                'nome'            => 'Volume 12',
                'preco'           => 17.90,
                'titulo_id'       => 2,
                'capa'            => '683.jpg',
                'data_lancamento' => '2018-11-01',
                'ordem'           => 12,
                'link_amazon'     => 'amzn.to/3wMGU3T',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 684
            DB::table('volumes')->insert([
                'nome'            => 'Volume 13',
                'preco'           => 17.90,
                'titulo_id'       => 2,
                'capa'            => '684.jpg',
                'data_lancamento' => '2019-01-01',
                'ordem'           => 13,
                'link_amazon'     => 'amzn.to/2UVH77H',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 685
            DB::table('volumes')->insert([
                'nome'            => 'Volume 14',
                'preco'           => 17.90,
                'titulo_id'       => 2,
                'capa'            => '685.jpg',
                'data_lancamento' => '2019-01-01',
                'ordem'           => 14,
                'link_amazon'     => 'amzn.to/2UeyEMZ',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 686
            DB::table('volumes')->insert([
                'nome'            => 'Volume 15',
                'preco'           => 17.90,
                'titulo_id'       => 2,
                'capa'            => '686.jpg',
                'data_lancamento' => '2019-01-01',
                'ordem'           => 15,
                'link_amazon'     => 'amzn.to/3wNUwvB',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 687
            DB::table('volumes')->insert([
                'nome'            => 'Volume 16',
                'preco'           => 17.90,
                'titulo_id'       => 2,
                'capa'            => '687.jpg',
                'data_lancamento' => '2019-01-01',
                'ordem'           => 16,
                'link_amazon'     => 'amzn.to/3zcM6zo',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 688
            DB::table('volumes')->insert([
                'nome'            => 'Volume 17',
                'preco'           => 17.90,
                'titulo_id'       => 2,
                'capa'            => '688.jpg',
                'data_lancamento' => '2019-04-01',
                'ordem'           => 17,
                'link_amazon'     => 'amzn.to/3kvKnBa',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 689
            DB::table('volumes')->insert([
                'nome'            => 'Volume 18',
                'preco'           => 17.90,
                'titulo_id'       => 2,
                'capa'            => '689.jpg',
                'data_lancamento' => '2019-04-01',
                'ordem'           => 18,
                'link_amazon'     => 'amzn.to/36KZYEU',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 690
            DB::table('volumes')->insert([
                'nome'            => 'Volume 19',
                'preco'           => 17.90,
                'titulo_id'       => 2,
                'capa'            => '690.jpg',
                'data_lancamento' => '2019-04-01',
                'ordem'           => 19,
                'link_amazon'     => 'amzn.to/3z4zlqA',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 691
            DB::table('volumes')->insert([
                'nome'            => 'Volume 20',
                'preco'           => 17.90,
                'titulo_id'       => 2,
                'capa'            => '691.jpg',
                'data_lancamento' => '2019-04-01',
                'ordem'           => 20,
                'link_amazon'     => 'amzn.to/2UVHb7r',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 692
            DB::table('volumes')->insert([
                'nome'            => 'Volume 21',
                'preco'           => 17.90,
                'titulo_id'       => 2,
                'capa'            => '692.jpg',
                'data_lancamento' => '2019-08-01',
                'ordem'           => 21,
                'link_amazon'     => 'amzn.to/2VL4tNy',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 693
            DB::table('volumes')->insert([
                'nome'            => 'Volume 22',
                'preco'           => 17.90,
                'titulo_id'       => 2,
                'capa'            => '693.jpg',
                'data_lancamento' => '2019-08-01',
                'ordem'           => 22,
                'link_amazon'     => 'amzn.to/2UnJiRh',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 694
            DB::table('volumes')->insert([
                'nome'            => 'Volume 23',
                'preco'           => 18.90,
                'titulo_id'       => 2,
                'capa'            => '694.jpg',
                'data_lancamento' => '2019-12-01',
                'ordem'           => 23,
                'link_amazon'     => 'amzn.to/3z89M85',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 695
            DB::table('volumes')->insert([
                'nome'            => 'Volume 24',
                'preco'           => 18.90,
                'titulo_id'       => 2,
                'capa'            => '695.jpg',
                'data_lancamento' => '2019-12-01',
                'ordem'           => 24,
                'link_amazon'     => 'amzn.to/2UUWGw6',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 696
            DB::table('volumes')->insert([
                'nome'            => 'Volume 25',
                'preco'           => 22.90,
                'titulo_id'       => 2,
                'capa'            => '696.jpg',
                'data_lancamento' => '2020-12-01',
                'ordem'           => 25,
                'link_amazon'     => 'amzn.to/3wQzoF0',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 697
            DB::table('volumes')->insert([
                'nome'            => 'Volume 26',
                'preco'           => 22.90,
                'titulo_id'       => 2,
                'capa'            => '697.jpg',
                'data_lancamento' => '2020-12-01',
                'ordem'           => 26,
                'link_amazon'     => 'amzn.to/2ThPV7g',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 698
            DB::table('volumes')->insert([
                'nome'            => 'Volume 27',
                'preco'           => 22.90,
                'titulo_id'       => 2,
                'capa'            => '698.jpg',
                'data_lancamento' => '2021-04-01',
                'ordem'           => 27,
                'link_amazon'     => 'amzn.to/2UVVvwI',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 699
            DB::table('volumes')->insert([
                'nome'            => 'Volume 28',
                'preco'           => 22.90,
                'titulo_id'       => 2,
                'capa'            => '699.jpg',
                'data_lancamento' => '2021-04-01',
                'ordem'           => 28,
                'link_amazon'     => 'amzn.to/3wN5mSH',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Edens Zero 700-710
            // 700
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 23.90,
                'titulo_id'       => 132,
                'capa'            => '700.jpg',
                'data_lancamento' => '2018-12-13',
                'ordem'           => 1,
                'link_amazon'     => 'amzn.to/3Bfo7li',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 701
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 23.90,
                'titulo_id'       => 132,
                'capa'            => '701.jpg',
                'data_lancamento' => '2019-05-22',
                'ordem'           => 2,
                'link_amazon'     => 'amzn.to/3kvNCZm',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 702
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 23.90,
                'titulo_id'       => 132,
                'capa'            => '702.jpg',
                'data_lancamento' => '2019-05-22',
                'ordem'           => 3,
                'link_amazon'     => 'amzn.to/3z8cdrp',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 703
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 24.90,
                'titulo_id'       => 132,
                'capa'            => '703.jpg',
                'data_lancamento' => '2019-10-21',
                'ordem'           => 4,
                'link_amazon'     => 'amzn.to/3z90jgP',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 704
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 24.90,
                'titulo_id'       => 132,
                'capa'            => '704.jpg',
                'data_lancamento' => '2019-10-21',
                'ordem'           => 5,
                'link_amazon'     => 'amzn.to/3ewo9ez',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 705
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 29.90,
                'titulo_id'       => 132,
                'capa'            => '705.jpg',
                'data_lancamento' => '2021-02-12',
                'ordem'           => 6,
                'link_amazon'     => 'amzn.to/3wN7eeb',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 706
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 29.90,
                'titulo_id'       => 132,
                'capa'            => '706.jpg',
                'data_lancamento' => '2021-02-22',
                'ordem'           => 7,
                'link_amazon'     => 'amzn.to/3ktbUTQ',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 707
            DB::table('volumes')->insert([
                'nome'            => 'Volume 08',
                'preco'           => 29.90,
                'titulo_id'       => 132,
                'capa'            => '707.jpg',
                'data_lancamento' => '2021-04-30',
                'ordem'           => 8,
                'link_amazon'     => 'amzn.to/3z8c7jx',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 708
            DB::table('volumes')->insert([
                'nome'            => 'Volume 09',
                'preco'           => 14.90,
                'titulo_id'       => 132,
                'capa'            => '708.jpg',
                'data_lancamento' => '2021-04-30',
                'ordem'           => 9,
                'link_amazon'     => 'amzn.to/3xJvyyO',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 709
            DB::table('volumes')->insert([
                'nome'            => 'Volume 10',
                'preco'           => 29.90,
                'titulo_id'       => 132,
                'capa'            => '709.jpg',
                'data_lancamento' => '2021-07-23',
                'ordem'           => 10,
                'link_amazon'     => 'amzn.to/3BihcHI',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 710
            DB::table('volumes')->insert([
                'nome'            => 'Volume 11',
                'preco'           => 29.90,
                'titulo_id'       => 132,
                'capa'            => '710.jpg',
                'data_lancamento' => '2021-07-23',
                'ordem'           => 11,
                'link_amazon'     => 'amzn.to/3ilnLAX',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //That Time I Got Reincarnated as a Slime 711-718
            // 711
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 27.90,
                'titulo_id'       => 133,
                'capa'            => '711.jpg',
                'data_lancamento' => '2020-08-28',
                'ordem'           => 1,
                'link_amazon'     => 'amzn.to/3hNHxWD',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 712
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 27.90,
                'titulo_id'       => 133,
                'capa'            => '712.jpg',
                'data_lancamento' => '2020-08-28',
                'ordem'           => 2,
                'link_amazon'     => 'amzn.to/3ivUuDF',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 713
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 27.90,
                'titulo_id'       => 133,
                'capa'            => '713.jpg',
                'data_lancamento' => '2020-12-21',
                'ordem'           => 3,
                'link_amazon'     => 'amzn.to/36PdLua',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 714
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 27.90,
                'titulo_id'       => 133,
                'capa'            => '714.jpg',
                'data_lancamento' => '2020-12-21',
                'ordem'           => 4,
                'link_amazon'     => 'amzn.to/3ivaWUq',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 715
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 29.90,
                'titulo_id'       => 133,
                'capa'            => '715.jpg',
                'data_lancamento' => '2021-04-20',
                'ordem'           => 5,
                'link_amazon'     => 'amzn.to/3ezVFkq',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 716
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 29.90,
                'titulo_id'       => 133,
                'capa'            => '716.jpg',
                'data_lancamento' => '2021-04-20',
                'ordem'           => 6,
                'link_amazon'     => 'amzn.to/3hNtTCU',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 717
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 29.90,
                'titulo_id'       => 133,
                'capa'            => '717.jpg',
                'data_lancamento' => '2021-07-23',
                'ordem'           => 7,
                'link_amazon'     => 'amzn.to/3itE8eM',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 718
            DB::table('volumes')->insert([
                'nome'            => 'Volume 08',
                'preco'           => 29.90,
                'titulo_id'       => 133,
                'capa'            => '718.jpg',
                'data_lancamento' => '2021-07-23',
                'ordem'           => 8,
                'link_amazon'     => 'amzn.to/3zfGxAp',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //UQ Holder! 719-740
            // 719
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 14.90,
                'titulo_id'       => 134,
                'capa'            => '719.jpg',
                'data_lancamento' => '2016-04-11',
                'ordem'           => 1,
                'link_amazon'     => 'amzn.to/3ip6U01',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 720
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 14.90,
                'titulo_id'       => 134,
                'capa'            => '720.jpg',
                'data_lancamento' => '2016-06-16',
                'ordem'           => 2,
                'link_amazon'     => 'amzn.to/3BjvYhy',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 721
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 14.90,
                'titulo_id'       => 134,
                'capa'            => '721.jpg',
                'data_lancamento' => '2016-08-12',
                'ordem'           => 3,
                'link_amazon'     => 'amzn.to/3wOR4AP',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 722
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 14.90,
                'titulo_id'       => 134,
                'capa'            => '722.jpg',
                'data_lancamento' => '2016-10-05',
                'ordem'           => 4,
                'link_amazon'     => 'amzn.to/3kzPa4J',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 723
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 14.90,
                'titulo_id'       => 134,
                'capa'            => '723.jpg',
                'data_lancamento' => '2016-12-12',
                'ordem'           => 5,
                'link_amazon'     => 'amzn.to/3zf2wY9',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 724
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 14.90,
                'titulo_id'       => 134,
                'capa'            => '724.jpg',
                'data_lancamento' => '2017-02-10',
                'ordem'           => 6,
                'link_amazon'     => 'amzn.to/3kwJXL7',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 725
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 15.50,
                'titulo_id'       => 134,
                'capa'            => '725.jpg',
                'data_lancamento' => '2017-05-05',
                'ordem'           => 7,
                'link_amazon'     => 'amzn.to/3BkhSMO',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 726
            DB::table('volumes')->insert([
                'nome'            => 'Volume 08',
                'preco'           => 15.50,
                'titulo_id'       => 134,
                'capa'            => '726.jpg',
                'data_lancamento' => '2017-07-17',
                'ordem'           => 8,
                'link_amazon'     => 'amzn.to/2UVkVuf',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 727
            DB::table('volumes')->insert([
                'nome'            => 'Volume 09',
                'preco'           => 15.50,
                'titulo_id'       => 134,
                'capa'            => '727.jpg',
                'data_lancamento' => '2017-08-16',
                'ordem'           => 9,
                'link_amazon'     => 'amzn.to/3kBRRmb',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 728
            DB::table('volumes')->insert([
                'nome'            => 'Volume 10',
                'preco'           => 15.90,
                'titulo_id'       => 134,
                'capa'            => '728.jpg',
                'data_lancamento' => '2017-11-17',
                'ordem'           => 10,
                'link_amazon'     => 'amzn.to/3ewHQ64',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 729
            DB::table('volumes')->insert([
                'nome'            => 'Volume 11',
                'preco'           => 15.90,
                'titulo_id'       => 134,
                'capa'            => '729.jpg',
                'data_lancamento' => '2018-01-22',
                'ordem'           => 11,
                'link_amazon'     => 'amzn.to/3ioJS9G',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 730
            DB::table('volumes')->insert([
                'nome'            => 'Volume 12',
                'preco'           => 15.50,
                'titulo_id'       => 134,
                'capa'            => '730.jpg',
                'data_lancamento' => '2018-04-09',
                'ordem'           => 12,
                'link_amazon'     => 'amzn.to/3zfw4VH',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 731
            DB::table('volumes')->insert([
                'nome'            => 'Volume 13',
                'preco'           => 17.90,
                'titulo_id'       => 134,
                'capa'            => '731.jpg',
                'data_lancamento' => '2018-12-09',
                'ordem'           => 13,
                'link_amazon'     => 'amzn.to/3ezEgZ5',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 732
            DB::table('volumes')->insert([
                'nome'            => 'Volume 14',
                'preco'           => 17.90,
                'titulo_id'       => 134,
                'capa'            => '732.jpg',
                'data_lancamento' => '2018-12-31',
                'ordem'           => 14,
                'link_amazon'     => 'amzn.to/2VUU3uR',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 733
            DB::table('volumes')->insert([
                'nome'            => 'Volume 15',
                'preco'           => 17.90,
                'titulo_id'       => 134,
                'capa'            => '733.jpg',
                'data_lancamento' => '2019-02-22',
                'ordem'           => 15,
                'link_amazon'     => 'amzn.to/3eAvZnC',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 734
            DB::table('volumes')->insert([
                'nome'            => 'Volume 16',
                'preco'           => 17.90,
                'titulo_id'       => 134,
                'capa'            => '734.jpg',
                'data_lancamento' => '2019-02-22',
                'ordem'           => 16,
                'link_amazon'     => 'amzn.to/36JNFJf',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 735
            DB::table('volumes')->insert([
                'nome'            => 'Volume 17',
                'preco'           => 18.90,
                'titulo_id'       => 134,
                'capa'            => '735.jpg',
                'data_lancamento' => '2020-04-09',
                'ordem'           => 17,
                'link_amazon'     => 'amzn.to/3kBbrze',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 736
            DB::table('volumes')->insert([
                'nome'            => 'Volume 18',
                'preco'           => 18.90,
                'titulo_id'       => 134,
                'capa'            => '736.jpg',
                'data_lancamento' => '2020-04-09',
                'ordem'           => 18,
                'link_amazon'     => 'amzn.to/3rl6ifS',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 737
            DB::table('volumes')->insert([
                'nome'            => 'Volume 19',
                'preco'           => 29.90,
                'titulo_id'       => 134,
                'capa'            => '737.jpg',
                'data_lancamento' => '2021-05-21',
                'ordem'           => 19,
                'link_amazon'     => 'amzn.to/2Uwb8Lf',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 738
            DB::table('volumes')->insert([
                'nome'            => 'Volume 20',
                'preco'           => 29.90,
                'titulo_id'       => 134,
                'capa'            => '738.jpg',
                'data_lancamento' => '2021-05-21',
                'ordem'           => 20,
                'link_amazon'     => 'amzn.to/371xtmR',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 739
            DB::table('volumes')->insert([
                'nome'            => 'Volume 21',
                'preco'           => 29.90,
                'titulo_id'       => 134,
                'capa'            => '739.jpg',
                'data_lancamento' => '2021-07-30',
                'ordem'           => 21,
                'link_amazon'     => 'amzn.to/3za7hCc',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 740
            DB::table('volumes')->insert([
                'nome'            => 'Volume 22',
                'preco'           => 29.90,
                'titulo_id'       => 134,
                'capa'            => '740.jpg',
                'data_lancamento' => '2021-07-30',
                'ordem'           => 22,
                'link_amazon'     => 'amzn.to/2W15UaU',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //CDZ - Saint Seiya [Kanzenban] 741-760
            // 741
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 64.90,
                'titulo_id'       => 135,
                'capa'            => '741.jpg',
                'data_lancamento' => '2016-11-03',
                'ordem'           => 1,
                'link_amazon'     => 'amzn.to/3iyrDyq',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 742
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 64.90,
                'titulo_id'       => 135,
                'capa'            => '742.jpg',
                'data_lancamento' => '2017-02-01',
                'ordem'           => 2,
                'link_amazon'     => 'amzn.to/3eGGAgN',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 743
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 64.90,
                'titulo_id'       => 135,
                'capa'            => '743.jpg',
                'data_lancamento' => '2017-05-01',
                'ordem'           => 3,
                'link_amazon'     => 'amzn.to/3BkVcwd',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 744
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 64.90,
                'titulo_id'       => 135,
                'capa'            => '744.jpg',
                'data_lancamento' => '2017-07-01',
                'ordem'           => 4,
                'link_amazon'     => 'amzn.to/3kSAjCP',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 745
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 64.90,
                'titulo_id'       => 135,
                'capa'            => '745.jpg',
                'data_lancamento' => '2017-09-01',
                'ordem'           => 5,
                'link_amazon'     => 'amzn.to/2UqQYT8',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 746
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 64.90,
                'titulo_id'       => 135,
                'capa'            => '746.jpg',
                'data_lancamento' => '2017-11-01',
                'ordem'           => 6,
                'link_amazon'     => 'amzn.to/3eEVofV',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 747
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 64.90,
                'titulo_id'       => 135,
                'capa'            => '747.jpg',
                'data_lancamento' => '2017-12-01',
                'ordem'           => 7,
                'link_amazon'     => 'amzn.to/3Bmlhe9',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 748
            DB::table('volumes')->insert([
                'nome'            => 'Volume 08',
                'preco'           => 64.90,
                'titulo_id'       => 135,
                'capa'            => '748.jpg',
                'data_lancamento' => '2018-03-01',
                'ordem'           => 8,
                'link_amazon'     => 'amzn.to/3iMzNDJ',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 749
            DB::table('volumes')->insert([
                'nome'            => 'Volume 09',
                'preco'           => 64.90,
                'titulo_id'       => 135,
                'capa'            => '749.jpg',
                'data_lancamento' => '2018-05-01',
                'ordem'           => 9,
                'link_amazon'     => 'amzn.to/3eDVdBF',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 750
            DB::table('volumes')->insert([
                'nome'            => 'Volume 10',
                'preco'           => 64.90,
                'titulo_id'       => 135,
                'capa'            => '750.jpg',
                'data_lancamento' => '2018-07-01',
                'ordem'           => 10,
                'link_amazon'     => 'amzn.to/2TnWmpl',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 751
            DB::table('volumes')->insert([
                'nome'            => 'Volume 11',
                'preco'           => 64.90,
                'titulo_id'       => 135,
                'capa'            => '751.jpg',
                'data_lancamento' => '2018-09-01',
                'ordem'           => 11,
                'link_amazon'     => 'amzn.to/3zpdo65',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 752
            DB::table('volumes')->insert([
                'nome'            => 'Volume 12',
                'preco'           => 64.90,
                'titulo_id'       => 135,
                'capa'            => '752.jpg',
                'data_lancamento' => '2018-12-01',
                'ordem'           => 12,
                'link_amazon'     => 'amzn.to/2UVUmVQ',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 753
            DB::table('volumes')->insert([
                'nome'            => 'Volume 13',
                'preco'           => 64.90,
                'titulo_id'       => 135,
                'capa'            => '753.jpg',
                'data_lancamento' => '2019-02-01',
                'ordem'           => 13,
                'link_amazon'     => 'amzn.to/3xTRCqJ',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 754
            DB::table('volumes')->insert([
                'nome'            => 'Volume 14',
                'preco'           => 64.90,
                'titulo_id'       => 135,
                'capa'            => '754.jpg',
                'data_lancamento' => '2019-05-01',
                'ordem'           => 14,
                'link_amazon'     => 'amzn.to/3iuGM3J',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 755
            DB::table('volumes')->insert([
                'nome'            => 'Volume 15',
                'preco'           => 64.90,
                'titulo_id'       => 135,
                'capa'            => '755.jpg',
                'data_lancamento' => '2019-08-01',
                'ordem'           => 15,
                'link_amazon'     => 'amzn.to/3BqfNPp',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 756
            DB::table('volumes')->insert([
                'nome'            => 'Volume 16',
                'preco'           => 64.90,
                'titulo_id'       => 135,
                'capa'            => '756.jpg',
                'data_lancamento' => '2019-11-01',
                'ordem'           => 16,
                'link_amazon'     => 'amzn.to/3Bpa2BL',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 757
            DB::table('volumes')->insert([
                'nome'            => 'Volume 17',
                'preco'           => 69.90,
                'titulo_id'       => 135,
                'capa'            => '757.jpg',
                'data_lancamento' => '2020-04-01',
                'ordem'           => 17,
                'link_amazon'     => 'amzn.to/3kFsVdU',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 758
            DB::table('volumes')->insert([
                'nome'            => 'Volume 18',
                'preco'           => 72.90,
                'titulo_id'       => 135,
                'capa'            => '758.jpg',
                'data_lancamento' => '2020-11-01',
                'ordem'           => 18,
                'link_amazon'     => 'amzn.to/3hPcRUW',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 759
            DB::table('volumes')->insert([
                'nome'            => 'Volume 19',
                'preco'           => 72.90,
                'titulo_id'       => 135,
                'capa'            => '759.jpg',
                'data_lancamento' => '2021-02-01',
                'ordem'           => 19,
                'link_amazon'     => 'amzn.to/3kBRW9x',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 760
            DB::table('volumes')->insert([
                'nome'            => 'Volume 20',
                'preco'           => 72.90,
                'titulo_id'       => 135,
                'capa'            => '760.jpg',
                'data_lancamento' => '2021-07-01',
                'ordem'           => 20,
                'link_amazon'     => 'amzn.to/3BoFLmp',
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        /*if (true) { //Injusti??a 2 140-143
            // 140
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 23.90,
                'titulo_id'       => 19,
                'data_lancamento' => '2020-03-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 141
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 22.90,
                'titulo_id'       => 19,
                'data_lancamento' => '2020-08-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 142
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 21.90,
                'titulo_id'       => 19,
                'data_lancamento' => '2020-11-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 143
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 27.90,
                'titulo_id'       => 19     ,
                'data_lancamento' => '2021-03-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }
        
        if (true) { //Tartarugas Ninja 144-145
            // 144
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 89.90,
                'titulo_id'       => 20,
                'data_lancamento' => '2020-05-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 145
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 89.90,
                'titulo_id'       => 20,
                'data_lancamento' => '2021-01-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Sherlock 150-153
            // 150
            DB::table('volumes')->insert([
                'nome'            => 'Um Estudo em Rosa',
                'preco'           => 18.90,
                'titulo_id'       => 14,
                'data_lancamento' => '2017-02-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 151
            DB::table('volumes')->insert([
                'nome'            => 'O Banqueiro Cego',
                'preco'           => 18.90,
                'titulo_id'       => 14,
                'data_lancamento' => '2017-05-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 152
            DB::table('volumes')->insert([
                'nome'            => 'O Grande Jogo',
                'preco'           => 18.90,
                'titulo_id'       => 14,
                'data_lancamento' => '2017-08-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 153
            DB::table('volumes')->insert([
                'nome'            => 'Um Esc??ndalo na Belgr??via - Parte 1',
                'preco'           => 24.90,
                'titulo_id'       => 14,
                'data_lancamento' => '2020-03-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }*/
    }
}
