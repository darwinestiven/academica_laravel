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

Route::get('/facultades/listado', [Facultades::class,'index' ] 
)->middleware(['auth', 'verified'])->name('listado_facultades');

Route::get('/facultades/registrar', [Facultades::class, 'form_registro']
)->middleware(['auth', 'verified'])->name('form_registro_fac');

Route::post('/facultades/registrar', [Facultades::class, 'registrar']
)->middleware(['auth', 'verified'])->name('registrar_fac');


Route::get('/programas/listado', [Programas::class,'index' ] 
)->middleware(['auth', 'verified'])->name('listado_programas');

Route::get('/programas/registrar', [Programas::class, 'form_registro']
)->middleware(['auth', 'verified'])->name('form_registro_pro');

Route::post('/programas/registrar', [Programas::class, 'registrar']
)->middleware(['auth', 'verified'])->name('registrar_pro');



Route::get('/docentes/listado', [Docentes::class,'index' ] 
)->middleware(['auth', 'verified'])->name('listado_docentes');

Route::get('/docentes/registrar', [Docentes::class, 'form_registro']
)->middleware(['auth', 'verified'])->name('form_registro_doc');

Route::post('/docentes/registrar', [Docentes::class, 'registrar']
)->middleware(['auth', 'verified'])->name('registrar_doc');



Route::get('/estudiantes/listado', [Estudiantes::class,'index' ] 
)->middleware(['auth', 'verified'])->name('listado_estudiantes');

Route::get('/estudiantes/registrar', [Estudiantes::class, 'form_registro']
)->middleware(['auth', 'verified'])->name('form_registro_est');

Route::post('/estudiantes/registrar', [Estudiantes::class, 'registrar']
)->middleware(['auth', 'verified'])->name('registrar_est');



Route::get('/materias/listado', [Materias::class,'index' ] 
)->middleware(['auth', 'verified'])->name('listado_materias');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
