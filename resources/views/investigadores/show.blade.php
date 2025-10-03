@extends('layout.layout2')
@section('contenido')
    <style>
        .fixed-table-body{
            overflow-x: hidden !important;
        }
        .pagination-detail {
            display: none !important;
        }
    </style>
	<!--Content-->
	<div class="container pb-5">
		<div class="row justify-content-center">
			<div class="col-lg-9 text-center">
				<img class="img-fluid" src="{{ asset('assets/images/grafica4.png') }}" width="700" id="test4">
			</div>
		</div>
		<div class="row justify-content-end pb-5">
			<div class="col-12 text-end">
				<p class="mb-0">@if($investigador->sexo=='Masculino') Investigador @else Investigadora @endif <i class="far fa-user fa-lg ms-2 azul"></i></p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-xl-4 text-center mb-5">
				@if ($investigador->foto!=NULL)
					@php
					$imginv = $investigador->foto;
					@endphp
				@else
					@php
					$imginv = 'images/SinFoto.png';
					@endphp
				@endif
				<img class="img-fluid shadow mb-4" src="{{ asset('assets/').'/'.$imginv }}">
				@if ($investigador->video!=NULL)
					@php
					$ytb = str_replace('https://www.youtube.com/watch?v=','',$investigador->video);
					@endphp
					<a class="btn bg-rosa" data-bs-toggle="modal" data-bs-target="#modalVideo" data-videonumber="{{$ytb}}">Ver video<i class="fas fa-play-circle fa-lg ms-2"></i></a>
				@endif
			</div>
			<div class="col-lg-6 col-xl-8 ps-lg-5 mb-4">
				<p class="mb-0">@if($investigador->sexo=='Masculino') Investigador @else Investigadora @endif</p>
				<h5 class="mb-3 b600">{{ $investigador->funcionario }}</h5>
				@if ($investigador->id_orcid != NULL)
				<p class="mb-0">ORCID:</p>
				<p class="b600"><a href="https://orcid.org/{{ $investigador->id_orcid }}" target="_new" class="link-simple link-line">{{$investigador->id_orcid}}</a></p>
				@endif
				@if ($investigador->reparticion != NULL)
				<p class="mb-0">Departamento:</p>
				<p class="b600">{{ $investigador->reparticion}}</p>
				@endif
				@if ($investigador->email_institucional != NULL)
				<p class="mb-0">Correo electrónico:</p>
				<p class="b600"><a href="mailto:{{$investigador->email_institucional}}" target="_new" class="link-simple link-line">{{$investigador->email_institucional}}</a></p>
				@endif
				@if ($investigador->area_1 != NULL || $investigador->area_2 != NULL || $investigador->area_3 != NULL)
				<p class="mb-0">Líneas de investigación</p>
				<p class="b600">
				@if ($investigador->area_1 != NULL) {{$investigador->area_1}} @endif
				@if ($investigador->area_2 != NULL)	| {{$investigador->area_2}} @endif
				@if ($investigador->area_3 != NULL) | {{$investigador->area_3}} @endif</p>
				@endif
				@if ($investigador->orcid != NULL)
				<p class="mb-0">ORCID:</p>
				<p class="b600"><a href="https://orcid.org/{{$investigador->id_orcid}}" target="_blank" class="link-simple link-line">https://orcid.org/{{$investigador->id_orcid}}</a></p>
				@endif
				@if ($nucleos->nombre_1 != NULL)
				<p class="mb-0">Asociatividad FACSO:</p>
				<p class="b600">
					@if ($nucleos->link_1 != NULL)
						<a href="{{ $nucleos->link_1}}" target="_blank" class="link-simple link-line">{{$nucleos->nombre_1}}</a> - {{$investigador->rol_1}}
					@else
						{{$nucleos->nombre_1}} - {{$investigador->rol_1}}
					@endif
				</p>
				@endif
				@if ($nucleos->nombre_2 != NULL)
				<p class="mb-0">Asociatividad FACSO:</p>
				<p class="b600">
					@if ($nucleos->link_2 != NULL)
						<a href="{{ $nucleos->link_2}}" target="_blank" class="link-simple link-line">{{$nucleos->nombre_2}}</a> - {{$investigador->rol_2}}
					@else
						{{$nucleos->nombre_2}} - {{$investigador->rol_2}}
					@endif</p>
				@endif
				@if ($nucleos->nombre_3 != NULL)
				<p class="mb-0">Asociatividad FACSO:</p>
				<p class="b600">
					@if ($nucleos->link_3 != NULL)
						<a href="{{ $nucleos->link_3}}" target="_blank" class="link-simple link-line">{{ $nucleos->nombre_3 }}</a> - {{ $investigador->rol_3 }}
					@else
						{{ $nucleos->nombre_3 }} - {{ $investigador->rol_3 }}
					@endif</p>
				@endif
			</div>
		</div>
		<!-- Acordeón de Proyectos, Publicaciones y Recursos -->
		<div class="row">
			<div class="col-12">
				<div class="accordion" id="accordionExample">
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingZero">
							<button class="accordion-button bebas collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseZero" aria-expanded="false" aria-controls="collapseZero">
								<h5 class="mb-0">Proyectos</h5>
							</button>
						</h2>
						<div id="collapseZero" class="accordion-collapse collapse" aria-labelledby="headingZero" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<table id="cargarResultados"
								       style="color: black;"
								       data-classes="table table-sm dt-responsive nowrap"
								       data-search="true"
								       data-pagination="true"
								       data-page-size="5"
								       data-page-list="[10, 25, 50, 100, All]"
								       data-show-header="false">
									<thead style="display: none;">
										<tr class="text-center">
											<th data-field="" data-formatter="resultado">Resultado</th>
										</tr>
									</thead>
									<tbody>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="accordion-item">
						<h2 class="accordion-header" id="headingOne">
							<button class="accordion-button bebas collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
								<h5 class="mb-0">Publicaciones</h5>
							</button>
						</h2>
						<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<table id="cargarResultados2"
								       style="color: black;"
								       data-classes="table table-sm dt-responsive nowrap"
								       data-search="true"
								       data-pagination="true"
								       data-page-size="5"
								       data-page-list="[10, 25, 50, 100, All]"
								       data-show-header="false">
									<thead style="display: none;">
										<tr class="text-center">
											<th data-field="" data-formatter="resultado2">Resultado</th>
										</tr>
									</thead>
									<tbody>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="accordion-item">
						<h2 class="accordion-header" id="headingTwo">
							<button class="accordion-button bebas collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								<h5 class="mb-0">Recursos</h5>
							</button>
						</h2>
						<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<table id="cargarResultados3"
								       style="color: black;"
								       data-classes="table table-sm dt-responsive nowrap"
								       data-search="true"
								       data-pagination="true"
								       data-page-size="5"
								       data-page-list="[10, 25, 50, 100, All]"
								       data-show-header="false">
									<thead style="display: none;">
										<tr class="text-center">
											<th data-field="" data-formatter="resultado3">Resultado</th>
										</tr>
									</thead>
									<tbody>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Acordeón -->
	</div>
	<!-- Video Modal -->
	<div class="modal fade" id="modalVideo" tabindex="-1" role="dialog" aria-labelledby="modalVideo" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
	 <div class="modal-content">
	   <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
		 <span aria-hidden="true">&times;</span>
	   </button>
	   <div class="modal-body mb-0 p-0 black">
		 <div class="embed-responsive embed-responsive-16by9" id="vm-player">
		   <iframe class="embed-responsive-item" src="" allow="fullscreen" allowfullscreen></iframe>
		 </div>
	   </div>
	 </div>
	</div>
	</div>
	<!--Modal: modalConfirm-->
	<div class="modal fade" id="modalSuscripcion" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-notify modal-investiga" role="document">
	 <div class="modal-content">
	   <button type="button" class="close z-depth-1" data-bs-dismiss="modal" aria-label="Close">
		 <span aria-hidden="true">&times;</span>
	   </button>
	   <div class="modal-body">
		 <div class="text-center">
		   <i class="fas fa-check fa-4x mb-3 animated rotateIn azul"></i>
		   <p>Gracias por suscribirse a nuestro Newsletter.</p>
		 </div>
	   </div>
	   <div class="modal-footer justify-content-center">
		 <a type="button" class="btn bg-rosa waves-effect" data-bs-dismiss="modal">Cerrar<i class="fal fa-times-circle ms-2"></i></a>
	   </div>
	 </div>
	</div>
	</div>
	@endsection

