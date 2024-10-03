<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    protected $table = 'iv_lista';

    protected $fillable = [
        'idLista',
        'codigo',
        'nombre',
        'descripcion',
        'habilitado',
        'seleccionado',
        'boton',
        'campo',
        'posicionHorizontal',
        'posicionVertical'
    ];

    protected $casts = [
        'habilitado' => 'boolean',
        'sellecionado' => 'boolean'
    ];

    protected $appends = ['boton', 'campo'];
    protected function getBotonAttribute()
    {

        return [
            'cmd_guardar' => '1',
            'cmd_modificar' => '',
            'cmd_eliminar' => '',
            'cmd_cancelar' => '1'
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
