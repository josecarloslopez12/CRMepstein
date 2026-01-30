@extends('layout')
@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Gestión de Categorías</h1>
        <p class="page-subtitle">Organiza tus productos por categorías</p>
    </div>
</div>

<div class="list-card">
    <div class="list-card-header">
        <h2 class="list-card-title"><i class="bi bi-tags-fill me-2"></i>Categorías</h2>
        <a href="{{ route('categorias.create') }}" class="btn-new">
            <i class="bi bi-plus-lg"></i>
            <span>Nueva Categoría</span>
        </a>
    </div>
    <div class="list-card-body">
        <table class="table table-hover align-middle">
            <thead>
                <tr>
                    <th><i class="bi bi-tag me-2"></i>Nombre</th>
                    <th><i class="bi bi-chat-left-text me-2"></i>Descripción</th>
                    <th class="text-center"><i class="bi bi-gear me-2"></i>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categorias as $c)
                <tr>
                    <td class="fw-bold">{{ $c->nombre }}</td>
                    <td class="text-muted">{{ $c->descripcion ?? 'Sin descripción' }}</td>
                    <td class="text-center">
                        <a href="{{ route('categorias.edit', $c->id) }}" class="btn-action btn-edit" title="Editar">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <form action="{{ route('categorias.destroy', $c->id) }}" method="POST" style="display:inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn-action btn-delete" onclick="return confirm('¿Está seguro?')" title="Eliminar">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center py-4">
                        <p class="text-muted mb-0">No hay categorías registradas. <a href="{{ route('categorias.create') }}">Crear la primera</a></p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection