@extends('layout')
@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Nuevo Proveedor</h1>
        <p class="page-subtitle">Agrega un nuevo proveedor a tu sistema</p>
    </div>
</div>

<div class="form-card">
    <div class="form-card-header">
        <h2 class="form-card-title"><i class="bi bi-building me-2"></i>Registro de Proveedor</h2>
        <p class="form-card-subtitle">Completa los datos del nuevo proveedor</p>
    </div>
    <form action="{{ route('proveedores.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre_empresa" class="form-label">Nombre de la Empresa</label>
            <input type="text" name="nombre_empresa" id="nombre_empresa" class="form-control" placeholder="Ej: Distribuidora XYZ S.A." required>
        </div>
        
        <div class="form-group">
            <label for="contacto_nombre" class="form-label">Nombre del Contacto</label>
            <input type="text" name="contacto_nombre" id="contacto_nombre" class="form-control" placeholder="Ej: Carlos Martínez" required>
        </div>
        
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Ej: contacto@distribuidor.com" required>
        </div>
        
        <div class="form-group mb-0">
            <button type="submit" class="btn btn-success w-100">
                <i class="bi bi-check-circle me-2"></i>Guardar Proveedor
            </button>
        </div>
    </form>
</div>
@endsection