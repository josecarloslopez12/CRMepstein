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
        <table id="categorias-table" class="table table-hover align-middle">
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
                        @if(auth()->user()->isAdmin())
                        <form action="{{ route('categorias.destroy', $c->id) }}" method="POST" style="display:inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn-action btn-delete" onclick="return confirm('¿Está seguro?')" title="Eliminar">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </form>
                        @endif
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

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endpush

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
$(function(){
    $('#categorias-table').DataTable({
        paging: true,
        info: true,
        searching: true,
        language: {
            paginate: { previous: '&laquo;', next: '&raquo;' },
            info: 'Mostrando _START_ a _END_ de _TOTAL_ resultados',
            infoEmpty: 'Mostrando 0 a 0 de 0 resultados',
            lengthMenu: 'Mostrar _MENU_ entradas',
            search: 'Buscar:'
        },
        columnDefs: [{ orderable: false, targets: 2 }]
    });
});
</script>
@endpush

@endsection