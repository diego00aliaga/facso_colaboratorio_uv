<?php

use App\Http\Controllers\FichasController;
use App\Http\Controllers\ResearcherController;
use App\Http\Controllers\InvestigadoresController;
use App\Http\Controllers\ProyectosController;
use App\Http\Controllers\IngresosController;
use App\Http\Controllers\ResultadosController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\NucleosController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProyectosFACSOController;
use App\Models\InstitucionesPatrocinantes;

use Illuminate\Support\Facades\Route;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
	$ingresos = new IngresosController;
	return view('welcome')->with('ingresos',$ingresos->index());
	})->name('home');

Route::get('/sobre', function () {
	return view('sobre.index');
	})->name('sobre');

Route::get('/busqueda_avanzada', function () {
	return view('busqueda.avanzada');
	})->name('busqueda_avanzada');

Route::controller(ResultadosController::class)->prefix('resultados')->group(function () {
    Route::post('/', 'resultados')->name('resultados');
    Route::post('/resultados_avanzado', 'resultados_avanzado')->name('resultados_avanzado');
    Route::get('/tabla_resultados/{campo}/{todos}/{investigadores}/{proyectos}/{publicaciones}/{recursos}','getResultados')->name('tabla-resultados');
});

Route::controller(FichasController::class)->prefix('ficha')->group(function () {
    Route::get('/publicacion/{id_vinculo}', 'ficha_publicacion')->name('ficha_publicacion');
	Route::get('/proyecto/{id_vinculo}','ficha_proyecto')->name('ficha_proyecto');
	Route::get('/recursos/{id_vinculo}','ficha_recursos')->name('ficha_recursos');
});

Route::get('/instituciones', function (){
    $instituciones = InstitucionesPatrocinantes::all()->toArray();
    return response()->json($instituciones, 200);
});

// Modificado por Renato Soto - 30-04-2024

Route::controller(InvestigadoresController::class)->group(function(){
    Route::get('/investigadores','index')->name('investigadores.index');
    Route::get('/investigadores-ficha-{id}','show')->name('investigadores.show');
});

Route::controller(ContactoController::class)->group(function(){
	Route::get('/contacto','index')->name('contacto');
	Route::post('/contacto/send','send')->name('contacto.send');
});

Route::controller(NucleosController::class)->group(function(){
	Route::get('/nucleos','index')->name('nucleos');
});

Route::get('/redes', function () {
	return view('redes.index');
	})->name('redes');
	
Route::controller(NewsController::class)->group(function(){
	Route::post('/newsletter/store', 'store')->name('news.store');
	Route::post('/newsletter/addNews', 'addNews')->name('news.addNews');
});

Route::controller(ProyectosFACSOController::class)->group(function(){
	Route::get('/proyectosfacso','index')->name('proyectosfacso');
});

Route::get('/jornadas', function () {
	return view('jornadas.index');
	})->name('jornadas');

Route::get('/news', function () {
	return view('news.guardar');
	})->name('news');
