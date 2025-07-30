<?php

namespace App\Http\Controllers;

use App\Models\Proyectos;
use App\Models\Investigadores;
use App\Http\Requests\ProyectosRequest;

class ProyectosController extends Controller{
	public function index()
    {
        $proyectos = Proyectos::paginate();
        
        return view('proyectos.index', compact('proyectos'))
            ->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());
	}
	
    public function show($id)
    {
        $proyecto = Proyectos::find($id);
        return view('proyectos.show', compact('proyectos'));
    }
	
	public function portada()
	{
		$proyectos = Proyectos::select(
				'proyectos.id',
				'proyectos.id_orcid',
				'proyectos.titulo',
				'proyectos.titulo_traducido',
				'proyectos.descripcion',
				'investigadores.funcionario')
			->leftjoin('investigadores','proyectos.id_orcid', '=', 'investigadores.id_orcid')
			->orderBy('proyectos.id','desc')
			->limit(4)
			->get();
		return $proyectos; 
	}
}
