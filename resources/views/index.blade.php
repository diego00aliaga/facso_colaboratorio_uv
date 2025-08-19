@extends('layouts.home')

@section('content')
<!--bg video-->
  <main id="inicio">
    <div class="view jarallax" data-jarallax-video="mp4:images/facso-bg-video.mp4">
      <img class="jarallax-img" src="images/bg.jpg" alt="Facultad de Ciencias Sociales, Universidad de Chile">
      <div class="mask" style="background-color: rgba(255,255,255,.85);">
      </div>
        <div class="container h-100 py-5">
          <div class="row flex-center" style="min-height: 70vh;">
            <div class="col-lg-10 col-xl-8 text-center">
              <!-- <img class="img-fluid mx-auto mb-5" src="images/logo-facso_investiga.png" width="280" alt="FACSO abierta"> -->
              <img class="img-fluid mx-auto mb-5" src="images/logo_colaboratorio.png" width="420" alt="Colaboratorio de investigación en Ciencias Sociales">
              <h5 class="text-start mb-5 b600" style="position: relative;">Es un <span class="azul">sistema abierto</span> que divulga la producción científica de investigadoras/es de la Facultad de Ciencias Sociales de la Universidad de Valparaíso. Busca reconocer sus trayectorias e impulsar una <span class="azul">gestión del conocimiento</span> en lógica <span class="azul">colaborativa, abierta y transdisciplinar</span>. Esta iniciativa se desarrolla en colaboración con la Facultad de Ciencias Sociales de la Universidad de Chile.</h5>
              <!-- Temas -->
              <div class="text-start" id="searchTemas">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="searchAll">
                  <label class="form-check-label tx-chico" for="searchAll">Todo</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input notAll" type="checkbox" value="" id="searchInvestigadores">
                  <label class="form-check-label tx-chico" for="searchInvestigadores">Investigadores/as</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input notAll" type="checkbox" value="" id="searchProyectos">
                  <label class="form-check-label tx-chico" for="searchProyectos">Proyectos</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input notAll" type="checkbox" value="" id="searchPublicaciones">
                  <label class="form-check-label tx-chico" for="searchPublicaciones">Publicaciones</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input notAll" type="checkbox" value="" id="searchRecursos">
                  <label class="form-check-label tx-chico" for="searchRecursos">Recursos</label>
                </div>
              </div>
              <div class="form-floating input-group input-group-lg z-depth-1">
                <input type="text" class="form-control form-control-lg" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" id="bigSearch" placeholder="Buscar">
                <label for="floatingInput">Buscar</label>
                <a href="resultados-busqueda.html" class="input-group-text" id="inputGroup-sizing-lg"><i class="far fa-search ms-2 azul"></i></a>
              </div>
              <div class="text-end pt-3">
                <a type="button" class="btn btn-sm btn-outline-black white" href="busqueda-avanzada.html">Búsqueda avanzada<i class="far fa-arrow-right ms-2 azul"></i></a>
              </div>
            </div>
          </div>
        </div>
    </div>
  </main>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg sticky-top navbar-dark elegant-color-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">
        <img src="images/uv/logo_colaboratorio_menu.png" width="150">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sobre.html">Sobre el colaboratorio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="investigadores.html">Investigadores/as</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.html">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-sm btn-outline-light" href="#!">English</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--Content-->
  <div class="container pb-5">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-xl-6 text-center">
        <img class="img-fluid mb-5" src="images/grafica1.png">
        <p class="text-start b600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consectetur finibus ex et consectetur. Cras pellentesque leo eu pulvinar iaculis. Vestibulum scelerisque semper felis quis consectetur. Proin sollicitudin odio ac sem efficitur scelerisque. Mauris pharetra enim ut magna facilisis venenatis. Praesent at convallis dui, ac rhoncus est. Pellentesque non justo gravida, lobortis enim ut, iaculis dui. Sed elementum id leo condimentum dictum. Duis maximus molestie ornare.</p>
        <p class="text-start">Ut ac accumsan neque. Suspendisse ultricies erat a elit varius, sit amet convallis erat dictum. Maecenas dapibus gravida mi et dapibus. Morbi dignissim luctus posuere. Donec bibendum vitae ante non ultrices. Cras viverra augue vitae augue porta, at viverra libero mollis. Nulla orci nibh, gravida ut lectus quis, ultrices hendrerit turpis.</p>
        <a class="btn bg-rosa" href="sobre.html">Leer más sobre el colaboratorio<i class="far fa-plus fa-lg ms-2"></i></a>
      </div>
    </div>
  </div>
  <section class="grey lighten-2">
    <div class="container py-5">
      <div class="row">
        <div class="col-12 text-center">
          <h4 class="bebas">Últimos ingresos</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-3 col-md-6 py-4">
          <div class="p-3 z-depth-1 white">
            <p class="bebas mb-1">Between Acceptance and Rejection: How Gender Influences the Implementation Climate of a School Sexuality Education Program</p>
            <p class="tx-chico b600 mb-0">Autor:</p>
            <p>Juan Pérez</p>
            <a class="btn btn-outline-black" href="ficha-proyecto.html">Ver<i class="far fa-eye ms-2 azul"></i></a>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 py-4">
          <div class="p-3 z-depth-1 white">
            <p class="bebas mb-1">Between Acceptance and Rejection: How Gender Influences the Implementation Climate of a School Sexuality Education Program</p>
            <p class="tx-chico b600 mb-0">Autor:</p>
            <p>Juan Pérez</p>
            <a class="btn btn-outline-black" href="ficha-proyecto.html">Ver<i class="far fa-eye ms-2 azul"></i></a>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 py-4">
          <div class="p-3 z-depth-1 white">
            <p class="bebas mb-1">Between Acceptance and Rejection: How Gender Influences the Implementation Climate of a School Sexuality Education Program</p>
            <p class="tx-chico b600 mb-0">Autor:</p>
            <p>Juan Pérez</p>
            <a class="btn btn-outline-black" href="ficha-proyecto.html">Ver<i class="far fa-eye ms-2 azul"></i></a>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 py-4">
          <div class="p-3 z-depth-1 white">
            <p class="bebas mb-1">Between Acceptance and Rejection: How Gender Influences the Implementation Climate of a School Sexuality Education Program</p>
            <p class="tx-chico b600 mb-0">Autor:</p>
            <p>Juan Pérez</p>
            <a class="btn btn-outline-black" href="ficha-proyecto.html">Ver<i class="far fa-eye ms-2 azul"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Newsletter-->
  <section class="grey lighten-3">
    <form class="container py-5">
      <div class="row justify-content-center align-items-center flex-column-reverse flex-md-row">
        <div class="col-lg-4 col-xxl-3 text-center pt-4 pt-md-0">
          <h4 class="bebas text-lg-end mb-lg-0">Suscríbete a nuestro newsletter<i class="far fa-arrow-right ms-2 azul gira-sm"></i></h4>
          <a class="link-simple darvuelta collapsed" data-bs-toggle="collapse" href="#preferencias" role="button">Preferencias<i class="fal fa-plus ms-2 azul"></i></a>
        </div>
        <div class="col-lg-4">
           <div class="form-floating z-depth-1">
            <input type="email" class="form-control form-control-lg" id="floatingInput" placeholder="Search" >
            <label for="floatingInput">Email<i class="fal fa-envelope ms-2 azul"></i></label>
          </div>
        </div>
      </div>
      <div class="row justify-content-center align-items-center pt-4 collapse" id="preferencias">
        <div class="col-md-6 col-lg-4 col-xl-3 col-xxl-2">
          <div class="text-start">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="checkAll">
              <label class="form-check-label" for="checkAll">Todo</label>
            </div>
            <div class="form-check">
              <input class="form-check-input noTodo" type="checkbox" value="" id="checkAntropologia">
              <label class="form-check-label" for="checkAntropologia">Antropología</label>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 col-xxl-2">
          <div class="text-start">
            <div class="form-check">
              <input class="form-check-input noTodo" type="checkbox" value="" id="checkEducacion">
              <label class="form-check-label" for="checkEducacion">Educación</label>
            </div>
            <div class="form-check">
              <input class="form-check-input noTodo" type="checkbox" value="" id="checkPsicologia">
              <label class="form-check-label" for="checkPsicologia">Psicología</label>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 col-xxl-2">
          <div class="text-start">
            <div class="form-check">
              <input class="form-check-input noTodo" type="checkbox" value="" id="checkSociologia">
              <label class="form-check-label" for="checkSociologia">Sociología</label>
            </div>
            <div class="form-check">
              <input class="form-check-input noTodo" type="checkbox" value="" id="checkTrabajoSocial">
              <label class="form-check-label" for="checkTrabajoSocial">Trabajo Social</label>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center pt-4">
          <a class="btn btn-azul white" role="button" data-bs-toggle="modal" data-bs-target="#modalSuscripcion">Suscribirse<i class="fal fa-paper-plane ms-2"></i></a>
        </div>
      </div>
    </form>
  </section>
@endsection