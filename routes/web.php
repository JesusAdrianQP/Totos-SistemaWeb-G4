<?php

use Illuminate\Support\Facades\Route;

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

/* Rutas de Módulo de clientes */
//Ruta inicial de la landing page
Route::view('/', 'custom/home');
//Notificaciones de formulario de contacto
Route::resource('messages', App\Http\Controllers\MessageController::class); 

/* Rutas de Módulo de administrador */
//Ruta de las autorizaciones
Route::prefix('admin')->group(function() {
  Auth::routes();
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
