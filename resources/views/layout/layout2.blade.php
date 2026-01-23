<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0">
    <title>FACSO Abierta | Colaboratorio</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon-16x16.png') }}">
    <meta name="msapplication-TileColor" content="#f25e63">
    <meta name="theme-color" content="#ffffff">
	<!-- Open Graph -->
	<meta property="og:url" content="https://colaboratoriocienciassociales.uchile.cl/" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="FACSO Abierta | Colaboratorio" />
	<meta property="og:description" content="Es un espacio de reconocimiento a las trayectorias, por cuanto no sólo divulga investigaciones y resultados de proyectos vigentes, sino que muestra su producción científica a lo largo de su vida académica." />
	<meta property="og:image" content="{{ asset('assets/images/og-image.png') }}" />
	<meta property="og:image:url" content="{{ asset('assets/images/og-image.png') }}" />
	<meta property="twitter:image" content="{{ asset('assets/images/og-t-image.png') }}" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,400;1,600&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Material Design Bootstrap -->
	<link  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css" rel="stylesheet" />
    <!-- Carola CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.3/dist/bootstrap-table.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-6BJP5GQMHS"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-6BJP5GQMHS');
	</script>
	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({
				pageLanguage: 'en',
				includedLanguages: 'es,en,fr,de,it,pt',
				layout: google.translate.TranslateElement.InlineLayout.SIMPLE
			}, 'google_translate_element');
		}
	</script>
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>
<body>
<!--Navbar-->
<nav class="navbar navbar-expand-lg sticky-top navbar-dark elegant-color-dark">
	<div class="container-fluid">
		<a class="navbar-brand" href="{{ route('home') }}">
			<img src="{{ asset('assets/images/uv/logo_colaboratorio_menu.png') }}" width="150" id="logo-menu">
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<i class="far fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto align-items-lg-center">
				<li class="nav-item"><a class="nav-link {{ request()->is('home','resultados','busqueda_avanzada') ? ' active' : '' }}" aria-current="page" href="{{ route('home') }}">Inicio</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle {{ request()->is('sobre') ? ' active' : '' }}" id="navbarSobre" data-bs-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">Acerca de</a>
					<ul class="dropdown-menu" aria-labelledby="navbarSobre">
						<li><a class="dropdown-item" href="{{ route('sobre') }}#sobre">Sobre el Colaboratorio</a></li>
						<li><a class="dropdown-item" href="{{ route('sobre') }}#equipo">Equipo de Trabajo</a></li>
						<li><a class="dropdown-item" href="{{ route('sobre') }}#registros">Registros</a></li>
					</ul>
				</li>
				<li class="nav-item"><a class="nav-link {{ request()->is('investigadores','investigadores-ficha-*') ? ' active' : '' }}" href="{{ route('investigadores.index') }}">Investigadoras/es</a></li>
				<li class="nav-item"><a class="nav-link {{ request()->is('nucleos') ? ' active' : '' }}" href="{{ route('nucleos') }}">Centros de Investigación</a></li>
				<li class="nav-item"><a class="nav-link {{ request()->is('proyectosfacso') ? ' active' : '' }}" href="{{ route('proyectosfacso') }}">Proyectos Facso</a></li>
				<li class="nav-item"><a class="nav-link {{ request()->is('jornadas') ? ' active' : '' }}" href="{{ route('jornadas') }}">Jornadas de Investigación</a></li>

				<li class="nav-item"><a class="nav-link {{ request()->is('redes') ? ' active' : '' }}" href="{{ route('redes') }}">Redes Colab</a></li>
				<li class="nav-item"><a class="nav-link {{ request()->is('contacto','contacto/send') ? ' active' : '' }}" href="{{ route('contacto') }}">Contacto</a></li>
			</ul>
			<ul class="navbar-nav ms-auto align-items-lg-center">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accesibilidad<i class="fal fa-universal-access fa-lg ms-2"></i></a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a id="auemntarTexto" class="dropdown-item">Aumentar tamaño texto<i class="far fa-search-plus ms-2"></i></a>
						<a id="disminuirTexto" class="dropdown-item">Disminuir tamaño texto<i class="far fa-search-minus ms-2"></i></a>
						<a id="grises" class="dropdown-item">Escala de grises<i class="far fa-adjust ms-2"></i></a>
						<a id="acOscuro" class="dropdown-item">Alto Contraste oscuro<i class="fas fa-adjust ms-2"></i></a>
						<a id="acClaro" class="dropdown-item">Alto Contraste claro<i class="fal fa-adjust ms-2"></i></a>
						<a id="reset" class="dropdown-item">Reset<i class="far fa-redo ms-2"></i></a>
						<a href="https://uchile.cl/Equidad-Inclusion" target="_blank" class="dropdown-item">Inclusión UChile<i class="fal fa-universal-access ms-2"></i></a>
					</div>
				</li>
				<div id="google_translate_element"></div>
			</ul>
		</div>
	</div>
