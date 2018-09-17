<?php

namespace App\Http\Controllers\Datos;

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
        return view('usu.datoslotes.costoinsumos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CostoInsumos  $costoInsumos
     * @return \Illuminate\Http\Response
     */
    public function show(CostoInsumos $costoInsumos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CostoInsumos  $costoInsumos
     * @return \Illuminate\Http\Response
     */
    public function edit(CostoInsumos $costoInsumos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CostoInsumos  $costoInsumos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CostoInsumos $costoInsumos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CostoInsumos  $costoInsumos
     * @return \Illuminate\Http\Response
     */
    public function destroy(CostoInsumos $costoInsumos)
    {
        //
    }
}
