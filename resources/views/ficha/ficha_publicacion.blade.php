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
                <p class="mb-0">Publicación<i class="fal fa-newspaper fa-lg ms-2 azul"></i></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-4">
                <p class="mb-0">Título de la Publicación</p>
                <h5 class="mb-3 b600">{{ $publicacion->titulo }}</h5>
                <p class="mb-0">Autor:</p>
                <p class="b600"><a class="link-simple link-line" href="../../investigadores-ficha-{{ $investigador->id_investigador}}">{{ $investigador->funcionario }}</a></p>
                <!--
				<p class="mb-0">Tipo de publicación:</p>
                <p class="b600">Artículo de revista / Journal MAD</p>
                -->
				@if ($publicacion->titulo_traducido != NULL)
				<p class="mb-0">Título traducido:</p>
                <p class="b600">{{ $publicacion->titulo_traducido }}</p>
                @endif
				@if ($publicacion->fecha_publicacion != NULL)
				<p class="mb-0">Fecha de publicación:</p>
                <p class="b600">{{ $publicacion->fecha_publicacion }}</p>
                @endif
				@if ($publicacion->doi != NULL)
				<p class="mb-0">Identificador de la publicación:</p>
                <p class="b600">DOI: {{ $publicacion->doi }}</p>
				@endif
				@if ($publicacion['put-code'] != NULL)
                <p class="mb-0">Identificación:</p>
                <p class="b600">{{ $publicacion['put-code'] }}</p>
				@endif
				@if ($publicacion->url_documento != NULL)
                <p class="mb-0">Enlace a la publicación:</p>
                <p class="b600"><a href="{{ $publicacion->url_documento }}" target="_blank" class="link-simple link-line">{{ $publicacion->url_documento }}</a></p>
                @endif
				<!--
				<p class="mb-0">País de publicación</p>
                <p class="b600">Chile</p>
				-->
            </div>
        </div>
    </div>
@endsection
