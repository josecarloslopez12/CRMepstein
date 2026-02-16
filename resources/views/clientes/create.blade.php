@extends('layout')
@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Nuevo Cliente</h1>
        <p class="page-subtitle">Agrega un nuevo cliente a tu sistema</p>
    </div>
</div>

<div class="form-card">
    <div class="form-card-header">
        <h2 class="form-card-title"><i class="bi bi-person-plus-fill me-2"></i>Registro de Cliente</h2>
        <p class="form-card-subtitle">Completa los datos del nuevo cliente</p>
    </div>
    <form action="{{ route('clientes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nombre" class="form-label">Nombre Completo</label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ej: Juan García López" required>
        </div>
        
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Ej: juan@example.com" required>
        </div>
        
        <div class="form-group">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Ej: +34 912 345 678">
        </div>
        
        <div class="form-group">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Ej: Calle Principal 123, Apartado 4B">
        </div>
        
        <div class="form-group">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" name="foto" id="foto" class="form-control" accept="image/*">
        </div>

        <div class="form-group">
            <label for="archivo" class="form-label">Documento (PDF)</label>
            <input type="file" name="archivo" id="archivo" class="form-control" accept="application/pdf">
        </div>
        
        <div class="form-group mb-0">
            <button type="submit" class="btn btn-success w-100">
                <i class="bi bi-check-circle me-2"></i>Guardar Cliente
            </button>
        </div>
    </form>
</div>
@endsection