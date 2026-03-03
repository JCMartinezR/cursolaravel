<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LlenarBase extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            'nombre' => "Carlos",
            'email' => "carlos@mail.com",
            'password' => Hash::make("1234"),
        ]);
        DB::table('usuarios')->insert([
            'nombre' => "Ana",
            'email' => "ana@mail.com",
            'password' => Hash::make("1111"),
        ]);

        

        DB::table('articulos')->insert([
            'titulo' => "Cae el dolar",
            'portada' => "imagen.jpg",
            'descripcion' => "Actualizacion en la moneda",
            'contenido' => "<h1>Aqui va la nota</h1>",
            'fecha_visualizacion' => "2026-01-01",
            'usuario_id' => 1,
        ]);

        DB::table('articulos')->insert([
            'titulo' => "Subio el dolar",
            'portada' => "imagen.jpg",
            'descripcion' => "Actualizacion en la moneda",
            'contenido' => "<h1>Aqui va la nota</h1>",
            'fecha_visualizacion' => "2026-01-01",
            'usuario_id' => 2,
        ]);


        DB::table('etiquetas')->insert([
            'nombre' => "Economía",
        ]);
        DB::table('etiquetas')->insert([
            'nombre' => "Política",
        ]);
        DB::table('etiquetas')->insert([
            'nombre' => "Finanzas",
        ]);
        DB::table('etiquetas')->insert([
            'nombre' => "Entretenimiento",
        ]);
        DB::table('etiquetas')->insert([
            'nombre' => "Deportes",
        ]);
    }
}
