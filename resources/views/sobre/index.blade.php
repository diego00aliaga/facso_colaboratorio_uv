@extends('layout.layout2')
@section('contenido')
    <!--Content-->
    <div class="container pb-5" id="sobre">
        <div class="row justify-content-center pb-4">
            <div class="col-md-10 col-lg-8 col-xl-6 text-center pb-4">
                <img class="img-fluid mb-4" src="{{ asset('assets/images/test2.png') }}" width="500" id="test2">
                <h4 class="bebas">Sobre el Colaboratorio</h4>
            </div>
			<div class="col-lg-10 col-xl-8 pb-4">
    <p style="text-align: justify; text-align-last: left;">Es un <span class="b600">sistema abierto</span> que divulga la producción científica de investigadoras/es de la Facultad de Ciencias Sociales de la Universidad de Valparaíso. Busca <span class="b600">reconocer sus trayectorias</span> e impulsar <span class="b600">una gestión del conocimiento</span> en lógica <span class="b600">colaborativa, abierta y transdisciplinar</span>. Esta iniciativa se desarrolla en colaboración con la Facultad de Ciencias Sociales de la Universidad de Chile.</p>
    
    <h4 class="bebas text-center mt-5">¿CUÁLES SON LOS APORTES DEL CO-LABORATORIO?</h4>
    
    <p class="mt-4" style="text-align: justify; text-align-last: left;">Es un espacio de <span class="b600">reconocimiento a las trayectorias de producción científica</span>, desarrolladas por distintas generaciones de investigadores/as, para que su legado sea parte activa del acervo intelectual de nuestra comunidad investigativa.</p>
    
    <p style="text-align: justify; text-align-last: left;">Se gestiona en <span class="b600">lógica colaborativa</span>, por cuanto sus contenidos son aportados por las/los propios/as investigadores/as que ponen a disposición sus investigaciones, conformando con ello una potente herramienta de innovación pedagógica en la formación de nuevas/os investigadoras/es.</p>
    
    <p style="text-align: justify; text-align-last: left;">El Co-Laboratorio adopta una lógica de <span class="b600">Ciencia Abierta</span>, en tanto proporciona un espacio de divulgación del conocimiento accesible para académicos/as, investigadores/as en formación, estudiantes y público general, bajo el horizonte de promover colaboraciones científicas y el intercambio de información en beneficio de la ciencia y sociedad. Cada recurso contenido en esta plataforma cuenta con un identificador que permite divulgar, referenciar y citar los respectivos trabajos, aportando con ello a la producción de conocimiento en el campo de las Ciencias Sociales.</p>
    
    <p style="text-align: justify; text-align-last: left;">Se sustenta desde un <span class="b600">enfoque transdisciplinar</span>, reconociendo que la construcción del conocimiento en una lógica colaborativa entre diferentes disciplinas y campos del saber permite desarrollar abordajes más complejos sobre lo social.</p>
    
    <p style="text-align: justify; text-align-last: left;">Articula una <span class="b600">red a través del acoplamiento de Co-laboratorios de Ciencias Sociales en Chile</span>, configurándose como una herramienta de fortalecimiento político con propósito público, que amplía la divulgación e incidencia de las Ciencias Sociales en el país.</p>
    
    <div class="text-center pt-3 pb-5">
        <a class="btn bg-rosa" href="{{ asset('assets/docs/Ciencias_Sociales_para_Chile._Red_de_Co-Laboratorios_de_Investigacion_en_Ciencias_Sociales._Premisas_del_modelo.pdf') }}" download>Premisas del modelo<i class="fal fa-file-pdf fa-lg ms-2"></i></a>
    </div>
    
    <p class="tx-chico" style="text-align: justify; text-align-last: left;"><span class="b600">Para citar el Co-Laboratorio</span>: Urquieta, A., Matus, T., y Abarca, M.G. (2024). Co-Laboratorio de Investigación en Ciencias Sociales. Universidad de Chile. https://colaboratoriocienciassociales.uchile.cl/.</p>
