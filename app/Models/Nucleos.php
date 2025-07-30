<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nucleos extends Model
{
    use HasFactory;

    protected $table = 'nucleos';
    protected $fillable = [
		'nombre',
		'coordinador',
		'id_investigador',
		'tipo',
		'area',
		'link',
		'correo',
		'estado'
	];
}
