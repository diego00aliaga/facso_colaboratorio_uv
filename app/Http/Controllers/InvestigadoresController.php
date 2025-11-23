<?php

namespace App\Http\Controllers;

use App\Models\Investigadores;
use App\Models\Proyectos;

class InvestigadoresController extends Controller
{
    public function index()
    {
        $investigador = Investigadores::orderBy('ap_paterno','ASC')->paginate();

        return view('investigadores.index', compact('investigador'))
            ->with('i', (request()->input('page', 1) - 1) * $investigador->perPage());
    }
	public function listado(){
		$listado = Investigadores::select(
			'investigadores.funcionario',
			)
		->where('investigadores.autorizado','=',1)
		->where('investigadores.foto','!=','')
		->orderBy('ap_paterno','asc')
		->get();
		
		return response()->json($listado);
	}
	
	/*
    public function create()
    {
        $investigador = new Investigadores();
        return view('investigador.create', compact('investigador'));
    }

    public function store(InvestigadoresRequest $request)
    {
        Investigador::create($request->validated());

        return redirect()->route('investigador.index')
            ->with('success', 'Investigador creado satisfactoriamente.');
    }
	*/
    public function show($id)
    {
		$investigador = Investigadores::find($id);

		$proyectos = Proyectos::select(
			'proyectos.id',
			'proyectos.titulo',
			'proyectos.fecha_inicio',
			'proyectos.fecha_finalizacion'
			)
		->join('facso_app.proyectos_investigador','proyectos_investigador.id_proyecto','=','proyectos.id')
		->where('proyectos_investigador.id_investigador','=',$id)
		->orderBy('proyectos.id','desc')
		->paginate(5);

        // CÓDIGO CORREGIDO
        $publicaciones = \App\Models\Publicaciones::select( // <-- 1. Empezar con el modelo Publicacion
            'publicaciones.id as id_publicacion',
            'publicaciones.titulo',
            'publicaciones.fecha_publicacion' // <-- 2. Usar las columnas correctas de la tabla
            )
        ->join('facso_app.publicaciones_investigador', 'publicaciones_investigador.id_publicacion', '=', 'publicaciones.id') // <-- 3. Unir con la tabla intermedia
        ->where('publicaciones_investigador.id_investigador', '=', $id) // <-- 4. Filtrar por el ID en la tabla intermedia
        ->orderBy('publicaciones.id', 'desc')
        ->get(); // <-- 5. Usa get() para que funcione con tu json_encode

        $proyectos2 = Proyectos::select(
            'proyectos.id',
            'proyectos.titulo',
            'proyectos.fecha_inicio',
            'proyectos.fecha_finalizacion'
        )
            ->join('facso_app.proyectos_investigador','proyectos_investigador.id_proyecto','=','proyectos.id')
            ->where('proyectos_investigador.id_investigador','=',$id)
            ->orderBy('proyectos.id','desc')
            ->get();

        $pro_final = json_encode($proyectos2);
        $pub_final = json_encode($publicaciones);
        
        // Contadores para determinar si mostrar los acordeones
        $tiene_proyectos = count($proyectos2) > 0;
        $tiene_publicaciones = count($publicaciones) > 0;
        
		$nucleos = Investigadores::select(
			'investigadores.asociatividad_1',
			'n1.nombre as nombre_1',
			'n1.link as link_1',
			'investigadores.asociatividad_2',
			'n2.nombre as nombre_2',
			'n2.link as link_2',
			'investigadores.asociatividad_3',
			'n3.nombre as nombre_3',
			'n3.link as link_3'
			)
		->leftjoin('nucleos as n1','n1.id','=','investigadores.asociatividad_1')
		->leftjoin('nucleos as n2','n2.id','=','investigadores.asociatividad_2')
		->leftjoin('nucleos as n3','n3.id','=','investigadores.asociatividad_3')
		->where('investigadores.id','=',$id)
		->get();
		$nucleos=$nucleos[0];

        return view('investigadores.show', compact('investigador','proyectos','nucleos','pro_final','pub_final','tiene_proyectos','tiene_publicaciones'))
		->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());
    }
	/*
    public function edit($id)
    {
        $investigador = Investigadores::find($id);

        return view('investigador.edit', compact('investigador'));
    }

    public function update(InvestigadoresRequest $request, Investigador $investigador)
    {
        $investigador->update($request->validated());


        return redirect()->route('investigador.index')
            ->with('success', 'Investigador actualizado satisfactoriamente');
    }

    public function destroy($id)
    {
        Investigador::find($id)->delete();

        return redirect()->route('investigador.index')
            ->with('success', 'Investigador eliminado satisfactoriamente');
    }
*/
}
