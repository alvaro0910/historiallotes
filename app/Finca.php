<?php

namespace App;

use \Illuminate\Database\Eloquent\Model;

class Finca extends Model
{
    protected $fillable = [
        'nombre', 'ciudad', 'departamento', 'municipio', 'direccion',
    ];

    public function users(){
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    public function cultivos(){
        return $this->belongsToMany('App\Cultivo')->withTimestamps();
    }
}