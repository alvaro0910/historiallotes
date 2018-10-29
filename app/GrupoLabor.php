<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupoLabor extends Model
{
    protected $fillable = [
        'nombre', 'descripcion',
    ];
    
    public function labores(){
        return $this->hasMany('App\Labor');
    }

    public function insumos(){
        return $this->hasMany('App\Insumo');
    }
}
