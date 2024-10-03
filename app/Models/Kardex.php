<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kardex extends Model
{
    protected $table = 'iv_kardex';

    protected $fillable = [
        "cantidad",
        "costo",
        "valorVenta",
        "lote",
        "idProducto",
        "nombreProducto",
        "codigoProducto",
        "imagen",
        "nit",
        "cliente",
        "estado",
        "habilitado",
        "seleccionado",
        "boton",
        "campo"
    ];


    protected $casts = [
        "boton" => "array",
        "campo"=> "array",

    ];

    protected $hidden = [
        "created_at",
        "updated_at"
    ];

    public function getBoton()
    {
        return[
            "cmd_guardar"=> $this->boton[0],
            "cmd_modificar"=> $this->boton[1],
            "cmd_eliminar"=> $this->boton[2],
            "cmd_cancelar"=> $this->boton[3]
        ];
    }

    public function getCampo()
    {
        return[
            "id"=> $this->campo[0],
            "cantidad"=> $this->campo[1],
            "costo"=> $this->campo[2],
            "lote"=> $this->campo[3],
            "idProducto"=> $this->boton[4],
            "nombreProducto"=> $this->boton[5],
            "codigoProducto"=> $this->boton[6],
            "habilitado"=> $this->boton[7],
        ];
    }
}

