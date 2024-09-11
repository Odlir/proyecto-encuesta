<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\MyTrait;

class Encuesta extends Model
{
    use MyTrait;

    protected $fillable = [
        'fecha_inicio',
        'fecha_fin',
        'estado',
        'empresa_sucursal_id',
        'tipo_encuesta_id',
        'insert_user_id',
        'edit_user_id',
        'encuesta_general_id'
    ];

    public function empresa()
    {
        return $this->belongsTo('App\EmpresaSucursal', 'empresa_sucursal_id');
    }

    public function tipo()
    {
        return $this->belongsTo('App\TipoEncuesta', 'tipo_encuesta_id');
    }

    public function insert()
    {
        return $this->belongsTo('App\User', 'insert_user_id');
    }

    public function edit()
    {
        return $this->belongsTo('App\User', 'edit_user_id');
    }

    public function general()
    {
        return $this->belongsTo('App\EncuestaGeneral', 'encuesta_general_id');
    }

/*    public function encuesta_persona()
    {
        return $this->hasMany('App\EncuestaPersona', 'encuesta_general_id');
    }*/

    public function encuesta_persona()
    {
        return $this->hasMany(EncuestaPersona::class, 'encuesta_general_id', 'encuesta_general_id')
            ->where('estado', 1);
    }

    public function encuesta_puntaje()
    {
        return $this->hasMany(EncuestaPuntaje::class, 'encuesta_id', 'id');
    }

}
