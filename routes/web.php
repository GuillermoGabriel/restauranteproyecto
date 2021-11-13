<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\CategoriasController;
use App\http\Controllers\PlatoController;
//use App\http\Controllers\ClienteController;
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
Auth::routes();


Route::get('/', function () {
    return view('auth.register');
});




//route::get('plato/create',[PlatoController::class,'create']);

route::resource('categorias',CategoriasController::class)->middleware('auth');
//route::get('plato/create',[PlatoController::class,'create']);
route::resource('plato',PlatoController::class)->middleware('auth');

//route::resource('plato',ClienteController::class)->middleware('auth');

//Route::resource('plato', App\Http\Controllers\PlatoController::class);

//Auth::routes(['register'=>true,'reset'=>true]);

Route::get('/home', [CategoriasController::class, 'index'])->name('home');


Route::group(['middleware'=>'auth'],function(){

    Route::get('/', [CategoriasController::class, 'index'])->name('home');
});
//route::get('plato/create',[PlatoController::class,'create']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
