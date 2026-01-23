@extends('layout.layout')
@section('contenido')
<!-- Video & Buscador -->
<div class="bg-video">
	<video src="{{ asset('assets/images/facso-bg-video.mp4') }}" autoplay loop playsinline muted poster="{{ asset('assets/images/bg.jpg') }}"></video>
	<div class="mask"></div>
	<div class="container h-100 py-5" style="position: relative;">
		<div class="row justify-content-center align-items-center" style="min-height: 70vh;">
			<div class="col-lg-10 col-xl-8 text-center">
				<img class="img-fluid mx-auto mb-5" src="{{ asset('assets/images/uv/logo_colaboratorio2.png') }}" width="600" alt="Colaboratorio de investigación en Ciencias Sociales" id="logoColab">
				<h5 class="text-start mb-5 b600" style="position: relative;">Es un <span class="azul">sistema abierto</span> que divulga la producción científica de investigadoras/es de la Facultad de Ciencias Sociales de la Universidad de Valparaíso. Busca reconocer sus trayectorias e impulsar una <span class="azul">gestión del conocimiento</span> en lógica <span class="azul">colaborativa, abierta y transdisciplinar</span>. Esta iniciativa se desarrolla en colaboración con la Facultad de Ciencias Sociales de la Universidad de Chile.</h5>
				<div class="text-start" id="searchTemas">
					<form id="buscador" name="buscador" action="{{ route('resultados') }}" method="post">
					@csrf
						<div class="text-start" id="searchTemas" style="display: none;">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="todos" value="1" id="searchAll">
								<label class="form-check-label tx-chico" for="searchAll">Todo</label>
							</div>
							<div class="form-check">
								<input class="form-check-input notAll" type="checkbox" name="investigadores" value="1" id="searchInvestigadores">
								<label class="form-check-label tx-chico" for="searchInvestigadores">Investigadoras/es</label>
							</div>
							<div class="form-check">
								<input class="form-check-input notAll" type="checkbox" name="proyectos" value="1" id="searchProyectos">
								<label class="form-check-label tx-chico" for="searchProyectos">Proyectos</label>
							</div>
							<div class="form-check">
								<input class="form-check-input notAll" type="checkbox" name="publicaciones" value="1" id="searchPublicaciones">
								<label class="form-check-label tx-chico" for="searchPublicaciones">Publicaciones</label>
							</div>
							<div class="form-check">
								<input class="form-check-input notAll" type="checkbox" name="recursos" value="1" id="searchRecursos">
								<label class="form-check-label tx-chico" for="searchRecursos">Recursos</label>
							</div>
						</div>
						<div class="form-floating input-group input-group-lg z-depth-1">
							<input type="text" class="form-control form-control-lg" name="campo" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" id="bigSearch" placeholder="Buscar" required>
							<!--label for="floatingInput">Buscar</label-->
							<button type="submit" class="input-group-text" id="inputGroup-sizing-lg"><i class="far fa-search ms-2 azul"></i></button>
						</div>
					</form>
					<div class="text-start pt-3" style="position: relative;">
						<a type="button" class="link-simple" href="{{ route('busqueda_avanzada') }}">Búsqueda avanzada<i class="far fa-arrow-right ms-2 azul"></i></a>
					</div>
				</div> 
			</div>
		</div>
	</div>
</div> 
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
				<li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('home') }}">Inicio</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarSobre" data-bs-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">Acerca de</a>
					<ul class="dropdown-menu" aria-labelledby="navbarSobre">
						<li><a class="dropdown-item" href="{{ route('sobre') }}#sobre">Sobre el colaboratorio</a></li>
						<li><a class="dropdown-item" href="{{ route('sobre') }}#equipo">Equipo de Trabajo</a></li>
						<li><a class="dropdown-item" href="{{ route('sobre') }}#registros">Registros</a></li>
					</ul>
				</li>
				<li class="nav-item"><a class="nav-link" href="{{ route('investigadores.index') }}">Investigadores/as</a></li>
				<li class="nav-item"><a class="nav-link" href="{{ route('nucleos') }}">CENTROS DE INVESTIGACIÓN</a></li>
				<li class="nav-item"><a class="nav-link" href="{{ route('proyectosfacso') }}">Proyectos FACSO</a></li>
				<li class="nav-item"><a class="nav-link" href="{{ route('jornadas') }}">JORNADAS DE INVESTIGACIÓN</a></li>

				<li class="nav-item"><a class="nav-link" href="{{ route('redes') }}">Redes Colab</a></li>
				<li class="nav-item"><a class="nav-link" href="{{ route('contacto') }}">Contacto</a></li>
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
<!--Content-->
<div class="container pb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-6 text-center">
            <img class="img-fluid mb-5" src="{{ asset('assets/images/test1.png') }}" id="test1">
			<h5 class="text-start mb-5 b600" style="position: relative;">Es un <span class="azul">sistema abierto</span> que divulga la producción científica de investigadoras/es de la Facultad de Ciencias Sociales de la Universidad de Valparaíso. Busca reconocer sus trayectorias e impulsar una <span class="azul">gestión del conocimiento</span> en lógica <span class="azul">colaborativa, abierta y transdisciplinar</span>. Esta iniciativa se desarrolla en colaboración con la Facultad de Ciencias Sociales de la Universidad de Chile.</h5>
            <p class='text-start'><span class='b600'>Es un espacio de reconocimiento a las trayectorias</span>, por cuanto no sólo divulga investigaciones y resultados de proyectos vigentes, sino que muestra su producción científica a lo largo de su vida académica.</p>
            <a class="btn bg-rosa" href="{{ route('sobre') }}">Leer más sobre el colaboratorio<i class="far fa-plus fa-lg ms-2"></i></a>
        </div>
    </div>
</div>
<!-- Ultimos proyectos -->
<section class="grey lighten-2">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h4 class="bebas">Últimos Ingresos</h4>
            </div>
        </div>
        <div class="row">
			@foreach ($ingresos as $ingreso)
				@if ($ingreso->tipo == 'Proyecto') @php $tipo="proyecto"; @endphp @endif
				@if ($ingreso->tipo == 'Documento') @php $tipo="recursos"; @endphp @endif
				@if ($ingreso->tipo == 'Publicación') @php $tipo="publicacion"; @endphp @endif
				<div class="col-xl-3 col-md-6 py-4">
					<div class="p-3 z-depth-1 white border">
						<p class="bebas mb-1 text-truncate ultimos">{{$ingreso->titulo}}</p>
						<p class="tx-chico b600 mb-0">Autor: </p>
						<p>{{ $ingreso->funcionario}}</p>
						<a class="btn btn-outline-black" href="ficha/{{ $tipo }}/{{$ingreso->id}}">Ver<i class="far fa-eye ms-2 azul"></i></a>
					</div>
				</div>
			@endforeach
        </div>
    </div>
</section>
@endsection
@push('js')
    <script type="text/javascript">
        $('#buscador').submit(function(event) {
            //event.preventDefault();
            let allVals = 0;
            $('input[type="checkbox"]:checked').each(function () {
                allVals = allVals + parseInt($(this).val());
            });
            if (allVals === 0){
                $("#searchAll").trigger("click");
            }
        });
    </script>
@endpush
