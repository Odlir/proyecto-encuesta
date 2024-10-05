<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\MyTrait;

class EncuestaPersonaCompletada extends Model
{
    protected $table = "encuesta_persona_completada";

    use MyTrait;

    protected $fillable = [
        'estado',
        'persona_id',
        'empresa_id',
        'encuesta_id'
    ];

    public function persona()
    {
        return $this->belongsTo('App\Persona');
    }

    public function puntajes()
    {
        return $this->hasMany(EncuestaPuntaje::class, 'persona_id', 'persona_id');
    }

    public function respuestas()
    {
        return $this->hasManyThrough(
            EncuestaRespuesta::class,
            EncuestaPuntaje::class,
            'persona_id',
            'encuesta_puntaje_id',
            'persona_id',
            'id'
        );
    }

    public function encuesta() {
        return $this->belongsTo('App\Encuesta');
    }

}