@push('js')
    <script type="text/javascript">
        let $tableresultados = $('#cargarResultados');
        initTable();

		let $tableresultados2 = $('#cargarResultados2');
		initTable2();

		let $tableresultados3 = $('#cargarResultados3');
		initTable3();

        function initTable() {
            let data = {!! $pro_final !!};
            $tableresultados.bootstrapTable({data: data});
        }

        function initTable2() {
            let data = {!! $pub_final ?? '[]' !!};
            $tableresultados2.bootstrapTable({data: data});
        }

        function initTable3() {
            let data = {!! $rec_final ?? '[]' !!};
            $tableresultados3.bootstrapTable({data: data});
        }
		function resultado(value, row, index) {
        console.log('Datos de la fila (Proyectos):', row);
        return [
        '<div class="row justify-content-between">' +
        '<div class="col-lg-8 pb-2">' +
        '<a href="../../ficha/proyecto/' + row.id + '" class="mb-0 b600 link-line link-simple">' + row.titulo + '</a>' +
        '<p class="mb-0" style="display:none;"><a href="../../investigadores-ficha-8" class="link-simple link-line">Nicolás Angelcos</a></p>' +
        '<p class="mb-0">' + row.fecha_inicio + ' - ' + row.fecha_finalizacion + '</p>' +
        '</div>' +
        '<div class="col-lg-4 pt-lg-4 pb-4">' +
        '<p class="mb-0">Proyecto de investigación<i class="far fa-file-search fa-lg ms-2 azul"></i></p>' +
        '</div>' +
        '</div>'
        ].join('');
    }
    function resultado2(value, row, index) {
        console.log('Datos de la fila (Publicaciones):', row);
        if (row.fecha_publicacion == '') {
            publicar = '';
        } else {
            publicar = 'Fecha de publicación: <b>' + row.fecha_publicacion + '</b>';
        }

        return [
        '<div class="row justify-content-between">' +
        '<div class="col-lg-8 pb-2">' +
        '<p class="mb-0 b600"><a class="link-simple link-line" href="/ficha/publicacion/' + row.id_publicacion + '" >' + row.titulo + '</a>' +
        '<p class="mb-0"><a href="../../investigadores-ficha-8" class="link-simple link-line">{{ $investigador->funcionario }}</a></p>' +
        '<p class="mb-0">' + publicar + '</p>' +
        '</div>' +
        '</div>'
        ].join('');
    }
    function resultado3(value, row, index) {
        console.log('Datos de la fila (Recursos):', row);
        return [
        '<div class="row justify-content-between">' +
        '<div class="col-12 pb-2">' +
        '<p class="mb-0 b600"><a class="link-simple link-line" href="/ficha/recursos/' + row.id_documento + '" >' + row.titulo + '</a>' +
        '<p class="mb-0"><a href="../../investigadores-ficha-8" class="link-simple link-line">Nicolás Angelcos</a></p>' +
        '<p class="mb-0">Año: <b>' + row.anio_publicacion + '</b></p>' +
        '<p class="mb-0">Tipo de Recurso: <b>' + row.tipo_documento + '</b></p>' +
        '<p class="mb-0">Proyecto Asociado: <a href="../../ficha/proyecto/' + row.id_proyecto + '" class="mb-0 b600 link-line link-simple">' + row.protitulo + '</a></p>' +
        '</div>' +
        '</div>'
        ].join('');
    }
    </script>
@endpush
