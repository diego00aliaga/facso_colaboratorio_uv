<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProyectosFACSOController extends Controller
{
    public function index()
    {
        // Definimos los datos manualmente (estáticos)
        $proyectosfacso = [
            [
                'titulo' => 'Investigación Social 2024',
                'descripcion' => 'Estudio sobre el impacto de la tecnología.',
                'link' => '#'
            ],
            [
                'titulo' => 'Proyecto de Inclusión',
                'descripcion' => 'Análisis de políticas públicas en la región.',
                'link' => '#'
            ],
        ];

        // Ahora compact ya tiene la variable definida
        return view('proyectosFACSO.index', compact('proyectosfacso'));
    }
}