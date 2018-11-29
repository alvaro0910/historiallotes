<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Finca;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\FincaRequest;

class FincaController extends Controller
{
    public function index()
    {
        //return Finca::all();
        $arreglo = Finca::all();
        return \Response::json(['fincas' => $arreglo, 'status' => '200'], 200);
    }

    public function show(Finca $finca)
    {
        return response()->json($finca, 200);
        //return $finca;
    }

    public function store(FincaRequest $request)
    {
        $finca = new Finca($request->all());
        $finca->save();
        return response()->json($finca, 201);
    }

    public function update(FincaRequest $request, Finca $finca)
    {
        $finca->update($request->all());
        return response()->json($finca, 200);
    }

    public function delete(Finca $finca)
    {
        $finca->delete();
        return response()->json(null, 204);
    }
}