<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function index()
    {
        $productos = Inventario::all();

        return view('inventario.index' , compact('productos'));
    }

    public function create()
    {
        return view('inventario.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request ->validate([
            'idmovimiento'=> 'nullable|integer',
            'cif'=> 'nullable|string|max:50',
            'codigo'=> 'required|string|max:50',
            'nombre'=> 'required|string|max:255',
            'cantidad'=> 'nullable|integer',
            'valor'=> 'nullable|numeric',
            'costo'=> 'nullable|numeric',
            'lote'=> 'nullable|string|max:50',
            'fechaRegistro'=> 'null|string|date',
            'cliente'=> 'nullable|string|max:255',
            'imagen'=> 'nullable|string|max:255',
            'seleccionado'=> 'nullable|boolean',
            'boton'=> 'nullable|array',
            'campo'=> 'nullable|array',
        ]);

        Inventario::create($validateData);

        return redirect()->route('inventario.index')->with('success','Producto creado exitosamente');

    }

       public function show($id)
       {
         $producto = Inventario::findOrFail($id);

         return view('inventario.show', compact('producto'));

       }

       public function edit($id)
       {
         $producto = Inventario::findOrFail($id);

         return view('inventario.edit' , compact('producto'));
       }

       public function update(Request $request , $id)
       {
        $validatedData = $request->validate([
            'idmovimiento' => 'nullable|integer',
            'cif' => 'nullable|string|max:50',
            'codigo' => 'required|string|max:50',
            'nombre' => 'required|string|max:255',
            'cantidad' => 'nullable|integer',
            'valor' => 'nullable|numeric',
            'costo' => 'nullable|numeric',
            'valorVenta' => 'nullable|numeric',
            'valorTotVenta' => 'nullable|numeric',
            'lote' => 'nullable|string|max:50',
            'fechaRegistro' => 'nullable|date',
            'cliente' => 'nullable|string|max:255',
            'imagen' => 'nullable|string|max:255',
            'seleccionado' => 'nullable|boolean',
            'boton' => 'nullable|array',
            'campo' => 'nullable|array',
        ]);

        $producto = Inventario::findOrFail($id);
        $producto->update($validatedData);

        return redirect()->route('inventario.index')->with('succes' , 'Producto acutlizado exitosamente');
              
       }

       public function destroy($id)
       {
        $producto = Inventario::findOrFail($id);
        $producto->delete();


        return redirect()->route('inventario.index')->with('succes','Producto eliminado existosamente.');


       }


    }
