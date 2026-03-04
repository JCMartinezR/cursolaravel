<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Etiqueta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SitioController extends Controller
{
    public function inicio(){
        $consulta_etiquetas = DB::table('etiquetas')->get();
        $consulta_articulos = DB::table('articulos')->get();
        return view('inicio', [
            "articulos" => $consulta_articulos,
            "etiquetas" => $consulta_etiquetas
        ]);
    }

    public function articulo($articulo){
        // $consulta = DB::table('articulos')
        //         ->where('id', $articulo)
        //         ->first();
        return view('articulos', [
            "articulo" => Articulo::with('autor')->find($articulo)
        ]);
    }


    public function etiqueta($etiqueta){
        $consulta = Etiqueta::with('articulos')
                    ->filtroEtiqueta($etiqueta)
                    ->first();
        
        // $consulta = Etiqueta::articulosSegunEtiqueta($etiqueta);
        
        return view('etiquetas', [
            "etiqueta" => $consulta
        ]);
    }

    public function articulos(){
        return Articulo::all();
    }
    public function etiquetas(){
        return "etiquetas";
    }
}
