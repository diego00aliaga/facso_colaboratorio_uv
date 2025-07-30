<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResearcherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'id_orcid' => 'string',
			'ap_paterno' => 'string',
			'ap_materno' => 'string',
			'nombres' => 'string',
			'funcionario' => 'string',
			'email' => 'string',
			'reparticion' => 'string',
			'grado' => 'string',
			'institucion' => 'string',
			'foto' => 'string',
			'video' => 'string',
			'asociatividad_1' => 'string',
			'rol_1' => 'string',
			'asociatividad_2' => 'string',
			'rol_2' => 'string',
			'asociatividad_3' => 'string',
			'rol_3' => 'string',
			'area_1' => 'string',
			'area_2' => 'string',
			'area_3' => 'string',
        ];
    }
}
