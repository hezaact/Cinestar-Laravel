<?php

use App\Http\Controllers\CineController;
use App\Http\Controllers\Peliculacontroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [CineController::class,'index'])->name('/');

Route::get('Nuestros-Cines',[CineController::class, 'nuestroscines'])->name('Nuestros-Cines');

Route::get('cine/{id}',[CineController::class,'cine'])->name('cine'); 

Route::get('peliculas/{id}',[Peliculacontroller::class, 'peliculas'])->name('peliculas');

Route::get('pelicula/{id}', [Peliculacontroller::class, 'pelicula'])->name('pelicula');