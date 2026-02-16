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
        <table id="proveedores-table" class="table table-hover align-middle">
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
                        @if(auth()->user()->isAdmin())
                        <form action="{{ route('proveedores.destroy', $p->id) }}" method="POST" style="display:inline">
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
                    <td colspan="4" class="text-center py-4">
                        <p class="text-muted mb-0">No hay proveedores registrados. <a href="{{ route('proveedores.create') }}">Crear el primero</a></p>
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
    $('#proveedores-table').DataTable({
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
        columnDefs: [{ orderable: false, targets: 3 }]
    });
});
</script>
@endpush

@endsection