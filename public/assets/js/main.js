$(document).ready(function() {
 
  ////tooltip////
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  });
  ////popover////
  var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
  var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl)
  })
  ////filtar investigadores////
  $("#filterInvestigadores").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".investcards .col-investigador").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  ////búsqueda////
  $('#searchTemas #searchAll').click(function() {
    if ($(this).is(':checked')) {
      $('#searchTemas input:checkbox').prop('checked', true);
    } else {
      $('#searchTemas input:checkbox').prop('checked', false);
    }
  });
  $('#searchTemas .notAll').click(function() {
    if ($(this).not(':checked')) {
      $('#searchTemas #searchAll').prop('checked', false);
    } 
  });
  ////afinar búsqueda ya hecha////
  $('.afinar').on( 'click', function() {
    $('.afinar').removeClass("active");
    $(this).addClass("active");
  });
  /////
  ///preferencias///
  $('#checkAll').click(function() {
    if ($(this).is(':checked')) {
      $('#preferencias input:checkbox').prop('checked', true);
    } else {
      $('#preferencias input:checkbox').prop('checked', false);
    }
  });
  $('.noTodo').click(function() {
    if ($(this).not(':checked')) {
      $('#checkAll').prop('checked', false);
    } 
  });
  //////change video ID///////
  $('#modalVideo').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('videonumber') // Extract info from data-* attributes
    var modal = $(this)
    modal.find('.modal-body .embed-responsive-item').attr("src", "https://www.youtube.com/embed/" + recipient)
  })
  //////stop video on modal close//////
  $('#modalVideo').on('hidden.bs.modal', function () {
    $("#modalVideo iframe").attr("src", $("#modalVideo iframe").attr("src"));
  });
  /////date picker//////
  let startDate = document.getElementById('startDate');
  let endDate = document.getElementById('endDate');
  //////Paginación (paginador)///////
  var elementosCarousel = document.getElementsByClassName('carousel');
  for (var i = 0; i < elementosCarousel.length; i++) {
    elementosCarousel[i].addEventListener('slide.bs.carousel', function (e) {
      var cual = e.to + 1;
      var paginationItems = this.getElementsByClassName('pagination')[0].getElementsByClassName('page-item');
      for (var j = 0; j < paginationItems.length; j++) {
        paginationItems[j].classList.remove('active');
      }
      paginationItems[cual].classList.add('active');
    });
  }
	///////Accesibilidad//////
	function resetear() {
		$(".navbar").addClass("navbar-dark").removeClass("navbar-light white");
		$("#logoColab").attr("src", "//colaboratoriocienciassociales.uv.cl/assets/images/uv/logo_colaboratorio2.png");
		$("#logo-menu").attr("src", "//colaboratoriocienciassociales.uv.cl/assets/images/logo_colaboratorio_menu.png");
		$("#logoFooter").attr("src", "//colaboratoriocienciassociales.uv.cl/assets/images/logo_colaboratorio_blanco.png");
		$("#logoUChile").attr("src", "//colaboratoriocienciassociales.uv.cl/assets/images/logoUChile.png");
		$("#logoFacso").attr("src", "//colaboratoriocienciassociales.uv.cl/assets/images/logo-facso_investiga-white.png");
		$("#test1").attr("src", "//colaboratoriocienciassociales.uv.cl/assets/images/test1.png");
		$("#test2").attr("src", "//colaboratoriocienciassociales.uv.cl/assets/images/test2.png");
		$("#test3").attr("src", "//colaboratoriocienciassociales.uv.cl/assets/images/test3.png");
		$("#test4").attr("src", "//colaboratoriocienciassociales.uv.cl/assets/images/test4.png");
		$("#test5").attr("src", "//colaboratoriocienciassociales.uv.cl/assets/images/test5.png");
		$("#test6").attr("src", "//colaboratoriocienciassociales.uv.cl/assets/images/test6.png");
		$("#test7").attr("src", "//colaboratoriocienciassociales.uv.cl/assets/images/test7.png");
		$("#colabred").attr("src", "//colaboratoriocienciassociales.uv.cl/assets/images/logo-colabred.png");
	}
   // Texto
  var tamañoInicial = parseInt($("body").css("font-size"));
  $("#auemntarTexto").click(function() {
    var tamañoActual = parseInt($("body").css("font-size"));
    var nuevoTamaño = tamañoActual + 2;
    $("body").css("font-size", nuevoTamaño + "px");
  });

  $("#disminuirTexto").click(function() {
    var tamañoActual = parseInt($("body").css("font-size"));
    var nuevoTamaño = tamañoActual - 2;
    $("body").css("font-size", nuevoTamaño + "px");
  });
  // Escala de grises
  $("#grises").click(function() {
    $(".container, .container-fluid, .navbar").toggleClass("grises");
  });
	// Alto contraste
	$("#acClaro").click(function() {
		resetear();
		$("body").removeClass("fondoOscuro").toggleClass("fondoClaro");
		if ($("body").hasClass("fondoClaro")) {
			$(".navbar").removeClass("navbar-dark").addClass("navbar-light white");
			$("#logo-menu").attr("src", "//colaboratoriocienciassociales.uv.cl/assets/images/logo_colaboratorio_menu2.png");
			$("#logoFooter").attr("src", "//colaboratoriocienciassociales.uv.cl/assets/images/logo_colaboratorio.png");
			$("#logoUChile").attr("src", "//colaboratoriocienciassociales.uv.cl/assets/images/logo-uchile-black.png");
			$("#logoFacso").attr("src", "//colaboratoriocienciassociales.uv.cl/assets/images/logo-facso_investiga.png");
		}
	});
	$("#acOscuro").click(function() {
		resetear();
		$("body").removeClass("fondoClaro").toggleClass("fondoOscuro");
		$("#logoColab").attr("src", "assets/images/logo_colaboratorio1.png");
		$("#test1").attr("src", "//colaboratoriocienciassociales.uv.cl/assets/images/test1-1.png");
		$("#test2").attr("src", "//colaboratoriocienciassociales.uv.cl/assets/images/test2-1.png");
		$("#test3").attr("src", "//colaboratoriocienciassociales.uv.cl/assets/images/test3-1.png");
		$("#test4").attr("src", "//colaboratoriocienciassociales.uv.cl/assets/images/test4-1.png");
		$("#test5").attr("src", "//colaboratoriocienciassociales.uv.cl/assets/images/test5-1.png");
		$("#test6").attr("src", "//colaboratoriocienciassociales.uv.cl/assets/images/test6-1.png");
		$("#test7").attr("src", "//colaboratoriocienciassociales.uv.cl/assets/images/test7-1.png");
		$("#colabred").attr("src", "//colaboratoriocienciassociales.uv.cl/assets/images/logo-colabred2.png");
	});

   // Reset
   $("#reset").click(function() {
    resetear();
    $("body").removeClass("fondoOscuro fondoClaro").css("font-size", tamañoInicial + "px");
    $(".container, .container-fluid, .navbar").removeClass("grises");
  });
  
});

