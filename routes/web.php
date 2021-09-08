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
//Metodos de la base de datos platos
Route::resource('dishes', App\Http\Controllers\DishController::class); 
//Listado por categoria
Route::get('list-offers',[App\Http\Controllers\DishController::Class, 'listOffers'])->name('dishes.offers');
Route::get('list-pizzas',[App\Http\Controllers\DishController::Class, 'listPizzas'])->name('dishes.pizzas');
Route::get('list-pastas',[App\Http\Controllers\DishController::Class, 'listPastas'])->name('dishes.pastas');
Route::get('list-drinks',[App\Http\Controllers\DishController::Class, 'listDrinks'])->name('dishes.drinks');
Route::get('list-extra',[App\Http\Controllers\DishController::Class, 'listExtra'])->name('dishes.extra');

/* Rutas de Módulo de administrador */
Route::prefix('admin')->group(function() {
  //Ruta de las autorizaciones
  Auth::routes();

  //DashBoard principal del administrador
  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');  
});

//Vista de sucursales
Route::get('/offices', function(){ return view('custom.offices');});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Ruta para el control de platos (CRUD)
Route::resource("dishes", App\Http\Controllers\DishController::class)->parameters(["dishes"=>"dish"]);
