<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductoOrden;

class ProductoOrdenController extends Controller
{
    public function buscar(Request $request)
    {
        $txtBuscar = $request ->input('buscar');
        $producto = ProductoOrden::buscarProductoOrden($txtBuscar);
        return response()->json($producto);
    }

    public function lista()
    {
        $productos = ProductoOrden::listaDataTableProd();
        return response()->json($productos);

    }


}
