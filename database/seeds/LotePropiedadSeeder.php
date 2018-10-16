<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LotePropiedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        /** Propiedades lote 102 */
        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 4.7,
            'periodo' => '2015/01/01',
            'lote_id' => 1,
            'propiedad_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 5.3,
            'periodo' => '2015/01/01',
            'lote_id' => 1,
            'propiedad_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 0.35,
            'periodo' => '2015/01/01',
            'lote_id' => 1,
            'propiedad_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 0.79,
            'periodo' => '2015/01/01',
            'lote_id' => 1,
            'propiedad_id' => 4,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 0.24,
            'periodo' => '2015/01/01',
            'lote_id' => 1,
            'propiedad_id' => 5,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 135,
            'periodo' => '2015/01/01',
            'lote_id' => 1,
            'propiedad_id' => 6,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 2.2,
            'periodo' => '2015/01/01',
            'lote_id' => 1,
            'propiedad_id' => 7,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        /** Propiedades lote 103 */
        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 4.7,
            'periodo' => '2015/01/01',
            'lote_id' => 2,
            'propiedad_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 5.5,
            'periodo' => '2015/01/01',
            'lote_id' => 2,
            'propiedad_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 0.27,
            'periodo' => '2015/01/01',
            'lote_id' => 2,
            'propiedad_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 0.66,
            'periodo' => '2015/01/01',
            'lote_id' => 2,
            'propiedad_id' => 4,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 0.22,
            'periodo' => '2015/01/01',
            'lote_id' => 2,
            'propiedad_id' => 5,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 122,
            'periodo' => '2015/01/01',
            'lote_id' => 2,
            'propiedad_id' => 6,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 2.5,
            'periodo' => '2015/01/01',
            'lote_id' => 2,
            'propiedad_id' => 7,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        /** Propiedades lote 104 */
        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 4.2,
            'periodo' => '2015/01/01',
            'lote_id' => 3,
            'propiedad_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 5.1,
            'periodo' => '2015/01/01',
            'lote_id' => 3,
            'propiedad_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 0.25,
            'periodo' => '2015/01/01',
            'lote_id' => 3,
            'propiedad_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 1.73,
            'periodo' => '2015/01/01',
            'lote_id' => 3,
            'propiedad_id' => 4,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 0.43,
            'periodo' => '2015/01/01',
            'lote_id' => 3,
            'propiedad_id' => 5,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 105,
            'periodo' => '2015/01/01',
            'lote_id' => 3,
            'propiedad_id' => 6,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 2.2,
            'periodo' => '2015/01/01',
            'lote_id' => 3,
            'propiedad_id' => 7,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        /** Propiedades lote 107 */
        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 4.7,
            'periodo' => '2015/01/01',
            'lote_id' => 4,
            'propiedad_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 5.2,
            'periodo' => '2015/01/01',
            'lote_id' => 4,
            'propiedad_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 0.23,
            'periodo' => '2015/01/01',
            'lote_id' => 4,
            'propiedad_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 1.96,
            'periodo' => '2015/01/01',
            'lote_id' => 4,
            'propiedad_id' => 4,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 0.42,
            'periodo' => '2015/01/01',
            'lote_id' => 4,
            'propiedad_id' => 5,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 141,
            'periodo' => '2015/01/01',
            'lote_id' => 4,
            'propiedad_id' => 6,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 1,
            'periodo' => '2015/01/01',
            'lote_id' => 4,
            'propiedad_id' => 7,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        /** Propiedades lote 111 */
        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 4.5,
            'periodo' => '2015/01/01',
            'lote_id' => 5,
            'propiedad_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 6.8,
            'periodo' => '2015/01/01',
            'lote_id' => 5,
            'propiedad_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 0.28,
            'periodo' => '2015/01/01',
            'lote_id' => 5,
            'propiedad_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 2.2,
            'periodo' => '2015/01/01',
            'lote_id' => 5,
            'propiedad_id' => 4,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 0.85,
            'periodo' => '2015/01/01',
            'lote_id' => 5,
            'propiedad_id' => 5,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 122,
            'periodo' => '2015/01/01',
            'lote_id' => 5,
            'propiedad_id' => 6,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 3.2,
            'periodo' => '2015/01/01',
            'lote_id' => 5,
            'propiedad_id' => 7,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        /** Propiedades lote 112 */
        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 4.5,
            'periodo' => '2015/01/01',
            'lote_id' => 6,
            'propiedad_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 5.6,
            'periodo' => '2015/01/01',
            'lote_id' => 6,
            'propiedad_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 0.17,
            'periodo' => '2015/01/01',
            'lote_id' => 6,
            'propiedad_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 0.92,
            'periodo' => '2015/01/01',
            'lote_id' => 6,
            'propiedad_id' => 4,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 0.22,
            'periodo' => '2015/01/01',
            'lote_id' => 6,
            'propiedad_id' => 5,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 145,
            'periodo' => '2015/01/01',
            'lote_id' => 6,
            'propiedad_id' => 6,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 2.4,
            'periodo' => '2015/01/01',
            'lote_id' => 6,
            'propiedad_id' => 7,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        /** Propiedades lote 113 */
        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 4.5,
            'periodo' => '2015/01/01',
            'lote_id' => 7,
            'propiedad_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 5.3,
            'periodo' => '2015/01/01',
            'lote_id' => 7,
            'propiedad_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 0.4,
            'periodo' => '2015/01/01',
            'lote_id' => 7,
            'propiedad_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 1.45,
            'periodo' => '2015/01/01',
            'lote_id' => 7,
            'propiedad_id' => 4,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 0.33,
            'periodo' => '2015/01/01',
            'lote_id' => 7,
            'propiedad_id' => 5,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 80,
            'periodo' => '2015/01/01',
            'lote_id' => 7,
            'propiedad_id' => 6,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 1.7,
            'periodo' => '2015/01/01',
            'lote_id' => 7,
            'propiedad_id' => 7,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        /** Propiedades lote 114 */
        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 4.6,
            'periodo' => '2015/01/01',
            'lote_id' => 8,
            'propiedad_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 4,
            'periodo' => '2015/01/01',
            'lote_id' => 8,
            'propiedad_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 0.28,
            'periodo' => '2015/01/01',
            'lote_id' => 8,
            'propiedad_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 3.19,
            'periodo' => '2015/01/01',
            'lote_id' => 8,
            'propiedad_id' => 4,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 0.95,
            'periodo' => '2015/01/01',
            'lote_id' => 8,
            'propiedad_id' => 5,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 33,
            'periodo' => '2015/01/01',
            'lote_id' => 8,
            'propiedad_id' => 6,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 1.2,
            'periodo' => '2015/01/01',
            'lote_id' => 8,
            'propiedad_id' => 7,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        /** Propiedades lote 116 */
        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 4.8,
            'periodo' => '2015/01/01',
            'lote_id' => 9,
            'propiedad_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 4,
            'periodo' => '2015/01/01',
            'lote_id' => 9,
            'propiedad_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 0.35,
            'periodo' => '2015/01/01',
            'lote_id' => 9,
            'propiedad_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 2.42,
            'periodo' => '2015/01/01',
            'lote_id' => 9,
            'propiedad_id' => 4,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 1.03,
            'periodo' => '2015/01/01',
            'lote_id' => 9,
            'propiedad_id' => 5,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 137,
            'periodo' => '2015/01/01',
            'lote_id' => 9,
            'propiedad_id' => 6,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 3.2,
            'periodo' => '2015/01/01',
            'lote_id' => 9,
            'propiedad_id' => 7,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        /** Propiedades lote 123 */
        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 4.3,
            'periodo' => '2015/01/01',
            'lote_id' => 10,
            'propiedad_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 4.1,
            'periodo' => '2015/01/01',
            'lote_id' => 10,
            'propiedad_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 0.36,
            'periodo' => '2015/01/01',
            'lote_id' => 10,
            'propiedad_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 1.23,
            'periodo' => '2015/01/01',
            'lote_id' => 10,
            'propiedad_id' => 4,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 0.36,
            'periodo' => '2015/01/01',
            'lote_id' => 10,
            'propiedad_id' => 5,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 91,
            'periodo' => '2015/01/01',
            'lote_id' => 10,
            'propiedad_id' => 6,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('lote_propiedad')->insert([array(
            'cantidad' => 2.5,
            'periodo' => '2015/01/01',
            'lote_id' => 10,
            'propiedad_id' => 7,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);
    }
}
