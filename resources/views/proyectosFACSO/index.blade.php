@extends('layout.layout2')

@section('contenido')
    <style>
        /* ========================================
           NAVEGACIÓN POR BURBUJAS (AÑOS)
           ======================================== */
        .year-nav-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin-bottom: 3rem;
            flex-wrap: wrap;
        }

        .year-bubble {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #f8f9fa;
            color: #9e9e9e;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 1.0rem;
            transition: all 0.3s ease;
            border: 2px solid #bdbdbd;
            user-select: none;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .year-bubble:hover {
            transform: translateY(-5px);
            background-color: #e9ecef;
        }

        .year-bubble.active {
            background-color: #f25e63;
            color: white;
            transform: scale(1.1);
            box-shadow: 0 4px 15px rgba(0,51,102,0.3);
        }

        /* ========================================
           CONTENEDOR PRINCIPAL
           ======================================== */
        .content-box-custom {
            min-height: 600px;
            padding: 4rem !important;
            border-top: 6px solid #000000 !important;
            transition: opacity 0.4s ease;
        }

        /* ========================================
           GRILLA DE INVESTIGADORES
           ======================================== */
        .researcher-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2.5rem;
            margin-top: 3rem;
        }

        .researcher-card {
            flex: 0 1 21%;
            min-width: 220px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            padding: 1.5rem;
            border-radius: 12px;
            background-color: #fff;
            height: 100%;
        }

        .researcher-card:hover {
            transform: translateY(-8px);
        }

        .researcher-card:hover .researcher-photo {
            border-color: #f25e63;
            box-shadow: 0 5px 15px rgba(242, 94, 99, 0.3);
        }

        .researcher-card:hover .click-indicator {
            opacity: 1;
        }

        .researcher-card:first-child:nth-last-child(5),
        .researcher-card:first-child:nth-last-child(5) ~ .researcher-card {
            flex: 0 1 28%;
        }

        .researcher-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1.5rem;
            border: 3px solid #eee;
            background-color: #f8f9fa;
            transition: all 0.3s ease;
            position: relative;
        }

        .click-indicator {
            position: absolute;
            top: 52%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #f25e63;
            color: white;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            opacity: 0;
            transition: all 0.3s ease;
            white-space: nowrap;
            padding: 5px 10px;
        }

        .click-indicator i {
            margin-right: 5px;
            margin-top: 2px;
        }

        .researcher-name {
            font-family: 'Bebas', sans-serif;
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            display: block;
        }

        .project-short-title {
            font-size: 0.85rem;
            line-height: 1.4;
            color: #666;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            min-height: 3.6em;
        }

        /* ========================================
           LISTA DINÁMICA
           ======================================== */
        .dynamic-list {
            text-align: left;
            margin-top: 1.5rem;
            list-style-type: disc !important;
            padding-left: 2rem;
            columns: 1;
        }

        .dynamic-list li {
            margin-bottom: 1rem;
            font-size: 1.1rem;
            color: #444;
            display: list-item !important;
        }

        /* ========================================
           SECCIÓN DE DETALLES DEL PROYECTO
           ======================================== */
        .project-details-section {
            display: none;
            opacity: 0;
            transition: opacity 0.5s ease;
            margin: 3rem 0;
            
        }

        .project-details-section.active {
            display: block;
            opacity: 1;
        }

        .project-details-container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            padding: 3rem;
            border-top: 6px solid #f25e63;
            position: relative;
        }

        .project-header {
            background: #fafafa;
            border-left: 4px solid #f25e63;
            padding: 1.5rem 2rem;
            border-radius: 4px;
            margin-bottom: 2rem;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .project-header-content {
            flex: 1;
        }

        .project-header h3 {
            font-family: 'Bebas', sans-serif;
            font-size: 1.6rem;
            margin: 0;
            letter-spacing: 0.5px;
            color: #333;
        }

        .project-year-badge {
            display: inline-block;
            background: #f25e63;
            color: white;
            padding: 0.25rem 0.8rem;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 0.5rem;
        }

        .close-project-btn {
            background: transparent;
            border: 2px solid #ddd;
            color: #666;
            width: 36px;
            height: 36px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1.3rem;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            flex-shrink: 0;
        }

        .close-project-btn:hover {
            background: #f5f5f5;
            border-color: #999;
            color: #333;
            transform: scale(1.05);
        }

        .project-researcher-info {
            display: flex;
            align-items: center;
            gap: 2rem;
            margin-bottom: 2rem;
            padding-bottom: 2rem;
            border-bottom: 2px solid #f0f0f0;
        }

        .project-researcher-photo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #f25e63;
            box-shadow: 0 5px 15px rgba(242, 94, 99, 0.3);
        }

        .project-researcher-name {
            font-family: 'Bebas', sans-serif;
            font-size: 1.8rem;
            color: #333;
            margin: 0;
        }

        .project-section-title {
            font-weight: 700;
            margin-top: 2rem;
            margin-bottom: 1rem;
            font-size: 1.15rem;
            font-family: 'Bebas', sans-serif;
            letter-spacing: 1px;
            color: #333;
            text-transform: uppercase;
            border-left: 4px solid #f25e63;
            padding-left: 1rem;
        }

        .project-section-title:first-of-type {
            margin-top: 0;
        }

        .project-text {
            color: #444;
            line-height: 1.8;
            font-size: 0.95rem;
            font-weight: 400;
            text-align: justify;
        }

        .project-title-text {
            font-weight: 500;
            font-size: 1.05rem;
            color: #2c3e50;
            line-height: 1.7;
        }

        .project-publications-list {
            font-size: 0.92rem;
            line-height: 1.7;
            list-style-type: disc;
            padding-left: 2rem;
        }

        .project-publications-list li {
            margin-bottom: 0.8rem;
            color: #555;
            font-weight: 400;
        }

        .project-footer {
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 2px solid #f0f0f0;
            text-align: center;
        }

        .project-footer .btn {
            font-size: 1rem;
            padding: 0.7rem 2rem;
            border-radius: 25px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .project-footer .btn-primary {
            background-color: #f25e63;
            border-color: #f25e63;
            color: white;
        }

        .project-footer .btn-primary:hover {
            background-color: #d94a4f;
            border-color: #d94a4f;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(242, 94, 99, 0.4);
        }

        /* ========================================
           RESPONSIVE
           ======================================== */
        @media (max-width: 768px) {
            .year-bubble {
                width: 60px;
                height: 60px;
                font-size: 1.2rem;
            }
            
            .content-box-custom {
                padding: 2rem !important;
            }
            
            .dynamic-list {
                columns: 1;
            }

            .modal-body {
                padding: 1.5rem;
            }

            .modal-footer {
                padding: 1rem;
            }
        }
    </style>

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
                                <span class="project-year-badge" id="projectYear"></span>
                                <h3 id="projectResearcherName"></h3>
                            </div>
                            <button class="close-project-btn" onclick="closeProjectDetails()">&times;</button>
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
                        
                        <h6 class="project-section-title">Publicaciones:</h6>
                        <ul id="projectPublications" class="project-publications-list"></ul>

                        <div class="project-footer">
                            <a id="projectProfileLink" href="#" target="_blank" class="btn btn-primary">
                                <i class="fas fa-external-link-alt mr-2"></i> Ver Perfil del Investigador
                            </a>
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
         JAVASCRIPT
         ======================================== -->
    <script>
        // ========================================
        // DATOS DEL TIMELINE
        // ========================================
        const timelineData = {
            2025: {
                title: "Evolución hacia la investigación asociativa",
                description: "La versión más reciente del Fondo Concursable FACSO marca un hito relevante en su trayectoria, al orientarse exclusivamente a proyectos de investigación asociativa. Este cambio responde a la experiencia acumulada en convocatorias anteriores y a la necesidad de:",
                points: [
                    "Fortalecer el trabajo colaborativo e interdisciplinario.",
                    "Promover la conformación y consolidación de equipos de investigación estables.",
                    "Potenciar la producción colectiva de conocimiento, con proyección en redes académicas y espacios públicos de discusión.",
                    "Articular investigadores/as con distintas trayectorias, favoreciendo el aprendizaje mutuo y la sostenibilidad de las líneas de investigación.",
                ]
            },
            2024: {
                title: "Diversificación de modalidades y apoyo a quienes se inician ",
                description: "A partir de versiones posteriores, el Fondo Concursable incorporó modalidades diferenciadas, distinguiendo entre: Académicos/as con trayectoria en investigación. Académicos/as que se inician en investigación, incorporando en algunos casos la figura de mentoría. Este cambio permitió ampliar el acceso al financiamiento interno, fortalecer procesos formativos en investigación y favorecer la renovación de la comunidad académica investigadora, manteniendo estándares de calidad y exigencias claras en términos de productos comprometidos y rendición académica. Asimismo, se consolidaron mecanismos de seguimiento, exigencias de aprobación ética cuando correspondía y una mayor claridad en los plazos y obligaciones asociadas a la ejecución de los proyectos.",
                researchers: [
                    { name: "María Angélica Cruz", 
                        project: "TikTok como Escenario de Disputa del Género: Influencers Juveniles neoconservadores en Chile", 
                        img: "MariaAngelaCruz.jpg", 
                        url: "https://colaboratoriocienciassociales.uv.cl/investigadores-ficha-89",
                        objective: "",
                        publications: [
                            ""
                        ]
                    },
                    { name: "Luis Henríquez Riutor", 
                        project: " La “batalla cultural” de los Chicago Boys: conformación, redes de pensamiento, ideas y programas entre 1953 y 1980. Las bases ideopolíticas e institucionalización del neoliberalismo chileno.", 
                        img: "luis_henriquez.jpg", 
                        url: "https://sociologia.uv.cl/escuela/academicos-as/77-luis-henriquez-ruitor",
                        objective: "",
                        publications: [
                            ""
                        ]
                    },
                    { name: "Sofía Fernández Sanz", 
                        project: "Entendiendo los desafíos de salud mental entre los estudiantes universitarios en Chile ", 
                        img: "sofia_fernandez.jpg", 
                        url: "https://orcid.org/0000-0001-6625-5020",
                        objective: "",
                        publications: [
                            ""
                        ]
                    }
                ]
            },
            2023: {
                title: "Diversificación de modalidades y apoyo a quienes se inician",
                description: "A partir de versiones posteriores, el Fondo Concursable incorporó modalidades diferenciadas, distinguiendo entre: Académicos/as con trayectoria en investigación. Académicos/as que se inician en investigación, incorporando en algunos casos la figura de mentoría. Este cambio permitió ampliar el acceso al financiamiento interno, fortalecer procesos formativos en investigación y favorecer la renovación de la comunidad académica investigadora, manteniendo estándares de calidad y exigencias claras en términos de productos comprometidos y rendición académica. Asimismo, se consolidaron mecanismos de seguimiento, exigencias de aprobación ética cuando correspondía y una mayor claridad en los plazos y obligaciones asociadas a la ejecución de los proyectos.",
                researchers: [
                    { name: "Félix Aguirre", 
                        project: "Seis conversiones al socialismo en la Inglaterra de fin de siglo victoriano. Los Ensayos Fabianos de 1889", 
                        img: "f_aguirre.jpg", 
                        url: "https://orcid.org/0000-0002-9527-5757",
                        objective: "",
                        publications: [
                            "Reyes, M. J., Cruz Contreras, M. A., Jeanneret Brith, F., Badilla, M., & Aguirre, F. (2024). De la “transmisión” a la “conexión” generacional de memorias en escenarios conflictivos. Psicoperspectivas, 23 (3). https://dx.doi.org/10.5027/psicoperspectivas-vol23-issue3-fulltext-3279"
                        ]
                     },
                    { name: "Fuad Hatibovic Díaz", 
                      project: "“Yo me movilizo por mi grupo”: Efectos de la identidad endogrupal en la acción colectiva mediados por emociones negativas y positivas", 
                      img: "FuadHatibovic.jpg", 
                      url: "https://colaboratoriocienciassociales.uv.cl/investigadores-ficha-77",
                      objective: "Explicar la relación entre la identificación endogrupal con la acción colectiva mediada por las emociones positivas y negativas en estudiantes de universidades de la región de Valparaíso.",
                      publications: ["Hatibovic, F., Gaete, J. M., Sandoval, J., Faúndez, X., Godoy, M. P., & Ilabaca, P. (2025). “What Do Believers Believe in? Beliefs, Emotions, and Willingness to Engage in Collective Action on Climate Change Among Residents of a Chilean Region Affected”. Sustainability, 17(15), 6694. https://doi.org/10.3390/su17156694",
                      ]
                    },
                    { name: "Raúl Hozven", 
                        project: "“Caracterización de trayectorias profesionales de Trabajo Social en escenarios transversales”", 
                        img: "r_hozven.jpg", 
                        url: "https://scholar.google.com/citations?user=qdsK3cAAAAAJ&hl=es",
                        objective: "Caracterizar las trayectorias laborales de profesionales de Trabajo Social en escenarios laborales transversales.",
                        publications: [
                            "Hozven Valenzuela, R., Cazorla Becerra, K.V. y Castañeda Meneses, P.L. (2025). Reflexiones posthumanas en torno al objeto del Trabajo Social. Trabajo Social, 27(2), 95-115. https://doi.org/10.15446/ ",
                            "Hozven Valenzuela, R. (s. f.). Trayectorias laborales de Trabajo Social en una nueva temporalidad: La construcción impredecible en trayectorias alternas y combinadas. En Ruta de la memoria a 100 años del Trabajo Social Latinoamericano: cartografiando cimientos y proyectando perspectivas. Editorial Aún creemos en los sueños – Le Monde Diplomatique & Escuela de Trabajo Social, Universidad Alberto Hurtado.",
                            "Hozven Valenzuela, R. (en prensa). Trayectorias y encrucijadas entre el Trabajo Social y la inteligencia artificial. En 100 años de Trabajo Social en Chile y Latinoamérica. 80 años de trabajo social universitario en Valparaíso [Libro electrónico]. Escuela de Trabajo Social, Universidad de Valparaíso.",
                            "Iturrieta Olivares, S., & Hozven Valenzuela, R. (en prensa). Habitar la investigación: Una apuesta ética, política y epistemológica desde el Trabajo Social. En 100 años de trabajo social en Chile: tejiendo saberes para transformar futuros [Libro electrónico]. Pontificia Universidad Católica de Valparaíso, Red de Investigadores en Trabajo Social en Chile & Ariadna Ediciones."
                        ]                    
                    },
                    { name: "Elena Salum", 
                        project: "Discurso, prácticas y estrategias de carácter interdisciplinar para garantizar la participación y el Derecho a Ser Oído de Niños, Niñas y Adolescentes representados por curaduría del Programa Mi Abogado Va. Región. Una mirada desde el Observatorio de Desigualdades y Políticas Públicas de la Escuela de Trabajo Social", 
                        img: "e_salum.jpg", 
                        url: "uv.cl",
                        objective: "",
                        publications: [
                            ""
                        ]                    
                    },
                    { name: "Carlos Varas", 
                        project: "Evaluación de los efectos de un programa de Mindfulness en la prevención y promoción de salud mental de los y las funcionarios y funcionarias de establecimientos públicos de atención primaria de salud.", 
                        img: "c_varas.jpg" , 
                        url: "https://psicologia.uv.cl/nuestra-escuela/equipo-directivo?view=article&id=7:carlos-varas&catid=9",
                        objective: "",
                        publications: [
                            ""
                        ]                    
                    }
                ]
            },
            2022: {
                title: "Primeras versiones: fortalecimiento de trayectorias individuales.",
                description: "Estas versiones sentaron las bases del fondo como un instrumento de apoyo directo a la investigación académica, con énfasis en la calidad metodológica, la viabilidad de los proyectos y la proyección de publicaciones.",
                researchers: [
                    { 
                        name: "Carlos Clavijo López", 
                        project: "Aceptabilidad y efecto de implementación de medidas rutinarias de evaluación de progreso terapéutico en el Centro de Atención Psicológica de la Escuela de Psicología (CAPSI) de la Universidad de Valparaíso.", 
                        img: "carlos_clavijo.jpg", 
                        url: "https://psicologia.uv.cl/nuestra-escuela/equipo-directivo?view=article&id=32:carlos-clavijo&catid=9",
                        objective: "",
                        publications: [
                            ""
                        ]                    
                    },
                    { name: "Claudia Calderón", 
                        project: "Reflexividad sobre las prácticas docentes. Estudio descriptivo de las transformaciones y desafíos del retorno a la docencia presencial", 
                        img: "c_calderon.jpg", 
                        url: "https://psicologia.uv.cl/nuestra-escuela/academicos-esc-psicologia?view=article&id=31:claudia-calderon&catid=9",
                        objective: "",
                        publications: [
                            ""
                        ]                    
                    },
                    { name: "Marco Rodríguez", 
                        project: "Apre(he)nder de uno de los mejores sistemas educativos del mundo: transferencia educativa en el marco del primer viaje oficial de estudios a NY y su recepción en la modernización de la educación primaria en Chile (1904-1920).", 
                        img: "m_rodriguez.jpg" , 
                        url: "https://sociologia.uv.cl/escuela/academicos-as/22-marco-rodriguez",
                        objective: "",
                        publications: [
                            ""
                        ]
                    },
                    { name: "Sara Salum", 
                        project: "La participación de niños y niñas en Tribunales de Familia de la Quinta Región: la voz de los niños y niñas a través de los mecanismos de participación judicial", 
                        img: "s_salum.jpg" , 
                        url: "https://orcid.org/0000-0001-9464-4998",
                        objective: "",
                        publications: [
                            ""
                        ]                    
                    }
                ]
            },
            2021: {
                title: "Primeras versiones: fortalecimiento de trayectorias individuales.",
                description: "En sus primeras convocatorias, el Fondo Concursable FACSO estuvo orientado principalmente a apoyar proyectos individuales de investigación, con el propósito de: \n \n • Incentivar la producción científica en académicas y académicos de la Facultad. \n • Favorecer la continuidad de líneas de investigación en períodos sin financiamiento externo. \n • Promover la publicación de resultados en revistas indexadas y libros con referato externo.",
                researchers: [
                    { name: "Elisabeth Simbürger", project: "La escritura de lo social en el mundo Académico", img: "ElisabethSimbuerger.jpg", url: "https://colaboratoriocienciassociales.uv.cl/investigadores-ficha-79"},
                    { name: "Pablo López Silva", project: "Psicosis y valor adaptativo de los delirios", img: "PabloLopez.jpg", url: "https://colaboratoriocienciassociales.uv.cl/investigadores-ficha-78" },
                    { name: "Patricia Castañeda", project: "Mascarillas, máscaras e identidades en Pandemia COVID 19", img: "p_castaneda.jpg", url: "https://orcid.org/0000-0002-4676-5872" },
                    { name: "Andrea Flanagan", project: "Experiencias en educación superior de estudiantes de primera generación de la zona central de Chile: Desafíos para la equidad educativa en tiempos de pandemia COVID 19", img: "AndreaPatriciaFlanagan.jpg", url: "https://colaboratoriocienciassociales.uv.cl/investigadores-ficha-84" }
                ]
            }
        };
        let currentYear = 2025;

        function openModal(year, index) {
            const data = timelineData[year].researchers[index];
            
            document.getElementById('projectYear').innerText = "Proyecto " + year;
            document.getElementById('projectResearcherName').innerText = data.name;
            document.getElementById('projectTitle').innerText = data.project;
            document.getElementById('projectPhoto').src = `{{ asset('assets/images/investigadores/') }}/${data.img}`;
            document.getElementById('projectObjective').innerText = data.objective || "Sin objetivo especificado.";
            document.getElementById('projectProfileLink').href = data.url || "#";
            
            const pubList = document.getElementById('projectPublications');
            pubList.innerHTML = '';
            if (data.publications && data.publications.length > 0 && data.publications[0] !== '') {
                data.publications.forEach(pub => {
                    const li = document.createElement('li');
                    
                    // Buscar URLs en el texto de la publicación
                    const urlRegex = /(https?:\/\/[^\s]+)/g;
                    const urls = pub.match(urlRegex);
                    
                    if (urls && urls.length > 0) {
                        // Si hay URL, dividir el texto y crear enlace
                        const parts = pub.split(urlRegex);
                        parts.forEach((part, index) => {
                            if (part.match(urlRegex)) {
                                const link = document.createElement('a');
                                link.href = part;
                                link.target = '_blank';
                                link.rel = 'noopener noreferrer';
                                link.innerText = 'Ver publicación';
                                link.style.color = '#f25e63';
                                link.style.fontWeight = 'bold';
                                link.style.textDecoration = 'underline';
                                li.appendChild(link);
                            } else if (part.trim()) {
                                li.appendChild(document.createTextNode(part + ' '));
                            }
                        });
                    } else {
                        li.innerText = pub;
                    }
                    
                    pubList.appendChild(li);
                });
            } else {
                pubList.innerHTML = '<li>Sin publicaciones registradas aún.</li>';
            }

            // Mostrar la sección
            const section = document.getElementById('projectDetailsSection');
            section.classList.add('active');
            
            // Hacer scroll suave hacia la sección con mejor posicionamiento
            setTimeout(() => {
                const yOffset = -80; // Offset para no quedar pegado arriba
                const element = section;
                const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;
                
                window.scrollTo({ top: y, behavior: 'smooth' });
            }, 150);
        }

        function closeProjectDetails() {
            const section = document.getElementById('projectDetailsSection');
            section.classList.remove('active');
            
            // Scroll de vuelta al grid de investigadores
            document.getElementById('researcher-grid').scrollIntoView({ behavior: 'smooth', block: 'center' });
        }

        // ========================================
        // FUNCIÓN: CAMBIAR AÑO
        // ========================================
        function setYear(year) {
            currentYear = year;
            
            // Cerrar detalles del proyecto al cambiar de año
            const section = document.getElementById('projectDetailsSection');
            section.classList.remove('active');
            
            updateContent();
            updateBubbles();
        }

        // ========================================
        // FUNCIÓN: ACTUALIZAR BURBUJAS
        // ========================================
        function updateBubbles() {
            document.querySelectorAll('.year-bubble').forEach(b => b.classList.remove('active'));
            document.getElementById(`bubble-${currentYear}`).classList.add('active');
        }

        // ========================================
        // FUNCIÓN: ACTUALIZAR CONTENIDO
        // ========================================
        function updateContent() {
            const card = document.getElementById('content-card');
            const data = timelineData[currentYear];
            const listContainer = document.getElementById('dynamic-list');
            const gridContainer = document.getElementById('researcher-grid');

            card.style.opacity = '0';
            
            setTimeout(() => {
                document.getElementById('content-title').innerText = data.title;
                document.getElementById('content-description').innerText = data.description;

                listContainer.classList.add('d-none');
                gridContainer.classList.add('d-none');
                listContainer.innerHTML = '';
                gridContainer.innerHTML = '';

                if (currentYear === 2025) {
                    listContainer.classList.remove('d-none');
                    data.points.forEach(p => {
                        const li = document.createElement('li');
                        li.innerText = p; 
                        listContainer.appendChild(li);
                    });
                } else if (data.researchers) {
                    gridContainer.classList.remove('d-none');
                    data.researchers.forEach((r, index) => {
                        const rCard = document.createElement('div');
                        rCard.className = 'researcher-card';
                        rCard.onclick = () => openModal(currentYear, index);

                        rCard.innerHTML = `
                            <img src="{{ asset('assets/images/investigadores/') }}/${r.img}" 
                                onerror="this.src='https://ui-avatars.com/api/?name=${r.name}&background=003366&color=fff'" 
                                class="researcher-photo" alt="${r.name}">
                            <span class="researcher-name">${r.name}</span>
                            <span class="project-short-title">${r.project}</span>
                            <div class="click-indicator">
                                <i class="fas fa-info-circle"></i> Ver proyecto
                            </div>
                        `;
                        gridContainer.appendChild(rCard);
                    });
                }
                card.style.opacity = '1';
            }, 300);
        }

        // ========================================
        // INICIALIZACIÓN
        // ========================================
        window.onload = function() {
            // Guardar la posición inicial del scroll
            const initialScrollPosition = window.pageYOffset || document.documentElement.scrollTop;
            
            updateContent();
            updateBubbles();
            
            // Restaurar la posición del scroll después de cargar el contenido
            setTimeout(() => {
                window.scrollTo(0, initialScrollPosition);
            }, 50);
        };
    </script>
@endsection