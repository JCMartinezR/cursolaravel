@extends('layouts.main')


@section('contenido')

<main class="form-signin w-100 m-auto my-5">
    <form action="{{ route('entrar') }}" method="post">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
        {{ csrf_field() }}
        <div class="form-floating"> 
            <input type="email" name="correo" required class="form-control" id="floatingInput" placeholder="name@example.com"> <label for="floatingInput">Email address</label> </div>
        <div class="form-floating"> 
            <input type="password" name="contrasena" required class="form-control" id="floatingPassword" placeholder="Password"> <label for="floatingPassword">Password</label> </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2025</p>
    </form>
</main>
@endsection