<?php

namespace App\Imports;

use App\Persona;
use App\EncuestaPersona;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;

class PersonaImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    private $user;
    private $encuesta_id;

    public function __construct($user_id,$encuesta_id) {
        $this->user = $user_id;
        $this->encuesta_id = $encuesta_id;
     }

    public function collection(Collection $rows)
    {
        $messages = [];

        $i = 2;
        foreach ($rows as $key => $value){

            $messages[$key.'.nombres'.'.required'] = 'El campo nombres, fila '. $i .'  es requerido.';
            $messages[$key.'.apellido_paterno'.'.required'] = 'El campo apellido_paterno, fila '. $i .'  es requerido.';
            $messages[$key.'.sexo'.'.required'] = 'El campo sexo, fila '. $i .'  es requerido.';
            $messages[$key.'.correo'.'.email'] = 'El campo correo, fila '. $i .'  tiene un formato invalido.';

            $i++;
        }

        Validator::make($rows->toArray(), [
            '*.nombres' => 'required',
            '*.apellido_paterno' => 'required',
            '*.sexo' => 'required',
            '*.correo' => 'email'
        ],$messages)->validate();

        foreach ($rows as $row)
        {
            $persona= Persona::create([
                'nombres'     => $row['nombres'],
                'apellido_paterno'    => $row['apellido_paterno'],
                'apellido_materno' => $row['apellido_materno'],
                'sexo' => $row['sexo'],
                'email' => $row['correo'],
                'rol_id' => 2,
                'insert_user_id' => $this->user
            ]);

            EncuestaPersona::create([
                'persona_id'     => $persona->id,
                'encuesta_id'    => $this->encuesta_id,
                'insert_user_id' => $this->user
            ]);
        }
    }
}
