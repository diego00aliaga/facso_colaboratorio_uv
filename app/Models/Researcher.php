<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Researcher
 *
 * @property $id
 * @property $id_orcid
 * @property $ap_paterno
 * @property $ap_materno
 * @property $nombres
 * @property $funcionario
 * @property $email
 * @property $sexo
 * @property $reparticion
 * @property $grado
 * @property $institucion
 * @property $foto
 * @property $video
 * @property $asociatividad_1
 * @property $rol_1
 * @property $asociatividad_2
 * @property $rol_2
 * @property $asociatividad_3
 * @property $rol_3
 * @property $area_1
 * @property $area_2
 * @property $area_3
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Researcher extends Model
{
    

    protected $perPage = 1000;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_orcid', 'ap_paterno', 'ap_materno', 'nombres', 'funcionario', 'email', 'sexo', 'reparticion', 'grado', 'institucion', 'foto', 'video', 'asociatividad_1', 'rol_1', 'asociatividad_2', 'rol_2', 'asociatividad_3', 'rol_3', 'area_1', 'area_2', 'area_3', 'estado'];



}
