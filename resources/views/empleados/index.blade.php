@extends('layout')
@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Gestión de Empleados</h1>
        <p class="page-subtitle">Administra tu equipo de trabajo</p>
    </div>
</div>

<div class="list-card">
    <div class="list-card-header">
        <h2 class="list-card-title"><i class="bi bi-person-badge-fill me-2"></i>Empleados</h2>
        <a href="{{ route('empleados.create') }}" class="btn-new">
            <i class="bi bi-plus-lg"></i>
            <span>Contratar Empleado</span>
        </a>
    </div>
    <div class="list-card-body">
        <table id="empleados-table" class="table table-hover align-middle">
            <thead>
                <tr>
                    <th><i class="bi bi-person-fill me-2"></i>Nombre</th>
                    <th><i class="bi bi-briefcase me-2"></i>Puesto</th>
                    <th><i class="bi bi-cash-coin me-2"></i>Salario</th>
                    <th class="text-center"><i class="bi bi-gear me-2"></i>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($empleados as $e)
                <tr>
                    <td class="fw-bold">{{ $e->nombre }}</td>
                    <td>
                        <span class="badge px-2 py-1" style="background: linear-gradient(135deg, rgba(14, 165, 233, 0.3) 0%, rgba(14, 165, 233, 0.1) 100%); color: var(--accent-blue-light);">
                            {{ $e->puesto }}
                        </span>
                    </td>
                    <td class="text-success fw-bold">${{ number_format($e->salario, 2) }}</td>
                    <td class="text-center">
                        <a href="{{ route('empleados.edit', $e->id) }}" class="btn-action btn-edit" title="Editar">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        @if(auth()->user()->isAdmin())
                        <form action="{{ route('empleados.destroy', $e->id) }}" method="POST" style="display:inline">
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
                        <p class="text-muted mb-0">No hay empleados registrados. <a href="{{ route('empleados.create') }}">Contratar el primero</a></p>
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
    $('#empleados-table').DataTable({
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