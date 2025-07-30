@extends('layout.layout2')
@section('contenido')
    <style>
        .table>:not(:first-child) {
            border-top: 0 solid currentColor;
        }
        .float-left.pagination-detail {
            font-size: 0.8rem;
        }
        .swal2-select {
            display: none !important;
        }
        .pagination-detail {
            display: none !important;
        }
        .highlight {
            background-color: yellow;
        }
    </style>
	<!--Search-->
    <section class="grey lighten-2">
        <div class="container pb-5">
            <div class="row flex-center justify-content-center">
                <div class="row justify-content-center">
                    <div class="col-lg-9 text-center pb-5">
                        <img class="img-fluid" src="{{ asset('assets/images/test6.png') }}" width="700" alt="">
                    </div>
                </div>
                <div class="col-lg-10 col-xl-8 justify-content-center">
                    <!-- Temas -->
                    <form id="buscador" name="buscador" action="{{ route('resultados') }}" method="post">
                        @csrf
						<div class="text-start" id="searchTemas" style="display: none;">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="todos" value="1" id="searchAll" @if($todos == 1) checked @endif>
								<label class="form-check-label tx-chico" for="searchAll">Todo</label>
							</div>
							<div class="form-check">
								<input class="form-check-input notAll" type="checkbox" name="investigadores" value="1" id="searchInvestigadores" @if($investigadores == 1) checked @endif>
								<label class="form-check-label tx-chico" for="searchInvestigadores">Investigadores/as</label>
							</div>
							<div class="form-check">
								<input class="form-check-input notAll" type="checkbox" name="proyectos" value="1" id="searchProyectos" @if($proyectos == 1) checked @endif>
								<label class="form-check-label tx-chico" for="searchProyectos">Proyectos</label>
							</div>
							<div class="form-check">
								<input class="form-check-input notAll" type="checkbox" name="publicaciones" value="1" id="searchPublicaciones" @if($publicaciones == 1) checked @endif>
								<label class="form-check-label tx-chico" for="searchPublicaciones">Publicaciones</label>
							</div>
							<div class="form-check">
								<input class="form-check-input notAll" type="checkbox" name="recursos" value="1" id="searchRecursos" @if($recursos == 1) checked @endif>
								<label class="form-check-label tx-chico" for="searchRecursos">Recursos</label>
							</div>
						</div>
						<div class="form-floating input-group input-group-lg z-depth-1">
							<input type="text" class="form-control form-control-lg" name="campo" value="{{ $campo }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" id="bigSearch" placeholder="Buscar" required>
							<button type="submit" class="input-group-text" id="inputGroup-sizing-lg"><i class="far fa-search ms-2 azul"></i></button>
						</div>
                    </form>
                    <div class="text-start pt-3" style="position: relative;">
                        <a type="button" class="link-simple" href="{{ route('busqueda_avanzada') }}">Búsqueda avanzada<i class="far fa-arrow-right ms-2 azul"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Content-->
    <div class="col-11" style="margin-left: auto;margin-right: auto;" id="textos">
        <div class="row">
            <div class="col-lg-8 col-xl-9 py-5 ps-lg-4">
                <h4 class="bebas mb-2 ms-3">Resultados de búsqueda:</h4>
                <table id="cargarResultados"
                       data-classes="table table-sm dt-responsive nowrap"
                       style="color: black;"
                       data-toolbar="#toolbar"
                       data-search="false"
                       data-show-refresh="false"
                       data-show-toggle="false"
                       data-show-fullscreen="false"
                       data-buttons-class="primary"
                       data-show-columns="false"
                       data-show-columns-toggle-all="false"
                       data-detail-view="false"
                       data-show-export="false"
                       data-click-to-select="false"
                       data-detail-formatter="detailFormatter"
                       data-minimum-count-columns="2"
                       data-show-pagination-switch="false"
                       data-pagination="true"
                       data-id-field="id"
                       data-show-header="false"
                       data-page-list="[10, 25, 50, 100, All]"
                       data-page-size="10"
                       data-show-footer="false"
                       data-filter-control="true"
                       data-url=""
                       >
                    <thead>
                    <tr class="text-center">
                        <th data-field="" data-formatter="resultado" style="display: none;">Resultado</th>
                        <th data-field="fecha" data-visible="false" style="display: none;">Fecha</th>
                        <th data-field="titulo" data-visible="false" style="display: none;">Titulo</th>
                        <th data-field="relevancia" data-visible="false" style="display: none;">Relevancia</th>
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="col-lg-4 col-xl-3 ps-lg-4 border py-5">
                <p class="bebas mb-2">Resultados de búsqueda:</p>
                <p class="b600 mb-2">"{{ $textoFinal }}"</p>
                <p class="tx-chico"></p>
                <select class="form-select paginacion" style="display: block!important;">
                    <option value="5">5 resultados por página</option>
                    <option selected value="10">10 resultados por página</option>
                    <option value="20">20 resultados por página</option>
                    <option value="50">50 resultados por página</option>
                </select>
                <hr>
                <p class="bebas mb-2">Ordenar por:</p>
                <select class="form-select" style="display: none !important;">
                    <option selected value="1">Alfabético</option>
                    <option value="2">Fecha ascendente</option>
                    <option value="3">Fecha descendente</option>
                </select>
                <select id="sort" class="form-select" style="display: block!important;">
                    <option value="">Seleccionar</option>
                    <option value="relevancia">Relevancia</option>
                    <option value="name_asc">Alfabético ascendente</option>
                    <option value="name_desc">Alfabético descendente</option>
                    <option value="stargazers_asc">Fecha ascendente</option>
                    <option value="stargazers_desc">Fecha descendente</option>
                </select>
                <hr>
                <p class="bebas mb-2">Afinar búsqueda:</p>
                <div class="text-start" id="searchTemas2">
					<div class="checkbox-wrapper-29">
						<label class="checkbox">
							<input type="checkbox" class="checkbox__input" id="searchInvestigadores2" @if($investigadores == 1) checked @endif />
							<span class="checkbox__label"></span> Investigadores/as
						</label>
					</div>
					<div class="checkbox-wrapper-29">
						<label class="checkbox">
							<input type="checkbox" class="checkbox__input" id="searchProyectos2" @if($proyectos == 1) checked @endif />
							<span class="checkbox__label"></span> Proyectos
						</label>
					</div>
					<div class="checkbox-wrapper-29">
						<label class="checkbox">
							<input type="checkbox" class="checkbox__input" id="searchPublicaciones2" @if($publicaciones == 1) checked @endif />
							<span class="checkbox__label"></span> Publicaciones
						</label>
					</div>
					<div class="checkbox-wrapper-29">
						<label class="checkbox">
							<input type="checkbox" class="checkbox__input" id="searchRecursos2" @if($recursos == 1) checked @endif />
							<span class="checkbox__label"></span> Recursos
						</label>
					</div>
					<div class="lighten-2 text-center">
                        <button type="button" class="btn btn-azul mt-3 vBuscar">Aplicar</button>
                    </div>
                </div>
                <div class="row grupo-avanzado pt-4" style="display: none">
                    <div class="col-md-6 pb-3">
                        <label for="startDate">Desde:</label>
                        <input id="startDate" class="form-control" type="date"/>
                    </div>
                    <div class="col-md-6 pb-3">
                        <label for="endDate">Hasta:</label>
                        <input id="endDate" class="form-control" type="date"/>
                    </div>
                </div>
                <div class="grey lighten-2 p-3 text-center mt-4">
                    <p class="bebas text-start">Guardar búsqueda:</p>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="Email">
                        <label for="floatingInput" class="active">Email<i class="fal fa-envelope ms-2 azul"></i></label>
                    </div>
                    <button type="button" class="btn btn-azul mt-3">Guardar</button>
                </div>
            </div>
        </div>
        @if($arreglo != '' && count($arreglo) > 0)
            <h4 class="bebas mb-2 ms-3">Resultados relacionados:</h4>
            @foreach($arreglo as $recomendado)
                    <div class="col-11 py-4">
                        <p class="mb-0 tx-chico">Proyecto de investigación<i class="far fa-file-search fa-lg ms-2 azul"></i></p>
                        <a href="{{ url('ficha').'/proyecto/'.$recomendado->proyecto_id }}" class="mb-0 b600 link-line link-simple"><p class="cambio mb-0">{{ $recomendado->titulo }}</p></a>
                        <p class="mb-0"><a href="investigadores-ficha-{{ $recomendado->investigadores_id }}" class="link-simple link-line cambio">{{ $recomendado->nombre }}</a></p>
                        <p class="mb-0">{{ $recomendado->anio }}</p>
                        <p class="mb-0 cambio">{{ $recomendado->descripcion }}</p>
                        <hr>
                    </div>
            @endforeach
        @endif
    </div>
