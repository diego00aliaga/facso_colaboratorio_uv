<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ProyectosInvestigador extends Pivot
{
    use HasFactory;

    protected $table = 'proyectos_investigador';
}
