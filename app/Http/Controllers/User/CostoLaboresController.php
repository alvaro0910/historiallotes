<?php

namespace App\Http\Controllers\User;

use App\CostoLabores;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CostoLaboresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usu.costolabores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CostoLabores  $costoLabores
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }
}
