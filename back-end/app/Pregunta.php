<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }
}