</div>
        </div>
    </div>
		<section class="border-top" id="equipo">
		<div class="container py-5 text-dark">
			<div class="row justify-content-center py-4">
				<div class="col-12 pb-5">
					<p class="b800 mb-0 text-center">EQUIPO ACADÉMICO</p>
				</div>
				<div class="col-sm-6 col-md-4 col-xl-3 pb-5">
					<img class="img-fluid z-depth-1 mb-2" src="{{ asset('assets/images/uv/equipo_academico/decano.jpg') }}" alt="Gonzalo Lira">
					<p class="mb-0 text-start b600">Gonzalo Lira Mendiguren</p>
					<p class="mb-0 pb-2 text-start border-bottom">Decano Facultad de Ciencias Sociales (FACSO)</p>
				</div>
				<div class="col-sm-6 col-md-4 col-xl-3 pb-5">
					<img class="img-fluid z-depth-1 mb-2" src="{{ asset('assets/images/uv/equipo_academico/secretaria.jpg') }}" alt="Cecilia Concha">
					<p class="mb-0 text-start b600">Cecilia Concha Rios</p>
					<p class="mb-0 pb-2 text-start border-bottom">Secretaria Facultad de Ciencias Sociales (FACSO)</p>
				</div>
				<div class="col-sm-6 col-md-4 col-xl-3 pb-5">
					<img class="img-fluid z-depth-1 mb-2" src="{{ asset('assets/images/uv/equipo_academico/coordinadora.jpg') }}" alt="Ximena Faúndez">
					<p class="mb-0 text-start b600">Ximena Faúndez Abarca</p>
					<p class="mb-0 pb-2 text-start border-bottom">Coordinadora de Investigación (FACSO)</p>
				</div>
				<div class="col-sm-6 col-md-4 col-xl-3 pb-5">
					<img class="img-fluid z-depth-1 mb-2" src="{{ asset('assets/images/uv/equipo_academico/cecilia_porto.jpg') }}" alt="Cecilia Porto Fuentes">
					<p class="mb-0 text-start b600">Cecilia Porto Fuentes</p>
					<p class="mb-0 pb-2 text-start border-bottom">Coordinadora de Vinculación con el Medio</p>
				</div>
				<div class="col-sm-6 col-md-4 col-xl-3 pb-5">
					<img class="img-fluid z-depth-1 mb-2" src="{{ asset('assets/images/uv/equipo_academico/f_sotomayor.png') }}" alt="Francisco Sotomayor Lopez">
					<p class="mb-0 text-start b600">Francisco Sotomayor López</p>
					<p class="mb-0 pb-2 text-start border-bottom">Coordinador de Postgrado y Postítulo</p>
				</div>

				<div class="col-sm-6 col-md-4 col-xl-3 pb-5">
					<img class="img-fluid z-depth-1 mb-2" src="{{ asset('assets/images/uv/equipo_academico/marisol_rojas.jpg') }}" alt="Marisol Rojas Contreras">
					<p class="mb-0 text-start b600">Marisol Rojas Contreras</p>
					<p class="mb-0 pb-2 text-start border-bottom">Coordinadora Administrativa</p>
				</div>
				<div class="col-sm-6 col-md-4 col-xl-3 pb-5">
					<img class="img-fluid z-depth-1 mb-2" src="{{ asset('assets/images/uv/equipo_academico/daniela_jara.jpg') }}" alt="Daniela Jara Leiva">
					<p class="mb-0 text-start b600">Daniela Jara Leiva</p>
					<p class="mb-0 pb-2 text-start border-bottom">Directora Escuela Sociología</p>
				</div>
				<div class="col-sm-6 col-md-4 col-xl-3 pb-5">
					<img class="img-fluid z-depth-1 mb-2" src="{{ asset('assets/images/uv/equipo_academico/carlos_varas.jpg') }}" alt="Carlos Varas Alfaro">
					<p class="mb-0 text-start b600">Carlos Varas Alfaro</p>
					<p class="mb-0 pb-2 text-start border-bottom">Director Escuela Psicología</p>
				</div>
				<div class="col-sm-6 col-md-4 col-xl-3 pb-5">
					<img class="img-fluid z-depth-1 mb-2" src="{{ asset('assets/images/uv/equipo_academico/mauricio_ureta.jpg') }}" alt="Mauricio Ureta Bernal">
					<p class="mb-0 text-start b600">Mauricio Ureta Bernal</p>
					<p class="mb-0 pb-2 text-start border-bottom">Director Escuela Trabajo Social</p>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 pb-5">
					<p class="b800 mb-0 text-center">EQUIPO PROFESIONAL</p>
				</div>
				<!-- <div class="col-sm-6 col-md-4 col-xl-3 pb-5">
					<img class="img-fluid z-depth-1 mb-2" src="{{ asset('assets/images/colaboratorio_Susan_Fuentes.jpg') }}" alt="Susan Fuentes">
					<p class="mb-0 text-start b600">Susan Fuentes</p>
					<p class="mb-0 pb-2 text-start border-bottom">Coordinadora ejecutiva</p>
				</div>
				<div class="col-sm-6 col-md-4 col-xl-3 pb-5">
					<img class="img-fluid z-depth-1 mb-2" src="{{ asset('assets/images/colaboratorio_Ignacio_Espinoza.jpg') }}" alt="Ignacio Espinoza">
					<p class="mb-0 text-start b600">Ignacio Espinoza</p>
					<p class="mb-0 pb-2 text-start border-bottom">Asistente de investigación</p>
				</div>
				<div class="col-sm-6 col-md-4 col-xl-3 pb-5">
					<img class="img-fluid z-depth-1 mb-2" src="{{ asset('assets/images/colaboratorio_Renato_Soto.jpg') }}" alt="Renato Soto">
					<p class="mb-0 text-start b600">Renato Soto</p>
					<p class="mb-0 pb-2 text-start border-bottom">Desarrollador Web BackEnd</p>
				</div>
				<div class="col-sm-6 col-md-4 col-xl-3 pb-5">
					<img class="img-fluid z-depth-1 mb-2" src="{{ asset('assets/images/colaboratorio_Carola_del_Rio.jpg') }}" alt="Carola del Río">
					<p class="mb-0 text-start b600">Carola del Río</p>
					<p class="mb-0 pb-2 text-start border-bottom">Desarrolladora Web FrontEnd</p>
				</div>
				<div class="col-sm-6 col-md-4 col-xl-3 pb-5">
					<img class="img-fluid z-depth-1 mb-2" src="{{ asset('assets/images/colaboratorio_Simon_Torres.jpg') }}" alt="Simón Torres">
					<p class="mb-0 text-start b600">Simón Torres</p>
					<p class="mb-0 pb-2 text-start border-bottom">Edición general</p>
				</div>
				<div class="col-sm-6 col-md-4 col-xl-3 pb-5">
					<img class="img-fluid z-depth-1 mb-2" src="{{ asset('assets/images/coolaboratorio_Beatriz_Perez.jpg') }}" alt="Beatriz Pérez">
					<p class="mb-0 text-start b600">Beatriz Pérez</p>
					<p class="mb-0 pb-2 text-start border-bottom">Diseñadora gráfica</p>
				</div>
				<div class="col-sm-6 col-md-4 col-xl-3 pb-5">
					<img class="img-fluid z-depth-1 mb-2" src="{{ asset('assets/images/colaboratorio_Franco_Carrasco.jpg') }}" alt="Franco Carrasco">
					<p class="mb-0 text-start b600">Franco Carrasco</p>
					<p class="mb-0 pb-2 text-start border-bottom">Community manager</p>
				</div>
				<div class="col-sm-6 col-md-4 col-xl-3 pb-5">
					<img class="img-fluid z-depth-1 mb-2" src="{{ asset('assets/images/colaboratorio_Lissette_Fossa.jpg') }}" alt="Lissette Fossa">
					<p class="mb-0 text-start b600">Lissette Fossa</p>
					<p class="mb-0 pb-2 text-start border-bottom">Investigación periodística</p>
				</div>
				<div class="col-sm-6 col-md-4 col-xl-3 pb-5">
					<img class="img-fluid z-depth-1 mb-2" src="{{ asset('assets/images/colaboratorio_Daniel_Miranda.jpg') }}" alt="Daniel Miranda">
					<p class="mb-0 text-start b600">Daniel Miranda</p>
					<p class="mb-0 pb-2 text-start border-bottom">Realización audiovisual</p>
				</div>
				<div class="col-sm-6 col-md-4 col-xl-3 pb-5">
					<img class="img-fluid z-depth-1 mb-2" src="{{ asset('assets/images/colaboratorio_Juan_Carlos_Valenzuela.jpg') }}" alt="Juan Carlos Valenzuela">
					<p class="mb-0 text-start b600">Juan Carlos Valenzuela</p>
					<p class="mb-0 pb-2 text-start border-bottom">Producción audiovisual</p>
				</div> -->
			</div>
		</div>
	</section>
	<!-- Registros -->
	<section class="border-top" id="registros">
		<div class="container py-5 accordion" id="accordion-registros">
			<div class="row pt-4">
				<div class="col-12 pb-5 text-center">
					<h4 class="bebas">Registros</h4>
				</div>
				<div class="col-lg-6 col-xl-4 pb-4">
					<p class="b800 text-uppercase">Videos</p>
					<div class="d-grid gap-2">
						<a class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#modalVideo" data-videonumber="wZwumnqB2YM">
							<span class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="13 enero 2026, 12:47 hs">Psicóloga Ximena Faúndez en Congreso Futuro 2026<i class="fas fa-play-circle fa-lg ms-2"></i></span>
						</a>
					</div>
				</div>
				<!-- <div class="col-lg-6 col-xl-4 pb-4">
					<p class="b800 text-uppercase">Fotografías</p>
					<div class="d-grid gap-2">
						<a class="btn btn-outline-dark" role="button" data-bs-toggle="collapse" data-bs-target="#gal-biblio" aria-expanded="false" aria-controls="gal-biblio" id="btnBiblio">
							<span class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="09 abril 2024 en FACSO (auditorio Julieta Kirkwood).">10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile<i class="far fa-images fa-lg ms-2"></i></span>
						</a>
						<script type="text/javascript">
							document.getElementById("btnBiblio").addEventListener("click", function() {
								var target = document.getElementById("gal-biblio");
								window.scrollTo({
									top: target.offsetTop,
									behavior: "smooth"
								});
							});
						</script>
					</div>
				</div> -->
				<div class="col-lg-6 col-xl-4 pb-4">
					<p class="b800 text-uppercase">Noticias</p>
						<div class="d-grid gap-2">
						<a class="btn btn-outline-dark" role="button" data-bs-toggle="collapse" data-bs-target="#gal-biblio2" aria-expanded="false" aria-controls="gal-biblio2" data-scroll-target="#gal-biblio2">
							<span class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="14 abril 2025, 12:00 hs	">Facso inaugura año académico 2025 con conferencia sobre colaboración en Ciencias Sociales en Chile<i class="far fa-images fa-lg ms-2"></i></span>
						</a>
					</div>
					<div class="d-grid gap-2 mt-2">
						<a class="btn btn-outline-dark" role="button" data-bs-toggle="collapse" data-bs-target="#gal-biblio" aria-expanded="false" aria-controls="gal-biblio" data-scroll-target="#gal-biblio">
							<span class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="13 enero 2026">El Dr. Pablo López Silva participó del Congreso Futuro 2026<i class="far fa-images fa-lg ms-2"></i></span>
						</a>
					</div>
					<div class="d-grid gap-2 mt-2">
						<a class="btn btn-outline-dark" role="button" data-bs-toggle="collapse" data-bs-target="#gal-congfutro2" aria-expanded="false" aria-controls="gal-congfutro2" data-scroll-target="#gal-congfutro2">
							<span class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="13 enero 2026">Psicóloga Ximena Faúndez en Congreso Futuro 2026<i class="far fa-images fa-lg ms-2"></i></span>
						</a>
					</div>
					<div class="d-grid gap-2 mt-2">
						<a class="btn btn-outline-dark" role="button" data-bs-toggle="collapse" data-bs-target="#gal-danielaJara" aria-expanded="false" aria-controls="gal-danielaJara" data-scroll-target="#gal-danielaJara">
							<span class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="13 enero 2026">Daniela Jara obtiene premio a mejor artículo.<i class="far fa-images fa-lg ms-2"></i></span>
						</a>
					</div>
					<div class="d-grid gap-2 mt-2">
						<a class="btn btn-outline-dark" role="button" data-bs-toggle="collapse" data-bs-target="#gal-felixA" aria-expanded="false" aria-controls="gal-felixA" data-scroll-target="#gal-felixA">
							<span class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="13 enero 2026">Académico Felix Aguirre presenta su nuevo libro en la renovada editorial EDEVAL.<i class="far fa-images fa-lg ms-2"></i></span>
						</a>
					</div>
				</div>
				<div class="col-lg-6 col-xl-4 pb-4">
					<p class="b800 text-uppercase">Sitios Web</p>
					<div class="d-grid gap-2">
						<!-- <a class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#modalVideo" data-videonumber="hwooz-ofZnI">
							<span class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="17 julio 2024">Noticias UV<i class="fas fa-play-circle fa-lg ms-2"></i></span>
						</a> -->
						<a class="btn btn-outline-dark" href="https://sociales.uv.cl" target="_blank">
							<span class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="11 julio 2024">Noticias UV<i class="far fa-link fa-lg ms-2"></i></span>
						</a>

						<a class="btn btn-outline-dark" href="https://psicologia.uv.cl" target="_blank">
							<span class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="11 julio 2024">Psicología UV<i class="far fa-link fa-lg ms-2"></i></span>
						</a>
						<a class="btn btn-outline-dark" href="https://www.google.com/url?sa=t&source=web&rct=j&opi=89978449&url=https://www.uv.cl/radio/&ved=2ahUKEwjv0YHdobOSAxUSrJUCHc2vJ-YQFnoECBsQAQ&usg=AOvVaw0TxBFhCpQZGbVnvDLgQmT-" target="_blank">
							<span class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="11 julio 2024">Radio UV<i class="far fa-link fa-lg ms-2"></i></span>
						</a>
						<a class="btn btn-outline-dark" href="https://sociologia.uv.cl" target="_blank">
							<span class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="11 julio 2024">Sociología UV<i class="far fa-link fa-lg ms-2"></i></span>
						</a>
						<a class="btn btn-outline-dark" href="https://trabajosocial.uv.cl" target="_blank">
							<span class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="11 julio 2024">Trabajo Social UV<i class="far fa-link fa-lg ms-2"></i></span>
						</a>
						<!-- <a class="btn btn-outline-dark" href="https://www.elciudadano.com/chile/universidad-de-chile-lanza-innovador-colaboratorio-digital-de-investigacion/07/08/" target="_blank">
							<span class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="07 julio 2024">El Ciudadano<i class="far fa-link fa-lg ms-2"></i></span>
						</a> -->
					</div>
				</div>
				<!-- <div class="col-lg-6 col-xl-4 pb-4">
					<p class="b800 text-uppercase">Prensa</p>
					<div class="d-grid gap-2">
						<a class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#modalVideo" data-videonumber="hwooz-ofZnI">
							<span class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="17 julio 2024">Cooperativa Ciencia<i class="fas fa-play-circle fa-lg ms-2"></i></span>
						</a>
						<a class="btn btn-outline-dark" href="https://uchile.cl/noticias/218295/u-de-chile-lanza-co-laboratorio-de-investigacion-en-ciencias-sociales" target="_blank">
							<span class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="11 julio 2024">Noticias UChile<i class="far fa-link fa-lg ms-2"></i></span>
						</a>
						<a class="btn btn-outline-dark" href="https://radio.uchile.cl/2024/07/11/ciencias-sociales-para-chile-facso-lanza-novedoso-co-laboratorio-en-investigacion/" target="_blank">
							<span class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="11 julio 2024">Diario UChile<i class="far fa-link fa-lg ms-2"></i></span>
						</a>
						<a class="btn btn-outline-dark" href="https://www.elciudadano.com/chile/universidad-de-chile-lanza-innovador-colaboratorio-digital-de-investigacion/07/08/" target="_blank">
							<span class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="07 julio 2024">El Ciudadano<i class="far fa-link fa-lg ms-2"></i></span>
						</a>
					</div>
				</div> -->
			</div>
				<div class="row pt-4 justify-content-center collapse" id="gal-biblio2" data-bs-parent="#accordion-registros">
				<div class="col-lg-4 pb-4">
					<p class="b800 text-uppercase">Facso inaugura año académico 2025 con conferencia sobre colaboración en Ciencias Sociales en Chile</p>
					<p style="text-align: justify;">Ciencias Sociales para Chile, una red de colaboración en ciencia abierta” es la conferencia con que la Facultad de Ciencias Sociales (Facso) de la Universidad de Valparaíso inaugura su año académico 2025.</p>
				</div>
				<div class="col-lg-8">
					<div id="carouselBliblio0" class="carousel slide" data-mdb-ride="carousel" data-mdb-carousel-init>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="{{ asset('assets/images/uv/noticias/noticia1.png') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
							</div>
								<!-- <div class="carousel-item">
									<img src="{{ asset('assets/images/bibliotecas090424/DSC03121.jpg') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
								</div>
								<div class="carousel-item">
									<img src="{{ asset('assets/images/bibliotecas090424/DSC03131.jpg') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
								</div>
								<div class="carousel-item">
									<img src="{{ asset('assets/images/bibliotecas090424/DSC03132.jpg') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
								</div> -->
						</div>
						<!-- <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBliblio0" data-mdb-slide="prev">
							<span aria-hidden="true"><i class="fas fa-arrow-left"></i></span>
							<span class="visually-hidden">Anterior</span>
						</button>
						<button class="carousel-control-next" type="button" data-mdb-target="#carouselBliblio" data-mdb-slide="next">
							<span aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
							<span class="visually-hidden">Siguiente</span>
						</button> -->
					</div>
				</div>
				<div class="col-12 pt-4 text-center">
					<button type="button" class="btn btn-outline-dark btn-floating" data-mdb-ripple-init data-mdb-ripple-color="dark" data-bs-toggle="collapse" data-bs-target="#gal-biblio2">
						<i class="far fa-times"></i>
					</button>
				</div>
			</div>
			<div class="row pt-4 justify-content-center collapse" id="gal-biblio" data-bs-parent="#accordion-registros">
				<div class="col-lg-4 pb-4">
					<p class="b800 text-uppercase">El Dr. Pablo López Silva participó del Congreso Futuro 2026</p>
					<p style="text-align: justify;">En el marco del Congreso Futuro 2026, el Dr. Pablo López Silva participó del "Panel Año del Cerebro Chile 2026", que se consagra como un espacio interdisciplinar que conecta la neurociencia desarrollada en Chile, para discutir sobre los grandes desafíos contemporáneos, como los cambios sociales, culturales y tecnológicos que impactan en la salud mental, el aprendizaje, la creatividad y la convivencia, invitándonos a reflexionar sobre el cerebro, el bienestar individual y colectivo.</p>
				</div>
				<div class="col-lg-8">
					<div id="carouselBliblio" class="carousel slide" data-mdb-ride="carousel" data-mdb-carousel-init>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="{{ asset('assets/images/uv/noticias/pablo_lopez_02.jpg') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
							</div>
							<div class="carousel-item">
								<img src="{{ asset('assets/images/uv/noticias/pablo_lopez_01.jpg') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
							</div>
								<!-- <div class="carousel-item">
									<img src="{{ asset('assets/images/bibliotecas090424/DSC03121.jpg') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
								</div>
								<div class="carousel-item">
									<img src="{{ asset('assets/images/bibliotecas090424/DSC03131.jpg') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
								</div>
								<div class="carousel-item">
									<img src="{{ asset('assets/images/bibliotecas090424/DSC03132.jpg') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
								</div> -->
						</div>
						<button class="carousel-control-prev" type="button" data-mdb-target="#carouselBliblio" data-mdb-slide="prev">
							<span aria-hidden="true"><i class="fas fa-arrow-left"></i></span>
							<span class="visually-hidden">Anterior</span>
						</button>
						<button class="carousel-control-next" type="button" data-mdb-target="#carouselBliblio" data-mdb-slide="next">
							<span aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
							<span class="visually-hidden">Siguiente</span>
						</button>
					</div>
				</div>
				<div class="col-12 pt-4 text-center">
					<button type="button" class="btn btn-outline-dark btn-floating" data-mdb-ripple-init data-mdb-ripple-color="dark" data-bs-toggle="collapse" data-bs-target="#gal-biblio">
						<i class="far fa-times"></i>
					</button>
				</div>
			</div>
			<div class="row pt-4 justify-content-center collapse" id="gal-congfutro2" data-bs-parent="#accordion-registros">
				<div class="col-lg-4 pb-4">
					<p class="b800 text-uppercase">Psicóloga Ximena Faúndez en Congreso Futuro: «El futuro de las niñeces trans es un test de la calidad democrática del país»</p>
					<p style="text-align: justify;">La académica de la Universidad de Valparaíso, Ximena Faúndez, abordó la urgencia de transitar desde la normativa legal hacia una práctica cotidiana que garantice los derechos fundamentales de niños, niñas y adolescentes trans.</p>
				</div>
				<div class="col-lg-8">
					<div id="carouselBliblio1" class="carousel slide" data-mdb-ride="carousel" data-mdb-carousel-init>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="{{ asset('assets/images/uv/noticias/ximena.jpg') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
							</div>
							<!-- <div class="carousel-item">
								<img src="{{ asset('assets/images/uv/noticias/pablo_lopez_01.jpg') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
							</div> -->
								<!-- <div class="carousel-item">
									<img src="{{ asset('assets/images/bibliotecas090424/DSC03121.jpg') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
								</div>
								<div class="carousel-item">
									<img src="{{ asset('assets/images/bibliotecas090424/DSC03131.jpg') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
								</div>
								<div class="carousel-item">
									<img src="{{ asset('assets/images/bibliotecas090424/DSC03132.jpg') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
								</div> -->
						</div>

						</button>
					</div>
				</div>
				<div class="col-12 pt-4 text-center">
					<button type="button" class="btn btn-outline-dark btn-floating" data-mdb-ripple-init data-mdb-ripple-color="dark" data-bs-toggle="collapse" data-bs-target="#gal-congfutro2">
						<i class="far fa-times"></i>
					</button>
				</div>
			</div>
			
			<div class="row pt-4 justify-content-center collapse" id="gal-danielaJara" data-bs-parent="#accordion-registros">
				<div class="col-lg-4 pb-4">
					<p class="b800 text-uppercase">Daniela Jara obtiene premio a "mejor artículo" en el Congreso LASA por investigación financiada con proyecto miniCOES (2019).</p>
					<p style="text-align: justify;">La académica de la Universidad de Valparaíso, Daniela Jara (Universidad de Valparaíso - Chile), junto a Ana Figueiredo (U.Mayor) y Marcela Cornejo (Pontificia Universidad Católica de Chile) obtienen premio a "mejor artículo" en el Congreso LASA por investigación financiada con proyecto miniCOES.</p>
				</div>
				<div class="col-lg-8">
					<div id="carouselBliblio2" class="carousel slide" data-mdb-ride="carousel" data-mdb-carousel-init>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="{{ asset('assets/images/uv/noticias/danielaJara.png') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
							</div>
							<!-- <div class="carousel-item">
								<img src="{{ asset('assets/images/uv/noticias/pablo_lopez_01.jpg') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
							</div> -->
								<!-- <div class="carousel-item">
									<img src="{{ asset('assets/images/bibliotecas090424/DSC03121.jpg') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
								</div>
								<div class="carousel-item">
									<img src="{{ asset('assets/images/bibliotecas090424/DSC03131.jpg') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
								</div>
								<div class="carousel-item">
									<img src="{{ asset('assets/images/bibliotecas090424/DSC03132.jpg') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
								</div> -->
						</div>
						<!-- <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBliblio" data-mdb-slide="prev">
							<span aria-hidden="true"><i class="fas fa-arrow-left"></i></span>
							<span class="visually-hidden">Anterior</span>
						</button>
						<button class="carousel-control-next" type="button" data-mdb-target="#carouselBliblio" data-mdb-slide="next">
							<span aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
							<span class="visually-hidden">Siguiente</span>
						</button> -->
					</div>
				</div>
				<div class="col-12 pt-4 text-center">
					<button type="button" class="btn btn-outline-dark btn-floating" data-mdb-ripple-init data-mdb-ripple-color="dark" data-bs-toggle="collapse" data-bs-target="#gal-danielaJara">
						<i class="far fa-times"></i>
					</button>
				</div>
			</div>

			<div class="row pt-4 justify-content-center collapse" id="gal-felixA" data-bs-parent="#accordion-registros">
				<div class="col-lg-4 pb-4">
					<p class="b800 text-uppercase">Académico Felix Aguirre presenta su nuevo libro en la renovada editorial EDEVAL</p>
					<p style="text-align: justify;">Nuestro académico, Félix Aguirre, presentó oficialmente su nuevo libro “Reformistas antes que socialistas. La cultura política y los orígenes del discurso sociológico en la formación intelectual del socialismo fabiano (1884-1889)”, en el marco del relanzamiento del sello editorial EDEVAL de la Facultad de Derecho de la Universidad de Valparaíso.</p>
				</div>
				<div class="col-lg-8">
					<div id="carouselBliblio3" class="carousel slide" data-mdb-ride="carousel" data-mdb-carousel-init>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="{{ asset('assets/images/uv/noticias/felixAguirre.jpg') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
							</div>
							<!-- <div class="carousel-item">
								<img src="{{ asset('assets/images/uv/noticias/pablo_lopez_01.jpg') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
							</div> -->
								<!-- <div class="carousel-item">
									<img src="{{ asset('assets/images/bibliotecas090424/DSC03121.jpg') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
								</div>
								<div class="carousel-item">
									<img src="{{ asset('assets/images/bibliotecas090424/DSC03131.jpg') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
								</div>
								<div class="carousel-item">
									<img src="{{ asset('assets/images/bibliotecas090424/DSC03132.jpg') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
								</div> -->
						</div>
						<!-- <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBliblio" data-mdb-slide="prev">
							<span aria-hidden="true"><i class="fas fa-arrow-left"></i></span>
							<span class="visually-hidden">Anterior</span>
						</button>
						<button class="carousel-control-next" type="button" data-mdb-target="#carouselBliblio" data-mdb-slide="next">
							<span aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
							<span class="visually-hidden">Siguiente</span>
						</button> -->
					</div>
				</div>
				<div class="col-12 pt-4 text-center">
					<button type="button" class="btn btn-outline-dark btn-floating" data-mdb-ripple-init data-mdb-ripple-color="dark" data-bs-toggle="collapse" data-bs-target="#gal-felixA">
						<i class="far fa-times"></i>
					</button>
				</div>
			</div>
		</div>
	</section>
			</div>
		</div>
	</section>
	<!-- Registros -->

	<!-- ========================================
		 JAVASCRIPT - REFACTORIZADO CON PRINCIPIOS SOLID Y DRY
		 ======================================== -->
	<script>
		'use strict';

		// ========================================
		// CLASE: ScrollManager (Single Responsibility)
		// Gestiona el scroll suave a elementos colapsables
		// ========================================
		class CollapseScrollManager {
			constructor(config = {}) {
				this.offset = config.offset || -100;
				this.scrollDelay = config.scrollDelay || 350;
				this.activeCollapses = new Set();
				this._bindEvents();
			}

			_bindEvents() {
				// Event delegation: escuchar todos los eventos de collapse en un solo listener
				document.addEventListener('shown.bs.collapse', (e) => {
					this._handleCollapseShown(e);
				});

				document.addEventListener('hidden.bs.collapse', (e) => {
					this._handleCollapseHidden(e);
				});
			}

			_handleCollapseShown(event) {
				const targetId = `#${event.target.id}`;
				
				// Verificar si este collapse debe hacer scroll
				if (this.activeCollapses.has(targetId)) {
					this.activeCollapses.delete(targetId);
					this._scrollToElement(event.target);
				}
			}

			_handleCollapseHidden(event) {
				const targetId = `#${event.target.id}`;
				this.activeCollapses.delete(targetId);
			}

			_scrollToElement(element) {
				if (!element) return;

				setTimeout(() => {
					const elementPosition = element.getBoundingClientRect().top;
					const offsetPosition = elementPosition + window.pageYOffset + this.offset;

					window.scrollTo({
						top: offsetPosition,
						behavior: 'smooth'
					});
				}, this.scrollDelay);
			}

			registerScrollIntent(targetSelector) {
				this.activeCollapses.add(targetSelector);
			}
		}

		// ========================================
		// CLASE: CollapseButtonController (Single Responsibility)
		// Gestiona los botones que activan collapses con scroll
		// ========================================
		class CollapseButtonController {
			constructor(scrollManager) {
				this.scrollManager = scrollManager;
				this._setupEventDelegation();
			}

			_setupEventDelegation() {
				// Event delegation: un solo listener para todos los botones
				document.addEventListener('click', (e) => {
					const button = e.target.closest('[data-scroll-target][data-bs-toggle="collapse"]');
					
					if (button) {
						this._handleButtonClick(button);
					}
				});
			}

			_handleButtonClick(button) {
				const targetSelector = button.getAttribute('data-scroll-target');
				const isExpanded = button.getAttribute('aria-expanded') === 'true';

				// Solo registrar intención de scroll si el collapse se va a abrir
				if (!isExpanded && targetSelector) {
					this.scrollManager.registerScrollIntent(targetSelector);
				}
			}
		}

		// ========================================
		// INICIALIZACIÓN DE LA APLICACIÓN
		// ========================================
		let collapseApp = null;

		window.addEventListener('DOMContentLoaded', () => {
			const scrollManager = new CollapseScrollManager({
				offset: -100,
				scrollDelay: 350
			});
			
			collapseApp = new CollapseButtonController(scrollManager);
		});
	</script>

@endsection
