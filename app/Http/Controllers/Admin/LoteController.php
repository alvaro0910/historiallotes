<?php

namespace App\Http\Controllers\Admin;

use App\Lote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoteRequest;
use DB;

class LoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lotes = DB::select(
            'SELECT lotes.id, lotes.codigo, lotes.nombre, cultivos.cultivo
            FROM lotes
            INNER JOIN cultivos
            WHERE cultivos.id = lotes.cultivo_id;');
        return view('adm.lote.index', ['collection' => $lotes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cultivos = DB::table('cultivos')->get();
        $variedades = DB::table('variedades')->get();
        $fincas = DB::table('fincas')->get();
        return view('adm.lote.create', ['listcultivos' => $cultivos, 'listvariedades' => $variedades, 'listfincas' => $fincas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoteRequest $request)
    {
        $existe = Lote::where(['codigo' => $request->codigo], ['finca_id' => $request->finca_id])->count();
        
        if ($existe > 0) {
            $notificacion = array(
                'message' => '¡El codigo del lote ya esta asignado a uno de los lotes de la finca seleccionada!',
                'alert-type' => 'warning'
            );
            return redirect()->back()->with($notificacion);
        } else {
            $lote = new Lote($request->all());
            $lote->save();

            $notificacion = array(
                'message' => '¡Lote agregado con éxito!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notificacion);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lote  $lote
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$lote = Lote::where('id', $id)->findOrFail($id);
        $lotes = DB::select(
            "SELECT lotes.id, lotes.codigo, lotes.nombre, lotes.area, lotes.poblacion, lotes.edad, lotes.alturasnm, lotes.created_at, lotes.updated_at, cultivos.cultivo, variedades.variedad, fincas.nombre AS nomfinca
            FROM lotes
            INNER JOIN cultivos, variedades, fincas
            WHERE cultivos.id = lotes.cultivo_id AND variedades.id = lotes.variedad_id AND fincas.id = lotes.finca_id AND lotes.id ='".$id."';");
        return view('adm.lote.show')->withData($lotes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lote  $lote
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lote = Lote::where('id', $id)->findOrFail($id);
        $cultivos = DB::table('cultivos')->get();
        $variedades = DB::table('variedades')->get();
        $fincas = DB::table('fincas')->get();
        return view('adm.lote.edit', ['data' => $lote, 'listcultivos' => $cultivos, 'listvariedades' => $variedades, 'listfincas' => $fincas ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lote  $lote
     * @return \Illuminate\Http\Response
     */
    public function update(LoteRequest $request, $id)
    {
        $existe = Lote::where(['codigo' => $request->codigo], ['finca_id' => $request->finca_id])->count();
        
        if ($existe > 0) {
            $notificacion = array(
                'message' => '¡El código del lote ya está asignado a uno de los lotes de la finca seleccionada!',
                'alert-type' => 'warning'
            );
            return redirect()->back()->with($notificacion);
        } else {
            $lote = Lote::where('id', $id)->findOrFail($id);
        
            $input = $request->all();
            $lote->update($input);

            $notificacion = array(
                    'message' => 'Lote actualizado con éxito!',
                    'alert-type' => 'success'
            );
            return redirect()->back()->with($notificacion);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lote  $lote
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $existe = Self::existeRelacion($id);
        if ($existe) {
            $notificacion = array(
                'message' => '¡No se puede eliminar el lote, existen registros de costos y producciones asociados al lote!',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notificacion);
        }
        else{
            $lote = Lote::where('id', $id)->findOrFail($id);
            $lote->delete();

            $notificacion = array(
                'message' => '¡Lote eliminado con éxito!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notificacion);
        }   
    }

    public function existeRelacion($id){
        $result1 = DB::table('labores')->where('lote_id', "=", $id)->first();
        $result2 = DB::table('insumos')->where('lote_id', "=", $id)->first();
        $result3 = DB::table('producciones')->where('lote_id', "=", $id)->first();

        if($result1 == NULL && $result2 == NULL && $result3 == NULL){
            return false;
        }
        else{
            return true;
        }
    }
}
