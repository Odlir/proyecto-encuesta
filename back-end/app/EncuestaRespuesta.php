<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EncuestaRespuesta extends Model
{
    protected $table = "encuesta_respuesta";

    protected $fillable = [
        'estado',
        'pregunta_id',
        'subpregunta_id',
        'respuesta_id',
        'encuesta_puntaje_id',
    ];

    public function pregunta() {
        return $this->belongsTo(Pregunta::class);
    }


   public function respuesta() {
        return $this->belongsTo(Respuesta::class);
    }
}
