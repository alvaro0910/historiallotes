<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class GrupoLaborSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('grupos_labores')->insert([array(
            'nombre' => "Recoleccion",
            'descripcion' => null,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('grupos_labores')->insert([array(
            'nombre' => "Control Malezas",
            'descripcion' => null,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('grupos_labores')->insert([array(
            'nombre' => "Control Sanitario",
            'descripcion' => null,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('grupos_labores')->insert([array(
            'nombre' => "Fertilizacion",
            'descripcion' => null,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('grupos_labores')->insert([array(
            'nombre' => "Culturales",
            'descripcion' => null,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('grupos_labores')->insert([array(
            'nombre' => "Generales",
            'descripcion' => null,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('grupos_labores')->insert([array(
            'nombre' => "Mantenimiento",
            'descripcion' => null,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('grupos_labores')->insert([array(
            'nombre' => "Renovacion",
            'descripcion' => null,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('grupos_labores')->insert([array(
            'nombre' => "Siembra",
            'descripcion' => null,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);
    }
}
