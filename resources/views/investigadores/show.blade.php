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
		<!-- Proyectos asociados -->
		@if (count($proyectos)>0)
		<div class="row">
			<div class="col-12">
				<h5 class="bebas">Proyectos asociados:</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
                <table id="cargarResultados"
                       data-classes="table table-sm dt-responsive nowrap"
                       style="color: black;"
                       data-toolbar="#toolbar"
                       data-search="true"
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
                       data-page-size="5"
                       data-show-footer="false"
                       data-filter-control="true"
                       data-url=""
                >
                    <thead>
                    <tr class="text-center">
                        <th data-field="" data-formatter="resultado" style="display: none;">Resultado</th>
                    </tr>
                    </thead>
                </table>
				<div id="carouselProyectosInvestigador" class="carousel slide" data-bs-ride="false" data-bs-interval="false" data-bs-touch="true" style="display: none;">
					<div class="carousel-inner">
						<div class="carousel-item active container-fluid px-0">
							<div class="row justify-content-between border-bottom my-3">
								@foreach ($proyectos as $pro)
								<div class="col-lg-8 pb-2">
									<a href="../../ficha/proyecto/{{ $pro->id }}" class="mb-0 b600 link-line link-simple">{{ $pro->titulo }}</a>
									<p class="mb-0"><a href="../../investigadores-ficha-{{ $investigador->id }}" class="link-simple link-line">{{ $investigador->funcionario }}</a></p>
									<p class="mb-0">{{ $pro->fecha_inicio }} - {{ $pro->fecha_finalizacion}}</p>
								</div>
								<div class="col-lg-4 pt-lg-4 pb-4">
									<p class="mb-0">Proyecto de investigación<i class="far fa-file-search fa-lg ms-2 azul"></i></p>
								</div>
								@endforeach
							</div>
						</div>
					</div>
					{{ $proyectos->links('layout.pagination') }}
				</div>
			</div>
		</div>
		@endif
		<!-- End Proyectos Asociados -->
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

        function initTable() {
            let data = {!! $pro_final !!};
            $tableresultados.bootstrapTable({data: data});
        }
        function resultado(value, row, index){
            return [
                '<div class="row justify-content-between">'+
                '<div class="col-lg-8 pb-2">' +
                '<a href="../../ficha/proyecto/'+ row.id +'" class="mb-0 b600 link-line link-simple">'+ row.titulo +'</a>' +
                '<p class="mb-0" style="display:none;"><a href="../../investigadores-ficha-{{ $investigador->id }}" class="link-simple link-line">{{ $investigador->funcionario }}</a></p>' +
                '<p class="mb-0">'+ row.fecha_inicio +' - '+ row.fecha_finalizacion +'</p>' +
                '</div>' +
                '<div class="col-lg-4 pt-lg-4 pb-4">' +
                '<p class="mb-0">Proyecto de investigación<i class="far fa-file-search fa-lg ms-2 azul"></i></p>'+
                '</div>'+
                '</div>'
            ].join('');
        }
    </script>
@endpush
