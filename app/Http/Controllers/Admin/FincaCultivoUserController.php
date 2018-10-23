<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class FincaCultivoUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fincas = DB::table('fincas')->get();
        $cultivos = DB::table('cultivos')->get();
        //$fincacultivo = DB::table('cultivo_finca')->get();
        $fincauser = DB::table('finca_user')->get();

        $fincacultivo = DB::select(
            'SELECT fincas.nombre, cultivos.cultivo, cultivo_finca.id
            FROM fincas
            INNER JOIN cultivos, cultivo_finca;');

        return view('adm.index', ['collectionfincas' => $fincas, 'collectioncultivos' => $cultivos, 'collectionfincacultivo' => $fincacultivo, 'collectionfincauser' => $fincauser]);
    }
}
