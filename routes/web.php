<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('home');
})->name('inicio');

Route::get('nosotros', function () {
	return view('nosotros');
})->name('nosotros');

Route::get('usuarios', function () {
	return view('usuarios');
})->name('usuarios');

Route::get('catalogo', [LibroController::class, 'index'])->name('catalogo');

Route::get('prestamos', function () {
	return view('prestamos');
})->name('prestamos');

Route::get('contacto', function () {
	return view('contacto');
})->name('contacto');


