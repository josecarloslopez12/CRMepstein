<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClienteController extends Controller
{
    public function index()
    {
        // usa paginación para dividir resultados
        $clientes = Cliente::paginate(10);
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'email' => 'nullable|email',
            'telefono' => 'nullable|string',
            'direccion' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'archivo' => 'nullable|mimes:pdf|max:10240',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('clientes/fotos', 'public');
        }
        if ($request->hasFile('archivo')) {
            $validated['archivo'] = $request->file('archivo')->store('clientes/archivos', 'public');
        }

        Cliente::create($validated);
        return redirect()->route('clientes.index');
    }

    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $validated = $request->validate([
            'nombre' => 'required',
            'email' => 'nullable|email',
            'telefono' => 'nullable|string',
            'direccion' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'archivo' => 'nullable|mimes:pdf|max:10240',
        ]);

        // limpiar archivos previos si se suben nuevos
        if ($request->hasFile('foto')) {
            if ($cliente->foto) {
                Storage::disk('public')->delete($cliente->foto);
            }
            $validated['foto'] = $request->file('foto')->store('clientes/fotos', 'public');
        }

        if ($request->hasFile('archivo')) {
            if ($cliente->archivo) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($cliente->archivo);
            }
            $validated['archivo'] = $request->file('archivo')->store('clientes/archivos', 'public');
        }

        $cliente->update($validated);
        return redirect()->route('clientes.index');
    }

    public function destroy($id)
    {
        // solo administradores pueden borrar
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $cliente = Cliente::findOrFail($id);
        if ($cliente->foto) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($cliente->foto);
        }
        if ($cliente->archivo) {
            Storage::disk('public')->delete($cliente->archivo);
        }
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}