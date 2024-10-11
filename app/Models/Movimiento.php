<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    protected $table = 'iv_movimiento';

     protected $fillable = [
        "factura",
        "cotizacion",
        "lote",
        "proveedor",
        "costo",
        "nota",
        "habilitado",
        "fecha_registro",
        "id_tipo",
        "id_productos",
        "nombre_productos",
        "imagen_productos",
        "cantidad_productos",
        "valor_unitario_productos"    
    ];

    protected $casts = [
        "id_productos"=> "array",
        "nombre_productos"=> "array",
        "imagen_productos"=> "array",
        "cantidad_productos"=> "array",
        "valor_unitario_productos"=> "array"
    ];
    
    public function productos()
    {
        return $this->hasMany(Producto::class);
    }

    public function getHtmlDataTableHead($texto)
    {       
        return view('tran.movimiento.head',['texto' => $texto]);
    }

    public function getHtmlDataTable($texto)
    {
        return view ('tran.movimiento.table' , ['datos' => $this->productos, 'texto'=> $texto ]);
        
    }

    public function getHtmlCotizacionDataTable($texto)

    {
        return view('tran.movimiento.cotizacion_table', ['datos' => $this->productos , 'texto'=> $texto ]);
    }
}

