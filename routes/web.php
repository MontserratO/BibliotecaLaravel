<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('pagina');
});

Route::get('/dashboard', [HomeController::class, 'biblioteca'])->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


Route::controller(HomeController::class)->group(function(){
    Route::get('/biblioteca', 'biblioteca');
    Route::get('/formulario', 'formulario');

    Route::post('/eliminar', 'eliminar2');

    Route::get('/editar/{IDP}', 'muestraedicion');
    Route::post('/almacenar', 'update');

    Route::post('/agregar', 'agregar');


    Route::get('/prestamos', 'prestamos');
    Route::get('/formularioP', 'formularioP');
    Route::post('/agregarP', 'agregarP');

    Route::get('/renov/{IDP}', 'muestrarenov');


    Route::get('/devoluciones', 'devoluciones');
    Route::get('/dev/{IDP}', 'muestradev');
    Route::post('/almacenarD', 'updateD');

});

Route::get('download-pdf', [HomeController::class, 'downloadPDF']) -> name('download-pdf');

Route::get('/chart', function(){
    return view('chart');
});