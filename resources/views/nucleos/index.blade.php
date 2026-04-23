@extends('layout.layout2')

@section('contenido')
    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-md-18 col-lg-16 col-xl-14 text-center">
                <img class="img-fluid mb-5" src="{{ asset('assets/images/test7.png') }}" width="500" id="test7">
                <h4 class="bebas">Centros UV</h4>
                <p style="text-align: justify; text-align-last: left;">
                La creación de Centros de Investigación (CIDI) al interior de la Universidad de Valparaíso, tuvo como objetivo fundamental el estímulo a la investigación en todas las áreas del saber, a través de la articulación de una masa crítica de investigadores, cuya actividad impacte el desarrollo de la Universidad, de la región y del país.
                </p>
                
                <p style="text-align: justify; text-align-last: left;">
                Es propósito de la Dirección de Investigación es que los Centros, en el mediano plazo, sean capaces de captar recursos de fondos concursables nacionales e internacionales y logren una productividad científica y tecnológica de excelencia, alineándose con los objetivos institucionales.
                </p>
            </div>
        </div>
    </div>
    
    <style>
        .pro-card {
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(0,0,0,0.05);
            background-color: #fff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        .pro-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 32px rgba(0,0,0,0.12);
        }
        .pro-card-img-wrapper {
            width: 100%;
            height: 250px;
            overflow: hidden;
        }
        .pro-card-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .pro-card:hover .pro-card-img {
            transform: scale(1.05);
        }
        .pro-card-body {
            background-color: #fff;
            border-top: 3px solid #f1f3f5;
            position: relative;
            z-index: 2;
        }
        .pro-card-title {
            font-size: 0.95rem;
            font-weight: 600;
            color: #343a40;
            line-height: 1.5;
            margin: 0;
            transition: color 0.2s ease;
        }
        .pro-card:hover .pro-card-title {
            color: #0056b3; /* Opcional: Cambia el texto a un color institucional al hacer hover */
        }
        .pro-card-link {
            text-decoration: none !important;
            color: inherit;
        }
    </style>

    <div class="section">
        <div class="container py-5">
            <div class="row d-flex align-items-stretch justify-content-center">
                
                <div class="col-lg-6 col-xl-4 mb-4">
                    <div class="pro-card text-center redcolab h-100 d-flex flex-column">
                        <a href="https://centromemoriaddhh.uv.cl" class="pro-card-link d-flex flex-column h-100" target="_blank">
                            <div class="pro-card-img-wrapper">
                                <img class="img-fluid d-block pro-card-img" src="{{ asset('assets/images/centrosUv/cpmd.jpg') }}" alt="Centro CPMDH">
                            </div>
                            <div class="py-3 px-4 m-0 mt-auto d-flex flex-column justify-content-center pro-card-body" style="min-height: 120px;">
                                <h5 class="pro-card-title">Centro de Estudios Interdisciplinarios sobre Cultura Política, Memoria y Derechos Humanos (CEI-CPMDH)</h5>   
                            </div>
                        </a>                
                    </div>
                </div>

                <div class="col-lg-6 col-xl-4 mb-4">
                    <div class="pro-card text-center redcolab h-100 d-flex flex-column">
                        <a href="https://cidcl.uv.cl/nosotros" class="pro-card-link d-flex flex-column h-100" target="_blank">
                            <div class="pro-card-img-wrapper">
                                <img class="img-fluid d-block pro-card-img" src="{{ asset('assets/images/centrosUv/centro-cidcl-700x438.jpg') }}" alt="Centro CIDCL">
                            </div>
                            <div class="py-3 px-4 m-0 mt-auto d-flex flex-column justify-content-center pro-card-body" style="min-height: 120px;">
                                <h5 class="pro-card-title">Centro de Investigación del Desarrollo en Cognición y Lenguaje (CIDCL)</h5>   
                            </div>
                        </a>                
                    </div>
                </div>

                <div class="col-lg-6 col-xl-4 mb-4">
                    <div class="pro-card text-center redcolab h-100 d-flex flex-column">
                        <a href="https://cinvit.uv.cl" class="pro-card-link d-flex flex-column h-100" target="_blank">
                            <div class="pro-card-img-wrapper">
                                <img class="img-fluid d-block pro-card-img" src="{{ asset('assets/images/centrosUv/centro-cinvit-700x438.jpg') }}" alt="Centro CINVIT">
                            </div>
                            <div class="py-3 px-4 m-0 mt-auto d-flex flex-column justify-content-center pro-card-body" style="min-height: 120px;">
                                <h5 class="pro-card-title">Centro de Investigación de Vulnerabilidades e Informalidades Territoriales (CINVIT)</h5>   
                            </div>
                        </a>                
                    </div>
                </div>

                <div class="col-lg-6 col-xl-4 mb-4">
                    <div class="pro-card text-center redcolab h-100 d-flex flex-column">
                        <a href="https://cia.uv.cl/" class="pro-card-link d-flex flex-column h-100" target="_blank">
                            <div class="pro-card-img-wrapper">
                                <img class="img-fluid d-block pro-card-img" src="{{ asset('assets/images/centrosUv/ciauv-700x438.jpg') }}" alt="Centro CIA-UV">
                            </div>
                            <div class="py-3 px-4 m-0 mt-auto d-flex flex-column justify-content-center pro-card-body" style="min-height: 120px;">
                                <h5 class="pro-card-title">Centro de Investigaciones Artísticas<br><span style="font-weight: 400; font-size: 0.85em;">(CIA-UV)</span></h5>
                            </div>
                        </a>                
                    </div>
                </div>

                <div class="col-lg-6 col-xl-4 mb-4">
                    <div class="pro-card text-center redcolab h-100 d-flex flex-column">
                        <a href="https://ceitesys.uv.cl" class="pro-card-link d-flex flex-column h-100" target="_blank">
                            <div class="pro-card-img-wrapper">
                                <img class="img-fluid d-block pro-card-img" src="{{ asset('assets/images/centrosUv/logo-cei-tesys-700x438.png') }}" alt="Centro CEI-TESYS">
                            </div>
                            <div class="py-3 px-4 m-0 mt-auto d-flex flex-column justify-content-center pro-card-body" style="min-height: 120px;">
                                <h5 class="pro-card-title">Centro de Estudios Interdisciplinarios en Teoría Social y Subjetividad (CEI-TESYS)</h5>   
                            </div>
                        </a>                                
                    </div>
                </div>

                <div class="col-lg-6 col-xl-4 mb-4">
                    <div class="pro-card text-center redcolab h-100 d-flex flex-column">
                        <a href="https://ciesaluv.cl" class="pro-card-link d-flex flex-column h-100" target="_blank">
                            <div class="pro-card-img-wrapper">
                                <img class="img-fluid d-block pro-card-img" src="{{ asset('assets/images/centrosUv/ciesal.png') }}" alt="Centro CIESAL">
                            </div>
                            <div class="py-3 px-4 m-0 mt-auto d-flex flex-column justify-content-center pro-card-body" style="min-height: 120px;">
                                <h5 class="pro-card-title">Centro Interdisciplinario de Estudios en Salud (CIESAL)</h5>   
                            </div>
                        </a>                
                    </div>
                </div>

                <div class="col-lg-6 col-xl-4 mb-4">
                    <div class="pro-card text-center redcolab h-100 d-flex flex-column">
                        <a href="https://c-estres.cl" class="pro-card-link d-flex flex-column h-100" target="_blank">
                            <div class="pro-card-img-wrapper">
                                <img class="img-fluid d-block pro-card-img" src="{{ asset('assets/images/centrosUv/c-estres.jpg') }}" alt="Centro C-ESTRES">
                            </div>
                            <div class="py-3 px-4 m-0 mt-auto d-flex flex-column justify-content-center pro-card-body" style="min-height: 120px;">
                                <h5 class="pro-card-title">Centro de Estudios Traslacionales en Estrés y Salud Mental (C - ESTRES)</h5>   
                            </div>
                        </a>                
                    </div>
                </div>

                </div>
        </div>
    </div>
    @endsection