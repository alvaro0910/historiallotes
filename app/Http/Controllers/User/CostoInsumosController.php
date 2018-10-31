<?php

namespace App\Http\Controllers\User;

use App\CostoInsumos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CostoInsumosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usu.costoinsumos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CostoInsumos  $costoInsumos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }
}
