@extends('layout')

@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Editar Categoría</h1>
        <p class="page-subtitle">Actualiza la información de la categoría</p>
    </div>
</div>

<div class="form-card">
    <div class="form-card-header">
        <h2 class="form-card-title"><i class="bi bi-pencil-square me-2"></i>Edición de Categoría</h2>
        <p class="form-card-subtitle">Modifica los datos de la categoría</p>
    </div>
    <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="nombre" class="form-label">Nombre de la Categoría</label>
            <input type="text" name="nombre" value="{{ $categoria->nombre }}" id="nombre" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" style="min-height: 120px;">{{ $categoria->descripcion }}</textarea>
        </div>
        
        <div class="form-group mb-0">
            <button type="submit" class="btn btn-warning w-100">
                <i class="bi bi-arrow-repeat me-2"></i>Actualizar Categoría
            </button>
        </div>
    </form>
</div>
@endsection