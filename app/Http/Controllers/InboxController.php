<?php

namespace App\Http\Controllers;

use App\Models\Inbox;  
use Illuminate\Http\Request;

class InboxController extends Controller
{
    // Método para listar todas las entradas de inbox
    public function index()
    {
        // Obtiene todos los registros de Inbox
        $inboxes = Inbox::all();

        // Retorna la vista con los datos
        return view('inboxes.index', compact('inboxes'));
    }

    // Método para mostrar el formulario de creación de un nuevo inbox
    public function create()
    {
        // Retorna la vista con el formulario para crear un nuevo inbox
        return view('inboxes.create');
    }

    // Método para almacenar una nueva entrada en la base de datos
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'path' => 'required|string|max:255',
            'tipo' => 'required|string|max:50',
            'tipoTabla' => 'nullable|string|max:50',
            'tabla' => 'nullable|string|max:50',
            'tablaTitulo' => 'nullable|string|max:255',
            'tablaId' => 'nullable|integer',
            'boton' => 'nullable|array',
            'datos' => 'nullable|array',
            'datoSeleccionado' => 'nullable|string|max:255',
            'cantidadPorPagina' => 'nullable|integer',
            'pagina' => 'nullable|integer',
        ]);

        // Crea un nuevo registro usando el modelo Inbox
        Inbox::create($validatedData);

        // Redirige a la lista de inboxes con un mensaje de éxito
        return redirect()->route('inboxes.index')->with('success', 'Inbox creado exitosamente.');
    }

    // Método para mostrar los detalles de una entrada específica
    public function show($id)
    {
        // Buscar el inbox por su ID
        $inbox = Inbox::findOrFail($id);

        // Retorna la vista con los detalles del inbox
        return view('inboxes.show', compact('inbox'));
    }

    // Método para mostrar el formulario de edición de una entrada
    public function edit($id)
    {
        // Buscar el inbox por su ID
        $inbox = Inbox::findOrFail($id);

        // Retorna la vista con el formulario para editar el inbox
        return view('inboxes.edit', compact('inbox'));
    }

    // Método para actualizar una entrada en la base de datos
    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'path' => 'required|string|max:255',
            'tipo' => 'required|string|max:50',
            'tipoTabla' => 'nullable|string|max:50',
            'tabla' => 'nullable|string|max:50',
            'tablaTitulo' => 'nullable|string|max:255',
            'tablaId' => 'nullable|integer',
            'boton' => 'nullable|array',
            'datos' => 'nullable|array',
            'datoSeleccionado' => 'nullable|string|max:255',
            'cantidadPorPagina' => 'nullable|integer',
            'pagina' => 'nullable|integer',
        ]);

        // Buscar el inbox por su ID y actualizarlo
        $inbox = Inbox::findOrFail($id);
        $inbox->update($validatedData);

        // Redirige a la lista de inboxes con un mensaje de éxito
        return redirect()->route('inboxes.index')->with('success', 'Inbox actualizado exitosamente.');
    }

    // Método para eliminar una entrada de la base de datos
    public function destroy($id)
    {
        // Buscar el inbox por su ID y eliminarlo
        $inbox = Inbox::findOrFail($id);
        $inbox->delete();

        // Redirige a la lista de inboxes con un mensaje de éxito
        return redirect()->route('inboxes.index')->with('success', 'Inbox eliminado exitosamente.');
    }
}
