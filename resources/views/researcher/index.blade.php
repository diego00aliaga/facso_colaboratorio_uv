@extends('layout.layout2')

@section('contenido')
    <!--Content-->
    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-6 text-center pb-5">
                <img class="img-fluid mb-4" src="{{ asset('assets/images/grafica3.png') }}" width="500">
                <h4 class="bebas">Investigadores/as</h4>
                <input class="form-control z-depth-1" id="filterInvestigadores" type="text" placeholder="Filtrar investigadores">
            </div>
        </div>
        <div class="row investcards">

        @foreach ($researchers as $researcher)
            @if ($researcher->autorizado==1)
                <div class="col-investigador col-md-6 col-lg-4 col-xl-3 mb-5">
                    <div class="view foto-investigador text-center">
                        <img class="rounded-circle z-depth-1" src="{{ asset('assets/').'/'.$researcher->foto }}" alt="Nombre investigador">
                        <a href="investigadores-ficha-{{ $researcher->id }}" class="waves-effect waves-light link-invest"></a>
                        <a class="btn-floating btn-md btn-azul" type="button" role="button" href="investigadores-ficha-{{ $researcher->id }}"><i class="far fa-arrow-right"></i></a>
                    </div>
                    <a href="investigadores-ficha-{{ $researcher->id }}" class="b600 mb-0 link-simple nombreInvestigador">{{ $researcher->nombres }} {{ $researcher->ap_paterno }} {{$researcher->ap_materno}}</a>
                    <p class="mb-0">{{ $researcher->reparticion }}</p>
                    <a class="link-simple link-line" href="https://orcid.org/{{ $researcher->id_orcid }}" target="_blank">ORCID</a>
                </div>
            @endif
        @endforeach
        </div>
    </div>
@endsection
