<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\MyTrait;

class Empresa extends Model
{
    use MyTrait;

    protected $fillable = [
        'razon_social',
        'contacto',
        'email',
        'telefono',
        'ubigeo',
        'sede',
        'codigo',
        'nivel',
        'gestion',
        'gestion_departamento',
        'insert_user_id',
        'edit_user_id'
    ];

    protected $appends = ['ubigeo_completo'];


    public static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            $model->razon_social = $model->sinTilde('razon_social', $model->razon_social);
            $model->contacto = $model->sinTilde('contacto', $model->contacto);
            $model->razon_social = $model->setUpperCase('razon_social', $model->razon_social);
            $model->contacto = $model->setUpperCase('contacto', $model->contacto);
        });
    }

    public function getUbigeoCompletoAttribute()
    {
        if ($this->distrito) {
            return $this->distrito->nombre . " - " . $this->distrito->provincia->nombre . " - " . $this->distrito->provincia->departamento->nombre;
        }
        return '';
    }

    public function distrito()
    {
        return $this->belongsTo('App\Distrito', 'ubigeo', 'id');
    }

    public function sucursales()
    {
        return $this->hasMany('App\EmpresaSucursal');
    }

    public function insert()
    {
        return $this->belongsTo('App\User', 'insert_user_id');
    }

    public function edit()
    {
        return $this->belongsTo('App\User', 'edit_user_id');
    }
}
