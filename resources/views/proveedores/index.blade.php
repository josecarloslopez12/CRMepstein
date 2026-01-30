@extends('layout')
@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Gestión de Proveedores</h1>
        <p class="page-subtitle">Administra tus empresas suministradoras</p>
    </div>
</div>

<div class="list-card">
    <div class="list-card-header">
        <h2 class="list-card-title"><i class="bi bi-truck-front-fill me-2"></i>Proveedores</h2>
        <a href="{{ route('proveedores.create') }}" class="btn-new">
            <i class="bi bi-plus-lg"></i>
            <span>Nuevo Proveedor</span>
        </a>
    </div>
    <div class="list-card-body">
        <table class="table table-hover align-middle">
            <thead>
                <tr>
                    <th><i class="bi bi-building me-2"></i>Empresa</th>
                    <th><i class="bi bi-person me-2"></i>Contacto</th>
                    <th><i class="bi bi-envelope me-2"></i>Email</th>
                    <th class="text-center"><i class="bi bi-gear me-2"></i>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($proveedores as $p)
                <tr>
                    <td class="fw-bold">{{ $p->nombre_empresa }}</td>
                    <td>{{ $p->contacto_nombre }}</td>
                    <td>{{ $p->email }}</td>
                    <td class="text-center">
                        <a href="{{ route('proveedores.edit', $p->id) }}" class="btn-action btn-edit" title="Editar">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <form action="{{ route('proveedores.destroy', $p->id) }}" method="POST" style="display:inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn-action btn-delete" onclick="return confirm('¿Está seguro?')" title="Eliminar">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center py-4">
                        <p class="text-muted mb-0">No hay proveedores registrados. <a href="{{ route('proveedores.create') }}">Crear el primero</a></p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection