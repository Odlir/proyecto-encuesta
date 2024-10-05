<?php

namespace App\Http\Controllers;

use App\EmpresaSucursal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Encuesta;
use App\EncuestaGeneral;
use App\TipoEncuesta;
use App\Exports\AnualReport;
use App\Exports\LinkExport;
use App\Exports\StatusExport;
use Maatwebsite\Excel\Facades\Excel;

class EncuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $paginate = $request->input('paginate');

        $offset = $request->input('offset') * $paginate;

        $searchValue = $request->input('search');

        $data = Encuesta::with('empresa')
            ->with('tipo')
            ->with('general')
            ->withCount('encuesta_persona')
            ->withCount('encuesta_puntaje')
            ->where('estado', '1')
            ->where(function ($query) use ($searchValue) {
                $query->where("id", "LIKE", "%$searchValue%")
                    ->orwhereHas('empresa', function ($q) use ($searchValue) {
                        $q->where("nombre", "LIKE", "%$searchValue%");
                    })
                    ->orWhereHas('tipo', function ($query) use ($searchValue) {
                        $query->where("nombre", "LIKE", "%$searchValue%");
                    });
            });

        if (!$paginate) {
            $data = $data->count();
        } else {
            $data = $data
                ->skip($offset)
                ->take($paginate)
                ->orderBy('id', 'DESC')->get();
        }

        return response()->json($data, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $general = EncuestaGeneral::create($data);

        $data['encuesta_general_id'] = $general->id;

        if ($request->todas) {
            $tipos = TipoEncuesta::where('estado', '1')
                ->orderBy('id', 'DESC')
                ->get();

            unset($data['tipo_encuesta_id']);

            foreach ($tipos as $t) {

                $data['tipo_encuesta_id'] = $t->id;

                $registro = Encuesta::create($data);
            }
        } else {

            $registro = Encuesta::create($data);
        }

        return response()->json($registro, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Encuesta::with('insert')
            ->with('edit')
            ->with('empresa')
            ->withCount('encuesta_persona')
            ->withCount('encuesta_puntaje')
            ->with(['general' => function ($query) {
                $query->with(['personas' => function ($query) {
                    $query->wherePivot('estado', '1');
                }]);
            }])
            ->with('tipo')
            ->where('id', $id)
            ->first();

        return response()->json($data, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $registro = Encuesta::find($id);
        $registro->update($data);
        $registro->save();

        $general = EncuestaGeneral::find($registro['encuesta_general_id']);
        $general->update($data);
        $general->save();

        return response()->json($registro, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registro = Encuesta::find($id);
        $registro->estado = '0';
        $registro->save();

        return response()->json($registro, 200);
    }

    public function getStatusSchoolsByEmpresaId($id, $searchValue = '', $fecha_inicio,$fecha_final)
    {

        if ($fecha_inicio) {
         /*   $startOfMonth = Carbon::parse($fecha_inicio . '-01')->startOfMonth();
            $endOfMonth = Carbon::parse($fecha_inicio . '-01')->endOfMonth();*/

            $sucursales = Encuesta::
            where('tipo_encuesta_id', '1')
                ->with('empresa')
                ->where('estado', '1')
                ->whereBetween('created_at', [$fecha_inicio, $fecha_final])
                ->withCount('encuesta_puntaje')
                ->withCount('encuesta_persona');
        }else{
            $sucursales = Encuesta::
            where('tipo_encuesta_id', '1')
                ->with('empresa')
                ->where('estado', '1')
                ->withCount('encuesta_puntaje')
                ->withCount('encuesta_persona');
        }



        if ($id != 'all') {
            $sucursales = $sucursales->where('empresa_sucursal_id', $id); // Filtrar por ID de la empresa
        }elseif($searchValue != '') {
                $sucursales = $sucursales->whereHas('empresa', function ($query) use ($searchValue) {
                    $query->where('nombre', 'LIKE', "%$searchValue%"); // Filtrar por nombre de la empresa
                });
            }


        $sucursales = $sucursales->get();

        $studentsBySchool = $sucursales->groupBy('empresa.nombre')->map(function ($groupedSchools, $schoolName) {
            $totalEncuestasPersona = $groupedSchools->sum('encuesta_persona_count');
            $totalEncuestasPersonaRespondidas = $groupedSchools->sum('encuesta_puntaje_count');
            if ($groupedSchools->isNotEmpty()) {
                // Obtener el primer elemento y acceder a la relación empresa
                $firstSchool = $groupedSchools->first();
                $empresaId = $firstSchool->empresa ? $firstSchool->empresa->empresa_id : null; // Comprobar si empresa existe
            } else {
                $empresaId = null; // Si no hay escuelas, asignar null
            }
            $noRespondio =  $totalEncuestasPersona - $totalEncuestasPersonaRespondidas;

            return [
                'id' => $empresaId,
                'colegio' => $schoolName,
                'respondio' => $totalEncuestasPersonaRespondidas,
                'noRespondio' => $noRespondio,
                'total' =>$totalEncuestasPersona
            ];

        })->values()->toArray();




        return $studentsBySchool;
    }

    public function getAnualReportExcelByEmpresaId(Request $request)
    {
        return Excel::download(new AnualReport($this->getStatusSchoolsByEmpresaId($request['empresa_id'], $request->input('searchValue'), $request->input('fecha_inicio'), $request->input('fecha_final'))), 'colegios.xlsx');
    }

    public function getStatusSchools(Request $request)
    {
        return response()->json($this->getStatusSchoolsByEmpresaId($request->input('empresa_id'), $request->input('searchValue'), $request->input('fecha_inicio'), $request->input('fecha_final') ), 200);
    }

    public function getExcelStatusByEncuestaId(Request $request)
    {
        $encuesta = $this->getEncuestaWithPersonas($request['encuesta_id']);

        if ($encuesta['personas']->isEmpty()) {
            return response()->json(['error' => 'No hay alumnos registrados'], 400);
        }


        return Excel::download(new StatusExport($encuesta['personas']), 'encuesta.xlsx');
    }

    public function getEncuestaWithPersonas($id)
    {
        return Encuesta::where('id', $id)
            ->with([
                'personas' => function ($query) {
                    $query->wherePivot('estado', '1');
                }
            ])
            ->first();
    }
}
