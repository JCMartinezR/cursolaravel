@extends('layouts.main')


@section('contenido')
<h1 class="display-2 fw-bold">🛡️ Panel del administrador</h1>
<a href="{{ route('articulos') }}" class="btn btn-dark">Crear nuevo artículo</a>
<a href="{{ route('reporte') }}" class="btn btn-dark">Generar reporte de artículos</a>

<!-- <form action="{{ route('subir') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <x-errores />
    <div class="mb-3">
        <label for="archivo" class="form-label">Adjunta tu recibo de pago</label>
        <input class="form-control" type="file" id="archivo" name="recibo" accept=".pdf,.png,.jpg">
    </div>
    <button class="btn btn-primary">Subir archivo</button>
</form> -->

<table class="table table-bordered table-striped" id="tabla-articulos">
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
        @foreach($articulos AS $a)
        <tr>
            <td>{{ $a->titulo }}</td>
            <td>{{ $a->fecha_visualizacion }}</td>
            <td>
                <button class="btn btn-sm btn-danger">🗑️</button>
                <button class="btn btn-sm btn-warning">✏️</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection