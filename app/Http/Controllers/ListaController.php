<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaController extends Controller
{
    protected $table = "iv_lista";

    protected $fillable = [
        "idLista",
        "codigo",
        "nombre",
        "descripcion",
        "habilitado",
        "seleccionado",
        "boton",
        "campo",
        "posicionHorizontal",
        "posicionVertical"
    ];

    protected $casts = [
        "habilitado" => "boolean",
        "seleccionado" => "boolean"
    ];

    protected $appends = ['boton', 'campo'];


    protected function getBotonAttribute()
    {
        return [
            'cmd_guardar' => '1',
            'cmd_modificar' => '',
            'cmd_eliminar' => '',
            'cmd_cancelar' => '1',

        ];
    }

    public function getCampoAttribute()
    {
        return [
            'id' => $this->id,
            'idLista' => $this->idLista,
            'codigo' => $this->codigo,
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'habilitado' => $this->habilitado,
        ];
    }
}
