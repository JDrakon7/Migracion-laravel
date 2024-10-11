<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movimiento;  // Si tienes un modelo Eloquent para Movimiento

class EntradaController extends Controller
{
    // Constructor para aplicar middleware de autenticación
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Método para obtener la tabla en formato HTML
    public function getInboxHtmlDataTable(Request $request)
    {
        // Obtener todos los movimientos o aplicar filtros según sea necesario
        $datos = Movimiento::all();  
        
        // Obtener el usuario autenticado y el idioma
        $usuario = auth()->user();
        $texto = $this->getIdioma($usuario->lang);

        // Generar el HTML de la tabla y retornar la vista
        return view('entrada', compact('datos', 'texto'));
    }

    // Método auxiliar para obtener el texto en el idioma del usuario
    protected function getIdioma($lang)
    {
        // Esta lógica dependerá de cómo manejes los idiomas en tu sistema
        // Podría ser un archivo de configuración o base de datos.
        return [
            'entrada_lblNroEntrada' => 'Número de Entrada',
            'entrada_lblNroLote' => 'Número de Lote',
            'salidaPT_lblNroProveedor' => 'Proveedor',
            'entrada_lblNroFactura' => 'Número de Factura',
            'seguimientoCliente_db_observacion' => 'Observación',
            'entrada_lblFechaEntrada' => 'Fecha de Entrada',
            'entrada_total' => 'Total',
            'cmd_imprimir' => 'Imprimir',
        ];
    }
}
