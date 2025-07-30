@extends('layouts.layout')

@section('contenido')
  <!--Content-->
  <div class="container pb-5">
    <div class="row justify-content-center">
      <div class="col-md-9 text-center pb-4">
        <img class="img-fluid mb-4" src="images/grafica5.png" width="500">
        <h4 class="bebas">Contacto</h4>
        <p class="text-center w-responsive mx-auto mb-5">¿Tiene alguna pregunta? No dude en ponerse directamente en contacto con nosotros.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9 mb-md-0 mb-5">
        <form id="contact-form" name="contact-form" action="mail.php" method="POST">
          <div class="row">
             <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text" id="name" name="name" class="form-control">
                  <label for="name" class="">Nombre</label>
                </div>
            </div>
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="email" name="email" class="form-control">
                <label for="email" class="">Email</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="md-form mb-0">
                <input type="text" id="subject" name="subject" class="form-control">
                <label for="subject" class="">Asunto</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="md-form">
                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                <label for="message">Mensaje</label>
              </div>
            </div>
          </div>
        </form>
        <div class="text-center text-md-left">
          <a class="btn bg-rosa" onclick="document.getElementById('contact-form').submit();">Enviar<i class="far fa-paper-plane fa-lg ms-2"></i></a>
        </div>
        <div class="status"></div>
      </div>
      <div class="col-md-3 text-center">
        <ul class="list-unstyled mb-0">
          <li>
            <h4 class="bebas mb-0">Facultad de Ciencias Sociales</h4>
            <h5 class="bebas mb-2">Universidad de Chile</h5>
            <a class="ms-2 azul" href="https://maps.app.goo.gl/s8kWxPPdJt19Pd2E7" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="Google maps"><i class="fas fa-map-marker-alt mt-4 fa-2x azul"></i></a>
            <p class="mb-0 tx-chico">Av. Capitán Ignacio Carrera Pinto 1045 <br>Ñuñoa, Santiago, Chile</p>
            </li>
          <li>
            <a href="mailto:contacto.colaboratoriouchile@facso.cl data-bs-toggle="tooltip" data-bs-placement="top" title="Escribir"><i class="fas fa-envelope mt-4 fa-2x azul"></i></a>
            <p class="mb-0">contacto.colaboratoriouchile@facso.cl</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
@endsection