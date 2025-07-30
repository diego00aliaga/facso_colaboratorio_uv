<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProyectosRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
			'id_orcid' => 'string',
			'titulo' => 'text',
			'titulo_traducido' => 'text',
			'descripcion' => 'text',
			'fecha_inicio' => 'string',
			'fecha_finalizacion' => 'string',
			'url_proyecto' => 'string',
			'tipo_financiamiento' => 'string',
			'subtipo_financiamiento' => 'string',
			'total_financiamiento' => 'interger',
			'agencia_financiamiento' => 'string',
			'numero_subvencion' => 'string',
			'url_concesion' => 'string',
			'relacion' => 'string',
			'put-code' => 'integer',
			'idioma' => 'string',
			'moneda' => 'string',
			'ir' => 'integer',
			'id_institucion_patrocinante' => 'integer'
        ];
    }
}
