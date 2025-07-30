<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class SolicitudDOIDocumento extends Pivot
{
    use HasFactory;

    protected $table = 'solicitud_doi_documento';
    protected $primaryKey = 'id_solicitud';

}
