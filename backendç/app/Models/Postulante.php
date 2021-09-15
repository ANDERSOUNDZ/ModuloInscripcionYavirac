<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profesor;

class Postulante extends Model
{
    use HasFactory;

    protected $fillable = [
        'CEDULA',
        'APELLIDOS',
        'NOMBRES',
        'POS_NOTA',
        'USU_FECHA_NAC'=>'datetime:d/m/Y',
        'USU_NACIONALIDAD',
        'GENERO',
        'PROVINCIA_RESIDE',
        'CANTON_RESIDE',
        'PARROQUIA_RESIDE',
        'EMAIL',
        'INS_TELEFONO',
        'INS_CELULAR',
        'ETNIA',
        'DISCAPACIDAD',
        'INSTANCIA_POSTULACION',
        'INSTANCIA_ASIGNACION',
        'GRATUIDAD',
        'TIPO_INSTITUCION',
        'TIPO_FINANCIAMIENTO',

        'NUEVO_CORREO',
        'NUEVO_TELF_CONTACTO',
        'FECHA_CONTACTO',
        'RESPONSABLES',
        'OBSERVACIONES'
    ];

    public function profesor()
    {
        return $this->hasOne(Profesor::class);
        // OR return $this->hasOne('App\Phone');
    }
}
