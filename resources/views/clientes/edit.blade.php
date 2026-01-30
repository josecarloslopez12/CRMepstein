@extends('layout')
@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Editar Cliente</h1>
        <p class="page-subtitle">Actualiza los datos del cliente</p>
    </div>
</div>

<div class="form-card">
    <div class="form-card-header">
        <h2 class="form-card-title"><i class="bi bi-pencil-square me-2"></i>Edición de Cliente</h2>
        <p class="form-card-subtitle">Modifica la información del cliente</p>
    </div>
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="form-group">
            <label for="nombre" class="form-label">Nombre Completo</label>
            <input type="text" name="nombre" value="{{ $cliente->nombre }}" class="form-control" id="nombre" required>
        </div>
        
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" value="{{ $cliente->email }}" class="form-control" id="email" required>
        </div>
        
        <div class="form-group">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" name="telefono" value="{{ $cliente->telefono }}" class="form-control" id="telefono">
        </div>
        
        <div class="form-group">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" name="direccion" value="{{ $cliente->direccion }}" class="form-control" id="direccion">
        </div>
        
        <div class="form-group mb-0">
            <button type="submit" class="btn btn-warning w-100">
                <i class="bi bi-arrow-repeat me-2"></i>Actualizar Cliente
            </button>
        </div>
    </form>
</div>
@endsection