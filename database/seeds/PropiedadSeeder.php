<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PropiedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    
        DB::table('propiedades')->insert([array(
            'material' => 'pH',
            'unidad' => ' ',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('propiedades')->insert([array(
            'material' => 'MOrg',
            'unidad' => '%',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('propiedades')->insert([array(
            'material' => 'K',
            'unidad' => 'me/100gm',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('propiedades')->insert([array(
            'material' => 'Ca',
            'unidad' => 'me/100gm',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('propiedades')->insert([array(
            'material' => 'Mg',
            'unidad' => 'me/100gm',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('propiedades')->insert([array(
            'material' => 'P',
            'unidad' => 'ppm',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('propiedades')->insert([array(
            'material' => 'Al',
            'unidad' => 'me/100gm',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);
    }
}
