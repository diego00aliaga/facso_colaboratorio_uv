@extends('layout.layout2')

@section('contenido')
    <style>
        .year-nav-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 3rem;
        }
        .year-arrow {
            font-size: 1.5rem;
            color:rgb(39, 37, 37);
            cursor: pointer;
            user-select: none;
            transition: all 0.2s ease;
        }
        .year-arrow.hidden { opacity: 0; pointer-events: none; }
        .year-arrow:hover { transform: scale(1.2); color: #d9534f; }
        
        .year-text {
            font-size: 2rem;
            margin: 10px;
        }

        /* Contenedor Principal */
        .content-box-custom {
            min-height: 600px;
            padding: 4rem !important;
            border-top: 6px solid  #000000 !important;
            transition: opacity 0.4s ease;
        }

        /* Grilla de Investigadores */
        .researcher-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /* Centra los elementos, especialmente la fila de 2 */
            gap: 2.5rem;
            margin-top: 3rem;
        }

        .researcher-card {
    flex: 0 1 21%; 
    min-width: 220px;
    text-align: center;
}

        .researcher-card:hover {
            transform: translateY(-5px);
        }

        .researcher-card:first-child:nth-last-child(5),
        .researcher-card:first-child:nth-last-child(5) ~ .researcher-card {
            flex: 0 1 28%;
        }

        .researcher-photo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1.5rem;
            border: 3px solid #eee;
            background-color: #f8f9fa;
        }

        .researcher-name {
            font-family: 'Bebas', sans-serif;
            font-size: 1.2rem;
            color: #003366;
            margin-bottom: 0.5rem;
            display: block;
        }

        .project-short-title {
            font-size: 0.85rem;
            line-height: 1.3;
            color: #666;
            display: block;
            font-style: italic;
        }

        .dynamic-list {
            text-align: left;
            margin-top: 1.5rem;
            columns: 1; /* Divide los objetivos en 2 columnas en 2025 */
        }
        .dynamic-list li {
            margin-bottom: 1rem;
            font-size: 1rem;
            color: #444;
            list-style-type: disc; /* Cambia a 'none' si quieres quitar todo */
        }

        @media (max-width: 768px) {
            .year-text { font-size: 3.5rem; margin: 0 20px; }
            .content-box-custom { padding: 2rem !important; }
            .dynamic-list { columns: 1; }
        }
    </style>

    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-md-18 col-lg-16 col-xl-14 text-center">
                <img class="img-fluid mb-5" src="{{ asset('assets/images/test7.png') }}" width="500">
                <h4 class="bebas">Fondo Concursable de Investigación</h4>
				<p style="text-align: justify; text-align-last: left;">
                El Fondo Concursable de Investigación de la Facultad de Ciencias Sociales de la Universidad de Valparaíso (FACSO) es un instrumento institucional orientado a fortalecer, diversificar y proyectar la investigación en ciencias sociales, en coherencia con el Plan de Desarrollo Estratégico de la Facultad y con el compromiso de la Universidad con la generación y transferencia de conocimiento socialmente relevante.
