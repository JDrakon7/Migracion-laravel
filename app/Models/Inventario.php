<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Inventario extends Model
{
    protected $table = "iv_producto";


    protected $fillable = [
        "idmovimiento",
        "cif",
        "codigo",
        "nombre",
        "cantidad",
        "valor",
        "costo",
        "valorVenta",
        "valorTotVenta",
        "lote",
        "fechaRegistro",
        "cliente",
        "imagen",
        "seleccionado",
        "boton",
        "campo",
    ];

    protected $casts = [
        "boton" => "array",
        "campo" => "array",
    ];

    protected $hidden = [
        "created_at",
        "update_at"
    ];


    public function getBotonAttribute()
    {
        return [
            "cmd_guardar" => $this->boton[0] ?? '',
            "cmd_modificar" => $this->boton[1] ?? '',
            "cmd_eliminar" => $this->boton[2] ?? '',
            "cmd_cancelar" => $this->boton[3] ?? '',

        ];
    }

    public function getCampoAttribute()
    {
        return [
            "id" => $this->campo[0] ?? '',
            "codigo" => $this->campo[1] ?? '',
            "nombre" => $this->campo[2] ?? '',
            "valor" => $this->campo[3] ?? '',
            'lote'=> $this->campo[4] ?? '',

        ];
    }
}
