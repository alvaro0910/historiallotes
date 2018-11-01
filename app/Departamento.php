<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamentos';

    protected $fillable = [
        'codigo', 'departamento',
    ];

    public function municipios(){
        return $this->hasMany('App\Municipio');
    }
}
