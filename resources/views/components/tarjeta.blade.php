@php
if(!isset($descripcion)){
    $descripcion = 'N/A';
}
@endphp

<div class="card d-inline-block" style="width: 18rem;">
  <img src="{{ asset($portada) }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $titulo }}</h5>
    <p class="card-text">{{ $descripcion }}</p>
    <a href="{{ route('sitio.nota', [$id]) }}" class="btn btn-primary">Leer nota</a>
  </div>
</div>