@extends('layout.layout2')

@section('contenido')

    <link rel="stylesheet" href="{{ asset('assets/css/jornadas.css') }}" />


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
    'use strict';

    // ========================================
    // CLASE: CarouselStateManager (Single Responsibility)
    // Gestiona el estado de todos los carruseles
    // ========================================
    class CarouselStateManager {
        constructor(photosData) {
            this.photosData = photosData;
            this.currentSlides = {};
            this.observers = {};
            this._initializeSlides();
        }

        _initializeSlides() {
            Object.keys(this.photosData).forEach(id => {
                this.currentSlides[id] = 0;
                this.observers[id] = [];
            });
        }

        subscribe(carouselId, callback) {
            if (!this.observers[carouselId]) {
                this.observers[carouselId] = [];
            }
            this.observers[carouselId].push(callback);
            return () => {
                this.observers[carouselId] = this.observers[carouselId].filter(cb => cb !== callback);
            };
        }

        notify(carouselId) {
            const state = this.getState(carouselId);
            this.observers[carouselId]?.forEach(callback => callback(state));
        }

        getState(carouselId) {
            return {
                currentIndex: this.currentSlides[carouselId],
                photos: this.photosData[carouselId],
                totalSlides: this.photosData[carouselId]?.length || 0
            };
        }

        goToSlide(carouselId, index) {
            const photos = this.photosData[carouselId];
            if (!photos || index < 0 || index >= photos.length) return false;
            
            this.currentSlides[carouselId] = index;
            this.notify(carouselId);
            return true;
        }

        nextSlide(carouselId) {
            const photos = this.photosData[carouselId];
            if (!photos) return false;
            
            this.currentSlides[carouselId] = (this.currentSlides[carouselId] + 1) % photos.length;
            this.notify(carouselId);
            return true;
        }

        previousSlide(carouselId) {
            const photos = this.photosData[carouselId];
            if (!photos) return false;
            
            this.currentSlides[carouselId] = (this.currentSlides[carouselId] - 1 + photos.length) % photos.length;
            this.notify(carouselId);
            return true;
        }

        changeSlide(carouselId, direction) {
            return direction > 0 ? this.nextSlide(carouselId) : this.previousSlide(carouselId);
        }

        getAllCarouselIds() {
            return Object.keys(this.photosData);
        }
    }

    // ========================================
    // CLASE: CarouselRenderer (Single Responsibility)
    // Renderiza los elementos del carrusel de forma declarativa
    // ========================================
    class CarouselRenderer {
        constructor() {
            this.cache = new Map();
        }

        renderCarousel(carouselId, photos) {
            const carousel = this._getCarouselElement(carouselId);
            const dotsContainer = this._getDotsContainer(carouselId);
            
            if (!carousel || !dotsContainer) {
                console.warn(`Carousel ${carouselId} not found`);
                return false;
            }

            this._renderImages(carousel, carouselId, photos);
            this._renderDots(dotsContainer, carouselId, photos.length);
            
            return true;
        }

        updateActiveSlide(carouselId, currentIndex) {
            const carousel = this._getCarouselElement(carouselId);
            const dotsContainer = this._getDotsContainer(carouselId);
            
            if (!carousel || !dotsContainer) return;

            // Actualizar imágenes
            const images = carousel.querySelectorAll('img');
            images.forEach((img, index) => {
                img.classList.toggle('active', index === currentIndex);
            });

            // Actualizar dots
            const dots = dotsContainer.querySelectorAll('.carousel-dot');
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
        }

        _renderImages(carousel, carouselId, photos) {
            const controls = carousel.querySelector('.carousel-controls');
            const fragment = document.createDocumentFragment();
            
            photos.forEach((photoUrl, index) => {
                const img = this._createImage(photoUrl, carouselId, index);
                fragment.appendChild(img);
            });

            // Insertar antes de los controles si existen
            if (controls) {
                carousel.insertBefore(fragment, controls);
            } else {
                carousel.appendChild(fragment);
            }
        }

        _createImage(url, carouselId, index) {
            const img = document.createElement('img');
            img.src = url;
            img.alt = `Jornada ${carouselId} - Foto ${index + 1}`;
            img.loading = 'lazy'; // Lazy loading para performance
            if (index === 0) {
                img.classList.add('active');
            }
            return img;
        }

        _renderDots(container, carouselId, totalSlides) {
            const fragment = document.createDocumentFragment();
            
            for (let i = 0; i < totalSlides; i++) {
                const dot = this._createDot(i);
                fragment.appendChild(dot);
            }
            
            container.appendChild(fragment);
        }

        _createDot(index) {
            const dot = document.createElement('span');
            dot.classList.add('carousel-dot');
            dot.dataset.index = index;
            if (index === 0) {
                dot.classList.add('active');
            }
            return dot;
        }

        _getCarouselElement(carouselId) {
            if (!this.cache.has(`carousel-${carouselId}`)) {
                this.cache.set(`carousel-${carouselId}`, document.getElementById(`carousel-${carouselId}`));
            }
            return this.cache.get(`carousel-${carouselId}`);
        }

        _getDotsContainer(carouselId) {
            if (!this.cache.has(`dots-${carouselId}`)) {
                this.cache.set(`dots-${carouselId}`, document.getElementById(`dots-${carouselId}`));
            }
            return this.cache.get(`dots-${carouselId}`);
        }
    }

    // ========================================
    // CLASE: AutoplayManager (Single Responsibility)
    // Gestiona la reproducción automática de los carruseles
    // ========================================
    class AutoplayManager {
        constructor(interval = 5000) {
            this.interval = interval;
            this.timerId = null;
            this.isPlaying = false;
        }

        start(callback) {
            if (this.isPlaying) return;
            
            this.isPlaying = true;
            this.timerId = setInterval(callback, this.interval);
        }

        stop() {
            if (!this.isPlaying) return;
            
            clearInterval(this.timerId);
            this.timerId = null;
            this.isPlaying = false;
        }

        restart(callback) {
            this.stop();
            this.start(callback);
        }

        destroy() {
            this.stop();
        }
    }

    // ========================================
    // CLASE: CarouselController (Dependency Injection)
    // Coordina las interacciones entre componentes
    // ========================================
    class CarouselController {
        constructor(stateManager, renderer, autoplayManager) {
            this.stateManager = stateManager;
            this.renderer = renderer;
            this.autoplayManager = autoplayManager;
            this._setupEventDelegation();
        }

        initialize() {
            // Renderizar todos los carruseles
            this.stateManager.getAllCarouselIds().forEach(carouselId => {
                const state = this.stateManager.getState(carouselId);
                this.renderer.renderCarousel(carouselId, state.photos);
                
                // Suscribirse a cambios de estado
                this.stateManager.subscribe(carouselId, (state) => {
                    this.renderer.updateActiveSlide(carouselId, state.currentIndex);
                });
            });

            // Iniciar autoplay
            this._startAutoplay();
        }

        goToSlide(carouselId, index) {
            this.stateManager.goToSlide(carouselId, index);
            this._resetAutoplay();
        }

        changeSlide(carouselId, direction) {
            this.stateManager.changeSlide(carouselId, direction);
        }

        _setupEventDelegation() {
            // Event delegation para los dots
            document.addEventListener('click', (e) => {
                const dot = e.target.closest('.carousel-dot');
                if (dot) {
                    const container = dot.parentElement;
                    const carouselId = container.id.replace('dots-', '');
                    const index = parseInt(dot.dataset.index);
                    
                    if (carouselId && !isNaN(index)) {
                        this.goToSlide(carouselId, index);
                    }
                }
            });
        }

        _startAutoplay() {
            this.autoplayManager.start(() => {
                this.stateManager.getAllCarouselIds().forEach(carouselId => {
                    this.stateManager.nextSlide(carouselId);
                });
            });
        }

        _resetAutoplay() {
            this.autoplayManager.restart(() => {
                this.stateManager.getAllCarouselIds().forEach(carouselId => {
                    this.stateManager.nextSlide(carouselId);
                });
            });
        }

        destroy() {
            this.autoplayManager.destroy();
        }
    }

    // ========================================
    // CONFIGURACIÓN Y DATOS
    // ========================================
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

    // ========================================
    // INICIALIZACIÓN DE LA APLICACIÓN
    // ========================================
    let carouselApp = null;

    // Instanciar componentes cuando el DOM esté listo
    window.addEventListener('DOMContentLoaded', () => {
        const stateManager = new CarouselStateManager(jornadasPhotos);
        const renderer = new CarouselRenderer();
        const autoplayManager = new AutoplayManager(5000);
        
        carouselApp = new CarouselController(stateManager, renderer, autoplayManager);
        carouselApp.initialize();
    });

    // Funciones globales para mantener compatibilidad (si es necesario)
    function changeSlide(carouselId, direction) {
        carouselApp?.changeSlide(carouselId, direction);
    }

    function goToSlide(carouselId, index) {
        carouselApp?.goToSlide(carouselId, index);
    }

    // Limpiar recursos al salir de la página
    window.addEventListener('beforeunload', () => {
        carouselApp?.destroy();
    });
</script>

@endsection
