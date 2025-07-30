@if($paginator->lastPage() > 1)
<nav aria-label="Paginación">
	<ul class="pagination justify-content-end">
		@if ($paginator->currentPage() != 1)
		<li class="page-item">
			<a class="page-link waves-effect waves-effect" data-bs-target="#carouselProyectosInvestigador" href="{{ $paginator->previousPageUrl() }}#carouselProyectosInvestigador" title="Anterior" data-bs-original-title="Anterior" aria-label="Anterior"><i class="fas fa-chevron-left"></i></a>
		</li>
		@endif
		@for($i=1;$i<=$paginator->lastPage();$i++)
		<li class="page-item @if ($paginator->currentPage()==$i) active @endif">
			<a class="page-link waves-effect waves-effect" data-bs-target="#carouselProyectosInvestigador" href={{ $paginator->url($i) }}#carouselProyectosInvestigador>{{ $i }}</a>
		</li>
		@endfor
		@if ( $paginator->currentPage() != $paginator->lastPage() )
		<li class="page-item">
			<a class="page-link waves-effect waves-effect" data-bs-target="#carouselProyectosInvestigador" href="{{ $paginator->nextPageUrl() }}#carouselProyectosInvestigador" title="Anterior" data-bs-original-title="Siguiente" aria-label="Siguiente"><i class="fas fa-chevron-right"></i></a>
		</li>
		@endif
	</ul>
</nav>
@endif