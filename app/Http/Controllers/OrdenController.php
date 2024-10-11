<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Validator;
use Illuminate\Http\Request;
use App\Models\Orden;

class OrdenController extends Controller

{
    // Listar todas las órdenes (index)
    public function index()
    {
        $ordenes = Orden::all(); // Obtener todas las órdenes
        return response()->json($ordenes); // Devolver en formato JSON
    }

    // Mostrar una orden específica (show)
    public function show($id)
    {
        $orden = Orden::find($id); // Buscar por ID
        if ($orden) {
            return response()->json($orden); // Devolver si existe
        }
        return response()->json(['message' => 'Orden no encontrada'], 404);
    }

    // Crear una nueva orden (store)
    public function store(Request $request)
    {
        // Validar los datos recibidos
        $validator = Validator::make($request->all(), [
            'path' => 'required|string|max:255',
            'lote' => 'required|string|max:255',
            'cliente' => 'required|string|max:255',
            'proyecto' => 'required|string|max:255',
            'fechaEntrega' => 'required|date',
            'costo' => 'required|numeric',
            'cif' => 'required|numeric',
            'costoTotal' => 'required|numeric',
            'manoObra' => 'required|numeric',
            'otros' => 'nullable|numeric',
            'tornilleria' => 'nullable|numeric',
            'cantidad' => 'required|numeric',
            'habilitado' => 'required|boolean',
            'fechaRegistro' => 'required|date',
            'idUsuario' => 'required|integer',
            'idProyecto' => 'required|integer',
            // Otras validaciones según sea necesario
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Crear una nueva orden
        $orden = Orden::create($request->all());
        return response()->json($orden, 201);
    }

    // Actualizar una orden existente (update)
    public function update(Request $request, $id)
    {
        $orden = Orden::find($id); // Buscar la orden por ID

        if (!$orden) {
            return response()->json(['message' => 'Orden no encontrada'], 404);
        }

        // Validar los datos actualizados
        $validator = Validator::make($request->all(), [
            'path' => 'string|max:255',
            'lote' => 'string|max:255',
            'cliente' => 'string|max:255',
            'proyecto' => 'string|max:255',
            'fechaEntrega' => 'date',
            'costo' => 'numeric',
            'cif' => 'numeric',
            'costoTotal' => 'numeric',
            'manoObra' => 'numeric',
            'otros' => 'numeric',
            'tornilleria' => 'numeric',
            'cantidad' => 'numeric',
            'habilitado' => 'boolean',
            'fechaRegistro' => 'date',
            'idUsuario' => 'integer',
            'idProyecto' => 'integer',
            // Otras validaciones según sea necesario
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Actualizar la orden con los datos recibidos
        $orden->update($request->all());
        return response()->json($orden, 200);
    }

    // Eliminar una orden (destroy)
    public function destroy($id)
    {
        $orden = Orden::find($id); // Buscar la orden por ID

        if (!$orden) {
            return response()->json(['message' => 'Orden no encontrada'], 404);
        }

        $orden->delete(); // Eliminar la orden
        return response()->json(['message' => 'Orden eliminada correctamente'], 200);
    }
}

// {
//     public function index()
//     {
//         $orden = Orden::all();
//         return view("tran.orden.index", compact("ordenes"));
//     }

//     public function create()
//     {
//         return view("tran.orden.create");
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             "path" => "required|string",
//             "lote" => "nullable|string",
//             "cliente" => "required|string",
//             "proyecto" => "nullable|string",
//             "fechaEntrega" => "nullable|string",
//             "costo" => "nullable|numeric",
//             "cif" => "nullable|numeric",
//             "costoTotal" => "nullable|numeric",
//             "manoObra" => "nullable|numeric",
//             "otros" => "nullable|numeric",
//             "tornilleria" => "nullable|numeric",
//             "cantidad" => "nullable|numeric",
//             "habilitado" => "boolean",
//             "fechaRegistro" => "required|date",
//             "idProductos" => "required|array",
//             "codigoProducto" => "nullable|array",
//             "nombreProducto" => "nullable|string",
//             0
//         ]);

//         Orden::created($request->all());
//         return redirect()->route("ordenes.index")->with("success", "Orden creada exitosamente");
//     }
//     public function show(Orden $orden)

//     {
//         // Mostrar los detalles de una orden
//         return view('tran.orden.show', compact('orden'));
//     }

//     public function edit(Orden $orden)
//     {
//         // Mostrar formulario para editar una orden existente
//         return view('tran.orden.edit', compact('orden'));
//     }
   
//     public function update(Request $request, Orden $orden)
//     {
//         $request->validate([
//             'path' => 'nullable|string',
//             'lote' => "nullable|string",
//             "cliente" => "nullable|string",
//             "proyecto" => "nullable|string",
//             "fechaEntrega" => "nullable|string",
//             "costo" => "nullable|numeric",
//             "cif" => "nullable|numeric",
//             "costoTotal" => "nullable|string",
//             "manoObra" => "nullable|string",
//             "otros" => "nullable|numeric",
//             "tornilleria" => "nullable|numeric",
//             "cantidad" => "nullable|numeric",
//             "habilitado" => "boolean",
//             "fechaRegistro" => "required|date",
//             "idProductos" => "required|array",
//             "codigoProducto" => "required|array",
//             "nombreProducto" => "nullable|array"
//         ]);
//     }

//     public function destroy($id)
//     {
//         $orden = Orden::find($id);

//         if (!$orden) {
//             return response()->json(['message' => 'Orden no encontrada'], 404);
//         }

//         $orden->detele();
//         return redirect()->route("ordenes.index")->with("success", "Orden eliminada con exito");
//     }
// }
