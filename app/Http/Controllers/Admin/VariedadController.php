<?php

namespace App\Http\Controllers\Admin;

use App\Variedad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\VariedadRequest;
use DB;

class VariedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $variedades = DB::table('variedades')->get();
        return view('adm.variedad.index', ['collection' => $variedades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.variedad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VariedadRequest $request)
    {
        $existe = Variedad::where(['variedad' => $request->variedad])->count();
        
        if ($existe > 0) {
            $notificacion = array(
                'message' => '¡La variedad ya éxiste!',
                'alert-type' => 'warning'
            );
            return redirect()->back()->with($notificacion);
        } else {
            $variedad = new Variedad($request->all());
            $variedad->save();
    
            $notificacion = array(
                'message' => 'Variedad Agregada Con Exito.',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notificacion);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Variedad  $variedad
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $variedad = Variedad::where('id', $id)->findOrFail($id);
        return view('adm.variedad.show')->withData($variedad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Variedad  $variedad
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $variedad = Variedad::where('id', $id)->findOrFail($id);
        return view('adm.variedad.edit', ['data' => $variedad]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Variedad  $variedad
     * @return \Illuminate\Http\Response
     */
    public function update(VariedadRequest $request, $id)
    {
        $existe = Variedad::where(['variedad' => $request->variedad])->count();
        
        if ($existe > 0) {
            $notificacion = array(
                'message' => '¡La variedad ya éxiste!',
                'alert-type' => 'warning'
            );
            return redirect()->back()->with($notificacion);
        } else {
            $variedad = Variedad::where('id', $id)->findOrFail($id);
            $input = $request->all();
            $variedad->update($input);

            $notificacion = array(
                'message' => 'Variedad actualizada con éxito!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notificacion);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Variedad  $variedad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $existe = Self::existeRelacion($id);
        
        if ($existe) {
            $notificacion = array(
                'message' => '¡No se puede eliminar la variedad, está asociada a un lote!',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notificacion);
        }
        else{
            $variedad = Variedad::where('id', $id)->findOrFail($id);
            $variedad->delete();

            $notificacion = array(
                'message' => '¡Variedad eliminada con éxito!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notificacion);
        }   
    }

    public function existeRelacion($id){
        $result = DB::table('lotes')->where('variedad_id', "=", $id)->first();

        if($result == NULL){
            return false;
        }
        else{
            return true;
        }
    }
}
