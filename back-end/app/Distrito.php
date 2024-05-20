<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    protected $keyType = 'string';

    public function provincia()
    {
        return $this->belongsTo(Provincia::class);
    }
}
