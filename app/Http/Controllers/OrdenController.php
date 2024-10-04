<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orden;

class OrdenController extends Controller
{
    public function index()
    {
        $orden = Orden::all();
        return view("tran.orden.index", compact("ordenes"));
    }

    public function create()
    {
        return view("tran.orden.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "path" => "required|string",
            "lote" => "nullable|string",
            "cliente" => "required|string",
            "proyecto" => "nullable|string",
            "fechaEntrega" => "nullable|string",
            "costo" => "nullable|numeric",
            "cif" => "nullable|numeric",
            "costoTotal" => "nullable|numeric",
            "manoObra" => "nullable|numeric",
            "otros" => "nullable|numeric",
            "tornilleria" => "nullable|numeric",
            "cantidad" => "nullable|numeric",
            "habilitado" => "boolean",
            "fechaRegistro" => "required|date",
            "idProductos" => "required|array",
            "codigoProducto" => "nullable|array",
            "nombreProducto" => "nullable|string",
            0
        ]);

        Orden::created($request->all());
        return redirect()->route("ordenes.index")->with("success", "Orden creada exitosamente");
    }
    public function show(Orden $orden)

    {
        // Mostrar los detalles de una orden
        return view('tran.orden.show', compact('orden'));
    }

    public function edit(Orden $orden)
    {
        // Mostrar formulario para editar una orden existente
        return view('tran.orden.edit', compact('orden'));
    }

    public function update(Request $request, Orden $orden)
    {
        $request->validate([
            'path' => 'nullable|string',
            'lote' => "nullable|string",
            "cliente" => "nullable|string",
            "proyecto" => "nullable|string",
            "fechaEntrega" => "nullable|string",
            "costo" => "nullable|numeric",
            "cif" => "nullable|numeric",
            "costoTotal" => "nullable|string",
            "manoObra" => "nullable|string",
            "otros" => "nullable|numeric",
            "tornilleria" => "nullable|numeric",
            "cantidad" => "nullable|numeric",
            "habilitado" => "boolean",
            "fechaRegistro" => "required|date",
            "idProductos" => "required|array",
            "codigoProducto" => "required|array",
            "nombreProducto" => "nullable|array"
        ]);
    }

    public function destroy($id)
    {
        $orden = Orden::find($id);

        if (!$orden) {
            return response()->json(['message' => 'Orden no encontrada'], 404);
        }

        $orden->detele();
        return redirect()->route("ordenes.index")->with("success", "Orden eliminada con exito");
    }
}
