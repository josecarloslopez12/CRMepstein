<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::paginate(10);
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'archivo' => 'nullable|mimes:pdf|max:10240',
        ]);

        if ($request->hasFile('imagen')) {
            $validated['imagen'] = $request->file('imagen')->store('productos/imagenes', 'public');
        }
        if ($request->hasFile('archivo')) {
            $validated['archivo'] = $request->file('archivo')->store('productos/archivos', 'public');
        }

        Producto::create($validated);
        return redirect()->route('productos.index');
    }

    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);

        $validated = $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'archivo' => 'nullable|mimes:pdf|max:10240',
        ]);

        if ($request->hasFile('imagen')) {
            if ($producto->imagen) {
                Storage::disk('public')->delete($producto->imagen);
            }
            $validated['imagen'] = $request->file('imagen')->store('productos/imagenes', 'public');
        }
        if ($request->hasFile('archivo')) {
            if ($producto->archivo) {
                Storage::disk('public')->delete($producto->archivo);
            }
            $validated['archivo'] = $request->file('archivo')->store('productos/archivos', 'public');
        }

        $producto->update($validated);
        return redirect()->route('productos.index');
    }

    public function destroy($id)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $producto = Producto::findOrFail($id);
        if ($producto->imagen) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($producto->imagen);
        }
        if ($producto->archivo) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($producto->archivo);
        }
        $producto->delete();
        return redirect()->route('productos.index');
    }
}