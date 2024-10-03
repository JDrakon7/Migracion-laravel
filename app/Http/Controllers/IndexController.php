<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inbox;

class IndexController extends Controller
{
    public function index()
    {
        $inboxes = Inbox::all();
        return view("inbox.index" , ["inboxes" => $inboxes]);
    }

    public function show($id)
    {
        $inbox = Inbox::findOrFail($id);
        return view('inbox.show' , ['inbox' => $inbox]);
    }
    
    public function create()
    {
        return view('inbox.create');
    }

    public function store(Request $request)
    {
        $request->validate ([
            'path'=> 'required|string',
            'tipo'=> 'required|string',
            'tabla' => 'required|string',
        ]);

        $inbox = Inbox::create($request->all());

        return redirect()->route('inbox.index')->with('succes' , 'Registro creado con exito');
       
    }

    public function update (request $request , $id) 
    {
        $inbox = Inbox::findOrFail($id);

        $request->validate([
            'path'=> 'required|string',
            'tipo'=> 'required|string',
            'tabla'=> 'required|string',
        ]);

        $inbox->update($request->all());

        return redirect()->route('inbox.index')->with('success', 'Registro actualizado con exito');
    }

    public function destroy(Request $request , $id)
    {
        $inbox = Inbox::findOrFail($id);
        $inbox->delete();

        return redirect()->route('inbox.index')->with('success','Registro eliminado con exito');
    }

}

