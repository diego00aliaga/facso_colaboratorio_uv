<!--Content-->
    <div class="col-11" style="margin-left: auto;margin-right: auto;" id="textos">
    <h4 class="bebas mb-2 ms-3">Resultados de la búsqueda avanzada:</h4>
    <table class="cargarResultados"
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
           data-ajax-options="ajaxOptions">
        <thead>
        <tr class="text-center">
            <th data-field="" data-formatter="resultado">Resultado</th>
        </tr>
        </thead>
    </table>
        @if($arreglo != '' && count($arreglo) > 0)
            <h4 class="bebas mb-2 ms-3">Resultados relacionados:</h4>
            @foreach($arreglo as $recomendado)
                <div class="col-11 py-4">
                    <p class="mb-0 tx-chico">Proyecto de investigación<i class="far fa-file-search fa-lg ms-2 azul"></i></p>
                    <a href="{{ url('ficha').'/proyecto/'.$recomendado->proyecto_id }}" target="_blank" class="mb-0 b600 link-line link-simple"><p class="cambio mb-0">{{ $recomendado->titulo }}</p></a>
                    <p class="mb-0"><a href="investigadores-ficha-{{ $recomendado->investigadores_id }}" target="_blank" class="link-simple link-line cambio">{{ $recomendado->nombre }}</a></p>
                    <p class="mb-0">{{ $recomendado->anio }}</p>
                    <p class="mb-0 cambio">{{ $recomendado->descripcion }}</p>
                    <hr>
                </div>
            @endforeach
        @endif
    </div>
    <script type="text/javascript">

        $( document ).ready(function() {
            $(function() {
                let data = {!! $datos !!};
                $('.cargarResultados').bootstrapTable({data: data})
            })
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
            let campo = '{!! $txt !!}';
            let bcampo = campo.split(' ');
            $.each(bcampo, function( index, value ) {
                let searchTermNoAccents = removeAccents(value);
                let searchTermRegexStr = createAccentVariants(searchTermNoAccents);
                let regex = new RegExp(searchTermRegexStr, 'gi');
                titulo = titulo.replace(regex, (match) => {
                    return `<span class="bg-amarillo">${match}</span>`;
                });
                titulo2 = titulo2.replace(regex, (match) => {
                    return `<span class="bg-amarillo">${match}</span>`;
                });
                nombre = nombre.replace(regex, (match) => {
                    return `<span class="bg-amarillo">${match}</span>`;
                });
            });
            if(tipo === 1){
                return [
                    '<div class="col-11 pt-lg-4">' +
                    '<p class="mb-0 tx-chico">Investigador/a<i class="far fa-user fa-lg ms-2 azul"></i></p>' +
                    '</div>' +
                    '<div class="col-lg-8 col-xxl-9">' +
                    '<a href="investigadores-ficha-'+ row.id_investigador +'" target="_blank" class="mb-0 b600 link-line link-simple">'+ titulo +'</a>' +
                    '<p class="mb-0"><a href="https://orcid.org/'+ row.nombre +'" target="_blank" class="link-simple link-line">https://orcid.org/'+ row.nombre +'</a></p>' +
                    '</div>'
                ].join('');
            }
            if (tipo === 2){
                return [
                    '<div class="col-11 pt-lg-4">' +
                    '<p class="mb-0 tx-chico">Proyecto de investigación<i class="far fa-file-search fa-lg ms-2 azul"></i></p>' +
                    '</div>' +
                    '<div class="col-lg-8 col-xxl-9">' +
                    '<a href="{{ url('ficha').'/' }}'+ row.id_vinculo +'" target="_blank" class="mb-0 b600 link-line link-simple">'+ titulo +'</a>' +
                    '<p class="mb-0"><a href="investigadores-ficha-'+ row.id_investigador +'" target="_blank" class="link-simple link-line">'+ nombre +'</a></p>' +
                    '<p class="mb-0">2021</p>' +
                    '<p class="mb-0">'+ titulo2 +'</p>' +
                    '</div>'
                ].join('');
            }
            if (tipo === 3){
                if(row.fecha === null)
                    row.fecha = '';
                return [
                    '<div class="col-11 pt-lg-4">' +
                    '<p class="mb-0 tx-chico">Publicación: Artículo de revista<i class="fal fa-newspaper fa-lg ms-2 azul"></i></p>' +
                    '</div>' +
                    '<div class="col-lg-8 col-xxl-9">' +
                    '<a href="{{ url('ficha/publicacion/') }}/'+ row.id_vinculo +'" target="_blank" class="mb-0 b600 link-line link-simple">'+ titulo +'</a>' +
                    '<p class="mb-0"><a href="investigadores-ficha-'+ row.id_investigador +'" target="_blank" class="link-simple link-line">'+ nombre +'</a></p>' +
                    '<p class="mb-0">'+ row.fecha +'</p>' +
                    '</div>'
                ].join('');
            }
            if (tipo === 4){
                return [
                    '<div class="col-11 pt-lg-4">' +
                    '<p class="mb-0 tx-chico">Recurso: '+ row.descripcion +'<i class="fal fa-file fa-lg ms-2 azul"></i></p>' +
                    '</div>' +
                    '<div class="col-lg-8 col-xxl-9">' +
                    '<a href="{{ url('ficha/recursos/') }}/'+ row.id_vinculo +'" target="_blank" class="mb-0 b600 link-line link-simple">'+ titulo +'</a>' +
                    '<p class="mb-0"><a href="investigadores-ficha-'+ row.id_investigador +'" target="_blank" class="link-simple link-line">'+ nombre +'</a></p>' +
                    '</div>'
                ].join('');
            }
        }

        $(document).ready(function(){
            $('#textos p.cambio').each(function() {
                let elemento = $(this);
                let text = elemento.text();
                let campo = '';
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
    </script>
