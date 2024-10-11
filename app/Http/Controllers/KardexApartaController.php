<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KardexAparta;

class KardexApartaController extends Controller
{
    public function index(Request $request)
    {
        // Obtiene el idioma y el usuario si es necesario
        $usuario = auth()->user(); // Asegúrate de que el usuario esté autenticado

        // Obtener datos del Kardex (inventario) en función de la solicitud
        $kardexData = KardexAparta::all();

        return view('kardex_aparta.index', [
            'kardexData' => $kardexData,
            'usuario' => $usuario,
        ]);
    }

    public function getInboxHtmlDataTable(Request $request)
    {
        $kardexData = KardexAparta::all()->map(function ($item) {
            return [
                'id' => $item->id,
                'nombreProductivo' => $item->nombreProductivo,
                'cantidad' => $item->cantidad,
                'costo' => $item->costo,
                'valorVenta' => $item->valorVenta,
                'cliente' => $item->cliente,
                'estado' => $item->estado,
            ];
        });

        return response()->json($kardexData);
    }
}

