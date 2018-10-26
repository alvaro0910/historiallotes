<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cultivo extends Model
{
    protected $fillable = [
        'cultivo', 'descripcion',
    ];

    public function fincas(){
        return $this->belongToMany('App\Finca')->withTimestamps();
    }

    public function lotes(){
        return $this->hasMany('App\Lote');
    }
}
