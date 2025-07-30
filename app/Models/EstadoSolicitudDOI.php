<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoSolicitudDOI extends Model
{
    use HasFactory;

    protected $table = 'estado_solicitud_doi';

    protected $fillable = [
        'estado'
    ];

    public $timestamps = false;

}
