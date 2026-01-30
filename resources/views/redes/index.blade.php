@extends('layout.layout2')

@section('contenido')
    <!-- Content -->
	<div class="container pb-5">
		<div class="row justify-content-center">
			<div class="col-lg-10 col-xl-8 text-center">
				<img class="img-fluid mb-5" src="{{ asset('assets/images/logo-colabred.png') }}" width="350" id="colabred">
				<p style="text-align: justify;">El Co-Laboratorio de Investigación en <span class="b800">Ciencias Sociales</span> busca innovar la lógica de productivismo académico individual, apostando por la conformación de una red colaborativa de producción de conocimiento científico que trascienda las fronteras regionales, nacionales y disciplinares, y ponga las <b>Ciencias Sociales</b> al servicio de los desafíos que la interpelan.</p>
			</div>
		</div>
	</div>
	<section class="grey lighten-1">
		<div class="container py-5">
			<div class="row justify-content-center">
				<!--
				<div class="col-lg-6 col-xl-4 mb-4">
					<div class="white z-depth-1 py-3 px-4 text-center redcolab">
						<div class="redlogo" style="background-image: url(https://colaboratoriocienciassociales.uchile.cl/assets/images/logo-facso_investiga.png);"></div>
						<a class="btn bg-rosa mt-4" href="https://facso.uchile.cl/" target="_blank">Más información<i class="fal fa-link fa-lg ms-2"></i></a>
					</div>
				</div>
				-->
				<div class="col-lg-6 col-xl-4 mb-4">
					<div class="white z-depth-1 py-3 px-4 text-center redcolab">
						<div class="redlogo" style="background-image: url({{ asset('assets/images/logo-facso_investiga.png') }});"></div>
						<a class="btn bg-rosa mt-4" href="https://colaboratoriocienciassociales.uchile.cl" target="_blank">Más información<i class="fal fa-link fa-lg ms-2"></i></a>
					</div>
				</div>
					<div class="col-lg-6 col-xl-4 mb-4">
					<div class="white z-depth-1 py-3 px-5 text-center redcolab">
						<div class="redlogo" style="background-image: url(https://colaboratoriocienciassociales.uchile.cl/assets/images/logo_uct_cs.png); transform: translateY(-40px);"></div>
						<a class="btn bg-rosa mt-4" href="https://colaboratorio-csh.uct.cl" target="_blank">Más información<i class="fal fa-link fa-lg ms-2"></i></a>
					</div>
				</div>
				<div class="col-lg-6 col-xl-4 mb-4">
					<div class="white z-depth-1 py-3 px-4 text-center redcolab">
						<div class="redlogo" style="background-image: url(https://colaboratoriocienciassociales.uchile.cl/assets/images/FAC.-CS.-SOCIALES-01.png);"></div>
						<a class="btn bg-rosa mt-4" href="https://cienciassociales.uc.cl/" target="_blank">Más información<i class="fal fa-link fa-lg ms-2"></i></a>
					</div>
				</div>
			
			</div>
		</div>
	</section>
@endsection