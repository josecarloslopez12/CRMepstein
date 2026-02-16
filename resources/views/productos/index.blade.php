@extends('layout')
@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Gestión de Productos</h1>
        <p class="page-subtitle">Control de inventario y precios</p>
    </div>
</div>

<div class="list-card">
    <div class="list-card-header">
        <h2 class="list-card-title"><i class="bi bi-box-seam-fill me-2"></i>Productos</h2>
        <a href="{{ route('productos.create') }}" class="btn-new">
            <i class="bi bi-plus-lg"></i>
            <span>Nuevo Producto</span>
        </a>
    </div>
    <div class="list-card-body">
        <table id="productos-table" class="table table-hover align-middle">
            <thead>
                <tr>
                    <th></th>
                    <th><i class="bi bi-box-fill me-2"></i>Producto</th>
                    <th><i class="bi bi-currency-dollar me-2"></i>Precio</th>
                    <th><i class="bi bi-stack me-2"></i>Stock</th>
                    <th class="text-center"><i class="bi bi-gear me-2"></i>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($productos as $p)
                <tr>
                    <td>@if($p->imagen_url)<img src="{{ $p->imagen_url }}" width="40" alt="">@endif</td>
                    <td class="fw-bold">{{ $p->nombre }}</td>
                    <td class="text-success fw-bold">${{ number_format($p->precio, 2) }}</td>
                    <td>
                        <span class="badge {{ $p->stock < 10 ? 'bg-danger' : 'bg-success' }} px-2 py-1">
                            {{ $p->stock }} unidades
                        </span>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('productos.edit', $p->id) }}" class="btn-action btn-edit" title="Editar">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        @if(auth()->user()->isAdmin())
                        <form action="{{ route('productos.destroy', $p->id) }}" method="POST" style="display:inline">
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
                        <p class="text-muted mb-0">No hay productos registrados. <a href="{{ route('productos.create') }}">Crear el primero</a></p>
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
    $('#productos-table').DataTable({
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