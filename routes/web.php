<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;


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
//rutas de laravel 7:
//Route::get('/', 'HomeController');
//para las rutas desde el controlador
Route::get('/', HomeController::class)->name('home');
/*
Route::get('/', function () {
   // return view('welcome');
   return "bienvenido";
});
*/
// ahora usaremos estas rutas y las convertiremos en una sola para que no hallan tantas
//Route::get('/cursos', [CursoController::class, 'index'] );

//Route::get('cursos/create', [CursoController::class, 'create']);
//los routes con variables van de ultimo porque va a pasar primero la variable que la ruta general

//Route::get('/cursos/{curso}', [CursoController::class, 'show']);

/*
Route::get('/cursos/{curso}/{categoria?}', function ($curso,$categoria = null) {
    
    if($categoria){
        return "bienvenido al curso: $curso de la categoria: $categoria";
    }else{
        return "bienvenido al curso: $curso";
    }
   
});
*/
/* 
Route::controller(CursoController::class)->group(function () {
    Route::get('/cursos', 'index' )->name('cursos.index');
    Route::get('cursos/create', 'create')->name('cursos.create');
    Route::post('cursos', 'store')->name('cursos.store');
    Route::get('/cursos/{id}', 'show')->name('cursos.show');
    Route::get('/cursos/{curso}/edit', 'edit')->name('cursos.edit');
    Route::post('/cursos/{curso}', 'update')->name('cursos.update');
    Route::delete('/cursos/{curso}', 'destroy')->name('cursos.destroy');
}); */

Route::resource('cursos', CursoController::class); //el normal//
//pero si me mandan a cambiar todo el nombre de todas las rutas
//Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');

Route::view('nosotros', 'nosotros')->name('nosotros');