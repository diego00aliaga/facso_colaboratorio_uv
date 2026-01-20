<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyectosFACSO extends Model
{
    use HasFactory;

    protected $table = 'proyectos_facso';
    protected $fillable = [
		'nombre',
	];
}
