@extends('layout')
@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Gestión de Clientes</h1>
        <p class="page-subtitle">Administra tu cartera de clientes y contactos</p>
    </div>
</div>

<div class="list-card">
    <div class="list-card-header">
        <h2 class="list-card-title"><i class="bi bi-people-fill me-2"></i>Clientes</h2>
        <a href="{{ route('clientes.create') }}" class="btn-new">
            <i class="bi bi-plus-lg"></i>
            <span>Nuevo Cliente</span>
        </a>
    </div>
    <div class="list-card-body">
        <table class="table table-hover align-middle">
            <thead>
                <tr>
                    <th><i class="bi bi-person-fill me-2"></i>Nombre</th>
                    <th><i class="bi bi-envelope me-2"></i>Email</th>
                    <th><i class="bi bi-telephone me-2"></i>Teléfono</th>
                    <th class="text-center"><i class="bi bi-gear me-2"></i>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($clientes as $c)
                <tr>
                    <td class="fw-bold">{{ $c->nombre }}</td>
                    <td>{{ $c->email }}</td>
                    <td>{{ $c->telefono }}</td>
                    <td class="text-center">
                        <a href="{{ route('clientes.edit', $c->id) }}" class="btn-action btn-edit" title="Editar">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <form action="{{ route('clientes.destroy', $c->id) }}" method="POST" style="display:inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn-action btn-delete" onclick="return confirm('¿Está seguro de eliminar este cliente?')" title="Eliminar">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center py-4">
                        <p class="text-muted mb-0">No hay clientes registrados. <a href="{{ route('clientes.create') }}">Crear el primero</a></p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection