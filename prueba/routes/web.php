<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\SolicitudesController;
use App\Http\Controllers\FacturasController;
use App\Http\Controllers\HomeBaseController;

/*

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


Route::get('/home', function () {
    return view('Home.HomeBase');
});

Route::get('/servicios', function () {
    return view('servicios.indexServicios');
});


Route::get('/estudiante', function () {
    return view('estudiante.indexEstudiante');
});

Route::get('/solicitudes', function () {

    return view('solicitudes.indexSolicitudes');
});
Route::get('/facturas', function () {

    return view('facturas.indexFacturas');
});





//Route::get('/servicios/create',[ServiciosController::class,'create']);
Route::resource('servicios', ServiciosController::class); // puedo acceder a todas las url
//SI SE PRESENTA ERROR DE GET php artisan route:cache
Route::resource('estudiante', EstudianteController::class); // puedo acceder a todas las url
Route::resource('solicitudes', SolicitudesController::class);
Route::resource('facturas', FacturasController::class);
Route::resource('home', HomeBaseController::class);


Auth::routes();
Route::get('/home', [HomeBaseController::class, 'index'])->name('home');
Route::group(['midleware' => 'auth'], function () {
    Route::get('/', [HomeBaseController::class, 'index'])->name('home');
});
