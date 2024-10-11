<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Constante;

class ConstanteController extends Controller
{
    public function index()

    {
        $constantes = Constante::all();
        return view('constante index' , compact ('constantes'));
    }

    public function create()
    {
        return view('constantes.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([   
            'nombre'=> 'required|string|max:255',
            'descripcion'=> 'nullable|string',
            'valor' => 'required',
            'descripcion'=> 'nullable|string',
            'habilitado' => 'boolean',
            'seleccionado' => 'boolean',
            ]);

            Constante::create($validateData);

            return redirect()->route('constante.index')->with('sucess0' , 'Constante creada exitosamente');
    }

    public function show($id)
    {
        $constante = Constante::findOrfail($id);

        return view('constantes.show', compact('constante'));
    }

    public function edit($id)
    {
        $constante = Constante::findOr($id);

        return view('constante.edit', compact('constante'));
    }

    public function update(Request $request, $id)   
    {
        $validateData = $request->validate([
           'codigo' => 'required|string|max:255',
            'nombre'=> 'required|string|max:255',
            'valor' => 'required',
            'descripcion'=> 'nullable|string',
            'habilitado' => 'boolean',
            'seleccionado' => 'boolean',
        ]);

        $constante = Constante::findOrFail($id);
        $constante->update($validateData);

        return redirect()->route('constante.index')->with('succes' . 'Constante actualizada exitosamente');

    }

    public function destroy($id)
    {
        $constante = Constante::findOrFail($id);
        $constante->delete();

        return redirect()->route('constantes.index')->with('success', 'Constante eliminada exitosamente');
    }


    public function getInboxHtmlDataTable(Request $request)
    {
        $datos = $request->input('datos');
        $constantes = Constante::whereIn('id' , $datos)->get();

        $html = view('constante.patrials.inbox_table' , compact ('constantes'))->render();

        return response()->json(['html' => $html]);
    }
}   

    
