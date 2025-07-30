<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PublicacionesVinculadasProyecto extends Pivot
{
    use HasFactory;
    protected $table = 'publicaciones_vinculadas_proyecto';
	protected $fillable = [
        'id_proyecto',
        'id_publicacion',
        'fecha_vinculacion',
    ];
    public $timestamps = false;
}
