<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Constante extends Model
{
    protected $table = "iv_constante";

    // Clave primaria: Laravel asume que id es la clave primaria de la tabla. Si la clave primaria tiene otro nombre
    // Puede definirla usando la propiedad $primaryKey en el modelo. Ejemplo: protected $primaryKey = 'id_constante';

    // id manejado automaticamente por Eloquent
    protected $fillable = [

        "codigo",
        "nombre",
        "valor",
        "descripcion",
        "habilitado",
        "seleccionado",
        "boton",
        "campo"
    ];


    protected $casts = [
        "boton" => "array",
        "campo" => "array",
        "habilitado" => "boolean",
        "seleccionado" => "boolean",
    ];

    protected $hidden = [
        "created_at",
        "updated_at"
    ];
    
    // En Eloquent usamos el atributo protected $casts para decirle a Laravel 
    // que los campos boton y campo deben ser tratados como arrays.

    public function getBotonAttribute()
    {
        return [
            "cmd_guardar" => $this->boton[0] ?? null,
            "cmd_modificar" => $this->boton[1] ?? null,
            "cmd_eliminar" => $this->boton[2] ?? null,
            "cmd_cancelar" => $this->boton[3] ?? null,

        ];
    }

    public function getCampoAttribute()
    {
        return [
            "id" => $this->boton[0] ?? null,
            "codigo" => $this->boton[1] ?? null,
            "nombre" => $this->boton[2] ?? null,
            "valor" => $this->boton[3] ?? null,
            "descripcion" => $this->boton[4] ?? null,
            "habilitado" => $this->boton[5] ?? null,
        ];
    }

    public function setBotonAttribute($value)
    {
        $this->attributes['boton'] = json_encode($value);
    }

    public function setCampoAttribute($value)
    {
        $this->attributes['campo'] = json_encode($value);
    }
}
