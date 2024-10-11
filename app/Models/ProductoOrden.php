<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductoOrden extends Model
{
    protected $table = "iv_producto";

    protected $fillable = [
        "id",
        "nombre",
        "descripcion",
        "codigo",
        "habilitado",
    ];

    public static function buscarProductoOrden($txtBuscar)
    {
        $txtBuscar = '%' . $txtBuscar . '%';

        return DB::table('iv_producto as p')
            ->select('p.id', 'p.nombre', 'p.descripcion', 'p.codigo', 'p.habilitado')
            ->join('iv_producto_produccion as pp', 'pp.id_producto', '=', 'p.id')
            ->where('p.codigo', 'like', $txtBuscar)
            ->orWhere('p.nombre', 'like', $txtBuscar)
            ->distinct()
            ->get();
    }

    public static function listaDataTableProd()
    {
        return DB::table('iv_producto as p')
            ->select('p.id', 'p.nombre', 'p.descripcion', 'p.codigo', 'p.habilitado')
            ->join('iv_producto_produccion as pp', 'pp.id_producto', '=', 'p.id')
            ->distinct()
            ->orderBy('p.id', 'desc')
            ->get();
    }
}
