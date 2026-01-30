<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM epstein</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div class="d-flex" id="wrapper">
        <div class="bg-dark" id="sidebar-wrapper">
            
            <div class="sidebar-brand text-center py-4">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="CRM epstein" class="sidebar-logo">
                </a>
            </div>
            <ul class="sidebar-nav">
                <li>
                    <a href="{{ route('home') }}" class="{{ Request::is('/') ? 'active' : '' }}">
                        <i class="bi bi-house-door-fill"></i> Inicio
                    </a>
                </li>
                
                <!-- Menú Gestión de Personas -->
                <li class="menu-group">
                    <a href="#" class="menu-toggle" data-bs-toggle="collapse" data-bs-target="#menuPersonas">
                        <i class="bi bi-people-fill"></i> Gestión de Personas
                        <i class="bi bi-chevron-down ms-auto menu-arrow"></i>
                    </a>
                    <ul class="collapse menu-submenu" id="menuPersonas">
                        <li><a href="{{ route('clientes.index') }}" class="{{ Request::is('clientes*') ? 'active' : '' }}"><i class="bi bi-person-check-fill"></i> Clientes</a></li>
                        <li><a href="{{ route('empleados.index') }}" class="{{ Request::is('empleados*') ? 'active' : '' }}"><i class="bi bi-person-badge-fill"></i> Empleados</a></li>
                    </ul>
                </li>

                <!-- Menú Inventario -->
                <li class="menu-group">
                    <a href="#" class="menu-toggle" data-bs-toggle="collapse" data-bs-target="#menuInventario">
                        <i class="bi bi-box-seam-fill"></i> Inventario
                        <i class="bi bi-chevron-down ms-auto menu-arrow"></i>
                    </a>
                    <ul class="collapse menu-submenu" id="menuInventario">
                        <li><a href="{{ route('productos.index') }}" class="{{ Request::is('productos*') ? 'active' : '' }}"><i class="bi bi-box-fill"></i> Productos</a></li>
                        <li><a href="{{ route('proveedores.index') }}" class="{{ Request::is('proveedores*') ? 'active' : '' }}"><i class="bi bi-truck-front-fill"></i> Proveedores</a></li>
                        <li><a href="{{ route('categorias.index') }}" class="{{ Request::is('categorias*') ? 'active' : '' }}"><i class="bi bi-tags-fill"></i> Categorías</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-light bg-white mb-4 shadow-sm rounded">
                <div class="container-fluid">
                    <span class="navbar-text ms-auto"><i class="bi bi-person-circle me-1"></i> {{ auth()->user()->name }}</span>
                </div>
            </nav>
            <div class="container-fluid px-4">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Auto-expandir menús si hay página activa dentro
        document.querySelectorAll('.menu-submenu .active').forEach(function(activeLink) {
            var submenu = activeLink.closest('.menu-submenu');
            if (submenu) {
                var collapseElement = new bootstrap.Collapse(submenu, { toggle: true });
            }
        });

        // Rotar flecha cuando se abre/cierra
        document.querySelectorAll('.menu-toggle').forEach(function(toggle) {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                var targetId = this.getAttribute('data-bs-target');
                var arrow = this.querySelector('.menu-arrow');
                var targetElement = document.querySelector(targetId);
                
                if (targetElement.classList.contains('show')) {
                    arrow.style.transform = 'rotate(0deg)';
                } else {
                    arrow.style.transform = 'rotate(180deg)';
                }
            });
        });

        // Inicializar flechas correctamente
        document.querySelectorAll('.menu-submenu.show').forEach(function(submenu) {
            var toggle = submenu.previousElementSibling;
            if (toggle) {
                var arrow = toggle.querySelector('.menu-arrow');
                if (arrow) {
                    arrow.style.transform = 'rotate(180deg)';
                }
            }
        });
    </script>
</body>
</html>