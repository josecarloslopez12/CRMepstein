@extends('layout')

@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Editar Empleado</h1>
        <p class="page-subtitle">Actualiza la información del empleado</p>
    </div>
</div>

<div class="form-card">
    <div class="form-card-header">
        <h2 class="form-card-title"><i class="bi bi-pencil-square me-2"></i>Edición de Empleado</h2>
        <p class="form-card-subtitle">Modifica los datos del empleado</p>
    </div>
    <form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="nombre" class="form-label">Nombre Completo</label>
            <input type="text" name="nombre" value="{{ $empleado->nombre }}" id="nombre" class="form-control" required>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="puesto" class="form-label">Cargo / Puesto</label>
                    <input type="text" name="puesto" value="{{ $empleado->puesto }}" id="puesto" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="salario" class="form-label">Salario Mensual</label>
                    <input type="number" step="0.01" name="salario" value="{{ $empleado->salario }}" id="salario" class="form-control" required>
                </div>
            </div>
        </div>
        
        <div class="form-group mb-0">
            <button type="submit" class="btn btn-warning w-100">
                <i class="bi bi-arrow-repeat me-2"></i>Actualizar Empleado
            </button>
        </div>
    </form>
</div>
@endsection