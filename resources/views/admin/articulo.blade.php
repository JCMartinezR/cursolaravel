@extends('layouts.main')


@section('contenido')
<h1 class="display-2 fw-bold">Formulario de artículo</h1>


<form action="{{ route('articulo_subir') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <x-errores />
    <div class="mb-2">
        <label for="titulo">Título del artículo</label>
        <input type="text" class="form-control" name="titulo" required id="titulo">
    </div>
    <div class="mb-2">
        <label for="fecha_visualizacion">Fecha de visualización</label>
        <input type="date" class="form-control" name="fecha_visualizacion" required id="fecha_visualizacion">
    </div>
    <div class="mb-3">
        <label for="portada" class="form-label">Portada</label>
        <input class="form-control" type="file" id="portada" name="portada" accept=".png,.jpg">
    </div>
    <div class="mb-3">
        <label for="descripcion">Descripción del artículo</label>
        <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label for="contenido">Contenido</label>
        <textarea name="contenido" id="contenido" class="form-control"></textarea>
    </div>
    <button class="btn btn-primary">Subir archivo</button>
</form>
@endsection