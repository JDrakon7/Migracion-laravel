<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    public function index(){
        $products = Producto::all();
        return response ()->json($products);
    }

    public function show($id)
    {
      $producto = Producto::find($id);  
      if ($producto){
        return response ()->json($producto);
      }
      return response ()->json(['message' => 'Producto no encontrado'] ,404);

    }
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'codigo'=> 'required|string|max:255',
            'nombre'=> 'required|string|max:255',
            'descripcion'=> 'required|string|max:1000',
            'costo'=> 'required|numeric',
            'idTipo'=> 'required|integer',
            'idClasificacion'=> 'required|integer',
            'idUnidad'=> 'required|integer',
            'imagen'=> 'nullable|string',
            'habilitado'=> 'required|boolean',
            'boton'=> 'nullable|array',
            'campo'=> 'nullable|array',
            'seleccionado'=> 'required|boolean',
            'fileImagen'=> 'nullable|file|mimes:jpeg,png,jpg',
        ]); 


        if ($validator->fails()) {
            return response()->json($validator->errores(), 400);

        }

        $producto = Producto::create($request->all());
        return response()->json($producto , 201);     
    }

    public function update(Request $request , $id)
    {
        $producto = Producto::find($id);


        if (!$producto){
            return response()->json(['message'=> 'Producto no encontrado'],404);
        }

        $validator = Validator::make($request->all(), [
            'codigo'=> 'string|max:255',
            'nombre'=> 'string|max:255',
            'descripcion'=> 'string|max:1000',
            'costo'=> 'numeric',
            'idTipo'=> 'integer',
            'idClasificacion'=> 'integer',
            'idUnidad'=> 'integer',
            'imagen'=> 'nullable|string',
            'habilitado'=> 'boolean',
            'boton'=> 'nullable|array',
            'campo'=> 'nullable|array',
            'seleccionado'=> 'boolean',
            'fileImagen'=> 'nullable|file|mimes:jpeg,png,jpg',
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(),400);
        }
        
        $producto->update($request->all());
        return response()->json($producto, 200);
    }

    public function destroy($id)
    {
        $producto = Producto::find($id);

        if (!$producto) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        $producto->delete();
        return response()->json(['message'=> 'Producto eliminado correctamente'],200);
    }
}
