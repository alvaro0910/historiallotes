<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoFisico extends Model
{
    public $table = "estados_fisicos";

    protected $fillable = [
        'descripcion', 'periodo', 'lote_id',
    ];
    
    public function lote(){
        return $this->belongTo('App\Lote');
    }
}
