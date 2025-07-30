<?php

namespace App\Http\Controllers;

use App\Models\Documentos;
use App\Models\Investigadores;
use App\Models\Proyectos;
use App\Models\ProyectosInvestigador;
use App\Models\Publicaciones;
use App\Models\PublicacionesInvestigador;
use App\Models\PublicacionesVinculadasProyecto;
use App\Models\DocumentosVinculadosProyecto;
use App\Models\TiposDocumento;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class FichasController extends Controller
{
    public function ficha($id_vinculo)
    {
        $proyecto = Proyectos::select(
            "proyectos.*",
            //"investigadores.nombre as nombre_investigador",
            DB::raw("CONCAT(investigadores.nombre,' ',investigadores.ap_paterno) AS nombre_investigador"),
            "investigadores.id as id_investigador",
        )
            ->join("proyectos_investigador", "proyectos_investigador.id_proyecto", "=", "proyectos.id")
            ->join("investigadores", "investigadores.id", "=", "proyectos_investigador.id_investigador")
            ->where("proyectos.id", $id_vinculo)
            ->first();

        $publicaciones = PublicacionesInvestigador::select(
            "publicaciones.*",
        )
            ->join("publicaciones", "publicaciones.id", "=", "publicaciones_investigador.id_publicacion")
            ->join("publicaciones_vinculadas_proyecto", "publicaciones_vinculadas_proyecto.id_publicacion", "=", "publicaciones.id")
            ->where("publicaciones_investigador.id_investigador", $proyecto->id_investigador)
            ->where("publicaciones_vinculadas_proyecto.id_proyecto", $id_vinculo)
            ->get();

        $recursos = ProyectosInvestigador::select(
            "documentos.*",
        )
            ->join("documentos_vinculados_proyecto", "documentos_vinculados_proyecto.id_proyecto", "=", "proyectos_investigador.id_proyecto")
            ->join("documentos", "documentos.id", "=", "documentos_vinculados_proyecto.id_documento")
            ->where("proyectos_investigador.id_investigador", $proyecto->id_investigador)
            ->where("documentos_vinculados_proyecto.id_proyecto", $id_vinculo)
            ->get();

        return view('ficha.index',compact('proyecto','publicaciones','recursos'));
    }

    public function ficha_publicacion($id_vinculo)
    {
		$publicacion = Publicaciones::find($id_vinculo);
		if($publicacion == NULL){ abort('404'); }	
		
		$investigador = PublicacionesInvestigador::select(
			'publicaciones_investigador.id_investigador',
			'investigadores.funcionario'
			)
		->leftjoin('investigadores','investigadores.id','=','publicaciones_investigador.id_investigador')
		->where('publicaciones_investigador.id_publicacion','=',$id_vinculo)
		->get();
		$investigador=$investigador[0];
		
        return view('ficha.ficha_publicacion',compact('publicacion','investigador'));
    }
	
	public function ficha_proyecto($id)
	{
		$proyecto = Proyectos::select(
			'proyectos.id',
			'proyectos.id_orcid',
			'proyectos.titulo as titulo',
			'proyectos.titulo_traducido',
			'proyectos.descripcion',
			'proyectos.fecha_inicio',
			'proyectos.fecha_finalizacion',
			'proyectos.url_proyecto',
			'proyectos.tipo_financiamiento',
			'proyectos.subtipo_financiamiento',
			'proyectos.agencia_financiamiento',
			'proyectos.ir',			
			'investigadores.funcionario',
			'investigadores.id as id_inv',
			'investigadores.sexo',
			'instituciones_patrocinantes.nombre_institucion'
			)
		->join('investigadores','proyectos.id_orcid', '=', 'investigadores.id_orcid')
		->leftjoin('instituciones_patrocinantes','proyectos.id_institucion_patrocinante','=','instituciones_patrocinantes.id')
		->where('proyectos.id','=',$id)
		->get();
		
		if (count($proyecto) == 0) { abort('404'); }
		$proyect = $proyecto[0];
		
		$publicaciones = PublicacionesVinculadasProyecto::select(
			'publicaciones_vinculadas_proyecto.id_proyecto',
			'publicaciones_vinculadas_proyecto.id_publicacion',
			'publicaciones_investigador.id_investigador',
			'publicaciones.titulo',
			'publicaciones.fecha_publicacion',
			'investigadores.funcionario',
			'investigadores.id as id_investigador'
			)
		->leftjoin('publicaciones','publicaciones.id','=','publicaciones_vinculadas_proyecto.id_publicacion')
		->leftjoin('publicaciones_investigador','publicaciones_investigador.id_publicacion','=','publicaciones_vinculadas_proyecto.id_publicacion')
		->leftjoin('investigadores','publicaciones_investigador.id_investigador','=','investigadores.id')
		->where('publicaciones_vinculadas_proyecto.id_proyecto','=',$id)
		->get();
		
		$documentos = DocumentosVinculadosProyecto::select( 
			'documentos_vinculados_proyecto.id_proyecto',
			'documentos_vinculados_proyecto.id_documento',
			'documentos.titulo',
			'documentos.doi',
			'documentos.filename',
			'documentos.path',
			'documentos.anio_publicacion',
			'investigadores.funcionario',
			'investigadores.id as id_investigador'
			)
		->leftjoin('documentos','documentos.id','=','documentos_vinculados_proyecto.id_documento')
		->leftjoin('proyectos_investigador','proyectos_investigador.id_proyecto','=','documentos_vinculados_proyecto.id_proyecto')
		->leftjoin('investigadores','investigadores.id','=','proyectos_investigador.id_investigador')
		->where('documentos_vinculados_proyecto.id_proyecto','=',$id)
		->get();
		
		return view('ficha.ficha_proyecto',compact('proyect','publicaciones','documentos'));
	}

	public function ficha_recursos($id)
	{
		$documentos = Documentos::select( 
			'documentos_vinculados_proyecto.id_proyecto',
			'documentos_vinculados_proyecto.id_documento',
			'documentos.titulo',
			'documentos.tipo_documento',
			'documentos.doi',
			'documentos.filename',
			'documentos.path',
			'documentos.cita',
			'documentos.anio_publicacion',
			'investigadores.funcionario',
			'investigadores.id as id_investigador'
			)
		->leftjoin('documentos_vinculados_proyecto','documentos_vinculados_proyecto.id_documento','=','documentos.id')
		->leftjoin('proyectos_investigador','proyectos_investigador.id_proyecto','=','documentos_vinculados_proyecto.id_proyecto')
		->leftjoin('investigadores','investigadores.id','=','proyectos_investigador.id_investigador')
		->where('documentos_vinculados_proyecto.id_documento','=',$id)
		->get();
		$documentos=$documentos[0];
		if($documentos == NULL){ abort('404'); }

		$tipodoc = TiposDocumento::find($documentos->tipo_documento);
		$tipo = $tipodoc->tipo;
		return view('ficha.ficha_recursos',compact('documentos','tipo'));
	}

}
