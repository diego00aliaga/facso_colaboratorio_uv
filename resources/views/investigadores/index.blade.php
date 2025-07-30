@extends('layout.layout2')
@section('contenido')
    <!--Content-->
	<div class="container pb-5">
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-8 col-xl-6 text-center pb-5">
                <img class="img-fluid mb-4" src="{{ asset('assets/images/test3.png') }}" width="500" id="test3">
                <h4 class="bebas">Investigadores/as</h4>
                <input class="form-control z-depth-1" id="filterInvestigadores" type="text" placeholder="Filtrar investigadores">
            </div>
        </div>
        <div class="row investcards">
        @foreach ($investigador as $investiga)
            @if ($investiga->autorizado==1 && $investiga->foto!=NULL )
                <div class="col-investigador col-md-6 col-lg-4 col-xl-3 mb-5">
                    <div class="view foto-investigador text-center">
						<div class="loader"></div>
						@if ($investiga->foto==NULL)
							<img class="rounded-circle z-depth-1" src="{{ asset('assets/images/profile.jpg') }}" alt="{{ $investiga->funcionario }}">
						@else
							<img class="rounded-circle z-depth-1" src="{{ asset('assets/').'/'.$investiga->foto }}" alt="{{ $investiga->funcionario }}">
						@endif
                        <a href="investigadores-ficha-{{ $investiga->id }}" class="waves-effect waves-light link-invest"></a>
                        <a class="btn-floating btn-lg btn-azul" type="button" role="button" href="investigadores-ficha-{{ $investiga->id }}"><i class="far fa-arrow-right"></i></a>
                    </div>
                    <a href="investigadores-ficha-{{ $investiga->id }}" class="b600 mb-0 link-simple nombreInvestigador">{{ $investiga->funcionario }}</a>
                    <p class="mb-0">{{ $investiga->reparticion }}</p>
                    @if ($investiga->id_orcid != NULL)
						<a class="link-simple link-line" href="https://orcid.org/{{ $investiga->id_orcid }}" target="_blank">ORCID</a>
					@endif
                </div>
            @endif
        @endforeach
        </div>
    </div>
@endsection