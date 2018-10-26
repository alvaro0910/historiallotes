<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variedad extends Model
{
    public $table = "variedades";
    
    protected $fillable = [
        'variedad', 'descripcion',
    ];
    
    public function lotes(){
        return $this->hasMany('App\Lote');
    }
}
