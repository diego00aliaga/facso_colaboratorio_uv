@extends('layout.layout2')

@section('contenido')

<style>
    .jornadas-container {
        padding: 2rem 0;
    }

    /* Fila principal de cada jornada */
    .jornada-row {
        display: flex;
        align-items: center;
        margin-bottom: 5rem;
        gap: 4rem;
        flex-wrap: wrap; /* Para móviles */
    }

    /* Invierte el orden en las filas pares (2, 4, 6...) */
    .jornada-row:nth-child(even) {
        flex-direction: row-reverse;
    }

    /* Contenedor del Afiche/Flyer */
    .jornada-img-container {
        flex: 1.5;
        min-width: 500px;
        max-width: 450px;
        height: 500px;
        display: flex;
        justify-content: center;
        
    }

    .jornada-flyer {

        border-radius: 8px;
        transition: transform 0.3s ease;
        /* Evita el recorte/zoom */
        object-fit: contain; 
        box-shadow: 0 15px 35px rgba(0,0,0,0.15);

    }

    .jornada-row:hover .jornada-flyer {
        transform: scale(1.02);
    }

    /* Contenedor de Texto */
    .jornada-text-container {
        flex: 1.2;
        min-width: 300px;
    }

    /* Alineación de texto para filas invertidas */
    .jornada-row:nth-child(even) .jornada-text-container {
        text-align: right;
    }

    .jornada-tag {
        background: #d9534f;
        color: white;
        padding: 5px 15px;
        font-size: 0.8rem;
        text-transform: uppercase;
        font-weight: bold;
        border-radius: 4px;
        margin-bottom: 1.5rem;
        display: inline-block;
    }


    .jornada-description {
        font-size: 1rem;
        color: #555;
        line-height: 1.6;
        margin-bottom: 2rem;
        text-align: justify;
    }

    /* Botón personalizado */
    .btn-noticia {
        display: inline-block;
        padding: 10px 25px;
        color: white !important;
        text-decoration: none;
        border-radius: 50px;
        font-weight: bold;
        transition: background 0.3s ease;
    }

    .btn-noticia:hover {
        background-color: #d9534f;
    }

    /* Ajustes para móviles */
    @media (max-width: 992px) {
        .jornada-row, .jornada-row:nth-child(even) {
            flex-direction: column;
            text-align: center !important;
            gap: 2rem;
        }
        .jornada-row:nth-child(even) .jornada-text-container {
            text-align: center;
        }
        .jornada-img-container {
            max-width: 100%;
        }
    }
</style>

<div class="container pb-5">
    <div class="row justify-content-center">
        <div class="col-md-18 col-lg-16 col-xl-14 text-center">
            <img class="img-fluid mb-5" src="{{ asset('assets/images/test7.png') }}" width="500">
            <!-- <h4 class="bebas" style="">Jornadas FACSO</h4> -->
        </div>
    </div>

    <div class="jornadas-container">
        
        <div class="jornada-row">
            <div class="jornada-img-container">
                <img src="{{ asset('assets/images/jornadas/flyer_1.jpg') }}" class="jornada-flyer" alt="Jornada 1">
            </div>
            <div class="jornada-text-container">
                <span class="jornada-tag">Jornada I</span>
                <h2 class="bebas">Investigación social desde el género y el feminismo</h2>
                <p class="jornada-description">
                Se trató de la primera jornada de investigación de la Facso y estuvo liderada por la coordinadora de investigación de la Facultad, Mónica Iglesias, junto a la secretaria de facultad y académica de la Escuela de Sociología, María Angélica Cruz. Se desarrolló durante dos días en las dependencias de la Escuela de Sociología, en subida El Litre.            </p>
                <a href="https://www.uv.cl/archivo-noticias-uv/13659-investigacion-social-desde-el-genero-y-el-feminismo-en-primeras-jornadas-facso-13659?highlight=WyJqb3JuYWRhcyIsImRlIiwiaW52ZXN0aWdhY2lcdTAwZjNuIiwiZmFjc28iXQ==" class="btn-noticia bg-azul">Leer Noticia Completa</a>
            </div>
        </div>

        <div class="jornada-row">
            <div class="jornada-img-container">
                <img src="{{ asset('assets/images/jornadas/flyer_2.jpg') }}" class="jornada-flyer" alt="Jornada 2">
            </div>
            <div class="jornada-text-container">
                <span class="jornada-tag">Jornada II</span>
                <h2 class="bebas">Segundas Jornadas de Investigación FACSO</h2>
                <p class="jornada-description">
                En la jornada se presentaron 6 proyectos a cargo de cinco académicas e investigadoras y dos académicos e investigadores, quienes se adjudicaron el Fondo Concursable de Investigación para Académico/a FACSO en sus versiones 2021 y 2022. Las ponencias estuvieron organizadas en dos mesas.
                </p>
                <a href="https://psicologia.uv.cl/noticias/36-2023/657-facso-uv-desarrolla-ii-jornadas-de-investigacion" class="btn-noticia bg-azul">Leer Noticia Completa</a>

            </div>
        </div>

        <div class="jornada-row">
            <div class="jornada-img-container">
                <img src="{{ asset('assets/images/jornadas/flyer_3.jpg') }}" class="jornada-flyer" alt="Jornada 3">
            </div>
            <div class="jornada-text-container">
                <span class="jornada-tag">Jornada III</span>
                <h2 class="bebas">Terceras Jornadas de Investigación</h2>
                <p class="jornada-description">
                En esta ocasión, expusieron sus proyectos de investigación quienes adjudicaron propuestas para las versiones 2023 y 2024, los doctores y doctoras Félix Aguirre, Escuela de Sociología; Fuad Hatibovic, Escuela de Psicología; Elena Salum, Escuela de Trabajo Social; Raúl Hozven, Escuela de Trabajo Social; Carlos Varas, Escuela de Psicología; María Angélica Cruz, Escuela de Sociología; Sofía Fernández, Escuela de Psicología, y Luis Henríquez, Escuela de Sociología
                </p>
                <a href="https://sociales.uv.cl/noticias/614-facultad-de-ciencias-sociales-desarrollo-terceras-jornadas-de-investigacion?highlight=WyJqb3JuYWRhcyIsImRlIiwiaW52ZXN0aWdhY2lcdTAwZjNuIl0=" class="btn-noticia bg-azul">Leer Noticia Completa</a>
            </div>
        </div>

    </div>
</div>
@endsection
