<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class docente extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_docente',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'rfc',
        'curp',
        'domicilio',
        'nss',
        'contraseña'
    ];

    protected $hidden = [
        'contraseña'
    ];
}
