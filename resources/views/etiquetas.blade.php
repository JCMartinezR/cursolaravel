@extends('layouts.main')


@section('titulo', 'Bienvenida')

@section('contenido')

<h1>Etiqueta: {{ request('etiqueta') }}</h1>

@if(count($etiqueta->articulos))
@foreach($etiqueta->articulos as $a)
<x-tarjeta id="{{ $a->id }}" portada="{{ $a->portada }}" titulo="{{ $a->titulo }}" descripcion="{{ $a->descripcion }}" />
@endforeach
@else
<h4>Esta etiqueta aún no tiene artículos relacionados</h4>
@endif

@endsection