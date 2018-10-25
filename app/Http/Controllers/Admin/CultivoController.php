<?php

namespace App\Http\Controllers\Admin;

use App\cultivo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CultivoController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.cultivo.create');
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
     * @param  \App\cultivo  $cultivo
     * @return \Illuminate\Http\Response
     */
    public function show(cultivo $cultivo)
    {
        $cultivo = Cultivo::where('id', $id)->findOrFail($id);
        return view('adm.cultivo.show')->withData($cultivo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cultivo  $cultivo
     * @return \Illuminate\Http\Response
     */
    public function edit(cultivo $cultivo)
    {
        $cultivo = Cultivo::where('id', $id)->findOrFail($id);
        return view('adm.cultivo.edit', ['data' => $cultivo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cultivo  $cultivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cultivo $cultivo)
    {
        $cultivo = Cultivo::where('id', $id)->findOrFail($id);
        
        $input = $request->all();
        $cultivo->update($input);

        $notificacion = array(
                'message' => 'Cultivo Actualizado Con Exito!',
                'alert-type' => 'success'
        );
        return redirect()->back()->with($notificacion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cultivo  $cultivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(cultivo $cultivo)
    {
        $cultivo = Finca::where('id', $id)->findOrFail($id);
        $cultivo->delete();

        $notificacion = array(
            'message' => 'Cultivo Eliminado Con Exito.',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notificacion);
    }
}
