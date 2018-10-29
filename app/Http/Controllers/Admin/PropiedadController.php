<?php

namespace App\Http\Controllers\Admin;

use App\Propiedad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PropiedadRequest;
use DB;

class PropiedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propiedades = DB::table('propiedades')->get();

        $propiedadlote = DB::select(
            'SELECT lotes.nombre, lote_propiedad.cantidad, lote_propiedad.periodo, propiedades.id, propiedades.material, propiedades.unidad
            FROM ((lotes
            INNER JOIN lote_propiedad ON lote_propiedad.lote_id = lotes.id)
            INNER JOIN propiedades ON lote_propiedad.propiedad_id = propiedades.id);');
        return view('adm.indexpropiedadsuelolote', ['collectionpropiedades' => $propiedades, 'collectionpropiedadlotes' => $propiedadlote]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.propiedad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PropiedadRequest $request)
    {
        $propiedad = new Propiedad($request->all());
        $propiedad->save();

        $notificacion = array(
            'message' => 'Propiedad agregada con exito.',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notificacion);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $propiedad = Propiedad::where('id', $id)->findOrFail($id);
        return view('adm.propiedad.show')->withData($propiedad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $propiedad = Propiedad::where('id', $id)->findOrFail($id);
        return view('adm.propiedad.edit', ['data' => $propiedad]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
