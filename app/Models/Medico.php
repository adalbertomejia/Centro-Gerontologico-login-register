<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = 'medicos'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'nombre',
        'contrasena',
        // Datos para ingreso de medico
    ];
}
