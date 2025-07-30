@extends('layout.layout2')
@section('contenido')
    <!--Content-->
    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center">
                <img class="img-fluid" src="{{ asset('assets/images/test4.png') }}" width="700">
            </div>
        </div>
        <div class="row justify-content-end pb-5">
            <div class="col-12 text-end">
                <p class="mb-0">Proyecto de investigación<i class="far fa-file-search fa-lg ms-2 azul"></i></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 pb-4">
                <p class="mb-0 bebas">Proyecto</p>
                <h5 class="mb-4 b600">{{ $proyecto->titulo }}</h5>
            </div>
            <div class="col-xl-8 mb-4">
                <p class="b600 mb-0">Descripción:</p>
                <p>{{ $proyecto->descripcion }}</p>
            </div>
            <div class="col-lg-6 col-xl-4 ps-lg-5 mb-4">
                <div class="d-grid gap-2 mb-4">
                    @if($proyecto->url_proyecto != '')
                        <a class="btn bg-rosa" href="{{ $proyecto->url_proyecto }}" target="_blank">Enlace al proyecto<i class="fal fa-link fa-lg ms-2"></i></a>
                    @else
                        <button class="btn bg-rosa" href="{{ $proyecto->url_proyecto }}" target="_blank" disabled>Enlace al proyecto<i class="fal fa-link fa-lg ms-2"></i></button>
                    @endif
                </div>
                <p class="mb-0">Investigador/a responsable:</p>
                <p class="b600"><a class="link-simple link-line" href="investigadores-ficha-{{ $proyecto->id_investigador }}">{{ $proyecto->nombre_investigador }}</a></p>
                <p class="mb-0">Fecha de inicio:</p>
                <p class="b600">{{ $proyecto->fecha_inicio }}</p>
                <p class="mb-0">Fecha de finalización:</p>
                <p class="b600">{{ $proyecto->fecha_finalizacion }}</p>
                <p class="mb-0">Institución patrocinante:</p>
                <p class="b600">Universidad de Chile</p>
                <p class="mb-0">Tipo de financiamiento:</p>
                <p class="b600">{{ $proyecto->tipo_financiamiento }}</p>
                <p class="mb-0">Nombre de la agencia de financiamiento:</p>
                <p class="b600 mb-0">{{ $proyecto->agencia_financiamiento }}</p>
                <p class="mb-0">Ciudad</p>
                <p class="b600">Santiago, Chile</p>
            </div>
        </div>
    </div>
    <div class="container pb-5" id="asociados-proyecto">
        <div class="row">
            <div class="col-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button bebas collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h5 class="mb-0">Publicaciones asociadas</h5>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                @foreach($publicaciones as $publicacion)
                                    <div class="border-bottom py-3">
                                        <p class="mb-0 b600"><a class="link-simple link-line" target="_blank" href="{{ $publicacion->url_documento }}">{{ $publicacion->titulo }}</a></p>
                                        <p class="mb-0"><a href="investigadores-ficha-{{ $proyecto->id_investigador }}" class="link-simple link-line">{{ $proyecto->nombre_investigador }}</a></p>
                                        <p class="mb-0">{{ $publicacion->fecha_publicacion }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button bebas collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h5 class="mb-0">Recursos asociados</h5>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            @foreach($recursos as $recurso)
                                <div class="accordion-body">
                                    <div class="border-bottom py-3">
                                        <p class="mb-0 b600"><a class="link-simple link-line" href="ficha-recurso.html">{{ $recurso->titulo }}</a></p>
                                        <p class="mb-0"><a href="ficha-investigador.html" class="link-simple link-line">{{ $proyecto->nombre_investigador }}</a></p>
                                        <p class="mb-0">{{ $recurso->anio_publicacion }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
