<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class InstitucionesPatrocinantesProyectos extends Pivot
{
    use HasFactory;
    protected $table = 'instituciones_patrocinantes_proyectos';
}
