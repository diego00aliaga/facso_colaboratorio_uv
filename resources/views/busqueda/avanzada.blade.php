@extends('layout.layout2')
@section('contenido')
    <!--Content-->
    <form class="container pb-5" id="buscador" name="buscador">
        @csrf
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center">
                <img class="img-fluid mb-4" src="{{ asset('assets/images/test6.png') }}" width="700">
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <h4 class="bebas">Búsqueda avanzada</h4>
                <p>Construye tu búsqueda</p>
            </div>
        </div>
        <div class="row grupo-avanzado">
            <div class="col-10 pb-3">
                <div class="input-group">
                    <div class="input-group-text">
                        <select class="form-select selector" name="selector[]">
                            <option selected value="all">Todo</option>
                            <optgroup label="Investigadora/or">
                                <option value="investigadores.funcionario">Investigadora/or Nombre</option>
                                <option value="investigadores.reparticion">Investigadora/or Departamento o unidad</option>
                            </optgroup>
                            <optgroup label="Proyecto">
                                <option value="proyectos.titulo">Título</option>
                                <option value="proyectos.descripcion">Proyecto Descripción</option>
                                <option value="proyectos.fecha_inicio">Proyecto Año Inicio</option>
                                <option value="proyectos.fecha_finalizacion">Proyecto Año Finalización</option>
                             <!--   <option value="institucion_patrocinante">Proyecto Institución patrocinante</option> -->
                                <option value="proyectos.agencia_financiamiento">Proyecto Agencia de Financiamiento</option>
                            </optgroup>
                            <optgroup label="Publicación">
                             <!--   <option value="autor">Publicación Autor</option> -->
                                <option value="publicaciones.titulo">Publicación Título de la obra</option>
                                <option value="publicaciones.titulo_traducido">Publicación Título traducido</option>
                                <option value="publicaciones.fecha_publicacion">Publicación Fecha Publicación</option>
                            </optgroup>
                            <optgroup label="Documento">
                                <option value="documentos.titulo">Documento Título</option>
                                <option value="tipos_documento.tipo">Documento Tipo</option>
                                <option value="documentos.anio_publicacion">Documento Año Publicación</option>
                                <option value="documentos.doi">Documento DOI</option>
                            </optgroup>
                        </select>
                    </div>
                    <input type="text" class="form-control" name="texto_busqueda[]" required>
                </div>
            </div>
            <div class="col-lg-2 pb-3 text-lg-end">
                <a class="btn-floating btn-sm btn-azul agregar" type="button" role="button"><i class="fal fa-plus"></i></a>
                <a class="btn-floating btn-sm btn-azul quitar" style="display: none;" type="button" role="button"><i class="fal fa-trash"></i></a>
            </div>
        </div>
        <div class="campos">
            <div class="row grupo-avanzado camposBusqueda primer_selector" style="display: none;">
            <div class="col-lg-2 pb-3">
                <select class="form-select form-select-lg operador_selector">
                    <option selected value="0">AND</option>
                    <option value="1">OR</option>
                    <option value="2">NOT</option>
                </select>
            </div>
            <div class="col-lg-8 pb-3">
                <div class="input-group">
                    <div class="input-group-text">
                        <select class="form-select selector_secundario">
                            <option selected value="">Seleccionar</option>
                            <optgroup label="Investigadora/or">
                                <option value="investigadores.funcionario">Investigadora/or Nombre</option>
                                <option value="investigadores.reparticion">Investigadora/or Departamento o unidad</option>
                            </optgroup>
                            <optgroup label="Proyecto">
                                <option value="proyectos.titulo">Título</option>
                                <option value="proyectos.descripcion">Proyecto Descripción</option>
                                <option value="proyectos.fecha_inicio">Proyecto Año Inicio</option>
                                <option value="proyectos.fecha_finalizacion">Proyecto Año Finalización</option>
                                <!--   <option value="institucion_patrocinante">Proyecto Institución patrocinante</option> -->
                                <option value="proyectos.agencia_financiamiento">Proyecto Agencia de Financiamiento</option>
                            </optgroup>
                            <optgroup label="Publicación">
                                <!--   <option value="autor">Publicación Autor</option> -->
                                <option value="publicaciones.titulo">Publicación Título de la obra</option>
                                <option value="publicaciones.titulo_traducido">Publicación Título traducido</option>
                                <option value="publicaciones.fecha_publicacion">Publicación Fecha Publicación</option>
                            </optgroup>
                            <optgroup label="Documento">
                                <option value="documentos.titulo">Documento Título documento</option>
                                <option value="tipos_documento.tipo">Documento Tipo de documento</option>
                                <option value="documentos.anio_publicacion">Documento Año Publicación</option>
                                <option value="documentos.doi">Documento DOI</option>
                            </optgroup>
                        </select>
                    </div>
                    <input type="text" class="form-control texto_busqueda">
                </div>
            </div>
            <div class="col-lg-2 pb-3 text-lg-end">
                <a class="btn-floating btn-sm btn-azul quitar" style="display: none;" type="button" role="button"><i class="fal fa-trash"></i></a>
            </div>
        </div>
        </div>
        <div class="row grupo-avanzado" style="display: none;">
            <div class="col-md-6 pb-3">
                <label for="startDate">Desde:</label>
                <input id="startDate" class="form-control" type="date" />
            </div>
            <div class="col-md-6 pb-3">
                <label for="endDate">Hasta:</label>
                <input id="endDate" class="form-control" type="date" />
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center pt-4">
                <button type="submit" class="btn btn-lg bg-rosa">Buscar<i class="far fa-search fa-lg ms-2"></i></button>
            </div>
        </div>
    </form>
    <div id="resultados_busqueda"></div>
@endsection
@push('js')
    <script type="text/javascript">
        $(".agregar").click(function (e) {
            e.preventDefault();
            let div = $(".camposBusqueda:last");
            let seleccion = div.find(".selector_secundario").val();
            let nuevo = div.clone(true).appendTo(".campos").show();
            nuevo.removeClass("primer_selector");
            nuevo.find(".quitar").show();
            nuevo.find(".operador_selector").attr('name', 'operador_selector[]');
            nuevo.find(".selector_secundario").attr('name', 'selector[]');
            nuevo.find(".texto_busqueda").attr('name', 'texto_busqueda[]');
            nuevo.find(".selector_secundario option[value='"+ seleccion +"']").attr('disabled',true);
            nuevo.find(".selector_secundario").attr('required',true)
            nuevo.find(".texto_busqueda").attr('required',true)
            $(".selector").find("option[value='"+ seleccion +"']").attr('disabled',true);
        });
        $(".selector").change(function (e) {
            e.preventDefault();
            $(".selector_secundario option").each(function(){
                $(this).attr('disabled',false);
            });
            $(".selector_secundario option[value='"+ $(this).val() +"']").attr('disabled',true);
        });
        $('body').on('click', '.quitar', function(e) {
            e.preventDefault();
            $(this).parents('.camposBusqueda').remove();
        });
        $('#buscador').submit(function(e) {
            e.preventDefault();
            //$('.primer_selector').remove();
            $('#resultados_busqueda').empty();
            let formData = new FormData(this);
            $.ajax({
                url:'{{route('resultados_avanzado')}}',
                type: "POST",
                processData: false,
                contentType: false,
                data: formData,
                success: function (data) {
                    $("#resultados_busqueda").html(data.resultado_html);
                },
                error: function (error) {
                    console.log(`Error ${error}`);
                }
            });
        });
    </script>
@endpush
