<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Labor extends Model
{
    public $table = "labores";

    protected $fillable = [
        'descripcion', 'cantidadmo', 'costo', 'periodo', 'grupo_labor_id', 'lote_id', 
    ];

    public function lote(){
        return $this->belongTo('App\Lote');
    }

    public function grupolabor(){
        return $this->belongTo('App\GrupoLabor');
    }
}
