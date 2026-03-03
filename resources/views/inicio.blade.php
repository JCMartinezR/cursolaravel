@extends('layouts.main')


@section('titulo', 'Bienvenida')

@section('contenido')
@foreach($etiquetas as $e)
<div class="bg-light rounded my-3">
  <span class="text-danger">{{ $e->id }}</span> {{ $e->nombre }}
</div>
@endforeach
@endsection