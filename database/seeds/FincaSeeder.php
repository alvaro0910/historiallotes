<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FincaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    
        DB::table('fincas')->insert([array(
            'nombre' => 'Venecia',
            'ciudad' => 'Manizales',
            'departamento' => 'Caldas',
            'direccion' => 'San Peregrino',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);
    }
}
