<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\CategoriasController;
use App\http\Controllers\PlatoController;
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
    return view('auth.login');
});




//route::get('plato/create',[PlatoController::class,'create']);

route::resource('categorias',CategoriasController::class)->middleware('auth');
//route::get('plato/create',[PlatoController::class,'create']);
route::resource('plato',PlatoController::class)->middleware('auth');
//Route::resource('plato', App\Http\Controllers\PlatoController::class);

Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', [CategoriasController::class, 'index'])->name('home');


Route::group(['middleware'=>'auth'],function(){

    Route::get('/', [CategoriasController::class, 'index'])->name('home');
});
//route::get('plato/create',[PlatoController::class,'create']);