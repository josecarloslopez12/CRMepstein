@extends('layout')
@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Nuevo Producto</h1>
        <p class="page-subtitle">Agrega un nuevo producto al inventario</p>
    </div>
</div>

<div class="form-card">
    <div class="form-card-header">
        <h2 class="form-card-title"><i class="bi bi-plus-circle me-2"></i>Registro de Producto</h2>
        <p class="form-card-subtitle">Completa la información del nuevo producto</p>
    </div>
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre" class="form-label">Nombre del Producto</label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ej: Laptop Dell XPS" required>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="number" step="0.01" name="precio" id="precio" class="form-control" placeholder="0.00" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" name="stock" id="stock" class="form-control" placeholder="0" required>
                </div>
            </div>
        </div>
        
        <div class="form-group mb-0">
            <button type="submit" class="btn btn-success w-100">
                <i class="bi bi-check-circle me-2"></i>Guardar Producto
            </button>
        </div>
    </form>
</div>
@endsection