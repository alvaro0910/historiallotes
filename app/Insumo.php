<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    protected $fillable = [
        'descripcion', 'costo', 'periodo', 'lote_id', 'grupo_labor_id',
    ];

    public function lote(){
        return $this->belongTo('App\Lote');
    }

    public function grupolabor(){
        return $this->belongTo('App\GrupoLabor');
    }
}
