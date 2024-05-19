<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Distrito;
use App\Provincia;
use Illuminate\Http\Request;

class UbigeoController extends Controller
{
    function getDepartamentos()
    {
        $data = Departamento::all();

        return response()->json($data, 200);
    }

    function getProvinciaByDepartamentoId($id)
    {
        $data = Provincia::where('departamento_id', $id)
        ->get();

        return response()->json($data, 200);
    }

    function getDistritoByProvinciaId($id)
    {
        $data = Distrito::where('provincia_id', $id)
        ->get();

        return response()->json($data, 200);
    }
}
