<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    // Mostrar todos los usuarios
    public function index()
    {
        $usuarios = Usuario::all();
        return response()->json($usuarios);
    }

    // Mostrar un usuario específico
    public function show($id)
    {
        $usuario = Usuario::find($id);

        if (!$usuario) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        return response()->json($usuario);
    }

    // Crear un nuevo usuario
    public function store(Request $request)
    {
        $request->validate([
            'usuario' => 'required|string|max:255|unique:iv_usuario',
            'nombre' => 'required|string|max:255',
            'correo' => 'required|string|email|max:255|unique:iv_usuario',
            'celular' => 'nullable|string|max:15',
            'clave' => 'required|string|min:8|confirmed', // Asegúrate de que 'confirmar_clave' está presente en la solicitud
        ]);

        $usuario = Usuario::create($request->all());

        return response()->json($usuario, 201);
    }

    // Actualizar un usuario existente
    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);

        if (!$usuario) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        $request->validate([
            'usuario' => 'string|max:255|unique:iv_usuario,usuario,' . $id,
            'nombre' => 'string|max:255',
            'correo' => 'string|email|max:255|unique:iv_usuario,correo,' . $id,
            'celular' => 'nullable|string|max:15',
            'clave' => 'nullable|string|min:8|confirmed', // Solo validar si se proporciona
        ]);

        // Actualizar atributos
        $usuario->fill($request->all());
        
        // Si se proporciona una nueva clave, encriptarla
        if ($request->has('clave')) {
            $usuario->clave = $request->clave;
        }

        $usuario->save();

        return response()->json($usuario);
    }

    // Eliminar un usuario
    public function destroy($id)
    {
        $usuario = Usuario::find($id);

        if (!$usuario) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        $usuario->delete();
        return response()->json(['message' => 'Usuario eliminado']);
    }

    
}
