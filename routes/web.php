<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\Facultades;
use App\Http\Controllers\Programas;
use App\Http\Controllers\Docentes;
use App\Http\Controllers\Estudiantes;
use App\Http\Controllers\Materias;

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
    return view('welcome');
});


Route::get('/dashboard', [HomeController::class,'index' ] 
)->middleware(['auth', 'verified'])->name('dashboard');

//Rutas Facultades
Route::get('/facultades/listado', [Facultades::class,'index' ] 
)->middleware(['auth', 'verified'])->name('listado_facultades');

Route::get('/facultades/registrar', [Facultades::class, 'form_registro']
)->middleware(['auth', 'verified'])->name('form_registro_fac');

Route::post('/facultades/registrar', [Facultades::class, 'registrar']
)->middleware(['auth', 'verified'])->name('registrar_fac');



Route::get('/facultades/editar/{id}' , [Facultades::class, 'form_edicion']
)->middleware(['auth', 'verified'])->name('editar_fac');

Route::post('/facultades/editar/{id}' , [Facultades::class, 'editar']
)->middleware(['auth', 'verified'])->name('editar_facultad');

Route::get('/facultades/eliminar/{id}', [Facultades::class, 'eliminar']
)->middleware(['auth', 'verified'])->name('eliminar_fac');


//Rutas Programas
Route::get('/programas/listado', [Programas::class,'index' ] 
)->middleware(['auth', 'verified'])->name('listado_programas');

Route::get('/programas/registrar', [Programas::class, 'form_registro']
)->middleware(['auth', 'verified'])->name('form_registro_pro');

Route::post('/programas/registrar', [Programas::class, 'registrar']
)->middleware(['auth', 'verified'])->name('registrar_pro');



Route::get('/programas/editar/{id}' , [Programas::class, 'form_edicion']
)->middleware(['auth', 'verified'])->name('editar_pro');

Route::post('/programas/editar/{id}' , [Programas::class, 'editar']
)->middleware(['auth', 'verified'])->name('editar_programa');

Route::get('/programas/eliminar/{id}', [Programas::class, 'eliminar']
)->middleware(['auth', 'verified'])->name('eliminar_pro');


//Rutas Docentes
Route::get('/docentes/listado', [Docentes::class,'index' ] 
)->middleware(['auth', 'verified'])->name('listado_docentes');

Route::get('/docentes/registrar', [Docentes::class, 'form_registro']
)->middleware(['auth', 'verified'])->name('form_registro_doc');

Route::post('/docentes/registrar', [Docentes::class, 'registrar']
)->middleware(['auth', 'verified'])->name('registrar_doc');



Route::get('/docentes/editar/{id}' , [Docentes::class, 'form_edicion']
)->middleware(['auth', 'verified'])->name('editar_doc');

Route::post('/docentes/editar/{id}' , [Docentes::class, 'editar']
)->middleware(['auth', 'verified'])->name('editar_docente');

Route::get('/docentes/eliminar/{id}', [Docentes::class, 'eliminar']
)->middleware(['auth', 'verified'])->name('eliminar_doc');


//Rutas Estudiantes
Route::get('/estudiantes/listado', [Estudiantes::class,'index' ] 
)->middleware(['auth', 'verified'])->name('listado_estudiantes');

Route::get('/estudiantes/registrar', [Estudiantes::class, 'form_registro']
)->middleware(['auth', 'verified'])->name('form_registro_est');

Route::post('/estudiantes/registrar', [Estudiantes::class, 'registrar']
)->middleware(['auth', 'verified'])->name('registrar_est');



Route::get('/estudiantes/editar/{id}' , [Estudiantes::class, 'form_edicion']
)->middleware(['auth', 'verified'])->name('editar_est');

Route::post('/estudiantes/editar/{id}' , [Estudiantes::class, 'editar']
)->middleware(['auth', 'verified'])->name('editar_estudiante');

Route::get('/estudiantes/eliminar/{id}', [Estudiantes::class, 'eliminar']
)->middleware(['auth', 'verified'])->name('eliminar_est');


//Rutas Materias
Route::get('/materias/listado', [Materias::class,'index' ] 
)->middleware(['auth', 'verified'])->name('listado_materias');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
