@extends('layout.layout2')

@section('contenido')
   <!--Content-->
   <div class="container pb-5">
      <div class="row justify-content-center">
         <div class="col-lg-9 text-center"><img class="img-fluid" src="{{ asset('assets/images/grafica4.png') }}" width="700"></div>
      </div>
      <div class="row justify-content-end pb-5">
         <div class="col-12 text-end">
            <p class="mb-0">Investigador/a<i class="far fa-user fa-lg ms-2 azul"></i></p>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-6 col-xl-4 text-center mb-5">
            <img class="img-fluid shadow mb-4" src="{{ asset('assets/').'/'.$researcher->foto }}">
            @if ($researcher->video!=NULL)
               @php
               $ytb = str_replace('https://www.youtube.com/watch?v=','',$researcher->video);
               @endphp
               <a class="btn bg-rosa" data-bs-toggle="modal" data-bs-target="#modalVideo" data-videonumber="{{$ytb}}">Ver video<i class="fas fa-play-circle fa-lg ms-2"></i></a>
            @endif
         </div>
         <div class="col-lg-6 col-xl-8 ps-lg-5 mb-4">
            <p class="mb-0">@if($researcher->sexo=='Masculino') Investigador @else Investigadora @endif </p>
            <h5 class="mb-3 b600">{{ $researcher->nombres }} {{ $researcher->ap_paterno }} {{ $researcher->ap_materno }}</h5>
            <p class="mb-0">Repartición:</p>
            <p class="b600">{{ $researcher->reparticion}}</p>
            <p class="mb-0">Correo electrónico:</p>
            <p class="b600">{{$researcher->email_institucional}}</p>
            <p class="mb-0">Líneas de investigación</p>
            <p class="b600">{{$researcher->area_1}} | {{$researcher->area_2}} | {{$researcher->area_3}}</p>
            <p class="mb-0">ORCID:</p>
            <p class="b600"><a href="https://orcid.org/{{$researcher->id_orcid}}" target="_blank" class="link-simple link-line">https://orcid.org/{{$researcher->id_orcid}}</a></p>
            @if ($researcher->asociatividad_1!=NULL)
            <p class="mb-0">Asociatividad FACSO:</p>
            <p class="b600">{{$researcher->asociatividad_1}}</p>
            <p class="mb-0">Rol Asociatividad FACSO:</p>
            <p class="b600">{{$researcher->rol_1}}</p>
            @endif
            @if ($researcher->asociatividad_2!=NULL)
            <p class="mb-0">Asociatividad FACSO:</p>
            <p class="b600">{{$researcher->asociatividad_2}}</p>
            <p class="mb-0">Rol Asociatividad FACSO:</p>
            <p class="b600">{{$researcher->rol_2}}</p>
            @endif
            @if ($researcher->asociatividad_3!=NULL)
            <p class="b600">{{$researcher->asociatividad_3}}</p>
            <p class="mb-0">Rol Asociatividad FACSO:</p>
            <p class="b600">{{$researcher->rol_3}}</p>
            @endif
         </div>
      </div>
      <!--
      <div class="row">
         <div class="col-12">
            <h5 class="bebas">Proyectos asociados:</h5>
         </div>
      </div>
      <div class="row justify-content-between border-bottom my-3">
         <div class="col-lg-8 pb-2">
            <a href="ficha-proyecto.html" class="mb-0 b600 link-line link-simple">Ampliaciones en viviendas sociales. Departamento de Déficit Cualitativo</a>
            <p class="mb-0"><a href="ficha-investigador.html" class="link-simple link-line">Antonieta Urquieta</a></p>
            <p class="mb-0">2021</p>
         </div>
         <div class="col-lg-4 pt-lg-4 pb-4">
            <p class="mb-0">Proyecto de investigación<i class="far fa-file-search fa-lg ms-2 azul"></i></p>
         </div>
      </div>
      <div class="row justify-content-between border-bottom my-3">
         <div class="col-lg-8 pb-2">
            <a href="ficha-proyecto.html" class="mb-0 b600 link-line link-simple">Prototype of early warning for systems and program protection for Childhood from the perspective of Rights</a>
            <p class="mb-0"><a href="ficha-investigador.html" class="link-simple link-line">Teresa Matus</a></p>
            <p class="mb-0">2017</p>
         </div>
         <div class="col-lg-4 pt-lg-4 pb-4">
            <p class="mb-0">Proyecto de investigación<i class="far fa-file-search fa-lg ms-2 azul"></i></p>
         </div>
      </div>
      -->
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
@endsection