const nlAreas = [];
const nlAutores = [];

function addTerminos(a,b){
	document.getElementById(a).addEventListener('keydown', function(event) {
		if (event.key === 'Enter') {
			const tagValue = event.target.value.trim();
			if (tagValue) {
				const tagElement = document.createElement('span');
				tagElement.className = 'tag';
				tagElement.textContent = tagValue;
				document.getElementById(b).appendChild(tagElement);
				event.target.value = '';
				if (a == "sel-disciplina") {
					nlAreas.push(tagValue);
				}
				if (a == "sel-investigador"){
					nlAutores.push(tagValue);
				}
			}
		event.preventDefault();
		}
	});
}

const list = document.getElementById('listInvestigador');

fetch('https://colaboratoriocienciassociales.uv.cl/api/listado')
    .then((response) => response.json())
    .then((data) => renderListado(data));
	
function renderListado(listInvestigador){
	listInvestigador.forEach(ls => {
		list.innerHTML += `<option>${ls.funcionario}</option>`;
	});
}

function verifica(){
	let mail = document.getElementById('nlmail').value;
	let validEmail =  /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;
	if( validEmail.test(mail) ){
		console.log(nlAreas.length);
		console.log(nlAutores.length);
		if (nlAreas.length != 0 && nlAutores.length != 0){
		
		/*
		var url : "https://colaboratoriocienciassociales.uv.cl/news";
		var data: {
			correo  : mail,
			areas   : nlAreas,
			autores : nlAutores
		};

		fetch(url,{
				method: "POST",
				body: JSON.stringify(data),
				headers: { "Content-Type": "application/json" },
			})
			.then((res) => res.json())
			.catch((error) => console.error("Error:", error))
			.then((response) => console.log("Success:", response));
		*/
			$('#modalSuscripcion').modal('show');
			return true;
		}
	}else{
		$('#modalError').modal('show');
	return false;
	}
}
function cerrar(){
	$('#modalSuscripcion').modal('hide');
	$('#modalSuscripcion').attr("style", "display:none"); 
	$('#modalError').modal('hide');
	$('#modalError').attr("style", "display:none"); 	
}

