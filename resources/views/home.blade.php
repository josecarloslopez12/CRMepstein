@extends('layout')

@section('content')
<div class="container-fluid">
    <div class="dashboard-header mb-5">
        <div class="d-sm-flex align-items-center justify-content-between">
            <div>
                <h1 class="dashboard-title">Panel de Control</h1>
                <p class="dashboard-subtitle">Bienvenido al CRM epstein</p>
            </div>
        </div>
    </div>

    <div class="row g-4">
        
        <!-- Tarjeta Clientes -->
        <div class="col-xl-4 col-md-6">
            <div class="dashboard-card card-clientes">
                <div class="card-icon">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div class="card-content">
                    <h3 class="card-title">Clientes</h3>
                    <p class="card-subtitle">Gestión Comercial</p>
                    <p class="card-description">Administra tu cartera de clientes y contactos de manera eficiente.</p>
                    <a href="{{ route('clientes.index') }}" class="btn-card-primary">
                        <span>Ir a Clientes</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Tarjeta Productos -->
        <div class="col-xl-4 col-md-6">
            <div class="dashboard-card card-productos">
                <div class="card-icon">
                    <i class="bi bi-box-seam-fill"></i>
                </div>
                <div class="card-content">
                    <h3 class="card-title">Productos</h3>
                    <p class="card-subtitle">Inventario</p>
                    <p class="card-description">Control de stock, precios y disponibilidad de productos.</p>
                    <a href="{{ route('productos.index') }}" class="btn-card-primary">
                        <span>Ver Catálogo</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Tarjeta Proveedores -->
        <div class="col-xl-4 col-md-6">
            <div class="dashboard-card card-proveedores">
                <div class="card-icon">
                    <i class="bi bi-truck-front-fill"></i>
                </div>
                <div class="card-content">
                    <h3 class="card-title">Proveedores</h3>
                    <p class="card-subtitle">Logística</p>
                    <p class="card-description">Gestión de empresas suministradoras y relaciones comerciales.</p>
                    <a href="{{ route('proveedores.index') }}" class="btn-card-primary">
                        <span>Ver Proveedores</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Tarjeta Empleados -->
        <div class="col-xl-6 col-md-6">
            <div class="dashboard-card card-empleados">
                <div class="card-icon">
                    <i class="bi bi-person-badge-fill"></i>
                </div>
                <div class="card-content">
                    <h3 class="card-title">Empleados</h3>
                    <p class="card-subtitle">Recursos Humanos</p>
                    <p class="card-description">Administra la información y datos de tu equipo de trabajo.</p>
                    <a href="{{ route('empleados.index') }}" class="btn-card-primary">
                        <span>Gestionar Personal</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Tarjeta Categorías -->
        <div class="col-xl-6 col-md-6">
            <div class="dashboard-card card-categorias">
                <div class="card-icon">
                    <i class="bi bi-tags-fill"></i>
                </div>
                <div class="card-content">
                    <h3 class="card-title">Categorías</h3>
                    <p class="card-subtitle">Configuración</p>
                    <p class="card-description">Organiza tus productos en categorías para mejor gestión.</p>
                    <a href="{{ route('categorias.index') }}" class="btn-card-primary">
                        <span>Ver Categorías</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection