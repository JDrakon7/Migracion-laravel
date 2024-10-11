<?php

namespace App\Http\Controllers;

use App\Models\Lista;
use Illuminate\Http\Request;

class ListaController extends Controller
{
    public function index()
    {
        $listas = Lista::all();
        return response()->json($listas);
    }

    public function show($id)
    {
        $lista = Lista::findOrFail($id);
        return response()->json($lista);
    }

    public function store(Request $request)
    {
        $lista = Lista::create($request->all());
        return response()->json($lista, 201);
    }

    public function update(Request $request, $id)
    {
        $lista = Lista::findOrFail($id);
        $lista->update($request->all());
        return response()->json($lista);
    }

    public function destroy($id)
    {
        Lista::destroy($id);
        return response()->json(null, 204);
    }
}
