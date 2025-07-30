<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PublicacionesInvestigador extends Pivot
{
    use HasFactory;

    protected $table = 'publicaciones_investigador';
}
