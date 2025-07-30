<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NucleosRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
			'nombre'			=> 'string',
			'coordinador'		=> 'text',
			'id_investigador'	=> 'text',
			'tipo'				=> 'bigIncrements',
			'area'				=> 'string',
			'link'				=> 'string',
			'correo'			=> 'string',
			'estado'			=> 'boolean'
        ];
    }
}
