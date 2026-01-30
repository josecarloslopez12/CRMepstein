@extends('layout')
@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Nuevo Empleado</h1>
        <p class="page-subtitle">Contrata un nuevo miembro del equipo</p>
    </div>
</div>

<div class="form-card">
    <div class="form-card-header">
        <h2 class="form-card-title"><i class="bi bi-person-plus-fill me-2"></i>Registro de Empleado</h2>
        <p class="form-card-subtitle">Completa los datos del nuevo empleado</p>
    </div>
    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre" class="form-label">Nombre Completo</label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ej: María García López" required>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="puesto" class="form-label">Puesto</label>
                    <input type="text" name="puesto" id="puesto" class="form-control" placeholder="Ej: Analista" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="salario" class="form-label">Salario Mensual</label>
                    <input type="number" step="0.01" name="salario" id="salario" class="form-control" placeholder="0.00" required>
                </div>
            </div>
        </div>
        
        <div class="form-group mb-0">
            <button type="submit" class="btn btn-success w-100">
                <i class="bi bi-check-circle me-2"></i>Guardar Empleado
            </button>
        </div>
    </form>
</div>
@endsection
</div>
@endsection