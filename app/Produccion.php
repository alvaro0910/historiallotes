<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produccion extends Model
{
    public $table = "producciones";

    protected $fillable = [
        'cantidad', 'periodo', 'lote_id',
    ];
    
    public function lote(){
        return $this->belongTo('App\Lote');
    }
}
