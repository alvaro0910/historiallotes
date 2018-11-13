<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Excel;

class ImportProduccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function importView()
    {
        return view('adm.importproducciones');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function importFile(Request $request){
        if($request->hasFile('import_file')){
            $path = $request->file('import_file')->getRealPath();
            $data = \Excel::load($path)->get();

            if($data->count()){
                foreach ($data as $key => $value) {
                    $arr[] = ['cantidad' => $value->cantidad, 'periodo' => $value->fecha, 'lote_id' => $value->lote_id];
                }
                if(!empty($arr)){
                    DB::table('producciones')->insert($arr);
                    $notificacion = array(
                        'message' => 'Registros cargados con Exito!',
                        'alert-type' => 'success'
                    );
                    return redirect()->back()->with($notificacion);
                }
            }
            else{
                $notificacion = array(
                    'message' => 'Archivo sin registros para importar!',
                    'alert-type' => 'warning'
                );
                return redirect()->back()->with($notificacion);
            }
        }
        else{
            $notificacion = array(
                'message' => '¡Seleccione archivo a importar!',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notificacion);  
        }
    }
}
