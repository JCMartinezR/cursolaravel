<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('css')
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MiAplicación</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('sitio.articulos') }}">Artículos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('sitio.etiquetas') }}">Etiquetas</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          @if(Auth::user())
          <a href="{{ route('cerrar') }}" class="nav-link active">{{ Auth::user()->nombre }}</a>
          @else
          <a href="{{ route('iniciarSesion') }}" class="nav-link active">Iniciar sesión</a>
          @endif
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  @yield('contenido')
</div>


@yield('js')
</body>
</html>