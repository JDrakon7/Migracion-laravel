<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movimiento;

class MovimientoController extends Controller
{
    public function index()
    {
        $moviminetos = Movimiento::all();
        return view("trans-vomineto.index", compact("movimientos"));
    }

    public function create()
    {
        return view('tran.movimiento.index' , compact('movimientos'));
    
    }

    public function store(Request $request)
    {
        $request->validate([
            'factura'=> 'required|string',
            'cotizacion'=> 'nullable|string',
            'lote'=> 'nullable|string',
            'proovedor'=> 'required|string',
            'costo'=> 'required|numeric',
            'nota'=> 'nullable|string',
            'habilitado'=> 'boolean',
            'fecha_registro'=> 'required|date',
            'id_tipo'=> 'required|integer',
            'id_productos'=> 'required|array',
            'nombre_productos'=> 'required|array',
            'imagen_productos'=> 'required|array',
            'cantidad_productos'=> 'required|array',
            'valor_unitario_productos'=> 'required|array',

        ]);

        Movimiento::create($request->all());

        return redirect()->route('movimientos.index')->with('success','Movimiento creado con exito');
    }

    public function show(Movimiento $movimiento)
    {
        return view('tran.movimiento.show', compact('movimiento'));
    }

    public function edit(Movimiento $movimiento)
    {
        return view('tran.movimiento.show', compact('movimiento'));
    }

    public function update(Request $request , Movimiento $movimiento)
    {
        $request->validate([
            'factura'=>'required|string',
            'cotizacion'=> 'nullable|string',
            'lote'=> 'nullable|string',
            'proovedor'=> 'required|string',
            'nota'=> 'required|string',
            'costo'=> 'required|numeric',
            'habilitado'=> 'boolean',
            'fecha_registro'=> 'required|date',
            'id_tipo'=> 'required|integer',
            'id_productos'=> 'required|array',
            'nombre_productos'=> 'required|array',
            'imagen_productos'=> 'required|array',
            'cantidad_productos'=> 'required|array',
            'valor_unitario_productos'=> 'required|array',
        ]);

        $movimiento->update($request->all());

        return redirect()->route('movimientos.index')->with('success','Movimiento actualizado exitosamente');
    }   

    public function destroy(Movimiento $movimiento)
    {
        $movimiento->delete();

        return redirect()->route('movimiento.index')->with('success','Movimiento eliminado exitosamente');
    }

    public function getHtmlDataTableHead($texto)
    {
        $head = (new Movimiento())->getHtmlDataTableHead($texto);
        return $head;
    }

    public function getHtmlDataTable($texto)
    {
        $dataTable = (new Movimiento())->getHtmlDataTable($texto);
        return $dataTable;
    }

    public function getHtmlCotizacionDataTable($texto)
    {
        $cotizacionDataTable = (new Movimiento())->getHtmlCotizacionDataTable($texto);
        return $cotizacionDataTable;
    }


}
