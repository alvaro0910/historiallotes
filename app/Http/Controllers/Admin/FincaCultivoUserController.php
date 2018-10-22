<?php

namespace App\Http\Controllers\Admin;

use App\Finca;
use App\Cultivo;
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
        
        return view('adm.index', ['collectionfincas' => $fincas, 'collectioncultivos' => $cultivos]);
    }
}
