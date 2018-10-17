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
        //$this->call('FincaUserSeeder');
        //$this->call('CultivoSeeder');
        //$this->call('CultivoFincaSeeder');
        //$this->call('VariedadSeeder');
        //$this->call('LoteSeeder');
        //$this->call('EstadoFisicoSeeder');
        //$this->call('PropiedadSeeder');
        //$this->call('LotePropiedadSeeder');
        $this->call('GrupoLaborSeeder');
        //$this->call('ProduccionSeeder');
        //$this->call('GrupoLaborSeeder');
        //$this->call('LaborSeeder');
        //$this->call('InsumosSeeder');
        //$this->call('GrupoLoteSeeder');
        //$this->call('InsumoLoteSeeder');
    }
}
