@extends('layouts.main')


@section('contenido')
<main class="form-signin w-100 m-auto my-5">
    <form action="{{ route('registrarse') }}" method="post">
        <h1 class="h3 mb-3 fw-normal">Registrarme</h1>
        {{ csrf_field() }}
        <x-errores />
        <div class="form-floating"> 
            <input type="text" name="nombre" class="form-control" id="floatingInput" placeholder="Tu nombre"> <label for="floatingInput">Tu nombre</label> </div>
        <div class="form-floating"> 
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com"> <label for="floatingInput">Email address</label> </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2025</p>
    </form>
</main>
@endsection

@section('js')
<script>
    const errores = document.querySelector("#errores")
    if(errores)
        Swal.fire({
            title: "Errores detectados",
            icon: "warning",
            html: errores.outerHTML
        })
</script>
@endsection