<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PlazaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PuestoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AlumnoController::class)->group(function(){
Route::get('/Alumnos.index', [AlumnoController::class, 'index'])->name('Alumnos.index');    // INDEX
Route::get('/Alumnos.create', [AlumnoController::class, 'create'])->name('Alumnos.create'); // CREATE
Route::get('/Alumnos.edit/{alumno}', [AlumnoController::class, 'edit'])->name('Alumnos.edit');       // EDIT
Route::post('/Alumnos.update/{alumno}', [AlumnoController::class, 'update'])->name('Alumnos.update');
Route::post('/Alumnos.destroy/{alumno}', [AlumnoController::class, 'destroy'])->name('Alumnos.destroy');// DESRTOY/DELETE
Route::get('/Alumnos.show/{alumno}', [AlumnoController::class, 'show'])->name('Alumnos.show');       // SHOW/VER
Route::post('/Alumnos.store', [AlumnoController::class, 'store'])->name('Alumnos.store');       // SHOW/VER
});
Route::controller(PuestoController::class)->group(function(){
    Route::get('/puestos.index', [PuestoController::class, 'index'])->name('puestos.index');    // INDEX
    Route::get('/puestos.create', [PuestoController::class, 'create'])->name('puestos.create'); // CREATE
    Route::get('/puestos.edit/{puesto}', [PuestoController::class, 'edit'])->name('puestos.edit');       // EDIT
    Route::post('/puestos.update/{puesto}', [PuestoController::class, 'update'])->name('puestos.update');
    Route::post('/puestos.destroy/{puesto}', [PuestoController::class, 'destroy'])->name('puestos.destroy');// DESRTOY/DELETE
    Route::get('/puestos.show/{puesto}', [PuestoController::class, 'show'])->name('puestos.show');       // SHOW/VER
    Route::post('/puestos.store', [PuestoController::class, 'store'])->name('puestos.store');       // SHOW/VER
});
// PUESTOS
// Route::get('/Puestos.index', [PuestoController::class, 'index'])->name('Puestos.index');    // INDEX
// Route::get('/Puestos.create', [PuestoController::class, 'create'])->name('Puestos.create'); // CREATE
// Route::get('/Puestos.edit', [PuestoController::class, 'edit'])->name('Puestos.edit');       // EDIT
// Route::get('/Puestos.delete', [PuestoController::class, 'destroy'])->name('Puestos.delete');// DESRTOY/DELETE
// Route::get('/Puestos.show', [PuestoController::class, 'show'])->name('Puestos.show');       // SHOW/VER
// // Plazas
// Route::get('/Plazas.index', [PlazaController::class, 'index'])->name('Plazas.index');       // INDEX
// Route::get('/Plazas.create', [PlazaController::class, 'create'])->name('Plazas.create');    // CREATE
// Route::get('/Plazas.edit', [PlazaController::class, 'edit'])->name('Plazas.edit');          // EDIT
// Route::get('/Plazas.delete', [PlazaController::class, 'destroy'])->name('Plazas.delete');   // DESRTOY/DELETE
// Route::get('/Plazas.show', [PlazaController::class, 'show'])->name('Plazas.show');          // SHOW/VER

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
