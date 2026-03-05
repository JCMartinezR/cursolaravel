<?php

use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\SitioController;
use App\Http\Middleware\estaLogeado;
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
        Route::get('registro', 'registro')->name('registro');
        Route::post('registrarse', 'registrarse')->name('registrarse');
        Route::get('cerrar-sesion', 'cerrar')->name('cerrar');
        
        Route::get('eliminar-usuario/{usuario}', 'eliminar')->name('eliminar');

        Route::middleware(estaLogeado::class)->group(function() {
            Route::get('inicio', 'panel')->name('panel');
            Route::get('formulario-articulo', 'articulos')->name('articulos');
            Route::post('formulario-articulo/alta', 'articuloAlta')->name('articulo_subir');
            Route::get('reporte-articulos', 'reporte')->name('reporte');
            Route::post('subir', 'subir')->name('subir');
        });
    });
});