Desde su creación, este fondo ha experimentado una evolución sostenida, ajustando sus objetivos, modalidades y criterios de evaluación de acuerdo con las necesidades de la comunidad académica y con los desafíos contemporáneos de la investigación en ciencias sociales.
            </div>

            <div class="section lighten-4 py-5">
        <div class="container">
            
            <div class="year-nav-container">
                <span class="year-arrow" id="arrow-left" onclick="changeYear(-1)">←</span>
                <h1 class="bebas year-text" id="active-year">2025</h1>
                <span class="year-arrow" id="arrow-right" onclick="changeYear(1)">→</span>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-16">
                    <div class="white z-depth-2 redcolab content-box-custom" id="content-card">
                        
                        <div class="text-center mb-5">
                            <h4 class="bebas" id="content-title"></h4>
                            <p id="content-description" class="mx-auto" style="text-align: justify; text-align-last: left;"></p>
                        </div>

                        <ul id="dynamic-list" class="dynamic-list d-none"></ul>

                        <div id="researcher-grid" class="researcher-grid d-none">></div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-md-18 col-lg-16 col-xl-14 text-center">
                <h4 class="bebas">Resultados</h4>
				<p style="text-align: justify; text-align-last: left;">
                El análisis de las cuatro versiones del Fondo Concursable de Investigación FACSO (2021–2024) muestra que el instrumento ha cumplido un rol clave como plataforma de maduración de proyectos, permitiendo:
                    <ul class="dynamic-list">
                        <li class="mb-2"><strong>La generación de publicaciones científicas de alto nivel.</strong></li>
                        <li class="mb-2"><strong>La consolidación de líneas de investigación.</strong></li>
                        <li class="mb-2"><strong>La proyección hacia fondos competitivos externos, particularmente FONDECYT Regular e Iniciación.</strong></li>
                    </ul>

            </div>
        </div>
        </div>
    </div>


    </div>




    </div>

    <script>
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
                    { name: "María Angélica Cruz", project: "TikTok como Escenario de Disputa del Género", img: "MariaAngelaCruz.jpg" },
                    { name: "Luis Henríquez Riutor", project: "La batalla cultural de los Chicago Boys", img: "luis_henriquez.jpg" },
                    { name: "Sofía Fernández Sanz", project: "Salud mental en estudiantes universitarios", img: "sofia_fernandez.jpg" }
                ]
            },
            2023: {
                title: "Diversificación de modalidades y apoyo a quienes se inician",
                description: "Ampliación del acceso al financiamiento interno y fortalecimiento de procesos formativos para académicos noveles.",
                researchers: [
                    { name: "Félix Aguirre", project: "Conversiones al socialismo en Inglaterra", img: "f_aguirre.jpg" },
                    { name: "Fuad Hatibovic Díaz", project: "Identidad endogrupal y acción colectiva", img: "FuadHatibovic.jpg" },
                    { name: "Raúl Hozven", project: "Trayectorias profesionales de Trabajo Social", img: "r_hozven.jpg" },
                    { name: "Elena Salum", project: "Derecho a ser oído de NNA", img: "e_salum.jpg" },
                    { name: "Carlos Varas", project: "Mindfulness en salud primaria", img: "c_varas.jpg" }
                ]
            },
            2022: {
                title: "Primeras versiones: fortalecimiento de trayectorias individuales.",
                description: "Estas versiones sentaron las bases del fondo como un instrumento de apoyo directo a la investigación académica, con énfasis en la calidad metodológica, la viabilidad de los proyectos y la proyección de publicaciones.",
                researchers: [
                    { name: "Carlos Clavijo López", project: "Evaluación de progreso terapéutico (CAPSI)", img: "carlos_clavijo.jpg" },
                    { name: "Claudia Calderón", project: "Reflexividad sobre las prácticas docentes", img: "c_calderon.jpg" },
                    { name: "Marco Rodríguez", project: "Transferencia educativa: NY y Chile", img: "m_rodriguez.jpg" },
                    { name: "Sara/Elena Salum", project: "Participación judicial de niños y niñas", img: "s_salum.jpg" }
                ]
            },
            2021: {
                title: "Primeras versiones: fortalecimiento de trayectorias individuales.",
                description: "En sus primeras convocatorias, el Fondo Concursable FACSO estuvo orientado principalmente a apoyar proyectos individuales de investigación , con el propósito de: \n \n • Incentivar la producción científica en académicas y académicos de la Facultad. \n • Favorecer la continuidad</strong> de líneas de investigación en períodos sin financiamiento externo. \n • Promover la publicación de resultados</strong> en revistas indexadas y libros con referato externo.",
                researchers: [
                    { name: "Elisabeth Simbürger", project: "La escritura de lo social en la academia", img: "ElisabethSimbuerger.jpg" },
                    { name: "Pablo López Silva", project: "Psicosis y valor adaptativo de los delirios", img: "PabloLopez.jpg" },
                    { name: "Patricia Castañeda", project: "Mascarillas e identidad en pandemia", img: "p_castaneda.jpg" },
                    { name: "Andrea Flanagan", project: "Equidad en estudiantes de primera generación", img: "AndreaPatriciaFlanagan.jpg" }
                ]
            }
        };

        let currentYear = 2025;
        const years = [2025, 2024, 2023, 2022, 2021];

        function changeYear(direction) {
            let currentIndex = years.indexOf(currentYear);
            let nextIndex = currentIndex - direction;
            if (nextIndex >= 0 && nextIndex < years.length) {
                currentYear = years[nextIndex];
                updateContent();
                updateArrows();
            }
        }

        function updateArrows() {
            const currentIndex = years.indexOf(currentYear);
            document.getElementById('arrow-left').classList.toggle('hidden', currentIndex === years.length - 1);
            document.getElementById('arrow-right').classList.toggle('hidden', currentIndex === 0);
        }

        function updateContent() {
            const card = document.getElementById('content-card');
            const data = timelineData[currentYear];
            const listContainer = document.getElementById('dynamic-list');
            const gridContainer = document.getElementById('researcher-grid');

            card.style.opacity = '0';
            
            setTimeout(() => {
                document.getElementById('active-year').innerText = currentYear;
                document.getElementById('content-title').innerText = data.title;
                document.getElementById('content-description').innerText = data.description;

                // Resetear vistas
                listContainer.classList.add('d-none');
                gridContainer.classList.add('d-none');
                listContainer.innerHTML = '';
                gridContainer.innerHTML = '';

                if (currentYear === 2025) {
                    listContainer.classList.remove('d-none');
                    data.points.forEach(p => {
                        const li = document.createElement('li');
                        li.innerHTML = `<i class="fas fas-check.circle mr-2" style="color:#003366"></i> ${p}`;
                        listContainer.appendChild(li);
                    });
                } else {
                    gridContainer.classList.remove('d-none');
                    data.researchers.forEach(r => {
                        const rCard = document.createElement('div');
                        rCard.className = 'researcher-card';
                        rCard.innerHTML = `
                            <img src="{{ asset('assets/images/investigadores/') }}/${r.img}" 
                                 onerror="this.src='https://ui-avatars.com/api/?name=${r.name}&background=003366&color=fff'" 
                                 class="researcher-photo" alt="${r.name}">
                            <span class="researcher-name">${r.name}</span>
                            <span class="project-short-title">${r.project}</span>
                        `;
                        gridContainer.appendChild(rCard);
                    });
                }
                card.style.opacity = '1';
            }, 300);
        }

        window.onload = function() {
            updateContent();
            updateArrows();
        };
    </script>
@endsection