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
					<p class="mb-0 text-start b600">Gonzalo Lira</p>
					<p class="mb-0 pb-2 text-start border-bottom">Decano Facultad de Ciencias Sociales (FACSO)</p>
				</div>
				<div class="col-sm-6 col-md-4 col-xl-3 pb-5">
					<img class="img-fluid z-depth-1 mb-2" src="{{ asset('assets/images/uv/equipo_academico/secretaria.jpg') }}" alt="Cecilia Concha">
					<p class="mb-0 text-start b600">Cecilia Concha</p>
					<p class="mb-0 pb-2 text-start border-bottom">Secretaria Facultad de Ciencias Sociales (FACSO)</p>
				</div>
				<div class="col-sm-6 col-md-4 col-xl-3 pb-5">
					<img class="img-fluid z-depth-1 mb-2" src="{{ asset('assets/images/uv/equipo_academico/coordinadora.jpg') }}" alt="Ximena Faúndez">
					<p class="mb-0 text-start b600">Ximena Faúndez</p>
					<p class="mb-0 pb-2 text-start border-bottom">Coordinadora de investigación (FACSO)</p>
				</div>
				<div class="col-sm-6 col-md-4 col-xl-3 pb-5">
					<img class="img-fluid z-depth-1 mb-2" src="{{ asset('assets/images/uv/equipo_academico/cecilia_porto.jpg') }}" alt="Cecilia Porto Fuentes">
					<p class="mb-0 text-start b600">Cecilia Porto Fuentes</p>
					<p class="mb-0 pb-2 text-start border-bottom">Coordinadora de Vinculación con el Medio</p>
				</div>
				<div class="col-sm-6 col-md-4 col-xl-3 pb-5">
					<img class="img-fluid z-depth-1 mb-2" src="{{ asset('assets/images/uv/equipo_academico/jose_manuel_gaete.jpg') }}" alt="José Manuel Gaete Fiscella">
					<p class="mb-0 text-start b600">José Manuel Gaete Fiscella</p>
					<p class="mb-0 pb-2 text-start border-bottom">Coordinador de postgrado y postítulo</p>
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
						<a class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#modalVideo" data-videonumber="fHDZElDg6N8">
							<span class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Lanzamiento del Colaboratorio de Ciencias Sociales de la Universidad de Chile. 11 julio 2024.">Lanzamiento del Colaboratorio<i class="fas fa-play-circle fa-lg ms-2"></i></span>
						</a>
					</div>
				</div>
				<div class="col-lg-6 col-xl-4 pb-4">
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
				</div>
				<div class="col-lg-6 col-xl-4 pb-4">
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
				</div>
			</div>
			<div class="row pt-4 justify-content-center collapse" id="gal-biblio" data-bs-parent="#accordion-registros">
				<div class="col-lg-4 pb-4">
					<p class="b800 text-uppercase">10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile</p>
					<p>Lanzamiento en versión Demo del Colaboratorio, se realizó el 09 de abril en FACSO (auditorio Julieta Kirkwood) y consistió en una presentación del Colaboratorio en una versión intermedia-demo para público general, contando con la participación de bibliotecas internacionales. Expuso Antonieta Urquieta y la Decana Teresa Matus.</p>
				</div>
				<div class="col-lg-8">
					<div id="carouselBliblio" class="carousel slide" data-mdb-ride="carousel" data-mdb-carousel-init>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="{{ asset('assets/images/bibliotecas090424/DSC03113.jpg') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
							</div>
							<div class="carousel-item">
								<img src="{{ asset('assets/images/bibliotecas090424/DSC03119.jpg') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
							</div>
							<div class="carousel-item">
								<img src="{{ asset('assets/images/bibliotecas090424/DSC03121.jpg') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
							</div>
							<div class="carousel-item">
								<img src="{{ asset('assets/images/bibliotecas090424/DSC03131.jpg') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
							</div>
							<div class="carousel-item">
								<img src="{{ asset('assets/images/bibliotecas090424/DSC03132.jpg') }}" class="d-block w-100" alt="10° Congreso de Bibliotecas Universitarias y Especializadas de la Universidad de Chile"/>
							</div>
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
		</div>
	</section>

@endsection