</nav>
@yield('contenido')
<!--Newsletter-->
<section class="grey lighten-3 border-top">
	<form class="container py-5">
		@csrf
		<div class="row justify-content-center align-items-center flex-column-reverse flex-md-row">
			<div class="col-lg-5 col-xxl-4 text-center pt-4 pt-md-0">
				<h4 class="bebas text-lg-end mb-lg-0">Inscríbete para actualizaciones por mail<i class="far fa-arrow-right ms-2 azul gira-sm"></i></h4>
				<a class="link-simple darvuelta collapsed" data-bs-toggle="collapse" href="#preferencias" role="button">Preferencias<i class="fal fa-plus ms-2 azul"></i></a>
			</div>
			<div class="col-lg-4">
				<div class="form-floating z-depth-1">
					<input type="email" class="form-control form-control-lg" id="nlmail" name="nlmail" placeholder="Search" >
					<label for="nlmail">Email<i class="fal fa-envelope ms-2 azul"></i></label>
				</div>
			</div>
		</div>
		<div class="row justify-content-center align-items-center pt-4 collapse" id="preferencias">
			<div class="col-lg-6">
				<!-- Disciplinas -->
				<div class="form-group">
					<label for="sel-disciplina">Seleccione una o varias disciplinas:</label>
					<input type="text" class="form-control" placeholder="Escribe o selecciona una preferencia y presiona Enter" list="list-disciplina" id="sel-disciplina" onkeypress="addTerminos('sel-disciplina','tags-disciplina')">
					<datalist id="list-disciplina">
						<option>Antropología</option>
						<option>Educación</option>
						<option>Psicología</option>
						<option>Sociología</option>
						<option>Trabajo Social</option>
					</datalist>
					<input type="hidden" name="nldisciplinas" id="nldisciplinas" />
				</div>
				<div class="mt-2" id="tags-disciplina"></div>
				<!-- Autores/Investigadores -->
				<div class="form-group">
					<label for="sel-investigador">Seleccione una o varias Investigadoras/es:</label>
					<input type="text" class="form-control" placeholder="Escribe o selecciona una preferencia y presiona Enter" list="listInvestigador" id="sel-investigador" onkeypress="addTerminos('sel-investigador','tags-investigador')">
					<datalist id="listInvestigador">
					</datalist>
					<input type="hidden" name="nlautores" id="nlautores" />
				</div>
				<div class="mt-2" id="tags-investigador"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 text-center pt-4">
				<a class="btn btn-azul white" onclick="return verifica()">Suscribirse<i class="fal fa-paper-plane ms-2"></i></a>
			</div>
		</div>
	</form>
