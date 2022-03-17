<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jefe_de_carrera extends Model
{
    use HasFactory;

    protected $fillable = [
        'semestre'
    ];
}
