@extends('layout')
@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Editar Producto</h1>
        <p class="page-subtitle">Actualiza la información del producto</p>
    </div>
</div>

<div class="form-card">
    <div class="form-card-header">
        <h2 class="form-card-title"><i class="bi bi-pencil-square me-2"></i>Edición de Producto</h2>
        <p class="form-card-subtitle">Modifica los datos del producto</p>
    </div>
    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="form-group">
            <label for="nombre" class="form-label">Nombre del Producto</label>
            <input type="text" name="nombre" value="{{ $producto->nombre }}" id="nombre" class="form-control" required>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="number" step="0.01" name="precio" value="{{ $producto->precio }}" id="precio" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" name="stock" value="{{ $producto->stock }}" id="stock" class="form-control" required>
                </div>
            </div>
        </div>
        
        <div class="form-group mb-0">
            <button type="submit" class="btn btn-warning w-100">
                <i class="bi bi-arrow-repeat me-2"></i>Actualizar Producto
            </button>
        </div>
    </form>
</div>
@endsection