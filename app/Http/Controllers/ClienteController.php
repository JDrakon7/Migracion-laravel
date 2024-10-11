<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function getInboxHtmlDataTable(Request $request)
    {
        $clientes = Cliente::all(); // Puedes ajustar esta consulta según sea necesario.
        $html = '';

        if ($clientes->count() > 0) {
            foreach ($clientes as $cliente) {
                $html .= "<tr class=\"trInbox\">";
                $html .= "<td><input type=\"checkbox\" name=\"txtIds[]\" value=\"{$cliente->id}\" /></td>";
                $html .= "<td class=\"mailbox-icono\"><i class=\"fa fa-circle " . ($cliente->habilitado ? "text-green" : "text-gray") . "\"></i></td>";
                $html .= "<td class=\"col-sm-2 mailbox-empresa\">{$cliente->empresa}</td>";
                $html .= "<td class=\"col-sm-8 mailbox-contacto\">{$cliente->contacto}</td>";
                $html .= "<td class=\"col-sm-2 mailbox-celular\">{$cliente->celular}</td>";
                $html .= "</tr>";
            }
        } else {
            $html .= "<tr><td><div class=\"mailbox-mensaje\">No hay datos disponibles.</div></td></tr>";
        }

        return response()->json(['html' => $html]);
    }
}
