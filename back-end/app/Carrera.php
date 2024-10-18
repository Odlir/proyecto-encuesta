<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    public function intereses()
    {
        return $this->hasMany('App\CarreraInteres');
    }
    public function facultad()
    {
        return $this->belongsTo(Facultad::class);
    }

    public function preguntas()
    {
        return $this->hasMany(Pregunta::class);
    }

    public function trabajos()
    {
        return $this->hasMany(CarreraTrabajo::class);
    }

}
