<?php

namespace App\Http\Controllers;

use App\EmpresaSucursal;
use App\Encuesta;
use App\EncuestaPersona;
use App\EncuestaPuntaje;
use Carbon\Carbon;
use DB;
use stdClass;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getCards()
    {
        $totalRegistros = Encuesta::where('estado', '1')->count();


        $data = Encuesta::with('empresa')
            ->with('tipo')
            ->with('general')
            ->withCount('encuesta_persona')
            ->withCount('encuesta_puntaje')
            ->where('estado', '1')->get();

        $matchingSurveys = $data->filter(function ($encuesta) {
            return $encuesta->encuesta_persona_count == $encuesta->encuesta_puntaje_count;
        });

                $totalMatchingSurveys = $matchingSurveys->count();
                $completedSurveys = $totalRegistros > 0 ? ($totalMatchingSurveys * 100) / $totalRegistros : 0;


                $newSurveys = Encuesta::whereYear('created_at', Carbon::now()->year)
                    ->whereMonth('created_at', Carbon::now()->month)
                    ->where('estado', '1')
                    ->count();

               $carreras = $this->getCarrersPointss();

             $topCarrers = array_slice($carreras, 0, 3);
                $topCarrersConcatened = implode(', ', array_column($topCarrers, 'nombre'));


   return response()->json([
            'totalSurveys' => $totalRegistros,
            'completedSurveys' => round($completedSurveys, 2),
           'carrers' => $topCarrersConcatened,
            'newSurveys' => $newSurveys
        ], 200);



    }

    public function getCarrersPointss()
    {
    /* $carreras = [];

      $p_intereses = EncuestaPuntaje::
      with('punintereses.carrera')
          ->with('encuesta_persona')
          ->where('completada', 1)->get();


        $total_intereses = [];
        $puntajes_intereses = [];

        foreach ($p_intereses as $encuestaPuntaje) {
            // Agregar todos los punintereses de este EncuestaPuntaje al array total_intereses
            foreach ($encuestaPuntaje->punintereses as $puninteres) {
                $total_intereses[] = $puninteres;
            }
        }

        foreach ($total_intereses as $i) {
            $carrera_id = $i->carrera_id;
            $puntaje = $i->puntaje;
            if (!isset($carreras[$carrera_id])) {
                $carreras[$carrera_id] = [
                    'carrera_id' => $carrera_id,
                    'nombre' => $i['carrera']['nombre'],
                    'puntaje' => 0
                ];
            }


            $carreras[$carrera_id]['puntaje'] += $puntaje;
        }

        usort($carreras, function ($a, $b) {
            return $b['puntaje'] <=> $a['puntaje'];
        });*/

     $carreras = [];
        $year = Carbon::now()->year;
        $encuestasCompletadas = EncuestaPersona::whereNotNull('created_at')
            ->whereYear('created_at', $year)
            ->with('persona')
            ->with('respuestas.pregunta.carrera')
            ->with('respuestas.respuesta')

            ->where('completada', '1')->get();

        foreach ($encuestasCompletadas as $encuestaPersona) {
            foreach ($encuestaPersona->respuestas as $respuesta) {
                $carrera_id = $respuesta->pregunta->carrera->id ?? null;
                $carrera_nombre = $respuesta->pregunta->carrera->nombre ?? null;
                $puntaje = (int) ($respuesta->respuesta->puntaje ?? 0);

                // Buscar si la carrera ya existe dentro de la facultad
                if($carrera_id != ''){
                if (!isset($carreras[$carrera_id])) {
                    $carreras[$carrera_id] = [
                        'carrera_id' => $carrera_id,
                        'nombre' => $carrera_nombre,
                        'puntaje' => 0
                    ];
                }

                // Sumar el puntaje a la carrera correspondiente
                $carreras[$carrera_id]['puntaje'] += $puntaje;
                }
            }
        }

        usort($carreras, function ($a, $b) {
            return $b['puntaje'] <=> $a['puntaje'];
        });

        return array_values($carreras);


    }


    public function getPieCarrers()
    {
        $carreras = $this->getCarrersPointss();

        // Tomar las 4 primeras carreras
        $topCarrers = array_slice($carreras, 0, 4);

        // Calcular el puntaje total de todas las carreras
        $totalPoints = array_sum(array_column($carreras, 'puntaje'));

        // Calcular el puntaje de las demás carreras
        $otrosPoints = array_sum(array_column(array_slice($carreras, 4), 'puntaje'));

        if($topCarrers) {
            // Añadir 'Otros' al array
            $topCarrers[] = [
                'carrera_id' => null,
                'nombre' => 'Otros',
                'puntaje' => $otrosPoints
            ];
        }

        if($totalPoints) {
            // Convertir los puntajes a porcentaje
            foreach ($topCarrers as &$carrera) {
                $carrera['puntaje'] = round(($carrera['puntaje'] / $totalPoints) * 100, 2);
            }
        }

        // if($topCarrers) {
        //     // Asegurar que los porcentajes sumen exactamente 100
        //     $difference = 100 - array_sum(array_column($topCarrers, 'puntaje'));
        //     $topCarrers[0]['puntaje'] += $difference;
        // }

        return response()->json($topCarrers, 200);
    }

    public function getPieSchools()
    {
      /*  $schools = Encuesta::whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)
            ->where('tipo_encuesta_id', '1')
            ->with('empresa')
            ->with('encuesta_puntaje')
            ->withCount('encuesta_persona')
            ->get();*/

        /*
                //$p_intereses = EncuestaPuntaje::with('punintereses.carrera')->get();

                $studentsBySchool = $schools->groupBy('empresa.nombre')->map(function ($groupedSchools, $schoolName) {
                    $totalEncuestasPersona = $groupedSchools->sum('encuesta_persona_count');
                    return [
                        'schoolName' => $schoolName,
                        'quantity' => $totalEncuestasPersona
                    ];
                })->values()->toArray();*/

        $companiesCount  =  Encuesta::whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)
            ->where('tipo_encuesta_id', '1')
            ->where('estado', '1')
            ->groupBy('empresa_sucursal_id')
            ->count();


       // $totalEncuestasPersona = $schools->sum('encuesta_persona_count'); // Sumar todos los valores de 'encuesta_persona_count'

        $studentsBySchool = [[
            'schoolName' => 'Cantidad',
            'quantity' => $companiesCount // Total de la suma
        ]];

        return response()->json($studentsBySchool, 200);
    }

    public function getBarCreatedSurveys()
    {
        // año actual y el año anterior
        $currentYear = Carbon::now()->year;
        $lastYear = Carbon::now()->subYear()->year;

        // encuestas agrupadas por mes para el año actual y el anterior
        $surveys = DB::table('encuestas')
            ->select(
                DB::raw('YEAR(created_at) as year'),
                DB::raw('MONTH(created_at) as month'),
                DB::raw('COUNT(*) as count')
            )
            ->where('estado', 1)
            ->whereIn(DB::raw('YEAR(created_at)'), [$currentYear, $lastYear])
            ->groupBy(DB::raw('YEAR(created_at)'), DB::raw('MONTH(created_at)'))
            ->orderBy(DB::raw('MONTH(created_at)'))
            ->get();

        // Inicializar el array de resultados con 12 meses
        $comparativeSurveys = array_fill(0, 12, ['lastYear' => 0, 'currentYear' => 0]);

        // Rellenar el array con los datos obtenidos
        foreach ($surveys as $survey) {
            $index = $survey->month - 1; // Índice basado en el mes (0 para enero, 11 para diciembre)

            if ($survey->year == $lastYear) {
                $comparativeSurveys[$index]['lastYear'] = $survey->count;
            } elseif ($survey->year == $currentYear) {
                $comparativeSurveys[$index]['currentYear'] = $survey->count;
            }
        }

        return response()->json($comparativeSurveys, 200);
    }

    public function getBarCompletedSurveys()
    {

        $currentYear = Carbon::now()->year;
        $lastYear = $currentYear - 1;

        $results = [
            'resueltas' => [
                'anioAnterior' => $this->getSurveysStatus($lastYear, true),
                'anioActual' => $this->getSurveysStatus($currentYear, true),
            ],
            'noResueltas' => [
                'anioAnterior' => $this->getSurveysStatus($lastYear, false),
                'anioActual' => $this->getSurveysStatus($currentYear, false),
            ]
        ];

        return response()->json([
            [
                'data' => $results['resueltas']['anioAnterior'],
                'label' => 'Anio anterior: resueltas',
                'stack' => 'a'
            ],
            [
                'data' => $results['noResueltas']['anioAnterior'],
                'label' => 'Anio anterior: no resueltas',
                'stack' => 'a'
            ],
            [
                'data' => $results['resueltas']['anioActual'],
                'label' => 'Anio actual: resueltas',
                'stack' => 'b'
            ],
            [
                'data' => $results['noResueltas']['anioActual'],
                'label' => 'Anio actual: no resueltas',
                'stack' => 'b'
            ],
        ], 200);
    }

    private function getSurveysStatus($year, $completed)
    {

        $surveys = EncuestaPersona::select(
            DB::raw('MONTH(IFNULL(fecha_completada, created_at)) as mes'),
            DB::raw('COUNT(*) as total')
        )
            ->when($completed, function ($query) use ($year) {
                $query->whereYear('fecha_completada', $year)
                    ->whereNotNull('fecha_completada');
            }, function ($query) use ($year) {
                $query->whereYear('created_at', $year)
                    ->whereNull('fecha_completada');
            })
            ->groupBy('mes')
            ->orderBy('mes')
            ->pluck('total', 'mes')
            ->toArray();

        $result = array_fill(0, 12, 0);
        foreach ($surveys as $mes => $total) {
            $result[$mes - 1] = $total;
        }

        return array_values($result);
    }
}
