<!-- designed and writed by Carola del Río https://caroladelrio.com/ -->
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0">
  <title>FACSO Abierta | Colaboratorio</title>
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
  <link rel="manifest" href="images/site.webmanifest">
  <meta name="msapplication-TileColor" content="#f25e63">
  <meta name="theme-color" content="#ffffff">
  <!-- Open Graph -->
  <meta property="og:url" content="https://colaboratorio.uchile.cl/" /><!-- Revisar URL -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="FACSO Abierta | Colaboratorio" />
  <meta property="og:description" content="Es un sistema abierto que divulga la producción científica de investigadoras/es de la Facultad de Ciencias Sociales de la Universidad de Chile. Busca reconocer sus trayectorias e impulsar una gestión del conocimiento en lógica colaborativa, abierta y transdisciplinar." />
  <meta property="og:image" content="https://colaboratorio.uchile.cl/images/og-image.png" /><!-- Revisar URL -->
  <meta property="og:image:url" content="https://colaboratorio.uchile.cl/images/og-image.png" /><!-- Revisar URL -->
  <meta property="twitter:image" content="https://colaboratorio.uchile.cl/images/og-t-image.png" /><!-- Revisar URL -->
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,400;1,600&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Carola CSS -->
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
  <!--bg video-->
  <main id="inicio">
    <div class="view jarallax" data-jarallax-video="mp4:images/facso-bg-video.mp4">
      <img class="jarallax-img" src="images/bg.jpg" alt="Facultad de Ciencias Sociales, Universidad de Chile">
      <div class="mask" style="background-color: rgba(255,255,255,.85);">
      </div>
        <div class="container h-100 py-5">
          <div class="row flex-center" style="min-height: 70vh;">
            <div class="col-lg-10 col-xl-8 text-center">
              <img class="img-fluid mx-auto mb-5" src="{{ asset('assets/images/logo_colaboratorio2.png') }}" width="600" alt="Colaboratorio de investigación en Ciencias Sociales">
              <h5 class="text-start mb-5 b600" style="position: relative;">Es un <span class="azul">sistema abierto</span> que divulga la producción científica de investigadoras/es de la Facultad de Ciencias Sociales de la Universidad de Chile. Busca reconocer sus trayectorias e impulsar una <span class="azul">gestión del conocimiento</span> en lógica <span class="azul">colaborativa, abierta y transdisciplinar</span>.</h5>
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
        <img src="images/logo_colaboratorio_menu.png" width="150">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sobre">Sobre el colaboratorio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="investigadores">Investigadores/as</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-sm btn-outline-light" href="#!">English</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--Content-->
  @yield('contenido')
  <!--Newsletter-->
  <section class="grey lighten-3">
    <form class="container py-5">
      <div class="row justify-content-center align-items-center flex-column-reverse flex-md-row">
        <div class="col-lg-4 col-xxl-3 text-center pt-4 pt-md-0">
          <h4 class="bebas text-lg-end mb-lg-0">Personaliza aquí tus preferencias de acceso<i class="far fa-arrow-right ms-2 azul gira-sm"></i></h4>
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
  <!--Footer-->
  <section class="elegant-color-dark text-white footer" data-cursor="color-azul" id="footer">
    <div class="container-fluid py-5">
      <div class="row align-items-end justify-content-between">
        <div class="col-lg-4 col-xl-3 text-center py-3">
          <img id="logoFooter" class="img-fluid" src="images/logo_colaboratorio_blanco.png" alt="Colaboratorio" width="250">
           <div class="pt-2">
            <a class="azul mx-2" type="button" role="button" href="https://www.facebook.com/uchile" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Facebook"><i class="fab fa-facebook-f"></i><span class="sr-only">Ir a Facebook UChile</span></a>
            <a class="azul mx-2" type="button" role="button" href="https://twitter.com/uchile" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Twitter"><i class="fab fa-twitter"></i><span class="sr-only">Ir a Twitter UChile</span></a>
            <a class="azul mx-2" type="button" role="button" href="https://www.instagram.com/uchile" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Instagram"><i class="fab fa-instagram"></i><span class="sr-only">Ir a Instagram UChile</span></a>
            <a class="azul mx-2" type="button" role="button" href="https://www.youtube.com/uchile" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Youtube"><i class="fab fa-youtube"></i><span class="sr-only">Ir a Youtube UChile</span></a>
          </div>
        </div>
        <div class="col-lg-4 col-xl-3 text-center py-3">
          <img id="logoFooter" class="img-fluid" src="images/logo-facso_investiga-white.png" alt="Logo FACSO abierta" width="250">
        </div>
        <div class="col-lg-4 col-xl-3 text-center py-3">
          <h4 class="bebas mb-0">Facultad de Ciencias Sociales</h4>
          <h5 class="bebas">Universidad de Chile</h5>
          <p class="mb-0 tx-chico">Av. Capitán Ignacio Carrera Pinto 1045 <br>Ñuñoa, Santiago, Chile<a class="ms-2 azul" href="https://maps.app.goo.gl/s8kWxPPdJt19Pd2E7" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Google maps"><i class="fas fa-map-marker-alt fa-lg"></i><span class="sr-only">Ir a Google Maps</span></a></p>
        </div>
        <div class="col-lg-4 col-xl-3 text-center py-3">
          <p class="mb-2 text-lg-start tx-chico">Las obras contenidas en esta plataforma están bajo una <a href="https://creativecommons.org/licenses/by-nc-nd/4.0/deed.es" target="_blank" class="link-simple">Licencia Creative Commons Atribución-NoComercial-SinDerivar 4.0 Internacional</a></p>
          <a tabindex="0" type="button" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="focus" title="Usted es libre de" data-bs-content="Compartir, copiar y redistribuir el material en cualquier medio o formato."><i class="fab fa-creative-commons h4 mx-1 mb-0 azul"></i></a>
          <a tabindex="0" type="button" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="focus" title="Atribución:" data-bs-content="Usted debe dar crédito de manera adecuada, brindar un enlace a la licencia, e indicar si se han realizado cambios. Puede hacerlo en cualquier forma razonable, pero no de forma tal que sugiera que usted o su uso tienen el apoyo de la licenciante."><i class="fab fa-creative-commons-by h4 mx-1 mb-0 azul"></i></a>
          <a tabindex="0" type="button" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="focus" title="NoComercial:" data-bs-content="Usted no puede hacer uso del material con propósitos comerciales."><i class="fab fa-creative-commons-nc h4 mx-1 mb-0 azul"></i></a>
          <a tabindex="0" type="button" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="focus" title="SinDerivadas:" data-bs-content="Si remezcla, transforma o crea a partir del material, no podrá distribuir el material modificado."><i class="fab fa-creative-commons-nd h4 mx-1 mb-0 azul"></i></a>
        </div>
      </div>
    </div>
  </section>
  <!--Modal: modalConfirm-->
  <div class="modal fade" id="modalSuscripcion" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-notify modal-investiga" role="document">
      <div class="modal-content">
        <button type="button" class="close z-depth-1" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
          <div class="text-center">
            <i class="fas fa-check fa-4x mb-3 animated rotateIn azul"></i>
            <p>Gracias por suscribirse a nuestro Newsletter.</p>
          </div>
        </div>
        <div class="modal-footer justify-content-center">
          <a type="button" class="btn bg-rosa waves-effect" data-bs-dismiss="modal">Cerrar<i class="fal fa-times-circle ms-2"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- I have JavaScript! -->
  <!-- Bootstrap -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
  <!-- More jquery -->
  <script type="text/javascript" src="js/main.js"></script>
</body>
</html>