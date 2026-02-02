@extends('layout.layout2')

@section('contenido')
    <link rel="stylesheet" href="{{ asset('assets/css/proyectosfacso.css') }}" />

    <!-- ========================================
         SECCIÓN DE INTRODUCCIÓN
         ======================================== -->
    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-md-18 col-lg-16 col-xl-14 text-center">
                <img class="img-fluid mb-5" src="{{ asset('assets/images/test7.png') }}" width="500" alt="Fondo Concursable">
                <h4 class="bebas">Fondo Concursable de Investigación</h4>
                <p style="text-align: justify; text-align-last: left;">
                    El Fondo Concursable de Investigación de la Facultad de Ciencias Sociales de la Universidad de Valparaíso (FACSO) es un instrumento institucional orientado a fortalecer, diversificar y proyectar la investigación en ciencias sociales, en coherencia con el Plan de Desarrollo Estratégico de la Facultad y con el compromiso de la Universidad con la generación y transferencia de conocimiento socialmente relevante.
                    Desde su creación, este fondo ha experimentado una evolución sostenida, ajustando sus objetivos, modalidades y criterios de evaluación de acuerdo con las necesidades de la comunidad académica y con los desafíos contemporáneos de la investigación en ciencias sociales.
                </p>
            </div>
        </div>
    </div>

    <!-- ========================================
         SECCIÓN DE TIMELINE INTERACTIVO
         ======================================== -->
    <div class="section lighten-4 py-5">
        <div class="container">
            <!-- Navegación por años -->
            <div class="year-nav-container">
                <div class="year-bubble" onclick="setYear(2021)" id="bubble-2021">2021</div>
                <div class="year-bubble" onclick="setYear(2022)" id="bubble-2022">2022</div>
                <div class="year-bubble" onclick="setYear(2023)" id="bubble-2023">2023</div>
                <div class="year-bubble" onclick="setYear(2024)" id="bubble-2024">2024</div>
                <div class="year-bubble" onclick="setYear(2025)" id="bubble-2025">2025</div>
            </div>

            <h1 class="d-none" id="active-year">2025</h1>

            <!-- Contenido dinámico -->
            <div class="row justify-content-center">
                <div class="col-lg-16">
                    <div class="white z-depth-2 redcolab content-box-custom" id="content-card">
                        <div class="text-center mb-5">
                            <h4 class="bebas" id="content-title"></h4>
                            <p id="content-description" class="mx-auto" style="text-align: justify; text-align-last: left;"></p>
                        </div>

                        <ul id="dynamic-list" class="dynamic-list d-none"></ul>
                        <div id="researcher-grid" class="researcher-grid d-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========================================
         SECCIÓN DE DETALLES DEL PROYECTO
         ======================================== -->
    <div class="project-details-section" id="projectDetailsSection">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-14">
                    <div class="project-details-container">
                        <div class="project-header">
                            <div class="project-header-content">
                                <h3 id="projectResearcherName"></h3>
                                <a id="projectProfileLink" href="#" target="_blank" class="btn btn-sm" style="margin-top: 0.5rem; display: inline-block; background: #f25e63; color: white; padding: 0.4rem 1rem; border-radius: 4px; text-decoration: none; font-size: 0.85rem; transition: all 0.3s ease;">
                                    <i class="fas fa-external-link-alt" style="margin-right: 0.3rem;"></i> Perfil Investigador
                                </a>
                            </div>
                            <button class="close-project-btn" onclick="scrollToYears()" title="Volver a los años">
                                <i class="fas fa-arrow-up fa-sm mt-1"></i>
                            </button>
                        </div>

                        <div class="project-researcher-info">
                            <img id="projectPhoto" src="" class="project-researcher-photo" alt="Foto del investigador">
                            <div>
                                <h6 class="project-section-title" style="margin-top: 0; border-left: none; padding-left: 0;">Título del Proyecto:</h6>
                                <p id="projectTitle" class="project-text project-title-text"></p>
                            </div>
                        </div>
                        
                        <h6 class="project-section-title">Objetivo:</h6>
                        <p id="projectObjective" class="project-text"></p>
                        
                        <h6 class="project-section-title">Publicaciones / Productos:</h6>
                        <ul id="projectPublications" class="project-publications-list"></ul>
                        
                        <div id="congressSection" style="display: none;">
                            <h6 class="project-section-title">Congresos:</h6>
                            <ul id="projectCongresses" class="project-publications-list"></ul>
                        </div>
                        
                        <div id="presentationsSection" style="display: none;">
                            <h6 class="project-section-title">Presentaciones en Coloquio:</h6>
                            <ul id="projectPresentations" class="project-publications-list"></ul>
                        </div>
                        
                        <div id="formationsSection" style="display: none;">
                            <h6 class="project-section-title">Formación de Estudiantes:</h6>
                            <ul id="projectFormations" class="project-publications-list"></ul>
                        </div>
                        
                        <div id="difusionSection" style="display: none;">
                            <h6 class="project-section-title">Difusión:</h6>
                            <ul id="projectDifusion" class="project-publications-list"></ul>
                        </div>
                        
                        <div id="docenciaSection" style="display: none;">
                            <h6 class="project-section-title">Docencia:</h6>
                            <ul id="projectDocencia" class="project-publications-list"></ul>
                        </div>
                        
                        <div id="editedBooksSection" style="display: none;">
                            <h6 class="project-section-title">Libros Editados:</h6>
                            <ul id="projectEditedBooks" class="project-publications-list"></ul>
                        </div>
                        
                        <div id="booksChaptersSection" style="display: none;">
                            <h6 class="project-section-title">Capítulos de Libros:</h6>
                            <ul id="projectBooksChapters" class="project-publications-list"></ul>
                        </div>
                        
                        <div id="articlesSection" style="display: none;">
                            <h6 class="project-section-title">Artículos:</h6>
                            <ul id="projectArticles" class="project-publications-list"></ul>
                        </div>
                        
                        <div id="tesisSection" style="display: none;">
                            <h6 class="project-section-title">Tesis/Memorias:</h6>
                            <ul id="projectTesis" class="project-publications-list"></ul>
                        </div>
                        
                        <div id="backgroundSection" style="display: none;">
                            <h6 class="project-section-title">Más antecedentes:</h6>
                            <ul id="projectBackground" class="project-publications-list"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========================================
         SECCIÓN DE RESULTADOS
         ======================================== -->
    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-md-18 col-lg-16 col-xl-14 text-center">
                <h4 class="bebas">Resultados</h4>
                <p style="text-align: justify; text-align-last: left;">
                    El análisis de las cuatro versiones del Fondo Concursable de Investigación FACSO (2021–2024) muestra que el instrumento ha cumplido un rol clave como plataforma de maduración de proyectos, permitiendo:
                </p>
                <ul class="dynamic-list">
                    <li class="mb-2"><strong>La generación de publicaciones científicas de alto nivel.</strong></li>
                    <li class="mb-2"><strong>La consolidación de líneas de investigación.</strong></li>
                    <li class="mb-2"><strong>La proyección hacia fondos competitivos externos, particularmente FONDECYT Regular e Iniciación.</strong></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ========================================
         JAVASCRIPT - REFACTORIZADO CON PRINCIPIOS SOLID Y DRY
         ======================================== -->
    <script>
        'use strict';

        // ========================================
        // CLASE: TimelineManager (Single Responsibility)
        // Gestiona el estado del timeline y notifica cambios
        // ========================================
        class TimelineManager {
            constructor(data) {
                this.data = data;
                this.currentYear = 2025;
                this.observers = [];
            }

            // Observer Pattern: Suscripción a cambios de estado
            subscribe(callback) {
                this.observers.push(callback);
                return () => {
                    this.observers = this.observers.filter(cb => cb !== callback);
                };
            }

            notify() {
                const state = this.getState();
                this.observers.forEach(callback => callback(state));
            }

            getState() {
                return {
                    currentYear: this.currentYear,
                    data: this.getCurrentYearData(),
                    allYears: Object.keys(this.data)
                };
            }

            setYear(year) {
                if (!this.data[year]) return false;
                this.currentYear = year;
                this.notify();
                return true;
            }

            getCurrentYearData() {
                return this.data[this.currentYear] || null;
            }

            getResearcher(year, index) {
                const yearData = this.data[year];
                return yearData?.researchers?.[index] || null;
            }
        }

        // ========================================
        // CLASE: ScrollManager (Single Responsibility)
        // Maneja todas las operaciones de scroll de forma centralizada
        // ========================================
        class ScrollManager {
            constructor(config = {}) {
                this.defaultOffset = config.defaultOffset || -140;
                this.yearNavOffset = config.yearNavOffset || -120;
                this.scrollDelay = config.scrollDelay || 150;
                this.pendingScroll = null;
            }

            scrollToElement(element, offset = this.defaultOffset, delay = this.scrollDelay) {
                if (this.pendingScroll) {
                    clearTimeout(this.pendingScroll);
                }

                this.pendingScroll = setTimeout(() => {
                    if (!element) return;
                    const y = element.getBoundingClientRect().top + window.pageYOffset + offset;
                    window.scrollTo({ top: y, behavior: 'smooth' });
                    this.pendingScroll = null;
                }, delay);
            }

            scrollToYearNav() {
                const yearNavContainer = document.querySelector('.year-nav-container');
                if (yearNavContainer) {
                    this.scrollToElement(yearNavContainer, this.yearNavOffset, 0);
                }
            }

            scrollToProjectDetails() {
                const section = document.getElementById('projectDetailsSection');
                if (section) {
                    this.scrollToElement(section, this.defaultOffset);
                }
            }

            preserveScrollPosition(callback) {
                const initialPosition = window.pageYOffset || document.documentElement.scrollTop;
                callback();
                setTimeout(() => window.scrollTo(0, initialPosition), 50);
            }
        }

        // ========================================
        // CLASE: ListRenderer (DRY Principle)
        // Renderiza listas dinámicas de forma declarativa
        // ========================================
        class ListRenderer {
            constructor() {
                this.urlRegex = /(https?:\/\/[^\s]+)/g;
            }

            // Método unificado para renderizar cualquier lista (DRY)
            renderList(items, listId, sectionId = null, options = {}) {
                const listElement = document.getElementById(listId);
                if (!listElement) return;

                const hasContent = this._hasValidContent(items);
                
                // Manejo de sección contenedora
                if (sectionId) {
                    this._toggleSection(sectionId, hasContent);
                }

                listElement.innerHTML = '';

                if (hasContent) {
                    const fragment = document.createDocumentFragment();
                    items.forEach(item => {
                        const li = this._createListItem(item, options);
                        fragment.appendChild(li);
                    });
                    listElement.appendChild(fragment);
                } else if (options.showEmptyMessage) {
                    listElement.innerHTML = `<li>${options.emptyMessage || 'Sin registros.'}</li>`;
                }
            }

            // Renderiza objetivo con formato inteligente
            renderObjective(objective) {
                const element = document.getElementById('projectObjective');
                if (!element) return;

                const text = objective || "Sin objetivo especificado.";
                
                if (this._isNumberedList(text)) {
                    element.innerHTML = this._createNumberedListHTML(text);
                } else {
                    element.textContent = text;
                }
            }

            _hasValidContent(items) {
                return items && Array.isArray(items) && items.length > 0 && items[0] !== '';
            }

            _toggleSection(sectionId, show) {
                const section = document.getElementById(sectionId);
                if (section) {
                    section.style.display = show ? 'block' : 'none';
                }
            }

            _createListItem(text, options = {}) {
                const li = document.createElement('li');
                
                if (options.parseLinks) {
                    this._parseLinksIntoElement(li, text);
                } else {
                    li.textContent = text;
                }
                
                return li;
            }

            _parseLinksIntoElement(element, text) {
                const urls = text.match(this.urlRegex);
                
                if (urls && urls.length > 0) {
                    const parts = text.split(this.urlRegex);
                    parts.forEach(part => {
                        if (part.match(this.urlRegex)) {
                            const link = this._createLink(part);
                            element.appendChild(link);
                        } else if (part.trim()) {
                            element.appendChild(document.createTextNode(part + ' '));
                        }
                    });
                } else {
                    element.textContent = text;
                }
            }

            _createLink(url) {
                const link = document.createElement('a');
                link.href = url;
                link.target = '_blank';
                link.rel = 'noopener noreferrer';
                link.textContent = 'Ver publicación';
                link.style.cssText = 'color: #f25e63; font-weight: bold; text-decoration: underline;';
                return link;
            }

            _isNumberedList(text) {
                // Regex más flexible que captura diferentes tipos de espacios y caracteres Unicode
                return typeof text === 'string' && text.match(/\d+[\.\)][\s\u00A0\u2000-\u200B\u202F\u205F\u3000⁠]+/g);
            }

            _createNumberedListHTML(text) {
                // Regex mejorado para dividir por números seguidos de . o ) y cualquier tipo de espacio
                const items = text.split(/\d+[\.\)][\s\u00A0\u2000-\u200B\u202F\u205F\u3000⁠]+/).filter(item => item.trim());
                const listItems = items.map(item => 
                    `<li style="margin-bottom: 0.8rem;">${item.trim()}</li>`
                ).join('');
                return `<ol style="padding-left: 2rem; margin: 0;">${listItems}</ol>`;
            }
        }

        // ========================================
        // CLASE: DOMRenderer (Open/Closed Principle)
        // Renderiza componentes de la interfaz de forma declarativa
        // ========================================
        class DOMRenderer {
            constructor(config = {}) {
                this.assetPath = config.assetPath || "{{ asset('assets/images/investigadores/') }}/";
                this.fadeTransitionMs = config.fadeTransitionMs || 300;
                this.listRenderer = new ListRenderer();
            }

            // Renderiza el contenido principal del timeline
            renderMainContent(state) {
                const { data, currentYear } = state;
                if (!data) return;

                const card = document.getElementById('content-card');
                this._fadeOut(card, () => {
                    this._setTextContent('content-title', data.title);
                    this._setTextContent('content-description', data.description);
                    this._clearContainers();

                    if (currentYear === 2025) {
                        this._renderPointsList(data.points);
                    } else if (data.researchers) {
                        this._renderResearcherGrid(data.researchers, currentYear);
                    }

                    this._fadeIn(card);
                });
            }

            // Renderiza las burbujas de años activas
            renderYearBubbles(state) {
                const { currentYear } = state;
                document.querySelectorAll('.year-bubble').forEach(bubble => {
                    bubble.classList.remove('active');
                });
                
                const activeBubble = document.getElementById(`bubble-${currentYear}`);
                if (activeBubble) {
                    activeBubble.classList.add('active');
                }
            }

            // Renderiza los detalles completos de un investigador (Atomic Render)
            renderResearcherDetails(researcher) {
                if (!researcher) return;

                // Datos básicos
                this._setTextContent('projectResearcherName', researcher.name);
                this._setTextContent('projectTitle', researcher.project);
                
                // Imagen con fallback de iniciales
                const fallbackImg = `https://ui-avatars.com/api/?name=${encodeURIComponent(researcher.name)}&background=003366&color=fff&size=200&bold=true`;
                const imgSrc = researcher.img && researcher.img.trim() !== '' 
                    ? `${this.assetPath}${researcher.img}` 
                    : fallbackImg;
                this._setAttribute('projectPhoto', 'src', imgSrc);
                
                this._setAttribute('projectProfileLink', 'href', researcher.url || '#');

                // Objetivo con formato inteligente
                this.listRenderer.renderObjective(researcher.objective);

                // Configuración declarativa de todas las listas
                const listsConfig = [
                    { 
                        key: 'publications', 
                        listId: 'projectPublications', 
                        options: { 
                            parseLinks: true, 
                            showEmptyMessage: true,
                            emptyMessage: 'Sin publicaciones registradas aún.' 
                        }
                    },
                    { key: 'congresses', sectionId: 'congressSection', listId: 'projectCongresses' },
                    { key: 'presentations', sectionId: 'presentationsSection', listId: 'projectPresentations' },
                    { key: 'formations', sectionId: 'formationsSection', listId: 'projectFormations' },
                    { key: 'difusion', sectionId: 'difusionSection', listId: 'projectDifusion' },
                    { key: 'docencia', sectionId: 'docenciaSection', listId: 'projectDocencia' },
                    { key: 'editedBooks', sectionId: 'editedBooksSection', listId: 'projectEditedBooks' },
                    { key: 'booksChapters', sectionId: 'booksChaptersSection', listId: 'projectBooksChapters' },
                    { key: 'articles', sectionId: 'articlesSection', listId: 'projectArticles' },
                    { key: 'tesis', sectionId: 'tesisSection', listId: 'projectTesis' },
                    { key: 'background', sectionId: 'backgroundSection', listId: 'projectBackground' }
                ];

                // Renderizado declarativo de todas las listas
                listsConfig.forEach(config => {
                    this.listRenderer.renderList(
                        researcher[config.key],
                        config.listId,
                        config.sectionId,
                        config.options || {}
                    );
                });

                this._showProjectDetails();
            }

            hideProjectDetails() {
                const section = document.getElementById('projectDetailsSection');
                if (section) {
                    section.classList.remove('active');
                }
            }

            // Métodos privados de utilidad
            _setTextContent(id, text) {
                const element = document.getElementById(id);
                if (element) element.textContent = text || '';
            }

            _setAttribute(id, attr, value) {
                const element = document.getElementById(id);
                if (element) element[attr] = value;
            }

            _clearContainers() {
                ['dynamic-list', 'researcher-grid'].forEach(id => {
                    const container = document.getElementById(id);
                    if (container) {
                        container.classList.add('d-none');
                        container.innerHTML = '';
                    }
                });
            }

            _renderPointsList(points) {
                if (!points || !Array.isArray(points)) return;

                const listContainer = document.getElementById('dynamic-list');
                if (!listContainer) return;

                listContainer.classList.remove('d-none');
                const fragment = document.createDocumentFragment();
                
                points.forEach(point => {
                    const li = document.createElement('li');
                    li.textContent = point;
                    fragment.appendChild(li);
                });
                
                listContainer.appendChild(fragment);
            }

            _renderResearcherGrid(researchers, year) {
                if (!researchers || !Array.isArray(researchers)) return;

                const gridContainer = document.getElementById('researcher-grid');
                if (!gridContainer) return;

                gridContainer.classList.remove('d-none');
                const fragment = document.createDocumentFragment();
                
                researchers.forEach((researcher, index) => {
                    const card = this._createResearcherCard(researcher, year, index);
                    fragment.appendChild(card);
                });
                
                gridContainer.appendChild(fragment);
            }

            _createResearcherCard(researcher, year, index) {
                const card = document.createElement('div');
                card.className = 'researcher-card';
                card.dataset.year = year;
                card.dataset.index = index;

                // Generar imagen de iniciales (ej: "CC" para Claudia Calderón)
                const fallbackImg = `https://ui-avatars.com/api/?name=${encodeURIComponent(researcher.name)}&background=003366&color=fff&size=200&bold=true`;
                
                // Si no hay imagen o está vacía, usar directamente las iniciales
                const imgPath = researcher.img && researcher.img.trim() !== '' 
                    ? `${this.assetPath}${researcher.img}` 
                    : fallbackImg;

                card.innerHTML = `
                    <img src="${imgPath}" 
                        onerror="this.src='${fallbackImg}'" 
                        class="researcher-photo" 
                        alt="${researcher.name}">
                    <span class="researcher-name">${researcher.name}</span>
                    <span class="project-short-title">${researcher.project}</span>
                    <div class="click-indicator">
                        <i class="fas fa-info-circle"></i> Ver proyecto
                    </div>
                `;

                return card;
            }

            _showProjectDetails() {
                const section = document.getElementById('projectDetailsSection');
                if (section) {
                    section.classList.add('active');
                }
            }

            _fadeOut(element, callback) {
                if (!element) return;
                element.style.opacity = '0';
                setTimeout(callback, this.fadeTransitionMs);
            }

            _fadeIn(element) {
                if (!element) return;
                setTimeout(() => {
                    element.style.opacity = '1';
                }, 50);
            }
        }

        // ========================================
        // CLASE: AppController (Dependency Injection)
        // Coordina las interacciones entre componentes
        // ========================================
        class AppController {
            constructor(timelineManager, renderer, scrollManager) {
                this.timelineManager = timelineManager;
                this.renderer = renderer;
                this.scrollManager = scrollManager;
                this._bindEvents();
                this._subscribeToStateChanges();
            }

            _bindEvents() {
                // Event delegation para las tarjetas de investigadores
                document.getElementById('researcher-grid')?.addEventListener('click', (e) => {
                    const card = e.target.closest('.researcher-card');
                    if (card) {
                        const year = parseInt(card.dataset.year);
                        const index = parseInt(card.dataset.index);
                        this.openResearcherDetails(year, index);
                    }
                });
            }

            _subscribeToStateChanges() {
                this.timelineManager.subscribe((state) => {
                    this.renderer.renderMainContent(state);
                    this.renderer.renderYearBubbles(state);
                    this.renderer.hideProjectDetails();
                });
            }

            setYear(year) {
                this.timelineManager.setYear(year);
            }

            openResearcherDetails(year, index) {
                const researcher = this.timelineManager.getResearcher(year, index);
                if (researcher) {
                    this.renderer.renderResearcherDetails(researcher);
                    this.scrollManager.scrollToProjectDetails();
                }
            }

            scrollToYears() {
                this.scrollManager.scrollToYearNav();
            }

            closeProjectDetails() {
                this.renderer.hideProjectDetails();
                const grid = document.getElementById('researcher-grid');
                if (grid) {
                    grid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            }

            initialize() {
                this.scrollManager.preserveScrollPosition(() => {
                    const state = this.timelineManager.getState();
                    this.renderer.renderMainContent(state);
                    this.renderer.renderYearBubbles(state);
                });
            }
        }

        // ========================================
        // INICIALIZACIÓN DE LA APLICACIÓN
        // ========================================
        const timelineData = @json($timelineData);
        
        // Instanciación de componentes (Dependency Injection)
        const timelineManager = new TimelineManager(timelineData);
        const scrollManager = new ScrollManager();
        const renderer = new DOMRenderer();
        const app = new AppController(timelineManager, renderer, scrollManager);

        // Funciones globales para mantener compatibilidad con el HTML
        function setYear(year) {
            app.setYear(year);
        }

        function openModal(year, index) {
            app.openResearcherDetails(year, index);
        }

        function scrollToYears() {
            app.scrollToYears();
        }

        function closeProjectDetails() {
            app.closeProjectDetails();
        }

        // Inicialización cuando el DOM esté listo
        window.addEventListener('DOMContentLoaded', () => {
            app.initialize();
        });
    </script>
@endsection