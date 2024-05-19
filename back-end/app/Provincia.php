<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $keyType = 'string';

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
}
