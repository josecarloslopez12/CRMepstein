@extends('layout')

@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Editar Proveedor</h1>
        <p class="page-subtitle">Actualiza la información del proveedor</p>
    </div>
</div>

<div class="form-card">
    <div class="form-card-header">
        <h2 class="form-card-title"><i class="bi bi-pencil-square me-2"></i>Edición de Proveedor</h2>
        <p class="form-card-subtitle">Modifica los datos del proveedor</p>
    </div>
    <form action="{{ route('proveedores.update', $proveedor->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="nombre_empresa" class="form-label">Nombre de la Empresa</label>
            <input type="text" name="nombre_empresa" value="{{ $proveedor->nombre_empresa }}" id="nombre_empresa" class="form-control" required>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="contacto_nombre" class="form-label">Nombre del Contacto</label>
                    <input type="text" name="contacto_nombre" value="{{ $proveedor->contacto_nombre }}" id="contacto_nombre" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email" class="form-label">Email Corporativo</label>
                    <input type="email" name="email" value="{{ $proveedor->email }}" id="email" class="form-control" required>
                </div>
            </div>
        </div>
        
        <div class="form-group mb-0">
            <button type="submit" class="btn btn-warning w-100">
                <i class="bi bi-arrow-repeat me-2"></i>Actualizar Proveedor
            </button>
        </div>
    </form>
</div>
@endsection