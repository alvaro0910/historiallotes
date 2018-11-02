<?php

namespace App\Http\Controllers\Admin;

use App\Lote;
use App\Propiedad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LotePropiedadRequest;
use DB;

class PropiedadLoteController extends Controller
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
        $lotes = DB::table('lotes')->get();
        $propiedades = DB::table('propiedades')->get();
        return view('adm.propiedadlote.create', ['listlotes' => $lotes, 'listpropiedades' => $propiedades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LotePropiedadRequest $request)
    {
        $propiedadlote = Lote::find($request->lote_id);
        $propiedadlote->propiedad()->attach($request->propiedad_id);

        $notificacion = array(
            'message' => 'Relacion propiedad-lote agregada con exito.',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notificacion);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $propiedadlote = DB::select(
            'SELECT lote_propiedad.id, lote_propiedad.cantidad, lote_propiedad.periodo, lotes.nombre, propiedades.material, propiedades.unidad, lote_propiedad.created_at, lote_propiedad.updated_at
            FROM lote_propiedad
            INNER JOIN lotes, propiedades
            WHERE lote_propiedad.lote_id = lotes.id AND lote_propiedad.propiedad_id = propiedades.id AND lote_propiedad.id ='.$id.';');
        
        return view('adm.propiedadlote.show')->withData($propiedadlote);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $propiedadlote = DB::select(
            'SELECT lote_propiedad.id, lote_propiedad.cantidad, lote_propiedad.periodo, lotes.id, propiedades.id
            FROM lote_propiedad
            INNER JOIN lotes, propiedades
            WHERE lote_propiedad.lote_id = lotes.id AND lote_propiedad.propiedad_id = propiedades.id AND lote_propiedad.id ='.$id.';');
        
        $fincas = DB::table('fincas')->get();
        $cultivos = DB::table('cultivos')->get();
        return view('adm.propiedadlote.edit', ['data' => $propiedadlote, 'listfincas' => $fincas, 'listcultivos' => $cultivos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LotePropiedadRequest $request, $id)
    {
        $propiedadlote = DB::select(
            'DELETE
            FROM lote_propiedad
            WHERE lote_propiedad.id ='.$id.';');

        $notificacion = array(
            'message' => 'Relacion actualizada con exito!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notificacion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $propiedadlote = DB::select(
            'DELETE
            FROM lote_propiedad
            WHERE lote_propiedad.id ='.$id.';');                    

        $notificacion = array(
            'message' => 'Relacion eliminada con exito.',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notificacion);
    }
}
