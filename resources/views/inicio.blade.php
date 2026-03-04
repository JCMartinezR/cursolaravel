@extends('layouts.main')


@section('titulo', 'Bienvenida')

@section('contenido')

<div class="bg-dark d-flex justify-content-center gap-2 py-2 mb-4">
  @foreach ($etiquetas as $e)
    <a href="{{ url('etiquetas/' .$e->nombre) }}">{{ $e->nombre }}</a>
  @endforeach
</div>


@foreach($articulos as $a)
<x-tarjeta id="{{ $a->id }}" portada="{{ $a->portada }}" titulo="{{ $a->titulo }}">
  <x-slot name="descripcion">
    {{ $a->descripcion }}
  </x-slot>
</x-tarjeta>
@endforeach

@endsection