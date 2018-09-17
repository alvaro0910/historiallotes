<?php

namespace App\Http\Controllers\Datos;

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
        return view('usu.datoslotes.rendimientos');
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
     * @param  \App\Rendimientos  $rendimientos
     * @return \Illuminate\Http\Response
     */
    public function show(Rendimientos $rendimientos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rendimientos  $rendimientos
     * @return \Illuminate\Http\Response
     */
    public function edit(Rendimientos $rendimientos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rendimientos  $rendimientos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rendimientos $rendimientos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rendimientos  $rendimientos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rendimientos $rendimientos)
    {
        //
    }
}
