<?php

namespace App\Http\Controllers;
use App\Models\Acceso;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class AccesoController extends Controller
{
    //formulario login

    public function showLoginForm()
    {
        return view("acceso.login");
    }

    //manejo del proceso login

    public function login(Request $request)
    {
        //validar los datos ingresados 
        $request->validate([
            "usuario" => "required",
            "clave" => "required",

        ]);

        // Intenta autenticar al usuario usando el modelo Acceso
        $usuario = Acceso::acceso($request->input('usuario'), $request->input('clave'));

        if ($usuario) {
            // Si el usuario es válido, inicia sesión
            Auth::login($usuario);
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'error'=> 'Usuario o clave incorrecta',
        ])->withInput();
    }
    // Cierra sesión del usuario
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
