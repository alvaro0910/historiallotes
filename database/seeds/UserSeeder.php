<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('users')->insert([array(
            'name' => 'Alvaro Castaño',
            'email' => 'alvarocastano6@gmail.com',
            'email_verified_at' => null,
            'password' => bcrypt('123456'),
            'tipo' => 'adm',
            'remember_token' => str_random(10),
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('users')->insert([array(
            'name' => 'Alvaro Castaño',
            'email' => 'alvaro.castanol@autonoma.edu.co',
            'email_verified_at' => null,
            'password' => bcrypt('123456'),
            'tipo' => 'usu',
            'remember_token' => str_random(10),
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);
        
        for ($i=0; $i < 5; $i++) {
            DB::table('users')->insert([array(
                'name' => $faker->firstNameFemale,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => null,
                'password' => bcrypt('secret'),
                'tipo' => $faker->randomElement(['adm','usu']),
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            )]);
        }

        for ($i=0; $i < 5; $i++) {
            DB::table('users')->insert([array(
                'name' => $faker->firstNameMale,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => null,
                'password' => bcrypt('secret'),
                'tipo' => $faker->randomElement(['adm','usu']),
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            )]);
        }
    }
}
