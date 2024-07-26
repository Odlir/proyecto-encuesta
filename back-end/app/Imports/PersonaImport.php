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
    // private $todas;

    public function __construct($user_id, $encuesta_id)
    {
        $this->user = $user_id;
        $this->encuesta_id = $encuesta_id;
        // $this->todas = $todas;
    }

    public function collection(Collection $rows)
    {
        $messages = [];

        if (count($rows) > 40) {
            $error = \Illuminate\Validation\ValidationException::withMessages([
                'personas' => ['El límite de importación son 40 alumnos.'],
            ]);
            throw $error;
        }

        $i = 2;
        foreach ($rows as $key => $value) {

            $messages[$key . '.nombres' . '.required'] = 'El campo Nombres, fila ' . $i . '  es requerido.';
            $messages[$key . '.apellido_paterno' . '.required'] = 'El campo Apellido Paterno, fila ' . $i . '  es requerido.';
            $messages[$key . '.sexo' . '.required'] = 'El campo Sexo, fila ' . $i . '  es requerido.';
            $messages[$key . '.sexo' . '.in'] = 'El campo Sexo, fila ' . $i . '  debe ser Masculino o Femenino.';
            $messages[$key . '.seccion' . '.alpha_num'] = 'El campo Año, fila ' . $i . '  solo permite numeros y letras.';
            $i++;
        }

        Validator::make($rows->toArray(), [
            '*.nombres' => 'required',
            '*.apellido_paterno' => 'required',
            '*.sexo' => 'required|in:Masculino,Femenino,masculino,femenino,MASCULINO,FEMENINO',
            '*.seccion' => 'alpha_num|nullable',
            '*.dni' => 'digits:8|nullable'
        ], $messages)->validate();

        foreach ($rows as $row) {
            $persona = Persona::create([
                'nombres' => $row['nombres'],
                'apellido_paterno' => $row['apellido_paterno'],
                'apellido_materno' => $row['apellido_materno'],
                'sexo' => $row['sexo'],
                'anio' => $row['seccion'],
                'rol_id' => 2,
                'insert_user_id' => $this->user,
                'correo' => $row['correo'],
                'dni' => $row['dni'],
                'celular' => $row['celular'],
            ]);

            EncuestaPersona::create([
                'persona_id' => $persona->id,
                'encuesta_general_id' => $this->encuesta_id,
                'insert_user_id' => $this->user
            ]);
        }
    }
}
