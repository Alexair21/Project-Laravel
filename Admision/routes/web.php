<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatoController;
use App\Http\Controllers\CarreraController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'auth'], function () {
    /*Route::get('/registros', [PerfilController::class, 'index'])->name('registros');
    Route::post('/registros', [PerfilController::class, 'store'])->name('registros.store');*/

    Route::resource('datos', DatoController::class);
    Route::resource('carreras', CarreraController::class);
});


