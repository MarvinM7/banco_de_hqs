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

        if (true) { //Injustiça 95-107
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
                'nome'            => 'Era da Destruição - Parte I',
                'preco'           => 44.90,
                'titulo_id'       => 21,
                'data_lancamento' => '2019-04-01',
                'ordem'           => 3,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 111
            DB::table('volumes')->insert([
                'nome'            => 'Era da Destruição - Parte II',
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

        if (true) { //O Máskara 185
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

        if (true) { //V de Vingança 281
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
                'observacao'      => 'Volume lançado exlusivamente com o box que custou R$ 129,00.',
                'ordem'           => 1,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }

        if (true) { //Diário do Futuro 288-299
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

        if (true) { //Dragão Negro 488
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

        if (true) { //O Ninguém 490
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

        /*if (true) { //Injustiça 2 140-143
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
                'nome'            => 'Um Escândalo na Belgrávia - Parte 1',
                'preco'           => 24.90,
                'titulo_id'       => 14,
                'data_lancamento' => '2020-03-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }*/

        /*if (true) { //My Hero Academia 1-?
            // 29
            DB::table('volumes')->insert([
                'nome'            => 'Volume 01',
                'preco'           => 16.90,
                'titulo_id'       => 2,
                'data_lancamento' => '2016-07-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 30
            DB::table('volumes')->insert([
                'nome'            => 'Volume 02',
                'preco'           => 16.90,
                'titulo_id'       => 2,
                'data_lancamento' => '2016-08-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 31
            DB::table('volumes')->insert([
                'nome'            => 'Volume 03',
                'preco'           => 16.90,
                'titulo_id'       => 2,
                'data_lancamento' => '2016-09-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 32
            DB::table('volumes')->insert([
                'nome'            => 'Volume 04',
                'preco'           => 16.90,
                'titulo_id'       => 2,
                'data_lancamento' => '2016-10-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 33
            DB::table('volumes')->insert([
                'nome'            => 'Volume 05',
                'preco'           => 16.90,
                'titulo_id'       => 2,
                'data_lancamento' => '2016-11-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 34
            DB::table('volumes')->insert([
                'nome'            => 'Volume 06',
                'preco'           => 16.90,
                'titulo_id'       => 2,
                'data_lancamento' => '2017-01-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 35
            DB::table('volumes')->insert([
                'nome'            => 'Volume 07',
                'preco'           => 16.90,
                'titulo_id'       => 2,
                'data_lancamento' => '2017-02-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 36
            DB::table('volumes')->insert([
                'nome'            => 'Volume 08',
                'preco'           => 16.90,
                'titulo_id'       => 2,
                'data_lancamento' => '2017-03-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 37
            DB::table('volumes')->insert([
                'nome'            => 'Volume 09',
                'preco'           => 16.90,
                'titulo_id'       => 2,
                'data_lancamento' => '2017-04-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 38
            DB::table('volumes')->insert([
                'nome'            => 'Volume 10',
                'preco'           => 16.90,
                'titulo_id'       => 2,
                'data_lancamento' => '2017-05-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 39
            DB::table('volumes')->insert([
                'nome'            => 'Volume 11',
                'preco'           => 16.90,
                'titulo_id'       => 2,
                'data_lancamento' => '2017-06-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 40
            DB::table('volumes')->insert([
                'nome'            => 'Volume 12',
                'preco'           => 16.90,
                'titulo_id'       => 2,
                'data_lancamento' => '2017-07-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 41
            DB::table('volumes')->insert([
                'nome'            => 'Volume 13',
                'preco'           => 16.90,
                'titulo_id'       => 2,
                'data_lancamento' => '2017-09-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 42
            DB::table('volumes')->insert([
                'nome'            => 'Volume 14',
                'preco'           => 16.90,
                'titulo_id'       => 2,
                'data_lancamento' => '2017-10-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 43
            DB::table('volumes')->insert([
                'nome'            => 'Volume 15',
                'preco'           => 16.90,
                'titulo_id'       => 2,
                'data_lancamento' => '2017-11-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 44
            DB::table('volumes')->insert([
                'nome'            => 'Volume 16',
                'preco'           => 16.90,
                'titulo_id'       => 2,
                'data_lancamento' => '2017-12-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 45
            DB::table('volumes')->insert([
                'nome'            => 'Volume 17',
                'preco'           => 16.90,
                'titulo_id'       => 2,
                'data_lancamento' => '2018-01-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 46
            DB::table('volumes')->insert([
                'nome'            => 'Volume 18',
                'preco'           => 17.90,
                'titulo_id'       => 2,
                'data_lancamento' => '2018-02-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 47
            DB::table('volumes')->insert([
                'nome'            => 'Volume 19',
                'preco'           => 17.90,
                'titulo_id'       => 2,
                'data_lancamento' => '2018-03-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 48
            DB::table('volumes')->insert([
                'nome'            => 'Volume 20',
                'preco'           => 17.90,
                'titulo_id'       => 2,
                'data_lancamento' => '2018-04-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 49
            DB::table('volumes')->insert([
                'nome'            => 'Volume 21',
                'preco'           => 17.90,
                'titulo_id'       => 2,
                'data_lancamento' => '2018-06-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 50
            DB::table('volumes')->insert([
                'nome'            => 'Volume 22',
                'preco'           => 17.90,
                'titulo_id'       => 2,
                'data_lancamento' => '2018-07-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 51
            DB::table('volumes')->insert([
                'nome'            => 'Volume 23',
                'preco'           => 19.50,
                'titulo_id'       => 2,
                'data_lancamento' => '2018-09-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 52
            DB::table('volumes')->insert([
                'nome'            => 'Volume 24',
                'preco'           => 19.50,
                'titulo_id'       => 2,
                'data_lancamento' => '2018-10-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 53
            DB::table('volumes')->insert([
                'nome'            => 'Volume 25',
                'preco'           => 19.50,
                'titulo_id'       => 2,
                'data_lancamento' => '2018-11-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
            // 54
            DB::table('volumes')->insert([
                'nome'            => 'Volume 26',
                'preco'           => 19.50,
                'titulo_id'       => 2,
                'data_lancamento' => '2018-11-01',
                'ordem'           => ,
                'created_at'      => date("Y-m-d H:i:s"),
                'updated_at'      => date("Y-m-d H:i:s")
            ]);
        }*/
        
/*
SELECT e.nome AS editora, t.nome AS titulo, COUNT(*) AS quantidade_volumes, ts.nome AS status_titulo, MIN(v.data_lancamento) AS primeiro_volume_lancado, MAX(v.data_lancamento) AS ultimo_volume_lancado
FROM titulos t, volumes v, titulo_status ts, editoras e
WHERE
	t.id = v.titulo_id
	AND t.status_id = ts.id
	AND t.editora_id = e.id
GROUP BY v.titulo_id, t.nome, ts.nome, e.nome
ORDER BY e.nome, t.nome
*/
    }
}
