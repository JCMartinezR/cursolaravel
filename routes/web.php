<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {


    $consulta = DB::table('etiquetas')->get();

    return view('inicio', [
        "etiquetas" => $consulta
    ]);
});

Route::get('/articulo/1', function () {
    return view('inicio');
});

Route::get('/etiquetas/nombre', function () {
    return view('inicio');
});

Route::get('/busqueda', function () {
    return view('inicio');
});

Route::get('/admin/iniciar-sesion', function () {
    return view('inicio');
});

Route::get('/admin/inicio', function () {
    return view('inicio');
});
