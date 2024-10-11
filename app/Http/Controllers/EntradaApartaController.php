<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movimiento;
use App\Models\Usuario;  
use Auth;

class EntradaApartaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getInboxHtmlDataTable(Request $request)
    {
        $datos = $request->input('datos', []);
        $usuario = Auth::user();  // Obtener el usuario autenticado
        $texto = $this->getIdioma($usuario->lang);  // Obtener los textos en su idioma

        $html = $this->generateHtmlTable($datos, $texto);
        return response()->json(['html' => $html]);
    }

    protected function generateHtmlTable($datos, $texto)
    {
        $html = "<thead><tr role=\"row\" class=\"bg-success\">";
        $html .= "<th class=\"text-center\">S</th>";
        $html .= "<th>{$texto['entrada_lblNroEntrada']}</th>";
        $html .= "<th>{$texto['entrada_lblNroLote']}</th>";
        $html .= "<th>{$texto['entrada_lblNroProveedor']}</th>";
        $html .= "<th>{$texto['entrada_lblNroFactura']}</th>";
        $html .= "<th>{$texto['entrada_lblNroCotizacion']}</th>";
        $html .= "<th>{$texto['entrada_lblFechaEntrada']}</th>";
        $html .= "<th>{$texto['entrada_total']}</th>";
        $html .= "</tr></thead><tbody>";

        foreach ($datos as $valor) {
            $html .= "<tr>";
            $html .= "<td><input type=\"checkbox\" value=\"{$valor['id']}\"></td>";
            $html .= "<td>{$valor['id']}</td>";
            $html .= "<td>{$valor['lote']}</td>";
            $html .= "<td>{$valor['proveedor']}</td>";
            $html .= "<td>{$valor['factura']}</td>";
            $html .= "<td>{$valor['cotizacion']}</td>";
            $html .= "<td>{$valor['fechaRegistro']}</td>";
            $html .= "<td>{$this->getFormattedCurrency($valor['costo'])}</td>";
            $html .= "<td><button class=\"btn btn-success\">Ver</button></td>";
            $html .= "</tr>";
        }

        $html .= "</tbody>";
        return $html;
    }

    protected function getFormattedCurrency($amount)
    {
        return '$' . number_format($amount, 0);
    }

    protected function getIdioma($lang)
    {
        return [
            'entrada_lblNroEntrada' => 'Número de Entrada',
            'entrada_lblNroLote' => 'Número de Lote',
            'entrada_lblNroProveedor' => 'Proveedor',
            'entrada_lblNroFactura' => 'Número de Factura',
            'entrada_lblNroCotizacion' => 'Número de Cotización',
            'entrada_lblFechaEntrada' => 'Fecha de Entrada',
            'entrada_total' => 'Total',
            'inbox_datatable_vacio' => 'No hay datos disponibles',
        ];
    }
}
