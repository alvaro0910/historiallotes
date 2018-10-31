<?php

namespace App\Http\Controllers\User;

use App\Rendimiento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RendimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usu.rendimientos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rendimientos  $rendimientos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }
}