@endsection
@push('js')
    <script type="text/javascript">
        let $tableresultados = $('#cargarResultados');
        initTable();

        function initTable() {
            let data = {!! $data !!};
            $tableresultados.bootstrapTable({
                data: data,
                onPostBody:function () {
                    $('.prueba').html("");
                    let $button = $('.pagination-info').clone();
                    $('.prueba').html($button);
                }
            });
            $tableresultados.on('refresh.bs.table', function () {
                alert('holas');
                $('.prueba').html("");
                let $button = $('.pagination-info').clone();
                $('.prueba').html($button);
            });
        }

        var $table = $tableresultados;
        var $sort = $('#sort');

        $(function() {
            $sort.change(function() {
                var field = ''
                var sortOrder = ''

                if (this.value === 'name_asc') {
                    field = 'titulo'
                    sortOrder = 'asc'
                } else if (this.value === 'name_desc') {
                    field = 'titulo'
                    sortOrder = 'desc'
                } else if (this.value === 'stargazers_asc') {
                    field = 'fecha'
                    sortOrder = 'asc'
                } else if (this.value === 'stargazers_desc') {
                    field = 'fecha'
                    sortOrder = 'desc'
                } else if (this.value === 'relevancia') {
                    field = 'relevancia'
                    sortOrder = 'desc'
                }

                $table.bootstrapTable('sortBy', {
                    field: field,
                    sortOrder: sortOrder
                })
            })
        })

        $(".paginacion").change(function(){
            let valor = $(this).val();
            $tableresultados.bootstrapTable('refreshOptions', {
                pageSize: valor
            });
        });

        $("#searchInvestigadores2").change(function(){
            $("#searchInvestigadores").trigger("click");
        });

        $("#searchProyectos2").change(function(){
            $("#searchProyectos").trigger("click");
        });

        $("#searchPublicaciones2").change(function(){
            $("#searchPublicaciones").trigger("click");
        });

        $("#searchRecursos2").change(function(){
            $("#searchRecursos").trigger("click");
        });

        $(".vBuscar").click(function(){
            $('#buscador').submit();
        });

        function removeAccents(text) {
            return text.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
        }

        function escapeRegExp(string) {
            return string.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
        }

        function createAccentVariants(searchTerm) {
            const accentsMap = {
                'a': '[aá]',
                'e': '[eé]',
                'i': '[ií]',
                'o': '[oó]',
                'u': '[uú]',
                'n': '[nñ]',
                'A': '[AÁ]',
                'E': '[EÉ]',
                'I': '[IÍ]',
                'O': '[OÓ]',
                'U': '[UÚ]',
                'N': '[NÑ]'
            };

            return searchTerm.split('').map(char => accentsMap[char] || char).join('');
        }

        function resultado(value, row, index) {
            let titulo = row.titulo;
            let titulo2 = row.descripcion;
            let nombre = row.nombre;
            let tipo = parseInt(row.tipo);
            let campo = '{{ $textoFinal }}';
            let bcampo = campo.split(' ');
            $.each(bcampo, function( index, value ) {
                let searchTermNoAccents = removeAccents(value);
                let searchTermRegexStr = createAccentVariants(searchTermNoAccents);
                let regex = new RegExp(searchTermRegexStr, 'gi');
                titulo = titulo.replace(regex, (match) => {
                    return `<span class="highlight">${match}</span>`;
                });
                titulo2 = titulo2.replace(regex, (match) => {
                    return `<span class="highlight">${match}</span>`;
                });
                nombre = nombre.replace(regex, (match) => {
                    return `<span class="highlight">${match}</span>`;
                });
            });
            if(tipo === 1){
                return [
                    '<div class="col-12 pt-lg-4">' +
                    '<p class="mb-0 tx-chico">Investigador/a<i class="far fa-user fa-lg ms-2 azul"></i></p>' +
                    '</div>' +
                    '<div class="col-12">' +
                    '<a href="investigadores-ficha-'+ row.id_investigador +'" class="mb-0 b600 link-line link-simple">'+ titulo +'</a>' +
                    '<p class="mb-0"><a href="https://orcid.org/'+ row.nombre +'" target="_blank" class="link-simple link-line">https://orcid.org/'+ row.nombre +'</a></p>' +
                    '</div>'
                ].join('');
            }
            if (tipo === 2){
                return [
                    '<div class="col-12 pt-lg-4">' +
                    '<p class="mb-0 tx-chico">Proyecto de investigación<i class="far fa-file-search fa-lg ms-2 azul"></i></p>' +
                    '</div>' +
                    '<div class="col-12">' +
                    '<a href="{{ url('ficha').'/proyecto/' }}'+ row.id_vinculo +'" class="mb-0 b600 link-line link-simple">'+ titulo +'</a>' +
                    '<p class="mb-0"><a href="investigadores-ficha-'+ row.id_investigador +'" class="link-simple link-line">'+ nombre +'</a></p>' +
                    '<p class="mb-0">'+ row.fecha +'</p>' +
                    '<p class="mb-0 treslineas">'+ titulo2 +'</p>' +
                    '</div>'
                ].join('');
            }
            if (tipo === 3){
                if(row.fecha === null)
                    row.fecha = '';
                return [
                    '<div class="col-12 pt-lg-4">' +
                    '<p class="mb-0 tx-chico">Publicación: Artículo de revista<i class="fal fa-newspaper fa-lg ms-2 azul"></i></p>' +
                    '</div>' +
                    '<div class="col-12">' +
                    '<a href="{{ url('ficha/publicacion/') }}/'+ row.id_vinculo +'" class="mb-0 b600 link-line link-simple">'+ titulo +'</a>' +
                    '<p class="mb-0"><a href="investigadores-ficha-'+ row.id_investigador +'" class="link-simple link-line">'+ nombre +'</a></p>' +
                    '<p class="mb-0">'+ row.fecha +'</p>' +
                    '</div>'
                ].join('');
            }
            if (tipo === 4){
                return [
                    '<div class="col-12 pt-lg-4">' +
                    '<p class="mb-0 tx-chico">Recurso: '+ row.descripcion +'<i class="fal fa-file fa-lg ms-2 azul"></i></p>' +
                    '</div>' +
                    '<div class="col-12">' +
                    '<a href="{{ url('ficha/recursos/') }}/'+ row.id_vinculo +'" class="mb-0 b600 link-line link-simple">'+ titulo +'</a>' +
                    '<p class="mb-0"><a href="investigadores-ficha-'+ row.id_investigador +'" class="link-simple link-line">'+ nombre +'</a></p>' +
                    '</div>'
                ].join('');
            }
        }

        $(document).ready(function(){
            $('.cambio').each(function() {
                let elemento = $(this);
                let text = elemento.text();
                let campo = '{{ $textoFinal }}';
                let bcampo = campo.split(' ');
                $.each(bcampo, function( index, value ) {
                    let searchTermNoAccents = removeAccents(value);
                    let searchTermRegexStr = createAccentVariants(searchTermNoAccents);
                    let regex = new RegExp(searchTermRegexStr, 'gi');
                    text = text.replace(regex, (match) => {
                        return `<span class="highlight">${match}</span>`;
                    });
                    elemento.html(text);
                });
            });
        });

        $('#buscador').submit(function(event) {
            //event.preventDefault();
            let allVals = 0;
            $('input[type="checkbox"]:checked').each(function () {
                allVals = allVals + parseInt($(this).val());
            });
            if (allVals === 0){
                Swal.fire({
                    icon: "error",
                    title: "",
                    text: "Debe seleccionar una categoría",
                    confirmButtonColor: "#3085d6",
                });
                return false;
            }
        });
    </script>
@endpush
