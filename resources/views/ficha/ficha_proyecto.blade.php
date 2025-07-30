@extends('layout.layout2')
@section('contenido')
    <!--Content-->
    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center">
                <img class="img-fluid" src="{{ asset('assets/images/test4.png') }}" width="700" id="test4">
            </div>
        </div>
        <div class="row justify-content-end pb-5">
            <div class="col-12 text-end">
                <p class="mb-0">Proyecto de investigación<i class="far fa-file-search fa-lg ms-2 azul"></i></p>
            </div>
        </div>
        <div class="row">
			<div class="col-12 mb-4">
				<p class="mb-0 bebas">Proyecto</p>
				<h5 class="mb-3 b600">{{ $proyect->titulo }}</h5>
			</div>
			@if ($proyect->descripcion != NULL)
				<div class="col-xl-8 mb-4">
					<p class="b600 mb-0">Descripción:</p>
					<p>{{ $proyect->descripcion }}</p>
				</div>
			@endif
			<div class="col-lg-6 col-xl-4 ps-lg-5 mb-4">
				@if($proyect->url_proyecto != NULL)
					<div class="d-grid gap-2 mb-4">
						<a class="btn bg-rosa waves-effect waves-light" href="{{$proyect->url_proyecto}}" target="_blank">Enlace al proyecto<i class="fal fa-link fa-lg ms-2"></i></a>
					</div>
				@endif
				@if($proyect->sexo == 'Femenino')
					@if($proyect->ir == 1)
					<p class="mb-0">Investigadora responsable:</p>
					@else
					<p class="mb-0">Co Investigadora:</p>
					@endif
				@else
					@if($proyect->ir == 1)
					<p class="mb-0">Investigador responsable:</p>
					@else
					<p class="mb-0">Co Investigador:</p>
					@endif
				@endif
				<p class="b600"><a class="link-simple link-line" href="../../investigadores-ficha-{{$proyect->id_inv}}">{{ $proyect->funcionario }}</a></p>
				@if($proyect->fecha_inicio != NULL)
					<p class="mb-0">Fecha de Inicio:</p>
					<p class="b600">{{ $proyect->fecha_inicio }}</p>
				@endif
				@if($proyect->fecha_finalizacion != NULL)
					<p class="mb-0">Fecha de Finalización:</p>
					<p class="b600">{{ $proyect->fecha_finalizacion }}</p>
				@endif
				@if($proyect->nombre_institucion != NULL)
					<p class="mb-0">Institución patrocinante:</p>
					<p class="b600">{{ $proyect->nombre_institucion }}</p>
				@endif
				@if($proyect->agencia_financiamiento != NULL)
					<p class="mb-0">Nombre de la agencia de financiamiento:</p>
					<p class="b600">{{ $proyect->agencia_financiamiento}}</p>
				@endif
			</div>
        </div>
    </div>
	<div class="container pb-5" id="asociados-proyecto">
		<div class="row">
			<div class="col-12">
				<div class="accordion" id="accordionExample">
					@if (count($publicaciones) > 0)
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingOne">
							<button class="accordion-button bebas collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
								<h5 class="mb-0">Publicaciones asociadas</h5>
							</button>
						</h2>
						<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
							<div class="accordion-body">
								@foreach ($publicaciones as $pub)
								<div class="border-bottom py-3">
									<p class="mb-0 b600"><a class="link-simple link-line" href="../publicacion/{{ $pub->id_publicacion }}">{{ $pub->titulo }}</a></p>
									<p class="mb-0"><a href="../../investigadores-ficha-{{ $pub->id_investigador }}" class="link-simple link-line">{{ $pub->funcionario }}</a></p>
									<p class="mb-0">{{ $pub->fecha_publicacion }}</p>
								</div>
								@endforeach 
							</div>
						</div>
					</div>
					@endif
					@if (count($documentos) > 0)
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingTwo">
							<button class="accordion-button bebas collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								<h5 class="mb-0">Recursos asociados</h5>
							</button>
						</h2>
						<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								@foreach ($documentos as $doc)
									<div class="border-bottom py-3">
										<p class="mb-0 b600"><a class="link-simple link-line" href="../recursos/{{ $doc->id_documento }}">{{ $doc->titulo }}</a></p>
										<p class="mb-0"><a href="../../investigadores-ficha-{{ $doc->id_investigador }}" class="link-simple link-line">{{ $doc->funcionario }}</a></p>
										<p class="mb-0">{{ $doc->anio_publicacion }}</p>
									</div>
								@endforeach
							</div>
						</div>
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>
@endsection
