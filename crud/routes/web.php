<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProdController;

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

Route::resource('productos', ProductosController::class);


Route::resource('producto', ProdController::class);

Route::resource('categorias', CategoriasController::class);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//API
Route::get('/api/producto', [ProdController::class, 'index']);
Route::get('/api/producto/{id}', [ProdController::class, 'show']);
Route::get('/api/categoria/{id}', [ProdController::class, 'categoria']);
