<?php

namespace App;

use \Illuminate\Database\Eloquent\Model;

class Finca extends Model
{
    protected $fillable = [
        'nombre', 'ciudad', 'departamento', 'direccion',
    ];
  
    protected $hidden = [
        
    ];

    public function users(){
        return $this->belongToMany('App\User')->withTimestamps();
    }

    public function cultivos(){
        return $this->belongToMany('App\Cultivo')->withTimestamps();
    }
}