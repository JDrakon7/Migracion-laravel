<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KardexAparta extends Model
{  
    use HasFactory;

    Protected $table = 'iv_kardex_apartado';

    protected $fillable = [
       'estado',
        'nombreProductivo',
        'imagen',
        'cantidad',
        'costo',
        'valorVenta',
        'cliente',
        'habilitado',
        'seleccionado',
    ];

    protected $casts = [

    ];


    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function getInboxHtmlDataTableHead()
    {
        return [
            'id',
            'Nombre',
            'Cantidad',
            'Costo',
            'Valor de Venta',
            'Cliente',
            'Estado',
        ];
    }

    public function getInboxHtmlDataTable()
    {
        // Supongamos que obtienes los datos desde la base de datos
        return $this->all()->map(function ($item) {
            return [
                $item->id,
                $item->nombreProductivo,
                $item->cantidad,
                $item->costo,
                $item->valorVenta,
                $item->cliente,
                $item->estado,
            ];
        });
    }


    public function getInboxHtmlDataTableNew()
    {
        return [
            'nombre' => '',
            'cantidad' => 0,
            'costo' => 0.00,
            'valorVenta' => 0.00,
            'cliente' => '',
            'estado' => 'nuevo',
        ];
    }
}









