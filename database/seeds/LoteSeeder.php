<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('lotes')->insert([array(
            'codigo' => '102',
            'nombre' => 'Guanabano Gaviota',
            'area' => 2.84,
            'poblacion' => 21271,
            'edad' => null,
            'alturasnm' => null,
            'finca_id' => 1,
            'cultivo_id' => 1,
            'variedad_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lotes')->insert([array(
            'codigo' => '103',
            'nombre' => 'Mesones',
            'area' => 4.15,
            'poblacion' => 25247,
            'edad' => null,
            'alturasnm' => null,
            'finca_id' => 1,
            'cultivo_id' => 1,
            'variedad_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lotes')->insert([array(
            'codigo' => '104',
            'nombre' => 'El Chumbimbo',
            'area' => 3.57,
            'poblacion' => 22117,
            'edad' => null,
            'alturasnm' => null,
            'finca_id' => 1,
            'cultivo_id' => 1,
            'variedad_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lotes')->insert([array(
            'codigo' => '107',
            'nombre' => 'Playa Gaviota',
            'area' => 0.9,
            'poblacion' => 5000,
            'edad' => null,
            'alturasnm' => null,
            'finca_id' => 1,
            'cultivo_id' => 1,
            'variedad_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lotes')->insert([array(
            'codigo' => '111',
            'nombre' => 'Gaviota de Venecia',
            'area' => 2.27,
            'poblacion' => 13358,
            'edad' => null,
            'alturasnm' => null,
            'finca_id' => 1,
            'cultivo_id' => 1,
            'variedad_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lotes')->insert([array(
            'codigo' => '112',
            'nombre' => 'Ignacio Valencia 1',
            'area' => 7.87,
            'poblacion' => 43600,
            'edad' => null,
            'alturasnm' => null,
            'finca_id' => 1,
            'cultivo_id' => 1,
            'variedad_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lotes')->insert([array(
            'codigo' => '113',
            'nombre' => 'Ignacio Valencia 2',
            'area' => 2.05,
            'poblacion' => 13600,
            'edad' => null,
            'alturasnm' => null,
            'finca_id' => 1,
            'cultivo_id' => 1,
            'variedad_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lotes')->insert([array(
            'codigo' => '114',
            'nombre' => 'Guanabano Torre',
            'area' => 2.92,
            'poblacion' => 16020,
            'edad' => null,
            'alturasnm' => null,
            'finca_id' => 1,
            'cultivo_id' => 1,
            'variedad_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lotes')->insert([array(
            'codigo' => '116',
            'nombre' => 'Metro de Morelia',
            'area' => 1.65,
            'poblacion' => 9500,
            'edad' => null,
            'alturasnm' => null,
            'finca_id' => 1,
            'cultivo_id' => 1,
            'variedad_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lotes')->insert([array(
            'codigo' => '123',
            'nombre' => 'Pajonal',
            'area' => 2,
            'poblacion' => 12800,
            'edad' => null,
            'alturasnm' => null,
            'finca_id' => 1,
            'cultivo_id' => 1,
            'variedad_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);
    }
}
