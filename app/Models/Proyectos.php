<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    use HasFactory;


    protected $table = 'proyectos';
    protected $fillable = [
        'id_orcid',
        'titulo',
        'titulo_traducido',
        'descripcion',
        'fecha_inicio',
        'fecha_finalizacion',
        'url_proyecto',
        'tipo_financiamiento',
        'subtipo_financiamiento',
        'total_financiamiento',
        'agencia_financiamiento',
        'numero_subvencion',
        'url_concesion',
        'relacion',
        'put-code',
        'idioma',
        'moneda',
        'ir',
        'id_institucion_patrocinante'
    ];

    protected $hidden = [
        'id_orcid'
    ];
}
