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
                <p class="mb-0">Recursos<i class="far fa-file fa-lg ms-2 azul"></i></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-4">
                <p class="mb-0">Título de la Publicación</p>
                <h5 class="mb-3 b600">{{ $documentos->titulo }}</h5>
				<p class="mb-0">Autor:</p>
                <p class="b600"><a class="link-simple link-line" href="../../investigadores-ficha-{{ $documentos->id_investigador}}">{{ $documentos->funcionario }}</a></p>
            </div>
        </div>
		<div class="row">
			<div class="col-8 mb-4">
				<p class="mb-0">Tipo documento:</p>
                <p class="b600">{{ $tipo }}</p>
				@if ($documentos->doi != NULL)
				<p class="mb-0">Doi:</p>
                <p class="b600">{{ $documentos->doi }}</p>
				@endif
				@if ($documentos->anio_publicacion != NULL)
				<p class="mb-0">Año Publicación:</p>
                <p class="b600">{{ $documentos->anio_publicacion }}</p>
				@endif
				@if ($documentos->cita != NULL)
				<p class="mb-0">Como citar (APA):</p>
				<p class="b600">{{ $documentos->cita }}</p>
				@endif
			</div>
			<div class="col-4 mb-4">
				@if($documentos->path != NULL)
					<div class="d-grid gap-2 mb-4">
						<a class="btn bg-rosa waves-effect waves-light" href="https://investiga-facso.uchile.cl/repositorio/{{$documentos->id_documento}}/download" target="_blank">Descarga el Recurso Aqui<i class="far fa-arrow-down fa-lg ms-2"></i></a>
					</div>
				@endif
			</div>
		</div>
    </div>
@endsection
