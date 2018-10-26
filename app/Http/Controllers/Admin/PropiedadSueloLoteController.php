<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class PropiedadSueloLoteController extends Controller
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
}
