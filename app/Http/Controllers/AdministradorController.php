<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdministradorController extends Controller
{
    public function iniciarSesion(){
        return view('admin.login');
    }

    public function panel(){
        return view('admin.inicio');
    }

    public function entrar(Request $request){
        if( Auth::attempt(["password" => $request->contrasena, "email" => $request->correo]) ){
            $request->session()->regenerate();
            return redirect()->route('sitio.inicio');
        }
        return redirect()->back();
    }

    public function cerrar(){
        Auth::logout();
        Session::invalidate();
        Session::regenerateToken();
        return redirect()->route('sitio.inicio');
    }
}
