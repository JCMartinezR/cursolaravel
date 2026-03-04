@extends('layouts.main')


@section('titulo', 'Bienvenida')

@section('contenido')
<h1>{{$articulo->titulo}}</h1>
<p>{{$articulo->descripcion}}</p>
<small>👦🏻[Autor] {{ $articulo->autor->nombre }} ({{ $articulo->autor->email }})</small>
<img src="{{$articulo->portada}}">

<main class="mb-5">
    {!! $articulo->contenido !!}
</main>
@endsection

