@extends('layout')
@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Nueva Categoría</h1>
        <p class="page-subtitle">Crea una nueva categoría de productos</p>
    </div>
</div>

<div class="form-card">
    <div class="form-card-header">
        <h2 class="form-card-title"><i class="bi bi-tag me-2"></i>Registro de Categoría</h2>
        <p class="form-card-subtitle">Completa la información de la categoría</p>
    </div>
    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre" class="form-label">Nombre de la Categoría</label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ej: Electrónica" required>
        </div>
        
        <div class="form-group">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" placeholder="Describe esta categoría..." style="min-height: 120px;"></textarea>
        </div>
        
        <div class="form-group mb-0">
            <button type="submit" class="btn btn-success w-100">
                <i class="bi bi-check-circle me-2"></i>Guardar Categoría
            </button>
        </div>
    </form>
</div>
@endsection