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
            'periodo' => '2009/01/01',
            'lote_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);
        
        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 1 año',
            'periodo' => '2010/01/01',
            'lote_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 2 años',
            'periodo' => '2011/01/01',
            'lote_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 3 años',
            'periodo' => '2012/01/01',
            'lote_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 4 años',
            'periodo' => '2013/01/01',
            'lote_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 5 años',
            'periodo' => '2014/01/01',
            'lote_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca pulmon 1 año',
            'periodo' => '2015/01/01',
            'lote_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca pulmon 2 años',
            'periodo' => '2016/01/01',
            'lote_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca pulmon 3 años',
            'periodo' => '2017/01/01',
            'lote_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => null,
            'periodo' => '2018/01/01',
            'lote_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        /** Estados fisicos lote 103 2008-2018 */
        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 4 años',
            'periodo' => '2008/01/01',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 5 años',
            'periodo' => '2009/01/01',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);
        
        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 1 año',
            'periodo' => '2010/01/01',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 2 años',
            'periodo' => '2011/01/01',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 3 años',
            'periodo' => '2012/01/01',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 4 años',
            'periodo' => '2013/01/01',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 5 años',
            'periodo' => '2014/01/01',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca pulmon 1 año',
            'periodo' => '2015/01/01',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca pulmon 2 años',
            'periodo' => '2016/01/01',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca pulmon 3 años',
            'periodo' => '2017/01/01',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => null,
            'periodo' => '2018/01/01',
            'lote_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        /** Estados fisicos lote 104 2008-2018 */
        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 2 años',
            'periodo' => '2008/01/01',
            'lote_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 3 años',
            'periodo' => '2009/01/01',
            'lote_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);
        
        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 4 años',
            'periodo' => '2010/01/01',
            'lote_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 5 años',
            'periodo' => '2011/01/01',
            'lote_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 6 años',
            'periodo' => '2012/01/01',
            'lote_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Pulmon 1 año',
            'periodo' => '2013/01/01',
            'lote_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Pulmon 2 años',
            'periodo' => '2014/01/01',
            'lote_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca pulmon 3 años',
            'periodo' => '2015/01/01',
            'lote_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca pulmon 4 años',
            'periodo' => '2016/01/01',
            'lote_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca pulmon 1 año',
            'periodo' => '2017/01/01',
            'lote_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => null,
            'periodo' => '2018/01/01',
            'lote_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        /** Estados fisicos lote 107 2008-2018 */
        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Siembra 3 años',
            'periodo' => '2008/01/01',
            'lote_id' => 4,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Siembra 4 años',
            'periodo' => '2009/01/01',
            'lote_id' => 4,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);
        
        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Siembra 5 años',
            'periodo' => '2010/01/01',
            'lote_id' => 4,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 1 año',
            'periodo' => '2011/01/01',
            'lote_id' => 4,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca tradicional 2 años',
            'periodo' => '2012/01/01',
            'lote_id' => 4,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 3 años',
            'periodo' => '2013/01/01',
            'lote_id' => 4,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 4 años',
            'periodo' => '2014/01/01',
            'lote_id' => 4,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 5 años',
            'periodo' => '2015/01/01',
            'lote_id' => 4,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => null,
            'periodo' => '2016/01/01',
            'lote_id' => 4,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => null,
            'periodo' => '2017/01/01',
            'lote_id' => 4,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => null,
            'periodo' => '2018/01/01',
            'lote_id' => 4,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        /** Estados fisicos lote 111 2008-2018 */
        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 1 año',
            'periodo' => '2008/01/01',
            'lote_id' => 5,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 2 años',
            'periodo' => '2009/01/01',
            'lote_id' => 5,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);
        
        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 3 años',
            'periodo' => '2010/01/01',
            'lote_id' => 5,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 4 años',
            'periodo' => '2011/01/01',
            'lote_id' => 5,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 5 años',
            'periodo' => '2012/01/01',
            'lote_id' => 5,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 6 años',
            'periodo' => '2013/01/01',
            'lote_id' => 5,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Pulmon 1 año',
            'periodo' => '2014/01/01',
            'lote_id' => 5,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Pulmon 2 años',
            'periodo' => '2015/01/01',
            'lote_id' => 5,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Pulmon 3 años',
            'periodo' => '2016/01/01',
            'lote_id' => 5,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Pulmon 4 años',
            'periodo' => '2017/01/01',
            'lote_id' => 5,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => null,
            'periodo' => '2018/01/01',
            'lote_id' => 5,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        /** Estados fisicos lote 112 2008-2018 */
        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 3 años',
            'periodo' => '2008/01/01',
            'lote_id' => 6,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 4 años',
            'periodo' => '2009/01/01',
            'lote_id' => 6,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);
        
        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 5 años',
            'periodo' => '2010/01/01',
            'lote_id' => 6,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 6 años',
            'periodo' => '2011/01/01',
            'lote_id' => 6,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 1 año',
            'periodo' => '2012/01/01',
            'lote_id' => 6,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 2 años',
            'periodo' => '2013/01/01',
            'lote_id' => 6,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 3 años',
            'periodo' => '2014/01/01',
            'lote_id' => 6,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 4 años',
            'periodo' => '2015/01/01',
            'lote_id' => 6,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Pulmon 1 año',
            'periodo' => '2016/01/01',
            'lote_id' => 6,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Pulmon 2 años',
            'periodo' => '2017/01/01',
            'lote_id' => 6,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => null,
            'periodo' => '2018/01/01',
            'lote_id' => 6,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        /** Estados fisicos lote 113 2008-2018 */
        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 1 año',
            'periodo' => '2008/01/01',
            'lote_id' => 7,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 2 años',
            'periodo' => '2009/01/01',
            'lote_id' => 7,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);
        
        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 3 años',
            'periodo' => '2010/01/01',
            'lote_id' => 7,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 4 años',
            'periodo' => '2011/01/01',
            'lote_id' => 7,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 5 años',
            'periodo' => '2012/01/01',
            'lote_id' => 7,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Siembra 1 año',
            'periodo' => '2013/01/01',
            'lote_id' => 7,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Siembra 2 años',
            'periodo' => '2014/01/01',
            'lote_id' => 7,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Siembra 3 años',
            'periodo' => '2015/01/01',
            'lote_id' => 7,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Siembra 4 años',
            'periodo' => '2016/01/01',
            'lote_id' => 7,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Siembra 5 años',
            'periodo' => '2017/01/01',
            'lote_id' => 7,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => null,
            'periodo' => '2018/01/01',
            'lote_id' => 7,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        /** Estados fisicos lote 114 2008-2018 */
        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 1 año',
            'periodo' => '2008/01/01',
            'lote_id' => 8,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 2 años',
            'periodo' => '2009/01/01',
            'lote_id' => 8,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);
        
        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 3 años',
            'periodo' => '2010/01/01',
            'lote_id' => 8,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 4 años',
            'periodo' => '2011/01/01',
            'lote_id' => 8,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 5 años',
            'periodo' => '2012/01/01',
            'lote_id' => 8,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 6 años',
            'periodo' => '2013/01/01',
            'lote_id' => 8,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Pulmon 1 año',
            'periodo' => '2014/01/01',
            'lote_id' => 8,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Pulmon 2 años',
            'periodo' => '2015/01/01',
            'lote_id' => 8,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Pulmon 3 años',
            'periodo' => '2016/01/01',
            'lote_id' => 8,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Pulmon 1 año',
            'periodo' => '2017/01/01',
            'lote_id' => 8,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => null,
            'periodo' => '2018/01/01',
            'lote_id' => 8,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        /** Estados fisicos lote 116 2008-2018 */
        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 1 año',
            'periodo' => '2008/01/01',
            'lote_id' => 9,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 2 años',
            'periodo' => '2009/01/01',
            'lote_id' => 9,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);
        
        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 3 años',
            'periodo' => '2010/01/01',
            'lote_id' => 9,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 4 años',
            'periodo' => '2011/01/01',
            'lote_id' => 9,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Siembra 1 año',
            'periodo' => '2012/01/01',
            'lote_id' => 9,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Siembra 2 años',
            'periodo' => '2013/01/01',
            'lote_id' => 9,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Siembra 3 años',
            'periodo' => '2014/01/01',
            'lote_id' => 9,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Siembra 4 años',
            'periodo' => '2015/01/01',
            'lote_id' => 9,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => null,
            'periodo' => '2016/01/01',
            'lote_id' => 9,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => null,
            'periodo' => '2017/01/01',
            'lote_id' => 9,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => null,
            'periodo' => '2018/01/01',
            'lote_id' => 9,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        /** Estados fisicos lote 123 2008-2018 */
        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 4 años',
            'periodo' => '2008/01/01',
            'lote_id' => 10,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 5 años',
            'periodo' => '2009/01/01',
            'lote_id' => 10,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);
        
        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 1 año',
            'periodo' => '2010/01/01',
            'lote_id' => 10,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 2 años',
            'periodo' => '2011/01/01',
            'lote_id' => 10,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 3 años',
            'periodo' => '2012/01/01',
            'lote_id' => 10,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 4 años',
            'periodo' => '2013/01/01',
            'lote_id' => 10,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Tradicional 5 años',
            'periodo' => '2014/01/01',
            'lote_id' => 10,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Pulmon 1 año',
            'periodo' => '2015/01/01',
            'lote_id' => 10,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Pulmon 2 años',
            'periodo' => '2016/01/01',
            'lote_id' => 10,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => 'Zoca Pulmon 3 años',
            'periodo' => '2017/01/01',
            'lote_id' => 10,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);

        DB::table('estados_fisicos')->insert([array(
            'descripcion' => null,
            'periodo' => '2018/01/01',
            'lote_id' => 10,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        )]);
    }
}
