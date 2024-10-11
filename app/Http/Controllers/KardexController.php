<?php

namespace App\Http\Controllers;

use App\Models\Kardex;
use App\Models\KardexAparta;
use Illuminate\Http\Request;

class KardexController extends Controller
{
    public function index(Request $request)
    {
        $funcion = $request->input('funcion', '');
        $datos = $request->input('datos', []);

        // Obtener datos del usuario desde sesión
        $usuario = auth()->user();  // Reemplaza la lógica de sesión con Auth de Laravel

        // Validación de sesión
        if (!$usuario) {
            return redirect()->route('login');  // Redirige a login si no hay usuario autenticado
        }

        // Obtener el idioma basado en la preferencia del usuario
        $texto = $this->getIdioma($usuario->lang);

        switch ($funcion) {
            case 'getInboxHtmlDataTable':
                return $this->getInboxHtmlDataTable($datos, $texto);
            default:
                // Si no hay función, cargar la vista por defecto
                return view('kardex.index');
        }
    }

    // Obtener los textos del idioma correspondiente
    private function getIdioma($lang)
    {
        // Lógica para cargar textos según el idioma, por ejemplo, desde archivos de idioma de Laravel
        return __('idiomas.'.$lang);  // Ejemplo: idiomas/es.php
    }

    // Adaptar la función getInboxHtmlDataTable
    public function getInboxHtmlDataTable($datos, $texto)
    {
        $usuario = auth()->user();
        $kardexDatos = json_decode($datos, true);

        // Filtrar datos según roles de usuario
        $verCosto = !str_contains(strtolower($usuario->cargo), 'comercial');

        return view('kardex.data-table', compact('kardexDatos', 'texto', 'verCosto'));
    }
}
