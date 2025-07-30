<?php

namespace App\Http\Controllers;


use App\Models\Investigadores;
use App\Models\Proyectos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class ResultadosController extends Controller
{
    private array $diccionario = array('y','el','la','las','los','un','una','unos','unas','o');
    public function resultados(Request $request)
    {
        $campo = $request->get('campo');
        $todos = $request->get('todos') ?? 0;
        $investigadores  = $request->get('investigadores') ?? 0;
        $proyectos  = $request->get('proyectos') ?? 0;
        $publicaciones  = $request->get('publicaciones') ?? 0;
        $recursos  = $request->get('recursos') ?? 0;

        $texto = explode( ' ', strtolower($campo));
        $texto = array_diff($texto, $this->diccionario);
        $merged = new \Illuminate\Database\Eloquent\Collection;
        $busquedaProyectos = new \Illuminate\Database\Eloquent\Collection;
        $busquedaInvestigadores = new \Illuminate\Database\Eloquent\Collection;
        $busquedaPublicaciones = new \Illuminate\Database\Eloquent\Collection;
        $busquedaRecursos = new \Illuminate\Database\Eloquent\Collection;
        if (!empty($texto)){
            if ($proyectos == 1){
                $busquedaProyectos = Investigadores::select(
                    "investigadores.funcionario as nombre",
                    'proyectos.titulo as titulo',
                    'proyectos.fecha_inicio as fecha',
                    'proyectos.descripcion as descripcion',
                    DB::raw("CONCAT('2') AS tipo"),
                    DB::raw("CONCAT('') AS palabra_clave"),
                    'proyectos.id as id_vinculo',
                    DB::raw("CONCAT(10) AS relevancia"),
                    "investigadores.id as id_investigador",
                    DB::raw("CONCAT(0) AS asociatividad_1"),
                    DB::raw("CONCAT(0) AS asociatividad_2"),
                    DB::raw("CONCAT(0) AS asociatividad_3"),
                    DB::raw("CONCAT(0) AS rol_1"),
                    DB::raw("CONCAT(0) AS rol_2"),
                    DB::raw("CONCAT(0) AS rol_3"),
                    DB::raw("CONCAT(0) AS area_1"),
                    DB::raw("CONCAT(0) AS area_2"),
                    DB::raw("CONCAT(0) AS area_3"),
                    DB::raw("CONCAT('') AS IPtitulo"),
                    DB::raw("CONCAT('') AS IPdescripcion")
                )
                    ->join("proyectos_investigador", "proyectos_investigador.id_investigador", "=", "investigadores.id")
                    ->join("proyectos", "proyectos.id", "=", "proyectos_investigador.id_proyecto")
                    ->where('investigadores.autorizado',1)
                    ->Where(function($query) use ($texto){
                        foreach($texto as $t) {
                            $query->orWhere('proyectos.titulo', 'LIKE', '%' . $t . '%');
                            $query->orWhere('proyectos.descripcion', 'LIKE', '%' . $t . '%');
                            $query->orWhere('investigadores.nombre', 'LIKE', '%' . $t . '%');
                        }
                    })
                    ->orderby('investigadores.ap_paterno')
                    ->get();
            }
            if ($investigadores == 1){
                $busquedaInvestigadores = Investigadores::select(
                    'investigadores.funcionario as titulo',
                    "investigadores.funcionario as nombre",
                    DB::raw("CONCAT('') AS descripcion"),
                    DB::raw("CONCAT('1') AS tipo"),
                    DB::raw("CONCAT('') AS fecha"),
                    DB::raw("CONCAT('') AS id_vinculo"),
                    DB::raw("CONCAT('') AS palabra_clave"),
                    DB::raw("CONCAT(0) AS relevancia"),
                    "investigadores.id as id_investigador",
                    "investigadores.asociatividad_1 as asociatividad_1",
                    "investigadores.asociatividad_2 as asociatividad_2",
                    "investigadores.asociatividad_3 as asociatividad_3",
                    "investigadores.rol_1 as rol_1",
                    "investigadores.rol_2 as rol_2",
                    "investigadores.rol_3 as rol_3",
                    "investigadores.area_1 as area_1",
                    "investigadores.area_2 as area_2",
                    "investigadores.area_3 as area_3",
                    DB::raw("GROUP_CONCAT(proyectos.titulo) AS IPtitulo"),
                    DB::raw("GROUP_CONCAT(proyectos.descripcion) AS IPdescripcion"),
                )
                    ->join("proyectos_investigador", "proyectos_investigador.id_investigador", "=", "investigadores.id")
                    ->join("proyectos", "proyectos.id", "=", "proyectos_investigador.id_proyecto")
                    ->whereNotNull('investigadores.id_orcid')
                    ->where('investigadores.autorizado',1)
                    ->Where(function($query) use ($texto){
                        foreach($texto as $t) {
                            $query->orWhere('proyectos.titulo', 'LIKE', '%' . $t . '%');
                            $query->orWhere('proyectos.descripcion', 'LIKE', '%' . $t . '%');
                            $query->orWhere('investigadores.funcionario', 'LIKE', '%' . $t . '%');
                        }
                    })
                    ->orderby('investigadores.ap_paterno')
                    ->groupBy('investigadores.id')
                    ->get();
            }
            if ($publicaciones == 1){
                $busquedaPublicaciones = Investigadores::select(
                    "investigadores.funcionario as nombre",
                    'publicaciones.titulo as titulo',
                    DB::raw("CONCAT('') AS descripcion"),
                    DB::raw("DATE_FORMAT(publicaciones.fecha_publicacion,'%Y') as fecha"),
                    DB::raw("CONCAT('3') AS tipo"),
                    'publicaciones.id as id_vinculo',
                    DB::raw("CONCAT('') AS palabra_clave"),
                    DB::raw("CONCAT(30) AS relevancia"),
                    "investigadores.id as id_investigador",
                    DB::raw("CONCAT(0) AS asociatividad_1"),
                    DB::raw("CONCAT(0) AS asociatividad_2"),
                    DB::raw("CONCAT(0) AS asociatividad_3"),
                    DB::raw("CONCAT(0) AS rol_1"),
                    DB::raw("CONCAT(0) AS rol_2"),
                    DB::raw("CONCAT(0) AS rol_3"),
                    DB::raw("CONCAT(0) AS area_1"),
                    DB::raw("CONCAT(0) AS area_2"),
                    DB::raw("CONCAT(0) AS area_3"),
                    DB::raw("CONCAT('') AS IPtitulo"),
                    DB::raw("CONCAT('') AS IPdescripcion")
                )
                    ->join("publicaciones_investigador", "publicaciones_investigador.id_investigador", "=", "investigadores.id")
                    ->join("publicaciones", "publicaciones.id", "=", "publicaciones_investigador.id_publicacion")
                    ->where('investigadores.autorizado',1)
                    ->Where(function($query) use ($texto){
                        foreach($texto as $t) {
                            $query->orWhere('publicaciones.titulo', 'LIKE', '%' . $t . '%');
                            $query->orWhere('investigadores.nombre', 'LIKE', '%' . $t . '%');
                        }
                    })
                    ->orderby('investigadores.ap_paterno')
                    ->get();
            }
            if ($recursos == 1){
                $busquedaRecursos = Investigadores::select(
                    "investigadores.funcionario as nombre",
                    'documentos.titulo as titulo',
                    'tipos_documento.tipo as descripcion',
                    DB::raw("CONCAT('4') AS tipo"),
                    DB::raw("CONCAT('') AS fecha"),
                    'documentos.id as id_vinculo',
                    'documentos.keywords as palabra_clave',
                    DB::raw("CONCAT(40) AS relevancia"),
                    "investigadores.id as id_investigador",
                    DB::raw("CONCAT(0) AS asociatividad_1"),
                    DB::raw("CONCAT(0) AS asociatividad_2"),
                    DB::raw("CONCAT(0) AS asociatividad_3"),
                    DB::raw("CONCAT(0) AS rol_1"),
                    DB::raw("CONCAT(0) AS rol_2"),
                    DB::raw("CONCAT(0) AS rol_3"),
                    DB::raw("CONCAT(0) AS area_1"),
                    DB::raw("CONCAT(0) AS area_2"),
                    DB::raw("CONCAT(0) AS area_3"),
                    DB::raw("CONCAT('') AS IPtitulo"),
                    DB::raw("CONCAT('') AS IPdescripcion")
                )
                    ->join("proyectos_investigador", "proyectos_investigador.id_investigador", "=", "investigadores.id")
                    ->join("documentos_vinculados_proyecto", "documentos_vinculados_proyecto.id_proyecto", "=", "proyectos_investigador.id_proyecto")
                    ->join("documentos", "documentos.id", "=", "documentos_vinculados_proyecto.id_documento")
                    ->join("tipos_documento", "tipos_documento.id", "=", "documentos.tipo_documento")
                    ->where('investigadores.autorizado',1)
                    ->Where(function($query) use ($texto){
                        foreach($texto as $t) {
                            $query->orWhere('documentos.titulo', 'LIKE', '%' . $t . '%');
                            $query->orWhere('documentos.keywords', 'LIKE', '%' . $t . '%');
                            $query->orWhere('documentos.keywords_ingles', 'LIKE', '%' . $t . '%');
                            $query->orWhere('investigadores.nombre', 'LIKE', '%' . $t . '%');
                        }
                    })
                    ->orderby('investigadores.ap_paterno')
                    ->get();
            }
        }else{
            return \Response::json($merged);
        }

        $merged = $busquedaInvestigadores->concat($busquedaProyectos)->concat($busquedaPublicaciones)->concat($busquedaRecursos);
        $final = [];
        $quitar = [];
        $investiga = [];
        foreach ($merged as $key => $value) {
            $contar1 = 0;
            $contar2 = 0;
            $contar3 = 0;
            $contar4 = 0;
            $contar5 = 0;
            $contar6 = 0;
            $contar7 = 0;
            $contar8 = 0;
            $contar9 = 0;
            if ($value->tipo == 1){
                foreach ($texto as $t) {
                    $contar1 = $contar1+substr_count(strtolower($value->IPtitulo),strtolower($t));
                    $contar2 = $contar2+substr_count(strtolower($value->IPdescripcion),strtolower($t));
                    $contar4 = $contar4+substr_count(strtolower($value->area_1),strtolower($t));
                    $contar5 = $contar5+substr_count(strtolower($value->area_2),strtolower($t));
                    $contar6 = $contar6+substr_count(strtolower($value->area_3),strtolower($t));
                    if($value->rol_1 == "Investigador responsable"){
                        $contar7 = $contar7+substr_count(strtolower($value->asociatividad_1),strtolower($t));
                    }
                    if($value->rol_2 == "Investigador responsable"){
                        $contar8 = $contar8+substr_count(strtolower($value->asociatividad_2),strtolower($t));
                    }
                    if($value->rol_3 == "Investigador responsable"){
                        $contar9 = $contar9+substr_count(strtolower($value->asociatividad_3),strtolower($t));
                    }
                }
                $total = $contar1 + $contar2 + $contar3 + $contar4 + $contar5 + $contar6 + $contar7 + $contar8 + $contar9;
                $investiga[$key]['nombre'] = $value->nombre;
                $investiga[$key]['titulo'] = $value->titulo;
                $investiga[$key]['descripcion'] = $value->descripcion;
                $investiga[$key]['tipo'] = $value->tipo;
                $investiga[$key]['fecha'] = $value->fecha;
                $investiga[$key]['id_vinculo'] = $value->id_vinculo;
                $investiga[$key]['palabra_clave'] = $value->palabra_clave;
                $investiga[$key]['relevancia'] = 0;
                $investiga[$key]['relevancia_investigador'] = $total;
                $investiga[$key]['contar1'] = $contar1;
                $investiga[$key]['contar2'] = $contar2;
                $investiga[$key]['contar3'] = $contar3;
                $investiga[$key]['id_investigador'] = $value->id_investigador;
            }else{
                foreach ($texto as $t) {
                    $contar1 = $contar1+substr_count(strtolower($value->titulo),strtolower($t));
                    $contar2 = $contar2+substr_count(strtolower($value->descripcion),strtolower($t));
                    $contar3 = $contar3+substr_count(strtolower($value->palabra_clave),strtolower($t));
                }
                $total = ($contar1 * 0.3 + $contar2 * 0.2 + $contar3 * 0.1);
                $final[$key]['nombre'] = $value->nombre;
                $final[$key]['titulo'] = $value->titulo;
                $final[$key]['descripcion'] = $value->descripcion;
                $final[$key]['tipo'] = $value->tipo;
                $final[$key]['fecha'] = $value->fecha;
                $final[$key]['id_vinculo'] = $value->id_vinculo;
                $final[$key]['palabra_clave'] = $value->palabra_clave;
                $final[$key]['relevancia'] = round($total,1);
                $final[$key]['relevancia_investigador'] = 0;
                $final[$key]['contar1'] = $contar1;
                $final[$key]['contar2'] = $contar2;
                $final[$key]['contar3'] = $contar3;
                $final[$key]['id_investigador'] = $value->id_investigador;
                if ($value->tipo == 2){
                    $quitar[] = $value->id_vinculo;
                }
            }
        }
        //dd($investiga);
        if (count($investiga) > 0){
            usort($investiga, function($a, $b) {
                return $b['relevancia_investigador'] - $a['relevancia_investigador'];
            });
        }
        $result = array_merge($investiga, $final);
        $data = json_encode($result);

        $campo2 = explode( ' ', strtolower($campo));
        $texto = array_diff($campo2, $this->diccionario);
        $textoFinal = implode(" ", $texto);
        $arreglo = $this->getArreglo($textoFinal,$quitar);

        $textoFinal = $campo;



        return view('busqueda.resultados', compact('campo','todos','investigadores','proyectos','publicaciones','recursos','arreglo','textoFinal','data'));
    }

    public function resultados_avanzado(Request $request)
    {
        //dd($request->all());
        $selector = $request->input('selector');
        $operador_selector = $request->input('operador_selector');
        $texto_busqueda = $request->input('texto_busqueda');
        $datos = new \Illuminate\Database\Eloquent\Collection;
        $proyectos = 0;
        $investigadores = 0;
        $publicaciones = 0;
        $documentos = 0;
        $nombre_investigador = 0;
        $proyectos_descripcion = 0;
        $palabra_relacionado = '';
        $nombre = '';
        $arreglo = '';
        $busquedaInvestigadores = Investigadores::select(
            'investigadores.funcionario as titulo',
            "investigadores.funcionario as nombre",
            DB::raw("CONCAT('') AS descripcion"),
            DB::raw("CONCAT('1') AS tipo"),
            DB::raw("CONCAT('') AS fecha"),
            DB::raw("CONCAT('') AS id_vinculo"),
            "investigadores.id as id_investigador"
        )
            ->whereNotNull('investigadores.id_orcid')
            ->where('investigadores.autorizado',1);

        $busquedaProyectos = Investigadores::select(
            "investigadores.funcionario as nombre",
            'proyectos.titulo as titulo',
            'proyectos.fecha_inicio as fecha',
            'proyectos.descripcion as descripcion',
            DB::raw("CONCAT('2') AS tipo"),
            //DB::raw("CONCAT('') AS fecha"),
            'proyectos.id as id_vinculo',
            "investigadores.id as id_investigador"
        )
            ->leftjoin("proyectos_investigador", "proyectos_investigador.id_investigador", "=", "investigadores.id")
            ->leftjoin("proyectos", "proyectos.id", "=", "proyectos_investigador.id_proyecto")
            ->where('investigadores.autorizado',1);
        $busquedaPublicaciones = Investigadores::select(
            "investigadores.funcionario as nombre",
            'publicaciones.titulo as titulo',
            DB::raw("CONCAT('') AS descripcion"),
            DB::raw("DATE_FORMAT(publicaciones.fecha_publicacion,'%Y') as fecha"),
            DB::raw("CONCAT('3') AS tipo"),
            'publicaciones.id as id_vinculo',
            "investigadores.id as id_investigador"
        )
            ->leftjoin("publicaciones_investigador", "publicaciones_investigador.id_investigador", "=", "investigadores.id")
            ->leftjoin("publicaciones", "publicaciones.id", "=", "publicaciones_investigador.id_publicacion")
            ->where('investigadores.autorizado',1);
        $busquedaRecursos = Investigadores::select(
            "investigadores.funcionario as nombre",
            'documentos.titulo as titulo',
            'tipos_documento.tipo as descripcion',
            DB::raw("CONCAT('4') AS tipo"),
            DB::raw("CONCAT('') AS fecha"),
            'documentos.id as id_vinculo',
            "investigadores.id as id_investigador"
        )
            ->join("proyectos_investigador", "proyectos_investigador.id_investigador", "=", "investigadores.id")
            ->join("documentos_vinculados_proyecto", "documentos_vinculados_proyecto.id_proyecto", "=", "proyectos_investigador.id_proyecto")
            ->join("documentos", "documentos.id", "=", "documentos_vinculados_proyecto.id_documento")
            ->join("tipos_documento", "tipos_documento.id", "=", "documentos.tipo_documento")
            ->where('investigadores.autorizado',1);
        foreach ($selector as $key => $value) {
            $texto = $texto_busqueda[$key];
            if (str_contains($value, 'investigadores') || str_contains($value, 'all')){
                $investigadores = 1;
                if ($value == 'investigadores.funcionario'){
                    $nombre_investigador = 1;
                    $nombre = $texto;
                }
                if ($key == 0){
                    if ($value == 'all'){
                        $busquedaInvestigadores->Where('investigadores.funcionario', 'LIKE', '%' . $texto . '%')
                            ->orWhere('investigadores.reparticion', 'LIKE', '%' . $texto . '%');
                    }else
                        $busquedaInvestigadores->Where($value, 'LIKE', '%' . $texto . '%');
                }else{
                    $operador = $operador_selector[$key-1];
                    if ($operador == 0)
                        $busquedaInvestigadores->Where($value, "LIKE", '%' . $texto . '%');
                    if ($operador == 1)
                        $busquedaInvestigadores->orWhere($value, "LIKE", '%' . $texto . '%');
                    if ($operador == 2)
                        $busquedaInvestigadores->Where($value, "NOT LIKE", '%' . $texto . '%');
                }
            }
            if (str_contains($value, 'proyectos') || str_contains($value, 'all')){
                $proyectos = 1;
                if ($value == 'proyectos.descripcion' || $value == 'proyectos.titulo'){
                    $proyectos_descripcion = 1;
                    $palabra_relacionado = $texto;
                }
                if ($key == 0){
                    if ($value == 'all'){
                        $busquedaProyectos->Where('proyectos.titulo', 'LIKE', '%' . $texto . '%')
                            ->orWhere('proyectos.descripcion', 'LIKE', '%' . $texto . '%')
                            ->orWhere('proyectos.fecha_inicio', 'LIKE', '%' . $texto . '%')
                            ->orWhere('proyectos.fecha_finalizacion', 'LIKE', '%' . $texto . '%')
                            ->orWhere('proyectos.agencia_financiamiento', 'LIKE', '%' . $texto . '%');
                    }else
                        $busquedaProyectos->Where($value, 'LIKE', '%' . $texto . '%');
                }else{
                    $operador = $operador_selector[$key-1];
                    if ($operador == 0)
                        $busquedaProyectos->Where($value, "LIKE", '%' . $texto . '%');
                    if ($operador == 1)
                        $busquedaProyectos->orWhere($value, "LIKE", '%' . $texto . '%');
                    if ($operador == 2)
                        $busquedaProyectos->Where($value, "NOT LIKE", '%' . $texto . '%');
                    if ($nombre_investigador == 1)
                        $busquedaProyectos->Where('investigadores.nombre', 'LIKE', '%' . $nombre . '%');
                }
            }
            if (str_contains($value, 'publicaciones') || str_contains($value, 'all')){
                $publicaciones = 1;
                if ($key == 0){
                    if ($value == 'all'){
                        $busquedaPublicaciones->Where('publicaciones.titulo', 'LIKE', '%' . $texto . '%')
                            ->orWhere('publicaciones.titulo_traducido', 'LIKE', '%' . $texto . '%')
                            ->orWhere('publicaciones.fecha_publicacion', 'LIKE', '%' . $texto . '%');
                    }else
                        $busquedaPublicaciones->Where($value, 'LIKE', '%' . $texto . '%');
                }else{
                    $operador = $operador_selector[$key-1];
                    if ($operador == 0)
                        $busquedaPublicaciones->Where($value, "LIKE", '%' . $texto . '%');
                    if ($operador == 1)
                        $busquedaPublicaciones->orWhere($value, "LIKE", '%' . $texto . '%');
                    if ($operador == 2)
                        $busquedaPublicaciones->Where($value, "NOT LIKE", '%' . $texto . '%');
                    if ($nombre_investigador == 1)
                        $busquedaPublicaciones->Where('investigadores.nombre', 'LIKE', '%' . $nombre . '%');
                }
            }
            if (str_contains($value, 'documento') || str_contains($value, 'all')){
                $documentos = 1;
                if ($key == 0){
                    if ($value == 'all'){
                        $busquedaRecursos->Where('documentos.titulo', 'LIKE', '%' . $texto . '%')
                            ->orWhere('tipos_documento.tipo', 'LIKE', '%' . $texto . '%')
                            ->orWhere('documentos.anio_publicacion', 'LIKE', '%' . $texto . '%')
                            ->orWhere('documentos.doi', 'LIKE', '%' . $texto . '%');
                    }else
                    $busquedaRecursos->Where($value, 'LIKE', '%' . $texto . '%');
                }else{
                    $operador = $operador_selector[$key-1];
                    if ($operador == 0)
                        $busquedaRecursos->Where($value, "LIKE", '%' . $texto . '%');
                    if ($operador == 1)
                        $busquedaRecursos->orWhere($value, "LIKE", '%' . $texto . '%');
                    if ($operador == 2)
                        $busquedaRecursos->Where($value, "NOT LIKE", '%' . $texto . '%');
                    if ($nombre_investigador == 1)
                        $busquedaRecursos->Where('investigadores.nombre', 'LIKE', '%' . $nombre . '%');
                }
            }
        }
        //dd($query_investigadores);
        if ($investigadores == 1){
            $busquedaInvestigadores = $busquedaInvestigadores->get();
        }
        if ($proyectos == 1){
            $busquedaProyectos = $busquedaProyectos->get();
        }
        if ($publicaciones == 1){
            $busquedaPublicaciones = $busquedaPublicaciones->get();
        }
        if ($documentos == 1){
            $busquedaRecursos = $busquedaRecursos->get();
        }
        if ($proyectos_descripcion == 1){
            $quitar = [];
            foreach ($busquedaProyectos as $proyecto){
                $quitar[] = $proyecto->id_vinculo;
            }
            $textoFinal = $palabra_relacionado;
            $arreglo = $this->getArreglo($textoFinal,$quitar);
        }
        $txt = implode(" ",$texto_busqueda);
        $datos = $datos->concat($busquedaInvestigadores)->concat($busquedaProyectos)->concat($busquedaPublicaciones)->concat($busquedaRecursos);
        $resultado_html = view('busqueda.resultados_avanzado',compact('datos','arreglo','txt'))->render();
        $response = array(
            'resultado_html' => $resultado_html
        );
        return response()->json($response);
    }

    public function getResultados($campo, $todos, $investigadores, $proyectos, $publicaciones, $recursos)
    {
        if ($campo == null) return redirect()->route('home');
        $final = '';
        //dd($contar);
        return \Response::json($final);
    }

    /**
     * @param mixed $textoFinal
     * @return mixed
     */
    public function getArreglo(mixed $textoFinal, $quitar)
    {
        $process = new Process(['python3', 'script/recomendados.py', '"' . $textoFinal . '"']);
        $process->run();
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }
        $recomendados = explode(",", str_replace(" ","",str_replace("\n","",$process->getOutput())));
        $recomendados = array_diff($recomendados, $quitar);

        return Proyectos::select(
            "proyectos.titulo",
            "proyectos.id as proyecto_id",
            "investigadores.funcionario as nombre",
            //DB::raw("CONCAT(investigadores.nombre,' ',investigadores.ap_paterno) AS nombre"),
            "investigadores.id as investigadores_id",
            "proyectos.descripcion",
            "proyectos.fecha_inicio as anio",
            //DB::raw("if(proyectos.fecha_inicio != '',SUBSTRING_INDEX(proyectos.fecha_inicio, '-', -1),'') as anio")
        )
            ->leftjoin("proyectos_investigador", "proyectos_investigador.id_proyecto", "=", "proyectos.id")
            ->leftjoin("investigadores", "investigadores.id", "=", "proyectos_investigador.id_investigador")
            ->wherein("proyectos.id", $recomendados)
            ->take(5)
            ->get();
    }

}
