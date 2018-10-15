<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call('UserSeeder');
        //$this->call('FincaSeeder');
        //$this->call('UserFincaSeeder');
        //$this->call('CultivoSeeder');
        //$this->call('VariedadSeeder');
        //$this->call('LoteSeeder');
        $this->call('EstadoFisicoSeeder');
        //$this->call('ProduccionSeeder');
        //$this->call('PropiedadesSeeder');
        //$this->call('GrupoLaborSeeder');
        //$this->call('LaborSeeder');
        //$this->call('InsumosSeeder');
        //$this->call('GrupoLoteSeeder');
        //$this->call('InsumoLoteSeeder');
    }
}
