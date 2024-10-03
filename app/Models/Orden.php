<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    Protected $table = 'iv_orden_cotizacion';

    protected $fillable = [
        
        "path",
        "lote",
        "cliente",
        "proyecto",
        "fechaEntrega",
        "costo",
        "cif",
        "costoTotal",
        "manoObra",
        "otros",
        "tornilleria",
        "cantidad",
        "habilitado",
        "fechaRegistro",
        "idProductos",
        "idProductosG",
        "idProductosI",
        "codigoProductos",
        "loteProductos",
        "imagenProductos",
        "cantidadproductosG",
        "cantidadTProductos",
        "valorUnitarioProductos",
        "idUsuario",
        "idProyecto",
        "idProductoOrden",
        "codigoProducto",
        "nombreProducto",
        "nombreProducto",
        "nota",
        "tipoMovimiento",
        "registrado",
        "pendiente",
        "indCotizacion",
        "boton",
        "campo",
        "seleccionado",

    ];

    protected $casts = [
        "boton"=> "array",
        "campo"=> "array",
        "idProductos"=> "array",
        "idProductosG"=> "array",
        "idProductosI"=> "array",
        "codigoProductos"=> "array",
        "nombreProductos"=> "array",
        "loteProductos"=> "array",
        "imagenProductos"=> "array",
        "cantidadProductos"=> "array",
        "cantidadProductosG"=> "array",
        "cantidadTProductos"=> "array",
        "valorUnitarioProductos"=> "array",

    ];

     // Ocultar estos campos en las respuestas JSON
    protected $hidden = [
        "created_at", "updated_at"
    ];

     // Acceder a los valores del array 'boton'
    public function getBotonAttribute(){
        return[
            "cmd_guardar"=> $this->boton[0] ?? null,
            "cmd_modificar"=> $this->boton[1] ?? null,
            "cmd_eliminar"=> $this->boton[2] ?? null,
            "cmd_cancelar"=> $this->boton[3] ?? null,  
        ];
    }

     // Acceder a los valores del array 'campo'
    public function getCampoAttribute()
    {
        return[
            "id" => $this->campo[0] ?? null,
            "codigo" => $this->campo[1] ?? null,
            "nombre"=> $this->campo[2] ?? null,
            "valor" => $this->campo[3] ?? null,
            "descripcion"=> $this->campo[4] ?? null,
            "habilitado"=> $this->campo[5] ?? null,
        ];
    }








}
