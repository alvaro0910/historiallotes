<?php

namespace App\Http\Controllers\Datos;

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
        return view('usu.datoslotes.costolabores');
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
     * @param  \App\CostoLabores  $costoLabores
     * @return \Illuminate\Http\Response
     */
    public function show(CostoLabores $costoLabores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CostoLabores  $costoLabores
     * @return \Illuminate\Http\Response
     */
    public function edit(CostoLabores $costoLabores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CostoLabores  $costoLabores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CostoLabores $costoLabores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CostoLabores  $costoLabores
     * @return \Illuminate\Http\Response
     */
    public function destroy(CostoLabores $costoLabores)
    {
        //
    }
}
