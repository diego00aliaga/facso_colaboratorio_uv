<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProyectosFACSOController extends Controller
{
    public function index()
    {
        // Definimos los datos manualmente (estáticos)
        $proyectosfacso = [
            [
                'titulo' => 'Investigación Social 2024',
                'descripcion' => 'Estudio sobre el impacto de la tecnología.',
                'link' => '#'
            ],
            [
                'titulo' => 'Proyecto de Inclusión',
                'descripcion' => 'Análisis de políticas públicas en la región.',
                'link' => '#'
            ],
        ];
        $timelineData = [
            2025 => [
                "title" => "Evolución hacia la investigación asociativa",
                "description" => "La versión más reciente del Fondo Concursable FACSO marca un hito relevante en su trayectoria, al orientarse exclusivamente a proyectos de investigación asociativa. Este cambio responde a la experiencia acumulada en convocatorias anteriores y a la necesidad de:",
                "points" => [
                    "Fortalecer el trabajo colaborativo e interdisciplinario.",
                    "Promover la conformación y consolidación de equipos de investigación estables.",
                    "Potenciar la producción colectiva de conocimiento, con proyección en redes académicas y espacios públicos de discusión.",
                    "Articular investigadores/as con distintas trayectorias, favoreciendo el aprendizaje mutuo y la sostenibilidad de las líneas de investigación.",
                ]
            ],
            2024 => [
                "title" => "Diversificación de modalidades y apoyo a quienes se inician ",
                "description" => "A partir de versiones posteriores, el Fondo Concursable incorporó modalidades diferenciadas, distinguiendo entre: Académicos/as con trayectoria en investigación. Académicos/as que se inician en investigación, incorporando en algunos casos la figura de mentoría. Este cambio permitió ampliar el acceso al financiamiento interno, fortalecer procesos formativos en investigación y favorecer la renovación de la comunidad académica investigadora, manteniendo estándares de calidad y exigencias claras en términos de productos comprometidos y rendición académica. Asimismo, se consolidaron mecanismos de seguimiento, exigencias de aprobación ética cuando correspondía y una mayor claridad en los plazos y obligaciones asociadas a la ejecución de los proyectos.",
                "researchers" => [
                    [ "name" => "María Angélica Cruz", 
                        "project" => "TikTok como Escenario de Disputa del Género: Influencers Juveniles neoconservadores en Chile", 
                        "img" => "MariaAngelaCruz.jpg", 
                        "url" => "https://colaboratoriocienciassociales.uv.cl/investigadores-ficha-89",
                        "objective" => "Comprender las formas de producción de discursos neoconservadores orientados a las juventudes, a través de las publicaciones de jóvenes “influencers” chilenos en TikTok, que disputan el género, la diversidad sexual y los valores democráticos.",
                        "publications" => [
                            ""
                        ]
                    ],
                    [ "name" => "Luis Henríquez Riutor", 
                        "project" => " La “batalla cultural” de los Chicago Boys: conformación, redes de pensamiento, ideas y programas entre 1953 y 1980. Las bases ideopolíticas e institucionalización del neoliberalismo chileno.", 
                        "img" => "luis_henriquez.jpg", 
                        "url" => "https://sociologia.uv.cl/escuela/academicos-as/77-luis-henriquez-ruitor",
                        "objective" => "Analizar la “batalla cultural” de los Chicago boys entre 1953 y 1980, tendiente a la modernización de la sociedad chilena.",
                        "publications" => [
                            ""
                        ]
                    ],
                    [ "name" => "Sofía Fernández Sanz", 
                        "project" => "Entendiendo los desafíos de salud mental entre los estudiantes universitarios en Chile ", 
                        "img" => "sofia_fernandez.jpg", 
                        "url" => "https://orcid.org/0000-0001-6625-5020",
                        "objective" => "Explorar las experiencias y percepciones sobre salud mental en estudiantes universitarios en Chile",
                        "publications" => [
                            ""
                        ]
                    ]
                ]
            ],
            2023 => [
                "title" => "Diversificación de modalidades y apoyo a quienes se inician",
                "description"=> "A partir de versiones posteriores, el Fondo Concursable incorporó modalidades diferenciadas, distinguiendo entre: Académicos/as con trayectoria en investigación. Académicos/as que se inician en investigación, incorporando en algunos casos la figura de mentoría. Este cambio permitió ampliar el acceso al financiamiento interno, fortalecer procesos formativos en investigación y favorecer la renovación de la comunidad académica investigadora, manteniendo estándares de calidad y exigencias claras en términos de productos comprometidos y rendición académica. Asimismo, se consolidaron mecanismos de seguimiento, exigencias de aprobación ética cuando correspondía y una mayor claridad en los plazos y obligaciones asociadas a la ejecución de los proyectos.",
                "researchers" => [
                    [ "name" => "Félix Aguirre", 
                        "project" => "Seis conversiones al socialismo en la Inglaterra de fin de siglo victoriano. Los Ensayos Fabianos de 1889", 
                        "img" => "f_aguirre.jpg", 
                        "url" => "https://orcid.org/0000-0002-9527-5757",
                        "objective" => "Comprender la genealogía histórica e intelectual del discurso fabiano sobre el socialismo en el contexto de la formación de la cultura política del reformismo inglés, entre 1880 y 1890.",
                        "publications" => [
                            "Reyes, M. J., Cruz Contreras, M. A., Jeanneret Brith, F., Badilla, M., & Aguirre, F. (2024). De la “transmisión” a la “conexión” generacional de memorias en escenarios conflictivos. Psicoperspectivas, 23 (3). https://dx.doi.org/10.5027/psicoperspectivas-vol23-issue3-fulltext-3279"
                        ]
                        ],
                    [ "name" => "Fuad Hatibovic Díaz", 
                      "project" => "“Yo me movilizo por mi grupo”: Efectos de la identidad endogrupal en la acción colectiva mediados por emociones negativas y positivas", 
                      "img" => "FuadHatibovic.jpg", 
                      "url" => "https://colaboratoriocienciassociales.uv.cl/investigadores-ficha-77",
                      "objective" => "Explicar la relación entre la identificación endogrupal con la acción colectiva mediada por las emociones positivas y negativas en estudiantes de universidades de la región de Valparaíso.",
                      "publications" => ["Hatibovic, F., Gaete, J. M., Sandoval, J., Faúndez, X., Godoy, M. P., & Ilabaca, P. (2025). “What Do Believers Believe in? Beliefs, Emotions, and Willingness to Engage in Collective Action on Climate Change Among Residents of a Chilean Region Affected”. Sustainability, 17(15), 6694. https://doi.org/10.3390/su17156694",
                      ]
                    ],
                    [ "name" => "Raúl Hozven", 
                        "project" => "“Caracterización de trayectorias profesionales de Trabajo Social en escenarios transversales”", 
                        "img" => "r_hozven.jpg", 
                        "url" => "https://scholar.google.com/citations?user=qdsK3cAAAAAJ&hl=es",
                        "objective" => "Caracterizar las trayectorias laborales de profesionales de Trabajo Social en escenarios laborales transversales.",
                        "publications" => [
                            "Hozven Valenzuela, R., Cazorla Becerra, K.V. y Castañeda Meneses, P.L. (2025). Reflexiones posthumanas en torno al objeto del Trabajo Social. Trabajo Social, 27(2), 95-115. https://doi.org/10.15446/ ",
                            "Hozven Valenzuela, R. (s. f.). Trayectorias laborales de Trabajo Social en una nueva temporalidad: La construcción impredecible en trayectorias alternas y combinadas. En Ruta de la memoria a 100 años del Trabajo Social Latinoamericano: cartografiando cimientos y proyectando perspectivas. Editorial Aún creemos en los sueños – Le Monde Diplomatique & Escuela de Trabajo Social, Universidad Alberto Hurtado.",
                            "Hozven Valenzuela, R. (en prensa). Trayectorias y encrucijadas entre el Trabajo Social y la inteligencia artificial. En 100 años de Trabajo Social en Chile y Latinoamérica. 80 años de trabajo social universitario en Valparaíso [Libro electrónico]. Escuela de Trabajo Social, Universidad de Valparaíso.",
                            "Iturrieta Olivares, S., & Hozven Valenzuela, R. (en prensa). Habitar la investigación: Una apuesta ética, política y epistemológica desde el Trabajo Social. En 100 años de trabajo social en Chile: tejiendo saberes para transformar futuros [Libro electrónico]. Pontificia Universidad Católica de Valparaíso, Red de Investigadores en Trabajo Social en Chile & Ariadna Ediciones."
                        ]                    
                    ],
                    [ "name" => "Elena Salum", 
                        "project" => "Discurso, prácticas y estrategias de carácter interdisciplinar para garantizar la participación y el Derecho a Ser Oído de Niños, Niñas y Adolescentes representados por curaduría del Programa Mi Abogado Va. Región. Una mirada desde el Observatorio de Desigualdades y Políticas Públicas de la Escuela de Trabajo Social", 
                        "img" => "e_salum.jpg", 
                        "url" => "uv.cl",
                        "objective" => "Describir la representación jurídica de NNA de los/las profesionales del programa Mi Abogado Región de Valparaíso a fin de conocer las prácticas interdisciplinarias utilizadas para garantizar la participación y el derecho a ser oído en el período 2024 -2025.",
                        "publications" => [
                            "Curso electivo “Pensar la Infancia desde las Ciencias Sociales” Código: SGIA 315 Semestre: Primer semestre 2024 Unidad académica: Escuela de Trabajo Social, Universidad de Valparaíso. Producto derivado del proyecto, incorporando contenidos sobre infancia, derechos, participación y enfoques interdisciplinarios.  Curso colegiado 2: Sociología y Ciclos de Vida, Código: SGIA 323 Semestres de implementación: Segundo semestre 2024 y Primer semestre 2025. Curso colegiado con integración de resultados del proyecto en contenidos, metodologías y evaluaciones. ",
                            "Comunicación aceptada en congreso internacional: X Congreso Mundial por los Derechos de la Infancia y la Adolescencia Lugar: Roma, Italia. Año: 2024.  Presentación de póster X Congreso Mundial por los Derechos de la Infancia y la Adolescencia Lugar: Roma, 2024 Publicación de póster",
                            "Coloquio “Desafíos de la Justicia Juvenil en Chile” Seminario 3er Seminario “La Niñez y Adolescencia se defienden”",
                            "Construyendo la ruta de la Acreditación Integral Proyecto: UVA 23992) Destino: Universidad La Sapienza, Roma Producto asociado a proyección e internacionalización del trabajo investigativo."
                        ]                    
                    ],
                    [ "name" => "Carlos Varas", 
                        "project" => "Evaluación de los efectos de un programa de Mindfulness en la prevención y promoción de salud mental de los y las funcionarios y funcionarias de establecimientos públicos de atención primaria de salud.", 
                        "img" => "c_varas.jpg" , 
                        "url" => "https://psicologia.uv.cl/nuestra-escuela/equipo-directivo?view=article&id=7:carlos-varas&catid=9",
                        "objective" => " El objetivo principal se relaciona con la evaluación de los beneficios de un programa de formación en mindfulness para la prevención y promoción de la salud mental dirigido a equipos de funcionarios/as que se desempeñan en los establecimientos públicos de la atención primaria de salud.",
                        "publications" => [
                            ""
                        ]                    
                    ]
                ]
            ],
            2022 => [
                "title" => "Primeras versiones: fortalecimiento de trayectorias individuales.",
                "description" => "Estas versiones sentaron las bases del fondo como un instrumento de apoyo directo a la investigación académica, con énfasis en la calidad metodológica, la viabilidad de los proyectos y la proyección de publicaciones.",
                "researchers" => [
                    [ 
                        "name" => "Carlos Clavijo López", 
                        "project" => "Aceptabilidad y efecto de implementación de medidas rutinarias de evaluación de progreso terapéutico en el Centro de Atención Psicológica de la Escuela de Psicología (CAPSI) de la Universidad de Valparaíso.", 
                        "img" => "carlos_clavijo.jpg", 
                        "url" => "https://psicologia.uv.cl/nuestra-escuela/equipo-directivo?view=article&id=32:carlos-clavijo&catid=9",
                        "objective" => "El objetivo principal de este proyecto fue evaluar el efecto de la incorporación del monitoreo rutinario de los resultados de la psicoterapia proporcionada por los estudiantes en un entorno de clínica psicológica universitaria, explorar su aceptabilidad entre terapeutas y supervisores, y conocer las características de los usuarios del centro.",
                        "publications" => [
                            "No hay publicación asociada a la fecha"
                        ]                    
                    ],
                    [ "name" => "Claudia Calderón", 
                        "project" => "Reflexividad sobre las prácticas docentes. Estudio descriptivo de las transformaciones y desafíos del retorno a la docencia presencial", 
                        "img" => "", 
                        "url" => "https://psicologia.uv.cl/nuestra-escuela/academicos-esc-psicologia?view=article&id=31:claudia-calderon&catid=9",
                        "objective" => " 1.	Describir los significados que sostienen los/las docentes respecto de la experiencia de enseñanza aprendizaje en contexto de formación on line durante la pandemia de SarCov-2 2.	Describir los significados particulares y colectivos que sostienen los/las docentes respecto del proceso de enseñanza-aprendizaje con énfasis en las transformaciones de la docencia en contexto de formación on line y luego del retorno a la presencialidad. 3.	Describir los significados particulares y colectivos que sostienen los/las docentes respecto del proceso de enseñanza-aprendizaje con énfasis en los desafíos o preocupaciones que emergen luego del retorno a la presencialidad.",
                        "publications" => [
                            "No hay publicación asociada a la fecha"
                        ],
                        "congresses" => [
                            "XXXIX Congreso Interamericano de Psicología. 26 al 30 de Junio, Asunción Paraguay.	Reflexividad sobre las prácticas docentes.  Descripción de transformaciones y desafíos del retorno a la presencialidad.",
                            "XXXIX Congreso Interamericano de Psicología.  26 al 30 de Junio, Asunción Paraguay	“Concepciones educativas en estudiantes y docentes universitarios sobre la formación on line en pandemia.",
                            "XVII Congreso Chileno de Psicología. 04 al 06 Octubre Universidad de Magallanes.  Chile “Descripción de las concepciones sobre el sujeto aprendiz que retorna a la docencia presencial en educación superior.  Reflexividad sobre las prácticas docentes",
                            "XVIII Congreso Chileno de Psicología. 02 al 04 de Octubre en la Universidad del Biobío, en la ciudad de ChillánTransformaciones y desafíos de la formación en Educación Superior.  Reflexiones docentes desde la Post Pandemia	El año 2023 se desarrollan dos seminarios de investigación, que concluyen con la obtención del grado académico de licenciada/o en psicología de estudiantes de 4to año de la carrera.",
                            "Desarrollo de dos Seminarios de Investigación con estudiantes de pregrado de la Escuela de Psicología: “La práctica pedagógica universitaria y sus posibilidades de transformación y desafíos post-pandemia”.  Débora Astorga, Makarena Lara y Thiare Rojas “Adaptación de la docencia.  Momentos de transformación en el tránsito de la formación on line a lo presencial”.  Javiera Cuevas, Elizabeth Fuentes y Karen Piracés"
                        ]               
                    ],
                    [ "name" => "Marco Rodríguez", 
                        "project" => "Apre(he)nder de uno de los mejores sistemas educativos del mundo: transferencia educativa en el marco del primer viaje oficial de estudios a NY y su recepción en la modernización de la educación primaria en Chile (1904-1920).", 
                        "img" => "m_rodriguez.jpg" , 
                        "url" => "https://sociologia.uv.cl/escuela/academicos-as/22-marco-rodriguez",
                        "objective" => " 1.⁠ ⁠Identificar los elementos del sistema de enseñanza primaria del Estado de NY y de la formación pedagógica en el TC y NYU que son transferidos a través de la misión pedagógica y los documentos que la acompañan 2.⁠ ⁠Reconstruir la recepción de los elementos pedagógicos transferidos en el debate y la redacción previa y final de la LEPO. 3.⁠ ⁠Analizar los elementos pedagógicos transferidos que contribuyero",
                        "publications" => [
                            ""
                        ],
                        "congresses" => [
                            "“International Standing Conference for the History for Education”, ISCHE, 45: “(De)Coloniality and Diversity in the Histories of Education”, congreso realizado en la ciudad de Natal, Brasil entre el 18 y el 21 de agosto de 2024.",
                            "La ponencia -presentación del paper: “American” education transfer to decolonize the Chilean school: the first official mission to the United States and the modernization of primary education in Chile (1905-1920) tuvo lugar en el Standing Working Group (SWG): Exploring Histories of Knowledge, realizado el martes 20 de agosto.",
                            "XVII Jornadas de Historia de la Educación Chilena a realizarse en la Universidad de Concepción entre los días 15 y 18 de octubre del presente año.",
                            "Café Sociológico, actividad permanente organizada por la Unidad de Vinculación con el Medio de la Escuela de Sociología.",
                            
                        ]                           
                    ],
                    [ "name" => "Sara Salum", 
                        "project" => "La participación de niños y niñas en Tribunales de Familia de la Quinta Región: la voz de los niños y niñas a través de los mecanismos de participación judicial", 
                        "img" => "s_salum.jpg" , 
                        "url" => "https://orcid.org/0000-0001-9464-4998",
                        "objective" => "Comprender e interpretar cómo se aplica el derecho a ser oído de NNA en los Tribunales de Familia de la Va. Región mediante los mecanismos de entrevista confidencial y la participación de curadores/as ad litem profundizando en cómo su actuar incide en el cumplimiento de los derechos de participación y el derecho a ser oído de los NNA en esta judicatura.",
                        "publications" => [
                            ""
                        ]                    
                    ]
                ]
            ],
            2021 => [
                "title" => "Primeras versiones: fortalecimiento de trayectorias individuales.",
                "description" => "En sus primeras convocatorias, el Fondo Concursable FACSO estuvo orientado principalmente a apoyar proyectos individuales de investigación, con el propósito de: \n \n • Incentivar la producción científica en académicas y académicos de la Facultad. \n • Favorecer la continuidad de líneas de investigación en períodos sin financiamiento externo. \n • Promover la publicación de resultados en revistas indexadas y libros con referato externo.",
                "researchers" => [
                    [ 
                        "name" => "Elisabeth Simbürger", 
                        "project" => "La escritura de lo social en el mundo Académico", 
                        "img" => "ElisabethSimbuerger.jpg", 
                        "url" => "https://colaboratoriocienciassociales.uv.cl/investigadores-ficha-79",
                        "objective" => "Este proyecto tiene el propósito de examinar la escritura académica como práctica social en el marco de las políticas de escritura vigentes en educación superior. Objetivos específicos: 1.⁠ ⁠Explorar en qué formatos escriben las y los académicos y qué determina sus decisiones acerca del formato de escritura. 2.⁠ ⁠Analizar de qué manera las políticas de escritura vigentes facilitan y/o limitan la transmisión de lo social a través de la escritura académica. 3.⁠ ⁠Indagar sobre la presencia o ausencia del placer en la escritura académica.",
                        "publications" => [
                            "Simbürger, E. (2024). Escritura académica y género en la academia chilena: Producción contra tiempo y espacios. En A. Muñoz García & C. Trebisacce Marchand (Eds.), Feminismos en el umbral de la academia (pp. 171–197). Ediciones UC.",
                        ],
                        "presentations" => ["“La escritura y lo sonoro de las ideas: dimensiones calladas en la escritura académica contemporánea”, presentada en el Coloquio Universidad e Investigación, Centro de Investigación Artística, Universidad de Valparaíso, 28 y 29 de septiembre 2022."],
                        "formations" => ["Anaïs Berríos y Claudia Farías trabajaron como becarias de investigación, cumpliendo con labores de transcripción y de interpretación. "],
                        "difusion" => [
                            "https://uv.cl/archivo‐noticias‐uv/13644",
                            "https://sociales.uv.cl/noticias/354‐curso‐de‐escritura‐sociologica‐el‐rescate‐de‐los‐elementos‐creativos‐asociado‐al‐rigor‐academico"
                        ],
                        "docencia" => [
                            "Escritura sociológica II: El 2 de diciembre 2022 se organizó la “Primera feria del libro auto‐publicado” en la Escuela de Sociología con la cual culminó la asignatura “Escritura Sociólogica II” y que se vinculaba con este proyecto de investigación. En el marco de la actividad, estudiantes de la asignatura “Escritura Sociológica II” (docentes Elisabeth Simbürger y Valentina Osses) presentaron sus libros que fueron escritos, editados y auto‐publicados durante el semestre. https://sociales.uv.cl/noticias/354‐curso‐de‐escritura‐sociologica‐el‐rescate‐de‐los‐elementos‐creativos‐asociado‐al‐rigor‐academico https://uv.cl/archivo‐noticias‐uv/13644",
                            "Postulación a Fondecyt Regular y adjudicación del proyecto: Investigadora responsable, La escritura como práctica social en las ciencias sociales, humanidades y artes: una investigación crítica de la escritura como producto en el capitalismo académico, Fondecyt Regular no. 1230921, 2023‐2026"
                        ]                    
                    ],
                    [ "name" => "Pablo López Silva", 
                        "project" => "Psicosis y valor adaptativo de los delirios", 
                        "img" => "PabloLopez.jpg", 
                        "url" => "https://colaboratoriocienciassociales.uv.cl/investigadores-ficha-78",
                        "objective" => "Elaborar un enfoque que defienda la idea de que los delirios psicóticos pueden cumplir un rol biológicamente adaptativo cuando se entiende el contexto fenomenológico - subjetivo e intersubjetivo - en el cual emergen.",
                        "editedBooks" => [
                            "López-Silva, P. & McClelland, T. (2023/En Prensa). Intruders in the Mind: Interdisciplinary Perspectives on Thought Insertion. Oxford: Oxford University Press (link)."
                        ],
                        "booksChapters" =>[
                            "Mishara, A. López-Silva, P., Rosen C. & Heinz, A. (2023). Self-Disturbances, Perceptual Anomalies, and Physicality: Towards a Multimodal Model of Thought Insertion. In López-Silva, P. & McClelland, T. (Eds.). Intruders in the Mind: Interdisciplinary Perspectives on Thought Insertion. Oxford: Oxford University Press.",
                            "López-Silva, P. & Cavieres, A. (2023). Schizophrenia and the Error-Prediction Model of Thought Insertion. In López-Silva, P. & McClelland, T. (Eds.). Intruders in the Mind: Interdisciplinary Perspectives on Thought Insertion. Oxford: Oxford University Press.",
                            "López-Silva, P. (2023). Minimal Biological Adaptiveness and the Phenomenology of Delusions in Schizophrenia. In A. Falcato & J. Gonçales (eds). The Philosophy and Psychology of Delusions. London Routledge (link).",
                        ],
                        "articles" => [
                            "López-Silva, P. (2023). La etiología de los delirios psicóticos en la neuropsiquiatría actual. Revista Ciencias de la Salud",
                            "López-Silva, P. & Abarca, M. (2023). The Hipótesis de la Saliencia Aberrante: Unificando la Neurobiología y Fenomenología de la Esquizofrenia. Revista Latinoamericana de Psicopatología Fundamental. ",
                            "López-Silva, P. (2023). Creencias e Imaginaciones: Examinando el Problema Etiológico de los Delirios. Pensamiento: Revista de Investigación e Información Filosófica.",
                            "López-Silva, P. Núñez de Prado, M. & Fernández, V. (2022). Sobre Doxasticismos y Anti-Doxasticismos: Hacia un Mapeo del Problema Tipológico de los Delirios. Resistances: Journal of Philosophy of History. Online First.",
                            "López-Silva, P. et al. (2022). 'Are these my thoughts?’:  A 20-year prospective study of thought insertion, thought withdrawal and thought broadcasting and their relationship to auditory verbal hallucinations. Schizophrenia Research.",
                            "López-Silva, P. & Cavieres, A. (2022). El delirio psicótico como objeto de estudio multidisciplinar para la filosofía de la mente. Sophia, 33, 71-90.",
                            "López-Silva, P. (2021/2022) La marca de la Psicosis: Hacia una Breve Síntesis del Problema Tipológico de los Delirios. Revista Colombiana de Psiquiatría. DOI: 10.1016/j.rcp.2021.11.002.",
                        ],
                        "publications" => [
                            "2022: Esquizofrenia y el Problema de la Adaptabilidad Biológica de los Delirios - Conferencia Magistral – XVI Congreso Chileno de Psicología, Universidad de Valparaíso, Red de Escuela de Psicologías del CUECH, Chile (Presentación Adjunta).",
                            "2022: Schizophrenia and the adaptiveness of psychotic delusions - Workshop ‘The social roots of mental disorders’ – Departamento de Filosofía, Universidad de Granada, España (Presentación adjunta)",
                            "2022: Esquizofrenia y el Problema de la Adaptabilidad Biológica de los Delirios - Conferencia de la Asociación Latinoamericana de Filosofía Analítica (ALFAN) – Universidad Alberto Hurtado, Chile (Presentación adjunta).",
                            "2022: Anotaciones acerca del problema de la adaptabilidad de los delirios en esquizofrenia - Filosofía y psiquiatría: Aproximaciones epistemológicas contemporáneas – sociedad chilena de neurología, psiquiatría y neurología – SONEPSYN (Presentación adjunta).",
                        ],
                        "tesis" => [
                            "El proyecto implicó la realización de 2 tesis de pregrado (ya terminadas y entregadas). La primera (17) se dedicó al análisis del concepto de adaptabilidad biológica en psicosis (a cargo de Pía García, Matías Uribe, Anahí Villanueva y Ángela Alvarado), y la segunda (18) se dedicó a clarificar conceptualmente la forma en que la psicosis se manifiesta en el lenguaje, y la forma en que esta operación cognitiva podría ser adaptativa para los pacientes (a cargo de Amanda Cifuentes, María José Peñaloza y Astrid Bustamante). Ambas tesis fueron aprobadas (7,0 y 6,5 respectivamente) por la comisión de revisores pertenecientes a la asignatura de seminario de investigación conforme a los requerimientos del reglamento interno de la escuela de psicología UV. El proyecto también se asoció a la realización de una tesis de magister (en filosofía) a cargo de Claudio Anabalón, la qué aún está en proceso de escritura y ha sido asociada al FONDECYT regular adjudicado por el investigador."
                        ],
                        "difusion" => [
                            "En el marco del proyecto se realizó una presentación sobre la naturaleza de las enfermedades mentales (como la psicosis) y formas prevenir hábitos que podrían empeorar su expresión. La charla se denominó ‘¿Qué son las enfermedades mentales?’ y se impartió a estudiantes de 3er y 4to Medio de la Escuela Juana Ross de Valparaíso."
                        ],
                        "background" => [
                            "En el marco de la creación de redes internacionales, el IR fue invitado a realizar una estancia en el departamento de filosofía y psicología de la Universidad de Granada. Parte de la estancia fue financiada por el proyecto informado, y la otra parte fue financiada por la institución invitante. Además, durante este período se realizó una visita a la Universidad de Navarra donde se expuso sobre temas asociados al objetivo general del proyecto (presentación adjunta)."
                        ]
                        
                    ],
                    [ "name" => "Patricia Castañeda", 
                        "project" => "Mascarillas, máscaras e identidades en Pandemia COVID 19", 
                        "img" => "p_castaneda.jpg", 
                        "url" => "https://orcid.org/0000-0002-4676-5872",
                        "objective" => "Caracterizar las expresiones de identidad personal y social de la población de Valparaíso Metropolitano, manifestadas a través del uso de las mascarillas preventivas de contagio por COVID 19, en su condición de analogías de las máscaras como accesorios simbólicos de construcción de identidad dentro del orden social.",
                        "publications" => [
                            "Artículo en revista científica. Castañeda-Meneses, P. L. (2025). Rutinas, rupturas y herencias del confinamiento por pandemia COVID-19 en Chile. Prospectiva. Revista de Trabajo Social e intervención social, (40),e21114557. https://doi.org/10.25100/prts.v0i40.14557",
                            "Libro Castañeda, P. (2023). Mascarillas sanitarias, máscaras teatrales e identidades en pandemia COVID-19: galerías fotográficas. CieloSur Ediciones.https://repositoriobibliotecas.uv.cl/items/174d4984-ba69-4904-8720-e83e90b5aaa",
                        ],
                        "congresses" => [
                            "Interdisciplinary and Virtual Conference on Arts in Education 11 y 12 de Mayo 2022 Evento modalidad virtual Madrid, España. COVID 19, mascarillas sanitarias y máscaras teatrales.",
                            "XXXIII Congreso Latinoamericano de Sociología ALAS México 14 al 19 de agosto de 2022 Evento presencial y virtual Sedes en Ciudad de México, Guadalajara, San Luis Potosí y Mérida, México Mascarillas Sanitarias, máscaras teatrales e Identidades en Pandemia COVID-19.",
                            "Jornada de Investigación Centro Interdisciplinario de Investigación en Salud Territorial CIISTe Facultad de Medicina Universidad de Valparaíso Sede San Felipe 09 de Noviembre de 2022 Evento presencial Sede San Felipe Facultad de Medicina Universidad de Valparaíso Mascarillas Sanitarias, máscaras teatrales e Identidades en Pandemia COVID-19",
                        ]
                    ],
                    [ "name" => "Andrea Flanagan", 
                        "project" => "Experiencias en educación superior de estudiantes de primera generación de la zona central de Chile: Desafíos para la equidad educativa en tiempos de pandemia COVID 19", 
                        "img" => "AndreaPatriciaFlanagan.jpg", 
                        "url" => "https://colaboratoriocienciassociales.uv.cl/investigadores-ficha-84",
                        "objective" => [
                            "El objetivo central de esta investigación fue comprender y analizar en profundidad las experiencias de los estudiantes de primera generación (EPG) de universidades de la zona central (regiones de Valparaíso y Metropolitana), a objeto de construir un marco comprensivo sobre los factores que influyen en su permanencia y retención considerando el actual escenario de pandemia.",
                        ],
                        "publications" => [
                            "Flanagan-Bórquez, Andrea, Rojas-MurphyTagle, Andrés, Guzmán-Valenzuela, Carolina, & Varas-Aguilera, Pilar. (2023). Análisis crítico del estado de la investigación sobre estudiantes de primera generación en Latinoamérica. Revista mexicana de investigación educativa, 28(97), 363-390. Epub 06 de septiembre de 2023. Recuperado en 19 de enero de 2026, de http://www.scielo.org.mx/scielo.php?script=sci_arttext&pid=S1405-66662023000200363&lng=es&tlng=es.",
                        ],
                        "congresses" => [
                            "XVI Congreso Chileno de Psicología, Universidad de Valparaíso. 26-28 Octubre 2022. Presentación: “Estudiantes de primera generación en Latinoamérica: Avances y desafíos”.",
                            "AERA American Educational Research Association, Chicago, U.S.A. 13-16 April 2023. Presentación del siguiente trabajo: \"Analysis of the state of research on first-generation students in Latin America\".",
                        ],
                        "tesis" => [
                            "Se realizaron seis Seminarios de Investigación asociados a este proyecto. Estos Seminarios fueron realizados por estudiantes de 4° año de la Escuela de Psicología y finalizaron con éxito.",
                        ],
                        "difusion" => [
                            "Se realizó una presentación a profesores de la Universidad de Chile en relación a EPG, en la cual se presentaron los resultados preliminares de este estudio.",
                        ]
                    ]
                ]
            ]
        ];
        // Ahora compact ya tiene la variable definida
    return view('proyectosFACSO.index', compact('timelineData'));    
    }
}