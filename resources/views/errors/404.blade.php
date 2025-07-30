@extends('layout.layout2')
@section('contenido')
	<!--Content-->
	<div class="container pt-5">
		<div class="row">
			<div class="col-12 text-center pt-5">
				<i class="fal fa-frown display-1 mb-3"></i>
				<h1 class="bebas display-1">Error 404</h1>
				<h4>Lo sentimos, esta página no existe.</h4>
				<img class="img-fluid mt-5" src="{{ asset('assets/images/test1.png'); }}" width="500" style="transform: rotate(180deg);">
			</div>
		</div>
	</div>
@endsection