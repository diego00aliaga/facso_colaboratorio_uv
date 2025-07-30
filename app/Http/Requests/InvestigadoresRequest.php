<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvestigadoresRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
			'id_orcid' => 'string',
			'email_orcid' => 'string',
			'email_institucional' => 'string',
			'ap_paterno' => 'string',
			'ap_materno' => 'string',
			'nombre' => 'string',
			'funcionario' => 'string',
			'foto' => 'string',
			'video' => 'string',			
			'reparticion' => 'string',
			'jerarquia' => 'string',
			'grado' => 'string',
			'institucion' => 'string',
			'sexo' => 'string',
			'asociatividad_1' => 'string',
			'asociatividad_2' => 'string',
			'asociatividad_3' => 'string',
			'rol_1' => 'string',
			'rol_2' => 'string',
			'rol_3' => 'string',
			'area_1' => 'string',
			'area_2' => 'string',
			'area_3' => 'string',
			'autorizado' => 'boolean'
        ];
    }
}
