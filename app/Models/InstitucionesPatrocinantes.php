<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitucionesPatrocinantes extends Model
{
    use HasFactory;

    protected $table = 'instituciones_patrocinantes';

    protected $fillable = [
        'nombre_institucion',
    ];

    // public function proyectos_patrocinados()
    // {
    //
    //     return $this->hasMany(Proyectos::class, 'id_institucion_patrocinante', 'id');
    //     /**
    //     return $this->belongsToMany(Proyectos::class, 'instituciones_patrocinantes_proyectos', 'id_institucion', 'id_proyecto')
    //         ->as('instituciones_patrocinantes_proyectos')
    //         ->using(InstitucionesPatrocinantesProyectos::class);
    //     /**/
    // }
}
