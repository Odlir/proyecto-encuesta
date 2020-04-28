<?php

namespace App\Jobs;

use App\Area;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class PDFConsolidados implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $persona;
    protected $puntajes;
    protected $empresa;
    protected $hour;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($persona, $puntajes, $empresa, $hour)
    {
        $this->persona = $persona;
        $this->puntajes = $puntajes;
        $this->empresa = $empresa;
        $this->hour = $hour;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $areas = Area::with('items.items')
            ->with('formulas')
            ->where('estado', '1')->get();

        $consolidados = \PDF::loadView('reporte_consolidados', array('areas' => $areas, 'persona' => $this->persona, 'puntajes' => $this->puntajes))->output();

        $name = 'PDF-' . $this->hour . '/' . $this->empresa . '/CONSOLIDADOS/' . $this->persona->nombres . '-' . $this->persona->apellido_paterno . '.pdf';
        \Storage::disk('public')->put($name,  $consolidados);
    }
}