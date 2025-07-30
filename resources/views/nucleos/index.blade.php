@extends('layout.layout2')

@section('contenido')
    <!-- Content -->
	<div class="container pb-5">
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-8 col-xl-6 text-center">
				<img class="img-fluid mb-5" src="{{ asset('assets/images/test7.png') }}" width="500" id="test7">
				<h4 class="bebas">Núcleos y Programas</h4>
				<p class="text-start">La Facultad de Ciencias Sociales (FACSO) de la Universidad de Chile impulsa una política de asociatividad mediante la cual sus académicas y académicos conforman espacios de investigación enfocados en la discusión conceptual, en el desarrollo del conocimiento en diversas áreas temáticas y disciplinares y en la generación de incidencia pública a partir de la ideación y desarrollo de propuestas innovadoras para el abordaje de fenómenos y problemáticas sociales.</p>
				<p class="text-start">Actualmente, nuestra Facultad cuenta con 34 núcleos y programas que trabajan de manera colaborativa, compartiendo recursos y aprendizajes para avanzar en objetivos comunes, bajo un espíritu de colaboración y de asociatividad en la producción de conocimiento.</p>
			</div>
		</div>
	</div>
	<!-- Listado de Nucleos -->
	<div class="section">
		<div class="container py-5">
			<div class="row">
				@foreach($nucleos as $nucleo)
				<div class="col-md-6 col-xl-4 mb-5">
					<div class="z-depth-1 grey lighten-2 p-3 ficha-nucleos">
						<p class="elegant-color-dark marca-nucleos">{{ $nucleo->tipo }}</p>
						<p class="tx-chico b600">@if ($nucleo->area != 'Facultad') Departamento de @endif {{ $nucleo->area }}</p>
						<p class="b600 mb-0">{{ $nucleo->nombre}}</p>
						<p>Coordinador(a): @if($nucleo->id_investigador!=0) <a tabindex="0" type="button" class="link-line link-simple" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="Ficha Investigador" href="../investigadores-ficha-{{$nucleo->id_investigador}}">{{ $nucleo->coordinador }}</a>@else {{ $nucleo->coordinador }}  @endif</p>
						<a class="btn btn-azul @if($nucleo->link==NULL) disabled @endif" @if($nucleo->link==NULL) disabled @else href="{{ $nucleo->link}}" @endif target="_blank">Ver más<i class="fal fa-external-link fa-lg ms-2"></i></a>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- End Content -->
@endsection