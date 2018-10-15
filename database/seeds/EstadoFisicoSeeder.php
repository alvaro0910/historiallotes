<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EstadoFisicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        /** Estados fisicos lote 102 2008-2018 */
        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 4 años',
            'periodo' => '2008/01/01',
            'lote_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 5 años',
            'periodo' => '01-01-2009',
            'lote_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);
        
        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 1 año',
            'periodo' => '01-01-2010',
            'lote_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 2 años',
            'periodo' => '01-01-2011',
            'lote_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 3 años',
            'periodo' => '01-01-2012',
            'lote_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 4 años',
            'periodo' => '01-01-2013',
            'lote_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 5 años',
            'periodo' => '01-01-2014',
            'lote_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca pulmon 1 año',
            'periodo' => '01-01-2015',
            'lote_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca pulmon 2 años',
            'periodo' => '01-01-2016',
            'lote_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca pulmon 3 años',
            'periodo' => '01-01-2017',
            'lote_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => '',
            'periodo' => '01-01-2018',
            'lote_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        /** Estados fisicos lote 103 2008-2018 */
        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 4 años',
            'periodo' => '01-01-2008',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 5 años',
            'periodo' => '01-01-2009',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);
        
        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 1 año',
            'periodo' => '01-01-2010',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 2 años',
            'periodo' => '01-01-2011',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 3 años',
            'periodo' => '01-01-2012',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 4 años',
            'periodo' => '01-01-2013',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 5 años',
            'periodo' => '01-01-2014',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca pulmon 1 año',
            'periodo' => '01-01-2015',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca pulmon 2 años',
            'periodo' => '01-01-2016',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca pulmon 3 años',
            'periodo' => '01-01-2017',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => '',
            'periodo' => '01-01-2018',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        /** Estados fisicos lote 104 2008-2018 */
        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 2 años',
            'periodo' => '01-01-2008',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 3 años',
            'periodo' => '01-01-2009',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);
        
        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 4 años',
            'periodo' => '01-01-2010',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 5 años',
            'periodo' => '01-01-2011',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 6 años',
            'periodo' => '01-01-2012',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Pulmon 1 año',
            'periodo' => '01-01-2013',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Pulmon 2 años',
            'periodo' => '01-01-2014',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca pulmon 3 años',
            'periodo' => '01-01-2015',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca pulmon 4 años',
            'periodo' => '01-01-2016',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca pulmon 1 año',
            'periodo' => '01-01-2017',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => '',
            'periodo' => '01-01-2018',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);


    }
}
