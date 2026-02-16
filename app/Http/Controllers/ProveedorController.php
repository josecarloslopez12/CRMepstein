<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedores = Proveedor::paginate(10);
        return view('proveedores.index', compact('proveedores'));
    }

    public function create()
    {
        return view('proveedores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
        ]);

        Proveedor::create($request->all());
        return redirect()->route('proveedores.index');
    }

    public function edit($id)
    {
        $proveedor = Proveedor::find($id);
        return view('proveedores.edit', compact('proveedor'));
    }

    public function update(Request $request, $id)
    {
        $proveedor = Proveedor::find($id);
        $proveedor->update($request->all());
        return redirect()->route('proveedores.index');
    }

    public function destroy($id)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();
        return redirect()->route('proveedores.index');
    }
}