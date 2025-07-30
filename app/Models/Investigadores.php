<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investigadores extends Model
{
    use HasFactory;

    protected $table = 'investigadores';
	protected $perPage = 1000;
    protected $fillable = [
		'id_orcid',
		'email_orcid',
		'email_institucional',
		'ap_paterno',
		'ap_materno',
		'nombre',
		'funcionario',
		'foto',
		'video',
		'reparticion',
		'jerarquia',
		'grado',
		'institucion',
		'sexo',
		'asociatividad_1',
		'asociatividad_2',
		'asociatividad_3',
		'rol_1',
		'rol_2',
		'rol_3',
		'area_1',
		'area_2',
		'area_3',
		'autorizado'
	];
}
