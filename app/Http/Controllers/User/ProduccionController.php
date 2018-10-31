<?php

namespace App\Http\Controllers\User;

use App\Produccion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProduccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usu.producciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produccion  $produccion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }
}
