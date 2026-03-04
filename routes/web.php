<?php

use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\SitioController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::name('sitio.')->group(function() {
    Route::controller(SitioController::class)->group(function(){
        Route::get('/', 'inicio')->name('inicio');                                     //1
        Route::get('/nota/{articulo}/', 'articulo')->name('nota');
        Route::get('/etiquetas/{etiqueta}', 'etiqueta')->name('etiqueta');
        Route::get('/busqueda', 'busqueda');
        Route::get('/articulos', 'articulos')->name('articulos');
        Route::get('/etiquetas', 'etiquetas')->name('etiquetas');
    });
});


Route::controller(AdministradorController::class)->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get('iniciar-sesion', 'iniciarSesion')->name('iniciarSesion');
        Route::post('entrar', 'entrar')->name('entrar');
        Route::get('cerrar-sesion', 'cerrar')->name('cerrar');
        Route::get('inicio', 'panel');
    });
});