</section>
<!--Footer-->
<section class="elegant-color-dark text-white footer border-top" id="footer">
	<div class="container-fluid py-5">
		<div class="row align-items-end justify-content-center">
			<div class="col-lg-4 col-xl-3 text-center py-3">
				<img class="img-fluid" src="{{ asset('assets/images/logo_colaboratorio_blanco.png') }}" alt="Colaboratorio" width="250" id="logoFooter">
				<div class="pt-2">
					<a class="azul mx-2" type="button" role="button" href="https://www.linkedin.com/showcase/colaboratorio-facso-uchile/" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Linkedln Colaboratorio"><i class="fab fa-linkedin-in"></i><span class="sr-only">Ir a Linkedln COLAB</span></a>
					<a class="azul mx-2" type="button" role="button" href="https://www.instagram.com/colaboratorio.facsouchile" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Instagram Colaboratorio"><i class="fab fa-instagram"></i><span class="sr-only">Ir a Instagram COLAB</span></a>
					<a class="azul mx-2" type="button" role="button" href="https://www.youtube.com/@FACSOAbiertaInvestiga" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Youtube Colaboratorio"><i class="fab fa-youtube"></i><span class="sr-only">Ir a Youtube COLAB</span></a>
				</div>
			</div>
			<div class="col-lg-4 col-xl-3 text-center py-3">
				<img class="img-fluid" src="{{ asset('assets/images/logo-facso_investiga-white.png') }}" alt="Logo FACSO abierta" width="250" id="logoFacso">
				<div class="pt-2">
					<a class="azul mx-2" type="button" role="button" href="https://web.facebook.com/socialesuchile" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Facebook Facso"><i class="fab fa-facebook-f"></i><span class="sr-only">Ir a Facebook FACSO</span></a>
					<a class="azul mx-2" type="button" role="button" href="https://twitter.com/facsouchile" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Twitter Facso"><i class="fab fa-twitter"></i><span class="sr-only">Ir a Twitter FACSO</span></a>
					<a class="azul mx-2" type="button" role="button" href="https://www.instagram.com/facsouchile/" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Instagram Facso"><i class="fab fa-instagram"></i><span class="sr-only">Ir a Instagram FACSO</span></a>
					<a class="azul mx-2" type="button" role="button" href="https://www.youtube.com/@webfacso" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Youtube Facso"><i class="fab fa-youtube"></i><span class="sr-only">Ir a Youtube FACSO</span></a>
				</div>
			</div>
			<div class="col-lg-4 col-xl-3 text-center py-3">
				<img class="img-fluid" src="{{ asset('assets/images/uv/LOGO_UV_BLANCO.png') }}" alt="Logo UChile" width="260" id="logoUV" data-bs-toggle="tooltip" data-bs-placement="bottom" title="">
				<div class="pt-2">
					<a class="azul mx-2" type="button" role="button" href="https://www.facebook.com/uvalpo" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Facebook UV"><i class="fab fa-facebook-f"></i><span class="sr-only">Ir a Facebook UV</span></a>
					<a class="azul mx-2" type="button" role="button" href="https://twitter.com/@uvalpochile" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Twitter UV"><i class="fab fa-twitter"></i><span class="sr-only">Ir a Twitter UV</span></a>
					<a class="azul mx-2" type="button" role="button" href="https://www.instagram.com/uvalpochile" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Instagram de la UV"><i class="fab fa-instagram"></i><span class="sr-only">Ir a Instagram UV</span></a>
					<a class="azul mx-2" type="button" role="button" href="https://www.youtube.com/@uvalpochile" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Youtube UV"><i class="fab fa-youtube"></i><span class="sr-only">Ir a Youtube UV</span></a>
				</div>
			</div>
			<div class="col-lg-4 col-xl-3 text-center py-3">
				<p class="mb-2 text-lg-start tx-chico">Las obras contenidas en esta plataforma están bajo una <a href="https://creativecommons.org/licenses/by-nc-nd/4.0/deed.es" target="_blank" class="link-simple">Licencia Creative Commons Atribución-NoComercial-SinDerivar 4.0 Internacional</a></p>
				<a tabindex="0" type="button" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="focus" title="Usted es libre de" data-bs-content="Compartir, copiar y redistribuir el material en cualquier medio o formato."><i class="fab fa-creative-commons h4 mx-1 mb-0 azul"></i></a>
				<a tabindex="0" type="button" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="focus" title="Atribución:" data-bs-content="Usted debe dar crédito de manera adecuada, brindar un enlace a la licencia, e indicar si se han realizado cambios. Puede hacerlo en cualquier forma razonable, pero no de forma tal que sugiera que usted o su uso tienen el apoyo de la licenciante."><i class="fab fa-creative-commons-by h4 mx-1 mb-0 azul"></i></a>
				<a tabindex="0" type="button" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="focus" title="NoComercial:" data-bs-content="Usted no puede hacer uso del material con propósitos comerciales."><i class="fab fa-creative-commons-nc h4 mx-1 mb-0 azul"></i></a>
				<a tabindex="0" type="button" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="focus" title="SinDerivadas:" data-bs-content="Si remezcla, transforma o crea a partir del material, no podrá distribuir el material modificado."><i class="fab fa-creative-commons-nd h4 mx-1 mb-0 azul"></i></a>
			</div>
			<div class="col-12 text-center pt-5">
				<p class="tx-chico">Copyright © 2024 Universidad de Chile. Todos los derechos reservados</p>
			</div>
		</div>
	</div>
</section>
<!--Modal: modalConfirm-->
<div class="modal fade" id="modalSuscripcion" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-notify modal-investiga">
        <div class="modal-content">
            <button type="button" class="close z-depth-1" >
                <span aria-hidden="true" onclick="cerrar()">&times;</span>
            </button>
            <div class="modal-body">
                <div class="text-center">
                    <i class="fas fa-check fa-4x mb-3 animated rotateIn azul"></i>
                    <p>Gracias por suscribirse a nuestro Newsletter.</p>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <a type="button" class="btn bg-rosa waves-effect" onclick="cerrar()">Cerrar<i class="fal fa-times-circle ms-2"></i></a>
            </div>
        </div>
    </div>
</div>
<!--Modal: modalError-->
<div class="modal fade" id="modalError" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-notify modal-investiga">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                    <i class="fas fa-exclamation fa-4x mb-3 animated rotateIn azul"></i>
                    <p>Debe completar todos los datos necesarios para inscribirse al Newsletter, incluye al menos una opcion de Disciplinas e Investigadoras/es e incluir el correo electronico</p>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <a type="button" class="btn bg-rosa waves-effect" onclick="cerrar()">Cerrar<i class="fal fa-times-circle ms-2"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal -->
<div class="modal fade" id="modalVideo" tabindex="-1" role="dialog" aria-labelledby="modalVideo" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="modal-body mb-0 p-0 black">
				<div class="embed-responsive embed-responsive-16by9" id="vm-player">
					<iframe class="embed-responsive-item" src="" allow="fullscreen" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- I have JavaScript! -->
<!-- Bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-table@1.22.3/dist/bootstrap-table.min.js"></script>
<script src="{{ asset('assets/js/bootstrap-table-es-ES.js') }}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.js"></script>
<!-- More jquery -->
<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
@stack('js')
</body>
</html>
<!-- designed and writed by Carola del Río https://caroladelrio.com/ -->
