<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleado::paginate(10);
        return view('empleados.index', compact('empleados'));
    }

    public function create()
    {
        return view('empleados.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
        ]);

        Empleado::create($request->all());
        return redirect()->route('empleados.index');
    }

    public function edit($id)
    {
        $empleado = Empleado::find($id);
        return view('empleados.edit', compact('empleado'));
    }

    public function update(Request $request, $id)
    {
        $empleado = Empleado::find($id);
        $empleado->update($request->all());
        return redirect()->route('empleados.index');
    }

    public function destroy($id)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $empleado = Empleado::findOrFail($id);
        $empleado->delete();
        return redirect()->route('empleados.index');
    }
}