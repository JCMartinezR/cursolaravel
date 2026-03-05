<?php

namespace App\Http\Controllers;

use App\Mail\AvisoRegistro;
use App\Models\Articulo;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AdministradorController extends Controller
{

    public function iniciarSesion(){
        return view('admin.login');
    }

    public function panel(){
        return view('admin.inicio', [
            "articulos" => Articulo::all()
        ]);
    }

    public function entrar(Request $request){
        if( Auth::attempt(["password" => $request->contrasena, "email" => $request->correo]) ){
            $request->session()->regenerate();
            return redirect()->route('sitio.inicio');
        }
        //El inicio de sesion falló
        alert()->error('Inicio sesión fallido','Tus credenciales de acceso no coinciden, intenta nuevamente');
        return redirect()->back();
    }

    public function cerrar(){
        Auth::logout();
        Session::invalidate();
        Session::regenerateToken();
        return redirect()->route('sitio.inicio');
    }

    public function registro(){
        return view('admin.registro');
    }

    public function registrarse(Request $request){

        //Validar
        $validado = $request->validate([
            "nombre" => 'required|string',
            "email" => "required|email|unique:usuarios,email",
        ]);
        
        $contrasena = rand(1000,9999);
        $validado['password'] = $contrasena;

        User::create($validado);
        // $usuario = new User();
        // $usuario->nombre = $request->nombre;
        // $usuario->email = $request->correo;
        // $usuario->password = Hash::make($contrasena);
        // $usuario->save();
        
        Mail::to($request->email)
        ->send(new AvisoRegistro($request->email, $contrasena));
        // return "registro aplicado";
        // Auth::loginUsingId($usuario->id);
        alert()->success('Registro con éxito','Te hemos enviado un correo con tus datos de acceso');
        return redirect("/");
    }



    public function eliminar($usuario){
        DB::table('articulos')
        ->where('id', 2)
        ->update([
            "usuario_id" => 1
        ]);
        
        return $usuario;
    }


    public function subir(Request $request){
        $request->validate([
            'recibo' => 'required|mimes:png,pdf,jpg|max:10000'
        ]);

        $ruta = Storage::disk('local')->put('recibos/', $request->file('recibo'));
        return $ruta;
        return "archivo guardado";
    }


    public function articulos(){
        return view('admin.articulo');
    }

    public function articuloAlta(Request $request){
        $validado = $request->validate([
            "titulo" => "required|string",
            "fecha_visualizacion" => "required|date",
            "portada" => "required|mimes:jpg,png|max: 4096",
            "descripcion" => "required|string",
            "contenido" => "required|string",
        ]);

        $ruta = Storage::disk('public')->put('portadas', $request->file('portada'));

        $validado["portada"] = $ruta;
        $validado["usuario_id"] = Auth::user()->id;

        Articulo::create($validado);

        alert()->success('Registro con éxito','Artículo publica con éxito');
        return redirect()->route('panel');
    }


    public function reporte(){
        $pdf = Pdf::loadView('pdf.reporte', [
            "articulos" => Articulo::all()
        ]);
        return $pdf->stream('reporte.pdf');
    }
}
