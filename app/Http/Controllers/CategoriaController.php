<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::paginate(10);
        return view('categoria.index', compact('categorias'));
    }

    public function create()
    {
        return view('categoria.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
        ]);

        Categoria::create($request->all());
        return redirect()->route('categorias.index');
    }

    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view('categoria.edit', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        $categoria->update($request->all());
        return redirect()->route('categorias.index');
    }

    public function destroy($id)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $categoria = Categoria::findOrFail($id);
        $categoria->delete();
        return redirect()->route('categorias.index');
    }
}