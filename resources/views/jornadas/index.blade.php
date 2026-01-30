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
    
    /* Carrusel de fotos */
    .jornada-carousel {
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
        border-radius: 8px;
    }
    
    .jornada-carousel img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: contain;
        opacity: 0;
        transition: opacity 0.6s ease-in-out;
    }
    
    .jornada-carousel img.active {
        opacity: 1;
    }
    
    .carousel-controls {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 10px;
        z-index: 10;
    }
    
    .carousel-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: rgba(255,255,255,0.5);
        cursor: pointer;
        transition: all 0.3s ease;
        border: 2px solid white;
    }
    
    .carousel-dot.active {
        background: white;
        transform: scale(1.2);
    }
    
    .carousel-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255,255,255,0.8);
        border: none;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        cursor: pointer;
        font-size: 1.2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        z-index: 10;
    }
    
    .carousel-arrow:hover {
        background: white;
        transform: translateY(-50%) scale(1.1);
    }
    
    .carousel-arrow.left {
        left: 15px;
    }
    
    .carousel-arrow.right {
        right: 15px;
    }

    /* Invierte el orden en las filas pares (2, 4, 6...) */
    .jornada-row:nth-child(even) {
        flex-direction: row-reverse;
    }

    /* Contenedor del Afiche/Flyer */
    .jornada-img-container {
        flex: 1.5;
        min-width: 550px;
        max-width: 500px ;
        height: 600px;
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
                <div class="jornada-carousel" id="carousel-1">
                    <!-- <button class="carousel-arrow left" onclick="changeSlide(1, -1)">‹</button>
                    <button class="carousel-arrow right" onclick="changeSlide(1, 1)">›</button> -->
                    <div class="carousel-controls" id="dots-1"></div>
                </div>
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
                <div class="jornada-carousel" id="carousel-2">
                    <!-- <button class="carousel-arrow left" onclick="changeSlide(2, -1)">‹</button>
                    <button class="carousel-arrow right" onclick="changeSlide(2, 1)">›</button> -->
                    <div class="carousel-controls mb-3" id="dots-2"></div>
                </div>
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
                <div class="jornada-carousel" id="carousel-3">
                    <!-- <button class="carousel-arrow left" onclick="changeSlide(3, -1)">‹</button>
                    <button class="carousel-arrow right" onclick="changeSlide(3, 1)">›</button> -->
                    <div class="carousel-controls" id="dots-3"></div>
                </div>
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

<script>
    // Arrays de fotos para cada jornada
    const jornadasPhotos = {
        1: [
            "{{ asset('assets/images/jornadas/flyer_jornada1.png') }}",
            "{{ asset('assets/images/jornadas/flyer_jornada1_2.png') }}",
            "{{ asset('assets/images/jornadas/flyer_jornada1_3.png') }}",
            "{{ asset('assets/images/jornadas/flyer_jornada1_4.png') }}",
            "{{ asset('assets/images/jornadas/flyer_jornada1_5.png') }}",
            "{{ asset('assets/images/jornadas/flyer_jornada1_6.png') }}",
            "{{ asset('assets/images/jornadas/flyer_jornada1_7.png') }}",
        ],
        2: [
            "{{ asset('assets/images/jornadas/flyer_1.jpg') }}",
            "{{ asset('assets/images/jornadas/flyer_2.jpg') }}",

        ],
        3: [
            "{{ asset('assets/images/jornadas/flyer_3.jpg') }}",
            "{{ asset('assets/images/jornadas/flyer_jornada3_2.png') }}",

        ]
    };
    
    let currentSlides = {
        1: 0,
        2: 0,
        3: 0
    };
    
    // Inicializar carruseles
    function initCarousels() {
        Object.keys(jornadasPhotos).forEach(jornadaId => {
            const carousel = document.getElementById(`carousel-${jornadaId}`);
            const dotsContainer = document.getElementById(`dots-${jornadaId}`);
            const photos = jornadasPhotos[jornadaId];
            
            // Obtener referencia a los botones antes de agregar imágenes
            const leftArrow = carousel.querySelector('.carousel-arrow.left');
            const rightArrow = carousel.querySelector('.carousel-arrow.right');
            const controls = carousel.querySelector('.carousel-controls');
            
            // Crear imágenes (agregándolas en orden correcto al final)
            photos.forEach((photo, index) => {
                const img = document.createElement('img');
                img.src = photo;
                img.alt = `Jornada ${jornadaId} - Foto ${index + 1}`;
                if (index === 0) img.classList.add('active');
                // Insertar antes de los controles
                carousel.insertBefore(img, leftArrow);
                
                // Crear dots
                const dot = document.createElement('span');
                dot.classList.add('carousel-dot');
                if (index === 0) dot.classList.add('active');
                dot.onclick = () => goToSlide(jornadaId, index);
                dotsContainer.appendChild(dot);
            });
        });
        
        // Auto-avanzar cada 5 segundos
        setInterval(() => {
            Object.keys(jornadasPhotos).forEach(jornadaId => {
                changeSlide(jornadaId, 1);
            });
        }, 5000);
    }
    
    function changeSlide(jornadaId, direction) {
        const photos = jornadasPhotos[jornadaId];
        const carousel = document.getElementById(`carousel-${jornadaId}`);
        const images = carousel.querySelectorAll('img');
        const dots = document.getElementById(`dots-${jornadaId}`).querySelectorAll('.carousel-dot');
        
        // Quitar active de la imagen actual
        images[currentSlides[jornadaId]].classList.remove('active');
        dots[currentSlides[jornadaId]].classList.remove('active');
        
        // Calcular nuevo índice
        currentSlides[jornadaId] = (currentSlides[jornadaId] + direction + photos.length) % photos.length;
        
        // Agregar active a la nueva imagen
        images[currentSlides[jornadaId]].classList.add('active');
        dots[currentSlides[jornadaId]].classList.add('active');
    }
    
    function goToSlide(jornadaId, index) {
        const carousel = document.getElementById(`carousel-${jornadaId}`);
        const images = carousel.querySelectorAll('img');
        const dots = document.getElementById(`dots-${jornadaId}`).querySelectorAll('.carousel-dot');
        
        // Quitar active de la imagen actual
        images[currentSlides[jornadaId]].classList.remove('active');
        dots[currentSlides[jornadaId]].classList.remove('active');
        
        // Establecer nuevo índice
        currentSlides[jornadaId] = index;
        
        // Agregar active a la nueva imagen
        images[currentSlides[jornadaId]].classList.add('active');
        dots[currentSlides[jornadaId]].classList.add('active');
    }
    
    // Inicializar cuando cargue la página
    window.addEventListener('load', initCarousels);
</script>

@endsection
