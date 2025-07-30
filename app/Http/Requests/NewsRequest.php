<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
			'correo'		=> 'string',
			'disciplinas'	=> 'string',
			'autores'		=> 'string',
			'terminos'		=> 'string'
        ];
    }
}
